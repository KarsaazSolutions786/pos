<?php
$tdatagltd = array();
$tdatagltd[".searchableFields"] = array();
$tdatagltd[".ShortName"] = "gltd";
$tdatagltd[".OwnerID"] = "";
$tdatagltd[".OriginalTable"] = "GLTD";


$tdatagltd[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatagltd[".originalPagesByType"] = $tdatagltd[".pagesByType"];
$tdatagltd[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatagltd[".originalPages"] = $tdatagltd[".pages"];
$tdatagltd[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatagltd[".originalDefaultPages"] = $tdatagltd[".defaultPages"];

//	field labels
$fieldLabelsgltd = array();
$fieldToolTipsgltd = array();
$pageTitlesgltd = array();
$placeHoldersgltd = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsgltd["English"] = array();
	$fieldToolTipsgltd["English"] = array();
	$placeHoldersgltd["English"] = array();
	$pageTitlesgltd["English"] = array();
	$fieldLabelsgltd["English"]["Code"] = "Code";
	$fieldToolTipsgltd["English"]["Code"] = "";
	$placeHoldersgltd["English"]["Code"] = "";
	$fieldLabelsgltd["English"]["CodeD"] = "Code D";
	$fieldToolTipsgltd["English"]["CodeD"] = "";
	$placeHoldersgltd["English"]["CodeD"] = "";
	$fieldLabelsgltd["English"]["BookCode"] = "Book Code";
	$fieldToolTipsgltd["English"]["BookCode"] = "";
	$placeHoldersgltd["English"]["BookCode"] = "";
	$fieldLabelsgltd["English"]["BookID"] = "Book ID";
	$fieldToolTipsgltd["English"]["BookID"] = "";
	$placeHoldersgltd["English"]["BookID"] = "";
	$fieldLabelsgltd["English"]["VirtualCode"] = "Virtual Code";
	$fieldToolTipsgltd["English"]["VirtualCode"] = "";
	$placeHoldersgltd["English"]["VirtualCode"] = "";
	$fieldLabelsgltd["English"]["Status"] = "Status";
	$fieldToolTipsgltd["English"]["Status"] = "";
	$placeHoldersgltd["English"]["Status"] = "";
	$fieldLabelsgltd["English"]["TDate"] = "TDate";
	$fieldToolTipsgltd["English"]["TDate"] = "";
	$placeHoldersgltd["English"]["TDate"] = "";
	$fieldLabelsgltd["English"]["BUnit"] = "BUnit";
	$fieldToolTipsgltd["English"]["BUnit"] = "";
	$placeHoldersgltd["English"]["BUnit"] = "";
	$fieldLabelsgltd["English"]["TBook"] = "TBook";
	$fieldToolTipsgltd["English"]["TBook"] = "";
	$placeHoldersgltd["English"]["TBook"] = "";
	$fieldLabelsgltd["English"]["TType"] = "TType";
	$fieldToolTipsgltd["English"]["TType"] = "";
	$placeHoldersgltd["English"]["TType"] = "";
	$fieldLabelsgltd["English"]["AccountCode"] = "Account Code";
	$fieldToolTipsgltd["English"]["AccountCode"] = "";
	$placeHoldersgltd["English"]["AccountCode"] = "";
	$fieldLabelsgltd["English"]["BillNo"] = "Bill No";
	$fieldToolTipsgltd["English"]["BillNo"] = "";
	$placeHoldersgltd["English"]["BillNo"] = "";
	$fieldLabelsgltd["English"]["ChequeNo"] = "Cheque No";
	$fieldToolTipsgltd["English"]["ChequeNo"] = "";
	$placeHoldersgltd["English"]["ChequeNo"] = "";
	$fieldLabelsgltd["English"]["Narration"] = "Narration";
	$fieldToolTipsgltd["English"]["Narration"] = "";
	$placeHoldersgltd["English"]["Narration"] = "";
	$fieldLabelsgltd["English"]["Remarks"] = "Remarks";
	$fieldToolTipsgltd["English"]["Remarks"] = "";
	$placeHoldersgltd["English"]["Remarks"] = "";
	$fieldLabelsgltd["English"]["Amount"] = "Amount";
	$fieldToolTipsgltd["English"]["Amount"] = "";
	$placeHoldersgltd["English"]["Amount"] = "";
	$fieldLabelsgltd["English"]["StoreCode"] = "Store Code";
	$fieldToolTipsgltd["English"]["StoreCode"] = "";
	$placeHoldersgltd["English"]["StoreCode"] = "";
	$fieldLabelsgltd["English"]["Qty"] = "Qty";
	$fieldToolTipsgltd["English"]["Qty"] = "";
	$placeHoldersgltd["English"]["Qty"] = "";
	$fieldLabelsgltd["English"]["Weight"] = "Weight";
	$fieldToolTipsgltd["English"]["Weight"] = "";
	$placeHoldersgltd["English"]["Weight"] = "";
	$fieldLabelsgltd["English"]["Rate"] = "Rate";
	$fieldToolTipsgltd["English"]["Rate"] = "";
	$placeHoldersgltd["English"]["Rate"] = "";
	$fieldLabelsgltd["English"]["UserName"] = "User Name";
	$fieldToolTipsgltd["English"]["UserName"] = "";
	$placeHoldersgltd["English"]["UserName"] = "";
	$fieldLabelsgltd["English"]["CreateDate"] = "Create Date";
	$fieldToolTipsgltd["English"]["CreateDate"] = "";
	$placeHoldersgltd["English"]["CreateDate"] = "";
	$fieldLabelsgltd["English"]["CreateTime"] = "Create Time";
	$fieldToolTipsgltd["English"]["CreateTime"] = "";
	$placeHoldersgltd["English"]["CreateTime"] = "";
	$fieldLabelsgltd["English"]["UpdateUser"] = "Update User";
	$fieldToolTipsgltd["English"]["UpdateUser"] = "";
	$placeHoldersgltd["English"]["UpdateUser"] = "";
	$fieldLabelsgltd["English"]["UpdateDate"] = "Update Date";
	$fieldToolTipsgltd["English"]["UpdateDate"] = "";
	$placeHoldersgltd["English"]["UpdateDate"] = "";
	$fieldLabelsgltd["English"]["UpdateTime"] = "Update Time";
	$fieldToolTipsgltd["English"]["UpdateTime"] = "";
	$placeHoldersgltd["English"]["UpdateTime"] = "";
	$fieldLabelsgltd["English"]["Block"] = "Block";
	$fieldToolTipsgltd["English"]["Block"] = "";
	$placeHoldersgltd["English"]["Block"] = "";
	$fieldLabelsgltd["English"]["ProductCode"] = "Product Code";
	$fieldToolTipsgltd["English"]["ProductCode"] = "";
	$placeHoldersgltd["English"]["ProductCode"] = "";
	$fieldLabelsgltd["English"]["ProductGroupCode"] = "Product Group Code";
	$fieldToolTipsgltd["English"]["ProductGroupCode"] = "";
	$placeHoldersgltd["English"]["ProductGroupCode"] = "";
	$fieldLabelsgltd["English"]["UnitCode"] = "Unit Code";
	$fieldToolTipsgltd["English"]["UnitCode"] = "";
	$placeHoldersgltd["English"]["UnitCode"] = "";
	$fieldLabelsgltd["English"]["TStatus"] = "TStatus";
	$fieldToolTipsgltd["English"]["TStatus"] = "";
	$placeHoldersgltd["English"]["TStatus"] = "";
	$fieldLabelsgltd["English"]["ParentAccountCode"] = "Parent Account Code";
	$fieldToolTipsgltd["English"]["ParentAccountCode"] = "";
	$placeHoldersgltd["English"]["ParentAccountCode"] = "";
	if (count($fieldToolTipsgltd["English"]))
		$tdatagltd[".isUseToolTips"] = true;
}


	$tdatagltd[".NCSearch"] = true;



$tdatagltd[".shortTableName"] = "gltd";
$tdatagltd[".nSecOptions"] = 0;

$tdatagltd[".mainTableOwnerID"] = "";
$tdatagltd[".entityType"] = 0;
$tdatagltd[".connId"] = "karsaaz_pos_at_localhost";


$tdatagltd[".strOriginalTableName"] = "GLTD";

	



$tdatagltd[".showAddInPopup"] = false;

$tdatagltd[".showEditInPopup"] = false;

$tdatagltd[".showViewInPopup"] = false;

$tdatagltd[".listAjax"] = false;
//	temporary
//$tdatagltd[".listAjax"] = false;

	$tdatagltd[".audit"] = false;

	$tdatagltd[".locking"] = false;


$pages = $tdatagltd[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatagltd[".edit"] = true;
	$tdatagltd[".afterEditAction"] = 1;
	$tdatagltd[".closePopupAfterEdit"] = 1;
	$tdatagltd[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatagltd[".add"] = true;
$tdatagltd[".afterAddAction"] = 1;
$tdatagltd[".closePopupAfterAdd"] = 1;
$tdatagltd[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatagltd[".list"] = true;
}



$tdatagltd[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatagltd[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatagltd[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatagltd[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatagltd[".printFriendly"] = true;
}



$tdatagltd[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatagltd[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatagltd[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatagltd[".isUseAjaxSuggest"] = true;

$tdatagltd[".rowHighlite"] = true;





$tdatagltd[".ajaxCodeSnippetAdded"] = false;

$tdatagltd[".buttonsAdded"] = false;

$tdatagltd[".addPageEvents"] = false;

// use timepicker for search panel
$tdatagltd[".isUseTimeForSearch"] = false;


$tdatagltd[".badgeColor"] = "E67349";


$tdatagltd[".allSearchFields"] = array();
$tdatagltd[".filterFields"] = array();
$tdatagltd[".requiredSearchFields"] = array();

$tdatagltd[".googleLikeFields"] = array();
$tdatagltd[".googleLikeFields"][] = "Code";
$tdatagltd[".googleLikeFields"][] = "CodeD";
$tdatagltd[".googleLikeFields"][] = "BookCode";
$tdatagltd[".googleLikeFields"][] = "BookID";
$tdatagltd[".googleLikeFields"][] = "VirtualCode";
$tdatagltd[".googleLikeFields"][] = "Status";
$tdatagltd[".googleLikeFields"][] = "TDate";
$tdatagltd[".googleLikeFields"][] = "BUnit";
$tdatagltd[".googleLikeFields"][] = "TBook";
$tdatagltd[".googleLikeFields"][] = "TType";
$tdatagltd[".googleLikeFields"][] = "ParentAccountCode";
$tdatagltd[".googleLikeFields"][] = "AccountCode";
$tdatagltd[".googleLikeFields"][] = "BillNo";
$tdatagltd[".googleLikeFields"][] = "ChequeNo";
$tdatagltd[".googleLikeFields"][] = "Narration";
$tdatagltd[".googleLikeFields"][] = "Remarks";
$tdatagltd[".googleLikeFields"][] = "Amount";
$tdatagltd[".googleLikeFields"][] = "StoreCode";
$tdatagltd[".googleLikeFields"][] = "Qty";
$tdatagltd[".googleLikeFields"][] = "Weight";
$tdatagltd[".googleLikeFields"][] = "Rate";
$tdatagltd[".googleLikeFields"][] = "UserName";
$tdatagltd[".googleLikeFields"][] = "CreateDate";
$tdatagltd[".googleLikeFields"][] = "CreateTime";
$tdatagltd[".googleLikeFields"][] = "UpdateUser";
$tdatagltd[".googleLikeFields"][] = "UpdateDate";
$tdatagltd[".googleLikeFields"][] = "UpdateTime";
$tdatagltd[".googleLikeFields"][] = "Block";
$tdatagltd[".googleLikeFields"][] = "ProductCode";
$tdatagltd[".googleLikeFields"][] = "ProductGroupCode";
$tdatagltd[".googleLikeFields"][] = "UnitCode";
$tdatagltd[".googleLikeFields"][] = "TStatus";



$tdatagltd[".tableType"] = "list";

$tdatagltd[".printerPageOrientation"] = 0;
$tdatagltd[".nPrinterPageScale"] = 100;

$tdatagltd[".nPrinterSplitRecords"] = 40;

$tdatagltd[".geocodingEnabled"] = false;










$tdatagltd[".pageSize"] = 20;

$tdatagltd[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatagltd[".strOrderBy"] = $tstrOrderBy;

$tdatagltd[".orderindexes"] = array();


$tdatagltd[".sqlHead"] = "SELECT Code,  	CodeD,  	BookCode,  	BookID,  	VirtualCode,  	Status,  	TDate,  	BUnit,  	TBook,  	TType,  	ParentAccountCode,  	AccountCode,  	BillNo,  	ChequeNo,  	Narration,  	Remarks,  	Amount,  	StoreCode,  	Qty,  	Weight,  	Rate,  	UserName,  	CreateDate,  	CreateTime,  	UpdateUser,  	UpdateDate,  	UpdateTime,  	Block,  	ProductCode,  	ProductGroupCode,  	UnitCode,  	TStatus";
$tdatagltd[".sqlFrom"] = "FROM GLTD";
$tdatagltd[".sqlWhereExpr"] = "";
$tdatagltd[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatagltd[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatagltd[".arrGroupsPerPage"] = $arrGPP;

$tdatagltd[".highlightSearchResults"] = true;

$tableKeysgltd = array();
$tableKeysgltd[] = "Code";
$tableKeysgltd[] = "CodeD";
$tdatagltd[".Keys"] = $tableKeysgltd;


$tdatagltd[".hideMobileList"] = array();




//	Code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Code";
	$fdata["GoodName"] = "Code";
	$fdata["ownerTable"] = "GLTD";
	$fdata["Label"] = GetFieldLabel("GLTD","Code");
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


	$tdatagltd["Code"] = $fdata;
		$tdatagltd[".searchableFields"][] = "Code";
//	CodeD
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "CodeD";
	$fdata["GoodName"] = "CodeD";
	$fdata["ownerTable"] = "GLTD";
	$fdata["Label"] = GetFieldLabel("GLTD","CodeD");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

		$fdata["strField"] = "CodeD";

		$fdata["sourceSingle"] = "CodeD";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CodeD";

	
	
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


	$tdatagltd["CodeD"] = $fdata;
		$tdatagltd[".searchableFields"][] = "CodeD";
//	BookCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "BookCode";
	$fdata["GoodName"] = "BookCode";
	$fdata["ownerTable"] = "GLTD";
	$fdata["Label"] = GetFieldLabel("GLTD","BookCode");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "BookCode";

		$fdata["sourceSingle"] = "BookCode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BookCode";

	
	
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


	$tdatagltd["BookCode"] = $fdata;
		$tdatagltd[".searchableFields"][] = "BookCode";
//	BookID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "BookID";
	$fdata["GoodName"] = "BookID";
	$fdata["ownerTable"] = "GLTD";
	$fdata["Label"] = GetFieldLabel("GLTD","BookID");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "BookID";

		$fdata["sourceSingle"] = "BookID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BookID";

	
	
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


	$tdatagltd["BookID"] = $fdata;
		$tdatagltd[".searchableFields"][] = "BookID";
//	VirtualCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "VirtualCode";
	$fdata["GoodName"] = "VirtualCode";
	$fdata["ownerTable"] = "GLTD";
	$fdata["Label"] = GetFieldLabel("GLTD","VirtualCode");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "VirtualCode";

		$fdata["sourceSingle"] = "VirtualCode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "VirtualCode";

	
	
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


	$tdatagltd["VirtualCode"] = $fdata;
		$tdatagltd[".searchableFields"][] = "VirtualCode";
//	Status
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Status";
	$fdata["GoodName"] = "Status";
	$fdata["ownerTable"] = "GLTD";
	$fdata["Label"] = GetFieldLabel("GLTD","Status");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Status";

		$fdata["sourceSingle"] = "Status";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Status";

	
	
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


	$tdatagltd["Status"] = $fdata;
		$tdatagltd[".searchableFields"][] = "Status";
//	TDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "TDate";
	$fdata["GoodName"] = "TDate";
	$fdata["ownerTable"] = "GLTD";
	$fdata["Label"] = GetFieldLabel("GLTD","TDate");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "TDate";

		$fdata["sourceSingle"] = "TDate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TDate";

	
	
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


	$tdatagltd["TDate"] = $fdata;
		$tdatagltd[".searchableFields"][] = "TDate";
//	BUnit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "BUnit";
	$fdata["GoodName"] = "BUnit";
	$fdata["ownerTable"] = "GLTD";
	$fdata["Label"] = GetFieldLabel("GLTD","BUnit");
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


	$tdatagltd["BUnit"] = $fdata;
		$tdatagltd[".searchableFields"][] = "BUnit";
//	TBook
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "TBook";
	$fdata["GoodName"] = "TBook";
	$fdata["ownerTable"] = "GLTD";
	$fdata["Label"] = GetFieldLabel("GLTD","TBook");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "TBook";

		$fdata["sourceSingle"] = "TBook";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TBook";

	
	
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


	$tdatagltd["TBook"] = $fdata;
		$tdatagltd[".searchableFields"][] = "TBook";
//	TType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "TType";
	$fdata["GoodName"] = "TType";
	$fdata["ownerTable"] = "GLTD";
	$fdata["Label"] = GetFieldLabel("GLTD","TType");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "TType";

		$fdata["sourceSingle"] = "TType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TType";

	
	
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


	$tdatagltd["TType"] = $fdata;
		$tdatagltd[".searchableFields"][] = "TType";
//	ParentAccountCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "ParentAccountCode";
	$fdata["GoodName"] = "ParentAccountCode";
	$fdata["ownerTable"] = "GLTD";
	$fdata["Label"] = GetFieldLabel("GLTD","ParentAccountCode");
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


	$tdatagltd["ParentAccountCode"] = $fdata;
		$tdatagltd[".searchableFields"][] = "ParentAccountCode";
//	AccountCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "AccountCode";
	$fdata["GoodName"] = "AccountCode";
	$fdata["ownerTable"] = "GLTD";
	$fdata["Label"] = GetFieldLabel("GLTD","AccountCode");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "AccountCode";

		$fdata["sourceSingle"] = "AccountCode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "AccountCode";

	
	
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


	$tdatagltd["AccountCode"] = $fdata;
		$tdatagltd[".searchableFields"][] = "AccountCode";
//	BillNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "BillNo";
	$fdata["GoodName"] = "BillNo";
	$fdata["ownerTable"] = "GLTD";
	$fdata["Label"] = GetFieldLabel("GLTD","BillNo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "BillNo";

		$fdata["sourceSingle"] = "BillNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BillNo";

	
	
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


	$tdatagltd["BillNo"] = $fdata;
		$tdatagltd[".searchableFields"][] = "BillNo";
//	ChequeNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "ChequeNo";
	$fdata["GoodName"] = "ChequeNo";
	$fdata["ownerTable"] = "GLTD";
	$fdata["Label"] = GetFieldLabel("GLTD","ChequeNo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ChequeNo";

		$fdata["sourceSingle"] = "ChequeNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ChequeNo";

	
	
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


	$tdatagltd["ChequeNo"] = $fdata;
		$tdatagltd[".searchableFields"][] = "ChequeNo";
//	Narration
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "Narration";
	$fdata["GoodName"] = "Narration";
	$fdata["ownerTable"] = "GLTD";
	$fdata["Label"] = GetFieldLabel("GLTD","Narration");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "Narration";

		$fdata["sourceSingle"] = "Narration";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Narration";

	
	
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


	$tdatagltd["Narration"] = $fdata;
		$tdatagltd[".searchableFields"][] = "Narration";
//	Remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "Remarks";
	$fdata["GoodName"] = "Remarks";
	$fdata["ownerTable"] = "GLTD";
	$fdata["Label"] = GetFieldLabel("GLTD","Remarks");
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


	$tdatagltd["Remarks"] = $fdata;
		$tdatagltd[".searchableFields"][] = "Remarks";
//	Amount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Amount";
	$fdata["GoodName"] = "Amount";
	$fdata["ownerTable"] = "GLTD";
	$fdata["Label"] = GetFieldLabel("GLTD","Amount");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Amount";

		$fdata["sourceSingle"] = "Amount";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Amount";

	
	
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


	$tdatagltd["Amount"] = $fdata;
		$tdatagltd[".searchableFields"][] = "Amount";
//	StoreCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "StoreCode";
	$fdata["GoodName"] = "StoreCode";
	$fdata["ownerTable"] = "GLTD";
	$fdata["Label"] = GetFieldLabel("GLTD","StoreCode");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "StoreCode";

		$fdata["sourceSingle"] = "StoreCode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "StoreCode";

	
	
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


	$tdatagltd["StoreCode"] = $fdata;
		$tdatagltd[".searchableFields"][] = "StoreCode";
//	Qty
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "Qty";
	$fdata["GoodName"] = "Qty";
	$fdata["ownerTable"] = "GLTD";
	$fdata["Label"] = GetFieldLabel("GLTD","Qty");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Qty";

		$fdata["sourceSingle"] = "Qty";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Qty";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 5;

	
	
	
	
	
	
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


	$tdatagltd["Qty"] = $fdata;
		$tdatagltd[".searchableFields"][] = "Qty";
//	Weight
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Weight";
	$fdata["GoodName"] = "Weight";
	$fdata["ownerTable"] = "GLTD";
	$fdata["Label"] = GetFieldLabel("GLTD","Weight");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Weight";

		$fdata["sourceSingle"] = "Weight";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Weight";

	
	
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


	$tdatagltd["Weight"] = $fdata;
		$tdatagltd[".searchableFields"][] = "Weight";
//	Rate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "Rate";
	$fdata["GoodName"] = "Rate";
	$fdata["ownerTable"] = "GLTD";
	$fdata["Label"] = GetFieldLabel("GLTD","Rate");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "Rate";

		$fdata["sourceSingle"] = "Rate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Rate";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Number");

	
	
	
	
	
	
		$vdata["DecimalDigits"] = 5;

	
	
	
	
	
	
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


	$tdatagltd["Rate"] = $fdata;
		$tdatagltd[".searchableFields"][] = "Rate";
//	UserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "UserName";
	$fdata["GoodName"] = "UserName";
	$fdata["ownerTable"] = "GLTD";
	$fdata["Label"] = GetFieldLabel("GLTD","UserName");
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


	$tdatagltd["UserName"] = $fdata;
		$tdatagltd[".searchableFields"][] = "UserName";
//	CreateDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "CreateDate";
	$fdata["GoodName"] = "CreateDate";
	$fdata["ownerTable"] = "GLTD";
	$fdata["Label"] = GetFieldLabel("GLTD","CreateDate");
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


	$tdatagltd["CreateDate"] = $fdata;
		$tdatagltd[".searchableFields"][] = "CreateDate";
//	CreateTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "CreateTime";
	$fdata["GoodName"] = "CreateTime";
	$fdata["ownerTable"] = "GLTD";
	$fdata["Label"] = GetFieldLabel("GLTD","CreateTime");
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


	$tdatagltd["CreateTime"] = $fdata;
		$tdatagltd[".searchableFields"][] = "CreateTime";
//	UpdateUser
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "UpdateUser";
	$fdata["GoodName"] = "UpdateUser";
	$fdata["ownerTable"] = "GLTD";
	$fdata["Label"] = GetFieldLabel("GLTD","UpdateUser");
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


	$tdatagltd["UpdateUser"] = $fdata;
		$tdatagltd[".searchableFields"][] = "UpdateUser";
//	UpdateDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "UpdateDate";
	$fdata["GoodName"] = "UpdateDate";
	$fdata["ownerTable"] = "GLTD";
	$fdata["Label"] = GetFieldLabel("GLTD","UpdateDate");
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


	$tdatagltd["UpdateDate"] = $fdata;
		$tdatagltd[".searchableFields"][] = "UpdateDate";
//	UpdateTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "UpdateTime";
	$fdata["GoodName"] = "UpdateTime";
	$fdata["ownerTable"] = "GLTD";
	$fdata["Label"] = GetFieldLabel("GLTD","UpdateTime");
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


	$tdatagltd["UpdateTime"] = $fdata;
		$tdatagltd[".searchableFields"][] = "UpdateTime";
//	Block
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "Block";
	$fdata["GoodName"] = "Block";
	$fdata["ownerTable"] = "GLTD";
	$fdata["Label"] = GetFieldLabel("GLTD","Block");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "Block";

		$fdata["sourceSingle"] = "Block";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Block";

	
	
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


	$tdatagltd["Block"] = $fdata;
		$tdatagltd[".searchableFields"][] = "Block";
//	ProductCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "ProductCode";
	$fdata["GoodName"] = "ProductCode";
	$fdata["ownerTable"] = "GLTD";
	$fdata["Label"] = GetFieldLabel("GLTD","ProductCode");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "ProductCode";

		$fdata["sourceSingle"] = "ProductCode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ProductCode";

	
	
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


	$tdatagltd["ProductCode"] = $fdata;
		$tdatagltd[".searchableFields"][] = "ProductCode";
//	ProductGroupCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "ProductGroupCode";
	$fdata["GoodName"] = "ProductGroupCode";
	$fdata["ownerTable"] = "GLTD";
	$fdata["Label"] = GetFieldLabel("GLTD","ProductGroupCode");
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


	$tdatagltd["ProductGroupCode"] = $fdata;
		$tdatagltd[".searchableFields"][] = "ProductGroupCode";
//	UnitCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "UnitCode";
	$fdata["GoodName"] = "UnitCode";
	$fdata["ownerTable"] = "GLTD";
	$fdata["Label"] = GetFieldLabel("GLTD","UnitCode");
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


	$tdatagltd["UnitCode"] = $fdata;
		$tdatagltd[".searchableFields"][] = "UnitCode";
//	TStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "TStatus";
	$fdata["GoodName"] = "TStatus";
	$fdata["ownerTable"] = "GLTD";
	$fdata["Label"] = GetFieldLabel("GLTD","TStatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "TStatus";

		$fdata["sourceSingle"] = "TStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TStatus";

	
	
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


	$tdatagltd["TStatus"] = $fdata;
		$tdatagltd[".searchableFields"][] = "TStatus";


$tables_data["GLTD"]=&$tdatagltd;
$field_labels["GLTD"] = &$fieldLabelsgltd;
$fieldToolTips["GLTD"] = &$fieldToolTipsgltd;
$placeHolders["GLTD"] = &$placeHoldersgltd;
$page_titles["GLTD"] = &$pageTitlesgltd;


changeTextControlsToDate( "GLTD" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["GLTD"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["GLTD"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_gltd()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Code,  	CodeD,  	BookCode,  	BookID,  	VirtualCode,  	Status,  	TDate,  	BUnit,  	TBook,  	TType,  	ParentAccountCode,  	AccountCode,  	BillNo,  	ChequeNo,  	Narration,  	Remarks,  	Amount,  	StoreCode,  	Qty,  	Weight,  	Rate,  	UserName,  	CreateDate,  	CreateTime,  	UpdateUser,  	UpdateDate,  	UpdateTime,  	Block,  	ProductCode,  	ProductGroupCode,  	UnitCode,  	TStatus";
$proto0["m_strFrom"] = "FROM GLTD";
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
	"m_strTable" => "GLTD",
	"m_srcTableName" => "GLTD"
));

$proto6["m_sql"] = "Code";
$proto6["m_srcTableName"] = "GLTD";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "CodeD",
	"m_strTable" => "GLTD",
	"m_srcTableName" => "GLTD"
));

$proto8["m_sql"] = "CodeD";
$proto8["m_srcTableName"] = "GLTD";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "BookCode",
	"m_strTable" => "GLTD",
	"m_srcTableName" => "GLTD"
));

$proto10["m_sql"] = "BookCode";
$proto10["m_srcTableName"] = "GLTD";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "BookID",
	"m_strTable" => "GLTD",
	"m_srcTableName" => "GLTD"
));

$proto12["m_sql"] = "BookID";
$proto12["m_srcTableName"] = "GLTD";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "VirtualCode",
	"m_strTable" => "GLTD",
	"m_srcTableName" => "GLTD"
));

$proto14["m_sql"] = "VirtualCode";
$proto14["m_srcTableName"] = "GLTD";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Status",
	"m_strTable" => "GLTD",
	"m_srcTableName" => "GLTD"
));

$proto16["m_sql"] = "Status";
$proto16["m_srcTableName"] = "GLTD";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "TDate",
	"m_strTable" => "GLTD",
	"m_srcTableName" => "GLTD"
));

$proto18["m_sql"] = "TDate";
$proto18["m_srcTableName"] = "GLTD";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "BUnit",
	"m_strTable" => "GLTD",
	"m_srcTableName" => "GLTD"
));

$proto20["m_sql"] = "BUnit";
$proto20["m_srcTableName"] = "GLTD";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "TBook",
	"m_strTable" => "GLTD",
	"m_srcTableName" => "GLTD"
));

$proto22["m_sql"] = "TBook";
$proto22["m_srcTableName"] = "GLTD";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "TType",
	"m_strTable" => "GLTD",
	"m_srcTableName" => "GLTD"
));

