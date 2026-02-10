<?php
$tdatacustomers_product_price = array();
$tdatacustomers_product_price[".searchableFields"] = array();
$tdatacustomers_product_price[".ShortName"] = "customers_product_price";
$tdatacustomers_product_price[".OwnerID"] = "";
$tdatacustomers_product_price[".OriginalTable"] = "customers_product_price";


$tdatacustomers_product_price[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacustomers_product_price[".originalPagesByType"] = $tdatacustomers_product_price[".pagesByType"];
$tdatacustomers_product_price[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacustomers_product_price[".originalPages"] = $tdatacustomers_product_price[".pages"];
$tdatacustomers_product_price[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacustomers_product_price[".originalDefaultPages"] = $tdatacustomers_product_price[".defaultPages"];

//	field labels
$fieldLabelscustomers_product_price = array();
$fieldToolTipscustomers_product_price = array();
$pageTitlescustomers_product_price = array();
$placeHolderscustomers_product_price = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscustomers_product_price["English"] = array();
	$fieldToolTipscustomers_product_price["English"] = array();
	$placeHolderscustomers_product_price["English"] = array();
	$pageTitlescustomers_product_price["English"] = array();
	$fieldLabelscustomers_product_price["English"]["id"] = "Id";
	$fieldToolTipscustomers_product_price["English"]["id"] = "";
	$placeHolderscustomers_product_price["English"]["id"] = "";
	$fieldLabelscustomers_product_price["English"]["customer_id"] = "Customer Id";
	$fieldToolTipscustomers_product_price["English"]["customer_id"] = "";
	$placeHolderscustomers_product_price["English"]["customer_id"] = "";
	$fieldLabelscustomers_product_price["English"]["item_id"] = "Item Id";
	$fieldToolTipscustomers_product_price["English"]["item_id"] = "";
	$placeHolderscustomers_product_price["English"]["item_id"] = "";
	$fieldLabelscustomers_product_price["English"]["price"] = "Price";
	$fieldToolTipscustomers_product_price["English"]["price"] = "";
	$placeHolderscustomers_product_price["English"]["price"] = "";
	$fieldLabelscustomers_product_price["English"]["delivery_price"] = "Delivery Price";
	$fieldToolTipscustomers_product_price["English"]["delivery_price"] = "";
	$placeHolderscustomers_product_price["English"]["delivery_price"] = "";
	$fieldLabelscustomers_product_price["English"]["is_active"] = "Is Active";
	$fieldToolTipscustomers_product_price["English"]["is_active"] = "";
	$placeHolderscustomers_product_price["English"]["is_active"] = "";
	$fieldLabelscustomers_product_price["English"]["added_by"] = "Added By";
	$fieldToolTipscustomers_product_price["English"]["added_by"] = "";
	$placeHolderscustomers_product_price["English"]["added_by"] = "";
	$fieldLabelscustomers_product_price["English"]["added_on"] = "Added On";
	$fieldToolTipscustomers_product_price["English"]["added_on"] = "";
	$placeHolderscustomers_product_price["English"]["added_on"] = "";
	$fieldLabelscustomers_product_price["English"]["modified_by"] = "Modified By";
	$fieldToolTipscustomers_product_price["English"]["modified_by"] = "";
	$placeHolderscustomers_product_price["English"]["modified_by"] = "";
	$fieldLabelscustomers_product_price["English"]["modified_on"] = "Modified On";
	$fieldToolTipscustomers_product_price["English"]["modified_on"] = "";
	$placeHolderscustomers_product_price["English"]["modified_on"] = "";
	$fieldLabelscustomers_product_price["English"]["comission"] = "Comission";
	$fieldToolTipscustomers_product_price["English"]["comission"] = "";
	$placeHolderscustomers_product_price["English"]["comission"] = "";
	if (count($fieldToolTipscustomers_product_price["English"]))
		$tdatacustomers_product_price[".isUseToolTips"] = true;
}


	$tdatacustomers_product_price[".NCSearch"] = true;



$tdatacustomers_product_price[".shortTableName"] = "customers_product_price";
$tdatacustomers_product_price[".nSecOptions"] = 0;

$tdatacustomers_product_price[".mainTableOwnerID"] = "";
$tdatacustomers_product_price[".entityType"] = 0;
$tdatacustomers_product_price[".connId"] = "karsaaz_pos_at_localhost";


$tdatacustomers_product_price[".strOriginalTableName"] = "customers_product_price";

	



$tdatacustomers_product_price[".showAddInPopup"] = false;

$tdatacustomers_product_price[".showEditInPopup"] = false;

$tdatacustomers_product_price[".showViewInPopup"] = false;

$tdatacustomers_product_price[".listAjax"] = false;
//	temporary
//$tdatacustomers_product_price[".listAjax"] = false;

	$tdatacustomers_product_price[".audit"] = false;

	$tdatacustomers_product_price[".locking"] = false;


$pages = $tdatacustomers_product_price[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacustomers_product_price[".edit"] = true;
	$tdatacustomers_product_price[".afterEditAction"] = 1;
	$tdatacustomers_product_price[".closePopupAfterEdit"] = 1;
	$tdatacustomers_product_price[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacustomers_product_price[".add"] = true;
$tdatacustomers_product_price[".afterAddAction"] = 1;
$tdatacustomers_product_price[".closePopupAfterAdd"] = 1;
$tdatacustomers_product_price[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacustomers_product_price[".list"] = true;
}



$tdatacustomers_product_price[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacustomers_product_price[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacustomers_product_price[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacustomers_product_price[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacustomers_product_price[".printFriendly"] = true;
}



$tdatacustomers_product_price[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacustomers_product_price[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacustomers_product_price[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacustomers_product_price[".isUseAjaxSuggest"] = true;

$tdatacustomers_product_price[".rowHighlite"] = true;





$tdatacustomers_product_price[".ajaxCodeSnippetAdded"] = false;

$tdatacustomers_product_price[".buttonsAdded"] = false;

$tdatacustomers_product_price[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacustomers_product_price[".isUseTimeForSearch"] = false;


$tdatacustomers_product_price[".badgeColor"] = "CD5C5C";


$tdatacustomers_product_price[".allSearchFields"] = array();
$tdatacustomers_product_price[".filterFields"] = array();
$tdatacustomers_product_price[".requiredSearchFields"] = array();

$tdatacustomers_product_price[".googleLikeFields"] = array();
$tdatacustomers_product_price[".googleLikeFields"][] = "id";
$tdatacustomers_product_price[".googleLikeFields"][] = "customer_id";
$tdatacustomers_product_price[".googleLikeFields"][] = "item_id";
$tdatacustomers_product_price[".googleLikeFields"][] = "price";
$tdatacustomers_product_price[".googleLikeFields"][] = "delivery_price";
$tdatacustomers_product_price[".googleLikeFields"][] = "is_active";
$tdatacustomers_product_price[".googleLikeFields"][] = "added_by";
$tdatacustomers_product_price[".googleLikeFields"][] = "added_on";
$tdatacustomers_product_price[".googleLikeFields"][] = "modified_by";
$tdatacustomers_product_price[".googleLikeFields"][] = "modified_on";
$tdatacustomers_product_price[".googleLikeFields"][] = "comission";



$tdatacustomers_product_price[".tableType"] = "list";

$tdatacustomers_product_price[".printerPageOrientation"] = 0;
$tdatacustomers_product_price[".nPrinterPageScale"] = 100;

$tdatacustomers_product_price[".nPrinterSplitRecords"] = 40;

$tdatacustomers_product_price[".geocodingEnabled"] = false;










$tdatacustomers_product_price[".pageSize"] = 20;

$tdatacustomers_product_price[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacustomers_product_price[".strOrderBy"] = $tstrOrderBy;

$tdatacustomers_product_price[".orderindexes"] = array();


$tdatacustomers_product_price[".sqlHead"] = "SELECT id,  	customer_id,  	item_id,  	price,  	delivery_price,  	is_active,  	added_by,  	added_on,  	modified_by,  	modified_on,  	comission";
$tdatacustomers_product_price[".sqlFrom"] = "FROM customers_product_price";
$tdatacustomers_product_price[".sqlWhereExpr"] = "";
$tdatacustomers_product_price[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacustomers_product_price[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacustomers_product_price[".arrGroupsPerPage"] = $arrGPP;

$tdatacustomers_product_price[".highlightSearchResults"] = true;

$tableKeyscustomers_product_price = array();
$tableKeyscustomers_product_price[] = "id";
$tdatacustomers_product_price[".Keys"] = $tableKeyscustomers_product_price;


$tdatacustomers_product_price[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "customers_product_price";
	$fdata["Label"] = GetFieldLabel("customers_product_price","id");
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


	$tdatacustomers_product_price["id"] = $fdata;
		$tdatacustomers_product_price[".searchableFields"][] = "id";
//	customer_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "customer_id";
	$fdata["GoodName"] = "customer_id";
	$fdata["ownerTable"] = "customers_product_price";
	$fdata["Label"] = GetFieldLabel("customers_product_price","customer_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "customer_id";

		$fdata["sourceSingle"] = "customer_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "customer_id";

	
	
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


	$tdatacustomers_product_price["customer_id"] = $fdata;
		$tdatacustomers_product_price[".searchableFields"][] = "customer_id";
//	item_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "item_id";
	$fdata["GoodName"] = "item_id";
	$fdata["ownerTable"] = "customers_product_price";
	$fdata["Label"] = GetFieldLabel("customers_product_price","item_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "item_id";

		$fdata["sourceSingle"] = "item_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "item_id";

	
	
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


	$tdatacustomers_product_price["item_id"] = $fdata;
		$tdatacustomers_product_price[".searchableFields"][] = "item_id";
//	price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "price";
	$fdata["GoodName"] = "price";
	$fdata["ownerTable"] = "customers_product_price";
	$fdata["Label"] = GetFieldLabel("customers_product_price","price");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "price";

		$fdata["sourceSingle"] = "price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "price";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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


	$tdatacustomers_product_price["price"] = $fdata;
		$tdatacustomers_product_price[".searchableFields"][] = "price";
//	delivery_price
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "delivery_price";
	$fdata["GoodName"] = "delivery_price";
	$fdata["ownerTable"] = "customers_product_price";
	$fdata["Label"] = GetFieldLabel("customers_product_price","delivery_price");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "delivery_price";

		$fdata["sourceSingle"] = "delivery_price";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "delivery_price";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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


	$tdatacustomers_product_price["delivery_price"] = $fdata;
		$tdatacustomers_product_price[".searchableFields"][] = "delivery_price";
//	is_active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "is_active";
	$fdata["GoodName"] = "is_active";
	$fdata["ownerTable"] = "customers_product_price";
	$fdata["Label"] = GetFieldLabel("customers_product_price","is_active");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "is_active";

		$fdata["sourceSingle"] = "is_active";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_active";

	
	
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


	$tdatacustomers_product_price["is_active"] = $fdata;
		$tdatacustomers_product_price[".searchableFields"][] = "is_active";
//	added_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "added_by";
	$fdata["GoodName"] = "added_by";
	$fdata["ownerTable"] = "customers_product_price";
	$fdata["Label"] = GetFieldLabel("customers_product_price","added_by");
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


	$tdatacustomers_product_price["added_by"] = $fdata;
		$tdatacustomers_product_price[".searchableFields"][] = "added_by";
//	added_on
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "added_on";
	$fdata["GoodName"] = "added_on";
	$fdata["ownerTable"] = "customers_product_price";
	$fdata["Label"] = GetFieldLabel("customers_product_price","added_on");
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


	$tdatacustomers_product_price["added_on"] = $fdata;
		$tdatacustomers_product_price[".searchableFields"][] = "added_on";
//	modified_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "modified_by";
	$fdata["GoodName"] = "modified_by";
	$fdata["ownerTable"] = "customers_product_price";
	$fdata["Label"] = GetFieldLabel("customers_product_price","modified_by");
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


	$tdatacustomers_product_price["modified_by"] = $fdata;
		$tdatacustomers_product_price[".searchableFields"][] = "modified_by";
//	modified_on
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "modified_on";
	$fdata["GoodName"] = "modified_on";
	$fdata["ownerTable"] = "customers_product_price";
	$fdata["Label"] = GetFieldLabel("customers_product_price","modified_on");
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


	$tdatacustomers_product_price["modified_on"] = $fdata;
		$tdatacustomers_product_price[".searchableFields"][] = "modified_on";
//	comission
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "comission";
	$fdata["GoodName"] = "comission";
	$fdata["ownerTable"] = "customers_product_price";
	$fdata["Label"] = GetFieldLabel("customers_product_price","comission");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "comission";

		$fdata["sourceSingle"] = "comission";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "comission";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 2;

	
	
	
	
	
	
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


	$tdatacustomers_product_price["comission"] = $fdata;
		$tdatacustomers_product_price[".searchableFields"][] = "comission";


$tables_data["customers_product_price"]=&$tdatacustomers_product_price;
$field_labels["customers_product_price"] = &$fieldLabelscustomers_product_price;
$fieldToolTips["customers_product_price"] = &$fieldToolTipscustomers_product_price;
$placeHolders["customers_product_price"] = &$placeHolderscustomers_product_price;
$page_titles["customers_product_price"] = &$pageTitlescustomers_product_price;


changeTextControlsToDate( "customers_product_price" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["customers_product_price"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["customers_product_price"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_customers_product_price()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	customer_id,  	item_id,  	price,  	delivery_price,  	is_active,  	added_by,  	added_on,  	modified_by,  	modified_on,  	comission";
$proto0["m_strFrom"] = "FROM customers_product_price";
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
	"m_strTable" => "customers_product_price",
	"m_srcTableName" => "customers_product_price"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "customers_product_price";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "customer_id",
	"m_strTable" => "customers_product_price",
	"m_srcTableName" => "customers_product_price"
));

$proto8["m_sql"] = "customer_id";
$proto8["m_srcTableName"] = "customers_product_price";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "item_id",
	"m_strTable" => "customers_product_price",
	"m_srcTableName" => "customers_product_price"
));

$proto10["m_sql"] = "item_id";
$proto10["m_srcTableName"] = "customers_product_price";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "price",
	"m_strTable" => "customers_product_price",
	"m_srcTableName" => "customers_product_price"
));

$proto12["m_sql"] = "price";
$proto12["m_srcTableName"] = "customers_product_price";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "delivery_price",
	"m_strTable" => "customers_product_price",
	"m_srcTableName" => "customers_product_price"
));

$proto14["m_sql"] = "delivery_price";
$proto14["m_srcTableName"] = "customers_product_price";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "is_active",
	"m_strTable" => "customers_product_price",
	"m_srcTableName" => "customers_product_price"
));

$proto16["m_sql"] = "is_active";
$proto16["m_srcTableName"] = "customers_product_price";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "added_by",
	"m_strTable" => "customers_product_price",
	"m_srcTableName" => "customers_product_price"
));

$proto18["m_sql"] = "added_by";
$proto18["m_srcTableName"] = "customers_product_price";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "added_on",
	"m_strTable" => "customers_product_price",
	"m_srcTableName" => "customers_product_price"
));

$proto20["m_sql"] = "added_on";
$proto20["m_srcTableName"] = "customers_product_price";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "modified_by",
	"m_strTable" => "customers_product_price",
	"m_srcTableName" => "customers_product_price"
));

$proto22["m_sql"] = "modified_by";
$proto22["m_srcTableName"] = "customers_product_price";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "modified_on",
	"m_strTable" => "customers_product_price",
	"m_srcTableName" => "customers_product_price"
));

$proto24["m_sql"] = "modified_on";
$proto24["m_srcTableName"] = "customers_product_price";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "comission",
	"m_strTable" => "customers_product_price",
	"m_srcTableName" => "customers_product_price"
));

