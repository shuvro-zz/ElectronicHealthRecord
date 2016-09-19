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
$prescription_id = $_POST['prescription_id'];
$health_care_provider = $_POST['health_care_provider'];
$diagnosis = $_POST['diagnosis'];
$vital = $_POST['vital'];
$date = $_POST['date'];
$reason_for_visit=$_POST['reason_for_visit'];
$timestamp=time();
$prescription_image = $_FILES['prescription_image']['name'];
//$avatar=$_POST['avatar'];
$pic=0;
if ( strlen ( $prescription_image ) > 0)
{
$pic=1;
$ary=explode("." , $prescription_image);
$newfilename=$timestamp.".".$ary[1];
copy($_FILES["prescription_image"]["tmp_name"],
      "prescription_results/".$newfilename);
}

$sql = "insert into prescription(patient_id,prescription_id,health_care_provider,diagnosis,vital,date,reason_for_visit,prescription_image) values('$patient_id', '$prescription_id','$health_care_provider','$diagnosis','$vital','$date','$reason_for_visit','$newfilename')";
//echo $sql;
$result=mysql_query($sql,$connection);

if(!$result)
{echo "error";
}
else
{
	header("location:admin_home.php");
}





?>
