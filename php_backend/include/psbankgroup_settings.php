<?php
$tdatapsbankgroup = array();
$tdatapsbankgroup[".searchableFields"] = array();
$tdatapsbankgroup[".ShortName"] = "psbankgroup";
$tdatapsbankgroup[".OwnerID"] = "";
$tdatapsbankgroup[".OriginalTable"] = "psBankGroup";


$tdatapsbankgroup[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapsbankgroup[".originalPagesByType"] = $tdatapsbankgroup[".pagesByType"];
$tdatapsbankgroup[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapsbankgroup[".originalPages"] = $tdatapsbankgroup[".pages"];
$tdatapsbankgroup[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapsbankgroup[".originalDefaultPages"] = $tdatapsbankgroup[".defaultPages"];

//	field labels
$fieldLabelspsbankgroup = array();
$fieldToolTipspsbankgroup = array();
$pageTitlespsbankgroup = array();
$placeHolderspsbankgroup = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspsbankgroup["English"] = array();
	$fieldToolTipspsbankgroup["English"] = array();
	$placeHolderspsbankgroup["English"] = array();
	$pageTitlespsbankgroup["English"] = array();
	$fieldLabelspsbankgroup["English"]["id"] = "Id";
	$fieldToolTipspsbankgroup["English"]["id"] = "";
	$placeHolderspsbankgroup["English"]["id"] = "";
	$fieldLabelspsbankgroup["English"]["name"] = "Name";
	$fieldToolTipspsbankgroup["English"]["name"] = "";
	$placeHolderspsbankgroup["English"]["name"] = "";
	if (count($fieldToolTipspsbankgroup["English"]))
		$tdatapsbankgroup[".isUseToolTips"] = true;
}


	$tdatapsbankgroup[".NCSearch"] = true;



$tdatapsbankgroup[".shortTableName"] = "psbankgroup";
$tdatapsbankgroup[".nSecOptions"] = 0;

$tdatapsbankgroup[".mainTableOwnerID"] = "";
$tdatapsbankgroup[".entityType"] = 0;
$tdatapsbankgroup[".connId"] = "karsaaz_pos_at_localhost";


$tdatapsbankgroup[".strOriginalTableName"] = "psBankGroup";

	



$tdatapsbankgroup[".showAddInPopup"] = false;

$tdatapsbankgroup[".showEditInPopup"] = false;

$tdatapsbankgroup[".showViewInPopup"] = false;

$tdatapsbankgroup[".listAjax"] = false;
//	temporary
//$tdatapsbankgroup[".listAjax"] = false;

	$tdatapsbankgroup[".audit"] = false;

	$tdatapsbankgroup[".locking"] = false;


$pages = $tdatapsbankgroup[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapsbankgroup[".edit"] = true;
	$tdatapsbankgroup[".afterEditAction"] = 1;
	$tdatapsbankgroup[".closePopupAfterEdit"] = 1;
	$tdatapsbankgroup[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapsbankgroup[".add"] = true;
$tdatapsbankgroup[".afterAddAction"] = 1;
$tdatapsbankgroup[".closePopupAfterAdd"] = 1;
$tdatapsbankgroup[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapsbankgroup[".list"] = true;
}



$tdatapsbankgroup[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapsbankgroup[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapsbankgroup[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapsbankgroup[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapsbankgroup[".printFriendly"] = true;
}



$tdatapsbankgroup[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapsbankgroup[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapsbankgroup[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapsbankgroup[".isUseAjaxSuggest"] = true;

$tdatapsbankgroup[".rowHighlite"] = true;





$tdatapsbankgroup[".ajaxCodeSnippetAdded"] = false;

$tdatapsbankgroup[".buttonsAdded"] = false;

$tdatapsbankgroup[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapsbankgroup[".isUseTimeForSearch"] = false;


$tdatapsbankgroup[".badgeColor"] = "2F4F4F";


$tdatapsbankgroup[".allSearchFields"] = array();
$tdatapsbankgroup[".filterFields"] = array();
$tdatapsbankgroup[".requiredSearchFields"] = array();

$tdatapsbankgroup[".googleLikeFields"] = array();
$tdatapsbankgroup[".googleLikeFields"][] = "id";
$tdatapsbankgroup[".googleLikeFields"][] = "name";



$tdatapsbankgroup[".tableType"] = "list";

$tdatapsbankgroup[".printerPageOrientation"] = 0;
$tdatapsbankgroup[".nPrinterPageScale"] = 100;

$tdatapsbankgroup[".nPrinterSplitRecords"] = 40;

$tdatapsbankgroup[".geocodingEnabled"] = false;










$tdatapsbankgroup[".pageSize"] = 20;

$tdatapsbankgroup[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapsbankgroup[".strOrderBy"] = $tstrOrderBy;

$tdatapsbankgroup[".orderindexes"] = array();


$tdatapsbankgroup[".sqlHead"] = "SELECT id,  	name";
$tdatapsbankgroup[".sqlFrom"] = "FROM psBankGroup";
$tdatapsbankgroup[".sqlWhereExpr"] = "";
$tdatapsbankgroup[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapsbankgroup[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapsbankgroup[".arrGroupsPerPage"] = $arrGPP;

$tdatapsbankgroup[".highlightSearchResults"] = true;

$tableKeyspsbankgroup = array();
$tableKeyspsbankgroup[] = "id";
$tdatapsbankgroup[".Keys"] = $tableKeyspsbankgroup;


$tdatapsbankgroup[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "psBankGroup";
	$fdata["Label"] = GetFieldLabel("psBankGroup","id");
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


	$tdatapsbankgroup["id"] = $fdata;
		$tdatapsbankgroup[".searchableFields"][] = "id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "psBankGroup";
	$fdata["Label"] = GetFieldLabel("psBankGroup","name");
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatapsbankgroup["name"] = $fdata;
		$tdatapsbankgroup[".searchableFields"][] = "name";


$tables_data["psBankGroup"]=&$tdatapsbankgroup;
$field_labels["psBankGroup"] = &$fieldLabelspsbankgroup;
$fieldToolTips["psBankGroup"] = &$fieldToolTipspsbankgroup;
$placeHolders["psBankGroup"] = &$placeHolderspsbankgroup;
$page_titles["psBankGroup"] = &$pageTitlespsbankgroup;


changeTextControlsToDate( "psBankGroup" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["psBankGroup"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["psBankGroup"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_psbankgroup()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	name";
$proto0["m_strFrom"] = "FROM psBankGroup";
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
	"m_strTable" => "psBankGroup",
	"m_srcTableName" => "psBankGroup"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "psBankGroup";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "psBankGroup",
	"m_srcTableName" => "psBankGroup"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "psBankGroup";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "psBankGroup";
$proto11["m_srcTableName"] = "psBankGroup";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "name";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "psBankGroup";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "psBankGroup";
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
$proto0["m_srcTableName"]="psBankGroup";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_psbankgroup = createSqlQuery_psbankgroup();


	
		;

		

$tdatapsbankgroup[".sqlquery"] = $queryData_psbankgroup;



$tdatapsbankgroup[".hasEvents"] = false;

?>