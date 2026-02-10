<?php
$tdatakarsaaz_pos1uggroups = array();
$tdatakarsaaz_pos1uggroups[".searchableFields"] = array();
$tdatakarsaaz_pos1uggroups[".ShortName"] = "karsaaz_pos1uggroups";
$tdatakarsaaz_pos1uggroups[".OwnerID"] = "";
$tdatakarsaaz_pos1uggroups[".OriginalTable"] = "karsaaz_pos1uggroups";


$tdatakarsaaz_pos1uggroups[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatakarsaaz_pos1uggroups[".originalPagesByType"] = $tdatakarsaaz_pos1uggroups[".pagesByType"];
$tdatakarsaaz_pos1uggroups[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatakarsaaz_pos1uggroups[".originalPages"] = $tdatakarsaaz_pos1uggroups[".pages"];
$tdatakarsaaz_pos1uggroups[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatakarsaaz_pos1uggroups[".originalDefaultPages"] = $tdatakarsaaz_pos1uggroups[".defaultPages"];

//	field labels
$fieldLabelskarsaaz_pos1uggroups = array();
$fieldToolTipskarsaaz_pos1uggroups = array();
$pageTitleskarsaaz_pos1uggroups = array();
$placeHolderskarsaaz_pos1uggroups = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelskarsaaz_pos1uggroups["English"] = array();
	$fieldToolTipskarsaaz_pos1uggroups["English"] = array();
	$placeHolderskarsaaz_pos1uggroups["English"] = array();
	$pageTitleskarsaaz_pos1uggroups["English"] = array();
	$fieldLabelskarsaaz_pos1uggroups["English"]["GroupID"] = "Group ID";
	$fieldToolTipskarsaaz_pos1uggroups["English"]["GroupID"] = "";
	$placeHolderskarsaaz_pos1uggroups["English"]["GroupID"] = "";
	$fieldLabelskarsaaz_pos1uggroups["English"]["Label"] = "Label";
	$fieldToolTipskarsaaz_pos1uggroups["English"]["Label"] = "";
	$placeHolderskarsaaz_pos1uggroups["English"]["Label"] = "";
	$fieldLabelskarsaaz_pos1uggroups["English"]["Provider"] = "Provider";
	$fieldToolTipskarsaaz_pos1uggroups["English"]["Provider"] = "";
	$placeHolderskarsaaz_pos1uggroups["English"]["Provider"] = "";
	$fieldLabelskarsaaz_pos1uggroups["English"]["Comment"] = "Comment";
	$fieldToolTipskarsaaz_pos1uggroups["English"]["Comment"] = "";
	$placeHolderskarsaaz_pos1uggroups["English"]["Comment"] = "";
	if (count($fieldToolTipskarsaaz_pos1uggroups["English"]))
		$tdatakarsaaz_pos1uggroups[".isUseToolTips"] = true;
}


	$tdatakarsaaz_pos1uggroups[".NCSearch"] = true;



$tdatakarsaaz_pos1uggroups[".shortTableName"] = "karsaaz_pos1uggroups";
$tdatakarsaaz_pos1uggroups[".nSecOptions"] = 0;

$tdatakarsaaz_pos1uggroups[".mainTableOwnerID"] = "";
$tdatakarsaaz_pos1uggroups[".entityType"] = 0;
$tdatakarsaaz_pos1uggroups[".connId"] = "karsaaz_pos_at_localhost";


$tdatakarsaaz_pos1uggroups[".strOriginalTableName"] = "karsaaz_pos1uggroups";

	



$tdatakarsaaz_pos1uggroups[".showAddInPopup"] = false;

$tdatakarsaaz_pos1uggroups[".showEditInPopup"] = false;

$tdatakarsaaz_pos1uggroups[".showViewInPopup"] = false;

$tdatakarsaaz_pos1uggroups[".listAjax"] = false;
//	temporary
//$tdatakarsaaz_pos1uggroups[".listAjax"] = false;

	$tdatakarsaaz_pos1uggroups[".audit"] = false;

	$tdatakarsaaz_pos1uggroups[".locking"] = false;


$pages = $tdatakarsaaz_pos1uggroups[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatakarsaaz_pos1uggroups[".edit"] = true;
	$tdatakarsaaz_pos1uggroups[".afterEditAction"] = 1;
	$tdatakarsaaz_pos1uggroups[".closePopupAfterEdit"] = 1;
	$tdatakarsaaz_pos1uggroups[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatakarsaaz_pos1uggroups[".add"] = true;
$tdatakarsaaz_pos1uggroups[".afterAddAction"] = 1;
$tdatakarsaaz_pos1uggroups[".closePopupAfterAdd"] = 1;
$tdatakarsaaz_pos1uggroups[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatakarsaaz_pos1uggroups[".list"] = true;
}



$tdatakarsaaz_pos1uggroups[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatakarsaaz_pos1uggroups[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatakarsaaz_pos1uggroups[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatakarsaaz_pos1uggroups[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatakarsaaz_pos1uggroups[".printFriendly"] = true;
}



$tdatakarsaaz_pos1uggroups[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatakarsaaz_pos1uggroups[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatakarsaaz_pos1uggroups[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatakarsaaz_pos1uggroups[".isUseAjaxSuggest"] = true;

$tdatakarsaaz_pos1uggroups[".rowHighlite"] = true;





$tdatakarsaaz_pos1uggroups[".ajaxCodeSnippetAdded"] = false;

$tdatakarsaaz_pos1uggroups[".buttonsAdded"] = false;

$tdatakarsaaz_pos1uggroups[".addPageEvents"] = false;

// use timepicker for search panel
$tdatakarsaaz_pos1uggroups[".isUseTimeForSearch"] = false;


$tdatakarsaaz_pos1uggroups[".badgeColor"] = "6493EA";


$tdatakarsaaz_pos1uggroups[".allSearchFields"] = array();
$tdatakarsaaz_pos1uggroups[".filterFields"] = array();
$tdatakarsaaz_pos1uggroups[".requiredSearchFields"] = array();

$tdatakarsaaz_pos1uggroups[".googleLikeFields"] = array();
$tdatakarsaaz_pos1uggroups[".googleLikeFields"][] = "GroupID";
$tdatakarsaaz_pos1uggroups[".googleLikeFields"][] = "Label";
$tdatakarsaaz_pos1uggroups[".googleLikeFields"][] = "Provider";
$tdatakarsaaz_pos1uggroups[".googleLikeFields"][] = "Comment";



$tdatakarsaaz_pos1uggroups[".tableType"] = "list";

$tdatakarsaaz_pos1uggroups[".printerPageOrientation"] = 0;
$tdatakarsaaz_pos1uggroups[".nPrinterPageScale"] = 100;

$tdatakarsaaz_pos1uggroups[".nPrinterSplitRecords"] = 40;

$tdatakarsaaz_pos1uggroups[".geocodingEnabled"] = false;










$tdatakarsaaz_pos1uggroups[".pageSize"] = 20;

$tdatakarsaaz_pos1uggroups[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatakarsaaz_pos1uggroups[".strOrderBy"] = $tstrOrderBy;

$tdatakarsaaz_pos1uggroups[".orderindexes"] = array();


$tdatakarsaaz_pos1uggroups[".sqlHead"] = "SELECT GroupID,  	`Label`,  	Provider,  	`Comment`";
$tdatakarsaaz_pos1uggroups[".sqlFrom"] = "FROM karsaaz_pos1uggroups";
$tdatakarsaaz_pos1uggroups[".sqlWhereExpr"] = "";
$tdatakarsaaz_pos1uggroups[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatakarsaaz_pos1uggroups[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatakarsaaz_pos1uggroups[".arrGroupsPerPage"] = $arrGPP;

$tdatakarsaaz_pos1uggroups[".highlightSearchResults"] = true;

$tableKeyskarsaaz_pos1uggroups = array();
$tableKeyskarsaaz_pos1uggroups[] = "GroupID";
$tdatakarsaaz_pos1uggroups[".Keys"] = $tableKeyskarsaaz_pos1uggroups;


$tdatakarsaaz_pos1uggroups[".hideMobileList"] = array();




//	GroupID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "GroupID";
	$fdata["GoodName"] = "GroupID";
	$fdata["ownerTable"] = "karsaaz_pos1uggroups";
	$fdata["Label"] = GetFieldLabel("karsaaz_pos1uggroups","GroupID");
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


	$tdatakarsaaz_pos1uggroups["GroupID"] = $fdata;
		$tdatakarsaaz_pos1uggroups[".searchableFields"][] = "GroupID";
//	Label
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Label";
	$fdata["GoodName"] = "Label";
	$fdata["ownerTable"] = "karsaaz_pos1uggroups";
	$fdata["Label"] = GetFieldLabel("karsaaz_pos1uggroups","Label");
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


	$tdatakarsaaz_pos1uggroups["Label"] = $fdata;
		$tdatakarsaaz_pos1uggroups[".searchableFields"][] = "Label";
//	Provider
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Provider";
	$fdata["GoodName"] = "Provider";
	$fdata["ownerTable"] = "karsaaz_pos1uggroups";
	$fdata["Label"] = GetFieldLabel("karsaaz_pos1uggroups","Provider");
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


	$tdatakarsaaz_pos1uggroups["Provider"] = $fdata;
		$tdatakarsaaz_pos1uggroups[".searchableFields"][] = "Provider";
//	Comment
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Comment";
	$fdata["GoodName"] = "Comment";
	$fdata["ownerTable"] = "karsaaz_pos1uggroups";
	$fdata["Label"] = GetFieldLabel("karsaaz_pos1uggroups","Comment");
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


	$tdatakarsaaz_pos1uggroups["Comment"] = $fdata;
		$tdatakarsaaz_pos1uggroups[".searchableFields"][] = "Comment";


$tables_data["karsaaz_pos1uggroups"]=&$tdatakarsaaz_pos1uggroups;
$field_labels["karsaaz_pos1uggroups"] = &$fieldLabelskarsaaz_pos1uggroups;
$fieldToolTips["karsaaz_pos1uggroups"] = &$fieldToolTipskarsaaz_pos1uggroups;
$placeHolders["karsaaz_pos1uggroups"] = &$placeHolderskarsaaz_pos1uggroups;
$page_titles["karsaaz_pos1uggroups"] = &$pageTitleskarsaaz_pos1uggroups;


changeTextControlsToDate( "karsaaz_pos1uggroups" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["karsaaz_pos1uggroups"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["karsaaz_pos1uggroups"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_karsaaz_pos1uggroups()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "GroupID,  	`Label`,  	Provider,  	`Comment`";
$proto0["m_strFrom"] = "FROM karsaaz_pos1uggroups";
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
	"m_strTable" => "karsaaz_pos1uggroups",
	"m_srcTableName" => "karsaaz_pos1uggroups"
));

$proto6["m_sql"] = "GroupID";
$proto6["m_srcTableName"] = "karsaaz_pos1uggroups";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Label",
	"m_strTable" => "karsaaz_pos1uggroups",
	"m_srcTableName" => "karsaaz_pos1uggroups"
));

$proto8["m_sql"] = "`Label`";
$proto8["m_srcTableName"] = "karsaaz_pos1uggroups";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Provider",
	"m_strTable" => "karsaaz_pos1uggroups",
	"m_srcTableName" => "karsaaz_pos1uggroups"
));

$proto10["m_sql"] = "Provider";
$proto10["m_srcTableName"] = "karsaaz_pos1uggroups";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Comment",
	"m_strTable" => "karsaaz_pos1uggroups",
	"m_srcTableName" => "karsaaz_pos1uggroups"
));

$proto12["m_sql"] = "`Comment`";
$proto12["m_srcTableName"] = "karsaaz_pos1uggroups";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto14=array();
$proto14["m_link"] = "SQLL_MAIN";
			$proto15=array();
$proto15["m_strName"] = "karsaaz_pos1uggroups";
$proto15["m_srcTableName"] = "karsaaz_pos1uggroups";
$proto15["m_columns"] = array();
$proto15["m_columns"][] = "GroupID";
$proto15["m_columns"][] = "Label";
$proto15["m_columns"][] = "Provider";
$proto15["m_columns"][] = "Comment";
$obj = new SQLTable($proto15);

$proto14["m_table"] = $obj;
$proto14["m_sql"] = "karsaaz_pos1uggroups";
$proto14["m_alias"] = "";
$proto14["m_srcTableName"] = "karsaaz_pos1uggroups";
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
$proto0["m_srcTableName"]="karsaaz_pos1uggroups";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_karsaaz_pos1uggroups = createSqlQuery_karsaaz_pos1uggroups();


	
				;

				

$tdatakarsaaz_pos1uggroups[".sqlquery"] = $queryData_karsaaz_pos1uggroups;



$tdatakarsaaz_pos1uggroups[".hasEvents"] = false;

?>