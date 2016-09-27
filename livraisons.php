<?php
  session_start();
  if($_SESSION['id'] == NULL){
    header('Location: index.php');
  }
?>
<?php require_once('./scripts/recupLivraisons.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <?php require_once('./template/head.php'); ?>
  </head>
  <body>
    <div class="container">
      <?php require_once('./template/header.php'); ?>
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h2>Liste des livraisons</h2>
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th>Nom de livraison</th>
                <th>Durée de livraison</th>
                <th >Tarif</th>
                <th>

                </th>
              </tr>
            </thead>
            <tbody>
              <?php
                foreach ($retour as $key => $value) {
                  $chaine="<tr>";
                  $chaine.="<td>".$value['Nom']."</td>";
                  $chaine.="<td>".$value['Duree']."</td>";
                  $chaine.="<td>".$value['Tarif']."€</td>";
                  $chaine.='<td><a href="scripts/delete.php?id='.$value['ID'].'">Supprimer</a></td>';
                  $chaine.="</tr>";
                  echo $chaine;
                 }
              ?>
            </tbody>
          </table>
          <h2>Créer Livraison</h2>
          <form action="./scripts/createLivraison.php" method="post">
            <div class="form-group">
              <label class="control-label" for="nameLivraison"> Nom de la livraison : </label>
              <input type="text" id="nameLivraison" name="nameLivraison" placeholder="nom de la livraison" class="form-control" required>
            </div>
            <div class="form-group">
              <label class="control-label" for="timeLivraison"> Temps de livraison : </label>
              <input type="text" id="timeLivraison" name="timeLivraison" placeholder="temps de livraison" class="form-control" required>
            </div>
            <div class="form-group">
              <label class="control-label" for="tarifLivraison"> Tarif de la livraison : </label>
              <input type="number" step="0.01" id="tarifLivraison" name="tarifLivraison" placeholder="tarif de la livraison" class="form-control" required>
            </div>
            <input type="submit" class="btn btn-success" value="Créer la livraison">
          </form>
        </div>
      </div>
      <?php require_once('./template/footer.php'); ?>
    </div>
  </body>
</html>
