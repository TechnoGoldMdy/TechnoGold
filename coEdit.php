<html>
<head>
  <link rel="stylesheet" href="mystyle.css">
</head>
<body>
<h1>Edit Company</h1>
<?php 
 include("db.php");
 $id=$_GET['id'];
 $sql=mysql_query("SELECT * FROM company WHERE id=$id");
 $row=mysql_fetch_array($sql);
 ?>
<form action="coUpdate.php" method="POST" class="fEdit">
 <table class="myId">
 <input type="hidden" name="id" value="<?php echo $row['id']?>"
  
 <tr>
  <td><label for="name" >Name</label></td>
  <td><input type="text" name="name" id="name" value="<?php echo $row['name']?>"></td>
  </tr>

  <tr>
  <td><label for="phone">Phone</label></td>
  <td><input type="text" name="phone" id="phone" value="<?php echo $row['phone']?>" ></td>
  </tr>
  
  <tr>
  <td>
  <label for="address">Address</label></td>
  <td><input type="text" name="address" id="address" value="<?php echo $row['address']?>" ></td>
  </tr>
  
  <tr>
    <td><input type="submit" value="Update" ></td>
  </tr>
  </table>
  </form>
</body>
<html>