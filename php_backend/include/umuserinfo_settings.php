<?php
$tdataumuserinfo = array();
$tdataumuserinfo[".searchableFields"] = array();
$tdataumuserinfo[".ShortName"] = "umuserinfo";
$tdataumuserinfo[".OwnerID"] = "";
$tdataumuserinfo[".OriginalTable"] = "umUserInfo";


$tdataumuserinfo[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataumuserinfo[".originalPagesByType"] = $tdataumuserinfo[".pagesByType"];
$tdataumuserinfo[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"list\":[\"list\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataumuserinfo[".originalPages"] = $tdataumuserinfo[".pages"];
$tdataumuserinfo[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"list\":\"list\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataumuserinfo[".originalDefaultPages"] = $tdataumuserinfo[".defaultPages"];

//	field labels
$fieldLabelsumuserinfo = array();
$fieldToolTipsumuserinfo = array();
$pageTitlesumuserinfo = array();
$placeHoldersumuserinfo = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsumuserinfo["English"] = array();
	$fieldToolTipsumuserinfo["English"] = array();
	$placeHoldersumuserinfo["English"] = array();
	$pageTitlesumuserinfo["English"] = array();
	$fieldLabelsumuserinfo["English"]["Code"] = "Code";
	$fieldToolTipsumuserinfo["English"]["Code"] = "";
	$placeHoldersumuserinfo["English"]["Code"] = "";
	$fieldLabelsumuserinfo["English"]["UserName"] = "User Name";
	$fieldToolTipsumuserinfo["English"]["UserName"] = "";
	$placeHoldersumuserinfo["English"]["UserName"] = "";
	$fieldLabelsumuserinfo["English"]["CellNo"] = "Cell No";
	$fieldToolTipsumuserinfo["English"]["CellNo"] = "";
	$placeHoldersumuserinfo["English"]["CellNo"] = "";
	$fieldLabelsumuserinfo["English"]["Email"] = "Email";
	$fieldToolTipsumuserinfo["English"]["Email"] = "";
	$placeHoldersumuserinfo["English"]["Email"] = "";
	$fieldLabelsumuserinfo["English"]["LoginUserName"] = "Login User Name";
	$fieldToolTipsumuserinfo["English"]["LoginUserName"] = "";
	$placeHoldersumuserinfo["English"]["LoginUserName"] = "";
	$fieldLabelsumuserinfo["English"]["Password"] = "Password";
	$fieldToolTipsumuserinfo["English"]["Password"] = "";
	$placeHoldersumuserinfo["English"]["Password"] = "";
	$fieldLabelsumuserinfo["English"]["PasswordHint"] = "Password Hint";
	$fieldToolTipsumuserinfo["English"]["PasswordHint"] = "";
	$placeHoldersumuserinfo["English"]["PasswordHint"] = "";
	$fieldLabelsumuserinfo["English"]["GroupCode"] = "Group Code";
	$fieldToolTipsumuserinfo["English"]["GroupCode"] = "";
	$placeHoldersumuserinfo["English"]["GroupCode"] = "";
	$fieldLabelsumuserinfo["English"]["Remarks"] = "Remarks";
	$fieldToolTipsumuserinfo["English"]["Remarks"] = "";
	$placeHoldersumuserinfo["English"]["Remarks"] = "";
	$fieldLabelsumuserinfo["English"]["UserType"] = "User Type";
	$fieldToolTipsumuserinfo["English"]["UserType"] = "";
	$placeHoldersumuserinfo["English"]["UserType"] = "";
	$fieldLabelsumuserinfo["English"]["isAccountActive"] = "Is Account Active";
	$fieldToolTipsumuserinfo["English"]["isAccountActive"] = "";
	$placeHoldersumuserinfo["English"]["isAccountActive"] = "";
	$fieldLabelsumuserinfo["English"]["NoOfAttempt"] = "No Of Attempt";
	$fieldToolTipsumuserinfo["English"]["NoOfAttempt"] = "";
	$placeHoldersumuserinfo["English"]["NoOfAttempt"] = "";
	$fieldLabelsumuserinfo["English"]["NoOfWorngAttempt"] = "No Of Worng Attempt";
	$fieldToolTipsumuserinfo["English"]["NoOfWorngAttempt"] = "";
	$placeHoldersumuserinfo["English"]["NoOfWorngAttempt"] = "";
	$fieldLabelsumuserinfo["English"]["api_key"] = "Api Key";
	$fieldToolTipsumuserinfo["English"]["api_key"] = "";
	$placeHoldersumuserinfo["English"]["api_key"] = "";
	if (count($fieldToolTipsumuserinfo["English"]))
		$tdataumuserinfo[".isUseToolTips"] = true;
}


	$tdataumuserinfo[".NCSearch"] = true;



$tdataumuserinfo[".shortTableName"] = "umuserinfo";
$tdataumuserinfo[".nSecOptions"] = 0;

$tdataumuserinfo[".mainTableOwnerID"] = "";
$tdataumuserinfo[".entityType"] = 0;
$tdataumuserinfo[".connId"] = "karsaaz_pos_at_localhost";


$tdataumuserinfo[".strOriginalTableName"] = "umUserInfo";

	



$tdataumuserinfo[".showAddInPopup"] = false;

$tdataumuserinfo[".showEditInPopup"] = false;

$tdataumuserinfo[".showViewInPopup"] = false;

$tdataumuserinfo[".listAjax"] = false;
//	temporary
//$tdataumuserinfo[".listAjax"] = false;

	$tdataumuserinfo[".audit"] = false;

	$tdataumuserinfo[".locking"] = false;


$pages = $tdataumuserinfo[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataumuserinfo[".edit"] = true;
	$tdataumuserinfo[".afterEditAction"] = 1;
	$tdataumuserinfo[".closePopupAfterEdit"] = 1;
	$tdataumuserinfo[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataumuserinfo[".add"] = true;
$tdataumuserinfo[".afterAddAction"] = 1;
$tdataumuserinfo[".closePopupAfterAdd"] = 1;
$tdataumuserinfo[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataumuserinfo[".list"] = true;
}



$tdataumuserinfo[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataumuserinfo[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataumuserinfo[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataumuserinfo[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataumuserinfo[".printFriendly"] = true;
}



$tdataumuserinfo[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataumuserinfo[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataumuserinfo[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataumuserinfo[".isUseAjaxSuggest"] = true;

$tdataumuserinfo[".rowHighlite"] = true;





$tdataumuserinfo[".ajaxCodeSnippetAdded"] = false;

$tdataumuserinfo[".buttonsAdded"] = false;

$tdataumuserinfo[".addPageEvents"] = false;

// use timepicker for search panel
$tdataumuserinfo[".isUseTimeForSearch"] = false;


$tdataumuserinfo[".badgeColor"] = "6493EA";


$tdataumuserinfo[".allSearchFields"] = array();
$tdataumuserinfo[".filterFields"] = array();
$tdataumuserinfo[".requiredSearchFields"] = array();

$tdataumuserinfo[".googleLikeFields"] = array();
$tdataumuserinfo[".googleLikeFields"][] = "Code";
$tdataumuserinfo[".googleLikeFields"][] = "UserName";
$tdataumuserinfo[".googleLikeFields"][] = "CellNo";
$tdataumuserinfo[".googleLikeFields"][] = "Email";
$tdataumuserinfo[".googleLikeFields"][] = "LoginUserName";
$tdataumuserinfo[".googleLikeFields"][] = "Password";
$tdataumuserinfo[".googleLikeFields"][] = "PasswordHint";
$tdataumuserinfo[".googleLikeFields"][] = "GroupCode";
$tdataumuserinfo[".googleLikeFields"][] = "Remarks";
$tdataumuserinfo[".googleLikeFields"][] = "UserType";
$tdataumuserinfo[".googleLikeFields"][] = "isAccountActive";
$tdataumuserinfo[".googleLikeFields"][] = "NoOfAttempt";
$tdataumuserinfo[".googleLikeFields"][] = "NoOfWorngAttempt";
$tdataumuserinfo[".googleLikeFields"][] = "api_key";



$tdataumuserinfo[".tableType"] = "list";

$tdataumuserinfo[".printerPageOrientation"] = 0;
$tdataumuserinfo[".nPrinterPageScale"] = 100;

$tdataumuserinfo[".nPrinterSplitRecords"] = 40;

$tdataumuserinfo[".geocodingEnabled"] = false;










$tdataumuserinfo[".pageSize"] = 20;

$tdataumuserinfo[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataumuserinfo[".strOrderBy"] = $tstrOrderBy;

$tdataumuserinfo[".orderindexes"] = array();


$tdataumuserinfo[".sqlHead"] = "SELECT Code,  	UserName,  	CellNo,  	Email,  	LoginUserName,  	Password,  	PasswordHint,  	GroupCode,  	Remarks,  	UserType,  	isAccountActive,  	NoOfAttempt,  	NoOfWorngAttempt,  	api_key";
$tdataumuserinfo[".sqlFrom"] = "FROM umUserInfo";
$tdataumuserinfo[".sqlWhereExpr"] = "";
$tdataumuserinfo[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataumuserinfo[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataumuserinfo[".arrGroupsPerPage"] = $arrGPP;

$tdataumuserinfo[".highlightSearchResults"] = true;

$tableKeysumuserinfo = array();
$tableKeysumuserinfo[] = "Code";
$tdataumuserinfo[".Keys"] = $tableKeysumuserinfo;


$tdataumuserinfo[".hideMobileList"] = array();




//	Code
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "Code";
	$fdata["GoodName"] = "Code";
	$fdata["ownerTable"] = "umUserInfo";
	$fdata["Label"] = GetFieldLabel("umUserInfo","Code");
	$fdata["FieldType"] = 20;


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


	$tdataumuserinfo["Code"] = $fdata;
		$tdataumuserinfo[".searchableFields"][] = "Code";
//	UserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "UserName";
	$fdata["GoodName"] = "UserName";
	$fdata["ownerTable"] = "umUserInfo";
	$fdata["Label"] = GetFieldLabel("umUserInfo","UserName");
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


	$tdataumuserinfo["UserName"] = $fdata;
		$tdataumuserinfo[".searchableFields"][] = "UserName";
//	CellNo
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "CellNo";
	$fdata["GoodName"] = "CellNo";
	$fdata["ownerTable"] = "umUserInfo";
	$fdata["Label"] = GetFieldLabel("umUserInfo","CellNo");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "CellNo";

		$fdata["sourceSingle"] = "CellNo";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "CellNo";

	
	
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


	$tdataumuserinfo["CellNo"] = $fdata;
		$tdataumuserinfo[".searchableFields"][] = "CellNo";
//	Email
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "Email";
	$fdata["GoodName"] = "Email";
	$fdata["ownerTable"] = "umUserInfo";
	$fdata["Label"] = GetFieldLabel("umUserInfo","Email");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Email";

		$fdata["sourceSingle"] = "Email";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Email";

	
	
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


	$tdataumuserinfo["Email"] = $fdata;
		$tdataumuserinfo[".searchableFields"][] = "Email";
//	LoginUserName
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "LoginUserName";
	$fdata["GoodName"] = "LoginUserName";
	$fdata["ownerTable"] = "umUserInfo";
	$fdata["Label"] = GetFieldLabel("umUserInfo","LoginUserName");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "LoginUserName";

		$fdata["sourceSingle"] = "LoginUserName";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "LoginUserName";

	
	
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


	$tdataumuserinfo["LoginUserName"] = $fdata;
		$tdataumuserinfo[".searchableFields"][] = "LoginUserName";
//	Password
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "Password";
	$fdata["GoodName"] = "Password";
	$fdata["ownerTable"] = "umUserInfo";
	$fdata["Label"] = GetFieldLabel("umUserInfo","Password");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "Password";

		$fdata["sourceSingle"] = "Password";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "Password";

	
	
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
			$edata["EditParams"].= " maxlength=150";

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


	$tdataumuserinfo["Password"] = $fdata;
		$tdataumuserinfo[".searchableFields"][] = "Password";
//	PasswordHint
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "PasswordHint";
	$fdata["GoodName"] = "PasswordHint";
	$fdata["ownerTable"] = "umUserInfo";
	$fdata["Label"] = GetFieldLabel("umUserInfo","PasswordHint");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "PasswordHint";

		$fdata["sourceSingle"] = "PasswordHint";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "PasswordHint";

	
	
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


	$tdataumuserinfo["PasswordHint"] = $fdata;
		$tdataumuserinfo[".searchableFields"][] = "PasswordHint";
//	GroupCode
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "GroupCode";
	$fdata["GoodName"] = "GroupCode";
	$fdata["ownerTable"] = "umUserInfo";
	$fdata["Label"] = GetFieldLabel("umUserInfo","GroupCode");
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


	$tdataumuserinfo["GroupCode"] = $fdata;
		$tdataumuserinfo[".searchableFields"][] = "GroupCode";
//	Remarks
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "Remarks";
	$fdata["GoodName"] = "Remarks";
	$fdata["ownerTable"] = "umUserInfo";
	$fdata["Label"] = GetFieldLabel("umUserInfo","Remarks");
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


	$tdataumuserinfo["Remarks"] = $fdata;
		$tdataumuserinfo[".searchableFields"][] = "Remarks";
//	UserType
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 10;
	$fdata["strName"] = "UserType";
	$fdata["GoodName"] = "UserType";
	$fdata["ownerTable"] = "umUserInfo";
	$fdata["Label"] = GetFieldLabel("umUserInfo","UserType");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "UserType";

		$fdata["sourceSingle"] = "UserType";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "UserType";

	
	
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


	$tdataumuserinfo["UserType"] = $fdata;
		$tdataumuserinfo[".searchableFields"][] = "UserType";
//	isAccountActive
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 11;
	$fdata["strName"] = "isAccountActive";
	$fdata["GoodName"] = "isAccountActive";
	$fdata["ownerTable"] = "umUserInfo";
	$fdata["Label"] = GetFieldLabel("umUserInfo","isAccountActive");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "isAccountActive";

		$fdata["sourceSingle"] = "isAccountActive";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "isAccountActive";

	
	
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


	$tdataumuserinfo["isAccountActive"] = $fdata;
		$tdataumuserinfo[".searchableFields"][] = "isAccountActive";
//	NoOfAttempt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 12;
	$fdata["strName"] = "NoOfAttempt";
	$fdata["GoodName"] = "NoOfAttempt";
	$fdata["ownerTable"] = "umUserInfo";
	$fdata["Label"] = GetFieldLabel("umUserInfo","NoOfAttempt");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "NoOfAttempt";

		$fdata["sourceSingle"] = "NoOfAttempt";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NoOfAttempt";

	
	
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


	$tdataumuserinfo["NoOfAttempt"] = $fdata;
		$tdataumuserinfo[".searchableFields"][] = "NoOfAttempt";
//	NoOfWorngAttempt
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 13;
	$fdata["strName"] = "NoOfWorngAttempt";
	$fdata["GoodName"] = "NoOfWorngAttempt";
	$fdata["ownerTable"] = "umUserInfo";
	$fdata["Label"] = GetFieldLabel("umUserInfo","NoOfWorngAttempt");
	$fdata["FieldType"] = 14;


	
	
			

		$fdata["strField"] = "NoOfWorngAttempt";

		$fdata["sourceSingle"] = "NoOfWorngAttempt";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "NoOfWorngAttempt";

	
	
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


	$tdataumuserinfo["NoOfWorngAttempt"] = $fdata;
		$tdataumuserinfo[".searchableFields"][] = "NoOfWorngAttempt";
//	api_key
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 14;
	$fdata["strName"] = "api_key";
	$fdata["GoodName"] = "api_key";
	$fdata["ownerTable"] = "umUserInfo";
	$fdata["Label"] = GetFieldLabel("umUserInfo","api_key");
	$fdata["FieldType"] = 200;


	
	
			

		$fdata["strField"] = "api_key";

		$fdata["sourceSingle"] = "api_key";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "api_key";

	
	
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


	$tdataumuserinfo["api_key"] = $fdata;
		$tdataumuserinfo[".searchableFields"][] = "api_key";


$tables_data["umUserInfo"]=&$tdataumuserinfo;
$field_labels["umUserInfo"] = &$fieldLabelsumuserinfo;
$fieldToolTips["umUserInfo"] = &$fieldToolTipsumuserinfo;
$placeHolders["umUserInfo"] = &$placeHoldersumuserinfo;
$page_titles["umUserInfo"] = &$pageTitlesumuserinfo;


changeTextControlsToDate( "umUserInfo" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["umUserInfo"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["umUserInfo"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_umuserinfo()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "Code,  	UserName,  	CellNo,  	Email,  	LoginUserName,  	Password,  	PasswordHint,  	GroupCode,  	Remarks,  	UserType,  	isAccountActive,  	NoOfAttempt,  	NoOfWorngAttempt,  	api_key";
$proto0["m_strFrom"] = "FROM umUserInfo";
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
	"m_strTable" => "umUserInfo",
	"m_srcTableName" => "umUserInfo"
));

$proto6["m_sql"] = "Code";
$proto6["m_srcTableName"] = "umUserInfo";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "UserName",
	"m_strTable" => "umUserInfo",
	"m_srcTableName" => "umUserInfo"
));

$proto8["m_sql"] = "UserName";
$proto8["m_srcTableName"] = "umUserInfo";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "CellNo",
	"m_strTable" => "umUserInfo",
	"m_srcTableName" => "umUserInfo"
));

$proto10["m_sql"] = "CellNo";
$proto10["m_srcTableName"] = "umUserInfo";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "Email",
	"m_strTable" => "umUserInfo",
	"m_srcTableName" => "umUserInfo"
));

$proto12["m_sql"] = "Email";
$proto12["m_srcTableName"] = "umUserInfo";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "LoginUserName",
	"m_strTable" => "umUserInfo",
	"m_srcTableName" => "umUserInfo"
));

$proto14["m_sql"] = "LoginUserName";
$proto14["m_srcTableName"] = "umUserInfo";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "Password",
	"m_strTable" => "umUserInfo",
	"m_srcTableName" => "umUserInfo"
));

$proto16["m_sql"] = "Password";
$proto16["m_srcTableName"] = "umUserInfo";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "PasswordHint",
	"m_strTable" => "umUserInfo",
	"m_srcTableName" => "umUserInfo"
));

$proto18["m_sql"] = "PasswordHint";
$proto18["m_srcTableName"] = "umUserInfo";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "GroupCode",
	"m_strTable" => "umUserInfo",
	"m_srcTableName" => "umUserInfo"
));

