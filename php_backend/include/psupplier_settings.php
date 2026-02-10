<?php
$tdatapsupplier = array();
$tdatapsupplier[".searchableFields"] = array();
$tdatapsupplier[".ShortName"] = "psupplier";
$tdatapsupplier[".OwnerID"] = "";
$tdatapsupplier[".OriginalTable"] = "pSupplier";


$tdatapsupplier[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapsupplier[".originalPagesByType"] = $tdatapsupplier[".pagesByType"];
$tdatapsupplier[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapsupplier[".originalPages"] = $tdatapsupplier[".pages"];
$tdatapsupplier[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapsupplier[".originalDefaultPages"] = $tdatapsupplier[".defaultPages"];

//	field labels
$fieldLabelspsupplier = array();
$fieldToolTipspsupplier = array();
$pageTitlespsupplier = array();
$placeHolderspsupplier = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspsupplier["English"] = array();
	$fieldToolTipspsupplier["English"] = array();
	$placeHolderspsupplier["English"] = array();
	$pageTitlespsupplier["English"] = array();
	$fieldLabelspsupplier["English"]["ID"] = "ID";
	$fieldToolTipspsupplier["English"]["ID"] = "";
	$placeHolderspsupplier["English"]["ID"] = "";
	$fieldLabelspsupplier["English"]["Code"] = "Code";
	$fieldToolTipspsupplier["English"]["Code"] = "";
	$placeHolderspsupplier["English"]["Code"] = "";
	$fieldLabelspsupplier["English"]["BUnit"] = "BUnit";
	$fieldToolTipspsupplier["English"]["BUnit"] = "";
	$placeHolderspsupplier["English"]["BUnit"] = "";
	$fieldLabelspsupplier["English"]["OldCode"] = "Old Code";
	$fieldToolTipspsupplier["English"]["OldCode"] = "";
	$placeHolderspsupplier["English"]["OldCode"] = "";
	$fieldLabelspsupplier["English"]["Name"] = "Name";
	$fieldToolTipspsupplier["English"]["Name"] = "";
	$placeHolderspsupplier["English"]["Name"] = "";
	$fieldLabelspsupplier["English"]["ContactName"] = "Contact Name";
	$fieldToolTipspsupplier["English"]["ContactName"] = "";
	$placeHolderspsupplier["English"]["ContactName"] = "";
	$fieldLabelspsupplier["English"]["GroupCode"] = "Group Code";
	$fieldToolTipspsupplier["English"]["GroupCode"] = "";
	$placeHolderspsupplier["English"]["GroupCode"] = "";
	$fieldLabelspsupplier["English"]["Address"] = "Address";
	$fieldToolTipspsupplier["English"]["Address"] = "";
	$placeHolderspsupplier["English"]["Address"] = "";
	$fieldLabelspsupplier["English"]["SaleTaxRegNo"] = "Sale Tax Reg No";
	$fieldToolTipspsupplier["English"]["SaleTaxRegNo"] = "";
	$placeHolderspsupplier["English"]["SaleTaxRegNo"] = "";
	$fieldLabelspsupplier["English"]["NTNNo"] = "NTNNo";
	$fieldToolTipspsupplier["English"]["NTNNo"] = "";
	$placeHolderspsupplier["English"]["NTNNo"] = "";
	$fieldLabelspsupplier["English"]["CNIC"] = "CNIC";
	$fieldToolTipspsupplier["English"]["CNIC"] = "";
	$placeHolderspsupplier["English"]["CNIC"] = "";
	$fieldLabelspsupplier["English"]["Phone"] = "Phone";
	$fieldToolTipspsupplier["English"]["Phone"] = "";
	$placeHolderspsupplier["English"]["Phone"] = "";
	$fieldLabelspsupplier["English"]["Fax"] = "Fax";
	$fieldToolTipspsupplier["English"]["Fax"] = "";
	$placeHolderspsupplier["English"]["Fax"] = "";
	$fieldLabelspsupplier["English"]["Cell"] = "Cell";
	$fieldToolTipspsupplier["English"]["Cell"] = "";
	$placeHolderspsupplier["English"]["Cell"] = "";
	$fieldLabelspsupplier["English"]["WebAddress"] = "Web Address";
	$fieldToolTipspsupplier["English"]["WebAddress"] = "";
	$placeHolderspsupplier["English"]["WebAddress"] = "";
	$fieldLabelspsupplier["English"]["EMail"] = "EMail";
	$fieldToolTipspsupplier["English"]["EMail"] = "";
	$placeHolderspsupplier["English"]["EMail"] = "";
	$fieldLabelspsupplier["English"]["Remarks"] = "Remarks";
	$fieldToolTipspsupplier["English"]["Remarks"] = "";
	$placeHolderspsupplier["English"]["Remarks"] = "";
	$fieldLabelspsupplier["English"]["UserName"] = "User Name";
	$fieldToolTipspsupplier["English"]["UserName"] = "";
	$placeHolderspsupplier["English"]["UserName"] = "";
	$fieldLabelspsupplier["English"]["CreateDate"] = "Create Date";
	$fieldToolTipspsupplier["English"]["CreateDate"] = "";
	$placeHolderspsupplier["English"]["CreateDate"] = "";
	$fieldLabelspsupplier["English"]["CreateTime"] = "Create Time";
	$fieldToolTipspsupplier["English"]["CreateTime"] = "";
	$placeHolderspsupplier["English"]["CreateTime"] = "";
	$fieldLabelspsupplier["English"]["UpdateUser"] = "Update User";
	$fieldToolTipspsupplier["English"]["UpdateUser"] = "";
	$placeHolderspsupplier["English"]["UpdateUser"] = "";
	$fieldLabelspsupplier["English"]["UpdateDate"] = "Update Date";
	$fieldToolTipspsupplier["English"]["UpdateDate"] = "";
	$placeHolderspsupplier["English"]["UpdateDate"] = "";
	$fieldLabelspsupplier["English"]["UpdateTime"] = "Update Time";
	$fieldToolTipspsupplier["English"]["UpdateTime"] = "";
	$placeHolderspsupplier["English"]["UpdateTime"] = "";
	$fieldLabelspsupplier["English"]["Block"] = "Block";
	$fieldToolTipspsupplier["English"]["Block"] = "";
	$placeHolderspsupplier["English"]["Block"] = "";
	if (count($fieldToolTipspsupplier["English"]))
		$tdatapsupplier[".isUseToolTips"] = true;
}


	$tdatapsupplier[".NCSearch"] = true;



$tdatapsupplier[".shortTableName"] = "psupplier";
$tdatapsupplier[".nSecOptions"] = 0;

$tdatapsupplier[".mainTableOwnerID"] = "";
$tdatapsupplier[".entityType"] = 0;
$tdatapsupplier[".connId"] = "karsaaz_pos_at_localhost";


$tdatapsupplier[".strOriginalTableName"] = "pSupplier";

	



$tdatapsupplier[".showAddInPopup"] = false;

$tdatapsupplier[".showEditInPopup"] = false;

$tdatapsupplier[".showViewInPopup"] = false;

$tdatapsupplier[".listAjax"] = false;
//	temporary
//$tdatapsupplier[".listAjax"] = false;

	$tdatapsupplier[".audit"] = false;

	$tdatapsupplier[".locking"] = false;


$pages = $tdatapsupplier[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapsupplier[".edit"] = true;
	$tdatapsupplier[".afterEditAction"] = 1;
	$tdatapsupplier[".closePopupAfterEdit"] = 1;
	$tdatapsupplier[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapsupplier[".add"] = true;
$tdatapsupplier[".afterAddAction"] = 1;
$tdatapsupplier[".closePopupAfterAdd"] = 1;
$tdatapsupplier[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapsupplier[".list"] = true;
}



$tdatapsupplier[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapsupplier[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapsupplier[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapsupplier[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapsupplier[".printFriendly"] = true;
}



$tdatapsupplier[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapsupplier[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapsupplier[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapsupplier[".isUseAjaxSuggest"] = true;

$tdatapsupplier[".rowHighlite"] = true;





$tdatapsupplier[".ajaxCodeSnippetAdded"] = false;

$tdatapsupplier[".buttonsAdded"] = false;

$tdatapsupplier[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapsupplier[".isUseTimeForSearch"] = false;


$tdatapsupplier[".badgeColor"] = "E8926F";


$tdatapsupplier[".allSearchFields"] = array();
$tdatapsupplier[".filterFields"] = array();
$tdatapsupplier[".requiredSearchFields"] = array();

$tdatapsupplier[".googleLikeFields"] = array();
$tdatapsupplier[".googleLikeFields"][] = "ID";
$tdatapsupplier[".googleLikeFields"][] = "Code";
$tdatapsupplier[".googleLikeFields"][] = "BUnit";
$tdatapsupplier[".googleLikeFields"][] = "OldCode";
$tdatapsupplier[".googleLikeFields"][] = "Name";
$tdatapsupplier[".googleLikeFields"][] = "ContactName";
$tdatapsupplier[".googleLikeFields"][] = "GroupCode";
$tdatapsupplier[".googleLikeFields"][] = "Address";
$tdatapsupplier[".googleLikeFields"][] = "SaleTaxRegNo";
$tdatapsupplier[".googleLikeFields"][] = "NTNNo";
$tdatapsupplier[".googleLikeFields"][] = "CNIC";
$tdatapsupplier[".googleLikeFields"][] = "Phone";
$tdatapsupplier[".googleLikeFields"][] = "Fax";
$tdatapsupplier[".googleLikeFields"][] = "Cell";
$tdatapsupplier[".googleLikeFields"][] = "WebAddress";
$tdatapsupplier[".googleLikeFields"][] = "EMail";
$tdatapsupplier[".googleLikeFields"][] = "Remarks";
$tdatapsupplier[".googleLikeFields"][] = "UserName";
$tdatapsupplier[".googleLikeFields"][] = "CreateDate";
$tdatapsupplier[".googleLikeFields"][] = "CreateTime";
$tdatapsupplier[".googleLikeFields"][] = "UpdateUser";
$tdatapsupplier[".googleLikeFields"][] = "UpdateDate";
$tdatapsupplier[".googleLikeFields"][] = "UpdateTime";
$tdatapsupplier[".googleLikeFields"][] = "Block";



$tdatapsupplier[".tableType"] = "list";

$tdatapsupplier[".printerPageOrientation"] = 0;
$tdatapsupplier[".nPrinterPageScale"] = 100;

$tdatapsupplier[".nPrinterSplitRecords"] = 40;

$tdatapsupplier[".geocodingEnabled"] = false;










$tdatapsupplier[".pageSize"] = 20;

$tdatapsupplier[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapsupplier[".strOrderBy"] = $tstrOrderBy;

$tdatapsupplier[".orderindexes"] = array();


$tdatapsupplier[".sqlHead"] = "SELECT ID,  	Code,  	BUnit,  	OldCode,  	Name,  	ContactName,  	GroupCode,  	Address,  	SaleTaxRegNo,  	NTNNo,  	CNIC,  	Phone,  	Fax,  	Cell,  	WebAddress,  	EMail,  	Remarks,  	UserName,  	CreateDate,  	CreateTime,  	UpdateUser,  	UpdateDate,  	UpdateTime,  	Block";
$tdatapsupplier[".sqlFrom"] = "FROM pSupplier";
$tdatapsupplier[".sqlWhereExpr"] = "";
$tdatapsupplier[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapsupplier[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapsupplier[".arrGroupsPerPage"] = $arrGPP;

$tdatapsupplier[".highlightSearchResults"] = true;

$tableKeyspsupplier = array();
$tableKeyspsupplier[] = "ID";
$tdatapsupplier[".Keys"] = $tableKeyspsupplier;


$tdatapsupplier[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "pSupplier";
	$fdata["Label"] = GetFieldLabel("pSupplier","ID");
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


	$tdatapsupplier["ID"] = $fdata;
		$tdatapsupplier[".searchableFields"][] = "ID";
//	Code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Code";
	$fdata["GoodName"] = "Code";
	$fdata["ownerTable"] = "pSupplier";
	$fdata["Label"] = GetFieldLabel("pSupplier","Code");
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


	$tdatapsupplier["Code"] = $fdata;
		$tdatapsupplier[".searchableFields"][] = "Code";
//	BUnit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "BUnit";
	$fdata["GoodName"] = "BUnit";
	$fdata["ownerTable"] = "pSupplier";
	$fdata["Label"] = GetFieldLabel("pSupplier","BUnit");
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


	$tdatapsupplier["BUnit"] = $fdata;
		$tdatapsupplier[".searchableFields"][] = "BUnit";
//	OldCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "OldCode";
	$fdata["GoodName"] = "OldCode";
	$fdata["ownerTable"] = "pSupplier";
	$fdata["Label"] = GetFieldLabel("pSupplier","OldCode");
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


	$tdatapsupplier["OldCode"] = $fdata;
		$tdatapsupplier[".searchableFields"][] = "OldCode";
//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "pSupplier";
	$fdata["Label"] = GetFieldLabel("pSupplier","Name");
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


	$tdatapsupplier["Name"] = $fdata;
		$tdatapsupplier[".searchableFields"][] = "Name";
//	ContactName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "ContactName";
	$fdata["GoodName"] = "ContactName";
	$fdata["ownerTable"] = "pSupplier";
	$fdata["Label"] = GetFieldLabel("pSupplier","ContactName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "ContactName";

		$fdata["sourceSingle"] = "ContactName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ContactName";

	
	
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


	$tdatapsupplier["ContactName"] = $fdata;
		$tdatapsupplier[".searchableFields"][] = "ContactName";
//	GroupCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "GroupCode";
	$fdata["GoodName"] = "GroupCode";
	$fdata["ownerTable"] = "pSupplier";
	$fdata["Label"] = GetFieldLabel("pSupplier","GroupCode");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "GroupCode";

		$fdata["sourceSingle"] = "GroupCode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "GroupCode";

	
	
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
	$edata["LookupTable"] = "psSupplierGroup";
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


	$tdatapsupplier["GroupCode"] = $fdata;
		$tdatapsupplier[".searchableFields"][] = "GroupCode";
//	Address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Address";
	$fdata["GoodName"] = "Address";
	$fdata["ownerTable"] = "pSupplier";
	$fdata["Label"] = GetFieldLabel("pSupplier","Address");
	$fdata["FieldType"] = 201;


	
	
			

		$fdata["strField"] = "Address";

		$fdata["sourceSingle"] = "Address";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Address";

	
	
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


	$tdatapsupplier["Address"] = $fdata;
		$tdatapsupplier[".searchableFields"][] = "Address";
//	SaleTaxRegNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "SaleTaxRegNo";
	$fdata["GoodName"] = "SaleTaxRegNo";
	$fdata["ownerTable"] = "pSupplier";
	$fdata["Label"] = GetFieldLabel("pSupplier","SaleTaxRegNo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "SaleTaxRegNo";

		$fdata["sourceSingle"] = "SaleTaxRegNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SaleTaxRegNo";

	
	
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


	$tdatapsupplier["SaleTaxRegNo"] = $fdata;
		$tdatapsupplier[".searchableFields"][] = "SaleTaxRegNo";
//	NTNNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "NTNNo";
	$fdata["GoodName"] = "NTNNo";
	$fdata["ownerTable"] = "pSupplier";
	$fdata["Label"] = GetFieldLabel("pSupplier","NTNNo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "NTNNo";

		$fdata["sourceSingle"] = "NTNNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NTNNo";

	
	
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


	$tdatapsupplier["NTNNo"] = $fdata;
		$tdatapsupplier[".searchableFields"][] = "NTNNo";
//	CNIC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "CNIC";
	$fdata["GoodName"] = "CNIC";
	$fdata["ownerTable"] = "pSupplier";
	$fdata["Label"] = GetFieldLabel("pSupplier","CNIC");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CNIC";

		$fdata["sourceSingle"] = "CNIC";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CNIC";

	
	
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


	$tdatapsupplier["CNIC"] = $fdata;
		$tdatapsupplier[".searchableFields"][] = "CNIC";
//	Phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "Phone";
	$fdata["GoodName"] = "Phone";
	$fdata["ownerTable"] = "pSupplier";
	$fdata["Label"] = GetFieldLabel("pSupplier","Phone");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Phone";

		$fdata["sourceSingle"] = "Phone";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Phone";

	
	
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
			$edata["EditParams"].= " maxlength=50";

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


	$tdatapsupplier["Phone"] = $fdata;
		$tdatapsupplier[".searchableFields"][] = "Phone";
//	Fax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "Fax";
	$fdata["GoodName"] = "Fax";
	$fdata["ownerTable"] = "pSupplier";
	$fdata["Label"] = GetFieldLabel("pSupplier","Fax");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Fax";

		$fdata["sourceSingle"] = "Fax";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Fax";

	
	
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


	$tdatapsupplier["Fax"] = $fdata;
		$tdatapsupplier[".searchableFields"][] = "Fax";
//	Cell
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Cell";
	$fdata["GoodName"] = "Cell";
	$fdata["ownerTable"] = "pSupplier";
	$fdata["Label"] = GetFieldLabel("pSupplier","Cell");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Cell";

		$fdata["sourceSingle"] = "Cell";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Cell";

	
	
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


	$tdatapsupplier["Cell"] = $fdata;
		$tdatapsupplier[".searchableFields"][] = "Cell";
//	WebAddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "WebAddress";
	$fdata["GoodName"] = "WebAddress";
	$fdata["ownerTable"] = "pSupplier";
	$fdata["Label"] = GetFieldLabel("pSupplier","WebAddress");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "WebAddress";

		$fdata["sourceSingle"] = "WebAddress";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "WebAddress";

	
	
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


	$tdatapsupplier["WebAddress"] = $fdata;
		$tdatapsupplier[".searchableFields"][] = "WebAddress";
//	EMail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "EMail";
	$fdata["GoodName"] = "EMail";
	$fdata["ownerTable"] = "pSupplier";
	$fdata["Label"] = GetFieldLabel("pSupplier","EMail");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "EMail";

		$fdata["sourceSingle"] = "EMail";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EMail";

	
	
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


	$tdatapsupplier["EMail"] = $fdata;
		$tdatapsupplier[".searchableFields"][] = "EMail";
//	Remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Remarks";
	$fdata["GoodName"] = "Remarks";
	$fdata["ownerTable"] = "pSupplier";
	$fdata["Label"] = GetFieldLabel("pSupplier","Remarks");
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


	$tdatapsupplier["Remarks"] = $fdata;
		$tdatapsupplier[".searchableFields"][] = "Remarks";
//	UserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "UserName";
	$fdata["GoodName"] = "UserName";
	$fdata["ownerTable"] = "pSupplier";
	$fdata["Label"] = GetFieldLabel("pSupplier","UserName");
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


	$tdatapsupplier["UserName"] = $fdata;
		$tdatapsupplier[".searchableFields"][] = "UserName";
//	CreateDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "CreateDate";
	$fdata["GoodName"] = "CreateDate";
	$fdata["ownerTable"] = "pSupplier";
	$fdata["Label"] = GetFieldLabel("pSupplier","CreateDate");
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


	$tdatapsupplier["CreateDate"] = $fdata;
		$tdatapsupplier[".searchableFields"][] = "CreateDate";
//	CreateTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "CreateTime";
	$fdata["GoodName"] = "CreateTime";
	$fdata["ownerTable"] = "pSupplier";
	$fdata["Label"] = GetFieldLabel("pSupplier","CreateTime");
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


	$tdatapsupplier["CreateTime"] = $fdata;
		$tdatapsupplier[".searchableFields"][] = "CreateTime";
//	UpdateUser
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "UpdateUser";
	$fdata["GoodName"] = "UpdateUser";
	$fdata["ownerTable"] = "pSupplier";
	$fdata["Label"] = GetFieldLabel("pSupplier","UpdateUser");
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


	$tdatapsupplier["UpdateUser"] = $fdata;
		$tdatapsupplier[".searchableFields"][] = "UpdateUser";
//	UpdateDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "UpdateDate";
	$fdata["GoodName"] = "UpdateDate";
	$fdata["ownerTable"] = "pSupplier";
	$fdata["Label"] = GetFieldLabel("pSupplier","UpdateDate");
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


	$tdatapsupplier["UpdateDate"] = $fdata;
		$tdatapsupplier[".searchableFields"][] = "UpdateDate";
//	UpdateTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "UpdateTime";
	$fdata["GoodName"] = "UpdateTime";
	$fdata["ownerTable"] = "pSupplier";
	$fdata["Label"] = GetFieldLabel("pSupplier","UpdateTime");
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


	$tdatapsupplier["UpdateTime"] = $fdata;
		$tdatapsupplier[".searchableFields"][] = "UpdateTime";
//	Block
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "Block";
	$fdata["GoodName"] = "Block";
	$fdata["ownerTable"] = "pSupplier";
	$fdata["Label"] = GetFieldLabel("pSupplier","Block");
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


	$tdatapsupplier["Block"] = $fdata;
		$tdatapsupplier[".searchableFields"][] = "Block";


$tables_data["pSupplier"]=&$tdatapsupplier;
$field_labels["pSupplier"] = &$fieldLabelspsupplier;
$fieldToolTips["pSupplier"] = &$fieldToolTipspsupplier;
$placeHolders["pSupplier"] = &$placeHolderspsupplier;
$page_titles["pSupplier"] = &$pageTitlespsupplier;


changeTextControlsToDate( "pSupplier" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["pSupplier"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["pSupplier"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_psupplier()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	Code,  	BUnit,  	OldCode,  	Name,  	ContactName,  	GroupCode,  	Address,  	SaleTaxRegNo,  	NTNNo,  	CNIC,  	Phone,  	Fax,  	Cell,  	WebAddress,  	EMail,  	Remarks,  	UserName,  	CreateDate,  	CreateTime,  	UpdateUser,  	UpdateDate,  	UpdateTime,  	Block";
$proto0["m_strFrom"] = "FROM pSupplier";
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
	"m_strTable" => "pSupplier",
	"m_srcTableName" => "pSupplier"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "pSupplier";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Code",
	"m_strTable" => "pSupplier",
	"m_srcTableName" => "pSupplier"
));

$proto8["m_sql"] = "Code";
$proto8["m_srcTableName"] = "pSupplier";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "BUnit",
	"m_strTable" => "pSupplier",
	"m_srcTableName" => "pSupplier"
));

$proto10["m_sql"] = "BUnit";
$proto10["m_srcTableName"] = "pSupplier";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "OldCode",
	"m_strTable" => "pSupplier",
	"m_srcTableName" => "pSupplier"
));

$proto12["m_sql"] = "OldCode";
$proto12["m_srcTableName"] = "pSupplier";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "pSupplier",
	"m_srcTableName" => "pSupplier"
));

$proto14["m_sql"] = "Name";
$proto14["m_srcTableName"] = "pSupplier";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "ContactName",
	"m_strTable" => "pSupplier",
	"m_srcTableName" => "pSupplier"
));

$proto16["m_sql"] = "ContactName";
$proto16["m_srcTableName"] = "pSupplier";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "GroupCode",
	"m_strTable" => "pSupplier",
	"m_srcTableName" => "pSupplier"
));

$proto18["m_sql"] = "GroupCode";
$proto18["m_srcTableName"] = "pSupplier";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Address",
	"m_strTable" => "pSupplier",
	"m_srcTableName" => "pSupplier"
));

$proto20["m_sql"] = "Address";
$proto20["m_srcTableName"] = "pSupplier";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "SaleTaxRegNo",
	"m_strTable" => "pSupplier",
	"m_srcTableName" => "pSupplier"
));

$proto22["m_sql"] = "SaleTaxRegNo";
$proto22["m_srcTableName"] = "pSupplier";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "NTNNo",
	"m_strTable" => "pSupplier",
	"m_srcTableName" => "pSupplier"
));

$proto24["m_sql"] = "NTNNo";
$proto24["m_srcTableName"] = "pSupplier";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "CNIC",
	"m_strTable" => "pSupplier",
	"m_srcTableName" => "pSupplier"
));

$proto26["m_sql"] = "CNIC";
$proto26["m_srcTableName"] = "pSupplier";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "Phone",
	"m_strTable" => "pSupplier",
	"m_srcTableName" => "pSupplier"
));

