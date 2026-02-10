<?php
$tdatapemployee = array();
$tdatapemployee[".searchableFields"] = array();
$tdatapemployee[".ShortName"] = "pemployee";
$tdatapemployee[".OwnerID"] = "";
$tdatapemployee[".OriginalTable"] = "pEmployee";


$tdatapemployee[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatapemployee[".originalPagesByType"] = $tdatapemployee[".pagesByType"];
$tdatapemployee[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatapemployee[".originalPages"] = $tdatapemployee[".pages"];
$tdatapemployee[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatapemployee[".originalDefaultPages"] = $tdatapemployee[".defaultPages"];

//	field labels
$fieldLabelspemployee = array();
$fieldToolTipspemployee = array();
$pageTitlespemployee = array();
$placeHolderspemployee = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelspemployee["English"] = array();
	$fieldToolTipspemployee["English"] = array();
	$placeHolderspemployee["English"] = array();
	$pageTitlespemployee["English"] = array();
	$fieldLabelspemployee["English"]["ID"] = "ID";
	$fieldToolTipspemployee["English"]["ID"] = "";
	$placeHolderspemployee["English"]["ID"] = "";
	$fieldLabelspemployee["English"]["Code"] = "Code";
	$fieldToolTipspemployee["English"]["Code"] = "";
	$placeHolderspemployee["English"]["Code"] = "";
	$fieldLabelspemployee["English"]["BUnit"] = "BUnit";
	$fieldToolTipspemployee["English"]["BUnit"] = "";
	$placeHolderspemployee["English"]["BUnit"] = "";
	$fieldLabelspemployee["English"]["OldCode"] = "Old Code";
	$fieldToolTipspemployee["English"]["OldCode"] = "";
	$placeHolderspemployee["English"]["OldCode"] = "";
	$fieldLabelspemployee["English"]["Name"] = "Name";
	$fieldToolTipspemployee["English"]["Name"] = "";
	$placeHolderspemployee["English"]["Name"] = "";
	$fieldLabelspemployee["English"]["FatherName"] = "Father Name";
	$fieldToolTipspemployee["English"]["FatherName"] = "";
	$placeHolderspemployee["English"]["FatherName"] = "";
	$fieldLabelspemployee["English"]["EmployeeGroup"] = "Employee Group";
	$fieldToolTipspemployee["English"]["EmployeeGroup"] = "";
	$placeHolderspemployee["English"]["EmployeeGroup"] = "";
	$fieldLabelspemployee["English"]["Gender"] = "Gender";
	$fieldToolTipspemployee["English"]["Gender"] = "";
	$placeHolderspemployee["English"]["Gender"] = "";
	$fieldLabelspemployee["English"]["Address"] = "Address";
	$fieldToolTipspemployee["English"]["Address"] = "";
	$placeHolderspemployee["English"]["Address"] = "";
	$fieldLabelspemployee["English"]["Phone"] = "Phone";
	$fieldToolTipspemployee["English"]["Phone"] = "";
	$placeHolderspemployee["English"]["Phone"] = "";
	$fieldLabelspemployee["English"]["Cell"] = "Cell";
	$fieldToolTipspemployee["English"]["Cell"] = "";
	$placeHolderspemployee["English"]["Cell"] = "";
	$fieldLabelspemployee["English"]["CNIC"] = "CNIC";
	$fieldToolTipspemployee["English"]["CNIC"] = "";
	$placeHolderspemployee["English"]["CNIC"] = "";
	$fieldLabelspemployee["English"]["NTNNo"] = "NTNNo";
	$fieldToolTipspemployee["English"]["NTNNo"] = "";
	$placeHolderspemployee["English"]["NTNNo"] = "";
	$fieldLabelspemployee["English"]["Fax"] = "Fax";
	$fieldToolTipspemployee["English"]["Fax"] = "";
	$placeHolderspemployee["English"]["Fax"] = "";
	$fieldLabelspemployee["English"]["EMail"] = "EMail";
	$fieldToolTipspemployee["English"]["EMail"] = "";
	$placeHolderspemployee["English"]["EMail"] = "";
	$fieldLabelspemployee["English"]["PerHourRate"] = "Per Hour Rate";
	$fieldToolTipspemployee["English"]["PerHourRate"] = "";
	$placeHolderspemployee["English"]["PerHourRate"] = "";
	$fieldLabelspemployee["English"]["TotalSalary"] = "Total Salary";
	$fieldToolTipspemployee["English"]["TotalSalary"] = "";
	$placeHolderspemployee["English"]["TotalSalary"] = "";
	$fieldLabelspemployee["English"]["OfficeTimeFrom"] = "Office Time From";
	$fieldToolTipspemployee["English"]["OfficeTimeFrom"] = "";
	$placeHolderspemployee["English"]["OfficeTimeFrom"] = "";
	$fieldLabelspemployee["English"]["OfficeTimeTo"] = "Office Time To";
	$fieldToolTipspemployee["English"]["OfficeTimeTo"] = "";
	$placeHolderspemployee["English"]["OfficeTimeTo"] = "";
	$fieldLabelspemployee["English"]["Remarks"] = "Remarks";
	$fieldToolTipspemployee["English"]["Remarks"] = "";
	$placeHolderspemployee["English"]["Remarks"] = "";
	$fieldLabelspemployee["English"]["UserName"] = "User Name";
	$fieldToolTipspemployee["English"]["UserName"] = "";
	$placeHolderspemployee["English"]["UserName"] = "";
	$fieldLabelspemployee["English"]["CreateDate"] = "Create Date";
	$fieldToolTipspemployee["English"]["CreateDate"] = "";
	$placeHolderspemployee["English"]["CreateDate"] = "";
	$fieldLabelspemployee["English"]["CreateTime"] = "Create Time";
	$fieldToolTipspemployee["English"]["CreateTime"] = "";
	$placeHolderspemployee["English"]["CreateTime"] = "";
	$fieldLabelspemployee["English"]["UpdateUser"] = "Update User";
	$fieldToolTipspemployee["English"]["UpdateUser"] = "";
	$placeHolderspemployee["English"]["UpdateUser"] = "";
	$fieldLabelspemployee["English"]["UpdateDate"] = "Update Date";
	$fieldToolTipspemployee["English"]["UpdateDate"] = "";
	$placeHolderspemployee["English"]["UpdateDate"] = "";
	$fieldLabelspemployee["English"]["UpdateTime"] = "Update Time";
	$fieldToolTipspemployee["English"]["UpdateTime"] = "";
	$placeHolderspemployee["English"]["UpdateTime"] = "";
	$fieldLabelspemployee["English"]["Block"] = "Block";
	$fieldToolTipspemployee["English"]["Block"] = "";
	$placeHolderspemployee["English"]["Block"] = "";
	$fieldLabelspemployee["English"]["comission_group_id"] = "Comission Group Id";
	$fieldToolTipspemployee["English"]["comission_group_id"] = "";
	$placeHolderspemployee["English"]["comission_group_id"] = "";
	if (count($fieldToolTipspemployee["English"]))
		$tdatapemployee[".isUseToolTips"] = true;
}


	$tdatapemployee[".NCSearch"] = true;



$tdatapemployee[".shortTableName"] = "pemployee";
$tdatapemployee[".nSecOptions"] = 0;

$tdatapemployee[".mainTableOwnerID"] = "";
$tdatapemployee[".entityType"] = 0;
$tdatapemployee[".connId"] = "karsaaz_pos_at_localhost";


$tdatapemployee[".strOriginalTableName"] = "pEmployee";

	



$tdatapemployee[".showAddInPopup"] = false;

$tdatapemployee[".showEditInPopup"] = false;

$tdatapemployee[".showViewInPopup"] = false;

$tdatapemployee[".listAjax"] = false;
//	temporary
//$tdatapemployee[".listAjax"] = false;

	$tdatapemployee[".audit"] = false;

	$tdatapemployee[".locking"] = false;


$pages = $tdatapemployee[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatapemployee[".edit"] = true;
	$tdatapemployee[".afterEditAction"] = 1;
	$tdatapemployee[".closePopupAfterEdit"] = 1;
	$tdatapemployee[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatapemployee[".add"] = true;
$tdatapemployee[".afterAddAction"] = 1;
$tdatapemployee[".closePopupAfterAdd"] = 1;
$tdatapemployee[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatapemployee[".list"] = true;
}



$tdatapemployee[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatapemployee[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatapemployee[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatapemployee[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatapemployee[".printFriendly"] = true;
}



$tdatapemployee[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatapemployee[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatapemployee[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatapemployee[".isUseAjaxSuggest"] = true;

$tdatapemployee[".rowHighlite"] = true;





$tdatapemployee[".ajaxCodeSnippetAdded"] = false;

$tdatapemployee[".buttonsAdded"] = false;

$tdatapemployee[".addPageEvents"] = false;

// use timepicker for search panel
$tdatapemployee[".isUseTimeForSearch"] = false;


$tdatapemployee[".badgeColor"] = "778899";


$tdatapemployee[".allSearchFields"] = array();
$tdatapemployee[".filterFields"] = array();
$tdatapemployee[".requiredSearchFields"] = array();

$tdatapemployee[".googleLikeFields"] = array();
$tdatapemployee[".googleLikeFields"][] = "ID";
$tdatapemployee[".googleLikeFields"][] = "Code";
$tdatapemployee[".googleLikeFields"][] = "BUnit";
$tdatapemployee[".googleLikeFields"][] = "OldCode";
$tdatapemployee[".googleLikeFields"][] = "Name";
$tdatapemployee[".googleLikeFields"][] = "FatherName";
$tdatapemployee[".googleLikeFields"][] = "EmployeeGroup";
$tdatapemployee[".googleLikeFields"][] = "Gender";
$tdatapemployee[".googleLikeFields"][] = "Address";
$tdatapemployee[".googleLikeFields"][] = "Phone";
$tdatapemployee[".googleLikeFields"][] = "Cell";
$tdatapemployee[".googleLikeFields"][] = "CNIC";
$tdatapemployee[".googleLikeFields"][] = "NTNNo";
$tdatapemployee[".googleLikeFields"][] = "Fax";
$tdatapemployee[".googleLikeFields"][] = "EMail";
$tdatapemployee[".googleLikeFields"][] = "PerHourRate";
$tdatapemployee[".googleLikeFields"][] = "TotalSalary";
$tdatapemployee[".googleLikeFields"][] = "OfficeTimeFrom";
$tdatapemployee[".googleLikeFields"][] = "OfficeTimeTo";
$tdatapemployee[".googleLikeFields"][] = "Remarks";
$tdatapemployee[".googleLikeFields"][] = "UserName";
$tdatapemployee[".googleLikeFields"][] = "CreateDate";
$tdatapemployee[".googleLikeFields"][] = "CreateTime";
$tdatapemployee[".googleLikeFields"][] = "UpdateUser";
$tdatapemployee[".googleLikeFields"][] = "UpdateDate";
$tdatapemployee[".googleLikeFields"][] = "UpdateTime";
$tdatapemployee[".googleLikeFields"][] = "Block";
$tdatapemployee[".googleLikeFields"][] = "comission_group_id";



$tdatapemployee[".tableType"] = "list";

$tdatapemployee[".printerPageOrientation"] = 0;
$tdatapemployee[".nPrinterPageScale"] = 100;

$tdatapemployee[".nPrinterSplitRecords"] = 40;

$tdatapemployee[".geocodingEnabled"] = false;










$tdatapemployee[".pageSize"] = 20;

$tdatapemployee[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatapemployee[".strOrderBy"] = $tstrOrderBy;

$tdatapemployee[".orderindexes"] = array();


$tdatapemployee[".sqlHead"] = "SELECT ID,  	Code,  	BUnit,  	OldCode,  	Name,  	FatherName,  	EmployeeGroup,  	Gender,  	Address,  	Phone,  	Cell,  	CNIC,  	NTNNo,  	Fax,  	EMail,  	PerHourRate,  	TotalSalary,  	OfficeTimeFrom,  	OfficeTimeTo,  	Remarks,  	UserName,  	CreateDate,  	CreateTime,  	UpdateUser,  	UpdateDate,  	UpdateTime,  	Block,  	comission_group_id";
$tdatapemployee[".sqlFrom"] = "FROM pEmployee";
$tdatapemployee[".sqlWhereExpr"] = "";
$tdatapemployee[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatapemployee[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatapemployee[".arrGroupsPerPage"] = $arrGPP;

$tdatapemployee[".highlightSearchResults"] = true;

$tableKeyspemployee = array();
$tableKeyspemployee[] = "ID";
$tdatapemployee[".Keys"] = $tableKeyspemployee;


$tdatapemployee[".hideMobileList"] = array();




//	ID
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "ID";
	$fdata["GoodName"] = "ID";
	$fdata["ownerTable"] = "pEmployee";
	$fdata["Label"] = GetFieldLabel("pEmployee","ID");
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


	$tdatapemployee["ID"] = $fdata;
		$tdatapemployee[".searchableFields"][] = "ID";
//	Code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "Code";
	$fdata["GoodName"] = "Code";
	$fdata["ownerTable"] = "pEmployee";
	$fdata["Label"] = GetFieldLabel("pEmployee","Code");
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


	$tdatapemployee["Code"] = $fdata;
		$tdatapemployee[".searchableFields"][] = "Code";
//	BUnit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "BUnit";
	$fdata["GoodName"] = "BUnit";
	$fdata["ownerTable"] = "pEmployee";
	$fdata["Label"] = GetFieldLabel("pEmployee","BUnit");
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


	$tdatapemployee["BUnit"] = $fdata;
		$tdatapemployee[".searchableFields"][] = "BUnit";
//	OldCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "OldCode";
	$fdata["GoodName"] = "OldCode";
	$fdata["ownerTable"] = "pEmployee";
	$fdata["Label"] = GetFieldLabel("pEmployee","OldCode");
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


	$tdatapemployee["OldCode"] = $fdata;
		$tdatapemployee[".searchableFields"][] = "OldCode";
//	Name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "Name";
	$fdata["GoodName"] = "Name";
	$fdata["ownerTable"] = "pEmployee";
	$fdata["Label"] = GetFieldLabel("pEmployee","Name");
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


	$tdatapemployee["Name"] = $fdata;
		$tdatapemployee[".searchableFields"][] = "Name";
//	FatherName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "FatherName";
	$fdata["GoodName"] = "FatherName";
	$fdata["ownerTable"] = "pEmployee";
	$fdata["Label"] = GetFieldLabel("pEmployee","FatherName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "FatherName";

		$fdata["sourceSingle"] = "FatherName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "FatherName";

	
	
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


	$tdatapemployee["FatherName"] = $fdata;
		$tdatapemployee[".searchableFields"][] = "FatherName";
//	EmployeeGroup
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "EmployeeGroup";
	$fdata["GoodName"] = "EmployeeGroup";
	$fdata["ownerTable"] = "pEmployee";
	$fdata["Label"] = GetFieldLabel("pEmployee","EmployeeGroup");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "EmployeeGroup";

		$fdata["sourceSingle"] = "EmployeeGroup";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "EmployeeGroup";

	
	
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
	$edata["LookupTable"] = "psEmployeeGroup";
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


	$tdatapemployee["EmployeeGroup"] = $fdata;
		$tdatapemployee[".searchableFields"][] = "EmployeeGroup";
//	Gender
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "Gender";
	$fdata["GoodName"] = "Gender";
	$fdata["ownerTable"] = "pEmployee";
	$fdata["Label"] = GetFieldLabel("pEmployee","Gender");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Gender";

		$fdata["sourceSingle"] = "Gender";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Gender";

	
	
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


	$tdatapemployee["Gender"] = $fdata;
		$tdatapemployee[".searchableFields"][] = "Gender";
//	Address
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Address";
	$fdata["GoodName"] = "Address";
	$fdata["ownerTable"] = "pEmployee";
	$fdata["Label"] = GetFieldLabel("pEmployee","Address");
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


	
	



		$edata["IsRequired"] = true;

	
	
	
			$edata["acceptFileTypesHtml"] = "";

		$edata["maxNumberOfFiles"] = 0;

	
	
	
				$edata["nRows"] = 100;
			$edata["nCols"] = 200;

	
	
		$edata["controlWidth"] = 200;

//	Begin validation
	$edata["validateAs"] = array();
	$edata["validateAs"]["basicValidate"] = array();
	$edata["validateAs"]["customMessages"] = array();
						$edata["validateAs"]["basicValidate"][] = "IsRequired";
		
	
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


	$tdatapemployee["Address"] = $fdata;
		$tdatapemployee[".searchableFields"][] = "Address";
//	Phone
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "Phone";
	$fdata["GoodName"] = "Phone";
	$fdata["ownerTable"] = "pEmployee";
	$fdata["Label"] = GetFieldLabel("pEmployee","Phone");
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


	$tdatapemployee["Phone"] = $fdata;
		$tdatapemployee[".searchableFields"][] = "Phone";
//	Cell
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "Cell";
	$fdata["GoodName"] = "Cell";
	$fdata["ownerTable"] = "pEmployee";
	$fdata["Label"] = GetFieldLabel("pEmployee","Cell");
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


	$tdatapemployee["Cell"] = $fdata;
		$tdatapemployee[".searchableFields"][] = "Cell";
//	CNIC
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "CNIC";
	$fdata["GoodName"] = "CNIC";
	$fdata["ownerTable"] = "pEmployee";
	$fdata["Label"] = GetFieldLabel("pEmployee","CNIC");
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


	$tdatapemployee["CNIC"] = $fdata;
		$tdatapemployee[".searchableFields"][] = "CNIC";
//	NTNNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "NTNNo";
	$fdata["GoodName"] = "NTNNo";
	$fdata["ownerTable"] = "pEmployee";
	$fdata["Label"] = GetFieldLabel("pEmployee","NTNNo");
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


	$tdatapemployee["NTNNo"] = $fdata;
		$tdatapemployee[".searchableFields"][] = "NTNNo";
//	Fax
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "Fax";
	$fdata["GoodName"] = "Fax";
	$fdata["ownerTable"] = "pEmployee";
	$fdata["Label"] = GetFieldLabel("pEmployee","Fax");
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


	$tdatapemployee["Fax"] = $fdata;
		$tdatapemployee[".searchableFields"][] = "Fax";
//	EMail
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 15;
	$fdata["strName"] = "EMail";
	$fdata["GoodName"] = "EMail";
	$fdata["ownerTable"] = "pEmployee";
	$fdata["Label"] = GetFieldLabel("pEmployee","EMail");
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


	$tdatapemployee["EMail"] = $fdata;
		$tdatapemployee[".searchableFields"][] = "EMail";
//	PerHourRate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 16;
	$fdata["strName"] = "PerHourRate";
	$fdata["GoodName"] = "PerHourRate";
	$fdata["ownerTable"] = "pEmployee";
	$fdata["Label"] = GetFieldLabel("pEmployee","PerHourRate");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "PerHourRate";

		$fdata["sourceSingle"] = "PerHourRate";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PerHourRate";

	
	
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


	$tdatapemployee["PerHourRate"] = $fdata;
		$tdatapemployee[".searchableFields"][] = "PerHourRate";
//	TotalSalary
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 17;
	$fdata["strName"] = "TotalSalary";
	$fdata["GoodName"] = "TotalSalary";
	$fdata["ownerTable"] = "pEmployee";
	$fdata["Label"] = GetFieldLabel("pEmployee","TotalSalary");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "TotalSalary";

		$fdata["sourceSingle"] = "TotalSalary";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "TotalSalary";

	
	
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


	$tdatapemployee["TotalSalary"] = $fdata;
		$tdatapemployee[".searchableFields"][] = "TotalSalary";
//	OfficeTimeFrom
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 18;
	$fdata["strName"] = "OfficeTimeFrom";
	$fdata["GoodName"] = "OfficeTimeFrom";
	$fdata["ownerTable"] = "pEmployee";
	$fdata["Label"] = GetFieldLabel("pEmployee","OfficeTimeFrom");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "OfficeTimeFrom";

		$fdata["sourceSingle"] = "OfficeTimeFrom";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OfficeTimeFrom";

	
	
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


	$tdatapemployee["OfficeTimeFrom"] = $fdata;
		$tdatapemployee[".searchableFields"][] = "OfficeTimeFrom";
//	OfficeTimeTo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 19;
	$fdata["strName"] = "OfficeTimeTo";
	$fdata["GoodName"] = "OfficeTimeTo";
	$fdata["ownerTable"] = "pEmployee";
	$fdata["Label"] = GetFieldLabel("pEmployee","OfficeTimeTo");
	$fdata["FieldType"] = 135;


	
	
			

		$fdata["strField"] = "OfficeTimeTo";

		$fdata["sourceSingle"] = "OfficeTimeTo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "OfficeTimeTo";

	
	
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


	$tdatapemployee["OfficeTimeTo"] = $fdata;
		$tdatapemployee[".searchableFields"][] = "OfficeTimeTo";
//	Remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 20;
	$fdata["strName"] = "Remarks";
	$fdata["GoodName"] = "Remarks";
	$fdata["ownerTable"] = "pEmployee";
	$fdata["Label"] = GetFieldLabel("pEmployee","Remarks");
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


	$tdatapemployee["Remarks"] = $fdata;
		$tdatapemployee[".searchableFields"][] = "Remarks";
//	UserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 21;
	$fdata["strName"] = "UserName";
	$fdata["GoodName"] = "UserName";
	$fdata["ownerTable"] = "pEmployee";
	$fdata["Label"] = GetFieldLabel("pEmployee","UserName");
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


	$tdatapemployee["UserName"] = $fdata;
		$tdatapemployee[".searchableFields"][] = "UserName";
//	CreateDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 22;
	$fdata["strName"] = "CreateDate";
	$fdata["GoodName"] = "CreateDate";
	$fdata["ownerTable"] = "pEmployee";
	$fdata["Label"] = GetFieldLabel("pEmployee","CreateDate");
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


	$tdatapemployee["CreateDate"] = $fdata;
		$tdatapemployee[".searchableFields"][] = "CreateDate";
//	CreateTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 23;
	$fdata["strName"] = "CreateTime";
	$fdata["GoodName"] = "CreateTime";
	$fdata["ownerTable"] = "pEmployee";
	$fdata["Label"] = GetFieldLabel("pEmployee","CreateTime");
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


	$tdatapemployee["CreateTime"] = $fdata;
		$tdatapemployee[".searchableFields"][] = "CreateTime";
//	UpdateUser
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 24;
	$fdata["strName"] = "UpdateUser";
	$fdata["GoodName"] = "UpdateUser";
	$fdata["ownerTable"] = "pEmployee";
	$fdata["Label"] = GetFieldLabel("pEmployee","UpdateUser");
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


	$tdatapemployee["UpdateUser"] = $fdata;
		$tdatapemployee[".searchableFields"][] = "UpdateUser";
//	UpdateDate
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 25;
	$fdata["strName"] = "UpdateDate";
	$fdata["GoodName"] = "UpdateDate";
	$fdata["ownerTable"] = "pEmployee";
	$fdata["Label"] = GetFieldLabel("pEmployee","UpdateDate");
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

	
	
		$edata["DateEditType"] = 5;
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


	$tdatapemployee["UpdateDate"] = $fdata;
		$tdatapemployee[".searchableFields"][] = "UpdateDate";
//	UpdateTime
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 26;
	$fdata["strName"] = "UpdateTime";
	$fdata["GoodName"] = "UpdateTime";
	$fdata["ownerTable"] = "pEmployee";
	$fdata["Label"] = GetFieldLabel("pEmployee","UpdateTime");
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


	$tdatapemployee["UpdateTime"] = $fdata;
		$tdatapemployee[".searchableFields"][] = "UpdateTime";
//	Block
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 27;
	$fdata["strName"] = "Block";
	$fdata["GoodName"] = "Block";
	$fdata["ownerTable"] = "pEmployee";
	$fdata["Label"] = GetFieldLabel("pEmployee","Block");
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


	$tdatapemployee["Block"] = $fdata;
		$tdatapemployee[".searchableFields"][] = "Block";
//	comission_group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 28;
	$fdata["strName"] = "comission_group_id";
	$fdata["GoodName"] = "comission_group_id";
	$fdata["ownerTable"] = "pEmployee";
	$fdata["Label"] = GetFieldLabel("pEmployee","comission_group_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "comission_group_id";

		$fdata["sourceSingle"] = "comission_group_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "comission_group_id";

	
	
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


	$tdatapemployee["comission_group_id"] = $fdata;
		$tdatapemployee[".searchableFields"][] = "comission_group_id";


$tables_data["pEmployee"]=&$tdatapemployee;
$field_labels["pEmployee"] = &$fieldLabelspemployee;
$fieldToolTips["pEmployee"] = &$fieldToolTipspemployee;
$placeHolders["pEmployee"] = &$placeHolderspemployee;
$page_titles["pEmployee"] = &$pageTitlespemployee;


changeTextControlsToDate( "pEmployee" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["pEmployee"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["pEmployee"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_pemployee()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "ID,  	Code,  	BUnit,  	OldCode,  	Name,  	FatherName,  	EmployeeGroup,  	Gender,  	Address,  	Phone,  	Cell,  	CNIC,  	NTNNo,  	Fax,  	EMail,  	PerHourRate,  	TotalSalary,  	OfficeTimeFrom,  	OfficeTimeTo,  	Remarks,  	UserName,  	CreateDate,  	CreateTime,  	UpdateUser,  	UpdateDate,  	UpdateTime,  	Block,  	comission_group_id";
$proto0["m_strFrom"] = "FROM pEmployee";
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
	"m_strTable" => "pEmployee",
	"m_srcTableName" => "pEmployee"
));

$proto6["m_sql"] = "ID";
$proto6["m_srcTableName"] = "pEmployee";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "Code",
	"m_strTable" => "pEmployee",
	"m_srcTableName" => "pEmployee"
));

$proto8["m_sql"] = "Code";
$proto8["m_srcTableName"] = "pEmployee";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "BUnit",
	"m_strTable" => "pEmployee",
	"m_srcTableName" => "pEmployee"
));

$proto10["m_sql"] = "BUnit";
$proto10["m_srcTableName"] = "pEmployee";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "OldCode",
	"m_strTable" => "pEmployee",
	"m_srcTableName" => "pEmployee"
));

$proto12["m_sql"] = "OldCode";
$proto12["m_srcTableName"] = "pEmployee";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "Name",
	"m_strTable" => "pEmployee",
	"m_srcTableName" => "pEmployee"
));

$proto14["m_sql"] = "Name";
$proto14["m_srcTableName"] = "pEmployee";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "FatherName",
	"m_strTable" => "pEmployee",
	"m_srcTableName" => "pEmployee"
));

$proto16["m_sql"] = "FatherName";
$proto16["m_srcTableName"] = "pEmployee";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "EmployeeGroup",
	"m_strTable" => "pEmployee",
	"m_srcTableName" => "pEmployee"
));

$proto18["m_sql"] = "EmployeeGroup";
$proto18["m_srcTableName"] = "pEmployee";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "Gender",
	"m_strTable" => "pEmployee",
	"m_srcTableName" => "pEmployee"
));

$proto20["m_sql"] = "Gender";
$proto20["m_srcTableName"] = "pEmployee";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Address",
	"m_strTable" => "pEmployee",
	"m_srcTableName" => "pEmployee"
));

