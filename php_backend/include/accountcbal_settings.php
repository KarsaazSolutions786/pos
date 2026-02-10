<?php
$tdataaccountcbal = array();
$tdataaccountcbal[".searchableFields"] = array();
$tdataaccountcbal[".ShortName"] = "accountcbal";
$tdataaccountcbal[".OwnerID"] = "";
$tdataaccountcbal[".OriginalTable"] = "AccountCBal";


$tdataaccountcbal[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataaccountcbal[".originalPagesByType"] = $tdataaccountcbal[".pagesByType"];
$tdataaccountcbal[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataaccountcbal[".originalPages"] = $tdataaccountcbal[".pages"];
$tdataaccountcbal[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataaccountcbal[".originalDefaultPages"] = $tdataaccountcbal[".defaultPages"];

//	field labels
$fieldLabelsaccountcbal = array();
$fieldToolTipsaccountcbal = array();
$pageTitlesaccountcbal = array();
$placeHoldersaccountcbal = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsaccountcbal["English"] = array();
	$fieldToolTipsaccountcbal["English"] = array();
	$placeHoldersaccountcbal["English"] = array();
	$pageTitlesaccountcbal["English"] = array();
	$fieldLabelsaccountcbal["English"]["Code"] = "Code";
	$fieldToolTipsaccountcbal["English"]["Code"] = "";
	$placeHoldersaccountcbal["English"]["Code"] = "";
	$fieldLabelsaccountcbal["English"]["ParentAccountCode"] = "Parent Account Code";
	$fieldToolTipsaccountcbal["English"]["ParentAccountCode"] = "";
	$placeHoldersaccountcbal["English"]["ParentAccountCode"] = "";
	$fieldLabelsaccountcbal["English"]["ParentCode"] = "Parent Code";
	$fieldToolTipsaccountcbal["English"]["ParentCode"] = "";
	$placeHoldersaccountcbal["English"]["ParentCode"] = "";
	$fieldLabelsaccountcbal["English"]["AccountCode"] = "Account Code";
	$fieldToolTipsaccountcbal["English"]["AccountCode"] = "";
	$placeHoldersaccountcbal["English"]["AccountCode"] = "";
	$fieldLabelsaccountcbal["English"]["BuCode"] = "Bu Code";
	$fieldToolTipsaccountcbal["English"]["BuCode"] = "";
	$placeHoldersaccountcbal["English"]["BuCode"] = "";
	$fieldLabelsaccountcbal["English"]["AccountType"] = "Account Type";
	$fieldToolTipsaccountcbal["English"]["AccountType"] = "";
	$placeHoldersaccountcbal["English"]["AccountType"] = "";
	$fieldLabelsaccountcbal["English"]["CBalance"] = "CBalance";
	$fieldToolTipsaccountcbal["English"]["CBalance"] = "";
	$placeHoldersaccountcbal["English"]["CBalance"] = "";
	$fieldLabelsaccountcbal["English"]["CBalStatus"] = "CBal Status";
	$fieldToolTipsaccountcbal["English"]["CBalStatus"] = "";
	$placeHoldersaccountcbal["English"]["CBalStatus"] = "";
	$fieldLabelsaccountcbal["English"]["FcCBalance"] = "Fc CBalance";
	$fieldToolTipsaccountcbal["English"]["FcCBalance"] = "";
	$placeHoldersaccountcbal["English"]["FcCBalance"] = "";
	$fieldLabelsaccountcbal["English"]["FCBalStatus"] = "FCBal Status";
	$fieldToolTipsaccountcbal["English"]["FCBalStatus"] = "";
	$placeHoldersaccountcbal["English"]["FCBalStatus"] = "";
	$fieldLabelsaccountcbal["English"]["Remarks"] = "Remarks";
	$fieldToolTipsaccountcbal["English"]["Remarks"] = "";
	$placeHoldersaccountcbal["English"]["Remarks"] = "";
	$fieldLabelsaccountcbal["English"]["FcCurrencyCode"] = "Fc Currency Code";
	$fieldToolTipsaccountcbal["English"]["FcCurrencyCode"] = "";
	$placeHoldersaccountcbal["English"]["FcCurrencyCode"] = "";
	$fieldLabelsaccountcbal["English"]["AccStatusType"] = "Acc Status Type";
	$fieldToolTipsaccountcbal["English"]["AccStatusType"] = "";
	$placeHoldersaccountcbal["English"]["AccStatusType"] = "";
	$fieldLabelsaccountcbal["English"]["UDate"] = "UDate";
	$fieldToolTipsaccountcbal["English"]["UDate"] = "";
	$placeHoldersaccountcbal["English"]["UDate"] = "";
	$fieldLabelsaccountcbal["English"]["AccSubCode"] = "Acc Sub Code";
	$fieldToolTipsaccountcbal["English"]["AccSubCode"] = "";
	$placeHoldersaccountcbal["English"]["AccSubCode"] = "";
	$fieldLabelsaccountcbal["English"]["CoaCode"] = "Coa Code";
	$fieldToolTipsaccountcbal["English"]["CoaCode"] = "";
	$placeHoldersaccountcbal["English"]["CoaCode"] = "";
	if (count($fieldToolTipsaccountcbal["English"]))
		$tdataaccountcbal[".isUseToolTips"] = true;
}


	$tdataaccountcbal[".NCSearch"] = true;



$tdataaccountcbal[".shortTableName"] = "accountcbal";
$tdataaccountcbal[".nSecOptions"] = 0;

$tdataaccountcbal[".mainTableOwnerID"] = "";
$tdataaccountcbal[".entityType"] = 0;
$tdataaccountcbal[".connId"] = "karsaaz_pos_at_localhost";


$tdataaccountcbal[".strOriginalTableName"] = "AccountCBal";

	



$tdataaccountcbal[".showAddInPopup"] = false;

$tdataaccountcbal[".showEditInPopup"] = false;

$tdataaccountcbal[".showViewInPopup"] = false;

$tdataaccountcbal[".listAjax"] = false;
//	temporary
//$tdataaccountcbal[".listAjax"] = false;

	$tdataaccountcbal[".audit"] = false;

	$tdataaccountcbal[".locking"] = false;


$pages = $tdataaccountcbal[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataaccountcbal[".edit"] = true;
	$tdataaccountcbal[".afterEditAction"] = 1;
	$tdataaccountcbal[".closePopupAfterEdit"] = 1;
	$tdataaccountcbal[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataaccountcbal[".add"] = true;
$tdataaccountcbal[".afterAddAction"] = 1;
$tdataaccountcbal[".closePopupAfterAdd"] = 1;
$tdataaccountcbal[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataaccountcbal[".list"] = true;
}



$tdataaccountcbal[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataaccountcbal[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataaccountcbal[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataaccountcbal[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataaccountcbal[".printFriendly"] = true;
}



$tdataaccountcbal[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataaccountcbal[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataaccountcbal[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataaccountcbal[".isUseAjaxSuggest"] = true;

$tdataaccountcbal[".rowHighlite"] = true;





$tdataaccountcbal[".ajaxCodeSnippetAdded"] = false;

$tdataaccountcbal[".buttonsAdded"] = false;

$tdataaccountcbal[".addPageEvents"] = false;

// use timepicker for search panel
$tdataaccountcbal[".isUseTimeForSearch"] = false;


$tdataaccountcbal[".badgeColor"] = "E67349";


$tdataaccountcbal[".allSearchFields"] = array();
$tdataaccountcbal[".filterFields"] = array();
$tdataaccountcbal[".requiredSearchFields"] = array();

$tdataaccountcbal[".googleLikeFields"] = array();
$tdataaccountcbal[".googleLikeFields"][] = "Code";
$tdataaccountcbal[".googleLikeFields"][] = "ParentAccountCode";
$tdataaccountcbal[".googleLikeFields"][] = "ParentCode";
$tdataaccountcbal[".googleLikeFields"][] = "AccountCode";
$tdataaccountcbal[".googleLikeFields"][] = "BuCode";
$tdataaccountcbal[".googleLikeFields"][] = "AccountType";
$tdataaccountcbal[".googleLikeFields"][] = "CBalance";
$tdataaccountcbal[".googleLikeFields"][] = "CBalStatus";
$tdataaccountcbal[".googleLikeFields"][] = "FcCBalance";
$tdataaccountcbal[".googleLikeFields"][] = "FCBalStatus";
$tdataaccountcbal[".googleLikeFields"][] = "Remarks";
$tdataaccountcbal[".googleLikeFields"][] = "FcCurrencyCode";
$tdataaccountcbal[".googleLikeFields"][] = "AccStatusType";
$tdataaccountcbal[".googleLikeFields"][] = "UDate";
$tdataaccountcbal[".googleLikeFields"][] = "AccSubCode";
$tdataaccountcbal[".googleLikeFields"][] = "CoaCode";



$tdataaccountcbal[".tableType"] = "list";

$tdataaccountcbal[".printerPageOrientation"] = 0;
$tdataaccountcbal[".nPrinterPageScale"] = 100;

$tdataaccountcbal[".nPrinterSplitRecords"] = 40;

$tdataaccountcbal[".geocodingEnabled"] = false;










$tdataaccountcbal[".pageSize"] = 20;

$tdataaccountcbal[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataaccountcbal[".strOrderBy"] = $tstrOrderBy;

$tdataaccountcbal[".orderindexes"] = array();


$tdataaccountcbal[".sqlHead"] = "SELECT Code,  	ParentAccountCode,  	ParentCode,  	AccountCode,  	BuCode,  	AccountType,  	CBalance,  	CBalStatus,  	FcCBalance,  	FCBalStatus,  	Remarks,  	FcCurrencyCode,  	AccStatusType,  	UDate,  	AccSubCode,  	CoaCode";
$tdataaccountcbal[".sqlFrom"] = "FROM AccountCBal";
$tdataaccountcbal[".sqlWhereExpr"] = "";
$tdataaccountcbal[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataaccountcbal[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataaccountcbal[".arrGroupsPerPage"] = $arrGPP;

$tdataaccountcbal[".highlightSearchResults"] = true;

$tableKeysaccountcbal = array();
$tableKeysaccountcbal[] = "Code";
$tdataaccountcbal[".Keys"] = $tableKeysaccountcbal;


$tdataaccountcbal[".hideMobileList"] = array();




//	Code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Code";
	$fdata["GoodName"] = "Code";
	$fdata["ownerTable"] = "AccountCBal";
	$fdata["Label"] = GetFieldLabel("AccountCBal","Code");
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


	$tdataaccountcbal["Code"] = $fdata;
		$tdataaccountcbal[".searchableFields"][] = "Code";
//	ParentAccountCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "ParentAccountCode";
	$fdata["GoodName"] = "ParentAccountCode";
	$fdata["ownerTable"] = "AccountCBal";
	$fdata["Label"] = GetFieldLabel("AccountCBal","ParentAccountCode");
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


	$tdataaccountcbal["ParentAccountCode"] = $fdata;
		$tdataaccountcbal[".searchableFields"][] = "ParentAccountCode";
//	ParentCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ParentCode";
	$fdata["GoodName"] = "ParentCode";
	$fdata["ownerTable"] = "AccountCBal";
	$fdata["Label"] = GetFieldLabel("AccountCBal","ParentCode");
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


	$tdataaccountcbal["ParentCode"] = $fdata;
		$tdataaccountcbal[".searchableFields"][] = "ParentCode";
//	AccountCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "AccountCode";
	$fdata["GoodName"] = "AccountCode";
	$fdata["ownerTable"] = "AccountCBal";
	$fdata["Label"] = GetFieldLabel("AccountCBal","AccountCode");
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


	$tdataaccountcbal["AccountCode"] = $fdata;
		$tdataaccountcbal[".searchableFields"][] = "AccountCode";
//	BuCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "BuCode";
	$fdata["GoodName"] = "BuCode";
	$fdata["ownerTable"] = "AccountCBal";
	$fdata["Label"] = GetFieldLabel("AccountCBal","BuCode");
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


	$tdataaccountcbal["BuCode"] = $fdata;
		$tdataaccountcbal[".searchableFields"][] = "BuCode";
//	AccountType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "AccountType";
	$fdata["GoodName"] = "AccountType";
	$fdata["ownerTable"] = "AccountCBal";
	$fdata["Label"] = GetFieldLabel("AccountCBal","AccountType");
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


	$tdataaccountcbal["AccountType"] = $fdata;
		$tdataaccountcbal[".searchableFields"][] = "AccountType";
//	CBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "CBalance";
	$fdata["GoodName"] = "CBalance";
	$fdata["ownerTable"] = "AccountCBal";
	$fdata["Label"] = GetFieldLabel("AccountCBal","CBalance");
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


	$tdataaccountcbal["CBalance"] = $fdata;
		$tdataaccountcbal[".searchableFields"][] = "CBalance";
//	CBalStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "CBalStatus";
	$fdata["GoodName"] = "CBalStatus";
	$fdata["ownerTable"] = "AccountCBal";
	$fdata["Label"] = GetFieldLabel("AccountCBal","CBalStatus");
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


	$tdataaccountcbal["CBalStatus"] = $fdata;
		$tdataaccountcbal[".searchableFields"][] = "CBalStatus";
//	FcCBalance
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "FcCBalance";
	$fdata["GoodName"] = "FcCBalance";
	$fdata["ownerTable"] = "AccountCBal";
	$fdata["Label"] = GetFieldLabel("AccountCBal","FcCBalance");
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


	$tdataaccountcbal["FcCBalance"] = $fdata;
		$tdataaccountcbal[".searchableFields"][] = "FcCBalance";
//	FCBalStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "FCBalStatus";
	$fdata["GoodName"] = "FCBalStatus";
	$fdata["ownerTable"] = "AccountCBal";
	$fdata["Label"] = GetFieldLabel("AccountCBal","FCBalStatus");
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


	$tdataaccountcbal["FCBalStatus"] = $fdata;
		$tdataaccountcbal[".searchableFields"][] = "FCBalStatus";
//	Remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Remarks";
	$fdata["GoodName"] = "Remarks";
	$fdata["ownerTable"] = "AccountCBal";
	$fdata["Label"] = GetFieldLabel("AccountCBal","Remarks");
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


	$tdataaccountcbal["Remarks"] = $fdata;
		$tdataaccountcbal[".searchableFields"][] = "Remarks";
//	FcCurrencyCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "FcCurrencyCode";
	$fdata["GoodName"] = "FcCurrencyCode";
	$fdata["ownerTable"] = "AccountCBal";
	$fdata["Label"] = GetFieldLabel("AccountCBal","FcCurrencyCode");
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


	$tdataaccountcbal["FcCurrencyCode"] = $fdata;
		$tdataaccountcbal[".searchableFields"][] = "FcCurrencyCode";
//	AccStatusType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "AccStatusType";
	$fdata["GoodName"] = "AccStatusType";
	$fdata["ownerTable"] = "AccountCBal";
	$fdata["Label"] = GetFieldLabel("AccountCBal","AccStatusType");
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


	$tdataaccountcbal["AccStatusType"] = $fdata;
		$tdataaccountcbal[".searchableFields"][] = "AccStatusType";
//	UDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "UDate";
	$fdata["GoodName"] = "UDate";
	$fdata["ownerTable"] = "AccountCBal";
	$fdata["Label"] = GetFieldLabel("AccountCBal","UDate");
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


	$tdataaccountcbal["UDate"] = $fdata;
		$tdataaccountcbal[".searchableFields"][] = "UDate";
//	AccSubCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "AccSubCode";
	$fdata["GoodName"] = "AccSubCode";
	$fdata["ownerTable"] = "AccountCBal";
	$fdata["Label"] = GetFieldLabel("AccountCBal","AccSubCode");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "AccSubCode";

		$fdata["sourceSingle"] = "AccSubCode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AccSubCode";

	
	
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


	$tdataaccountcbal["AccSubCode"] = $fdata;
		$tdataaccountcbal[".searchableFields"][] = "AccSubCode";
//	CoaCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "CoaCode";
	$fdata["GoodName"] = "CoaCode";
	$fdata["ownerTable"] = "AccountCBal";
	$fdata["Label"] = GetFieldLabel("AccountCBal","CoaCode");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "CoaCode";

		$fdata["sourceSingle"] = "CoaCode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CoaCode";

	
	
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


	$tdataaccountcbal["CoaCode"] = $fdata;
		$tdataaccountcbal[".searchableFields"][] = "CoaCode";


$tables_data["AccountCBal"]=&$tdataaccountcbal;
$field_labels["AccountCBal"] = &$fieldLabelsaccountcbal;
$fieldToolTips["AccountCBal"] = &$fieldToolTipsaccountcbal;
$placeHolders["AccountCBal"] = &$placeHoldersaccountcbal;
$page_titles["AccountCBal"] = &$pageTitlesaccountcbal;


changeTextControlsToDate( "AccountCBal" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["AccountCBal"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["AccountCBal"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_accountcbal()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Code,  	ParentAccountCode,  	ParentCode,  	AccountCode,  	BuCode,  	AccountType,  	CBalance,  	CBalStatus,  	FcCBalance,  	FCBalStatus,  	Remarks,  	FcCurrencyCode,  	AccStatusType,  	UDate,  	AccSubCode,  	CoaCode";
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
	"m_srcTableName" => "AccountCBal"
));

$proto6["m_sql"] = "Code";
$proto6["m_srcTableName"] = "AccountCBal";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "ParentAccountCode",
	"m_strTable" => "AccountCBal",
	"m_srcTableName" => "AccountCBal"
));

$proto8["m_sql"] = "ParentAccountCode";
$proto8["m_srcTableName"] = "AccountCBal";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ParentCode",
	"m_strTable" => "AccountCBal",
	"m_srcTableName" => "AccountCBal"
));

$proto10["m_sql"] = "ParentCode";
$proto10["m_srcTableName"] = "AccountCBal";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountCode",
	"m_strTable" => "AccountCBal",
	"m_srcTableName" => "AccountCBal"
));

$proto12["m_sql"] = "AccountCode";
$proto12["m_srcTableName"] = "AccountCBal";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "BuCode",
	"m_strTable" => "AccountCBal",
	"m_srcTableName" => "AccountCBal"
));

$proto14["m_sql"] = "BuCode";
$proto14["m_srcTableName"] = "AccountCBal";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountType",
	"m_strTable" => "AccountCBal",
	"m_srcTableName" => "AccountCBal"
));

$proto16["m_sql"] = "AccountType";
$proto16["m_srcTableName"] = "AccountCBal";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "CBalance",
	"m_strTable" => "AccountCBal",
	"m_srcTableName" => "AccountCBal"
));

$proto18["m_sql"] = "CBalance";
$proto18["m_srcTableName"] = "AccountCBal";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "CBalStatus",
	"m_strTable" => "AccountCBal",
	"m_srcTableName" => "AccountCBal"
));

