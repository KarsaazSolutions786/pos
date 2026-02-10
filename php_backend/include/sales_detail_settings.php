<?php
$tdatasales_detail = array();
$tdatasales_detail[".searchableFields"] = array();
$tdatasales_detail[".ShortName"] = "sales_detail";
$tdatasales_detail[".OwnerID"] = "";
$tdatasales_detail[".OriginalTable"] = "sales_detail";


$tdatasales_detail[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatasales_detail[".originalPagesByType"] = $tdatasales_detail[".pagesByType"];
$tdatasales_detail[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatasales_detail[".originalPages"] = $tdatasales_detail[".pages"];
$tdatasales_detail[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatasales_detail[".originalDefaultPages"] = $tdatasales_detail[".defaultPages"];

//	field labels
$fieldLabelssales_detail = array();
$fieldToolTipssales_detail = array();
$pageTitlessales_detail = array();
$placeHolderssales_detail = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelssales_detail["English"] = array();
	$fieldToolTipssales_detail["English"] = array();
	$placeHolderssales_detail["English"] = array();
	$pageTitlessales_detail["English"] = array();
	$fieldLabelssales_detail["English"]["id"] = "Id";
	$fieldToolTipssales_detail["English"]["id"] = "";
	$placeHolderssales_detail["English"]["id"] = "";
	$fieldLabelssales_detail["English"]["sales_id"] = "Sales Id";
	$fieldToolTipssales_detail["English"]["sales_id"] = "";
	$placeHolderssales_detail["English"]["sales_id"] = "";
	$fieldLabelssales_detail["English"]["item_id"] = "Item Id";
	$fieldToolTipssales_detail["English"]["item_id"] = "";
	$placeHolderssales_detail["English"]["item_id"] = "";
	$fieldLabelssales_detail["English"]["quantity"] = "Quantity";
	$fieldToolTipssales_detail["English"]["quantity"] = "";
	$placeHolderssales_detail["English"]["quantity"] = "";
	$fieldLabelssales_detail["English"]["total"] = "Total";
	$fieldToolTipssales_detail["English"]["total"] = "";
	$placeHolderssales_detail["English"]["total"] = "";
	$fieldLabelssales_detail["English"]["discount"] = "Discount";
	$fieldToolTipssales_detail["English"]["discount"] = "";
	$placeHolderssales_detail["English"]["discount"] = "";
	$fieldLabelssales_detail["English"]["sub_total"] = "Sub Total";
	$fieldToolTipssales_detail["English"]["sub_total"] = "";
	$placeHolderssales_detail["English"]["sub_total"] = "";
	if (count($fieldToolTipssales_detail["English"]))
		$tdatasales_detail[".isUseToolTips"] = true;
}


	$tdatasales_detail[".NCSearch"] = true;



$tdatasales_detail[".shortTableName"] = "sales_detail";
$tdatasales_detail[".nSecOptions"] = 0;

$tdatasales_detail[".mainTableOwnerID"] = "";
$tdatasales_detail[".entityType"] = 0;
$tdatasales_detail[".connId"] = "karsaaz_pos_at_localhost";


$tdatasales_detail[".strOriginalTableName"] = "sales_detail";

	



$tdatasales_detail[".showAddInPopup"] = false;

$tdatasales_detail[".showEditInPopup"] = false;

$tdatasales_detail[".showViewInPopup"] = false;

$tdatasales_detail[".listAjax"] = false;
//	temporary
//$tdatasales_detail[".listAjax"] = false;

	$tdatasales_detail[".audit"] = false;

	$tdatasales_detail[".locking"] = false;


$pages = $tdatasales_detail[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatasales_detail[".edit"] = true;
	$tdatasales_detail[".afterEditAction"] = 1;
	$tdatasales_detail[".closePopupAfterEdit"] = 1;
	$tdatasales_detail[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatasales_detail[".add"] = true;
$tdatasales_detail[".afterAddAction"] = 1;
$tdatasales_detail[".closePopupAfterAdd"] = 1;
$tdatasales_detail[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatasales_detail[".list"] = true;
}



$tdatasales_detail[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatasales_detail[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatasales_detail[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatasales_detail[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatasales_detail[".printFriendly"] = true;
}



$tdatasales_detail[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatasales_detail[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatasales_detail[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatasales_detail[".isUseAjaxSuggest"] = true;

$tdatasales_detail[".rowHighlite"] = true;





$tdatasales_detail[".ajaxCodeSnippetAdded"] = false;

$tdatasales_detail[".buttonsAdded"] = false;

$tdatasales_detail[".addPageEvents"] = false;

// use timepicker for search panel
$tdatasales_detail[".isUseTimeForSearch"] = false;


$tdatasales_detail[".badgeColor"] = "008B8B";


$tdatasales_detail[".allSearchFields"] = array();
$tdatasales_detail[".filterFields"] = array();
$tdatasales_detail[".requiredSearchFields"] = array();

$tdatasales_detail[".googleLikeFields"] = array();
$tdatasales_detail[".googleLikeFields"][] = "id";
$tdatasales_detail[".googleLikeFields"][] = "sales_id";
$tdatasales_detail[".googleLikeFields"][] = "item_id";
$tdatasales_detail[".googleLikeFields"][] = "quantity";
$tdatasales_detail[".googleLikeFields"][] = "total";
$tdatasales_detail[".googleLikeFields"][] = "discount";
$tdatasales_detail[".googleLikeFields"][] = "sub_total";



$tdatasales_detail[".tableType"] = "list";

$tdatasales_detail[".printerPageOrientation"] = 0;
$tdatasales_detail[".nPrinterPageScale"] = 100;

$tdatasales_detail[".nPrinterSplitRecords"] = 40;

$tdatasales_detail[".geocodingEnabled"] = false;










$tdatasales_detail[".pageSize"] = 20;

$tdatasales_detail[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatasales_detail[".strOrderBy"] = $tstrOrderBy;

$tdatasales_detail[".orderindexes"] = array();


$tdatasales_detail[".sqlHead"] = "SELECT id,  	sales_id,  	item_id,  	quantity,  	total,  	discount,  	sub_total";
$tdatasales_detail[".sqlFrom"] = "FROM sales_detail";
$tdatasales_detail[".sqlWhereExpr"] = "";
$tdatasales_detail[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatasales_detail[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatasales_detail[".arrGroupsPerPage"] = $arrGPP;

$tdatasales_detail[".highlightSearchResults"] = true;

$tableKeyssales_detail = array();
$tableKeyssales_detail[] = "id";
$tdatasales_detail[".Keys"] = $tableKeyssales_detail;


$tdatasales_detail[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "sales_detail";
	$fdata["Label"] = GetFieldLabel("sales_detail","id");
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


	$tdatasales_detail["id"] = $fdata;
		$tdatasales_detail[".searchableFields"][] = "id";
//	sales_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "sales_id";
	$fdata["GoodName"] = "sales_id";
	$fdata["ownerTable"] = "sales_detail";
	$fdata["Label"] = GetFieldLabel("sales_detail","sales_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "sales_id";

		$fdata["sourceSingle"] = "sales_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sales_id";

	
	
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


	$tdatasales_detail["sales_id"] = $fdata;
		$tdatasales_detail[".searchableFields"][] = "sales_id";
//	item_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "item_id";
	$fdata["GoodName"] = "item_id";
	$fdata["ownerTable"] = "sales_detail";
	$fdata["Label"] = GetFieldLabel("sales_detail","item_id");
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


	$tdatasales_detail["item_id"] = $fdata;
		$tdatasales_detail[".searchableFields"][] = "item_id";
//	quantity
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "quantity";
	$fdata["GoodName"] = "quantity";
	$fdata["ownerTable"] = "sales_detail";
	$fdata["Label"] = GetFieldLabel("sales_detail","quantity");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "quantity";

		$fdata["sourceSingle"] = "quantity";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "quantity";

	
	
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


	$tdatasales_detail["quantity"] = $fdata;
		$tdatasales_detail[".searchableFields"][] = "quantity";
//	total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "total";
	$fdata["GoodName"] = "total";
	$fdata["ownerTable"] = "sales_detail";
	$fdata["Label"] = GetFieldLabel("sales_detail","total");
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


	$tdatasales_detail["total"] = $fdata;
		$tdatasales_detail[".searchableFields"][] = "total";
//	discount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "discount";
	$fdata["GoodName"] = "discount";
	$fdata["ownerTable"] = "sales_detail";
	$fdata["Label"] = GetFieldLabel("sales_detail","discount");
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


	$tdatasales_detail["discount"] = $fdata;
		$tdatasales_detail[".searchableFields"][] = "discount";
//	sub_total
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "sub_total";
	$fdata["GoodName"] = "sub_total";
	$fdata["ownerTable"] = "sales_detail";
	$fdata["Label"] = GetFieldLabel("sales_detail","sub_total");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "sub_total";

		$fdata["sourceSingle"] = "sub_total";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "sub_total";

	
	
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


	$tdatasales_detail["sub_total"] = $fdata;
		$tdatasales_detail[".searchableFields"][] = "sub_total";


$tables_data["sales_detail"]=&$tdatasales_detail;
$field_labels["sales_detail"] = &$fieldLabelssales_detail;
$fieldToolTips["sales_detail"] = &$fieldToolTipssales_detail;
$placeHolders["sales_detail"] = &$placeHolderssales_detail;
$page_titles["sales_detail"] = &$pageTitlessales_detail;


changeTextControlsToDate( "sales_detail" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["sales_detail"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["sales_detail"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_sales_detail()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	sales_id,  	item_id,  	quantity,  	total,  	discount,  	sub_total";
$proto0["m_strFrom"] = "FROM sales_detail";
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
	"m_strTable" => "sales_detail",
	"m_srcTableName" => "sales_detail"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "sales_detail";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "sales_id",
	"m_strTable" => "sales_detail",
	"m_srcTableName" => "sales_detail"
));

$proto8["m_sql"] = "sales_id";
$proto8["m_srcTableName"] = "sales_detail";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "item_id",
	"m_strTable" => "sales_detail",
	"m_srcTableName" => "sales_detail"
));

$proto10["m_sql"] = "item_id";
$proto10["m_srcTableName"] = "sales_detail";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "quantity",
	"m_strTable" => "sales_detail",
	"m_srcTableName" => "sales_detail"
));

$proto12["m_sql"] = "quantity";
$proto12["m_srcTableName"] = "sales_detail";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "total",
	"m_strTable" => "sales_detail",
	"m_srcTableName" => "sales_detail"
));

$proto14["m_sql"] = "total";
$proto14["m_srcTableName"] = "sales_detail";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "discount",
	"m_strTable" => "sales_detail",
	"m_srcTableName" => "sales_detail"
));

$proto16["m_sql"] = "discount";
$proto16["m_srcTableName"] = "sales_detail";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "sub_total",
	"m_strTable" => "sales_detail",
	"m_srcTableName" => "sales_detail"
));

$proto18["m_sql"] = "sub_total";
$proto18["m_srcTableName"] = "sales_detail";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto20=array();
$proto20["m_link"] = "SQLL_MAIN";
			$proto21=array();
$proto21["m_strName"] = "sales_detail";
$proto21["m_srcTableName"] = "sales_detail";
$proto21["m_columns"] = array();
$proto21["m_columns"][] = "id";
$proto21["m_columns"][] = "sales_id";
$proto21["m_columns"][] = "item_id";
$proto21["m_columns"][] = "quantity";
$proto21["m_columns"][] = "total";
$proto21["m_columns"][] = "discount";
$proto21["m_columns"][] = "sub_total";
$obj = new SQLTable($proto21);

$proto20["m_table"] = $obj;
$proto20["m_sql"] = "sales_detail";
$proto20["m_alias"] = "";
$proto20["m_srcTableName"] = "sales_detail";
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
$proto0["m_srcTableName"]="sales_detail";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_sales_detail = createSqlQuery_sales_detail();


	
		;

							

$tdatasales_detail[".sqlquery"] = $queryData_sales_detail;



$tdatasales_detail[".hasEvents"] = false;

?>