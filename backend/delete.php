<?php
require "./connection.php";

if(isset($_GET['del'])){
$id = $_GET['del'];

$del = $conn->query("DELETE FROM students WHERE id='$id'");
if($del){
header('location:read.php');
}
}
