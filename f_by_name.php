<HTML>
<BODY>
<h1>Search criminal by name</h1>
<form method="post" action="<?php $_PHP_SELF ?>">
Enter name
<input type="text" name="c_name"><br>
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

$s= $_POST["c_name"];
$query="SELECT * 
FROM  criminal
WHERE name = '".$s."'";
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
print "<th> CRIME:</th> <td>".$info[2]."</td></tr>";
print "<tr>";
print "<th> DATE:</th> <td>".$info[3]."</td></tr>";
print "<tr>";
print "<th> STATUS:</th> <td>".$info[4]."</td></tr>";
print "<tr>";
print "<th> ADDRESS:</th> <td>".$info[6]."</td></tr>";
print "<tr>";
print "<th> PHONE NO:</th> <td>".$info[7]."</td></tr>";
print "<tr>";
print "<th> BUSINESS:</th> <td>".$info[8]."</td></tr>";
print "<tr>";
print "<th> PHOTO:</th> <td><IMG SRC=".$info[9]."></td></tr>";
print "<tr>";

}
print "</table>";
ECHO"KEEP SEARCHING";
?>
</body>
</html>