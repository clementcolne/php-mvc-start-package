<?php $title = "PHP MVC Template" ?>
<?php $cssLink = "assets/css/homePage.css" ?>

<?php ob_start(); ?>

<h1>MVC php start package</h1>
<h2>Here is your first page !</h2>
<p>Refer to views/homePageView.php to update this first page.</p>
<p style="margin-top: 30px">Created by <a href="https://clementcolne.com" target="_blank">Clément Colné</a>.</p>

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
