<?php
$tdatapsaccountsubgroup = array();
$tdatapsaccountsubgroup[".searchableFields"] = array();
$tdatapsaccountsubgroup[".ShortName"] = "psaccountsubgroup";
$tdatapsaccountsubgroup[".OwnerID"] = "";
$tdatapsaccountsubgroup[".OriginalTable"] = "psAccountSubGroup";


$tdatapsaccountsubgroup[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapsaccountsubgroup[".originalPagesByType"] = $tdatapsaccountsubgroup[".pagesByType"];
$tdatapsaccountsubgroup[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapsaccountsubgroup[".originalPages"] = $tdatapsaccountsubgroup[".pages"];
$tdatapsaccountsubgroup[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapsaccountsubgroup[".originalDefaultPages"] = $tdatapsaccountsubgroup[".defaultPages"];

//	field labels
$fieldLabelspsaccountsubgroup = array();
$fieldToolTipspsaccountsubgroup = array();
$pageTitlespsaccountsubgroup = array();
$placeHolderspsaccountsubgroup = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspsaccountsubgroup["English"] = array();
	$fieldToolTipspsaccountsubgroup["English"] = array();
	$placeHolderspsaccountsubgroup["English"] = array();
	$pageTitlespsaccountsubgroup["English"] = array();
	$fieldLabelspsaccountsubgroup["English"]["Code"] = "Code";
	$fieldToolTipspsaccountsubgroup["English"]["Code"] = "";
	$placeHolderspsaccountsubgroup["English"]["Code"] = "";
	$fieldLabelspsaccountsubgroup["English"]["BUnit"] = "BUnit";
	$fieldToolTipspsaccountsubgroup["English"]["BUnit"] = "";
	$placeHolderspsaccountsubgroup["English"]["BUnit"] = "";
	$fieldLabelspsaccountsubgroup["English"]["CofAccCode"] = "Cof Acc Code";
	$fieldToolTipspsaccountsubgroup["English"]["CofAccCode"] = "";
	$placeHolderspsaccountsubgroup["English"]["CofAccCode"] = "";
	$fieldLabelspsaccountsubgroup["English"]["Name"] = "Name";
	$fieldToolTipspsaccountsubgroup["English"]["Name"] = "";
	$placeHolderspsaccountsubgroup["English"]["Name"] = "";
	$fieldLabelspsaccountsubgroup["English"]["Remarks"] = "Remarks";
	$fieldToolTipspsaccountsubgroup["English"]["Remarks"] = "";
	$placeHolderspsaccountsubgroup["English"]["Remarks"] = "";
	$fieldLabelspsaccountsubgroup["English"]["NameInUrdu"] = "Name In Urdu";
	$fieldToolTipspsaccountsubgroup["English"]["NameInUrdu"] = "";
	$placeHolderspsaccountsubgroup["English"]["NameInUrdu"] = "";
	$fieldLabelspsaccountsubgroup["English"]["RemarksInUrdu"] = "Remarks In Urdu";
	$fieldToolTipspsaccountsubgroup["English"]["RemarksInUrdu"] = "";
	$placeHolderspsaccountsubgroup["English"]["RemarksInUrdu"] = "";
	$fieldLabelspsaccountsubgroup["English"]["UserName"] = "User Name";
	$fieldToolTipspsaccountsubgroup["English"]["UserName"] = "";
	$placeHolderspsaccountsubgroup["English"]["UserName"] = "";
	$fieldLabelspsaccountsubgroup["English"]["CreateDate"] = "Create Date";
	$fieldToolTipspsaccountsubgroup["English"]["CreateDate"] = "";
	$placeHolderspsaccountsubgroup["English"]["CreateDate"] = "";
	$fieldLabelspsaccountsubgroup["English"]["CreateTime"] = "Create Time";
	$fieldToolTipspsaccountsubgroup["English"]["CreateTime"] = "";
	$placeHolderspsaccountsubgroup["English"]["CreateTime"] = "";
	$fieldLabelspsaccountsubgroup["English"]["CreatePcName"] = "Create Pc Name";
	$fieldToolTipspsaccountsubgroup["English"]["CreatePcName"] = "";
	$placeHolderspsaccountsubgroup["English"]["CreatePcName"] = "";
	$fieldLabelspsaccountsubgroup["English"]["CreatePCUser"] = "Create PCUser";
	$fieldToolTipspsaccountsubgroup["English"]["CreatePCUser"] = "";
	$placeHolderspsaccountsubgroup["English"]["CreatePCUser"] = "";
	$fieldLabelspsaccountsubgroup["English"]["CreateLoc"] = "Create Loc";
	$fieldToolTipspsaccountsubgroup["English"]["CreateLoc"] = "";
	$placeHolderspsaccountsubgroup["English"]["CreateLoc"] = "";
	$fieldLabelspsaccountsubgroup["English"]["CreateDevice"] = "Create Device";
	$fieldToolTipspsaccountsubgroup["English"]["CreateDevice"] = "";
	$placeHolderspsaccountsubgroup["English"]["CreateDevice"] = "";
	$fieldLabelspsaccountsubgroup["English"]["UpdatePcUser"] = "Update Pc User";
	$fieldToolTipspsaccountsubgroup["English"]["UpdatePcUser"] = "";
	$placeHolderspsaccountsubgroup["English"]["UpdatePcUser"] = "";
	$fieldLabelspsaccountsubgroup["English"]["UpdateUser"] = "Update User";
	$fieldToolTipspsaccountsubgroup["English"]["UpdateUser"] = "";
	$placeHolderspsaccountsubgroup["English"]["UpdateUser"] = "";
	$fieldLabelspsaccountsubgroup["English"]["UpdateDate"] = "Update Date";
	$fieldToolTipspsaccountsubgroup["English"]["UpdateDate"] = "";
	$placeHolderspsaccountsubgroup["English"]["UpdateDate"] = "";
	$fieldLabelspsaccountsubgroup["English"]["UpdateTime"] = "Update Time";
	$fieldToolTipspsaccountsubgroup["English"]["UpdateTime"] = "";
	$placeHolderspsaccountsubgroup["English"]["UpdateTime"] = "";
	$fieldLabelspsaccountsubgroup["English"]["UpdatePcName"] = "Update Pc Name";
	$fieldToolTipspsaccountsubgroup["English"]["UpdatePcName"] = "";
	$placeHolderspsaccountsubgroup["English"]["UpdatePcName"] = "";
	$fieldLabelspsaccountsubgroup["English"]["UpdateLoc"] = "Update Loc";
	$fieldToolTipspsaccountsubgroup["English"]["UpdateLoc"] = "";
	$placeHolderspsaccountsubgroup["English"]["UpdateLoc"] = "";
	$fieldLabelspsaccountsubgroup["English"]["UpdateDevice"] = "Update Device";
	$fieldToolTipspsaccountsubgroup["English"]["UpdateDevice"] = "";
	$placeHolderspsaccountsubgroup["English"]["UpdateDevice"] = "";
	$fieldLabelspsaccountsubgroup["English"]["TotalUpdate"] = "Total Update";
	$fieldToolTipspsaccountsubgroup["English"]["TotalUpdate"] = "";
	$placeHolderspsaccountsubgroup["English"]["TotalUpdate"] = "";
	$fieldLabelspsaccountsubgroup["English"]["Block"] = "Block";
	$fieldToolTipspsaccountsubgroup["English"]["Block"] = "";
	$placeHolderspsaccountsubgroup["English"]["Block"] = "";
	$fieldLabelspsaccountsubgroup["English"]["Lock"] = "Lock";
	$fieldToolTipspsaccountsubgroup["English"]["Lock"] = "";
	$placeHolderspsaccountsubgroup["English"]["Lock"] = "";
	$fieldLabelspsaccountsubgroup["English"]["Hide"] = "Hide";
	$fieldToolTipspsaccountsubgroup["English"]["Hide"] = "";
	$placeHolderspsaccountsubgroup["English"]["Hide"] = "";
	$fieldLabelspsaccountsubgroup["English"]["Bookmark"] = "Bookmark";
	$fieldToolTipspsaccountsubgroup["English"]["Bookmark"] = "";
	$placeHolderspsaccountsubgroup["English"]["Bookmark"] = "";
	$fieldLabelspsaccountsubgroup["English"]["BMStatus"] = "BMStatus";
	$fieldToolTipspsaccountsubgroup["English"]["BMStatus"] = "";
	$placeHolderspsaccountsubgroup["English"]["BMStatus"] = "";
	$fieldLabelspsaccountsubgroup["English"]["BMIConID"] = "BMICon ID";
	$fieldToolTipspsaccountsubgroup["English"]["BMIConID"] = "";
	$placeHolderspsaccountsubgroup["English"]["BMIConID"] = "";
	$fieldLabelspsaccountsubgroup["English"]["BMRowID"] = "BMRow ID";
	$fieldToolTipspsaccountsubgroup["English"]["BMRowID"] = "";
	$placeHolderspsaccountsubgroup["English"]["BMRowID"] = "";
	$fieldLabelspsaccountsubgroup["English"]["DBRowID"] = "DBRow ID";
	$fieldToolTipspsaccountsubgroup["English"]["DBRowID"] = "";
	$placeHolderspsaccountsubgroup["English"]["DBRowID"] = "";
	$fieldLabelspsaccountsubgroup["English"]["ECol1"] = "ECol1";
	$fieldToolTipspsaccountsubgroup["English"]["ECol1"] = "";
	$placeHolderspsaccountsubgroup["English"]["ECol1"] = "";
	$fieldLabelspsaccountsubgroup["English"]["ECol2"] = "ECol2";
	$fieldToolTipspsaccountsubgroup["English"]["ECol2"] = "";
	$placeHolderspsaccountsubgroup["English"]["ECol2"] = "";
	if (count($fieldToolTipspsaccountsubgroup["English"]))
		$tdatapsaccountsubgroup[".isUseToolTips"] = true;
}


	$tdatapsaccountsubgroup[".NCSearch"] = true;



$tdatapsaccountsubgroup[".shortTableName"] = "psaccountsubgroup";
$tdatapsaccountsubgroup[".nSecOptions"] = 0;

$tdatapsaccountsubgroup[".mainTableOwnerID"] = "";
$tdatapsaccountsubgroup[".entityType"] = 0;
$tdatapsaccountsubgroup[".connId"] = "karsaaz_pos_at_localhost";


$tdatapsaccountsubgroup[".strOriginalTableName"] = "psAccountSubGroup";

	



$tdatapsaccountsubgroup[".showAddInPopup"] = false;

$tdatapsaccountsubgroup[".showEditInPopup"] = false;

$tdatapsaccountsubgroup[".showViewInPopup"] = false;

$tdatapsaccountsubgroup[".listAjax"] = false;
//	temporary
//$tdatapsaccountsubgroup[".listAjax"] = false;

	$tdatapsaccountsubgroup[".audit"] = false;

	$tdatapsaccountsubgroup[".locking"] = false;


$pages = $tdatapsaccountsubgroup[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapsaccountsubgroup[".edit"] = true;
	$tdatapsaccountsubgroup[".afterEditAction"] = 1;
	$tdatapsaccountsubgroup[".closePopupAfterEdit"] = 1;
	$tdatapsaccountsubgroup[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapsaccountsubgroup[".add"] = true;
$tdatapsaccountsubgroup[".afterAddAction"] = 1;
$tdatapsaccountsubgroup[".closePopupAfterAdd"] = 1;
$tdatapsaccountsubgroup[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapsaccountsubgroup[".list"] = true;
}



$tdatapsaccountsubgroup[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapsaccountsubgroup[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapsaccountsubgroup[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapsaccountsubgroup[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapsaccountsubgroup[".printFriendly"] = true;
}



$tdatapsaccountsubgroup[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapsaccountsubgroup[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapsaccountsubgroup[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapsaccountsubgroup[".isUseAjaxSuggest"] = true;

$tdatapsaccountsubgroup[".rowHighlite"] = true;





$tdatapsaccountsubgroup[".ajaxCodeSnippetAdded"] = false;

$tdatapsaccountsubgroup[".buttonsAdded"] = false;

$tdatapsaccountsubgroup[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapsaccountsubgroup[".isUseTimeForSearch"] = false;


$tdatapsaccountsubgroup[".badgeColor"] = "2F4F4F";


$tdatapsaccountsubgroup[".allSearchFields"] = array();
$tdatapsaccountsubgroup[".filterFields"] = array();
$tdatapsaccountsubgroup[".requiredSearchFields"] = array();

$tdatapsaccountsubgroup[".googleLikeFields"] = array();
$tdatapsaccountsubgroup[".googleLikeFields"][] = "Code";
$tdatapsaccountsubgroup[".googleLikeFields"][] = "BUnit";
$tdatapsaccountsubgroup[".googleLikeFields"][] = "CofAccCode";
$tdatapsaccountsubgroup[".googleLikeFields"][] = "Name";
$tdatapsaccountsubgroup[".googleLikeFields"][] = "Remarks";
$tdatapsaccountsubgroup[".googleLikeFields"][] = "NameInUrdu";
$tdatapsaccountsubgroup[".googleLikeFields"][] = "RemarksInUrdu";
$tdatapsaccountsubgroup[".googleLikeFields"][] = "UserName";
$tdatapsaccountsubgroup[".googleLikeFields"][] = "CreateDate";
$tdatapsaccountsubgroup[".googleLikeFields"][] = "CreateTime";
$tdatapsaccountsubgroup[".googleLikeFields"][] = "CreatePcName";
$tdatapsaccountsubgroup[".googleLikeFields"][] = "CreatePCUser";
$tdatapsaccountsubgroup[".googleLikeFields"][] = "CreateLoc";
$tdatapsaccountsubgroup[".googleLikeFields"][] = "CreateDevice";
$tdatapsaccountsubgroup[".googleLikeFields"][] = "UpdatePcUser";
$tdatapsaccountsubgroup[".googleLikeFields"][] = "UpdateUser";
$tdatapsaccountsubgroup[".googleLikeFields"][] = "UpdateDate";
$tdatapsaccountsubgroup[".googleLikeFields"][] = "UpdateTime";
$tdatapsaccountsubgroup[".googleLikeFields"][] = "UpdatePcName";
$tdatapsaccountsubgroup[".googleLikeFields"][] = "UpdateLoc";
$tdatapsaccountsubgroup[".googleLikeFields"][] = "UpdateDevice";
$tdatapsaccountsubgroup[".googleLikeFields"][] = "TotalUpdate";
$tdatapsaccountsubgroup[".googleLikeFields"][] = "Block";
$tdatapsaccountsubgroup[".googleLikeFields"][] = "Lock";
$tdatapsaccountsubgroup[".googleLikeFields"][] = "Hide";
$tdatapsaccountsubgroup[".googleLikeFields"][] = "Bookmark";
$tdatapsaccountsubgroup[".googleLikeFields"][] = "BMStatus";
$tdatapsaccountsubgroup[".googleLikeFields"][] = "BMIConID";
$tdatapsaccountsubgroup[".googleLikeFields"][] = "BMRowID";
$tdatapsaccountsubgroup[".googleLikeFields"][] = "DBRowID";
$tdatapsaccountsubgroup[".googleLikeFields"][] = "ECol1";
$tdatapsaccountsubgroup[".googleLikeFields"][] = "ECol2";



$tdatapsaccountsubgroup[".tableType"] = "list";

$tdatapsaccountsubgroup[".printerPageOrientation"] = 0;
$tdatapsaccountsubgroup[".nPrinterPageScale"] = 100;

$tdatapsaccountsubgroup[".nPrinterSplitRecords"] = 40;

$tdatapsaccountsubgroup[".geocodingEnabled"] = false;










$tdatapsaccountsubgroup[".pageSize"] = 20;

$tdatapsaccountsubgroup[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapsaccountsubgroup[".strOrderBy"] = $tstrOrderBy;

$tdatapsaccountsubgroup[".orderindexes"] = array();


$tdatapsaccountsubgroup[".sqlHead"] = "SELECT Code,  	BUnit,  	CofAccCode,  	Name,  	Remarks,  	NameInUrdu,  	RemarksInUrdu,  	UserName,  	CreateDate,  	CreateTime,  	CreatePcName,  	CreatePCUser,  	CreateLoc,  	CreateDevice,  	UpdatePcUser,  	UpdateUser,  	UpdateDate,  	UpdateTime,  	UpdatePcName,  	UpdateLoc,  	UpdateDevice,  	TotalUpdate,  	Block,  	`Lock`,  	Hide,  	Bookmark,  	BMStatus,  	BMIConID,  	BMRowID,  	DBRowID,  	ECol1,  	ECol2";
$tdatapsaccountsubgroup[".sqlFrom"] = "FROM psAccountSubGroup";
$tdatapsaccountsubgroup[".sqlWhereExpr"] = "";
$tdatapsaccountsubgroup[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapsaccountsubgroup[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapsaccountsubgroup[".arrGroupsPerPage"] = $arrGPP;

$tdatapsaccountsubgroup[".highlightSearchResults"] = true;

$tableKeyspsaccountsubgroup = array();
$tableKeyspsaccountsubgroup[] = "Code";
$tdatapsaccountsubgroup[".Keys"] = $tableKeyspsaccountsubgroup;


$tdatapsaccountsubgroup[".hideMobileList"] = array();




//	Code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Code";
	$fdata["GoodName"] = "Code";
	$fdata["ownerTable"] = "psAccountSubGroup";
	$fdata["Label"] = GetFieldLabel("psAccountSubGroup","Code");
	$fdata["FieldType"] = 3;


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


	$tdatapsaccountsubgroup["Code"] = $fdata;
		$tdatapsaccountsubgroup[".searchableFields"][] = "Code";
//	BUnit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "BUnit";
	$fdata["GoodName"] = "BUnit";
	$fdata["ownerTable"] = "psAccountSubGroup";
	$fdata["Label"] = GetFieldLabel("psAccountSubGroup","BUnit");
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


	$tdatapsaccountsubgroup["BUnit"] = $fdata;
		$tdatapsaccountsubgroup[".searchableFields"][] = "BUnit";
//	CofAccCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CofAccCode";
	$fdata["GoodName"] = "CofAccCode";
	$fdata["ownerTable"] = "psAccountSubGroup";
	$fdata["Label"] = GetFieldLabel("psAccountSubGroup","CofAccCode");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "CofAccCode";

		$fdata["sourceSingle"] = "CofAccCode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CofAccCode";

	
	
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


	$tdatapsaccountsubgroup["CofAccCode"] = $fdata;
		$tdatapsaccountsubgroup[".searchableFields"][] = "CofAccCode";
//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "psAccountSubGroup";
	$fdata["Label"] = GetFieldLabel("psAccountSubGroup","Name");
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


	$tdatapsaccountsubgroup["Name"] = $fdata;
		$tdatapsaccountsubgroup[".searchableFields"][] = "Name";
//	Remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Remarks";
	$fdata["GoodName"] = "Remarks";
	$fdata["ownerTable"] = "psAccountSubGroup";
	$fdata["Label"] = GetFieldLabel("psAccountSubGroup","Remarks");
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


	$tdatapsaccountsubgroup["Remarks"] = $fdata;
		$tdatapsaccountsubgroup[".searchableFields"][] = "Remarks";
//	NameInUrdu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "NameInUrdu";
	$fdata["GoodName"] = "NameInUrdu";
	$fdata["ownerTable"] = "psAccountSubGroup";
	$fdata["Label"] = GetFieldLabel("psAccountSubGroup","NameInUrdu");
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


	$tdatapsaccountsubgroup["NameInUrdu"] = $fdata;
		$tdatapsaccountsubgroup[".searchableFields"][] = "NameInUrdu";
//	RemarksInUrdu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "RemarksInUrdu";
	$fdata["GoodName"] = "RemarksInUrdu";
	$fdata["ownerTable"] = "psAccountSubGroup";
	$fdata["Label"] = GetFieldLabel("psAccountSubGroup","RemarksInUrdu");
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


	$tdatapsaccountsubgroup["RemarksInUrdu"] = $fdata;
		$tdatapsaccountsubgroup[".searchableFields"][] = "RemarksInUrdu";
//	UserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "UserName";
	$fdata["GoodName"] = "UserName";
	$fdata["ownerTable"] = "psAccountSubGroup";
	$fdata["Label"] = GetFieldLabel("psAccountSubGroup","UserName");
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


	$tdatapsaccountsubgroup["UserName"] = $fdata;
		$tdatapsaccountsubgroup[".searchableFields"][] = "UserName";
//	CreateDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "CreateDate";
	$fdata["GoodName"] = "CreateDate";
	$fdata["ownerTable"] = "psAccountSubGroup";
	$fdata["Label"] = GetFieldLabel("psAccountSubGroup","CreateDate");
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatapsaccountsubgroup["CreateDate"] = $fdata;
		$tdatapsaccountsubgroup[".searchableFields"][] = "CreateDate";
//	CreateTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "CreateTime";
	$fdata["GoodName"] = "CreateTime";
	$fdata["ownerTable"] = "psAccountSubGroup";
	$fdata["Label"] = GetFieldLabel("psAccountSubGroup","CreateTime");
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


	$tdatapsaccountsubgroup["CreateTime"] = $fdata;
		$tdatapsaccountsubgroup[".searchableFields"][] = "CreateTime";
//	CreatePcName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "CreatePcName";
	$fdata["GoodName"] = "CreatePcName";
	$fdata["ownerTable"] = "psAccountSubGroup";
	$fdata["Label"] = GetFieldLabel("psAccountSubGroup","CreatePcName");
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


	$tdatapsaccountsubgroup["CreatePcName"] = $fdata;
		$tdatapsaccountsubgroup[".searchableFields"][] = "CreatePcName";
//	CreatePCUser
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "CreatePCUser";
	$fdata["GoodName"] = "CreatePCUser";
	$fdata["ownerTable"] = "psAccountSubGroup";
	$fdata["Label"] = GetFieldLabel("psAccountSubGroup","CreatePCUser");
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


	$tdatapsaccountsubgroup["CreatePCUser"] = $fdata;
		$tdatapsaccountsubgroup[".searchableFields"][] = "CreatePCUser";
//	CreateLoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "CreateLoc";
	$fdata["GoodName"] = "CreateLoc";
	$fdata["ownerTable"] = "psAccountSubGroup";
	$fdata["Label"] = GetFieldLabel("psAccountSubGroup","CreateLoc");
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


	$tdatapsaccountsubgroup["CreateLoc"] = $fdata;
		$tdatapsaccountsubgroup[".searchableFields"][] = "CreateLoc";
//	CreateDevice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "CreateDevice";
	$fdata["GoodName"] = "CreateDevice";
	$fdata["ownerTable"] = "psAccountSubGroup";
	$fdata["Label"] = GetFieldLabel("psAccountSubGroup","CreateDevice");
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


	$tdatapsaccountsubgroup["CreateDevice"] = $fdata;
		$tdatapsaccountsubgroup[".searchableFields"][] = "CreateDevice";
//	UpdatePcUser
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "UpdatePcUser";
	$fdata["GoodName"] = "UpdatePcUser";
	$fdata["ownerTable"] = "psAccountSubGroup";
	$fdata["Label"] = GetFieldLabel("psAccountSubGroup","UpdatePcUser");
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


	$tdatapsaccountsubgroup["UpdatePcUser"] = $fdata;
		$tdatapsaccountsubgroup[".searchableFields"][] = "UpdatePcUser";
//	UpdateUser
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "UpdateUser";
	$fdata["GoodName"] = "UpdateUser";
	$fdata["ownerTable"] = "psAccountSubGroup";
	$fdata["Label"] = GetFieldLabel("psAccountSubGroup","UpdateUser");
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


	$tdatapsaccountsubgroup["UpdateUser"] = $fdata;
		$tdatapsaccountsubgroup[".searchableFields"][] = "UpdateUser";
//	UpdateDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "UpdateDate";
	$fdata["GoodName"] = "UpdateDate";
	$fdata["ownerTable"] = "psAccountSubGroup";
	$fdata["Label"] = GetFieldLabel("psAccountSubGroup","UpdateDate");
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


	$tdatapsaccountsubgroup["UpdateDate"] = $fdata;
		$tdatapsaccountsubgroup[".searchableFields"][] = "UpdateDate";
//	UpdateTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "UpdateTime";
	$fdata["GoodName"] = "UpdateTime";
	$fdata["ownerTable"] = "psAccountSubGroup";
	$fdata["Label"] = GetFieldLabel("psAccountSubGroup","UpdateTime");
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


	$tdatapsaccountsubgroup["UpdateTime"] = $fdata;
		$tdatapsaccountsubgroup[".searchableFields"][] = "UpdateTime";
//	UpdatePcName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "UpdatePcName";
	$fdata["GoodName"] = "UpdatePcName";
	$fdata["ownerTable"] = "psAccountSubGroup";
	$fdata["Label"] = GetFieldLabel("psAccountSubGroup","UpdatePcName");
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


	$tdatapsaccountsubgroup["UpdatePcName"] = $fdata;
		$tdatapsaccountsubgroup[".searchableFields"][] = "UpdatePcName";
//	UpdateLoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "UpdateLoc";
	$fdata["GoodName"] = "UpdateLoc";
	$fdata["ownerTable"] = "psAccountSubGroup";
	$fdata["Label"] = GetFieldLabel("psAccountSubGroup","UpdateLoc");
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


	$tdatapsaccountsubgroup["UpdateLoc"] = $fdata;
		$tdatapsaccountsubgroup[".searchableFields"][] = "UpdateLoc";
//	UpdateDevice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "UpdateDevice";
	$fdata["GoodName"] = "UpdateDevice";
	$fdata["ownerTable"] = "psAccountSubGroup";
	$fdata["Label"] = GetFieldLabel("psAccountSubGroup","UpdateDevice");
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


	$tdatapsaccountsubgroup["UpdateDevice"] = $fdata;
		$tdatapsaccountsubgroup[".searchableFields"][] = "UpdateDevice";
//	TotalUpdate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "TotalUpdate";
	$fdata["GoodName"] = "TotalUpdate";
	$fdata["ownerTable"] = "psAccountSubGroup";
	$fdata["Label"] = GetFieldLabel("psAccountSubGroup","TotalUpdate");
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


	$tdatapsaccountsubgroup["TotalUpdate"] = $fdata;
		$tdatapsaccountsubgroup[".searchableFields"][] = "TotalUpdate";
//	Block
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "Block";
	$fdata["GoodName"] = "Block";
	$fdata["ownerTable"] = "psAccountSubGroup";
	$fdata["Label"] = GetFieldLabel("psAccountSubGroup","Block");
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


	$tdatapsaccountsubgroup["Block"] = $fdata;
		$tdatapsaccountsubgroup[".searchableFields"][] = "Block";
//	Lock
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "Lock";
	$fdata["GoodName"] = "Lock";
	$fdata["ownerTable"] = "psAccountSubGroup";
	$fdata["Label"] = GetFieldLabel("psAccountSubGroup","Lock");
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


	$tdatapsaccountsubgroup["Lock"] = $fdata;
		$tdatapsaccountsubgroup[".searchableFields"][] = "Lock";
//	Hide
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "Hide";
	$fdata["GoodName"] = "Hide";
	$fdata["ownerTable"] = "psAccountSubGroup";
	$fdata["Label"] = GetFieldLabel("psAccountSubGroup","Hide");
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


	$tdatapsaccountsubgroup["Hide"] = $fdata;
		$tdatapsaccountsubgroup[".searchableFields"][] = "Hide";
//	Bookmark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "Bookmark";
	$fdata["GoodName"] = "Bookmark";
	$fdata["ownerTable"] = "psAccountSubGroup";
	$fdata["Label"] = GetFieldLabel("psAccountSubGroup","Bookmark");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "Bookmark";

		$fdata["sourceSingle"] = "Bookmark";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Bookmark";

	
	
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


	$tdatapsaccountsubgroup["Bookmark"] = $fdata;
		$tdatapsaccountsubgroup[".searchableFields"][] = "Bookmark";
//	BMStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "BMStatus";
	$fdata["GoodName"] = "BMStatus";
	$fdata["ownerTable"] = "psAccountSubGroup";
	$fdata["Label"] = GetFieldLabel("psAccountSubGroup","BMStatus");
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


	$tdatapsaccountsubgroup["BMStatus"] = $fdata;
		$tdatapsaccountsubgroup[".searchableFields"][] = "BMStatus";
//	BMIConID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "BMIConID";
	$fdata["GoodName"] = "BMIConID";
	$fdata["ownerTable"] = "psAccountSubGroup";
	$fdata["Label"] = GetFieldLabel("psAccountSubGroup","BMIConID");
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


	$tdatapsaccountsubgroup["BMIConID"] = $fdata;
		$tdatapsaccountsubgroup[".searchableFields"][] = "BMIConID";
//	BMRowID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "BMRowID";
	$fdata["GoodName"] = "BMRowID";
	$fdata["ownerTable"] = "psAccountSubGroup";
	$fdata["Label"] = GetFieldLabel("psAccountSubGroup","BMRowID");
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


	$tdatapsaccountsubgroup["BMRowID"] = $fdata;
		$tdatapsaccountsubgroup[".searchableFields"][] = "BMRowID";
//	DBRowID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "DBRowID";
	$fdata["GoodName"] = "DBRowID";
	$fdata["ownerTable"] = "psAccountSubGroup";
	$fdata["Label"] = GetFieldLabel("psAccountSubGroup","DBRowID");
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


	$tdatapsaccountsubgroup["DBRowID"] = $fdata;
		$tdatapsaccountsubgroup[".searchableFields"][] = "DBRowID";
//	ECol1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "ECol1";
	$fdata["GoodName"] = "ECol1";
	$fdata["ownerTable"] = "psAccountSubGroup";
	$fdata["Label"] = GetFieldLabel("psAccountSubGroup","ECol1");
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


	$tdatapsaccountsubgroup["ECol1"] = $fdata;
		$tdatapsaccountsubgroup[".searchableFields"][] = "ECol1";
//	ECol2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "ECol2";
	$fdata["GoodName"] = "ECol2";
	$fdata["ownerTable"] = "psAccountSubGroup";
	$fdata["Label"] = GetFieldLabel("psAccountSubGroup","ECol2");
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


	$tdatapsaccountsubgroup["ECol2"] = $fdata;
		$tdatapsaccountsubgroup[".searchableFields"][] = "ECol2";


$tables_data["psAccountSubGroup"]=&$tdatapsaccountsubgroup;
$field_labels["psAccountSubGroup"] = &$fieldLabelspsaccountsubgroup;
$fieldToolTips["psAccountSubGroup"] = &$fieldToolTipspsaccountsubgroup;
$placeHolders["psAccountSubGroup"] = &$placeHolderspsaccountsubgroup;
$page_titles["psAccountSubGroup"] = &$pageTitlespsaccountsubgroup;


changeTextControlsToDate( "psAccountSubGroup" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["psAccountSubGroup"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["psAccountSubGroup"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_psaccountsubgroup()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Code,  	BUnit,  	CofAccCode,  	Name,  	Remarks,  	NameInUrdu,  	RemarksInUrdu,  	UserName,  	CreateDate,  	CreateTime,  	CreatePcName,  	CreatePCUser,  	CreateLoc,  	CreateDevice,  	UpdatePcUser,  	UpdateUser,  	UpdateDate,  	UpdateTime,  	UpdatePcName,  	UpdateLoc,  	UpdateDevice,  	TotalUpdate,  	Block,  	`Lock`,  	Hide,  	Bookmark,  	BMStatus,  	BMIConID,  	BMRowID,  	DBRowID,  	ECol1,  	ECol2";
$proto0["m_strFrom"] = "FROM psAccountSubGroup";
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
	"m_strTable" => "psAccountSubGroup",
	"m_srcTableName" => "psAccountSubGroup"
));

$proto6["m_sql"] = "Code";
$proto6["m_srcTableName"] = "psAccountSubGroup";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "BUnit",
	"m_strTable" => "psAccountSubGroup",
	"m_srcTableName" => "psAccountSubGroup"
));

$proto8["m_sql"] = "BUnit";
$proto8["m_srcTableName"] = "psAccountSubGroup";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CofAccCode",
	"m_strTable" => "psAccountSubGroup",
	"m_srcTableName" => "psAccountSubGroup"
));

$proto10["m_sql"] = "CofAccCode";
$proto10["m_srcTableName"] = "psAccountSubGroup";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "psAccountSubGroup",
	"m_srcTableName" => "psAccountSubGroup"
));

$proto12["m_sql"] = "Name";
$proto12["m_srcTableName"] = "psAccountSubGroup";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Remarks",
	"m_strTable" => "psAccountSubGroup",
	"m_srcTableName" => "psAccountSubGroup"
));

$proto14["m_sql"] = "Remarks";
$proto14["m_srcTableName"] = "psAccountSubGroup";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "NameInUrdu",
	"m_strTable" => "psAccountSubGroup",
	"m_srcTableName" => "psAccountSubGroup"
));

$proto16["m_sql"] = "NameInUrdu";
$proto16["m_srcTableName"] = "psAccountSubGroup";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "RemarksInUrdu",
	"m_strTable" => "psAccountSubGroup",
	"m_srcTableName" => "psAccountSubGroup"
));

$proto18["m_sql"] = "RemarksInUrdu";
$proto18["m_srcTableName"] = "psAccountSubGroup";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "UserName",
	"m_strTable" => "psAccountSubGroup",
	"m_srcTableName" => "psAccountSubGroup"
));

$proto20["m_sql"] = "UserName";
$proto20["m_srcTableName"] = "psAccountSubGroup";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "CreateDate",
	"m_strTable" => "psAccountSubGroup",
	"m_srcTableName" => "psAccountSubGroup"
));

