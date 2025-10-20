<?php
session_start();

$available_languages = ['fr', 'en', 'es'];
$default_lang = 'fr';

function getBrowserLanguage($available_languages, $default_lang) {
    if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
        $browser_languages = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
        
        preg_match_all('/([a-z]{2})(-[A-Z]{2})?(;q=[0-9.]+)?/', 
                       $browser_languages, 
                       $matches);
        
        if (!empty($matches[1])) {

            foreach ($matches[1] as $browser_lang) {
                $browser_lang = strtolower($browser_lang);
                
                if (in_array($browser_lang, $available_languages)) {
                    return $browser_lang;
                }
            }
        }
    }

    return $default_lang;
}

if (isset($_GET['lang']) && in_array($_GET['lang'], $available_languages)) {
    // Stocker la langue dans la session
    $_SESSION['lang'] = $_GET['lang'];
    $lang = $_GET['lang'];
} elseif (isset($_SESSION['lang'])) {
    // Utiliser la langue de la session
    $lang = $_SESSION['lang'];
} else {
    // Détecter la langue du navigateur
    $lang = getBrowserLanguage($available_languages, $default_lang);
    $_SESSION['lang'] = $lang;
}

$json_file = "lang/{$lang}.json";
$translations = [];

if (file_exists($json_file)) {
    $json_content = file_get_contents($json_file);
    $translations = json_decode($json_content, true);
} else {
    $json_content = file_get_contents("lang/fr.json");
    $translations = json_decode($json_content, true);
}

function t($key) {
    global $translations;
    return htmlspecialchars($translations[$key] ?? $key, ENT_QUOTES, 'UTF-8');
}
