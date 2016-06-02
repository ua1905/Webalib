<div id="page_contenu">
<div class="titre-fond">
	<h1 class="titre-contenu">Newsletter - désinscription</h1>
</div>
<div id="contenu-texte">

<?php
    if($_GET['tru']==1) //si la variable $_GET['tru'] est égale à 1
    {
?>
<form method="post" action="desinscription.php?tru=2">
<p>Valider votre inscription en saisissant votre e-mail :</p> 
<p><span class="espace"></span><input type="text" name="email" size="25" />  
<input class="style-news-envoi" type="reset" name="reset" value="Effacer" /> 
<input type="submit" value="Envoyer" name="submit" class="style-news-envoi" /></p> 
</form>
<?php
    }
    elseif($_GET['tru']==2) // Sinon, si la variable $_GET['tru'] est égale à 2.
    {
    mysql_connect ('hote', 'login','mot de passe');
    mysql_select_db("BD");
    $email_mail = mysql_real_escape_string($_COOKIE['email']);
    $email_entre = mysql_real_escape_string($_POST['email']);
 
        if($email_entre==$email_mail)
        {
        mysql_query("DELETE FROM `BD`.`TABLE`  WHERE email='" . $email_entre ."'"); 
 
        echo "<p>Vous avez bien été désinscrit de la newsletter.</p>";
 
        }
        else
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