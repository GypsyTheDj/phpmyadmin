<?php
/* $Id$ */

$charset = 'windows-1257';
$text_dir = 'ltr'; // ('ltr' for left to right, 'rtl' for right to left)
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = ',';
$number_decimal_separator = '.';
// shortcuts for Byte, Kilo, Mega, Tera, Peta, Exa
$byteUnits = array('bait�', 'Kilobait�', 'Megabait�', 'Gigabait�');

$day_of_week = array('Sekmadienis', 'Pirmadienis', 'Antradienis', 'Tre�iadienis', 'Ketvirtadienis', 'Penktadienis', '�e�tadienis');
$month = array('Sausio', 'Vasario', 'Kovo', 'Baland�io', 'Gegu�io', 'Bir�elio', 'Liepos', 'Rugpj��io', 'Rugs�jo', 'Spalio', 'Lapkri�io', 'Gruod�io');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = ' %Y m. %B %d d.  %H:%M';


$strAccessDenied = 'Pri�jimas u�draustas';
$strAction = 'Valdymo veiksmai';
$strAddDeleteColumn = '�terpti/Trinti stulpelius';
$strAddDeleteRow = '�terpti/Trinti po�ymio eilut�(es)';
$strAddNewField = '�terpti nauj� laukel�(ius)';
$strAddPriv = '�terpti privilegij�(as)';
$strAddPrivMessage = 'J�s �terp�te privilegijas.';
$strAddSearchConditions = '�terpkite paie�kos s�lygas � "where" sakin�:';
$strAddToIndex = '�terpti indeksui papildomus &nbsp;%s&nbsp;stulpel�(ius)';
$strAddUser = 'Sukurti nauj� vartotoj�';
$strAddUserMessage = 'J�s suk�r�te nauj� vartotoj�.';
$strAffectedRows = 'Pakeista eilu�i�:';
$strAfter = 'Prie� %s';
$strAfterInsertBack = 'Sugr��ti � buvus� puslap�';
$strAfterInsertNewInsert = '�terpti sekan�i� nauj� eilut�';
$strAll = 'Visk�';
$strAlterOrderBy = 'Pakeisti lentel�s r��iavim� pagal:';
$strAnalyzeTable = 'Analizuoti lentel�';
$strAnd = 'IR';
$strAnIndex = 'Indeksas sukurtas %s stulpeliui';
$strAny = 'Bet kur�(i�)';
$strAnyColumn = 'Bet kur� stulpel�';
$strAnyDatabase = 'Bet kuri� duomen� baz�';
$strAnyHost = 'Bet kur� prisijungimo adres�';
$strAnyTable = 'Bet kuri� lentel�';
$strAnyUser = 'Bet kur� vartotoj�';
$strAPrimaryKey = 'Stulpeliui %s sukurtas PIRMINIS raktas';
$strAscending = 'Did�jimo tvarka';
$strAtBeginningOfTable = 'Lentel�s prad�ioje';
$strAtEndOfTable = 'Lentel�s pabaigoje';
$strAttr = 'Atributai';

$strBack = 'Atgal';
$strBinary = 'Dvejetainis';
$strBinaryDoNotEdit = 'Dvejetainis - nekeisti';
$strBookmarkDeleted = 'Nuoroda i�trinta.';
$strBookmarkLabel = 'Nuorodos Antra�t�';
$strBookmarkQuery = 'Sukurti nuoroda SQL-u�klausai';
$strBookmarkThis = 'Sukurti nuorod�';
$strBookmarkView = 'Per�i�ra';
$strBrowse = 'Per�i�r�ti';
$strBzip = '"bzip"';

