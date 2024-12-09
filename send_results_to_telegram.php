<?php
header("Access-Control-Allow-Origin: *"); // Allow all origins (use with caution)

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data sent from JavaScript
    $name = htmlspecialchars(strip_tags($_POST['name']));
    $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
    $totalScore = $_POST['totalScore'];
    $answers = $_POST['answers'];

    // Telegram Bot Token and Chat ID
    $botToken = "YOUR_BOT_TOKEN"; // Replace with your bot's token
    $chatId = "YOUR_CHAT_ID"; // Replace with your chat ID

    // Message content
    $message = "Test Results:\n";
    $message .= "Name: $name\nEmail: $email\nTotal Score: $totalScore\n\nAnswers:\n$answers";

    // Send message via Telegram Bot API
    $url = "https://api.telegram.org/bot$botToken/sendMessage";
    $postData = [
        'chat_id' => $chatId,
        'text' => $message,
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    // Check response
    if ($response) {
        echo "Results successfully sent to Telegram.";
    } else {
        echo "Error sending results to Telegram.";
    }
}
?>

