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



$sql="SELECT * FROM patient_info WHERE patient_email_id='$email' and p_password='$password'";
//echo $sql;
$result=mysql_query($sql,$connection);
$num=mysql_numrows($result);
$patient_name=mysql_result($result,$i,"patient_name");
$email=mysql_result($result,$i,"patient_email_id");
$patient_id=mysql_result($result,$i,"uhid");

if($num==1)
{  	
	$_SESSION["uid"]=$email;
	$_SESSION["pid"]=$patient_name;
	$_SESSION["uhid"]=$patient_id;
	
	
	header("location:homepage.php");
}  
	


else
{
  echo "Invalid UserName or Password";

}  
?>
