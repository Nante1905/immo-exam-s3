<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./../css/add.css">
    <link rel="stylesheet" href="./../css/app.css">
    <title>Document</title>
  </head>
  <body>
    <div class="header">
      <h1>Formulaire de modification</h1>
    </div>
    <div class="content">
      <div class="add-component">
        <form action="#" method="get" id="add-form">
          <div class="add-form">
            <div class="input-group">
              <label for="type">Type : </label>
              <input type="text" name="type" />
            </div>
            <div class="input-group">
              <label for="chambres">Nombre de chambres : </label>
              <input type="text" name="chambres" />
            </div>
            <div class="input-group">
              <label for="loyer">Loyer (/Jour) : </label>
              <input type="text" name="loyer" />
            </div>
            <div class="input-group">
              <label for="quartier">Quartier : </label>
              <input type="text" name="quartier" />
            </div>
            <div class="input-group">
              <label for="descri">Description : </label>
              <input type="text" name="descri"/>
            </div>
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
