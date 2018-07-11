<?php 
 include("db.php");
 $id=$_POST['id'];
 $name=$_POST['name'];
 $phone=$_POST['phone'];
 $address=$_POST['address'];
 $sql=mysql_query("UPDATE company SET name='$name',phone='$phone',address='$address' WHERE id=$id");
 header("location:coList.php");
 ?>