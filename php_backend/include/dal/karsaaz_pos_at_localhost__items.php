<?php
$dalTableitems = array();
$dalTableitems["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTableitems["name"] = array("type"=>200,"varname"=>"name", "name" => "name", "autoInc" => "0");
$dalTableitems["item_type"] = array("type"=>3,"varname"=>"item_type", "name" => "item_type", "autoInc" => "0");
$dalTableitems["weight_unit"] = array("type"=>3,"varname"=>"weight_unit", "name" => "weight_unit", "autoInc" => "0");
$dalTableitems["cal_by"] = array("type"=>3,"varname"=>"cal_by", "name" => "cal_by", "autoInc" => "0");
$dalTableitems["added_by"] = array("type"=>3,"varname"=>"added_by", "name" => "added_by", "autoInc" => "0");
$dalTableitems["added_on"] = array("type"=>135,"varname"=>"added_on", "name" => "added_on", "autoInc" => "0");
$dalTableitems["modified_by"] = array("type"=>3,"varname"=>"modified_by", "name" => "modified_by", "autoInc" => "0");
$dalTableitems["modified_on"] = array("type"=>135,"varname"=>"modified_on", "name" => "modified_on", "autoInc" => "0");
$dalTableitems["id"]["key"]=true;

$dal_info["karsaaz_pos_at_localhost__items"] = &$dalTableitems;
?>