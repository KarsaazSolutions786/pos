<?php
$tdatapbank = array();
$tdatapbank[".searchableFields"] = array();
$tdatapbank[".ShortName"] = "pbank";
$tdatapbank[".OwnerID"] = "";
$tdatapbank[".OriginalTable"] = "pBank";


$tdatapbank[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapbank[".originalPagesByType"] = $tdatapbank[".pagesByType"];
$tdatapbank[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapbank[".originalPages"] = $tdatapbank[".pages"];
$tdatapbank[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapbank[".originalDefaultPages"] = $tdatapbank[".defaultPages"];

//	field labels
$fieldLabelspbank = array();
$fieldToolTipspbank = array();
$pageTitlespbank = array();
$placeHolderspbank = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspbank["English"] = array();
	$fieldToolTipspbank["English"] = array();
	$placeHolderspbank["English"] = array();
	$pageTitlespbank["English"] = array();
	$fieldLabelspbank["English"]["id"] = "Id";
	$fieldToolTipspbank["English"]["id"] = "";
	$placeHolderspbank["English"]["id"] = "";
	$fieldLabelspbank["English"]["business_id"] = "Business";
	$fieldToolTipspbank["English"]["business_id"] = "";
	$placeHolderspbank["English"]["business_id"] = "";
	$fieldLabelspbank["English"]["group_id"] = "Group";
	$fieldToolTipspbank["English"]["group_id"] = "";
	$placeHolderspbank["English"]["group_id"] = "";
	$fieldLabelspbank["English"]["bank_name"] = "Bank Name";
	$fieldToolTipspbank["English"]["bank_name"] = "";
	$placeHolderspbank["English"]["bank_name"] = "";
	$fieldLabelspbank["English"]["old_code"] = "Old Code";
	$fieldToolTipspbank["English"]["old_code"] = "";
	$placeHolderspbank["English"]["old_code"] = "";
	$fieldLabelspbank["English"]["account_title"] = "Account Title";
	$fieldToolTipspbank["English"]["account_title"] = "";
	$placeHolderspbank["English"]["account_title"] = "";
	$fieldLabelspbank["English"]["account_no"] = "Account No";
	$fieldToolTipspbank["English"]["account_no"] = "";
	$placeHolderspbank["English"]["account_no"] = "";
	if (count($fieldToolTipspbank["English"]))
		$tdatapbank[".isUseToolTips"] = true;
}


	$tdatapbank[".NCSearch"] = true;



$tdatapbank[".shortTableName"] = "pbank";
$tdatapbank[".nSecOptions"] = 0;

$tdatapbank[".mainTableOwnerID"] = "";
$tdatapbank[".entityType"] = 0;
$tdatapbank[".connId"] = "karsaaz_pos_at_localhost";


$tdatapbank[".strOriginalTableName"] = "pBank";

	



$tdatapbank[".showAddInPopup"] = false;

$tdatapbank[".showEditInPopup"] = false;

$tdatapbank[".showViewInPopup"] = false;

$tdatapbank[".listAjax"] = false;
//	temporary
//$tdatapbank[".listAjax"] = false;

	$tdatapbank[".audit"] = false;

	$tdatapbank[".locking"] = false;


$pages = $tdatapbank[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapbank[".edit"] = true;
	$tdatapbank[".afterEditAction"] = 1;
	$tdatapbank[".closePopupAfterEdit"] = 1;
	$tdatapbank[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapbank[".add"] = true;
$tdatapbank[".afterAddAction"] = 1;
$tdatapbank[".closePopupAfterAdd"] = 1;
$tdatapbank[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapbank[".list"] = true;
}



$tdatapbank[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapbank[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapbank[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapbank[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapbank[".printFriendly"] = true;
}



$tdatapbank[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapbank[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapbank[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapbank[".isUseAjaxSuggest"] = true;

$tdatapbank[".rowHighlite"] = true;





$tdatapbank[".ajaxCodeSnippetAdded"] = false;

$tdatapbank[".buttonsAdded"] = false;

$tdatapbank[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapbank[".isUseTimeForSearch"] = false;


$tdatapbank[".badgeColor"] = "4169E1";


$tdatapbank[".allSearchFields"] = array();
$tdatapbank[".filterFields"] = array();
$tdatapbank[".requiredSearchFields"] = array();

$tdatapbank[".googleLikeFields"] = array();
$tdatapbank[".googleLikeFields"][] = "id";
$tdatapbank[".googleLikeFields"][] = "account_title";
$tdatapbank[".googleLikeFields"][] = "account_no";
$tdatapbank[".googleLikeFields"][] = "business_id";
$tdatapbank[".googleLikeFields"][] = "group_id";
$tdatapbank[".googleLikeFields"][] = "bank_name";
$tdatapbank[".googleLikeFields"][] = "old_code";



$tdatapbank[".tableType"] = "list";

$tdatapbank[".printerPageOrientation"] = 0;
$tdatapbank[".nPrinterPageScale"] = 100;

$tdatapbank[".nPrinterSplitRecords"] = 40;

$tdatapbank[".geocodingEnabled"] = false;










$tdatapbank[".pageSize"] = 20;

$tdatapbank[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapbank[".strOrderBy"] = $tstrOrderBy;

$tdatapbank[".orderindexes"] = array();


$tdatapbank[".sqlHead"] = "SELECT id,  	account_title,  	account_no,  	business_id,  	group_id,  	bank_name,  	old_code";
$tdatapbank[".sqlFrom"] = "FROM pBank";
$tdatapbank[".sqlWhereExpr"] = "";
$tdatapbank[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapbank[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapbank[".arrGroupsPerPage"] = $arrGPP;

$tdatapbank[".highlightSearchResults"] = true;

$tableKeyspbank = array();
$tableKeyspbank[] = "id";
$tdatapbank[".Keys"] = $tableKeyspbank;


$tdatapbank[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "pBank";
	$fdata["Label"] = GetFieldLabel("pBank","id");
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


	$tdatapbank["id"] = $fdata;
		$tdatapbank[".searchableFields"][] = "id";
//	account_title
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "account_title";
	$fdata["GoodName"] = "account_title";
	$fdata["ownerTable"] = "pBank";
	$fdata["Label"] = GetFieldLabel("pBank","account_title");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "account_title";

		$fdata["sourceSingle"] = "account_title";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "account_title";

	
	
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


	$tdatapbank["account_title"] = $fdata;
		$tdatapbank[".searchableFields"][] = "account_title";
//	account_no
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "account_no";
	$fdata["GoodName"] = "account_no";
	$fdata["ownerTable"] = "pBank";
	$fdata["Label"] = GetFieldLabel("pBank","account_no");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "account_no";

		$fdata["sourceSingle"] = "account_no";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "account_no";

	
	
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
			$edata["EditParams"].= " maxlength=255";

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


	$tdatapbank["account_no"] = $fdata;
		$tdatapbank[".searchableFields"][] = "account_no";
//	business_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "business_id";
	$fdata["GoodName"] = "business_id";
	$fdata["ownerTable"] = "pBank";
	$fdata["Label"] = GetFieldLabel("pBank","business_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "business_id";

		$fdata["sourceSingle"] = "business_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "business_id";

	
	
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


	$tdatapbank["business_id"] = $fdata;
		$tdatapbank[".searchableFields"][] = "business_id";
//	group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "group_id";
	$fdata["GoodName"] = "group_id";
	$fdata["ownerTable"] = "pBank";
	$fdata["Label"] = GetFieldLabel("pBank","group_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "group_id";

		$fdata["sourceSingle"] = "group_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "group_id";

	
	
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
	$edata["LookupTable"] = "psBankGroup";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "id";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "name";

	

	
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


	$tdatapbank["group_id"] = $fdata;
		$tdatapbank[".searchableFields"][] = "group_id";
//	bank_name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "bank_name";
	$fdata["GoodName"] = "bank_name";
	$fdata["ownerTable"] = "pBank";
	$fdata["Label"] = GetFieldLabel("pBank","bank_name");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "bank_name";

		$fdata["sourceSingle"] = "bank_name";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bank_name";

	
	
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


	$tdatapbank["bank_name"] = $fdata;
		$tdatapbank[".searchableFields"][] = "bank_name";
//	old_code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "old_code";
	$fdata["GoodName"] = "old_code";
	$fdata["ownerTable"] = "pBank";
	$fdata["Label"] = GetFieldLabel("pBank","old_code");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "old_code";

		$fdata["sourceSingle"] = "old_code";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "old_code";

	
	
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


	$tdatapbank["old_code"] = $fdata;
		$tdatapbank[".searchableFields"][] = "old_code";


$tables_data["pBank"]=&$tdatapbank;
$field_labels["pBank"] = &$fieldLabelspbank;
$fieldToolTips["pBank"] = &$fieldToolTipspbank;
$placeHolders["pBank"] = &$placeHolderspbank;
$page_titles["pBank"] = &$pageTitlespbank;


changeTextControlsToDate( "pBank" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["pBank"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["pBank"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_pbank()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	account_title,  	account_no,  	business_id,  	group_id,  	bank_name,  	old_code";
$proto0["m_strFrom"] = "FROM pBank";
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
	"m_strTable" => "pBank",
	"m_srcTableName" => "pBank"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "pBank";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "account_title",
	"m_strTable" => "pBank",
	"m_srcTableName" => "pBank"
));

$proto8["m_sql"] = "account_title";
$proto8["m_srcTableName"] = "pBank";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "account_no",
	"m_strTable" => "pBank",
	"m_srcTableName" => "pBank"
));

$proto10["m_sql"] = "account_no";
$proto10["m_srcTableName"] = "pBank";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "business_id",
	"m_strTable" => "pBank",
	"m_srcTableName" => "pBank"
));

$proto12["m_sql"] = "business_id";
$proto12["m_srcTableName"] = "pBank";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "group_id",
	"m_strTable" => "pBank",
	"m_srcTableName" => "pBank"
));

$proto14["m_sql"] = "group_id";
$proto14["m_srcTableName"] = "pBank";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "bank_name",
	"m_strTable" => "pBank",
	"m_srcTableName" => "pBank"
));

$proto16["m_sql"] = "bank_name";
$proto16["m_srcTableName"] = "pBank";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "old_code",
	"m_strTable" => "pBank",
	"m_srcTableName" => "pBank"
));

$proto18["m_sql"] = "old_code";
$proto18["m_srcTableName"] = "pBank";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "pBank";
$proto21["m_srcTableName"] = "pBank";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "account_title";
$proto21["m_columns"][] = "account_no";
$proto21["m_columns"][] = "business_id";
$proto21["m_columns"][] = "group_id";
$proto21["m_columns"][] = "bank_name";
$proto21["m_columns"][] = "old_code";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "pBank";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "pBank";
$proto22=array();
$proto22["m_sql"] = "";
$proto22["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto22["m_column"]=$obj;
$proto22["m_contained"] = array();
$proto22["m_strCase"] = "";
$proto22["m_havingmode"] = false;
$proto22["m_inBrackets"] = false;
$proto22["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto22);

$proto20["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto20);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="pBank";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pbank = createSqlQuery_pbank();


	
		;

							

$tdatapbank[".sqlquery"] = $queryData_pbank;



include_once(getabspath("include/pbank_events.php"));
$tdatapbank[".hasEvents"] = true;

?>