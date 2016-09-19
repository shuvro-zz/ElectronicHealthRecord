<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Hcb Patient Detail</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
<link href="style/style.css" rel="stylesheet" type="text/css" media="screen">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,300italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

<script>
   $(document).ready(function(){
	   $(window).bind('scroll', function() {
	   var navHeight = 600 - 70;
			 if ($(window).scrollTop() > navHeight) {
				 $('nav').addClass('fixed');
			 }
			 else {
				 $('nav').removeClass('fixed');
			 }
		});
	});
</script>
</head>

<body>

<?php include ('include/header.php');?>

<?php


include "./connect_db.inc";
$connection = db_connect();

if ( ! $connection ) 
{
	print( "cannot connect to database" );
	exit;
}
$email=$_SESSION['uid'];

$query="select * from patient_info  where   patient_email_id='$email'";
	//echo $query;						
							$i=0;	
				    		$result=mysql_query($query,$connection);
	$patient_image=mysql_result($result,$i,"patient_image");

   $patient_name=$_SESSION["pname"];


?>
<p><?php echo "Welcome " . $patient_name . ".<br>";?></p>
<?php  
        echo "<img src = 'upload/$patient_image' height='30%'width='30%'/>";
        ?>
<table border="1">

	<tr>
	<td><a href="patient-information.php">Update Profile</a></td>

	</tr>

<tr>
	<td><a href="upload_document.php">Upload Documents</a></td>
	
	</tr>
	<tr>
	<td><a href="#">Download App</a></td>
	
	</tr>
	<tr>
	<td><a href=#> Get your ehr link </a></td>
	
	</tr>

</table>

<div class="patient-infogap"></div>
<div class="patient-infobg">
    <span class="patient-inspan">Document Details</span>
      
        <table border="0" cellspacing="0" cellpadding="0">

          <tr>
        <td><h6><strong>Title</strong></h6></td>
        <td><h6><strong>Document Type</strong></h6></td>
        <td><h6><strong>Other</strong></h6></td>
        <td><h6><strong>Uploaded File</strong></h6></td>
        
        </tr>
        

  <?php  
  $patient_id=$_SESSION['patient_id'];  

  $query="select * from upload_document where patient_id=$patient_id";
  //echo $query;            
                
                $result=mysql_query($query,$connection);
                 $num=mysql_num_rows($result);
				 //echo "$num";
				 echo"<font color='green'>you have uploaded '$num' documents.</font>";
   $m=10;
   $p=$m-$num;
   echo"<font color='green'> '$p' more left.</font>";

              $i=0;
                      while ( $i < $num )
              
             {

            $title=mysql_result($result,$i,"title");
            $doc_type=mysql_result($result,$i,"doc_type");
            $other=mysql_result($result,$i,"other");
            $image=mysql_result($result,$i,"image");





          ?>    

          <tr> 
        <td><?php echo" $title"; ?></td>
        <td><?php echo" $doc_type"; ?></td>
        <td><?php echo" $other"; ?></td>
        <td>
         <?php  
        echo "<a href='upload/$image'><img src = 'upload/$image' height='10%'width='30%'/></a>";
        ?>
        </td>

         <?php 
            $i++; 
            }
            ?>
        </tr>

           </table>
        </div>
</div>





<?php include ('include/footer.php');?>
</body>
</html>
