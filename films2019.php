
<?php
echo "<h2> Films sortis en 2019<h2>";
$anne2019s = array(
    0=>array('title'=>'La Légende de Klaus', 'sortie'=>'2019', 'duree'=>'1h36min', 'realisateur'=>'  Sergio PablosCarlos Martínez López', 'public'=>'tout public' ,'description'=>'Un simple acte de gentillesse en suscite toujours un autre, même dans un endroit glacé et lointain. Jesper, le nouveau facteur de Smeerensburg, se lie d\'amitié avec le fabricant de jouets Klaus.'),
    1=>array('title'=>'Joker', 'sortie'=>'2019', 'duree'=>'2h02min', 'realisateur'=>'    Todd Phillips', 'public'=>'+ 12 ans avec avertissement' ,'description'=>'Arthur Fleck, un comédien affligé par des troubles mentaux, se voit mis de côté par la société. S\'amorce ensuite une descente aux enfers emplie de révoltes et de crime violents ce qui le confrontera à son alter ego, Le Joker.'),
    2=>array('title'=>'Le Mans \'66', 'sortie'=>'2019', 'duree'=>'2h32min', 'realisateur'=>'James Mangold', 'public'=>'tout public' ,'description'=>'L\'histoire vraie entre Ford et Ferrari pour gagner la course du Mans en 1966.'),
    3=>array('title'=>'Parasite', 'sortie'=>'2019', 'duree'=>'2h02min', 'realisateur'=>'Bong Joon Ho', 'public'=>'tout public avec avertissement' ,'description'=>'Toute la famille de Ki-taek est au chômage, et s\'intéresse fortement au train de vie de la richissime famille Park, jusqu\'à ce qu\'ils soient impliqués dans un incident inattendu.'),

    );
foreach($anne2019s as $anne2019){
    echo "<h3>".$anne2019['title'] ."</h3>"."<br>".$anne2019['sortie']." | ".$anne2019['duree']."<br>". "film de " .  $anne2019['realisateur'] ." | ".$anne2019['public']. "<br>";
}


?>



<a href="index.php">retour</a>