$proto24["m_sql"] = "TType";
$proto24["m_srcTableName"] = "GLTD";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "ParentAccountCode",
	"m_strTable" => "GLTD",
	"m_srcTableName" => "GLTD"
));

$proto26["m_sql"] = "ParentAccountCode";
$proto26["m_srcTableName"] = "GLTD";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "AccountCode",
	"m_strTable" => "GLTD",
	"m_srcTableName" => "GLTD"
));

$proto28["m_sql"] = "AccountCode";
$proto28["m_srcTableName"] = "GLTD";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "BillNo",
	"m_strTable" => "GLTD",
	"m_srcTableName" => "GLTD"
));

$proto30["m_sql"] = "BillNo";
$proto30["m_srcTableName"] = "GLTD";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "ChequeNo",
	"m_strTable" => "GLTD",
	"m_srcTableName" => "GLTD"
));

$proto32["m_sql"] = "ChequeNo";
$proto32["m_srcTableName"] = "GLTD";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "Narration",
	"m_strTable" => "GLTD",
	"m_srcTableName" => "GLTD"
));

$proto34["m_sql"] = "Narration";
$proto34["m_srcTableName"] = "GLTD";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "Remarks",
	"m_strTable" => "GLTD",
	"m_srcTableName" => "GLTD"
));

