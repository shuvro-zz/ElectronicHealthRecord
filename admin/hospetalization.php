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
                
                
		<span class="patient-inspan">Hospitalization History</span>
                
      
         <form action="hospitalization_script.php" method="post" >
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <tr>
            <td><h6>Hospital ID</h6></td>
            <td><input type="text" class="ehrinput2" placeholder="Hospital ID" name="hos_id" /></td>
          </tr>
          
           <tr>
            <td><h6>Hospital Name</h6></td>
            <td><input type="text" class="ehrinput2" placeholder="Hospital Name" name="hos_name" /></td>
          </tr>
           <tr>
            <td><h6>Hospital Address</h6></td>
            <td><textarea class="ehrinput2" placeholder="Hospital Address" name="hos_add" /></textarea></td>
          </tr>
          <tr>
            <td><h6>Patient ID</h6></td>
            <td><textarea class="ehrinput2" placeholder="Patient ID" name="patient_id" /></textarea></td>
          </tr>
           <tr>
            <td><h6>Insure</h6></td>
            <td><textarea class="ehrinput2" placeholder="Insure" name="insure" /></textarea></td>
          </tr>
          
          
           <tr>
            <td><h6>Diagnosis</h6></td>
            <td><input type="text" class="ehrinput2" placeholder="Diagnosis" name="diagnosis" /></td>
          </tr>
           
           
           <tr>
            <td><h6>Discharg Summery</h6></td>
            <td><input type="text" class="ehrinput2" placeholder="Discharge Summery" name="discharge_summery"/></td>
          </tr> 
          <tr>
            <td><h6>Date Of Hospitalization</h6></td>
            <td><input type="date" class="ehrinput2" placeholder="Date Of Hospitalization" name="hospitalization_date"/></td>
          </tr>

          <tr>
            <td><h6>Date of Release </h6></td>
            <td><input type="date" class="ehrinput2" placeholder="Date of Release" name="release_date"/></td>
          </tr>
          <tr>
            <td><h6>Billing Amount</h6></td>
            <td><input type="text" class="ehrinput2" placeholder="Billing Amount" name="billing_amount" /></td>
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
