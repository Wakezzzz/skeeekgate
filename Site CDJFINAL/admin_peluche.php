<?php
session_start();
require_once('connect.php');
$pelucheadd = $pdo->query("SELECT * FROM peluche ORDER BY id_peluche ASC");

/* FONCTION INSERTION NOUVEAU CLIENT DANS LA TABLE mtn_caps */
if(isset($_POST{'ajout_peluche'}))
{
//initialisation variables de POST
$marque = htmlspecialchars($_POST['marque_peluche']);
$nom  = htmlspecialchars($_POST['nom_peluche']);
//initialisation variables de récup de données image
$image_name = htmlspecialchars($_FILES['image_peluche']['name']);
$imagefolder  = "images/peluche/";
$image_tmp  = $_FILES['image_peluche']['tmp_name'];

$texte  = htmlspecialchars($_POST['texte_peluche']);
$prix  = htmlspecialchars($_POST['prix_peluche']);

    if( !empty($_POST['nom_peluche'])
             AND !empty($_POST['marque_peluche'])
                    AND !empty($_FILES['image_peluche'])
                        AND !empty($_POST['texte_peluche'])
                            AND !empty($_POST['prix_peluche']))
    {

//concaténation données image + fonction pour transférer image
move_uploaded_file($image_tmp, $imagefolder.$image_name);
$image = "$imagefolder$image_name";
//requette d'insertion
$requete = $pdo->prepare("INSERT INTO peluche (nom_peluche, marque_peluche, image_peluche, texte_peluche, 
                                prix_peluche) VALUES (?, ?, ?, ?, ?)");
$requete->execute(array($nom, $marque, $image, $texte, $prix));
                    $erreur =  "nouveau produit créé ! ";


    }else{
        $erreur = "Tous les champs doivent être complétés !";
    }
}

?>

<!doctype html>
  <html lang="fr">

        <?php
        include_once('head.php');
        ?>


<body>

<?php include_once('header.php'); ?>

<div class="container" id="container-admin">
<br><br>
<div class=""><!--formulaire ajout-->
                    <h5>Ajout peluche</h5>
                    <br>
                    <h4><?php if(isset($erreur)){echo '<font color="red">'.$erreur."</font>";} ?></h4>
                        <form  method="POST" action="" enctype="multipart/form-data"> <!--FORMULAIRE-->
                            <div class="">
                                <div class="">
                                    <label for="">nom produit :</label>
                                        <input type="text"  value="" class="form-control" id="input-admin" name="nom_peluche">
                                        <br> </div>
                                <div class="col-md-4">
                                    <label for="">Marque Produit :</label>
                                        <input type="text" placeholder="Marque Produit" class="form-control" id="input-admin" name="marque_peluche">
                                        <br></div>
                                <div class="col-md-4">
                                    <label for="">Image Produit:</label>
                                    <input type="file" accept="image/png, image/jpeg, image/jpg" class="form-control" id="input-admin" name="image_peluche">
                                    <br></div>
                                <div class="col-md-4">
                                    <label for="">Texte Produit :</label>
                                        <textarea rows="2" placeholder="Texte Produit" class="form-control" id="input-admin" name="texte_peluche"></textarea>
                                        <br></div>
                                <div class="col-md-4">
                                    <label for="">Prix produit :</label><br>
                                    <input type="text" placeholder="prix produit" class="form-control" id="input-admin" name="prix_peluche">
                                    <br></div>
                                <div class="col-md-4">
                                    <br>
                                        <input type="submit" class="btn btn-primary" name="ajout_peluche" id="btn-input" >
                            <br></div>
                        </form>
                </div><!--fin formulaire-->
<br><br><br>
        <div class="" id="">
            <h2><i class="fas fa-battery-empty">&nbsp;&nbsp;</i>peluche a remplir</h2>
                <div >
                    <div id="table-pdt-entretien">
                        <table width="100%" class="" id="admin-entretien">
                            <thead>
                            <th>id</th>
                            <th>nom</th>
                            <th>marque</th>
                            <th>prix</th>
                            <th>gestion</th>
                            <th>modifier</th>
                            <th>supprimer</th>
                            </thead>
                            <tbody>
                                <?php  while($pa =$pelucheadd->fetch()) {?>
                                <tr>
                                <td><?php echo $pa ['id_peluche'] ?></td>
                                <td><?php echo $pa ['marque_peluche'] ?></td>
                                <td><?php echo $pa ['nom_peluche'] ?></td>
                                <td><?php echo $pa ['prix_peluche'] ?></td>
                                <!--<td><a href="admin-marqueur-vide-gestion.php?id_marqueur_vide=<?php //echo $fa ['id_peluche'] ?>"><i class="fas fa-tags"></i>&nbsp;gérer</a></td>
                                <td><a href="admin-marqueur-vide-modif.php?id_marqueur_vide=<?php //echo $fa ['id_peluche'] ?>"><i class="fas fa-edit"></i>&nbsp;modifier</a></td>
                                <td><a href="admin-marqueur-vide-supprime.php?id_marqueur_vide=<?php //echo $fa ['id_peluche'] ?>"><i class="fas fa-trash-alt"></i>&nbsp;supprimer</a></td>-->
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
                    </div>
                </div>

            <br><hr/><br>
                



              </div>
</div>              <br><br><br>

<?php
require_once ('footer.php');
?>

<!--SCRIPT--->

<!--/SCRIPT--->
</body>
</html>

