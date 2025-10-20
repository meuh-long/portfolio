<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="<?= $lang ?>" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- pour le SEO (ça marche!!!!) -->
    <title><?= t('title') ?> | <?= t('seo_title_suffix') ?></title>
    <meta name="description" content="<?= t('meta_description') ?>">
    <meta name="keywords" content="<?= t('meta_keywords') ?>">
    <meta name="author" content="Maël Prioré">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="googlebot" content="index, follow">
    <link rel="canonical" href="https://mpriore.alwaysdata.net/portfolio<?= $lang !== 'fr' ? '?lang=' . $lang : '' ?>">
    <link rel="alternate" hreflang="fr" href="https://mpriore.alwaysdata.net/portfolio">
    <link rel="alternate" hreflang="en" href="https://mpriore.alwaysdata.net/portfolio?lang=en">
    <link rel="alternate" hreflang="es" href="https://mpriore.alwaysdata.net/portfolio?lang=es">
    <link rel="alternate" hreflang="x-default" href="https://mpriore.alwaysdata.net/portfolio">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://mpriore.alwaysdata.net/portfolio">
    <meta property="og:title" content="<?= t('title') ?> | <?= t('seo_title_suffix') ?>">
    <meta property="og:description" content="<?= t('meta_description') ?>">
    <meta property="og:image" content="https://mpriore.alwaysdata.net/portfolio/images/og-image.jpg">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="<?= t('og_image_alt') ?>">
    <meta property="og:locale" content="<?= $lang === 'fr' ? 'fr_FR' : ($lang === 'en' ? 'en_US' : 'es_ES') ?>">
    <meta property="og:site_name" content="Maël Prioré Portfolio">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="https://mpriore.alwaysdata.net/portfolio">
    <meta name="twitter:title" content="<?= t('title') ?> | <?= t('seo_title_suffix') ?>">
    <meta name="twitter:description" content="<?= t('meta_description') ?>">
    <meta name="twitter:image" content="https://mpriore.alwaysdata.net/portfolio/images/og-image.jpg">
    <meta name="twitter:image:alt" content="<?= t('og_image_alt') ?>">
    
<link rel="icon" type="image/png" href="/images/favicon/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="/images/favicon/favicon.svg" />
<link rel="shortcut icon" href="/images/favicon/favicon.ico" />
<link rel="apple-touch-icon" sizes="180x180" href="/images/favicon/apple-touch-icon.png" />
<meta name="apple-mobile-web-app-title" content="MyWebSite" />
<link rel="manifest" href="/images/favicon/site.webmanifest" />
    
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Person",
        "name": "Maël Prioré",
        "url": "https://mpriore.alwaysdata.net/portfolio",
        "image": "https://mpriore.alwaysdata.net/portfolio/images/portfolio%20image.png",
        "sameAs": [
            "https://www.instagram.com/melon.raw/",
            "https://github.com/meuh-long"
        ],
        "jobTitle": "<?= t('job_title') ?>",
        "worksFor": {
            "@type": "Organization",
            "name": "<?= t('organization_name') ?>"
        },
        "alumniOf": {
            "@type": "EducationalOrganization",
            "name": "IUT d'Angoulême"
        },
        "knowsAbout": ["<?= implode('", "', explode(', ', t('meta_keywords'))) ?>"],
        "description": "<?= t('meta_description') ?>"
    }
    </script>
    
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebSite",
        "name": "Maël Prioré Portfolio",
        "url": "https://mpriore.alwaysdata.net/portfolio",
        "description": "<?= t('meta_description') ?>",
        "inLanguage": ["fr", "en", "es"],
        "author": {
            "@type": "Person",
            "name": "Maël Prioré"
        }
    }
    </script>
    
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "ProfilePage",
        "mainEntity": {
            "@type": "Person",
            "name": "Maël Prioré",
            "description": "<?= t('meta_description') ?>",
            "image": "https://mpriore.alwaysdata.net/portfolio/images/portfolio%20image.png",
            "sameAs": [
                "https://www.instagram.com/melon.raw/",
                "https://github.com/meuh-long"
            ]
        }
    }
    </script>
    
    <link rel="stylesheet" href="css/style.css?v=<?= time() ?>">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gluten:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.cdnfonts.com/css/opendyslexic" rel="stylesheet">
