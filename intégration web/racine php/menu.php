<!-- logo + titre du site -->
<header><img src="<?php if ($type== "realisations-types"){echo ".";}?>./medias/accueil/Logo_LePetitBreton_transperency.png" title="logo boulangerie" alt="Logo boulangerie"> <h1 class="none">Site sur une boulangerie bretonne</h1></header>
<!-- Menu de navigation -->
	<nav>
        <ul>
             <?php if($type== "page-menus"){
                echo"<li>"; if ($page== 'Accueil') {echo '<em>';} echo"<a href='./Accueil.php'>Accueil</a>"; if ($page== 'Accueil'){echo '</em>';} echo"</li>";
                echo"<li>"; if ($page== 'Équipe') {echo '<em>';} echo"<a href='./Équipe.php'>Équipe</a>"; if ($page== 'Équipe'){echo '</em>';} echo"</li>";
                echo"<li>"; if ($page== 'Réalisations') {echo '<em>';} echo"<a href='./Réalisations.php'>Réalisations</a>"; if ($page== 'Réalisations'){echo '</em>';} echo"</li>";
                echo"<li>"; if ($page== 'Partenaires') {echo '<em>';} echo"<a href='./Partenaires.php'>Partenaires</a>"; if ($page== 'Partenaires'){echo '</em>';} echo"</li>";
                echo"<li>"; if ($page== 'Tarifs') {echo '<em>';} echo"<a href='./Tarifs.php'>Tarifs</a>"; if ($page== 'Tarifs'){echo '</em>';} echo"</li>";
                echo"<li>"; if ($page== 'Contacts') {echo '<em>';} echo"<a href='./Contacts.php'>Contacts</a>"; if ($page== 'Contacts'){echo '</em>';} echo"</li>";
             }
             ?>
            <?php if($type== "realisations-types"){
                echo'<li> <em><a href="../Réalisations.php" id="retour"><img src="../medias/flèche-retour.png" alt="flèche retour">Réalisations</a></em></li>';
            }?>
            
        </ul>
    </nav>
<?php
    $tabrealisation = array(
        "Far Breton" => array(" un dessert d'exception!<br>
                Découvrez notre far breton, un dessert traditionnel breton revisité avec passion. Préparé avec des ingrédients simples et de qualité, il offre une texture onctueuse et un goût délicatement vanillé. Un pur moment de gourmandise à savourer seul ou à plusieurs.
                <br>Commandez dès maintenant votre far breton et laissez-vous tenter par ce délice.","Far-Breton"),
        "Galettes Bretonne" => array( " le goût de l'authenticité!<br>Redécouvrez le plaisir d'une galette bretonne authentique. Fabriquées artisanalement avec de la farine de sarrasin, de l'eau et du sel, nos galettes vous offrent une texture croustillante et un goût unique. Parfaites pour un apéritif gourmand ou un repas léger, elles sauront ravir vos papilles.
                <br> Commandez dès maintenant et savourez la Bretagne chez vous !","Galettes-Bretonne"),
        "Gâteau Breton" => array( " un trésor de la Bretagne!<br>Savourez l'authenticité de notre gâteau breton, préparé avec des ingrédients simples et de qualité : beurre demi-sel AOP, œufs frais, sucre et farine. Sa pâte sablée, légèrement sucrée, renferme un cœur moelleux et fondant qui vous transportera en Bretagne. Un délice à partager en famille ou entre amis.
                <br>Commandez dès maintenant votre gâteau breton et découvrez un goût unique !","Gâteau-Breton"),
        "Kouign Amann" => array( " un péché mignon irrésistible ! <br>Son cœur fondant grâce à son mélange unique de beurre et de sucre avec  sa croûte caramélisée vous transporteront en Bretagne. Un voyage gustatif intense pour les amateurs de douceurs sucrées.
                <br>Commandez dès maintenant  le kouign-amann, un délice breton à savourer sans modération","Kouign-Amann"),
        "Palets Bretons" => array( " un voyage gustatif en Bretagne !<br>Fabriqués artisanalement avec des ingrédients simples et de qualité, nos palets vous séduiront par leur texture friable et leur goût délicatement beurré. Un pur moment de gourmandise à savourer seul ou à partager. Découvrez nos différentes saveurs et laissez-vous tenter par ce classique de la pâtisserie bretonne.
                <br>Commandez dès maintenant vos palets bretons et découvrez ces biscuits épais.","Palets-Bretons"),
    );
?>