$proto20["m_sql"] = "CBalStatus";
$proto20["m_srcTableName"] = "AccountCBal";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "FcCBalance",
	"m_strTable" => "AccountCBal",
	"m_srcTableName" => "AccountCBal"
));

$proto22["m_sql"] = "FcCBalance";
$proto22["m_srcTableName"] = "AccountCBal";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "FCBalStatus",
	"m_strTable" => "AccountCBal",
	"m_srcTableName" => "AccountCBal"
));

$proto24["m_sql"] = "FCBalStatus";
$proto24["m_srcTableName"] = "AccountCBal";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Remarks",
	"m_strTable" => "AccountCBal",
	"m_srcTableName" => "AccountCBal"
));

$proto26["m_sql"] = "Remarks";
$proto26["m_srcTableName"] = "AccountCBal";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "FcCurrencyCode",
	"m_strTable" => "AccountCBal",
	"m_srcTableName" => "AccountCBal"
));

$proto28["m_sql"] = "FcCurrencyCode";
$proto28["m_srcTableName"] = "AccountCBal";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "AccStatusType",
	"m_strTable" => "AccountCBal",
	"m_srcTableName" => "AccountCBal"
));

$proto30["m_sql"] = "AccStatusType";
$proto30["m_srcTableName"] = "AccountCBal";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "UDate",
	"m_strTable" => "AccountCBal",
	"m_srcTableName" => "AccountCBal"
));

