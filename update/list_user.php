

<?php
$conn = mysql_connect("localhost","root","");
mysql_select_db("combo",$conn);
$query = "SELECT * FROM criminal";
$result = mysql_query($query,$conn);
?>
<html>
<head>
<title>Users List</title>
<link rel="stylesheet" type="text/css" href="styles.css" />
<script language="javascript" src="users.js" type="text/javascript"></script>
</head>
<body>
<CENTER><IMG SRC="criminal.JPG" WIDTH="50%" HEIGHT="40%"></CENTER>
<form name="frmUser" method="post" action="">
<div style="width:500px;">
<CENTER><table border="0" cellpadding="10" cellspacing="1" width="500" class="tblListForm">
<tr class="listheader">
<td></td>
<td>Criminal Name</td>
<td>Crime</td>
<td>Date</td>
<td>Status</td>
<td>Address</td>
<td>Contact Number</td>
<td>Family background</td>
<td>Photo</td>
</tr>
<?php
$i=0;
while($row = mysql_fetch_array($result)) {
if($i%2==0)
$classname="evenRow";
else
$classname="oddRow";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><input type="checkbox" name="criminals[]" value="<?php echo $row[0]; ?>" ></td>
<td><?php echo $row[1]; ?></td>
<td><?php echo $row[2]; ?></td>
<td><?php echo $row[3]; ?></td>
<td><?php echo $row[4]; ?></td>
<td><?php echo $row[6]; ?></td>
<td><?php echo $row[7]; ?></td>
<td><?php echo $row[8]; ?></td>
<td><?php echo $row[9]; ?></td>
</tr>
<?php
$i++;
}
?>
<tr class="listheader">
<td colspan="4"><input type="button" name="update" value="Update" onClick="setUpdateAction();" /> <input type="button" name="delete" value="Delete"  onClick="setDeleteAction();" /></td>
</tr>
</table></CENTER>
</form>
</div>
</body></html>