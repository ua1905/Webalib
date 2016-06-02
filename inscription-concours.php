<?php
include ('config/parametres.php');
$urlpage="hebergement-site-web";
$pageOK = array($urlpage => $CurrentFile);	
if((isset($_GET['page'])) && (isset($pageOK[$_GET['page']]))) {}
else header('Location : http://webalib.com/');

$grandeAffiche = "Tirage au sort";
$seoTitle= "Informations Utiles - Actualités, Info Dernières Minutes";
$seoDescription ="Retrouvez de l'Informations utiles a tout moment, retrouvez, des journaux, radios, chaine télévisée, Gouvernement, et universités pour votre orientation";
$seoKeywords ="info, information,utile";

if(array_key_exists('add_head',$ajoutValide)){
   include('include/head.php'); 
}else echo 'error';

if(array_key_exists('add_header',$ajoutValide)){
   include('include/header.php'); 
}else echo 'error';

if(array_key_exists('add_header',$ajoutValide)){
   include('include/menu.php'); 
}else echo 'error';
?>

<div id="page_contenu">
<div class="titre-fond">
	<h1 class="titre-contenu">Tirage au sort pour la création d'un site vitrine</h1>
</div>
<div id="contenu-texte">
<br/>
<?php
include('include/menuTirage.php'); 
?> 
  <p id="adr"><label for="mail">Nom* :<br>  
  <input name="votremail" tabindex="20" size="30" type="text" id="mail" value="<?php //echo $votremail; ?>"></label></p>  

    <p id="adr"><label for="mail">Prenom* :<br>  
  <input name="votremail" tabindex="20" size="30" type="text" id="mail" value="<?php //echo $votremail; ?>"></label></p>  
<p id="adr">
  <input type="checkbox" name="vehicle" value="Bike"> J'ai aimer la page de Webalib<br>
  <input type="checkbox" name="vehicle" value="Car" > J'ai inviter 5 ami(e)s<br></p>
  
<br/>
<?php
include('include/menuTirage.php'); 
?>
</div>
</div>  


<?php
if(array_key_exists('add_footer',$ajoutValide)){
   include('include/footer.php');
}else echo 'error';
?>