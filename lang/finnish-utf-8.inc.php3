<?php
/* $Id$ */

/*
 * Finnish language file by Visa Kopu, visa@visakopu.net
 */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Tera, Peta, Exa
$byteUnits = array('tavua', 'kt', 'Mt', 'Gt');

$day_of_week = array('Su', 'Ma', 'Ti', 'Ke', 'To', 'Pe', 'La');
$month = array('Tammi', 'Helmi', 'Maalis', 'Huhti', 'Touko', 'Kesä', 'Heinä', 'Elo', 'Syys', 'Loka', 'Marras', 'Joulu');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d.%m.%Y klo %H:%M';


$strAccessDenied = 'Pääsy kielletty';
$strAction = 'Toiminto';
$strAddDeleteColumn = 'Lisää/poista sarakkeita';
$strAddDeleteRow = 'Lisää/poista hakuehtoja';
$strAddNewField = 'Lisää sarake';
$strAddPriv = 'Lisää käyttöoikeus';
$strAddPrivMessage = 'Olet lisännyt uuden käyttöoikeuden.';
$strAddSearchConditions = 'Lisää hakuehtoja ("where"-lauseen sisältö):';
$strAddToIndex = 'Lisää indeksi &nbsp;%s&nbsp;sarakkeisiin';
$strAddUser = 'Lisää uusi käyttäjä';
$strAddUserMessage = 'Olet lisännyt uuden käyttäjän.';
$strAffectedRows = 'Rivejä:';
$strAfter = 'Jälkeen sarakkeen %s';
$strAfterInsertBack = 'Takaisin';
$strAfterInsertNewInsert = 'Lisää uusi rivi';
$strAll = 'Kaikki';
$strAlterOrderBy = 'Järjestä taulu';
$strAnalyzeTable = 'Analysoi taulu';
$strAnd = 'Ja';
$strAnIndex = 'Sarakkeelle %s on lisätty indeksi';
$strAny = 'Mikä tahansa';
$strAnyColumn = 'Mikä tahansa sarake';
$strAnyDatabase = 'Mikä tahansa tietokanta';
$strAnyHost = 'Mikä tahansa palvelin';
$strAnyTable = 'Mikä tahansa taulu';
$strAnyUser = 'Mikä tahansa käyttäjä';
$strAPrimaryKey = 'Sarakkeelle %s on lisätty ensisijainen avain';
$strAscending = 'Nouseva';
$strAtBeginningOfTable = 'Taulun alkuun';
$strAtEndOfTable = 'Taulun loppuun';
$strAttr = 'Attribuutit';

$strBack = 'Takaisin';
$strBinary = 'Binääridata';
$strBinaryDoNotEdit = 'Binääridataa - älä muokkaa';
$strBookmarkDeleted = 'Tallennettu SQL-lause on poistettu.';
$strBookmarkLabel = 'Tunniste';
$strBookmarkQuery = 'Tallennettu SQL-lause';
$strBookmarkThis = 'Tallenna SQL-lause';
$strBookmarkView = 'Näytä';
$strBrowse = 'Selaa';
$strBzip = '"bzip-pakattu"';

