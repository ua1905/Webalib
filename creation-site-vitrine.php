<?php
include ('config/parametres.php');
$urlpage="creation-site-vitrine";
$pageOK = array($urlpage => $CurrentFile);	
if((isset($_GET['page'])) && (isset($pageOK[$_GET['page']]))) {}
else header('Location : http://webalib.com/');

$grandeAffiche = "Services";
$seoTitle= "Création de site Vitrine pour entreprise ou particulier pour une visibilité";
$seoDescription ="Un site internet est aujourd’hui indispensable pour toute entreprise ou particulier, Webalib crée votre site vitrine a petit prix, demander un devis gratuit";
$seoKeywords ="Création site web,site vitrine";

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
   include('pages/site-vitrine.php');
}else echo 'error';

if(array_key_exists('add_footer',$ajoutValide)){
   include('include/footer.php');
}else echo 'error';
?>