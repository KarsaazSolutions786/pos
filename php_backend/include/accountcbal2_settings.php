<?php
$tdataaccountcbal2 = array();
$tdataaccountcbal2[".searchableFields"] = array();
$tdataaccountcbal2[".ShortName"] = "accountcbal2";
$tdataaccountcbal2[".OwnerID"] = "";
$tdataaccountcbal2[".OriginalTable"] = "AccountCBal";


$tdataaccountcbal2[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataaccountcbal2[".originalPagesByType"] = $tdataaccountcbal2[".pagesByType"];
$tdataaccountcbal2[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataaccountcbal2[".originalPages"] = $tdataaccountcbal2[".pages"];
$tdataaccountcbal2[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataaccountcbal2[".originalDefaultPages"] = $tdataaccountcbal2[".defaultPages"];

//	field labels
$fieldLabelsaccountcbal2 = array();
$fieldToolTipsaccountcbal2 = array();
$pageTitlesaccountcbal2 = array();
$placeHoldersaccountcbal2 = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsaccountcbal2["English"] = array();
	$fieldToolTipsaccountcbal2["English"] = array();
	$placeHoldersaccountcbal2["English"] = array();
	$pageTitlesaccountcbal2["English"] = array();
	$fieldLabelsaccountcbal2["English"]["Code"] = "Code";
	$fieldToolTipsaccountcbal2["English"]["Code"] = "";
	$placeHoldersaccountcbal2["English"]["Code"] = "";
	$fieldLabelsaccountcbal2["English"]["ParentAccountCode"] = "Parent Account Code";
	$fieldToolTipsaccountcbal2["English"]["ParentAccountCode"] = "";
	$placeHoldersaccountcbal2["English"]["ParentAccountCode"] = "";
	$fieldLabelsaccountcbal2["English"]["ParentCode"] = "Parent Code";
	$fieldToolTipsaccountcbal2["English"]["ParentCode"] = "";
	$placeHoldersaccountcbal2["English"]["ParentCode"] = "";
	$fieldLabelsaccountcbal2["English"]["AccountCode"] = "Account Code";
	$fieldToolTipsaccountcbal2["English"]["AccountCode"] = "";
	$placeHoldersaccountcbal2["English"]["AccountCode"] = "";
	$fieldLabelsaccountcbal2["English"]["BuCode"] = "Bu Code";
	$fieldToolTipsaccountcbal2["English"]["BuCode"] = "";
	$placeHoldersaccountcbal2["English"]["BuCode"] = "";
	$fieldLabelsaccountcbal2["English"]["AccountTypeCode"] = "Account Type Code";
	$fieldToolTipsaccountcbal2["English"]["AccountTypeCode"] = "";
	$placeHoldersaccountcbal2["English"]["AccountTypeCode"] = "";
	$fieldLabelsaccountcbal2["English"]["AccountType"] = "Account Type";
	$fieldToolTipsaccountcbal2["English"]["AccountType"] = "";
	$placeHoldersaccountcbal2["English"]["AccountType"] = "";
	$fieldLabelsaccountcbal2["English"]["CBalance"] = "CBalance";
	$fieldToolTipsaccountcbal2["English"]["CBalance"] = "";
	$placeHoldersaccountcbal2["English"]["CBalance"] = "";
	$fieldLabelsaccountcbal2["English"]["CBalStatus"] = "CBal Status";
	$fieldToolTipsaccountcbal2["English"]["CBalStatus"] = "";
	$placeHoldersaccountcbal2["English"]["CBalStatus"] = "";
	$fieldLabelsaccountcbal2["English"]["FcCBalance"] = "Fc CBalance";
	$fieldToolTipsaccountcbal2["English"]["FcCBalance"] = "";
	$placeHoldersaccountcbal2["English"]["FcCBalance"] = "";
	$fieldLabelsaccountcbal2["English"]["FCBalStatus"] = "FCBal Status";
	$fieldToolTipsaccountcbal2["English"]["FCBalStatus"] = "";
	$placeHoldersaccountcbal2["English"]["FCBalStatus"] = "";
	$fieldLabelsaccountcbal2["English"]["Remarks"] = "Remarks";
	$fieldToolTipsaccountcbal2["English"]["Remarks"] = "";
	$placeHoldersaccountcbal2["English"]["Remarks"] = "";
	$fieldLabelsaccountcbal2["English"]["FcCurrencyCode"] = "Fc Currency Code";
	$fieldToolTipsaccountcbal2["English"]["FcCurrencyCode"] = "";
	$placeHoldersaccountcbal2["English"]["FcCurrencyCode"] = "";
	$fieldLabelsaccountcbal2["English"]["AccStatusType"] = "Acc Status Type";
	$fieldToolTipsaccountcbal2["English"]["AccStatusType"] = "";
	$placeHoldersaccountcbal2["English"]["AccStatusType"] = "";
	$fieldLabelsaccountcbal2["English"]["UDate"] = "UDate";
	$fieldToolTipsaccountcbal2["English"]["UDate"] = "";
	$placeHoldersaccountcbal2["English"]["UDate"] = "";
	if (count($fieldToolTipsaccountcbal2["English"]))
		$tdataaccountcbal2[".isUseToolTips"] = true;
}


	$tdataaccountcbal2[".NCSearch"] = true;



$tdataaccountcbal2[".shortTableName"] = "accountcbal2";
$tdataaccountcbal2[".nSecOptions"] = 0;

$tdataaccountcbal2[".mainTableOwnerID"] = "";
$tdataaccountcbal2[".entityType"] = 1;
$tdataaccountcbal2[".connId"] = "karsaaz_pos_at_localhost01";


$tdataaccountcbal2[".strOriginalTableName"] = "AccountCBal";

	



$tdataaccountcbal2[".showAddInPopup"] = false;

$tdataaccountcbal2[".showEditInPopup"] = false;

$tdataaccountcbal2[".showViewInPopup"] = false;

$tdataaccountcbal2[".listAjax"] = false;
//	temporary
//$tdataaccountcbal2[".listAjax"] = false;

	$tdataaccountcbal2[".audit"] = false;

	$tdataaccountcbal2[".locking"] = false;


$pages = $tdataaccountcbal2[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataaccountcbal2[".edit"] = true;
	$tdataaccountcbal2[".afterEditAction"] = 1;
	$tdataaccountcbal2[".closePopupAfterEdit"] = 1;
	$tdataaccountcbal2[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataaccountcbal2[".add"] = true;
$tdataaccountcbal2[".afterAddAction"] = 1;
$tdataaccountcbal2[".closePopupAfterAdd"] = 1;
$tdataaccountcbal2[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataaccountcbal2[".list"] = true;
}



$tdataaccountcbal2[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataaccountcbal2[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataaccountcbal2[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataaccountcbal2[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataaccountcbal2[".printFriendly"] = true;
}



$tdataaccountcbal2[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataaccountcbal2[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataaccountcbal2[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataaccountcbal2[".isUseAjaxSuggest"] = true;

$tdataaccountcbal2[".rowHighlite"] = true;





$tdataaccountcbal2[".ajaxCodeSnippetAdded"] = false;

$tdataaccountcbal2[".buttonsAdded"] = false;

$tdataaccountcbal2[".addPageEvents"] = false;

// use timepicker for search panel
$tdataaccountcbal2[".isUseTimeForSearch"] = false;


$tdataaccountcbal2[".badgeColor"] = "8FBC8B";


$tdataaccountcbal2[".allSearchFields"] = array();
$tdataaccountcbal2[".filterFields"] = array();
$tdataaccountcbal2[".requiredSearchFields"] = array();

$tdataaccountcbal2[".googleLikeFields"] = array();
$tdataaccountcbal2[".googleLikeFields"][] = "Code";
$tdataaccountcbal2[".googleLikeFields"][] = "ParentAccountCode";
$tdataaccountcbal2[".googleLikeFields"][] = "ParentCode";
$tdataaccountcbal2[".googleLikeFields"][] = "AccountCode";
$tdataaccountcbal2[".googleLikeFields"][] = "BuCode";
$tdataaccountcbal2[".googleLikeFields"][] = "AccountTypeCode";
$tdataaccountcbal2[".googleLikeFields"][] = "AccountType";
$tdataaccountcbal2[".googleLikeFields"][] = "CBalance";
$tdataaccountcbal2[".googleLikeFields"][] = "CBalStatus";
$tdataaccountcbal2[".googleLikeFields"][] = "FcCBalance";
$tdataaccountcbal2[".googleLikeFields"][] = "FCBalStatus";
$tdataaccountcbal2[".googleLikeFields"][] = "Remarks";
$tdataaccountcbal2[".googleLikeFields"][] = "FcCurrencyCode";
$tdataaccountcbal2[".googleLikeFields"][] = "AccStatusType";
$tdataaccountcbal2[".googleLikeFields"][] = "UDate";



$tdataaccountcbal2[".tableType"] = "list";

$tdataaccountcbal2[".printerPageOrientation"] = 0;
$tdataaccountcbal2[".nPrinterPageScale"] = 100;

$tdataaccountcbal2[".nPrinterSplitRecords"] = 40;

$tdataaccountcbal2[".geocodingEnabled"] = false;










$tdataaccountcbal2[".pageSize"] = 20;

$tdataaccountcbal2[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataaccountcbal2[".strOrderBy"] = $tstrOrderBy;

$tdataaccountcbal2[".orderindexes"] = array();


$tdataaccountcbal2[".sqlHead"] = "SELECT Code,  	ParentAccountCode,  	ParentCode,  	AccountCode,  	BuCode,  	AccountTypeCode,  	AccountType,  	CBalance,  	CBalStatus,  	FcCBalance,  	FCBalStatus,  	Remarks,  	FcCurrencyCode,  	AccStatusType,  	UDate";
$tdataaccountcbal2[".sqlFrom"] = "FROM AccountCBal";
$tdataaccountcbal2[".sqlWhereExpr"] = "";
$tdataaccountcbal2[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataaccountcbal2[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataaccountcbal2[".arrGroupsPerPage"] = $arrGPP;

$tdataaccountcbal2[".highlightSearchResults"] = true;

$tableKeysaccountcbal2 = array();
$tableKeysaccountcbal2[] = "Code";
$tdataaccountcbal2[".Keys"] = $tableKeysaccountcbal2;


$tdataaccountcbal2[".hideMobileList"] = array();




//	Code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Code";
	$fdata["GoodName"] = "Code";
	$fdata["ownerTable"] = "AccountCBal";
	$fdata["Label"] = GetFieldLabel("AccountCBal2","Code");
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


	$tdataaccountcbal2["Code"] = $fdata;
		$tdataaccountcbal2[".searchableFields"][] = "Code";
//	ParentAccountCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ParentAccountCode";
	$fdata["GoodName"] = "ParentAccountCode";
	$fdata["ownerTable"] = "AccountCBal";
	$fdata["Label"] = GetFieldLabel("AccountCBal2","ParentAccountCode");
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


	$tdataaccountcbal2["ParentAccountCode"] = $fdata;
		$tdataaccountcbal2[".searchableFields"][] = "ParentAccountCode";
//	ParentCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ParentCode";
	$fdata["GoodName"] = "ParentCode";
	$fdata["ownerTable"] = "AccountCBal";
	$fdata["Label"] = GetFieldLabel("AccountCBal2","ParentCode");
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


	$tdataaccountcbal2["ParentCode"] = $fdata;
		$tdataaccountcbal2[".searchableFields"][] = "ParentCode";
//	AccountCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "AccountCode";
	$fdata["GoodName"] = "AccountCode";
	$fdata["ownerTable"] = "AccountCBal";
	$fdata["Label"] = GetFieldLabel("AccountCBal2","AccountCode");
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


	$tdataaccountcbal2["AccountCode"] = $fdata;
		$tdataaccountcbal2[".searchableFields"][] = "AccountCode";
//	BuCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "BuCode";
	$fdata["GoodName"] = "BuCode";
	$fdata["ownerTable"] = "AccountCBal";
	$fdata["Label"] = GetFieldLabel("AccountCBal2","BuCode");
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


	$tdataaccountcbal2["BuCode"] = $fdata;
		$tdataaccountcbal2[".searchableFields"][] = "BuCode";
//	AccountTypeCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "AccountTypeCode";
	$fdata["GoodName"] = "AccountTypeCode";
	$fdata["ownerTable"] = "AccountCBal";
	$fdata["Label"] = GetFieldLabel("AccountCBal2","AccountTypeCode");
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


	$tdataaccountcbal2["AccountTypeCode"] = $fdata;
		$tdataaccountcbal2[".searchableFields"][] = "AccountTypeCode";
//	AccountType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "AccountType";
	$fdata["GoodName"] = "AccountType";
	$fdata["ownerTable"] = "AccountCBal";
	$fdata["Label"] = GetFieldLabel("AccountCBal2","AccountType");
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


	$tdataaccountcbal2["AccountType"] = $fdata;
		$tdataaccountcbal2[".searchableFields"][] = "AccountType";
//	CBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "CBalance";
	$fdata["GoodName"] = "CBalance";
	$fdata["ownerTable"] = "AccountCBal";
	$fdata["Label"] = GetFieldLabel("AccountCBal2","CBalance");
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


	$tdataaccountcbal2["CBalance"] = $fdata;
		$tdataaccountcbal2[".searchableFields"][] = "CBalance";
//	CBalStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "CBalStatus";
	$fdata["GoodName"] = "CBalStatus";
	$fdata["ownerTable"] = "AccountCBal";
	$fdata["Label"] = GetFieldLabel("AccountCBal2","CBalStatus");
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


	$tdataaccountcbal2["CBalStatus"] = $fdata;
		$tdataaccountcbal2[".searchableFields"][] = "CBalStatus";
//	FcCBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "FcCBalance";
	$fdata["GoodName"] = "FcCBalance";
	$fdata["ownerTable"] = "AccountCBal";
	$fdata["Label"] = GetFieldLabel("AccountCBal2","FcCBalance");
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


	$tdataaccountcbal2["FcCBalance"] = $fdata;
		$tdataaccountcbal2[".searchableFields"][] = "FcCBalance";
//	FCBalStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "FCBalStatus";
	$fdata["GoodName"] = "FCBalStatus";
	$fdata["ownerTable"] = "AccountCBal";
	$fdata["Label"] = GetFieldLabel("AccountCBal2","FCBalStatus");
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


	$tdataaccountcbal2["FCBalStatus"] = $fdata;
		$tdataaccountcbal2[".searchableFields"][] = "FCBalStatus";
//	Remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Remarks";
	$fdata["GoodName"] = "Remarks";
	$fdata["ownerTable"] = "AccountCBal";
	$fdata["Label"] = GetFieldLabel("AccountCBal2","Remarks");
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


	$tdataaccountcbal2["Remarks"] = $fdata;
		$tdataaccountcbal2[".searchableFields"][] = "Remarks";
//	FcCurrencyCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "FcCurrencyCode";
	$fdata["GoodName"] = "FcCurrencyCode";
	$fdata["ownerTable"] = "AccountCBal";
	$fdata["Label"] = GetFieldLabel("AccountCBal2","FcCurrencyCode");
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


	$tdataaccountcbal2["FcCurrencyCode"] = $fdata;
		$tdataaccountcbal2[".searchableFields"][] = "FcCurrencyCode";
//	AccStatusType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "AccStatusType";
	$fdata["GoodName"] = "AccStatusType";
	$fdata["ownerTable"] = "AccountCBal";
	$fdata["Label"] = GetFieldLabel("AccountCBal2","AccStatusType");
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


	$tdataaccountcbal2["AccStatusType"] = $fdata;
		$tdataaccountcbal2[".searchableFields"][] = "AccStatusType";
//	UDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "UDate";
	$fdata["GoodName"] = "UDate";
	$fdata["ownerTable"] = "AccountCBal";
	$fdata["Label"] = GetFieldLabel("AccountCBal2","UDate");
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


	$tdataaccountcbal2["UDate"] = $fdata;
		$tdataaccountcbal2[".searchableFields"][] = "UDate";


$tables_data["AccountCBal2"]=&$tdataaccountcbal2;
$field_labels["AccountCBal2"] = &$fieldLabelsaccountcbal2;
$fieldToolTips["AccountCBal2"] = &$fieldToolTipsaccountcbal2;
$placeHolders["AccountCBal2"] = &$placeHoldersaccountcbal2;
$page_titles["AccountCBal2"] = &$pageTitlesaccountcbal2;


changeTextControlsToDate( "AccountCBal2" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["AccountCBal2"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["AccountCBal2"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_accountcbal2()
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
	"m_srcTableName" => "AccountCBal2"
));

$proto6["m_sql"] = "Code";
$proto6["m_srcTableName"] = "AccountCBal2";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ParentAccountCode",
	"m_strTable" => "AccountCBal",
	"m_srcTableName" => "AccountCBal2"
));

$proto8["m_sql"] = "ParentAccountCode";
$proto8["m_srcTableName"] = "AccountCBal2";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ParentCode",
	"m_strTable" => "AccountCBal",
	"m_srcTableName" => "AccountCBal2"
));

$proto10["m_sql"] = "ParentCode";
$proto10["m_srcTableName"] = "AccountCBal2";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountCode",
	"m_strTable" => "AccountCBal",
	"m_srcTableName" => "AccountCBal2"
));

$proto12["m_sql"] = "AccountCode";
$proto12["m_srcTableName"] = "AccountCBal2";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "BuCode",
	"m_strTable" => "AccountCBal",
	"m_srcTableName" => "AccountCBal2"
));

$proto14["m_sql"] = "BuCode";
$proto14["m_srcTableName"] = "AccountCBal2";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountTypeCode",
	"m_strTable" => "AccountCBal",
	"m_srcTableName" => "AccountCBal2"
));

$proto16["m_sql"] = "AccountTypeCode";
$proto16["m_srcTableName"] = "AccountCBal2";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountType",
	"m_strTable" => "AccountCBal",
	"m_srcTableName" => "AccountCBal2"
));

$proto18["m_sql"] = "AccountType";
$proto18["m_srcTableName"] = "AccountCBal2";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "CBalance",
	"m_strTable" => "AccountCBal",
	"m_srcTableName" => "AccountCBal2"
));

