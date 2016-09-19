<?php
session_start();	
include "./connect_db.inc";
$connection = db_connect();

	if ( ! $connection ) 
        {
		print( "cannot connect to database" );
		exit;
	}
$treatment_id = $_POST['treatment_id'];
$treatment_plan_investigations = $_POST['treatment_plan_investigations'];
$treatment_plan_medication = $_POST['treatment_plan_medication'];
$treatment_plan_procedure = $_POST['treatment_plan_procedure'];
$treatment_plan_referra = $_POST['treatment_plan_referra'];
$other_treatment_plan_type = $_POST['other_treatment_plan_type'];
$other_treatment_plan_details = $_POST['other_treatment_plan_details'];
$current_clinical_status = $_POST['current_clinical_status'];


$sql = "insert into treatment(treatment_id,treatment_plan_investigations,treatment_plan_medication,treatment_plan_procedure,treatment_plan_referra,other_treatment_plan_type,other_treatment_plan_details,current_clinical_status) values('$treatment_id', '$treatment_plan_investigations', '$treatment_plan_medication','$treatment_plan_procedure','$treatment_plan_referra','$other_treatment_plan_type','$other_treatment_plan_details','$current_clinical_status')";
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
