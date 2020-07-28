<?php

$title = "Mon Site - " . $article["art_title"];

ob_start(); // on mets en cache la mémoire tampon ?>

<div class="container">

    <article id="article">
        <div class="mb-3">
            <a href="<?= 'article.php?id=' . $article['id'] ?>">
                <h2 class="art_title"> <?= $article['art_title'] ?> </h2>
            </a>
        </div>
        <div class="mt-3">
            <p> <?= $article['art_content'] ?> </p>
            <time> <?= $article['art_date'] ?> </time>
        </div>
        <hr>

    </article>

    <h3>Commentaires : </h3>

<?php

    if ($comments === null) {

        "<span> Pas de commentaires ici !</span>";

    } else {

        foreach($comments as $comment) : ?>

            <div id="com-content">
                <span>
                    <strong><?= $comment['com_author'] ?> dit : </strong>
                </span>
                <p> <?= $comment['com_content'] ?> </p>
                <time> <?= $comment['com_date'] ?> </time>
                <br>
            </div>

        <?php endforeach; 

    }

?>

<hr>

<div id="form-com">
    <form action="<?= 'article.php?id=' . $article['art_id'] ?>" method="post">

        <label for="author">Votre doux nom :</label><br>
        <input type="text" name="author" id="author">

        <br>

        <label for="comment">Votre petit commentaire :</label><br>
        <textarea type="text" name="comment" id="comment"></textarea>

        <br>
        <button type="submit"> go !</button>

    </form>

</div>

<hr>

</div>

<?php

$content = ob_get_clean(); // on vide la mémoire tampon
require "template.php"; 