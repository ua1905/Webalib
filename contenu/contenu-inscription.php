<div id="page_contenu">
<div class="titre-fond">
	<h1 class="titre-contenu">Newsletter - inscription</h1>
</div>
<div id="contenu-texte">


<?php
    if($_GET['tru']==1) //Si la variable $_GET['tru'] est égale à 1.
    // On affiche le formulaire
    {
?>
<form method="post" action="inscription.php?tru=2">
<p>Valider votre inscription en saisissant votre e-mail :</p> 
<p><span class="espace"></span><input type="text" name="email" size="25" />  <input class="style-news-envoi" type="reset" name="reset" value="Effacer" /> <input type="submit" value="Envoyer" name="submit" class="style-news-envoi" /></p> 
</form>
<?php
    }
elseif($_GET['tru']==2) // Sinon, si la variable $_GET['tru'] est égale à 2.
    {
    mysql_connect ('hote', 'login','mot de passe');
    mysql_select_db("BD");
    $email_mail = mysql_real_escape_string($_COOKIE['email']);
    $email_entre = mysql_real_escape_string($_POST['email']);
	$prenom = mysql_real_escape_string($_COOKIE['prenom']);
 
        if($email_entre==$email_mail) // Si les deux adresses e-mail sont identiques.
        {
		mysql_query("INSERT INTO `webcreation5`.`BD` (`id`,`prenom`, `email`) VALUES (NULL, '" . $prenom . "' , '" . $email_entre . "')");
        echo "<p>Merci ! Vous avez bien été inscrit à la newsletter.</p>";
        }else
        {
		 echo "<p>Vous n'avez pas entré la bonne adresse e-mail !</p>"; 
        }
    }
    else
    {
echo "Il y a eu une erreur.";
    }
?>
   </div>
</div>