$strCantLoadRecodeIconv = 'Merkist&ouml;n konvertointiin tarvittavaa iconv- tai recode-laajennusta ei voitu ladata. Muokkaa PHP:n asetuksia ja salli n&auml;iden laajennusten k&auml;ytt&ouml; tai muuta phpMyAdminin asetuksia niin ettei konvertointia suoriteta.';
$strCantLoadMySQL = 'MySQL-laajennusta ei voitu ladata,<br />tarkista PHP:n asetukset.';
$strCantUseRecodeIconv = 'iconv-, libiconv- tai recode_string-funktioita ei voitu k&auml;ytt&auml;&auml;. Tarkista PHP:n asetukset.';
$strCantRenameIdxToPrimary = 'Indeksiä ei voi muuttaa PRIMARY-nimiseksi!';
$strCardinality = 'Kardinaliteetti';
$strCarriage = 'CR-rivinvaihto: \\r';
$strChange = 'Muokkaa';
$strChangeDisplay = 'Valitse n&auml;ytett&auml;v&auml; sarake';
$strChangePassword = 'Vaihda salasanaa';
$strCheckAll = 'Valitse kaikki';
$strCheckDbPriv = 'Tarkista tietokannan käyttöoikeudet';
$strCheckTable = 'Tarkista taulu';
$strChoosePage = 'Valitse muokattava sivu';
$strColumn = 'Sarake';
$strColumnNames = 'Sarakkeiden nimet';
$strComments = 'Kommentit';
$strCompleteInserts = 'Täydelliset insert-lauseet';
$strConfigFileError = 'phpMyAdmin ei pysty lukemaan asetustiedostoa.<br />T&auml;m&auml; saattaa johtua virheest&auml;, jonka PHP l&ouml;ysi tiedostosta tai tiedoston puuttumisesta.<br />Voit avata tiedoston allaolevasta linkist&auml; ja lukea mahdolliset PHP-virheilmoituikset. Todenn&auml;k&ouml;isimmin joltain rivilt&auml; puuttuu lainausmerkki tai puolipiste.<br />Jos linkist&auml; avautuva sivu on tyhj&auml;, asetustiedostosta ei l&ouml;ytynyt virhett&auml;.';
$strConfigureTableCoord = 'M&auml;&auml;rittele koordinaatit taululle %s';
$strConfirm = 'Oletko varma, että haluat tehdä tämän?';
$strCookiesRequired = 'Selaimessa pitää olla cookietuki päällä tästä eteenpäin.';
$strCopyTable = 'Kopioi taulu (tietokanta<b>.</b>taulu):';
$strCopyTableOK = 'Taulu %s on kopioitu nimelle %s.';
$strCreate = 'Luo';
$strCreateIndex = 'Luo sarakkeista indeksi';
$strCreateIndexTopic = 'Luo uusi indeksi';
$strCreateNewDatabase = 'Luo uusi tietokanta';
$strCreateNewTable = 'Luo uusi taulu tietokantaan %s';
$strCreatePage = 'Luo uusi sivu';
$strCriteria = 'Hakuehdot';

$strData = 'Data';
$strDatabase = 'Tietokanta ';
$strDatabases = 'tietokantaa';
$strDatabaseHasBeenDropped = 'Tietokanta %s on pudotettu.';
$strDatabasesStats = 'Tietokantastatistiikka';
$strDatabaseWildcard = 'Tietokanta (voit käyttää jokerimerkkejä):';
$strDataOnly = 'Vain data';
$strDefault = 'Oletusarvo';
$strDelete = 'Poista';
$strDeleted = 'Rivi on poistettu';
$strDeletedRows = 'Poistetut rivit:';
$strDeleteFailed = 'Poistaminen epäonnistui!';
$strDeleteUserMessage = 'Käyttäjä %s on poistettu.';
$strDescending = 'Laskeva';
$strDisplay = 'Näytä';
$strDisplayOrder = 'Lajittelujärjestys:';
$strDisplayPDF = 'N&auml;yt&auml; PDF-kaavio';
$strDoAQuery = 'Suorita "esimerkin mukainen haku" (jokerimerkki: "%")';
$strDocu = 'Ohjeet';
$strDoYouReally = 'Oletko varma että haluat ';
$strDrop = 'Pudota';
$strDropDB = 'Pudota tietokanta %s';
$strDropTable = 'Pudota taulu';
$strDumpingData = 'Vedostan dataa taulusta';
$strDumpXRows = 'Tee vedos %s rivist&auml;, alkaen rivist&auml; %s.';
$strDynamic = 'dynaaminen';

$strEdit = 'Muokkaa';
$strEditPDFPages = 'Muokkaa PDF-sivuja';
$strEditPrivileges = 'Muokkaa käyttöoikeuksia';
$strEffective = 'Varsinainen';
$strEmpty = 'Tyhjennä';
$strEmptyResultSet = 'MySQL palautti tyhjän vastauksen (ts. nolla riviä).';
$strEnd = 'Loppu';
$strEnglishPrivileges = ' Huom. MySQL-käyttöoikeuksien nimet ovat englanniksi ';
$strError = 'Virhe';
$strExplain = 'Kerro SQL-lauseesta (EXPLAIN)';
$strExport = 'Tulosta tiedostoksi/ruudulle';
$strExportToXML = 'Rakenne ja data XML-muodossa';
$strExtendedInserts = 'Yhteinen insert-lause';
$strExtra = 'Lisätiedot';

