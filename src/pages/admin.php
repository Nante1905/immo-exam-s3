<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./../css/admin.css">
    <link rel="stylesheet" href="./../css/app.css">
    <title>Document</title>
    <?php
    require_once("./../php/functionHabitation.php");
    $habitations = getAllHab();
    ?>
</head>

<body>
    <div class="header">
        <h1>Admin Panel</h1>
        <a href="add.html">Ajouter une habitation</a>
    </div>
    <div class="content">
        <div class="list-component">
            <?php foreach ($habitations as $hab) { ?>
                <div class="list-item">
                    <div class="id"><?= $hab->idhabitations ?></div>
                    <div class="type"><?= $hab->types ?></div>
                    <div class="chambres"><?= $hab->nombredechambre ?></div>
                    <div class="loyer"><?= $hab->loyer ?></div>
                    <div class="photo"></div>
                    <div class="quartier"><?= $hab->quartier ?></div>
                    <div class="descri"><?= $hab->descri ?></div>
                    <div class="update">
                        <a href="modif.php?id=<?= $hab->idhabitations ?>"><button>Modifier</button></a>
                    </div>
                    <div class="delete">
                        <a href="../php/deleteHab.php?id=<?= $hab->idhabitations ?>"><button>Supprimer</button></a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</body>

</html>