<?php session_start();?>
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

//$ptid = 2;

	
include "./connect_db.inc";
$connection = db_connect();
$ptid=$_SESSION['uhid'];

	if ( ! $connection ) 
        {
		print( "cannot connect to database" );
		exit;
	}
	
	$query="select * from patient_info where uhid=$ptid";
	//echo $query;						
								
				    		$result=mysql_query($query,$connection);
							
							$i=0;
                				
								
								//$patient_name=mysql_result($result,$i,"patient_name");
								
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

                               
	                          /*$blood_presure = mysql_result($result,$i,"blood_presure");
							  echo" $blood_presure";
							  $pulse_rate = mysql_result($result,$i,"pulse_rate");
							  echo"$pulse_rate";
$temp = mysql_result($result,$i,"tempareture");
echo " $temp";
 

$hsbc_score = mysql_result($result,$i,"hsbc_score");
$imm_name = mysql_result($result,$i,"immunization_name");


							 
							 
                                 //echo "$b_p_date";
	                         //echo date('d-m-y h:m:s', strtotime($b_p_date) );
	*/
	
?>
<?php include ('include/header.php');?>



<div class="patient-infogap"></div>
<div class="patient-infobg">
		<span class="patient-inspan">Patient Information</span>
        <div class="patient-infoimg">
         <?php  
        echo "<img src = 'upload/$patient_image' height='60%'width='60%'/>";
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
            <td><p>: <?php echo" $patient_date_of_birth"; ?></p></td>
          </tr>
          <tr>
             <td><h6>Age</h6></td>
            <td><p>: <?php echo" $patient_age"; ?></p></td>
          </tr>
          <tr>
              <td><h6>Gender</h6></td>
            <td><p>: <?php echo" $patient_gender "; ?></p></td>
          </tr>
          <tr>
              <td><h6>Occupation</h6></td>
            <td><p>: <?php echo" $patient_occupation"; ?></p></td>
          </tr>
          <tr>
              <td><h6>Organ Donor</h6></td>
            <td><p>: <?php echo" $organ_donor_status"; ?></p></td>
          </tr>
          <tr>
              <td><h6>Height</h6></td>
            <td><p>: <?php echo" $patient_height"; ?></p></td>
          </tr>
          <tr>
              <td><h6>Chest</h6></td>
            <td><p>: <?php echo" $patient_waist"; ?></p></td>
          </tr>
          <tr>
              <td><h6>Waist</h6></td>
            <td><p>: <?php echo" $patient_chest"; ?></p></td>
          </tr>
          <tr>
             <td><h6>Blood Group</h6></td>
            <td><p>: <?php echo" $patient_blood_group "; ?></p></td>
          </tr>
        </table>

        
        
</div>

<div class="patient-infogap"></div>

<div class="patient-infobg">
		<span class="patient-inspan">Insurance</span>
        <table border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><h6>Insurance Status</h6></td>
            <td><p>: <?php echo" $insurance_status "; ?></p></td>
          </tr>
          <tr>
             <td><h6>Insurance ID</h6></td>
            <td><p>: <?php echo" $insurance_id "; ?></p></td>
          </tr>
          <tr>
              <td><h6>Insurance Company</h6></td>
            <td><p>: <?php echo" $insurance_company ";?></p></td>
          </tr>
          <tr>
              <td><h6>Insurance Amount</h6></td>
            <td><p>: <?php echo" $insurance_amount ";?></p></td>
          </tr>
          
        </table>     
</div>


<div class="patient-infogap"></div>

<div class="patient-infobg">
    <span class="patient-inspan">Emergency Contact Person</span>
        <table border="0" cellspacing="0" cellpadding="0">
        
         <?php
        
        //$query1="select * from emergency_contact_person where patient_id=$ptid ";

        $query1 = " select * from patient_info p , emergency_contact_person s  where s.patient_id= p.uhid and p.uhid=$ptid ";
                            $result1 =mysql_query($query1,$connection);
                           $num1=mysql_num_rows($result1);
              $a=0;
			       while($a < $num1){
                $name = mysql_result($result1,$a,"emergency_contact_person_name");
                $address1=mysql_result($result1,$a,"emergency_contact_person_address_line_1");
                $address2=mysql_result($result1,$a,"emergency_contact_person_address_line_2");
                $address=$address1."," .$address2;

                $contact_no = mysql_result($result1,$a,"emergency_contact_person_phone_number");
                
                
    
        ?>
        

         <tr>
             <td><h6>Name</h6></td>
            <td><p>: <?php echo" $name "; ?></p></td>
          </tr>  

          <tr>
             <td><h6>Address</h6></td>
            <td><p>: <?php echo" $address "; ?></p></td>
          </tr>     
        
          <tr>
             <td><h6>Contact No</h6></td>
            <td><p>: <?php echo" $contact_no "; ?></p></td>
          </tr> 
          <?php
		  $a++;
				   }
		  ?>    
        </table>     
</div>



<div class="patient-infogap"></div>

<div class="patient-infobg">
		<span class="patient-inspan">Allergies</span>
        <table border="0" cellspacing="0" cellpadding="0">
        <tr>
        <td><h6><strong>Allergies Name</strong></h6></td>
        <td><h6><strong>Triggered By</strong></h6></td>
        <td><h6><strong>Allergies Status</strong></h6></td>
        
        </tr>
        
         <?php
		    
        $query1 = " select * from patient_info p , allergies s  where p.uhid = s.patient_id  and p.uhid=$ptid ";
                            $result1 =mysql_query($query1,$connection);
	                         $num1=mysql_num_rows($result1);
							$a=0;
                			while ( $a < $num1 )
	            				{	
	
							  $patient_id = mysql_result($result1,$a,"patient_id");
							  $alg_name=mysql_result($result1,$a,"alg_name");
                 $triggered_by = mysql_result($result1,$a,"triggered_by");
                 $allergies_status = mysql_result($result1,$a,"allergies_status");
							  
		
        ?>
        
        
          <tr>
            <td><p> <?php echo "$alg_name ";?></p></td>
            <td><p> <?php echo "$triggered_by ";?></p></td>
            <td><p> <?php echo "$allergies_status ";?></p></td>
          </tr>
         
        <?php 
		 $a++;
								}
							 
		?>
        </table>
		
        
        
