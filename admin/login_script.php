<?php
session_start();

include "./connect_db.inc";
$connection = db_connect();

if ( ! $connection ) 
{
	print( "cannot connect to database" );
	exit;
}
$email=$_POST['email'];
$password=$_POST['password'];


$sql="SELECT email_id,password FROM admin_login WHERE email_id='$email' and password='$password'";
//echo $sql;
$result=mysql_query($sql,$connection);
$num=mysql_numrows($result);
if($num==1)
{  	
	$_SESSION['uid']=$email;
	
	header("location:admin_home.php");
}  
	


else
{
  echo "Invalid UserName or Password";

}  
?>
