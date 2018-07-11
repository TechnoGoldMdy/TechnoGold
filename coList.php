<html>
<head>
<link rel="stylesheet" href="mystyle.css">
</head>
<body>
<div>
<h1 align="center">Company List</h1>
 <a href="index.php" style="text-decoration:none" >&laquo;Back Home</a>
 <form action="search.php" method="GET" class="sform">
  <input type="text" name="search" id="search" placeholder="search">
  <input type="submit" name="submit" value="search">
  </form>
	   


  <table class="myId" cellspacing="7" cellpadding="7" align="center" border="1">
    <thead>
	  <tr >
	     <th>Id</th>
		 <th>Name</th>
		 <th>Phone</th>
		 <th>Address</th>
	  </tr>
	 </thead>
 
	
<?php
include("db.php");
$page=$_GET['page'];
if($page=="" || $page=="1")
{
  $page1=0;
}
else
{
  $page1=($page*10)-10;
}
$rs=mysql_query("SELECT * FROM company LIMIT $page1,10");
while($row=mysql_fetch_array($rs))
{
?>
  <tbody>
    <tr align="center">
	  
	  <td><?php echo $row['0'];?></td>
	  <td><?php echo $row['1'];?></td>
	  <td><?php echo $row['2'];?></td>
	  <td><?php echo $row['3'];?></td>
	 </tr>
	 

  <?php
}
?>
</tbody>
	</table>
	<table width="" align="center" >
	  <tbody>
	  <tr>
	   
<?Php
$res=mysql_query("select * from company");
$cou=mysql_num_rows($res);
$p=$cou/10;
$p=ceil($p);
echo "</br>"; echo "</br>";
   for($i=1;$i<=$p;$i++)
   {
   ?> 
	
	<td align="center">
     <a href="coList.php?page=<?php echo $i;?>"	 class="pageA"><?php echo $i.'  ';?></a> 
	 
	 </td>
	  
	  
	   <?php
   }
?>


<td align="right" >

</td>
</tr>
</tbody>
</table>
</div>
</body>
</html>