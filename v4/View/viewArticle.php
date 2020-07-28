<?php

    $this->title = "Mon Site - " . $article["art_title"];

?>

<div class="container">

    <article id="article">
        <div class="mb-3">
            <!-- <a href="<?= 'article.php?id=' . $article['id'] ?>"> -->
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

?>

<hr>

<div id="form-com">
    <form action="<?= 'index.php?action=article&id=' . $article['id'] ?>" method="post">

        <label for="com_author">Votre doux nom :</label><br>
        <input type="text" name="com_author" id="com_author">

        <br>

        <label for="com_content">Votre petit commentaire :</label><br>
        <textarea type="text" name="com_content" id="com_content"></textarea>

        <br>
        <button type="submit"> go !</button>

    </form>

</div>

<hr>

</div>

