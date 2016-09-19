
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


//session_start();	
include "./connect_db.inc";
$connection = db_connect();
$_SESSION['uid']=$email;

	if ( ! $connection ) 
        {
		print( "cannot connect to database" );
		exit;
	}
	
  $ptid=2;
	$query="select * from patient_info where uhid=$ptid";
	//echo $query;						
								
				    		$result=mysql_query($query,$connection);
                $patient_image=mysql_result($result,$i,"patient_image");
                $patient_name=mysql_result($result,$i,"patient_name");
                                $patient_address_line_1=mysql_result($result,$i,"patient_address_line_1");
                
                $patient_address_line_2=mysql_result($result,$i,"patient_address_line_2");
                
                
                
                $patient_pin_code=mysql_result($result,$i,"patient_pin_code"); 
                             
                $patient_phone_number=mysql_result($result,$i,"patient_phone_number");
              
                $patient_email_id=mysql_result($result,$i,"patient_email_id");
                
							
			
	
	
?>




<div class="patient-infogap"></div>
<div class="patient-infobg">
		<span class="patient-inspan">Welcome <?php echo $_SESSION['uid']; ?></span>
        <div class="patient-infoimg">
         <?php  
        echo "<img src = 'upload/$patient_image' height='60%'width='60%'/>";
        ?>
       				
                </div>
        
        <div class="patient-infocont">
        <h4><?php echo" $patient_name"; ?></h4>
        <p><?php echo" $patient_address_line_1"; ?></p>
        <p><?php echo" $patient_address_line_2"; ?></p>
        <p><?php echo" $patient_pin_code"; ?></p>
        <p><?php echo" $patient_phone_number"; ?></p>
        <p><?php echo" $patient_email_id"; ?></p>
        
        
        </div>
</div>

<div class="patient-infogap"></div>

<div class="patient-infobg">
		<span class="patient-inspan">Self Reported Demographics</span>
        <table border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><h6>Date of Birth</h6></td>
            <td><p>: <?php echo" $patient_date_of_birth"; ?></p></td>
          </tr>
          <tr>
         
          <tr>
             <td><h6>Blood Group</h6></td>
            <td><p>: <?php echo" $patient_blood_group "; ?></p></td>
          </tr>
        </table>

        
        
</div>


    </div>
    
</div>
<?php include ('include/footer.php');?>
</body>
</html>
