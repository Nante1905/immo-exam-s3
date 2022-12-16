
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- mbola tsy mety -->
<?php

$PARAM_hote='localhost'; 
$PARAM_port='3306';
$PARAM_nom_bd='Immobilier'; 
$PARAM_utilisateur='postgres'; 
$PARAM_mot_passe='noob';
$connexion = new PDO('mysql:host='.$PARAM_hote.';port='.$PARAM_port.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe);

function login($connexion){
$resultats=$connexion->query("SELECT * FROM utilisateur ");
$resultats->setFetchMode(PDO::FETCH_OBJ);

while( $ligne = $resultats->fetch() )
{
 echo 'Utilisateur : '.$ligne->prenom.'<br />';
}
$resultats->closeCursor();
}

login($connexion);

?>
</body>
</html>


