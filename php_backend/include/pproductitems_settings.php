<?php
$tdatapproductitems = array();
$tdatapproductitems[".searchableFields"] = array();
$tdatapproductitems[".ShortName"] = "pproductitems";
$tdatapproductitems[".OwnerID"] = "";
$tdatapproductitems[".OriginalTable"] = "pProductItems";


$tdatapproductitems[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapproductitems[".originalPagesByType"] = $tdatapproductitems[".pagesByType"];
$tdatapproductitems[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapproductitems[".originalPages"] = $tdatapproductitems[".pages"];
$tdatapproductitems[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapproductitems[".originalDefaultPages"] = $tdatapproductitems[".defaultPages"];

//	field labels
$fieldLabelspproductitems = array();
$fieldToolTipspproductitems = array();
$pageTitlespproductitems = array();
$placeHolderspproductitems = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspproductitems["English"] = array();
	$fieldToolTipspproductitems["English"] = array();
	$placeHolderspproductitems["English"] = array();
	$pageTitlespproductitems["English"] = array();
	$fieldLabelspproductitems["English"]["ID"] = "ID";
	$fieldToolTipspproductitems["English"]["ID"] = "";
	$placeHolderspproductitems["English"]["ID"] = "";
	$fieldLabelspproductitems["English"]["Code"] = "Code";
	$fieldToolTipspproductitems["English"]["Code"] = "";
	$placeHolderspproductitems["English"]["Code"] = "";
	$fieldLabelspproductitems["English"]["BUnit"] = "BUnit";
	$fieldToolTipspproductitems["English"]["BUnit"] = "";
	$placeHolderspproductitems["English"]["BUnit"] = "";
	$fieldLabelspproductitems["English"]["OldCode"] = "Old Code";
	$fieldToolTipspproductitems["English"]["OldCode"] = "";
	$placeHolderspproductitems["English"]["OldCode"] = "";
	$fieldLabelspproductitems["English"]["BarCode"] = "Bar Code";
	$fieldToolTipspproductitems["English"]["BarCode"] = "";
	$placeHolderspproductitems["English"]["BarCode"] = "";
	$fieldLabelspproductitems["English"]["ProductGroupCode"] = "Product Group Code";
	$fieldToolTipspproductitems["English"]["ProductGroupCode"] = "";
	$placeHolderspproductitems["English"]["ProductGroupCode"] = "";
	$fieldLabelspproductitems["English"]["UnitCode"] = "Unit Code";
	$fieldToolTipspproductitems["English"]["UnitCode"] = "";
	$placeHolderspproductitems["English"]["UnitCode"] = "";
	$fieldLabelspproductitems["English"]["Name"] = "Name";
	$fieldToolTipspproductitems["English"]["Name"] = "";
	$placeHolderspproductitems["English"]["Name"] = "";
	$fieldLabelspproductitems["English"]["Packing"] = "Packing";
	$fieldToolTipspproductitems["English"]["Packing"] = "";
	$placeHolderspproductitems["English"]["Packing"] = "";
	$fieldLabelspproductitems["English"]["PackingQty"] = "Packing Qty";
	$fieldToolTipspproductitems["English"]["PackingQty"] = "";
	$placeHolderspproductitems["English"]["PackingQty"] = "";
	$fieldLabelspproductitems["English"]["Remarks"] = "Remarks";
	$fieldToolTipspproductitems["English"]["Remarks"] = "";
	$placeHolderspproductitems["English"]["Remarks"] = "";
	$fieldLabelspproductitems["English"]["UserName"] = "User Name";
	$fieldToolTipspproductitems["English"]["UserName"] = "";
	$placeHolderspproductitems["English"]["UserName"] = "";
	$fieldLabelspproductitems["English"]["CreateDate"] = "Create Date";
	$fieldToolTipspproductitems["English"]["CreateDate"] = "";
	$placeHolderspproductitems["English"]["CreateDate"] = "";
	$fieldLabelspproductitems["English"]["CreateTime"] = "Create Time";
	$fieldToolTipspproductitems["English"]["CreateTime"] = "";
	$placeHolderspproductitems["English"]["CreateTime"] = "";
	$fieldLabelspproductitems["English"]["UpdateUser"] = "Update User";
	$fieldToolTipspproductitems["English"]["UpdateUser"] = "";
	$placeHolderspproductitems["English"]["UpdateUser"] = "";
	$fieldLabelspproductitems["English"]["UpdateDate"] = "Update Date";
	$fieldToolTipspproductitems["English"]["UpdateDate"] = "";
	$placeHolderspproductitems["English"]["UpdateDate"] = "";
	$fieldLabelspproductitems["English"]["UpdateTime"] = "Update Time";
	$fieldToolTipspproductitems["English"]["UpdateTime"] = "";
	$placeHolderspproductitems["English"]["UpdateTime"] = "";
	$fieldLabelspproductitems["English"]["Block"] = "Block";
	$fieldToolTipspproductitems["English"]["Block"] = "";
	$placeHolderspproductitems["English"]["Block"] = "";
	$fieldLabelspproductitems["English"]["rate"] = "Rate";
	$fieldToolTipspproductitems["English"]["rate"] = "";
	$placeHolderspproductitems["English"]["rate"] = "";
	$fieldLabelspproductitems["English"]["product_image"] = "Product Image";
	$fieldToolTipspproductitems["English"]["product_image"] = "";
	$placeHolderspproductitems["English"]["product_image"] = "";
	if (count($fieldToolTipspproductitems["English"]))
		$tdatapproductitems[".isUseToolTips"] = true;
}


	$tdatapproductitems[".NCSearch"] = true;



$tdatapproductitems[".shortTableName"] = "pproductitems";
$tdatapproductitems[".nSecOptions"] = 0;

$tdatapproductitems[".mainTableOwnerID"] = "";
$tdatapproductitems[".entityType"] = 0;
$tdatapproductitems[".connId"] = "karsaaz_pos_at_localhost";


$tdatapproductitems[".strOriginalTableName"] = "pProductItems";

	



$tdatapproductitems[".showAddInPopup"] = false;

$tdatapproductitems[".showEditInPopup"] = false;

$tdatapproductitems[".showViewInPopup"] = false;

$tdatapproductitems[".listAjax"] = false;
//	temporary
//$tdatapproductitems[".listAjax"] = false;

	$tdatapproductitems[".audit"] = false;

	$tdatapproductitems[".locking"] = false;


$pages = $tdatapproductitems[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapproductitems[".edit"] = true;
	$tdatapproductitems[".afterEditAction"] = 1;
	$tdatapproductitems[".closePopupAfterEdit"] = 1;
	$tdatapproductitems[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapproductitems[".add"] = true;
$tdatapproductitems[".afterAddAction"] = 1;
$tdatapproductitems[".closePopupAfterAdd"] = 1;
$tdatapproductitems[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapproductitems[".list"] = true;
}



$tdatapproductitems[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapproductitems[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapproductitems[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapproductitems[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapproductitems[".printFriendly"] = true;
}



$tdatapproductitems[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapproductitems[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapproductitems[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapproductitems[".isUseAjaxSuggest"] = true;

$tdatapproductitems[".rowHighlite"] = true;





$tdatapproductitems[".ajaxCodeSnippetAdded"] = false;

$tdatapproductitems[".buttonsAdded"] = false;

$tdatapproductitems[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapproductitems[".isUseTimeForSearch"] = false;


$tdatapproductitems[".badgeColor"] = "008B8B";


$tdatapproductitems[".allSearchFields"] = array();
$tdatapproductitems[".filterFields"] = array();
$tdatapproductitems[".requiredSearchFields"] = array();

$tdatapproductitems[".googleLikeFields"] = array();
$tdatapproductitems[".googleLikeFields"][] = "ID";
$tdatapproductitems[".googleLikeFields"][] = "Code";
$tdatapproductitems[".googleLikeFields"][] = "BUnit";
$tdatapproductitems[".googleLikeFields"][] = "OldCode";
$tdatapproductitems[".googleLikeFields"][] = "BarCode";
$tdatapproductitems[".googleLikeFields"][] = "ProductGroupCode";
$tdatapproductitems[".googleLikeFields"][] = "UnitCode";
$tdatapproductitems[".googleLikeFields"][] = "Name";
$tdatapproductitems[".googleLikeFields"][] = "rate";
$tdatapproductitems[".googleLikeFields"][] = "Packing";
$tdatapproductitems[".googleLikeFields"][] = "PackingQty";
$tdatapproductitems[".googleLikeFields"][] = "Remarks";
$tdatapproductitems[".googleLikeFields"][] = "UserName";
$tdatapproductitems[".googleLikeFields"][] = "CreateDate";
$tdatapproductitems[".googleLikeFields"][] = "CreateTime";
$tdatapproductitems[".googleLikeFields"][] = "UpdateUser";
$tdatapproductitems[".googleLikeFields"][] = "UpdateDate";
$tdatapproductitems[".googleLikeFields"][] = "UpdateTime";
$tdatapproductitems[".googleLikeFields"][] = "Block";
$tdatapproductitems[".googleLikeFields"][] = "product_image";



$tdatapproductitems[".tableType"] = "list";

$tdatapproductitems[".printerPageOrientation"] = 0;
$tdatapproductitems[".nPrinterPageScale"] = 100;

$tdatapproductitems[".nPrinterSplitRecords"] = 40;

$tdatapproductitems[".geocodingEnabled"] = false;










$tdatapproductitems[".pageSize"] = 20;

$tdatapproductitems[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapproductitems[".strOrderBy"] = $tstrOrderBy;

$tdatapproductitems[".orderindexes"] = array();


$tdatapproductitems[".sqlHead"] = "SELECT ID,  	Code,  	BUnit,  	OldCode,  	BarCode,  	ProductGroupCode,  	UnitCode,  	Name,  	rate,  	Packing,  	PackingQty,  	Remarks,  	UserName,  	CreateDate,  	CreateTime,  	UpdateUser,  	UpdateDate,  	UpdateTime,  	Block,  	product_image";
$tdatapproductitems[".sqlFrom"] = "FROM pProductItems";
$tdatapproductitems[".sqlWhereExpr"] = "";
$tdatapproductitems[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapproductitems[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapproductitems[".arrGroupsPerPage"] = $arrGPP;

$tdatapproductitems[".highlightSearchResults"] = true;

$tableKeyspproductitems = array();
$tableKeyspproductitems[] = "ID";
$tdatapproductitems[".Keys"] = $tableKeyspproductitems;


$tdatapproductitems[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "pProductItems";
	$fdata["Label"] = GetFieldLabel("pProductItems","ID");
	$fdata["FieldType"] = 20;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "ID";

		$fdata["sourceSingle"] = "ID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ID";

	
	
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


	$tdatapproductitems["ID"] = $fdata;
		$tdatapproductitems[".searchableFields"][] = "ID";
//	Code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Code";
	$fdata["GoodName"] = "Code";
	$fdata["ownerTable"] = "pProductItems";
	$fdata["Label"] = GetFieldLabel("pProductItems","Code");
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


	$tdatapproductitems["Code"] = $fdata;
		$tdatapproductitems[".searchableFields"][] = "Code";
//	BUnit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "BUnit";
	$fdata["GoodName"] = "BUnit";
	$fdata["ownerTable"] = "pProductItems";
	$fdata["Label"] = GetFieldLabel("pProductItems","BUnit");
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


	$tdatapproductitems["BUnit"] = $fdata;
		$tdatapproductitems[".searchableFields"][] = "BUnit";
//	OldCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "OldCode";
	$fdata["GoodName"] = "OldCode";
	$fdata["ownerTable"] = "pProductItems";
	$fdata["Label"] = GetFieldLabel("pProductItems","OldCode");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "OldCode";

		$fdata["sourceSingle"] = "OldCode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OldCode";

	
	
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


	$tdatapproductitems["OldCode"] = $fdata;
		$tdatapproductitems[".searchableFields"][] = "OldCode";
//	BarCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "BarCode";
	$fdata["GoodName"] = "BarCode";
	$fdata["ownerTable"] = "pProductItems";
	$fdata["Label"] = GetFieldLabel("pProductItems","BarCode");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "BarCode";

		$fdata["sourceSingle"] = "BarCode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BarCode";

	
	
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


	$tdatapproductitems["BarCode"] = $fdata;
		$tdatapproductitems[".searchableFields"][] = "BarCode";
//	ProductGroupCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ProductGroupCode";
	$fdata["GoodName"] = "ProductGroupCode";
	$fdata["ownerTable"] = "pProductItems";
	$fdata["Label"] = GetFieldLabel("pProductItems","ProductGroupCode");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "ProductGroupCode";

		$fdata["sourceSingle"] = "ProductGroupCode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ProductGroupCode";

	
	
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
	$edata["LookupTable"] = "psProductGroup";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "Code";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Name";

	

	
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


	$tdatapproductitems["ProductGroupCode"] = $fdata;
		$tdatapproductitems[".searchableFields"][] = "ProductGroupCode";
//	UnitCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "UnitCode";
	$fdata["GoodName"] = "UnitCode";
	$fdata["ownerTable"] = "pProductItems";
	$fdata["Label"] = GetFieldLabel("pProductItems","UnitCode");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "UnitCode";

		$fdata["sourceSingle"] = "UnitCode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UnitCode";

	
	
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
	$edata["LookupTable"] = "psUnits";
			$edata["autoCompleteFieldsOnEdit"] = 0;
	$edata["autoCompleteFields"] = array();
		$edata["LCType"] = 0;

	
		
	$edata["LinkField"] = "ID";
	$edata["LinkFieldType"] = 0;
	$edata["DisplayField"] = "Name";

	

	
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


	$tdatapproductitems["UnitCode"] = $fdata;
		$tdatapproductitems[".searchableFields"][] = "UnitCode";
//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "pProductItems";
	$fdata["Label"] = GetFieldLabel("pProductItems","Name");
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


	$tdatapproductitems["Name"] = $fdata;
		$tdatapproductitems[".searchableFields"][] = "Name";
//	rate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "rate";
	$fdata["GoodName"] = "rate";
	$fdata["ownerTable"] = "pProductItems";
	$fdata["Label"] = GetFieldLabel("pProductItems","rate");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "rate";

		$fdata["sourceSingle"] = "rate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "rate";

	
	
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


	$tdatapproductitems["rate"] = $fdata;
		$tdatapproductitems[".searchableFields"][] = "rate";
//	Packing
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Packing";
	$fdata["GoodName"] = "Packing";
	$fdata["ownerTable"] = "pProductItems";
	$fdata["Label"] = GetFieldLabel("pProductItems","Packing");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Packing";

		$fdata["sourceSingle"] = "Packing";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Packing";

	
	
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


	$tdatapproductitems["Packing"] = $fdata;
		$tdatapproductitems[".searchableFields"][] = "Packing";
//	PackingQty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "PackingQty";
	$fdata["GoodName"] = "PackingQty";
	$fdata["ownerTable"] = "pProductItems";
	$fdata["Label"] = GetFieldLabel("pProductItems","PackingQty");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "PackingQty";

		$fdata["sourceSingle"] = "PackingQty";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PackingQty";

	
	
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


	$tdatapproductitems["PackingQty"] = $fdata;
		$tdatapproductitems[".searchableFields"][] = "PackingQty";
//	Remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Remarks";
	$fdata["GoodName"] = "Remarks";
	$fdata["ownerTable"] = "pProductItems";
	$fdata["Label"] = GetFieldLabel("pProductItems","Remarks");
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


	$tdatapproductitems["Remarks"] = $fdata;
		$tdatapproductitems[".searchableFields"][] = "Remarks";
//	UserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "UserName";
	$fdata["GoodName"] = "UserName";
	$fdata["ownerTable"] = "pProductItems";
	$fdata["Label"] = GetFieldLabel("pProductItems","UserName");
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


	$tdatapproductitems["UserName"] = $fdata;
		$tdatapproductitems[".searchableFields"][] = "UserName";
//	CreateDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "CreateDate";
	$fdata["GoodName"] = "CreateDate";
	$fdata["ownerTable"] = "pProductItems";
	$fdata["Label"] = GetFieldLabel("pProductItems","CreateDate");
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


	$tdatapproductitems["CreateDate"] = $fdata;
		$tdatapproductitems[".searchableFields"][] = "CreateDate";
//	CreateTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "CreateTime";
	$fdata["GoodName"] = "CreateTime";
	$fdata["ownerTable"] = "pProductItems";
	$fdata["Label"] = GetFieldLabel("pProductItems","CreateTime");
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


	$tdatapproductitems["CreateTime"] = $fdata;
		$tdatapproductitems[".searchableFields"][] = "CreateTime";
//	UpdateUser
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "UpdateUser";
	$fdata["GoodName"] = "UpdateUser";
	$fdata["ownerTable"] = "pProductItems";
	$fdata["Label"] = GetFieldLabel("pProductItems","UpdateUser");
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
	$edata["DisplayField"] = "Code";

	

	
	$edata["LookupOrderBy"] = "UserName";

	
	
	
	

	
	
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


	$tdatapproductitems["UpdateUser"] = $fdata;
		$tdatapproductitems[".searchableFields"][] = "UpdateUser";
//	UpdateDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "UpdateDate";
	$fdata["GoodName"] = "UpdateDate";
	$fdata["ownerTable"] = "pProductItems";
	$fdata["Label"] = GetFieldLabel("pProductItems","UpdateDate");
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


	$tdatapproductitems["UpdateDate"] = $fdata;
		$tdatapproductitems[".searchableFields"][] = "UpdateDate";
//	UpdateTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "UpdateTime";
	$fdata["GoodName"] = "UpdateTime";
	$fdata["ownerTable"] = "pProductItems";
	$fdata["Label"] = GetFieldLabel("pProductItems","UpdateTime");
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


	$tdatapproductitems["UpdateTime"] = $fdata;
		$tdatapproductitems[".searchableFields"][] = "UpdateTime";
//	Block
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Block";
	$fdata["GoodName"] = "Block";
	$fdata["ownerTable"] = "pProductItems";
	$fdata["Label"] = GetFieldLabel("pProductItems","Block");
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


	$tdatapproductitems["Block"] = $fdata;
		$tdatapproductitems[".searchableFields"][] = "Block";
//	product_image
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "product_image";
	$fdata["GoodName"] = "product_image";
	$fdata["ownerTable"] = "pProductItems";
	$fdata["Label"] = GetFieldLabel("pProductItems","product_image");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "product_image";

		$fdata["sourceSingle"] = "product_image";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "product_image";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "File-based Image");

	
	
				$vdata["ShowThumbnail"] = true;
	$vdata["ThumbWidth"] = 200;
	$vdata["ThumbHeight"] = 150;
	$vdata["ImageWidth"] = 600;
	$vdata["ImageHeight"] = 400;

			$vdata["multipleImgMode"] = 1;
	$vdata["maxImages"] = 0;

			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 2;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
	
	
	
	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Document upload");

	
		$edata["weekdayMessage"] = array("message" => "", "messageType" => "Text");
	$edata["weekdays"] = "[]";


	
	



	
	
	
	
			$edata["acceptFileTypes"] = array();
			$edata["acceptFileTypes"][] = strtoupper("jpg");
						$edata["acceptFileTypesHtml"] = ".jpg";
			$edata["acceptFileTypes"][] = strtoupper("png");
						$edata["acceptFileTypesHtml"] .= ",.png";

		$edata["maxNumberOfFiles"] = 1;

		$edata["maxFileSize"] = 2000;

		$edata["maxTotalFilesSize"] = 2000;

	
	
	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
	
	
//	End validation

		$edata["CreateThumbnail"] = true;
	$edata["StrThumbnail"] = "th";
			$edata["ThumbnailSize"] = 50;

				$edata["ResizeImage"] = true;
				$edata["NewSize"] = 500;

	
	
	
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


	$tdatapproductitems["product_image"] = $fdata;
		$tdatapproductitems[".searchableFields"][] = "product_image";


$tables_data["pProductItems"]=&$tdatapproductitems;
$field_labels["pProductItems"] = &$fieldLabelspproductitems;
$fieldToolTips["pProductItems"] = &$fieldToolTipspproductitems;
$placeHolders["pProductItems"] = &$placeHolderspproductitems;
$page_titles["pProductItems"] = &$pageTitlespproductitems;


changeTextControlsToDate( "pProductItems" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["pProductItems"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["pProductItems"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_pproductitems()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	Code,  	BUnit,  	OldCode,  	BarCode,  	ProductGroupCode,  	UnitCode,  	Name,  	rate,  	Packing,  	PackingQty,  	Remarks,  	UserName,  	CreateDate,  	CreateTime,  	UpdateUser,  	UpdateDate,  	UpdateTime,  	Block,  	product_image";
$proto0["m_strFrom"] = "FROM pProductItems";
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
	"m_strName" => "ID",
	"m_strTable" => "pProductItems",
	"m_srcTableName" => "pProductItems"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "pProductItems";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Code",
	"m_strTable" => "pProductItems",
	"m_srcTableName" => "pProductItems"
));

$proto8["m_sql"] = "Code";
$proto8["m_srcTableName"] = "pProductItems";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "BUnit",
	"m_strTable" => "pProductItems",
	"m_srcTableName" => "pProductItems"
));

$proto10["m_sql"] = "BUnit";
$proto10["m_srcTableName"] = "pProductItems";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "OldCode",
	"m_strTable" => "pProductItems",
	"m_srcTableName" => "pProductItems"
));

$proto12["m_sql"] = "OldCode";
$proto12["m_srcTableName"] = "pProductItems";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "BarCode",
	"m_strTable" => "pProductItems",
	"m_srcTableName" => "pProductItems"
));

$proto14["m_sql"] = "BarCode";
$proto14["m_srcTableName"] = "pProductItems";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ProductGroupCode",
	"m_strTable" => "pProductItems",
	"m_srcTableName" => "pProductItems"
));

$proto16["m_sql"] = "ProductGroupCode";
$proto16["m_srcTableName"] = "pProductItems";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "UnitCode",
	"m_strTable" => "pProductItems",
	"m_srcTableName" => "pProductItems"
));

$proto18["m_sql"] = "UnitCode";
$proto18["m_srcTableName"] = "pProductItems";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "pProductItems",
	"m_srcTableName" => "pProductItems"
));

$proto20["m_sql"] = "Name";
$proto20["m_srcTableName"] = "pProductItems";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "rate",
	"m_strTable" => "pProductItems",
	"m_srcTableName" => "pProductItems"
));

$proto22["m_sql"] = "rate";
$proto22["m_srcTableName"] = "pProductItems";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Packing",
	"m_strTable" => "pProductItems",
	"m_srcTableName" => "pProductItems"
));

