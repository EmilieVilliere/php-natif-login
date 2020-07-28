<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Site</title>

    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <a href="index.php"><h1 id="title">Mon Blog</h1></a>
        <p>Bienvenue sur mon Blog !</p>
    </header>

    <main>
        <?php 
        // Objet de connexion à la bdd
        $bdd = new PDO('mysql:host=localhost;dbname=monsite;charset=utf8', '', '');
        // On récupère les articles 
        $articles = $bdd->query('SELECT * FROM articles');

        foreach($articles as $article) : ?>

            <article>
                <div class="mb-3">
                    <h2 class="art_title"> <?= $article['art_title'] ?> </h2>
                    <time> <?= $article['art_date'] ?> </time>
                </div>
                <div class="mt-3">
                    <p> <?= $article['art_contenu'] ?> </p>
                </div>
            </article>

        <?php endforeach; ?>

    </main>

    <footer>
        Blog réalisé par moi
    </footer>
</body>
</html>