$proto36["m_sql"] = "Remarks";
$proto36["m_srcTableName"] = "GLTD";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Amount",
	"m_strTable" => "GLTD",
	"m_srcTableName" => "GLTD"
));

$proto38["m_sql"] = "Amount";
$proto38["m_srcTableName"] = "GLTD";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "StoreCode",
	"m_strTable" => "GLTD",
	"m_srcTableName" => "GLTD"
));

$proto40["m_sql"] = "StoreCode";
$proto40["m_srcTableName"] = "GLTD";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "Qty",
	"m_strTable" => "GLTD",
	"m_srcTableName" => "GLTD"
));

$proto42["m_sql"] = "Qty";
$proto42["m_srcTableName"] = "GLTD";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "Weight",
	"m_strTable" => "GLTD",
	"m_srcTableName" => "GLTD"
));

$proto44["m_sql"] = "Weight";
$proto44["m_srcTableName"] = "GLTD";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "Rate",
	"m_strTable" => "GLTD",
	"m_srcTableName" => "GLTD"
));

$proto46["m_sql"] = "Rate";
$proto46["m_srcTableName"] = "GLTD";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "UserName",
	"m_strTable" => "GLTD",
	"m_srcTableName" => "GLTD"
));

$proto48["m_sql"] = "UserName";
$proto48["m_srcTableName"] = "GLTD";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "CreateDate",
	"m_strTable" => "GLTD",
	"m_srcTableName" => "GLTD"
));

