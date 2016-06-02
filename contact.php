<?php
include ('config/parametres.php');
$urlpage="contact-webmaster-freelance";
$pageOK = array($urlpage => $CurrentFile);	
if((isset($_GET['page'])) && (isset($pageOK[$_GET['page']]))) {}
else header('Location : http://webalib.com/');

$grandeAffiche = "Contact";
$seoTitle= "Contacter webmaster Freelance Paris - Demande de Devis Gratuit - Informations";
$seoDescription ="Passez en contact avec le webmaster freelance afin de préciser votre demande. Le devis est totalement Gratuite. Renseigner vous des services proposé.";
$seoKeywords ="Passez en contact, Contactez webmaster, contacter webmestre";

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
   include('contenu/contenu-contact.php');
}else echo 'error';

if(array_key_exists('add_footer',$ajoutValide)){
   include('include/footer.php');
}else echo 'error';
?>