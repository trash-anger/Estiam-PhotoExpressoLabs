function submitMyForm(){
  var mail = $('#mail').val();
  var pwd = $('#password').val();
  $.ajax({
    method: "POST",
    url: "./scripts/login.php",
    data: { mail: mail, password: pwd}
  })
  .done(function( msg ) {
    if(msg == "ok"){
      location.href = 'http://localhost/Photo-Expresso-Lab-Bootstrap-PHP/utilisateurs.php';
    } else {
      alert('Bad credentials');
    }
  });
  return false;
}
