<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Guansing IT Solutions Tasks for Today Management System">
    <title><?= esc($title) ?> | Guansing IT Solutions</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>">
</head>
<body>
    <a class="skip-link" href="#main-content">Skip to main content</a>
    <header class="site-header">
        <div class="container nav-shell">
            <a class="brand" href="<?= base_url('/') ?>" aria-label="Guansing IT Solutions home">
                <span class="brand-mark" aria-hidden="true">GI</span>
                <span class="brand-copy">
                    <strong>Guansing IT Solutions</strong>
                    <small>Tasks for Today</small>
                </span>
            </a>

            <button class="nav-toggle" type="button" aria-expanded="false" aria-controls="primary-navigation">
                <span class="sr-only">Toggle navigation</span>
                <span></span><span></span><span></span>
            </button>

            <nav id="primary-navigation" class="primary-nav" aria-label="Primary navigation">
                <a class="<?= $activePage === 'welcome' ? 'is-active' : '' ?>" href="<?= base_url('/') ?>">Welcome</a>
                <a class="<?= $activePage === 'tasks' ? 'is-active' : '' ?>" href="<?= base_url('/tasks') ?>">Tasks</a>
                <a class="<?= $activePage === 'profile' ? 'is-active' : '' ?>" href="<?= base_url('/profile') ?>">Profile</a>
                <a class="<?= $activePage === 'about' ? 'is-active' : '' ?>" href="<?= base_url('/about') ?>">About</a>
            </nav>
        </div>
    </header>

    <main id="main-content">
