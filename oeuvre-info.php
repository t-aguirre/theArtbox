    <?php
    require_once(__DIR__ . '/oeuvres.php');

    // Récupération de l'id depuis l'url
    $id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
    // Initialisation de la variable correspondant aux informations de chaque article 
    $articleOeuvre = null;
    // Initialisation de la variable correspondant à la balise titre du head
    $titreHead = 'Sans titre';

    foreach ($listeOeuvres as $oeuvreInfo) {
        if ($oeuvreInfo['id'] === $id) {
            $articleOeuvre = $oeuvreInfo;
            $titreHead = $oeuvreInfo['titre'];
            break;
        }
    }

    require_once(__DIR__ . '/header.php');

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
    ?>
    <main>

        <article id="detail-oeuvre">
            <div id="img-oeuvre">
                <img src="img/<?php echo $articleOeuvre['img']; ?>" alt="<?php echo $articleOeuvre['alt']; ?>">
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