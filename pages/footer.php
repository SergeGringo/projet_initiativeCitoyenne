<?php

?>

<footer>
    <div class="blue">
        <div class="abonnez">
            <h1>Abonnez-vous à notre newsletter pour rester informer</h1>
            <form action="" style="display: flex; align-items: center;">
                <input type="email" name="mail" placeholder="Email" required>
                <button type="submit">S'abonner</button>
            </form>
        </div>
        <div class="copy">
            <p><i class="fa-regular fa-copyright"></i>2024 Initiative citoyenne tout droits réservés.</p>
            <ul>
                <li><a href="index.php">accueil</a></li>
                <li><a href="candidats.php">candidat</a></li>
                <li><a href="resultat.php">résultat</a></li>
            </ul>
        </div>
    </div>
</footer>
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../slide/slick.js"></script>
<script src="../js/main.js"></script>
<!-- SCRIPT DU SLIDE -->
<script>
    $(document).ready(function () {
        $(".contenu_slide").slick({
            slidesToShow: 4, // Nombre de cartes à afficher
            slidesToScroll: 2, // Nombre de cartes à faire défiler
            autoplay: true, // Activer le défilement automatique
            autoplaySpeed: 2000, // Vitesse du défilement automatique
            dots: false, // Afficher les points de navigation
            arrows: false, // Afficher les flèches de navigation
        });
    });

</script>
<script>
    // $(document).ready(function () {
    //     $('.items_slide').slick({
    //         slidesToShow: 3, // Nombre de cartes visibles
    //         slidesToScroll: 3, // Nombre de cartes à défiler à la fois
    //         autoplay: false, // Défilement automatique
    //         autoplaySpeed: 5000, // Vitesse du défilement automatique
    //         dots: false, // Afficher les points de navigation
    //         infinite: true, // Boucle infinie
    //         arrows: false, // Afficher les flèches de navigation
    //     });
    // });
</script>
</body>

</html>