$proto22["m_sql"] = "Address";
$proto22["m_srcTableName"] = "pEmployee";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "Phone",
	"m_strTable" => "pEmployee",
	"m_srcTableName" => "pEmployee"
));

$proto24["m_sql"] = "Phone";
$proto24["m_srcTableName"] = "pEmployee";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "Cell",
	"m_strTable" => "pEmployee",
	"m_srcTableName" => "pEmployee"
));

$proto26["m_sql"] = "Cell";
$proto26["m_srcTableName"] = "pEmployee";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "CNIC",
	"m_strTable" => "pEmployee",
	"m_srcTableName" => "pEmployee"
));

$proto28["m_sql"] = "CNIC";
$proto28["m_srcTableName"] = "pEmployee";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "NTNNo",
	"m_strTable" => "pEmployee",
	"m_srcTableName" => "pEmployee"
));

$proto30["m_sql"] = "NTNNo";
$proto30["m_srcTableName"] = "pEmployee";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "Fax",
	"m_strTable" => "pEmployee",
	"m_srcTableName" => "pEmployee"
));

$proto32["m_sql"] = "Fax";
$proto32["m_srcTableName"] = "pEmployee";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
						$proto34=array();
			$obj = new SQLField(array(
	"m_strName" => "EMail",
	"m_strTable" => "pEmployee",
	"m_srcTableName" => "pEmployee"
));

