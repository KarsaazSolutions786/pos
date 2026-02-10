<?php
$tdataaccountcbal1 = array();
$tdataaccountcbal1[".searchableFields"] = array();
$tdataaccountcbal1[".ShortName"] = "accountcbal1";
$tdataaccountcbal1[".OwnerID"] = "";
$tdataaccountcbal1[".OriginalTable"] = "AccountCBal";


$tdataaccountcbal1[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataaccountcbal1[".originalPagesByType"] = $tdataaccountcbal1[".pagesByType"];
$tdataaccountcbal1[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataaccountcbal1[".originalPages"] = $tdataaccountcbal1[".pages"];
$tdataaccountcbal1[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataaccountcbal1[".originalDefaultPages"] = $tdataaccountcbal1[".defaultPages"];

//	field labels
$fieldLabelsaccountcbal1 = array();
$fieldToolTipsaccountcbal1 = array();
$pageTitlesaccountcbal1 = array();
$placeHoldersaccountcbal1 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsaccountcbal1["English"] = array();
	$fieldToolTipsaccountcbal1["English"] = array();
	$placeHoldersaccountcbal1["English"] = array();
	$pageTitlesaccountcbal1["English"] = array();
	$fieldLabelsaccountcbal1["English"]["Code"] = "Code";
	$fieldToolTipsaccountcbal1["English"]["Code"] = "";
	$placeHoldersaccountcbal1["English"]["Code"] = "";
	$fieldLabelsaccountcbal1["English"]["ParentAccountCode"] = "Parent Account Code";
	$fieldToolTipsaccountcbal1["English"]["ParentAccountCode"] = "";
	$placeHoldersaccountcbal1["English"]["ParentAccountCode"] = "";
	$fieldLabelsaccountcbal1["English"]["ParentCode"] = "Parent Code";
	$fieldToolTipsaccountcbal1["English"]["ParentCode"] = "";
	$placeHoldersaccountcbal1["English"]["ParentCode"] = "";
	$fieldLabelsaccountcbal1["English"]["AccountCode"] = "Account Code";
	$fieldToolTipsaccountcbal1["English"]["AccountCode"] = "";
	$placeHoldersaccountcbal1["English"]["AccountCode"] = "";
	$fieldLabelsaccountcbal1["English"]["BuCode"] = "Bu Code";
	$fieldToolTipsaccountcbal1["English"]["BuCode"] = "";
	$placeHoldersaccountcbal1["English"]["BuCode"] = "";
	$fieldLabelsaccountcbal1["English"]["AccountTypeCode"] = "Account Type Code";
	$fieldToolTipsaccountcbal1["English"]["AccountTypeCode"] = "";
	$placeHoldersaccountcbal1["English"]["AccountTypeCode"] = "";
	$fieldLabelsaccountcbal1["English"]["AccountType"] = "Account Type";
	$fieldToolTipsaccountcbal1["English"]["AccountType"] = "";
	$placeHoldersaccountcbal1["English"]["AccountType"] = "";
	$fieldLabelsaccountcbal1["English"]["CBalance"] = "CBalance";
	$fieldToolTipsaccountcbal1["English"]["CBalance"] = "";
	$placeHoldersaccountcbal1["English"]["CBalance"] = "";
	$fieldLabelsaccountcbal1["English"]["CBalStatus"] = "CBal Status";
	$fieldToolTipsaccountcbal1["English"]["CBalStatus"] = "";
	$placeHoldersaccountcbal1["English"]["CBalStatus"] = "";
	$fieldLabelsaccountcbal1["English"]["FcCBalance"] = "Fc CBalance";
	$fieldToolTipsaccountcbal1["English"]["FcCBalance"] = "";
	$placeHoldersaccountcbal1["English"]["FcCBalance"] = "";
	$fieldLabelsaccountcbal1["English"]["FCBalStatus"] = "FCBal Status";
	$fieldToolTipsaccountcbal1["English"]["FCBalStatus"] = "";
	$placeHoldersaccountcbal1["English"]["FCBalStatus"] = "";
	$fieldLabelsaccountcbal1["English"]["Remarks"] = "Remarks";
	$fieldToolTipsaccountcbal1["English"]["Remarks"] = "";
	$placeHoldersaccountcbal1["English"]["Remarks"] = "";
	$fieldLabelsaccountcbal1["English"]["FcCurrencyCode"] = "Fc Currency Code";
	$fieldToolTipsaccountcbal1["English"]["FcCurrencyCode"] = "";
	$placeHoldersaccountcbal1["English"]["FcCurrencyCode"] = "";
	$fieldLabelsaccountcbal1["English"]["AccStatusType"] = "Acc Status Type";
	$fieldToolTipsaccountcbal1["English"]["AccStatusType"] = "";
	$placeHoldersaccountcbal1["English"]["AccStatusType"] = "";
	$fieldLabelsaccountcbal1["English"]["UDate"] = "UDate";
	$fieldToolTipsaccountcbal1["English"]["UDate"] = "";
	$placeHoldersaccountcbal1["English"]["UDate"] = "";
	if (count($fieldToolTipsaccountcbal1["English"]))
		$tdataaccountcbal1[".isUseToolTips"] = true;
}


	$tdataaccountcbal1[".NCSearch"] = true;



$tdataaccountcbal1[".shortTableName"] = "accountcbal1";
$tdataaccountcbal1[".nSecOptions"] = 0;

$tdataaccountcbal1[".mainTableOwnerID"] = "";
$tdataaccountcbal1[".entityType"] = 1;
$tdataaccountcbal1[".connId"] = "karsaaz_pos_at_localhost01";


$tdataaccountcbal1[".strOriginalTableName"] = "AccountCBal";

	



$tdataaccountcbal1[".showAddInPopup"] = false;

$tdataaccountcbal1[".showEditInPopup"] = false;

$tdataaccountcbal1[".showViewInPopup"] = false;

$tdataaccountcbal1[".listAjax"] = false;
//	temporary
//$tdataaccountcbal1[".listAjax"] = false;

	$tdataaccountcbal1[".audit"] = false;

	$tdataaccountcbal1[".locking"] = false;


$pages = $tdataaccountcbal1[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataaccountcbal1[".edit"] = true;
	$tdataaccountcbal1[".afterEditAction"] = 1;
	$tdataaccountcbal1[".closePopupAfterEdit"] = 1;
	$tdataaccountcbal1[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataaccountcbal1[".add"] = true;
$tdataaccountcbal1[".afterAddAction"] = 1;
$tdataaccountcbal1[".closePopupAfterAdd"] = 1;
$tdataaccountcbal1[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataaccountcbal1[".list"] = true;
}



$tdataaccountcbal1[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataaccountcbal1[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataaccountcbal1[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataaccountcbal1[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataaccountcbal1[".printFriendly"] = true;
}



$tdataaccountcbal1[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataaccountcbal1[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataaccountcbal1[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataaccountcbal1[".isUseAjaxSuggest"] = true;

$tdataaccountcbal1[".rowHighlite"] = true;





$tdataaccountcbal1[".ajaxCodeSnippetAdded"] = false;

$tdataaccountcbal1[".buttonsAdded"] = false;

$tdataaccountcbal1[".addPageEvents"] = false;

// use timepicker for search panel
$tdataaccountcbal1[".isUseTimeForSearch"] = false;


$tdataaccountcbal1[".badgeColor"] = "5F9EA0";


$tdataaccountcbal1[".allSearchFields"] = array();
$tdataaccountcbal1[".filterFields"] = array();
$tdataaccountcbal1[".requiredSearchFields"] = array();

$tdataaccountcbal1[".googleLikeFields"] = array();
$tdataaccountcbal1[".googleLikeFields"][] = "Code";
$tdataaccountcbal1[".googleLikeFields"][] = "ParentAccountCode";
$tdataaccountcbal1[".googleLikeFields"][] = "ParentCode";
$tdataaccountcbal1[".googleLikeFields"][] = "AccountCode";
$tdataaccountcbal1[".googleLikeFields"][] = "BuCode";
$tdataaccountcbal1[".googleLikeFields"][] = "AccountTypeCode";
$tdataaccountcbal1[".googleLikeFields"][] = "AccountType";
$tdataaccountcbal1[".googleLikeFields"][] = "CBalance";
$tdataaccountcbal1[".googleLikeFields"][] = "CBalStatus";
$tdataaccountcbal1[".googleLikeFields"][] = "FcCBalance";
$tdataaccountcbal1[".googleLikeFields"][] = "FCBalStatus";
$tdataaccountcbal1[".googleLikeFields"][] = "Remarks";
$tdataaccountcbal1[".googleLikeFields"][] = "FcCurrencyCode";
$tdataaccountcbal1[".googleLikeFields"][] = "AccStatusType";
$tdataaccountcbal1[".googleLikeFields"][] = "UDate";



$tdataaccountcbal1[".tableType"] = "list";

$tdataaccountcbal1[".printerPageOrientation"] = 0;
$tdataaccountcbal1[".nPrinterPageScale"] = 100;

$tdataaccountcbal1[".nPrinterSplitRecords"] = 40;

$tdataaccountcbal1[".geocodingEnabled"] = false;










$tdataaccountcbal1[".pageSize"] = 20;

$tdataaccountcbal1[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataaccountcbal1[".strOrderBy"] = $tstrOrderBy;

$tdataaccountcbal1[".orderindexes"] = array();


$tdataaccountcbal1[".sqlHead"] = "SELECT Code,  	ParentAccountCode,  	ParentCode,  	AccountCode,  	BuCode,  	AccountTypeCode,  	AccountType,  	CBalance,  	CBalStatus,  	FcCBalance,  	FCBalStatus,  	Remarks,  	FcCurrencyCode,  	AccStatusType,  	UDate";
$tdataaccountcbal1[".sqlFrom"] = "FROM AccountCBal";
$tdataaccountcbal1[".sqlWhereExpr"] = "";
$tdataaccountcbal1[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataaccountcbal1[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataaccountcbal1[".arrGroupsPerPage"] = $arrGPP;

$tdataaccountcbal1[".highlightSearchResults"] = true;

$tableKeysaccountcbal1 = array();
$tableKeysaccountcbal1[] = "Code";
$tdataaccountcbal1[".Keys"] = $tableKeysaccountcbal1;


$tdataaccountcbal1[".hideMobileList"] = array();




//	Code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Code";
	$fdata["GoodName"] = "Code";
	$fdata["ownerTable"] = "AccountCBal";
	$fdata["Label"] = GetFieldLabel("AccountCBal1","Code");
	$fdata["FieldType"] = 3;


	
	
			

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


	$tdataaccountcbal1["Code"] = $fdata;
		$tdataaccountcbal1[".searchableFields"][] = "Code";
//	ParentAccountCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ParentAccountCode";
	$fdata["GoodName"] = "ParentAccountCode";
	$fdata["ownerTable"] = "AccountCBal";
	$fdata["Label"] = GetFieldLabel("AccountCBal1","ParentAccountCode");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ParentAccountCode";

		$fdata["sourceSingle"] = "ParentAccountCode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ParentAccountCode";

	
	
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


	$tdataaccountcbal1["ParentAccountCode"] = $fdata;
		$tdataaccountcbal1[".searchableFields"][] = "ParentAccountCode";
//	ParentCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ParentCode";
	$fdata["GoodName"] = "ParentCode";
	$fdata["ownerTable"] = "AccountCBal";
	$fdata["Label"] = GetFieldLabel("AccountCBal1","ParentCode");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "ParentCode";

		$fdata["sourceSingle"] = "ParentCode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ParentCode";

	
	
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


	$tdataaccountcbal1["ParentCode"] = $fdata;
		$tdataaccountcbal1[".searchableFields"][] = "ParentCode";
//	AccountCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "AccountCode";
	$fdata["GoodName"] = "AccountCode";
	$fdata["ownerTable"] = "AccountCBal";
	$fdata["Label"] = GetFieldLabel("AccountCBal1","AccountCode");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "AccountCode";

		$fdata["sourceSingle"] = "AccountCode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AccountCode";

	
	
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


	$tdataaccountcbal1["AccountCode"] = $fdata;
		$tdataaccountcbal1[".searchableFields"][] = "AccountCode";
//	BuCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "BuCode";
	$fdata["GoodName"] = "BuCode";
	$fdata["ownerTable"] = "AccountCBal";
	$fdata["Label"] = GetFieldLabel("AccountCBal1","BuCode");
	$fdata["FieldType"] = 3;


	
	
			

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


	$tdataaccountcbal1["BuCode"] = $fdata;
		$tdataaccountcbal1[".searchableFields"][] = "BuCode";
//	AccountTypeCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "AccountTypeCode";
	$fdata["GoodName"] = "AccountTypeCode";
	$fdata["ownerTable"] = "AccountCBal";
	$fdata["Label"] = GetFieldLabel("AccountCBal1","AccountTypeCode");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "AccountTypeCode";

		$fdata["sourceSingle"] = "AccountTypeCode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AccountTypeCode";

	
	
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


	$tdataaccountcbal1["AccountTypeCode"] = $fdata;
		$tdataaccountcbal1[".searchableFields"][] = "AccountTypeCode";
//	AccountType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "AccountType";
	$fdata["GoodName"] = "AccountType";
	$fdata["ownerTable"] = "AccountCBal";
	$fdata["Label"] = GetFieldLabel("AccountCBal1","AccountType");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "AccountType";

		$fdata["sourceSingle"] = "AccountType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AccountType";

	
	
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


	$tdataaccountcbal1["AccountType"] = $fdata;
		$tdataaccountcbal1[".searchableFields"][] = "AccountType";
//	CBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "CBalance";
	$fdata["GoodName"] = "CBalance";
	$fdata["ownerTable"] = "AccountCBal";
	$fdata["Label"] = GetFieldLabel("AccountCBal1","CBalance");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "CBalance";

		$fdata["sourceSingle"] = "CBalance";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CBalance";

	
	
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


	$tdataaccountcbal1["CBalance"] = $fdata;
		$tdataaccountcbal1[".searchableFields"][] = "CBalance";
//	CBalStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "CBalStatus";
	$fdata["GoodName"] = "CBalStatus";
	$fdata["ownerTable"] = "AccountCBal";
	$fdata["Label"] = GetFieldLabel("AccountCBal1","CBalStatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CBalStatus";

		$fdata["sourceSingle"] = "CBalStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CBalStatus";

	
	
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


	$tdataaccountcbal1["CBalStatus"] = $fdata;
		$tdataaccountcbal1[".searchableFields"][] = "CBalStatus";
//	FcCBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "FcCBalance";
	$fdata["GoodName"] = "FcCBalance";
	$fdata["ownerTable"] = "AccountCBal";
	$fdata["Label"] = GetFieldLabel("AccountCBal1","FcCBalance");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "FcCBalance";

		$fdata["sourceSingle"] = "FcCBalance";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FcCBalance";

	
	
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


	$tdataaccountcbal1["FcCBalance"] = $fdata;
		$tdataaccountcbal1[".searchableFields"][] = "FcCBalance";
//	FCBalStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "FCBalStatus";
	$fdata["GoodName"] = "FCBalStatus";
	$fdata["ownerTable"] = "AccountCBal";
	$fdata["Label"] = GetFieldLabel("AccountCBal1","FCBalStatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "FCBalStatus";

		$fdata["sourceSingle"] = "FCBalStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FCBalStatus";

	
	
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


	$tdataaccountcbal1["FCBalStatus"] = $fdata;
		$tdataaccountcbal1[".searchableFields"][] = "FCBalStatus";
//	Remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Remarks";
	$fdata["GoodName"] = "Remarks";
	$fdata["ownerTable"] = "AccountCBal";
	$fdata["Label"] = GetFieldLabel("AccountCBal1","Remarks");
	$fdata["FieldType"] = 200;


	
	
			

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


	$tdataaccountcbal1["Remarks"] = $fdata;
		$tdataaccountcbal1[".searchableFields"][] = "Remarks";
//	FcCurrencyCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "FcCurrencyCode";
	$fdata["GoodName"] = "FcCurrencyCode";
	$fdata["ownerTable"] = "AccountCBal";
	$fdata["Label"] = GetFieldLabel("AccountCBal1","FcCurrencyCode");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "FcCurrencyCode";

		$fdata["sourceSingle"] = "FcCurrencyCode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FcCurrencyCode";

	
	
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


	$tdataaccountcbal1["FcCurrencyCode"] = $fdata;
		$tdataaccountcbal1[".searchableFields"][] = "FcCurrencyCode";
//	AccStatusType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "AccStatusType";
	$fdata["GoodName"] = "AccStatusType";
	$fdata["ownerTable"] = "AccountCBal";
	$fdata["Label"] = GetFieldLabel("AccountCBal1","AccStatusType");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "AccStatusType";

		$fdata["sourceSingle"] = "AccStatusType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AccStatusType";

	
	
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


	$tdataaccountcbal1["AccStatusType"] = $fdata;
		$tdataaccountcbal1[".searchableFields"][] = "AccStatusType";
//	UDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "UDate";
	$fdata["GoodName"] = "UDate";
	$fdata["ownerTable"] = "AccountCBal";
	$fdata["Label"] = GetFieldLabel("AccountCBal1","UDate");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "UDate";

		$fdata["sourceSingle"] = "UDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UDate";

	
	
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


	$tdataaccountcbal1["UDate"] = $fdata;
		$tdataaccountcbal1[".searchableFields"][] = "UDate";


$tables_data["AccountCBal1"]=&$tdataaccountcbal1;
$field_labels["AccountCBal1"] = &$fieldLabelsaccountcbal1;
$fieldToolTips["AccountCBal1"] = &$fieldToolTipsaccountcbal1;
$placeHolders["AccountCBal1"] = &$placeHoldersaccountcbal1;
$page_titles["AccountCBal1"] = &$pageTitlesaccountcbal1;


changeTextControlsToDate( "AccountCBal1" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["AccountCBal1"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["AccountCBal1"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_accountcbal1()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Code,  	ParentAccountCode,  	ParentCode,  	AccountCode,  	BuCode,  	AccountTypeCode,  	AccountType,  	CBalance,  	CBalStatus,  	FcCBalance,  	FCBalStatus,  	Remarks,  	FcCurrencyCode,  	AccStatusType,  	UDate";
$proto0["m_strFrom"] = "FROM AccountCBal";
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
	"m_strTable" => "AccountCBal",
	"m_srcTableName" => "AccountCBal1"
));

$proto6["m_sql"] = "Code";
$proto6["m_srcTableName"] = "AccountCBal1";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ParentAccountCode",
	"m_strTable" => "AccountCBal",
	"m_srcTableName" => "AccountCBal1"
));

$proto8["m_sql"] = "ParentAccountCode";
$proto8["m_srcTableName"] = "AccountCBal1";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ParentCode",
	"m_strTable" => "AccountCBal",
	"m_srcTableName" => "AccountCBal1"
));

$proto10["m_sql"] = "ParentCode";
$proto10["m_srcTableName"] = "AccountCBal1";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountCode",
	"m_strTable" => "AccountCBal",
	"m_srcTableName" => "AccountCBal1"
));

$proto12["m_sql"] = "AccountCode";
$proto12["m_srcTableName"] = "AccountCBal1";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "BuCode",
	"m_strTable" => "AccountCBal",
	"m_srcTableName" => "AccountCBal1"
));

$proto14["m_sql"] = "BuCode";
$proto14["m_srcTableName"] = "AccountCBal1";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountTypeCode",
	"m_strTable" => "AccountCBal",
	"m_srcTableName" => "AccountCBal1"
));

$proto16["m_sql"] = "AccountTypeCode";
$proto16["m_srcTableName"] = "AccountCBal1";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountType",
	"m_strTable" => "AccountCBal",
	"m_srcTableName" => "AccountCBal1"
));

$proto18["m_sql"] = "AccountType";
$proto18["m_srcTableName"] = "AccountCBal1";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "CBalance",
	"m_strTable" => "AccountCBal",
	"m_srcTableName" => "AccountCBal1"
));

$proto20["m_sql"] = "CBalance";
$proto20["m_srcTableName"] = "AccountCBal1";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "CBalStatus",
	"m_strTable" => "AccountCBal",
	"m_srcTableName" => "AccountCBal1"
));

