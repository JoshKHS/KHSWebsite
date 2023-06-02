<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Retrieve form data
  $name = $_POST["name"];
  $email = $_POST["email"];
  $inquiry = $_POST["inquiry"];

  // Configure your email settings
  $to = "joshua.king@kamohigh.school.nz";  // Replace with your email address
  $subject = "New Inquiry";
  $message = "Name: " . $name . "\n"
           . "Email: " . $email . "\n"
           . "Inquiry: " . $inquiry;

  // Send the email
  $headers = "From: " . $email . "\r\n" .
             "Reply-To: " . $email . "\r\n" .
             "X-Mailer: PHP/" . phpversion();

  if (mail($to, $subject, $message, $headers)) {
    echo "Thank you for your inquiry!";
  } else {
    echo "Sorry, there was an error sending your inquiry.";
  }
}
?>
