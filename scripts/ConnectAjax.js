function submitMyForm(){
  var mail = document.querySelector('#mail').value;
  var pwd = document.querySelector('#password').value;
  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'scripts/login.php');
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.send("mail="+mail+"&password="+pwd);

  xhr.onreadystatechange = function () {
    /*var DONE = 4; // readyState 4 means the request is done.
    var OK = 200; // status 200 is a successful return.*/
    console.log(xhr);
      if (xhr.status == 200 && xhr.readyState == 4){
        //location.href = 'http://localhost/Estiam-PhotoExpressoLabs/utilisateurs.php';
        if(xhr.responseText == "ok"){
          location.href = 'http://localhost/Photo-Expresso-Lab-Bootstrap-PHP/utilisateurs.php';
        } else {
          alert('Bad credentials');
        }
      }
  }
  return false;
}
