<?php
$tdatapbu = array();
$tdatapbu[".searchableFields"] = array();
$tdatapbu[".ShortName"] = "pbu";
$tdatapbu[".OwnerID"] = "";
$tdatapbu[".OriginalTable"] = "pBU";


$tdatapbu[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapbu[".originalPagesByType"] = $tdatapbu[".pagesByType"];
$tdatapbu[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapbu[".originalPages"] = $tdatapbu[".pages"];
$tdatapbu[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapbu[".originalDefaultPages"] = $tdatapbu[".defaultPages"];

//	field labels
$fieldLabelspbu = array();
$fieldToolTipspbu = array();
$pageTitlespbu = array();
$placeHolderspbu = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspbu["English"] = array();
	$fieldToolTipspbu["English"] = array();
	$placeHolderspbu["English"] = array();
	$pageTitlespbu["English"] = array();
	$fieldLabelspbu["English"]["Code"] = "Code";
	$fieldToolTipspbu["English"]["Code"] = "";
	$placeHolderspbu["English"]["Code"] = "";
	$fieldLabelspbu["English"]["Name"] = "Name";
	$fieldToolTipspbu["English"]["Name"] = "";
	$placeHolderspbu["English"]["Name"] = "";
	$fieldLabelspbu["English"]["ContactName"] = "Contact Name";
	$fieldToolTipspbu["English"]["ContactName"] = "";
	$placeHolderspbu["English"]["ContactName"] = "";
	$fieldLabelspbu["English"]["BusinessType"] = "Business Type";
	$fieldToolTipspbu["English"]["BusinessType"] = "";
	$placeHolderspbu["English"]["BusinessType"] = "";
	$fieldLabelspbu["English"]["Address"] = "Address";
	$fieldToolTipspbu["English"]["Address"] = "";
	$placeHolderspbu["English"]["Address"] = "";
	$fieldLabelspbu["English"]["Address2"] = "Address2";
	$fieldToolTipspbu["English"]["Address2"] = "";
	$placeHolderspbu["English"]["Address2"] = "";
	$fieldLabelspbu["English"]["Phone"] = "Phone";
	$fieldToolTipspbu["English"]["Phone"] = "";
	$placeHolderspbu["English"]["Phone"] = "";
	$fieldLabelspbu["English"]["Cell"] = "Cell";
	$fieldToolTipspbu["English"]["Cell"] = "";
	$placeHolderspbu["English"]["Cell"] = "";
	$fieldLabelspbu["English"]["Fax"] = "Fax";
	$fieldToolTipspbu["English"]["Fax"] = "";
	$placeHolderspbu["English"]["Fax"] = "";
	$fieldLabelspbu["English"]["EMail"] = "EMail";
	$fieldToolTipspbu["English"]["EMail"] = "";
	$placeHolderspbu["English"]["EMail"] = "";
	$fieldLabelspbu["English"]["WebAddress"] = "Web Address";
	$fieldToolTipspbu["English"]["WebAddress"] = "";
	$placeHolderspbu["English"]["WebAddress"] = "";
	$fieldLabelspbu["English"]["CNIC"] = "CNIC";
	$fieldToolTipspbu["English"]["CNIC"] = "";
	$placeHolderspbu["English"]["CNIC"] = "";
	$fieldLabelspbu["English"]["NTNNo"] = "NTNNo";
	$fieldToolTipspbu["English"]["NTNNo"] = "";
	$placeHolderspbu["English"]["NTNNo"] = "";
	$fieldLabelspbu["English"]["StnNo"] = "Stn No";
	$fieldToolTipspbu["English"]["StnNo"] = "";
	$placeHolderspbu["English"]["StnNo"] = "";
	$fieldLabelspbu["English"]["CurrencyNo"] = "Currency No";
	$fieldToolTipspbu["English"]["CurrencyNo"] = "";
	$placeHolderspbu["English"]["CurrencyNo"] = "";
	$fieldLabelspbu["English"]["BraNo"] = "Bra No";
	$fieldToolTipspbu["English"]["BraNo"] = "";
	$placeHolderspbu["English"]["BraNo"] = "";
	$fieldLabelspbu["English"]["Remarks"] = "Remarks";
	$fieldToolTipspbu["English"]["Remarks"] = "";
	$placeHolderspbu["English"]["Remarks"] = "";
	$fieldLabelspbu["English"]["CountryCode"] = "Country Code";
	$fieldToolTipspbu["English"]["CountryCode"] = "";
	$placeHolderspbu["English"]["CountryCode"] = "";
	$fieldLabelspbu["English"]["ProvinceCode"] = "Province Code";
	$fieldToolTipspbu["English"]["ProvinceCode"] = "";
	$placeHolderspbu["English"]["ProvinceCode"] = "";
	$fieldLabelspbu["English"]["CityCode"] = "City Code";
	$fieldToolTipspbu["English"]["CityCode"] = "";
	$placeHolderspbu["English"]["CityCode"] = "";
	$fieldLabelspbu["English"]["DivisionCode"] = "Division Code";
	$fieldToolTipspbu["English"]["DivisionCode"] = "";
	$placeHolderspbu["English"]["DivisionCode"] = "";
	$fieldLabelspbu["English"]["DistrictCode"] = "District Code";
	$fieldToolTipspbu["English"]["DistrictCode"] = "";
	$placeHolderspbu["English"]["DistrictCode"] = "";
	$fieldLabelspbu["English"]["TahsileCode"] = "Tahsile Code";
	$fieldToolTipspbu["English"]["TahsileCode"] = "";
	$placeHolderspbu["English"]["TahsileCode"] = "";
	$fieldLabelspbu["English"]["MainAreaCode"] = "Main Area Code";
	$fieldToolTipspbu["English"]["MainAreaCode"] = "";
	$placeHolderspbu["English"]["MainAreaCode"] = "";
	$fieldLabelspbu["English"]["SubAreaCode"] = "Sub Area Code";
	$fieldToolTipspbu["English"]["SubAreaCode"] = "";
	$placeHolderspbu["English"]["SubAreaCode"] = "";
	$fieldLabelspbu["English"]["NameInUrdu"] = "Name In Urdu";
	$fieldToolTipspbu["English"]["NameInUrdu"] = "";
	$placeHolderspbu["English"]["NameInUrdu"] = "";
	$fieldLabelspbu["English"]["RemarksInUrdu"] = "Remarks In Urdu";
	$fieldToolTipspbu["English"]["RemarksInUrdu"] = "";
	$placeHolderspbu["English"]["RemarksInUrdu"] = "";
	$fieldLabelspbu["English"]["Pic"] = "Pic";
	$fieldToolTipspbu["English"]["Pic"] = "";
	$placeHolderspbu["English"]["Pic"] = "";
	$fieldLabelspbu["English"]["PictureStatus"] = "Picture Status";
	$fieldToolTipspbu["English"]["PictureStatus"] = "";
	$placeHolderspbu["English"]["PictureStatus"] = "";
	$fieldLabelspbu["English"]["UserName"] = "User Name";
	$fieldToolTipspbu["English"]["UserName"] = "";
	$placeHolderspbu["English"]["UserName"] = "";
	$fieldLabelspbu["English"]["CreateDate"] = "Create Date";
	$fieldToolTipspbu["English"]["CreateDate"] = "";
	$placeHolderspbu["English"]["CreateDate"] = "";
	$fieldLabelspbu["English"]["CreateTime"] = "Create Time";
	$fieldToolTipspbu["English"]["CreateTime"] = "";
	$placeHolderspbu["English"]["CreateTime"] = "";
	$fieldLabelspbu["English"]["CreatePcName"] = "Create Pc Name";
	$fieldToolTipspbu["English"]["CreatePcName"] = "";
	$placeHolderspbu["English"]["CreatePcName"] = "";
	$fieldLabelspbu["English"]["CreatePCUser"] = "Create PCUser";
	$fieldToolTipspbu["English"]["CreatePCUser"] = "";
	$placeHolderspbu["English"]["CreatePCUser"] = "";
	$fieldLabelspbu["English"]["CreateLoc"] = "Create Loc";
	$fieldToolTipspbu["English"]["CreateLoc"] = "";
	$placeHolderspbu["English"]["CreateLoc"] = "";
	$fieldLabelspbu["English"]["CreateDevice"] = "Create Device";
	$fieldToolTipspbu["English"]["CreateDevice"] = "";
	$placeHolderspbu["English"]["CreateDevice"] = "";
	$fieldLabelspbu["English"]["UpdatePcUser"] = "Update Pc User";
	$fieldToolTipspbu["English"]["UpdatePcUser"] = "";
	$placeHolderspbu["English"]["UpdatePcUser"] = "";
	$fieldLabelspbu["English"]["UpdateUser"] = "Update User";
	$fieldToolTipspbu["English"]["UpdateUser"] = "";
	$placeHolderspbu["English"]["UpdateUser"] = "";
	$fieldLabelspbu["English"]["UpdateDate"] = "Update Date";
	$fieldToolTipspbu["English"]["UpdateDate"] = "";
	$placeHolderspbu["English"]["UpdateDate"] = "";
	$fieldLabelspbu["English"]["UpdateTime"] = "Update Time";
	$fieldToolTipspbu["English"]["UpdateTime"] = "";
	$placeHolderspbu["English"]["UpdateTime"] = "";
	$fieldLabelspbu["English"]["UpdatePcName"] = "Update Pc Name";
	$fieldToolTipspbu["English"]["UpdatePcName"] = "";
	$placeHolderspbu["English"]["UpdatePcName"] = "";
	$fieldLabelspbu["English"]["UpdateLoc"] = "Update Loc";
	$fieldToolTipspbu["English"]["UpdateLoc"] = "";
	$placeHolderspbu["English"]["UpdateLoc"] = "";
	$fieldLabelspbu["English"]["UpdateDevice"] = "Update Device";
	$fieldToolTipspbu["English"]["UpdateDevice"] = "";
	$placeHolderspbu["English"]["UpdateDevice"] = "";
	$fieldLabelspbu["English"]["TotalUpdate"] = "Total Update";
	$fieldToolTipspbu["English"]["TotalUpdate"] = "";
	$placeHolderspbu["English"]["TotalUpdate"] = "";
	$fieldLabelspbu["English"]["Block"] = "Block";
	$fieldToolTipspbu["English"]["Block"] = "";
	$placeHolderspbu["English"]["Block"] = "";
	$fieldLabelspbu["English"]["Lock"] = "Lock";
	$fieldToolTipspbu["English"]["Lock"] = "";
	$placeHolderspbu["English"]["Lock"] = "";
	$fieldLabelspbu["English"]["Hide"] = "Hide";
	$fieldToolTipspbu["English"]["Hide"] = "";
	$placeHolderspbu["English"]["Hide"] = "";
	$fieldLabelspbu["English"]["Bookmark"] = "Bookmark";
	$fieldToolTipspbu["English"]["Bookmark"] = "";
	$placeHolderspbu["English"]["Bookmark"] = "";
	$fieldLabelspbu["English"]["BMStatus"] = "BMStatus";
	$fieldToolTipspbu["English"]["BMStatus"] = "";
	$placeHolderspbu["English"]["BMStatus"] = "";
	$fieldLabelspbu["English"]["BMIConID"] = "BMICon ID";
	$fieldToolTipspbu["English"]["BMIConID"] = "";
	$placeHolderspbu["English"]["BMIConID"] = "";
	$fieldLabelspbu["English"]["BMRowID"] = "BMRow ID";
	$fieldToolTipspbu["English"]["BMRowID"] = "";
	$placeHolderspbu["English"]["BMRowID"] = "";
	$fieldLabelspbu["English"]["DBRowID"] = "DBRow ID";
	$fieldToolTipspbu["English"]["DBRowID"] = "";
	$placeHolderspbu["English"]["DBRowID"] = "";
	$fieldLabelspbu["English"]["ECol1"] = "ECol1";
	$fieldToolTipspbu["English"]["ECol1"] = "";
	$placeHolderspbu["English"]["ECol1"] = "";
	$fieldLabelspbu["English"]["VirtualCode"] = "Virtual Code";
	$fieldToolTipspbu["English"]["VirtualCode"] = "";
	$placeHolderspbu["English"]["VirtualCode"] = "";
	if (count($fieldToolTipspbu["English"]))
		$tdatapbu[".isUseToolTips"] = true;
}


	$tdatapbu[".NCSearch"] = true;



$tdatapbu[".shortTableName"] = "pbu";
$tdatapbu[".nSecOptions"] = 0;

$tdatapbu[".mainTableOwnerID"] = "";
$tdatapbu[".entityType"] = 0;
$tdatapbu[".connId"] = "karsaaz_pos_at_localhost";


$tdatapbu[".strOriginalTableName"] = "pBU";

	



$tdatapbu[".showAddInPopup"] = false;

$tdatapbu[".showEditInPopup"] = false;

$tdatapbu[".showViewInPopup"] = false;

$tdatapbu[".listAjax"] = false;
//	temporary
//$tdatapbu[".listAjax"] = false;

	$tdatapbu[".audit"] = false;

	$tdatapbu[".locking"] = false;


$pages = $tdatapbu[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapbu[".edit"] = true;
	$tdatapbu[".afterEditAction"] = 1;
	$tdatapbu[".closePopupAfterEdit"] = 1;
	$tdatapbu[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapbu[".add"] = true;
$tdatapbu[".afterAddAction"] = 1;
$tdatapbu[".closePopupAfterAdd"] = 1;
$tdatapbu[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapbu[".list"] = true;
}



$tdatapbu[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapbu[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapbu[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapbu[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapbu[".printFriendly"] = true;
}



$tdatapbu[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapbu[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapbu[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapbu[".isUseAjaxSuggest"] = true;

$tdatapbu[".rowHighlite"] = true;





$tdatapbu[".ajaxCodeSnippetAdded"] = false;

$tdatapbu[".buttonsAdded"] = false;

$tdatapbu[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapbu[".isUseTimeForSearch"] = false;


$tdatapbu[".badgeColor"] = "4169E1";


$tdatapbu[".allSearchFields"] = array();
$tdatapbu[".filterFields"] = array();
$tdatapbu[".requiredSearchFields"] = array();

$tdatapbu[".googleLikeFields"] = array();
$tdatapbu[".googleLikeFields"][] = "Code";
$tdatapbu[".googleLikeFields"][] = "Name";
$tdatapbu[".googleLikeFields"][] = "ContactName";
$tdatapbu[".googleLikeFields"][] = "BusinessType";
$tdatapbu[".googleLikeFields"][] = "Address";
$tdatapbu[".googleLikeFields"][] = "Address2";
$tdatapbu[".googleLikeFields"][] = "Phone";
$tdatapbu[".googleLikeFields"][] = "Cell";
$tdatapbu[".googleLikeFields"][] = "Fax";
$tdatapbu[".googleLikeFields"][] = "EMail";
$tdatapbu[".googleLikeFields"][] = "WebAddress";
$tdatapbu[".googleLikeFields"][] = "CNIC";
$tdatapbu[".googleLikeFields"][] = "NTNNo";
$tdatapbu[".googleLikeFields"][] = "StnNo";
$tdatapbu[".googleLikeFields"][] = "CurrencyNo";
$tdatapbu[".googleLikeFields"][] = "BraNo";
$tdatapbu[".googleLikeFields"][] = "Remarks";
$tdatapbu[".googleLikeFields"][] = "CountryCode";
$tdatapbu[".googleLikeFields"][] = "ProvinceCode";
$tdatapbu[".googleLikeFields"][] = "CityCode";
$tdatapbu[".googleLikeFields"][] = "DivisionCode";
$tdatapbu[".googleLikeFields"][] = "DistrictCode";
$tdatapbu[".googleLikeFields"][] = "TahsileCode";
$tdatapbu[".googleLikeFields"][] = "MainAreaCode";
$tdatapbu[".googleLikeFields"][] = "SubAreaCode";
$tdatapbu[".googleLikeFields"][] = "NameInUrdu";
$tdatapbu[".googleLikeFields"][] = "RemarksInUrdu";
$tdatapbu[".googleLikeFields"][] = "PictureStatus";
$tdatapbu[".googleLikeFields"][] = "UserName";
$tdatapbu[".googleLikeFields"][] = "CreateDate";
$tdatapbu[".googleLikeFields"][] = "CreateTime";
$tdatapbu[".googleLikeFields"][] = "CreatePcName";
$tdatapbu[".googleLikeFields"][] = "CreatePCUser";
$tdatapbu[".googleLikeFields"][] = "CreateLoc";
$tdatapbu[".googleLikeFields"][] = "CreateDevice";
$tdatapbu[".googleLikeFields"][] = "UpdatePcUser";
$tdatapbu[".googleLikeFields"][] = "UpdateUser";
$tdatapbu[".googleLikeFields"][] = "UpdateDate";
$tdatapbu[".googleLikeFields"][] = "UpdateTime";
$tdatapbu[".googleLikeFields"][] = "UpdatePcName";
$tdatapbu[".googleLikeFields"][] = "UpdateLoc";
$tdatapbu[".googleLikeFields"][] = "UpdateDevice";
$tdatapbu[".googleLikeFields"][] = "TotalUpdate";
$tdatapbu[".googleLikeFields"][] = "Block";
$tdatapbu[".googleLikeFields"][] = "Lock";
$tdatapbu[".googleLikeFields"][] = "Hide";
$tdatapbu[".googleLikeFields"][] = "Bookmark";
$tdatapbu[".googleLikeFields"][] = "BMStatus";
$tdatapbu[".googleLikeFields"][] = "BMIConID";
$tdatapbu[".googleLikeFields"][] = "BMRowID";
$tdatapbu[".googleLikeFields"][] = "DBRowID";
$tdatapbu[".googleLikeFields"][] = "ECol1";
$tdatapbu[".googleLikeFields"][] = "VirtualCode";



$tdatapbu[".tableType"] = "list";

$tdatapbu[".printerPageOrientation"] = 0;
$tdatapbu[".nPrinterPageScale"] = 100;

$tdatapbu[".nPrinterSplitRecords"] = 40;

$tdatapbu[".geocodingEnabled"] = false;










$tdatapbu[".pageSize"] = 20;

$tdatapbu[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapbu[".strOrderBy"] = $tstrOrderBy;

$tdatapbu[".orderindexes"] = array();


$tdatapbu[".sqlHead"] = "SELECT Code,  	Name,  	ContactName,  	BusinessType,  	Address,  	Address2,  	Phone,  	Cell,  	Fax,  	EMail,  	WebAddress,  	CNIC,  	NTNNo,  	StnNo,  	CurrencyNo,  	BraNo,  	Remarks,  	CountryCode,  	ProvinceCode,  	CityCode,  	DivisionCode,  	DistrictCode,  	TahsileCode,  	MainAreaCode,  	SubAreaCode,  	NameInUrdu,  	RemarksInUrdu,  	Pic,  	PictureStatus,  	UserName,  	CreateDate,  	CreateTime,  	CreatePcName,  	CreatePCUser,  	CreateLoc,  	CreateDevice,  	UpdatePcUser,  	UpdateUser,  	UpdateDate,  	UpdateTime,  	UpdatePcName,  	UpdateLoc,  	UpdateDevice,  	TotalUpdate,  	Block,  	`Lock`,  	Hide,  	Bookmark,  	BMStatus,  	BMIConID,  	BMRowID,  	DBRowID,  	ECol1,  	VirtualCode";
$tdatapbu[".sqlFrom"] = "FROM pBU";
$tdatapbu[".sqlWhereExpr"] = "";
$tdatapbu[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapbu[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapbu[".arrGroupsPerPage"] = $arrGPP;

$tdatapbu[".highlightSearchResults"] = true;

$tableKeyspbu = array();
$tableKeyspbu[] = "Code";
$tdatapbu[".Keys"] = $tableKeyspbu;


$tdatapbu[".hideMobileList"] = array();




//	Code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Code";
	$fdata["GoodName"] = "Code";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","Code");
	$fdata["FieldType"] = 3;


		$fdata["AutoInc"] = true;

	
			

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


	$tdatapbu["Code"] = $fdata;
		$tdatapbu[".searchableFields"][] = "Code";
//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","Name");
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


	$tdatapbu["Name"] = $fdata;
		$tdatapbu[".searchableFields"][] = "Name";
//	ContactName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "ContactName";
	$fdata["GoodName"] = "ContactName";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","ContactName");
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


	$tdatapbu["ContactName"] = $fdata;
		$tdatapbu[".searchableFields"][] = "ContactName";
//	BusinessType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "BusinessType";
	$fdata["GoodName"] = "BusinessType";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","BusinessType");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "BusinessType";

		$fdata["sourceSingle"] = "BusinessType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BusinessType";

	
	
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


	$tdatapbu["BusinessType"] = $fdata;
		$tdatapbu[".searchableFields"][] = "BusinessType";
//	Address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Address";
	$fdata["GoodName"] = "Address";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","Address");
	$fdata["FieldType"] = 200;


	
	
			

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


	$tdatapbu["Address"] = $fdata;
		$tdatapbu[".searchableFields"][] = "Address";
//	Address2
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Address2";
	$fdata["GoodName"] = "Address2";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","Address2");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Address2";

		$fdata["sourceSingle"] = "Address2";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Address2";

	
	
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


	$tdatapbu["Address2"] = $fdata;
		$tdatapbu[".searchableFields"][] = "Address2";
//	Phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "Phone";
	$fdata["GoodName"] = "Phone";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","Phone");
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


	$tdatapbu["Phone"] = $fdata;
		$tdatapbu[".searchableFields"][] = "Phone";
//	Cell
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Cell";
	$fdata["GoodName"] = "Cell";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","Cell");
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


	$tdatapbu["Cell"] = $fdata;
		$tdatapbu[".searchableFields"][] = "Cell";
//	Fax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Fax";
	$fdata["GoodName"] = "Fax";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","Fax");
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


	$tdatapbu["Fax"] = $fdata;
		$tdatapbu[".searchableFields"][] = "Fax";
//	EMail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "EMail";
	$fdata["GoodName"] = "EMail";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","EMail");
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


	$tdatapbu["EMail"] = $fdata;
		$tdatapbu[".searchableFields"][] = "EMail";
//	WebAddress
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "WebAddress";
	$fdata["GoodName"] = "WebAddress";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","WebAddress");
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


	$tdatapbu["WebAddress"] = $fdata;
		$tdatapbu[".searchableFields"][] = "WebAddress";
//	CNIC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "CNIC";
	$fdata["GoodName"] = "CNIC";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","CNIC");
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


	$tdatapbu["CNIC"] = $fdata;
		$tdatapbu[".searchableFields"][] = "CNIC";
//	NTNNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "NTNNo";
	$fdata["GoodName"] = "NTNNo";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","NTNNo");
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


	$tdatapbu["NTNNo"] = $fdata;
		$tdatapbu[".searchableFields"][] = "NTNNo";
//	StnNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "StnNo";
	$fdata["GoodName"] = "StnNo";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","StnNo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "StnNo";

		$fdata["sourceSingle"] = "StnNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "StnNo";

	
	
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


	$tdatapbu["StnNo"] = $fdata;
		$tdatapbu[".searchableFields"][] = "StnNo";
//	CurrencyNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "CurrencyNo";
	$fdata["GoodName"] = "CurrencyNo";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","CurrencyNo");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "CurrencyNo";

		$fdata["sourceSingle"] = "CurrencyNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CurrencyNo";

	
	
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


	$tdatapbu["CurrencyNo"] = $fdata;
		$tdatapbu[".searchableFields"][] = "CurrencyNo";
//	BraNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "BraNo";
	$fdata["GoodName"] = "BraNo";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","BraNo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "BraNo";

		$fdata["sourceSingle"] = "BraNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BraNo";

	
	
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


	$tdatapbu["BraNo"] = $fdata;
		$tdatapbu[".searchableFields"][] = "BraNo";
//	Remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "Remarks";
	$fdata["GoodName"] = "Remarks";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","Remarks");
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
			$edata["EditParams"].= " maxlength=1000";

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


	$tdatapbu["Remarks"] = $fdata;
		$tdatapbu[".searchableFields"][] = "Remarks";
//	CountryCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "CountryCode";
	$fdata["GoodName"] = "CountryCode";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","CountryCode");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "CountryCode";

		$fdata["sourceSingle"] = "CountryCode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CountryCode";

	
	
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


	$tdatapbu["CountryCode"] = $fdata;
		$tdatapbu[".searchableFields"][] = "CountryCode";
//	ProvinceCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "ProvinceCode";
	$fdata["GoodName"] = "ProvinceCode";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","ProvinceCode");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "ProvinceCode";

		$fdata["sourceSingle"] = "ProvinceCode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ProvinceCode";

	
	
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


	$tdatapbu["ProvinceCode"] = $fdata;
		$tdatapbu[".searchableFields"][] = "ProvinceCode";
//	CityCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "CityCode";
	$fdata["GoodName"] = "CityCode";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","CityCode");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "CityCode";

		$fdata["sourceSingle"] = "CityCode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CityCode";

	
	
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


	$tdatapbu["CityCode"] = $fdata;
		$tdatapbu[".searchableFields"][] = "CityCode";
//	DivisionCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "DivisionCode";
	$fdata["GoodName"] = "DivisionCode";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","DivisionCode");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "DivisionCode";

		$fdata["sourceSingle"] = "DivisionCode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DivisionCode";

	
	
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


	$tdatapbu["DivisionCode"] = $fdata;
		$tdatapbu[".searchableFields"][] = "DivisionCode";
//	DistrictCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "DistrictCode";
	$fdata["GoodName"] = "DistrictCode";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","DistrictCode");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "DistrictCode";

		$fdata["sourceSingle"] = "DistrictCode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DistrictCode";

	
	
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


	$tdatapbu["DistrictCode"] = $fdata;
		$tdatapbu[".searchableFields"][] = "DistrictCode";
//	TahsileCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "TahsileCode";
	$fdata["GoodName"] = "TahsileCode";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","TahsileCode");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "TahsileCode";

		$fdata["sourceSingle"] = "TahsileCode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TahsileCode";

	
	
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


	$tdatapbu["TahsileCode"] = $fdata;
		$tdatapbu[".searchableFields"][] = "TahsileCode";
//	MainAreaCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "MainAreaCode";
	$fdata["GoodName"] = "MainAreaCode";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","MainAreaCode");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "MainAreaCode";

		$fdata["sourceSingle"] = "MainAreaCode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "MainAreaCode";

	
	
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


	$tdatapbu["MainAreaCode"] = $fdata;
		$tdatapbu[".searchableFields"][] = "MainAreaCode";
//	SubAreaCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "SubAreaCode";
	$fdata["GoodName"] = "SubAreaCode";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","SubAreaCode");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "SubAreaCode";

		$fdata["sourceSingle"] = "SubAreaCode";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "SubAreaCode";

	
	
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


	$tdatapbu["SubAreaCode"] = $fdata;
		$tdatapbu[".searchableFields"][] = "SubAreaCode";
//	NameInUrdu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "NameInUrdu";
	$fdata["GoodName"] = "NameInUrdu";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","NameInUrdu");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "NameInUrdu";

		$fdata["sourceSingle"] = "NameInUrdu";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NameInUrdu";

	
	
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


	$tdatapbu["NameInUrdu"] = $fdata;
		$tdatapbu[".searchableFields"][] = "NameInUrdu";
//	RemarksInUrdu
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "RemarksInUrdu";
	$fdata["GoodName"] = "RemarksInUrdu";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","RemarksInUrdu");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "RemarksInUrdu";

		$fdata["sourceSingle"] = "RemarksInUrdu";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "RemarksInUrdu";

	
	
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
			$edata["EditParams"].= " maxlength=1000";

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


	$tdatapbu["RemarksInUrdu"] = $fdata;
		$tdatapbu[".searchableFields"][] = "RemarksInUrdu";
//	Pic
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "Pic";
	$fdata["GoodName"] = "Pic";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","Pic");
	$fdata["FieldType"] = 128;


	
	
			

		$fdata["strField"] = "Pic";

		$fdata["sourceSingle"] = "Pic";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Pic";

	
	
				$fdata["UploadFolder"] = "files";

//  Begin View Formats
	$fdata["ViewFormats"] = array();

	$vdata = array("ViewFormat" => "Database Image");

	
	
				$vdata["ImageWidth"] = 600;
	$vdata["ImageHeight"] = 400;

		
			$vdata["showGallery"] = true;
	$vdata["galleryMode"] = 2;
	$vdata["captionMode"] = 1;
	$vdata["captionField"] = "";

	$vdata["imageBorder"] = 1;
	$vdata["imageFullWidth"] = 1;


	
	
	
	
	
	
	
	
	
	
		$vdata["NeedEncode"] = true;

	
		$vdata["truncateText"] = true;
	$vdata["NumberOfChars"] = 80;

	$fdata["ViewFormats"]["view"] = $vdata;
//  End View Formats

//	Begin Edit Formats
	$fdata["EditFormats"] = array();

	$edata = array("EditFormat" => "Database image");

	
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
		$fdata["defaultSearchOption"] = "NOT Empty";

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


	$tdatapbu["Pic"] = $fdata;
	//	PictureStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 29;
	$fdata["strName"] = "PictureStatus";
	$fdata["GoodName"] = "PictureStatus";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","PictureStatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PictureStatus";

		$fdata["sourceSingle"] = "PictureStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PictureStatus";

	
	
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


	$tdatapbu["PictureStatus"] = $fdata;
		$tdatapbu[".searchableFields"][] = "PictureStatus";
//	UserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 30;
	$fdata["strName"] = "UserName";
	$fdata["GoodName"] = "UserName";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","UserName");
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


	$tdatapbu["UserName"] = $fdata;
		$tdatapbu[".searchableFields"][] = "UserName";
//	CreateDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 31;
	$fdata["strName"] = "CreateDate";
	$fdata["GoodName"] = "CreateDate";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","CreateDate");
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


	$tdatapbu["CreateDate"] = $fdata;
		$tdatapbu[".searchableFields"][] = "CreateDate";
//	CreateTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 32;
	$fdata["strName"] = "CreateTime";
	$fdata["GoodName"] = "CreateTime";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","CreateTime");
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


	$tdatapbu["CreateTime"] = $fdata;
		$tdatapbu[".searchableFields"][] = "CreateTime";
//	CreatePcName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 33;
	$fdata["strName"] = "CreatePcName";
	$fdata["GoodName"] = "CreatePcName";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","CreatePcName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CreatePcName";

		$fdata["sourceSingle"] = "CreatePcName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CreatePcName";

	
	
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


	$tdatapbu["CreatePcName"] = $fdata;
		$tdatapbu[".searchableFields"][] = "CreatePcName";
//	CreatePCUser
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 34;
	$fdata["strName"] = "CreatePCUser";
	$fdata["GoodName"] = "CreatePCUser";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","CreatePCUser");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CreatePCUser";

		$fdata["sourceSingle"] = "CreatePCUser";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CreatePCUser";

	
	
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


	$tdatapbu["CreatePCUser"] = $fdata;
		$tdatapbu[".searchableFields"][] = "CreatePCUser";
//	CreateLoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 35;
	$fdata["strName"] = "CreateLoc";
	$fdata["GoodName"] = "CreateLoc";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","CreateLoc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CreateLoc";

		$fdata["sourceSingle"] = "CreateLoc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CreateLoc";

	
	
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


	$tdatapbu["CreateLoc"] = $fdata;
		$tdatapbu[".searchableFields"][] = "CreateLoc";
//	CreateDevice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 36;
	$fdata["strName"] = "CreateDevice";
	$fdata["GoodName"] = "CreateDevice";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","CreateDevice");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CreateDevice";

		$fdata["sourceSingle"] = "CreateDevice";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CreateDevice";

	
	
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


	$tdatapbu["CreateDevice"] = $fdata;
		$tdatapbu[".searchableFields"][] = "CreateDevice";
//	UpdatePcUser
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 37;
	$fdata["strName"] = "UpdatePcUser";
	$fdata["GoodName"] = "UpdatePcUser";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","UpdatePcUser");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "UpdatePcUser";

		$fdata["sourceSingle"] = "UpdatePcUser";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UpdatePcUser";

	
	
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


	$tdatapbu["UpdatePcUser"] = $fdata;
		$tdatapbu[".searchableFields"][] = "UpdatePcUser";
//	UpdateUser
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 38;
	$fdata["strName"] = "UpdateUser";
	$fdata["GoodName"] = "UpdateUser";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","UpdateUser");
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


	$tdatapbu["UpdateUser"] = $fdata;
		$tdatapbu[".searchableFields"][] = "UpdateUser";
//	UpdateDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 39;
	$fdata["strName"] = "UpdateDate";
	$fdata["GoodName"] = "UpdateDate";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","UpdateDate");
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


	$tdatapbu["UpdateDate"] = $fdata;
		$tdatapbu[".searchableFields"][] = "UpdateDate";
//	UpdateTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 40;
	$fdata["strName"] = "UpdateTime";
	$fdata["GoodName"] = "UpdateTime";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","UpdateTime");
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


	$tdatapbu["UpdateTime"] = $fdata;
		$tdatapbu[".searchableFields"][] = "UpdateTime";
//	UpdatePcName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 41;
	$fdata["strName"] = "UpdatePcName";
	$fdata["GoodName"] = "UpdatePcName";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","UpdatePcName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "UpdatePcName";

		$fdata["sourceSingle"] = "UpdatePcName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UpdatePcName";

	
	
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


	$tdatapbu["UpdatePcName"] = $fdata;
		$tdatapbu[".searchableFields"][] = "UpdatePcName";
//	UpdateLoc
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 42;
	$fdata["strName"] = "UpdateLoc";
	$fdata["GoodName"] = "UpdateLoc";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","UpdateLoc");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "UpdateLoc";

		$fdata["sourceSingle"] = "UpdateLoc";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UpdateLoc";

	
	
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


	$tdatapbu["UpdateLoc"] = $fdata;
		$tdatapbu[".searchableFields"][] = "UpdateLoc";
//	UpdateDevice
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 43;
	$fdata["strName"] = "UpdateDevice";
	$fdata["GoodName"] = "UpdateDevice";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","UpdateDevice");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "UpdateDevice";

		$fdata["sourceSingle"] = "UpdateDevice";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UpdateDevice";

	
	
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


	$tdatapbu["UpdateDevice"] = $fdata;
		$tdatapbu[".searchableFields"][] = "UpdateDevice";
//	TotalUpdate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 44;
	$fdata["strName"] = "TotalUpdate";
	$fdata["GoodName"] = "TotalUpdate";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","TotalUpdate");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "TotalUpdate";

		$fdata["sourceSingle"] = "TotalUpdate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TotalUpdate";

	
	
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


	$tdatapbu["TotalUpdate"] = $fdata;
		$tdatapbu[".searchableFields"][] = "TotalUpdate";
//	Block
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 45;
	$fdata["strName"] = "Block";
	$fdata["GoodName"] = "Block";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","Block");
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


	$tdatapbu["Block"] = $fdata;
		$tdatapbu[".searchableFields"][] = "Block";
//	Lock
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 46;
	$fdata["strName"] = "Lock";
	$fdata["GoodName"] = "Lock";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","Lock");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "Lock";

		$fdata["sourceSingle"] = "Lock";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "`Lock`";

	
	
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


	$tdatapbu["Lock"] = $fdata;
		$tdatapbu[".searchableFields"][] = "Lock";
//	Hide
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 47;
	$fdata["strName"] = "Hide";
	$fdata["GoodName"] = "Hide";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","Hide");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "Hide";

		$fdata["sourceSingle"] = "Hide";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Hide";

	
	
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


	$tdatapbu["Hide"] = $fdata;
		$tdatapbu[".searchableFields"][] = "Hide";
//	Bookmark
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 48;
	$fdata["strName"] = "Bookmark";
	$fdata["GoodName"] = "Bookmark";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","Bookmark");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "Bookmark";

		$fdata["sourceSingle"] = "Bookmark";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Bookmark";

	
	
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


	$tdatapbu["Bookmark"] = $fdata;
		$tdatapbu[".searchableFields"][] = "Bookmark";
//	BMStatus
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 49;
	$fdata["strName"] = "BMStatus";
	$fdata["GoodName"] = "BMStatus";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","BMStatus");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "BMStatus";

		$fdata["sourceSingle"] = "BMStatus";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BMStatus";

	
	
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


	$tdatapbu["BMStatus"] = $fdata;
		$tdatapbu[".searchableFields"][] = "BMStatus";
//	BMIConID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 50;
	$fdata["strName"] = "BMIConID";
	$fdata["GoodName"] = "BMIConID";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","BMIConID");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "BMIConID";

		$fdata["sourceSingle"] = "BMIConID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BMIConID";

	
	
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


	$tdatapbu["BMIConID"] = $fdata;
		$tdatapbu[".searchableFields"][] = "BMIConID";
//	BMRowID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 51;
	$fdata["strName"] = "BMRowID";
	$fdata["GoodName"] = "BMRowID";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","BMRowID");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "BMRowID";

		$fdata["sourceSingle"] = "BMRowID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "BMRowID";

	
	
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


	$tdatapbu["BMRowID"] = $fdata;
		$tdatapbu[".searchableFields"][] = "BMRowID";
//	DBRowID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 52;
	$fdata["strName"] = "DBRowID";
	$fdata["GoodName"] = "DBRowID";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","DBRowID");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "DBRowID";

		$fdata["sourceSingle"] = "DBRowID";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "DBRowID";

	
	
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


	$tdatapbu["DBRowID"] = $fdata;
		$tdatapbu[".searchableFields"][] = "DBRowID";
//	ECol1
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 53;
	$fdata["strName"] = "ECol1";
	$fdata["GoodName"] = "ECol1";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","ECol1");
	$fdata["FieldType"] = 5;


	
	
			

		$fdata["strField"] = "ECol1";

		$fdata["sourceSingle"] = "ECol1";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "ECol1";

	
	
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


	$tdatapbu["ECol1"] = $fdata;
		$tdatapbu[".searchableFields"][] = "ECol1";
//	VirtualCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 54;
	$fdata["strName"] = "VirtualCode";
	$fdata["GoodName"] = "VirtualCode";
	$fdata["ownerTable"] = "pBU";
	$fdata["Label"] = GetFieldLabel("pBU","VirtualCode");
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
			$edata["EditParams"].= " maxlength=1000";

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


	$tdatapbu["VirtualCode"] = $fdata;
		$tdatapbu[".searchableFields"][] = "VirtualCode";


$tables_data["pBU"]=&$tdatapbu;
$field_labels["pBU"] = &$fieldLabelspbu;
$fieldToolTips["pBU"] = &$fieldToolTipspbu;
$placeHolders["pBU"] = &$placeHolderspbu;
$page_titles["pBU"] = &$pageTitlespbu;


changeTextControlsToDate( "pBU" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["pBU"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["pBU"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_pbu()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Code,  	Name,  	ContactName,  	BusinessType,  	Address,  	Address2,  	Phone,  	Cell,  	Fax,  	EMail,  	WebAddress,  	CNIC,  	NTNNo,  	StnNo,  	CurrencyNo,  	BraNo,  	Remarks,  	CountryCode,  	ProvinceCode,  	CityCode,  	DivisionCode,  	DistrictCode,  	TahsileCode,  	MainAreaCode,  	SubAreaCode,  	NameInUrdu,  	RemarksInUrdu,  	Pic,  	PictureStatus,  	UserName,  	CreateDate,  	CreateTime,  	CreatePcName,  	CreatePCUser,  	CreateLoc,  	CreateDevice,  	UpdatePcUser,  	UpdateUser,  	UpdateDate,  	UpdateTime,  	UpdatePcName,  	UpdateLoc,  	UpdateDevice,  	TotalUpdate,  	Block,  	`Lock`,  	Hide,  	Bookmark,  	BMStatus,  	BMIConID,  	BMRowID,  	DBRowID,  	ECol1,  	VirtualCode";
$proto0["m_strFrom"] = "FROM pBU";
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
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto6["m_sql"] = "Code";
$proto6["m_srcTableName"] = "pBU";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto8["m_sql"] = "Name";
$proto8["m_srcTableName"] = "pBU";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "ContactName",
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto10["m_sql"] = "ContactName";
$proto10["m_srcTableName"] = "pBU";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "BusinessType",
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto12["m_sql"] = "BusinessType";
$proto12["m_srcTableName"] = "pBU";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Address",
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto14["m_sql"] = "Address";
$proto14["m_srcTableName"] = "pBU";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Address2",
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto16["m_sql"] = "Address2";
$proto16["m_srcTableName"] = "pBU";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "Phone",
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto18["m_sql"] = "Phone";
$proto18["m_srcTableName"] = "pBU";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Cell",
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto20["m_sql"] = "Cell";
$proto20["m_srcTableName"] = "pBU";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Fax",
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto22["m_sql"] = "Fax";
$proto22["m_srcTableName"] = "pBU";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "EMail",
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto24["m_sql"] = "EMail";
$proto24["m_srcTableName"] = "pBU";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "WebAddress",
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto26["m_sql"] = "WebAddress";
$proto26["m_srcTableName"] = "pBU";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "CNIC",
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto28["m_sql"] = "CNIC";
$proto28["m_srcTableName"] = "pBU";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "NTNNo",
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto30["m_sql"] = "NTNNo";
$proto30["m_srcTableName"] = "pBU";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "StnNo",
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto32["m_sql"] = "StnNo";
$proto32["m_srcTableName"] = "pBU";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "CurrencyNo",
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto34["m_sql"] = "CurrencyNo";
$proto34["m_srcTableName"] = "pBU";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "BraNo",
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto36["m_sql"] = "BraNo";
$proto36["m_srcTableName"] = "pBU";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "Remarks",
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto38["m_sql"] = "Remarks";
$proto38["m_srcTableName"] = "pBU";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "CountryCode",
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto40["m_sql"] = "CountryCode";
$proto40["m_srcTableName"] = "pBU";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "ProvinceCode",
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto42["m_sql"] = "ProvinceCode";
$proto42["m_srcTableName"] = "pBU";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "CityCode",
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto44["m_sql"] = "CityCode";
$proto44["m_srcTableName"] = "pBU";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "DivisionCode",
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto46["m_sql"] = "DivisionCode";
$proto46["m_srcTableName"] = "pBU";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "DistrictCode",
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto48["m_sql"] = "DistrictCode";
$proto48["m_srcTableName"] = "pBU";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "TahsileCode",
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto50["m_sql"] = "TahsileCode";
$proto50["m_srcTableName"] = "pBU";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "MainAreaCode",
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto52["m_sql"] = "MainAreaCode";
$proto52["m_srcTableName"] = "pBU";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "SubAreaCode",
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto54["m_sql"] = "SubAreaCode";
$proto54["m_srcTableName"] = "pBU";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "NameInUrdu",
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto56["m_sql"] = "NameInUrdu";
$proto56["m_srcTableName"] = "pBU";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "RemarksInUrdu",
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto58["m_sql"] = "RemarksInUrdu";
$proto58["m_srcTableName"] = "pBU";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "Pic",
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto60["m_sql"] = "Pic";
$proto60["m_srcTableName"] = "pBU";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
						$proto62=array();
			$obj = new SQLField(array(
	"m_strName" => "PictureStatus",
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto62["m_sql"] = "PictureStatus";
$proto62["m_srcTableName"] = "pBU";
$proto62["m_expr"]=$obj;
$proto62["m_alias"] = "";
$obj = new SQLFieldListItem($proto62);

$proto0["m_fieldlist"][]=$obj;
						$proto64=array();
			$obj = new SQLField(array(
	"m_strName" => "UserName",
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto64["m_sql"] = "UserName";
$proto64["m_srcTableName"] = "pBU";
$proto64["m_expr"]=$obj;
$proto64["m_alias"] = "";
$obj = new SQLFieldListItem($proto64);

$proto0["m_fieldlist"][]=$obj;
						$proto66=array();
			$obj = new SQLField(array(
	"m_strName" => "CreateDate",
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto66["m_sql"] = "CreateDate";
$proto66["m_srcTableName"] = "pBU";
$proto66["m_expr"]=$obj;
$proto66["m_alias"] = "";
$obj = new SQLFieldListItem($proto66);

$proto0["m_fieldlist"][]=$obj;
						$proto68=array();
			$obj = new SQLField(array(
	"m_strName" => "CreateTime",
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto68["m_sql"] = "CreateTime";
$proto68["m_srcTableName"] = "pBU";
$proto68["m_expr"]=$obj;
$proto68["m_alias"] = "";
$obj = new SQLFieldListItem($proto68);

$proto0["m_fieldlist"][]=$obj;
						$proto70=array();
			$obj = new SQLField(array(
	"m_strName" => "CreatePcName",
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto70["m_sql"] = "CreatePcName";
$proto70["m_srcTableName"] = "pBU";
$proto70["m_expr"]=$obj;
$proto70["m_alias"] = "";
$obj = new SQLFieldListItem($proto70);

$proto0["m_fieldlist"][]=$obj;
						$proto72=array();
			$obj = new SQLField(array(
	"m_strName" => "CreatePCUser",
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto72["m_sql"] = "CreatePCUser";
$proto72["m_srcTableName"] = "pBU";
$proto72["m_expr"]=$obj;
$proto72["m_alias"] = "";
$obj = new SQLFieldListItem($proto72);

$proto0["m_fieldlist"][]=$obj;
						$proto74=array();
			$obj = new SQLField(array(
	"m_strName" => "CreateLoc",
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto74["m_sql"] = "CreateLoc";
$proto74["m_srcTableName"] = "pBU";
$proto74["m_expr"]=$obj;
$proto74["m_alias"] = "";
$obj = new SQLFieldListItem($proto74);

$proto0["m_fieldlist"][]=$obj;
						$proto76=array();
			$obj = new SQLField(array(
	"m_strName" => "CreateDevice",
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto76["m_sql"] = "CreateDevice";
$proto76["m_srcTableName"] = "pBU";
$proto76["m_expr"]=$obj;
$proto76["m_alias"] = "";
$obj = new SQLFieldListItem($proto76);

$proto0["m_fieldlist"][]=$obj;
						$proto78=array();
			$obj = new SQLField(array(
	"m_strName" => "UpdatePcUser",
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto78["m_sql"] = "UpdatePcUser";
$proto78["m_srcTableName"] = "pBU";
$proto78["m_expr"]=$obj;
$proto78["m_alias"] = "";
$obj = new SQLFieldListItem($proto78);

$proto0["m_fieldlist"][]=$obj;
						$proto80=array();
			$obj = new SQLField(array(
	"m_strName" => "UpdateUser",
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto80["m_sql"] = "UpdateUser";
$proto80["m_srcTableName"] = "pBU";
$proto80["m_expr"]=$obj;
$proto80["m_alias"] = "";
$obj = new SQLFieldListItem($proto80);

$proto0["m_fieldlist"][]=$obj;
						$proto82=array();
			$obj = new SQLField(array(
	"m_strName" => "UpdateDate",
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto82["m_sql"] = "UpdateDate";
$proto82["m_srcTableName"] = "pBU";
$proto82["m_expr"]=$obj;
$proto82["m_alias"] = "";
$obj = new SQLFieldListItem($proto82);

$proto0["m_fieldlist"][]=$obj;
						$proto84=array();
			$obj = new SQLField(array(
	"m_strName" => "UpdateTime",
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto84["m_sql"] = "UpdateTime";
$proto84["m_srcTableName"] = "pBU";
$proto84["m_expr"]=$obj;
$proto84["m_alias"] = "";
$obj = new SQLFieldListItem($proto84);

$proto0["m_fieldlist"][]=$obj;
						$proto86=array();
			$obj = new SQLField(array(
	"m_strName" => "UpdatePcName",
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto86["m_sql"] = "UpdatePcName";
$proto86["m_srcTableName"] = "pBU";
$proto86["m_expr"]=$obj;
$proto86["m_alias"] = "";
$obj = new SQLFieldListItem($proto86);

$proto0["m_fieldlist"][]=$obj;
						$proto88=array();
			$obj = new SQLField(array(
	"m_strName" => "UpdateLoc",
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto88["m_sql"] = "UpdateLoc";
$proto88["m_srcTableName"] = "pBU";
$proto88["m_expr"]=$obj;
$proto88["m_alias"] = "";
$obj = new SQLFieldListItem($proto88);

$proto0["m_fieldlist"][]=$obj;
						$proto90=array();
			$obj = new SQLField(array(
	"m_strName" => "UpdateDevice",
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto90["m_sql"] = "UpdateDevice";
$proto90["m_srcTableName"] = "pBU";
$proto90["m_expr"]=$obj;
$proto90["m_alias"] = "";
$obj = new SQLFieldListItem($proto90);

$proto0["m_fieldlist"][]=$obj;
						$proto92=array();
			$obj = new SQLField(array(
	"m_strName" => "TotalUpdate",
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto92["m_sql"] = "TotalUpdate";
$proto92["m_srcTableName"] = "pBU";
$proto92["m_expr"]=$obj;
$proto92["m_alias"] = "";
$obj = new SQLFieldListItem($proto92);

$proto0["m_fieldlist"][]=$obj;
						$proto94=array();
			$obj = new SQLField(array(
	"m_strName" => "Block",
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto94["m_sql"] = "Block";
$proto94["m_srcTableName"] = "pBU";
$proto94["m_expr"]=$obj;
$proto94["m_alias"] = "";
$obj = new SQLFieldListItem($proto94);

$proto0["m_fieldlist"][]=$obj;
						$proto96=array();
			$obj = new SQLField(array(
	"m_strName" => "Lock",
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto96["m_sql"] = "`Lock`";
$proto96["m_srcTableName"] = "pBU";
$proto96["m_expr"]=$obj;
$proto96["m_alias"] = "";
$obj = new SQLFieldListItem($proto96);

$proto0["m_fieldlist"][]=$obj;
						$proto98=array();
			$obj = new SQLField(array(
	"m_strName" => "Hide",
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto98["m_sql"] = "Hide";
$proto98["m_srcTableName"] = "pBU";
$proto98["m_expr"]=$obj;
$proto98["m_alias"] = "";
$obj = new SQLFieldListItem($proto98);

$proto0["m_fieldlist"][]=$obj;
						$proto100=array();
			$obj = new SQLField(array(
	"m_strName" => "Bookmark",
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto100["m_sql"] = "Bookmark";
$proto100["m_srcTableName"] = "pBU";
$proto100["m_expr"]=$obj;
$proto100["m_alias"] = "";
$obj = new SQLFieldListItem($proto100);

$proto0["m_fieldlist"][]=$obj;
						$proto102=array();
			$obj = new SQLField(array(
	"m_strName" => "BMStatus",
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto102["m_sql"] = "BMStatus";
$proto102["m_srcTableName"] = "pBU";
$proto102["m_expr"]=$obj;
$proto102["m_alias"] = "";
$obj = new SQLFieldListItem($proto102);

$proto0["m_fieldlist"][]=$obj;
						$proto104=array();
			$obj = new SQLField(array(
	"m_strName" => "BMIConID",
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto104["m_sql"] = "BMIConID";
$proto104["m_srcTableName"] = "pBU";
$proto104["m_expr"]=$obj;
$proto104["m_alias"] = "";
$obj = new SQLFieldListItem($proto104);

$proto0["m_fieldlist"][]=$obj;
						$proto106=array();
			$obj = new SQLField(array(
	"m_strName" => "BMRowID",
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto106["m_sql"] = "BMRowID";
$proto106["m_srcTableName"] = "pBU";
$proto106["m_expr"]=$obj;
$proto106["m_alias"] = "";
$obj = new SQLFieldListItem($proto106);

$proto0["m_fieldlist"][]=$obj;
						$proto108=array();
			$obj = new SQLField(array(
	"m_strName" => "DBRowID",
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto108["m_sql"] = "DBRowID";
$proto108["m_srcTableName"] = "pBU";
$proto108["m_expr"]=$obj;
$proto108["m_alias"] = "";
$obj = new SQLFieldListItem($proto108);

$proto0["m_fieldlist"][]=$obj;
						$proto110=array();
			$obj = new SQLField(array(
	"m_strName" => "ECol1",
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto110["m_sql"] = "ECol1";
$proto110["m_srcTableName"] = "pBU";
$proto110["m_expr"]=$obj;
$proto110["m_alias"] = "";
$obj = new SQLFieldListItem($proto110);

$proto0["m_fieldlist"][]=$obj;
						$proto112=array();
			$obj = new SQLField(array(
	"m_strName" => "VirtualCode",
	"m_strTable" => "pBU",
	"m_srcTableName" => "pBU"
));

$proto112["m_sql"] = "VirtualCode";
$proto112["m_srcTableName"] = "pBU";
$proto112["m_expr"]=$obj;
$proto112["m_alias"] = "";
$obj = new SQLFieldListItem($proto112);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto114=array();
$proto114["m_link"] = "SQLL_MAIN";
			$proto115=array();
$proto115["m_strName"] = "pBU";
$proto115["m_srcTableName"] = "pBU";
$proto115["m_columns"] = array();
$proto115["m_columns"][] = "Code";
$proto115["m_columns"][] = "Name";
$proto115["m_columns"][] = "ContactName";
$proto115["m_columns"][] = "BusinessType";
$proto115["m_columns"][] = "Address";
$proto115["m_columns"][] = "Address2";
$proto115["m_columns"][] = "Phone";
$proto115["m_columns"][] = "Cell";
$proto115["m_columns"][] = "Fax";
$proto115["m_columns"][] = "EMail";
$proto115["m_columns"][] = "WebAddress";
$proto115["m_columns"][] = "CNIC";
$proto115["m_columns"][] = "NTNNo";
$proto115["m_columns"][] = "StnNo";
$proto115["m_columns"][] = "CurrencyNo";
$proto115["m_columns"][] = "BraNo";
$proto115["m_columns"][] = "Remarks";
$proto115["m_columns"][] = "CountryCode";
$proto115["m_columns"][] = "ProvinceCode";
$proto115["m_columns"][] = "CityCode";
$proto115["m_columns"][] = "DivisionCode";
$proto115["m_columns"][] = "DistrictCode";
$proto115["m_columns"][] = "TahsileCode";
$proto115["m_columns"][] = "MainAreaCode";
$proto115["m_columns"][] = "SubAreaCode";
$proto115["m_columns"][] = "NameInUrdu";
$proto115["m_columns"][] = "RemarksInUrdu";
$proto115["m_columns"][] = "Pic";
$proto115["m_columns"][] = "PictureStatus";
$proto115["m_columns"][] = "UserName";
$proto115["m_columns"][] = "CreateDate";
$proto115["m_columns"][] = "CreateTime";
$proto115["m_columns"][] = "CreatePcName";
$proto115["m_columns"][] = "CreatePCUser";
$proto115["m_columns"][] = "CreateLoc";
$proto115["m_columns"][] = "CreateDevice";
$proto115["m_columns"][] = "UpdatePcUser";
$proto115["m_columns"][] = "UpdateUser";
$proto115["m_columns"][] = "UpdateDate";
$proto115["m_columns"][] = "UpdateTime";
$proto115["m_columns"][] = "UpdatePcName";
$proto115["m_columns"][] = "UpdateLoc";
$proto115["m_columns"][] = "UpdateDevice";
$proto115["m_columns"][] = "TotalUpdate";
$proto115["m_columns"][] = "Block";
$proto115["m_columns"][] = "Lock";
$proto115["m_columns"][] = "Hide";
$proto115["m_columns"][] = "Bookmark";
$proto115["m_columns"][] = "BMStatus";
$proto115["m_columns"][] = "BMIConID";
$proto115["m_columns"][] = "BMRowID";
$proto115["m_columns"][] = "DBRowID";
$proto115["m_columns"][] = "ECol1";
$proto115["m_columns"][] = "VirtualCode";
$obj = new SQLTable($proto115);

$proto114["m_table"] = $obj;
$proto114["m_sql"] = "pBU";
$proto114["m_alias"] = "";
$proto114["m_srcTableName"] = "pBU";
$proto116=array();
$proto116["m_sql"] = "";
$proto116["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto116["m_column"]=$obj;
$proto116["m_contained"] = array();
$proto116["m_strCase"] = "";
$proto116["m_havingmode"] = false;
$proto116["m_inBrackets"] = false;
$proto116["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto116);

$proto114["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto114);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="pBU";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pbu = createSqlQuery_pbu();


	
		;

																																																						

$tdatapbu[".sqlquery"] = $queryData_pbu;



$tdatapbu[".hasEvents"] = false;

?>