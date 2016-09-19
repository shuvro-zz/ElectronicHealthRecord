<?php
//session_start();	
include "./connect_db.inc";
$connection = db_connect();

	if ( ! $connection ) 
        {
		print( "cannot connect to database" );
		exit;
	}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>EHR</title>
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


<div class="patient-infogap"></div>
<div class="ehrinputnamebg">
<!-------------<span class="ehrinputname"><input type="text" class="ehrinput" placeholder="First Name" /></span>
        		<span class="ehrinputname2"><input type="text" class="ehrinput" placeholder="Last Name" /></span>----------->
                
                
		<span class="patient-inspan">Prescription</span>
                
        
        <form action="prescription_script.php" method="post" enctype="multipart/form-data">
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
                    <tr>
            <td><h6>Patient Id</h6></td>
            <td><input type="text" class="ehrinput2" placeholder="Patient Id" name="patient_id" /></td>
          </tr>
          
          <tr>
            <td><h6>Prescription Id</h6></td>
            <td><input type="text" class="ehrinput2" placeholder="Prescription Id" name="prescription_id" /></td>
          </tr>
          
          <tr>
            <td><h6>Health Care Provider</h6></td>
            <td><select class="ehrinput4" placeholder="Health Care Provider" name="health_care_provider">
            <?php
             $sql="select care_provider_name from care_provider";
			 $result=mysql_query($sql,$connection);
			 $num=mysql_num_rows($result);
			 $i=0;
			 while($i < $num){
			 $health_care_provider=mysql_result($result,$i,"care_provider_name");
			
			
			?>
            
             
            		<option><?php echo" $health_care_provider";?></option>
                    <?php
                    $i++;
			 }
                    ?>
                 </select>
               </td>

          </tr>
        
          <tr>
            <td><h6>Diagnosis</h6></td>
            <td><input type="text" class="ehrinput2" placeholder="Diagnosis" name="diagnosis" /></td>
          </tr>
        
  
          <tr>
            <td><h6>Vital</h6></td>
            <td><input type="text" class="ehrinput2" placeholder="Vital " name="vital" /></textarea></td><td><a href="pulse-rate.php">Pulse Rate</td><td><a href="temperature.php">Temperature</td>&nbsp;&nbsp;&nbsp;<td><a href="blood_pressure.php">  BP</td>
          </tr>

          <tr>
            <td><h6>Date</h6></td>
            <td><input type="date" class="ehrinput4" placeholder="date" name="date" /></td>
          </tr>
          <tr>
            <td><h6>Reason For Visit</h6></td>
            <td><input type="text" class="ehrinput2" placeholder="Reason For Visit" name= "reason_for_visit" /></td>
          </tr>

          <tr>
            <td><h6>Prescription Image</h6></td>
            <td><input type="file"  placeholder="Prescription Image" name= "prescription_image" /></td>
          </tr>
        
         
          
           <tr>
            <td></td>
            <td><input type="submit" class="footerbutt" value="Submit" /><br><br>
            </td>
          </tr>
          
        </table>
        
        </form>
       
</div>

<?php include ('include/footer.php');?>


</body>
</html>
