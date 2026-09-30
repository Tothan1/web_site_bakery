<?php 
  $type="realisations-types";
  $page="gâteau breton";
  include_once("../header.php");
  include_once("../menu.php"); 
?> 
<!-- partie principale -->
	<main>
      <?php
      foreach ($tabrealisation as $nomrealisations=> $inforealisation) {
        if($nomrealisations == "Gâteau Breton"){
          echo "<h1>$nomrealisations</h1>";
            echo "<div>";
              echo "<img src='../medias/réalisations/$nomrealisations.jpg' alt='image de $nomrealisations'>";
              echo "<p>";
                echo "<span id='titre-réalisations'>$nomrealisations</span> : $inforealisation";
              echo "</p>";
            echo "</div>";
        }
      }
    ?>
    </main>
<?php
  $type="realisations-types";
  $page="Gâteau Breton";
  include_once("../footer.php"); 
?> 