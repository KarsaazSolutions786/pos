<?php
$dalTableumUserInfo = array();
$dalTableumUserInfo["Code"] = array("type"=>20,"varname"=>"Code", "name" => "Code", "autoInc" => "1");
$dalTableumUserInfo["UserName"] = array("type"=>200,"varname"=>"UserName", "name" => "UserName", "autoInc" => "0");
$dalTableumUserInfo["CellNo"] = array("type"=>200,"varname"=>"CellNo", "name" => "CellNo", "autoInc" => "0");
$dalTableumUserInfo["Email"] = array("type"=>200,"varname"=>"Email", "name" => "Email", "autoInc" => "0");
$dalTableumUserInfo["LoginUserName"] = array("type"=>200,"varname"=>"LoginUserName", "name" => "LoginUserName", "autoInc" => "0");
$dalTableumUserInfo["Password"] = array("type"=>200,"varname"=>"Password", "name" => "Password", "autoInc" => "0");
$dalTableumUserInfo["PasswordHint"] = array("type"=>200,"varname"=>"PasswordHint", "name" => "PasswordHint", "autoInc" => "0");
$dalTableumUserInfo["GroupCode"] = array("type"=>14,"varname"=>"GroupCode", "name" => "GroupCode", "autoInc" => "0");
$dalTableumUserInfo["Remarks"] = array("type"=>200,"varname"=>"Remarks", "name" => "Remarks", "autoInc" => "0");
$dalTableumUserInfo["UserType"] = array("type"=>16,"varname"=>"UserType", "name" => "UserType", "autoInc" => "0");
$dalTableumUserInfo["isAccountActive"] = array("type"=>16,"varname"=>"isAccountActive", "name" => "isAccountActive", "autoInc" => "0");
$dalTableumUserInfo["NoOfAttempt"] = array("type"=>200,"varname"=>"NoOfAttempt", "name" => "NoOfAttempt", "autoInc" => "0");
$dalTableumUserInfo["NoOfWorngAttempt"] = array("type"=>14,"varname"=>"NoOfWorngAttempt", "name" => "NoOfWorngAttempt", "autoInc" => "0");
$dalTableumUserInfo["api_key"] = array("type"=>200,"varname"=>"api_key", "name" => "api_key", "autoInc" => "0");
$dalTableumUserInfo["Code"]["key"]=true;

$dal_info["karsaaz_pos_at_localhost__umUserInfo"] = &$dalTableumUserInfo;
?>