$proto22["m_sql"] = "CBalStatus";
$proto22["m_srcTableName"] = "AccountCBal1";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "FcCBalance",
	"m_strTable" => "AccountCBal",
	"m_srcTableName" => "AccountCBal1"
));

$proto24["m_sql"] = "FcCBalance";
$proto24["m_srcTableName"] = "AccountCBal1";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "FCBalStatus",
	"m_strTable" => "AccountCBal",
	"m_srcTableName" => "AccountCBal1"
));

$proto26["m_sql"] = "FCBalStatus";
$proto26["m_srcTableName"] = "AccountCBal1";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Remarks",
	"m_strTable" => "AccountCBal",
	"m_srcTableName" => "AccountCBal1"
));

$proto28["m_sql"] = "Remarks";
$proto28["m_srcTableName"] = "AccountCBal1";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "FcCurrencyCode",
	"m_strTable" => "AccountCBal",
	"m_srcTableName" => "AccountCBal1"
));

$proto30["m_sql"] = "FcCurrencyCode";
$proto30["m_srcTableName"] = "AccountCBal1";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "AccStatusType",
	"m_strTable" => "AccountCBal",
	"m_srcTableName" => "AccountCBal1"
));

$proto32["m_sql"] = "AccStatusType";
$proto32["m_srcTableName"] = "AccountCBal1";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "UDate",
	"m_strTable" => "AccountCBal",
	"m_srcTableName" => "AccountCBal1"
));

