<?php
$tdatakarsaaz_posugmembers = array();
$tdatakarsaaz_posugmembers[".searchableFields"] = array();
$tdatakarsaaz_posugmembers[".ShortName"] = "karsaaz_posugmembers";
$tdatakarsaaz_posugmembers[".OwnerID"] = "";
$tdatakarsaaz_posugmembers[".OriginalTable"] = "karsaaz_posugmembers";


$tdatakarsaaz_posugmembers[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatakarsaaz_posugmembers[".originalPagesByType"] = $tdatakarsaaz_posugmembers[".pagesByType"];
$tdatakarsaaz_posugmembers[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatakarsaaz_posugmembers[".originalPages"] = $tdatakarsaaz_posugmembers[".pages"];
$tdatakarsaaz_posugmembers[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatakarsaaz_posugmembers[".originalDefaultPages"] = $tdatakarsaaz_posugmembers[".defaultPages"];

//	field labels
$fieldLabelskarsaaz_posugmembers = array();
$fieldToolTipskarsaaz_posugmembers = array();
$pageTitleskarsaaz_posugmembers = array();
$placeHolderskarsaaz_posugmembers = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelskarsaaz_posugmembers["English"] = array();
	$fieldToolTipskarsaaz_posugmembers["English"] = array();
	$placeHolderskarsaaz_posugmembers["English"] = array();
	$pageTitleskarsaaz_posugmembers["English"] = array();
	$fieldLabelskarsaaz_posugmembers["English"]["UserName"] = "User Name";
	$fieldToolTipskarsaaz_posugmembers["English"]["UserName"] = "";
	$placeHolderskarsaaz_posugmembers["English"]["UserName"] = "";
	$fieldLabelskarsaaz_posugmembers["English"]["GroupID"] = "Group ID";
	$fieldToolTipskarsaaz_posugmembers["English"]["GroupID"] = "";
	$placeHolderskarsaaz_posugmembers["English"]["GroupID"] = "";
	$fieldLabelskarsaaz_posugmembers["English"]["Provider"] = "Provider";
	$fieldToolTipskarsaaz_posugmembers["English"]["Provider"] = "";
	$placeHolderskarsaaz_posugmembers["English"]["Provider"] = "";
	if (count($fieldToolTipskarsaaz_posugmembers["English"]))
		$tdatakarsaaz_posugmembers[".isUseToolTips"] = true;
}


	$tdatakarsaaz_posugmembers[".NCSearch"] = true;



$tdatakarsaaz_posugmembers[".shortTableName"] = "karsaaz_posugmembers";
$tdatakarsaaz_posugmembers[".nSecOptions"] = 0;

$tdatakarsaaz_posugmembers[".mainTableOwnerID"] = "";
$tdatakarsaaz_posugmembers[".entityType"] = 0;
$tdatakarsaaz_posugmembers[".connId"] = "karsaaz_pos_at_localhost";


$tdatakarsaaz_posugmembers[".strOriginalTableName"] = "karsaaz_posugmembers";

	



$tdatakarsaaz_posugmembers[".showAddInPopup"] = false;

$tdatakarsaaz_posugmembers[".showEditInPopup"] = false;

$tdatakarsaaz_posugmembers[".showViewInPopup"] = false;

$tdatakarsaaz_posugmembers[".listAjax"] = false;
//	temporary
//$tdatakarsaaz_posugmembers[".listAjax"] = false;

	$tdatakarsaaz_posugmembers[".audit"] = false;

	$tdatakarsaaz_posugmembers[".locking"] = false;


$pages = $tdatakarsaaz_posugmembers[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatakarsaaz_posugmembers[".edit"] = true;
	$tdatakarsaaz_posugmembers[".afterEditAction"] = 1;
	$tdatakarsaaz_posugmembers[".closePopupAfterEdit"] = 1;
	$tdatakarsaaz_posugmembers[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatakarsaaz_posugmembers[".add"] = true;
$tdatakarsaaz_posugmembers[".afterAddAction"] = 1;
$tdatakarsaaz_posugmembers[".closePopupAfterAdd"] = 1;
$tdatakarsaaz_posugmembers[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatakarsaaz_posugmembers[".list"] = true;
}



$tdatakarsaaz_posugmembers[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatakarsaaz_posugmembers[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatakarsaaz_posugmembers[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatakarsaaz_posugmembers[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatakarsaaz_posugmembers[".printFriendly"] = true;
}



$tdatakarsaaz_posugmembers[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatakarsaaz_posugmembers[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatakarsaaz_posugmembers[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatakarsaaz_posugmembers[".isUseAjaxSuggest"] = true;

$tdatakarsaaz_posugmembers[".rowHighlite"] = true;





$tdatakarsaaz_posugmembers[".ajaxCodeSnippetAdded"] = false;

$tdatakarsaaz_posugmembers[".buttonsAdded"] = false;

$tdatakarsaaz_posugmembers[".addPageEvents"] = false;

// use timepicker for search panel
$tdatakarsaaz_posugmembers[".isUseTimeForSearch"] = false;


$tdatakarsaaz_posugmembers[".badgeColor"] = "5F9EA0";


$tdatakarsaaz_posugmembers[".allSearchFields"] = array();
$tdatakarsaaz_posugmembers[".filterFields"] = array();
$tdatakarsaaz_posugmembers[".requiredSearchFields"] = array();

$tdatakarsaaz_posugmembers[".googleLikeFields"] = array();
$tdatakarsaaz_posugmembers[".googleLikeFields"][] = "UserName";
$tdatakarsaaz_posugmembers[".googleLikeFields"][] = "GroupID";
$tdatakarsaaz_posugmembers[".googleLikeFields"][] = "Provider";



$tdatakarsaaz_posugmembers[".tableType"] = "list";

$tdatakarsaaz_posugmembers[".printerPageOrientation"] = 0;
$tdatakarsaaz_posugmembers[".nPrinterPageScale"] = 100;

$tdatakarsaaz_posugmembers[".nPrinterSplitRecords"] = 40;

$tdatakarsaaz_posugmembers[".geocodingEnabled"] = false;










$tdatakarsaaz_posugmembers[".pageSize"] = 20;

$tdatakarsaaz_posugmembers[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatakarsaaz_posugmembers[".strOrderBy"] = $tstrOrderBy;

$tdatakarsaaz_posugmembers[".orderindexes"] = array();


$tdatakarsaaz_posugmembers[".sqlHead"] = "SELECT UserName,  	GroupID,  	Provider";
$tdatakarsaaz_posugmembers[".sqlFrom"] = "FROM karsaaz_posugmembers";
$tdatakarsaaz_posugmembers[".sqlWhereExpr"] = "";
$tdatakarsaaz_posugmembers[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatakarsaaz_posugmembers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatakarsaaz_posugmembers[".arrGroupsPerPage"] = $arrGPP;

$tdatakarsaaz_posugmembers[".highlightSearchResults"] = true;

$tableKeyskarsaaz_posugmembers = array();
$tableKeyskarsaaz_posugmembers[] = "UserName";
$tableKeyskarsaaz_posugmembers[] = "GroupID";
$tableKeyskarsaaz_posugmembers[] = "Provider";
$tdatakarsaaz_posugmembers[".Keys"] = $tableKeyskarsaaz_posugmembers;


$tdatakarsaaz_posugmembers[".hideMobileList"] = array();




//	UserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "UserName";
	$fdata["GoodName"] = "UserName";
	$fdata["ownerTable"] = "karsaaz_posugmembers";
	$fdata["Label"] = GetFieldLabel("karsaaz_posugmembers","UserName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "UserName";

		$fdata["sourceSingle"] = "UserName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UserName";

	
	
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


	$tdatakarsaaz_posugmembers["UserName"] = $fdata;
		$tdatakarsaaz_posugmembers[".searchableFields"][] = "UserName";
//	GroupID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "GroupID";
	$fdata["GoodName"] = "GroupID";
	$fdata["ownerTable"] = "karsaaz_posugmembers";
	$fdata["Label"] = GetFieldLabel("karsaaz_posugmembers","GroupID");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "GroupID";

		$fdata["sourceSingle"] = "GroupID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GroupID";

	
	
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


	$tdatakarsaaz_posugmembers["GroupID"] = $fdata;
		$tdatakarsaaz_posugmembers[".searchableFields"][] = "GroupID";
//	Provider
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Provider";
	$fdata["GoodName"] = "Provider";
	$fdata["ownerTable"] = "karsaaz_posugmembers";
	$fdata["Label"] = GetFieldLabel("karsaaz_posugmembers","Provider");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Provider";

		$fdata["sourceSingle"] = "Provider";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Provider";

	
	
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
			$edata["EditParams"].= " maxlength=10";

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


	$tdatakarsaaz_posugmembers["Provider"] = $fdata;
		$tdatakarsaaz_posugmembers[".searchableFields"][] = "Provider";


$tables_data["karsaaz_posugmembers"]=&$tdatakarsaaz_posugmembers;
$field_labels["karsaaz_posugmembers"] = &$fieldLabelskarsaaz_posugmembers;
$fieldToolTips["karsaaz_posugmembers"] = &$fieldToolTipskarsaaz_posugmembers;
$placeHolders["karsaaz_posugmembers"] = &$placeHolderskarsaaz_posugmembers;
$page_titles["karsaaz_posugmembers"] = &$pageTitleskarsaaz_posugmembers;


changeTextControlsToDate( "karsaaz_posugmembers" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["karsaaz_posugmembers"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["karsaaz_posugmembers"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_karsaaz_posugmembers()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "UserName,  	GroupID,  	Provider";
$proto0["m_strFrom"] = "FROM karsaaz_posugmembers";
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
	"m_strName" => "UserName",
	"m_strTable" => "karsaaz_posugmembers",
	"m_srcTableName" => "karsaaz_posugmembers"
));

$proto6["m_sql"] = "UserName";
$proto6["m_srcTableName"] = "karsaaz_posugmembers";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "GroupID",
	"m_strTable" => "karsaaz_posugmembers",
	"m_srcTableName" => "karsaaz_posugmembers"
));

$proto8["m_sql"] = "GroupID";
$proto8["m_srcTableName"] = "karsaaz_posugmembers";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Provider",
	"m_strTable" => "karsaaz_posugmembers",
	"m_srcTableName" => "karsaaz_posugmembers"
));

$proto10["m_sql"] = "Provider";
$proto10["m_srcTableName"] = "karsaaz_posugmembers";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "karsaaz_posugmembers";
$proto13["m_srcTableName"] = "karsaaz_posugmembers";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "UserName";
$proto13["m_columns"][] = "GroupID";
$proto13["m_columns"][] = "Provider";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "karsaaz_posugmembers";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "karsaaz_posugmembers";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="karsaaz_posugmembers";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_karsaaz_posugmembers = createSqlQuery_karsaaz_posugmembers();


	
		;

			

$tdatakarsaaz_posugmembers[".sqlquery"] = $queryData_karsaaz_posugmembers;



$tdatakarsaaz_posugmembers[".hasEvents"] = false;

?>