<?php
session_start();	
include "./connect_db.inc";
$connection = db_connect();

	if ( ! $connection ) 
        {
		print( "cannot connect to database" );
		exit;
	}
$patient_id = $_POST['patient_id'];
//$file_name = $_POST['file_name'];

$timestamp=time();
$picture= $_FILES['picture']['name'];
//$avatar=$_POST['avatar'];
$pic=0;
if ( strlen ( $picture ) > 0)
{
$pic=1;
$ary=explode("." , $picture);
$newfilename=$timestamp.".".$ary[1];
copy($_FILES["picture"]["tmp_name"],
      "lab_image/" . $newfilename);
}
$report_text = $_POST['report_text'];
if (strlen($newfilename)>0){

$sql = "insert into lab_images(patient_id,file_name,report_text) values('$patient_id','$newfilename','$report_text')";
}
echo $sql;

$result=mysql_query($sql,$connection);

if(!$result)
{echo "error";
}
else
{
	echo"ok";
}

?>

