<?php
$tdatalanguages = array();
$tdatalanguages[".searchableFields"] = array();
$tdatalanguages[".ShortName"] = "languages";
$tdatalanguages[".OwnerID"] = "";
$tdatalanguages[".OriginalTable"] = "languages";


$tdatalanguages[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatalanguages[".originalPagesByType"] = $tdatalanguages[".pagesByType"];
$tdatalanguages[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatalanguages[".originalPages"] = $tdatalanguages[".pages"];
$tdatalanguages[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatalanguages[".originalDefaultPages"] = $tdatalanguages[".defaultPages"];

//	field labels
$fieldLabelslanguages = array();
$fieldToolTipslanguages = array();
$pageTitleslanguages = array();
$placeHolderslanguages = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelslanguages["English"] = array();
	$fieldToolTipslanguages["English"] = array();
	$placeHolderslanguages["English"] = array();
	$pageTitleslanguages["English"] = array();
	$fieldLabelslanguages["English"]["id"] = "Id";
	$fieldToolTipslanguages["English"]["id"] = "";
	$placeHolderslanguages["English"]["id"] = "";
	$fieldLabelslanguages["English"]["name"] = "Name";
	$fieldToolTipslanguages["English"]["name"] = "";
	$placeHolderslanguages["English"]["name"] = "";
	$fieldLabelslanguages["English"]["direction"] = "Direction";
	$fieldToolTipslanguages["English"]["direction"] = "";
	$placeHolderslanguages["English"]["direction"] = "";
	$fieldLabelslanguages["English"]["active"] = "Active";
	$fieldToolTipslanguages["English"]["active"] = "";
	$placeHolderslanguages["English"]["active"] = "";
	$fieldLabelslanguages["English"]["lang_code"] = "Lang Code";
	$fieldToolTipslanguages["English"]["lang_code"] = "";
	$placeHolderslanguages["English"]["lang_code"] = "";
	$fieldLabelslanguages["English"]["icon"] = "Icon";
	$fieldToolTipslanguages["English"]["icon"] = "";
	$placeHolderslanguages["English"]["icon"] = "";
	if (count($fieldToolTipslanguages["English"]))
		$tdatalanguages[".isUseToolTips"] = true;
}


	$tdatalanguages[".NCSearch"] = true;



$tdatalanguages[".shortTableName"] = "languages";
$tdatalanguages[".nSecOptions"] = 0;

$tdatalanguages[".mainTableOwnerID"] = "";
$tdatalanguages[".entityType"] = 0;
$tdatalanguages[".connId"] = "karsaaz_pos_at_localhost";


$tdatalanguages[".strOriginalTableName"] = "languages";

	



$tdatalanguages[".showAddInPopup"] = false;

$tdatalanguages[".showEditInPopup"] = false;

$tdatalanguages[".showViewInPopup"] = false;

$tdatalanguages[".listAjax"] = false;
//	temporary
//$tdatalanguages[".listAjax"] = false;

	$tdatalanguages[".audit"] = false;

	$tdatalanguages[".locking"] = false;


$pages = $tdatalanguages[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatalanguages[".edit"] = true;
	$tdatalanguages[".afterEditAction"] = 1;
	$tdatalanguages[".closePopupAfterEdit"] = 1;
	$tdatalanguages[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatalanguages[".add"] = true;
$tdatalanguages[".afterAddAction"] = 1;
$tdatalanguages[".closePopupAfterAdd"] = 1;
$tdatalanguages[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatalanguages[".list"] = true;
}



$tdatalanguages[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatalanguages[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatalanguages[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatalanguages[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatalanguages[".printFriendly"] = true;
}



$tdatalanguages[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatalanguages[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatalanguages[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatalanguages[".isUseAjaxSuggest"] = true;

$tdatalanguages[".rowHighlite"] = true;





$tdatalanguages[".ajaxCodeSnippetAdded"] = false;

$tdatalanguages[".buttonsAdded"] = false;

$tdatalanguages[".addPageEvents"] = false;

// use timepicker for search panel
$tdatalanguages[".isUseTimeForSearch"] = false;


$tdatalanguages[".badgeColor"] = "E8926F";


$tdatalanguages[".allSearchFields"] = array();
$tdatalanguages[".filterFields"] = array();
$tdatalanguages[".requiredSearchFields"] = array();

$tdatalanguages[".googleLikeFields"] = array();
$tdatalanguages[".googleLikeFields"][] = "id";
$tdatalanguages[".googleLikeFields"][] = "name";
$tdatalanguages[".googleLikeFields"][] = "direction";
$tdatalanguages[".googleLikeFields"][] = "active";
$tdatalanguages[".googleLikeFields"][] = "lang_code";
$tdatalanguages[".googleLikeFields"][] = "icon";



$tdatalanguages[".tableType"] = "list";

$tdatalanguages[".printerPageOrientation"] = 0;
$tdatalanguages[".nPrinterPageScale"] = 100;

$tdatalanguages[".nPrinterSplitRecords"] = 40;

$tdatalanguages[".geocodingEnabled"] = false;










$tdatalanguages[".pageSize"] = 20;

$tdatalanguages[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatalanguages[".strOrderBy"] = $tstrOrderBy;

$tdatalanguages[".orderindexes"] = array();


$tdatalanguages[".sqlHead"] = "SELECT id,  	name,  	direction,  	active,  	lang_code,  	icon";
$tdatalanguages[".sqlFrom"] = "FROM languages";
$tdatalanguages[".sqlWhereExpr"] = "";
$tdatalanguages[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatalanguages[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatalanguages[".arrGroupsPerPage"] = $arrGPP;

$tdatalanguages[".highlightSearchResults"] = true;

$tableKeyslanguages = array();
$tableKeyslanguages[] = "id";
$tdatalanguages[".Keys"] = $tableKeyslanguages;


$tdatalanguages[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "languages";
	$fdata["Label"] = GetFieldLabel("languages","id");
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


	$tdatalanguages["id"] = $fdata;
		$tdatalanguages[".searchableFields"][] = "id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "languages";
	$fdata["Label"] = GetFieldLabel("languages","name");
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


	$tdatalanguages["name"] = $fdata;
		$tdatalanguages[".searchableFields"][] = "name";
//	direction
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "direction";
	$fdata["GoodName"] = "direction";
	$fdata["ownerTable"] = "languages";
	$fdata["Label"] = GetFieldLabel("languages","direction");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "direction";

		$fdata["sourceSingle"] = "direction";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "direction";

	
	
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


	$tdatalanguages["direction"] = $fdata;
		$tdatalanguages[".searchableFields"][] = "direction";
//	active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "active";
	$fdata["GoodName"] = "active";
	$fdata["ownerTable"] = "languages";
	$fdata["Label"] = GetFieldLabel("languages","active");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "active";

		$fdata["sourceSingle"] = "active";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "active";

	
	
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


	$tdatalanguages["active"] = $fdata;
		$tdatalanguages[".searchableFields"][] = "active";
//	lang_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "lang_code";
	$fdata["GoodName"] = "lang_code";
	$fdata["ownerTable"] = "languages";
	$fdata["Label"] = GetFieldLabel("languages","lang_code");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "lang_code";

		$fdata["sourceSingle"] = "lang_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "lang_code";

	
	
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


	$tdatalanguages["lang_code"] = $fdata;
		$tdatalanguages[".searchableFields"][] = "lang_code";
//	icon
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "icon";
	$fdata["GoodName"] = "icon";
	$fdata["ownerTable"] = "languages";
	$fdata["Label"] = GetFieldLabel("languages","icon");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "icon";

		$fdata["sourceSingle"] = "icon";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "icon";

	
	
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


	$tdatalanguages["icon"] = $fdata;
		$tdatalanguages[".searchableFields"][] = "icon";


$tables_data["languages"]=&$tdatalanguages;
$field_labels["languages"] = &$fieldLabelslanguages;
$fieldToolTips["languages"] = &$fieldToolTipslanguages;
$placeHolders["languages"] = &$placeHolderslanguages;
$page_titles["languages"] = &$pageTitleslanguages;


changeTextControlsToDate( "languages" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["languages"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["languages"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_languages()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	name,  	direction,  	active,  	lang_code,  	icon";
$proto0["m_strFrom"] = "FROM languages";
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
	"m_strTable" => "languages",
	"m_srcTableName" => "languages"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "languages";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "languages",
	"m_srcTableName" => "languages"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "languages";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "direction",
	"m_strTable" => "languages",
	"m_srcTableName" => "languages"
));

$proto10["m_sql"] = "direction";
$proto10["m_srcTableName"] = "languages";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "active",
	"m_strTable" => "languages",
	"m_srcTableName" => "languages"
));

$proto12["m_sql"] = "active";
$proto12["m_srcTableName"] = "languages";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "lang_code",
	"m_strTable" => "languages",
	"m_srcTableName" => "languages"
));

$proto14["m_sql"] = "lang_code";
$proto14["m_srcTableName"] = "languages";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "icon",
	"m_strTable" => "languages",
	"m_srcTableName" => "languages"
));

$proto16["m_sql"] = "icon";
$proto16["m_srcTableName"] = "languages";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto18=array();
$proto18["m_link"] = "SQLL_MAIN";
			$proto19=array();
$proto19["m_strName"] = "languages";
$proto19["m_srcTableName"] = "languages";
$proto19["m_columns"] = array();
$proto19["m_columns"][] = "id";
$proto19["m_columns"][] = "name";
$proto19["m_columns"][] = "direction";
$proto19["m_columns"][] = "active";
$proto19["m_columns"][] = "lang_code";
$proto19["m_columns"][] = "icon";
$obj = new SQLTable($proto19);

$proto18["m_table"] = $obj;
$proto18["m_sql"] = "languages";
$proto18["m_alias"] = "";
$proto18["m_srcTableName"] = "languages";
$proto20=array();
$proto20["m_sql"] = "";
$proto20["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto20["m_column"]=$obj;
$proto20["m_contained"] = array();
$proto20["m_strCase"] = "";
$proto20["m_havingmode"] = false;
$proto20["m_inBrackets"] = false;
$proto20["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto20);

$proto18["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto18);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="languages";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_languages = createSqlQuery_languages();


	
		;

						

$tdatalanguages[".sqlquery"] = $queryData_languages;



$tdatalanguages[".hasEvents"] = false;

?>