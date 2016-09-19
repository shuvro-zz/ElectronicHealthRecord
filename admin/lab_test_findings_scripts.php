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
$report_name = $_POST['report_name'];
$test = $_POST['test'];
$lab_test_id = $_POST['lab_test_id'];
$lab_address = $_POST['lab_address'];
$test_result = $_POST['test_result'];
$lab_report = $_POST['lab_report'];

$timestamp=time();
$lab_find_image = $_FILES['lab_find_image']['name'];
//$avatar=$_POST['avatar'];
$pic=0;
if ( strlen ( $lab_find_image ) > 0)
{
$pic=1;
$ary=explode("." , $lab_find_image);
$newfilename=$timestamp.".".$ary[1];
copy($_FILES["lab_find_image"]["tmp_name"],
      "labtest/".$newfilename);
}


//if (strlen($newfilename)>0){

         $sql = "insert into lab_test_findings(patient_id,report_name,test,lab_test_id,lab_address,test_result,lab_find_image,lab_report)values('$patient_id','$report_name','$test','$lab_test_id','$lab_address','$test_result','$newfilename','$lab_report')";
//}
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
