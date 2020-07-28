<?php

$titre = "Mon site - Administration";

ob_start(); ?>

<div class="container">

  <p>Bienvenue dans l'espace admin</p>

</div>

<?php 

$content = ob_get_clean();
require "template.php"; ?>
