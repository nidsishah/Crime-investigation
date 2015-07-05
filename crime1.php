<HTML>
<BODY>
<form method="post" action="<?php $_PHP_SELF ?>">
Enter CRIME
<input type="text" name="case_crime"><br>
<input type="submit" value="Search">
</form>

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

$s= $_POST["case_crime"];
$query="SELECT * FROM  case1 WHERE case_crime = '".$s."' ";
ECHO $S;

$result = mysql_query($query);
//$row = mysql_fetch_array($result);
//echo "UR OFFER FOR DAY IS:";
//header('Location:http://localhost/myproject/days.html');
echo "<br><table border=1>";
while($info=mysql_fetch_array($result))
{
//header('Location:http://localhost/myproject/days.html');
echo "<tr>";
print "<th> NAME:</th> <td>".$info[1]."</td></tr>";
print "<tr>";
print "<th> DATE:</th> <td>".$info[2]."</td></tr>";
print "<tr>";
print "<th> REGISTER BY:</th> <td>".$info[3]."</td></tr>";
print "<tr>";
print "<th> FILLED BY:</th> <td>".$info[4]."</td></tr>";
print "<tr>";
print "<th> SUSPECTS:</th> <td>".$info[5]."</td></tr>";
print "<tr>";
print "<th> STATUS:</th> <td>".$info[6]."</td></tr>";
print "<tr>";
print "<th> POLICE HEAD:</th> <td>".$info[7]."</td></tr>";
print "<tr>";
print "<th> CRIME:</th> <td>".$info[8]."</td></tr>";
print "<tr>";
print "<th> CRIME LOCATION:</th> <td>".$info[9]."</td></tr>";
print "<tr>";
print "<th> CASE AFFECTED PEOPLE:</th> <td>".$info[10]."</td></tr>";


}
print "</table>";
ECHO"KEEP SEARCHING";
?>
</body>
</html>