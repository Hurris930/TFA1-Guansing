<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MyPOS | Home</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
</head>
<body class="homePage">
    <header class="navbar">
        <a href="<?= base_url('/') ?>" class="navbarBrand">
            My<span>POS</span>
        </a>

        <nav class="navbarLinks">
            <a href="<?= base_url('/') ?>" class="active">Home</a>
            <a href="<?= base_url('/about') ?>">About</a>
            <a href="<?= base_url('/customers') ?>">Customer Accounts</a>
            <a href="<?= base_url('/users') ?>">User Accounts</a>
        </nav>
    </header>

    <main class="homeMain">
        <div class="homeContainer">
            <div class="homeLogo">
                <img src="<?= base_url('assets/images/G_logo.png') ?>" alt="MyPOS Logo">
            </div>

            <h1 class="homeTitle">
                My<span>POS</span>
            </h1>

            <p class="homeTagline">
                SIMPLE SALES. STRONGER BUSINESS.
            </p>

            <p class="homeDescription">
                A simple and efficient point-of-sale system to help<br>
                you manage customers, users, and daily transactions<br>
                — all in one place.
            </p>

            <a href="<?= base_url('/customers') ?>" class="homeButton">
                Get Started
                <span>→</span>
            </a>

            <div class="homeFeatures">
                <div class="homeFeature">
                    <div class="homeFeatureIcon">⚡</div>
                    <p>Easy to Use</p>
                </div>

                <div class="homeFeature">
                    <div class="homeFeatureIcon">◆</div>
                    <p>Organized</p>
                </div>

                <div class="homeFeature">
                    <div class="homeFeatureIcon">✓</div>
                    <p>Reliable</p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>