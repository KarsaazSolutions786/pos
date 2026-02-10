<?php
$tdatalabel_groups = array();
$tdatalabel_groups[".searchableFields"] = array();
$tdatalabel_groups[".ShortName"] = "label_groups";
$tdatalabel_groups[".OwnerID"] = "";
$tdatalabel_groups[".OriginalTable"] = "label_groups";


$tdatalabel_groups[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatalabel_groups[".originalPagesByType"] = $tdatalabel_groups[".pagesByType"];
$tdatalabel_groups[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatalabel_groups[".originalPages"] = $tdatalabel_groups[".pages"];
$tdatalabel_groups[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatalabel_groups[".originalDefaultPages"] = $tdatalabel_groups[".defaultPages"];

//	field labels
$fieldLabelslabel_groups = array();
$fieldToolTipslabel_groups = array();
$pageTitleslabel_groups = array();
$placeHolderslabel_groups = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslabel_groups["English"] = array();
	$fieldToolTipslabel_groups["English"] = array();
	$placeHolderslabel_groups["English"] = array();
	$pageTitleslabel_groups["English"] = array();
	$fieldLabelslabel_groups["English"]["id"] = "Id";
	$fieldToolTipslabel_groups["English"]["id"] = "";
	$placeHolderslabel_groups["English"]["id"] = "";
	$fieldLabelslabel_groups["English"]["group_name"] = "Group Name";
	$fieldToolTipslabel_groups["English"]["group_name"] = "";
	$placeHolderslabel_groups["English"]["group_name"] = "";
	if (count($fieldToolTipslabel_groups["English"]))
		$tdatalabel_groups[".isUseToolTips"] = true;
}


	$tdatalabel_groups[".NCSearch"] = true;



$tdatalabel_groups[".shortTableName"] = "label_groups";
$tdatalabel_groups[".nSecOptions"] = 0;

$tdatalabel_groups[".mainTableOwnerID"] = "";
$tdatalabel_groups[".entityType"] = 0;
$tdatalabel_groups[".connId"] = "karsaaz_pos_at_localhost";


$tdatalabel_groups[".strOriginalTableName"] = "label_groups";

	



$tdatalabel_groups[".showAddInPopup"] = false;

$tdatalabel_groups[".showEditInPopup"] = false;

$tdatalabel_groups[".showViewInPopup"] = false;

$tdatalabel_groups[".listAjax"] = false;
//	temporary
//$tdatalabel_groups[".listAjax"] = false;

	$tdatalabel_groups[".audit"] = false;

	$tdatalabel_groups[".locking"] = false;


$pages = $tdatalabel_groups[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalabel_groups[".edit"] = true;
	$tdatalabel_groups[".afterEditAction"] = 1;
	$tdatalabel_groups[".closePopupAfterEdit"] = 1;
	$tdatalabel_groups[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalabel_groups[".add"] = true;
$tdatalabel_groups[".afterAddAction"] = 1;
$tdatalabel_groups[".closePopupAfterAdd"] = 1;
$tdatalabel_groups[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalabel_groups[".list"] = true;
}



$tdatalabel_groups[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalabel_groups[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalabel_groups[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalabel_groups[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalabel_groups[".printFriendly"] = true;
}



$tdatalabel_groups[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalabel_groups[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalabel_groups[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalabel_groups[".isUseAjaxSuggest"] = true;

$tdatalabel_groups[".rowHighlite"] = true;





$tdatalabel_groups[".ajaxCodeSnippetAdded"] = false;

$tdatalabel_groups[".buttonsAdded"] = false;

$tdatalabel_groups[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalabel_groups[".isUseTimeForSearch"] = false;


$tdatalabel_groups[".badgeColor"] = "008B8B";


$tdatalabel_groups[".allSearchFields"] = array();
$tdatalabel_groups[".filterFields"] = array();
$tdatalabel_groups[".requiredSearchFields"] = array();

$tdatalabel_groups[".googleLikeFields"] = array();
$tdatalabel_groups[".googleLikeFields"][] = "id";
$tdatalabel_groups[".googleLikeFields"][] = "group_name";



$tdatalabel_groups[".tableType"] = "list";

$tdatalabel_groups[".printerPageOrientation"] = 0;
$tdatalabel_groups[".nPrinterPageScale"] = 100;

$tdatalabel_groups[".nPrinterSplitRecords"] = 40;

$tdatalabel_groups[".geocodingEnabled"] = false;










$tdatalabel_groups[".pageSize"] = 20;

$tdatalabel_groups[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalabel_groups[".strOrderBy"] = $tstrOrderBy;

$tdatalabel_groups[".orderindexes"] = array();


$tdatalabel_groups[".sqlHead"] = "SELECT id,  	group_name";
$tdatalabel_groups[".sqlFrom"] = "FROM label_groups";
$tdatalabel_groups[".sqlWhereExpr"] = "";
$tdatalabel_groups[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalabel_groups[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalabel_groups[".arrGroupsPerPage"] = $arrGPP;

$tdatalabel_groups[".highlightSearchResults"] = true;

$tableKeyslabel_groups = array();
$tableKeyslabel_groups[] = "id";
$tdatalabel_groups[".Keys"] = $tableKeyslabel_groups;


$tdatalabel_groups[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "label_groups";
	$fdata["Label"] = GetFieldLabel("label_groups","id");
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


	$tdatalabel_groups["id"] = $fdata;
		$tdatalabel_groups[".searchableFields"][] = "id";
//	group_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "group_name";
	$fdata["GoodName"] = "group_name";
	$fdata["ownerTable"] = "label_groups";
	$fdata["Label"] = GetFieldLabel("label_groups","group_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "group_name";

		$fdata["sourceSingle"] = "group_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "group_name";

	
	
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


	$tdatalabel_groups["group_name"] = $fdata;
		$tdatalabel_groups[".searchableFields"][] = "group_name";


$tables_data["label_groups"]=&$tdatalabel_groups;
$field_labels["label_groups"] = &$fieldLabelslabel_groups;
$fieldToolTips["label_groups"] = &$fieldToolTipslabel_groups;
$placeHolders["label_groups"] = &$placeHolderslabel_groups;
$page_titles["label_groups"] = &$pageTitleslabel_groups;


changeTextControlsToDate( "label_groups" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["label_groups"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["label_groups"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_label_groups()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	group_name";
$proto0["m_strFrom"] = "FROM label_groups";
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
	"m_strTable" => "label_groups",
	"m_srcTableName" => "label_groups"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "label_groups";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "group_name",
	"m_strTable" => "label_groups",
	"m_srcTableName" => "label_groups"
));

$proto8["m_sql"] = "group_name";
$proto8["m_srcTableName"] = "label_groups";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "label_groups";
$proto11["m_srcTableName"] = "label_groups";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "group_name";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "label_groups";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "label_groups";
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
$proto0["m_srcTableName"]="label_groups";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_label_groups = createSqlQuery_label_groups();


	
		;

		

$tdatalabel_groups[".sqlquery"] = $queryData_label_groups;



$tdatalabel_groups[".hasEvents"] = false;

?>