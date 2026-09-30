<?php 
  $page="Tarifs";
  $type="page-menus"; 
  include_once("head.php");
  include_once("menu.php");
	$atelier=array(
		"Ateliers de Pâtisserie"=>array("Pour apprendre à réaliser soi-même certaines Pâtisserie de la boulangerie.Enfin vous pourrez repartir avec votre patisserie que vous avez conçue.","réaliserez toutes les Pâtisserie de la boulangerie.","réaliserez le Kouign Amann,Palets Bretons et le Gâteau Breton de la boulangerie.","réaliserez seulement le Kouign Amann de la boulangerie.","150","100","50","Ateliers-de-Pâtisserie"),
		"Découverte et Dégustation"=>array("Pour découvrir comment sont fais nos pains avec qu'elle produits et avec quelle processus de fabrication. Enfin on finira cette belle journnée avec une bonne dégustation des produits de la boulangerie.","découvrez tout les pains de la boulangerie avec une rencontre de nos fournisseurs de nos produits locaux.","découvrez tout les pains de la boulangerie.","découvrez seulement les baguettes de la boulangerie.","100","50","25","Découverte-et-Dégustation")
	)
?> 
<!-- partie principale -->
	<main>
	<?php
			foreach($atelier as $nomatelier=>$infos){
			echo"<h3>$nomatelier</h3>";
			echo"<section>";
				echo '<img src="./medias/Tarifs/'.$infos[7].'.png" alt="' . $nomatelier . '" title="' . $nomatelier . '">';
					echo"<div>";
						echo"<div><p> <span class='titre'>Description:</span><br>$infos[0]</p></div>";
						echo"<div>";
							echo"<ul>";
								echo"<li class='titre'>Prestation:</li>";
								echo"<li><strong >haut de gamme </strong>:Vous $infos[1]</li>";
								echo"<li><strong >milieu de gamme</strong>:Vous $infos[2]</li>";
								echo"<li><strong >bas de gamme </strong>:Vous $infos[3]</li>";
							echo"</ul>";
						echo"</div>";
						echo"<div>";
							echo"<ul>";
								echo"<li class='titre'>Prix:</li>";
								echo"<li>$infos[4]€</li>";
								echo"<li>$infos[5]€</li>";
								echo"<li>$infos[6]€</li>";
							echo"</ul>";
						echo"</div>";
					echo"</div>";
			echo"</section>";
			}
		?>
	</main>
<?php 
	$type="page-menus";
  $page="Tarifs";
  include_once("footer.php"); 
?> 