$proto34["m_sql"] = "UDate";
$proto34["m_srcTableName"] = "AccountCBal1";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto36=array();
$proto36["m_link"] = "SQLL_MAIN";
			$proto37=array();
$proto37["m_strName"] = "AccountCBal";
$proto37["m_srcTableName"] = "AccountCBal1";
$proto37["m_columns"] = array();
$proto37["m_columns"][] = "Code";
$proto37["m_columns"][] = "ParentAccountCode";
$proto37["m_columns"][] = "ParentCode";
$proto37["m_columns"][] = "AccountCode";
$proto37["m_columns"][] = "BuCode";
$proto37["m_columns"][] = "AccountTypeCode";
$proto37["m_columns"][] = "AccountType";
$proto37["m_columns"][] = "CBalance";
$proto37["m_columns"][] = "CBalStatus";
$proto37["m_columns"][] = "FcCBalance";
$proto37["m_columns"][] = "FCBalStatus";
$proto37["m_columns"][] = "Remarks";
$proto37["m_columns"][] = "FcCurrencyCode";
$proto37["m_columns"][] = "AccStatusType";
$proto37["m_columns"][] = "UDate";
$obj = new SQLTable($proto37);

$proto36["m_table"] = $obj;
$proto36["m_sql"] = "AccountCBal";
$proto36["m_alias"] = "";
$proto36["m_srcTableName"] = "AccountCBal1";
$proto38=array();
$proto38["m_sql"] = "";
$proto38["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto38["m_column"]=$obj;
$proto38["m_contained"] = array();
$proto38["m_strCase"] = "";
$proto38["m_havingmode"] = false;
$proto38["m_inBrackets"] = false;
$proto38["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto38);

$proto36["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto36);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="AccountCBal1";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_accountcbal1 = createSqlQuery_accountcbal1();


	
				;

															

$tdataaccountcbal1[".sqlquery"] = $queryData_accountcbal1;



$tdataaccountcbal1[".hasEvents"] = false;

?>