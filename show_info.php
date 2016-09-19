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
<?php
//session_start();	
include "./connect_db.inc";
$connection = db_connect();

	if ( ! $connection ) 
        {
		print( "cannot connect to database" );
		exit;
	}
	
	$query="select * from patient_info p, clinical_report c where p.uhid=c.patient_id and uhid=2";
	//echo $query;						
								
				    		$result=mysql_query($query,$connection);
							
							$i=0;
                				
								
								$patient_name=mysql_result($result,$i,"patient_name");
								
								$patient_address_line_1=mysql_result($result,$i,"patient_address_line_1");
								
								$patient_address_line_2=mysql_result($result,$i,"patient_address_line_2");
								
								$patient_image=mysql_result($result,$i,"patient_image");
								
								$patient_pin_code=mysql_result($result,$i,"patient_pin_code"); 
								             
								$patient_phone_number=mysql_result($result,$i,"patient_phone_number");
							
								$patient_email_id=mysql_result($result,$i,"patient_email_id");
								
	                            $patient_date_of_birth = mysql_result($result,$i,"patient_date_of_birth");
								
                                $patient_age = mysql_result($result,$i,"patient_age");
								
								$patient_gender = mysql_result($result,$i,"patient_gender");
								
								$patient_occupation = mysql_result($result,$i,"patient_occupation");
								
                                $patient_height = mysql_result($result,$i,"patient_height");
								
                                $patient_chest = mysql_result($result,$i,"patient_chest");
								
                                $patient_waist = mysql_result($result,$i,"patient_waist");
								
                                $patient_blood_group = mysql_result($result,$i,"patient_blood_group");
								
								$organ_donor_status = mysql_result($result,$i,"organ_donor_status");
								
								$insurance_status = mysql_result($result,$i,"insurance_status");
								
                                $insurance_id = mysql_result($result,$i,"insurance_id");
                                
							    $insurance_company = mysql_result($result,$i,"insurance_company");
								
                                $insurance_amount = mysql_result($result,$i,"insurance_amount");

                               
	                          $blood_presure = mysql_result($result,$i,"blood_presure");
							  //echo" $blood_presure";
							  $pulse_rate = mysql_result($result,$i,"pulse_rate");
							  //echo"$pulse_rate";
$temp = mysql_result($result,$i,"tempareture");
//echo " $temp";
 $weight = mysql_result($result,$i,"weight");
$blood_sugar=mysql_result($result,$i,"blood_sugar") ;
$hsbc_score = mysql_result($result,$i,"hsbc_score");
$imm_name = mysql_result($result,$i,"immunization_name");


							 
							$query = "select test_date from patient_info p, clinical_report c where p.uhid=c.patient_id and uhid=2 and blood_presure='$blood_presure' ORDER BY test_date ASC ";
							  
							  $result=mysql_query($query,$connection);
							  $b_p_date=mysql_result($result,$i,"test_date");
							 // echo"$b_p_date";

	 echo date('d-m-y h:m:s', strtotime($b_p_date) );
	
	
?>
<?php include ('include/header.php');?>



<div class="patient-infogap"></div>
<div class="patient-infobg">
		<span class="patient-inspan">Patient Information</span>
        <div class="patient-infoimg">
         <?php  
        echo "<img src='upload/$patient_image' height='100%'width='100%'/>";
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
            <td><p><?php echo" $patient_date_of_birth"; ?></p></td>
          </tr>
          <tr>
             <td><h6>Age</h6></td>
            <td><p><?php echo" $patient_age"; ?></p></td>
          </tr>
          <tr>
              <td><h6>Gender</h6></td>
            <td><p><?php echo" $patient_gender "; ?></p></td>
          </tr>
          <tr>
              <td><h6>Occupation</h6></td>
            <td><p><?php echo" $patient_occupation"; ?></p></td>
          </tr>
          <tr>
              <td><h6>Organ Donor</h6></td>
            <td><p><?php echo" $organ_donor_status"; ?></p></td>
          </tr>
          <tr>
              <td><h6>Height</h6></td>
            <td><p><?php echo" $patient_height"; ?></p></td>
          </tr>
          <tr>
              <td><h6>Chest</h6></td>
            <td><p><?php echo" $patient_waist"; ?></p></td>
          </tr>
          <tr>
              <td><h6>Waist</h6></td>
            <td><p><?php echo" $patient_chest"; ?></p></td>
          </tr>
          <tr>
             <td><h6>Blood Group</h6></td>
            <td><p><?php echo" $patient_blood_group "; ?></p></td>
          </tr>
        </table>

        
        
