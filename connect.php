<?php
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'blog_portal';

$conn = new mysqli('localhost','root','','blog_portal');
if($conn->error){
    die('Connection Failed : ' .$conn->connect_error);
}

?>