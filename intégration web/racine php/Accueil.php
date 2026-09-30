<?php 
  $page="Accueil";
  $type="page-menus";
  include_once("head.php");
  include_once("menu.php");
  $horaire=array(
    "Lundi"=>"Fermé",
    "Mardi"=>"6h30 - 19h00",
    "Mercredi"=>"6h30 - 19h00",
    "Jeudi"=>"6h30 - 19h00",
    "Vendredi"=>"6h30 - 19h00",
    "Samedi"=>"6h30 - 18h00",
    "Dimanche"=>"7h00 - 13h00"
  )
?> 
<!-- partie principale -->
    <main id="background">
      <section id="backgroundblur">
        <div>
          <span></span>
          <div>
            <h1>Présentation générale:</h1>
            <p>
              Le petit breton bien plus qu'une simple boulangerie vous propose
              toutes les spécialités bretonnes sucrées avec certains ateliers
              permettant de vous faire découvrir comment sont fabriqués nos produits
              tout en vous vous propossant une dégustation.
            </p>
          </div>
        </div>
        <div>
          <div>
          <h1>Horaires d'ouvertures:</h1>
            <ul>
              <?php
                foreach($horaire as $jour=>$horaires){
                  echo "<li>$jour : $horaires</li>";
                }
              ?>
            </ul>
          </div>
          <iframe width="560" height="315" src="https://www.youtube.com/embed/kobyLewMxmM?si=7qsv3s2CIf2-rcMK" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
        </div>
      </section>
    </main>
<?php
  $type="page-menus";
  $page="Accueil";
  include_once("footer.php"); 
?> 