</div>

<div class="patient-infogap"></div>

<div class="patient-infobg">
		<span class="patient-inspan">Insurance</span>
        <table border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><h6>Insurance Status</h6></td>
            <td><p>:<?php echo" $insurance_status "; ?></p></td>
          </tr>
          <tr>
             <td><h6>Insurance ID</h6></td>
            <td><p>:<?php echo" $insurance_id "; ?></p></td>
          </tr>
          <tr>
              <td><h6>Insurance Company</h6></td>
            <td><p>:<?php echo" $insurance_company ";?></p></td>
          </tr>
          <tr>
              <td><h6>Insurance Amount</h6></td>
            <td><p>:<?php echo" $insurance_amount ";?></p></td>
          </tr>
          
        </table>

        
        
</div>
<div class="patient-infogap"></div>

<div class="patient-infobg">
		<span class="patient-inspan">Allergies</span>
        <table border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><h6><strong>Allergies Name</strong></h6></td>
            <td><p><strong>Allergies Type</strong></p></td>
          </tr>
          <tr>
             <td><h6>Swelling of the tongue, affecting the ability to talk or breathe</h6></td>
            <td><p>:Food</p></td>
          </tr>
          <tr>
              <td><h6>Vomiting and/or stomach cramps</h6></td>
            <td><p>:  Food</p></td>
          </tr>
          <tr>
              <td><h6>Red, itchy or teary eyes</h6></td>
            <td><p>:  Dust</p></td>
          </tr>
          <tr>
              <td><h6>Penicillin and related antibiotics</h6></td>
            <td><p>:  Drug</p></td>
          </tr>
          <tr>
              <td><h6>Aspirin, ibuprofen and other nonsteroidal anti-inflammatory drugs (NSAIDs)</h6></td>
            <td><p>:  Drug</p></td>
          </tr>
          
        </table>
		
        
        
</div>


<div class="patient-infogap"></div>

