<?php
$tdatacomission_group_detail = array();
$tdatacomission_group_detail[".searchableFields"] = array();
$tdatacomission_group_detail[".ShortName"] = "comission_group_detail";
$tdatacomission_group_detail[".OwnerID"] = "";
$tdatacomission_group_detail[".OriginalTable"] = "comission_group_detail";


$tdatacomission_group_detail[".pagesByType"] = my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" );
$tdatacomission_group_detail[".originalPagesByType"] = $tdatacomission_group_detail[".pagesByType"];
$tdatacomission_group_detail[".pages"] = types2pages( my_json_decode( "{\"list\":[\"list\"],\"search\":[\"search\"]}" ) );
$tdatacomission_group_detail[".originalPages"] = $tdatacomission_group_detail[".pages"];
$tdatacomission_group_detail[".defaultPages"] = my_json_decode( "{\"list\":\"list\",\"search\":\"search\"}" );
$tdatacomission_group_detail[".originalDefaultPages"] = $tdatacomission_group_detail[".defaultPages"];

//	field labels
$fieldLabelscomission_group_detail = array();
$fieldToolTipscomission_group_detail = array();
$pageTitlescomission_group_detail = array();
$placeHolderscomission_group_detail = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscomission_group_detail["English"] = array();
	$fieldToolTipscomission_group_detail["English"] = array();
	$placeHolderscomission_group_detail["English"] = array();
	$pageTitlescomission_group_detail["English"] = array();
	$fieldLabelscomission_group_detail["English"]["id"] = "Id";
	$fieldToolTipscomission_group_detail["English"]["id"] = "";
	$placeHolderscomission_group_detail["English"]["id"] = "";
	$fieldLabelscomission_group_detail["English"]["comission_group_id"] = "Comission Group Id";
	$fieldToolTipscomission_group_detail["English"]["comission_group_id"] = "";
	$placeHolderscomission_group_detail["English"]["comission_group_id"] = "";
	$fieldLabelscomission_group_detail["English"]["product_id"] = "Product";
	$fieldToolTipscomission_group_detail["English"]["product_id"] = "";
	$placeHolderscomission_group_detail["English"]["product_id"] = "";
	$fieldLabelscomission_group_detail["English"]["discount"] = "Discount";
	$fieldToolTipscomission_group_detail["English"]["discount"] = "";
	$placeHolderscomission_group_detail["English"]["discount"] = "";
	$fieldLabelscomission_group_detail["English"]["discount_type"] = "Discount Type";
	$fieldToolTipscomission_group_detail["English"]["discount_type"] = "";
	$placeHolderscomission_group_detail["English"]["discount_type"] = "";
	if (count($fieldToolTipscomission_group_detail["English"]))
		$tdatacomission_group_detail[".isUseToolTips"] = true;
}


	$tdatacomission_group_detail[".NCSearch"] = true;



$tdatacomission_group_detail[".shortTableName"] = "comission_group_detail";
$tdatacomission_group_detail[".nSecOptions"] = 0;

$tdatacomission_group_detail[".mainTableOwnerID"] = "";
$tdatacomission_group_detail[".entityType"] = 0;
$tdatacomission_group_detail[".connId"] = "karsaaz_pos_at_localhost";


$tdatacomission_group_detail[".strOriginalTableName"] = "comission_group_detail";

	



$tdatacomission_group_detail[".showAddInPopup"] = false;

$tdatacomission_group_detail[".showEditInPopup"] = false;

$tdatacomission_group_detail[".showViewInPopup"] = false;

$tdatacomission_group_detail[".listAjax"] = false;
//	temporary
//$tdatacomission_group_detail[".listAjax"] = false;

	$tdatacomission_group_detail[".audit"] = false;

	$tdatacomission_group_detail[".locking"] = false;


