# php-mvc-start-package

This repository is a template of PHP MVC architecture.

<h2>How to use this template ?</h2>

<h3>model package: </h3>
</br>
The package <b>model</b> contains the logic of the application. <b>Manager.php</b> contains the connexion to the database.
Tou have to adapt the informations for the database connexion.</br>
You have to add the functions for the logic of you application in a new class, and make it extends <b>Manager.php</b> if you need a database connexion.
</br>

<h3>views package: </h3>
</br>
The package <b>views</b> contains all the views of the project. For each page of your project, create a new
file with a php extension, and respect the pattern you can find in <b>homePageView.php</b>.</br>
For each view you create, you can also create the associated CSS file and put it in assets/css directory.
</br>