$proto32["m_sql"] = "UDate";
$proto32["m_srcTableName"] = "AccountCBal";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "AccSubCode",
	"m_strTable" => "AccountCBal",
	"m_srcTableName" => "AccountCBal"
));

$proto34["m_sql"] = "AccSubCode";
$proto34["m_srcTableName"] = "AccountCBal";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "CoaCode",
	"m_strTable" => "AccountCBal",
	"m_srcTableName" => "AccountCBal"
));

$proto36["m_sql"] = "CoaCode";
$proto36["m_srcTableName"] = "AccountCBal";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto38=array();
$proto38["m_link"] = "SQLL_MAIN";
			$proto39=array();
$proto39["m_strName"] = "AccountCBal";
$proto39["m_srcTableName"] = "AccountCBal";
$proto39["m_columns"] = array();
$proto39["m_columns"][] = "Code";
$proto39["m_columns"][] = "ParentAccountCode";
$proto39["m_columns"][] = "ParentCode";
$proto39["m_columns"][] = "AccountCode";
$proto39["m_columns"][] = "BuCode";
$proto39["m_columns"][] = "AccountType";
$proto39["m_columns"][] = "CBalance";
$proto39["m_columns"][] = "CBalStatus";
$proto39["m_columns"][] = "FcCBalance";
$proto39["m_columns"][] = "FCBalStatus";
$proto39["m_columns"][] = "Remarks";
$proto39["m_columns"][] = "FcCurrencyCode";
$proto39["m_columns"][] = "AccStatusType";
$proto39["m_columns"][] = "UDate";
$proto39["m_columns"][] = "AccSubCode";
$proto39["m_columns"][] = "CoaCode";
$obj = new SQLTable($proto39);

$proto38["m_table"] = $obj;
$proto38["m_sql"] = "AccountCBal";
$proto38["m_alias"] = "";
$proto38["m_srcTableName"] = "AccountCBal";
$proto40=array();
$proto40["m_sql"] = "";
$proto40["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto40["m_column"]=$obj;
$proto40["m_contained"] = array();
$proto40["m_strCase"] = "";
$proto40["m_havingmode"] = false;
$proto40["m_inBrackets"] = false;
$proto40["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto40);

$proto38["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto38);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="AccountCBal";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_accountcbal = createSqlQuery_accountcbal();


	
		;

																

$tdataaccountcbal[".sqlquery"] = $queryData_accountcbal;



$tdataaccountcbal[".hasEvents"] = false;

?>