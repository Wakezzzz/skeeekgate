<?php
session_start();
require_once('connect.php');

if(isset($_GET['id']) AND $_GET['id'] > 0) {
    $getid = intval($_GET['id']);
    $requser = $pdo->prepare('SELECT * FROM admin WHERE id = ?');
    $requser->execute(array($getid));
    $userinfo = $requser->fetch();
    ?>
        <!doctype html>
    <html>
    <?php
    require_once('head.php');
    ?>
    <body>

    <?php include_once('header.php'); ?>

    <div align="center">
        <h2>Profil de <?php echo $userinfo['pseudo']; ?></h2>
        <br /><br />
        Pseudo = <?php echo $userinfo['pseudo']; ?>
        <br />
        Nom = <?php echo $userinfo['nom']; ?>
        <br />
        Prenom = <?php echo $userinfo['prenom']; ?>
        <br />
        Age = <?php echo $userinfo['age']; ?>
        <br />
        Mail = <?php echo $userinfo['mail']; ?>
        <br />
        <?php
        if(isset($_SESSION['id']) AND $userinfo['id'] == $_SESSION['id']) {
            ?>
            <br />
            <a href="editionprofil.php">Editer mon profil</a>
            <a href="deconnexion.php">Se déconnecter</a>
            <?php
        }
        ?>
    </div>
    <?php
    require_once ('footer.php');
    ?>
    </body>
    </html>
    <?php
}
?>