$proto28["m_sql"] = "Phone";
$proto28["m_srcTableName"] = "pSupplier";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "Fax",
	"m_strTable" => "pSupplier",
	"m_srcTableName" => "pSupplier"
));

$proto30["m_sql"] = "Fax";
$proto30["m_srcTableName"] = "pSupplier";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Cell",
	"m_strTable" => "pSupplier",
	"m_srcTableName" => "pSupplier"
));

$proto32["m_sql"] = "Cell";
$proto32["m_srcTableName"] = "pSupplier";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "WebAddress",
	"m_strTable" => "pSupplier",
	"m_srcTableName" => "pSupplier"
));

$proto34["m_sql"] = "WebAddress";
$proto34["m_srcTableName"] = "pSupplier";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "EMail",
	"m_strTable" => "pSupplier",
	"m_srcTableName" => "pSupplier"
));

$proto36["m_sql"] = "EMail";
$proto36["m_srcTableName"] = "pSupplier";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Remarks",
	"m_strTable" => "pSupplier",
	"m_srcTableName" => "pSupplier"
));

$proto38["m_sql"] = "Remarks";
$proto38["m_srcTableName"] = "pSupplier";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "UserName",
	"m_strTable" => "pSupplier",
	"m_srcTableName" => "pSupplier"
));

