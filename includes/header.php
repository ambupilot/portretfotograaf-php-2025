<?php
require_once __DIR__ . '/../classes/Page.php';
$page = $page ?? new Page('Portret Fotograaf', 'Professionele portretfotografie in regio Nijmegen.', '/images/og/home.webp');
?><!DOCTYPE html>
<html lang="nl">
<head>

<!-- Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-XXXXXXX-X"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-XXXXXXX-X');
</script>
<meta name="google-site-verification" content="VERIFICATIECODE_HIER" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($page->title) ?></title>
    <meta name="description" content="<?= htmlspecialchars($page->description) ?>">
    <meta property="og:title" content="<?= htmlspecialchars($page->title) ?>">
    <meta property="og:description" content="<?= htmlspecialchars($page->description) ?>">
    <meta property="og:image" content="<?= htmlspecialchars($page->ogImage) ?>">
    <link rel="stylesheet" href="/css/main.css">
</head>
<body class="bg-white text-gray-800">
<header class="p-4 bg-gray-100 shadow-md flex justify-between items-center">
    <div class="text-xl font-bold">Portret Fotograaf</div>
    <nav>
        <ul class="flex gap-4">
            <li><a href="/index.php" class="hover:underline">Home</a></li>
            <li><a href="/portret.php" class="hover:underline">Portret</a></li>
            <li><a href="/familie.php" class="hover:underline">Familie</a></li>
            <li><a href="/model.php" class="hover:underline">Model</a></li>
            <li><a href="/boudoir.php" class="hover:underline">Boudoir</a></li>
            <li><a href="/contact.php" class="hover:underline">Contact</a></li>
        </ul>
    </nav>
</header>
<main class="container mx-auto px-4 py-8">
