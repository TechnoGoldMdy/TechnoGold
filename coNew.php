<html>
<head>
<link rel="stylesheet" href="mystyle.css">
<link href="css/bootstrap.min.css" re
</head>
<body>
<h1>New Company</h1>
<a href="coManage.php" style="text-decoration:none; background:white">&laquo;Back </a>
<form action="coAdd.php" method="POST" class="nform">
<table class="myId" >
<tr>
<td><label for="name">Name</label></td>
<td><input type="text" name="name" id="name" placeholder="name"></td>
</tr>

<tr>
<td><label for="phone">Phone NO</label></td>
<td><input type="text" name="phone" id="phone" placeholder="phone"></td>
</tr>


<tr>
<td><label for="address">Address</label></td>
<td><input type="text" name="address" id="address" placeholder="address"></br></br></td>
</tr>
<tr>
<td></td>
</tr>
<tr>
<td>
<input type="submit" name="add" id="add" value="Add Company"></td> 
</tr>
</table>
</form>
</body>
</html>