<?php

// Niveau
$niveau = "";
$base = "./";
$title = "";
$lienLangue = '?';

// Locale
setlocale(LC_MONETARY, 'fr_CA');

// Includes
require_once($niveau.'inc/scripts/config.inc.php');
require_once($niveau.'inc/lib/Savant3.class.php');
require_once($niveau.'inc/composantes/Panier.class.php');
require_once($niveau.'inc/scripts/conversion_isbn.php');
require_once($niveau.'inc/scripts/changement_langue.php');
require_once($niveau.'inc/scripts/reecriture.php');

// Session
session_start();
if(isset($_SESSION["panier"])){
   $objPanier = unserialize($_SESSION["panier"]);
}
else{
   $objPanier = new Panier();
}

// GET
if(isset($_GET["isbn"])){
   $objPanier->ajouterItem($_GET["isbn"]);
}

if(isset($_GET["delete"])){
   $objPanier->supprimerItem();
}

// Serialize
$_SESSION['panier'] = serialize($objPanier);

// SQL Accueil
$strSQLNouveaute = 'SELECT titre_livre, id_livre, isbn, prix
FROM  `t_livre`
INNER JOIN t_parution ON t_livre.id_parution = t_parution.id_parution
WHERE etat =  "Nouveauté" ORDER BY rand() LIMIT 8';

// Transférer les résultats de la requête dans un tableau multidimensionnel
if ($objResultatLivre = $objConnMySQLi->query($strSQLNouveaute)) {
   while ($objLigneNouveaute = $objResultatLivre->fetch_object()) {
       $valeurISBN = $objLigneNouveaute->isbn;
       // SQL auteur
       $strSQLAuteur='SELECT nom_auteur FROM `t_auteur`
INNER JOIN ti_auteur_livre ON t_auteur.id_auteur = ti_auteur_livre.id_auteur
INNER JOIN t_livre ON ti_auteur_livre.id_livre = t_livre.id_livre
WHERE t_livre.isbn="'.$valeurISBN .'"';
       if ($objResultatAuteur = $objConnMySQLi->query($strSQLAuteur)) {
           $arrAuteur = array();
           while ($objLigneAuteur = $objResultatAuteur->fetch_object()) {
               $arrAuteur[] = array('nom_auteur'=>$objLigneAuteur->nom_auteur);
           }
       }

       $arrLivre[] = array(
               'prix'=>$objLigneNouveaute->prix,
               'titre_livre'=>$objLigneNouveaute->titre_livre,
               'isbn'=>$objLigneNouveaute->isbn,
               'nom_auteur'=>$arrAuteur);
   }
   $objResultatLivre->free_result();
}

// On ferme la connection
$objConnMySQLi->close();

// Config tu template
$arrConfigTpl = array('template_path' => $niveau.'templates');
$objTpl = new Savant3($arrConfigTpl);

//Les valeurs nécessaires à l'affichage de la page
$objTpl->prixLivreAjouter = $objPanier->getPrixTLivreAjouter();
$objTpl->titreLivreAjouter = $objPanier->getTitreLivreAjouter();
$objTpl->sousTotalAuPanier = $objPanier->calculerSousTotalItem();
$objTpl->quantiteAuPanier = $objPanier->calculerLaQteDeTousLesItems();
$objTpl->livre = $arrLivre;
$objTpl->base = $base;
$objTpl->lienLangue = $lienLangue;

// Autres templates
$objTpl->display('head.tpl.php');
$objTpl->display('carousel.tpl.php');
$objTpl->display('accueil.tpl.php');
$objTpl->display('footer.tpl.php');