<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = $_POST["first-name"];
    $lastName = $_POST["last-name"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];
    $message = $_POST["message"];

    // Combine the form data as a string
    $formData = "First Name: " . $firstName . "\n" .
                "Last Name: " . $lastName . "\n" .
                "Email: " . $email . "\n" .
                "Contact: " . $contact . "\n" .
                "Message: " . $message . "\n\n";


    // Get user IP address
    $userIP = $_SERVER["REMOTE_ADDR"];

    // Get user agent information
    $userAgent = $_SERVER["HTTP_USER_AGENT"];

    // Append user IP and user agent to the form data
    $formData .= "User IP: " . $userIP . "\n";
    $formData .= "User Agent: " . $userAgent . "\n\n";

    
    // Open the file in append mode and write the form data
    $file = fopen("form_data.txt", "a");
    fwrite($file, $formData);
    fclose($file);

    // Redirect to a "thank you" page or another appropriate page
    header("Location: thanks.html");
    exit;
}
