<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox, galerie d'art contemporain</title>
</head>

<body>
    <?php
    require_once(__DIR__ . '/oeuvres.php');

    $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
    $articleOeuvre = null;

    foreach ($listeOeuvres as $oeuvreInfo) {
        if ($oeuvreInfo['id'] === $id) {
            $articleOeuvre = $oeuvreInfo;
            break;
        }
    }

    if ($articleOeuvre === null) {
        echo "
                <div class='conteneur-message'>
                    <p class='titre-bienvenue'>Vous êtes les bienvenus</p>
                    <p class='titre-message'>
                        à notre galerie The Artbox pour contempler nos oeuvres dans tous leurs détails.
                    </p>
                    <p class='sous-titre-message'>Nous serons ravis de vous fournir tout type d'information sur les oeuvres et le travail des artistes.</p>
                    <div class='lien-message'><a href='index.php' rel='noopener noreferrer'>Retour à l'accueil</a></div>
                </div>";
        exit;
    }
    require_once(__DIR__ . '/header.php');
    ?>
    <main>

        <article id="detail-oeuvre">
            <div id="img-oeuvre">
                <img src="<?php echo $articleOeuvre['img']; ?>" alt="<?php echo $articleOeuvre['alt']; ?>">
            </div>
            <div id="contenu-oeuvre">
                <h1><?php echo $articleOeuvre['titre']; ?></h1>
                <p class="description"><?php echo $articleOeuvre['auteur']; ?></p>
                <p class="description-complete">
                    <?php echo $articleOeuvre['description']; ?>
                </p>
            </div>
        </article>

    </main>
    <?php require_once(__DIR__ . '/footer.php'); ?>
</body>

</html>