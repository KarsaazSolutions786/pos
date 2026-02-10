<?php
$dalTablepBank = array();
$dalTablepBank["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablepBank["account_title"] = array("type"=>200,"varname"=>"account_title", "name" => "account_title", "autoInc" => "0");
$dalTablepBank["account_no"] = array("type"=>200,"varname"=>"account_no", "name" => "account_no", "autoInc" => "0");
$dalTablepBank["business_id"] = array("type"=>3,"varname"=>"business_id", "name" => "business_id", "autoInc" => "0");
$dalTablepBank["group_id"] = array("type"=>3,"varname"=>"group_id", "name" => "group_id", "autoInc" => "0");
$dalTablepBank["bank_name"] = array("type"=>200,"varname"=>"bank_name", "name" => "bank_name", "autoInc" => "0");
$dalTablepBank["old_code"] = array("type"=>200,"varname"=>"old_code", "name" => "old_code", "autoInc" => "0");
$dalTablepBank["id"]["key"]=true;

$dal_info["karsaaz_pos_at_localhost__pBank"] = &$dalTablepBank;
?>