$strField = 'Sarake';
$strFieldHasBeenDropped = 'Sarake %s on pudotettu';
$strFields = 'Sarakkeet';
$strFieldsEmpty = ' Sarakkeiden lukumäärä on nolla! ';
$strFieldsEnclosedBy = 'Sarakkeiden ympäröintimerkki';
$strFieldsEscapedBy = 'Koodinvaihtomerkki (escape)';
$strFieldsTerminatedBy = 'Sarakkeiden erotinmerkki';
$strFixed = 'kiinteä';
$strFlushTable = 'Tyhjennä taulun välimuisti ("FLUSH")';
$strFormat = 'Muoto';
$strFormEmpty = 'Tarvittava tieto puuttuu lomakkeesta!';
$strFullText = 'Koko tekstit';
$strFunction = 'Funktio';

$strGenBy = 'Generoinut:';
$strGenTime = 'Luontiaika';
$strGo = 'Suorita';
$strGrants = 'Luvat';
$strGzip = '"gzip-pakattu"';

$strHasBeenAltered = 'on muutettu.';
$strHasBeenCreated = 'on luotu.';
$strHaveToShow = 'Valitse vähintään yksi sarake';
$strHome = 'Etusivu';
$strHomepageOfficial = 'phpMyAdminin viralliset sivut';
$strHomepageSourceforge = 'phpMyAdminin sivut SourceForge-palvelussa';
$strHost = 'Palvelin';
$strHostEmpty = 'Palvelimen nimi puuttuu!';

$strIdxFulltext = 'Koko teksti';
$strIfYouWish = 'Jos haluat hakea vain osan taulun sarakkeista, syötä pilkuilla erotettu lista sarakkeiden nimistä.';
$strIgnore = 'Jätä huomiotta';
$strIndex = 'Indeksi';
$strIndexHasBeenDropped = 'Indeksi %s on pudotettu';
$strIndexes = 'Indeksit';
$strIndexName = 'Indeksin nimi:';
$strIndexType = 'Indeksin tyyppi:';
$strInsert = 'Lisää rivi';
$strInsertAsNewRow = 'Lisää uutena rivinä';
$strInsertedRows = 'Lisätyt rivit:';
$strInsertNewRow = 'Lisää uusi rivi';
$strInsertTextfiles = 'Syötä tekstitiedosto tauluun';
$strInstructions = 'komentoa';
$strInUse = 'käytössä';
$strInvalidName = '"%s" on varattu sana eikä sitä voi käyttää tietokannan, taulun tai sarakkeen nimenä.';

$strKeepPass = 'Älä vaihda salasanaa';
$strKeyname = 'Avaimen nimi';
$strKill = 'Tapa';

$strLength = 'Pituus';
$strLengthSet = 'Pituus/Arvot*';
$strLimitNumRows = 'Rivejä/sivu';
$strLineFeed = 'LF-rivinvaihto: \\n';
$strLines = 'Rivit';
$strLinesTerminatedBy = 'Rivien erotinmerkki';
$strLinkNotFound = 'Linkki&auml; ei l&ouml;ydy';
$strLinksTo = 'Linkitys sarakkeeseen:';
$strLocationTextfile = 'Tiedoston sijainti';
$strLogin = 'Kirjaudu sisään';
$strLogout = 'Poistu';
$strLogPassword = 'Salasana:';
$strLogUsername = 'Käyttäjätunnus:';

$strMissingBracket = 'Hakasulku puuttuu';
$strModifications = 'Muutokset tallennettu';
$strModify = 'Muokkaa';
$strModifyIndexTopic = 'Muokkaa indeksiä';
$strMoveTable = 'Siirrä taulu (tietokanta<b>.</b>taulu):';
$strMoveTableOK = 'Taulu %s on siirretty %s.';
$strMySQLCharset = 'MySQL:n merkist&ouml;';
$strMySQLReloaded = 'MySQL uudelleenladattu.';
$strMySQLSaid = 'MySQL ilmoittaa: ';
$strMySQLServerProcess = 'MySQL %pma_s1% palvelimella %pma_s2% käyttäjänä %pma_s3%';
$strMySQLShowProcess = 'Näytä prosessit';
$strMySQLShowStatus = 'Näytä MySQL:n ajonaikaiset tiedot';
$strMySQLShowVars = 'Näytä MySQL:n järjestelmämuuttujat';

