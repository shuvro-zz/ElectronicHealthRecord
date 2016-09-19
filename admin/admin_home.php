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
                
                
        <span class="patient-inspan">Admin Area</span>
                
        
       
       <center> 
                <a href="care-provider.php">Care Provider</a></br></br>
                <a href="diat.php">Diat</a></br></br>
                <a href="emergency-contact-person.php">Emergency Contact Person</a></br></br>
                <a href="encounter.php">Encounter</a></br></br>
                <a href="hospetalization.php">Hospitalization History</a></br></br>
                <a href="lab-test-findings.php">Lab Test Findings</a></br></br>
                <a href="medication.php">Medication</a></br></br>
                <a href="medication_history.php">Medication History</a></br></br>
                <a href="prescription.php">Prescription</a></br></br>
                <a href="surgery.php">Surgery</a></br></br>
                <a href="treatment.php">Treatment</a></br></br>
          






       </center>
        
        
        
        
</div>
<?php include ('include/footer.php');?>

</body>
</html>