$strCantLoadMySQL = 'negali u�krauti MySQL proceso,<br />patikrinkite PHP nustatymus.';
$strCantLoadRecodeIconv = 'Nepavyko u�krauti <em>iconv</em> arba <em>recode</em> pl�tini�, reikaling� koduot�s kovertavimui. Suteikite PHP teises naudotis �iais i�pl�timais arba i�junkite phpMyAdmin koduot�s konvertavim�. ';
$strCantUseRecodeIconv = 'Kraunant pl�tini� prane�imus, nepavyko pasinaudoti <em>iconv</em> arba <em>libiconv</em> arba <em>recode_string</em> funkcijomis. Pasitkrinkite PHP konfig�racij�. ';
$strCantRenameIdxToPrimary = 'Indeks� pervadinti PIRMINIU nepavyko!';
$strCardinality = 'Element� skai�ius';
$strCarriage = 'Gr��imo � eilut�s prad�i� simbolis(CR): \\r';
$strChange = 'Keisti';
$strChangeDisplay = 'Pasirinkite lauk�, kur� norite per�i�r�ti';
$strChangePassword = 'Pakeisti slapta�od�';
$strCheckAll = 'Pa�ym�ti visus(as)';
$strCheckDbPriv = 'Pa�ym�ti duomen� baz�s privilegijas';
$strCheckTable = 'Patikrinti lentel�';
$strChoosePage = 'Pasirinkite puslap� redagavimui';
$strColumn = 'Stulpelis';
$strColumnNames = 'Stulpeli� vardai';
$strComments = 'Komentarai';
$strCompleteInserts = 'Visi�kas �terpimas';
$strConfigFileError = 'phpMyAdmin negal�jo perskaityti konfig�racin�s bylos!<br />Tai gal�jo nutikti jeigu <u>php</u> rado byloje vykdymo klaid� arba visai nerando bylos.<br />Pra�ome kreiptis � konfig�racin� byl� tiesiogiai (naudojantis nuoroda �emiau) ir perskaityti gautus <u>php</u> klaid� prane�im�(us). Daugeliu atveju vienoje/keletoje eilu�i� truksta kabu�i� ir/arba kabliata�kio.<br />Jeigu i�vedamas tu��ias nar�ykl�s langas - viskas tvarkoje (klaid� nepasteb�ta).';
$strConfigureTableCoord = 'Nustatykite lentel�s %s koordinates';
$strConfirm = 'Ar TIKRAI norite atlikti �� veiksm�?';
$strCookiesRequired = 'Sausain�liai(Cookies) turi b�ti priimami.';
$strCopyTable = 'Kopijuoti lentel� � (duomen� baz�<b>.</b>lentel�):';
$strCopyTableOK = 'Letel� %s nukopijuota � %s.';
$strCreate = 'Sukurti';
$strCreateIndex = 'Sukurti indeks� &nbsp;%s&nbsp;stulpeliui(iams)';
$strCreateIndexTopic = 'Sukurti nauj� indeks�';
$strCreateNewDatabase = 'Sukurti nauj� duomen� baz�';
$strCreateNewTable = 'Sukurti nauj� lentel� duomen� baz�je %s';
$strCreatePage = 'Sukurti nauj� puslap�';
$strCriteria = 'Kriterijai';

$strData = 'Duomenys';
$strDatabase = 'Duomen� baz� ';
$strDatabaseHasBeenDropped = 'Duomen� baz� %s i�trinta.';
$strDatabases = 'duomen� baz�s';
$strDatabasesStats = 'Duomen� bazi� statistika';
$strDatabaseWildcard = 'Duomen� baz� (galima naudoti pakaitos simbolius):';
$strDataOnly = 'Tik duomenys';
$strDefault = 'Nutylint';
$strDelete = 'Trinti';
$strDeleted = 'Eilut� i�trinta';
$strDeletedRows = 'Eilut�s i�trintos:';
$strDeleteFailed = 'Trynimo klaida!';
$strDeleteUserMessage = 'J�s i�tyn�te vartotoj� %s.';
$strDescending = 'Ma��jimo tvarka';
$strDisplay = 'Atvaizduoti';
$strDisplayOrder = 'Atvaizdavimo tvarka:';
$strDisplayPDF = 'Rodyti PDF vaizd�';
$strDoAQuery = 'Vykdyti "u�klaus� pagal pavyzd�" (pakaitos simbolis: "%")';
$strDocu = 'Dokumentacija';
$strDoYouReally = 'Ar TIKRAI norite ';
$strDrop = 'Panaikinti';
$strDropDB = 'Panaikinti duomen� baz� %s';
$strDropTable = 'Panaikinti lentel�';
$strDumpingData = 'Sukurta duomen� kopija lentelei';
$strDumpXRows = 'I�vesti %s eilu�i� pradedant nuo %s eilut�s.';
$strDynamic = 'dinaminis';

