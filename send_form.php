<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $to = "gautamodhaviya@gmail.com"; // Replace with your email address
    $subject = "New Contact Form Submission";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/html\r\n";

    $body = "Name: $name<br>";
    $body .= "Email: $email<br>";
    $body .= "Phone: $phone<br><br>";
    $body .= "Message:<br>$message";

    mail($to, $subject, $body, $headers);

    echo json_encode(array('status' => 'success', 'message' => 'Thank you for contacting me!'));
} else {
    echo json_encode(array('status' => 'error', 'message' => 'Invalid request'));
}
?>