$strName = 'Nimi';
$strNext = 'Seuraava';
$strNo = 'Ei';
$strNoDatabases = 'Ei tietokantoja';
$strNoDescription = 'ei selityst&auml;';
$strNoDropDatabases = '"DROP DATABASE"-lauseiden käyttö on estetty.';
$strNoFrames = 'phpMyAdmin toimii parhaiten <b>kehyksiä</b> tukevalla selaimella.';
$strNoIndex = 'Indeksiä ei ole määritelty!';
$strNoIndexPartsDefined = 'Indeksin osia ei ole määritelty!';
$strNoModification = 'Ei muutoksia';
$strNone = 'Ei mitään';
$strNoPassword = 'Ei salasanaa';
$strNoPhp = 'Piilota PHP-koodi';
$strNoPrivileges = 'Ei käyttöoikeuksia';
$strNoRights = 'Sinulla ei ole tarpeeksi oikeuksia!';
$strNoQuery = 'Ei SQL lausetta!';
$strNoTablesFound = 'Tietokannasta ei löytynyt yhtään taulua.';
$strNotNumber = 'Tämä ei ole numero!';
$strNotSet = '<b>%s</b>-taulua ei l&ouml;ytynyt tai sit&auml; ei ole m&auml;&auml;ritelty %s-tiedostossa';
$strNotValidNumber = ' ei ole hyväksyttävä rivin numero!';
$strNoUsersFound = 'Käyttäjiä ei löytynyt.';
$strNull = 'Tyhjä';
$strNumSearchResultsInTable = '%s hakutulosta taulussa <i>%s</i>';
$strNumSearchResultsTotal = '<b>Yhteens&auml;:</b> <i>%s</i> hakutulosta';

$strOftenQuotation = 'Yleensä lainausmerkki. "Valinnaisesti" tarkoittaa, että vain char- ja varchar-tyyppiset sarakkeet ympäröidään annetulla ympäröintimerkillä.';
$strOperations = 'Toiminnot';
$strOptimizeTable = 'Optimoi taulu';
$strOptionalControls = 'Valinnainen. Ohjaa erikoismerkkien lukua ja kirjoitusta.';
$strOptionally = 'Valinnaisesti';
$strOptions = 'Lis&auml;valinnat';
$strOr = 'Tai';
$strOverhead = 'Käyttämätön';

$strPageNumber = 'Sivunnumero:';
$strPartialText = 'Osittaiset tekstit';
$strPassword = 'Salasana';
$strPasswordEmpty = 'Salasana puuttuu!';
$strPasswordNotSame = 'Salasanat eivät ole samat!';
$strPdfDbSchema = 'Kaavio tietokannasta "%s" - Sivu %s';
$strPdfInvalidPageNum = 'PDF:n sivunumeroa ei ole m&auml;&auml;ritelty!';
$strPdfInvalidTblName = 'Taulua "%s" ei l&ouml;ydy!';
$strPhp = 'N&auml;yt&auml; PHP-koodi';
$strPHPVersion = 'PHP:n versio';
$strPmaDocumentation = 'phpMyAdminin dokumentaatio';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> täytyy määritellä asetustiedostossa!';
$strPos1 = 'Alku';
$strPrevious = 'Edellinen';
$strPrimary = 'Ensisijainen';
$strPrimaryKey = 'Ensisijainen avain';
$strPrimaryKeyHasBeenDropped = 'Ensisijainen avain on pudotettu';
$strPrimaryKeyName = 'Ensisijaisen avaimen nimenä pitää olla PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" saa olla <b>vai n ja ainoastaan</b>ensisijaisen avaimen nimenä!)';
$strPrintView = 'Tulostusversio';
$strPrivileges = 'Käyttöoikeudet';
$strProperties = 'Asetukset';