<div class="patient-infobg">
		<span class="patient-inspan">Physical Exam Vitals</span>
        
        <span class="patient-hisspan">Blood Pressure History</span>
        
        <table border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><h6><?php echo" $blood_presure "; ?></h6></td>
            <td><p>Date: <?php echo" $b_p_date "; ?></p></td>
          </tr>
          <tr>
            <td><h6>120/80</h6></td>
            <td><p>Date: 12/09/2015</p></td>
          </tr>
          <tr>
            <td><h6>120/80</h6></td>
            <td><p>Date: 12/09/2015</p></td>
          </tr>
          
          
        </table>
        
        <div class="patient-infogap"></div>
        <span class="patient-hisspan">Pulse Rate</span>
        
        <table border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><h6>85-145</h6></td>
            <td><p>Date: 12/09/2015</p></td>
          </tr>
          <tr>
            <td><h6>83-140</h6></td>
            <td><p>Date: 13/09/2015</p></td>
          </tr>
          <tr>
            <td><h6>80-136</h6></td>
            <td><p>Date: 14/09/2015</p></td>
          </tr>
          
        </table>
        
        
        <div class="patient-infogap"></div>
        <span class="patient-hisspan">Temperature</span>
        
        <table border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><h6>23&deg;C</h6></td>
            <td><p>Date: 12/09/2015</p></td>
          </tr>
          <tr>
            <td><h6>22&deg;C</h6></td>
            <td><p>Date: 13/09/2015</p></td>
          </tr>
          <tr>
            <td><h6>23&deg;C</h6></td>
            <td><p>Date: 14/09/2015</p></td>
          </tr>
          
        </table>
        
        
        <div class="patient-infogap"></div>
        <span class="patient-hisspan">Immunization</span>
        <table border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><h6><strong>Immunization Name</strong></h6></td>
            <td><h6><strong>Immunization Date</strong></h6></td>
          </tr>
          <tr>
            <td><h6>Haemophilus influenzae type b4 (Hib)</h6></td>
            <td><p>Date: 13/09/2015</p></td>
          </tr>
          <tr>
            <td><h6>Pneumococcal conjugate5 (PCV13)</h6></td>
            <td><p>Date: 14/09/2015</p></td>
          </tr>
          <tr>
            <td><h6>Rotavirus2 (RV)RV1 (2-dose series); RV5 (3-dose series)</h6></td>
            <td><p>Date: 19/02/2014</p></td>
          </tr>
          
        </table>
        
   		
        
          <div class="patient-infogap"></div>
        <span class="patient-hisspan">Weight History</span>
        
        <table border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><h6>70 KG</h6></td>
            <td><p>:  Date: 12/09/2015</p></td>
          </tr>
          <tr>
            <td><h6>75 KG</h6></td>
            <td><p>:  Date: 02/07/2014</p></td>
          </tr>
          <tr>
            <td><h6>81 KG</h6></td>
            <td><p>:  Date: 12/07/2013</p></td>
          </tr>
          <tr>
            <td><h6>98 KG</h6></td>
            <td><p>:  Date: 24/11/2012</p></td>
          </tr>
          
        </table>
        
        
        
          <div class="patient-infogap"></div>
        <span class="patient-hisspan">Blood Sugar</span>
        
        <table border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><h6>Date: 12/09/2015</h6></td>
            <td><h6>Fasting: 80</h6></td>
            <td><p>  PP : 160</p></td>
          </tr>
           <tr>
            <td><h6>Date: 11/09/2015</h6></td>
            <td><h6>Fasting: 70</h6></td>
            <td><p>  PP : 165</p></td>
          </tr>
           <tr>
            <td><h6>Date: 10/09/2015</h6></td>
            <td><h6>Fasting: 75</h6></td>
            <td><p>  PP : 160</p></td>
          </tr>
           <tr>
            <td><h6>Date: 09/09/2015</h6></td>
            <td><h6>Fasting: 88</h6></td>
            <td><p>  PP : 170</p></td>
          </tr>
           <tr>
            <td><h6>Date: 08/09/2015</h6></td>
            <td><h6>Fasting: 70</h6></td>
            <td><p>  PP : 160</p></td>
          </tr>
          
        </table>
        
        
        
        
          <div class="patient-infogap"></div>
        <span class="patient-hisspan">HSBC Score</span>
        
        <table border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><h6>6.9</h6></td>
            <td><p>: Date: 12/09/2015</p></td>
          </tr>
          <tr>
             <td><h6>7.0</h6></td>
            <td><p>: Date: 11/09/2015</p></td>
          </tr>
          <tr>
              <td><h6>6.9	</h6></td>
            <td><p>:  Date: 10/09/2015</p></td>
          </tr>
          <tr>
              
        </table>
        
</div>


<div class="patient-infogap"></div>