</div>
<div class="patient-infogap"></div>

<div class="patient-infobg">
        <span class="patient-hisspan">Allergies</span>
        <form name="editalrg" action="manage_ehr_script.php" method="post">
         <table border="0" cellspacing="0" cellpadding="0" width="80%">
         <td><h6><strong>Allergies Name</strong></h6></td>
        <td><h6><strong>Triggered By</strong></h6></td>
        <td><h6><strong>Allergies Status</strong></h6></td>
       
        <?php
   // $blood_presure = mysql_result($result,$i,"blood_presure");
							  
							  
							


 //$weight = mysql_result($result,$i,"weight");
//$blood_sugar=mysql_result($result,$i,"blood_sugar") ;

//$imm_name = mysql_result($result,$i,"immunization_name");

        $query = " select * from patient_info p , allergies s  where p.uhid = s.patient_id  and p.uhid=$ptid ";
                            $result=mysql_query($query,$connection);
	                         $num=mysql_num_rows($result);
							$j=0;
                			while ( $j < $num )
	            				{	
								$id=mysql_result($result,$j,"id");
								$patient_id = mysql_result($result,$j,"patient_id");
								$alg_name=mysql_result($result,$j,"alg_name");
                 				$triggered_by = mysql_result($result,$j,"triggered_by");
                				$allergies_status = mysql_result($result,$j,"allergies_status");
							    $status=mysql_result($result,$j,"status");

							  $cname="c$j";
							  
    ?>
        
        
        
          <tr>
            <td width="50%"> 
            
            <?php 
			    if($status==1)
				{
					?>
            <input type="checkbox" name="<?php echo $cname; ?>" value="<?php echo $id; ?>"checked>
            <?php
				}
				else
				{
					?>
            <input type="checkbox" name="<?php echo $cname; ?>" value="<?php echo $id; ?>">
            <?php
				}
				?>
            
            
            
          <td><p> <?php echo "$alg_name ";?></p></td>
            <td><p> <?php echo "$triggered_by ";?></p></td>
            <td><p> <?php echo "$allergies_status ";?></p></td>
                        </tr>
            <?php 
            $j++; 
            }
            ?>
          
          
          
        </table>
        
        <input type="hidden" name="tabname" value="allergies">
        <input type="hidden" name="records" value="<?php echo $num; ?> ">
        
        <input type="submit" name="submit" value="submit">
        </form>

<div class="patient-infogap"></div>

<div class="patient-infobg">
		<span class="patient-inspan">Physical Exam Vitals</span>
        <span class="patient-hisspan">Blood Pressure History</span>
        <form name="editbp" action="manage_ehr_script.php" method="post">
         <table border="0" cellspacing="0" cellpadding="0" width="80%">
       
        <?php
   // $blood_presure = mysql_result($result,$i,"blood_presure");
							  
							  
							


 //$weight = mysql_result($result,$i,"weight");
//$blood_sugar=mysql_result($result,$i,"blood_sugar") ;

//$imm_name = mysql_result($result,$i,"immunization_name");

$query = "select * from patient_info p, blood_pressure c where p.uhid=c.patient_id and c.patient_id=$ptid  ORDER BY date DESC ";
                            $result=mysql_query($query,$connection);
	                         $num=mysql_num_rows($result);
							$j=0;
                			while ( $j < $num )
	            				{	
								$id=mysql_result($result,$j,"id");

	                   		 $blood_pressure=mysql_result($result,$j,"blood_pressure");

							  
							  $date=mysql_result($result,$j,"date");
							  $status=mysql_result($result,$j,"status");

							  $cname="c$j";
							  
    ?>
        
        
        
          <tr>
            <td width="50%"> 
            
            <?php 
			    if($status==1)
				{
					?>
            <input type="checkbox" name="<?php echo $cname; ?>" value="<?php echo $id; ?>"checked>
            <?php
				}
				else
				{
					?>
            <input type="checkbox" name="<?php echo $cname; ?>" value="<?php echo $id; ?>">
            <?php
				}
				?>
            
            
            
             <?php echo "$blood_pressure ";?></td>
            <td ><p>Date: <?php echo date('d-m-y', strtotime($date) ); ?></p></td>
            </tr>
            <?php 
            $j++; 
            }
            ?>
          
          
          
        </table>
        
        <input type="hidden" name="tabname" value="blood_pressure">
        <input type="hidden" name="records" value="<?php echo $num; ?> ">
        
        <input type="submit" name="submit" value="submit">
        </form>
 
 
 <div class="patient-infobg">
		
        <span class="patient-hisspan">Height History</span>
        <form name="edithg" action="manage_ehr_script.php" method="post">
         <table border="0" cellspacing="0" cellpadding="0" width="80%">
       
        <?php
   // $blood_presure = mysql_result($result,$i,"blood_presure");
							  
							  
							


 //$weight = mysql_result($result,$i,"weight");
//$blood_sugar=mysql_result($result,$i,"blood_sugar") ;

//$imm_name = mysql_result($result,$i,"immunization_name");
$query = "select * from patient_info p, height h where p.uhid=h.patient_id and p.uhid=$ptid  ORDER BY date DESC ";

                            $result=mysql_query($query,$connection);
	                         $num=mysql_num_rows($result);
							$j=0;
                			while ( $j < $num )
	            				{	
								$id=mysql_result($result,$j,"id");

	                   		 $hight=mysql_result($result,$j,"hight");

							  
							  $date=mysql_result($result,$j,"date");
							  $status=mysql_result($result,$j,"status");

							  $cname="c$j";
							  
    ?>
        
        
        
          <tr>
            <td width="50%"> 
            
            <?php 
			    if($status==1)
				{
					?>
            <input type="checkbox" name="<?php echo $cname; ?>" value="<?php echo $id; ?>"checked>
            <?php
				}
				else
				{
					?>
            <input type="checkbox" name="<?php echo $cname; ?>" value="<?php echo $id; ?>">
            <?php
				}
				?>
            
            
            
             <?php echo "$hight ";?></td>
            <td ><p>Date: <?php echo date('d-m-y', strtotime($date) ); ?></p></td>
            </tr>
            <?php 
            $j++; 
            }
            ?>
          
          
          
        </table>
        
        <input type="hidden" name="tabname" value="height">
        <input type="hidden" name="records" value="<?php echo $num; ?> ">
        
        <input type="submit" name="submit" value="submit">
        </form>
 




