<?php
session_start();	
include "./connect_db.inc";
$connection = db_connect();

	if ( ! $connection ) 
        {
		print( "cannot connect to database" );
		exit;
	}
//$encounter_id = $_POST['encounter_id'];
$patient_id= $_SESSION['uhid'];
$title = $_POST['title'];
$doc_type = $_POST['doc_type'];
$other = $_POST['other'];

$timestamp=time();
$image = $_FILES['image']['name'];
//$avatar=$_POST['avatar'];
$pic=0;
if ( strlen ( $image ) > 0)
{
$pic=1;
$ary=explode("." , $image);
$newfilename=$timestamp.".".$ary[1];
copy($_FILES["image"]["tmp_name"],
      "upload/".$newfilename);
}


$sql = "insert into upload_document(patient_id,title,doc_type,other,image) values('$patient_id','$title', '$doc_type','$other','$newfilename')";
$result=mysql_query($sql,$connection);

if($result)
{
	//$_SESSION['uh']=$patient_id;
	header("location:upload_document.php");

}

?>

 


<!--
 $sql1="select * from upload_document where patient_id=$patient_id";
//echo $sql1;	
$result1=mysql_query($sql1,$connection);
$num=mysql_num_rows($result1);
//echo $num;
//$num=mysql_fetch_assoc($result1);
//$r=$num['total'];

//echo"you have uploaded '$num' documents";
   $m=10;
   $p=$m-$num;
  // echo" '$p' more left";

if($p!=0){
	$patient_id=$_SESSION['patient_id'];
	
	
	
	
}
else{
	echo'Sorry u can,t upload any more';
}-->