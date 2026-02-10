<?php
$tdatasclosingmonth = array();
$tdatasclosingmonth[".searchableFields"] = array();
$tdatasclosingmonth[".ShortName"] = "sclosingmonth";
$tdatasclosingmonth[".OwnerID"] = "";
$tdatasclosingmonth[".OriginalTable"] = "sClosingMonth";


$tdatasclosingmonth[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatasclosingmonth[".originalPagesByType"] = $tdatasclosingmonth[".pagesByType"];
$tdatasclosingmonth[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatasclosingmonth[".originalPages"] = $tdatasclosingmonth[".pages"];
$tdatasclosingmonth[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatasclosingmonth[".originalDefaultPages"] = $tdatasclosingmonth[".defaultPages"];

//	field labels
$fieldLabelssclosingmonth = array();
$fieldToolTipssclosingmonth = array();
$pageTitlessclosingmonth = array();
$placeHolderssclosingmonth = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssclosingmonth["English"] = array();
	$fieldToolTipssclosingmonth["English"] = array();
	$placeHolderssclosingmonth["English"] = array();
	$pageTitlessclosingmonth["English"] = array();
	$fieldLabelssclosingmonth["English"]["Code"] = "Code";
	$fieldToolTipssclosingmonth["English"]["Code"] = "";
	$placeHolderssclosingmonth["English"]["Code"] = "";
	$fieldLabelssclosingmonth["English"]["VMonth"] = "VMonth";
	$fieldToolTipssclosingmonth["English"]["VMonth"] = "";
	$placeHolderssclosingmonth["English"]["VMonth"] = "";
	$fieldLabelssclosingmonth["English"]["VYear"] = "VYear";
	$fieldToolTipssclosingmonth["English"]["VYear"] = "";
	$placeHolderssclosingmonth["English"]["VYear"] = "";
	$fieldLabelssclosingmonth["English"]["CloseStatus"] = "Close Status";
	$fieldToolTipssclosingmonth["English"]["CloseStatus"] = "";
	$placeHolderssclosingmonth["English"]["CloseStatus"] = "";
	$fieldLabelssclosingmonth["English"]["DefaultMonth"] = "Default Month";
	$fieldToolTipssclosingmonth["English"]["DefaultMonth"] = "";
	$placeHolderssclosingmonth["English"]["DefaultMonth"] = "";
	$fieldLabelssclosingmonth["English"]["BuCode"] = "Bu Code";
	$fieldToolTipssclosingmonth["English"]["BuCode"] = "";
	$placeHolderssclosingmonth["English"]["BuCode"] = "";
	$fieldLabelssclosingmonth["English"]["UserName"] = "User Name";
	$fieldToolTipssclosingmonth["English"]["UserName"] = "";
	$placeHolderssclosingmonth["English"]["UserName"] = "";
	$fieldLabelssclosingmonth["English"]["CreateDate"] = "Create Date";
	$fieldToolTipssclosingmonth["English"]["CreateDate"] = "";
	$placeHolderssclosingmonth["English"]["CreateDate"] = "";
	$fieldLabelssclosingmonth["English"]["CreateTime"] = "Create Time";
	$fieldToolTipssclosingmonth["English"]["CreateTime"] = "";
	$placeHolderssclosingmonth["English"]["CreateTime"] = "";
	$fieldLabelssclosingmonth["English"]["CreatePcName"] = "Create Pc Name";
	$fieldToolTipssclosingmonth["English"]["CreatePcName"] = "";
	$placeHolderssclosingmonth["English"]["CreatePcName"] = "";
	$fieldLabelssclosingmonth["English"]["CreatePCUser"] = "Create PCUser";
	$fieldToolTipssclosingmonth["English"]["CreatePCUser"] = "";
	$placeHolderssclosingmonth["English"]["CreatePCUser"] = "";
	$fieldLabelssclosingmonth["English"]["CreateLoc"] = "Create Loc";
	$fieldToolTipssclosingmonth["English"]["CreateLoc"] = "";
	$placeHolderssclosingmonth["English"]["CreateLoc"] = "";
	$fieldLabelssclosingmonth["English"]["CreateDevice"] = "Create Device";
	$fieldToolTipssclosingmonth["English"]["CreateDevice"] = "";
	$placeHolderssclosingmonth["English"]["CreateDevice"] = "";
	$fieldLabelssclosingmonth["English"]["UpdatePcUser"] = "Update Pc User";
	$fieldToolTipssclosingmonth["English"]["UpdatePcUser"] = "";
	$placeHolderssclosingmonth["English"]["UpdatePcUser"] = "";
	$fieldLabelssclosingmonth["English"]["UpdateUser"] = "Update User";
	$fieldToolTipssclosingmonth["English"]["UpdateUser"] = "";
	$placeHolderssclosingmonth["English"]["UpdateUser"] = "";
	$fieldLabelssclosingmonth["English"]["UpdateDate"] = "Update Date";
	$fieldToolTipssclosingmonth["English"]["UpdateDate"] = "";
	$placeHolderssclosingmonth["English"]["UpdateDate"] = "";
	$fieldLabelssclosingmonth["English"]["UpdateTime"] = "Update Time";
	$fieldToolTipssclosingmonth["English"]["UpdateTime"] = "";
	$placeHolderssclosingmonth["English"]["UpdateTime"] = "";
	$fieldLabelssclosingmonth["English"]["UpdatePcName"] = "Update Pc Name";
	$fieldToolTipssclosingmonth["English"]["UpdatePcName"] = "";
	$placeHolderssclosingmonth["English"]["UpdatePcName"] = "";
	$fieldLabelssclosingmonth["English"]["TotalUpdate"] = "Total Update";
	$fieldToolTipssclosingmonth["English"]["TotalUpdate"] = "";
	$placeHolderssclosingmonth["English"]["TotalUpdate"] = "";
	$fieldLabelssclosingmonth["English"]["UpdateLoc"] = "Update Loc";
	$fieldToolTipssclosingmonth["English"]["UpdateLoc"] = "";
	$placeHolderssclosingmonth["English"]["UpdateLoc"] = "";
	$fieldLabelssclosingmonth["English"]["UpdateDevice"] = "Update Device";
	$fieldToolTipssclosingmonth["English"]["UpdateDevice"] = "";
	$placeHolderssclosingmonth["English"]["UpdateDevice"] = "";
	if (count($fieldToolTipssclosingmonth["English"]))
		$tdatasclosingmonth[".isUseToolTips"] = true;
}


	$tdatasclosingmonth[".NCSearch"] = true;



$tdatasclosingmonth[".shortTableName"] = "sclosingmonth";
$tdatasclosingmonth[".nSecOptions"] = 0;

$tdatasclosingmonth[".mainTableOwnerID"] = "";
$tdatasclosingmonth[".entityType"] = 0;
$tdatasclosingmonth[".connId"] = "karsaaz_pos_at_localhost";


$tdatasclosingmonth[".strOriginalTableName"] = "sClosingMonth";

	



$tdatasclosingmonth[".showAddInPopup"] = false;

$tdatasclosingmonth[".showEditInPopup"] = false;

$tdatasclosingmonth[".showViewInPopup"] = false;

$tdatasclosingmonth[".listAjax"] = false;
//	temporary
//$tdatasclosingmonth[".listAjax"] = false;

	$tdatasclosingmonth[".audit"] = false;

	$tdatasclosingmonth[".locking"] = false;


$pages = $tdatasclosingmonth[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasclosingmonth[".edit"] = true;
	$tdatasclosingmonth[".afterEditAction"] = 1;
	$tdatasclosingmonth[".closePopupAfterEdit"] = 1;
	$tdatasclosingmonth[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasclosingmonth[".add"] = true;
$tdatasclosingmonth[".afterAddAction"] = 1;
$tdatasclosingmonth[".closePopupAfterAdd"] = 1;
$tdatasclosingmonth[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasclosingmonth[".list"] = true;
}



$tdatasclosingmonth[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasclosingmonth[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasclosingmonth[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasclosingmonth[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasclosingmonth[".printFriendly"] = true;
}



$tdatasclosingmonth[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasclosingmonth[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasclosingmonth[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasclosingmonth[".isUseAjaxSuggest"] = true;

$tdatasclosingmonth[".rowHighlite"] = true;





$tdatasclosingmonth[".ajaxCodeSnippetAdded"] = false;

$tdatasclosingmonth[".buttonsAdded"] = false;

$tdatasclosingmonth[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasclosingmonth[".isUseTimeForSearch"] = false;


$tdatasclosingmonth[".badgeColor"] = "BC8F8F";


$tdatasclosingmonth[".allSearchFields"] = array();
$tdatasclosingmonth[".filterFields"] = array();
$tdatasclosingmonth[".requiredSearchFields"] = array();

$tdatasclosingmonth[".googleLikeFields"] = array();
$tdatasclosingmonth[".googleLikeFields"][] = "Code";
$tdatasclosingmonth[".googleLikeFields"][] = "VMonth";
$tdatasclosingmonth[".googleLikeFields"][] = "VYear";
$tdatasclosingmonth[".googleLikeFields"][] = "CloseStatus";
$tdatasclosingmonth[".googleLikeFields"][] = "DefaultMonth";
$tdatasclosingmonth[".googleLikeFields"][] = "BuCode";
$tdatasclosingmonth[".googleLikeFields"][] = "UserName";
$tdatasclosingmonth[".googleLikeFields"][] = "CreateDate";
$tdatasclosingmonth[".googleLikeFields"][] = "CreateTime";
$tdatasclosingmonth[".googleLikeFields"][] = "CreatePcName";
$tdatasclosingmonth[".googleLikeFields"][] = "CreatePCUser";
$tdatasclosingmonth[".googleLikeFields"][] = "CreateLoc";
$tdatasclosingmonth[".googleLikeFields"][] = "CreateDevice";
$tdatasclosingmonth[".googleLikeFields"][] = "UpdatePcUser";
$tdatasclosingmonth[".googleLikeFields"][] = "UpdateUser";
$tdatasclosingmonth[".googleLikeFields"][] = "UpdateDate";
$tdatasclosingmonth[".googleLikeFields"][] = "UpdateTime";
$tdatasclosingmonth[".googleLikeFields"][] = "UpdatePcName";
$tdatasclosingmonth[".googleLikeFields"][] = "TotalUpdate";
$tdatasclosingmonth[".googleLikeFields"][] = "UpdateLoc";
$tdatasclosingmonth[".googleLikeFields"][] = "UpdateDevice";



$tdatasclosingmonth[".tableType"] = "list";

$tdatasclosingmonth[".printerPageOrientation"] = 0;
$tdatasclosingmonth[".nPrinterPageScale"] = 100;

$tdatasclosingmonth[".nPrinterSplitRecords"] = 40;

$tdatasclosingmonth[".geocodingEnabled"] = false;










$tdatasclosingmonth[".pageSize"] = 20;

$tdatasclosingmonth[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasclosingmonth[".strOrderBy"] = $tstrOrderBy;

$tdatasclosingmonth[".orderindexes"] = array();


$tdatasclosingmonth[".sqlHead"] = "SELECT Code,  	VMonth,  	VYear,  	CloseStatus,  	DefaultMonth,  	BuCode,  	UserName,  	CreateDate,  	CreateTime,  	CreatePcName,  	CreatePCUser,  	CreateLoc,  	CreateDevice,  	UpdatePcUser,  	UpdateUser,  	UpdateDate,  	UpdateTime,  	UpdatePcName,  	TotalUpdate,  	UpdateLoc,  	UpdateDevice";
$tdatasclosingmonth[".sqlFrom"] = "FROM sClosingMonth";
$tdatasclosingmonth[".sqlWhereExpr"] = "";
$tdatasclosingmonth[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasclosingmonth[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasclosingmonth[".arrGroupsPerPage"] = $arrGPP;

$tdatasclosingmonth[".highlightSearchResults"] = true;

$tableKeyssclosingmonth = array();
$tableKeyssclosingmonth[] = "Code";
$tdatasclosingmonth[".Keys"] = $tableKeyssclosingmonth;


$tdatasclosingmonth[".hideMobileList"] = array();




//	Code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Code";
	$fdata["GoodName"] = "Code";
	$fdata["ownerTable"] = "sClosingMonth";
	$fdata["Label"] = GetFieldLabel("sClosingMonth","Code");
	$fdata["FieldType"] = 20;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "Code";

		$fdata["sourceSingle"] = "Code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Code";

	
	
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


	$tdatasclosingmonth["Code"] = $fdata;
		$tdatasclosingmonth[".searchableFields"][] = "Code";
//	VMonth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "VMonth";
	$fdata["GoodName"] = "VMonth";
	$fdata["ownerTable"] = "sClosingMonth";
	$fdata["Label"] = GetFieldLabel("sClosingMonth","VMonth");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "VMonth";

		$fdata["sourceSingle"] = "VMonth";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VMonth";

	
	
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


	$tdatasclosingmonth["VMonth"] = $fdata;
		$tdatasclosingmonth[".searchableFields"][] = "VMonth";
//	VYear
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "VYear";
	$fdata["GoodName"] = "VYear";
	$fdata["ownerTable"] = "sClosingMonth";
	$fdata["Label"] = GetFieldLabel("sClosingMonth","VYear");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "VYear";

		$fdata["sourceSingle"] = "VYear";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VYear";

	
	
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


	$tdatasclosingmonth["VYear"] = $fdata;
		$tdatasclosingmonth[".searchableFields"][] = "VYear";
//	CloseStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "CloseStatus";
	$fdata["GoodName"] = "CloseStatus";
	$fdata["ownerTable"] = "sClosingMonth";
	$fdata["Label"] = GetFieldLabel("sClosingMonth","CloseStatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CloseStatus";

		$fdata["sourceSingle"] = "CloseStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CloseStatus";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatasclosingmonth["CloseStatus"] = $fdata;
		$tdatasclosingmonth[".searchableFields"][] = "CloseStatus";
//	DefaultMonth
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "DefaultMonth";
	$fdata["GoodName"] = "DefaultMonth";
	$fdata["ownerTable"] = "sClosingMonth";
	$fdata["Label"] = GetFieldLabel("sClosingMonth","DefaultMonth");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "DefaultMonth";

		$fdata["sourceSingle"] = "DefaultMonth";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DefaultMonth";

	
	
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


	$tdatasclosingmonth["DefaultMonth"] = $fdata;
		$tdatasclosingmonth[".searchableFields"][] = "DefaultMonth";
//	BuCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "BuCode";
	$fdata["GoodName"] = "BuCode";
	$fdata["ownerTable"] = "sClosingMonth";
	$fdata["Label"] = GetFieldLabel("sClosingMonth","BuCode");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "BuCode";

		$fdata["sourceSingle"] = "BuCode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BuCode";

	
	
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


	$tdatasclosingmonth["BuCode"] = $fdata;
		$tdatasclosingmonth[".searchableFields"][] = "BuCode";
//	UserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "UserName";
	$fdata["GoodName"] = "UserName";
	$fdata["ownerTable"] = "sClosingMonth";
	$fdata["Label"] = GetFieldLabel("sClosingMonth","UserName");
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatasclosingmonth["UserName"] = $fdata;
		$tdatasclosingmonth[".searchableFields"][] = "UserName";
//	CreateDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "CreateDate";
	$fdata["GoodName"] = "CreateDate";
	$fdata["ownerTable"] = "sClosingMonth";
	$fdata["Label"] = GetFieldLabel("sClosingMonth","CreateDate");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "CreateDate";

		$fdata["sourceSingle"] = "CreateDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CreateDate";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatasclosingmonth["CreateDate"] = $fdata;
		$tdatasclosingmonth[".searchableFields"][] = "CreateDate";
//	CreateTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "CreateTime";
	$fdata["GoodName"] = "CreateTime";
	$fdata["ownerTable"] = "sClosingMonth";
	$fdata["Label"] = GetFieldLabel("sClosingMonth","CreateTime");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CreateTime";

		$fdata["sourceSingle"] = "CreateTime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CreateTime";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatasclosingmonth["CreateTime"] = $fdata;
		$tdatasclosingmonth[".searchableFields"][] = "CreateTime";
//	CreatePcName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "CreatePcName";
	$fdata["GoodName"] = "CreatePcName";
	$fdata["ownerTable"] = "sClosingMonth";
	$fdata["Label"] = GetFieldLabel("sClosingMonth","CreatePcName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CreatePcName";

		$fdata["sourceSingle"] = "CreatePcName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CreatePcName";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatasclosingmonth["CreatePcName"] = $fdata;
		$tdatasclosingmonth[".searchableFields"][] = "CreatePcName";
//	CreatePCUser
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "CreatePCUser";
	$fdata["GoodName"] = "CreatePCUser";
	$fdata["ownerTable"] = "sClosingMonth";
	$fdata["Label"] = GetFieldLabel("sClosingMonth","CreatePCUser");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CreatePCUser";

		$fdata["sourceSingle"] = "CreatePCUser";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CreatePCUser";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatasclosingmonth["CreatePCUser"] = $fdata;
		$tdatasclosingmonth[".searchableFields"][] = "CreatePCUser";
//	CreateLoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "CreateLoc";
	$fdata["GoodName"] = "CreateLoc";
	$fdata["ownerTable"] = "sClosingMonth";
	$fdata["Label"] = GetFieldLabel("sClosingMonth","CreateLoc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CreateLoc";

		$fdata["sourceSingle"] = "CreateLoc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CreateLoc";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatasclosingmonth["CreateLoc"] = $fdata;
		$tdatasclosingmonth[".searchableFields"][] = "CreateLoc";
//	CreateDevice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "CreateDevice";
	$fdata["GoodName"] = "CreateDevice";
	$fdata["ownerTable"] = "sClosingMonth";
	$fdata["Label"] = GetFieldLabel("sClosingMonth","CreateDevice");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CreateDevice";

		$fdata["sourceSingle"] = "CreateDevice";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CreateDevice";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatasclosingmonth["CreateDevice"] = $fdata;
		$tdatasclosingmonth[".searchableFields"][] = "CreateDevice";
//	UpdatePcUser
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "UpdatePcUser";
	$fdata["GoodName"] = "UpdatePcUser";
	$fdata["ownerTable"] = "sClosingMonth";
	$fdata["Label"] = GetFieldLabel("sClosingMonth","UpdatePcUser");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "UpdatePcUser";

		$fdata["sourceSingle"] = "UpdatePcUser";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UpdatePcUser";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatasclosingmonth["UpdatePcUser"] = $fdata;
		$tdatasclosingmonth[".searchableFields"][] = "UpdatePcUser";
//	UpdateUser
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "UpdateUser";
	$fdata["GoodName"] = "UpdateUser";
	$fdata["ownerTable"] = "sClosingMonth";
	$fdata["Label"] = GetFieldLabel("sClosingMonth","UpdateUser");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "UpdateUser";

		$fdata["sourceSingle"] = "UpdateUser";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UpdateUser";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatasclosingmonth["UpdateUser"] = $fdata;
		$tdatasclosingmonth[".searchableFields"][] = "UpdateUser";
//	UpdateDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "UpdateDate";
	$fdata["GoodName"] = "UpdateDate";
	$fdata["ownerTable"] = "sClosingMonth";
	$fdata["Label"] = GetFieldLabel("sClosingMonth","UpdateDate");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "UpdateDate";

		$fdata["sourceSingle"] = "UpdateDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UpdateDate";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Short Date");

	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Date");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 13;
	$edata["InitialYearFactor"] = 100;
	$edata["LastYearFactor"] = 10;

	
	
	
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
				$fdata["searchOptionsList"] = array("Equals", "More than", "Less than", "Between", EMPTY_SEARCH, NOT_EMPTY );
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


	$tdatasclosingmonth["UpdateDate"] = $fdata;
		$tdatasclosingmonth[".searchableFields"][] = "UpdateDate";
//	UpdateTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "UpdateTime";
	$fdata["GoodName"] = "UpdateTime";
	$fdata["ownerTable"] = "sClosingMonth";
	$fdata["Label"] = GetFieldLabel("sClosingMonth","UpdateTime");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "UpdateTime";

		$fdata["sourceSingle"] = "UpdateTime";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UpdateTime";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatasclosingmonth["UpdateTime"] = $fdata;
		$tdatasclosingmonth[".searchableFields"][] = "UpdateTime";
//	UpdatePcName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "UpdatePcName";
	$fdata["GoodName"] = "UpdatePcName";
	$fdata["ownerTable"] = "sClosingMonth";
	$fdata["Label"] = GetFieldLabel("sClosingMonth","UpdatePcName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "UpdatePcName";

		$fdata["sourceSingle"] = "UpdatePcName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UpdatePcName";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatasclosingmonth["UpdatePcName"] = $fdata;
		$tdatasclosingmonth[".searchableFields"][] = "UpdatePcName";
//	TotalUpdate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "TotalUpdate";
	$fdata["GoodName"] = "TotalUpdate";
	$fdata["ownerTable"] = "sClosingMonth";
	$fdata["Label"] = GetFieldLabel("sClosingMonth","TotalUpdate");
	$fdata["FieldType"] = 20;


	
	
			

		$fdata["strField"] = "TotalUpdate";

		$fdata["sourceSingle"] = "TotalUpdate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TotalUpdate";

	
	
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


	$tdatasclosingmonth["TotalUpdate"] = $fdata;
		$tdatasclosingmonth[".searchableFields"][] = "TotalUpdate";
//	UpdateLoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "UpdateLoc";
	$fdata["GoodName"] = "UpdateLoc";
	$fdata["ownerTable"] = "sClosingMonth";
	$fdata["Label"] = GetFieldLabel("sClosingMonth","UpdateLoc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "UpdateLoc";

		$fdata["sourceSingle"] = "UpdateLoc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UpdateLoc";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatasclosingmonth["UpdateLoc"] = $fdata;
		$tdatasclosingmonth[".searchableFields"][] = "UpdateLoc";
//	UpdateDevice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "UpdateDevice";
	$fdata["GoodName"] = "UpdateDevice";
	$fdata["ownerTable"] = "sClosingMonth";
	$fdata["Label"] = GetFieldLabel("sClosingMonth","UpdateDevice");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "UpdateDevice";

		$fdata["sourceSingle"] = "UpdateDevice";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UpdateDevice";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatasclosingmonth["UpdateDevice"] = $fdata;
		$tdatasclosingmonth[".searchableFields"][] = "UpdateDevice";


$tables_data["sClosingMonth"]=&$tdatasclosingmonth;
$field_labels["sClosingMonth"] = &$fieldLabelssclosingmonth;
$fieldToolTips["sClosingMonth"] = &$fieldToolTipssclosingmonth;
$placeHolders["sClosingMonth"] = &$placeHolderssclosingmonth;
$page_titles["sClosingMonth"] = &$pageTitlessclosingmonth;


changeTextControlsToDate( "sClosingMonth" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["sClosingMonth"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["sClosingMonth"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_sclosingmonth()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Code,  	VMonth,  	VYear,  	CloseStatus,  	DefaultMonth,  	BuCode,  	UserName,  	CreateDate,  	CreateTime,  	CreatePcName,  	CreatePCUser,  	CreateLoc,  	CreateDevice,  	UpdatePcUser,  	UpdateUser,  	UpdateDate,  	UpdateTime,  	UpdatePcName,  	TotalUpdate,  	UpdateLoc,  	UpdateDevice";
$proto0["m_strFrom"] = "FROM sClosingMonth";
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
	"m_strName" => "Code",
	"m_strTable" => "sClosingMonth",
	"m_srcTableName" => "sClosingMonth"
));

$proto6["m_sql"] = "Code";
$proto6["m_srcTableName"] = "sClosingMonth";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "VMonth",
	"m_strTable" => "sClosingMonth",
	"m_srcTableName" => "sClosingMonth"
));

$proto8["m_sql"] = "VMonth";
$proto8["m_srcTableName"] = "sClosingMonth";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "VYear",
	"m_strTable" => "sClosingMonth",
	"m_srcTableName" => "sClosingMonth"
));

$proto10["m_sql"] = "VYear";
$proto10["m_srcTableName"] = "sClosingMonth";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "CloseStatus",
	"m_strTable" => "sClosingMonth",
	"m_srcTableName" => "sClosingMonth"
));

$proto12["m_sql"] = "CloseStatus";
$proto12["m_srcTableName"] = "sClosingMonth";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "DefaultMonth",
	"m_strTable" => "sClosingMonth",
	"m_srcTableName" => "sClosingMonth"
));

$proto14["m_sql"] = "DefaultMonth";
$proto14["m_srcTableName"] = "sClosingMonth";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "BuCode",
	"m_strTable" => "sClosingMonth",
	"m_srcTableName" => "sClosingMonth"
));

$proto16["m_sql"] = "BuCode";
$proto16["m_srcTableName"] = "sClosingMonth";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "UserName",
	"m_strTable" => "sClosingMonth",
	"m_srcTableName" => "sClosingMonth"
));

$proto18["m_sql"] = "UserName";
$proto18["m_srcTableName"] = "sClosingMonth";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "CreateDate",
	"m_strTable" => "sClosingMonth",
	"m_srcTableName" => "sClosingMonth"
));

$proto20["m_sql"] = "CreateDate";
$proto20["m_srcTableName"] = "sClosingMonth";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "CreateTime",
	"m_strTable" => "sClosingMonth",
	"m_srcTableName" => "sClosingMonth"
));

$proto22["m_sql"] = "CreateTime";
$proto22["m_srcTableName"] = "sClosingMonth";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "CreatePcName",
	"m_strTable" => "sClosingMonth",
	"m_srcTableName" => "sClosingMonth"
));

$proto24["m_sql"] = "CreatePcName";
$proto24["m_srcTableName"] = "sClosingMonth";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "CreatePCUser",
	"m_strTable" => "sClosingMonth",
	"m_srcTableName" => "sClosingMonth"
));

