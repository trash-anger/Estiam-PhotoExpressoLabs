var form = document.querySelector('#form');

function submitMyForm(){
  e.preventDefault();
  var mail = document.querySelector('#mail').value;
  var pwd = document.querySelector('#password').value;
  var xhr = new XMLHttpRequest();
  xhr.open('POST', 'scripts/login.php');
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.send("mail="+mail+"&password="+pwd);

  xhr.onreadystatechange = function () {
    /*var DONE = 4; // readyState 4 means the request is done.
    var OK = 200; // status 200 is a successful return.*/
      if (xhr.status == 200 && xhr.readyState == 4 && xhr.responseText == "test"){
        location.href = 'http://localhost/Estiam-PhotoExpressoLabs/utilisateurs.php';
      }
      else{
        alert('Bad credentials');
      }
  }
}
