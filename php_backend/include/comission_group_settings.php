<?php
$tdatacomission_group = array();
$tdatacomission_group[".searchableFields"] = array();
$tdatacomission_group[".ShortName"] = "comission_group";
$tdatacomission_group[".OwnerID"] = "";
$tdatacomission_group[".OriginalTable"] = "comission_group";


$tdatacomission_group[".pagesByType"] = my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" );
$tdatacomission_group[".originalPagesByType"] = $tdatacomission_group[".pagesByType"];
$tdatacomission_group[".pages"] = types2pages( my_json_decode( "{\"add\":[\"add\"],\"edit\":[\"edit\"],\"export\":[\"export\"],\"import\":[\"import\"],\"list\":[\"list\"],\"masterlist\":[\"masterlist\"],\"masterprint\":[\"masterprint\"],\"print\":[\"print\"],\"search\":[\"search\"],\"view\":[\"view\"]}" ) );
$tdatacomission_group[".originalPages"] = $tdatacomission_group[".pages"];
$tdatacomission_group[".defaultPages"] = my_json_decode( "{\"add\":\"add\",\"edit\":\"edit\",\"export\":\"export\",\"import\":\"import\",\"list\":\"list\",\"masterlist\":\"masterlist\",\"masterprint\":\"masterprint\",\"print\":\"print\",\"search\":\"search\",\"view\":\"view\"}" );
$tdatacomission_group[".originalDefaultPages"] = $tdatacomission_group[".defaultPages"];

//	field labels
$fieldLabelscomission_group = array();
$fieldToolTipscomission_group = array();
$pageTitlescomission_group = array();
$placeHolderscomission_group = array();

if(mlang_getcurrentlang()=="English")
{
	$fieldLabelscomission_group["English"] = array();
	$fieldToolTipscomission_group["English"] = array();
	$placeHolderscomission_group["English"] = array();
	$pageTitlescomission_group["English"] = array();
	$fieldLabelscomission_group["English"]["id"] = "Id";
	$fieldToolTipscomission_group["English"]["id"] = "";
	$placeHolderscomission_group["English"]["id"] = "";
	$fieldLabelscomission_group["English"]["name"] = "Name";
	$fieldToolTipscomission_group["English"]["name"] = "";
	$placeHolderscomission_group["English"]["name"] = "";
	$fieldLabelscomission_group["English"]["is_active"] = "Is Active";
	$fieldToolTipscomission_group["English"]["is_active"] = "";
	$placeHolderscomission_group["English"]["is_active"] = "";
	if (count($fieldToolTipscomission_group["English"]))
		$tdatacomission_group[".isUseToolTips"] = true;
}


	$tdatacomission_group[".NCSearch"] = true;



$tdatacomission_group[".shortTableName"] = "comission_group";
$tdatacomission_group[".nSecOptions"] = 0;

$tdatacomission_group[".mainTableOwnerID"] = "";
$tdatacomission_group[".entityType"] = 0;
$tdatacomission_group[".connId"] = "karsaaz_pos_at_localhost";


$tdatacomission_group[".strOriginalTableName"] = "comission_group";

	



$tdatacomission_group[".showAddInPopup"] = false;

$tdatacomission_group[".showEditInPopup"] = false;

$tdatacomission_group[".showViewInPopup"] = false;

$tdatacomission_group[".listAjax"] = false;
//	temporary
//$tdatacomission_group[".listAjax"] = false;

	$tdatacomission_group[".audit"] = false;

	$tdatacomission_group[".locking"] = false;


$pages = $tdatacomission_group[".defaultPages"];

if( $pages[PAGE_EDIT] ) {
	$tdatacomission_group[".edit"] = true;
	$tdatacomission_group[".afterEditAction"] = 1;
	$tdatacomission_group[".closePopupAfterEdit"] = 1;
	$tdatacomission_group[".afterEditActionDetTable"] = "";
}

if( $pages[PAGE_ADD] ) {
$tdatacomission_group[".add"] = true;
$tdatacomission_group[".afterAddAction"] = 1;
$tdatacomission_group[".closePopupAfterAdd"] = 1;
$tdatacomission_group[".afterAddActionDetTable"] = "";
}

if( $pages[PAGE_LIST] ) {
	$tdatacomission_group[".list"] = true;
}



$tdatacomission_group[".strSortControlSettingsJSON"] = "";




if( $pages[PAGE_VIEW] ) {
$tdatacomission_group[".view"] = true;
}

if( $pages[PAGE_IMPORT] ) {
$tdatacomission_group[".import"] = true;
}

if( $pages[PAGE_EXPORT] ) {
$tdatacomission_group[".exportTo"] = true;
}

if( $pages[PAGE_PRINT] ) {
$tdatacomission_group[".printFriendly"] = true;
}



$tdatacomission_group[".showSimpleSearchOptions"] = true; // temp fix #13449

