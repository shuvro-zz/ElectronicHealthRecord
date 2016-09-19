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
                
                
		<span class="patient-inspan">Care Provider</span>
                
      
         <form action="care-provider-script.php" method="post" >
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <tr>
            <td><h6>Care Provider Registration Number</h6></td>
            <td><input type="text" class="ehrinput2" placeholder="Care Provider Registration Number" name="reg_no" /></td>
          </tr>
          
           <tr>
            <td><h6>Care Provider Name</h6></td>
            <td><span class="ehrinputname"><input type="text" class="ehrinput" placeholder="First Name" name="care_provider_fname" /></span>
        		<span class="ehrinputname2"><input type="text" class="ehrinput" placeholder="Last Name"  name="care_provider_lname" /></span></td>
          </tr>
          
           <tr>
            <td><h6>Care Provider Address Type</h6></td>
            <td><input type="text" class="ehrinput2" placeholder="Care Provider Address Type" name="care_provider_address_type" /></td>
          </tr>
           <tr>
            <td><h6>Care Provider Address Line 1</h6></td>
            <td><textarea class="ehrinput3" placeholder="Care Provider Address Line 1" name="care_provider_address_line_1" /></textarea></td>
          </tr>
           <tr>
            <td><h6>Care Provider Address Line 2</h6></td>
            <td><textarea class="ehrinput3" placeholder="Care Provider Address Line 2" name="care_provider_address_line_2" /></textarea></td>
          </tr>
           <tr>
            <td><h6>Care Provider City/Town/ Village/ Police Station</h6></td>
            <td><input type="text" class="ehrinput2" placeholder="Contact Person City/Town/Village/ Police" name="care_provider_city"/></td>
          </tr>
           <tr>
            <td><h6>Care Provider District</h6></td>
            <td><select class="ehrinput4" name="care_provider_district">
            		<option>Bankura</option>
                    <option>Bardhaman</option>
                    <option>Birbhum</option>
                    <option>East Midnapore (Purba Medinipur)</option>
                    <option>Hooghly</option>
                    <option>Purulia</option>
                    <option>West Midnapore (Paschim Medinipur)</option>
                    <option>Cooch Behar</option>
                    <option>Darjeeling</option>
                    <option>Alipurduar</option>
                    <option>Jalpaiguri</option>
                    <option>Malda</option>
                    <option>North Dinajpur (Uttar Dinajpur)</option>
                    <option>South Dinajpur (Dakshin Dinajpur)</option>
                    <option>Howrah</option>
                    <option>Kolkata</option>
                    <option>Murshidabad</option>
                    <option>Nadia</option>
                    <option>North 24 Parganas (Uttar 24 Parganas)</option>
                    <option>South 24 Parganas (Dakshin 24 Parganas)</option>
                    
            </select></td>
          </tr>
           <tr>
            <td><h6>Care Provider State</h6></td>
            <td><select class="ehrinput4" name="care_provider_state">
            		<option>West Bengal</option>
                 </select></td>
          </tr>
           <tr>
            <td><h6>Care Provider Pin Code</h6></td>
            <td><input type="text" class="ehrinput2" placeholder="Care Provider Pin Code" name="care_provider_pin_code" /></td>
          </tr>
           <tr>
            <td><h6>Care Provider Country Code</h6></td>
            <td><input type="text" class="ehrinput2" placeholder="Care Provider Country Code" name="care_provider_country_code" /></td>
          </tr>
           <tr>
            <td><h6>Care Provider Phone Type</h6></td>
            <td><select class="ehrinput4"  name="care_provider_phone_type">
            		<option>Mobile</option>
                    <option>Landline</option>
                    </select></td>
            
          </tr>
           <tr>
            <td><h6>Care Provider Phone Number</h6></td>
            <td><input type="text" class="ehrinput2" placeholder="Care Provider Phone Number" name="care_provider_phone_number"/></td>
          </tr> 
          <tr>
            <td><h6>Care Provider Email ID</h6></td>
            <td><input type="text" class="ehrinput2" placeholder="Care Provider Email ID" name="care_provider_email_id"/></td>
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
