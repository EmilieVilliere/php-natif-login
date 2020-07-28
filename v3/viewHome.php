<?php
$title= "Mon site";

ob_start(); // Démarre la mémoire tampon

foreach($articles as $article) : ?>

    <article>
        <div class="mb-3">
            <a href="<?= 'article.php?id=' . $article['id'] ?>">
                <h2 class="art_title"> <?= $article['art_title'] ?> </h2>
            </a>
            <time> <?= $article['art_date'] ?> </time>
        </div>
        <div class="mt-3">
            <p> <?= $article['art_content'] ?> </p>
        </div>
    </article>

<?php endforeach;

$content = ob_get_clean(); // On recupère le contenu de la mémoire tampon dans une variable

require "template.php"; ?>