$pages = $tdatacomission_group_detail[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacomission_group_detail[".edit"] = true;
	$tdatacomission_group_detail[".afterEditAction"] = 1;
	$tdatacomission_group_detail[".closePopupAfterEdit"] = 1;
	$tdatacomission_group_detail[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacomission_group_detail[".add"] = true;
$tdatacomission_group_detail[".afterAddAction"] = 1;
$tdatacomission_group_detail[".closePopupAfterAdd"] = 1;
$tdatacomission_group_detail[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacomission_group_detail[".list"] = true;
}



$tdatacomission_group_detail[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacomission_group_detail[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacomission_group_detail[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacomission_group_detail[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacomission_group_detail[".printFriendly"] = true;
}



$tdatacomission_group_detail[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacomission_group_detail[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacomission_group_detail[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacomission_group_detail[".isUseAjaxSuggest"] = true;

$tdatacomission_group_detail[".rowHighlite"] = true;





$tdatacomission_group_detail[".ajaxCodeSnippetAdded"] = false;

$tdatacomission_group_detail[".buttonsAdded"] = false;

$tdatacomission_group_detail[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacomission_group_detail[".isUseTimeForSearch"] = false;


$tdatacomission_group_detail[".badgeColor"] = "e8926f";


$tdatacomission_group_detail[".allSearchFields"] = array();
$tdatacomission_group_detail[".filterFields"] = array();
$tdatacomission_group_detail[".requiredSearchFields"] = array();

$tdatacomission_group_detail[".googleLikeFields"] = array();
$tdatacomission_group_detail[".googleLikeFields"][] = "id";
$tdatacomission_group_detail[".googleLikeFields"][] = "comission_group_id";
$tdatacomission_group_detail[".googleLikeFields"][] = "product_id";
$tdatacomission_group_detail[".googleLikeFields"][] = "discount";
$tdatacomission_group_detail[".googleLikeFields"][] = "discount_type";



$tdatacomission_group_detail[".tableType"] = "list";

$tdatacomission_group_detail[".printerPageOrientation"] = 0;
$tdatacomission_group_detail[".nPrinterPageScale"] = 100;

$tdatacomission_group_detail[".nPrinterSplitRecords"] = 40;

$tdatacomission_group_detail[".geocodingEnabled"] = false;










$tdatacomission_group_detail[".pageSize"] = 20;

$tdatacomission_group_detail[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacomission_group_detail[".strOrderBy"] = $tstrOrderBy;

$tdatacomission_group_detail[".orderindexes"] = array();


$tdatacomission_group_detail[".sqlHead"] = "SELECT id,  	comission_group_id,  	product_id,  	discount,  	discount_type";
$tdatacomission_group_detail[".sqlFrom"] = "FROM comission_group_detail";
$tdatacomission_group_detail[".sqlWhereExpr"] = "";
$tdatacomission_group_detail[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacomission_group_detail[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacomission_group_detail[".arrGroupsPerPage"] = $arrGPP;

$tdatacomission_group_detail[".highlightSearchResults"] = true;

$tableKeyscomission_group_detail = array();
$tableKeyscomission_group_detail[] = "id";
$tdatacomission_group_detail[".Keys"] = $tableKeyscomission_group_detail;


$tdatacomission_group_detail[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "comission_group_detail";
	$fdata["Label"] = GetFieldLabel("comission_group_detail","id");
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


	$tdatacomission_group_detail["id"] = $fdata;
		$tdatacomission_group_detail[".searchableFields"][] = "id";
//	comission_group_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "comission_group_id";
	$fdata["GoodName"] = "comission_group_id";
	$fdata["ownerTable"] = "comission_group_detail";
	$fdata["Label"] = GetFieldLabel("comission_group_detail","comission_group_id");
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


	$tdatacomission_group_detail["comission_group_id"] = $fdata;
		$tdatacomission_group_detail[".searchableFields"][] = "comission_group_id";
//	product_id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "product_id";
	$fdata["GoodName"] = "product_id";
	$fdata["ownerTable"] = "comission_group_detail";
	$fdata["Label"] = GetFieldLabel("comission_group_detail","product_id");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "product_id";

		$fdata["sourceSingle"] = "product_id";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "product_id";

	
	
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
	$edata["LookupTable"] = "pProductItems";
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


	$tdatacomission_group_detail["product_id"] = $fdata;
		$tdatacomission_group_detail[".searchableFields"][] = "product_id";
//	discount
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 4;
	$fdata["strName"] = "discount";
	$fdata["GoodName"] = "discount";
	$fdata["ownerTable"] = "comission_group_detail";
	$fdata["Label"] = GetFieldLabel("comission_group_detail","discount");
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


	$tdatacomission_group_detail["discount"] = $fdata;
		$tdatacomission_group_detail[".searchableFields"][] = "discount";
//	discount_type
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 5;
	$fdata["strName"] = "discount_type";
	$fdata["GoodName"] = "discount_type";
	$fdata["ownerTable"] = "comission_group_detail";
	$fdata["Label"] = GetFieldLabel("comission_group_detail","discount_type");
	$fdata["FieldType"] = 3;


	
	
			

		$fdata["strField"] = "discount_type";

		$fdata["sourceSingle"] = "discount_type";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "discount_type";

	
	
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


	$tdatacomission_group_detail["discount_type"] = $fdata;
		$tdatacomission_group_detail[".searchableFields"][] = "discount_type";


$tables_data["comission_group_detail"]=&$tdatacomission_group_detail;
$field_labels["comission_group_detail"] = &$fieldLabelscomission_group_detail;
$fieldToolTips["comission_group_detail"] = &$fieldToolTipscomission_group_detail;
$placeHolders["comission_group_detail"] = &$placeHolderscomission_group_detail;
$page_titles["comission_group_detail"] = &$pageTitlescomission_group_detail;


changeTextControlsToDate( "comission_group_detail" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["comission_group_detail"] = array();
//endif

// tables which are master tables for current table (detail)
$masterTablesData["comission_group_detail"] = array();



	
	//if !@t.bReportCrossTab
			$strOriginalDetailsTable="comission_group";
	$masterParams = array();
	$masterParams["mDataSourceTable"]="comission_group";
	$masterParams["mOriginalTable"]= $strOriginalDetailsTable;
	$masterParams["mShortTable"]= "comission_group";
	$masterParams["masterKeys"]= array();
	$masterParams["detailKeys"]= array();

	$masterParams["type"] = PAGE_LIST;
					$masterTablesData["comission_group_detail"][0] = $masterParams;
				$masterTablesData["comission_group_detail"][0]["masterKeys"] = array();
	$masterTablesData["comission_group_detail"][0]["masterKeys"][]="id";
				$masterTablesData["comission_group_detail"][0]["detailKeys"] = array();
	$masterTablesData["comission_group_detail"][0]["detailKeys"][]="comission_group_id";
		
	//endif
// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_comission_group_detail()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	comission_group_id,  	product_id,  	discount,  	discount_type";
$proto0["m_strFrom"] = "FROM comission_group_detail";
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
	"m_strTable" => "comission_group_detail",
	"m_srcTableName" => "comission_group_detail"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "comission_group_detail";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "comission_group_id",
	"m_strTable" => "comission_group_detail",
	"m_srcTableName" => "comission_group_detail"
));

$proto8["m_sql"] = "comission_group_id";
$proto8["m_srcTableName"] = "comission_group_detail";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "product_id",
	"m_strTable" => "comission_group_detail",
	"m_srcTableName" => "comission_group_detail"
));

$proto10["m_sql"] = "product_id";
$proto10["m_srcTableName"] = "comission_group_detail";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
						$proto12=array();
			$obj = new SQLField(array(
	"m_strName" => "discount",
	"m_strTable" => "comission_group_detail",
	"m_srcTableName" => "comission_group_detail"
));

$proto12["m_sql"] = "discount";
$proto12["m_srcTableName"] = "comission_group_detail";
$proto12["m_expr"]=$obj;
$proto12["m_alias"] = "";
$obj = new SQLFieldListItem($proto12);

$proto0["m_fieldlist"][]=$obj;
						$proto14=array();
			$obj = new SQLField(array(
	"m_strName" => "discount_type",
	"m_strTable" => "comission_group_detail",
	"m_srcTableName" => "comission_group_detail"
));

$proto14["m_sql"] = "discount_type";
$proto14["m_srcTableName"] = "comission_group_detail";
$proto14["m_expr"]=$obj;
$proto14["m_alias"] = "";
$obj = new SQLFieldListItem($proto14);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto16=array();
$proto16["m_link"] = "SQLL_MAIN";
			$proto17=array();
$proto17["m_strName"] = "comission_group_detail";
$proto17["m_srcTableName"] = "comission_group_detail";
$proto17["m_columns"] = array();
$proto17["m_columns"][] = "id";
$proto17["m_columns"][] = "comission_group_id";
$proto17["m_columns"][] = "product_id";
$proto17["m_columns"][] = "discount";
$proto17["m_columns"][] = "discount_type";
$obj = new SQLTable($proto17);

$proto16["m_table"] = $obj;
$proto16["m_sql"] = "comission_group_detail";
$proto16["m_alias"] = "";
$proto16["m_srcTableName"] = "comission_group_detail";
$proto18=array();
$proto18["m_sql"] = "";
$proto18["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto18["m_column"]=$obj;
$proto18["m_contained"] = array();
$proto18["m_strCase"] = "";
$proto18["m_havingmode"] = false;
$proto18["m_inBrackets"] = false;
$proto18["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto18);

$proto16["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto16);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="comission_group_detail";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_comission_group_detail = createSqlQuery_comission_group_detail();


	
		;

					

$tdatacomission_group_detail[".sqlquery"] = $queryData_comission_group_detail;



$tdatacomission_group_detail[".hasEvents"] = false;

?>