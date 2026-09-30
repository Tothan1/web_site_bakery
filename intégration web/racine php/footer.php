<?php
    $date=date("Y");
?>
<!-- footer -->
    <footer>
        <a href="<?php if ($type== "realisations-types"){echo ".";}?>./Accueil.php"><img src="<?php if ($type== "realisations-types"){echo ".";}?>./medias/accueil/Logo_LePetitBreton_transperency.png" alt="logo le petit breton" title="logo le petit breton" id="logo-le-petit-breton"></a>
        <p> <small>copyright © <?=$date?> <br>Tynaël Le Rhun</small></p>
        <img src="<?php if ($type== "realisations-types"){echo ".";}?>./medias/footer/png-clipart-line-railroad-tracks-angle-rectangle.png" alt="barre verticale" class="barre">
        <nav>
            <?php if ($type== "page-menus"){
                    echo"<ul> ";
                    echo"<li> ";
                    if ($page == "Accueil") {
                        echo "<em><a href='./$page.php'>$page</a></em>";
                    } else {
                        echo "<a href='./Accueil.php'>Accueil</a>";
                    }
                    echo "</li>";
                    echo "<li>";
                    if ($page == "Équipe") {
                        echo "<em><a href='./Équipe.php'>Équipe</a></em>";
                    } else {
                        echo "<a href='./Équipe.php'>Équipe</a>";
                    }
                    echo "</li>";
                    echo "<li>";
                    if ($page == "Réalisations") {
                        echo "<em><a href='./Réalisations.php'>Réalisations</a></em>";
                    }
                        else {echo"<a href='./Réalisations.php'>Réalisations</a>";}
                    echo "</li>";
                    echo "<li>";
                    if ($page == "Partenaires") {
                        echo "<em><a href='./Partenaires.php'>Partenaires</a></em>";
                    } else {
                        echo "<a href='./Partenaires.php'>Partenaires</a>";
                    }
                    echo "</li>";
                    echo "<li>";
                    if ($page == "Tarifs") {
                        echo "<em><a href='./Tarifs.php'>Tarifs</a></em>";
                    } else {
                        echo "<a href='./Tarifs.php'>Tarifs</a>";
                    }
                    echo "</li>";       
                    echo "<li>";
                    if ($page == "Contacts") {
                        echo "<em><a href='./Contacts.php'>Contacts</a></em>";
                    } else {
                        echo "<a href='./Contacts.php'>Contacts</a>";
                    }
                    echo "</li>";
                    echo"</ul> ";
                    }
            ?>
                <?php if ($type== "realisations-types")
                    {echo "<ul>"; 
                        echo "<li>";
                        if ($page == "Kouign-Amann") {
                            echo "<em><a href='./${page}.php'>${page}</a></em>";
                        } else {
                            echo "<a href='./Kouign-Amann.php'>Kouign Amann</a>";
                        }
                        echo "</li>";
                        echo "<li>";
                        if ($page == "Palets-Bretons") {
                            echo "<em><a href='./${page}.php'>${page}</a></em>";
                        } else {
                            echo "<a href='./Palets-Bretons.php'>Palets Bretons</a>";
                        }
                        echo "</li>";
                        echo "<li>";
                        if ($page == "Gâteau-Breton") {
                            echo "<em><a href='./${page}.php'>${page}</a></em>";
                        } else {
                            echo "<a href='./Gâteau-Breton.php'>Gâteau Breton</a>";
                        }
                        echo "</li>";
                        echo "<li>";
                        if ($page == "Galettes-Bretonne") {
                            echo "<em><a href='./${page}.php'>${page}</a></em>";
                        } else {
                            echo "<a href='./Galettes-Bretonne.php'>Galettes Bretonne</a>";
                        }
                        echo "</li>";
                        echo "<li>";
                        if ($page == "Far-Breton") {
                            echo "<em><a href='./${page}.php'>${page}</a></em>";
                        } else {
                            echo "<a href='./Far-Breton.php'>Far Breton</a>";
                        }
                        echo "</li>";
                        echo "</ul>"; 
                        }
                ?>
        </nav>
                <img src="<?php if ($type== "realisations-types"){echo ".";}?>./medias/footer/png-clipart-line-railroad-tracks-angle-rectangle.png" alt="barre verticale" class="barre">
                <p>
                    <?php
                        include 'tableau coordonées.php';
                        echo "<a href='{$Coordonnees['Lien']}' target='_blank'>{$Coordonnees['Addresse']}</a><br><br>";
                        echo "<a href='mailto:{$Coordonnees['E-mail']}'>{$Coordonnees['E-mail']}</a><br><br>";
                        echo "<a href='tel:{$Coordonnees['Telephone']}'>02 33 33 33</a><br><br>";
                    ?>
                </p>
                <img src="<?php if ($type== "realisations-types"){echo ".";}?>./medias/footer/png-clipart-line-railroad-tracks-angle-rectangle.png" alt="barre verticale" class="barre">
                <div>
                    <a href="https://fr.linkedin.com/" title="LinkedIn" aria-label="LinkedIn" target="_blank"><i  class="fa-brands fa-linkedin"></i></a>
                    <a href="https://www.facebook.com/" title="Facebook" aria-label="Facebook" target="_blank"><i class="fa-brands fa-facebook"></i></a>
                    <a href="https://www.tiktok.com/fr/" title="tik-tok" aria-label="tik-tok" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
                    <a href="https://www.instagram.com/" title="instagram" aria-label="instagram" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://x.com/" title="twitter" aria-label="twitter" target="_blank"><i class="fa-brands fa-twitter"></i></a>
                    <a href="https://www.youtube.com/" title="youtube" aria-label="youtube" target="_blank"><i class="fa-brands fa-youtube"></i></a>
                </div>
    </footer>
    </body>
</html>