class Border{

   constructor(oneX,oneY,oneL,twoL){
      this.oneX = oneX;
      this.oneY = oneY;
      this.oneL = oneL;
      this.twoL = twoL;
   }

   desN(ctx,cor){
     ctx.beginPath();
     ctx.fillStyle = "white";
     ctx.rect(this.oneX,this.oneY,this.oneL,this.twoL);
     ctx.strokeStyle = cor;
     ctx.fill();
     ctx.stroke();
     ctx.closePath();

     ctx.beginPath();
     ctx.rect(this.oneX-1,this.oneY-1,this.oneL,this.twoL);
     ctx.strokeStyle = cor;
     ctx.stroke();
     ctx.closePath();

   }



}