$proto22["m_sql"] = "CreateDate";
$proto22["m_srcTableName"] = "psAccountSubGroup";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "CreateTime",
	"m_strTable" => "psAccountSubGroup",
	"m_srcTableName" => "psAccountSubGroup"
));

$proto24["m_sql"] = "CreateTime";
$proto24["m_srcTableName"] = "psAccountSubGroup";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "CreatePcName",
	"m_strTable" => "psAccountSubGroup",
	"m_srcTableName" => "psAccountSubGroup"
));

$proto26["m_sql"] = "CreatePcName";
$proto26["m_srcTableName"] = "psAccountSubGroup";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "CreatePCUser",
	"m_strTable" => "psAccountSubGroup",
	"m_srcTableName" => "psAccountSubGroup"
));

$proto28["m_sql"] = "CreatePCUser";
$proto28["m_srcTableName"] = "psAccountSubGroup";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "CreateLoc",
	"m_strTable" => "psAccountSubGroup",
	"m_srcTableName" => "psAccountSubGroup"
));

$proto30["m_sql"] = "CreateLoc";
$proto30["m_srcTableName"] = "psAccountSubGroup";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "CreateDevice",
	"m_strTable" => "psAccountSubGroup",
	"m_srcTableName" => "psAccountSubGroup"
));

