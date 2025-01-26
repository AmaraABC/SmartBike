<h1 class="smartbike-welcome">Bienvenue sur le site officiel SmartBike !</h1>

<!-- Introduction à l'enseigne Smartbike -->
<section class="smartbike-infos">
    <article class="smartbike-infos-text">
        <h2>Smartbike, enseigne à l'écoute de nouvelles opportunutés permises par le vélo.</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum alias unde, deleniti impedit qui dolores voluptatum mollitia, ipsum adipisci id natus, repellendus inventore architecto nihil illo delectus commodi voluptatem facilis?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum alias unde, deleniti impedit qui dolores voluptatum mollitia, ipsum adipisci id natus, repellendus inventore architecto nihil illo delectus commodi voluptatem facilis?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum alias unde, deleniti impedit qui dolores voluptatum mollitia, ipsum adipisci id natus, repellendus inventore architecto nihil illo delectus commodi voluptatem facilis?</p>
    </article>
    <article class="smartbike-infos-img">
        <img src="/View/image/boy-6398465_640.jpg" alt="A boy in a forest riding a bike" width="362.5" height="580">
    </article>
</section>

<hr class="smartbike-delimiter">

<!-- Affichage du vélo ajouté le plus récemment au catalogue -->
<section class="smartbike-recent-release">
    <?php foreach ($homepage as $homepages) { ?>
        <h2 class="smartbike-recent-release-name">
            Voici notre nouveau produit :<br>
            <?php echo $homepages['nom']; ?>
        </h2>
        <article class="smartbike-recent-release-img">
            <img src="<?php echo $homepages['photo']; ?>" alt="<?php echo $homepages['contenu'] ?>" height="241.2890625" width="362.5">
        </article>
        <article class="smartbike-flagship-text">
            <p><?php echo $homepages['contenu']; ?></p>
        </article>
    <?php } ?>
</section>