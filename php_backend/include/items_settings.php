<?php
$tdataitems = array();
$tdataitems[".searchableFields"] = array();
$tdataitems[".ShortName"] = "items";
$tdataitems[".OwnerID"] = "";
$tdataitems[".OriginalTable"] = "items";


$tdataitems[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdataitems[".originalPagesByType"] = $tdataitems[".pagesByType"];
$tdataitems[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdataitems[".originalPages"] = $tdataitems[".pages"];
$tdataitems[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdataitems[".originalDefaultPages"] = $tdataitems[".defaultPages"];

//	field labels
$fieldLabelsitems = array();
$fieldToolTipsitems = array();
$pageTitlesitems = array();
$placeHoldersitems = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelsitems["English"] = array();
	$fieldToolTipsitems["English"] = array();
	$placeHoldersitems["English"] = array();
	$pageTitlesitems["English"] = array();
	$fieldLabelsitems["English"]["id"] = "Id";
	$fieldToolTipsitems["English"]["id"] = "";
	$placeHoldersitems["English"]["id"] = "";
	$fieldLabelsitems["English"]["name"] = "Name";
	$fieldToolTipsitems["English"]["name"] = "";
	$placeHoldersitems["English"]["name"] = "";
	$fieldLabelsitems["English"]["item_type"] = "Item Type";
	$fieldToolTipsitems["English"]["item_type"] = "";
	$placeHoldersitems["English"]["item_type"] = "";
	$fieldLabelsitems["English"]["weight_unit"] = "Weight Unit";
	$fieldToolTipsitems["English"]["weight_unit"] = "";
	$placeHoldersitems["English"]["weight_unit"] = "";
	$fieldLabelsitems["English"]["cal_by"] = "Cal By";
	$fieldToolTipsitems["English"]["cal_by"] = "";
	$placeHoldersitems["English"]["cal_by"] = "";
	$fieldLabelsitems["English"]["added_by"] = "Added By";
	$fieldToolTipsitems["English"]["added_by"] = "";
	$placeHoldersitems["English"]["added_by"] = "";
	$fieldLabelsitems["English"]["added_on"] = "Added On";
	$fieldToolTipsitems["English"]["added_on"] = "";
	$placeHoldersitems["English"]["added_on"] = "";
	$fieldLabelsitems["English"]["modified_by"] = "Modified By";
	$fieldToolTipsitems["English"]["modified_by"] = "";
	$placeHoldersitems["English"]["modified_by"] = "";
	$fieldLabelsitems["English"]["modified_on"] = "Modified On";
	$fieldToolTipsitems["English"]["modified_on"] = "";
	$placeHoldersitems["English"]["modified_on"] = "";
	if (count($fieldToolTipsitems["English"]))
		$tdataitems[".isUseToolTips"] = true;
}


	$tdataitems[".NCSearch"] = true;



$tdataitems[".shortTableName"] = "items";
$tdataitems[".nSecOptions"] = 0;

$tdataitems[".mainTableOwnerID"] = "";
$tdataitems[".entityType"] = 0;
$tdataitems[".connId"] = "karsaaz_pos_at_localhost";


$tdataitems[".strOriginalTableName"] = "items";

	



$tdataitems[".showAddInPopup"] = false;

$tdataitems[".showEditInPopup"] = false;

$tdataitems[".showViewInPopup"] = false;

$tdataitems[".listAjax"] = false;
//	temporary
//$tdataitems[".listAjax"] = false;

	$tdataitems[".audit"] = false;

	$tdataitems[".locking"] = false;


$pages = $tdataitems[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdataitems[".edit"] = true;
	$tdataitems[".afterEditAction"] = 1;
	$tdataitems[".closePopupAfterEdit"] = 1;
	$tdataitems[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdataitems[".add"] = true;
$tdataitems[".afterAddAction"] = 1;
$tdataitems[".closePopupAfterAdd"] = 1;
$tdataitems[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdataitems[".list"] = true;
}



$tdataitems[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdataitems[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdataitems[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdataitems[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdataitems[".printFriendly"] = true;
}



$tdataitems[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdataitems[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdataitems[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdataitems[".isUseAjaxSuggest"] = true;

$tdataitems[".rowHighlite"] = true;





$tdataitems[".ajaxCodeSnippetAdded"] = false;

$tdataitems[".buttonsAdded"] = false;

$tdataitems[".addPageEvents"] = false;

// use timepicker for search panel
$tdataitems[".isUseTimeForSearch"] = false;


$tdataitems[".badgeColor"] = "3CB371";


$tdataitems[".allSearchFields"] = array();
$tdataitems[".filterFields"] = array();
$tdataitems[".requiredSearchFields"] = array();

$tdataitems[".googleLikeFields"] = array();
$tdataitems[".googleLikeFields"][] = "id";
$tdataitems[".googleLikeFields"][] = "name";
$tdataitems[".googleLikeFields"][] = "item_type";
$tdataitems[".googleLikeFields"][] = "weight_unit";
$tdataitems[".googleLikeFields"][] = "cal_by";
$tdataitems[".googleLikeFields"][] = "added_by";
$tdataitems[".googleLikeFields"][] = "added_on";
$tdataitems[".googleLikeFields"][] = "modified_by";
$tdataitems[".googleLikeFields"][] = "modified_on";



$tdataitems[".tableType"] = "list";

$tdataitems[".printerPageOrientation"] = 0;
$tdataitems[".nPrinterPageScale"] = 100;

$tdataitems[".nPrinterSplitRecords"] = 40;

$tdataitems[".geocodingEnabled"] = false;










$tdataitems[".pageSize"] = 20;

$tdataitems[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdataitems[".strOrderBy"] = $tstrOrderBy;

$tdataitems[".orderindexes"] = array();


$tdataitems[".sqlHead"] = "SELECT id,  	name,  	item_type,  	weight_unit,  	cal_by,  	added_by,  	added_on,  	modified_by,  	modified_on";
$tdataitems[".sqlFrom"] = "FROM items";
$tdataitems[".sqlWhereExpr"] = "";
$tdataitems[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdataitems[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdataitems[".arrGroupsPerPage"] = $arrGPP;

$tdataitems[".highlightSearchResults"] = true;

$tableKeysitems = array();
$tableKeysitems[] = "id";
$tdataitems[".Keys"] = $tableKeysitems;


$tdataitems[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "items";
	$fdata["Label"] = GetFieldLabel("items","id");
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


	$tdataitems["id"] = $fdata;
		$tdataitems[".searchableFields"][] = "id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "items";
	$fdata["Label"] = GetFieldLabel("items","name");
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


	$tdataitems["name"] = $fdata;
		$tdataitems[".searchableFields"][] = "name";
//	item_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "item_type";
	$fdata["GoodName"] = "item_type";
	$fdata["ownerTable"] = "items";
	$fdata["Label"] = GetFieldLabel("items","item_type");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "item_type";

		$fdata["sourceSingle"] = "item_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "item_type";

	
	
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


	$tdataitems["item_type"] = $fdata;
		$tdataitems[".searchableFields"][] = "item_type";
//	weight_unit
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "weight_unit";
	$fdata["GoodName"] = "weight_unit";
	$fdata["ownerTable"] = "items";
	$fdata["Label"] = GetFieldLabel("items","weight_unit");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "weight_unit";

		$fdata["sourceSingle"] = "weight_unit";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "weight_unit";

	
	
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


	$tdataitems["weight_unit"] = $fdata;
		$tdataitems[".searchableFields"][] = "weight_unit";
//	cal_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "cal_by";
	$fdata["GoodName"] = "cal_by";
	$fdata["ownerTable"] = "items";
	$fdata["Label"] = GetFieldLabel("items","cal_by");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "cal_by";

		$fdata["sourceSingle"] = "cal_by";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "cal_by";

	
	
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


	$tdataitems["cal_by"] = $fdata;
		$tdataitems[".searchableFields"][] = "cal_by";
//	added_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 6;
	$fdata["strName"] = "added_by";
	$fdata["GoodName"] = "added_by";
	$fdata["ownerTable"] = "items";
	$fdata["Label"] = GetFieldLabel("items","added_by");
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


	$tdataitems["added_by"] = $fdata;
		$tdataitems[".searchableFields"][] = "added_by";
//	added_on
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 7;
	$fdata["strName"] = "added_on";
	$fdata["GoodName"] = "added_on";
	$fdata["ownerTable"] = "items";
	$fdata["Label"] = GetFieldLabel("items","added_on");
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


	$tdataitems["added_on"] = $fdata;
		$tdataitems[".searchableFields"][] = "added_on";
//	modified_by
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 8;
	$fdata["strName"] = "modified_by";
	$fdata["GoodName"] = "modified_by";
	$fdata["ownerTable"] = "items";
	$fdata["Label"] = GetFieldLabel("items","modified_by");
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


	$tdataitems["modified_by"] = $fdata;
		$tdataitems[".searchableFields"][] = "modified_by";
//	modified_on
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 9;
	$fdata["strName"] = "modified_on";
	$fdata["GoodName"] = "modified_on";
	$fdata["ownerTable"] = "items";
	$fdata["Label"] = GetFieldLabel("items","modified_on");
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


	$tdataitems["modified_on"] = $fdata;
		$tdataitems[".searchableFields"][] = "modified_on";


$tables_data["items"]=&$tdataitems;
$field_labels["items"] = &$fieldLabelsitems;
$fieldToolTips["items"] = &$fieldToolTipsitems;
$placeHolders["items"] = &$placeHoldersitems;
$page_titles["items"] = &$pageTitlesitems;


changeTextControlsToDate( "items" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["items"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["items"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_items()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	name,  	item_type,  	weight_unit,  	cal_by,  	added_by,  	added_on,  	modified_by,  	modified_on";
$proto0["m_strFrom"] = "FROM items";
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
	"m_strTable" => "items",
	"m_srcTableName" => "items"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "items";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "items",
	"m_srcTableName" => "items"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "items";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "item_type",
	"m_strTable" => "items",
	"m_srcTableName" => "items"
));

$proto10["m_sql"] = "item_type";
$proto10["m_srcTableName"] = "items";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "weight_unit",
	"m_strTable" => "items",
	"m_srcTableName" => "items"
));

$proto12["m_sql"] = "weight_unit";
$proto12["m_srcTableName"] = "items";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "cal_by",
	"m_strTable" => "items",
	"m_srcTableName" => "items"
));

$proto14["m_sql"] = "cal_by";
$proto14["m_srcTableName"] = "items";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
						$proto16=array();
			$obj = new SQLField(array(
	"m_strName" => "added_by",
	"m_strTable" => "items",
	"m_srcTableName" => "items"
));

$proto16["m_sql"] = "added_by";
$proto16["m_srcTableName"] = "items";
$proto16["m_expr"]=$obj;
$proto16["m_alias"] = "";
$obj = new SQLFieldListItem($proto16);

$proto0["m_fieldlist"][]=$obj;
						$proto18=array();
			$obj = new SQLField(array(
	"m_strName" => "added_on",
	"m_strTable" => "items",
	"m_srcTableName" => "items"
));

$proto18["m_sql"] = "added_on";
$proto18["m_srcTableName"] = "items";
$proto18["m_expr"]=$obj;
$proto18["m_alias"] = "";
$obj = new SQLFieldListItem($proto18);

$proto0["m_fieldlist"][]=$obj;
						$proto20=array();
			$obj = new SQLField(array(
	"m_strName" => "modified_by",
	"m_strTable" => "items",
	"m_srcTableName" => "items"
));

$proto20["m_sql"] = "modified_by";
$proto20["m_srcTableName"] = "items";
$proto20["m_expr"]=$obj;
$proto20["m_alias"] = "";
$obj = new SQLFieldListItem($proto20);

$proto0["m_fieldlist"][]=$obj;
						$proto22=array();
			$obj = new SQLField(array(
	"m_strName" => "modified_on",
	"m_strTable" => "items",
	"m_srcTableName" => "items"
));

$proto22["m_sql"] = "modified_on";
$proto22["m_srcTableName"] = "items";
$proto22["m_expr"]=$obj;
$proto22["m_alias"] = "";
$obj = new SQLFieldListItem($proto22);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto24=array();
$proto24["m_link"] = "SQLL_MAIN";
			$proto25=array();
$proto25["m_strName"] = "items";
$proto25["m_srcTableName"] = "items";
$proto25["m_columns"] = array();
$proto25["m_columns"][] = "id";
$proto25["m_columns"][] = "name";
$proto25["m_columns"][] = "item_type";
$proto25["m_columns"][] = "weight_unit";
$proto25["m_columns"][] = "cal_by";
$proto25["m_columns"][] = "added_by";
$proto25["m_columns"][] = "added_on";
$proto25["m_columns"][] = "modified_by";
$proto25["m_columns"][] = "modified_on";
$obj = new SQLTable($proto25);

$proto24["m_table"] = $obj;
$proto24["m_sql"] = "items";
$proto24["m_alias"] = "";
$proto24["m_srcTableName"] = "items";
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
$proto0["m_srcTableName"]="items";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_items = createSqlQuery_items();


	
		;

									

$tdataitems[".sqlquery"] = $queryData_items;



$tdataitems[".hasEvents"] = false;

?>