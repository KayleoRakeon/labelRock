<?php
    $root = '/ICAN/labelRock/';

    include "includes/head.inc.php";
    include "includes/menu.inc.php";
    include "includes/musique.inc.php";
?>

<main>

<?php
    include "includes/home.inc.php";
    include "includes/actu.inc.php";
    include "includes/artiste.inc.php";
    include "includes/histoire.inc.php";
    include "includes/contact.inc.php";
?>

</main>

<?php include "includes/footer.inc.php";?>

<!-- jQuery -->
<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>

<!-- Apparition Menu -->
<script src="js/menu.js"></script>
<!-- Slider section "Actualités" -->
<script src="js/slider.js"></script>
<!-- Réduction barre de musique au scroll -->
<script src="js/musique.js"></script>
<!-- Scroll début de page quand click sur logo -->
<script src="js/logoScroll.js"></script>

</body>
</html>