<?php 
  $page="Contacts";
  $type="page-menus";
 include_once("head.php");
  include_once("menu.php");
  $Coordonnées = array("Addresse"=>"https://www.google.com/maps/place/Lucas+Nicolas/@47.879479,-2.7732542,19.62z/data=!3m1!5s0x4810262de2574b27:0xb747dcc7e0b16d9b!4m6!3m5!1s0x4810262de3d795d1:0xdb1553ecad16deff!8m2!3d47.87938!4d-2.7729133!16s%2Fg%2F1tvrz3gz?entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoJLDEwMjExMjM0SAFQAw%3D%3DPlace de la Chouannerie<br>56500 Bignan",
	"E-mail"=>"'mailto:boulangerie.lucas@gmail.com'>boulangerie.lucas@gmail.com",
	"Téléphone"=>"<a href='tel:02333333'>02 33 33 33</a>");
  $listederoulante = array("devis","réclamation","renseignement","suggestion","autres");
	$case=array(
		"prenom"=>array("Prénom","fname","text","3","12","required","given-name","[A-Za-zÀ-ÿ'-]{3,12}"),
		"nom"=>array("Nom","lname","text","3","12","required","family-name","[A-Za-zÀ-ÿ'-]{3,12}"),
		"mail"=>array("E-mail","mail","email","5","30","required","email","[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}"),
		"telephone"=>array("Téléphone","Telephone","tel","10","10","required","tel","^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}"),
		"sujet"=>array("Sujet","subject-select","select","1","1","required","subject",""),
		"message"=>array("Message","Veuillezsaisirvotremessage","7","33","required","message","[A-Za-zÀ-ÿ'-]{3,12}","Veuillez saisir votre message"),
		"envoyer"=>array("Envoyer","envoyer","submit")
	)
?>
<!-- partie principale -->
	<main>
		<section>
			<h1>Formulaire de contact</h1>
			<form method="post">
				<?php
					foreach ($case as $nomcase => $value) {
						if ($nomcase == "sujet" || $nomcase == "envoyer") {
						echo "<div id='".($nomcase == "sujet" ? "subject" : ($nomcase == "envoyer" ? "test" : ""))."'>";
						}
						else{
							echo "<div>";
						}
						if ($nomcase != "envoyer") {
							echo "<label for='".$value[1]."'>".$value[0].":</label>";
							if ($nomcase == "sujet") {
								echo "<div id='select'><select name='subject' id='subject-select'>";
								foreach($listederoulante as $sujet){
									echo "<option value='".$sujet."'>".$sujet."</option>";
								}
								echo "</select></div>";
							} elseif ($nomcase == "message") {
								echo "<textarea id='".$value[1]."' placeholder='".$value[7]."' name='".$value[0]."' rows='".$value[2]."' cols='".$value[3]."'></textarea>";
							} else {
								echo '<input type="' . $value[2] . '" id="' . $value[1] . '" name="' . $value[1] . '" minlength="' . $value[3] . '" maxlength="' . $value[4] . '" required autocomplete="' . $value[6] . '" pattern="' . $value[7] . '" >';
							}
						} else {
							echo '<input id="' . $value[1] . '" type="' . $value[2] . '" value="' . $value[0] . '">';
						}
						echo "</div>";
					}
				?>
			</form>
		</section>
		<section>
			<h1>Coordonnées</h1>
			<a href=""></a>
			<div>
				<?php
					include 'tableau coordonées.php';
					echo "<p><strong>Addresse</strong>:<a href='{$Coordonnees['Lien']}' target='_blank'>{$Coordonnees['Addresse']}</a></p>";
					echo "<p>	<strong>E-mail</strong>:	<a href='mailto:{$Coordonnees['E-mail']}'>{$Coordonnees['E-mail']}</a></p>";
					echo "<p><strong>Téléphone</strong>:<a href='tel:{$Coordonnees['Telephone']}'>02 33 33 33</a></p>";
				?>
			</div>
		</section>
	</main>
<?php 
	$type="page-menus";
  $page="Contacts";
  include_once("footer.php"); 
?> 