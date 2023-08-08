<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $inquiry = $_POST["inquiry"];

  // Configure your email settings
  $to = "joshua.king@kamohigh.school.nz";  // Replace with your email address
  $subject = "New Inquiry";

	//Email headers
	$headers = "From:".$email."\r\n";

	//Message content to send in an email
	$message = "Name: ".$name."<br>Email: ".$email."<br> Message: ".$message;

  // Headers
  $headers = "CC: someone@example.com";
	$headers .= "Reply-To:".$email."\r\n";
	$headers .= "X-Mailer: PHP/".phpversion();

  //Send email 
  $sendmail = mail($to, $subject, $message, $headers);
  
	if($sendmail == true){ 
    echo "Thank you for your inquiry!";
  
  } else {
    echo "Sorry, there was an error sending your inquiry.";
  }

}
?>
