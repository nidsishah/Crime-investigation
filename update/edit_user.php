

<?php
$conn = mysql_connect("localhost","root","");
mysql_select_db("combo",$conn);

if(isset($_POST["submit"]) && $_POST["submit"]!="") {
$usersCount = count($_POST["name"]);
for($i=0;$i<$usersCount;$i++) {
$result1=mysql_query("UPDATE CRIMINAL set name='" . $_POST["name"][$i] . "', crime='" . $_POST["crime"][$i] . "', date='" . $_POST["date"][$i] . "', status='" . $_POST["status"][$i] . "', address='" . $_POST["address"][$i] . "', contact_no='" . $_POST["contact_no"][$i] . "', family_background='" . $_POST["family_background"][$i] . "' WHERE cid='" . $_POST["cid"][$i] . "'");

if($result1)
{
header("Location:list_user.php");
}
else
{
die('Could not enter data: ' . mysql_error());
}
}
}
?>
<html>
<head>
<title>Edit Multiple User</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
</head>
<body>
<CENTER><IMG SRC="update1.JPG" WIDTH="50%" HEIGHT="40%"></CENTER>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<CENTER><table border="0" cellpadding="10" cellspacing="0" width="500" align="center">
<tr class="tableheader">
<td>Edit User</td>
</tr>
<?php
$rowCount = count($_POST["criminals"]);
for($i=0;$i<$rowCount;$i++) {
$result = mysql_query("SELECT * FROM criminal WHERE cid='" . $_POST["criminals"][$i] . "'");
$row[$i]= mysql_fetch_array($result);
?>
<tr>
<td>
<table border="0" cellpadding="10" cellspacing="0" width="500" align="center" class="tblSaveForm">
<tr>

<td><label>Criminal Name</label></td>
<td><input type="hidden" name="cid[]" class="txtField" value="<?php echo $row[$i]['cid']; ?>"><input type="text" name="name[]" class="txtField" value="<?php echo $row[$i]['name']; ?>"></td>
</tr>
<tr>
<td><label>Crime</label></td>
<td><input type="text" name="crime[]" class="txtField" value="<?php echo $row[$i]['crime']; ?>"></td>
</tr>
<tr>
<td><label>Date</label></td>
<td><input type="text" name="date[]" class="txtField" value="<?php echo $row[$i]['date']; ?>"></td>
</tr>
<tr>
<td><label>Status</label></td>
<td><input type="text" name="status[]" class="txtField" value="<?php echo $row[$i]['status']; ?>"></td>
</tr>
<tr>
<td><label>Address</label></td>
<td><input type="text" name="address[]" class="txtField" value="<?php echo $row[$i]['address']; ?>"></td>
</tr>
<tr>
<td><label>Contact Number</label></td>
<td><input type="text" name="contact_no[]" class="txtField" value="<?php echo $row[$i]['contact_no']; ?>"></td>
</tr>
<tr>
<td><label>Family background</label></td>
<td><input type="text" name="lastName[]" class="txtField" value="<?php echo $row[$i]['family_background']; ?>"></td>
</tr>
<tr>
<td><label>Photo</label></td>
<td><img src="<?php echo $row[$i]['photo']; ?>" width="80%" height="40%"></td>
</tr>

<?php
}
?>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Submit" class="btnSubmit"></td>
</tr>
</table></CENTER>
</div>
</form>
</body></html>