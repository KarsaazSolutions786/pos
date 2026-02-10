<?php
$tdatacustomers = array();
$tdatacustomers[".searchableFields"] = array();
$tdatacustomers[".ShortName"] = "customers";
$tdatacustomers[".OwnerID"] = "";
$tdatacustomers[".OriginalTable"] = "customers";


$tdatacustomers[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacustomers[".originalPagesByType"] = $tdatacustomers[".pagesByType"];
$tdatacustomers[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacustomers[".originalPages"] = $tdatacustomers[".pages"];
$tdatacustomers[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacustomers[".originalDefaultPages"] = $tdatacustomers[".defaultPages"];

//	field labels
$fieldLabelscustomers = array();
$fieldToolTipscustomers = array();
$pageTitlescustomers = array();
$placeHolderscustomers = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscustomers["English"] = array();
	$fieldToolTipscustomers["English"] = array();
	$placeHolderscustomers["English"] = array();
	$pageTitlescustomers["English"] = array();
	$fieldLabelscustomers["English"]["id"] = "Id";
	$fieldToolTipscustomers["English"]["id"] = "";
	$placeHolderscustomers["English"]["id"] = "";
	$fieldLabelscustomers["English"]["name"] = "Name";
	$fieldToolTipscustomers["English"]["name"] = "";
	$placeHolderscustomers["English"]["name"] = "";
	$fieldLabelscustomers["English"]["phone_number"] = "Phone Number";
	$fieldToolTipscustomers["English"]["phone_number"] = "";
	$placeHolderscustomers["English"]["phone_number"] = "";
	$fieldLabelscustomers["English"]["customer_type"] = "Customer Type";
	$fieldToolTipscustomers["English"]["customer_type"] = "";
	$placeHolderscustomers["English"]["customer_type"] = "";
	$fieldLabelscustomers["English"]["bring_by"] = "Bring By";
	$fieldToolTipscustomers["English"]["bring_by"] = "";
	$placeHolderscustomers["English"]["bring_by"] = "";
	$fieldLabelscustomers["English"]["added_by"] = "Added By";
	$fieldToolTipscustomers["English"]["added_by"] = "";
	$placeHolderscustomers["English"]["added_by"] = "";
	$fieldLabelscustomers["English"]["added_on"] = "Added On";
	$fieldToolTipscustomers["English"]["added_on"] = "";
	$placeHolderscustomers["English"]["added_on"] = "";
	$fieldLabelscustomers["English"]["modified_by"] = "Modified By";
	$fieldToolTipscustomers["English"]["modified_by"] = "";
	$placeHolderscustomers["English"]["modified_by"] = "";
	$fieldLabelscustomers["English"]["modified_on"] = "Modified On";
	$fieldToolTipscustomers["English"]["modified_on"] = "";
	$placeHolderscustomers["English"]["modified_on"] = "";
	if (count($fieldToolTipscustomers["English"]))
		$tdatacustomers[".isUseToolTips"] = true;
}


	$tdatacustomers[".NCSearch"] = true;



$tdatacustomers[".shortTableName"] = "customers";
$tdatacustomers[".nSecOptions"] = 0;

$tdatacustomers[".mainTableOwnerID"] = "";
$tdatacustomers[".entityType"] = 0;
$tdatacustomers[".connId"] = "karsaaz_pos_at_localhost";


$tdatacustomers[".strOriginalTableName"] = "customers";

	



$tdatacustomers[".showAddInPopup"] = false;

$tdatacustomers[".showEditInPopup"] = false;

$tdatacustomers[".showViewInPopup"] = false;

$tdatacustomers[".listAjax"] = false;
//	temporary
//$tdatacustomers[".listAjax"] = false;

	$tdatacustomers[".audit"] = false;

	$tdatacustomers[".locking"] = false;


$pages = $tdatacustomers[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacustomers[".edit"] = true;
	$tdatacustomers[".afterEditAction"] = 1;
	$tdatacustomers[".closePopupAfterEdit"] = 1;
	$tdatacustomers[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacustomers[".add"] = true;
$tdatacustomers[".afterAddAction"] = 1;
$tdatacustomers[".closePopupAfterAdd"] = 1;
$tdatacustomers[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacustomers[".list"] = true;
}



$tdatacustomers[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacustomers[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacustomers[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacustomers[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacustomers[".printFriendly"] = true;
}



$tdatacustomers[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacustomers[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacustomers[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacustomers[".isUseAjaxSuggest"] = true;

$tdatacustomers[".rowHighlite"] = true;





$tdatacustomers[".ajaxCodeSnippetAdded"] = false;

$tdatacustomers[".buttonsAdded"] = false;

$tdatacustomers[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacustomers[".isUseTimeForSearch"] = false;


$tdatacustomers[".badgeColor"] = "DC143C";


$tdatacustomers[".allSearchFields"] = array();
$tdatacustomers[".filterFields"] = array();
$tdatacustomers[".requiredSearchFields"] = array();

$tdatacustomers[".googleLikeFields"] = array();
$tdatacustomers[".googleLikeFields"][] = "id";
$tdatacustomers[".googleLikeFields"][] = "name";
$tdatacustomers[".googleLikeFields"][] = "phone_number";
$tdatacustomers[".googleLikeFields"][] = "customer_type";
$tdatacustomers[".googleLikeFields"][] = "bring_by";
$tdatacustomers[".googleLikeFields"][] = "added_by";
$tdatacustomers[".googleLikeFields"][] = "added_on";
$tdatacustomers[".googleLikeFields"][] = "modified_by";
$tdatacustomers[".googleLikeFields"][] = "modified_on";



$tdatacustomers[".tableType"] = "list";

$tdatacustomers[".printerPageOrientation"] = 0;
$tdatacustomers[".nPrinterPageScale"] = 100;

$tdatacustomers[".nPrinterSplitRecords"] = 40;

$tdatacustomers[".geocodingEnabled"] = false;










$tdatacustomers[".pageSize"] = 20;

$tdatacustomers[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacustomers[".strOrderBy"] = $tstrOrderBy;

$tdatacustomers[".orderindexes"] = array();


$tdatacustomers[".sqlHead"] = "SELECT id,  	name,  	phone_number,  	customer_type,  	bring_by,  	added_by,  	added_on,  	modified_by,  	modified_on";
$tdatacustomers[".sqlFrom"] = "FROM customers";
$tdatacustomers[".sqlWhereExpr"] = "";
$tdatacustomers[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacustomers[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacustomers[".arrGroupsPerPage"] = $arrGPP;

$tdatacustomers[".highlightSearchResults"] = true;

$tableKeyscustomers = array();
$tableKeyscustomers[] = "id";
$tdatacustomers[".Keys"] = $tableKeyscustomers;


$tdatacustomers[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "customers";
	$fdata["Label"] = GetFieldLabel("customers","id");
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


	$tdatacustomers["id"] = $fdata;
		$tdatacustomers[".searchableFields"][] = "id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "customers";
	$fdata["Label"] = GetFieldLabel("customers","name");
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


	$tdatacustomers["name"] = $fdata;
		$tdatacustomers[".searchableFields"][] = "name";
//	phone_number
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "phone_number";
	$fdata["GoodName"] = "phone_number";
	$fdata["ownerTable"] = "customers";
	$fdata["Label"] = GetFieldLabel("customers","phone_number");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "phone_number";

		$fdata["sourceSingle"] = "phone_number";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "phone_number";

	
	
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


	$tdatacustomers["phone_number"] = $fdata;
		$tdatacustomers[".searchableFields"][] = "phone_number";
//	customer_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "customer_type";
	$fdata["GoodName"] = "customer_type";
	$fdata["ownerTable"] = "customers";
	$fdata["Label"] = GetFieldLabel("customers","customer_type");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "customer_type";

		$fdata["sourceSingle"] = "customer_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "customer_type";

	
	
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


	$tdatacustomers["customer_type"] = $fdata;
		$tdatacustomers[".searchableFields"][] = "customer_type";
//	bring_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "bring_by";
	$fdata["GoodName"] = "bring_by";
	$fdata["ownerTable"] = "customers";
	$fdata["Label"] = GetFieldLabel("customers","bring_by");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "bring_by";

		$fdata["sourceSingle"] = "bring_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "bring_by";

	
	
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


	$tdatacustomers["bring_by"] = $fdata;
		$tdatacustomers[".searchableFields"][] = "bring_by";
//	added_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "added_by";
	$fdata["GoodName"] = "added_by";
	$fdata["ownerTable"] = "customers";
	$fdata["Label"] = GetFieldLabel("customers","added_by");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "added_by";

		$fdata["sourceSingle"] = "added_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "added_by";

	
	
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


	$tdatacustomers["added_by"] = $fdata;
		$tdatacustomers[".searchableFields"][] = "added_by";
//	added_on
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "added_on";
	$fdata["GoodName"] = "added_on";
	$fdata["ownerTable"] = "customers";
	$fdata["Label"] = GetFieldLabel("customers","added_on");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "added_on";

		$fdata["sourceSingle"] = "added_on";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "added_on";

	
	
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


	$tdatacustomers["added_on"] = $fdata;
		$tdatacustomers[".searchableFields"][] = "added_on";
//	modified_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "modified_by";
	$fdata["GoodName"] = "modified_by";
	$fdata["ownerTable"] = "customers";
	$fdata["Label"] = GetFieldLabel("customers","modified_by");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "modified_by";

		$fdata["sourceSingle"] = "modified_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "modified_by";

	
	
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


	$tdatacustomers["modified_by"] = $fdata;
		$tdatacustomers[".searchableFields"][] = "modified_by";
//	modified_on
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "modified_on";
	$fdata["GoodName"] = "modified_on";
	$fdata["ownerTable"] = "customers";
	$fdata["Label"] = GetFieldLabel("customers","modified_on");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "modified_on";

		$fdata["sourceSingle"] = "modified_on";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "modified_on";

	
	
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


	$tdatacustomers["modified_on"] = $fdata;
		$tdatacustomers[".searchableFields"][] = "modified_on";


$tables_data["customers"]=&$tdatacustomers;
$field_labels["customers"] = &$fieldLabelscustomers;
$fieldToolTips["customers"] = &$fieldToolTipscustomers;
$placeHolders["customers"] = &$placeHolderscustomers;
$page_titles["customers"] = &$pageTitlescustomers;


changeTextControlsToDate( "customers" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["customers"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["customers"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_customers()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	name,  	phone_number,  	customer_type,  	bring_by,  	added_by,  	added_on,  	modified_by,  	modified_on";
$proto0["m_strFrom"] = "FROM customers";
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
	"m_strTable" => "customers",
	"m_srcTableName" => "customers"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "customers";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "customers",
	"m_srcTableName" => "customers"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "customers";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "phone_number",
	"m_strTable" => "customers",
	"m_srcTableName" => "customers"
));

$proto10["m_sql"] = "phone_number";
$proto10["m_srcTableName"] = "customers";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "customer_type",
	"m_strTable" => "customers",
	"m_srcTableName" => "customers"
));

$proto12["m_sql"] = "customer_type";
$proto12["m_srcTableName"] = "customers";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "bring_by",
	"m_strTable" => "customers",
	"m_srcTableName" => "customers"
));

$proto14["m_sql"] = "bring_by";
$proto14["m_srcTableName"] = "customers";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "added_by",
	"m_strTable" => "customers",
	"m_srcTableName" => "customers"
));

$proto16["m_sql"] = "added_by";
$proto16["m_srcTableName"] = "customers";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "added_on",
	"m_strTable" => "customers",
	"m_srcTableName" => "customers"
));

$proto18["m_sql"] = "added_on";
$proto18["m_srcTableName"] = "customers";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "modified_by",
	"m_strTable" => "customers",
	"m_srcTableName" => "customers"
));

$proto20["m_sql"] = "modified_by";
$proto20["m_srcTableName"] = "customers";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "modified_on",
	"m_strTable" => "customers",
	"m_srcTableName" => "customers"
));

$proto22["m_sql"] = "modified_on";
$proto22["m_srcTableName"] = "customers";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "customers";
$proto25["m_srcTableName"] = "customers";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id";
$proto25["m_columns"][] = "name";
$proto25["m_columns"][] = "phone_number";
$proto25["m_columns"][] = "customer_type";
$proto25["m_columns"][] = "bring_by";
$proto25["m_columns"][] = "added_by";
$proto25["m_columns"][] = "added_on";
$proto25["m_columns"][] = "modified_by";
$proto25["m_columns"][] = "modified_on";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "customers";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "customers";
$proto26=array();
$proto26["m_sql"] = "";
$proto26["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto26["m_column"]=$obj;
$proto26["m_contained"] = array();
$proto26["m_strCase"] = "";
$proto26["m_havingmode"] = false;
$proto26["m_inBrackets"] = false;
$proto26["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto26);

$proto24["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto24);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="customers";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_customers = createSqlQuery_customers();


	
		;

									

$tdatacustomers[".sqlquery"] = $queryData_customers;



$tdatacustomers[".hasEvents"] = false;

?>