$proto34["m_sql"] = "EMail";
$proto34["m_srcTableName"] = "pEmployee";
$proto34["m_expr"]=$obj;
$proto34["m_alias"] = "";
$obj = new SQLFieldListItem($proto34);

$proto0["m_fieldlist"][]=$obj;
						$proto36=array();
			$obj = new SQLField(array(
	"m_strName" => "PerHourRate",
	"m_strTable" => "pEmployee",
	"m_srcTableName" => "pEmployee"
));

$proto36["m_sql"] = "PerHourRate";
$proto36["m_srcTableName"] = "pEmployee";
$proto36["m_expr"]=$obj;
$proto36["m_alias"] = "";
$obj = new SQLFieldListItem($proto36);

$proto0["m_fieldlist"][]=$obj;
						$proto38=array();
			$obj = new SQLField(array(
	"m_strName" => "TotalSalary",
	"m_strTable" => "pEmployee",
	"m_srcTableName" => "pEmployee"
));

$proto38["m_sql"] = "TotalSalary";
$proto38["m_srcTableName"] = "pEmployee";
$proto38["m_expr"]=$obj;
$proto38["m_alias"] = "";
$obj = new SQLFieldListItem($proto38);

$proto0["m_fieldlist"][]=$obj;
						$proto40=array();
			$obj = new SQLField(array(
	"m_strName" => "OfficeTimeFrom",
	"m_strTable" => "pEmployee",
	"m_srcTableName" => "pEmployee"
));

