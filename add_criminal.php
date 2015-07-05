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
border-color:red;
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
   $cn = addslashes ($_POST['c_name']);
   $crime = addslashes ($_POST['crime']);
   $date = addslashes ($_POST['date']);
   $status = addslashes ($_POST['status']);
   $c_id = addslashes ($_POST['c_id']);
   $address = addslashes ($_POST['address']);
   $contact = addslashes ($_POST['contact_no']);
   $background = addslashes ($_POST['background']);
   //$photo = addslashes ($_POST['photo']);
   echo "hey";
   $punishment = addslashes ($_POST['punishment']);

function GetImageExtension($imagetype)
   	 {//echo "hey";

       if(empty($imagetype)) return false;
       switch($imagetype)
       {
           case 'image/bmp': return '.bmp';
           case 'image/gif': return '.gif';
           case 'image/jpeg': return '.jpg';
           case 'image/png': return '.png';
           default: return false;
       }
     }
	 
	 
	 
if (!empty($_FILES["uploadedimage"]["name"])) 
{//echo "helo";


	/*$file_name=$_FILES["uploadedimage"]["name"];*/
	$temp_name=$_FILES["uploadedimage"]["tmp_name"];
	$imgtype=$_FILES["uploadedimage"]["type"];
	$ext= GetImageExtension($imgtype);
	$imagename=$_FILES["uploadedimage"]["name"];
	$target_path = "uploads/".$imagename;
	

if(move_uploaded_file($temp_name, $target_path)) {


$sql = "INSERT INTO criminal ".
       "(name,crime,date,status,case_id,address,contact_no,family_background,photo,punishment) ".
       "VALUES('$cn','$crime','$date','$status','$c_id','$address','$contact','$background','$target_path','$punishment' )";
//mysql_select_db('admin');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";
}

else{

   exit("Error While uploading image on the server");
} 
}
else{

 $sql = "INSERT INTO criminal ".
       "(name,crime,date,status,case_id) ".
       "VALUES('$cn','$crime','$date','$status','$c_id' )";
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
echo "Entered data successfully\n";	   
} 
mysql_close($conn);
}
else
{
?>
<h1>CRIMINAL FORM</h1>
<form method="post" action="<?php $_PHP_SELF ?>" enctype="multipart/form-data">
<table width="60%" border="0" cellspacing="15" cellpadding="7">

<tr>
<td >Criminal Name</td>
<td><input name="c_name" type="text" id="c_name" placeholder="Enter name"></td>
</tr>
<tr><td>  </td></tr>

<tr>
<td>Crime</td>
<td><input name="crime" type="text" id="crime"></td>
</tr>
<tr>
<td >Date
<td><input name="date" type="text" id="date"></td>
</tr>
<tr>
<td>Status</td>
<td><input name="status" type="text" id="status"></td>
</tr>
<tr>
<td>Case Id</td>
<td><input name="c_id" type="text" id="c_id"></td>
</tr>
<tr>
<td >Address</td>
<td><textarea name="address" rows="7" cols="30" id="address"></textarea></td>
</tr>
<tr>
<td>Contact Number of criminal</td>
<td><input name="contact_no" type="text" id="contact_no"></td>
</tr>
<tr>
<td >Family background</td>
<td><textarea name="background" rows="7" cols="30" id="background"></textarea></td>
</tr>
<tr>
<td width="100"><div class="form-group">
    <label for="exampleInputFile">File input</label>
    </td>
<td><input type="file" id="uploadedimage" name="uploadedimage">
    
  </div></td>
</tr>
<tr>
<td>Punishment given</td>
<td><input name="punishmment" type="text" id="punishmment"></td>
</tr>
<tr>
<td width="300"></td>
<td><input name="submit" type="submit" id="submit"></td>
</tr>

</table>
</form>
<?php
}
?>
</body>
</html>