$proto40["m_sql"] = "UserName";
$proto40["m_srcTableName"] = "pSupplier";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "CreateDate",
	"m_strTable" => "pSupplier",
	"m_srcTableName" => "pSupplier"
));

$proto42["m_sql"] = "CreateDate";
$proto42["m_srcTableName"] = "pSupplier";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "CreateTime",
	"m_strTable" => "pSupplier",
	"m_srcTableName" => "pSupplier"
));

$proto44["m_sql"] = "CreateTime";
$proto44["m_srcTableName"] = "pSupplier";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "UpdateUser",
	"m_strTable" => "pSupplier",
	"m_srcTableName" => "pSupplier"
));

$proto46["m_sql"] = "UpdateUser";
$proto46["m_srcTableName"] = "pSupplier";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "UpdateDate",
	"m_strTable" => "pSupplier",
	"m_srcTableName" => "pSupplier"
));

$proto48["m_sql"] = "UpdateDate";
$proto48["m_srcTableName"] = "pSupplier";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "UpdateTime",
	"m_strTable" => "pSupplier",
	"m_srcTableName" => "pSupplier"
));

$proto50["m_sql"] = "UpdateTime";
$proto50["m_srcTableName"] = "pSupplier";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "Block",
	"m_strTable" => "pSupplier",
	"m_srcTableName" => "pSupplier"
));

