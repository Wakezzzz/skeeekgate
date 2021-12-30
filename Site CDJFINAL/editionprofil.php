<?php
session_start();
require_once('connect.php');

	if(isset($_SESSION['id'])) {
        $requser = $pdo->prepare("SELECT * FROM admin WHERE id = ?");
        $requser->execute(array($_SESSION['id']));
        $user = $requser->fetch();
    }
   if(isset($_POST['newpseudo']) AND !empty($_POST['newpseudo']) AND $_POST['newpseudo'] != $user['pseudo']) {
      $newpseudo = htmlspecialchars($_POST['newpseudo']);
      $insertpseudo = $pdo->prepare("UPDATE admin SET pseudo = ? WHERE id = ?");
      $insertpseudo->execute(array($newpseudo, $_SESSION['id']));
      header('Location: profil.php?id='.$_SESSION['id']);
   }
   if(isset($_POST['newmail']) AND !empty($_POST['newmail']) AND $_POST['newmail'] != $user['mail']) {
      $newmail = htmlspecialchars($_POST['newmail']);
      $insertmail = $pdo->prepare("UPDATE admin SET mail = ? WHERE id = ?");
      $insertmail->execute(array($newmail, $_SESSION['id']));
      header('Location: profil.php?id='.$_SESSION['id']);
   }
   if(isset($_POST['newnom']) AND !empty($_POST['newnom']) AND $_POST['newnom'] != $user['nom']) {
       $newnom = htmlspecialchars($_POST['newnom']);
       $insertnom = $pdo->prepare("UPDATE admin SET nom = ? WHERE id = ?");
       $insertnom->execute(array($newnom, $_SESSION['id']));
       header('Location: profil.php?id='.$_SESSION['id']);
   }
   if(isset($_POST['newmprenom']) AND !empty($_POST['newprenom']) AND $_POST['newprenom'] != $user['prenom']) {
    $newprenom = htmlspecialchars($_POST['newprenom']);
    $insertprenom = $pdo->prepare("UPDATE admin SET prenom = ? WHERE id = ?");
    $insertprenom->execute(array($newprenom, $_SESSION['id']));
    header('Location: profil.php?id='.$_SESSION['id']);
   }
   if(isset($_POST['newage']) AND !empty($_POST['newage']) AND $_POST['newage'] != $user['age']) {
    $newage = htmlspecialchars($_POST['newage']);
    $insertage = $pdo->prepare("UPDATE admin SET age = ? WHERE id = ?");
    $insertage->execute(array($newage, $_SESSION['id']));
    header('Location: profil.php?id='.$_SESSION['id']);
   }
   if(isset($_POST['newmdp1']) AND !empty($_POST['newmdp1']) AND isset($_POST['newmdp2']) AND !empty($_POST['newmdp2'])) {
      $mdp1 = sha1($_POST['newmdp1']);
      $mdp2 = sha1($_POST['newmdp2']);
      if($mdp1 == $mdp2) {
         $insertmdp = $pdo->prepare("UPDATE  SET motdepasse = ? WHERE id = ?");
         $insertmdp->execute(array($mdp1, $_SESSION['id']));
         header('Location: profil.php?id='.$_SESSION['id']);
      }else {
         $msg = "Vos deux mdp ne correspondent pas !";
      }
   }
?>
<html>
<?php
require_once('head.php');
?>
   <body>
   <?php include_once('header.php'); ?>
      <div>
         <h2>Edition de mon profil</h2>
         <div>
            <form method="POST" action="" enctype="multipart/form-data">
               <button class="butpseudo" onclick="lockpseudo()">Modifier</button><label>Pseudo :</label>
               <input type="text" name="newpseudo" class="newpseudo" disabled="disabled" placeholder="Pseudo" value="<?php echo $user['pseudo']; ?>" /><br /><br />

                <button class="butnom" onclick="locknom()">Modifier</button><label>Nom :</label>
                <input type="text" name="newnom" class="newnom" disabled="disabled" placeholder="Nom" value="<?php echo $user['nom']; ?>" /><br /><br />

               <button class="butprenom" onclick="lockprenom()">Modifier</button> <label>Prenom :</label>
                <input type="text" name="newprenom" class="newprenom" disabled="disabled" placeholder="Prenom" value="<?php echo $user['prenom']; ?>" /><br /><br />

                <button class="butage" onclick="lockage()">Modifier</button><label>Age :</label>
                <input type="text" name="newage" class="newage" disabled="disabled" placeholder="Age" value="<?php echo $user['age']; ?>" /><br /><br />

               <button class="butmail" onclick="lockmail()">Modifier</button><label>Mail :</label>
               <input type="text" name="newmail" class="newmail" disabled="disabled" placeholder="Mail" value="<?php echo $user['mail']; ?>" /><br /><br />

               <button class="butpass" onclick="lockpass()">Modifier</button><label>Mot de passe :</label>
               <input type="password" name="newmdp1" class="newmdp" disabled="disabled" placeholder="Mot de passe"/><br /><br />

               <label>Confirmation - mot de passe :</label>
               <input type="password" name="newmdp2" placeholder="Confirmation du mot de passe" /><br /><br />
               <input type="submit" value="Mettre à jour mon profil !" />
            </form>
            <?php if(isset($msg)) { echo $msg; } ?>
         </div>
      </div>

      <?php
      require_once ('footer.php');
      ?>

   <script src="script.js"></script>
   </body>

</html>
