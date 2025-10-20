<?php
require_once 'config.php';

// Récupérer le message d'erreur si présent
$error_message = isset($_GET['message']) ? htmlspecialchars($_GET['message']) : "Une erreur s'est produite lors de l'envoi du message.";
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= t('title') ?> - Erreur</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gluten:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Dyslexic&display=swap">
</head>
<body>
    <div class="message-page">
        <div class="message-container-error">
            <div class="error-icon">
                <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="#ff4c4c" stroke-width="2">
                    <circle cx="12" cy="12" r="10"></circle>
                    <line x1="15" y1="9" x2="9" y2="15"></line>
                    <line x1="9" y1="9" x2="15" y2="15"></line>
                </svg>
            </div>
            <h1 class="message-title">Erreur d'envoi</h1>
            <p class="message-text"><?= $error_message ?></p>
            <a href="index.php" class="back-btn">Retour au formulaire</a>
        </div>
    </div>
</body>
</html>
