
<?php
echo "<h2> Films sortis en 2016<h2>";
$anne2016s = array(
    0=>array('title'=>'Dangal', 'sortie'=>'2016', 'duree'=>'2h41min', 'realisation'=>'Nitesh Tiwari', 'public'=>'tout public' ,'description'=>'Former wrestler Mahavir Singh Phogat and his two wrestler daughters struggle towards glory at the Commonwealth Games in the face of societal oppression.'),
    1=>array('title'=>'Silent Voice', 'sortie'=>'2016', 'duree'=>'2h10min', 'realisation'=> 'Taichi IshidateNaoko Yamada', 'public'=>'tout public avec avertissement' ,'description'=>'Un jeune homme est ostracisé par ses camarades de classe après qu\'il harcèle une jeune fille sourde au point qu\'elle déménage. Des années plus tard, il s\'engage sur le chemin de la rédemption.'),
    2=>array('title'=>'Tu ne tueras point', 'sortie'=>'2016', 'duree'=>'2h19min', 'realisation'=>'Mel Gibson', 'public'=>'+ 12 ans' ,'description'=>'Le médecin américain Desmond T. Doss de la Seconde Guerre mondiale servit pendant la bataille d\'Okinawa, refusant de tuer des gens et devint le premier homme de l\'histoire américaine à recevoir la médaille d\'honneur sans tirer un seul coup de feu.'),
    3=>array('title'=>'Your Name.', 'sortie'=>'2016', 'duree'=>'1h46min', 'realisation'=>'Makoto Shinkai', 'public'=>'tout public' ,'description'=>'Deux étrangers se retrouvent liés d\'une étrange manière. Quand une connexion se forme entre eux, la distance sera-t-elle la seule chose qui les séparera?'),

    );
foreach($anne2016s as $anne2016){
    echo "<h3>".$anne2016['title'] ."</h3>"."<br>".$anne2016['sortie']." | ".$anne2016['duree']."<br>". "film de " .  $anne2024['realisation'] ." | ".$anne2016['public']. "<br>";
}


?>

<a href="index.php">retour</a>