$proto24["m_sql"] = "Packing";
$proto24["m_srcTableName"] = "pProductItems";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "PackingQty",
	"m_strTable" => "pProductItems",
	"m_srcTableName" => "pProductItems"
));

$proto26["m_sql"] = "PackingQty";
$proto26["m_srcTableName"] = "pProductItems";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Remarks",
	"m_strTable" => "pProductItems",
	"m_srcTableName" => "pProductItems"
));

$proto28["m_sql"] = "Remarks";
$proto28["m_srcTableName"] = "pProductItems";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "UserName",
	"m_strTable" => "pProductItems",
	"m_srcTableName" => "pProductItems"
));

$proto30["m_sql"] = "UserName";
$proto30["m_srcTableName"] = "pProductItems";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "CreateDate",
	"m_strTable" => "pProductItems",
	"m_srcTableName" => "pProductItems"
));

$proto32["m_sql"] = "CreateDate";
$proto32["m_srcTableName"] = "pProductItems";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "CreateTime",
	"m_strTable" => "pProductItems",
	"m_srcTableName" => "pProductItems"
));

$proto34["m_sql"] = "CreateTime";
$proto34["m_srcTableName"] = "pProductItems";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "UpdateUser",
	"m_strTable" => "pProductItems",
	"m_srcTableName" => "pProductItems"
));