$proto40["m_sql"] = "OfficeTimeFrom";
$proto40["m_srcTableName"] = "pEmployee";
$proto40["m_expr"]=$obj;
$proto40["m_alias"] = "";
$obj = new SQLFieldListItem($proto40);

$proto0["m_fieldlist"][]=$obj;
						$proto42=array();
			$obj = new SQLField(array(
	"m_strName" => "OfficeTimeTo",
	"m_strTable" => "pEmployee",
	"m_srcTableName" => "pEmployee"
));

$proto42["m_sql"] = "OfficeTimeTo";
$proto42["m_srcTableName"] = "pEmployee";
$proto42["m_expr"]=$obj;
$proto42["m_alias"] = "";
$obj = new SQLFieldListItem($proto42);

$proto0["m_fieldlist"][]=$obj;
						$proto44=array();
			$obj = new SQLField(array(
	"m_strName" => "Remarks",
	"m_strTable" => "pEmployee",
	"m_srcTableName" => "pEmployee"
));

$proto44["m_sql"] = "Remarks";
$proto44["m_srcTableName"] = "pEmployee";
$proto44["m_expr"]=$obj;
$proto44["m_alias"] = "";
$obj = new SQLFieldListItem($proto44);

$proto0["m_fieldlist"][]=$obj;
						$proto46=array();
			$obj = new SQLField(array(
	"m_strName" => "UserName",
	"m_strTable" => "pEmployee",
	"m_srcTableName" => "pEmployee"
));