<div class="patient-infogap"></div>

<div class="patient-infobg">
		
        <span class="patient-hisspan">Thyroid</span>
        <form name="editthy" action="manage_ehr_script.php" method="post">
         <table border="0" cellspacing="0" cellpadding="0" width="80%">
         
        <tr>
        <td><p><strong></strong></p></td>
        <td><p><strong>T1</strong></p></td>
        <td><p><strong>T2</strong></p></td>
        <td><p><strong>TSH</strong></p></td>
     
        <td><p><strong>DATE</strong></p></td>
        
        
        
        </tr>
       
        <?php
   // $blood_presure = mysql_result($result,$i,"blood_presure");
							  
							  
							


 //$weight = mysql_result($result,$i,"weight");
//$blood_sugar=mysql_result($result,$i,"blood_sugar") ;

//$imm_name = mysql_result($result,$i,"immunization_name");
$query = "select * from patient_info p, thyroid t where p.uhid=t.patient_id and p.uhid=$ptid  ORDER BY date DESC ";


                            $result=mysql_query($query,$connection);
	                         $num=mysql_num_rows($result);
							$j=0;
                			while ( $j < $num )
	            				{	
								
								$id=mysql_result($result,$j,"id");
                         $t1 =mysql_result($result,$j,"t1");
                         $t2 =mysql_result($result,$j,"t2");
                         $tsh =mysql_result($result,$j,"tsh");
							  
							  $date=mysql_result($result,$j,"date");
							  $status=mysql_result($result,$j,"status");

							  $cname="c$j";
							  
    ?>
        
        
        
          <tr>
            <td width="50%"> 
            
            <?php 
			    if($status==1)
				{
					?>
            <input type="checkbox" name="<?php echo $cname; ?>" value="<?php echo $id; ?>"checked>
            <?php
				}
				else
				{
					?>
            <input type="checkbox" name="<?php echo $cname; ?>" value="<?php echo $id; ?>">
            <?php
				}
				?>
            
            
            
             
            <td><h6> <?php echo "$t1 ";?></h6></td>
            <td><h6> <?php echo "$t2 ";?></h6></td>
            <td><h6> <?php echo "$tsh ";?></h6></td>
            <td ><p>Date: <?php echo date('d-m-y', strtotime($date) ); ?></p></td>
            </tr>
            <?php 
            $j++; 
            }
            ?>
          
          
          
        </table>
        
        <input type="hidden" name="tabname" value="thyroid">
        <input type="hidden" name="records" value="<?php echo $num; ?> ">
        
        <input type="submit" name="submit" value="submit">
        </form>

    <div class="patient-infogap"></div>

<div class="patient-infobg">
		
        <span class="patient-hisspan">Lipid Test</span>
        <form name="editlpd" action="manage_ehr_script.php" method="post">
         <table border="0" cellspacing="0" cellpadding="0" width="80%">
         
        <tr>
        <td><p><strong></strong></p></td>
        <td><p><strong>LGL</strong></p></td>
        <td><p><strong>VGL</strong></p></td>
        <td><p><strong>HTL</strong></p></td>
        <td><p><strong>TOTAL CHOLESTEROL</strong></p></td>
        <td><p><strong>date</strong></p></td>
        
        
        
        </tr>
       
        <?php
   // $blood_presure = mysql_result($result,$i,"blood_presure");
							  
							  
							


 //$weight = mysql_result($result,$i,"weight");
//$blood_sugar=mysql_result($result,$i,"blood_sugar") ;

//$imm_name = mysql_result($result,$i,"immunization_name");
          $query = "select * from patient_info p, lipid l where p.uhid=l.patient_id and l.patient_id=$ptid ORDER BY date DESC ";


                            $result=mysql_query($query,$connection);
	                         $num=mysql_num_rows($result);
							$j=0;
                			while ( $j < $num )
	            				{	
								
								$id=mysql_result($result,$j,"id");
                        $lgl = mysql_result($result,$t,"lgl");
                 $vgl = mysql_result($result,$t,"vgl");
                $htl=mysql_result($result,$t,"htl");
                              
                $total_cholesterol=mysql_result($result,$t,"total_cholesterol");
							  
							  $date=mysql_result($result,$j,"date");
							  $status=mysql_result($result,$j,"status");

							  $cname="c$j";
							  
    ?>
        
        
        
          <tr>
            <td width="50%"> 
            
            <?php 
			    if($status==1)
				{
					?>
            <input type="checkbox" name="<?php echo $cname; ?>" value="<?php echo $id; ?>"checked>
            <?php
				}
				else
				{
					?>
            <input type="checkbox" name="<?php echo $cname; ?>" value="<?php echo $id; ?>">
            <?php
				}
				?>
            
            
            
             <td><h6> <?php echo "$lgl " ;?></h6></td>
            <td><h6> <?php echo "$vgl " ;?></h6></td>
            <td><h6> <?php echo "$htl " ;?></h6></td>
            <td><h6> <?php echo "$total_cholesterol " ;?></h6></td>
            <td ><p>Date: <?php echo date('d-m-y', strtotime($date) ); ?></p></td>
            </tr>
            <?php 
            $j++; 
            }
            ?>
          
          
          
        </table>
        
        <input type="hidden" name="tabname" value="lipid">
        <input type="hidden" name="records" value="<?php echo $num; ?> ">
        
        <input type="submit" name="submit" value="submit">
        </form>


        <div class="patient-infogap"></div>
        
        
