var button1 = document.querySelector('#btn1');
var button2 = document.querySelector('#btn2');
var img = document.querySelector('#img');
var imgnum = 1;
button1.onclick = function(){
  if(imgnum > 1){
    imgnum -= 1;
  }
  else if(imgnum == 1){
    imgnum = 5;
  }
  img.setAttribute('src', 'media/img'+imgnum+'.jpg');
};
button2.onclick = function(){
  if(imgnum < 5){
    imgnum += 1;
  }
  else if(imgnum == 5){
    imgnum = 1;
  }
  img.setAttribute('src', 'media/img'+imgnum+'.jpg');
};

document.querySelector('#play').onclick = function(){
  var myInt = setInterval(function (){
    imgnum++;
    if(imgnum == 5){
      imgnum = 1;
    }
    img.setAttribute('src', 'media/img'+imgnum+'.jpg');
  }, 1000);
};