$proto32["m_sql"] = "CreateDevice";
$proto32["m_srcTableName"] = "psAccountSubGroup";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "UpdatePcUser",
	"m_strTable" => "psAccountSubGroup",
	"m_srcTableName" => "psAccountSubGroup"
));

$proto34["m_sql"] = "UpdatePcUser";
$proto34["m_srcTableName"] = "psAccountSubGroup";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "UpdateUser",
	"m_strTable" => "psAccountSubGroup",
	"m_srcTableName" => "psAccountSubGroup"
));

$proto36["m_sql"] = "UpdateUser";
$proto36["m_srcTableName"] = "psAccountSubGroup";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "UpdateDate",
	"m_strTable" => "psAccountSubGroup",
	"m_srcTableName" => "psAccountSubGroup"
));

$proto38["m_sql"] = "UpdateDate";
$proto38["m_srcTableName"] = "psAccountSubGroup";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "UpdateTime",
	"m_strTable" => "psAccountSubGroup",
	"m_srcTableName" => "psAccountSubGroup"
));

$proto40["m_sql"] = "UpdateTime";
$proto40["m_srcTableName"] = "psAccountSubGroup";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "UpdatePcName",
	"m_strTable" => "psAccountSubGroup",
	"m_srcTableName" => "psAccountSubGroup"
));

