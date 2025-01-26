<!-- Page qui renvoie les details d'un vélo -->
<?php foreach ($details as $details) { ?>
    <h2 class="smartbike-welcome"><?php echo $details['nom']; ?></h2>

    <section class="smartbike-description">
        <article class="smartbike-description-img">
            <img src="<?php echo $details['photo']; ?>" alt="<?php echo $details['contenu']; ?>">
        </article>
        <article class="smartbike-description-text">
            <p>Vélo mis en vente le : <?php echo $details['datepublication']; ?></p>
            <p>Prix : <?php echo $details['prix']; ?> €</p>
            <h3><?php echo $details['contenu']; ?></h3>
        </article>
    </section>
<?php } ?>