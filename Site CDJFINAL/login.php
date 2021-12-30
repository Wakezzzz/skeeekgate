<?php
session_start();

require_once('connect.php');
?>

<html>
<?php
require_once('head.php');
?>
<body>

<?php include_once('header.php'); ?>

<div>
    <h2>Connexion</h2>
    <br /><br />
    <form method="POST" action="login_treatment.php">
        <input type="email" name="mailconnect" placeholder="Mail" />
        <input type="password" name="mdpconnect" placeholder="Mot de passe" />
        <br /><br />
        <input type="submit" name="formconnexion" value="Se connecter !" />
    </form>
    <?php
    if(isset($erreur)) {
        echo '<font color="red">'.$erreur."</font>";
    }
    ?>
</div>

<?php
require_once ('footer.php');
?>

</body>
</html>
