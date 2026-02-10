<?php
$tdatalanguage_lael = array();
$tdatalanguage_lael[".searchableFields"] = array();
$tdatalanguage_lael[".ShortName"] = "language_lael";
$tdatalanguage_lael[".OwnerID"] = "";
$tdatalanguage_lael[".OriginalTable"] = "language_lael";


$tdatalanguage_lael[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatalanguage_lael[".originalPagesByType"] = $tdatalanguage_lael[".pagesByType"];
$tdatalanguage_lael[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatalanguage_lael[".originalPages"] = $tdatalanguage_lael[".pages"];
$tdatalanguage_lael[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatalanguage_lael[".originalDefaultPages"] = $tdatalanguage_lael[".defaultPages"];

//	field labels
$fieldLabelslanguage_lael = array();
$fieldToolTipslanguage_lael = array();
$pageTitleslanguage_lael = array();
$placeHolderslanguage_lael = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslanguage_lael["English"] = array();
	$fieldToolTipslanguage_lael["English"] = array();
	$placeHolderslanguage_lael["English"] = array();
	$pageTitleslanguage_lael["English"] = array();
	$fieldLabelslanguage_lael["English"]["id"] = "Id";
	$fieldToolTipslanguage_lael["English"]["id"] = "";
	$placeHolderslanguage_lael["English"]["id"] = "";
	$fieldLabelslanguage_lael["English"]["language_id"] = "Language";
	$fieldToolTipslanguage_lael["English"]["language_id"] = "";
	$placeHolderslanguage_lael["English"]["language_id"] = "";
	$fieldLabelslanguage_lael["English"]["label_id"] = "Label";
	$fieldToolTipslanguage_lael["English"]["label_id"] = "";
	$placeHolderslanguage_lael["English"]["label_id"] = "";
	$fieldLabelslanguage_lael["English"]["label_text"] = "Label Text";
	$fieldToolTipslanguage_lael["English"]["label_text"] = "";
	$placeHolderslanguage_lael["English"]["label_text"] = "";
	if (count($fieldToolTipslanguage_lael["English"]))
		$tdatalanguage_lael[".isUseToolTips"] = true;
}


	$tdatalanguage_lael[".NCSearch"] = true;



$tdatalanguage_lael[".shortTableName"] = "language_lael";
$tdatalanguage_lael[".nSecOptions"] = 0;

$tdatalanguage_lael[".mainTableOwnerID"] = "";
$tdatalanguage_lael[".entityType"] = 0;
$tdatalanguage_lael[".connId"] = "karsaaz_pos_at_localhost";


$tdatalanguage_lael[".strOriginalTableName"] = "language_lael";

	



$tdatalanguage_lael[".showAddInPopup"] = false;

$tdatalanguage_lael[".showEditInPopup"] = false;

$tdatalanguage_lael[".showViewInPopup"] = false;

$tdatalanguage_lael[".listAjax"] = false;
//	temporary
//$tdatalanguage_lael[".listAjax"] = false;

	$tdatalanguage_lael[".audit"] = false;

	$tdatalanguage_lael[".locking"] = false;


$pages = $tdatalanguage_lael[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalanguage_lael[".edit"] = true;
	$tdatalanguage_lael[".afterEditAction"] = 1;
	$tdatalanguage_lael[".closePopupAfterEdit"] = 1;
	$tdatalanguage_lael[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalanguage_lael[".add"] = true;
$tdatalanguage_lael[".afterAddAction"] = 1;
$tdatalanguage_lael[".closePopupAfterAdd"] = 1;
$tdatalanguage_lael[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalanguage_lael[".list"] = true;
}



$tdatalanguage_lael[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalanguage_lael[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalanguage_lael[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalanguage_lael[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalanguage_lael[".printFriendly"] = true;
}



$tdatalanguage_lael[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalanguage_lael[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalanguage_lael[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalanguage_lael[".isUseAjaxSuggest"] = true;

$tdatalanguage_lael[".rowHighlite"] = true;





$tdatalanguage_lael[".ajaxCodeSnippetAdded"] = false;

$tdatalanguage_lael[".buttonsAdded"] = false;

$tdatalanguage_lael[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalanguage_lael[".isUseTimeForSearch"] = false;


$tdatalanguage_lael[".badgeColor"] = "E8926F";


$tdatalanguage_lael[".allSearchFields"] = array();
$tdatalanguage_lael[".filterFields"] = array();
$tdatalanguage_lael[".requiredSearchFields"] = array();

$tdatalanguage_lael[".googleLikeFields"] = array();
$tdatalanguage_lael[".googleLikeFields"][] = "id";
$tdatalanguage_lael[".googleLikeFields"][] = "language_id";
$tdatalanguage_lael[".googleLikeFields"][] = "label_id";
$tdatalanguage_lael[".googleLikeFields"][] = "label_text";



$tdatalanguage_lael[".tableType"] = "list";

$tdatalanguage_lael[".printerPageOrientation"] = 0;
$tdatalanguage_lael[".nPrinterPageScale"] = 100;

$tdatalanguage_lael[".nPrinterSplitRecords"] = 40;

$tdatalanguage_lael[".geocodingEnabled"] = false;










$tdatalanguage_lael[".pageSize"] = 20;

$tdatalanguage_lael[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalanguage_lael[".strOrderBy"] = $tstrOrderBy;

$tdatalanguage_lael[".orderindexes"] = array();


$tdatalanguage_lael[".sqlHead"] = "SELECT id,  	language_id,  	label_id,  	label_text";
$tdatalanguage_lael[".sqlFrom"] = "FROM language_lael";
$tdatalanguage_lael[".sqlWhereExpr"] = "";
$tdatalanguage_lael[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalanguage_lael[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalanguage_lael[".arrGroupsPerPage"] = $arrGPP;

$tdatalanguage_lael[".highlightSearchResults"] = true;

$tableKeyslanguage_lael = array();
$tableKeyslanguage_lael[] = "id";
$tdatalanguage_lael[".Keys"] = $tableKeyslanguage_lael;


$tdatalanguage_lael[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "language_lael";
	$fdata["Label"] = GetFieldLabel("language_lael","id");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "id";

		$fdata["sourceSingle"] = "id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalanguage_lael["id"] = $fdata;
		$tdatalanguage_lael[".searchableFields"][] = "id";
//	language_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "language_id";
	$fdata["GoodName"] = "language_id";
	$fdata["ownerTable"] = "language_lael";
	$fdata["Label"] = GetFieldLabel("language_lael","language_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "language_id";

		$fdata["sourceSingle"] = "language_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "language_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "languages";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalanguage_lael["language_id"] = $fdata;
		$tdatalanguage_lael[".searchableFields"][] = "language_id";
//	label_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "label_id";
	$fdata["GoodName"] = "label_id";
	$fdata["ownerTable"] = "language_lael";
	$fdata["Label"] = GetFieldLabel("language_lael","label_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "label_id";

		$fdata["sourceSingle"] = "label_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "label_id";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "label_codes";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Equals";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalanguage_lael["label_id"] = $fdata;
		$tdatalanguage_lael[".searchableFields"][] = "label_id";
//	label_text
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "label_text";
	$fdata["GoodName"] = "label_text";
	$fdata["ownerTable"] = "language_lael";
	$fdata["Label"] = GetFieldLabel("language_lael","label_text");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "label_text";

		$fdata["sourceSingle"] = "label_text";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "label_text";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Text field");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
			$edata["HTML5InuptType"] = "text";

		$edata["EditParams"] = "";
		
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Number");
							
	
//	End validation

	
			
	
	
	
	$fdata["EditFormats"]["edit"] = $edata;
//	End Edit Formats


	$fdata["isSeparate"] = false;




// the field's search options settings
		$fdata["defaultSearchOption"] = "Contains";

			// the default search options list
				$fdata["searchOptionsList"] = array("Contains", "Equals", "Starts with", "More than", "Less than", "Between", "Empty", NOT_EMPTY);
// the end of search options settings


//Filters settings
	$fdata["filterTotals"] = 0;
		$fdata["filterMultiSelect"] = 0;
			$fdata["filterFormat"] = "Values list";
		$fdata["showCollapsed"] = false;

		$fdata["sortValueType"] = 0;
		$fdata["numberOfVisibleItems"] = 10;

		$fdata["filterBy"] = 0;

	

	
	
//end of Filters settings


	$tdatalanguage_lael["label_text"] = $fdata;
		$tdatalanguage_lael[".searchableFields"][] = "label_text";


$tables_data["language_lael"]=&$tdatalanguage_lael;
$field_labels["language_lael"] = &$fieldLabelslanguage_lael;
$fieldToolTips["language_lael"] = &$fieldToolTipslanguage_lael;
$placeHolders["language_lael"] = &$placeHolderslanguage_lael;
$page_titles["language_lael"] = &$pageTitleslanguage_lael;


changeTextControlsToDate( "language_lael" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["language_lael"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["language_lael"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_language_lael()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	language_id,  	label_id,  	label_text";
$proto0["m_strFrom"] = "FROM language_lael";
$proto0["m_strWhere"] = "";
$proto0["m_strOrderBy"] = "";
	
		;
			$proto0["cipherer"] = null;
$proto2=array();
$proto2["m_sql"] = "";
$proto2["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto2["m_column"]=$obj;
$proto2["m_contained"] = array();
$proto2["m_strCase"] = "";
$proto2["m_havingmode"] = false;
$proto2["m_inBrackets"] = false;
$proto2["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto2);

$proto0["m_where"] = $obj;
$proto4=array();
$proto4["m_sql"] = "";
$proto4["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto4["m_column"]=$obj;
$proto4["m_contained"] = array();
$proto4["m_strCase"] = "";
$proto4["m_havingmode"] = false;
$proto4["m_inBrackets"] = false;
$proto4["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto4);

$proto0["m_having"] = $obj;
$proto0["m_fieldlist"] = array();
						$proto6=array();
			$obj = new SQLField(array(
	"m_strName" => "id",
	"m_strTable" => "language_lael",
	"m_srcTableName" => "language_lael"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "language_lael";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "language_id",
	"m_strTable" => "language_lael",
	"m_srcTableName" => "language_lael"
));

$proto8["m_sql"] = "language_id";
$proto8["m_srcTableName"] = "language_lael";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "label_id",
	"m_strTable" => "language_lael",
	"m_srcTableName" => "language_lael"
));

$proto10["m_sql"] = "label_id";
$proto10["m_srcTableName"] = "language_lael";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "label_text",
	"m_strTable" => "language_lael",
	"m_srcTableName" => "language_lael"
));

$proto12["m_sql"] = "label_text";
$proto12["m_srcTableName"] = "language_lael";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "language_lael";
$proto15["m_srcTableName"] = "language_lael";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "id";
$proto15["m_columns"][] = "language_id";
$proto15["m_columns"][] = "label_id";
$proto15["m_columns"][] = "label_text";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "language_lael";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "language_lael";
$proto16=array();
$proto16["m_sql"] = "";
$proto16["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto16["m_column"]=$obj;
$proto16["m_contained"] = array();
$proto16["m_strCase"] = "";
$proto16["m_havingmode"] = false;
$proto16["m_inBrackets"] = false;
$proto16["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto16);

$proto14["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto14);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="language_lael";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_language_lael = createSqlQuery_language_lael();


	
		;

				

$tdatalanguage_lael[".sqlquery"] = $queryData_language_lael;



$tdatalanguage_lael[".hasEvents"] = false;

?>