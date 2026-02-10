<?php
$tdatasales = array();
$tdatasales[".searchableFields"] = array();
$tdatasales[".ShortName"] = "sales";
$tdatasales[".OwnerID"] = "";
$tdatasales[".OriginalTable"] = "sales";


$tdatasales[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatasales[".originalPagesByType"] = $tdatasales[".pagesByType"];
$tdatasales[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatasales[".originalPages"] = $tdatasales[".pages"];
$tdatasales[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatasales[".originalDefaultPages"] = $tdatasales[".defaultPages"];

//	field labels
$fieldLabelssales = array();
$fieldToolTipssales = array();
$pageTitlessales = array();
$placeHolderssales = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssales["English"] = array();
	$fieldToolTipssales["English"] = array();
	$placeHolderssales["English"] = array();
	$pageTitlessales["English"] = array();
	$fieldLabelssales["English"]["id"] = "Id";
	$fieldToolTipssales["English"]["id"] = "";
	$placeHolderssales["English"]["id"] = "";
	$fieldLabelssales["English"]["customer_id"] = "Customer Id";
	$fieldToolTipssales["English"]["customer_id"] = "";
	$placeHolderssales["English"]["customer_id"] = "";
	$fieldLabelssales["English"]["sale_by"] = "Sale By";
	$fieldToolTipssales["English"]["sale_by"] = "";
	$placeHolderssales["English"]["sale_by"] = "";
	$fieldLabelssales["English"]["total"] = "Total";
	$fieldToolTipssales["English"]["total"] = "";
	$placeHolderssales["English"]["total"] = "";
	$fieldLabelssales["English"]["discount"] = "Discount";
	$fieldToolTipssales["English"]["discount"] = "";
	$placeHolderssales["English"]["discount"] = "";
	$fieldLabelssales["English"]["delivery_charges"] = "Delivery Charges";
	$fieldToolTipssales["English"]["delivery_charges"] = "";
	$placeHolderssales["English"]["delivery_charges"] = "";
	$fieldLabelssales["English"]["grand_total"] = "Grand Total";
	$fieldToolTipssales["English"]["grand_total"] = "";
	$placeHolderssales["English"]["grand_total"] = "";
	$fieldLabelssales["English"]["added_by"] = "Added By";
	$fieldToolTipssales["English"]["added_by"] = "";
	$placeHolderssales["English"]["added_by"] = "";
	$fieldLabelssales["English"]["added_on"] = "Added On";
	$fieldToolTipssales["English"]["added_on"] = "";
	$placeHolderssales["English"]["added_on"] = "";
	$fieldLabelssales["English"]["modified_by"] = "Modified By";
	$fieldToolTipssales["English"]["modified_by"] = "";
	$placeHolderssales["English"]["modified_by"] = "";
	$fieldLabelssales["English"]["modified_on"] = "Modified On";
	$fieldToolTipssales["English"]["modified_on"] = "";
	$placeHolderssales["English"]["modified_on"] = "";
	if (count($fieldToolTipssales["English"]))
		$tdatasales[".isUseToolTips"] = true;
}


	$tdatasales[".NCSearch"] = true;



$tdatasales[".shortTableName"] = "sales";
$tdatasales[".nSecOptions"] = 0;

$tdatasales[".mainTableOwnerID"] = "";
$tdatasales[".entityType"] = 0;
$tdatasales[".connId"] = "karsaaz_pos_at_localhost";


$tdatasales[".strOriginalTableName"] = "sales";

	



$tdatasales[".showAddInPopup"] = false;

$tdatasales[".showEditInPopup"] = false;

$tdatasales[".showViewInPopup"] = false;

$tdatasales[".listAjax"] = false;
//	temporary
//$tdatasales[".listAjax"] = false;

	$tdatasales[".audit"] = false;

	$tdatasales[".locking"] = false;


$pages = $tdatasales[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasales[".edit"] = true;
	$tdatasales[".afterEditAction"] = 1;
	$tdatasales[".closePopupAfterEdit"] = 1;
	$tdatasales[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasales[".add"] = true;
$tdatasales[".afterAddAction"] = 1;
$tdatasales[".closePopupAfterAdd"] = 1;
$tdatasales[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasales[".list"] = true;
}



$tdatasales[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasales[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasales[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasales[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasales[".printFriendly"] = true;
}



$tdatasales[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasales[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasales[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasales[".isUseAjaxSuggest"] = true;

$tdatasales[".rowHighlite"] = true;





$tdatasales[".ajaxCodeSnippetAdded"] = false;

$tdatasales[".buttonsAdded"] = false;

$tdatasales[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasales[".isUseTimeForSearch"] = false;


$tdatasales[".badgeColor"] = "3CB371";


$tdatasales[".allSearchFields"] = array();
$tdatasales[".filterFields"] = array();
$tdatasales[".requiredSearchFields"] = array();

$tdatasales[".googleLikeFields"] = array();
$tdatasales[".googleLikeFields"][] = "id";
$tdatasales[".googleLikeFields"][] = "customer_id";
$tdatasales[".googleLikeFields"][] = "sale_by";
$tdatasales[".googleLikeFields"][] = "total";
$tdatasales[".googleLikeFields"][] = "discount";
$tdatasales[".googleLikeFields"][] = "delivery_charges";
$tdatasales[".googleLikeFields"][] = "grand_total";
$tdatasales[".googleLikeFields"][] = "added_by";
$tdatasales[".googleLikeFields"][] = "added_on";
$tdatasales[".googleLikeFields"][] = "modified_by";
$tdatasales[".googleLikeFields"][] = "modified_on";



$tdatasales[".tableType"] = "list";

$tdatasales[".printerPageOrientation"] = 0;
$tdatasales[".nPrinterPageScale"] = 100;

$tdatasales[".nPrinterSplitRecords"] = 40;

$tdatasales[".geocodingEnabled"] = false;










$tdatasales[".pageSize"] = 20;

$tdatasales[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasales[".strOrderBy"] = $tstrOrderBy;

$tdatasales[".orderindexes"] = array();


$tdatasales[".sqlHead"] = "SELECT id,  	customer_id,  	sale_by,  	total,  	discount,  	delivery_charges,  	grand_total,  	added_by,  	added_on,  	modified_by,  	modified_on";
$tdatasales[".sqlFrom"] = "FROM sales";
$tdatasales[".sqlWhereExpr"] = "";
$tdatasales[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasales[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasales[".arrGroupsPerPage"] = $arrGPP;

$tdatasales[".highlightSearchResults"] = true;

$tableKeyssales = array();
$tableKeyssales[] = "id";
$tdatasales[".Keys"] = $tableKeyssales;


$tdatasales[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "sales";
	$fdata["Label"] = GetFieldLabel("sales","id");
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


	$tdatasales["id"] = $fdata;
		$tdatasales[".searchableFields"][] = "id";
//	customer_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "customer_id";
	$fdata["GoodName"] = "customer_id";
	$fdata["ownerTable"] = "sales";
	$fdata["Label"] = GetFieldLabel("sales","customer_id");
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


	$tdatasales["customer_id"] = $fdata;
		$tdatasales[".searchableFields"][] = "customer_id";
//	sale_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "sale_by";
	$fdata["GoodName"] = "sale_by";
	$fdata["ownerTable"] = "sales";
	$fdata["Label"] = GetFieldLabel("sales","sale_by");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "sale_by";

		$fdata["sourceSingle"] = "sale_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sale_by";

	
	
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


	$tdatasales["sale_by"] = $fdata;
		$tdatasales[".searchableFields"][] = "sale_by";
//	total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "total";
	$fdata["GoodName"] = "total";
	$fdata["ownerTable"] = "sales";
	$fdata["Label"] = GetFieldLabel("sales","total");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "total";

		$fdata["sourceSingle"] = "total";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "total";

	
	
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


	$tdatasales["total"] = $fdata;
		$tdatasales[".searchableFields"][] = "total";
//	discount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "discount";
	$fdata["GoodName"] = "discount";
	$fdata["ownerTable"] = "sales";
	$fdata["Label"] = GetFieldLabel("sales","discount");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "discount";

		$fdata["sourceSingle"] = "discount";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "discount";

	
	
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


	$tdatasales["discount"] = $fdata;
		$tdatasales[".searchableFields"][] = "discount";
//	delivery_charges
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "delivery_charges";
	$fdata["GoodName"] = "delivery_charges";
	$fdata["ownerTable"] = "sales";
	$fdata["Label"] = GetFieldLabel("sales","delivery_charges");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "delivery_charges";

		$fdata["sourceSingle"] = "delivery_charges";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "delivery_charges";

	
	
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


	$tdatasales["delivery_charges"] = $fdata;
		$tdatasales[".searchableFields"][] = "delivery_charges";
//	grand_total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "grand_total";
	$fdata["GoodName"] = "grand_total";
	$fdata["ownerTable"] = "sales";
	$fdata["Label"] = GetFieldLabel("sales","grand_total");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "grand_total";

		$fdata["sourceSingle"] = "grand_total";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "grand_total";

	
	
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


	$tdatasales["grand_total"] = $fdata;
		$tdatasales[".searchableFields"][] = "grand_total";
//	added_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "added_by";
	$fdata["GoodName"] = "added_by";
	$fdata["ownerTable"] = "sales";
	$fdata["Label"] = GetFieldLabel("sales","added_by");
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


	$tdatasales["added_by"] = $fdata;
		$tdatasales[".searchableFields"][] = "added_by";
//	added_on
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "added_on";
	$fdata["GoodName"] = "added_on";
	$fdata["ownerTable"] = "sales";
	$fdata["Label"] = GetFieldLabel("sales","added_on");
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


	$tdatasales["added_on"] = $fdata;
		$tdatasales[".searchableFields"][] = "added_on";
//	modified_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "modified_by";
	$fdata["GoodName"] = "modified_by";
	$fdata["ownerTable"] = "sales";
	$fdata["Label"] = GetFieldLabel("sales","modified_by");
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


	$tdatasales["modified_by"] = $fdata;
		$tdatasales[".searchableFields"][] = "modified_by";
//	modified_on
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "modified_on";
	$fdata["GoodName"] = "modified_on";
	$fdata["ownerTable"] = "sales";
	$fdata["Label"] = GetFieldLabel("sales","modified_on");
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


	$tdatasales["modified_on"] = $fdata;
		$tdatasales[".searchableFields"][] = "modified_on";


$tables_data["sales"]=&$tdatasales;
$field_labels["sales"] = &$fieldLabelssales;
$fieldToolTips["sales"] = &$fieldToolTipssales;
$placeHolders["sales"] = &$placeHolderssales;
$page_titles["sales"] = &$pageTitlessales;


changeTextControlsToDate( "sales" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["sales"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["sales"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_sales()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	customer_id,  	sale_by,  	total,  	discount,  	delivery_charges,  	grand_total,  	added_by,  	added_on,  	modified_by,  	modified_on";
$proto0["m_strFrom"] = "FROM sales";
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
	"m_strTable" => "sales",
	"m_srcTableName" => "sales"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "sales";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "customer_id",
	"m_strTable" => "sales",
	"m_srcTableName" => "sales"
));

$proto8["m_sql"] = "customer_id";
$proto8["m_srcTableName"] = "sales";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "sale_by",
	"m_strTable" => "sales",
	"m_srcTableName" => "sales"
));

$proto10["m_sql"] = "sale_by";
$proto10["m_srcTableName"] = "sales";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "total",
	"m_strTable" => "sales",
	"m_srcTableName" => "sales"
));

$proto12["m_sql"] = "total";
$proto12["m_srcTableName"] = "sales";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "discount",
	"m_strTable" => "sales",
	"m_srcTableName" => "sales"
));

$proto14["m_sql"] = "discount";
$proto14["m_srcTableName"] = "sales";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "delivery_charges",
	"m_strTable" => "sales",
	"m_srcTableName" => "sales"
));

$proto16["m_sql"] = "delivery_charges";
$proto16["m_srcTableName"] = "sales";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "grand_total",
	"m_strTable" => "sales",
	"m_srcTableName" => "sales"
));

$proto18["m_sql"] = "grand_total";
$proto18["m_srcTableName"] = "sales";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "added_by",
	"m_strTable" => "sales",
	"m_srcTableName" => "sales"
));

$proto20["m_sql"] = "added_by";
$proto20["m_srcTableName"] = "sales";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "added_on",
	"m_strTable" => "sales",
	"m_srcTableName" => "sales"
));

$proto22["m_sql"] = "added_on";
$proto22["m_srcTableName"] = "sales";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "modified_by",
	"m_strTable" => "sales",
	"m_srcTableName" => "sales"
));