$proto20["m_sql"] = "GroupCode";
$proto20["m_srcTableName"] = "umUserInfo";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "Remarks",
	"m_strTable" => "umUserInfo",
	"m_srcTableName" => "umUserInfo"
));

$proto22["m_sql"] = "Remarks";
$proto22["m_srcTableName"] = "umUserInfo";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
						$proto24=array();
			$obj = new SQLField(array(
	"m_strName" => "UserType",
	"m_strTable" => "umUserInfo",
	"m_srcTableName" => "umUserInfo"
));

$proto24["m_sql"] = "UserType";
$proto24["m_srcTableName"] = "umUserInfo";
$proto24["m_expr"]=$obj;
$proto24["m_alias"] = "";
$obj = new SQLFieldListItem($proto24);

$proto0["m_fieldlist"][]=$obj;
						$proto26=array();
			$obj = new SQLField(array(
	"m_strName" => "isAccountActive",
	"m_strTable" => "umUserInfo",
	"m_srcTableName" => "umUserInfo"
));

$proto26["m_sql"] = "isAccountActive";
$proto26["m_srcTableName"] = "umUserInfo";
$proto26["m_expr"]=$obj;
$proto26["m_alias"] = "";
$obj = new SQLFieldListItem($proto26);

$proto0["m_fieldlist"][]=$obj;
						$proto28=array();
			$obj = new SQLField(array(
	"m_strName" => "NoOfAttempt",
	"m_strTable" => "umUserInfo",
	"m_srcTableName" => "umUserInfo"
));