$proto20["m_sql"] = "CBalance";
$proto20["m_srcTableName"] = "AccountCBal2";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "CBalStatus",
	"m_strTable" => "AccountCBal",
	"m_srcTableName" => "AccountCBal2"
));

$proto22["m_sql"] = "CBalStatus";
$proto22["m_srcTableName"] = "AccountCBal2";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "FcCBalance",
	"m_strTable" => "AccountCBal",
	"m_srcTableName" => "AccountCBal2"
));

$proto24["m_sql"] = "FcCBalance";
$proto24["m_srcTableName"] = "AccountCBal2";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "FCBalStatus",
	"m_strTable" => "AccountCBal",
	"m_srcTableName" => "AccountCBal2"
));

$proto26["m_sql"] = "FCBalStatus";
$proto26["m_srcTableName"] = "AccountCBal2";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Remarks",
	"m_strTable" => "AccountCBal",
	"m_srcTableName" => "AccountCBal2"
));

$proto28["m_sql"] = "Remarks";
$proto28["m_srcTableName"] = "AccountCBal2";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "FcCurrencyCode",
	"m_strTable" => "AccountCBal",
	"m_srcTableName" => "AccountCBal2"
));

$proto30["m_sql"] = "FcCurrencyCode";
$proto30["m_srcTableName"] = "AccountCBal2";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "AccStatusType",
	"m_strTable" => "AccountCBal",
	"m_srcTableName" => "AccountCBal2"
));

$proto32["m_sql"] = "AccStatusType";
$proto32["m_srcTableName"] = "AccountCBal2";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "UDate",
	"m_strTable" => "AccountCBal",
	"m_srcTableName" => "AccountCBal2"
));

$proto34["m_sql"] = "UDate";
$proto34["m_srcTableName"] = "AccountCBal2";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto36=array();
$proto36["m_link"] = "SQLL_MAIN";
			$proto37=array();
$proto37["m_strName"] = "AccountCBal";
$proto37["m_srcTableName"] = "AccountCBal2";
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
$proto36["m_srcTableName"] = "AccountCBal2";
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
$proto0["m_srcTableName"]="AccountCBal2";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_accountcbal2 = createSqlQuery_accountcbal2();


	
				;

															

$tdataaccountcbal2[".sqlquery"] = $queryData_accountcbal2;



$tdataaccountcbal2[".hasEvents"] = false;

?>