<?php
session_start();

$pdo = new PDO('mysql:host=127.0.0.1;dbname=skeekgate', 'root', '');
?>

<!doctype html>
<html lang="en">
<?php
require_once('head.php');
?>
<body>

<?php include_once('header.php'); ?>

<!--===== FEATURED PRODUCTS =====-->
<main>
      <section class="featured section" id="featured">
          <h2 class="section-title">Nos Peluche</h2>
          <a href="#" class="section-all">Tout voir</a>

          <div class="featured__container bd-grid">
              <?php
              $Host = "127.0.0.1";
              $uname = "root";
              $pwd = "";
              $db_name = "skeekgate";

              $file_path = 'photo/';
              $result = mysqli_connect($Host, $uname, $pwd) or die("Could not connect to database." . mysqli_error());
              mysqli_select_db($result, $db_name) or die("Could not select the databse." . mysqli_error());
              $image_query = mysqli_query($result, "select nom_peluche,image_peluche,prix_peluche from peluche");
              while ($rows = mysqli_fetch_array($image_query))
              {
                  $img_name = $rows['nom_peluche'];
                  $img_src = $rows['image_peluche'];
                  $img_prx = $rows['prix_peluche']
                  ?>
              <div class="featured__product">
                  <div class="featured__box">
                      <div class="featured__new">nouveaute</div>
                      <img src="<?php echo $img_src; ?>" alt="" title="<?php echo $img_name; ?>" class="featured__img">
                  </div>

                  <div class="featured__data">
                      <h3 class="featured__name"><?php echo $img_name; ?></h3>
                      <span class="featured__preci"><?php echo $img_prx;?>€</span>
                  </div>
              </div>

              <?php
              }
              ?>

          </div>

      </section>
    peluche

<?php
require_once ('footer.php');
?>

<!--===== MAIN JS =====-->
<script src="assets/js/main.js"></script>

</body>
</html>