$proto42["m_sql"] = "UpdatePcName";
$proto42["m_srcTableName"] = "psAccountSubGroup";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "UpdateLoc",
	"m_strTable" => "psAccountSubGroup",
	"m_srcTableName" => "psAccountSubGroup"
));

$proto44["m_sql"] = "UpdateLoc";
$proto44["m_srcTableName"] = "psAccountSubGroup";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "UpdateDevice",
	"m_strTable" => "psAccountSubGroup",
	"m_srcTableName" => "psAccountSubGroup"
));

$proto46["m_sql"] = "UpdateDevice";
$proto46["m_srcTableName"] = "psAccountSubGroup";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "TotalUpdate",
	"m_strTable" => "psAccountSubGroup",
	"m_srcTableName" => "psAccountSubGroup"
));

$proto48["m_sql"] = "TotalUpdate";
$proto48["m_srcTableName"] = "psAccountSubGroup";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "Block",
	"m_strTable" => "psAccountSubGroup",
	"m_srcTableName" => "psAccountSubGroup"
));

$proto50["m_sql"] = "Block";
$proto50["m_srcTableName"] = "psAccountSubGroup";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "Lock",
	"m_strTable" => "psAccountSubGroup",
	"m_srcTableName" => "psAccountSubGroup"
));

$proto52["m_sql"] = "`Lock`";
$proto52["m_srcTableName"] = "psAccountSubGroup";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "Hide",
	"m_strTable" => "psAccountSubGroup",
	"m_srcTableName" => "psAccountSubGroup"
));

