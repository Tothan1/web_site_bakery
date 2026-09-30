<?php 
  $page="Équipe";
  $type="page-menus"; 
  include_once("head.php");
  include_once("menu.php");
	$personne=array(
		"nalo"=>array("Nalo Guénin","Nola","artisan-boulanger","<u>L'artisan boulanger</u> est un passionné du pain, qui sélectionne avec soin les meilleures farines et met tout son savoir-faire pour élaborer des pains artisanaux, respectueux des traditions et adaptés aux goûts de chacun.","https://www.linkedin.com/feed/"),
		"nathalie"=>array("Nathalie Pancha","Natou","boulanger-traiteur","Le <u>boulanger-traiteur</u> est un véritable artiste culinaire qui crée des pains savoureux et des plats préparés à partir de produits frais et locaux, alliant tradition et innovation.","https://www.linkedin.com/feed/"),
		"adèle"=>array("Adèle Le Goff","Adad","pâtissière","La <u>pâtissière</u> est une créatrice de douceurs qui réalise des gâteaux, des tartes et des viennoiseries aux saveurs délicates et aux présentations soignées, pour le plus grand plaisir des gourmands.","https://www.linkedin.com/feed/"),
		"gwendal"=>array("Gwendal Trezeguet","Gwendou","patron","Le <u>patron</u> de la boulangerie est le chef d'orchestre de son établissement. Il gère l'équipe, sélectionne les produits, assure la qualité des services et veille à la satisfaction de sa clientèle.","https://www.linkedin.com/feed/"),
		"jacques"=>array("Jacques Jacquier","JJ","vendeur","Le <u>vendeur</u> en boulangerie est le premier contact avec les clients. Il les accueille avec sourire, les conseille sur les différents produits et contribue à l'ambiance chaleureuse de la boulangerie.","https://www.linkedin.com/feed/")
	);
?> 
<!-- partie principale -->
	<main>
		<h2 class="none">Présentation de l’équipe</h2>
		<?php
		foreach ($personne as $nom => $value) {
		echo"<!--$value[0]-->";
		echo "<section>";

				echo "<h3 class='none'>".$value[2]."</h3>";
					echo "<img src='./medias/equipe/".$value[2].".png' alt='Photo ".$value[0]."' title='Photo ".$value[0]."'>";
					echo "<div>";
						echo "<div>Prénom Nom:<p>".$value[0]."</p></div>";
						echo "<div>Pseudo:<p>".$value[1]."</p></div>";
						echo "<div>Rôle:<p>".$value[3]."</p></div>";
						echo "<a href='".$value[4]."' title='LinkedIn' target='_blank' aria-label='LinkedIn'>";
						echo "<i class='fa-brands fa-linkedin' aria-hidden='true'></i>";
						echo "</a>";
					echo "</div>";
			echo "</section>";
		}
		?>
	</main>
<?php 
	$type="page-menus";
  $page="Équipe";
  include_once("footer.php"); 
?> 