<div class="patient-infobg">
		
        <span class="patient-hisspan">Kidny Function Test</span>
        <form name="editkft" action="manage_ehr_script.php" method="post">
         <table border="0" cellspacing="0" cellpadding="0" width="80%">
         
        <tr>
        <td><p><strong></strong></p></td><td><p><strong>UREA</strong></p></td>
        <td><p><strong>CREOTININ</strong></p></td>
        
        <td><p><strong>DATE</strong></p></td>
        
        
        
        </tr>
       
        <?php
   // $blood_presure = mysql_result($result,$i,"blood_presure");
							  
							  
							


 //$weight = mysql_result($result,$i,"weight");
//$blood_sugar=mysql_result($result,$i,"blood_sugar") ;

//$imm_name = mysql_result($result,$i,"immunization_name");
          $query = "select * from patient_info p, kidny_function_test k where p.uhid=k.patient_id and k.patient_id=$ptid ORDER BY date DESC ";


                            $result=mysql_query($query,$connection);
	                         $num=mysql_num_rows($result);
							$j=0;
                			while ( $j < $num )
	            				{	
								
								$id=mysql_result($result,$j,"id");
								
                 $urea = mysql_result($result,$t,"urea");
                 $creotanin = mysql_result($result,$t,"creotanin");
                                $date=mysql_result($result,$t,"date");
							  
							  $date=mysql_result($result,$j,"date");
							  $status=mysql_result($result,$j,"status");

							  $cname="c$j";
							  
    ?>
        
        
        
          <tr>
            <td width="50%"> 
            
            <?php 
			    if($status==1)
				{
					?>
            <input type="checkbox" name="<?php echo $cname; ?>" value="<?php echo $id; ?>"checked>
            <?php
				}
				else
				{
					?>
            <input type="checkbox" name="<?php echo $cname; ?>" value="<?php echo $id; ?>">
            <?php
				}
				?>
            
            
            
            <td><h6> <?php echo "$urea " ;?></h6></td>
            <td><h6> <?php echo "$creotanin " ;?></h6></td>
            <td ><p>Date: <?php echo date('d-m-y', strtotime($date) ); ?></p></td>
            </tr>
            <?php 
            $j++; 
            }
            ?>
          
          
          
        </table>
        
        <input type="hidden" name="tabname" value="kidny_function_test">
        <input type="hidden" name="records" value="<?php echo $num; ?> ">
        
        <input type="submit" name="submit" value="submit">
        </form>
         
    
   <div class="patient-infogap"></div>
         





   <div class="patient-infogap"></div>
        <span class="patient-hisspan">Pulse Rate</span>
        <form name="editbp" action="manage_ehr_script.php" method="post">
         <table border="0" cellspacing="0" cellpadding="0" width="80%">

        <?php
       
		
		
		        
				
				  $query = "select * from patient_info p, pulse_rate c where p.uhid=c.patient_id and c.patient_id=$ptid ORDER BY date DESC ";
                            $result=mysql_query($query,$connection);
	                         $num=mysql_num_rows($result);
							$l=0;
                			while ( $l < $num )
	            				{	
                        $id=mysql_result($result,$l,"id");
	
							   $pulse_rate = mysql_result($result,$l,"pulse_rate");
							  $date=mysql_result($result,$l,"date");
         $status=mysql_result($result,$l,"status");

                $cname="c$l";
                
    ?>
        
        
        
          <tr>
            <td width="50%"> 
            
            <?php 
          if($status==1)
        {
          ?>
            <input type="checkbox" name="<?php echo $cname; ?>" value="<?php echo $id; ?>"checked>
            <?php
        }
        else
        {
          ?>
            <input type="checkbox" name="<?php echo $cname; ?>" value="<?php echo $id; ?>">
            <?php
        }
        ?>           
       

            <td><h6> <?php echo "$pulse_rate " ;?></h6></td>
            <td><p>Date: <?php echo date('d-m-y', strtotime($date) ); ?></p></td>
             
             <?php 
            $l++; 
            }
            ?>
          </tr>
          
          
        </table>

        <input type="hidden" name="tabname" value="pulse_rate">
        <input type="hidden" name="records" value="<?php echo $num; ?> ">
        
        <input type="submit" name="submit" value="submit">
        </form>
  

        
        
        <div class="patient-infogap"></div>
        <span class="patient-hisspan">Temperature</span>
        <form name="edittemp" action="manage_ehr_script.php" method="post">
         <table border="0" cellspacing="0" cellpadding="0" width="80%">
       
        <?php
        
        
        $query = "select * from patient_info p, temperature c where p.uhid=c.patient_id and p.uhid=$ptid ORDER BY date DESC ";
                            $result=mysql_query($query,$connection);
	                         $num=mysql_num_rows($result);
							$t=0;
                			while ( $t < $num )
	            				{	
                        $id=mysql_result($result,$t,"id");
	
							  $temperature = mysql_result($result,$t,"temperature");
							  $date=mysql_result($result,$t,"date");
                              $time=mysql_result($result,$t,"time");
                   $status=mysql_result($result,$t,"status");

                $cname="c$t";
                
    ?>
        
        
        
          <tr>
            <td width="50%"> 
            
            <?php 
          if($status==1)
        {
          ?>
            <input type="checkbox" name="<?php echo $cname; ?>" value="<?php echo $id; ?>"checked>
            <?php
        }
        else
        {
          ?>
            <input type="checkbox" name="<?php echo $cname; ?>" value="<?php echo $id; ?>">
            <?php
        }
        ?>           
                              
            <td><h6><?php echo "$temperature" ;?>&deg;C</h6></td>
            <td><p>Date: <?php echo date('d-m-y', strtotime($date) ); ?></p></td>
            <td><p>Time: <?php echo $time; ?></p></td>

          </tr>
          <?php 
            $t++; 
            }
            ?>

          
        </table>
        <input type="hidden" name="tabname" value=" temperature">
        <input type="hidden" name="records" value="<?php echo $num; ?> ">
        
        <input type="submit" name="submit" value="submit">
        </form>
  
        
        
        <div class="patient-infogap"></div>
        <span class="patient-hisspan">Immunization</span>
       <form name="editimm" action="manage_ehr_script.php" method="post">
         <table border="0" cellspacing="0" cellpadding="0" width="80%">
        <tr>
        <td><h6><strong>Immunization Name</strong></h6></td>
        <td><h6><strong>Date</strong></h6></td>
        
        </tr>
        
        <?php
        
        
        $query = "select * from patient_info p, immunization c where p.uhid=c.patient_id and p.uhid=$ptid ORDER BY given_date DESC ";
                            $result=mysql_query($query,$connection);
	                         $num=mysql_num_rows($result);
							$t=0;
                			while ( $t < $num )
	            				{	
	               $id=mysql_result($result,$t,"id");
							  $immunization_name = mysql_result($result,$t,"immunization_name");
							  $due_date=mysql_result($result,$t,"due_date");
                  $given_date=mysql_result($result,$t,"given_date");
              $status=mysql_result($result,$t,"status");

                $cname="c$t";
                
    ?>
        
        
        
          <tr>
            <td width="50%"> 
            
            <?php 
          if($status==1)
        {
          ?>
            <input type="checkbox" name="<?php echo $cname; ?>" value="<?php echo $id; ?>"checked>
            <?php
        }
        else
        {
          ?>
            <input type="checkbox" name="<?php echo $cname; ?>" value="<?php echo $id; ?>">
            <?php
        }
        ?>
            
            
            <td><h6><?php echo "$immunization_name" ;?></h6></td>
            <td><h6>Given Date: <?php echo date('d-m-y', strtotime($given_date) ); ?></h6></td>
            <td><h6> Due Date: <?php echo date('d-m-y', strtotime($due_date) ); ?></h6></td>
          </tr>
            <?php 
            $t++; 
            }
            ?>
                     
        </table>
        <input type="hidden" name="tabname" value=" immunization">
        <input type="hidden" name="records" value="<?php echo $num; ?> ">
        
        <input type="submit" name="submit" value="submit">
        </form>
  
        
   		
        
          <div class="patient-infogap"></div>
        <span class="patient-hisspan">Weight History</span>

        <form name="editweight" action="manage_ehr_script.php" method="post">
         <table border="0" cellspacing="0" cellpadding="0" width="80%">
        <?php
        
        
		$query = "select * from patient_info p, weight c where p.uhid=c.patient_id and uhid=$ptid ORDER BY date ASC ";
                            $result=mysql_query($query,$connection);
	                         $num=mysql_num_rows($result);
							$m=0;
                			while ( $m < $num )
	            				{	

                        $id=mysql_result($result,$m,"id");

	
							  $weight = mysql_result($result,$m,"weight");
							  $date=mysql_result($result,$m,"date");

                  $status=mysql_result($result,$m,"status");

                $cname="c$m";
                
    ?>
        
        
        
          <tr>
            <td width="50%"> 
            
            <?php 
          if($status==1)
        {
          ?>
            <input type="checkbox" name="<?php echo $cname; ?>" value="<?php echo $id; ?>"checked>
            <?php
        }
        else
        {
          ?>
            <input type="checkbox" name="<?php echo $cname; ?>" value="<?php echo $id; ?>">
            <?php
        }
        ?>
        
            <td><h6><?php echo "$weight"; ?></h6></td>
            <td><p>Date: <?php echo date('d-m-y', strtotime($date) ); ?></p></td>
          </tr>
          <?php 
            $m++; 
            }
            ?>

                </table>

         <input type="hidden" name="tabname" value="weight">
        <input type="hidden" name="records" value="<?php echo $num; ?> ">
        
        <input type="submit" name="submit" value="submit">
        </form>
        
        
        
          <div class="patient-infogap"></div>
        <span class="patient-hisspan">Blood Sugar</span>

        <form name="editbs" action="manage_ehr_script.php" method="post">
         <table border="0" cellspacing="0" cellpadding="0" width="80%">
       
        <?php
		
		
		
	
		$query = "select * from patient_info p, blood_sugar c where p.uhid=c.patient_id and uhid=$ptid ORDER BY date ASC ";
        
                            $result=mysql_query($query,$connection);
	                         $num=mysql_num_rows($result);
							$n=0;
                			while ( $n < $num )
	            				{	

                        $id=mysql_result($result,$n,"id");

	                           
							  $fasting=mysql_result($result,$n,"fasting") ;
							  $pp=mysql_result($result,$n,"pp") ;
							  $date=mysql_result($result,$n,"date");

                 $status=mysql_result($result,$n,"status");

                $cname="c$n";
                
    ?>
        
        
        
          <tr>
            <td width="50%"> 
            
            <?php 
          if($status==1)
        {
          ?>
            <input type="checkbox" name="<?php echo $cname; ?>" value="<?php echo $id; ?>"checked>
            <?php
        }
        else
        {
          ?>
            <input type="checkbox" name="<?php echo $cname; ?>" value="<?php echo $id; ?>">
            <?php
        }
        ?>
        
            <td><h6>Date: <?php echo date('d-m-y', strtotime($date) );?></h6></td>
            <td><h6>Fasting: <?php echo "$fasting"; ?></h6></td>
            <td><p> PP: <?php echo "$pp"; ?></p></td>
             <?php 
            $n++; 
            }
            ?>

          </tr>
                     
        </table>


        <input type="hidden" name="tabname" value="blood_sugar">
        <input type="hidden" name="records" value="<?php echo $num; ?> ">
        
        <input type="submit" name="submit" value="submit">
        </form>
  
        
        
        
 <div class="patient-infogap"></div>
        <span class="patient-hisspan">HBAIC Score</span>
        <form name="editbp" action="manage_ehr_script.php" method="post">
         <table border="0" cellspacing="0" cellpadding="0" width="80%">
        
        <?php
		
		//$hsbc_score = mysql_result($result,$i,"hsbc_score");
		
		$query = "select * from patient_info p, hbaic_score c where p.uhid=c.patient_id and p.uhid=$ptid ORDER BY date ASC ";
                            $result=mysql_query($query,$connection);
	                         $num=mysql_num_rows($result);
							$p=0;
                			while ( $p < $num )
	            				{	
                        $id=mysql_result($result,$p,"id");

	
							  $hbaic_score = mysql_result($result,$p,"hbaic_score");

							  $date = mysql_result($result,$p,"date");
               $status=mysql_result($result,$p,"status");

                $cname="c$p";
                
    ?>
        
        
        
          <tr>
            <td width="50%"> 
            
            <?php 
          if($status==1)
        {
          ?>
            <input type="checkbox" name="<?php echo $cname; ?>" value="<?php echo $id; ?>"checked>
            <?php
        }
        else
        {
          ?>
            <input type="checkbox" name="<?php echo $cname; ?>" value="<?php echo $id; ?>">
            <?php
        }
        ?>
            
            <td><h6><?php echo "$hbaic_score"; ?></h6></td>
            <td><p> Date: <?php echo date('d-m-y', strtotime($date) );?></p></td>
            <?php 
            $p++; 
            }
            ?>
          </tr>
                        
        </table>

        <input type="hidden" name="tabname" value="hbaic_score">
        <input type="hidden" name="records" value="<?php echo $num; ?> ">
        
        <input type="submit" name="submit" value="submit">
        </form>
  
        
