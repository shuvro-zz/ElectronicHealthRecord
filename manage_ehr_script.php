<?php
session_start();	
include "./connect_db.inc";
$connection = db_connect();

	if ( ! $connection ) 
        {
		print( "cannot connect to database" );
		exit;
	}
	
	$patient_id = $_SESSION['uhid'];
$tabname= $_POST['tabname'];
$records = $_POST['records'];
$i=0;
$list="";
while($i<$records)
{
	$cname="c$i";
	$id=$_POST["$cname"];
	if ( strlen( $id) > 0 )
	{
		$list=$list.$id.",";
	}
$i++;	
		
}
//echo $list."<br>";
$list=substr($list,0,strlen($list)-1);
//echo $list;

		if(strlen($list)>0)
		{
		
		
		$sql = "update $tabname set status=1 where id IN ($list) ";
		$result=mysql_query($sql,$connection);
		
		
		$sql = "update $tabname set status=0 where id NOT IN ($list) ";
		//echo $sql;
	
		$result=mysql_query($sql,$connection);
		}
		else
		{
			$sql = "update $tabname set status=0 ";
		//echo $sql;
	
		$result=mysql_query($sql,$connection);
		
		}
		
	
	header("location:manage_ehr.php");




?>
