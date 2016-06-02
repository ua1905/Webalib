<?php
$fichier="index.php";
$urlpage="index"; /*
if($urlpage != $_GET["id"]){
header("Location: http://www.webalib.com/site/".$urlpage.".html");
}*/

$grandeAffiche = "Accueil";
$seoTitle= "Ali Bayrak | Webmaster Freelance | Créateur de site web à PARIS";
$seoDescription ="Ali Bayrak : Webmaster Freelance à Paris crée le site internet de votre entreprise. Voir les offres de création (Vitrine ou E-commerce) et de référencement naturel ou payant";
$seoKeywords ="Webmaster, freelance, référencement, SEO, SEM";
include('config/config-page-ok.php');

if(array_key_exists('add_head',$ajoutValide)){
   include('include/head.php'); 
}else echo 'error';

if(array_key_exists('add_header',$ajoutValide)){
   include('include/header.php'); 
}else echo 'error';

if(array_key_exists('add_header',$ajoutValide)){
   include('include/menu.php'); 
}else echo 'error';

if(array_key_exists('page_accueil',$pageValide)){
   include('contenu/contenu-accueil.php');
}else echo 'error';

if(array_key_exists('add_footer',$ajoutValide)){
   include('include/footer.php');
}else echo 'error';
?>