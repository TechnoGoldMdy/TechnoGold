<?php  
 include("db.php");
 ?>
<html>
<head>
<link rel="stylesheet" href="mystyle.css">
</head>
<body>
<table class="ptable">
<?php 
$perpage=5;
if(isset($_GET['page']))
  {
  $page=intval($_GET['page']);
  }else{
      $page=1;
        }
	$cal=$perpage*$page;
	$start=$cal-$perpage;
	$result=mysql_query("Select * from company LIMIT $start,$perpage");
	$row=mysql_num_rows($result);
	if($row)
	{
	  $i=0;
	  while($post=mysql_fetch_assoc($result)){
  ?>
  <tbody>
  <tr>
  <td><?php echo $post['name']; ?></td>
   </tr>
   <tr>
   <td><?php echo $post['phone']; ?></td>
   </tr>
   <tr>
    <td><?php echo $post['address']?> </td>
	</tr>
  <?php 
     }
	}
	?>
</tbody>
</table>
 <table>
 <tbody>
 <tr>
 <td align="center">
 <?php
   if(isset($page))
   {
    $result=mysql_query("SELECT Count(*) As Total from company");
	$row=mysql_num_rows($result);
	if($row)
	{
	$rs=mysql_fetch_assoc($result);
	$total==$rs['Total'];
	}
	$totalpages=ceil($total/$perpage);
	if($page<=1)
	{
	  echo "<span id='page_link'>Prev</span>";
	}
	else{
	      $j=$page-1;
		  echo "<span><a id='pageLink' href='pagination.php?page=#j'><Prev</a></span>";
         }
    for($i=1;$i<=$totalpages;$i++)
      {
	   if($i<>$page)
	   {
	     echo "<span> <a id='pageLink' href='pagination.php?page=$i'>$i</a></span>";
	   }
	   else
	   {
	    
		echo "<span id='page_link'>$i</span>";
	   }
       }
  if($page==$totalpages)
    {
	 echo "<span><a id='pageLink'>Next></a></span>";
     }
    else 
        {
		 $j=$page+1;
		   echo "<span><a id='pageLink' href='pagination.php?page=#j'>Next</a></span>";
         }		
    }
   ?>
   </td>
   <td></td>
   </tbody>
   </table>
</body>
</html>