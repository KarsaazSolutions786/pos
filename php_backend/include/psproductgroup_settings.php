<?php
$tdatapsproductgroup = array();
$tdatapsproductgroup[".searchableFields"] = array();
$tdatapsproductgroup[".ShortName"] = "psproductgroup";
$tdatapsproductgroup[".OwnerID"] = "";
$tdatapsproductgroup[".OriginalTable"] = "psProductGroup";


$tdatapsproductgroup[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapsproductgroup[".originalPagesByType"] = $tdatapsproductgroup[".pagesByType"];
$tdatapsproductgroup[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapsproductgroup[".originalPages"] = $tdatapsproductgroup[".pages"];
$tdatapsproductgroup[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapsproductgroup[".originalDefaultPages"] = $tdatapsproductgroup[".defaultPages"];

//	field labels
$fieldLabelspsproductgroup = array();
$fieldToolTipspsproductgroup = array();
$pageTitlespsproductgroup = array();
$placeHolderspsproductgroup = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspsproductgroup["English"] = array();
	$fieldToolTipspsproductgroup["English"] = array();
	$placeHolderspsproductgroup["English"] = array();
	$pageTitlespsproductgroup["English"] = array();
	$fieldLabelspsproductgroup["English"]["Code"] = "Code";
	$fieldToolTipspsproductgroup["English"]["Code"] = "";
	$placeHolderspsproductgroup["English"]["Code"] = "";
	$fieldLabelspsproductgroup["English"]["BUnit"] = "BUnit";
	$fieldToolTipspsproductgroup["English"]["BUnit"] = "";
	$placeHolderspsproductgroup["English"]["BUnit"] = "";
	$fieldLabelspsproductgroup["English"]["Name"] = "Name";
	$fieldToolTipspsproductgroup["English"]["Name"] = "";
	$placeHolderspsproductgroup["English"]["Name"] = "";
	$fieldLabelspsproductgroup["English"]["Remarks"] = "Remarks";
	$fieldToolTipspsproductgroup["English"]["Remarks"] = "";
	$placeHolderspsproductgroup["English"]["Remarks"] = "";
	$fieldLabelspsproductgroup["English"]["NameInUrdu"] = "Name In Urdu";
	$fieldToolTipspsproductgroup["English"]["NameInUrdu"] = "";
	$placeHolderspsproductgroup["English"]["NameInUrdu"] = "";
	$fieldLabelspsproductgroup["English"]["RemarksInUrdu"] = "Remarks In Urdu";
	$fieldToolTipspsproductgroup["English"]["RemarksInUrdu"] = "";
	$placeHolderspsproductgroup["English"]["RemarksInUrdu"] = "";
	$fieldLabelspsproductgroup["English"]["UserName"] = "User Name";
	$fieldToolTipspsproductgroup["English"]["UserName"] = "";
	$placeHolderspsproductgroup["English"]["UserName"] = "";
	$fieldLabelspsproductgroup["English"]["CreateDate"] = "Create Date";
	$fieldToolTipspsproductgroup["English"]["CreateDate"] = "";
	$placeHolderspsproductgroup["English"]["CreateDate"] = "";
	$fieldLabelspsproductgroup["English"]["CreateTime"] = "Create Time";
	$fieldToolTipspsproductgroup["English"]["CreateTime"] = "";
	$placeHolderspsproductgroup["English"]["CreateTime"] = "";
	$fieldLabelspsproductgroup["English"]["CreatePcName"] = "Create Pc Name";
	$fieldToolTipspsproductgroup["English"]["CreatePcName"] = "";
	$placeHolderspsproductgroup["English"]["CreatePcName"] = "";
	$fieldLabelspsproductgroup["English"]["CreatePCUser"] = "Create PCUser";
	$fieldToolTipspsproductgroup["English"]["CreatePCUser"] = "";
	$placeHolderspsproductgroup["English"]["CreatePCUser"] = "";
	$fieldLabelspsproductgroup["English"]["CreateLoc"] = "Create Loc";
	$fieldToolTipspsproductgroup["English"]["CreateLoc"] = "";
	$placeHolderspsproductgroup["English"]["CreateLoc"] = "";
	$fieldLabelspsproductgroup["English"]["CreateDevice"] = "Create Device";
	$fieldToolTipspsproductgroup["English"]["CreateDevice"] = "";
	$placeHolderspsproductgroup["English"]["CreateDevice"] = "";
	$fieldLabelspsproductgroup["English"]["UpdatePcUser"] = "Update Pc User";
	$fieldToolTipspsproductgroup["English"]["UpdatePcUser"] = "";
	$placeHolderspsproductgroup["English"]["UpdatePcUser"] = "";
	$fieldLabelspsproductgroup["English"]["UpdateUser"] = "Update User";
	$fieldToolTipspsproductgroup["English"]["UpdateUser"] = "";
	$placeHolderspsproductgroup["English"]["UpdateUser"] = "";
	$fieldLabelspsproductgroup["English"]["UpdateDate"] = "Update Date";
	$fieldToolTipspsproductgroup["English"]["UpdateDate"] = "";
	$placeHolderspsproductgroup["English"]["UpdateDate"] = "";
	$fieldLabelspsproductgroup["English"]["UpdateTime"] = "Update Time";
	$fieldToolTipspsproductgroup["English"]["UpdateTime"] = "";
	$placeHolderspsproductgroup["English"]["UpdateTime"] = "";
	$fieldLabelspsproductgroup["English"]["UpdatePcName"] = "Update Pc Name";
	$fieldToolTipspsproductgroup["English"]["UpdatePcName"] = "";
	$placeHolderspsproductgroup["English"]["UpdatePcName"] = "";
	$fieldLabelspsproductgroup["English"]["UpdateLoc"] = "Update Loc";
	$fieldToolTipspsproductgroup["English"]["UpdateLoc"] = "";
	$placeHolderspsproductgroup["English"]["UpdateLoc"] = "";
	$fieldLabelspsproductgroup["English"]["UpdateDevice"] = "Update Device";
	$fieldToolTipspsproductgroup["English"]["UpdateDevice"] = "";
	$placeHolderspsproductgroup["English"]["UpdateDevice"] = "";
	$fieldLabelspsproductgroup["English"]["TotalUpdate"] = "Total Update";
	$fieldToolTipspsproductgroup["English"]["TotalUpdate"] = "";
	$placeHolderspsproductgroup["English"]["TotalUpdate"] = "";
	$fieldLabelspsproductgroup["English"]["Block"] = "Block";
	$fieldToolTipspsproductgroup["English"]["Block"] = "";
	$placeHolderspsproductgroup["English"]["Block"] = "";
	$fieldLabelspsproductgroup["English"]["Lock"] = "Lock";
	$fieldToolTipspsproductgroup["English"]["Lock"] = "";
	$placeHolderspsproductgroup["English"]["Lock"] = "";
	$fieldLabelspsproductgroup["English"]["Hide"] = "Hide";
	$fieldToolTipspsproductgroup["English"]["Hide"] = "";
	$placeHolderspsproductgroup["English"]["Hide"] = "";
	$fieldLabelspsproductgroup["English"]["Bookmark"] = "Bookmark";
	$fieldToolTipspsproductgroup["English"]["Bookmark"] = "";
	$placeHolderspsproductgroup["English"]["Bookmark"] = "";
	$fieldLabelspsproductgroup["English"]["BMStatus"] = "BMStatus";
	$fieldToolTipspsproductgroup["English"]["BMStatus"] = "";
	$placeHolderspsproductgroup["English"]["BMStatus"] = "";
	$fieldLabelspsproductgroup["English"]["BMIConID"] = "BMICon ID";
	$fieldToolTipspsproductgroup["English"]["BMIConID"] = "";
	$placeHolderspsproductgroup["English"]["BMIConID"] = "";
	$fieldLabelspsproductgroup["English"]["BMRowID"] = "BMRow ID";
	$fieldToolTipspsproductgroup["English"]["BMRowID"] = "";
	$placeHolderspsproductgroup["English"]["BMRowID"] = "";
	$fieldLabelspsproductgroup["English"]["DBRowID"] = "DBRow ID";
	$fieldToolTipspsproductgroup["English"]["DBRowID"] = "";
	$placeHolderspsproductgroup["English"]["DBRowID"] = "";
	$fieldLabelspsproductgroup["English"]["ECol1"] = "ECol1";
	$fieldToolTipspsproductgroup["English"]["ECol1"] = "";
	$placeHolderspsproductgroup["English"]["ECol1"] = "";
	$fieldLabelspsproductgroup["English"]["ECol2"] = "ECol2";
	$fieldToolTipspsproductgroup["English"]["ECol2"] = "";
	$placeHolderspsproductgroup["English"]["ECol2"] = "";
	if (count($fieldToolTipspsproductgroup["English"]))
		$tdatapsproductgroup[".isUseToolTips"] = true;
}


	$tdatapsproductgroup[".NCSearch"] = true;



$tdatapsproductgroup[".shortTableName"] = "psproductgroup";
$tdatapsproductgroup[".nSecOptions"] = 0;

$tdatapsproductgroup[".mainTableOwnerID"] = "";
$tdatapsproductgroup[".entityType"] = 0;
$tdatapsproductgroup[".connId"] = "karsaaz_pos_at_localhost";


$tdatapsproductgroup[".strOriginalTableName"] = "psProductGroup";

	



$tdatapsproductgroup[".showAddInPopup"] = false;

$tdatapsproductgroup[".showEditInPopup"] = false;

$tdatapsproductgroup[".showViewInPopup"] = false;

$tdatapsproductgroup[".listAjax"] = false;
//	temporary
//$tdatapsproductgroup[".listAjax"] = false;

	$tdatapsproductgroup[".audit"] = false;

	$tdatapsproductgroup[".locking"] = false;


$pages = $tdatapsproductgroup[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapsproductgroup[".edit"] = true;
	$tdatapsproductgroup[".afterEditAction"] = 1;
	$tdatapsproductgroup[".closePopupAfterEdit"] = 1;
	$tdatapsproductgroup[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapsproductgroup[".add"] = true;
$tdatapsproductgroup[".afterAddAction"] = 1;
$tdatapsproductgroup[".closePopupAfterAdd"] = 1;
$tdatapsproductgroup[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapsproductgroup[".list"] = true;
}



$tdatapsproductgroup[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapsproductgroup[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapsproductgroup[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapsproductgroup[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapsproductgroup[".printFriendly"] = true;
}



$tdatapsproductgroup[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapsproductgroup[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapsproductgroup[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapsproductgroup[".isUseAjaxSuggest"] = true;

$tdatapsproductgroup[".rowHighlite"] = true;





$tdatapsproductgroup[".ajaxCodeSnippetAdded"] = false;

$tdatapsproductgroup[".buttonsAdded"] = false;

$tdatapsproductgroup[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapsproductgroup[".isUseTimeForSearch"] = false;


$tdatapsproductgroup[".badgeColor"] = "8FBC8B";


$tdatapsproductgroup[".allSearchFields"] = array();
$tdatapsproductgroup[".filterFields"] = array();
$tdatapsproductgroup[".requiredSearchFields"] = array();

$tdatapsproductgroup[".googleLikeFields"] = array();
$tdatapsproductgroup[".googleLikeFields"][] = "Code";
$tdatapsproductgroup[".googleLikeFields"][] = "BUnit";
$tdatapsproductgroup[".googleLikeFields"][] = "Name";
$tdatapsproductgroup[".googleLikeFields"][] = "Remarks";
$tdatapsproductgroup[".googleLikeFields"][] = "NameInUrdu";
$tdatapsproductgroup[".googleLikeFields"][] = "RemarksInUrdu";
$tdatapsproductgroup[".googleLikeFields"][] = "UserName";
$tdatapsproductgroup[".googleLikeFields"][] = "CreateDate";
$tdatapsproductgroup[".googleLikeFields"][] = "CreateTime";
$tdatapsproductgroup[".googleLikeFields"][] = "CreatePcName";
$tdatapsproductgroup[".googleLikeFields"][] = "CreatePCUser";
$tdatapsproductgroup[".googleLikeFields"][] = "CreateLoc";
$tdatapsproductgroup[".googleLikeFields"][] = "CreateDevice";
$tdatapsproductgroup[".googleLikeFields"][] = "UpdatePcUser";
$tdatapsproductgroup[".googleLikeFields"][] = "UpdateUser";
$tdatapsproductgroup[".googleLikeFields"][] = "UpdateDate";
$tdatapsproductgroup[".googleLikeFields"][] = "UpdateTime";
$tdatapsproductgroup[".googleLikeFields"][] = "UpdatePcName";
$tdatapsproductgroup[".googleLikeFields"][] = "UpdateLoc";
$tdatapsproductgroup[".googleLikeFields"][] = "UpdateDevice";
$tdatapsproductgroup[".googleLikeFields"][] = "TotalUpdate";
$tdatapsproductgroup[".googleLikeFields"][] = "Block";
$tdatapsproductgroup[".googleLikeFields"][] = "Lock";
$tdatapsproductgroup[".googleLikeFields"][] = "Hide";
$tdatapsproductgroup[".googleLikeFields"][] = "Bookmark";
$tdatapsproductgroup[".googleLikeFields"][] = "BMStatus";
$tdatapsproductgroup[".googleLikeFields"][] = "BMIConID";
$tdatapsproductgroup[".googleLikeFields"][] = "BMRowID";
$tdatapsproductgroup[".googleLikeFields"][] = "DBRowID";
$tdatapsproductgroup[".googleLikeFields"][] = "ECol1";
$tdatapsproductgroup[".googleLikeFields"][] = "ECol2";



$tdatapsproductgroup[".tableType"] = "list";

$tdatapsproductgroup[".printerPageOrientation"] = 0;
$tdatapsproductgroup[".nPrinterPageScale"] = 100;

$tdatapsproductgroup[".nPrinterSplitRecords"] = 40;

$tdatapsproductgroup[".geocodingEnabled"] = false;










$tdatapsproductgroup[".pageSize"] = 20;

$tdatapsproductgroup[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapsproductgroup[".strOrderBy"] = $tstrOrderBy;

$tdatapsproductgroup[".orderindexes"] = array();


$tdatapsproductgroup[".sqlHead"] = "SELECT Code,  	BUnit,  	Name,  	Remarks,  	NameInUrdu,  	RemarksInUrdu,  	UserName,  	CreateDate,  	CreateTime,  	CreatePcName,  	CreatePCUser,  	CreateLoc,  	CreateDevice,  	UpdatePcUser,  	UpdateUser,  	UpdateDate,  	UpdateTime,  	UpdatePcName,  	UpdateLoc,  	UpdateDevice,  	TotalUpdate,  	Block,  	`Lock`,  	Hide,  	Bookmark,  	BMStatus,  	BMIConID,  	BMRowID,  	DBRowID,  	ECol1,  	ECol2";
$tdatapsproductgroup[".sqlFrom"] = "FROM psProductGroup";
$tdatapsproductgroup[".sqlWhereExpr"] = "";
$tdatapsproductgroup[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapsproductgroup[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapsproductgroup[".arrGroupsPerPage"] = $arrGPP;

$tdatapsproductgroup[".highlightSearchResults"] = true;

$tableKeyspsproductgroup = array();
$tableKeyspsproductgroup[] = "Code";
$tdatapsproductgroup[".Keys"] = $tableKeyspsproductgroup;


$tdatapsproductgroup[".hideMobileList"] = array();




//	Code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Code";
	$fdata["GoodName"] = "Code";
	$fdata["ownerTable"] = "psProductGroup";
	$fdata["Label"] = GetFieldLabel("psProductGroup","Code");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Code";

		$fdata["sourceSingle"] = "Code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Code";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatapsproductgroup["Code"] = $fdata;
		$tdatapsproductgroup[".searchableFields"][] = "Code";
//	BUnit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "BUnit";
	$fdata["GoodName"] = "BUnit";
	$fdata["ownerTable"] = "psProductGroup";
	$fdata["Label"] = GetFieldLabel("psProductGroup","BUnit");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "BUnit";

		$fdata["sourceSingle"] = "BUnit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BUnit";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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
	$edata["LookupTable"] = "pBU";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Code";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Name";

	

	
	$edata["LookupOrderBy"] = "";

	
	
	
	

	
	
		$edata["SelectSize"] = 1;

// End Lookup Settings


		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
	
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


	$tdatapsproductgroup["BUnit"] = $fdata;
		$tdatapsproductgroup[".searchableFields"][] = "BUnit";
//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "psProductGroup";
	$fdata["Label"] = GetFieldLabel("psProductGroup","Name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Name";

		$fdata["sourceSingle"] = "Name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Name";

	
	
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
			$edata["EditParams"].= " maxlength=100";

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


	$tdatapsproductgroup["Name"] = $fdata;
		$tdatapsproductgroup[".searchableFields"][] = "Name";
//	Remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Remarks";
	$fdata["GoodName"] = "Remarks";
	$fdata["ownerTable"] = "psProductGroup";
	$fdata["Label"] = GetFieldLabel("psProductGroup","Remarks");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "Remarks";

		$fdata["sourceSingle"] = "Remarks";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Remarks";

	
	
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


	$tdatapsproductgroup["Remarks"] = $fdata;
		$tdatapsproductgroup[".searchableFields"][] = "Remarks";
//	NameInUrdu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "NameInUrdu";
	$fdata["GoodName"] = "NameInUrdu";
	$fdata["ownerTable"] = "psProductGroup";
	$fdata["Label"] = GetFieldLabel("psProductGroup","NameInUrdu");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "NameInUrdu";

		$fdata["sourceSingle"] = "NameInUrdu";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NameInUrdu";

	
	
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
			$edata["EditParams"].= " maxlength=500";

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


	$tdatapsproductgroup["NameInUrdu"] = $fdata;
		$tdatapsproductgroup[".searchableFields"][] = "NameInUrdu";
//	RemarksInUrdu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "RemarksInUrdu";
	$fdata["GoodName"] = "RemarksInUrdu";
	$fdata["ownerTable"] = "psProductGroup";
	$fdata["Label"] = GetFieldLabel("psProductGroup","RemarksInUrdu");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "RemarksInUrdu";

		$fdata["sourceSingle"] = "RemarksInUrdu";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RemarksInUrdu";

	
	
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
			$edata["EditParams"].= " maxlength=1000";

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


	$tdatapsproductgroup["RemarksInUrdu"] = $fdata;
		$tdatapsproductgroup[".searchableFields"][] = "RemarksInUrdu";
//	UserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "UserName";
	$fdata["GoodName"] = "UserName";
	$fdata["ownerTable"] = "psProductGroup";
	$fdata["Label"] = GetFieldLabel("psProductGroup","UserName");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "umUserInfo";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Code";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "UserName";

	

	
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


	$tdatapsproductgroup["UserName"] = $fdata;
		$tdatapsproductgroup[".searchableFields"][] = "UserName";
//	CreateDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "CreateDate";
	$fdata["GoodName"] = "CreateDate";
	$fdata["ownerTable"] = "psProductGroup";
	$fdata["Label"] = GetFieldLabel("psProductGroup","CreateDate");
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
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


	$tdatapsproductgroup["CreateDate"] = $fdata;
		$tdatapsproductgroup[".searchableFields"][] = "CreateDate";
//	CreateTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "CreateTime";
	$fdata["GoodName"] = "CreateTime";
	$fdata["ownerTable"] = "psProductGroup";
	$fdata["Label"] = GetFieldLabel("psProductGroup","CreateTime");
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

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Time");
							
	
//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
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


	$tdatapsproductgroup["CreateTime"] = $fdata;
		$tdatapsproductgroup[".searchableFields"][] = "CreateTime";
//	CreatePcName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "CreatePcName";
	$fdata["GoodName"] = "CreatePcName";
	$fdata["ownerTable"] = "psProductGroup";
	$fdata["Label"] = GetFieldLabel("psProductGroup","CreatePcName");
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


	$tdatapsproductgroup["CreatePcName"] = $fdata;
		$tdatapsproductgroup[".searchableFields"][] = "CreatePcName";
//	CreatePCUser
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "CreatePCUser";
	$fdata["GoodName"] = "CreatePCUser";
	$fdata["ownerTable"] = "psProductGroup";
	$fdata["Label"] = GetFieldLabel("psProductGroup","CreatePCUser");
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


	$tdatapsproductgroup["CreatePCUser"] = $fdata;
		$tdatapsproductgroup[".searchableFields"][] = "CreatePCUser";
//	CreateLoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "CreateLoc";
	$fdata["GoodName"] = "CreateLoc";
	$fdata["ownerTable"] = "psProductGroup";
	$fdata["Label"] = GetFieldLabel("psProductGroup","CreateLoc");
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


	$tdatapsproductgroup["CreateLoc"] = $fdata;
		$tdatapsproductgroup[".searchableFields"][] = "CreateLoc";
//	CreateDevice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "CreateDevice";
	$fdata["GoodName"] = "CreateDevice";
	$fdata["ownerTable"] = "psProductGroup";
	$fdata["Label"] = GetFieldLabel("psProductGroup","CreateDevice");
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


	$tdatapsproductgroup["CreateDevice"] = $fdata;
		$tdatapsproductgroup[".searchableFields"][] = "CreateDevice";
//	UpdatePcUser
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "UpdatePcUser";
	$fdata["GoodName"] = "UpdatePcUser";
	$fdata["ownerTable"] = "psProductGroup";
	$fdata["Label"] = GetFieldLabel("psProductGroup","UpdatePcUser");
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


	$tdatapsproductgroup["UpdatePcUser"] = $fdata;
		$tdatapsproductgroup[".searchableFields"][] = "UpdatePcUser";
//	UpdateUser
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "UpdateUser";
	$fdata["GoodName"] = "UpdateUser";
	$fdata["ownerTable"] = "psProductGroup";
	$fdata["Label"] = GetFieldLabel("psProductGroup","UpdateUser");
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

	$edata = array("EditFormat" => "Lookup wizard");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	

// Begin Lookup settings
				$edata["LookupType"] = 2;
	$edata["LookupTable"] = "umUserInfo";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Code";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "UserName";

	

	
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


	$tdatapsproductgroup["UpdateUser"] = $fdata;
		$tdatapsproductgroup[".searchableFields"][] = "UpdateUser";
//	UpdateDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "UpdateDate";
	$fdata["GoodName"] = "UpdateDate";
	$fdata["ownerTable"] = "psProductGroup";
	$fdata["Label"] = GetFieldLabel("psProductGroup","UpdateDate");
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

	
		$edata["weekdayMessage"] = array("message" => "Invalid week day", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
		$edata["DateEditType"] = 2;
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


	$tdatapsproductgroup["UpdateDate"] = $fdata;
		$tdatapsproductgroup[".searchableFields"][] = "UpdateDate";
//	UpdateTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "UpdateTime";
	$fdata["GoodName"] = "UpdateTime";
	$fdata["ownerTable"] = "psProductGroup";
	$fdata["Label"] = GetFieldLabel("psProductGroup","UpdateTime");
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

	$edata = array("EditFormat" => "Time");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 1;

	
	
	
	
	
		$edata["EditParams"] = "";
			$edata["EditParams"].= " maxlength=50";

		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
				$edata["validateAs"]["basicValidate"][] = getJsValidatorName("Time");
							
	
//	End validation

	
			
				$hours = 24;
	$edata["FormatTimeAttrs"] = array("useTimePicker" => 0,
									  "hours" => $hours,
									  "minutes" => 1,
									  "showSeconds" => 0);

	
	
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


	$tdatapsproductgroup["UpdateTime"] = $fdata;
		$tdatapsproductgroup[".searchableFields"][] = "UpdateTime";
//	UpdatePcName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "UpdatePcName";
	$fdata["GoodName"] = "UpdatePcName";
	$fdata["ownerTable"] = "psProductGroup";
	$fdata["Label"] = GetFieldLabel("psProductGroup","UpdatePcName");
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


	$tdatapsproductgroup["UpdatePcName"] = $fdata;
		$tdatapsproductgroup[".searchableFields"][] = "UpdatePcName";
//	UpdateLoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "UpdateLoc";
	$fdata["GoodName"] = "UpdateLoc";
	$fdata["ownerTable"] = "psProductGroup";
	$fdata["Label"] = GetFieldLabel("psProductGroup","UpdateLoc");
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


	$tdatapsproductgroup["UpdateLoc"] = $fdata;
		$tdatapsproductgroup[".searchableFields"][] = "UpdateLoc";
//	UpdateDevice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "UpdateDevice";
	$fdata["GoodName"] = "UpdateDevice";
	$fdata["ownerTable"] = "psProductGroup";
	$fdata["Label"] = GetFieldLabel("psProductGroup","UpdateDevice");
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


	$tdatapsproductgroup["UpdateDevice"] = $fdata;
		$tdatapsproductgroup[".searchableFields"][] = "UpdateDevice";
//	TotalUpdate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "TotalUpdate";
	$fdata["GoodName"] = "TotalUpdate";
	$fdata["ownerTable"] = "psProductGroup";
	$fdata["Label"] = GetFieldLabel("psProductGroup","TotalUpdate");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "TotalUpdate";

		$fdata["sourceSingle"] = "TotalUpdate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TotalUpdate";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatapsproductgroup["TotalUpdate"] = $fdata;
		$tdatapsproductgroup[".searchableFields"][] = "TotalUpdate";
//	Block
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "Block";
	$fdata["GoodName"] = "Block";
	$fdata["ownerTable"] = "psProductGroup";
	$fdata["Label"] = GetFieldLabel("psProductGroup","Block");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "Block";

		$fdata["sourceSingle"] = "Block";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Block";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdatapsproductgroup["Block"] = $fdata;
		$tdatapsproductgroup[".searchableFields"][] = "Block";
//	Lock
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "Lock";
	$fdata["GoodName"] = "Lock";
	$fdata["ownerTable"] = "psProductGroup";
	$fdata["Label"] = GetFieldLabel("psProductGroup","Lock");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "Lock";

		$fdata["sourceSingle"] = "Lock";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Lock`";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdatapsproductgroup["Lock"] = $fdata;
		$tdatapsproductgroup[".searchableFields"][] = "Lock";
//	Hide
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "Hide";
	$fdata["GoodName"] = "Hide";
	$fdata["ownerTable"] = "psProductGroup";
	$fdata["Label"] = GetFieldLabel("psProductGroup","Hide");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "Hide";

		$fdata["sourceSingle"] = "Hide";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Hide";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdatapsproductgroup["Hide"] = $fdata;
		$tdatapsproductgroup[".searchableFields"][] = "Hide";
//	Bookmark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "Bookmark";
	$fdata["GoodName"] = "Bookmark";
	$fdata["ownerTable"] = "psProductGroup";
	$fdata["Label"] = GetFieldLabel("psProductGroup","Bookmark");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "Bookmark";

		$fdata["sourceSingle"] = "Bookmark";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Bookmark";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Checkbox");

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Checkbox");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
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


	$tdatapsproductgroup["Bookmark"] = $fdata;
		$tdatapsproductgroup[".searchableFields"][] = "Bookmark";
//	BMStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "BMStatus";
	$fdata["GoodName"] = "BMStatus";
	$fdata["ownerTable"] = "psProductGroup";
	$fdata["Label"] = GetFieldLabel("psProductGroup","BMStatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "BMStatus";

		$fdata["sourceSingle"] = "BMStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BMStatus";

	
	
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


	$tdatapsproductgroup["BMStatus"] = $fdata;
		$tdatapsproductgroup[".searchableFields"][] = "BMStatus";
//	BMIConID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "BMIConID";
	$fdata["GoodName"] = "BMIConID";
	$fdata["ownerTable"] = "psProductGroup";
	$fdata["Label"] = GetFieldLabel("psProductGroup","BMIConID");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "BMIConID";

		$fdata["sourceSingle"] = "BMIConID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BMIConID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatapsproductgroup["BMIConID"] = $fdata;
		$tdatapsproductgroup[".searchableFields"][] = "BMIConID";
//	BMRowID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "BMRowID";
	$fdata["GoodName"] = "BMRowID";
	$fdata["ownerTable"] = "psProductGroup";
	$fdata["Label"] = GetFieldLabel("psProductGroup","BMRowID");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "BMRowID";

		$fdata["sourceSingle"] = "BMRowID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BMRowID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatapsproductgroup["BMRowID"] = $fdata;
		$tdatapsproductgroup[".searchableFields"][] = "BMRowID";
//	DBRowID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "DBRowID";
	$fdata["GoodName"] = "DBRowID";
	$fdata["ownerTable"] = "psProductGroup";
	$fdata["Label"] = GetFieldLabel("psProductGroup","DBRowID");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "DBRowID";

		$fdata["sourceSingle"] = "DBRowID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DBRowID";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 0;

	
	
	
	
	
	
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


	$tdatapsproductgroup["DBRowID"] = $fdata;
		$tdatapsproductgroup[".searchableFields"][] = "DBRowID";
//	ECol1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "ECol1";
	$fdata["GoodName"] = "ECol1";
	$fdata["ownerTable"] = "psProductGroup";
	$fdata["Label"] = GetFieldLabel("psProductGroup","ECol1");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "ECol1";

		$fdata["sourceSingle"] = "ECol1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ECol1";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 3;

	
	
	
	
	
	
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


	$tdatapsproductgroup["ECol1"] = $fdata;
		$tdatapsproductgroup[".searchableFields"][] = "ECol1";
//	ECol2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "ECol2";
	$fdata["GoodName"] = "ECol2";
	$fdata["ownerTable"] = "psProductGroup";
	$fdata["Label"] = GetFieldLabel("psProductGroup","ECol2");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ECol2";

		$fdata["sourceSingle"] = "ECol2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ECol2";

	
	
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
			$edata["EditParams"].= " maxlength=1000";

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


	$tdatapsproductgroup["ECol2"] = $fdata;
		$tdatapsproductgroup[".searchableFields"][] = "ECol2";


$tables_data["psProductGroup"]=&$tdatapsproductgroup;
$field_labels["psProductGroup"] = &$fieldLabelspsproductgroup;
$fieldToolTips["psProductGroup"] = &$fieldToolTipspsproductgroup;
$placeHolders["psProductGroup"] = &$placeHolderspsproductgroup;
$page_titles["psProductGroup"] = &$pageTitlespsproductgroup;


changeTextControlsToDate( "psProductGroup" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["psProductGroup"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["psProductGroup"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_psproductgroup()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Code,  	BUnit,  	Name,  	Remarks,  	NameInUrdu,  	RemarksInUrdu,  	UserName,  	CreateDate,  	CreateTime,  	CreatePcName,  	CreatePCUser,  	CreateLoc,  	CreateDevice,  	UpdatePcUser,  	UpdateUser,  	UpdateDate,  	UpdateTime,  	UpdatePcName,  	UpdateLoc,  	UpdateDevice,  	TotalUpdate,  	Block,  	`Lock`,  	Hide,  	Bookmark,  	BMStatus,  	BMIConID,  	BMRowID,  	DBRowID,  	ECol1,  	ECol2";
$proto0["m_strFrom"] = "FROM psProductGroup";
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
	"m_strTable" => "psProductGroup",
	"m_srcTableName" => "psProductGroup"
));

$proto6["m_sql"] = "Code";
$proto6["m_srcTableName"] = "psProductGroup";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "BUnit",
	"m_strTable" => "psProductGroup",
	"m_srcTableName" => "psProductGroup"
));

$proto8["m_sql"] = "BUnit";
$proto8["m_srcTableName"] = "psProductGroup";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "psProductGroup",
	"m_srcTableName" => "psProductGroup"
));

$proto10["m_sql"] = "Name";
$proto10["m_srcTableName"] = "psProductGroup";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Remarks",
	"m_strTable" => "psProductGroup",
	"m_srcTableName" => "psProductGroup"
));

$proto12["m_sql"] = "Remarks";
$proto12["m_srcTableName"] = "psProductGroup";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "NameInUrdu",
	"m_strTable" => "psProductGroup",
	"m_srcTableName" => "psProductGroup"
));

$proto14["m_sql"] = "NameInUrdu";
$proto14["m_srcTableName"] = "psProductGroup";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "RemarksInUrdu",
	"m_strTable" => "psProductGroup",
	"m_srcTableName" => "psProductGroup"
));

$proto16["m_sql"] = "RemarksInUrdu";
$proto16["m_srcTableName"] = "psProductGroup";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "UserName",
	"m_strTable" => "psProductGroup",
	"m_srcTableName" => "psProductGroup"
));

$proto18["m_sql"] = "UserName";
$proto18["m_srcTableName"] = "psProductGroup";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "CreateDate",
	"m_strTable" => "psProductGroup",
	"m_srcTableName" => "psProductGroup"
));

$proto20["m_sql"] = "CreateDate";
$proto20["m_srcTableName"] = "psProductGroup";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "CreateTime",
	"m_strTable" => "psProductGroup",
	"m_srcTableName" => "psProductGroup"
));

$proto22["m_sql"] = "CreateTime";
$proto22["m_srcTableName"] = "psProductGroup";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "CreatePcName",
	"m_strTable" => "psProductGroup",
	"m_srcTableName" => "psProductGroup"
));

$proto24["m_sql"] = "CreatePcName";
$proto24["m_srcTableName"] = "psProductGroup";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "CreatePCUser",
	"m_strTable" => "psProductGroup",
	"m_srcTableName" => "psProductGroup"
));

$proto26["m_sql"] = "CreatePCUser";
$proto26["m_srcTableName"] = "psProductGroup";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "CreateLoc",
	"m_strTable" => "psProductGroup",
	"m_srcTableName" => "psProductGroup"
));

$proto28["m_sql"] = "CreateLoc";
$proto28["m_srcTableName"] = "psProductGroup";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "CreateDevice",
	"m_strTable" => "psProductGroup",
	"m_srcTableName" => "psProductGroup"
));

$proto30["m_sql"] = "CreateDevice";
$proto30["m_srcTableName"] = "psProductGroup";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "UpdatePcUser",
	"m_strTable" => "psProductGroup",
	"m_srcTableName" => "psProductGroup"
));

$proto32["m_sql"] = "UpdatePcUser";
$proto32["m_srcTableName"] = "psProductGroup";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "UpdateUser",
	"m_strTable" => "psProductGroup",
	"m_srcTableName" => "psProductGroup"
));

$proto34["m_sql"] = "UpdateUser";
$proto34["m_srcTableName"] = "psProductGroup";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "UpdateDate",
	"m_strTable" => "psProductGroup",
	"m_srcTableName" => "psProductGroup"
));

$proto36["m_sql"] = "UpdateDate";
$proto36["m_srcTableName"] = "psProductGroup";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "UpdateTime",
	"m_strTable" => "psProductGroup",
	"m_srcTableName" => "psProductGroup"
));

$proto38["m_sql"] = "UpdateTime";
$proto38["m_srcTableName"] = "psProductGroup";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "UpdatePcName",
	"m_strTable" => "psProductGroup",
	"m_srcTableName" => "psProductGroup"
));

$proto40["m_sql"] = "UpdatePcName";
$proto40["m_srcTableName"] = "psProductGroup";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "UpdateLoc",
	"m_strTable" => "psProductGroup",
	"m_srcTableName" => "psProductGroup"
));

$proto42["m_sql"] = "UpdateLoc";
$proto42["m_srcTableName"] = "psProductGroup";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "UpdateDevice",
	"m_strTable" => "psProductGroup",
	"m_srcTableName" => "psProductGroup"
));

$proto44["m_sql"] = "UpdateDevice";
$proto44["m_srcTableName"] = "psProductGroup";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "TotalUpdate",
	"m_strTable" => "psProductGroup",
	"m_srcTableName" => "psProductGroup"
));

$proto46["m_sql"] = "TotalUpdate";
$proto46["m_srcTableName"] = "psProductGroup";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "Block",
	"m_strTable" => "psProductGroup",
	"m_srcTableName" => "psProductGroup"
));

$proto48["m_sql"] = "Block";
$proto48["m_srcTableName"] = "psProductGroup";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "Lock",
	"m_strTable" => "psProductGroup",
	"m_srcTableName" => "psProductGroup"
));

$proto50["m_sql"] = "`Lock`";
$proto50["m_srcTableName"] = "psProductGroup";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "Hide",
	"m_strTable" => "psProductGroup",
	"m_srcTableName" => "psProductGroup"
));

$proto52["m_sql"] = "Hide";
$proto52["m_srcTableName"] = "psProductGroup";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "Bookmark",
	"m_strTable" => "psProductGroup",
	"m_srcTableName" => "psProductGroup"
));

$proto54["m_sql"] = "Bookmark";
$proto54["m_srcTableName"] = "psProductGroup";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "BMStatus",
	"m_strTable" => "psProductGroup",
	"m_srcTableName" => "psProductGroup"
));

$proto56["m_sql"] = "BMStatus";
$proto56["m_srcTableName"] = "psProductGroup";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "BMIConID",
	"m_strTable" => "psProductGroup",
	"m_srcTableName" => "psProductGroup"
));

$proto58["m_sql"] = "BMIConID";
$proto58["m_srcTableName"] = "psProductGroup";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "BMRowID",
	"m_strTable" => "psProductGroup",
	"m_srcTableName" => "psProductGroup"
));

$proto60["m_sql"] = "BMRowID";
$proto60["m_srcTableName"] = "psProductGroup";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "DBRowID",
	"m_strTable" => "psProductGroup",
	"m_srcTableName" => "psProductGroup"
));

$proto62["m_sql"] = "DBRowID";
$proto62["m_srcTableName"] = "psProductGroup";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "ECol1",
	"m_strTable" => "psProductGroup",
	"m_srcTableName" => "psProductGroup"
));

$proto64["m_sql"] = "ECol1";
$proto64["m_srcTableName"] = "psProductGroup";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "ECol2",
	"m_strTable" => "psProductGroup",
	"m_srcTableName" => "psProductGroup"
));

$proto66["m_sql"] = "ECol2";
$proto66["m_srcTableName"] = "psProductGroup";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto68=array();
$proto68["m_link"] = "SQLL_MAIN";
			$proto69=array();
$proto69["m_strName"] = "psProductGroup";
$proto69["m_srcTableName"] = "psProductGroup";
$proto69["m_columns"] = array();
$proto69["m_columns"][] = "Code";
$proto69["m_columns"][] = "BUnit";
$proto69["m_columns"][] = "Name";
$proto69["m_columns"][] = "Remarks";
$proto69["m_columns"][] = "NameInUrdu";
$proto69["m_columns"][] = "RemarksInUrdu";
$proto69["m_columns"][] = "UserName";
$proto69["m_columns"][] = "CreateDate";
$proto69["m_columns"][] = "CreateTime";
$proto69["m_columns"][] = "CreatePcName";
$proto69["m_columns"][] = "CreatePCUser";
$proto69["m_columns"][] = "CreateLoc";
$proto69["m_columns"][] = "CreateDevice";
$proto69["m_columns"][] = "UpdatePcUser";
$proto69["m_columns"][] = "UpdateUser";
$proto69["m_columns"][] = "UpdateDate";
$proto69["m_columns"][] = "UpdateTime";
$proto69["m_columns"][] = "UpdatePcName";
$proto69["m_columns"][] = "UpdateLoc";
$proto69["m_columns"][] = "UpdateDevice";
$proto69["m_columns"][] = "TotalUpdate";
$proto69["m_columns"][] = "Block";
$proto69["m_columns"][] = "Lock";
$proto69["m_columns"][] = "Hide";
$proto69["m_columns"][] = "Bookmark";
$proto69["m_columns"][] = "BMStatus";
$proto69["m_columns"][] = "BMIConID";
$proto69["m_columns"][] = "BMRowID";
$proto69["m_columns"][] = "DBRowID";
$proto69["m_columns"][] = "ECol1";
$proto69["m_columns"][] = "ECol2";
$obj = new SQLTable($proto69);

$proto68["m_table"] = $obj;
$proto68["m_sql"] = "psProductGroup";
$proto68["m_alias"] = "";
$proto68["m_srcTableName"] = "psProductGroup";
$proto70=array();
$proto70["m_sql"] = "";
$proto70["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto70["m_column"]=$obj;
$proto70["m_contained"] = array();
$proto70["m_strCase"] = "";
$proto70["m_havingmode"] = false;
$proto70["m_inBrackets"] = false;
$proto70["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto70);

$proto68["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto68);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="psProductGroup";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_psproductgroup = createSqlQuery_psproductgroup();


	
		;

																															

$tdatapsproductgroup[".sqlquery"] = $queryData_psproductgroup;



$tdatapsproductgroup[".hasEvents"] = false;

?>