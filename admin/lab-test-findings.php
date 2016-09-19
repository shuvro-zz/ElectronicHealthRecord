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
                
                
		<span class="patient-inspan">Lab Test Findings</span>
                
       
         <form action="lab_test_findings_scripts.php" method="post" enctype="multipart/form-data" >
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <tr>
            <td><h6>Patient Id</h6></td>
            <td><input type="text" class="ehrinput2" placeholder="Patient Id" name= "patient_id" /></td>
          </tr>
          <tr>
            <td><h6>Report Name</h6></td>
            <td><input type="text" class="ehrinput2" placeholder="Report Name" name= "report_name" /></td>
          </tr>

           <tr>
            <td><h6>Lab Test</h6></td>
            <td><input type="text" class="ehrinput2" placeholder="Lab Test" name= "test" /></td>
          </tr>
           <tr>
            <td><h6>Lab Test Id</h6></td>
            <td><input type="text" class="ehrinput2" placeholder="Lab Test Id" name= "lab_test_id" /></td>
          </tr>
           
           <tr>
            <td><h6>Lab Address</h6></td>
            <td><input type="text" class="ehrinput2" placeholder="Lab Address" name= "lab_address" /></td>
          </tr>
          <tr>
            <td><h6>Test Result</h6></td>
            <td><input type="text" class="ehrinput2" placeholder="Test Result" name= "test_result" /></td>
          </tr>
          <tr>
            <td><h6>Lab Report</h6></td>
            <td><input type="text" class="ehrinput2" placeholder="Lab Finding Report" name= "lab_report" /></td>
          </tr>

          <tr>
            <td><h6>Lab Finding Image</h6></td>
            <td><input type="file" class="ehrinput2" placeholder="Lab Finding Image" name= "lab_find_image" /></td>
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
