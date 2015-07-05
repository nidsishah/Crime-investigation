
<html>
<BODY>
<CENTER><IMG SRC="PROMOTION.PNG" WIDTH="50%" HEIGHT="40%"></CENTER>
<br><br>

<?php
error_reporting(0);
$username = "root";
$password = "";
$hostname = "localhost"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("Unable to connect to MySQL");



$selected= mysql_select_db("combo",$dbhandle ) 
  or die("Could not select bookmyshow");
// Make a MySQL Connection

$query = "SELECT `case_police_head` ,count(*) FROM `case`  group by `case_police_head`"; 
if(!$query)
{
echo "error";
}
	 
$result = mysql_query($query) or die(mysql_error());
if(!$result)
{
echo "error";
}


// Print out result
echo "<center><table border=3 width=60% >";
echo "<tr>";
print "<th> Police head:</th> <th> Cases solved:</th> <th>Promotion</th></tr>";
while($row = mysql_fetch_array($result)){
if($row[1]>2)
{
print "<tr>";
print " <td>".$row[0]."</td><td>".$row[1]."</td><td>Promoted</tr>";
}
if($row[1]<=2)
{
print "<tr>";
print " <td>".$row[0]."</td><td>".$row[1]."</td><td>Not Promoted</tr>";
}


	

}
print "</table><center>";
?>
<BODY>
</html>