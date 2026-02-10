<?php
$dalTablecomission_group_detail = array();
$dalTablecomission_group_detail["id"] = array("type"=>3,"varname"=>"id", "name" => "id", "autoInc" => "1");
$dalTablecomission_group_detail["comission_group_id"] = array("type"=>3,"varname"=>"comission_group_id", "name" => "comission_group_id", "autoInc" => "0");
$dalTablecomission_group_detail["product_id"] = array("type"=>3,"varname"=>"product_id", "name" => "product_id", "autoInc" => "0");
$dalTablecomission_group_detail["discount"] = array("type"=>5,"varname"=>"discount", "name" => "discount", "autoInc" => "0");
$dalTablecomission_group_detail["discount_type"] = array("type"=>3,"varname"=>"discount_type", "name" => "discount_type", "autoInc" => "0");
$dalTablecomission_group_detail["id"]["key"]=true;

$dal_info["karsaaz_pos_at_localhost__comission_group_detail"] = &$dalTablecomission_group_detail;
?>