<?php
$tdatalabel_codes = array();
$tdatalabel_codes[".searchableFields"] = array();
$tdatalabel_codes[".ShortName"] = "label_codes";
$tdatalabel_codes[".OwnerID"] = "";
$tdatalabel_codes[".OriginalTable"] = "label_codes";


$tdatalabel_codes[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatalabel_codes[".originalPagesByType"] = $tdatalabel_codes[".pagesByType"];
$tdatalabel_codes[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatalabel_codes[".originalPages"] = $tdatalabel_codes[".pages"];
$tdatalabel_codes[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatalabel_codes[".originalDefaultPages"] = $tdatalabel_codes[".defaultPages"];

//	field labels
$fieldLabelslabel_codes = array();
$fieldToolTipslabel_codes = array();
$pageTitleslabel_codes = array();
$placeHolderslabel_codes = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslabel_codes["English"] = array();
	$fieldToolTipslabel_codes["English"] = array();
	$placeHolderslabel_codes["English"] = array();
	$pageTitleslabel_codes["English"] = array();
	$fieldLabelslabel_codes["English"]["id"] = "Id";
	$fieldToolTipslabel_codes["English"]["id"] = "";
	$placeHolderslabel_codes["English"]["id"] = "";
	$fieldLabelslabel_codes["English"]["name"] = "Name";
	$fieldToolTipslabel_codes["English"]["name"] = "";
	$placeHolderslabel_codes["English"]["name"] = "";
	$fieldLabelslabel_codes["English"]["label_group_id"] = "Label Group";
	$fieldToolTipslabel_codes["English"]["label_group_id"] = "";
	$placeHolderslabel_codes["English"]["label_group_id"] = "";
	if (count($fieldToolTipslabel_codes["English"]))
		$tdatalabel_codes[".isUseToolTips"] = true;
}


	$tdatalabel_codes[".NCSearch"] = true;



$tdatalabel_codes[".shortTableName"] = "label_codes";
$tdatalabel_codes[".nSecOptions"] = 0;

$tdatalabel_codes[".mainTableOwnerID"] = "";
$tdatalabel_codes[".entityType"] = 0;
$tdatalabel_codes[".connId"] = "karsaaz_pos_at_localhost";


$tdatalabel_codes[".strOriginalTableName"] = "label_codes";

	



$tdatalabel_codes[".showAddInPopup"] = false;

$tdatalabel_codes[".showEditInPopup"] = false;

$tdatalabel_codes[".showViewInPopup"] = false;

$tdatalabel_codes[".listAjax"] = false;
//	temporary
//$tdatalabel_codes[".listAjax"] = false;

	$tdatalabel_codes[".audit"] = false;

	$tdatalabel_codes[".locking"] = false;


$pages = $tdatalabel_codes[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalabel_codes[".edit"] = true;
	$tdatalabel_codes[".afterEditAction"] = 1;
	$tdatalabel_codes[".closePopupAfterEdit"] = 1;
	$tdatalabel_codes[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalabel_codes[".add"] = true;
$tdatalabel_codes[".afterAddAction"] = 1;
$tdatalabel_codes[".closePopupAfterAdd"] = 1;
$tdatalabel_codes[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalabel_codes[".list"] = true;
}



$tdatalabel_codes[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalabel_codes[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalabel_codes[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalabel_codes[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalabel_codes[".printFriendly"] = true;
}



$tdatalabel_codes[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalabel_codes[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalabel_codes[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalabel_codes[".isUseAjaxSuggest"] = true;

$tdatalabel_codes[".rowHighlite"] = true;





$tdatalabel_codes[".ajaxCodeSnippetAdded"] = false;

$tdatalabel_codes[".buttonsAdded"] = false;

$tdatalabel_codes[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalabel_codes[".isUseTimeForSearch"] = false;


$tdatalabel_codes[".badgeColor"] = "00C2C5";


$tdatalabel_codes[".allSearchFields"] = array();
$tdatalabel_codes[".filterFields"] = array();
$tdatalabel_codes[".requiredSearchFields"] = array();

$tdatalabel_codes[".googleLikeFields"] = array();
$tdatalabel_codes[".googleLikeFields"][] = "id";
$tdatalabel_codes[".googleLikeFields"][] = "name";
$tdatalabel_codes[".googleLikeFields"][] = "label_group_id";



$tdatalabel_codes[".tableType"] = "list";

$tdatalabel_codes[".printerPageOrientation"] = 0;
$tdatalabel_codes[".nPrinterPageScale"] = 100;

$tdatalabel_codes[".nPrinterSplitRecords"] = 40;

$tdatalabel_codes[".geocodingEnabled"] = false;










$tdatalabel_codes[".pageSize"] = 20;

$tdatalabel_codes[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalabel_codes[".strOrderBy"] = $tstrOrderBy;

$tdatalabel_codes[".orderindexes"] = array();


$tdatalabel_codes[".sqlHead"] = "SELECT id,  	name,  	label_group_id";
$tdatalabel_codes[".sqlFrom"] = "FROM label_codes";
$tdatalabel_codes[".sqlWhereExpr"] = "";
$tdatalabel_codes[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalabel_codes[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalabel_codes[".arrGroupsPerPage"] = $arrGPP;

$tdatalabel_codes[".highlightSearchResults"] = true;

$tableKeyslabel_codes = array();
$tableKeyslabel_codes[] = "id";
$tdatalabel_codes[".Keys"] = $tableKeyslabel_codes;


$tdatalabel_codes[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "label_codes";
	$fdata["Label"] = GetFieldLabel("label_codes","id");
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


	$tdatalabel_codes["id"] = $fdata;
		$tdatalabel_codes[".searchableFields"][] = "id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "label_codes";
	$fdata["Label"] = GetFieldLabel("label_codes","name");
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


	$tdatalabel_codes["name"] = $fdata;
		$tdatalabel_codes[".searchableFields"][] = "name";
//	label_group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "label_group_id";
	$fdata["GoodName"] = "label_group_id";
	$fdata["ownerTable"] = "label_codes";
	$fdata["Label"] = GetFieldLabel("label_codes","label_group_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "label_group_id";

		$fdata["sourceSingle"] = "label_group_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "label_group_id";

	
	
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
	$edata["LookupTable"] = "label_groups";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "group_name";

	

	
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


	$tdatalabel_codes["label_group_id"] = $fdata;
		$tdatalabel_codes[".searchableFields"][] = "label_group_id";


$tables_data["label_codes"]=&$tdatalabel_codes;
$field_labels["label_codes"] = &$fieldLabelslabel_codes;
$fieldToolTips["label_codes"] = &$fieldToolTipslabel_codes;
$placeHolders["label_codes"] = &$placeHolderslabel_codes;
$page_titles["label_codes"] = &$pageTitleslabel_codes;


changeTextControlsToDate( "label_codes" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["label_codes"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["label_codes"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_label_codes()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	name,  	label_group_id";
$proto0["m_strFrom"] = "FROM label_codes";
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
	"m_strTable" => "label_codes",
	"m_srcTableName" => "label_codes"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "label_codes";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "label_codes",
	"m_srcTableName" => "label_codes"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "label_codes";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "label_group_id",
	"m_strTable" => "label_codes",
	"m_srcTableName" => "label_codes"
));

$proto10["m_sql"] = "label_group_id";
$proto10["m_srcTableName"] = "label_codes";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "label_codes";
$proto13["m_srcTableName"] = "label_codes";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "name";
$proto13["m_columns"][] = "label_group_id";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "label_codes";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "label_codes";
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
$proto0["m_srcTableName"]="label_codes";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_label_codes = createSqlQuery_label_codes();


	
		;

			

$tdatalabel_codes[".sqlquery"] = $queryData_label_codes;



$tdatalabel_codes[".hasEvents"] = false;

?>