<div id="menu" class="menuTransitionBackground">
<nav> 
  <div id="opt1" class="select"><p class="menu-text"><a title="Webmaster freelance paris" href="index.php">Accueil</a></p></div>
  <div id="opt2" class="select"><p class="menu-text"><a title="préstations web webmaster paris" href="services.php"> Services </a></p></div>
  <div id="opt3" class="select"><p class="menu-text"><a title="travaux réalisés par le webmaster indépendant" href="realisations.php"> Réalisations </a></p></div>
  <div id="opt4" class="select"><p class="menu-text"><a title="blog du webmaster freelance" href="blog.php">Concours<!--<img alt="blog url exterieur" src="images/url-blank.png">--></a></p></div>
  <div id="opt5" class="select"><p class="menu-text"><a title="contacter webmaster indépendant paris" href="contact.php">Contact</a></p></div>  
</nav> 
</div> 
<script type="text/javascript">
		var positionElementInPage = $('#menu').offset().top;
		$(window).scroll(
			function() {
				if ($(window).scrollTop() >= positionElementInPage) {
					// fixed
					$('#menu').addClass("floatable");
				} else {
					// relative
					$('#menu').removeClass("floatable");
				}});
</script> 
<div id="content">
	<div id="donnee">
	
			<div id="aside1">
			<div id="barre_vertical_blue"></div>    
			<div id="tab-titre">
	<p><?php echo"$grandeAffiche";?></p>
    </div>
</div>