$proto50["m_sql"] = "CreateDate";
$proto50["m_srcTableName"] = "GLTD";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "CreateTime",
	"m_strTable" => "GLTD",
	"m_srcTableName" => "GLTD"
));

$proto52["m_sql"] = "CreateTime";
$proto52["m_srcTableName"] = "GLTD";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "UpdateUser",
	"m_strTable" => "GLTD",
	"m_srcTableName" => "GLTD"
));

$proto54["m_sql"] = "UpdateUser";
$proto54["m_srcTableName"] = "GLTD";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "UpdateDate",
	"m_strTable" => "GLTD",
	"m_srcTableName" => "GLTD"
));

$proto56["m_sql"] = "UpdateDate";
$proto56["m_srcTableName"] = "GLTD";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "UpdateTime",
	"m_strTable" => "GLTD",
	"m_srcTableName" => "GLTD"
));

$proto58["m_sql"] = "UpdateTime";
$proto58["m_srcTableName"] = "GLTD";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "Block",
	"m_strTable" => "GLTD",
	"m_srcTableName" => "GLTD"
));

$proto60["m_sql"] = "Block";
$proto60["m_srcTableName"] = "GLTD";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "ProductCode",
	"m_strTable" => "GLTD",
	"m_srcTableName" => "GLTD"
));

