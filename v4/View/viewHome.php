<?php

    $this->title= "Mon site";

foreach($articles as $article) : ?>

    <article>
        <div class="mb-3">
            <a href="<?= 'index.php?action=article&id=' . $article['id'] ?>">
                <h2 class="art_title"> <?= $article['art_title'] ?> </h2>
            </a>
            <time> <?= $article['art_date'] ?> </time>
        </div>
        <div class="mt-3">
            <p> <?= $article['art_content'] ?> </p>
        </div>
    </article>

<?php endforeach;

