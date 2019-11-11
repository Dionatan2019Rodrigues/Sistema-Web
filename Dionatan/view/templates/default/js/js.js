var canvas = document.getElementById('canvas');
var ctx = canvas.getContext('2d');
var borda = new Border(0,0,500,400);
var pacman = new Pac(40, 40, 20, 0, Math.PI * 2, true);
var frutilla = new Frut(Math.random()*450, Math.random()*350, 15, 0, Math.PI * 2);
var inimigo_1 = new Rec(Math.random()*475,25,60,60);
var inimigo_2 = new Rec(25,Math.random()*375,60,60);
var inimigo_3 = new Rec(Math.random()*475,Math.random()*375,60,60);

var img = new Image();
img.src = "js/img.jpg";

var key=0;

var left = 0;//37;
var top = 0;//38;
var right = 0;//39;
var boot = 0;//40;

var score = 0;
var width = 500;
var height = 400;

function Colisao(pacman,frutilla){
  var x1 = pacman.oneX;
  var y1 = pacman.oneY;
  var r1 = pacman.oneR;
  var x2 = frutilla.oneX;
  var y2 = frutilla.oneY;
  var r2 = frutilla.oneR;

  if((x1-x2)**2 + (y1-y2)**2 <= (r1+r2)**2){
     //console.log("COLIDIU");
     console.log("x1"+x1+"y1"+y1+"x2"+x2+"y2"+y2+"r1"+r1+"r2"+r2);
     return true;
  }else{
    return false;
  }
}

function Colide(pacman){

}

function Pscore(){
  var msg = "Pontos Ganhos: "+score; // var = let
  ctx.fillStyle="white";
  ctx.font = "28px sans-serif";
  var texto = width/2 - ctx.measureText(msg).width/2; // var = let
  ctx.fillText(msg, 100, 100);
  //console.log(height);
}

function Smile(){

  borda.desN(ctx,"black");
  //console.log(img);
  ctx.drawImage(img,0,0);

  if(Colisao(pacman, frutilla) == true){
     frutilla = new Frut(Math.random()*450, Math.random()*350, 15, 0, Math.PI * 2);
     score = score+1;
  }

  Pscore();



  pacman.dsn(ctx,"blue");
  frutilla.dsnFrut(ctx,"red");

  inimigo_1.desenha(ctx,"purple");
  inimigo_1.moveLeft(500,400,2);

  inimigo_2.desenha(ctx,"green");
  inimigo_2.moveRight(500,400,2);

  inimigo_3.desenha(ctx,"grey");
  inimigo_3.moveDiag(500,400,2);

  pacman.move(key);
  requestAnimationFrame(Smile);
}



window.addEventListener('keydown', function(e){
  key = e.which;
});

window.addEventListener('keyup', function(e){
key = 0;
});

Smile();
