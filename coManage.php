<html>
<head>
<link rel="stylesheet" href="mystyle.css">
</head>
<body>
<h1>Company</h1>
<?php
include("db.php");
$rs=mysql_query("SELECT * FROM company");
?>
<div class="id">
&laquo;<a href="coList.php" align="left">Back To List</a>
<form action="search.php" method="GET" class="sform">
  <input type="text" name="search" id="search" placeholder="search">
  <input type="submit" name="submit" value="search">
  </form>
<ul id="myList">
 <?php 
   while($row=mysql_fetch_assoc($rs)): ?>
   
 <li>
   [<a href="coDel.php?id=<?php echo $row['id'];?>" class="del">del</a>]
   [<a href="coEdit.php?id=<?php echo $row['id']; ?>" class="edit">edit</a>]
   <?php echo $row['name']; ?>
   </li>
 <?php endwhile; ?>
</ul>
 <ul class="list">
   <li><a href="coNew.php" > New Company</a></li>
 
 </ul>
 </div>
</body>
</html>