<?php  
$seotitle ="Contacter pour plus d'informations";
$destinataire='ali.bayrak@live.fr';  
?>
<div id="page_contenu">
<div class="titre-fond">
<h1 class="titre-contenu">Demande de devis gratuit</h1>
</div>

<div id="contenu-texte">
<hr class="f-barre-vertical_contact" size="310px">



<table id="tableau-form" width="450" border="0" cellpadding="0" cellspacing="0">
<?php   
$Envoi="\n".'<p class="bt">  
<input name="envoi" class="btn-contact" tabindex="4" value="Envoyer" type="submit"></p>';  

if (isset($_POST['message']))  
  {  
// La variable $verif va nous permettre d'analyser si la sémantique de l'email est bonne  
    $verif='#^[\w.-]+@[\w.-]+\.[a-zA-Z]{2,5}$#';  

    //quelques remplacements pour les specialchars  
    $message=preg_replace('#(<|>)#', '-', $_POST['message']);  
    $message=str_replace('"', "'",$message);  
    $message=str_replace('&', 'et',$message);  
    $objet=preg_replace('#(<|>)#', '-', $_POST['objet']);  
    $objet=str_replace('"', "'",$objet);  
    $objet=str_replace('&', 'et',$objet);  

    // On assigne et/ou protège nos variables  
    $votremail=stripslashes(htmlentities($_POST['votremail']));  
    $message=stripslashes(htmlspecialchars($message));  
    $objet=stripslashes(htmlspecialchars($objet));  

    //input envoi/previsualiser  
    $envoi=htmlentities($_POST['envoi']);  

    //on enlève les espaces  
    $votremail=trim($votremail);  
    $message=trim($message);  
    $objet=trim($objet);  


    /*On vérifie si l'e mail et le message sont pleins, et on agit en fonction.  
      (on affiche Apercu du resultat, tel ou tel champ est vide, etc...*/  
    //Si ca ne vas pas (mal rempli, mail non valide...)  
    if((empty($message))or(empty($objet))or(!preg_match($verif,$votremail)))  
      {  
        //les 3 champs sont vides  
        if(empty($votremail)and(empty($message))and(empty($objet)))  
          {  
            echo '
<div class="alert alert-danger" role="alert">
<p>Tous les champs sont vides.</p>
</div>';  
            $message='';$votremail='';$objet='';  
          }  
        //un des champs est vide  
        else  
          {  
            if(!preg_match($verif,$votremail))  
              echo'
<div class="alert alert-danger" role="alert">
	<p>Votre adresse e-mail n\'est pas valide.</p>
</div>';  
            else  
            {  
              echo'
<div class="alert alert-danger" role="alert">
<p>Il faut remplir tous les champs !</p>
</div>';  
            }  
          }  
      }  
//Si les deux sont pleins et que l'adresse est valide, on envoie on on prévisualise sans envoi  
    else  
      {  
        $domaine=preg_replace('#[^@]+@(.+)#','$1',$votremail);  
        $DomaineMailExiste=checkdnsrr($domaine,'MX');  
        if(!$DomaineMailExiste)  
          echo'<p>Le nom de domaine de l\'adresse e-mail que vous avez donné n\'existe pas.</p>';   
        elseif(!empty($envoi))  
            {  
        $objet='WebaLib.com : '.$objet;  
		$header = "From : ".$votremail."\n";
		$header .= "Return-path : ".$votremail."\n";
		$header .= "Reply-to : ".$votremail."\n";
		$header .= 'Content-type:text/plain;charset=iso-8859-1'."\n";

		if(mail($destinataire,$objet,$message,$header))  		  
              {  
                echo '
<div class="alert alert-success" role="alert">
<div id="msg"><p class="message" >Votre message a bien été envoyé. Merci.</p></div></div>
<p><a href="/">Retour à la page d\'accueil</a></p>';  
                $Envoi='';     
              }  
              else  
                echo'
<div class="alert alert-danger" role="alert">
<p>Un problème est survenu durant l\'envoi du mail.</p></div>
';  
            }  
        else  
          echo'<p>Une condition innatendue est survenue lors de l\'exécution du script.</p>';  
      }   
  }  
else  
  {  
  echo '
<div class="alert alert-info" role="alert">
</br>
<h2 class="titre-h2">Vous recevrez un devis dans les 24h qui suit :</h2>
</div>';  
  $votremail='';$message='';  
  }  
$bas_formulaire=$Envoi;  
?>  

<form  id='contact' method="post" action="<?php echo $_SERVER['PHP_SELF'];?>#aside1" enctype="multipart/form-data">  
 <!--
 <p id='obj'><label for='objet'>Sujet* :<br>  
  <input type='text' name='objet' id='objet' tabindex='10' size='30'></label></p>   
  -->
  <p id='obj'><label for='objet'>Type de projet* :<br>  
  <SELECT name="objet" size="1" style="margin-left:0px;"> 
<OPTION>Création de site vitrine
<OPTION>Création de site e-commerce
<OPTION>Refonte de site internet
<OPTION>Référencement naturel
<OPTION>Référencement payant
<OPTION>Autre demande
<OPTION>Information
</SELECT> 
 
  <p id="adr"><label for="mail">Votre email* :<br>  
  <input name="votremail" tabindex="20" size="30" type="text" id="mail" value="<?php echo $votremail; ?>"></label></p>  
    
  <p id="msg" ><label for="message">Votre projet* :<br>  
  <textarea tabindex="30" rows="15" cols="50" name="message" id="message"><?php echo $message; ?></textarea>  
  </label></p>  
<?php echo $bas_formulaire;?>  
</form> 
</table>

<div id="coordonnee">

<p class="message">Mes coordonnées :</p>


<h3>Ali Bayrak</h3>
<h4>Paris, France</h4>
<hr>
<h3>Télephone :</h3>
<h4>+33(0) 6 95 91 34 10</h4>
<hr>
<h3>Email :</h3>
<h4>contact[AT]webalib.com<span></h4>
<hr>

<p><span class="espace"></span>Pour toute information complémentaire concernant
les offres proposées et obtenir un <strong>devis gratuit</strong> pour
<u>votre projet web</u>. N'hésitez pas à me contacter à l'aide
du formulaire de contact ci-contre, ou directement par email.</p>
</div><br />
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d83998.91163207521!2d2.3470599!3d48.858858949999856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x40b82c3688c9460!2sParis!5e0!3m2!1sfr!2sfr!4v1402879893633" width="840" height="300" frameborder="0" style="border:0"></iframe>
</div>
</div>