<?php
$dalTablekarsaaz_posugmembers = array();
$dalTablekarsaaz_posugmembers["UserName"] = array("type"=>200,"varname"=>"UserName", "name" => "UserName", "autoInc" => "0");
$dalTablekarsaaz_posugmembers["GroupID"] = array("type"=>3,"varname"=>"GroupID", "name" => "GroupID", "autoInc" => "0");
$dalTablekarsaaz_posugmembers["Provider"] = array("type"=>200,"varname"=>"Provider", "name" => "Provider", "autoInc" => "0");
$dalTablekarsaaz_posugmembers["UserName"]["key"]=true;
$dalTablekarsaaz_posugmembers["GroupID"]["key"]=true;
$dalTablekarsaaz_posugmembers["Provider"]["key"]=true;

$dal_info["karsaaz_pos_at_localhost__karsaaz_posugmembers"] = &$dalTablekarsaaz_posugmembers;
?>