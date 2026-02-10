<?php
$tdatacustomer_type = array();
$tdatacustomer_type[".searchableFields"] = array();
$tdatacustomer_type[".ShortName"] = "customer_type";
$tdatacustomer_type[".OwnerID"] = "";
$tdatacustomer_type[".OriginalTable"] = "customer_type";


$tdatacustomer_type[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacustomer_type[".originalPagesByType"] = $tdatacustomer_type[".pagesByType"];
$tdatacustomer_type[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacustomer_type[".originalPages"] = $tdatacustomer_type[".pages"];
$tdatacustomer_type[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacustomer_type[".originalDefaultPages"] = $tdatacustomer_type[".defaultPages"];

//	field labels
$fieldLabelscustomer_type = array();
$fieldToolTipscustomer_type = array();
$pageTitlescustomer_type = array();
$placeHolderscustomer_type = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscustomer_type["English"] = array();
	$fieldToolTipscustomer_type["English"] = array();
	$placeHolderscustomer_type["English"] = array();
	$pageTitlescustomer_type["English"] = array();
	$fieldLabelscustomer_type["English"]["id"] = "Id";
	$fieldToolTipscustomer_type["English"]["id"] = "";
	$placeHolderscustomer_type["English"]["id"] = "";
	$fieldLabelscustomer_type["English"]["name"] = "Name";
	$fieldToolTipscustomer_type["English"]["name"] = "";
	$placeHolderscustomer_type["English"]["name"] = "";
	if (count($fieldToolTipscustomer_type["English"]))
		$tdatacustomer_type[".isUseToolTips"] = true;
}


	$tdatacustomer_type[".NCSearch"] = true;



$tdatacustomer_type[".shortTableName"] = "customer_type";
$tdatacustomer_type[".nSecOptions"] = 0;

$tdatacustomer_type[".mainTableOwnerID"] = "";
$tdatacustomer_type[".entityType"] = 0;
$tdatacustomer_type[".connId"] = "karsaaz_pos_at_localhost";


$tdatacustomer_type[".strOriginalTableName"] = "customer_type";

	



$tdatacustomer_type[".showAddInPopup"] = false;

$tdatacustomer_type[".showEditInPopup"] = false;

$tdatacustomer_type[".showViewInPopup"] = false;

$tdatacustomer_type[".listAjax"] = false;
//	temporary
//$tdatacustomer_type[".listAjax"] = false;

	$tdatacustomer_type[".audit"] = false;

	$tdatacustomer_type[".locking"] = false;


$pages = $tdatacustomer_type[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacustomer_type[".edit"] = true;
	$tdatacustomer_type[".afterEditAction"] = 1;
	$tdatacustomer_type[".closePopupAfterEdit"] = 1;
	$tdatacustomer_type[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacustomer_type[".add"] = true;
$tdatacustomer_type[".afterAddAction"] = 1;
$tdatacustomer_type[".closePopupAfterAdd"] = 1;
$tdatacustomer_type[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacustomer_type[".list"] = true;
}



$tdatacustomer_type[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacustomer_type[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacustomer_type[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacustomer_type[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacustomer_type[".printFriendly"] = true;
}



$tdatacustomer_type[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacustomer_type[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacustomer_type[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacustomer_type[".isUseAjaxSuggest"] = true;

$tdatacustomer_type[".rowHighlite"] = true;





$tdatacustomer_type[".ajaxCodeSnippetAdded"] = false;

$tdatacustomer_type[".buttonsAdded"] = false;

$tdatacustomer_type[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacustomer_type[".isUseTimeForSearch"] = false;


$tdatacustomer_type[".badgeColor"] = "D2AF80";


$tdatacustomer_type[".allSearchFields"] = array();
$tdatacustomer_type[".filterFields"] = array();
$tdatacustomer_type[".requiredSearchFields"] = array();

$tdatacustomer_type[".googleLikeFields"] = array();
$tdatacustomer_type[".googleLikeFields"][] = "id";
$tdatacustomer_type[".googleLikeFields"][] = "name";



$tdatacustomer_type[".tableType"] = "list";

$tdatacustomer_type[".printerPageOrientation"] = 0;
$tdatacustomer_type[".nPrinterPageScale"] = 100;

$tdatacustomer_type[".nPrinterSplitRecords"] = 40;

$tdatacustomer_type[".geocodingEnabled"] = false;










$tdatacustomer_type[".pageSize"] = 20;

$tdatacustomer_type[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacustomer_type[".strOrderBy"] = $tstrOrderBy;

$tdatacustomer_type[".orderindexes"] = array();


$tdatacustomer_type[".sqlHead"] = "SELECT id,  	name";
$tdatacustomer_type[".sqlFrom"] = "FROM customer_type";
$tdatacustomer_type[".sqlWhereExpr"] = "";
$tdatacustomer_type[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacustomer_type[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacustomer_type[".arrGroupsPerPage"] = $arrGPP;

$tdatacustomer_type[".highlightSearchResults"] = true;

$tableKeyscustomer_type = array();
$tableKeyscustomer_type[] = "id";
$tdatacustomer_type[".Keys"] = $tableKeyscustomer_type;


$tdatacustomer_type[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "customer_type";
	$fdata["Label"] = GetFieldLabel("customer_type","id");
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


	$tdatacustomer_type["id"] = $fdata;
		$tdatacustomer_type[".searchableFields"][] = "id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "customer_type";
	$fdata["Label"] = GetFieldLabel("customer_type","name");
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


	$tdatacustomer_type["name"] = $fdata;
		$tdatacustomer_type[".searchableFields"][] = "name";


$tables_data["customer_type"]=&$tdatacustomer_type;
$field_labels["customer_type"] = &$fieldLabelscustomer_type;
$fieldToolTips["customer_type"] = &$fieldToolTipscustomer_type;
$placeHolders["customer_type"] = &$placeHolderscustomer_type;
$page_titles["customer_type"] = &$pageTitlescustomer_type;


changeTextControlsToDate( "customer_type" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["customer_type"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["customer_type"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_customer_type()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	name";
$proto0["m_strFrom"] = "FROM customer_type";
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
	"m_strTable" => "customer_type",
	"m_srcTableName" => "customer_type"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "customer_type";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "customer_type",
	"m_srcTableName" => "customer_type"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "customer_type";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto10=array();
$proto10["m_link"] = "SQLL_MAIN";
			$proto11=array();
$proto11["m_strName"] = "customer_type";
$proto11["m_srcTableName"] = "customer_type";
$proto11["m_columns"] = array();
$proto11["m_columns"][] = "id";
$proto11["m_columns"][] = "name";
$obj = new SQLTable($proto11);

$proto10["m_table"] = $obj;
$proto10["m_sql"] = "customer_type";
$proto10["m_alias"] = "";
$proto10["m_srcTableName"] = "customer_type";
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
$proto0["m_srcTableName"]="customer_type";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_customer_type = createSqlQuery_customer_type();


	
		;

		

$tdatacustomer_type[".sqlquery"] = $queryData_customer_type;



$tdatacustomer_type[".hasEvents"] = false;

?>