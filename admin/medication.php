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
                
                
		<span class="patient-inspan">Medication</span>
                
        
        
         <form action="medication_script.php" method="post" >
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
        
        <tr>
            <td><h6>Patient_id</h6></td>
            <td><textarea class="ehrinput3" placeholder="Patient_id"  name="p_id" /></textarea></td>
          </tr>
          
          
          <tr>
            <td><h6>Current Medication</h6></td>
            <td><textarea class="ehrinput3" placeholder="YES/NO"  name="current_medication" /></textarea></td>
          </tr>
          
          <tr>
            <td><h6>Medication Name</h6></td>
            <td><textarea class="ehrinput3" placeholder="Medication Name"  name="medication_name" /></textarea></td>
          </tr>
          
          
          <tr>
            <td><h6>Drug Code</h6></td>
            <td><textarea class="ehrinput3" placeholder="Drug Code" name="drug_code" /></textarea></td>
          </tr>
          
          <tr>
            <td><h6>Strength</h6></td>
            <td><textarea class="ehrinput3" placeholder="Strength" name="strength"/></textarea></td>
          </tr>
          
          
          
          
          <tr>
            <td><h6>Dose</h6></td>
            <td><textarea class="ehrinput3" placeholder="Dose" name="dose"/></textarea></td>
          </tr>
          
          
          <tr>
            <td><h6>Route</h6></td>
            <td><textarea class="ehrinput3" placeholder="Route" name="route"/></textarea></td>
          </tr>
          
          
          <tr>
            <td><h6>Frequency</h6></td>
            <td><textarea class="ehrinput3" placeholder="Frequency" name="frequency" /></textarea></td>
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
