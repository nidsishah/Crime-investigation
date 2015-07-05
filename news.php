
<html>
<BODY>
<CENTER><IMG SRC="BREAKING.JPG" WIDTH="50%" HEIGHT="40%"></CENTER>

<?php
error_reporting(0);
$username = "root";
$password = "";
$hostname = "localhost"; 

//connection to the database
$dbhandle = mysql_connect($hostname, $username, $password) 
 or die("Unable to connect to MySQL");

echo "<h1><center>WANTED CRIMINALS</CENTER></H1>";

$selected= mysql_select_db("combo",$dbhandle ) 
  or die("Could not select bookmyshow");
// Make a MySQL Connection
$query1 = "SELECT * FROM `criminal` where status= 'wanted'"; 
if(!$query1)
{
echo "error";
}
	 
$result1= mysql_query($query1) or die(mysql_error());
if(!$result1)
{
echo "error";
}
echo "<br><CENTER><table border=1>";
echo "<tr><th> NAME:</th><th> CRIME:</th><th> DATE:</th><th> STATUS:</th><th> ADDRESS:</th><th> PHONE NO:</th><th> BUSINESS:</th><th> PHOTO:</th>";
while($info1=mysql_fetch_array($result1))
{
//header('Location:http://localhost/myproject/days.html');
echo "<tr>";
print " <td>".$info1[1]."</td>";
//print "<tr>";
print " <td>".$info1[2]."</td>";
//print "<tr>";
print " <td>".$info1[3]."</td>";
//print "<tr>";
print " <td>".$info1[4]."</td>";
//print "<tr>";
print " <td>".$info1[6]."</td>";
//print "<tr>";
print " <td>".$info1[7]."</td>";
//print "<tr>";
print " <td>".$info1[8]."</td>";
//print "<tr>";
print " <td><IMG SRC=".$info1[9]." width=100% height= 60%></td>";
print "</tr>";

}
print "</table></CENTER><BR><BR>";

echo "<h1><center>RUNNING CASES</CENTER></H1>";

$query = "SELECT * FROM `case1` where case_status= 'running'"; 
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
echo "<br><CENTER><table border=1>";
echo "<tr><th> NAME:</th><th> DATE:</th><th> REGISTER BY:</th><th> FILLED BY:</th><th> SUSPECTS:</th><th> STATUS:</th><th> POLICE HEAD:</th><th> CRIME:</th><th> CRIME LOCATION:</th><th> CASE AFFECTED PEOPLE:</th></tr>";
while($info=mysql_fetch_array($result))
{
//header('Location:http://localhost/myproject/days.html');
echo "<tr>";
print " <td>".$info[1]."</td>";
//print "<tr>";
print " <td>".$info[2]."</td>";
//print "<tr>";
print " <td>".$info[3]."</td>";
//print "<tr>";
print " <td>".$info[4]."</td>";
//print "<tr>";
print " <td>".$info[5]."</td>";
//print "<tr>";
print " <td>".$info[6]."</td>";
//print "<tr>";
print " <td>".$info[7]."</td>";
//print "<tr>";
print " <td>".$info[8]."</td>";
//print "<tr>";
print " <td>".$info[9]."</td>";
//print "<tr>";
print " <td>".$info[10]."</td>";
print "</tr>";


}
print "</table><CENTER><br><br>";


?>
</BODY>
</html>