</div>





  <div class="patient-infogap"></div>
        <span class="patient-hisspan">Hemoglobin History</span>
        <form name="editbp" action="manage_ehr_script.php" method="post">
         <table border="0" cellspacing="0" cellpadding="0" width="80%">
       
        
        <?php
		
		//$hsbc_score = mysql_result($result,$i,"hsbc_score");
		
		$query = "select * from patient_info p, hemoglobin h where p.uhid=h.patient_id and p.uhid=$ptid ORDER BY date ASC ";
                            $result=mysql_query($query,$connection);
	                         $num=mysql_num_rows($result);
							$p=0;
                			while ( $p < $num )
	            				{	
                        $id=mysql_result($result,$p,"id");
	
							  $hemoglobin = mysql_result($result,$p,"hemoglobin");

							  $date = mysql_result($result,$p,"date");
                $status=mysql_result($result,$p,"status");

                $cname="c$p";
                
    ?>
        
        
        
          <tr>
            <td width="50%"> 
            
            <?php 
          if($status==1)
        {
          ?>
            <input type="checkbox" name="<?php echo $cname; ?>" value="<?php echo $id; ?>"checked>
            <?php
        }
        else
        {
          ?>
            <input type="checkbox" name="<?php echo $cname; ?>" value="<?php echo $id; ?>">
            <?php
        }
        ?>
            
                              
            <td><h6><?php echo "$hemoglobin"; ?></h6></td>
            <td><p> Date: <?php echo date('d-m-y', strtotime($date) );?></p></td>
            <?php 
            $p++; 
            }
            ?>
          </tr>
                        
        </table>
        <input type="hidden" name="tabname" value="hemoglobin">
        <input type="hidden" name="records" value="<?php echo $num; ?> ">
        
        <input type="submit" name="submit" value="submit">
        </form>
  
        
