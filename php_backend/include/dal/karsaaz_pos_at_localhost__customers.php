<?php
$dalTablecustomers = array();
$dalTablecustomers["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablecustomers["name"] = array("type"=>200,"varname"=>"name", "name" => "name", "autoInc" => "0");
$dalTablecustomers["phone_number"] = array("type"=>200,"varname"=>"phone_number", "name" => "phone_number", "autoInc" => "0");
$dalTablecustomers["customer_type"] = array("type"=>3,"varname"=>"customer_type", "name" => "customer_type", "autoInc" => "0");
$dalTablecustomers["bring_by"] = array("type"=>3,"varname"=>"bring_by", "name" => "bring_by", "autoInc" => "0");
$dalTablecustomers["added_by"] = array("type"=>3,"varname"=>"added_by", "name" => "added_by", "autoInc" => "0");
$dalTablecustomers["added_on"] = array("type"=>135,"varname"=>"added_on", "name" => "added_on", "autoInc" => "0");
$dalTablecustomers["modified_by"] = array("type"=>3,"varname"=>"modified_by", "name" => "modified_by", "autoInc" => "0");
$dalTablecustomers["modified_on"] = array("type"=>135,"varname"=>"modified_on", "name" => "modified_on", "autoInc" => "0");
$dalTablecustomers["id"]["key"]=true;

$dal_info["karsaaz_pos_at_localhost__customers"] = &$dalTablecustomers;
?>