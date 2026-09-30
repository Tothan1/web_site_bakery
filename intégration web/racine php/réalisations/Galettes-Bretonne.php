<?php 
  $type="realisations-types";
  $page="Galettes-Bretonne";
  include_once("../head.php");
  include_once("../menu.php"); 
?> 
<!-- partie principale -->
	<main>
      <?php
            foreach ($tabrealisation as $nomrealisations=> $inforealisation) {
              if($nomrealisations == "Galettes Bretonne"){
                echo "<h1>$nomrealisations</h1>";
                  echo "<div>";
                    echo '<img src="../medias/réalisations/'.$inforealisation[1].'.jpg" alt="image de '.$nomrealisations.'">';
                    echo "<p>";
                      echo "<span id='titre-réalisations'>$nomrealisations</span> : $inforealisation[0]";
                    echo "</p>";
                  echo "</div>";
              }
            }
          ?>
    </main>
<?php 
  $type="realisations-types";
  $page="Galettes-Bretonne";
  include_once("../footer.php"); 
?> 