<div class="patient-infobg">
		<span class="patient-inspan">Medication History</span>
        
        <table border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><h6>Diagnosis</h6></td>
            <td><p>: Primary and secondary dengue virus infections </p></td>
          </tr>
          <tr>
             <td><h6>Vital</h6></td>
            <td><p>: Sed ut perspiciatis unde omnis iste natus error sit</p></td>
          </tr>
          <tr>
              <td><h6>Health Care Person</h6></td>
            <td><p>:  Dr. D Mallick</p></td>
          </tr>
          <tr>
              <td><h6>Contact No</h6></td>
            <td><p>: 1234567890</p></td>
          </tr>
          
          
           <tr>
              <td><h6>Date</h6></td>
            <td><p>: 29/01/2015</p></td>
          </tr>
          
        </table>
        
        <div class="patient-infogap"></div>

		<div class="mprescribed">
        <h5>Medicine Prescribed :</h5>
 <table border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><h6>Medicine Name</h6></td>
            <td><p>: Sunvit Gold</p></td>
          </tr>
          <tr>
             <td><h6>Strength</h6></td>
            <td><p>: 200mg</p></td>
          </tr>
          <tr>
              <td><h6>Dose </h6></td>
            <td><p>: 2 Tabs</p></td>
          </tr>
          <tr>
              <td><h6>Frequency </h6></td>
            <td><p>: Twice a day after meal with hot water</p></td>
          </tr>
        </table>
     
	
	</div>


<div class="patient-infogap"></div>

		<div class="mprescribed">
        <h5>Medicine Prescribed :</h5>
 <table border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><h6>Medicine Name</h6></td>
            <td><p>: dexorange syrup</p></td>
          </tr>
          <tr>
             <td><h6>Strength</h6></td>
            <td><p>: 200mg</p></td>
          </tr>
          <tr>
              <td><h6>Dose </h6></td>
            <td><p>: one tablespoonful</p></td>
          </tr>
          <tr>
              <td><h6>Frequency </h6></td>
            <td><p>:  twice a day after meals</p></td>
          </tr>
        </table>
     
	
	</div>



<div class="patient-infogap"></div>

		<div class="mprescribed">
        <h5>Blood Test Recommendations </h5>
		<p>ECG</p> 
        <p>HSBC</p> 
        <p>USG</p>     
	</div>


<div class="patient-infogap"></div>

		<div class="mprescribed">
        <h5>Life Style Change :</h5>
		<p>Walk for 30 minutes daily </p> 
        <p>No Cold drinks</p> 
        <p>No cheese burst pizza>     
	</div>
    <a href="#" class="obsea">View Paper Prescription</a>   
</div>


<div class="patient-infogap"></div>
<div class="patient-infobg">
		<span class="patient-inspan">Lab Results</span>
        
        <table border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><h6>Test</h6></td>
            <td><p>: Random blood glucose level </p></td>
          </tr>
          <tr>
             <td><h6>Lab ID</h6></td>
            <td><p>: TBD14778-85852</p></td>
          </tr>
          <tr>
              <td><h6>Lab address</h6></td>
            <td><p>: 47/A Parkstreet, Kolkata - 17  </p></td>
          </tr>
          <tr>
              <td><h6>Test Results</h6></td>
            <td><p>: type 2 diabetes</p></td>
          </tr>
        </table>
        <br>
        <hr class="obserhr">
        <table border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><h6><strong>Observation</strong></h6></td>
            <td><p><strong>Test</strong></p></td>
          </tr>
          <tr>
             <td><h6>PP</h6></td>
            <td><p>160(110 - 140)</p></td>
          </tr>
          
        </table>
        
        <a href="#" class="obsea">View Paper Report</a>
        
        <br><br><br>       
        <span class="patient-hisspan">Radiology report</span>
        
         <table border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><h6>Test</h6></td>
            <td><p>: MRI Right Shoulder </p></td>
          </tr>
          <tr>
             <td><h6>Lab ID</h6></td>
            <td><p>: TBD14778-85852</p></td>
          </tr>
          <tr>
              <td><h6>Lab address</h6></td>
            <td><p>: 47/A Parkstreet, Kolkata - 17  </p></td>
          </tr>
          <tr>
              <td><h6>Test Results</h6></td>
            <td><p>: Normal supraspinatus tendon. Normal infraspinatus tendon. Normal subscapularis tendon. Normal teres 
