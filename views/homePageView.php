<?php $title = "Facturator - Accueil" ?>
<?php $cssLink = "assets/css/homePage.css" ?>

<?php ob_start(); ?>

<h1>MVC php start package</h1>
<h2>Here is your first page !</h2>
<p>Refer to views/homePageView.php to update this first page.</p>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