$proto46["m_sql"] = "UserName";
$proto46["m_srcTableName"] = "pEmployee";
$proto46["m_expr"]=$obj;
$proto46["m_alias"] = "";
$obj = new SQLFieldListItem($proto46);

$proto0["m_fieldlist"][]=$obj;
						$proto48=array();
			$obj = new SQLField(array(
	"m_strName" => "CreateDate",
	"m_strTable" => "pEmployee",
	"m_srcTableName" => "pEmployee"
));

$proto48["m_sql"] = "CreateDate";
$proto48["m_srcTableName"] = "pEmployee";
$proto48["m_expr"]=$obj;
$proto48["m_alias"] = "";
$obj = new SQLFieldListItem($proto48);

$proto0["m_fieldlist"][]=$obj;
						$proto50=array();
			$obj = new SQLField(array(
	"m_strName" => "CreateTime",
	"m_strTable" => "pEmployee",
	"m_srcTableName" => "pEmployee"
));

$proto50["m_sql"] = "CreateTime";
$proto50["m_srcTableName"] = "pEmployee";
$proto50["m_expr"]=$obj;
$proto50["m_alias"] = "";
$obj = new SQLFieldListItem($proto50);

$proto0["m_fieldlist"][]=$obj;
						$proto52=array();
			$obj = new SQLField(array(
	"m_strName" => "UpdateUser",
	"m_strTable" => "pEmployee",
	"m_srcTableName" => "pEmployee"
));