$strEdit = 'Taisyti';
$strEditPDFPages = 'Taisyti PDF puslapius';
$strEditPrivileges = 'Taisyti privilegijas';
$strEffective = 'Efektyvus';
$strEmpty = 'Panaikinti reik�mes';
$strEmptyResultSet = 'MySQL gra�ino tu��i� rezultat� rinkin� (n�ra eilu�i�).';
$strEnd = 'Pabaiga';
$strEnglishPrivileges = ' Pastaba: MySQL privilegij� pavadinimai pateikiami angl� kalba';
$strError = 'Klaida';
$strExplain = 'Paai�kinti SQL u�klaus�';
$strExport = 'Eksportuoti';
$strExportToXML = 'I�vesti XML formatu';
$strExtendedInserts = 'I�pl�stinis �terpimas';
$strExtra = 'Papildomai';

$strField = 'Laukas';
$strFieldHasBeenDropped = 'Laukas %s i�mestas';
$strFields = 'Kiek lauk�';
$strFieldsEmpty = ' Tu��ia lauk� skai�iaus reik�m�! ';
$strFieldsEnclosedBy = 'Lauk� reik�m�s apskliaustos  simboliais';
$strFieldsEscapedBy = 'Lauk� reik�m�s baigiasi simboliu';
$strFieldsTerminatedBy = 'Lauk� pabaigos �ym�';
$strFixed = 'fiksuotas';
$strFlushTable = 'I�valyti lentel� ("FLUSH")';
$strFormat = 'Formatas';
$strFormEmpty = 'Tr�ksta reik�m�s formoje !';
$strFullText = 'Visus tekstus';
$strFunction = 'Funkcija';

$strGenBy = 'Generavo:';
$strGenTime = 'Atlikimo laikas';
$strGo = 'Eiti';
$strGrants = 'Leisti';
$strGzip = '"gzipped"';

$strHasBeenAltered = 'i�pl�sta.';
$strHasBeenCreated = 'sukurta.';
$strHaveToShow = 'Pasirinkite bent vien� stulpel� i�vedimui';
$strHome = 'Pirmas puslapis';
$strHomepageOfficial = 'Oficialus phpMyAdmin tinklapis';
$strHomepageSourceforge = 'Parsisi�sti phpMyAdmin i� Sourceforge tinklapio';
$strHost = 'Prisijungimo adresas';
$strHostEmpty = 'Tu��ias prisijungimo adresas!';

$strIdxFulltext = '"Fulltext" indeksas';
$strIfYouWish = 'Jei pageidaujate pakrauti kelet� lentel�s stulpeli�, sudarykite lauk� s�ra�� atskirt� kabliata�kiais.';
$strIgnore = 'Ignoruoti';
$strIndex = 'Indeksas';
$strIndexes = 'Indeksai';
$strIndexHasBeenDropped = 'Indeksas %s panaikintas';
$strIndexName = 'Indekso vardas&nbsp;:';
$strIndexType = 'Indekso tipas&nbsp;:';
$strInsert = '�terpti';
$strInsertAsNewRow = '�terpti nauj� �ra��';
$strInsertedRows = '�terpt� eilu�i�:';
$strInsertNewRow = '�terpti nauj� eilut�';
$strInsertTextfiles = '�terpti duomenis i� tekstinio failo � lentel�';
$strInstructions = 'Instrukcijos';
$strInUse = '�iuo metu naudojama';
$strInvalidName = '"%s" rezervuotas �odis, J�s negalite �io �od�io naudoti kaip duomen� baz�s, lentel�s arba laukelio vardo.';

$strKeepPass = 'Nekeisti slapta�od�io';
$strKeyname = 'Raktinis �odis';
$strKill = 'Stabdyti proces�';

$strLength = 'Ilgis';
$strLengthSet = 'Ilgis/reik�m�s*';
$strLimitNumRows = 'Eilu�i� skai�ius puslapyje';
$strLineFeed = 'Eilut�s: \\n';
$strLines = 'Eilu�i�';
$strLinesTerminatedBy = 'Eilut�s pabaigos �ym�';
$strLinkNotFound = 'S�ry�is nerastas';
$strLinksTo = 'S�ry�is su';
$strLocationTextfile = 'Tekstiniai SQL u�klaus� failai';
$strLogin = '�siregistruoti';
$strLogout = 'I�siregistruoti';
$strLogPassword = 'Slapta�odis:';
$strLogUsername = 'Vartotojo vardas:';

