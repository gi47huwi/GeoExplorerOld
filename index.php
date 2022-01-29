<?php
    include_once 'header.php';
?>

<h2> Please log in <h2>
<form action="includes/signup.inc.php" method="post">
    <input type="text" name = "vorname" placeholder="Vorname"><br>
    <input type="text" name = "nachname" placeholder="Nachname"><br>
    <input type="email" name = "e-mail" placeholder="E-Mail Adresse"><br>
    <input type="password" name = "pwd" placeholder="Passwort"><br>
    <button type="submit" name="login">Log In </button>
</form>


<?php
include_once 'footer.php';
?>