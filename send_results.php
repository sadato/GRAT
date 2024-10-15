<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $totalScore = $_POST['totalScore'];
    $answers = $_POST['answers'];

    // Set the recipient email address
    $to = "teacher@email.com";  // Change this to the teacher's email

    // Email subject and message
    $subject = "Quiz Results from " . $name;
    $message = "Name: $name\nEmail: $email\nTotal Score: $totalScore\n\nAnswers:\n$answers";

    // Headers
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Results successfully sent.";
    } else {
        echo "Error sending the results. Please try again.";
    }
} else {
    echo "Invalid request method.";
}
?>

