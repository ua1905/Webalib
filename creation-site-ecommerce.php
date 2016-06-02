<?php
include ('config/parametres.php');
$urlpage="referencement-naturel";
$pageOK = array($urlpage => $CurrentFile);	
if((isset($_GET['page'])) && (isset($pageOK[$_GET['page']]))) {}
else header('Location : http://webalib.com/');

$grandeAffiche = "Services";
$seoTitle= "Création de site de vente E-commerce - Boutique en ligne sur internet";
$seoDescription ="Vous voulez vendre vos produits ou services sur internet ? Webalib crée votre boutique avec une bonne préparation et conception web, effectuer une demande de devis gratuit";
$seoKeywords ="E-commerce, e-boutique, boutique en ligne, vendre sur internet";

if(array_key_exists('add_head',$ajoutValide)){
   include('include/head.php'); 
}else echo 'error';

if(array_key_exists('add_header',$ajoutValide)){
   include('include/header.php'); 
}else echo 'error';

if(array_key_exists('add_header',$ajoutValide)){
   include('include/menu.php'); 
}else echo 'error';

if(array_key_exists('page_services',$pageValide)){
   include('pages/site-ecommerce.php');
}else echo 'error';

if(array_key_exists('add_footer',$ajoutValide)){
   include('include/footer.php');
}else echo 'error';
?>