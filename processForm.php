<html>
<head>
<title>Thank for Booking</title>
</head>
<body>
<?php 
 
 if ($_SERVER['REQUEST_METHOD'] == 'POST') { 
 
	$to  = "spicegardenoceanroad@gmail.com";
	
	$subject = "Spice Garden Table Booking";
	
	$message = "Name: " . $_POST['custname'] ."\n";
	
	$message .= "Telephone: " . $_POST['custtele'] . "\n"; 
	
	$message .= "Email: " . $_POST['custemail'] . "\n"; 
	
	$message .= "Number of People: " . $_POST['myselect'] . "\n"; 
	
	$message .= "Booking Time: " . $_POST['mytime'] . "\n"; 
	
	$message .= "Booking Date: " . $_POST['datepicker'] . "\n"; 
	
	$message .= "Any Messages: " . $_POST['anymessage'] . "\n"; 
	
	 if (mail($to, $subject, $message)) {
	
	  include 'confirm.php';
	
	 }
	 
	 else {
	 
	 echo "Unauthorised Access";
	 
	 }
 }
  
 else {

   echo "Please go back to fill the form";

 }

?>
</body>
</html>




















































































































							






































































