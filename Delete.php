<?php
include("connection.php");
$id=$_GET['con'];


$sql="delete from users where ID=$id";
$arr=$conn->query($sql);
header("location:details.php")
?>