$proto26["m_sql"] = "comission";
$proto26["m_srcTableName"] = "customers_product_price";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "customers_product_price";
$proto29["m_srcTableName"] = "customers_product_price";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "id";
$proto29["m_columns"][] = "customer_id";
$proto29["m_columns"][] = "item_id";
$proto29["m_columns"][] = "price";
$proto29["m_columns"][] = "delivery_price";
$proto29["m_columns"][] = "is_active";
$proto29["m_columns"][] = "added_by";
$proto29["m_columns"][] = "added_on";
$proto29["m_columns"][] = "modified_by";
$proto29["m_columns"][] = "modified_on";
$proto29["m_columns"][] = "comission";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "customers_product_price";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "customers_product_price";
$proto30=array();
$proto30["m_sql"] = "";
$proto30["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto30["m_column"]=$obj;
$proto30["m_contained"] = array();
$proto30["m_strCase"] = "";
$proto30["m_havingmode"] = false;
$proto30["m_inBrackets"] = false;
$proto30["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto30);

$proto28["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto28);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="customers_product_price";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_customers_product_price = createSqlQuery_customers_product_price();


	
		;

											

$tdatacustomers_product_price[".sqlquery"] = $queryData_customers_product_price;



$tdatacustomers_product_price[".hasEvents"] = false;

?>