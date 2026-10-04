<!-- about.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MyPOS | About</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body class="aboutPage">
    <header class="navbar">
        <a href="<?= base_url('/') ?>" class="navbarBrand">
            My<span>POS</span>
        </a>

        <nav class="navbarLinks">
            <a href="<?= base_url('/') ?>">Home</a>
            <a href="<?= base_url('/about') ?>" class="active">About</a>
            <a href="<?= base_url('/customers') ?>">Customer Accounts</a>
            <a href="<?= base_url('/users') ?>">User Accounts</a>
        </nav>
    </header>

    <main class="aboutMain">
        <div class="aboutContainer">
            <div class="aboutContent">
                <p class="aboutLabel">— &nbsp; ABOUT</p>

                <h1 class="aboutTitle">
                    About My<span>POS</span>
                </h1>

                <p class="aboutSubtitle">
                    A simple solution for everyday business.
                </p>

                <p class="aboutDescription">
                    MyPOS is a basic point-of-sale system designed to<br>
                    help businesses manage customers, users, and daily<br>
                    transactions with ease. This project is built as a<br>
                    laboratory activity for educational purposes, using<br>
                    CodeIgniter 4 and static data.
                </p>

                <div class="aboutFeatures">
                    <div class="aboutFeature">
                        <div class="aboutFeatureIcon">⚡</div>
                        <h3>Simple</h3>
                        <p>Clean and easy<br>to use.</p>
                    </div>

                    <div class="aboutFeature">
                        <div class="aboutFeatureIcon">◆</div>
                        <h3>Organized</h3>
                        <p>Keep important<br>records in one place.</p>
                    </div>

                    <div class="aboutFeature">
                        <div class="aboutFeatureIcon">✓</div>
                        <h3>Reliable</h3>
                        <p>Built for your<br>daily needs.</p>
                    </div>
                </div>
            </div>

            <div class="aboutRight">
                <div class="aboutCard">
                    <div class="aboutCardLogo">
                        <img src="<?= base_url('assets/images/G_logo.png') ?>" alt="MyPOS Logo">
                    </div>

                    <h2 class="aboutCardTitle">
                        My<span>POS</span>
                    </h2>

                    <div class="aboutCardLine"></div>

                    <p class="aboutCardTagline">
                        SIMPLE SALES.<br>
                        STRONGER BUSINESS.
                    </p>

                    <div class="aboutInformation">
                        <div class="aboutInformationRow">
                            <span class="aboutInformationLabel">Developer</span>
                            <span class="aboutInformationValue">Hurris Guansong</span>
                        </div>

                        <div class="aboutInformationRow">
                            <span class="aboutInformationLabel">Section</span>
                            <span class="aboutInformationValue">TC32</span>
                        </div>

                        <div class="aboutInformationRow">
                            <span class="aboutInformationLabel">Program</span>
                            <span class="aboutInformationValue">BSITCST</span>
                        </div>
                    </div>
                </div>

                <div class="aboutFooter">
                    <span>Hurris Guansong</span>
                    <span>|</span>
                    <span>TC32</span>
                    <span>|</span>
                    <span>BSITCST</span>
                </div>
            </div>
        </div>
    </main>
</body>
</html>