</div>


<div class="patient-infogap"></div>

<div class="patient-infobg">
		<span class="patient-inspan">Medication History</span>

    <?php 
    $query = "select * from patient_info p, prescription c where p.uhid=c.patient_id and p.uhid=$ptid ORDER BY date ASC ";
                            $result=mysql_query($query,$connection);
                           $num=mysql_num_rows($result);

                           $p=0;
                            while($p < $num){

                           $diagnosis = mysql_result($result,$p,"diagnosis");
                           $vital = mysql_result($result,$p,"vital");
                           $health_care_person = mysql_result($result,$p,"health_care_provider");
                           $date = mysql_result($result,$p,"date");
                          // $contact_no = mysql_result($result,$p,"contact_no");
                           ?>

        
        <table border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><h6>Diagnosis</h6></td>
            <td><p>: <?php echo "$diagnosis"; ?> </p></td>
          </tr>
          <tr>
             <td><h6>Vital</h6></td>
            <td><p>: <?php echo "$vital"; ?></p></td>
          </tr>
          <tr>
              <td><h6>Health Care Person</h6></td>
            <td><p>: <?php echo "$health_care_person"; ?></p></td>
          </tr>
          
           <tr>
              <td><h6>Date</h6></td>
            <td><p>: <?php echo "$date"; ?></p></td>
          </tr>
          <?php
          $p++;
        }

          ?>
          
        </table>
        
        <div class="patient-infogap"></div>

		<div class="mprescribed">
       
 <table border="0" cellspacing="0" cellpadding="0">

 <?php
 	$query = "select * from patient_info p, medication m where p.uhid=m.patient_id and p.uhid=$ptid ";
                            $result=mysql_query($query,$connection);
	                         $num=mysql_num_rows($result);
							$p=0;
                			while ( $p < $num )
	            				{	
	             
							$medication_name   = mysql_result($result,$p,"medication_name");

							  $strength = mysql_result($result,$p,"strength");
							  $dose = mysql_result($result,$p,"dose");
							  $frequency = mysql_result($result,$p,"frequency");
  
 
 ?>
 
   
 <table border="0" cellspacing="0" cellpadding="0">
        <h5>Medicine Prescribed :</h5>
          <tr>
            <td><h6>Medicine Name</h6></td>
            <td><p>: <?php echo"$medication_name";?></p></td>
          </tr>
          <tr>
             <td><h6>Strength</h6></td>
            <td><p>: <?php echo"$strength";?></p></td>
          </tr>
          <tr>
              <td><h6>Dose </h6></td>
            <td><p>: <?php echo"$dose";?></p></td>
          </tr>
          <tr>
              <td><h6>Frequency </h6></td>
            <td><p>: <?php echo"$frequency";?></p></td>
            <?php
            $p++;
								}
            ?>
           
          </tr>
        </table>
     
	
	</div>



  <?php
  $query = "select * from patient_info p, lft l where p.uhid=l.patient_id and p.uhid=$ptid ";
                            $result=mysql_query($query,$connection);
                           $num=mysql_num_rows($result);
              $p=0;
                      while ( $p < $num )
                      { 
               
              $sgpt   = mysql_result($result,$p,"sgpt");

                $sgot = mysql_result($result,$p,"sgot");
                $date = mysql_result($result,$p,"date");
                
 
 ?>
 
   
 <table border="0" cellspacing="0" cellpadding="0">
        <h5> Liver Function Test</h5>
          <tr>
            <td><h6>SGPT</h6></td>
            <td><p>: <?php echo"$sgpt";?></p></td>
          </tr>
          <tr>
             <td><h6>SGOT</h6></td>
            <td><p>: <?php echo"$sgot";?></p></td>
          </tr>
          <tr>
              <td><h6>Date </h6></td>
            <td><p>: <?php echo"$date";?></p></td>
          </tr>
          
            <?php
            $p++;
                }
            ?>
           
         
        </table>
     
  
  </div>




