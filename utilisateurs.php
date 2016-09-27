<?php 
  session_start();
  if($_SESSION['id'] == NULL){
    header('Location: index.php');
  }
?>
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
          <h2>Liste des utilisateurs</h2>
          <table class="table table-striped table-hover">
            <thead>
              <tr>
                <th>ID</th>
                <th>email</th>
                <th class='firstname'>firstname</th>
                <th class='lastname'>lastname</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td class='email'>jonathan.meunier@estiam.com</td>
                <td class='firstname'>Johnathan</td>
                <td class='lastname'>MEUNIER</td>
              </tr>
              <tr>
                <td>2</td>
                <td class='email'>yann.cogez@estiam.com</td>
                <td class='firstname'>Yann</td>
                <td class='lastname'>COGEZ</td>
              </tr>
              <tr>
                <td>3</td>
                <td class='email'>jeremy.moreau@estiam.com</td>
                <td class='firstname'>Jeremy</td>
                <td class='lastname'>MOREAU</td>
              </tr>
              <tr>
                <td>4</td>
                <td class='email'>valerian.crasnier@estiam.com</td>
                <td class='firstname'>Valerian</td>
                <td class='lastname'>CRASNIER</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <?php require_once('./template/footer.php'); ?>
    </div>
  </body>
</html>