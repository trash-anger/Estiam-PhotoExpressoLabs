<!DOCTYPE html>
<html>
  <head>
    <?php require('./template/head.php'); ?>
  </head>
  <body>
    <body>
    <div class="container">
      <?php require('./template/header.php'); ?> 
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h2>Connexion</h2>
          <form action="./scripts/login.php" method="post">
            <div class="form-group">
              <label class="control-label" for="mail"> Email : </label>
              <input type="email" id="mail" name="mail" placeholder="Email" class="form-control" required>
            </div>
            <div class="form-group">
              <label class="control-label" for="password"> Password : </label>
              <input type="password" id="password" name="password" placeholder="Password" class="form-control" required>
            </div>
            <input type="submit" class="btn btn-success" value="Click me">
          </form>
          <a href="createAccount.php">Vous n'avez pas de compte ? Rejoignez-nous ! On est bien</a>
        </div>
      </div>
      <?php require('./template/footer.php'); ?>
    </div>
  </body>
  </body>
</html>