$strQBE = 'Esimerkin mukainen haku';
$strQBEDel = 'Poista';
$strQBEIns = 'Lisää';
$strQueryOnDb = 'Suorita SQL-lause tietokannassa <b>%s</b>:';

$strRecords = 'riviä';
$strReferentialIntegrity = 'Tarkista viitteiden eheys:';
$strRelationView = 'Relaation&auml;kym&auml;';
$strReloadFailed = 'MySQL:n uudelleenlataus epäonnistui.';
$strReloadMySQL = 'Lataa MySQL uudelleen';
$strRememberReload = 'Muista käynnistää palvelin uudestaan.';
$strRenameTable = 'Nimeä taulu uudelleen';
$strRenameTableOK = 'Taulun %s nimi on nyt %s';
$strRepairTable = 'Korjaa taulu';
$strReplace = 'Korvaa';
$strReplaceTable = 'Korvaa taulun nykyiset rivit tiedostolla';
$strReset = 'Tyhjennä';
$strReType = 'Kirjoita uudelleen';
$strRevoke = 'Mitätöi';
$strRevokeGrant = 'Mitätöi lupa';
$strRevokeGrantMessage = 'Olet peruuttanut käyttäjän %s GRANT-oikeuden';
$strRevokeMessage = 'Olet peruuttanut käyttäjän %s käyttöoikeudet';
$strRevokePriv = 'Mitätöi käyttöoikeudet';
$strRowLength = 'Rivin pituus';
$strRows = 'riviä';
$strRowsFrom = 'riviä alkaen rivistä';
$strRowSize = ' Rivin koko ';
$strRowsModeVertical= 'pystysuora';
$strRowsModeHorizontal= 'vaakasuora';
$strRowsModeOptions= '%ssti, otsikoita toistetaan %s:n rivin välein';
$strRowsStatistic = 'Rivistatistiikka';
$strRunning = 'palvelimella %s';
$strRunQuery = 'Suorita';
$strRunSQLQuery = 'Suorita SQL-lauseita tietokannassa %s';

$strSave = 'Tallenna';
$strScaleFactorSmall = 'Kaavio ei mahdu yhdelle sivulle t&auml;ll&auml; skaalauksella';
$strSearch = 'Hae';
$strSearchFormTitle = 'Hae tietokannassa';
$strSearchInTables = 'Tauluista:';
$strSearchNeedle = 'Haettavat sanat tai arvot (%-merkki&auml; voi k&auml;ytt&auml;&auml; jokerimerkkin&auml;):';
$strSearchOption1 = 'v&auml;hint&auml;&auml;n yksi sanoista';
$strSearchOption2 = 'kaikki sanat';
$strSearchOption3 = 'koko lause';
$strSearchOption4 = 'regexp-haku';
$strSearchResultsFor = 'Tulokset hakusanalla "<i>%s</i>" %s:';
$strSearchType = 'Hae:';
$strSelect = 'Hae';
$strSelectADb = 'Valitse tietokanta';
$strSelectAll = 'Valitse kaikki';
$strSelectFields = 'Valitse sarakkeet (vähintään yksi):';
$strSelectNumRows = 'lauseessa';
$strSelectTables = 'Valitse taulut';
$strSend = 'Tallenna tiedostoksi';
$strServerChoice = 'Valitse palvelin';
$strServerVersion = 'Palvelimen versio';
$strSetEnumVal = 'Jos sarakkeen tietotyyppi on "enum" tai "set", syötä vaaditut arvot tässä muodossa: \'a\',\'b\',\'c\'...<br />Jos tarvitset arvoissa kenoviivaa ("\") tai heittomerkkiä ("\'"), laita merkin eteen kenoviiva (esim. \'\\\\xyz\' tai \'a\\\'b\').';
$strShow = 'Näytä';
$strShowAll = 'Näytä kaikki';
$strShowColor = 'N&auml;yt&auml; v&auml;rit';
$strShowCols = 'Näytä sarakkeet';
$strShowGrid = 'N&auml;yt&auml; ruudukko';
$strShowingRecords = 'Näkyvillä rivit ';
$strShowTableDimension = 'N&auml;yt&auml; taulujen ulottuvuus';
$strShowPHPInfo = 'Näytä tietoja PHP:n asetuksista';
$strShowTables = 'Näytä taulut';
$strShowThisQuery = ' Näytä lause uudelleen ';
$strSingly = '(yksitellen)';
$strSize = 'Koko';
$strSort = 'Järjestys';
$strSpaceUsage = 'Levytilan käyttö';
$strSplitWordsWithSpace = 'Sanat erotellaan v&auml;lily&ouml;nnill&auml;.';
$strSQL = 'SQL';
$strSQLQuery = 'SQL-lause';
$strSQLResult = 'SQL-lauseen tulos';
$strStatement = 'Tieto';
$strStrucCSV = 'CSV-muotoinen data';
$strStrucData = 'Rakenne ja data';
$strStrucDrop = 'Lisää \'DROP TABLE\'-rivit';
$strStrucExcelCSV = 'CSV-muoto MS Exceliä varten';
$strStrucOnly = 'Vain rakenne';
$strStructPropose = 'Ehdota taulun rakennetta';
$strStructure = 'Rakenne';
$strSubmit = 'Lähetä';
$strSuccess = 'SQL-lause on suoritettu';
$strSum = 'Summa';

