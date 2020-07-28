<?php

$title = "Mon site - Connexion";

ob_start(); // on mets en cache la mémoire tampon ?>

<div class="container">
    <div class="form-log">

        <form action="<?= 'admin.php?action=connexion&logged=true' ?>" method="post">

            <label for="pseudo">Votre pseudo :</label><br>
            <input type="text" name="pseudo" id="pseudo">

            <br>

            <label for="password">Mot de passe :</label><br>
            <input type="password" name="password" id="password"></textarea>

            <br>
            <button type="submit"> go !</button>

        </form>

    </div>
</div>

<?php

$content = ob_get_clean(); // on vide la mémoire tampon
require "template.php"; 