<?php 
require "../../backend/connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=initial-scale=1.0">
<title>Document</title>
<link rel="stylesheet" href="../css/hello.css">
</head>
<body>
<div class="menu">
<form action="../../backend/create.php" method="post">

<p id="header">Create Your Account</p> <br>

<div class="icons">     
<input type="username" id="username"name =" username" placeholder="username"><br><br>
<input type="email" id="email"name="email" placeholder="email"><br><br>
<input type="password" id="password" name="password" placeholder="password"><br><br>
</div>


<br>
<button type="submit" class="button" name="button">Submit</button>
<br><br>
<a  style ="text-decoration:none;margin-top:1cm;"href="../../backend/read.php">reports</a>
</form>
</div>
</body>
</html>