<div class="patient-infogap"></div>

		<div class="mprescribed">

      <h5>Blood Test Recommendations </h5>
      <?php
         $query1 = " select * from patient_info p , medication d  where p.uhid = d.patient_id  and p.uhid=$ptid ";
                            $result1 =mysql_query($query1,$connection);
                           $num1=mysql_num_rows($result1);
              $a=0;

                while ( $a < $num1 )
                      { 
                       
                $blood_test_recommendations  = mysql_result($result1,$a,"blood_test_recommendations");
                
          ?>

       
		<p><?php echo" $blood_test_recommendations" ;?></p> 

    <?php
            $a++;
                }
            ?>
           
	</div>


<div class="patient-infogap"></div>

		<div class="mprescribed">

       <?php
         $query1 = " select * from patient_info p , diat_chart d  where p.uhid = d.patient_id  and p.uhid=$ptid ";
                            $result1 =mysql_query($query1,$connection);
                           $num1=mysql_num_rows($result1);
              $a=0;
                       
                $life_style_change = mysql_result($result1,$a,"life_style_change");
                
          ?>

        <h5>Life Style Change :</h5>
		<p><?php echo" $life_style_change" ;?> </p> 
        
	</div>

  <form name="editpre" action="manage_ehr_script.php" method="post">
         <table border="0" cellspacing="0" cellpadding="0" width="80%">
       
 
  <?php
    $query = "select * from patient_info p, prescription c where p.uhid=c.patient_id and p.uhid=$ptid ORDER BY date DESC ";
                            $result=mysql_query($query,$connection);
                           $num=mysql_num_rows($result);

                           $p=0;

                          while ( $p < $num )
                           { 
                          $id=mysql_result($result,$p,"id");


                           $prescription_image = mysql_result($result,$p,"prescription_image");
                            $status=mysql_result($result,$p,"status");

                $cname="c$p";
                
    ?>
        
        
        
          <tr>
            <td width="50%"> 
            
            <?php 
          if($status==1)
        {
          ?>
            <input type="checkbox" name="<?php echo $cname; ?>" value="<?php echo $id; ?>"checked>
            <?php
        }
        else
        {
          ?>
            <input type="checkbox" name="<?php echo $cname; ?>" value="<?php echo $id; ?>">
            <?php
        }
        ?>
                           
  
        <p><u><h6>Paper Prescription</h6></u></p>
             <?php echo "<img src='prescription_results/$prescription_image'height='60%' width='50%'/>";?> 

         <?php
          $p++;
          }
         ?>

      </table>
        
        <input type="hidden" name="tabname" value=" prescription">
        <input type="hidden" name="records" value="<?php echo $num; ?> ">
        
        <input type="submit" name="submit" value="submit">
        </form>

     
    
</div>

