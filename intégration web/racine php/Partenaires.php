<?php 
  $page="Partenaires";
  $type="page-menus"; 
  include_once("head.php");
  include_once("menu.php");
	$partenaires=array(
		"Lesaffre" => array("https://lesaffre.fr/nos-produits/artisan-boulanger/","Lesaffre"),
		"EDF Entreprises" => array("https://www.edf.fr/entreprises?&at_platform=google&at_medium=sl&at_campaign=MARQUE_PURE_2022&at_creation=131016949637&at_term=edf%20entreprises&at_extension=&at_loc=9055072&at_device=c&gad_source=1&gclid=EAIaIQobChMIrd3PgtKLigMVjDsGAB3aGDjgEAAYASAAEgK-8_D_BwE&gclsrc=aw.ds","EDF-Entreprises"),
		"Confédération Nationale de la Boulangerie" => array("https://boulangerie.org/","Confédération-Nationale-de-la-Boulangerie"),
		"MAPA" => array("https://www.mapa-assurances.fr/","MAPA"),
		"Festival des Pains" => array("https://www.festivaldespains.com/","Festival-des-Pains"),
		"Love Baguette" => array("https://www.lovebaguette.com/","Love-Baguette"),
		"Moulins Bourgeois"  => array("https://www.moulins-bourgeois.com/","Moulins-Bourgeois"),
		"Saint Honoré" => array("https://www.charte-saint-honore.com/","Saint-Honoré"),
		"CMB" => array("https://www.cmb.fr/reseau-bancaire-cooperatif/web/accueil","CMB"),
		"Filière CRC" => array("https://www.filiere-crc.com/","Filière-CRC"),
		"Boulanger De France" => array("https://www.boulangerdefrance.org/","Boulanger-De-France"),
		"Nature & Progrès" => array("https://natureetprogres.org/?Accueil","Nature-&-Progrès"),
		"Bignan" => array("https://betamairiebignan.wordpress.com","Bignan"),
		"Ambassadeurs Du Pain" => array("https://ambassadeursdupain.com/","Ambassadeurs-Du-Pain"),
	);
	$temoignages=array(
		"Jean Michel" => array("Jean-Michel Hays de chez Hillary:","&quot;J'ai toujours fournis la boulangerie Lucas depuis 20 ans avec ma farine qui est 100 % artisanal et local. En plus de cela ils m'ont toujours proposé d'acheter mes produits à un prix juste. C'est pour cela que je vous recommande d'aller ver eux afin de soutenir la qualité et le local.&quot;","Jean-Michel"),
		"Antoine Baule" => array("Antoine Baule de chez lesaffre:","&quot;C'est toujours notre priorité de soutenir nos petits artisans boulanger nous travaillons avec la boulangerie Lucas depuis sa création et on continuera.&quot;","Antoine-Baule"),
	);
?> 
<!-- partie principale -->
	<main>
		<header>
			<h2>Liste des partenaire</h2>
		</header>
		<section>
			<?php
			foreach ($partenaires as $partenairenom => $lienpartenaire) {
				echo "<div>";
				echo '<a href="'.$lienpartenaire[0].'" target="_blank"><img src="./medias/partenaire/liste/'.$lienpartenaire[1].'.png" alt="Logo'.$partenairenom.'">';
				 if($partenairenom=="Confédération Nationale de la Boulangerie"){
					echo"<p>Confédération Nationale <br> de la Boulangerie</p></a>";
					}
				elseif($partenairenom=="Moulins Bourgeois"){
					echo"<p>Moulins <br> Bourgeois</p></a>";
					}
				elseif($partenairenom=="Boulanger De France"){
					echo"<p>Boulanger <br>De France</p></a>";
					}
				elseif($partenairenom=="Nature & Progrès"){
					echo"<p>Nature <br>& <br>Progrès</p></a>";
					}
					else{
					echo"<p>".$partenairenom."</p></a>";
					}
					echo "</div>";
			}
			?>
		</section>
		<h2>Témoignage</h2>
		<section>
			<?php
			foreach ($temoignages as $temoignagenom => $temoignagetexte) {
				echo "<div class='temoignage'>";
					echo '<img src="./medias/partenaire/temoignage/'.$temoignagetexte[2].'.jpg" alt="'.$temoignagenom.'">';
					echo "<div>";
						echo "<p>".$temoignagetexte[0]."</p>";
						echo "<p>".$temoignagetexte[1]."</p>";
						echo "</div>";
				echo "</div>";
			}
			?>
		</section>
	</main>
<?php 
	$type="page-menus";
  $page="Partenaires";
  include_once("footer.php"); 
?> 