$proto62["m_sql"] = "ProductCode";
$proto62["m_srcTableName"] = "GLTD";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "ProductGroupCode",
	"m_strTable" => "GLTD",
	"m_srcTableName" => "GLTD"
));

$proto64["m_sql"] = "ProductGroupCode";
$proto64["m_srcTableName"] = "GLTD";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "UnitCode",
	"m_strTable" => "GLTD",
	"m_srcTableName" => "GLTD"
));

$proto66["m_sql"] = "UnitCode";
$proto66["m_srcTableName"] = "GLTD";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "TStatus",
	"m_strTable" => "GLTD",
	"m_srcTableName" => "GLTD"
));

$proto68["m_sql"] = "TStatus";
$proto68["m_srcTableName"] = "GLTD";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto70=array();
$proto70["m_link"] = "SQLL_MAIN";
			$proto71=array();
$proto71["m_strName"] = "GLTD";
$proto71["m_srcTableName"] = "GLTD";
$proto71["m_columns"] = array();
$proto71["m_columns"][] = "Code";
$proto71["m_columns"][] = "CodeD";
$proto71["m_columns"][] = "BookCode";
$proto71["m_columns"][] = "BookID";
$proto71["m_columns"][] = "VirtualCode";
$proto71["m_columns"][] = "Status";
$proto71["m_columns"][] = "TDate";
$proto71["m_columns"][] = "BUnit";
$proto71["m_columns"][] = "TBook";
$proto71["m_columns"][] = "TType";
$proto71["m_columns"][] = "ParentAccountCode";
$proto71["m_columns"][] = "AccountCode";
$proto71["m_columns"][] = "BillNo";
$proto71["m_columns"][] = "ChequeNo";
$proto71["m_columns"][] = "Narration";
$proto71["m_columns"][] = "Remarks";
$proto71["m_columns"][] = "Amount";
$proto71["m_columns"][] = "StoreCode";
$proto71["m_columns"][] = "Qty";
$proto71["m_columns"][] = "Weight";
$proto71["m_columns"][] = "Rate";
$proto71["m_columns"][] = "UserName";
$proto71["m_columns"][] = "CreateDate";
$proto71["m_columns"][] = "CreateTime";
$proto71["m_columns"][] = "UpdateUser";
$proto71["m_columns"][] = "UpdateDate";
$proto71["m_columns"][] = "UpdateTime";
$proto71["m_columns"][] = "Block";
$proto71["m_columns"][] = "ProductCode";
$proto71["m_columns"][] = "ProductGroupCode";
$proto71["m_columns"][] = "UnitCode";
$proto71["m_columns"][] = "TStatus";
$obj = new SQLTable($proto71);

$proto70["m_table"] = $obj;
$proto70["m_sql"] = "GLTD";
$proto70["m_alias"] = "";
$proto70["m_srcTableName"] = "GLTD";
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
$proto0["m_srcTableName"]="GLTD";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_gltd = createSqlQuery_gltd();


	
		;

																																

$tdatagltd[".sqlquery"] = $queryData_gltd;



include_once(getabspath("include/gltd_events.php"));
$tdatagltd[".hasEvents"] = true;

?>