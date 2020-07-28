<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?= $title ?> </title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <a href="index.php"><h1 id="title">Mon Blog</h1></a>
        <p>Bienvenue sur mon Blog !</p>
    </header>

    <main>
        <div id="contenu">
            <?= $content ?>
        </div>
    </main>

    <footer>
        Blog réalisé par moi
    </footer>
</body>
</html>