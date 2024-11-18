
<?php
echo "<h2> Films sortis en 2024<h2>";
$anne2024s = array(
    0=>array('title'=>'Les robots sauvages', 'sortie'=>'2024', 'duree'=>'1h42min', 'realisateur'=>'Chris', 'public'=>'Tout public', 'description'=>'Après un naufrage, un robot intelligent appelé Roz échoue sur une île inhabitée. Pour survivre dans cet environnement hostile, Roz se lie avec les animaux de l\'île et s\'occupe d\'un bébé oie orphelin.'),
    1=>array('title'=>'Dune: Deuxieme partie', 'sortie'=>'2024', 'duree'=>'2h46min', 'realisateur'=>'Denis Villeneuve', 'public'=>'tout public', 'description'=>'Paul rejoint les Fremen et cherche à se venger des conspirateurs qui ont détruit sa famille, faisant un choix entre l\'amour et le sort de l\'univers connu alors qu\'il s\'efforce d\'empêcher un avenir terrible que lui seul peut prédire.'),
    2=>array('title'=>'Maharaja', 'sortie'=>'2024', 'duree'=>'2h21min', 'realisateur'=>'Nithilan Saminathan','public'=>'tout public', 'description'=>'Un barbier cherche à se venger après le cambriolage de sa maison. Il dit à la police que son "lakshmi" a été enlevé, ne sachant pas s\'il s\'agit d\'une personne ou d\'un objet. La police ne sait pas s\'il s\'agit d\'une personne ou d\'un objet.'),
    3=>array('title'=>'L\'Amour ouf', 'sortie'=>'2024', 'duree'=>'2h40min', 'realisateur'=>' Gilles Lellouche ','public'=>'+12 ans', 'description'=>'Les années 80, dans le nord de la France.Jackie et Clotaire grandissent entre les bancs du lycée et les docks du port. Elle étudie, il traine. Et puis leurs destins se croisent et c\'est l\'amour fou.'),
    4=>array('title'=>'Monsieur Aznavour', 'sortie'=>'2024', 'duree'=>'2h13min', 'realisateur'=>'Mehdi Idir, Grand Corps Malade','public'=>'tout public', 'description'=>'Fils de réfugiés, petit, pauvre, à la voix voilée, on disait de lui qu’il n’avait rien pour réussir. À force de travail, de persévérance et d’une volonté hors norme, Charles Aznavour est devenu un monument de la chanson, et un symbole de la culture française.')
);

foreach($anne2024s as $anne2024){
    echo "<h3>".$anne2024['title'] ."</h3>"."<br>".$anne2024['sortie']." | ".$anne2024['duree']."<br>". "film de " .  $anne2024['realisateur'] ." | ".$anne2024['public']. "<br>";
}


?>
<a href="index.php">retour</a>