$proto52["m_sql"] = "UpdateUser";
$proto52["m_srcTableName"] = "pEmployee";
$proto52["m_expr"]=$obj;
$proto52["m_alias"] = "";
$obj = new SQLFieldListItem($proto52);

$proto0["m_fieldlist"][]=$obj;
						$proto54=array();
			$obj = new SQLField(array(
	"m_strName" => "UpdateDate",
	"m_strTable" => "pEmployee",
	"m_srcTableName" => "pEmployee"
));

$proto54["m_sql"] = "UpdateDate";
$proto54["m_srcTableName"] = "pEmployee";
$proto54["m_expr"]=$obj;
$proto54["m_alias"] = "";
$obj = new SQLFieldListItem($proto54);

$proto0["m_fieldlist"][]=$obj;
						$proto56=array();
			$obj = new SQLField(array(
	"m_strName" => "UpdateTime",
	"m_strTable" => "pEmployee",
	"m_srcTableName" => "pEmployee"
));

$proto56["m_sql"] = "UpdateTime";
$proto56["m_srcTableName"] = "pEmployee";
$proto56["m_expr"]=$obj;
$proto56["m_alias"] = "";
$obj = new SQLFieldListItem($proto56);

$proto0["m_fieldlist"][]=$obj;
						$proto58=array();
			$obj = new SQLField(array(
	"m_strName" => "Block",
	"m_strTable" => "pEmployee",
	"m_srcTableName" => "pEmployee"
));

