<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./../css/add.css">
    <link rel="stylesheet" href="./../css/app.css">
    <title>Document</title>
    <?php
      include("../php/functions.php");
      $hab = getHabitationById($_GET["id"])[0];
    ?>
  </head>
  <body>
    <div class="header">
      <h1>Formulaire de modification</h1>
    </div>
    <div class="content">
      <div class="add-component">
        <form action="../php/updateHab.php" method="get" id="add-form">
          <div class="add-form">
            <div class="input-group">
              <label for="type">Type : </label>
              <input type="text" name="type" value="<?= getTypeById($hab->types) ?>"/>
            </div>
            <div class="input-group">
              <label for="chambres">Nombre de chambres : </label>
              <input type="text" name="chambres" value="<?= $hab->nombredechambre ?>"/>
            </div>
            <div class="input-group">
              <label for="loyer">Loyer (/Jour) : </label>
              <input type="text" name="loyer" value="<?= $hab->loyer ?>"/>
            </div>
            <div class="input-group">
              <label for="quartier">Quartier : </label>
              <input type="text" name="quartier" value="<?= $hab->quartier ?>"/>
            </div>
            <div class="input-group">
              <label for="descri">Description : </label>
              <input type="text" name="descri" value="<?= $hab->descri ?>"/>
            </div>
            <input type="hidden" name="id" value="<?= $_GET["id"] ?>">
            <div class="btn-sub">
              <button>Ajouter</button>
            </div>
          </div>
        </form>
        <div class="response" style="text-align: center;"></div>
      </div>
      <div class="list-component"></div>
    </div>
  </body>
</html>
