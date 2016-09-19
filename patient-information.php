<?php
session_start();	
include "./connect_db.inc";
$connection = db_connect();

	if ( ! $connection ) 
        {
		print( "cannot connect to database" );
		exit;
	}
	$email=$_SESSION['uid'];
	
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
<script type="text/javascript">
function ageCount() {
    var date1 = new Date();
    var dob = document.getElementById("dob").value;
    var date2 = new Date(dob);
    var pattern = /^\d{1,2}\/\d{1,2}\/\d{4}$/;
    //Regex to validate date format (dd/mm/yyyy)       
    if (pattern.test(dob)) {
        var y1 = date1.getFullYear();
        //getting current year            
        var y2 = date2.getFullYear();
        //getting dob year            
        var age = y1 - y2;
        //calculating age                       
        document.getElementById("ageId").value = age;
        doucment.getElementById("ageId").focus ();
        return true;
    } else {
        alert("Invalid date format. Please Input in (dd/mm/yyyy) format!");
        return false;
    }

}
</script>

</head>

<body>
<?php include ('include/header.php');?>

<div class="patient-infogap"></div>
<div class="ehrinputnamebg">
<!-------------<span class="ehrinputname"><input type="text" class="ehrinput" placeholder="First Name" /></span>
        		<span class="ehrinputname2"><input type="text" class="ehrinput" placeholder="Last Name" /></span>------------>
                
                
		<span class="patient-inspan">Patient Information</span>
                
      
         <form action="patient_information_script.php" method="post" enctype="multipart/form-data" >
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
        
          <tr>
            <td><h6>Alternate UHID</h6></td>
            <td><input type="text" class="ehrinput2" placeholder="Alternate UHID" name="alternate_uhid" /></td>
          </tr>
          
          
          <tr>
            <td><h6>Patient Date of Birth</h6></td>
            <td><input type="text" class="ehrinput4" name="patient_date_of_birth" id="dob" onblur="ageCount()" /></td>
          </tr>
          
          
          <tr>
            <td><h6>Patient Age</h6></td>
            <td><input type="text" class="ehrinput2" placeholder="Patient Age" name="patient_age" id="ageId"/></td>
          </tr>
          
          <tr>
            <td><h6>Patient Gender</h6></td>
            <td><select class="ehrinput4" name="patient_gender">
            		<option>M</option>
                    <option>F</option>
                    <option>U</option>
                    <option>T</option>
            </select></td>
          </tr>
          
          
          
          <tr>
            <td><h6>Patient Height </h6></td>
             <td><input type="text" class="ehrinput4" placeholder="Height" name="patient_height" /><a href="javascript:void(0);"
 NAME="My Window Name"  title=" My title here "
 onClick=window.open("converter.html","Ratting","width=550,height=170,0,status=0,");>Need to convert....click here</a></td>

          </tr>
          
          <tr>
            <td><h6>Patient Chest</h6></td>
             <td><input type="text" class="ehrinput4" placeholder="Chest" name="patient_chest" /><a href="javascript:void(0);"
 NAME="My Window Name"  title=" My title here "
 onClick=window.open("converter.html","Ratting","width=550,height=170,0,status=0,");>Need to convert....click here</a></td>
          </tr>
          
          <tr>
            <td><h6>Patient Waist</h6></td>
            <td><input type="text" class="ehrinput4" placeholder="Waist" name="patient_waist" /><a href="javascript:void(0);"
 NAME="My Window Name"  title=" My title here "
 onClick=window.open("converter.html","Ratting","width=550,height=170,0,status=0,");>Need to convert....click here</a></td>

          </tr>
          
          <tr>
            <td><h6>Patient Blood Group</h6></td>
           
              <td><select class="ehrinput4" name="patient_blood_group">
            		<option>A+</option>
                    <option>A-</option>
                    <option>B+</option>
                    <option>B-</option>
                    <option>AB+</option>
                    <option>AB-</option>
                    <option>O+</option>
                    <option>O-</option>

            </select></td>
          
          </tr>
          
           <tr>
            <td><h6>Patient Occupation</h6></td>
            <td><input type="text" class="ehrinput2" placeholder="Patient Occupation" name="patient_occupation" /></td>
          </tr>
         
          <tr>
            <td><h6>Patient Address Type</h6></td>
           
            <td><select class="ehrinput4" name="patient_address_type">
            		<option>Current Address</option>
                    <option>Permanent Address</option>
                 </select>
               </td>

          </tr>
          
          
          <tr>
            <td><h6>Patient Address Line 1</h6></td>
            <td><textarea class="ehrinput2" placeholder="Patient Address Line 1" name="patient_address_line_1"></textarea></td>
          </tr>
          
          <tr>
            <td><h6>Patient Address Line 2</h6></td>
            <td><input type="text" class="ehrinput2" placeholder="Patient Address Line 2" name="patient_address_line_2" /></td>
          </tr>
          <tr>
            <td><h6>Patient City/Town/Village/Police Station</h6></td>
            <td><input type="text" class="ehrinput2" placeholder="City/Town/Village" name="patient_city" /></td>
          </tr>
          <tr>
            <td><h6>Patient State </h6></td>
            <td><select class="ehrinput4" name="patient_state">
            		<option>West Bengal</option>
                 </select>
               </td>
          </tr>
          <tr>
            <td><h6>Patient District</h6></td>
            <td><select class="ehrinput4" name="patient_district">
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
            <td><h6>Patient Pin Code</h6></td>
                      
                      <td><input type="text" class="ehrinput2" placeholder="Patient Pin Code" name="patient_pin_code" /></td></tr>
          <tr>
            <td><h6>Patient Country Code</h6></td>
                                  <td><input type="text" class="ehrinput2" placeholder="Patient Country Code" name="patient_country_code" /></td></tr>

          </tr>
          <!--<tr>
            <td><h6>Patient Phone Type</h6></td>
             <td><select class="ehrinput4" name="patient_phone_type">
            		<option>Mobile</option>
                    <option>Landline</option>
                    </select>
             </td>
            
          </tr>
          <tr>
            <td><h6>Patient Phone Number</h6></td>
            <td><input type="text" class="ehrinput2" placeholder="Patient Phone Number" name="patient_phone_number" /></td>
          </tr>
          <tr>
            <td><h6>Patient Email ID</h6></td>
            <td><input type="text" class="ehrinput2" placeholder="Patient Email ID" name="patient_email_id" /></td>
          </tr>
          -->
          <tr>
            <td><h6>Insurance Status</h6></td>
            <td><input type="text" class="ehrinput2" placeholder="Insurance Status" name="insurance_status"/></td>
          </tr>
          
          <tr>
            <td><h6>Insurance ID</h6></td>
            <td><input type="text" class="ehrinput2" placeholder="Insurance ID" name="insurance_id" /></td>
          </tr>
          
          <tr>
            <td><h6>Insurance Company</h6></td>
            <td><input type="text" class="ehrinput2" placeholder="Insurance Company" name="insurance_company" /></td>
          </tr>
          
          <tr>
            <td><h6>Insurance Amount</h6></td>
            <td><input type="text" class="ehrinput2" placeholder="Insurance Amount" name="insurance_amount" /></td>
          </tr>
          
           <tr>
            <td><h6>Organ Donor Status</h6></td>
            <td><input type="text" class="ehrinput2" placeholder="Organ Donor Status" name="organ_donor_status" /></td>
          </tr>
          
          <tr>
            <td><h6>Patient images</h6></td>
            <td><input type="file" name="patient_image"/></td>
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
