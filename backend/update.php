 <?php 
require "./connection.php";

if(isset($_GET['upd'])){
    $id = $_GET['upd'];
    $existing = $conn->query("SELECT * FROM students where id ='$id'");
    while($row = $existing->fetch_assoc())
    {?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=initial-scale=1.0">
<title>Document</title>
<link rel="stylesheet" href="../frontend/css/hello.css">
</head>
<body>
<div class="menu">
<form action="#" method="post">

<p id="header">update Your Account</p> <br>

<div class="icons">     
<input type="username" id="new_username"name ="newusername" placeholder="username" value="<?php echo $row['username']; ?>"><br><br>
<input type="email" id="new_email"name="newemail" placeholder="email" value="<?php echo $row['email']; ?>"><br><br>
<input type="password" id="new_password" name="newpassword" placeholder="password" value="<?php echo $row['passwords'];?>"><br><br>
</div>


<br>
<button type="submit" class="button" name="button">Submit</button>
<br><br>
<a  style ="text-decoration:none;margin-top:1cm;"href="./read.php">reports</a>
</form>
</div>
</body>
</html>

   <?php 
   }

   if(isset($_POST['button'])){

$new_username =$_POST['newusername'];
$new_email=$_POST['newemail'];
$new_password =$_POST['newpassword'];

$update = $conn->query("UPDATE students SET username='$new_username' , email='$new_email' , passwords='$new_password' WHERE id='$id'");
if($update){
header('location:read.php');
}

   }

}


?>

