<? php  
include("config.php");
session_start ();
if ($_server ["Request_Method"]=="post"){
//username and password sent from form
$myusername=mysqli_real_escape_string ($db.post ['username']);
$mypassword=mysqli_real_escape_string('$db. $_post ['password']);
$sql="select id from administration where username='$myusername'
and passcode='$mypassword';
$result=mysqli_query ('$db. $sql');
$row=mysqli_fetch_array ($result.mysqli_assoc);
$active=$row ['active'];
$count=mysqli_num_rows ($result);
//if result matched $myusername   and $myp,tablerow must be 1 row
?>