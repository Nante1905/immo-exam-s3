<?php
$id=$_POST['idHab'];
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
    <?php   $hab=getHabbyId($id);
            for ($i=0; $i <count($hab->photo) ; $i++) { 
        ?>
        <div><img src="<?$hab->photo[$i]?>" alt="" height="180" width="300"></div> 
        <?php }?>
    </div>
</div>

<div id="box2">
    <div id="prix-reserver">
        <h3><?$hab->loyerjr?> par nuit</h3>
        <p>Réserver si vous êtes interressé</p>
        <form action=".php" methode="POST">
            <?php
            if (array_key_exists 'reserver' ,$_POST) {
                if (isReserved($i)!=true) {
                    //fonction de reservation
                }else{
                    ?>
                <p><script> alert("Habitation déja occuppé") </script></p>
            <?php} 
            }
            ?>
        <p><input type="submit" name="reserver" id="valid" value="Réserver"></p>
        </form>
    </div>
</div>

</div>
    
<div id="descri">
    <div id="box3">
    <h3>Point a voir</h3>
    <p>Se trouvant dans le Quartier de <?$hab->quartier?></p>
    <p> De type <?$hab->types?></p>
    <p><?$hab->descri?></p>
    </div>
</div>
</div>

</div>
</body>
</html>