$proto28["m_sql"] = "NoOfAttempt";
$proto28["m_srcTableName"] = "umUserInfo";
$proto28["m_expr"]=$obj;
$proto28["m_alias"] = "";
$obj = new SQLFieldListItem($proto28);

$proto0["m_fieldlist"][]=$obj;
						$proto30=array();
			$obj = new SQLField(array(
	"m_strName" => "NoOfWorngAttempt",
	"m_strTable" => "umUserInfo",
	"m_srcTableName" => "umUserInfo"
));

$proto30["m_sql"] = "NoOfWorngAttempt";
$proto30["m_srcTableName"] = "umUserInfo";
$proto30["m_expr"]=$obj;
$proto30["m_alias"] = "";
$obj = new SQLFieldListItem($proto30);

$proto0["m_fieldlist"][]=$obj;
						$proto32=array();
			$obj = new SQLField(array(
	"m_strName" => "api_key",
	"m_strTable" => "umUserInfo",
	"m_srcTableName" => "umUserInfo"
));

$proto32["m_sql"] = "api_key";
$proto32["m_srcTableName"] = "umUserInfo";
$proto32["m_expr"]=$obj;
$proto32["m_alias"] = "";
$obj = new SQLFieldListItem($proto32);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto34=array();
$proto34["m_link"] = "SQLL_MAIN";
			$proto35=array();
