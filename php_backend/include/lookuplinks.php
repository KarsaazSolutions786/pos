<?php

/**
* getLookupMainTableSettings - tests whether the lookup link exists between the tables
*
*  returns array with ProjectSettings class for main table if the link exists in project settings.
*  returns NULL otherwise
*/
function getLookupMainTableSettings($lookupTable, $mainTableShortName, $mainField, $desiredPage = "")
{
	global $lookupTableLinks;
	if(!isset($lookupTableLinks[$lookupTable]))
		return null;
	if(!isset($lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField]))
		return null;
	$arr = &$lookupTableLinks[$lookupTable][$mainTableShortName.".".$mainField];
	$effectivePage = $desiredPage;
	if(!isset($arr[$effectivePage]))
	{
		$effectivePage = PAGE_EDIT;
		if(!isset($arr[$effectivePage]))
		{
			if($desiredPage == "" && 0 < count($arr))
			{
				$effectivePage = $arr[0];
			}
			else
				return null;
		}
	}
	return new ProjectSettings($arr[$effectivePage]["table"], $effectivePage);
}

/** 
* $lookupTableLinks array stores all lookup links between tables in the project
*/
function InitLookupLinks()
{
	global $lookupTableLinks;

	$lookupTableLinks = array();

		if( !isset( $lookupTableLinks["pBU"] ) ) {
			$lookupTableLinks["pBU"] = array();
		}
		if( !isset( $lookupTableLinks["pBU"]["paccounts.BUnit"] )) {
			$lookupTableLinks["pBU"]["paccounts.BUnit"] = array();
		}
		$lookupTableLinks["pBU"]["paccounts.BUnit"]["edit"] = array("table" => "pAccounts", "field" => "BUnit", "page" => "edit");
		if( !isset( $lookupTableLinks["pBU"] ) ) {
			$lookupTableLinks["pBU"] = array();
		}
		if( !isset( $lookupTableLinks["pBU"]["pcustomer.BUnit"] )) {
			$lookupTableLinks["pBU"]["pcustomer.BUnit"] = array();
		}
		$lookupTableLinks["pBU"]["pcustomer.BUnit"]["edit"] = array("table" => "pCustomer", "field" => "BUnit", "page" => "edit");
		if( !isset( $lookupTableLinks["psCustomerGroup"] ) ) {
			$lookupTableLinks["psCustomerGroup"] = array();
		}
		if( !isset( $lookupTableLinks["psCustomerGroup"]["pcustomer.GroupCode"] )) {
			$lookupTableLinks["psCustomerGroup"]["pcustomer.GroupCode"] = array();
		}
		$lookupTableLinks["psCustomerGroup"]["pcustomer.GroupCode"]["edit"] = array("table" => "pCustomer", "field" => "GroupCode", "page" => "edit");
		if( !isset( $lookupTableLinks["umUserInfo"] ) ) {
			$lookupTableLinks["umUserInfo"] = array();
		}
		if( !isset( $lookupTableLinks["umUserInfo"]["pcustomer.UserName"] )) {
			$lookupTableLinks["umUserInfo"]["pcustomer.UserName"] = array();
		}
		$lookupTableLinks["umUserInfo"]["pcustomer.UserName"]["edit"] = array("table" => "pCustomer", "field" => "UserName", "page" => "edit");
		if( !isset( $lookupTableLinks["umUserInfo"] ) ) {
			$lookupTableLinks["umUserInfo"] = array();
		}
		if( !isset( $lookupTableLinks["umUserInfo"]["pcustomer.UpdateUser"] )) {
			$lookupTableLinks["umUserInfo"]["pcustomer.UpdateUser"] = array();
		}
		$lookupTableLinks["umUserInfo"]["pcustomer.UpdateUser"]["edit"] = array("table" => "pCustomer", "field" => "UpdateUser", "page" => "edit");
		if( !isset( $lookupTableLinks["pBU"] ) ) {
			$lookupTableLinks["pBU"] = array();
		}
		if( !isset( $lookupTableLinks["pBU"]["pemployee.BUnit"] )) {
			$lookupTableLinks["pBU"]["pemployee.BUnit"] = array();
		}
		$lookupTableLinks["pBU"]["pemployee.BUnit"]["edit"] = array("table" => "pEmployee", "field" => "BUnit", "page" => "edit");
		if( !isset( $lookupTableLinks["psEmployeeGroup"] ) ) {
			$lookupTableLinks["psEmployeeGroup"] = array();
		}
		if( !isset( $lookupTableLinks["psEmployeeGroup"]["pemployee.EmployeeGroup"] )) {
			$lookupTableLinks["psEmployeeGroup"]["pemployee.EmployeeGroup"] = array();
		}
		$lookupTableLinks["psEmployeeGroup"]["pemployee.EmployeeGroup"]["edit"] = array("table" => "pEmployee", "field" => "EmployeeGroup", "page" => "edit");
		if( !isset( $lookupTableLinks["umUserInfo"] ) ) {
			$lookupTableLinks["umUserInfo"] = array();
		}
		if( !isset( $lookupTableLinks["umUserInfo"]["pemployee.UserName"] )) {
			$lookupTableLinks["umUserInfo"]["pemployee.UserName"] = array();
		}
		$lookupTableLinks["umUserInfo"]["pemployee.UserName"]["edit"] = array("table" => "pEmployee", "field" => "UserName", "page" => "edit");
		if( !isset( $lookupTableLinks["umUserInfo"] ) ) {
			$lookupTableLinks["umUserInfo"] = array();
		}
		if( !isset( $lookupTableLinks["umUserInfo"]["pemployee.UpdateUser"] )) {
			$lookupTableLinks["umUserInfo"]["pemployee.UpdateUser"] = array();
		}
		$lookupTableLinks["umUserInfo"]["pemployee.UpdateUser"]["edit"] = array("table" => "pEmployee", "field" => "UpdateUser", "page" => "edit");
		if( !isset( $lookupTableLinks["pBU"] ) ) {
			$lookupTableLinks["pBU"] = array();
		}
		if( !isset( $lookupTableLinks["pBU"]["pproductitems.BUnit"] )) {
			$lookupTableLinks["pBU"]["pproductitems.BUnit"] = array();
		}
		$lookupTableLinks["pBU"]["pproductitems.BUnit"]["edit"] = array("table" => "pProductItems", "field" => "BUnit", "page" => "edit");
		if( !isset( $lookupTableLinks["psProductGroup"] ) ) {
			$lookupTableLinks["psProductGroup"] = array();
		}
		if( !isset( $lookupTableLinks["psProductGroup"]["pproductitems.ProductGroupCode"] )) {
			$lookupTableLinks["psProductGroup"]["pproductitems.ProductGroupCode"] = array();
		}
		$lookupTableLinks["psProductGroup"]["pproductitems.ProductGroupCode"]["edit"] = array("table" => "pProductItems", "field" => "ProductGroupCode", "page" => "edit");
		if( !isset( $lookupTableLinks["psUnits"] ) ) {
			$lookupTableLinks["psUnits"] = array();
		}
		if( !isset( $lookupTableLinks["psUnits"]["pproductitems.UnitCode"] )) {
			$lookupTableLinks["psUnits"]["pproductitems.UnitCode"] = array();
		}
		$lookupTableLinks["psUnits"]["pproductitems.UnitCode"]["edit"] = array("table" => "pProductItems", "field" => "UnitCode", "page" => "edit");
		if( !isset( $lookupTableLinks["umUserInfo"] ) ) {
			$lookupTableLinks["umUserInfo"] = array();
		}
		if( !isset( $lookupTableLinks["umUserInfo"]["pproductitems.UserName"] )) {
			$lookupTableLinks["umUserInfo"]["pproductitems.UserName"] = array();
		}
		$lookupTableLinks["umUserInfo"]["pproductitems.UserName"]["edit"] = array("table" => "pProductItems", "field" => "UserName", "page" => "edit");
		if( !isset( $lookupTableLinks["umUserInfo"] ) ) {
			$lookupTableLinks["umUserInfo"] = array();
		}
		if( !isset( $lookupTableLinks["umUserInfo"]["pproductitems.UpdateUser"] )) {
			$lookupTableLinks["umUserInfo"]["pproductitems.UpdateUser"] = array();
		}
		$lookupTableLinks["umUserInfo"]["pproductitems.UpdateUser"]["edit"] = array("table" => "pProductItems", "field" => "UpdateUser", "page" => "edit");
		if( !isset( $lookupTableLinks["pBU"] ) ) {
			$lookupTableLinks["pBU"] = array();
		}
		if( !isset( $lookupTableLinks["pBU"]["psupplier.BUnit"] )) {
			$lookupTableLinks["pBU"]["psupplier.BUnit"] = array();
		}
		$lookupTableLinks["pBU"]["psupplier.BUnit"]["edit"] = array("table" => "pSupplier", "field" => "BUnit", "page" => "edit");
		if( !isset( $lookupTableLinks["psSupplierGroup"] ) ) {
			$lookupTableLinks["psSupplierGroup"] = array();
		}
		if( !isset( $lookupTableLinks["psSupplierGroup"]["psupplier.GroupCode"] )) {
			$lookupTableLinks["psSupplierGroup"]["psupplier.GroupCode"] = array();
		}
		$lookupTableLinks["psSupplierGroup"]["psupplier.GroupCode"]["edit"] = array("table" => "pSupplier", "field" => "GroupCode", "page" => "edit");
		if( !isset( $lookupTableLinks["umUserInfo"] ) ) {
			$lookupTableLinks["umUserInfo"] = array();
		}
		if( !isset( $lookupTableLinks["umUserInfo"]["psupplier.UserName"] )) {
			$lookupTableLinks["umUserInfo"]["psupplier.UserName"] = array();
		}
		$lookupTableLinks["umUserInfo"]["psupplier.UserName"]["edit"] = array("table" => "pSupplier", "field" => "UserName", "page" => "edit");
		if( !isset( $lookupTableLinks["umUserInfo"] ) ) {
			$lookupTableLinks["umUserInfo"] = array();
		}
		if( !isset( $lookupTableLinks["umUserInfo"]["psupplier.UpdateUser"] )) {
			$lookupTableLinks["umUserInfo"]["psupplier.UpdateUser"] = array();
		}
		$lookupTableLinks["umUserInfo"]["psupplier.UpdateUser"]["edit"] = array("table" => "pSupplier", "field" => "UpdateUser", "page" => "edit");
		if( !isset( $lookupTableLinks["pBU"] ) ) {
			$lookupTableLinks["pBU"] = array();
		}
		if( !isset( $lookupTableLinks["pBU"]["psaccountsubgroup.BUnit"] )) {
			$lookupTableLinks["pBU"]["psaccountsubgroup.BUnit"] = array();
		}
		$lookupTableLinks["pBU"]["psaccountsubgroup.BUnit"]["edit"] = array("table" => "psAccountSubGroup", "field" => "BUnit", "page" => "edit");
		if( !isset( $lookupTableLinks["umUserInfo"] ) ) {
			$lookupTableLinks["umUserInfo"] = array();
		}
		if( !isset( $lookupTableLinks["umUserInfo"]["psaccountsubgroup.UserName"] )) {
			$lookupTableLinks["umUserInfo"]["psaccountsubgroup.UserName"] = array();
		}
		$lookupTableLinks["umUserInfo"]["psaccountsubgroup.UserName"]["edit"] = array("table" => "psAccountSubGroup", "field" => "UserName", "page" => "edit");
		if( !isset( $lookupTableLinks["umUserInfo"] ) ) {
			$lookupTableLinks["umUserInfo"] = array();
		}
		if( !isset( $lookupTableLinks["umUserInfo"]["psaccountsubgroup.UpdateUser"] )) {
			$lookupTableLinks["umUserInfo"]["psaccountsubgroup.UpdateUser"] = array();
		}
		$lookupTableLinks["umUserInfo"]["psaccountsubgroup.UpdateUser"]["edit"] = array("table" => "psAccountSubGroup", "field" => "UpdateUser", "page" => "edit");
		if( !isset( $lookupTableLinks["pBU"] ) ) {
			$lookupTableLinks["pBU"] = array();
		}
		if( !isset( $lookupTableLinks["pBU"]["pschartofaccounts.BUnit"] )) {
			$lookupTableLinks["pBU"]["pschartofaccounts.BUnit"] = array();
		}
		$lookupTableLinks["pBU"]["pschartofaccounts.BUnit"]["edit"] = array("table" => "psChartofAccounts", "field" => "BUnit", "page" => "edit");
		if( !isset( $lookupTableLinks["umUserInfo"] ) ) {
			$lookupTableLinks["umUserInfo"] = array();
		}
		if( !isset( $lookupTableLinks["umUserInfo"]["pschartofaccounts.UserName"] )) {
			$lookupTableLinks["umUserInfo"]["pschartofaccounts.UserName"] = array();
		}
		$lookupTableLinks["umUserInfo"]["pschartofaccounts.UserName"]["edit"] = array("table" => "psChartofAccounts", "field" => "UserName", "page" => "edit");
		if( !isset( $lookupTableLinks["umUserInfo"] ) ) {
			$lookupTableLinks["umUserInfo"] = array();
		}
		if( !isset( $lookupTableLinks["umUserInfo"]["pschartofaccounts.UpdateUser"] )) {
			$lookupTableLinks["umUserInfo"]["pschartofaccounts.UpdateUser"] = array();
		}
		$lookupTableLinks["umUserInfo"]["pschartofaccounts.UpdateUser"]["edit"] = array("table" => "psChartofAccounts", "field" => "UpdateUser", "page" => "edit");
		if( !isset( $lookupTableLinks["pBU"] ) ) {
			$lookupTableLinks["pBU"] = array();
		}
		if( !isset( $lookupTableLinks["pBU"]["pscustomergroup.BUnit"] )) {
			$lookupTableLinks["pBU"]["pscustomergroup.BUnit"] = array();
		}
		$lookupTableLinks["pBU"]["pscustomergroup.BUnit"]["edit"] = array("table" => "psCustomerGroup", "field" => "BUnit", "page" => "edit");
		if( !isset( $lookupTableLinks["umUserInfo"] ) ) {
			$lookupTableLinks["umUserInfo"] = array();
		}
		if( !isset( $lookupTableLinks["umUserInfo"]["pscustomergroup.UserName"] )) {
			$lookupTableLinks["umUserInfo"]["pscustomergroup.UserName"] = array();
		}
		$lookupTableLinks["umUserInfo"]["pscustomergroup.UserName"]["edit"] = array("table" => "psCustomerGroup", "field" => "UserName", "page" => "edit");
		if( !isset( $lookupTableLinks["umUserInfo"] ) ) {
			$lookupTableLinks["umUserInfo"] = array();
		}
		if( !isset( $lookupTableLinks["umUserInfo"]["pscustomergroup.UpdateUser"] )) {
			$lookupTableLinks["umUserInfo"]["pscustomergroup.UpdateUser"] = array();
		}
		$lookupTableLinks["umUserInfo"]["pscustomergroup.UpdateUser"]["edit"] = array("table" => "psCustomerGroup", "field" => "UpdateUser", "page" => "edit");
		if( !isset( $lookupTableLinks["pBU"] ) ) {
			$lookupTableLinks["pBU"] = array();
		}
		if( !isset( $lookupTableLinks["pBU"]["psemployeegroup.BUnit"] )) {
			$lookupTableLinks["pBU"]["psemployeegroup.BUnit"] = array();
		}
		$lookupTableLinks["pBU"]["psemployeegroup.BUnit"]["edit"] = array("table" => "psEmployeeGroup", "field" => "BUnit", "page" => "edit");
		if( !isset( $lookupTableLinks["umUserInfo"] ) ) {
			$lookupTableLinks["umUserInfo"] = array();
		}
		if( !isset( $lookupTableLinks["umUserInfo"]["psemployeegroup.UserName"] )) {
			$lookupTableLinks["umUserInfo"]["psemployeegroup.UserName"] = array();
		}
		$lookupTableLinks["umUserInfo"]["psemployeegroup.UserName"]["edit"] = array("table" => "psEmployeeGroup", "field" => "UserName", "page" => "edit");
		if( !isset( $lookupTableLinks["umUserInfo"] ) ) {
			$lookupTableLinks["umUserInfo"] = array();
		}
		if( !isset( $lookupTableLinks["umUserInfo"]["psemployeegroup.UpdateUser"] )) {
			$lookupTableLinks["umUserInfo"]["psemployeegroup.UpdateUser"] = array();
		}
		$lookupTableLinks["umUserInfo"]["psemployeegroup.UpdateUser"]["edit"] = array("table" => "psEmployeeGroup", "field" => "UpdateUser", "page" => "edit");
		if( !isset( $lookupTableLinks["pBU"] ) ) {
			$lookupTableLinks["pBU"] = array();
		}
		if( !isset( $lookupTableLinks["pBU"]["psproductgroup.BUnit"] )) {
			$lookupTableLinks["pBU"]["psproductgroup.BUnit"] = array();
		}
		$lookupTableLinks["pBU"]["psproductgroup.BUnit"]["edit"] = array("table" => "psProductGroup", "field" => "BUnit", "page" => "edit");
		if( !isset( $lookupTableLinks["umUserInfo"] ) ) {
			$lookupTableLinks["umUserInfo"] = array();
		}
		if( !isset( $lookupTableLinks["umUserInfo"]["psproductgroup.UserName"] )) {
			$lookupTableLinks["umUserInfo"]["psproductgroup.UserName"] = array();
		}
		$lookupTableLinks["umUserInfo"]["psproductgroup.UserName"]["edit"] = array("table" => "psProductGroup", "field" => "UserName", "page" => "edit");
		if( !isset( $lookupTableLinks["umUserInfo"] ) ) {
			$lookupTableLinks["umUserInfo"] = array();
		}
		if( !isset( $lookupTableLinks["umUserInfo"]["psproductgroup.UpdateUser"] )) {
			$lookupTableLinks["umUserInfo"]["psproductgroup.UpdateUser"] = array();
		}
		$lookupTableLinks["umUserInfo"]["psproductgroup.UpdateUser"]["edit"] = array("table" => "psProductGroup", "field" => "UpdateUser", "page" => "edit");
		if( !isset( $lookupTableLinks["pBU"] ) ) {
			$lookupTableLinks["pBU"] = array();
		}
		if( !isset( $lookupTableLinks["pBU"]["pssuppliergroup.BUnit"] )) {
			$lookupTableLinks["pBU"]["pssuppliergroup.BUnit"] = array();
		}
		$lookupTableLinks["pBU"]["pssuppliergroup.BUnit"]["edit"] = array("table" => "psSupplierGroup", "field" => "BUnit", "page" => "edit");
		if( !isset( $lookupTableLinks["umUserInfo"] ) ) {
			$lookupTableLinks["umUserInfo"] = array();
		}
		if( !isset( $lookupTableLinks["umUserInfo"]["pssuppliergroup.UserName"] )) {
			$lookupTableLinks["umUserInfo"]["pssuppliergroup.UserName"] = array();
		}
		$lookupTableLinks["umUserInfo"]["pssuppliergroup.UserName"]["edit"] = array("table" => "psSupplierGroup", "field" => "UserName", "page" => "edit");
		if( !isset( $lookupTableLinks["umUserInfo"] ) ) {
			$lookupTableLinks["umUserInfo"] = array();
		}
		if( !isset( $lookupTableLinks["umUserInfo"]["pssuppliergroup.UpdateUser"] )) {
			$lookupTableLinks["umUserInfo"]["pssuppliergroup.UpdateUser"] = array();
		}
		$lookupTableLinks["umUserInfo"]["pssuppliergroup.UpdateUser"]["edit"] = array("table" => "psSupplierGroup", "field" => "UpdateUser", "page" => "edit");
		if( !isset( $lookupTableLinks["pBU"] ) ) {
			$lookupTableLinks["pBU"] = array();
		}
		if( !isset( $lookupTableLinks["pBU"]["psunits.BUnit"] )) {
			$lookupTableLinks["pBU"]["psunits.BUnit"] = array();
		}
		$lookupTableLinks["pBU"]["psunits.BUnit"]["edit"] = array("table" => "psUnits", "field" => "BUnit", "page" => "edit");
		if( !isset( $lookupTableLinks["umUserInfo"] ) ) {
			$lookupTableLinks["umUserInfo"] = array();
		}
		if( !isset( $lookupTableLinks["umUserInfo"]["psunits.UserName"] )) {
			$lookupTableLinks["umUserInfo"]["psunits.UserName"] = array();
		}
		$lookupTableLinks["umUserInfo"]["psunits.UserName"]["edit"] = array("table" => "psUnits", "field" => "UserName", "page" => "edit");
		if( !isset( $lookupTableLinks["umUserInfo"] ) ) {
			$lookupTableLinks["umUserInfo"] = array();
		}
		if( !isset( $lookupTableLinks["umUserInfo"]["psunits.UpdateUser"] )) {
			$lookupTableLinks["umUserInfo"]["psunits.UpdateUser"] = array();
		}
		$lookupTableLinks["umUserInfo"]["psunits.UpdateUser"]["edit"] = array("table" => "psUnits", "field" => "UpdateUser", "page" => "edit");
		if( !isset( $lookupTableLinks["pBU"] ) ) {
			$lookupTableLinks["pBU"] = array();
		}
		if( !isset( $lookupTableLinks["pBU"]["psusergroup.BUnit"] )) {
			$lookupTableLinks["pBU"]["psusergroup.BUnit"] = array();
		}
		$lookupTableLinks["pBU"]["psusergroup.BUnit"]["edit"] = array("table" => "psUserGroup", "field" => "BUnit", "page" => "edit");
		if( !isset( $lookupTableLinks["umUserInfo"] ) ) {
			$lookupTableLinks["umUserInfo"] = array();
		}
		if( !isset( $lookupTableLinks["umUserInfo"]["psusergroup.UserName"] )) {
			$lookupTableLinks["umUserInfo"]["psusergroup.UserName"] = array();
		}
		$lookupTableLinks["umUserInfo"]["psusergroup.UserName"]["edit"] = array("table" => "psUserGroup", "field" => "UserName", "page" => "edit");
		if( !isset( $lookupTableLinks["umUserInfo"] ) ) {
			$lookupTableLinks["umUserInfo"] = array();
		}
		if( !isset( $lookupTableLinks["umUserInfo"]["psusergroup.UpdateUser"] )) {
			$lookupTableLinks["umUserInfo"]["psusergroup.UpdateUser"] = array();
		}
		$lookupTableLinks["umUserInfo"]["psusergroup.UpdateUser"]["edit"] = array("table" => "psUserGroup", "field" => "UpdateUser", "page" => "edit");
		if( !isset( $lookupTableLinks["pBU"] ) ) {
			$lookupTableLinks["pBU"] = array();
		}
		if( !isset( $lookupTableLinks["pBU"]["tsaleh.BUnit"] )) {
			$lookupTableLinks["pBU"]["tsaleh.BUnit"] = array();
		}
		$lookupTableLinks["pBU"]["tsaleh.BUnit"]["edit"] = array("table" => "tSaleH", "field" => "BUnit", "page" => "edit");
		if( !isset( $lookupTableLinks["pAccounts"] ) ) {
			$lookupTableLinks["pAccounts"] = array();
		}
		if( !isset( $lookupTableLinks["pAccounts"]["tsaleh.PartyCode"] )) {
			$lookupTableLinks["pAccounts"]["tsaleh.PartyCode"] = array();
		}
		$lookupTableLinks["pAccounts"]["tsaleh.PartyCode"]["edit"] = array("table" => "tSaleH", "field" => "PartyCode", "page" => "edit");
		if( !isset( $lookupTableLinks["pAccounts"] ) ) {
			$lookupTableLinks["pAccounts"] = array();
		}
		if( !isset( $lookupTableLinks["pAccounts"]["tsaleh.FreightAccountCode"] )) {
			$lookupTableLinks["pAccounts"]["tsaleh.FreightAccountCode"] = array();
		}
		$lookupTableLinks["pAccounts"]["tsaleh.FreightAccountCode"]["edit"] = array("table" => "tSaleH", "field" => "FreightAccountCode", "page" => "edit");
		if( !isset( $lookupTableLinks["pAccounts"] ) ) {
			$lookupTableLinks["pAccounts"] = array();
		}
		if( !isset( $lookupTableLinks["pAccounts"]["tsaleh.LaborAccountCode"] )) {
			$lookupTableLinks["pAccounts"]["tsaleh.LaborAccountCode"] = array();
		}
		$lookupTableLinks["pAccounts"]["tsaleh.LaborAccountCode"]["edit"] = array("table" => "tSaleH", "field" => "LaborAccountCode", "page" => "edit");
		if( !isset( $lookupTableLinks["pAccounts"] ) ) {
			$lookupTableLinks["pAccounts"] = array();
		}
		if( !isset( $lookupTableLinks["pAccounts"]["tsaleh.SaleTaxAccCode"] )) {
			$lookupTableLinks["pAccounts"]["tsaleh.SaleTaxAccCode"] = array();
		}
		$lookupTableLinks["pAccounts"]["tsaleh.SaleTaxAccCode"]["edit"] = array("table" => "tSaleH", "field" => "SaleTaxAccCode", "page" => "edit");
		if( !isset( $lookupTableLinks["pAccounts"] ) ) {
			$lookupTableLinks["pAccounts"] = array();
		}
		if( !isset( $lookupTableLinks["pAccounts"]["tsaleh.DiscountAccCode"] )) {
			$lookupTableLinks["pAccounts"]["tsaleh.DiscountAccCode"] = array();
		}
		$lookupTableLinks["pAccounts"]["tsaleh.DiscountAccCode"]["edit"] = array("table" => "tSaleH", "field" => "DiscountAccCode", "page" => "edit");
		if( !isset( $lookupTableLinks["pEmployee"] ) ) {
			$lookupTableLinks["pEmployee"] = array();
		}
		if( !isset( $lookupTableLinks["pEmployee"]["tsaleh.SaleMenCode"] )) {
			$lookupTableLinks["pEmployee"]["tsaleh.SaleMenCode"] = array();
		}
		$lookupTableLinks["pEmployee"]["tsaleh.SaleMenCode"]["edit"] = array("table" => "tSaleH", "field" => "SaleMenCode", "page" => "edit");
		if( !isset( $lookupTableLinks["umUserInfo"] ) ) {
			$lookupTableLinks["umUserInfo"] = array();
		}
		if( !isset( $lookupTableLinks["umUserInfo"]["tsaleh.UserName"] )) {
			$lookupTableLinks["umUserInfo"]["tsaleh.UserName"] = array();
		}
		$lookupTableLinks["umUserInfo"]["tsaleh.UserName"]["edit"] = array("table" => "tSaleH", "field" => "UserName", "page" => "edit");
		if( !isset( $lookupTableLinks["umUserInfo"] ) ) {
			$lookupTableLinks["umUserInfo"] = array();
		}
		if( !isset( $lookupTableLinks["umUserInfo"]["tsaleh.UpdateUser"] )) {
			$lookupTableLinks["umUserInfo"]["tsaleh.UpdateUser"] = array();
		}
		$lookupTableLinks["umUserInfo"]["tsaleh.UpdateUser"]["edit"] = array("table" => "tSaleH", "field" => "UpdateUser", "page" => "edit");
		if( !isset( $lookupTableLinks["pAccounts"] ) ) {
			$lookupTableLinks["pAccounts"] = array();
		}
		if( !isset( $lookupTableLinks["pAccounts"]["tsaled.PartyCode"] )) {
			$lookupTableLinks["pAccounts"]["tsaled.PartyCode"] = array();
		}
		$lookupTableLinks["pAccounts"]["tsaled.PartyCode"]["edit"] = array("table" => "tSaleD", "field" => "PartyCode", "page" => "edit");
		if( !isset( $lookupTableLinks["pProductItems"] ) ) {
			$lookupTableLinks["pProductItems"] = array();
		}
		if( !isset( $lookupTableLinks["pProductItems"]["tsaled.ProductCode"] )) {
			$lookupTableLinks["pProductItems"]["tsaled.ProductCode"] = array();
		}
		$lookupTableLinks["pProductItems"]["tsaled.ProductCode"]["edit"] = array("table" => "tSaleD", "field" => "ProductCode", "page" => "edit");
		if( !isset( $lookupTableLinks["psProductGroup"] ) ) {
			$lookupTableLinks["psProductGroup"] = array();
		}
		if( !isset( $lookupTableLinks["psProductGroup"]["tsaled.ProductGroupCode"] )) {
			$lookupTableLinks["psProductGroup"]["tsaled.ProductGroupCode"] = array();
		}
		$lookupTableLinks["psProductGroup"]["tsaled.ProductGroupCode"]["edit"] = array("table" => "tSaleD", "field" => "ProductGroupCode", "page" => "edit");
		if( !isset( $lookupTableLinks["psUnits"] ) ) {
			$lookupTableLinks["psUnits"] = array();
		}
		if( !isset( $lookupTableLinks["psUnits"]["tsaled.UnitCode"] )) {
			$lookupTableLinks["psUnits"]["tsaled.UnitCode"] = array();
		}
		$lookupTableLinks["psUnits"]["tsaled.UnitCode"]["edit"] = array("table" => "tSaleD", "field" => "UnitCode", "page" => "edit");
		if( !isset( $lookupTableLinks["umUserInfo"] ) ) {
			$lookupTableLinks["umUserInfo"] = array();
		}
		if( !isset( $lookupTableLinks["umUserInfo"]["tsaled.UserName"] )) {
			$lookupTableLinks["umUserInfo"]["tsaled.UserName"] = array();
		}
		$lookupTableLinks["umUserInfo"]["tsaled.UserName"]["edit"] = array("table" => "tSaleD", "field" => "UserName", "page" => "edit");
		if( !isset( $lookupTableLinks["umUserInfo"] ) ) {
			$lookupTableLinks["umUserInfo"] = array();
		}
		if( !isset( $lookupTableLinks["umUserInfo"]["tsaled.UpdateUser"] )) {
			$lookupTableLinks["umUserInfo"]["tsaled.UpdateUser"] = array();
		}
		$lookupTableLinks["umUserInfo"]["tsaled.UpdateUser"]["edit"] = array("table" => "tSaleD", "field" => "UpdateUser", "page" => "edit");
		if( !isset( $lookupTableLinks["umUserInfo"] ) ) {
			$lookupTableLinks["umUserInfo"] = array();
		}
		if( !isset( $lookupTableLinks["umUserInfo"]["pbu.UserName"] )) {
			$lookupTableLinks["umUserInfo"]["pbu.UserName"] = array();
		}
		$lookupTableLinks["umUserInfo"]["pbu.UserName"]["edit"] = array("table" => "pBU", "field" => "UserName", "page" => "edit");
		if( !isset( $lookupTableLinks["umUserInfo"] ) ) {
			$lookupTableLinks["umUserInfo"] = array();
		}
		if( !isset( $lookupTableLinks["umUserInfo"]["pbu.UpdateUser"] )) {
			$lookupTableLinks["umUserInfo"]["pbu.UpdateUser"] = array();
		}
		$lookupTableLinks["umUserInfo"]["pbu.UpdateUser"]["edit"] = array("table" => "pBU", "field" => "UpdateUser", "page" => "edit");
		if( !isset( $lookupTableLinks["pBU"] ) ) {
			$lookupTableLinks["pBU"] = array();
		}
		if( !isset( $lookupTableLinks["pBU"]["pbank.business_id"] )) {
			$lookupTableLinks["pBU"]["pbank.business_id"] = array();
		}
		$lookupTableLinks["pBU"]["pbank.business_id"]["edit"] = array("table" => "pBank", "field" => "business_id", "page" => "edit");
		if( !isset( $lookupTableLinks["psBankGroup"] ) ) {
			$lookupTableLinks["psBankGroup"] = array();
		}
		if( !isset( $lookupTableLinks["psBankGroup"]["pbank.group_id"] )) {
			$lookupTableLinks["psBankGroup"]["pbank.group_id"] = array();
		}
		$lookupTableLinks["psBankGroup"]["pbank.group_id"]["edit"] = array("table" => "pBank", "field" => "group_id", "page" => "edit");
		if( !isset( $lookupTableLinks["pProductItems"] ) ) {
			$lookupTableLinks["pProductItems"] = array();
		}
		if( !isset( $lookupTableLinks["pProductItems"]["comission_group_detail.product_id"] )) {
			$lookupTableLinks["pProductItems"]["comission_group_detail.product_id"] = array();
		}
		$lookupTableLinks["pProductItems"]["comission_group_detail.product_id"]["edit"] = array("table" => "comission_group_detail", "field" => "product_id", "page" => "edit");
		if( !isset( $lookupTableLinks["psUnits"] ) ) {
			$lookupTableLinks["psUnits"] = array();
		}
		if( !isset( $lookupTableLinks["psUnits"]["comission_group_detail.discount_type"] )) {
			$lookupTableLinks["psUnits"]["comission_group_detail.discount_type"] = array();
		}
		$lookupTableLinks["psUnits"]["comission_group_detail.discount_type"]["edit"] = array("table" => "comission_group_detail", "field" => "discount_type", "page" => "edit");
		if( !isset( $lookupTableLinks["label_groups"] ) ) {
			$lookupTableLinks["label_groups"] = array();
		}
		if( !isset( $lookupTableLinks["label_groups"]["label_codes.label_group_id"] )) {
			$lookupTableLinks["label_groups"]["label_codes.label_group_id"] = array();
		}
		$lookupTableLinks["label_groups"]["label_codes.label_group_id"]["edit"] = array("table" => "label_codes", "field" => "label_group_id", "page" => "edit");
		if( !isset( $lookupTableLinks["languages"] ) ) {
			$lookupTableLinks["languages"] = array();
		}
		if( !isset( $lookupTableLinks["languages"]["language_lael.language_id"] )) {
			$lookupTableLinks["languages"]["language_lael.language_id"] = array();
		}
		$lookupTableLinks["languages"]["language_lael.language_id"]["edit"] = array("table" => "language_lael", "field" => "language_id", "page" => "edit");
		if( !isset( $lookupTableLinks["label_codes"] ) ) {
			$lookupTableLinks["label_codes"] = array();
		}
		if( !isset( $lookupTableLinks["label_codes"]["language_lael.label_id"] )) {
			$lookupTableLinks["label_codes"]["language_lael.label_id"] = array();
		}
		$lookupTableLinks["label_codes"]["language_lael.label_id"]["edit"] = array("table" => "language_lael", "field" => "label_id", "page" => "edit");
		if( !isset( $lookupTableLinks["languages"] ) ) {
			$lookupTableLinks["languages"] = array();
		}
		if( !isset( $lookupTableLinks["languages"]["selected_lanugage.language_id"] )) {
			$lookupTableLinks["languages"]["selected_lanugage.language_id"] = array();
		}
		$lookupTableLinks["languages"]["selected_lanugage.language_id"]["edit"] = array("table" => "selected_lanugage", "field" => "language_id", "page" => "edit");
}

?>