</head>
<body>
    <header class="header">
        <a href="#home" class="skip-link logo">
            <div class="logo-circle">
                <span class="logo-icon"><img class="logo-img" src="images/logo.png" alt="Logo de Maël Prioré"></span>
            </div>
        </a>
        
        <button class="hamburger" id="hamburgerBtn" aria-label="Ouvrir le menu de navigation" aria-expanded="false">
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
            <span class="hamburger-line"></span>
        </button>
        
        <nav class="nav" id="mainNav" aria-label="Navigation principale">
            <a href="#home" class="nav-link"><?= t('nav_home') ?></a>
            <span class="nav-separator">/</span>
            <a href="#about" class="nav-link"><?= t('nav_about') ?></a>
            <span class="nav-separator">/</span>
            <a href="#work" class="nav-link"><?= t('nav_work') ?></a>
            <span class="nav-separator">/</span>
            <a href="#contact" class="nav-link"><?= t('nav_contact') ?></a>
        </nav>
        
        <div class="language-selector">
            <button class="lang-btn" id="langBtn">
                <span class="lang-icon">🌐</span>
                <span class="lang-text"><?= strtoupper($lang) ?></span>
                <span class="dropdown-icon">▼</span>
            </button>
            <div class="lang-dropdown" id="langDropdown">
                <a href="?lang=fr" class="lang-option <?= $lang === 'fr' ? 'active' : '' ?>">
                    <span class="flag">🇫🇷</span> Français
                </a>
                <a href="?lang=en" class="lang-option <?= $lang === 'en' ? 'active' : '' ?>">
                    <span class="flag">🇬🇧</span> English
                </a>
                <a href="?lang=es" class="lang-option <?= $lang === 'es' ? 'active' : '' ?>">
                    <span class="flag">🇪🇸</span> Español
                </a>
            </div>
        </div>
    </header>
    <main>
    <section class="hero" id="home">
        <span id="main-content" class="visually-hidden" tabindex="-1">Début du contenu principal</span>
        <div class="pseudo-text">Melon!!</div>

        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-greeting gluten-unique"><?= t('hero_greeting') ?></h1>
                <h1 class="hero-name gluten-unique"><?= t('hero_name') ?></h1>
                <p class="hero-subtitle"><?= t('hero_quote') ?></p>
                <p class="hero-description"><?= t('hero_where') ?></p>
            </div>

            <div class="hero-character">
                <div class="character-circle">
                    <img src="images/portfolio-image.png" alt="Portrait de Maël Prioré tenant un appareil photo" class="character-img">
                </div>
            </div>

            <div class="access-panel" id="accessPanel">
                <div class="access-header" id="accessHeader">
                    <h3 class="access-title"><?= t('note_title') ?></h3>
                    <button class="minimize-btn" id="minimizeBtn" title="Réduire/Agrandir">─</button>
                </div>
                
                <div class="access-content-wrapper" id="accessContentWrapper">
                    <div class="accessibility-section">
                        <p class="accessibility-label"><?= t('note_font_size') ?></p>
                        <div class="font-controls">
                            <button class="font-btn decrease-btn" id="decreaseFont" title="<?= t('font_decrease') ?>">
                                <span class="font-icon">A−</span>
                            </button>
                            <button class="font-btn reset-btn" id="resetFont" title="<?= t('font_reset') ?>">
                                <span class="font-icon">A</span>
                            </button>
                            <button class="font-btn increase-btn" id="increaseFont" title="<?= t('font_increase') ?>">
                                <span class="font-icon">A+</span>
                            </button>
                        </div>
                        <div class="font-size-indicator" id="fontSizeIndicator">100%</div>
                    </div>
                    
                    <div class="accessibility-section dyslexic-section">
                        <p class="accessibility-label"><?= t('dyslexic_font') ?></p>
                        <button class="dyslexic-btn" id="dyslexicBtn" title="<?= t('dyslexic_font') ?>">
                            <span class="dyslexic-icon">OpenDyslexic</span>
                        </button>
                        <div class="dyslexic-status" id="dyslexicStatus"><?= t('dyslexic_inactive') ?></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="about" id="about">
        <h2 class="section-title"><?= t('about_title') ?></h2>
        <div class="about-container apparition">
            <div class="about-image-card">
                <img src="images/about-me-image.jpg" alt="Photo de profil de Maël Prioré" class="about-profile-img">
                <!-- NEEEEEEUILLLLLLLLLLLLLEEEEE -->
                <a href="https://julespvx.fr" target="_blank" rel="noopener noreferrer" class="about-name-tag-link"><span class="about-name-tag"><?= t('about_name_tag') ?></span></a>
            </div>

            <div class="about-content">
                <h2 class="about-title"><?= t('about_first_name') ?></h2>
                <h1 class="about-name-large"><?= t('about_last_name') ?></h1>

                <div class="about-description">
                    <p><?= t('about_text1') ?></p>
                    <p><?= t('about_text2') ?></p>
                </div>
            </div>
        </div>
    </section>

    <section class="work" id="work">
        <h2 class="section-title"><?= t('nav_work') ?></h2>
        <div class="work-grid apparition-work">
            <div class="work-item work-item-small" data-category="music" tabindex="0">
                <h3 class="work-item-title"><?= t('music') ?></h3>
                <dialog class="work-item-detail" aria-labelledby="dialog-title-music" aria-modal="true" role="alertdialog">
                    <button class="close-btn" aria-label="Fermer la fenêtre modale">✕</button>
                    <div class="work-detail-content">
                        <h2 id="dialog-title-music" class="work-detail-title"><?= t('music') ?></h2>
                        <div class="carousel-indicators" role="tablist" aria-label="Indicateurs de diapositives"></div>
                        <div class="carousel-container">
                            <button class="carousel-btn carousel-prev" aria-label="Diapositive précédente" aria-controls="carousel-track-music">‹</button>
                            <div class="carousel-wrapper">
                                <div id="carousel-track-music" class="carousel-track" aria-live="polite">
                                    <div class="project-slide">
                                        <div class="project-card-photo">
                                            <h4 lang="de"><?= t('schub') ?></h4>
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/zw5NH9JdxBc?si=0OfJM5Pku-suJYed" title="Moment musicaux - D.780 op.94, n°3 - Franz Schubert" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            <p><?= t('schub_desc') ?></p>
                                        </div>
                                    </div>
                                    <div class="project-slide">
                                        <div class="project-card-photo">
                                            <h4 lang="es"><?= t('turina') ?></h4>
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/V2b_aphgAY8?si=IJNUv5UYfAuDfly_" title="Jardin d'enfants op. 63 - Joaquín Turina" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            <p><?= t('turina_desc') ?></p>
                                        </div>
                                    </div>
                                    <div class="project-slide">
                                        <div class="project-card-photo">
                                            <h4 lang="de"><?= t('accompaniment') ?></h4>
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/aQKkgq2nTg8?si=nQ-B-ChEqsgDC046" title="An Chloé - K.524 - W.A. Mozart" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            <p><?= t('accompaniment_desc') ?></p>
                                        </div>
                                    </div>
                                    <div class="project-slide">
                                        <div class="project-card-photo">
                                            <h4 lang="de"><?= t('brahms') ?></h4>
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/kTwzi8ja8f8?si=ZMB6Er7la8BRNHFH" title="Ballade n°1 op.10 - Johannes Brahms" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            <p><?= t('brahms_desc') ?></p>
                                        </div>
                                    </div>
                                    <div class="project-slide">
                                        <div class="project-card-photo">
                                            <h4 lang="en"><?= t('ghibli') ?></h4>
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/5EWEJsNQ_xw?si=sAareRIV0Wcf2nvM" title="A Town with an Ocean View - Joe Hisaishi" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            <p><?= t('ghibli_desc') ?></p>
                                        </div>
                                    </div>
                                    <div class="project-slide">
                                        <div class="project-card-photo">
                                            <h4 lang="en"><?= t('up') ?></h4>
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/FuG5eJ99qvk?si=js_8MGcfg8jAxvLb" title="Married Life - Michael Giacchino" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            <p><?= t('up_desc') ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-btn carousel-next" aria-label="Diapositive suivante" aria-controls="carousel-track-music">›</button>
                        </div>
                    </div>
                </dialog>
            </div>
            <div class="work-item work-item-small" data-category="accessibility" tabindex="0">
                <h2 class="work-item-title"><?= t('accessibility') ?></h2>
                <dialog class="work-item-detail" aria-labelledby="dialog-title-accessibility" aria-modal="true" role="alertdialog">
                    <button class="close-btn" aria-label="Fermer la fenêtre modale">✕</button>
                    <div class="work-detail-content">
                        <h2 id="dialog-title-accessibility" class="work-detail-title"><?= t('accessibility') ?></h2>
                        <div class="carousel-indicators" role="tablist" aria-label="Indicateurs de diapositives"></div>
                        <div class="carousel-container">
                            <button class="carousel-btn carousel-prev" aria-label="Diapositive précédente" aria-controls="carousel-track-accessibility">‹</button>
                            <div class="carousel-wrapper">
                                <div id="carousel-track-accessibility" class="carousel-track" aria-live="polite">
                                    <div class="project-slide">
                                        <div class="project-card-photo">
                                            <h4 lang="en"><?= t('sbttlt') ?></h4>
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/CkREZtpffE0?si=bvdN-dIv10Q4Mcea" title="Sous-titrage du début de Love Actually" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            <p><?= t('sbttlt_desc') ?></p>
                                        </div>
                                    </div>
                                    <div class="project-slide">
                                        <div class="project-card-photo">
                                            <h4 lang="en"><?= t('sbttlt1') ?></h4>
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/eM6IrS_hOEk?si=OA8gTqCQJ1ivmOM7" title="Sous-titrage d'un extrait de Bons Baisers de Bruges" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            <p><?= t('sbttlt1_desc') ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-btn carousel-next" aria-label="Diapositive suivante" aria-controls="carousel-track-accessibility">›</button>
                        </div>
                    </div>
                </dialog>
            </div>
            <div class="work-item work-item-small" data-category="webdev" tabindex="0">
                <h3 class="work-item-title"><?= t('web-dev') ?></h3>
                <dialog class="work-item-detail" aria-labelledby="dialog-title-webdev" aria-modal="true" role="alertdialog">
                    <button class="close-btn" aria-label="Fermer la fenêtre modale">✕</button>
                    <div class="work-detail-content">
                        <h2 id="dialog-title-webdev" class="work-detail-title"><?= t('web-dev') ?></h2>
                        <div class="carousel-indicators" role="tablist" aria-label="Indicateurs de diapositives"></div>
                        <div class="carousel-container">
                            <button class="carousel-btn carousel-prev" aria-label="Diapositive précédente" aria-controls="carousel-track-webdev">‹</button>
                            <div class="carousel-wrapper">
                                <div id="carousel-track-webdev" class="carousel-track" aria-live="polite">
                                    <div class="project-slide">
                                        <div class="project-card-photo">
                                            <h4><?= t('web-dev1') ?></h4>
                                            <a href="https://2025-mmiang-tp3-groupe-3-cinema-itinerant.alwaysdata.net/" target="_blank" rel="noopener noreferrer"><img src="./images/cine-en-bulle.png" alt="Capture d'écran de la page d'accueil du site Ciné en Bulle"></a>
                                            <p><?= t('web-dev1_desc') ?></p>
                                        </div>
                                    </div>
                                    <div class="project-slide">
                                        <div class="project-card-photo">
                                            <h4><?= t('web-dev2') ?></h4>
                                            <a href="https://ldubois.alwaysdata.net/calculatrice_barbecue/" target="_blank" rel="noopener noreferrer"><img src="./images/calculatrice-bbq.png" alt="Capture d'écran de la page d'accueil du site Ma planète au Barbecue"></a>
                                            <p><?= t('web-dev2_desc') ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-btn carousel-next" aria-label="Diapositive suivante" aria-controls="carousel-track-webdev">›</button>
                        </div>
                    </div>
                </dialog>
            </div>
            <div class="work-item work-item-large" data-category="photo" tabindex="0">
                <h3 class="work-item-title"><?= t('photo') ?></h3>
                <dialog class="work-item-detail" aria-labelledby="dialog-title-photo" aria-modal="true" role="alertdialog">
                    <button class="close-btn" aria-label="Fermer la fenêtre modale">✕</button>
                    <a href="https://www.instagram.com/melon.raw/" target="_blank" rel="noopener noreferrer" class="instagram-btn" aria-label="Voir plus de photos sur Instagram">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" width="28" height="28">
                            <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                        </svg>
                        <span class="instagram-text"><?= t('see_more_photos') ?></span>
                    </a>
                    <div class="work-detail-content">
                        <h2 id="dialog-title-photo" class="work-detail-title"><?= t('photo') ?></h2>
                        <div class="carousel-indicators" role="tablist" aria-label="Indicateurs de diapositives"></div>
                        <div class="carousel-container">
                            <button class="carousel-btn carousel-prev" aria-label="Diapositive précédente" aria-controls="carousel-track-photo">‹</button>
                            <div class="carousel-wrapper">
                                <div id="carousel-track-photo" class="carousel-track" aria-live="polite">
                                    <div class="project-slide">
                                        <div class="project-card-photo">
                                            <h4 class="photo-title"><?= t('photo1') ?></h4>
                                            <div class="photo-image-container">
                                                <img src="./images/arbres.jpg" alt="Arbre au feuillage jaune en automne dans l'enceinte de l'IUT d'Angoulême">
                                            </div>
                                            <p class="photo-description"><?= t('photo1_desc') ?></p>
                                        </div>
                                    </div>
                                    <div class="project-slide">
                                        <div class="project-card-photo">
                                            <h4 class="photo-title"><?= t('photo2') ?></h4>
                                            <div class="photo-image-container">
                                                <a href="https://docs.google.com/document/d/1JNrs4ihqUznX84H1gC09CZJF75l3kJmzcIT82bKvQ_E/edit?usp=sharing" target="_blank" rel="noopener noreferrer"><img src="./images/harpe-elo.jpg" alt="Photo noir et blanc d'une jeune fille réglant sa harpe dans un conservatoire"></a>
                                            </div>
                                            <p class="photo-description"><?= t('photo2_desc') ?></p>
                                        </div>
                                    </div>
                                    <div class="project-slide">
                                        <div class="project-card-photo">
                                            <h4 class="photo-title"><?= t('photo3') ?></h4>
                                            <div class="photo-image-container">
                                                <img src="./images/pas-nb.jpg" alt="Photo d'un arbre prise face au soleil couchant, créant un effet presque noir et blanc">
                                            </div>
                                            <p class="photo-description"><?= t('photo3_desc') ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-btn carousel-next" aria-label="Diapositive suivante" aria-controls="carousel-track-photo">›</button>
                        </div>
                    </div>
                </dialog>
            </div>
            <div class="work-item work-item-large" data-category="video" tabindex="0">
                <h3 class="work-item-title"><?= t('video') ?></h3>
                <dialog class="work-item-detail" aria-labelledby="dialog-title-video" aria-modal="true" role="alertdialog">
                    <button class="close-btn" aria-label="Fermer la fenêtre modale">✕</button>
                    <div class="work-detail-content">
                        <h2 id="dialog-title-video" class="work-detail-title"><?= t('video') ?></h2>
                        <div class="carousel-indicators" role="tablist" aria-label="Indicateurs de diapositives"></div>
                        <div class="carousel-container">
                            <button class="carousel-btn carousel-prev" aria-label="Diapositive précédente" aria-controls="carousel-track-video">‹</button>
                            <div class="carousel-wrapper">
                                <div id="carousel-track-video" class="carousel-track" aria-live="polite">
                                    <div class="project-slide">
                                        <div class="project-card-photo">
                                            <h4><?= t('video1') ?></h4>
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/Kph88Qgq6hI?si=jnXKodfQBI_MUezG" title="Faux reportage - La machine à remonter le temps" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            <p><?= t('video1_desc') ?></p>
                                        </div>
                                    </div>
                                    <div class="project-slide">
                                        <div class="project-card-photo">
                                            <h4><?= t('video2') ?></h4>
                                            <iframe width="560" height="315" src="https://www.youtube.com/embed/z8UIRehZ7Ms?si=4G8lTgyVdYWyBY3l" title="Publicité Ciné en Bulle - Animation After Effects" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                                            <p><?= t('video2_desc') ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button class="carousel-btn carousel-next" aria-label="Diapositive suivante" aria-controls="carousel-track-video">›</button>
                        </div>
                    </div>
                </dialog>
            </div>
        </div>
    </section>

    <section class="contact" id="contact">
        <h2 class="section-title"><?= t('nav_contact') ?></h2>
        <div class="contact-container apparition-contact">
            <a href="https://www.instagram.com/melon.raw/" target="_blank" rel="noopener noreferrer" class="social-btn instagram-contact-btn" aria-label="Visiter mon profil Instagram">
            
                    <!-- merci claude le goat de m'avoir généré les paths -->

                <svg width="40" height="40" viewBox="0 0 24 24" fill="white">
                    <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
                </svg>
            </a>

            <a href="./dl-cv/cv-fr.pdf" download="CV Maël PRIORÉ.pdf" class="social-btn cv-fr-contact-btn" aria-label="Télécharger mon CV en français">
                <svg width="40" height="40" viewBox="0 0 24 24" fill="white">
                    <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20M10,19L12,15H9V10H15V15L13,19H10Z"/>
                </svg>
                <span class="cv-tooltip"><?= t('cv_download_fr') ?></span>
            </a>

            <div class="contact-content">
                <p class="contact-intro"><?= t('contact_intro') ?></p>
                
                <form id="contactForm" class="contact-form" method="POST" action="message.php">
                    <div class="form-group">
                        <label for="name"><?= t('contact_name') ?></label>
                        <input type="text" id="name" name="name" required autocomplete="name" aria-required="true">
                    </div>
                    
                    <div class="form-group">
                        <label for="email"><?= t('contact_email') ?></label>
                        <input type="email" id="email" name="email" required autocomplete="email" aria-required="true">
                    </div>
                    
                    <div class="form-group">
                        <label for="subject"><?= t('contact_subject') ?></label>
                        <input type="text" id="subject" name="subject" required aria-required="true">
                    </div>
                    
                    <div class="form-group">
                        <label for="message"><?= t('contact_message') ?></label>
                        <textarea id="message" name="message" rows="6" required aria-required="true"></textarea>
                    </div>
                    
                    <button type="submit" class="submit-btn">
                        <?= t('contact_send') ?>
                        <span class="star-1">
                            <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 784.11 815.53" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Layer_x0020_1_star1">
                                    <path class="fil0" d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"></path>
                                </g>
                            </svg>
                        </span>
                        <span class="star-2">
                            <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 784.11 815.53" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Layer_x0020_1_star2">
                                    <path class="fil0" d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"></path>
                                </g>
                            </svg>
                        </span>
                        <span class="star-3">
                            <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 784.11 815.53" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Layer_x0020_1_star3">
                                    <path class="fil0" d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"></path>
                                </g>
                            </svg>
                        </span>
                        <span class="star-4">
                            <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 784.11 815.53" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Layer_x0020_1_star4">
                                    <path class="fil0" d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"></path>
                                </g>
                            </svg>
                        </span>
                        <span class="star-5">
                            <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 784.11 815.53" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Layer_x0020_1_star5">
                                    <path class="fil0" d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"></path>
                                </g>
                            </svg>
                        </span>
                        <span class="star-6">
                            <svg xmlns="http://www.w3.org/2000/svg" xml:space="preserve" version="1.1" style="shape-rendering:geometricPrecision; text-rendering:geometricPrecision; image-rendering:optimizeQuality; fill-rule:evenodd; clip-rule:evenodd" viewBox="0 0 784.11 815.53" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Layer_x0020_1_star6">
                                    <path class="fil0" d="M392.05 0c-20.9,210.08 -184.06,378.41 -392.05,407.78 207.96,29.37 371.12,197.68 392.05,407.74 20.93,-210.06 184.09,-378.37 392.05,-407.74 -207.98,-29.38 -371.16,-197.69 -392.06,-407.78z"></path>
                                </g>
                            </svg>
                        </span>
                    </button>
                </form>
            </div>

            <a href="./dl-cv/cv-en.pdf" download="CV Maël PRIORÉ EN.pdf" class="social-btn cv-en-contact-btn" aria-label="Download my CV in English">
                <svg width="40" height="40" viewBox="0 0 24 24" fill="white">
                    <path d="M14,2H6A2,2 0 0,0 4,4V20A2,2 0 0,0 6,22H18A2,2 0 0,0 20,20V8L14,2M18,20H6V4H13V9H18V20M10,19L12,15H9V10H15V15L13,19H10Z"/>
                </svg>
                <span class="cv-tooltip"><?= t('cv_download_en') ?></span>
            </a>

            <a href="https://github.com/meuh-long" target="_blank" rel="noopener noreferrer" class="social-btn github-contact-btn" aria-label="Visiter mon profil GitHub">
                <svg width="40" height="40" viewBox="0 0 24 24" fill="white">
                    <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
                </svg>
            </a>
        </div>
    </section>

    </main>
    
    <script src="js/main.js"></script>
</body>

</html>
