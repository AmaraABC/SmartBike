<h1 class="smartbike-welcome">Liste de nos vélos</h1>

<!-- Afficher tous les vélos disponibles du catalogue 'SmartBike' -->
<div class="smartbike-all-bikes">
    <?php foreach ($bikes as $bikes) { ?>
        <section class="smartbike-bike">
            <article class="smartbike-bike-img">
                <?php
                echo '<a href="/index.php?page=details&id_velo=' . $bikes['id_velo'] . '">
                    <img src="' . $bikes['photo'] . '" alt="' . $bikes['contenu'] . '" height="241.2890625" width="362.5">
                    </a>';
                ?>
            </article>
            <article class="smartbike-bike-text">
                <h3>
                    <?php echo $bikes['nom']; ?>
                </h3>
                <p>
                    <?php echo $bikes['prix']; ?> €
                </p>
            </article>
        </section>
        <hr class="smartbike-delimiter">
    <?php } ?>
</div>