<?php
include ('config/parametres.php');
$fichier="services.php";
$urlpage="integration-web";
$pageOK = array($urlpage => $fichier);	
if((isset($_GET['page'])) && (isset($pageOK[$_GET['page']]))) {}
else header('Location : http://webalib.com/');

$grandeAffiche = "Services";
$seoTitle= "Intégrateur site web";
$seoDescription ="Intégrateur web expérimenté html5 et css3 vous propose ses services pour l'int&eacute;gration de votre site dans un souci d'optimisation pour le r&eacute;f&eacute;rencement";
$seoKeywords ="intégration Web";

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
   include('pages/contenu-integration.php');
}else echo 'error';

if(array_key_exists('add_footer',$ajoutValide)){
   include('include/footer.php');
}else echo 'error';
?>
