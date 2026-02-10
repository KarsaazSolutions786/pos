<?php
$tdatakarsaaz_posugrights = array();
$tdatakarsaaz_posugrights[".searchableFields"] = array();
$tdatakarsaaz_posugrights[".ShortName"] = "karsaaz_posugrights";
$tdatakarsaaz_posugrights[".OwnerID"] = "";
$tdatakarsaaz_posugrights[".OriginalTable"] = "karsaaz_posugrights";


$tdatakarsaaz_posugrights[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatakarsaaz_posugrights[".originalPagesByType"] = $tdatakarsaaz_posugrights[".pagesByType"];
$tdatakarsaaz_posugrights[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatakarsaaz_posugrights[".originalPages"] = $tdatakarsaaz_posugrights[".pages"];
$tdatakarsaaz_posugrights[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatakarsaaz_posugrights[".originalDefaultPages"] = $tdatakarsaaz_posugrights[".defaultPages"];

//	field labels
$fieldLabelskarsaaz_posugrights = array();
$fieldToolTipskarsaaz_posugrights = array();
$pageTitleskarsaaz_posugrights = array();
$placeHolderskarsaaz_posugrights = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelskarsaaz_posugrights["English"] = array();
	$fieldToolTipskarsaaz_posugrights["English"] = array();
	$placeHolderskarsaaz_posugrights["English"] = array();
	$pageTitleskarsaaz_posugrights["English"] = array();
	$fieldLabelskarsaaz_posugrights["English"]["TableName"] = "Table Name";
	$fieldToolTipskarsaaz_posugrights["English"]["TableName"] = "";
	$placeHolderskarsaaz_posugrights["English"]["TableName"] = "";
	$fieldLabelskarsaaz_posugrights["English"]["GroupID"] = "Group ID";
	$fieldToolTipskarsaaz_posugrights["English"]["GroupID"] = "";
	$placeHolderskarsaaz_posugrights["English"]["GroupID"] = "";
	$fieldLabelskarsaaz_posugrights["English"]["AccessMask"] = "Access Mask";
	$fieldToolTipskarsaaz_posugrights["English"]["AccessMask"] = "";
	$placeHolderskarsaaz_posugrights["English"]["AccessMask"] = "";
	$fieldLabelskarsaaz_posugrights["English"]["Page"] = "Page";
	$fieldToolTipskarsaaz_posugrights["English"]["Page"] = "";
	$placeHolderskarsaaz_posugrights["English"]["Page"] = "";
	if (count($fieldToolTipskarsaaz_posugrights["English"]))
		$tdatakarsaaz_posugrights[".isUseToolTips"] = true;
}


	$tdatakarsaaz_posugrights[".NCSearch"] = true;



$tdatakarsaaz_posugrights[".shortTableName"] = "karsaaz_posugrights";
$tdatakarsaaz_posugrights[".nSecOptions"] = 0;

$tdatakarsaaz_posugrights[".mainTableOwnerID"] = "";
$tdatakarsaaz_posugrights[".entityType"] = 0;
$tdatakarsaaz_posugrights[".connId"] = "karsaaz_pos_at_localhost";


$tdatakarsaaz_posugrights[".strOriginalTableName"] = "karsaaz_posugrights";

	



$tdatakarsaaz_posugrights[".showAddInPopup"] = false;

$tdatakarsaaz_posugrights[".showEditInPopup"] = false;

$tdatakarsaaz_posugrights[".showViewInPopup"] = false;

$tdatakarsaaz_posugrights[".listAjax"] = false;
//	temporary
//$tdatakarsaaz_posugrights[".listAjax"] = false;

	$tdatakarsaaz_posugrights[".audit"] = false;

	$tdatakarsaaz_posugrights[".locking"] = false;


$pages = $tdatakarsaaz_posugrights[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatakarsaaz_posugrights[".edit"] = true;
	$tdatakarsaaz_posugrights[".afterEditAction"] = 1;
	$tdatakarsaaz_posugrights[".closePopupAfterEdit"] = 1;
	$tdatakarsaaz_posugrights[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatakarsaaz_posugrights[".add"] = true;
$tdatakarsaaz_posugrights[".afterAddAction"] = 1;
$tdatakarsaaz_posugrights[".closePopupAfterAdd"] = 1;
$tdatakarsaaz_posugrights[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatakarsaaz_posugrights[".list"] = true;
}



$tdatakarsaaz_posugrights[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatakarsaaz_posugrights[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatakarsaaz_posugrights[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatakarsaaz_posugrights[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatakarsaaz_posugrights[".printFriendly"] = true;
}



$tdatakarsaaz_posugrights[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatakarsaaz_posugrights[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatakarsaaz_posugrights[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatakarsaaz_posugrights[".isUseAjaxSuggest"] = true;

$tdatakarsaaz_posugrights[".rowHighlite"] = true;





$tdatakarsaaz_posugrights[".ajaxCodeSnippetAdded"] = false;

$tdatakarsaaz_posugrights[".buttonsAdded"] = false;

$tdatakarsaaz_posugrights[".addPageEvents"] = false;

// use timepicker for search panel
$tdatakarsaaz_posugrights[".isUseTimeForSearch"] = false;


$tdatakarsaaz_posugrights[".badgeColor"] = "4682B4";


$tdatakarsaaz_posugrights[".allSearchFields"] = array();
$tdatakarsaaz_posugrights[".filterFields"] = array();
$tdatakarsaaz_posugrights[".requiredSearchFields"] = array();

$tdatakarsaaz_posugrights[".googleLikeFields"] = array();
$tdatakarsaaz_posugrights[".googleLikeFields"][] = "TableName";
$tdatakarsaaz_posugrights[".googleLikeFields"][] = "GroupID";
$tdatakarsaaz_posugrights[".googleLikeFields"][] = "AccessMask";
$tdatakarsaaz_posugrights[".googleLikeFields"][] = "Page";



$tdatakarsaaz_posugrights[".tableType"] = "list";

$tdatakarsaaz_posugrights[".printerPageOrientation"] = 0;
$tdatakarsaaz_posugrights[".nPrinterPageScale"] = 100;

$tdatakarsaaz_posugrights[".nPrinterSplitRecords"] = 40;

$tdatakarsaaz_posugrights[".geocodingEnabled"] = false;










$tdatakarsaaz_posugrights[".pageSize"] = 20;

$tdatakarsaaz_posugrights[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatakarsaaz_posugrights[".strOrderBy"] = $tstrOrderBy;

$tdatakarsaaz_posugrights[".orderindexes"] = array();


$tdatakarsaaz_posugrights[".sqlHead"] = "SELECT TableName,  	GroupID,  	AccessMask,  	Page";
$tdatakarsaaz_posugrights[".sqlFrom"] = "FROM karsaaz_posugrights";
$tdatakarsaaz_posugrights[".sqlWhereExpr"] = "";
$tdatakarsaaz_posugrights[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatakarsaaz_posugrights[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatakarsaaz_posugrights[".arrGroupsPerPage"] = $arrGPP;

$tdatakarsaaz_posugrights[".highlightSearchResults"] = true;

$tableKeyskarsaaz_posugrights = array();
$tableKeyskarsaaz_posugrights[] = "TableName";
$tableKeyskarsaaz_posugrights[] = "GroupID";
$tdatakarsaaz_posugrights[".Keys"] = $tableKeyskarsaaz_posugrights;


$tdatakarsaaz_posugrights[".hideMobileList"] = array();




//	TableName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "TableName";
	$fdata["GoodName"] = "TableName";
	$fdata["ownerTable"] = "karsaaz_posugrights";
	$fdata["Label"] = GetFieldLabel("karsaaz_posugrights","TableName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "TableName";

		$fdata["sourceSingle"] = "TableName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TableName";

	
	
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


	$tdatakarsaaz_posugrights["TableName"] = $fdata;
		$tdatakarsaaz_posugrights[".searchableFields"][] = "TableName";
//	GroupID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "GroupID";
	$fdata["GoodName"] = "GroupID";
	$fdata["ownerTable"] = "karsaaz_posugrights";
	$fdata["Label"] = GetFieldLabel("karsaaz_posugrights","GroupID");
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


	$tdatakarsaaz_posugrights["GroupID"] = $fdata;
		$tdatakarsaaz_posugrights[".searchableFields"][] = "GroupID";
//	AccessMask
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "AccessMask";
	$fdata["GoodName"] = "AccessMask";
	$fdata["ownerTable"] = "karsaaz_posugrights";
	$fdata["Label"] = GetFieldLabel("karsaaz_posugrights","AccessMask");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "AccessMask";

		$fdata["sourceSingle"] = "AccessMask";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AccessMask";

	
	
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


	$tdatakarsaaz_posugrights["AccessMask"] = $fdata;
		$tdatakarsaaz_posugrights[".searchableFields"][] = "AccessMask";
//	Page
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Page";
	$fdata["GoodName"] = "Page";
	$fdata["ownerTable"] = "karsaaz_posugrights";
	$fdata["Label"] = GetFieldLabel("karsaaz_posugrights","Page");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "Page";

		$fdata["sourceSingle"] = "Page";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Page";

	
	
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

	$edata = array("EditFormat" => "Text area");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 600;

			
	
	
	
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


	$tdatakarsaaz_posugrights["Page"] = $fdata;
		$tdatakarsaaz_posugrights[".searchableFields"][] = "Page";


$tables_data["karsaaz_posugrights"]=&$tdatakarsaaz_posugrights;
$field_labels["karsaaz_posugrights"] = &$fieldLabelskarsaaz_posugrights;
$fieldToolTips["karsaaz_posugrights"] = &$fieldToolTipskarsaaz_posugrights;
$placeHolders["karsaaz_posugrights"] = &$placeHolderskarsaaz_posugrights;
$page_titles["karsaaz_posugrights"] = &$pageTitleskarsaaz_posugrights;


changeTextControlsToDate( "karsaaz_posugrights" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["karsaaz_posugrights"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["karsaaz_posugrights"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_karsaaz_posugrights()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "TableName,  	GroupID,  	AccessMask,  	Page";
$proto0["m_strFrom"] = "FROM karsaaz_posugrights";
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
	"m_strName" => "TableName",
	"m_strTable" => "karsaaz_posugrights",
	"m_srcTableName" => "karsaaz_posugrights"
));

$proto6["m_sql"] = "TableName";
$proto6["m_srcTableName"] = "karsaaz_posugrights";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "GroupID",
	"m_strTable" => "karsaaz_posugrights",
	"m_srcTableName" => "karsaaz_posugrights"
));

$proto8["m_sql"] = "GroupID";
$proto8["m_srcTableName"] = "karsaaz_posugrights";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "AccessMask",
	"m_strTable" => "karsaaz_posugrights",
	"m_srcTableName" => "karsaaz_posugrights"
));

$proto10["m_sql"] = "AccessMask";
$proto10["m_srcTableName"] = "karsaaz_posugrights";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Page",
	"m_strTable" => "karsaaz_posugrights",
	"m_srcTableName" => "karsaaz_posugrights"
));

$proto12["m_sql"] = "Page";
$proto12["m_srcTableName"] = "karsaaz_posugrights";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "karsaaz_posugrights";
$proto15["m_srcTableName"] = "karsaaz_posugrights";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "TableName";
$proto15["m_columns"][] = "GroupID";
$proto15["m_columns"][] = "AccessMask";
$proto15["m_columns"][] = "Page";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "karsaaz_posugrights";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "karsaaz_posugrights";
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
$proto0["m_srcTableName"]="karsaaz_posugrights";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_karsaaz_posugrights = createSqlQuery_karsaaz_posugrights();


	
		;

				

$tdatakarsaaz_posugrights[".sqlquery"] = $queryData_karsaaz_posugrights;



$tdatakarsaaz_posugrights[".hasEvents"] = false;

?>