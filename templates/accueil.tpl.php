<!-- Main -->
<main id="accueil">
    <!-- Nouveautés -->
    <section id="section-livres">
        <form action="index.php" method="GET">
            <h2><?php echo _("Nouveautés"); ?> <a href="livres/?etat=nouveautes" class="btn btn-vert tout-afficher"><?php echo _("Tout afficher >"); ?></a></h2>
            <?php foreach ($this->livre as $arrLivre):?>
                <div class="un-livre">
                    <div> <a class="egalisateur" href="livres/fiche/?isbn=<?php echo $arrLivre['isbn']; ?>"> <img src="images/couvertures/<?php echo 'L'.ISBNtoEAN($arrLivre['isbn']).'1.jpg'; ?>" alt="Couverture du livre <?php reecritureTitre($arrLivre['titre_livre']); ?>" /></a> </div>
                    <p class="prix">
                        <?php echo money_format('%.2n', $arrLivre['prix']); ?>
                    </p>
                    <a href="livres/fiche/?isbn=<?php echo $arrLivre['isbn']; ?>">
                        <?php echo reecritureTitre($arrLivre['titre_livre']); ?>
                    </a>
                    <ul class="auteurs">
                        <?php foreach ($arrLivre["nom_auteur"] as $auteur): ?>
                            <li>
                                <?php echo reordonnerNom($auteur["nom_auteur"]); ?>
                            </li>
                            <?php endforeach; ?>
                    </ul>
                    <p>
                        <button class="btn btn-orange ajout" type="submit" name="isbn" value="<?php echo $arrLivre['isbn']; ?>">
                            <p>
                                <?php echo _("Ajouter au panier"); ?> <span class="icone-panier panier-blanc" href="#">
                                    <?php echo _("Panier"); ?>
                                </span> </p>
                        </button>
                    </p>
                </div>
                <?php endforeach; ?>
        </form>
    </section>
    <!-- Actualités littéraires -->
    <section id="section-actualites">
        <h2><?php echo _("Actualités littéraires"); ?> <a class="btn btn-vert tout-afficher"><?php echo _("Tout afficher >"); ?></a></h2>
        <div class="actualite"> <a class="no-underline" href="#"><h3><?php echo _("La dernière grande fête nationale?"); ?></h3></a>
            <p class="date">
                <?php echo _("par Sophie Imbeault, 2 septembre 2016"); ?>
            </p>
            <a class="hvr-sweep-to-right" href="#"> <span><?php echo _("Lire l'article >"); ?></span>
                <div class="barre"></div>
                <div class="img-auteur sophie"></div>
            </a>
            <p>
                <?php echo _("Nous constatons que la Fête nationale du Québec telle que nous l’avons connue est en péril : des coupes de 20 % infligées au budget d’organisation des célébrations par le gouvernement du Québec font craindre qu’on assiste en 2016 à la toute dernière GRANDE Fête nationale digne de ce nom."); ?>
            </p> <a href="#"><?php echo _("Lire la suite >"); ?></a> </div>
        <div class="actualite"> <a class="no-underline" href="#"><h3><?php echo _("Appels de projets en arts littéraires"); ?></h3></a>
            <p class="date">par Jacques Bélanger, 9 septembre 2016</p>
            <a class="hvr-sweep-to-right" href="#"> <span><?php echo _("Lire l'article >"); ?></span>
                <div class="barre"></div>
                <div class="img-auteur jacques"></div>
            </a>
            <p>
                <?php echo _("Dans le cadre de la mesure Première Ovation en arts littéraires, L’Institut Canadien de Québec lance trois appels de projets. Tant pour les artistes que pour les organismes, la date limite pour soumettre une demande au programme de mentorat et au Fonds de soutien aux initiatives de la relève littéraire est fixée au 15 novembre 2016."); ?>
            </p> <a href="#"><?php echo _("Lire la suite >"); ?></a> </div>
    </section>
    <!-- Auteur vedette -->
    <!--<section id="section-auteur-vedette">
        <h2><?php //echo _("Auteur vedette"); ?></h2>
        <a class="hvr-sweep-to-right" href="#"> <span><?php //echo _("Voir tous les ouvrages de Gilles >"); ?></span>
            <div class="barre"></div>
            <div class="img-auteur gilles"></div>
            <p class="nom-auteur">Gilles Herman</p>
        </a>
    </section>-->
</main>