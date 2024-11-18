
<?php
echo "<h2> Films sortis en 2028<h2>";
$anne2018s = array(
    0=>array('title'=>' Capharnaüm', 'sortie'=>'2018', 'duree'=>'2h06min', 'realisation'=>'

    Nadine Labaki', 'public'=>'tout public' ,'description'=>'Alors qu\'il purge une peine de cinq ans pour un crime violent, un garçon de 12 ans intente un procès contre ses parents pour négligence.'),
    1=>array('title'=>'Spider-Man: New Generation', 'sortie'=>'2018', 'duree'=>'1h57min', 'realisation'=>'Bob PersichettiPeter RamseyRodney Rothman', 'public'=>'tout public' ,'description'=>'Spider-Man traverse des dimensions parallèles et fait équipe avec les Spider-Man de ces dimensions pour mettre fin à une menace pour toute l\'humanité.'),
    2=>array('title'=>' Green Book : Sur les routes du sud', 'sortie'=>'2018', 'duree'=>'2h10min', 'realisation'=>'Peter Farrelly', 'public'=>'tout public' ,'description'=>'Un videur italo-américain issu de la classe ouvrière devient le chauffeur d\'un pianiste classique afro-américain pour une tournée des états du Sud américains des dans les années 60 .'),
    3=>array('title'=>' Avengers: Infinity War', 'sortie'=>'2018', 'duree'=>'2h29min', 'realisation'=>'    Anthony RussoJoe Russo', 'public'=>'tout public' ,'description'=>'Les Avengers et leurs alliés devront être prêts à tout sacrifier pour tenter de vaincre le redoutable Thanos avant que son attaque éclair ne conduise à la destruction complète de l\'univers.'),

    );
foreach($anne2018s as $anne2018){
    echo "<h3>".$anne2018['title'] ."</h3>"."<br>".$anne2018['sortie']." | ".$anne2018['duree']."<br>". "film de " .  $anne2018['realisation'] ." | ".$anne2018['public']. "<br>";
}


?>



<a href="index.php">retour</a>