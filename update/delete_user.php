<html>
<BODY>
<CENTER><IMG SRC="delete.png" WIDTH="50%" HEIGHT="40%"></CENTER>
<?php
$conn = mysql_connect("localhost","root","");
mysql_select_db("combo",$conn);
$rowCount = count($_POST["criminals"]);
for($i=0;$i<$rowCount;$i++) {
mysql_query("DELETE FROM criminal WHERE cid='" . $_POST["criminals"][$i] . "'");
}
header("Location:list_user.php");
?>
</BODY>
</html>