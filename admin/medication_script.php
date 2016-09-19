<?php
//session_start();	
include "./connect_db.inc";
$connection = db_connect();

	if ( ! $connection ) 
        {
		print( "cannot connect to database" );
		exit;
	}
$p_id=$_POST['p_id'];	
$current_medication=$_POST['current_medication'];
$medication_name = $_POST['medication_name'];
$drug_code = $_POST['drug_code'];
$strength = $_POST['strength'];
$dose = $_POST['dose'];
$route = $_POST['route'];
//$current_medication = $_POST['current_medication'];
$blood_test_recommendations = $_POST['blood_test_recommendations'];



$sql = "insert into medication(patient_id,medication_name,drug_code,strength,dose,route,frequency,current_medication,blood_test_recommendations) values('$p_id','$medication_name', '$drug_code', '$strength','$dose','$route','$frequency','$current_medication','$blood_test_recommendations')";
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