$proto58["m_sql"] = "Block";
$proto58["m_srcTableName"] = "pEmployee";
$proto58["m_expr"]=$obj;
$proto58["m_alias"] = "";
$obj = new SQLFieldListItem($proto58);

$proto0["m_fieldlist"][]=$obj;
						$proto60=array();
			$obj = new SQLField(array(
	"m_strName" => "comission_group_id",
	"m_strTable" => "pEmployee",
	"m_srcTableName" => "pEmployee"
));

$proto60["m_sql"] = "comission_group_id";
$proto60["m_srcTableName"] = "pEmployee";
$proto60["m_expr"]=$obj;
$proto60["m_alias"] = "";
$obj = new SQLFieldListItem($proto60);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto62=array();
$proto62["m_link"] = "SQLL_MAIN";
			$proto63=array();
$proto63["m_strName"] = "pEmployee";
$proto63["m_srcTableName"] = "pEmployee";
$proto63["m_columns"] = array();
$proto63["m_columns"][] = "ID";
$proto63["m_columns"][] = "Code";
$proto63["m_columns"][] = "BUnit";
$proto63["m_columns"][] = "OldCode";
$proto63["m_columns"][] = "Name";
$proto63["m_columns"][] = "FatherName";
$proto63["m_columns"][] = "EmployeeGroup";
$proto63["m_columns"][] = "Gender";
$proto63["m_columns"][] = "Address";
$proto63["m_columns"][] = "Phone";
$proto63["m_columns"][] = "Cell";
$proto63["m_columns"][] = "CNIC";
$proto63["m_columns"][] = "NTNNo";
$proto63["m_columns"][] = "Fax";
$proto63["m_columns"][] = "EMail";
$proto63["m_columns"][] = "PerHourRate";
$proto63["m_columns"][] = "TotalSalary";
$proto63["m_columns"][] = "OfficeTimeFrom";
$proto63["m_columns"][] = "OfficeTimeTo";
$proto63["m_columns"][] = "Remarks";
$proto63["m_columns"][] = "UserName";
$proto63["m_columns"][] = "CreateDate";
$proto63["m_columns"][] = "CreateTime";
$proto63["m_columns"][] = "UpdateUser";
$proto63["m_columns"][] = "UpdateDate";
$proto63["m_columns"][] = "UpdateTime";
$proto63["m_columns"][] = "Block";
$proto63["m_columns"][] = "comission_group_id";
$obj = new SQLTable($proto63);

$proto62["m_table"] = $obj;
$proto62["m_sql"] = "pEmployee";
$proto62["m_alias"] = "";
$proto62["m_srcTableName"] = "pEmployee";
$proto64=array();
$proto64["m_sql"] = "";
$proto64["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto64["m_column"]=$obj;
$proto64["m_contained"] = array();
$proto64["m_strCase"] = "";
$proto64["m_havingmode"] = false;
$proto64["m_inBrackets"] = false;
$proto64["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto64);

$proto62["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto62);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="pEmployee";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_pemployee = createSqlQuery_pemployee();


	
		;

																												

$tdatapemployee[".sqlquery"] = $queryData_pemployee;



include_once(getabspath("include/pemployee_events.php"));
$tdatapemployee[".hasEvents"] = true;

?>