$strTable = 'taulu ';
$strTableComments = 'Kommentoi taulua';
$strTableEmpty = 'Taulun nimi puuttuu!';
$strTableHasBeenDropped = 'Taulu %s on pudotettu';
$strTableHasBeenEmptied = 'Taulu %s on tyhjennetty';
$strTableHasBeenFlushed = 'Taulun %s välimuisti on tyhjennetty';
$strTableMaintenance = 'Taulun huolto';
$strTables = '%s taulu(a)';
$strTableStructure = 'Rakenne taululle';
$strTableType = 'Taulun muoto';
$strTextAreaLength = ' Pituudestaan johtuen<br /> tätä saraketta ei ehkä voi muokata ';
$strTheContent = 'Tiedoston sisältö on syötetty.';
$strTheContents = 'Tiedoston sisältö korvaa valitusta taulusta ne rivit, joissa on sama ensisijainen (primary) tai yksikäsitteinen (unique) avain kuin tiedoston riveissä.';
$strTheTerminator = 'Sarakkeiden erotin.';
$strTotal = 'yhteensä';
$strType = 'Tyyppi';

$strUncheckAll = 'Poista valinta kaikista';
$strUnique = 'Uniikki';
$strUnselectAll = 'Poista valinta kaikista';
$strUpdatePrivMessage = 'Käyttäjän %s käyttöoikeudet on päivitetty.';
$strUpdateProfile = 'Päivitä profiili:';
$strUpdateProfileMessage = 'Profiili on päivitetty.';
$strUpdateQuery = 'Päivitä lause';
$strUsage = 'Tila';
$strUseBackquotes = 'Laita taulujen ja sarakkeiden nimet lainausmerkkeihin';
$strUser = 'Käyttäjä';
$strUserEmpty = 'Käyttäjän nimi puuttuu!';
$strUserName = 'Käyttäjänimi';
$strUsers = 'Käyttäjät';
$strUseTables = 'Käytä tauluja';

$strValue = 'Arvo';
$strViewDump = 'Tee vedos (dump) taulusta';
$strViewDumpDB = 'Tee vedos (dump) tietokannasta';

$strWelcome = 'Tervetuloa, toivottaa %s';
$strWithChecked = 'Valitut:';
$strWrongUser = 'Väärä käyttäjätunnus tai salasana. Pääsy kielletty.';

$strYes = 'Kyllä';

$strZip = '"zip-pakattu"';

$strRelationNotWorking = 'The additional Features for working with linked Tables have been deactivated. To find out why click %shere%s.';  //to translate
$strAllTableSameWidth = 'display all Tables with same width?';  //to translate
$strPdfNoTables = 'No tables';  //to translate
$strGeneralRelationFeat = 'Genereal Relation Features';  //to translate
$strDisplayFeat = 'Display Features';  //to translate
$strCreatePdfFeat = 'Creation of PDFs';  //to translate
$strColComFeat = 'Displaying Column Comments';  //to translate
$strDisabled = 'Disabled';  //to translate
$strEnabled = 'Enabled';  //to translate
?>
