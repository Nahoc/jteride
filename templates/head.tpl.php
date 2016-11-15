<!DOCTYPE HTML>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="<?php echo $this->base; ?>">
    <!-- Auteurs -->
    <meta name="author" content="Cohan Carpentier, Jimmy Lemieux, Sébastien Leblanc">
    <!-- Titre -->
    <title>
        <?php echo _("Traces - Toute l'histoire de l'Amérique"); ?>
    </title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/fr/favicon.png">
    <!-- CSS -->
    <link href="css/styles.css" rel="stylesheet"> </head>

<body class="wrap">
    <div class="content">
        <header>
            <nav>
                <ul class="navigation">
                    <li class="logo-mobile">
                        <a class="logo" href="index.php">
                            <?php echo _("Accueil"); ?>
                        </a>
                    </li>
                    <ul class="menu-mobile">
                        <li><span class="icn-menu"></span>
                            <input type="checkbox" name="toggle" id="toggle" />
                            <label for="toggle">
                                <?php echo _("Menu"); ?>
                            </label>
                        </li>
                        <li><span class="icn-recherche"></span>
                            <input type="checkbox" name="toggle-2" id="toggle-2" />
                            <label for="toggle-2">
                                <?php echo _("Recherche"); ?>
                            </label>
                        </li>
                        <li><span class="icn-compte"></span>
                            <input type="checkbox" name="toggle-3" id="toggle-3" />
                            <label for="toggle-3">
                                <?php echo _("Compte"); ?>
                            </label>
                        </li>
                        <li><span class="icn-panier"></span>
                            <input type="checkbox" name="toggle-4" id="toggle-4" />
                            <label for="toggle-4">
                                <?php echo _("Panier"); ?>
                            </label>
                        </li>
                    </ul>
                    <div class="navigation-principale">
                        <li id="lien-1">
                            <a href="livres/">
                                <?php echo _("Livres"); ?>
                            </a>
                        </li>
                        <li id="lien-2">
                            <a href="#">
                                <?php echo _("Meilleurs vendeurs"); ?>
                            </a>
                        </li>
                        <li id="lien-3">
                            <a href="#">
                                <?php echo _("Auteurs"); ?>
                            </a>
                        </li>
                        <li id="lien-4">
                            <a href="#">
                                <?php echo _("Découvrir traces"); ?>
                            </a>
                        </li>
                        <li id="lien-5">
                            <a href="#nous-joindre">
                                <?php echo _("Nous joindre"); ?>
                            </a>
                        </li>
                        <li id="lien-6">
                            <a href="#">
                                <?php echo _("English"); ?>
                            </a>
                        </li>
                    </div>
                    <li class="no-padding-right pull-right">
                        <ul class="langue">
                            <li>
                                <a href="<?php echo $this->lienLangue._("lang=en"); ?>">
                                    <?php echo _("EN"); ?>
                                </a>
                            </li>
                            <li>|</li>
                            <li class="no-padding-right panier"><span class="item-panier"><?php echo $this->quantiteAuPanier; ?></span>
                                <a class="icone-panier" href="#">
                                    <?php echo _("Panier"); ?>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="recherche">
                    <li>
                        <input class="champ rechercher-un-livre" type="text" placeholder="<?php echo _("Rechercher un livre"); ?>" /> </li>
                    <li>
                        <select class="champ filtres">
                            <option value="">
                                <?php echo _("Critères de recherche"); ?>
                            </option>
                            <option value="">
                                <?php echo _("Sujet"); ?>
                            </option>
                            <option value="">
                                <?php echo _("Auteur"); ?>
                            </option>
                            <option value="">
                                <?php echo _("Titre"); ?>
                            </option>
                            <option value="">
                                <?php echo _("ISBN"); ?>
                            </option>
                        </select>
                    </li>
                    <li>
                        <input class="btn btn-vert" type="submit" value="<?php echo _("Rechercher"); ?>" /> </li>
                </ul>
                <ul class="connexion pull-right">
                    <li>
                        <input class="btn btn-vide" type="submit" value="<?php echo _("Se connecter"); ?>" /> </li>
                    <li class="no-padding-right">
                        <input class="btn btn-vert" type="submit" value="<?php echo _("Créer un compte"); ?>" /> </li>
                </ul>
            </nav>
        </header>