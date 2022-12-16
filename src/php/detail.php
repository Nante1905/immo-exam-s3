<?php
// $id=$_POST['idHab'];
require("functionHabitation.php");
require("functions.php");
;$id = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="../css/detail_style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>

<div id="container">

<div id="box1">
    <div id="contenant-Image">
    <?php   $hab=getAllHabById($id);
            for ($i=0; $i <count($hab) ; $i++) { 
        ?>
        <div><img src="../../assets/img/<?=$hab[$i]->photo; ?>" alt="" height="180" width="300"></div> 
        <?php echo '../../assets/img/<?$hab[$i]->photo'; }?>
    </div>
</div>

<div id="box2">
    <div id="prix-reserver">
    <?php   
    ?>
        <h3><?=$hab[0]->loyer; ?> par nuit</h3>
        <?php //}?>
        <p>Réserver si vous êtes interressé</p>
        
        <form action="reservation-back.php" method="get">
            <p> Début de votre séjour :<input type="date" name="dateDebut" id="dateDebut"> </p>

            <p> Fin de votre séjour: <br> <input type="date" name="dateFin" id="dateFin"></p>
        </form>

        <a href="reservation-back.php?id=".$id>Reserver</a>
    </div>
</div>

</div>
    
<div id="descri">
    <div id="box3">
    <h3>Point a voir</h3>
    <p>Se trouvant dans le Quartier de <?=$hab[0]->quartier?></p>
    <?php $getType = getTypeById($hab[0]->types); ?>
    <p> De type <?=$getType; ?></p>
    <p><?=$hab[0]->descri?></p>
    </div>
</div>
</div>

</div>
</body>
</html>


