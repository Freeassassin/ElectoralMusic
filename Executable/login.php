<?php
$host="localhost";
$user="root";
$pass="";
$db= "userdata";

$con = mysqli_connect($host,$user,$pass,$db) or die("connection failed");
$sql = 'INSERT INTO `playlists`(`name`, `description`, `cover`, `owner`) VALUES ("ff","fff","ffff","fffff")';

$query = mysqli_query($con,$sql);
?>