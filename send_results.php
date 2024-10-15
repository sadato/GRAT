<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $totalScore = $_POST['totalScore'];
    $answers = $_POST['answers'];

    // Set the recipient email address
    $to = "teacher@email.com";  // Change this to the teacher's email

    // Email subject and message
    $subject = "Resultados do Quiz de " . $name;
    $message = "Nome: $name\nEmail: $email\nPontuação Total: $totalScore\n\nRespostas:\n$answers";

    // Headers
    $headers = "From: $email" . "\r\n" .
               "Reply-To: $email" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Resultados enviados com sucesso.";
    } else {
        echo "Erro ao enviar os resultados. Tente novamente.";
    }
} else {
    echo "Método de requisição inválido.";
}
?>

