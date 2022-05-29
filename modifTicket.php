<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css"/>
  <link rel="stylesheet" href="inscription.css"/>
  <script type="text/javascript" src="myTicketsList.js"></script>
  <title>zoo</title>
</head>
<body>

  <?php include("header.php"); ?>

  <?php 
    $id = $_REQUEST['id'];
    $priorite = $_REQUEST['priorite'];
    $sujet = $_REQUEST['sujet'];
    $description = $_REQUEST['description'];
    $secteur = $_REQUEST['secteur'];
  ?>

  <article>
    
<form>
  <input type="text" id="id" value="<?= $id ?>" style="display:none;">
  <div class="form-group">
    <label for="priorite">Priorité</label>
    <select id="priorite" name="priorite">
      <option value="urgent">Urgent !</option>
      <option value="moyen">Moyen</option>
      <option value="faible">Faible</option>
    </select>
    <script>
      function setPriority() {
        document.getElementById("priorite").value = "<?= $priorite ?>";
      }
      setPriority();
    </script>

  </div>
  <div class="form-group">
    <label for="sujet">Sujet</label>
    <input type="text" class="form-control" id="sujet" placeholder="Sujet" name="sujet">
    <script>
      function setSujet() {
        document.getElementById("sujet").value = "<?= $sujet ?>" ;
      }
      setSujet();
    </script>
  </div>
  <div class="form-group">
    <label for="description">Description</label>
    <textarea rows="12" cols="35" class="form-control" id="description" placeholder="Description" name="description"></textarea>
    <script>
      function setDescription() {
        document.getElementById("description").value = "<?= $description ?>";
      }
      setDescription();
    </script>
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
  <script>
      function setSecteur() {
        document.getElementById("secteur").value = "<?= $secteur ?>";
      }
      setSecteur();
    </script>
  <button type="button" class="btn btn-primary" id="bouton_myticket">Envoyer</button>
  <div id="confirm"></div>
</form>
  </article>

  <footer>
    22 rue de la Mediterranée, 75000 Paris

  </footer>

  
</body>
</html>