$proto36["m_sql"] = "UpdateUser";
$proto36["m_srcTableName"] = "pProductItems";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "UpdateDate",
	"m_strTable" => "pProductItems",
	"m_srcTableName" => "pProductItems"
));

$proto38["m_sql"] = "UpdateDate";
$proto38["m_srcTableName"] = "pProductItems";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "UpdateTime",
	"m_strTable" => "pProductItems",
	"m_srcTableName" => "pProductItems"
));

$proto40["m_sql"] = "UpdateTime";
$proto40["m_srcTableName"] = "pProductItems";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Block",
	"m_strTable" => "pProductItems",
	"m_srcTableName" => "pProductItems"
));

$proto42["m_sql"] = "Block";
$proto42["m_srcTableName"] = "pProductItems";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "product_image",
	"m_strTable" => "pProductItems",
	"m_srcTableName" => "pProductItems"
));

$proto44["m_sql"] = "product_image";
$proto44["m_srcTableName"] = "pProductItems";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto46=array();
$proto46["m_link"] = "SQLL_MAIN";
			$proto47=array();
$proto47["m_strName"] = "pProductItems";
$proto47["m_srcTableName"] = "pProductItems";
$proto47["m_columns"] = array();
$proto47["m_columns"][] = "ID";
$proto47["m_columns"][] = "Code";
$proto47["m_columns"][] = "BUnit";
$proto47["m_columns"][] = "OldCode";
$proto47["m_columns"][] = "BarCode";
$proto47["m_columns"][] = "ProductGroupCode";
$proto47["m_columns"][] = "UnitCode";
$proto47["m_columns"][] = "Name";
$proto47["m_columns"][] = "rate";
$proto47["m_columns"][] = "Packing";
$proto47["m_columns"][] = "PackingQty";
$proto47["m_columns"][] = "Remarks";
$proto47["m_columns"][] = "UserName";
$proto47["m_columns"][] = "CreateDate";
$proto47["m_columns"][] = "CreateTime";
$proto47["m_columns"][] = "UpdateUser";
$proto47["m_columns"][] = "UpdateDate";
$proto47["m_columns"][] = "UpdateTime";
$proto47["m_columns"][] = "Block";
$proto47["m_columns"][] = "product_image";
$obj = new SQLTable($proto47);

$proto46["m_table"] = $obj;
$proto46["m_sql"] = "pProductItems";
$proto46["m_alias"] = "";
$proto46["m_srcTableName"] = "pProductItems";
$proto48=array();
$proto48["m_sql"] = "";
$proto48["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto48["m_column"]=$obj;
$proto48["m_contained"] = array();
$proto48["m_strCase"] = "";
$proto48["m_havingmode"] = false;
$proto48["m_inBrackets"] = false;
$proto48["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto48);

$proto46["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto46);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="pProductItems";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pproductitems = createSqlQuery_pproductitems();


	
		;

																				

$tdatapproductitems[".sqlquery"] = $queryData_pproductitems;



include_once(getabspath("include/pproductitems_events.php"));
$tdatapproductitems[".hasEvents"] = true;

?>