// Allow Show/Hide Fields in GRID
$tdatacomission_group[".allowShowHideFields"] = true; // temp fix #13449
//

// Allow Fields Reordering in GRID
$tdatacomission_group[".allowFieldsReordering"] = true; // temp fix #13449
//

$tdatacomission_group[".isUseAjaxSuggest"] = true;

$tdatacomission_group[".rowHighlite"] = true;





$tdatacomission_group[".ajaxCodeSnippetAdded"] = false;

$tdatacomission_group[".buttonsAdded"] = false;

$tdatacomission_group[".addPageEvents"] = false;

// use timepicker for search panel
$tdatacomission_group[".isUseTimeForSearch"] = false;


$tdatacomission_group[".badgeColor"] = "8FBC8B";


$tdatacomission_group[".allSearchFields"] = array();
$tdatacomission_group[".filterFields"] = array();
$tdatacomission_group[".requiredSearchFields"] = array();

$tdatacomission_group[".googleLikeFields"] = array();
$tdatacomission_group[".googleLikeFields"][] = "id";
$tdatacomission_group[".googleLikeFields"][] = "name";
$tdatacomission_group[".googleLikeFields"][] = "is_active";



$tdatacomission_group[".tableType"] = "list";

$tdatacomission_group[".printerPageOrientation"] = 0;
$tdatacomission_group[".nPrinterPageScale"] = 100;

$tdatacomission_group[".nPrinterSplitRecords"] = 40;

$tdatacomission_group[".geocodingEnabled"] = false;










$tdatacomission_group[".pageSize"] = 20;

$tdatacomission_group[".warnLeavingPages"] = true;



$tstrOrderBy = "";
$tdatacomission_group[".strOrderBy"] = $tstrOrderBy;

$tdatacomission_group[".orderindexes"] = array();


$tdatacomission_group[".sqlHead"] = "SELECT id,  	name,  	is_active";
$tdatacomission_group[".sqlFrom"] = "FROM comission_group";
$tdatacomission_group[".sqlWhereExpr"] = "";
$tdatacomission_group[".sqlTail"] = "";










//fill array of records per page for list and report without group fields
$arrRPP = array();
$arrRPP[] = 10;
$arrRPP[] = 20;
$arrRPP[] = 30;
$arrRPP[] = 50;
$arrRPP[] = 100;
$arrRPP[] = 500;
$arrRPP[] = -1;
$tdatacomission_group[".arrRecsPerPage"] = $arrRPP;

//fill array of groups per page for report with group fields
$arrGPP = array();
$arrGPP[] = 1;
$arrGPP[] = 3;
$arrGPP[] = 5;
$arrGPP[] = 10;
$arrGPP[] = 50;
$arrGPP[] = 100;
$arrGPP[] = -1;
$tdatacomission_group[".arrGroupsPerPage"] = $arrGPP;

$tdatacomission_group[".highlightSearchResults"] = true;

$tableKeyscomission_group = array();
$tableKeyscomission_group[] = "id";
$tdatacomission_group[".Keys"] = $tableKeyscomission_group;


$tdatacomission_group[".hideMobileList"] = array();




//	id
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 1;
	$fdata["strName"] = "id";
	$fdata["GoodName"] = "id";
	$fdata["ownerTable"] = "comission_group";
	$fdata["Label"] = GetFieldLabel("comission_group","id");
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


	$tdatacomission_group["id"] = $fdata;
		$tdatacomission_group[".searchableFields"][] = "id";
//	name
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 2;
	$fdata["strName"] = "name";
	$fdata["GoodName"] = "name";
	$fdata["ownerTable"] = "comission_group";
	$fdata["Label"] = GetFieldLabel("comission_group","name");
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


	
	



		$edata["IsRequired"] = true;

	
	
	
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


	$tdatacomission_group["name"] = $fdata;
		$tdatacomission_group[".searchableFields"][] = "name";
//	is_active
//	Custom field settings
	$fdata = array();
	$fdata["Index"] = 3;
	$fdata["strName"] = "is_active";
	$fdata["GoodName"] = "is_active";
	$fdata["ownerTable"] = "comission_group";
	$fdata["Label"] = GetFieldLabel("comission_group","is_active");
	$fdata["FieldType"] = 16;


	
	
			

		$fdata["strField"] = "is_active";

		$fdata["sourceSingle"] = "is_active";

		$fdata["isSQLExpression"] = true;
	$fdata["FullName"] = "is_active";

	
	
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


	$tdatacomission_group["is_active"] = $fdata;
		$tdatacomission_group[".searchableFields"][] = "is_active";


$tables_data["comission_group"]=&$tdatacomission_group;
$field_labels["comission_group"] = &$fieldLabelscomission_group;
$fieldToolTips["comission_group"] = &$fieldToolTipscomission_group;
$placeHolders["comission_group"] = &$placeHolderscomission_group;
$page_titles["comission_group"] = &$pageTitlescomission_group;