$proto35["m_strName"] = "umUserInfo";
$proto35["m_srcTableName"] = "umUserInfo";
$proto35["m_columns"] = array();
$proto35["m_columns"][] = "Code";
$proto35["m_columns"][] = "UserName";
$proto35["m_columns"][] = "CellNo";
$proto35["m_columns"][] = "Email";
$proto35["m_columns"][] = "LoginUserName";
$proto35["m_columns"][] = "Password";
$proto35["m_columns"][] = "PasswordHint";
$proto35["m_columns"][] = "GroupCode";
$proto35["m_columns"][] = "Remarks";
$proto35["m_columns"][] = "UserType";
$proto35["m_columns"][] = "isAccountActive";
$proto35["m_columns"][] = "NoOfAttempt";
$proto35["m_columns"][] = "NoOfWorngAttempt";
$proto35["m_columns"][] = "api_key";
$obj = new SQLTable($proto35);

$proto34["m_table"] = $obj;
$proto34["m_sql"] = "umUserInfo";
$proto34["m_alias"] = "";
$proto34["m_srcTableName"] = "umUserInfo";
$proto36=array();
$proto36["m_sql"] = "";
$proto36["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto36["m_column"]=$obj;
$proto36["m_contained"] = array();
$proto36["m_strCase"] = "";
$proto36["m_havingmode"] = false;
$proto36["m_inBrackets"] = false;
$proto36["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto36);

$proto34["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto34);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="umUserInfo";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_umuserinfo = createSqlQuery_umuserinfo();


	
		;

														

$tdataumuserinfo[".sqlquery"] = $queryData_umuserinfo;



include_once(getabspath("include/umuserinfo_events.php"));
$tdataumuserinfo[".hasEvents"] = true;

?>