<?php
$pageTitle = $pageTitle ?? 'HAXBEY SOFTWARE';
$bodyClass = $bodyClass ?? ''; // YENİ EKLENDİ
?>
<!DOCTYPE html>
<html lang="tr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, interactive-widget=resizes-content">
<title><?= htmlspecialchars($pageTitle) ?> — HAXBEY SOFTWARE</title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body class="<?= $bodyClass ?>"> <!-- BURAYI DEĞİŞTİRDİK -->

<header class="site-header">
  <a href="index.php" class="header-logo" title="Ana Sayfa" aria-label="Ana Sayfa">
    <img src="assets/png/header_logo.png" alt="HAXBEY SOFTWARE" class="header-logo-img">
  </a>
</header>

<main class="site-main">