minor tendon. </p></td>
          </tr>
        </table>
        
        <br>
        <img src="images/xray.jpg" />
        <br><br>
        
        <h5>Report</h5>
        
        <p>Normal supraspinatus muscle. Normal infraspinatus muscle. Normal subscapularis muscle. Normal teres minor muscle.
Normal glenohumeral articulation. Normal humeral head and visualized proximal humerus. Normal biceps labral 
complex. Normal intracapsular long biceps tendon. Normal labrum. Normal capsuloligamentous complex. Normal 
rotator interval.<br>
Normal acromioclavicular articulation. There is an unfused acromial apophysis with intense cancellous marrow 
edema (sagittal T2 fat sat series 7, image 10), with mild surrounding soft tissue edema (coronal STIR series 5, image 
10). The findings are consistent with apophysitis of the unfused acromial apophysis. There is a Type I morphology (flat 
undersurface), with a posterior downsloping orientation. There is no subacromial-subdeltoid bursal fluid.<br>
Normal visualized coracohumeral and coracoacromial ligaments. Normal quadrilateral space. Normal axillary space.
Normal deltoid muscle. Normal trapezius muscle.
        </p>
        
        <br><br><br>       
        <span class="patient-hisspan">Radiology report</span>
        
         <table border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><h6>Test</h6></td>
            <td><p>: RUQ pain USG </p></td>
          </tr>
          <tr>
             <td><h6>Lab ID</h6></td>
            <td><p>: TBD14778-85852</p></td>
          </tr>
          <tr>
              <td><h6>Lab address</h6></td>
            <td><p>: 47/A Parkstreet, Kolkata - 17  </p></td>
          </tr>
          <tr>
              <td><h6>Test Results</h6></td>
            <td><p>: The visualized liver is of uniform echo texture without evidence of mass or defect. There is no intra
or extrahepatic biliary ductal dilatation. The common bile duct measures up to 4 mm. The gallbladder
is physiologically distended with multiple calculi. The gallbladder wall is thickened measuring 6 mm
however there is no pericholecystic fluid. </p></td>
          </tr>
        </table>
        
        <br>
        <img src="images/usg.jpg" />
        <br><br>
        
        <h5>Report</h5>
        
        <p>Multiple gallstones with a thickened gallbladder wall and reported positive Murphy's sign. These
findings are concerning for acute or chronic cholecystitis. Please correlate clinically
        </p>
        <br><br> 
        <span class="patient-hisspan">Surgery performance</span>
        
         <table border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><h6>Surgery Name</h6></td>
            <td><p>: Chalazion Granuloma </p></td>
          </tr>
          <tr>
             <td><h6>Hospital Name ID</h6></td>
            <td><p>: Disha Eye Hospital</p></td>
          </tr>
          <tr>
              <td><h6>Operated on</h6></td>
            <td><p>: 05/05/2009 </p></td>
          </tr>
          <tr>
              <td><h6>Doctor Name</h6></td>
            <td><p>: Dr. S.B. Bose</p></td>
          </tr>
          
          <tr>
              <td><h6>Surgical Report</h6></td>
            <td><p>There are tiny glands just under the inner surface of the eyelid. These make an oily fluid to help lubricate the eye. If the gland gets blocked then the fluid cannot escape and it may expand into a fluid-filled swelling (cyst). A chalazion is not normally infected. Over time, inflammation causes a nodule (or granuloma) to form. This is a firm, more solid lump that remains for a long time (is chronic). This lump is the chalazion. </p></td>
          </tr>
        </table>
        
        <br><br>
        <div class="surreport">
        Chalazion with visible single granuloma in an upper or lower eyelid.
        </div>
</div>




