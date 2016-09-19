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
                
                
		<span class="patient-inspan">Lab Images</span>
                
      
         <form action="lab_images_script.php" method="post" enctype="multipart/form-data" >
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
         <tr>
            <td><h6>Patient ID</h6></td>
            <td><input type="text" class="ehrinput2" placeholder="Patient ID" name="patient_id" /></td>
          </tr>
  
           <tr>
            <td><h6>File Name</h6></td>
            <td><input type="file" class="ehrinput2" placeholder="File Name" name="picture" /></td>
          </tr>
           <tr>
            <td><h6>Report Test</h6></td>
            <td><input type="text" class="ehrinput2" placeholder="Report Test" name="report_text" /></td>
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