changeTextControlsToDate( "comission_group" );

// -----------------start  prepare master-details data arrays ------------------------------//
// tables which are detail tables for current table (master)

//if !@TABLE.bReportCrossTab

$detailsTablesData["comission_group"] = array();
//	comission_group_detail
	
	

		$dIndex = 0;
	$detailsParam = array();
	$detailsParam["dDataSourceTable"]="comission_group_detail";
		$detailsParam["dOriginalTable"] = "comission_group_detail";



		
		$detailsParam["dType"]=PAGE_LIST;
	$detailsParam["dShortTable"] = "comission_group_detail";
	$detailsParam["dCaptionTable"] = GetTableCaption("comission_group_detail");
	$detailsParam["masterKeys"] =array();
	$detailsParam["detailKeys"] =array();


		
	$detailsTablesData["comission_group"][$dIndex] = $detailsParam;

	
		$detailsTablesData["comission_group"][$dIndex]["masterKeys"] = array();

	$detailsTablesData["comission_group"][$dIndex]["masterKeys"][]="id";

				$detailsTablesData["comission_group"][$dIndex]["detailKeys"] = array();

	$detailsTablesData["comission_group"][$dIndex]["detailKeys"][]="comission_group_id";
//endif

// tables which are master tables for current table (detail)
$masterTablesData["comission_group"] = array();



// -----------------end  prepare master-details data arrays ------------------------------//



require_once(getabspath("classes/sql.php"));











function createSqlQuery_comission_group()
{
$proto0=array();
$proto0["m_strHead"] = "SELECT";
$proto0["m_strFieldList"] = "id,  	name,  	is_active";
$proto0["m_strFrom"] = "FROM comission_group";
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
	"m_strTable" => "comission_group",
	"m_srcTableName" => "comission_group"
));

$proto6["m_sql"] = "id";
$proto6["m_srcTableName"] = "comission_group";
$proto6["m_expr"]=$obj;
$proto6["m_alias"] = "";
$obj = new SQLFieldListItem($proto6);

$proto0["m_fieldlist"][]=$obj;
						$proto8=array();
			$obj = new SQLField(array(
	"m_strName" => "name",
	"m_strTable" => "comission_group",
	"m_srcTableName" => "comission_group"
));

$proto8["m_sql"] = "name";
$proto8["m_srcTableName"] = "comission_group";
$proto8["m_expr"]=$obj;
$proto8["m_alias"] = "";
$obj = new SQLFieldListItem($proto8);

$proto0["m_fieldlist"][]=$obj;
						$proto10=array();
			$obj = new SQLField(array(
	"m_strName" => "is_active",
	"m_strTable" => "comission_group",
	"m_srcTableName" => "comission_group"
));

$proto10["m_sql"] = "is_active";
$proto10["m_srcTableName"] = "comission_group";
$proto10["m_expr"]=$obj;
$proto10["m_alias"] = "";
$obj = new SQLFieldListItem($proto10);

$proto0["m_fieldlist"][]=$obj;
$proto0["m_fromlist"] = array();
												$proto12=array();
$proto12["m_link"] = "SQLL_MAIN";
			$proto13=array();
$proto13["m_strName"] = "comission_group";
$proto13["m_srcTableName"] = "comission_group";
$proto13["m_columns"] = array();
$proto13["m_columns"][] = "id";
$proto13["m_columns"][] = "name";
$proto13["m_columns"][] = "is_active";
$obj = new SQLTable($proto13);

$proto12["m_table"] = $obj;
$proto12["m_sql"] = "comission_group";
$proto12["m_alias"] = "";
$proto12["m_srcTableName"] = "comission_group";
$proto14=array();
$proto14["m_sql"] = "";
$proto14["m_uniontype"] = "SQLL_UNKNOWN";
	$obj = new SQLNonParsed(array(
	"m_sql" => ""
));

$proto14["m_column"]=$obj;
$proto14["m_contained"] = array();
$proto14["m_strCase"] = "";
$proto14["m_havingmode"] = false;
$proto14["m_inBrackets"] = false;
$proto14["m_useAlias"] = false;
$obj = new SQLLogicalExpr($proto14);

$proto12["m_joinon"] = $obj;
$obj = new SQLFromListItem($proto12);

$proto0["m_fromlist"][]=$obj;
$proto0["m_groupby"] = array();
$proto0["m_orderby"] = array();
$proto0["m_srcTableName"]="comission_group";		
$obj = new SQLQuery($proto0);

	return $obj;
}
$queryData_comission_group = createSqlQuery_comission_group();


	
		;

			

$tdatacomission_group[".sqlquery"] = $queryData_comission_group;



$tdatacomission_group[".hasEvents"] = false;

?>