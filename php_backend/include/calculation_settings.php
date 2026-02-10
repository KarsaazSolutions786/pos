<?php
$tdatacalculation = array();
$tdatacalculation[".searchableFields"] = array();
$tdatacalculation[".ShortName"] = "calculation";
$tdatacalculation[".OwnerID"] = "";
$tdatacalculation[".OriginalTable"] = "calculation";


$tdatacalculation[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacalculation[".originalPagesByType"] = $tdatacalculation[".pagesByType"];
$tdatacalculation[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacalculation[".originalPages"] = $tdatacalculation[".pages"];
$tdatacalculation[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacalculation[".originalDefaultPages"] = $tdatacalculation[".defaultPages"];

//	field labels
$fieldLabelscalculation = array();
$fieldToolTipscalculation = array();
$pageTitlescalculation = array();
$placeHolderscalculation = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscalculation["English"] = array();
	$fieldToolTipscalculation["English"] = array();
	$placeHolderscalculation["English"] = array();
	$pageTitlescalculation["English"] = array();
	$fieldLabelscalculation["English"]["id"] = "Id";
	$fieldToolTipscalculation["English"]["id"] = "";
	$placeHolderscalculation["English"]["id"] = "";
	$fieldLabelscalculation["English"]["name"] = "Name";
	$fieldToolTipscalculation["English"]["name"] = "";
	$placeHolderscalculation["English"]["name"] = "";
	if (count($fieldToolTipscalculation["English"]))
		$tdatacalculation[".isUseToolTips"] = true;
}


	$tdatacalculation[".NCSearch"] = true;



$tdatacalculation[".shortTableName"] = "calculation";
$tdatacalculation[".nSecOptions"] = 0;

$tdatacalculation[".mainTableOwnerID"] = "";
$tdatacalculation[".entityType"] = 0;
$tdatacalculation[".connId"] = "karsaaz_pos_at_localhost";


$tdatacalculation[".strOriginalTableName"] = "calculation";

	



$tdatacalculation[".showAddInPopup"] = false;

$tdatacalculation[".showEditInPopup"] = false;

$tdatacalculation[".showViewInPopup"] = false;

$tdatacalculation[".listAjax"] = false;
//	temporary
//$tdatacalculation[".listAjax"] = false;

	$tdatacalculation[".audit"] = false;

	$tdatacalculation[".locking"] = false;


$pages = $tdatacalculation[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacalculation[".edit"] = true;
	$tdatacalculation[".afterEditAction"] = 1;
	$tdatacalculation[".closePopupAfterEdit"] = 1;
	$tdatacalculation[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacalculation[".add"] = true;
$tdatacalculation[".afterAddAction"] = 1;
$tdatacalculation[".closePopupAfterAdd"] = 1;
$tdatacalculation[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacalculation[".list"] = true;
}



$tdatacalculation[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacalculation[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacalculation[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacalculation[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacalculation[".printFriendly"] = true;
}



$tdatacalculation[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacalculation[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacalculation[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacalculation[".isUseAjaxSuggest"] = true;

$tdatacalculation[".rowHighlite"] = true;





$tdatacalculation[".ajaxCodeSnippetAdded"] = false;

$tdatacalculation[".buttonsAdded"] = false;

$tdatacalculation[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacalculation[".isUseTimeForSearch"] = false;


$tdatacalculation[".badgeColor"] = "E67349";


$tdatacalculation[".allSearchFields"] = array();
$tdatacalculation[".filterFields"] = array();
$tdatacalculation[".requiredSearchFields"] = array();

$tdatacalculation[".googleLikeFields"] = array();
$tdatacalculation[".googleLikeFields"][] = "id";
$tdatacalculation[".googleLikeFields"][] = "name";



$tdatacalculation[".tableType"] = "list";

$tdatacalculation[".printerPageOrientation"] = 0;
$tdatacalculation[".nPrinterPageScale"] = 100;

$tdatacalculation[".nPrinterSplitRecords"] = 40;

$tdatacalculation[".geocodingEnabled"] = false;










$tdatacalculation[".pageSize"] = 20;

$tdatacalculation[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacalculation[".strOrderBy"] = $tstrOrderBy;

$tdatacalculation[".orderindexes"] = array();


$tdatacalculation[".sqlHead"] = "SELECT id,  	name";
$tdatacalculation[".sqlFrom"] = "FROM calculation";
$tdatacalculation[".sqlWhereExpr"] = "";
$tdatacalculation[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacalculation[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacalculation[".arrGroupsPerPage"] = $arrGPP;

$tdatacalculation[".highlightSearchResults"] = true;

$tableKeyscalculation = array();
$tableKeyscalculation[] = "id";
$tdatacalculation[".Keys"] = $tableKeyscalculation;


$tdatacalculation[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "calculation";
	$fdata["Label"] = GetFieldLabel("calculation","id");
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


	$tdatacalculation["id"] = $fdata;
		$tdatacalculation[".searchableFields"][] = "id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "calculation";
	$fdata["Label"] = GetFieldLabel("calculation","name");
	$fdata["FieldType"] = 200;


	
	
			

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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatacalculation["name"] = $fdata;
		$tdatacalculation[".searchableFields"][] = "name";


$tables_data["calculation"]=&$tdatacalculation;
$field_labels["calculation"] = &$fieldLabelscalculation;
$fieldToolTips["calculation"] = &$fieldToolTipscalculation;
$placeHolders["calculation"] = &$placeHolderscalculation;
$page_titles["calculation"] = &$pageTitlescalculation;


changeTextControlsToDate( "calculation" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["calculation"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["calculation"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_calculation()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	name";
$proto0["m_strFrom"] = "FROM calculation";
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
	"m_strTable" => "calculation",
	"m_srcTableName" => "calculation"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "calculation";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "calculation",
	"m_srcTableName" => "calculation"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "calculation";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "calculation";
$proto11["m_srcTableName"] = "calculation";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "name";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "calculation";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "calculation";
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
$proto0["m_srcTableName"]="calculation";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_calculation = createSqlQuery_calculation();


	
		;

		

$tdatacalculation[".sqlquery"] = $queryData_calculation;



$tdatacalculation[".hasEvents"] = false;

?>