<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css"/>
  <link rel="stylesheet" href="ticketslist.css"/>
  <link rel="icon" type="image/png" href="images/SUBMARINA.png">
  <script type="text/javascript" src="myTicketsList.js"></script>
  <title>zoo</title>
</head>
<body>

  <?php include("header.php"); ?>

  <?php include("rappel.connection.inc.php");
    try{
      $pdo = new PDO($DB_dsn, $DB_login, $DB_pass);
    }
    catch(PDOException $pdoe){
      echo("$pdoe");
      exit();
    }
    if (!$pdo) {
      echo("Impossible de se connecter");
      exit();
    }
    $myemail = "'".$_SESSION['email']."'";
    $myQuery = "SELECT * FROM `ticket` WHERE login = $myemail;";
    $result = $pdo->query($myQuery);
    if (!$result) {
      echo "Impossible to execute query";
      print_r($myQuery);
      exit();
    }
    $rowCount = $result->rowCount();
    if($rowCount <= 0){
      echo "Pas de tickets";
    }
  ?>


  <article>
    <div id="tableau">
      <table>
        <tr>
          <th>Id</th>
          <th>Priorité</th>
          <th>Sujet</th>
          <th>Description</th>
          <th>Secteur</th>
          <th>Login</th>
          <th>Satut</th>
          <th>Changer statut</th>
          <th>Modifier</th>
        </tr>
        <?php
        for($i = 0; $i < $rowCount; $i++){  
          $arr = $result->fetch(PDO::FETCH_BOTH);
          ?>
        <tr data-id="<?php echo($arr['id']); ?>" data-priorite="<?php echo($arr['priorite']); ?>" data-sujet="<?php echo($arr['sujet']); ?>" data-description="<?php echo($arr['description']); ?>" data-secteur="<?php echo($arr['secteur']); ?>">
          <td class="id"> <?php echo($arr['id']); ?> </td>
          <td> <?php echo($arr["priorite"]); ?> </td>
          <td> <?php echo($arr["sujet"]); ?> </td>
          <td> <?php echo($arr["description"]); ?> </td>
          <td> <?php echo($arr["secteur"]); ?> </td>
          <td> <?php echo($arr["login"]); ?> </td>
          <td class="statut"> <?php echo($arr["statut"]); ?> </td>
          <td>
              <select class="statut" name="statut">
                <option value="encours">En cours</option>
                <option value="resolu">Résolu</option>
              </select>
              <button type="button" class="btn btn-primary bouton_ticket envoie">Envoyer</button>
          </td>
          <td>
            <button type="button" class="btn btn-primary bouton_ticket modifier">Modifier</button>
          </td>
        </tr>
        <?php
        }
        ?>
      </table>
    </div>
    <div id="confirm"></div>

  </article>

  <footer>
    22 rue de la Mediterranée, 75000 Paris

  </footer>

  
</body>
</html>
