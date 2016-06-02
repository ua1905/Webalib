<?php
include ('config/parametres.php');
$fichier="services.php";
$urlpage="services";
$pageOK = array($urlpage => $fichier);	
if((isset($_GET['page'])) && (isset($pageOK[$_GET['page']]))) {}
else header('Location : http://webalib.com/');

$grandeAffiche = "Blog";
$seoTitle= "Blog - Webmaster freelance a Paris - Nouvelle Technologie";
$seoDescription ='Blog - Webmaster freelance, publications liée a la technologie "web", n\'hésitez pas a vous abonner a notre newsletter.';
$seoKeywords ="Nouvelle technologie, Web";

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
   include('contenu/contenu-blog.php');
}else echo 'error';

if(array_key_exists('add_footer',$ajoutValide)){
   include('include/footer.php');
}else echo 'error';
?>
