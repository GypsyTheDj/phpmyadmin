<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Export to Texy! text.
 *
 * @package phpMyAdmin-Export
 * @subpackage Texy
 */
if (! defined('PHPMYADMIN')) {
    exit;
}

/**
 *
 */
if (isset($plugin_list)) {
    $plugin_list['texytext'] = array(
        'text' => __('Texy! text'),
        'extension' => 'txt',
        'mime_type' => 'text/plain',
        'options' => array(
        /* what to dump (structure/data/both) */
        array('type' => 'begin_group', 'text' => __('Dump table'), 'name' => 'general_opts'),
        array('type' => 'radio', 'name' => 'structure_or_data', 'values' => array('structure' => __('structure'), 'data' => __('data'), 'structure_and_data' => __('structure and data'))),
        array('type' => 'end_group'),
        array('type' => 'begin_group', 'name' => 'data', 'text' => __('Data dump options'), 'force' => 'structure'),
        array('type' => 'text', 'name' => 'null', 'text' => __('Replace NULL by')),
        array('type' => 'bool', 'name' => 'columns', 'text' => __('Put columns names in the first row')),
        array('type' => 'end_group'),
        ),
        'options_text' => __('Options'),
        );
} else {

/**
 * Outputs export footer
 *
 * @return  bool        Whether it suceeded
 *
 * @access  public
 */
function PMA_exportFooter() {
    return true;
}

/**
 * Outputs export header
 *
 * @return  bool        Whether it suceeded
 *
 * @access  public
 */
function PMA_exportHeader() {
    return true;
}

/**
 * Outputs database header
 *
 * @param   string  $db Database name
 * @return  bool        Whether it suceeded
 *
 * @access  public
 */
function PMA_exportDBHeader($db) {
    return PMA_exportOutputHandler('===' . __('Database') . ' ' . $db . "\n\n");
}

/**
 * Outputs database footer
 *
 * @param   string  $db Database name
 * @return  bool        Whether it suceeded
 *
 * @access  public
 */
function PMA_exportDBFooter($db) {
    return true;
}

/**
 * Outputs CREATE DATABASE statement
 *
 * @param   string  $db Database name
 * @return  bool        Whether it suceeded
 *
 * @access  public
 */
function PMA_exportDBCreate($db) {
    return true;
}

/**
 * Outputs the content of a table in Texy format
 *
 * @param   string  $db         database name
 * @param   string  $table      table name
 * @param   string  $crlf       the end of line sequence
 * @param   string  $error_url  the url to go back in case of error
 * @param   string  $sql_query  SQL query for obtaining data
 * @return  bool        Whether it suceeded
 *
 * @access  public
 */
function PMA_exportData($db, $table, $crlf, $error_url, $sql_query)
{
    global $what;

    if (! PMA_exportOutputHandler('== ' . __('Dumping data for table') . ' ' . $table . "\n\n")) {
        return false;
    }

    // Gets the data from the database
    $result      = PMA_DBI_query($sql_query, null, PMA_DBI_QUERY_UNBUFFERED);
    $fields_cnt  = PMA_DBI_num_fields($result);

    // If required, get fields name at the first line
    if (isset($GLOBALS[$what . '_columns'])) {
        $text_output = "|------\n";
        for ($i = 0; $i < $fields_cnt; $i++) {
            $text_output .= '|' . htmlspecialchars(stripslashes(PMA_DBI_field_name($result, $i)));
        } // end for
        $text_output .= "\n|------\n";
        if (! PMA_exportOutputHandler($text_output)) {
            return false;
        }
    } // end if

    // Format the data
    while ($row = PMA_DBI_fetch_row($result)) {
        $text_output = '';
        for ($j = 0; $j < $fields_cnt; $j++) {
            if (! isset($row[$j]) || is_null($row[$j])) {
                $value = $GLOBALS[$what . '_null'];
            } elseif ($row[$j] == '0' || $row[$j] != '') {
                $value = $row[$j];
            } else {
                $value = ' ';
            }
            $text_output .= '|' . htmlspecialchars($value);
        } // end for
        $text_output .= "\n";
        if (! PMA_exportOutputHandler($text_output)) {
            return false;
        }
    } // end while
    PMA_DBI_free_result($result);

    return true;
}

/**
 * Outputs table's structure
 *
 * @param   string  $db           database name
 * @param   string  $table        table name
 * @param   string  $crlf         the end of line sequence
 * @param   string  $error_url    the url to go back in case of error
 * @param   bool    $do_relation  whether to include relation comments
 * @param   bool    $do_comments  whether to include the pmadb-style column comments
 *                                as comments in the structure; this is deprecated
 *                                but the parameter is left here because export.php
 *                                calls PMA_exportStructure() also for other export
 *                                types which use this parameter
 * @param   bool    $do_mime      whether to include mime comments
 * @param   bool    $dates        whether to include creation/update/check dates
 * @param   string  $export_mode  'create_table', 'triggers', 'create_view', 'stand_in'
 * @param   string  $export_type  'server', 'database', 'table'
 * @return  bool      Whether it suceeded
 *
 * @access  public
 */
function PMA_exportStructure($db, $table, $crlf, $error_url, $do_relation = false, $do_comments = false, $do_mime = false, $dates = false, $export_mode, $export_type)
{
    global $cfgRelation;

    if (! PMA_exportOutputHandler('== ' . __('Table structure for table') . ' ' .$table . "\n\n")) {
        return false;
    }

    /**
     * Get the unique keys in the table
     */
    $keys_query     = PMA_DBI_get_table_indexes_sql($db, $table);
    $keys_result    = PMA_DBI_query($keys_query);
    $unique_keys    = array();
    while ($key = PMA_DBI_fetch_assoc($keys_result)) {
        if ($key['Non_unique'] == 0) {
            $unique_keys[] = $key['Column_name'];
        }
    }
    PMA_DBI_free_result($keys_result);

    /**
     * Gets fields properties
     */
    PMA_DBI_select_db($db);
    $local_query = PMA_DBI_get_columns_sql($db, $table);
    $result      = PMA_DBI_query($local_query);
    $fields_cnt  = PMA_DBI_num_rows($result);

    // Check if we can use Relations
    if ($do_relation && ! empty($cfgRelation['relation'])) {
        // Find which tables are related with the current one and write it in
        // an array
        $res_rel = PMA_getForeigners($db, $table);

        if ($res_rel && count($res_rel) > 0) {
            $have_rel = true;
        } else {
            $have_rel = false;
        }
    } else {
           $have_rel = false;
    } // end if

    /**
     * Displays the table structure
     */

    $columns_cnt = 4;
    if ($do_relation && $have_rel) {
        $columns_cnt++;
    }
    if ($do_comments && $cfgRelation['commwork']) {
        $columns_cnt++;
    }
    if ($do_mime && $cfgRelation['mimework']) {
        $columns_cnt++;
    }

    $text_output = "|------\n";
    $text_output .= '|' . htmlspecialchars(__('Column'));
    $text_output .= '|' . htmlspecialchars(__('Type'));
    $text_output .= '|' . htmlspecialchars(__('Null'));
    $text_output .= '|' . htmlspecialchars(__('Default'));
    if ($do_relation && $have_rel) {
        $text_output .= '|' . htmlspecialchars(__('Links to'));
    }
    if ($do_comments) {
        $text_output .= '|' . htmlspecialchars(__('Comments'));
        $comments = PMA_getComments($db, $table);
    }
    if ($do_mime && $cfgRelation['mimework']) {
        $text_output .= '|' . htmlspecialchars('MIME');
        $mime_map = PMA_getMIME($db, $table, true);
    }
    $text_output .= "\n|------\n";

    if (! PMA_exportOutputHandler($text_output)) {
        return false;
    }

    while ($row = PMA_DBI_fetch_assoc($result)) {

        $text_output = '';
        $type             = $row['Type'];
        // reformat mysql query output
        // set or enum types: slashes single quotes inside options
        if (preg_match('/^(set|enum)\((.+)\)$/i', $type, $tmp)) {
            $tmp[2]       = substr(preg_replace('/([^,])\'\'/', '\\1\\\'', ',' . $tmp[2]), 1);
            $type         = $tmp[1] . '(' . str_replace(',', ', ', $tmp[2]) . ')';
            $type_nowrap  = '';

            $binary       = 0;
            $unsigned     = 0;
            $zerofill     = 0;
        } else {
            $type_nowrap  = ' nowrap="nowrap"';
            $type         = preg_replace('/BINARY/i', '', $type);
            $type         = preg_replace('/ZEROFILL/i', '', $type);
            $type         = preg_replace('/UNSIGNED/i', '', $type);
            if (empty($type)) {
                $type     = '&nbsp;';
            }

            $binary       = preg_match('/BINARY/i', $row['Type']);
            $unsigned     = preg_match('/UNSIGNED/i', $row['Type']);
            $zerofill     = preg_match('/ZEROFILL/i', $row['Type']);
        }
        $attribute     = '&nbsp;';
        if ($binary) {
            $attribute = 'BINARY';
        }
        if ($unsigned) {
            $attribute = 'UNSIGNED';
        }
        if ($zerofill) {
            $attribute = 'UNSIGNED ZEROFILL';
        }
        if (! isset($row['Default'])) {
            if ($row['Null'] != 'NO') {
                $row['Default'] = 'NULL';
            }
        } else {
            $row['Default'] = $row['Default'];
        }

        $fmt_pre = '';
        $fmt_post = '';
        if (in_array($row['Field'], $unique_keys)) {
            $fmt_pre = '**' . $fmt_pre;
            $fmt_post = $fmt_post . '**';
        }
        if ($row['Key']=='PRI') {
            $fmt_pre = '//' . $fmt_pre;
            $fmt_post = $fmt_post . '//';
        }
        $text_output .= '|' . $fmt_pre . htmlspecialchars($row['Field']) . $fmt_post;
        $text_output .= '|' . htmlspecialchars($type);
        $text_output .= '|' . htmlspecialchars(($row['Null'] == '' || $row['Null'] == 'NO') ? __('No') : __('Yes'));
        $text_output .= '|' . htmlspecialchars(isset($row['Default']) ? $row['Default'] : '');

        $field_name = $row['Field'];

        if ($do_relation && $have_rel) {
            $text_output .= '|' . (isset($res_rel[$field_name]) ? htmlspecialchars($res_rel[$field_name]['foreign_table'] . ' (' . $res_rel[$field_name]['foreign_field'] . ')') : '');
        }
        if ($do_comments && $cfgRelation['commwork']) {
            $text_output .= '|' . (isset($comments[$field_name]) ? htmlspecialchars($comments[$field_name]) : '');
        }
        if ($do_mime && $cfgRelation['mimework']) {
            $text_output .= '|' . (isset($mime_map[$field_name]) ? htmlspecialchars(str_replace('_', '/', $mime_map[$field_name]['mimetype'])) : '');
        }

        $text_output .= "\n";

        if (! PMA_exportOutputHandler($text_output)) {
            return false;
        }
    } // end while
    PMA_DBI_free_result($result);

    return true;
}

}
?>
