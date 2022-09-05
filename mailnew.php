<?php  
 
if(isset($_POST['submit'])) {
 $mailto = "dgarg7978@gmail.com";  //My email address
 //getting customer data
 $name = $_POST['name']; //getting customer name
 $email = $_POST['email']; //getting customer email
 
 $message3= $_POST['message']
 $subject2 = "Confirmation: Message was submitted successfully "; // For customer confirmation
 
 //Email body I will receive
 $message1 = "Cleint Name: " . $name . "\n"
 . 
 . "Client Message: " . "\n" . $_POST['message1'];
 
 //Message for client confirmation
 $message2 = "Dear" . $name . "\n"
 . "Thank you for contacting us. We will get back to you shortly!" . "\n\n"
 . "You submitted the following message: " . "\n" . $_POST['message1'] . "\n\n"
 . "Regards," . "\n" . "- HMA WebDesign";
 
 //Email headers
 $headers = "From: " . $email; // Client email, I will receive
 $headers2 = "From: " . $mailto; // This will receive client
 
 //PHP mailer function
 
  $result1 = mail($mailto, $message3, $message, $headers); // This email sent to My address
  $result2 = mail($email, $subject2, $message2, $headers2); //This confirmation email to client
 
  //Checking if Mails sent successfully
 
  if ($result1 && $result2) {
    $success = "Your Message was sent Successfully!";
  } else {
    $failed = "Sorry! Message was not sent, Try again Later.";
  }
 
}
 
?>
