<?php
    $root = '/ICAN/gestionProjet/';

    include "includes/head.inc.php";
    include "includes/menu.inc.php";
?>

<main>

<?php
    include "includes/musique.inc.php";
    include "includes/home.inc.php";
    include "includes/actu.inc.php";
    include "includes/artiste.inc.php";
    include "includes/histoire.inc.php";
    include "includes/contact.inc.php";
?>

</main>

<?php include "includes/footer.inc.php";?>

<script
  src="https://code.jquery.com/jquery-3.6.0.js"
  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
  crossorigin="anonymous"></script>
<script src="js/menu.js"></script>

</body>
</html>