$strMissingBracket = 'Tr�ksta skliausto(�)';
$strModifications = 'Pakeitimai i�saugoti';
$strModify = 'Keisti';
$strModifyIndexTopic = 'Keisti indeks�';
$strMoveTable = 'Perkelti lentel� � (duomen� baz�<b>.</b>lentel�):';
$strMoveTableOK = 'Lentel� %s perkelta � %s.';
$strMySQLCharset = 'MySQL koduot�';
$strMySQLReloaded = 'MySQL procesas perkrautas.';
$strMySQLSaid = 'MySQL atsakymas: ';
$strMySQLServerProcess = 'MySQL %pma_s1% procesas serveryje %pma_s2%. �registruotas vartotojas %pma_s3%';
$strMySQLShowProcess = 'Rodyti procesus';
$strMySQLShowStatus = 'Rodyti MySQL aplinkos b�sen�';
$strMySQLShowVars = 'Rodyti MySQL sistemos kintamuosius';

$strName = 'Pavadinimas';
$strNext = 'Sekantis';
$strNo = 'Ne';
$strNoDatabases = 'N�ra duomen� bazi�';
$strNoDescription = 'Apra�ymo n�ra';
$strNoDropDatabases = '"DROP DATABASE" komandos �vykdyti negalima.';
$strNoFrames = 'phpMyAdmin draugi�kesnis su <b>r�melius</b> palaikan�iomis nar�ykl�mis.';
$strNoIndex = 'Neapra�yti indeksai!';
$strNoIndexPartsDefined = 'Neapra�ytos indekso dalys!';
$strNoModification = 'N�ra pakeitim�';
$strNone = 'N�ra';
$strNoPassword = 'N�ra slapta�od�io';
$strNoPhp = 'be PHP kodo';
$strNoPrivileges = 'N�ra privilegij�';
$strNoQuery = 'N�ra SQL u�klausos!';
$strNoRights = 'Neturite pakankamai teisi�';
$strNoTablesFound = 'Duomen� baz�je nerasta lenteli�.';
$strNotNumber = '�veskite skai�i�!';
$strNotSet = 'Lentel� <b>%s</b> nerasta arba nenurodyta %s byloje';
$strNotValidNumber = ' netinkamas eilut�s numeris!';
$strNoUsersFound = 'Nerasta vartotojo(�).';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s atitikmuo(enys) lentel�je <i>%s</i>';
$strNumSearchResultsTotal = '<b>Viso:</b> <i>%s</i> atitikmuo(enys)';

$strOftenQuotation = 'Da�nai kartojasi kabut�s. Pasirinktinai rei�kia, kad tik  char ir varchar laukai yra u�daryti kabut�mis.';
$strOperations = 'Veiksmai';
$strOptimizeTable = 'Optimizuoti lentel�';
$strOptionalControls = 'Pasirinktinai. Kontroliuojama kaip skaitoma, ra�oma specialiuosius simbolius.';
$strOptionally = 'Pasirinktinai';
$strOptions = 'Parinktys';
$strOr = 'Arba';
$strOverhead = 'Perteklinis';

$strPageNumber = 'Puslapis:';
$strPartialText = 'Daliniai tekstai';
$strPassword = 'Slapta�odis';
$strPasswordEmpty = 'Tu��ias slapta�odis!';
$strPasswordNotSame = 'Slapta�od�iai nesutampa!';
$strPdfDbSchema = 'Duomen� baz�s "%s" schema - %s puslapis';
$strPdfInvalidPageNum = 'Nenurodytas PDF puslapio numeris!';
$strPdfInvalidTblName = 'Lentel� "%s" neegzistuoja!';
$strPhp = 'Sukurti PHP kod�';
$strPHPVersion = 'PHP versija';
$strPmaDocumentation = 'phpMyAdmin\'o dokumentacija';
$strPmaUriError = 'Reikia konfig�raciniame faile �ra�yti <tt>$cfg[\'PmaAbsoluteUri\']</tt> reik�m�!';
$strPos1 = 'Prad�ia';
$strPrevious = 'Pra�j�s';
$strPrimary = 'Pirminis';
$strPrimaryKey = 'Pirminis raktas';
$strPrimaryKeyHasBeenDropped = 'Panaikintas pirminis raktas';
$strPrimaryKeyName = 'Pirminio rakto pavadinimas turi b�ti "PRIMARY"!';
$strPrimaryKeyWarning = '("PRIMARY" <b>yra vienintelis</b> pirminio rakto tipas!)';
$strPrintView = 'Atspausdinti strukt�ra';
$strPrivileges = 'Privilegijos';
$strProperties = 'Nustatymai';

