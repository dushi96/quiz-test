<?php
include("class/users.php");
$register=new users;
extract($_POST);
//$img_name=$_FILES['img']['name'];
//$tmp_name=$_FILES['img']['tmp_name'];
//move_uploaded_file($tmp_name, "img/".$img_name);
if(isset($_POST['submit'])){
    $location="img/";
    $img_name=$_FILES['img']['name'];
    $tmp_name=$_FILES['img']['tmp_name'];
    if(isset($img_name)){
        move_uploaded_file($tmp_name,$location.$img_name);
    }
}
$query="insert into signup values ('','$n','$e','$p','$img_name')";
if($register->signup($query))
{
	$register->url("index.php?run=success");
}


?>