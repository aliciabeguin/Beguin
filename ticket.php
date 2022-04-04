<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css"/>
  <link rel="stylesheet" href="inscription.css"/>
  <script type="text/javascript" src="ticket.js"></script>
  <title>zoo</title>
</head>
<body>

  <?php include("header.php"); ?>

  <article>
    
<form>
  <div class="form-group">
    <label for="priorite">Priorité</label>
    <select id="priorite" name="priorite">
      <option value="urgent">Urgent !</option>
      <option value="moyen">Moyen</option>
      <option value="faible">Faible</option>
    </select>
  </div>
  <div class="form-group">
    <label for="sujet">Sujet</label>
    <input type="text" class="form-control" id="sujet" placeholder="Sujet" name="sujet">
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea rows="12" cols="35" class="form-control" id="description" placeholder="Description" name="description"></textarea>
  </div>
  <div class="form-group">
    <label for="secteur">Secteur</label>
    <select id="secteur" name="secteur">
      <option value="orque">Orque</option>
      <option value="dauphin">Dauphin</option>
      <option value="ocean">Océan</option>
      <option value="riviere">Rivière</option>
    </select>
  </div>
  <button type="button" class="btn btn-primary" id="bouton_ticket">Envoyer</button>
  <div id="envoye"></div>
</form>
  </article>

  <footer>
    22 rue de la Mediterranée, 75000 Paris

  </footer>

  
</body>
</html>