$proto54["m_sql"] = "Hide";
$proto54["m_srcTableName"] = "psAccountSubGroup";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "Bookmark",
	"m_strTable" => "psAccountSubGroup",
	"m_srcTableName" => "psAccountSubGroup"
));

$proto56["m_sql"] = "Bookmark";
$proto56["m_srcTableName"] = "psAccountSubGroup";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "BMStatus",
	"m_strTable" => "psAccountSubGroup",
	"m_srcTableName" => "psAccountSubGroup"
));

$proto58["m_sql"] = "BMStatus";
$proto58["m_srcTableName"] = "psAccountSubGroup";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "BMIConID",
	"m_strTable" => "psAccountSubGroup",
	"m_srcTableName" => "psAccountSubGroup"
));

$proto60["m_sql"] = "BMIConID";
$proto60["m_srcTableName"] = "psAccountSubGroup";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "BMRowID",
	"m_strTable" => "psAccountSubGroup",
	"m_srcTableName" => "psAccountSubGroup"
));

$proto62["m_sql"] = "BMRowID";
$proto62["m_srcTableName"] = "psAccountSubGroup";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "DBRowID",
	"m_strTable" => "psAccountSubGroup",
	"m_srcTableName" => "psAccountSubGroup"
));

$proto64["m_sql"] = "DBRowID";
$proto64["m_srcTableName"] = "psAccountSubGroup";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "ECol1",
	"m_strTable" => "psAccountSubGroup",
	"m_srcTableName" => "psAccountSubGroup"
));

