<?php
$titre = "The ArtBox, galerie d'art contemporain";
require_once(__DIR__ . '/oeuvres.php');
require_once(__DIR__ . '/header.php');
?>

<main>
    <div id="liste-oeuvres">
        <?php foreach ($listeOeuvres as $oeuvre) : ?>
            <article class="oeuvre">
                <a href="oeuvre-info.php?id=<?php echo $oeuvre['id']; ?>">
                    <img src="img/<?php echo $oeuvre['img']; ?>" alt="<?php echo $oeuvre['alt']; ?>">
                    <h2><?php echo $oeuvre['titre']; ?></h2>
                    <p class="description"><?php echo $oeuvre['auteur']; ?></p>
                </a>
            </article>
        <?php endforeach; ?>


    </div>
</main>
<?php require_once(__DIR__ . '/footer.php'); ?>