<!DOCTYPE html>
<html>
  <head>
    <?php require('./template/head.php'); ?>
  </head>
  <body>
    <div class="container">
      <?php require('./template/header.php'); ?> 
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <h2>Inscription</h2>
          <form action="./scripts/createAccount.php" method="post">
            <div class="form-group">
              <label class="control-label" for="mail"> Email : </label>
              <input type="email" id="mail" name="mail" placeholder="Email" class="form-control" required>
            </div>
            <div class="form-group">
              <label class="control-label" for="firstname"> Firstname : </label>
              <input type="text" id="firstname" name="firstname" placeholder="Firstname" class="form-control" required>
            </div>
            <div class="form-group">
              <label class="control-label" for="lastname"> Lastname : </label>
              <input type="text" id="lastname" name="lastname" placeholder="Lastname" class="form-control" required>
            </div>
            <div class="form-group">
              <label class="control-label" for="password"> Password : </label>
              <input type="password" id="password" name="password" placeholder="Password" class="form-control" required>
              <div class="progress">
                <div class="progress-bar progress-bar-danger" role="progressbar" style="width: 0%;min-width: 2em;">
                  0%
                </div>
              </div>
              <p class="weakness"> Mot de passe trop faible </p>
            </div>
            <div class="form-group">
              <label class="control-label" for="password"> Confirmation password : </label>
              <input type="password" id="password2" name="password2" placeholder="Confirmation password" class="form-control" required>
            </div>
            <input type="submit" class="btn btn-success" value="Click me">
          </form>
        </div>
      </div>
      <script src="./scripts/verifForm.js"></script>
      <?php require('./template/footer.php'); ?>
    </div>
  </body>
</html>