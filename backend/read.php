

<br><br>
<table border="1" width="500px" style="border-collapse:collapse;">
<tr>
<th>Id</th>
<th>username</th>
<th>email</th>
<th>action</th>
</tr>
<tr>
<?php
require "./connection.php";

// handling all the data from the students data
$table = $conn->query("SELECT * FROM students");
// looping over all the datas from that table 
while($row = $table->fetch_assoc())
{?>
<td><?php echo $row['id'] ?></td>
<td><?php echo $row['username'] ?></td>
<td><?php echo $row['email'] ?></td>
<td>
<a href="delete.php?del=<?php echo $row['id']?>">delete</a>
<a href="">update</a>
</td>
</tr>
<?php

}
?>
</table>
<a style="text-decoration:none;" href="../frontend/pages/hello.php">add new</a>           