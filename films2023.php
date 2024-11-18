
<?php
echo "<h2> Films sortis en 2023<h2>";
$anne2023s = array(
    0=>array('title'=>'12th Fail', 'sortie'=>'2023', 'duree'=>'2h27min', 'réalisation'=>'Vidhu Vinod Chopra', 'public'=>'tout public' ,'description'=>'L\'histoire réelle de Manoj Kumar Sharma, officier de l\'IPS, et de Shraddha Joshi, officier de l\'IRS.'),
    1=>array('title'=>'Oppenheimer', 'sortie'=>'2023', 'duree'=>'3h', 'réalisation'=>'Christopher Nolan', 'public'=>'tout public' ,'description'=>'L\'histoire du scientifique J. Robert Oppenheimer et de son rôle dans le développement de la bombe atomique.'),
    2=>array('title'=>'Spider-Man: Across the Spider-Verse', 'sortie'=>'2023', 'duree'=>'2h20min', 'réalisation'=>'    Joaquim Dos SantosKemp PowersJustin K. Thompson', 'public'=>'tout public' ,'description'=>'Miles se catapulte à travers le multivers, en rencontrant une équipe chargée de protéger l\'existence du Multivers. Lorsque les héros s\'opposent sur la façon de gérer une nouvelle menace Miles doit redéfinir ce que signifie être un héros.'),
    3=>array('title'=>'Frères', 'sortie'=>'2023', 'duree'=>'1h45min', 'réalisation'=>'Olivier Casas', 'public'=>'tout public' ,'description'=>'L\'histoire vraie de deux petits garçons de 5 et 7 ans qui, abandonnés par leur mère en 1948, s\'enfuient dans la forêt. Ils vont y survivre pendant sept années et tisser un lien qui les unira à jamais. Des décennies plus tard, les deux frères quittent tout pour se retrouver. Mais le passé et les secrets les rattrapent, même à l\'autre bout du monde.'),

    );
foreach($anne2023s as $anne2023){
    echo "<h3>".$anne2023['title'] ."</h3>"."<br>".$anne2023['sortie']." | ".$anne2023['duree']."<br>". "film de " .  $anne2023['réalisation'] ." | ".$anne2023['public']. "<br>";
}


?>



<a href="index.php">retour</a>