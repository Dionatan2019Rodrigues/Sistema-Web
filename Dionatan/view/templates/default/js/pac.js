class Pac{

   constructor(oneX,oneY,oneR,oneA,onePI,oneB){
      this.oneX = oneX;
      this.oneY = oneY;
      this.oneR = oneR;
      this.oneA = oneA;
      this.onePI = onePI;
      this.oneB = oneB;
   }

   dsn(ctx,cor){
     ctx.beginPath();
     ctx.arc(this.oneX,this.oneY,this.oneR,
             this.oneA,this.onePI,this.oneB);
     ctx.fillStyle = cor;
     ctx.fill();
     ctx.closePath();
   }

   move(key){
     if(key == 38 && this.oneY >25){
       this.oneY-=5;
     }
     if(key == 37 && this.oneX >25){
       this.oneX-=5;
     }
     if(key == 39 && this.oneX < 475){
       this.oneX+=5;
     }
     if(key == 40 && this.oneY < 375){
       this.oneY+=5;
     }
   }


}