<div class="patient-infogap"></div>
<div class="patient-infobg">
		<span class="patient-inspan">Diat Chart</span>
        <p> pint sized tomatoes only add 30 calories to your body. You can have it as a snack or use it in salads. Pop them into your mouth sit back and relax.<br>
        You get two same slices of sandwich thins with less calorie count than a slice of bread that has 100 calories. You can use the versatile whole grain thins to make turkey and chicken sandwich. You can also use peanut butter and low-fat cream cheese and use it as a bagel substitute.
        </p>
        
</div>      

<div class="patient-infogap"></div>
<div class="patient-infobg">
	<span class="patient-inspan">Current Medications</span>

<div class="patient-infogap"></div>

		<div class="mprescribed">
        <h5>Medicine Prescribed :</h5>
 <table border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><h6>Medicine Name</h6></td>
            <td><p>: Sunvit Gold</p></td>
          </tr>
          <tr>
             <td><h6>Strength</h6></td>
            <td><p>: 350mg</p></td>
          </tr>
          <tr>
              <td><h6>Dose </h6></td>
            <td><p>: Twice a day</p></td>
          </tr>
          <tr>
              <td><h6>Frequency </h6></td>
            <td><p>: 2 Tabs after meal</p></td>
          </tr>
        </table>
     
	
	</div>


<div class="patient-infogap"></div>

	<div class="mprescribed">
        <h5>Medicine Prescribed :</h5>
 <table border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><h6>Medicine Name</h6></td>
            <td><p>: Ranitidine Hydrochloride</p></td>
          </tr>
          <tr>
             <td><h6>Strength</h6></td>
            <td><p>: 500mg</p></td>
          </tr>
          <tr>
              <td><h6>Dose </h6></td>
            <td><p>: Twice a day</p></td>
          </tr>
          <tr>
              <td><h6>Frequency </h6></td>
            <td><p>: before take meal</p></td>
          </tr>
        </table>
        </div>
        
        
        
        <div class="patient-infogap"></div>

	<div class="mprescribed">
        <h5>Medicine Prescribed :</h5>
 <table border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><h6>Medicine Name</h6></td>
            <td><p>: Garlic Pearls</p></td>
          </tr>
          <tr>
             <td><h6>Strength</h6></td>
            <td><p>: 100mg</p></td>
          </tr>
          <tr>
              <td><h6>Dose </h6></td>
            <td><p>: Twice a day</p></td>
          </tr>
          <tr>
              <td><h6>Frequency </h6></td>
            <td><p>: after taking a meal</p></td>
          </tr>
        </table>
        </div>
        
        
        
        <div class="patient-infogap"></div>

	<div class="mprescribed">
        <h5>Medicine Prescribed :</h5>
 <table border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><h6>Medicine Name</h6></td>
            <td><p>: Calcimax-K2</p></td>
          </tr>
          <tr>
             <td><h6>Strength</h6></td>
            <td><p>: 200mg</p></td>
          </tr>
          <tr>
              <td><h6>Dose </h6></td>
            <td><p>: once a day</p></td>
          </tr>
          <tr>
              <td><h6>Frequency </h6></td>
            <td><p>: Before brakefast</p></td>
          </tr>
        </table>
        </div>

</div>


<div class="patient-infobg">
	<span class="patient-inspan">Tools</span>
    
    <div class="toolsicon">
    	<center><img src="images/toolsicon-1.png" /></center>
    	<a href="#">Blood Sugar</a>
    </div>
    <div class="toolsicon">
    	<center><img src="images/toolsicon-2.png" /></center>
    	<a href="#">BP</a>
    </div>
    <div class="toolsicon">
    	<center><img src="images/toolsicon-3.png" /></center>
    	<a href="#">BMI</a>
    </div>
    <div class="toolsicon">
    	<center><img src="images/toolsicon-4.png" /></center>
    	<a href="#">Weight</a>
    </div>
    
</div>
<?php include ('include/footer.php');?>
</body>
</html>