$strQBE = 'U�klausa pagal pavyzd�';
$strQBEDel = 'Pakei�iant';
$strQBEIns = '�terpiant';
$strQueryOnDb = 'SQL-u�klausa duomen� baz�je <b>%s</b>:';

$strRecords = 'Viso �ra��:';
$strReferentialIntegrity = 'Patikrinti s�ry�i� vientisum�:';
$strRelationView = 'Per�i�r�ti s�ry�ius';
$strReloadFailed = 'MySQL proces� perkrauti nepavyko.';
$strReloadMySQL = 'Perkrauti MySQL proces�';
$strRememberReload = 'Neu�mir�kite perkrauti server�.';
$strRenameTable = 'Pervadinti lentel� �';
$strRenameTableOK = 'Lentel� %s pervadinta � %s';
$strRepairTable = 'Taisyti lentel�';
$strReplace = 'Pakeisti';
$strReplaceTable = 'Pakeisti lentel�s turin� failo duomenimis ';
$strReset = 'Nustatyti � pradin� b�sen�';
$strReType = '�veskite dar kart�';
$strRevoke = 'Panaikinti';
$strRevokeGrant = 'Panaikinti GRANT privilegij�';
$strRevokeGrantMessage = 'J�s panaikinote GRANT privilegij� %s';
$strRevokeMessage = 'J�s panaikinote privilegijas %s';
$strRevokePriv = 'Panaikinti privilegijas';
$strRowLength = 'Eilut�s ilgis';
$strRows = 'Eilut�s';
$strRowsFrom = 'eilu�i� pradedant nuo';
$strRowSize = 'Eilut�s dydis';
$strRowsModeHorizontal = 'horizontaliai';
$strRowsModeOptions = 'i�d�stant  %s pakartoti antra�tes kas %s �ra��';
$strRowsModeVertical = 'vertikaliai';
$strRowsStatistic = 'Eilu�i� statistika';
$strRunning = 'adresu %s';
$strRunQuery = 'Vykdyti u�klaus�';
$strRunSQLQuery = 'Vykdyti SQL u�klaus�(as) duomen� baz�je %s';

$strSave = 'I�saugoti';
$strScaleFactorSmall = 'Dyd�io matas yra per ma�as norint sutalpinti vaizd� viename lape.';
$strSearch = 'Paie�ka';
$strSearchFormTitle = 'Paie�ka duomen� baz�je';
$strSearchInTables = 'Lentel�s(i�) viduje:';
$strSearchNeedle = 'Paie�kos �odis(iai) arba reik�m�(�s) (pakaitos simbolis: "%"):';
$strSearchOption1 = 'bent vienas i� �od�i�';
$strSearchOption2 = 'visi �od�iai';
$strSearchOption3 = 'i�tisa fraz�';
$strSearchOption4 = 'kaip reguliar�j� i�sirei�kim�';
$strSearchResultsFor = 'Paie�kos rezultatai frazei "<i>%s</i>" %s:';
$strSearchType = 'Rasti:';
$strSelect = 'I�rinkti';
$strSelectADb = 'Pasirinkti duomen� baz�';
$strSelectAll = 'I�rinkti visas(us)';
$strSelectFields = 'Pasirinkti laukus (nors vien�)';
$strSelectNumRows = 'u�klaus� vykdoma';
$strSelectTables = 'Pasirinkite lenteles';
$strSend = 'I�saugoti � fail�';
$strServerChoice = 'Pasirinkti server�';
$strServerVersion = 'Serverio versija';
$strSetEnumVal = 'Jeigu laukelio tipas yra "enum" arba "set", tuomet duomen� reik�mes reikia �vesti naudojant �� format�: \'a\',\'b\',\'c\'...<br />. Jeigu jums reikia �ra�yti de�inin� ��amb�j� br�k�n� ("\") arba kabutes("\'"), tuomet prie� �ios simbolius reikia papildomo de�ininio ��ambaus br�k�nio (pavyzd�iui: \'\\\\xyz\' or \'a\\\'b\').';
$strShow = 'Rodyti';
$strShowAll = 'Rodyti visk�';
$strShowCols = 'Rodyti stulpelius';
$strShowColor = 'Rodyti spalv�';
$strShowGrid = 'Rodyti tinklel�';
$strShowingRecords = 'Rodomi �ra�ai';
$strShowPHPInfo = 'Rodyti PHP informacij�';
$strShowTableDimension = 'Rodyti lenteli� dyd�ius';
$strShowTables = 'Rodyti lentel�s';
$strShowThisQuery = ' Rodyti �i� u�klaus� v�l ';
$strSingly = '(pavieniui)';
$strSize = 'Dydis';
$strSort = 'R��iuoti';
$strSpaceUsage = 'Vietos naudojimas';
$strSplitWordsWithSpace = '�od�iai atskirti tarpo simboliu (" ").';
$strSQL = 'SQL';
$strSQLQuery = 'SQL- u�klausa';
$strSQLResult = 'SQL rezultatas';
$strStatement = 'Parametrai';
$strStrucCSV = 'Duomenys CSV formatu';
$strStrucData = 'Strukt�ra ir duomenys';
$strStrucDrop = 'Panaikinti-�terpti lentel�';
$strStrucExcelCSV = 'Duomenys ekselio CSV formatu';
$strStrucOnly = 'Tik strukt�r�';
$strStructPropose = 'Propose table structure';
$strStructure = 'Strukt�ra';
$strSubmit = 'Si�sti';
$strSuccess = 'J�s� SQL u�klausa s�kmingai �vykdyta';
$strSum = 'Sumos';

