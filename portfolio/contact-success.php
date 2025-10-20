<?php
require_once 'config.php';
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= t('title') ?> - Message envoyé</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gluten:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Dyslexic&display=swap">
</head>
<body>
    <div class="message-page">
        <div class="message-container-success">
            <div class="success-icon">
                <svg width="80" height="80" viewBox="0 0 24 24" fill="none" stroke="#4cff5b" stroke-width="2">
                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                </svg>
            </div>
            <h1 class="message-title">Message envoyé avec succès !</h1>
            <p class="message-text">Merci pour votre message. Je vous répondrai dans les plus brefs délais.</p>
            <a href="index.php" class="back-btn">Retour au portfolio</a>
        </div>
    </div>
</body>
</html>
