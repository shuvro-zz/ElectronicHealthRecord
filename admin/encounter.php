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
                
                
		<span class="patient-inspan">Encounter</span>
                
        
        <form action="encounter_script.php" method="post" >
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
                    <tr>
            <td><h6>Episode Type</h6></td>
            <td><input type="text" class="ehrinput2" placeholder="Episode Type" name="episode_type" /></td>
          </tr>
          
          <tr>
            <td><h6>Episode Number</h6></td>
            <td><input type="text" class="ehrinput2" placeholder="Episode Number" name="episode_number" /></td>
          </tr>
          
          <tr>
            <td><h6>Encounter Type</h6></td>
            <td><input type="text" class="ehrinput2" placeholder="Encounter Type" name="encounter_type" /></td>
          </tr>
          
          <tr>
            <td><h6>Encounter Number</h6></td>
            <td><input type="text" class="ehrinput2" placeholder="Encounter Number" name="encounter_number" /></td>
          </tr>
          
          <tr>
            <td><h6>Encounter Date & Time</h6></td>
            <td><input type="date" class="ehrinput4" placeholder="" name="encounter_date_and_time" /></td>
          </tr>
          
          <tr>
            <td><h6>Reason for Visit</h6></td>
            <td><input type="text" class="ehrinput2" placeholder="Reason for Visit" name="reason_for_visit" /></td>
          </tr>
          
          <tr>
            <td><h6>Present History</h6></td>
            <td><textarea class="ehrinput3" placeholder="Present History" name="" /></textarea></td>
          </tr>
          <tr>
            <td><h6>Past History</h6></td>
            <td><textarea class="ehrinput3" placeholder="Past History" name="" /></textarea></td>
          </tr>
          
          <tr>
            <td><h6>Personal History</h6></td>
            <td><textarea class="ehrinput3" placeholder="Personal History" name="" /></textarea></td>
          </tr>
          
          <tr>
            <td><h6>Family History</h6></td>
            <td><input type="text" class="ehrinput2" placeholder="Family History" name="" /></td>
          </tr>
          <tr>
            <td><h6>Menstrual & Obstetric History</h6></td>
            <td><textarea class="ehrinput3" placeholder="Menstrual & Obstetric History" name="" /></textarea>
            </td>
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
