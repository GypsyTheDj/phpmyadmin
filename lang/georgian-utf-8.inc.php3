<?php
/* $Id$ */

/**
 * Translation by Kakha Mchedlidze <kakha at qartuli.com>
 *
 * It requires some special Unicode font faces that can downloaded at
 * http://www.main.osgf.ge/eng/dounen.htm
 * http://www.osgf.ge/resources/fonts/sylfaen.zip
 */

$charset = "utf-8";
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$left_font_family = "Sylfaen";
$right_font_family = "Sylfaen";
$number_thousands_separator = " ";
$number_decimal_separator = ",";
// shortcuts for Byte, Kilo, Mega, Tera, Peta, Exa
$byteUnits = array("ბაიტი", "KB", "MB", "GB");

$day_of_week = array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%B %d, %Y at %I:%M %p';

$strAPrimaryKey = 'პირველადი გასაღები დამატებულია ველზე %s';
$strAccessDenied = 'აკრძალულია';
$strAction = 'მოქმედება';
$strAddDeleteColumn = 'დაამატე/წაშალე სვეტის ველები';
$strAddDeleteRow = 'დაამატე/წაშალე სტრიქონის კრიტერია';
$strAddNewField = 'ახალი ველის დამატება.';
$strAddPriv = 'ახალი პრივილეგიის დამატება.';
$strAddPrivMessage = 'თქვენ დაამატეთ ახალი პრივილეგია.';
$strAddSearchConditions = 'ძებნის პარამეტრების დამატება ("where" ნაწილის ტანი):';
$strAddToIndex = '&nbsp;%s&nbsp;ამ ინდექსში სვეტის(სვეტების) დამატება';
$strAddUser = 'ახალი მომხმარებლის დამატება.';
$strAddUserMessage = 'თქვენ დაამატეთ ახალი მომხმარებელი.';
$strAffectedRows = 'გააქტიურებული რიგები:';
$strAfter = '%s შემდეგ';
$strAfterInsertBack = 'წინა გვერდზე დაბრუნება';
$strAfterInsertNewInsert = 'ახალი სვეტის ჩამატება';
$strAll = 'ყველა';
$strAlterOrderBy = 'შეცვლილი ცხრილი სორტირებული';
$strAnIndex = 'ინდექსი დამატებულია ველზე %s';
$strAnalyzeTable = 'ცხრილის ანალიზი';
$strAnd = 'და';
$strAny = 'ნებისმიერი.';
$strAnyColumn = 'ნებისმიერი სვეტი';
$strAnyDatabase = 'ნებისმიერი მონაცემთა ბაზა';
$strAnyHost = 'ნებისმიერი ჰოსტი';
$strAnyTable = 'ნებისმიერი ცხრილი';
$strAnyUser = 'ნებისმიერი მომხმარებელი';
$strAscending = 'ამომავალი';
$strAtBeginningOfTable = 'ცხრილის დასაწყისში';
$strAtEndOfTable = 'ცხრილის დასასრულში';
$strAttr = 'ატრიბუტები';
$strBack = 'უკან';
$strBinary = 'ბინარული';
$strBinaryDoNotEdit = 'ბინარული - არ რედაქტირდება';
$strBookmarkDeleted = 'სანიშნი წაიშალა.';
$strBookmarkLabel = 'ჭდე';
$strBookmarkQuery = 'SQL-შეკითხვის(მოთხოვნის) სანიშნი';
$strBookmarkThis = 'მოცემული SQL-შეკითხვის(მოთხოვნის) სანიშნი';
$strBookmarkView = 'მხოლოდ დათვალიერება';
$strBrowse = 'ნახვა';
$strBzip = '"bzip შეკუმშვა"';
$strCantLoadMySQL = 'MySQL გაფართოება არ ჩაიტვირტა,<br />გთხოვთ შეამოწმეთ PHP კონფიგურაცია.';
$strCantLoadRecodeIconv = 'ვერ ჩაიტვირთა iconv,რაც საჭიროა charset-ის ასამუშავებლად, შეცვალეთ php-ს კონფიგურირება თუ გინდათ ამ ფუნქციის გამოყენება, ან გამორთეთ charset ფუნქცია phpMyAdmin-ში';
$strCantRenameIdxToPrimary = 'PRIMARY-ში ინდექსის სახელის შეცვლა შეუძლებელია!';
$strCantUseRecodeIconv = 'iconv-ს ან libiconv-ს და recode_string-ს ვერ იყენებს, მაშინ როდესაც ფუნქცია ჩატვირთულია. შეამოწმეთ php კონფიგურაცია.';
$strCardinality = 'ელემენტების რაოდენობა';
$strCarriage = 'კურსორის გადატანა: \\r';
$strChange = 'შეცვლა';
$strChangeDisplay = 'აირჩიეთ მონაცემი გვერდზე გამოსაჩენად';
$strChangePassword = 'შეცვალე პაროლი';
$strCheckAll = 'მონიშნე ყველა';
$strCheckDbPriv = 'შეამოწმეთ მონაცემთა ბაზის პრივილეგიები';
$strCheckTable = 'ცხრილის შემოწმება';
$strChoosePage = 'აირჩიეთ გვერდი რედაქტირებისთვის';
$strColumn = 'სვეტი';
$strColumnNames = 'სვეტის სახელები';
$strComments = 'კომენტარი';
$strCompleteInserts = 'სრულყოფილი ჩამატება';
$strConfigFileError = 'phpMyAdmin-მა ვერ შეძლო კონფიგურაციის ფაილის წაკითხვა!<br/>ეს მაშინ ხდება თუ php-მ იპოვა parse შეცდომა, ან php-მ ვერ იპოვა ფაილი.<br />გამოიძახეთ კონფიგურაციის ფაილი და ქვევით ჩამოწერილი შეცდომები გაასწორეთ. უმეტეს შემთხვევაში წერტილ-მძიმე აკლია ხოლმე.<br />თუ ცარიელი გვერდი ჩამოიტვირთა, ესეიგი ყველაფერი რიგზეა.';
$strConfigureTableCoord = 'საჭიროა %s ცხრილის კოორდინატების კონფიგურირება'; 
$strConfirm = 'თქვენ დარწმუნებული ხართ რომ გინდათ ამის გაკეთება?';
$strCookiesRequired = 'ამ ადგილის შემდეგ Cookies უნდა ჩართოთ.';
$strCopyTable = 'ცხრილის კოპირება (ბაზა<b>.</b>ცხრილი):';
$strCopyTableOK = 'ცხრილი %s კოპირებულია %s ცხრილში.';
$strCreate = 'შექმნა';
$strCreateIndex = '&nbsp;%s&nbsp;ინდექსის შექმნა სვეტებზე';
$strCreateIndexTopic = 'ახალი ინდექსის შექმნა';
$strCreateNewDatabase = 'ახალი მონაცემთა ბაზის შექმნა';
$strCreateNewTable = 'მონაცემთა ბაზაში ახალი ცხრილის შექმნა %s';
$strCreatePage = 'შექმენი ახალი გვერდი';
$strCriteria = 'კრიტერია';
$strData = 'მონაცემები';
$strDataOnly = 'მხოლოდ მონაცემები';
$strDatabase = 'მონაცემთა ბაზა ';
$strDatabaseHasBeenDropped = 'მონაცემთა ბაზა %s წაიშალა.';
$strDatabaseWildcard = 'მონაცემთა ბაზა (wildcards allowed):';
$strDatabases = 'ბაზები';
$strDatabasesStats = 'მონაცემთა ბაზის სტატისტიკა';
$strDefault = 'ავტო მნიშვნელობა';
$strDelete = 'წაშლა';
$strDeleteFailed = 'წაშლილი ველი!';
$strDeleteUserMessage = 'თქვენ წაშალეთ მომხმარებელი %s.';
$strDeleted = 'სტრიქონი წაიშალა';
$strDeletedRows = 'სტრიქონები წაიშალა:';
$strDescending = 'შუთავსებელი';
$strDisplay = 'აჩვენე';
$strDisplayOrder = 'დათვალიერების წესი:';
$strDisplayPDF = 'PDF სქემის ჩვენება';
$strDoAQuery = 'შეასრულე "მოთხოვნა მაგალითის მოხედვით" (ნებისმიერი სიმბოლოს აღმნიშვნელია: "%")';
$strDoYouReally = 'დარწმუნებული ხართ, რომ გინდათ ';
$strDocu = 'დოკუმენტაცია';
$strDrop = 'წაშლა';
$strDropDB = 'წაშალე მონაცემთა ბაზა %s';
$strDropTable = 'სვეტის წაშლა';
$strDumpingData = 'მონაცემები ცხრილიდან ';
$strDynamic = 'დინამიური';
$strEdit = 'შესწორება';
$strEditPDFPages = 'PDF გვერდების რედაქტირება';
$strEditPrivileges = 'პრივილეგიების რედაქტირება';
$strEffective = 'ეფექტური';
$strEmpty = 'ცარიელი';
$strEmptyResultSet = 'MySQL-ის მიერ დააბრუნებული ჩანაწერების რაოდენობაა 0.';
$strEnd = 'დასასრული';
$strEnglishPrivileges = ' შენიშვნა: MySQL-ის პრივილეგიები ენიჭება ინგლისურად ';
$strError = 'შეცდომა';
$strExplain = 'SQL კოდის განმარტება';
$strExport = 'ექსპორტი';
$strExtendedInserts = 'ჩამატების გაფართოება';
$strExtra = 'სხვა';
$strField = 'ველი';
$strFieldHasBeenDropped = 'ველი %s წაიშალა';
$strFields = 'ველები';
$strFieldsEmpty = ' ველების მთვლელი ცარიელია! ';
$strFieldsEnclosedBy = 'ველები ჩაკეტილია by';
$strFieldsEscapedBy = 'ველები გახსნილია by';
$strFieldsTerminatedBy = 'ველები განცალკავებულია by';
$strFixed = 'გამართულია';
$strFlushTable = 'კეში გადატანა ("FLUSH") ცხრილში';
$strFormEmpty = 'საჭიროა ფორმის აღმნიშვნელები!';
$strFormat = 'ფორმატი';
$strFullText = 'სრული ტექსტი';
$strFunction = 'ფუნქცია';
$strGenBy = 'შექმნილია by';
$strGenTime = 'შექმნის დრო';
$strGo = 'შესრულება';
$strGrants = 'უფლებები';
$strGzip = '"gzip-ში შეკუმშვა"';
$strHasBeenAltered = 'შეიცვალა.';
$strHasBeenCreated = 'შეიქმნა.';
$strHaveToShow = 'თქვენ ერთი ცხრილი მაინც უნდა აირჩიოთ';
$strHome = 'დასაწყისი';
$strHomepageOfficial = 'phpMyAdmin ოფიციალური ვებგვერდი';
$strHomepageSourceforge = 'Sourceforge phpMyAdmin Download გვერდი';
$strHost = 'ჰოსტი';
$strHostEmpty = 'ჰოსტის სახელი ცარიელია!';
$strIdxFulltext = 'სრული ტექსტი';
$strIfYouWish = 'თუ თქვენ მხოლოდ რამოდენიმე სვეტის მონაცემების ჩატვირთვა, მიუთითეთ მძიმეებით გამოყოფილი ველების ჩამონათვალი.';
$strIgnore = 'იგნორირება';
$strInUse = 'გამოყენებულია';
$strIndex = 'ინდექსირება';
$strIndexHasBeenDropped = 'ინდექსი %s წაიშალა';
$strIndexName = 'ინდექსის სახელი&nbsp;:';
$strIndexType = 'ინდექსის ტიპი&nbsp;:';
$strIndexes = 'ინდექსები';
$strInsert = 'დამატება';
$strInsertAsNewRow = 'დამატება ახალ ჩანაწერად';
$strInsertNewRow = 'დაამატე ახალი სტრიქონი';
$strInsertTextfiles = 'ჩაამატე ტექსტური ფაილები ცხრილში';
$strInsertedRows = 'სტრიქონების დამატება:';
$strInstructions = 'ინსტრუქცია';
$strInvalidName = '"%s" ეს რეგისტირებული სიტყვაა, შენ არ შეგიძლიათ ის გამოიყენო მონაცემთა ბაზის/ცხრილის/ველის სახელად.';
$strKeepPass = 'არ შეცვალო ეს პაროლი';
$strKeyname = 'Keyname';
$strKill = 'Kill';
$strLength = 'სიგრძე';
$strLengthSet = 'სიგრძე/მნიშვნელობა*';
$strLimitNumRows = 'სტრიქონის რაოდენობა თითოეულ გვერდზე';
$strLineFeed = 'ახალი ხაზი: \\n';
$strLines = 'სტრიქონები(ჩანაწერები) ';
$strLinesTerminatedBy = 'სტრიქონები დაყოფილია by';
$strLinkNotFound = 'ლინკი ვერ ვიპოვე';
$strLinksTo = 'ლინკები';
$strLocationTextfile = 'მიუთითეთ ტექსტური ფაილის მდებარეობა';
$strLogPassword = 'პაროლი:';
$strLogUsername = 'სახელი:';
$strLogin = 'ლოგინი';
$strLogout = 'გასვლა';
$strMissingBracket = 'ბრჭყალები არ არსებობს';
$strModifications = 'ცვლილებები შენახულია';
$strModify = 'შეცვალე';
$strModifyIndexTopic = 'ინდექსის შეცვლა';
$strMoveTable = 'გადაიტანე ცხრილები (მონაცემთა ბაზა<b>.</b>ცხრილი):';
$strMoveTableOK = 'ცხრილი %s გადატანილია %s ში.';
$strMySQLCharset = 'MySQL Charset-ი';
$strMySQLReloaded = 'MySQL გადაიტვირთა.';
$strMySQLSaid = 'MySQL-მა თქვა: ';
$strMySQLServerProcess = 'MySQL %pma_s1% მუშაობს on %pma_s2% როგორც %pma_s3%';
$strMySQLShowProcess = 'პროცესების შვენება';
$strMySQLShowStatus = 'MySQL მონაცემთა ბაზის მდგომარეობის ჩვენება';
$strMySQLShowVars = 'MySQL მონაცემთა ბაზის სისტემური ცვლადები';
$strName = 'სახელი';
$strNbRecords = 'სტრიქონების რაოდენობა';
$strNext = 'შემდეგი';
$strNo = 'არა';
$strNoDatabases = 'ცარიელია';
$strNoDescription = 'შინაარსი არ არის';
$strNoDropDatabases = '"DROP DATABASE" ოპერატორები გათიშულია.';
$strNoFrames = 'phpMyAdmin-თან სამუშაოდ საჭიროა ისეთი ბროუზერი რომელიც <b>ფრეიმებთან</b> მუშაობს.';
$strNoIndex = 'ინდექსი არ არსებობს!';
$strNoIndexPartsDefined = 'ინდექსის ნაწილები არ არსებობს!';
$strNoModification = 'ცვლილებები არ მომხდარა';
$strNoPassword = 'არ არის პარილი';
$strNoPhp = 'PHP კოდის გარეშე';
$strNoPrivileges = 'არ არის პრივილეგიები';
$strNoQuery = 'SQL შეკითხვა არ არსებობს!';
$strNoRights = 'თქვენ არაგაქვთ ამის უფლება!';
$strNoTablesFound = 'მონაცემთა ბაზა არ შეიცავს ცხრილებს.';
$strNoUsersFound = 'მომხმარებელი არ არის ნაპოვნი.';
$strNone = 'არა';
$strNotNumber = 'ეს რიცხვი არაა!';
$strNotSet = '<b>%s</b> ცხრილი ვერ ვიპვე ან უწესრიგობაა %s-ში';
$strNotValidNumber = ' სტრიქონების მიუწვდომელი რაოდენობა!';
$strNull = 'ნული';
$strNumSearchResultsInTable = '%s შესაბამისობა ცხრილის შიგნით<i>%s</i>';
$strNumSearchResultsTotal = '<b>სულ:</b> <i>%s</i> შესაბამისობა';
$strOftenQuotation = 'ველების მნიშვნელობები მოთავსდება ამ სიმბოლოებში OPTIONALLY ნიშნავს რომ მხოლოდ char და varchar ტიპის ველების მნიშვნელობები მოთავსდება მითითებულ სიმბოლოებში.';
$strOperations = 'ოპერაციები';
$strOptimizeTable = 'ცხრილის ოპტიმიზაცია';
$strOptionalControls = 'არააუცილებელია. განსაზღვრავს როგორ უნდა იქნას ჩაწერილი და წაკითხული სპეციალური სიმბოლოები.';
$strOptionally = 'აქრჩევანის მიხედვით';
$strOptions = 'ოფციები';
$strOr = 'ან';
$strOverhead = 'ზედმეტი';
$strPHPVersion = 'PHP ვერსია';
$strPageNumber = 'გვერდის ნომერი:';
$strPartialText = 'ტექსტების ნაწილი';
$strPassword = 'პაროლი';
$strPasswordEmpty = 'პაროლი ცარიელია!';
$strPasswordNotSame = 'პაროლები განსხვავდება!';
$strPdfDbSchema = '"%s"-ს სქემა %s მონაცემთა ბაზაში';
$strPdfInvalidPageNum = 'PDF გვერდების რაოდენობა გაურკვეველია!';
$strPdfInvalidTblName = 'The "%s" table does not exist!';
$strPhp = 'PHP კოდის შექმნა';
$strPmaDocumentation = 'phpMyAdmin-ის დოკუმენტაცია';
$strPmaUriError = 'დირექტივა <tt>$cfgPmaAbsoluteUri</tt> უნდა დაყენდეს კონფიგურაციის ფაილში!';
$strPos1 = 'დასაწყისი';
$strPrevious = 'წინა';
$strPrimary = 'პირველადი';
$strPrimaryKey = 'პირველადი ველი';
$strPrimaryKeyHasBeenDropped = 'პირველი გასაღები წაშლილია';
$strPrimaryKeyName = 'პირველი გასაღების სახელი უნდა იყოს PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>უნდა იყოს მხოლოდ</b> პირველი გასაღების სახელი!)';
$strPrintView = 'ბეჭდვისთვის';
$strPrivileges = 'პრივილეგიები';
$strProperties = 'თვისებები';
$strQBE = 'ამორჩევა მაგალითის მიხედვით';
$strQBEDel = 'წაშლა';
$strQBEIns = 'დამატება';
$strQueryOnDb = 'SQL-შეკითხვა <b>%s</b> მონაცემთა ბაზაში:';
$strReType = 'დამოწმება';
$strRecords = 'ჩანაწერები';
$strReferentialIntegrity = 'მონაცემთა შემოწმება:';
$strRelationView = 'ურთიერთობათა სახე';
$strReloadFailed = 'MySQL წარუმატებლად გადაიტვირთა.';
$strReloadMySQL = 'MySQL-ის გადატვირთვა';
$strRememberReload = 'არ დაგავიწყდეთ სერვერის გადატვირთვა.';
$strRenameTable = 'სახელის შეცვლა';
$strRenameTableOK = 'ცხრილი %s გადაკეთდა %s-დ';
$strRepairTable = 'ცხრილის აღდგენა';
$strReplace = 'შეცვლა';
$strReplaceTable = 'შეცვალე ცხრილი მონაცემებით შემდეგი ფაილიდან';
$strReset = 'საწყისი მნიშვნელობები';
$strRevoke = 'გაუქმება';
$strRevokeGrant = 'უფლებების გაუქმება';
$strRevokeGrantMessage = 'უფლებების პრივილეგია გაუუქმდა %s-ს';
$strRevokeMessage = 'თქვენ შეცვალეთ პრივიკებიები %s-სთვის';
$strRevokePriv = 'პრივილეგიების შეცვლა';
$strRowLength = 'სტრიქონის სიგრძე ';
$strRowSize = ' სტრიქონის ზომა ';
$strRows = 'ჩანაწერები';
$strRowsFrom = 'სტრიქონი. საწყისი სტრიქონი:';
$strRowsModeHorizontal = 'ჰორიზონტალური';
$strRowsModeOptions = '%s-ს რეჟიმში, სათაურები %s სვეტების სემდეგ';
$strRowsModeVertical = 'ვერტიკალური';
$strRowsStatistic = 'სტრიქონის სტატისტიკა';
$strRunQuery = 'სესრულება';
$strRunSQLQuery = 'შეასრულე SQL მოთხოვნა/მოთხოვნები მონაცემთა ბაზაზე %s';
$strRunning = 'გაშვებულია ჰოსტზე %s';
$strSQL = 'SQL-ი';
$strSQLQuery = 'SQL-ის ამორჩევა';
$strSQLResult = 'SQL შედეგი';
$strSave = 'შენახვა';
$strScaleFactorSmall = 'მაშტაბის ფაქტორი ძალიან პატარაა იმისთვის, რომ გვერდის სქემაში აისახოს';
$strSearch = 'ძებნა';
$strSearchFormTitle = 'ძებნა მონაცემთა ბაზაში';
$strSearchInTables = 'Inside ცხრილი:';
$strSearchNeedle = 'საძიებელი სიტყვები ან მნიშვნელობები (wildcard: "%"):';
$strSearchOption1 = 'ერთი სიტყვა მაინც';
$strSearchOption2 = 'ყველა სიტყვა';
$strSearchOption3 = 'ზუსტი ფრაზა';
$strSearchOption4 = 'როგორც სწორი ფრაზა';
$strSearchResultsFor = 'ძებნის შედეგი "<i>%s</i>" %s:';
$strSearchType = 'ძიება:';
$strSelect = 'ამორჩევა';
$strSelectADb = 'გთხოვთ მონიშნეთ მონაცემთა ბაზა';
$strSelectAll = 'ყველას მონიშვნა';
$strSelectFields = 'აირჩიეთ ველები (მინიმუმ ერთი მაინც):';
$strSelectNumRows = 'მოთხოვნაში';
$strSelectTables = 'ცხრილის მონიშვნა';
$strSend = 'ფაილად შენახვა';
$strServerChoice = 'სერვერის არჩევა';
$strServerVersion = 'სერვერის ვერსია';
$strSetEnumVal = '"enum" ან "set" ტიპის ველებისათვის მონაცემები შეიყვანეთ შემდეგი ფორმატის მიხედვით: \'a\',\'b\',\'c\'...<br />თუ თქვენ დაგჭირდებათ დახრილი ხაზის ("\") ან დახრილი ხაზისა და აპოსტროფის ("\'") შეყვანა, ამ სიმბოლოების წინ და შორის ჩასვით დახრილი ხაზი ისე როგორც აქაა (for example \'\\\\xyz\' or \'a\\\'b\').';
$strShow = 'გამოიტანე';
$strShowAll = 'ყველას დათვალიერება';
$strShowColor = 'ფერების ჩვენება';
$strShowCols = 'სვეტების დათვალიერება';
$strShowGrid = 'ჩვენების ბადე';
$strShowPHPInfo = 'PHP ინფორმაცია';
$strShowTableDimension = 'ცხრილის ჩვენების ცვლილება';
$strShowTables = 'ცხრილების დათვალიერება';
$strShowThisQuery = ' მოცემული შეკითხვის ხელახლა ჩვენება ';
$strShowingRecords = 'ნაჩვენებია ჩანაწერები ';
$strSingly = '(ცალკე)';
$strSize = 'ზომა';
$strSort = 'სორტირება';
$strSpaceUsage = 'გამოყენებული სივრცე';
$strSplitWordsWithSpace = 'სიტყვები არის დაშლილია ცალკეულ სიმბოლოენად (" ").';
$strStartingRecord = 'სტრიქონის ჩაწერის დაწყება';
$strStatement = 'აღწერა';
$strStrucCSV = 'CSV მონაცემები';
$strStrucData = 'სტრუქტურა და მონაცემები';
$strStrucDrop = 'არსებულის წაშლა და დამატება';
$strStrucExcelCSV = 'CSV Ms Excel-ის მონაცემებისთვის ';
$strStrucOnly = 'მხოლოდ სტრუქტურა';
$strStructPropose = 'ცხრილის სტრუქტურის შეთავაზება';
$strStructure = 'სტრუქტურა';
$strSubmit = 'თანხმობა';
$strSuccess = 'თქვენი SQL მოთხოვნა წარმატებით შესრულდა';
$strSum = 'ჯამი';
$strTable = 'ცხრილი ';
$strTableComments = 'კომენტარი ცხრილზე';
$strTableEmpty = 'ცხრილის სახელი არა არის მითითებული!';
$strTableHasBeenDropped = 'ცხრილი %s წაიშალა';
$strTableHasBeenEmptied = 'ცხრილი %s დაცარიელდა';
$strTableHasBeenFlushed = 'ცხრილი %s კეშირებულია';
$strTableMaintenance = 'ცხრილის მომსახურება';
$strTableStructure = 'ცხრილის სტრუქტურა. ცხრილი:';
$strTableType = 'ცხრილის ტიპი';
$strTables = '%s ცხრილი';
$strTextAreaLength = ' მისი სიგრძის გამო,<br /> ეს ველი შეიძლება არ არის რედაქტირებადი ';
$strTheContent = 'ფაილის შემცველობა დამატებულ იქნა.';
$strTheContents = 'ცხრილის ის ჩანაწერები, რომლებსაც ჰქონდათ იდენტური პირველადი ან უნიკალური გასაღები შეცვლილია ფაილის შემცველობით.';
$strTheTerminator = 'ველების ტერმინატორი.';
$strTotal = 'სულ ცხრილში';
$strType = 'ტიპი';
$strUncheckAll = 'Uncheck All';
$strUnique = 'უნიკალური';
$strUnselectAll = 'მონიშვნის გაუქმება';
$strUpdatePrivMessage = 'პრივილეგიები განახლდა %s-სთვის.';
$strUpdateProfile = 'პროფაილის განახლება:';
$strUpdateProfileMessage = 'პროფაილი განახლდა.';
$strUpdateQuery = 'შეკითხვის (მოთხოვნის) განახლება';
$strUsage = 'მოცულობა';
$strUseBackquotes = 'შებრუნებული ბრჭყალები';
$strUseTables = 'მომხმარებლის ცხრილები';
$strUser = 'მომხმარებელი';
$strUserEmpty = 'მომხმარებლის სახელი ცარიელია!';
$strUserName = 'მომხმარებლის სახელი';
$strUsers = 'მომხმარებლები';
$strValue = 'მნიშვნელობა';
$strViewDump = 'ცხრილისი სქემა';
$strViewDumpDB = 'მონაცემთა ბაზის სქემა';
$strWelcome = 'კეთილი იყოს თქვენი მობრძანება %s';
$strWithChecked = 'მონიშნულებთან:';
$strWrongUser = 'არასწორი სახელი/პაროლი. მიმართვა ბლოკირებულია';
$strYes = 'კი';
$strZip = '"zip-ში შეკუმშვა"';
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
