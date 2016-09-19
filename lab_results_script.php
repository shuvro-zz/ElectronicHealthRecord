<?php
session_start();	
include "./connect_db.inc";
$connection = db_connect();

	if ( ! $connection ) 
        {
		print( "cannot connect to database" );
		exit;
	}
//$lab_result_id = $_POST['lab_result_id'];
$test_order = $_POST['test_order'];
$test_date = $_POST['test_date'];
$refferd_by_the_doctor = $_POST['refferd_by_the_doctor'];
$refferd_on = $_POST['refferd_on'];



$sql = "insert into lab_results(test_order,test_date,refferd_by_the_doctor,refferd_on) values('$test_order', '$test_date','$refferd_by_the_doctor','$refferd_on')";
//echo $sql;
$result=mysql_query($sql,$connection);

if(!$result)
{echo "error";
}
else
{
	echo"ok";
}





?>
