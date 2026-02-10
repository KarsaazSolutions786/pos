<?php
$dalTablesales = array();
$dalTablesales["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablesales["customer_id"] = array("type"=>3,"varname"=>"customer_id", "name" => "customer_id", "autoInc" => "0");
$dalTablesales["sale_by"] = array("type"=>3,"varname"=>"sale_by", "name" => "sale_by", "autoInc" => "0");
$dalTablesales["total"] = array("type"=>5,"varname"=>"total", "name" => "total", "autoInc" => "0");
$dalTablesales["discount"] = array("type"=>5,"varname"=>"discount", "name" => "discount", "autoInc" => "0");
$dalTablesales["delivery_charges"] = array("type"=>5,"varname"=>"delivery_charges", "name" => "delivery_charges", "autoInc" => "0");
$dalTablesales["grand_total"] = array("type"=>5,"varname"=>"grand_total", "name" => "grand_total", "autoInc" => "0");
$dalTablesales["added_by"] = array("type"=>3,"varname"=>"added_by", "name" => "added_by", "autoInc" => "0");
$dalTablesales["added_on"] = array("type"=>135,"varname"=>"added_on", "name" => "added_on", "autoInc" => "0");
$dalTablesales["modified_by"] = array("type"=>3,"varname"=>"modified_by", "name" => "modified_by", "autoInc" => "0");
$dalTablesales["modified_on"] = array("type"=>135,"varname"=>"modified_on", "name" => "modified_on", "autoInc" => "0");
$dalTablesales["id"]["key"]=true;

$dal_info["karsaaz_pos_at_localhost__sales"] = &$dalTablesales;
?>