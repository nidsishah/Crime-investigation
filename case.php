
<!DOCTYPE html>
<head>
<title>
Events
</title>
<style>
h1 {
    text-shadow: 4px 4px #FF0000;
}
img
{ margin-left: 35px;}
</style>

<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<style type="text/css">
	
	body
	{
	margin-left:10%;
margin-right:10%;
border-color:yello;
border-style:outset;
border-width:6px;
	}
</style>
</head> 
<body>

	   

    
<?php
if(isset($_POST['submit']))
{
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}
mysql_select_db('combo');

//if(! get_magic_quotes_gpc() )
//{

   $cn = addslashes ($_POST['case_name']);
   $crime = addslashes ($_POST['case_crime']);
   $date = addslashes ($_POST['case_date']);
   $status = addslashes ($_POST['case_status']);
   $reg = addslashes ($_POST['case_registered_by']);
   $fill = addslashes ($_POST['case_filed_by']);
   $suspects = addslashes ($_POST['case_suspects']);
 $phead = addslashes ($_POST['case_police_head']);
   $location = addslashes ($_POST['case_crime_location']);
$aff_p = addslashes ($_POST['case_affected_people']);
  
 
   

$insert = "INSERT INTO case1(case_name,case_date,case_registered_by,case_filed_by,case_suspects,case_status,case_police_head,case_crime,case_crime_location,case_affected_people) VALUES ('$cn','$date','$reg','$fill','$suspects','$status','$phead','$crime','$location','$aff_p')";
$retval = mysql_query( $insert, $conn);
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";	   

mysql_close($conn);
}
else
{
?>
<center><h1>CASE FORM</h1></center>
<form method="post" action="<?php $_PHP_SELF ?>">
<table width="60%" border="0" cellspacing="15" cellpadding="7">

<tr>
<td >CASE Name</td>
<td><input name="case_name" type="text" id="case_name" placeholder="Enter name"></td>
</tr>
<tr><td>  </td></tr>

<tr>
<td>Crime</td>
<td><input name="case_crime" type="text" id="case_crime"></td>
</tr>
<tr>
<td >Date
<td><input name="case_date" type="text" id="case_date"></td>
</tr>
<tr>
<td>Status</td>
<td><input name="case_status" type="text" id="case_status"></td>
</tr>

<tr>
<td >suspects</td>
<td><textarea name="case_suspects" rows="7" cols="30" id="case_suspects"></textarea></td>
</tr>
<tr>
<td>Case register by</td>
<td><input name="case_registered_by" type="text" id="case_registered_by"></td>
</tr>
<tr>
<td>Case filled by</td>
<td><input name="case_filed_by" type="text" id="case_filed_by"></td>
</tr>

<tr>
<td >case crime location</td>
<td><textarea name="case_crime_location" rows="7" cols="30" id="case_crime_location"></textarea></td>
</tr>
<tr>
<td >case police head</td>
<td><textarea name="case_police_head" rows="7" cols="30" id="case_police_head"></textarea></td>
</tr>
<tr>
<tr>
<td >case affected people</td>
<td><textarea name="case_affected_people" rows="7" cols="30" id="case_affected_people"></textarea></td>
</tr>


<td width="300"></td>
<td><input name="submit" type="submit" id="submit"></td>
</tr>
</div>
</table>
</form>
<?php
}
?>
</body>
</html>
