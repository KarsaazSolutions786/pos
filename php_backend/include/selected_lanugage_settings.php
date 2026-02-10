<?php
$tdataselected_lanugage = array();
$tdataselected_lanugage[".searchableFields"] = array();
$tdataselected_lanugage[".ShortName"] = "selected_lanugage";
$tdataselected_lanugage[".OwnerID"] = "";
$tdataselected_lanugage[".OriginalTable"] = "selected_lanugage";


$tdataselected_lanugage[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataselected_lanugage[".originalPagesByType"] = $tdataselected_lanugage[".pagesByType"];
$tdataselected_lanugage[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataselected_lanugage[".originalPages"] = $tdataselected_lanugage[".pages"];
$tdataselected_lanugage[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataselected_lanugage[".originalDefaultPages"] = $tdataselected_lanugage[".defaultPages"];

//	field labels
$fieldLabelsselected_lanugage = array();
$fieldToolTipsselected_lanugage = array();
$pageTitlesselected_lanugage = array();
$placeHoldersselected_lanugage = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsselected_lanugage["English"] = array();
	$fieldToolTipsselected_lanugage["English"] = array();
	$placeHoldersselected_lanugage["English"] = array();
	$pageTitlesselected_lanugage["English"] = array();
	$fieldLabelsselected_lanugage["English"]["id"] = "Id";
	$fieldToolTipsselected_lanugage["English"]["id"] = "";
	$placeHoldersselected_lanugage["English"]["id"] = "";
	$fieldLabelsselected_lanugage["English"]["language_id"] = "Language";
	$fieldToolTipsselected_lanugage["English"]["language_id"] = "";
	$placeHoldersselected_lanugage["English"]["language_id"] = "";
	if (count($fieldToolTipsselected_lanugage["English"]))
		$tdataselected_lanugage[".isUseToolTips"] = true;
}


	$tdataselected_lanugage[".NCSearch"] = true;



$tdataselected_lanugage[".shortTableName"] = "selected_lanugage";
$tdataselected_lanugage[".nSecOptions"] = 0;

$tdataselected_lanugage[".mainTableOwnerID"] = "";
$tdataselected_lanugage[".entityType"] = 0;
$tdataselected_lanugage[".connId"] = "karsaaz_pos_at_localhost";


$tdataselected_lanugage[".strOriginalTableName"] = "selected_lanugage";

	



$tdataselected_lanugage[".showAddInPopup"] = false;

$tdataselected_lanugage[".showEditInPopup"] = false;

$tdataselected_lanugage[".showViewInPopup"] = false;

$tdataselected_lanugage[".listAjax"] = false;
//	temporary
//$tdataselected_lanugage[".listAjax"] = false;

	$tdataselected_lanugage[".audit"] = false;

	$tdataselected_lanugage[".locking"] = false;


$pages = $tdataselected_lanugage[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataselected_lanugage[".edit"] = true;
	$tdataselected_lanugage[".afterEditAction"] = 1;
	$tdataselected_lanugage[".closePopupAfterEdit"] = 1;
	$tdataselected_lanugage[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataselected_lanugage[".add"] = true;
$tdataselected_lanugage[".afterAddAction"] = 1;
$tdataselected_lanugage[".closePopupAfterAdd"] = 1;
$tdataselected_lanugage[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataselected_lanugage[".list"] = true;
}



$tdataselected_lanugage[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataselected_lanugage[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataselected_lanugage[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataselected_lanugage[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataselected_lanugage[".printFriendly"] = true;
}



$tdataselected_lanugage[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataselected_lanugage[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataselected_lanugage[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataselected_lanugage[".isUseAjaxSuggest"] = true;

$tdataselected_lanugage[".rowHighlite"] = true;





$tdataselected_lanugage[".ajaxCodeSnippetAdded"] = false;

$tdataselected_lanugage[".buttonsAdded"] = false;

$tdataselected_lanugage[".addPageEvents"] = false;

// use timepicker for search panel
$tdataselected_lanugage[".isUseTimeForSearch"] = false;


$tdataselected_lanugage[".badgeColor"] = "00C2C5";


$tdataselected_lanugage[".allSearchFields"] = array();
$tdataselected_lanugage[".filterFields"] = array();
$tdataselected_lanugage[".requiredSearchFields"] = array();

$tdataselected_lanugage[".googleLikeFields"] = array();
$tdataselected_lanugage[".googleLikeFields"][] = "id";
$tdataselected_lanugage[".googleLikeFields"][] = "language_id";



$tdataselected_lanugage[".tableType"] = "list";

$tdataselected_lanugage[".printerPageOrientation"] = 0;
$tdataselected_lanugage[".nPrinterPageScale"] = 100;

$tdataselected_lanugage[".nPrinterSplitRecords"] = 40;

$tdataselected_lanugage[".geocodingEnabled"] = false;










$tdataselected_lanugage[".pageSize"] = 20;

$tdataselected_lanugage[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataselected_lanugage[".strOrderBy"] = $tstrOrderBy;

$tdataselected_lanugage[".orderindexes"] = array();


$tdataselected_lanugage[".sqlHead"] = "SELECT id,  	language_id";
$tdataselected_lanugage[".sqlFrom"] = "FROM selected_lanugage";
$tdataselected_lanugage[".sqlWhereExpr"] = "";
$tdataselected_lanugage[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataselected_lanugage[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataselected_lanugage[".arrGroupsPerPage"] = $arrGPP;

$tdataselected_lanugage[".highlightSearchResults"] = true;

$tableKeysselected_lanugage = array();
$tableKeysselected_lanugage[] = "id";
$tdataselected_lanugage[".Keys"] = $tableKeysselected_lanugage;


$tdataselected_lanugage[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "selected_lanugage";
	$fdata["Label"] = GetFieldLabel("selected_lanugage","id");
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


	$tdataselected_lanugage["id"] = $fdata;
		$tdataselected_lanugage[".searchableFields"][] = "id";
//	language_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "language_id";
	$fdata["GoodName"] = "language_id";
	$fdata["ownerTable"] = "selected_lanugage";
	$fdata["Label"] = GetFieldLabel("selected_lanugage","language_id");
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


	$tdataselected_lanugage["language_id"] = $fdata;
		$tdataselected_lanugage[".searchableFields"][] = "language_id";


$tables_data["selected_lanugage"]=&$tdataselected_lanugage;
$field_labels["selected_lanugage"] = &$fieldLabelsselected_lanugage;
$fieldToolTips["selected_lanugage"] = &$fieldToolTipsselected_lanugage;
$placeHolders["selected_lanugage"] = &$placeHoldersselected_lanugage;
$page_titles["selected_lanugage"] = &$pageTitlesselected_lanugage;


changeTextControlsToDate( "selected_lanugage" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["selected_lanugage"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["selected_lanugage"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_selected_lanugage()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	language_id";
$proto0["m_strFrom"] = "FROM selected_lanugage";
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
	"m_strTable" => "selected_lanugage",
	"m_srcTableName" => "selected_lanugage"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "selected_lanugage";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "language_id",
	"m_strTable" => "selected_lanugage",
	"m_srcTableName" => "selected_lanugage"
));

$proto8["m_sql"] = "language_id";
$proto8["m_srcTableName"] = "selected_lanugage";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "selected_lanugage";
$proto11["m_srcTableName"] = "selected_lanugage";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "language_id";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "selected_lanugage";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "selected_lanugage";
$proto12=array();
$proto12["m_sql"] = "";
$proto12["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto12["m_column"]=$obj;
$proto12["m_contained"] = array();
$proto12["m_strCase"] = "";
$proto12["m_havingmode"] = false;
$proto12["m_inBrackets"] = false;
$proto12["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto12);

$proto10["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto10);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="selected_lanugage";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_selected_lanugage = createSqlQuery_selected_lanugage();


	
		;

		

$tdataselected_lanugage[".sqlquery"] = $queryData_selected_lanugage;



$tdataselected_lanugage[".hasEvents"] = false;

?>