$proto24["m_sql"] = "modified_by";
$proto24["m_srcTableName"] = "sales";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "modified_on",
	"m_strTable" => "sales",
	"m_srcTableName" => "sales"
));

$proto26["m_sql"] = "modified_on";
$proto26["m_srcTableName"] = "sales";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto28=array();
$proto28["m_link"] = "SQLL_MAIN";
			$proto29=array();
$proto29["m_strName"] = "sales";
$proto29["m_srcTableName"] = "sales";
$proto29["m_columns"] = array();
$proto29["m_columns"][] = "id";
$proto29["m_columns"][] = "customer_id";
$proto29["m_columns"][] = "sale_by";
$proto29["m_columns"][] = "total";
$proto29["m_columns"][] = "discount";
$proto29["m_columns"][] = "delivery_charges";
$proto29["m_columns"][] = "grand_total";
$proto29["m_columns"][] = "added_by";
$proto29["m_columns"][] = "added_on";
$proto29["m_columns"][] = "modified_by";
$proto29["m_columns"][] = "modified_on";
$obj = new SQLTable($proto29);

$proto28["m_table"] = $obj;
$proto28["m_sql"] = "sales";
$proto28["m_alias"] = "";
$proto28["m_srcTableName"] = "sales";
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
$proto0["m_srcTableName"]="sales";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sales = createSqlQuery_sales();


	
		;

											

$tdatasales[".sqlquery"] = $queryData_sales;



$tdatasales[".hasEvents"] = false;

?>