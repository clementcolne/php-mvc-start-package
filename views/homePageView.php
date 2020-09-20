<!-- Title of the page -->
<?php $title = "PHP MVC Template" ?>
<!-- Path of the CSS for this page -->
<?php $cssLink = "assets/css/homePage.css" ?>

<?php ob_start(); ?>

<!-- Start of your code, remove following code -->
<h1 class="title">MVC php start package</h1>
<h2 class="mt-30">Here is your first page !</h2>
<p class="mt-30">Refer to views/homePageView.php to update this first page.</p>
<p class="mt-30">Created by <a href="https://clementcolne.com" target="_blank">Clément Colné</a>.</p>
<!-- End of your code -->

<?php $content = ob_get_clean(); ?>

<?php require('template.php'); ?>
