<?php
$tdatakarsaaz_posuggroups = array();
$tdatakarsaaz_posuggroups[".searchableFields"] = array();
$tdatakarsaaz_posuggroups[".ShortName"] = "karsaaz_posuggroups";
$tdatakarsaaz_posuggroups[".OwnerID"] = "";
$tdatakarsaaz_posuggroups[".OriginalTable"] = "karsaaz_posuggroups";


$tdatakarsaaz_posuggroups[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatakarsaaz_posuggroups[".originalPagesByType"] = $tdatakarsaaz_posuggroups[".pagesByType"];
$tdatakarsaaz_posuggroups[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatakarsaaz_posuggroups[".originalPages"] = $tdatakarsaaz_posuggroups[".pages"];
$tdatakarsaaz_posuggroups[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatakarsaaz_posuggroups[".originalDefaultPages"] = $tdatakarsaaz_posuggroups[".defaultPages"];

//	field labels
$fieldLabelskarsaaz_posuggroups = array();
$fieldToolTipskarsaaz_posuggroups = array();
$pageTitleskarsaaz_posuggroups = array();
$placeHolderskarsaaz_posuggroups = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelskarsaaz_posuggroups["English"] = array();
	$fieldToolTipskarsaaz_posuggroups["English"] = array();
	$placeHolderskarsaaz_posuggroups["English"] = array();
	$pageTitleskarsaaz_posuggroups["English"] = array();
	$fieldLabelskarsaaz_posuggroups["English"]["GroupID"] = "Group ID";
	$fieldToolTipskarsaaz_posuggroups["English"]["GroupID"] = "";
	$placeHolderskarsaaz_posuggroups["English"]["GroupID"] = "";
	$fieldLabelskarsaaz_posuggroups["English"]["Label"] = "Label";
	$fieldToolTipskarsaaz_posuggroups["English"]["Label"] = "";
	$placeHolderskarsaaz_posuggroups["English"]["Label"] = "";
	$fieldLabelskarsaaz_posuggroups["English"]["Provider"] = "Provider";
	$fieldToolTipskarsaaz_posuggroups["English"]["Provider"] = "";
	$placeHolderskarsaaz_posuggroups["English"]["Provider"] = "";
	$fieldLabelskarsaaz_posuggroups["English"]["Comment"] = "Comment";
	$fieldToolTipskarsaaz_posuggroups["English"]["Comment"] = "";
	$placeHolderskarsaaz_posuggroups["English"]["Comment"] = "";
	if (count($fieldToolTipskarsaaz_posuggroups["English"]))
		$tdatakarsaaz_posuggroups[".isUseToolTips"] = true;
}


	$tdatakarsaaz_posuggroups[".NCSearch"] = true;



$tdatakarsaaz_posuggroups[".shortTableName"] = "karsaaz_posuggroups";
$tdatakarsaaz_posuggroups[".nSecOptions"] = 0;

$tdatakarsaaz_posuggroups[".mainTableOwnerID"] = "";
$tdatakarsaaz_posuggroups[".entityType"] = 0;
$tdatakarsaaz_posuggroups[".connId"] = "karsaaz_pos_at_localhost";


$tdatakarsaaz_posuggroups[".strOriginalTableName"] = "karsaaz_posuggroups";

	



$tdatakarsaaz_posuggroups[".showAddInPopup"] = false;

$tdatakarsaaz_posuggroups[".showEditInPopup"] = false;

$tdatakarsaaz_posuggroups[".showViewInPopup"] = false;

$tdatakarsaaz_posuggroups[".listAjax"] = false;
//	temporary
//$tdatakarsaaz_posuggroups[".listAjax"] = false;

	$tdatakarsaaz_posuggroups[".audit"] = false;

	$tdatakarsaaz_posuggroups[".locking"] = false;


$pages = $tdatakarsaaz_posuggroups[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatakarsaaz_posuggroups[".edit"] = true;
	$tdatakarsaaz_posuggroups[".afterEditAction"] = 1;
	$tdatakarsaaz_posuggroups[".closePopupAfterEdit"] = 1;
	$tdatakarsaaz_posuggroups[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatakarsaaz_posuggroups[".add"] = true;
$tdatakarsaaz_posuggroups[".afterAddAction"] = 1;
$tdatakarsaaz_posuggroups[".closePopupAfterAdd"] = 1;
$tdatakarsaaz_posuggroups[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatakarsaaz_posuggroups[".list"] = true;
}



$tdatakarsaaz_posuggroups[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatakarsaaz_posuggroups[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatakarsaaz_posuggroups[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatakarsaaz_posuggroups[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatakarsaaz_posuggroups[".printFriendly"] = true;
}



$tdatakarsaaz_posuggroups[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatakarsaaz_posuggroups[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatakarsaaz_posuggroups[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatakarsaaz_posuggroups[".isUseAjaxSuggest"] = true;

$tdatakarsaaz_posuggroups[".rowHighlite"] = true;





$tdatakarsaaz_posuggroups[".ajaxCodeSnippetAdded"] = false;

$tdatakarsaaz_posuggroups[".buttonsAdded"] = false;

$tdatakarsaaz_posuggroups[".addPageEvents"] = false;

// use timepicker for search panel
$tdatakarsaaz_posuggroups[".isUseTimeForSearch"] = false;


$tdatakarsaaz_posuggroups[".badgeColor"] = "E67349";


$tdatakarsaaz_posuggroups[".allSearchFields"] = array();
$tdatakarsaaz_posuggroups[".filterFields"] = array();
$tdatakarsaaz_posuggroups[".requiredSearchFields"] = array();

$tdatakarsaaz_posuggroups[".googleLikeFields"] = array();
$tdatakarsaaz_posuggroups[".googleLikeFields"][] = "GroupID";
$tdatakarsaaz_posuggroups[".googleLikeFields"][] = "Label";
$tdatakarsaaz_posuggroups[".googleLikeFields"][] = "Provider";
$tdatakarsaaz_posuggroups[".googleLikeFields"][] = "Comment";



$tdatakarsaaz_posuggroups[".tableType"] = "list";

$tdatakarsaaz_posuggroups[".printerPageOrientation"] = 0;
$tdatakarsaaz_posuggroups[".nPrinterPageScale"] = 100;

$tdatakarsaaz_posuggroups[".nPrinterSplitRecords"] = 40;

$tdatakarsaaz_posuggroups[".geocodingEnabled"] = false;










$tdatakarsaaz_posuggroups[".pageSize"] = 20;

$tdatakarsaaz_posuggroups[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatakarsaaz_posuggroups[".strOrderBy"] = $tstrOrderBy;

$tdatakarsaaz_posuggroups[".orderindexes"] = array();


$tdatakarsaaz_posuggroups[".sqlHead"] = "SELECT GroupID,  	`Label`,  	Provider,  	`Comment`";
$tdatakarsaaz_posuggroups[".sqlFrom"] = "FROM karsaaz_posuggroups";
$tdatakarsaaz_posuggroups[".sqlWhereExpr"] = "";
$tdatakarsaaz_posuggroups[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatakarsaaz_posuggroups[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatakarsaaz_posuggroups[".arrGroupsPerPage"] = $arrGPP;

$tdatakarsaaz_posuggroups[".highlightSearchResults"] = true;

$tableKeyskarsaaz_posuggroups = array();
$tableKeyskarsaaz_posuggroups[] = "GroupID";
$tdatakarsaaz_posuggroups[".Keys"] = $tableKeyskarsaaz_posuggroups;


$tdatakarsaaz_posuggroups[".hideMobileList"] = array();




//	GroupID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "GroupID";
	$fdata["GoodName"] = "GroupID";
	$fdata["ownerTable"] = "karsaaz_posuggroups";
	$fdata["Label"] = GetFieldLabel("karsaaz_posuggroups","GroupID");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

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


	$tdatakarsaaz_posuggroups["GroupID"] = $fdata;
		$tdatakarsaaz_posuggroups[".searchableFields"][] = "GroupID";
//	Label
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Label";
	$fdata["GoodName"] = "Label";
	$fdata["ownerTable"] = "karsaaz_posuggroups";
	$fdata["Label"] = GetFieldLabel("karsaaz_posuggroups","Label");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Label";

		$fdata["sourceSingle"] = "Label";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Label`";

	
	
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
			$edata["EditParams"].= " maxlength=300";

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


	$tdatakarsaaz_posuggroups["Label"] = $fdata;
		$tdatakarsaaz_posuggroups[".searchableFields"][] = "Label";
//	Provider
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Provider";
	$fdata["GoodName"] = "Provider";
	$fdata["ownerTable"] = "karsaaz_posuggroups";
	$fdata["Label"] = GetFieldLabel("karsaaz_posuggroups","Provider");
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


	$tdatakarsaaz_posuggroups["Provider"] = $fdata;
		$tdatakarsaaz_posuggroups[".searchableFields"][] = "Provider";
//	Comment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Comment";
	$fdata["GoodName"] = "Comment";
	$fdata["ownerTable"] = "karsaaz_posuggroups";
	$fdata["Label"] = GetFieldLabel("karsaaz_posuggroups","Comment");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "Comment";

		$fdata["sourceSingle"] = "Comment";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Comment`";

	
	
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


	$tdatakarsaaz_posuggroups["Comment"] = $fdata;
		$tdatakarsaaz_posuggroups[".searchableFields"][] = "Comment";


$tables_data["karsaaz_posuggroups"]=&$tdatakarsaaz_posuggroups;
$field_labels["karsaaz_posuggroups"] = &$fieldLabelskarsaaz_posuggroups;
$fieldToolTips["karsaaz_posuggroups"] = &$fieldToolTipskarsaaz_posuggroups;
$placeHolders["karsaaz_posuggroups"] = &$placeHolderskarsaaz_posuggroups;
$page_titles["karsaaz_posuggroups"] = &$pageTitleskarsaaz_posuggroups;


changeTextControlsToDate( "karsaaz_posuggroups" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["karsaaz_posuggroups"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["karsaaz_posuggroups"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_karsaaz_posuggroups()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "GroupID,  	`Label`,  	Provider,  	`Comment`";
$proto0["m_strFrom"] = "FROM karsaaz_posuggroups";
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
	"m_strName" => "GroupID",
	"m_strTable" => "karsaaz_posuggroups",
	"m_srcTableName" => "karsaaz_posuggroups"
));

$proto6["m_sql"] = "GroupID";
$proto6["m_srcTableName"] = "karsaaz_posuggroups";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Label",
	"m_strTable" => "karsaaz_posuggroups",
	"m_srcTableName" => "karsaaz_posuggroups"
));

$proto8["m_sql"] = "`Label`";
$proto8["m_srcTableName"] = "karsaaz_posuggroups";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Provider",
	"m_strTable" => "karsaaz_posuggroups",
	"m_srcTableName" => "karsaaz_posuggroups"
));

$proto10["m_sql"] = "Provider";
$proto10["m_srcTableName"] = "karsaaz_posuggroups";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Comment",
	"m_strTable" => "karsaaz_posuggroups",
	"m_srcTableName" => "karsaaz_posuggroups"
));

$proto12["m_sql"] = "`Comment`";
$proto12["m_srcTableName"] = "karsaaz_posuggroups";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "karsaaz_posuggroups";
$proto15["m_srcTableName"] = "karsaaz_posuggroups";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "GroupID";
$proto15["m_columns"][] = "Label";
$proto15["m_columns"][] = "Provider";
$proto15["m_columns"][] = "Comment";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "karsaaz_posuggroups";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "karsaaz_posuggroups";
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
$proto0["m_srcTableName"]="karsaaz_posuggroups";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_karsaaz_posuggroups = createSqlQuery_karsaaz_posuggroups();


	
		;

				

$tdatakarsaaz_posuggroups[".sqlquery"] = $queryData_karsaaz_posuggroups;



$tdatakarsaaz_posuggroups[".hasEvents"] = false;

?>