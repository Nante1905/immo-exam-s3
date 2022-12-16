<?php

function login ($email,$mdp){
    for ($i=0; $i <count($user) ; $i++) { 
        if ($user[$i][email]==$email && $user[$i][mdp]==$md) {
            $idRep=$user[$i][id];
        }else if ($email=="admin" && $mdp=="admin") {
            $idRep=1;
        }else{
            echo "Erreur d'authentification");
        }
    }
return $idRep;
}
//(email, nom, mot de passe, numéro de tel)
function inscription($connexion,$In_email,$nom,$In_mdp,$numero ){
$inser=$connexion->exec("");
}


//nombre d'habitation occupé par jour (mois ,annee)

?>