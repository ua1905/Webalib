<?php
include ('config/parametres.php');
$fichier="services.php";
$urlpage="services";
$pageOK = array($urlpage => $fichier);	
if((isset($_GET['page'])) && (isset($pageOK[$_GET['page']]))) {}
else header('Location : http://webalib.com/');

$grandeAffiche = "Services";
$seoTitle= "Création de site Vitrine";
$seoDescription ="Webmaster indépendant à Paris : Création de site internet - Référencement naturel & payant";
$seoKeywords ="Création site web, Prestation Prestashop,Gestion de projet, Webdesign, Développement, Intégration, Hébergement, Webmarketing";

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
   include('pages/refonte-site.php');
}else echo 'error';

if(array_key_exists('add_footer',$ajoutValide)){
   include('include/footer.php');
}else echo 'error';
?>