<?php
session_start();
require_once('connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<?php
require_once('head.php');
?>
    <body>
    <?php include_once('header.php'); ?>

        <main class="l-main">
            <!--===== HOME =====-->
            <section class="home" id="home">
                <div class="home__container bd-grid">
                    <div class="home__data">
                        <h1 class="home__title">Arrivage <br><span>Exceptionnel</span></h1>
                        <a href="#featured" class="button">Voir produits</a>
                    </div>
                    <img src="assets/img/012.png" alt="" class="home__img">
                </div>
            </section>

            <!--===== COLLECTION =====-->
            <section class="collection section">
                <div class="collection__container bd-grid">

                    <div class="collection__box">
                        <img src="assets/img/figurinegeek.png" alt="" class="collection__img">

                        <div class="collection__data">
                            <h2 class="collection__title"><span class="collection__subtitle">Figurines</span><br></h2>
                            <a href="Figurines.php" class="collection__view">Voir collection</a>
                        </div>
                    </div>

                    <div class="collection__box">
                        <img src="assets/img/171433_33.png" alt="" class="collection__img">

                        <div class="collection__data">
                            <h2 class="collection__title"><span class="collection__subtitle">Peluche</span><br></h2>
                            <a href="#" class="collection__view">Voir collection</a>
                        </div>
                    </div>

                    <div class="collection__box">
                        <img src="assets/img/vetement.png" alt="" class="collection__img">

                        <div class="collection__data">
                            <h2 class="collection__title"><span class="collection__subtitle">Vetement</span><br></h2>
                            <a href="#" class="collection__view">Voir collection</a>
                        </div>
                    </div>

                    <div class="collection__box">
                        <img src="assets/img/goodiesgeek.png" alt="" class="collection__img">

                        <div class="collection__data">
                            <h2 class="collection__title"><span class="collection__subtitle">Goodies</span><br></h2>
                            <a href="#" class="collection__view">Voir collection</a>
                        </div>
                    </div>

                </div>
            </section>

            <!--===== FEATURED PRODUCTS =====-->
            <section class="featured section" id="featured">
                <h2 class="section-title">Nos meilleurs vente</h2>
                <a href="#" class="section-all">Tout voir</a>

                <div class="featured__container bd-grid">
                    <div class="featured__product">
                        <div class="featured__box">
                            <div class="featured__new">nouveaute</div>
                            <img src="assets/img/012.png" alt="" class="featured__img">
                        </div>

                        <div class="featured__data">
                            <h3 class="featured__name">Exodia Necross</h3>
                            <span class="featured__preci">899€</span>
                        </div>
                    </div>

                    <div class="featured__product">
                        <div class="featured__box">
                            <div class="featured__new">nouveaute</div>
                            <img src="assets/img/5art.png" alt="" class="featured__img">
                        </div>

                        <div class="featured__data">
                            <h3 class="featured__name">Figurine</h3>
                            <span class="featured__preci">500€</span>
                        </div>
                    </div>

                    <div class="featured__product">
                        <div class="featured__box">
                            <div class="featured__new">nouveaute</div>
                            <img src="assets/img/4art.png" alt="" class="featured__img">
                        </div>

                        <div class="featured__data">
                            <h3 class="featured__name">Figurine</h3>
                            <span class="featured__preci">500€</span>
                        </div>
                    </div>

                    <div class="featured__product">
                        <div class="featured__box">
                            <div class="featured__new">nouveaute</div>
                            <img src="assets/img/3art.png" alt="" class="featured__img">
                        </div>

                        <div class="featured__data">
                            <h3 class="featured__name">Figurine</h3>
                            <span class="featured__preci">500€</span>
                        </div>
                    </div>


                </div>
            </section>

            <!--===== OFFER =====-->
            <section class="offer section">
                <div class="offer__bg">
                    <div class="offer__data">
                        <h2 class="offer__title">Offre Special</h2>
                        <p id="offre" class="offer__description">Pour une figurine POP acheter , la deuxieme a -50% !!!</p>

                        <!--<a href="#" class="button">SHOP NOW</a>-->
                    </div>
                </div>

            </section>

            <!--===== NEW ARRIVALS =====-->
            <section class="new section" id="new">
                <h2 class="section-title">Nouveaux Arrivages</h2>
                <a class="section-all">Nos 6 Derniers Arrivages</a>

                <div class="new__container bd-grid">
                    <div class="new__box">
                        <img src="assets/img/Exodia.png" alt="" class="new__img">
                        <!--<div class="new__link">
                            <a href="#" class="button">VOIR PRODUIT</a>
                        </div>-->
                    </div>

                    <div class="new__box">
                        <img src="assets/img/107622_022.png" alt="" class="new__img">
                        <div class="new__link">
                            <a href="#" class="button">VOIR PRODUIT</a>
                        </div>
                    </div>

                    <div class="new__box">
                        <img src="assets/img/3art.png" alt="" class="new__img">
                        <div class="new__link">
                            <a href="#" class="button">VOIR PRODUIT</a>
                        </div>
                    </div>

                    <div class="new__box">
                        <img src="assets/img/4art.png" alt="" class="new__img">
                        <div class="new__link">
                            <a href="#" class="button">VOIR PRODUIT</a>
                        </div>
                    </div>

                    <div class="new__box">
                        <img src="assets/img/5art.png" alt="" class="new__img">
                        <div class="new__link">
                            <a href="#" class="button">VOIR PRODUIT</a>
                        </div>
                    </div>

                    <div class="new__box">
                        <img src="assets/img/102.png" alt="" class="new__img">
                        <div class="new__link">
                            <a href="#" class="button">VOIR PRODUIT</a>
                        </div>
                    </div>
                </div>
            </section>
        </main>

            <!--===== NEWSLETTER =====-->
            <!--<section class="newsletter section" id="suscribed">
                <div class="newsletter__container bd-grid">
                    <div class="newsletter__suscribe">
                        <h2 class="section-title">NOTRE NEWSLETTER</h2>
                        <p class="newsletter__description">recevez directement nos promotions et nouveaux produits </p>

                        <form action="" class="newsletter__form">
                            <input type="text" class="newsletter__input" placeholder="Enter your email.">
                            <a href="#" class="button">S'ABONNER</a>
                        </form>
                    </div>
                </div>
            </section>-->


            <!--===== SPONSORS =====-->
            <!--<section class="sponsors section">
                <div class="sponsors__container bd-grid">
                    <div class="sponsor__logo">
                        <img src="assets/img/" alt="">
                    </div>

                    <div class="sponsor__logo">
                        <img src="assets/img/" alt="">
                    </div>

                    <div class="sponsor__logo">
                        <img src="assets/img/" alt="">
                    </div>

                    <div class="sponsor__logo">
                        <img src="assets/img/" alt="">
                    </div>

                </div>
            </section>
        </main>-->

        <?php
        require_once ('footer.php');
        ?>

        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>

    </body>
</html>