$strTable = 'lentel� ';
$strTableComments = 'Lentel�s komentarai';
$strTableEmpty = 'Tu��ias lentel�s vardas!';
$strTableHasBeenDropped = 'Lentel� %s panaikinta';
$strTableHasBeenEmptied = 'Lentel�s reik�m�s %s i�tu�tintos';
$strTableHasBeenFlushed = 'Lentel�s buferis  %s i�valytas';
$strTableMaintenance = 'Lentel�s diagnostika';
$strTables = '%s lentel�(s)';
$strTableStructure = 'Sukurta duomen� strukt�ra lentelei';
$strTableType = 'Lentel�s tipas';
$strTextAreaLength = ' Tai yra jo ilgis,<br /> �is laukelis neredaguojamas ';
$strTheContent = 'J�s� failo turinys �terptas.';
$strTheContents = 'Failo turinys �terpus panaikina i�rinktos lentel�s ar stulpelio turin�, bet i�lieka unikal�s ir pirminiai indeksai.';
$strTheTerminator = 'Lauk� pabaigos �ym�.';
$strTotal = ' i� viso ';
$strType = 'Tipas';

$strUncheckAll = 'Nepa�ym�ti visus(as)';
$strUnique = 'Unikalus';
$strUnselectAll = 'Nepa�ym�ti visus(as)';
$strUpdatePrivMessage = 'J�s pakeit�te privilegijas  %s.';
$strUpdateProfile = 'Papildyti profil�:';
$strUpdateProfileMessage = 'Profilis papildytas.';
$strUpdateQuery = 'Atnaujinti u�klaus�';
$strUsage = 'I�naudota';
$strUseBackquotes = 'Lenteli� ir lauk� vardams naudoti �ias kabutes ` `';
$strUser = 'Vartotojas';
$strUserEmpty = 'Tu��ias vartotojo vardas!';
$strUserName = 'Vartotojo vardas';
$strUsers = 'Vartotojai';
$strUseTables = 'Naudoti lenteles';

$strValue = 'Reik�m�';
$strViewDump = 'Per�i�r�ti lentel�s strukt�ros atvaizd�';
$strViewDumpDB = 'Sukurti, per�i�r�ti duomen� baz�s atvaizd�';

$strWelcome = 'Sveiki atvyk� � %s';
$strWithChecked = 'Pasirinktas lenteles:';
$strWrongUser = 'Neteisingas vartotojo vardas arba slapta�odis. Pri�jimas u�draustas.';

$strYes = 'Taip';

$strZip = '"zip"';

//to translate:
$strRelationNotWorking = 'Atsisakyta papildom� nustatym�, leid�ian�i� dirbti su jungtin�mis lentel�mis. %sPaai�kinimas%s.';  //to translate
$strAllTableSameWidth = 'rodyti visas lenteles vienodo plo�io?';  //to translate
$strPdfNoTables = 'No tables';  //to translate
$strGeneralRelationFeat = 'Genereal Relation Features';  //to translate
$strDisplayFeat = 'Display Features';  //to translate
$strCreatePdfFeat = 'Creation of PDFs';  //to translate
$strColComFeat = 'Displaying Column Comments';  //to translate
$strDisabled = 'Disabled';  //to translate
$strEnabled = 'Enabled';  //to translate
?>
