class Frut{

   constructor(oneX,oneY,oneR,oneA,onePI){
      this.oneX = oneX;
      this.oneY = oneY;
      this.oneR = oneR;
      this.oneA = oneA;
      this.onePI = onePI;
   }

   dsnFrut(ctx,cor){
     ctx.beginPath();
     ctx.arc(this.oneX,this.oneY,this.oneR,
             this.oneA,this.onePI);
     ctx.fillStyle = cor;
     ctx.fill();
     ctx.closePath();
   }



}
