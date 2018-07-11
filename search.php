<html>
<head>
  <link rel="stylesheet" href="mystyle.css">
  <style>
   p{color:rgb(152,221,49);}
   </style>
</head>
<body>
<table border="1" class="myId">
 
  
<?php
include("db.php");
$search=$_GET['search'];
$min_length=3;
if(strlen($search)>=$min_length)
{
 //$search=htmlspecialchars($search);
 $search=mysql_real_escape_string($search);
 $result=mysql_query("SELECT * FROM company WHERE name LIKE '%".$search."%'") or die("Invalid Query".mysql_error());
 if(!$result)
 {
  die('NO retrieve'.mysql_error());
 }
 if(mysql_num_rows($result)>0)
 {
 echo "<tr>";
   
 echo  "<th>Name</th>";
  echo "<th>Phone</th>";
 echo  "<th>Address</th>";
echo  " </tr>";
  while($row=mysql_fetch_array($result))
  {
  
   echo "<tr>";
   echo "<td>";
  echo   $row['name'];
   echo "</td>";
   echo "<td>";
  echo   $row['phone'];
   echo "</td>";
   echo "<td>";
  echo   $row['address'];
   echo "</td>";
   echo "</tr>";
  }
 }else {echo "<p>No Result</p>"; echo"</br>";} 
 }else 
 { echo "Minimum Chareacter is".$min_length; echo "</br>"; }
echo "<a href='coManage.php' style='text-decoration:none;color:white; '>&laquo;Preview</a>";
  
?>
<table>
</body>
</html>