<?php
$dalTablelanguages = array();
$dalTablelanguages["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablelanguages["name"] = array("type"=>200,"varname"=>"name", "name" => "name", "autoInc" => "0");
$dalTablelanguages["direction"] = array("type"=>200,"varname"=>"direction", "name" => "direction", "autoInc" => "0");
$dalTablelanguages["active"] = array("type"=>16,"varname"=>"active", "name" => "active", "autoInc" => "0");
$dalTablelanguages["lang_code"] = array("type"=>200,"varname"=>"lang_code", "name" => "lang_code", "autoInc" => "0");
$dalTablelanguages["icon"] = array("type"=>200,"varname"=>"icon", "name" => "icon", "autoInc" => "0");
$dalTablelanguages["id"]["key"]=true;

$dal_info["karsaaz_pos_at_localhost__languages"] = &$dalTablelanguages;
?>