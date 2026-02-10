<?php
$tdataweight_units = array();
$tdataweight_units[".searchableFields"] = array();
$tdataweight_units[".ShortName"] = "weight_units";
$tdataweight_units[".OwnerID"] = "";
$tdataweight_units[".OriginalTable"] = "weight_units";


$tdataweight_units[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataweight_units[".originalPagesByType"] = $tdataweight_units[".pagesByType"];
$tdataweight_units[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataweight_units[".originalPages"] = $tdataweight_units[".pages"];
$tdataweight_units[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataweight_units[".originalDefaultPages"] = $tdataweight_units[".defaultPages"];

//	field labels
$fieldLabelsweight_units = array();
$fieldToolTipsweight_units = array();
$pageTitlesweight_units = array();
$placeHoldersweight_units = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsweight_units["English"] = array();
	$fieldToolTipsweight_units["English"] = array();
	$placeHoldersweight_units["English"] = array();
	$pageTitlesweight_units["English"] = array();
	$fieldLabelsweight_units["English"]["id"] = "Id";
	$fieldToolTipsweight_units["English"]["id"] = "";
	$placeHoldersweight_units["English"]["id"] = "";
	$fieldLabelsweight_units["English"]["name"] = "Name";
	$fieldToolTipsweight_units["English"]["name"] = "";
	$placeHoldersweight_units["English"]["name"] = "";
	if (count($fieldToolTipsweight_units["English"]))
		$tdataweight_units[".isUseToolTips"] = true;
}


	$tdataweight_units[".NCSearch"] = true;



$tdataweight_units[".shortTableName"] = "weight_units";
$tdataweight_units[".nSecOptions"] = 0;

$tdataweight_units[".mainTableOwnerID"] = "";
$tdataweight_units[".entityType"] = 0;
$tdataweight_units[".connId"] = "karsaaz_pos_at_localhost";


$tdataweight_units[".strOriginalTableName"] = "weight_units";

	



$tdataweight_units[".showAddInPopup"] = false;

$tdataweight_units[".showEditInPopup"] = false;

$tdataweight_units[".showViewInPopup"] = false;

$tdataweight_units[".listAjax"] = false;
//	temporary
//$tdataweight_units[".listAjax"] = false;

	$tdataweight_units[".audit"] = false;

	$tdataweight_units[".locking"] = false;


$pages = $tdataweight_units[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataweight_units[".edit"] = true;
	$tdataweight_units[".afterEditAction"] = 1;
	$tdataweight_units[".closePopupAfterEdit"] = 1;
	$tdataweight_units[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataweight_units[".add"] = true;
$tdataweight_units[".afterAddAction"] = 1;
$tdataweight_units[".closePopupAfterAdd"] = 1;
$tdataweight_units[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataweight_units[".list"] = true;
}



$tdataweight_units[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataweight_units[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataweight_units[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataweight_units[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataweight_units[".printFriendly"] = true;
}



$tdataweight_units[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataweight_units[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataweight_units[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataweight_units[".isUseAjaxSuggest"] = true;

$tdataweight_units[".rowHighlite"] = true;





$tdataweight_units[".ajaxCodeSnippetAdded"] = false;

$tdataweight_units[".buttonsAdded"] = false;

$tdataweight_units[".addPageEvents"] = false;

// use timepicker for search panel
$tdataweight_units[".isUseTimeForSearch"] = false;


$tdataweight_units[".badgeColor"] = "6B8E23";


$tdataweight_units[".allSearchFields"] = array();
$tdataweight_units[".filterFields"] = array();
$tdataweight_units[".requiredSearchFields"] = array();

$tdataweight_units[".googleLikeFields"] = array();
$tdataweight_units[".googleLikeFields"][] = "id";
$tdataweight_units[".googleLikeFields"][] = "name";



$tdataweight_units[".tableType"] = "list";

$tdataweight_units[".printerPageOrientation"] = 0;
$tdataweight_units[".nPrinterPageScale"] = 100;

$tdataweight_units[".nPrinterSplitRecords"] = 40;

$tdataweight_units[".geocodingEnabled"] = false;










$tdataweight_units[".pageSize"] = 20;

$tdataweight_units[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataweight_units[".strOrderBy"] = $tstrOrderBy;

$tdataweight_units[".orderindexes"] = array();


$tdataweight_units[".sqlHead"] = "SELECT id,  	name";
$tdataweight_units[".sqlFrom"] = "FROM weight_units";
$tdataweight_units[".sqlWhereExpr"] = "";
$tdataweight_units[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataweight_units[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataweight_units[".arrGroupsPerPage"] = $arrGPP;

$tdataweight_units[".highlightSearchResults"] = true;

$tableKeysweight_units = array();
$tableKeysweight_units[] = "id";
$tdataweight_units[".Keys"] = $tableKeysweight_units;


$tdataweight_units[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "weight_units";
	$fdata["Label"] = GetFieldLabel("weight_units","id");
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


	$tdataweight_units["id"] = $fdata;
		$tdataweight_units[".searchableFields"][] = "id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "weight_units";
	$fdata["Label"] = GetFieldLabel("weight_units","name");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "name";

		$fdata["sourceSingle"] = "name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "name";

	
	
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


	$tdataweight_units["name"] = $fdata;
		$tdataweight_units[".searchableFields"][] = "name";


$tables_data["weight_units"]=&$tdataweight_units;
$field_labels["weight_units"] = &$fieldLabelsweight_units;
$fieldToolTips["weight_units"] = &$fieldToolTipsweight_units;
$placeHolders["weight_units"] = &$placeHoldersweight_units;
$page_titles["weight_units"] = &$pageTitlesweight_units;


changeTextControlsToDate( "weight_units" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["weight_units"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["weight_units"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_weight_units()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	name";
$proto0["m_strFrom"] = "FROM weight_units";
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
	"m_strTable" => "weight_units",
	"m_srcTableName" => "weight_units"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "weight_units";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "weight_units",
	"m_srcTableName" => "weight_units"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "weight_units";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "weight_units";
$proto11["m_srcTableName"] = "weight_units";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "name";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "weight_units";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "weight_units";
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
$proto0["m_srcTableName"]="weight_units";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_weight_units = createSqlQuery_weight_units();


	
		;

		

$tdataweight_units[".sqlquery"] = $queryData_weight_units;



$tdataweight_units[".hasEvents"] = false;

?>