<?php
$dalTableusers = array();
$dalTableusers["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTableusers["first_name"] = array("type"=>200,"varname"=>"first_name", "name" => "first_name", "autoInc" => "0");
$dalTableusers["last_name"] = array("type"=>200,"varname"=>"last_name", "name" => "last_name", "autoInc" => "0");
$dalTableusers["username"] = array("type"=>200,"varname"=>"username", "name" => "username", "autoInc" => "0");
$dalTableusers["phone_number"] = array("type"=>200,"varname"=>"phone_number", "name" => "phone_number", "autoInc" => "0");
$dalTableusers["password"] = array("type"=>201,"varname"=>"password", "name" => "password", "autoInc" => "0");
$dalTableusers["is_admin"] = array("type"=>16,"varname"=>"is_admin", "name" => "is_admin", "autoInc" => "0");
$dalTableusers["date"] = array("type"=>135,"varname"=>"date", "name" => "date", "autoInc" => "0");
$dalTableusers["added_by"] = array("type"=>3,"varname"=>"added_by", "name" => "added_by", "autoInc" => "0");
$dalTableusers["added_on"] = array("type"=>135,"varname"=>"added_on", "name" => "added_on", "autoInc" => "0");
$dalTableusers["modified_by"] = array("type"=>3,"varname"=>"modified_by", "name" => "modified_by", "autoInc" => "0");
$dalTableusers["modified_on"] = array("type"=>135,"varname"=>"modified_on", "name" => "modified_on", "autoInc" => "0");
$dalTableusers["id"]["key"]=true;

$dal_info["karsaaz_pos_at_localhost__users"] = &$dalTableusers;
?>