$proto66["m_sql"] = "ECol1";
$proto66["m_srcTableName"] = "psAccountSubGroup";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "ECol2",
	"m_strTable" => "psAccountSubGroup",
	"m_srcTableName" => "psAccountSubGroup"
));

$proto68["m_sql"] = "ECol2";
$proto68["m_srcTableName"] = "psAccountSubGroup";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto70=array();
$proto70["m_link"] = "SQLL_MAIN";
			$proto71=array();
$proto71["m_strName"] = "psAccountSubGroup";
$proto71["m_srcTableName"] = "psAccountSubGroup";
$proto71["m_columns"] = array();
$proto71["m_columns"][] = "Code";
$proto71["m_columns"][] = "BUnit";
$proto71["m_columns"][] = "CofAccCode";
$proto71["m_columns"][] = "Name";
$proto71["m_columns"][] = "Remarks";
$proto71["m_columns"][] = "NameInUrdu";
$proto71["m_columns"][] = "RemarksInUrdu";
$proto71["m_columns"][] = "UserName";
$proto71["m_columns"][] = "CreateDate";
$proto71["m_columns"][] = "CreateTime";
$proto71["m_columns"][] = "CreatePcName";
$proto71["m_columns"][] = "CreatePCUser";
$proto71["m_columns"][] = "CreateLoc";
$proto71["m_columns"][] = "CreateDevice";
$proto71["m_columns"][] = "UpdatePcUser";
$proto71["m_columns"][] = "UpdateUser";
$proto71["m_columns"][] = "UpdateDate";
$proto71["m_columns"][] = "UpdateTime";
$proto71["m_columns"][] = "UpdatePcName";
$proto71["m_columns"][] = "UpdateLoc";
$proto71["m_columns"][] = "UpdateDevice";
$proto71["m_columns"][] = "TotalUpdate";
$proto71["m_columns"][] = "Block";
$proto71["m_columns"][] = "Lock";
$proto71["m_columns"][] = "Hide";
$proto71["m_columns"][] = "Bookmark";
$proto71["m_columns"][] = "BMStatus";
$proto71["m_columns"][] = "BMIConID";
$proto71["m_columns"][] = "BMRowID";
$proto71["m_columns"][] = "DBRowID";
$proto71["m_columns"][] = "ECol1";
$proto71["m_columns"][] = "ECol2";
$obj = new SQLTable($proto71);

$proto70["m_table"] = $obj;
$proto70["m_sql"] = "psAccountSubGroup";
$proto70["m_alias"] = "";
$proto70["m_srcTableName"] = "psAccountSubGroup";
$proto72=array();
$proto72["m_sql"] = "";
$proto72["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto72["m_column"]=$obj;
$proto72["m_contained"] = array();
$proto72["m_strCase"] = "";
$proto72["m_havingmode"] = false;
$proto72["m_inBrackets"] = false;
$proto72["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto72);

$proto70["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto70);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="psAccountSubGroup";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_psaccountsubgroup = createSqlQuery_psaccountsubgroup();


	
		;

																																

$tdatapsaccountsubgroup[".sqlquery"] = $queryData_psaccountsubgroup;



$tdatapsaccountsubgroup[".hasEvents"] = false;

?>