<div class="patient-infogap"></div>
<div class="patient-infobg">
		<span class="patient-inspan">Lab Results</span>
        
        
        <?php
		    
        $query1 = " select * from patient_info p , lab_test_findings l where p.uhid = l.patient_id  and p.uhid=$ptid ";
                            $result1 =mysql_query($query1,$connection);
	                         $num1=mysql_num_rows($result1);
							$a=0;
                			while ( $a < $num1 )
	            				{	
	
							  $lab_test = mysql_result($result1,$a,"test");
							  $report_name=mysql_result($result1,$a,"report_name");
                              $lab_test_id = mysql_result($result1,$a,"lab_test_id");
							  $lab_address = mysql_result($result1,$a,"lab_address");
							  //$tempareture = mysql_result($result,$a,"tempareture");
							  $lab_report = mysql_result($result1,$a,"lab_report");
                $lab_find_image = mysql_result($result1,$a,"lab_find_image");
                $test_result = mysql_result($result1,$a,"test_result");
		                      
		
		
		
		
		
        ?>
         <span class="patient-hisspan"><?php echo" $report_name" ;?></span>
         <table border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><h6>Test</h6></td>
            <td><p>: <?php echo" $lab_test" ;?></p></td>
          </tr>
          <tr>
             <td><h6>Lab ID</h6></td>
            <td><p>: <?php echo" $lab_test_id" ;?></p></td>
          </tr>
          <tr>
              <td><h6>Lab address</h6></td>
            <td><p>: <?php echo" $lab_address" ;?> </p></td>
          </tr>
          <tr>
              <td><h6>Test Results</h6></td>
            <td><p>: <?php echo" $test_result" ;?></p></td>
                     </tr>
        </table>
        
        <br>
         <?php  
        echo "<img src='labtest/$lab_find_image'height='60%' width='50%'/>";
        ?>
        <br><br>
        
        <h5>Report</h5>
        
        <p> <?php echo" $lab_report" ;?>
        </p>
         <?php
            
            $a++;
								}
            ?>

        
        <br><br><br>       
        
         <?php
		    
        $query1 = " select * from patient_info p , hospitalization_history h  where p.uhid = h.patient_id  and p.uhid=$ptid ";
                            $result1 =mysql_query($query1,$connection);
	                         $num1=mysql_num_rows($result1);
							$a=0;
                			while ( $a < $num1 )
	            				{	
	
							  $patient_id = mysql_result($result1,$a,"patient_id");
							  $hos_id=mysql_result($result1,$a,"hos_id");
                              $hos_name = mysql_result($result1,$a,"hos_name");
							  $insure =  mysql_result($result1,$a,"insure");
							  $diagnosis = mysql_result($result1,$a,"diagnosis");
							  $hospitalization_date = mysql_result($result1,$a,"hospitalization_date");
							  $release_date = mysql_result($result1,$a,"release_date");
							  $discharge_summery = mysql_result($result1,$a,"discharge_summery");
							  $billing_amount = mysql_result($result1,$a,"billing_amount");
		                     
		
        ?>

       
        <span class="patient-hisspan">Hospitalization History</span>
        
         <table border="0" cellspacing="0" cellpadding="0">
         
          <tr>
            <td><h6>Patient Id</h6></td>
            <td><p>: <?php echo"$patient_id";?> </p></td>
          </tr>
          <tr>
             <td><h6>Hospital Name ID</h6></td>
            <td><p>: <?php echo" $hos_name";?></p></td>
          </tr>
          <tr>
              <td><h6>Diagnosis</h6></td>
            <td><p>: <?php echo" $diagnosis";?> </p></td>
          </tr>
          <tr>
              <td><h6>Hospitalization Date</h6></td>
            <td><p>: <?php echo" $hospitalization_date";?></p></td>
          </tr>
          
           <tr>
              <td><h6>Release Date</h6></td>
            <td><p>: <?php echo" $release_date";?></p></td>
          </tr>
         
          <tr>
              <td><h6>Discharge Summery</h6></td>
            <td><p>: <?php echo" $discharge_summery";?></p></td>
          </tr>
         
          <tr>
              <td><h6>Billing Amount</h6></td>
            <td><p>: <?php echo"$billing_amount";?> </p></td>
          </tr>
          
                 </table>
                  <?php
		   $a++;
								}
          ?>

        
        <br><br> 
        <?php
		    
        $query1 = " select * from patient_info p , surgery s  where p.uhid = s.patient_id  and p.uhid=$ptid ";
                            $result1 =mysql_query($query1,$connection);
	                         $num1=mysql_num_rows($result1);
							$a=0;
                			while ( $a < $num1 )
	            				{	
	
							  $patient_id = mysql_result($result1,$a,"patient_id");
							  $hos_id=mysql_result($result1,$a,"hos_id");
                              $surgery_type = mysql_result($result1,$a,"surgery_type");
							  $surgery_description = mysql_result($result1,$a,"surgery_description");
							  $doctors_name = mysql_result($result1,$a,"doctors_name");
							  $surgery_date = mysql_result($result1,$a,"surgery_date");
		                     
		
        ?>

         
         
        <span class="patient-hisspan">Surgery performance</span>
        
         <table border="0" cellspacing="0" cellpadding="0">
         
          <tr>
            <td><h6>Surgery Name</h6></td>
            <td><p>: <?php echo"$surgery_type";?> </p></td>
          </tr>
          <tr>
             <td><h6>Hospital Name ID</h6></td>
            <td><p>: <?php echo" $hos_id";?></p></td>
          </tr>
          <tr>
              <td><h6>Operated on</h6></td>
            <td><p>: <?php echo" $surgery_date";?> </p></td>
          </tr>
          <tr>
              <td><h6>Doctor Name</h6></td>
            <td><p>: <?php echo "$doctors_name"; ?></p></td>
          </tr>
          
          <tr>
              <td><h6>Surgical Report</h6></td>
            <td><p>: <?php echo"$surgery_description";?> </p></td>
          </tr>
          
                 </table>
                  <?php
		   $a++;
								}
          ?>

        
        <br><br>
        <div class="surreport">
        Chalazion with visible single granuloma in an upper or lower eyelid.
        </div>
</div>




<div class="patient-infogap"></div>
<div class="patient-infobg">
		<span class="patient-inspan">Diat Chart</span>
        <?php
         $query1 = " select * from patient_info p , diat_chart d  where p.uhid = d.patient_id  and p.uhid=$ptid ";
                            $result1 =mysql_query($query1,$connection);
	                         $num1=mysql_num_rows($result1);
							$a=0;
                			while ( $a < $num1 )
	            				{	
	
							  $patient_id = mysql_result($result1,$a,"patient_id");
							  $diat_chart=mysql_result($result1,$a,"diat_chart");
                              
		
       
		
		?>
        
        <p> 
        <?php 
		  echo"$diat_chart";
		  echo"<br></br>";
		  $a++;
								}
		?>
        </p>
        
</div>      

<div class="patient-infogap"></div>
<div class="patient-infobg">
	<span class="patient-inspan">Current Medications</span>
    
    

       
          <?php
 	$query = "select * from patient_info p, medication m where p.uhid=m.patient_id and p.uhid=$ptid and m.current_medication='yes' ";
                            $result=mysql_query($query,$connection);
	                         $num=mysql_num_rows($result);
							$p=0;
                			while ( $p < $num )
	            				{	
							
	
							$medication_name   = mysql_result($result,$p,"medication_name");

							  $strength = mysql_result($result,$p,"strength");
							  $dose = mysql_result($result,$p,"dose");
							  $frequency = mysql_result($result,$p,"frequency");
  
 
 ?>
 <div class="patient-infogap"></div>
		<div class="mprescribed"> 
 <table border="0" cellspacing="0" cellpadding="0">
        <h5>Medicine Prescribed :</h5>
          <tr>
            <td><h6>Medicine Name</h6></td>
            <td><p>: <?php echo"$medication_name";?></p></td>
          </tr>
          <tr>
             <td><h6>Strength</h6></td>
            <td><p>:  <?php echo"$strength";?></p></td>
          </tr>
          <tr>
              <td><h6>Dose </h6></td>
            <td><p>:  <?php echo"$dose";?></p></td>
          </tr>
          <tr>
              <td><h6>Frequency </h6></td>
            <td><p>:  <?php echo"$frequency";?></p></td>
                     </tr>
                     
           <?php
            $p++;
								}
           
		    ?>

                 </table>
     
	
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
