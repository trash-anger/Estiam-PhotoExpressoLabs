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
          <form action="#" onsubmit="return submitMyForm();" method="post">
            <div class="form-group">
              <label class="control-label" for="mail"> Email : </label>
              <input type="email" id="mail" name="mail" placeholder="Email" class="form-control" required>
            </div>
            <div class="form-group">
              <label class="control-label" for="password"> Password : </label>
              <input type="password" id="password" name="password" placeholder="Password" class="form-control" required>
            </div>
            <input type="submit" class="btn btn-success" id="connect" value="Click me">
          </form>
          <a href="createAccount.php">Vous n'avez pas de compte ? Rejoignez-nous ! On est bien</a>
        </div>
        <div class="col-md-8 col-md-offset-2">
          <img src="media/img1.jpg" id="img" style="max-height:100%;max-width:100%; height: 500px;" alt="fail"/>
          <button id="btn1" class="btn btn-success">Previous</button>
          <button id="play" class="btn btn-info"> Come on ! </button>
          <button id="btn2" class="btn btn-success pull-right">Next</button>
        </div>
      </div>
      <?php require('./template/footer.php'); ?>
      <script src="scripts/caroussel.js" charset="utf-8"></script>
      <script src="scripts/ConnectAjaxjQuery.js" charset="utf-8"></script>
    </div>
  </body>
  </body>
</html>
