<?php

$email_to = "mael.priore@etu.univ-poitiers.fr";
$subject_prefix = "[CONTACT PORTFOLIO] ";

function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = clean_input($_POST['name']);
    $email = clean_input($_POST['email']);
    $subject = clean_input($_POST['subject']);
    $message = clean_input($_POST['message']);
    $errors = [];
    if (empty($name)) {
        $errors[] = "Le nom est requis.";
    }
    if (empty($email)) {
        $errors[] = "L'email est requis.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "L'email n'est pas valide.";
    }
    if (empty($subject)) {
        $errors[] = "Le sujet est requis.";
    }
    if (empty($message)) {
        $errors[] = "Le message est requis.";
    }
    if (empty($errors)) {
        $email_subject = $subject_prefix . $subject;
        $email_body = "Vous avez reçu un nouveau message depuis votre portfolio.\n\n";
        $email_body .= "Nom: $name\n";
        $email_body .= "Email: $email\n";
        $email_body .= "Sujet: $subject\n\n";
        $email_body .= "Message:\n$message\n";
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "X-Mailer: PHP/" . phpversion();
        
        if (mail($email_to, $email_subject, $email_body, $headers)) {
            header("Location: contact-success.php");
            exit();
        } else {
            header("Location: contact-error.php?message=" . urlencode("Erreur lors de l'envoi de l'email. Veuillez réessayer."));
            exit();
        }
    } else {
        $error_message = implode(" ", $errors);
        header("Location: contact-error.php?message=" . urlencode($error_message));
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}