$proto26["m_sql"] = "CreatePCUser";
$proto26["m_srcTableName"] = "sClosingMonth";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "CreateLoc",
	"m_strTable" => "sClosingMonth",
	"m_srcTableName" => "sClosingMonth"
));

$proto28["m_sql"] = "CreateLoc";
$proto28["m_srcTableName"] = "sClosingMonth";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "CreateDevice",
	"m_strTable" => "sClosingMonth",
	"m_srcTableName" => "sClosingMonth"
));

$proto30["m_sql"] = "CreateDevice";
$proto30["m_srcTableName"] = "sClosingMonth";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "UpdatePcUser",
	"m_strTable" => "sClosingMonth",
	"m_srcTableName" => "sClosingMonth"
));

$proto32["m_sql"] = "UpdatePcUser";
$proto32["m_srcTableName"] = "sClosingMonth";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "UpdateUser",
	"m_strTable" => "sClosingMonth",
	"m_srcTableName" => "sClosingMonth"
));

$proto34["m_sql"] = "UpdateUser";
$proto34["m_srcTableName"] = "sClosingMonth";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "UpdateDate",
	"m_strTable" => "sClosingMonth",
	"m_srcTableName" => "sClosingMonth"
));

$proto36["m_sql"] = "UpdateDate";
$proto36["m_srcTableName"] = "sClosingMonth";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "UpdateTime",
	"m_strTable" => "sClosingMonth",
	"m_srcTableName" => "sClosingMonth"
));