$proto52["m_sql"] = "Block";
$proto52["m_srcTableName"] = "pSupplier";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto54=array();
$proto54["m_link"] = "SQLL_MAIN";
			$proto55=array();
$proto55["m_strName"] = "pSupplier";
$proto55["m_srcTableName"] = "pSupplier";
$proto55["m_columns"] = array();
$proto55["m_columns"][] = "ID";
$proto55["m_columns"][] = "Code";
$proto55["m_columns"][] = "BUnit";
$proto55["m_columns"][] = "OldCode";
$proto55["m_columns"][] = "Name";
$proto55["m_columns"][] = "ContactName";
$proto55["m_columns"][] = "GroupCode";
$proto55["m_columns"][] = "Address";
$proto55["m_columns"][] = "SaleTaxRegNo";
$proto55["m_columns"][] = "NTNNo";
$proto55["m_columns"][] = "CNIC";
$proto55["m_columns"][] = "Phone";
$proto55["m_columns"][] = "Fax";
$proto55["m_columns"][] = "Cell";
$proto55["m_columns"][] = "WebAddress";
$proto55["m_columns"][] = "EMail";
$proto55["m_columns"][] = "Remarks";
$proto55["m_columns"][] = "UserName";
$proto55["m_columns"][] = "CreateDate";
$proto55["m_columns"][] = "CreateTime";
$proto55["m_columns"][] = "UpdateUser";
$proto55["m_columns"][] = "UpdateDate";
$proto55["m_columns"][] = "UpdateTime";
$proto55["m_columns"][] = "Block";
$obj = new SQLTable($proto55);

$proto54["m_table"] = $obj;
$proto54["m_sql"] = "pSupplier";
$proto54["m_alias"] = "";
$proto54["m_srcTableName"] = "pSupplier";
$proto56=array();
$proto56["m_sql"] = "";
$proto56["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto56["m_column"]=$obj;
$proto56["m_contained"] = array();
$proto56["m_strCase"] = "";
$proto56["m_havingmode"] = false;
$proto56["m_inBrackets"] = false;
$proto56["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto56);

$proto54["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto54);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="pSupplier";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_psupplier = createSqlQuery_psupplier();


	
		;

																								

$tdatapsupplier[".sqlquery"] = $queryData_psupplier;



include_once(getabspath("include/psupplier_events.php"));
$tdatapsupplier[".hasEvents"] = true;

?>