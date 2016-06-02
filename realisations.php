<?php
include ('config/parametres.php');
$fichier="realisations.php";
$urlpage="travaux-realisees";
$pageOK = array($urlpage => $fichier);	
if((isset($_GET['page'])) && (isset($pageOK[$_GET['page']]))) {}
else header('Location : http://webalib.com/');

$grandeAffiche = "Réalisations";
$seoTitle= "Realisations";
$seoDescription ="Sur cet page vous retrouverez les derniers travaux réalisés par Webalib, vous retrouvez des sites crée et optimisé au référencement";
$seoKeywords ="Prestations, réalisations, travaux réalisés";


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
   include('contenu/contenu-realisations.php');
}else echo 'error';

if(array_key_exists('add_footer',$ajoutValide)){
   include('include/footer.php');
}else echo 'error';
?>
