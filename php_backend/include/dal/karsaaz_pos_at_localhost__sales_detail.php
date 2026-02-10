<?php
$dalTablesales_detail = array();
$dalTablesales_detail["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablesales_detail["sales_id"] = array("type"=>3,"varname"=>"sales_id", "name" => "sales_id", "autoInc" => "0");
$dalTablesales_detail["item_id"] = array("type"=>3,"varname"=>"item_id", "name" => "item_id", "autoInc" => "0");
$dalTablesales_detail["quantity"] = array("type"=>3,"varname"=>"quantity", "name" => "quantity", "autoInc" => "0");
$dalTablesales_detail["total"] = array("type"=>5,"varname"=>"total", "name" => "total", "autoInc" => "0");
$dalTablesales_detail["discount"] = array("type"=>5,"varname"=>"discount", "name" => "discount", "autoInc" => "0");
$dalTablesales_detail["sub_total"] = array("type"=>5,"varname"=>"sub_total", "name" => "sub_total", "autoInc" => "0");
$dalTablesales_detail["id"]["key"]=true;

$dal_info["karsaaz_pos_at_localhost__sales_detail"] = &$dalTablesales_detail;
?>