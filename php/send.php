<?php

// Check if request is an AJAX Request.
if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') { 
    die(); 
} 

if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['subject']) && !empty($_POST['message'])) {
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = "New Message from rudin.cc Contact Form";
    $inputsubject = $_POST['subject'];
    $message = $_POST['message'];
    
    // Prepare Header
    $header  = "MIME-Version: 1.0\r\n";
    $header .= "Content-type: text/html; charset=iso-8859-1\r\n";
    $header .= "From: $email\r\n";
    $header .= "X-Mailer: PHP ". phpversion();
    
    // Convert \n to <br>
    $order = array("\r\n", "\n", "\r");
    $message = str_replace($order,"<br>",$message);
    
    $body = "<p><b>Subject:</b> $inputsubject </p><p><b>E-Mail-Adress:</b> $email </p><p><b>Message:</b></p> <p> $message </p>";  
    
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        createMessage('error', 'Please provide a valid E-Mail-Adress.');
    }
    
    $status = mail('leo@rudin.cc',$subject,$body,$header);
    
    if($status) {
        createMessage('success', 'Your message has been send successfully. I will contact you as soon as possible.');    
    } else {
        createMessage('error', 'There was an internal server error. Please try again later.');        
    }
    
} else {
    createMessage('error', 'Please fill out all fields.');
}

/**
  * Provides an message in form of a JavaScript array.
  * @param $type: Type of message. (error or success)
  * @param $message: The message, which will be displayed on the screen.
  */
function createMessage($type, $message) {
    
    if ($type == 'error') {
        die('<div class="alert alert-danger" role="alert">'.$message.'</div>');    
    } else {
        die('<div class="alert alert-success" role="alert">'.$message.'</div>');
    }
    
}

?>