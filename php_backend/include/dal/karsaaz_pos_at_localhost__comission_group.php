<?php
$dalTablecomission_group = array();
$dalTablecomission_group["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablecomission_group["name"] = array("type"=>200,"varname"=>"name", "name" => "name", "autoInc" => "0");
$dalTablecomission_group["is_active"] = array("type"=>16,"varname"=>"is_active", "name" => "is_active", "autoInc" => "0");
$dalTablecomission_group["id"]["key"]=true;

$dal_info["karsaaz_pos_at_localhost__comission_group"] = &$dalTablecomission_group;
?>