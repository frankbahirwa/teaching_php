<?php
require "./connection.php";
if(isset($_POST['button'])){

$username = $_POST['username'];
$pass = $_POST['password'];
$email = $_POST['email'];

// inserting the data into the database with the table name called students
$ins = $conn->query("INSERT INTO students (username, email,passwords) values('$username','$email','$pass')");

// verifying if the data are inserted
if($ins){
   header('location:read.php');
}else{
    echo "Failed to insert data";
}

}