$proto38["m_sql"] = "UpdateTime";
$proto38["m_srcTableName"] = "sClosingMonth";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "UpdatePcName",
	"m_strTable" => "sClosingMonth",
	"m_srcTableName" => "sClosingMonth"
));

$proto40["m_sql"] = "UpdatePcName";
$proto40["m_srcTableName"] = "sClosingMonth";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "TotalUpdate",
	"m_strTable" => "sClosingMonth",
	"m_srcTableName" => "sClosingMonth"
));

$proto42["m_sql"] = "TotalUpdate";
$proto42["m_srcTableName"] = "sClosingMonth";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "UpdateLoc",
	"m_strTable" => "sClosingMonth",
	"m_srcTableName" => "sClosingMonth"
));

$proto44["m_sql"] = "UpdateLoc";
$proto44["m_srcTableName"] = "sClosingMonth";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "UpdateDevice",
	"m_strTable" => "sClosingMonth",
	"m_srcTableName" => "sClosingMonth"
));

$proto46["m_sql"] = "UpdateDevice";
$proto46["m_srcTableName"] = "sClosingMonth";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto48=array();
$proto48["m_link"] = "SQLL_MAIN";
			$proto49=array();
$proto49["m_strName"] = "sClosingMonth";
$proto49["m_srcTableName"] = "sClosingMonth";
$proto49["m_columns"] = array();
$proto49["m_columns"][] = "Code";
$proto49["m_columns"][] = "VMonth";
$proto49["m_columns"][] = "VYear";
$proto49["m_columns"][] = "CloseStatus";
$proto49["m_columns"][] = "DefaultMonth";
$proto49["m_columns"][] = "BuCode";
$proto49["m_columns"][] = "UserName";
$proto49["m_columns"][] = "CreateDate";
$proto49["m_columns"][] = "CreateTime";
$proto49["m_columns"][] = "CreatePcName";
$proto49["m_columns"][] = "CreatePCUser";
$proto49["m_columns"][] = "CreateLoc";
$proto49["m_columns"][] = "CreateDevice";
$proto49["m_columns"][] = "UpdatePcUser";
$proto49["m_columns"][] = "UpdateUser";
$proto49["m_columns"][] = "UpdateDate";
$proto49["m_columns"][] = "UpdateTime";
$proto49["m_columns"][] = "UpdatePcName";
$proto49["m_columns"][] = "TotalUpdate";
$proto49["m_columns"][] = "UpdateLoc";
$proto49["m_columns"][] = "UpdateDevice";
$obj = new SQLTable($proto49);

$proto48["m_table"] = $obj;
$proto48["m_sql"] = "sClosingMonth";
$proto48["m_alias"] = "";
$proto48["m_srcTableName"] = "sClosingMonth";
$proto50=array();
$proto50["m_sql"] = "";
$proto50["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto50["m_column"]=$obj;
$proto50["m_contained"] = array();
$proto50["m_strCase"] = "";
$proto50["m_havingmode"] = false;
$proto50["m_inBrackets"] = false;
$proto50["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto50);

$proto48["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto48);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="sClosingMonth";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sclosingmonth = createSqlQuery_sclosingmonth();


	
		;

																					

$tdatasclosingmonth[".sqlquery"] = $queryData_sclosingmonth;



$tdatasclosingmonth[".hasEvents"] = false;

?>