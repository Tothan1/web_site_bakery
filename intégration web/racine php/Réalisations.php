<?php 
  $page="Réalisations";
  $type="page-menus"; 
 include_once("head.php");
  include_once("menu.php");
	$realisations=array("Kouign Amann"=>array ("Kouign-Amann"),
	"Palets Bretons"=>array ("Palets-Bretons"),
	"Gâteau Breton"=>array ("Gâteau-Breton"),
	"Galettes Bretonne"=>array ("Galettes-Bretonne"),
	"Far Breton"=>array ("Far-Breton"),
);
?> 
<!-- partie principale -->
	<main>
		<h2 class="none">Réalisations</h2>
		<?php
		foreach ($realisations as $nomrealisation=>$nom2realisation) {
			echo"<!--$nomrealisation-->";
			echo "<section>";
				echo '<a href="./réalisations/'.$nom2realisation[0].'.php">';
					echo '<img src="./medias/réalisations/'.$nom2realisation[0].'.jpg" alt="Photo">';
				echo "</a>";
				echo "<h3>".$nomrealisation."</h3>";
				echo "</section>";
		}
		?>
	</main>
<?php 
	$type="page-menus";
  $page="Réalisations";
  include_once("footer.php"); 
?> 