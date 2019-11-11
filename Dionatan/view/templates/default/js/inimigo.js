class Rec{

   constructor(oneX,oneY,oneL,twoL){
      this.oneX = oneX;
      this.oneY = oneY;
      this.oneL = oneL;
      this.twoL = twoL;
   }

   desenha(ctx,cor){
     ctx.beginPath();
     ctx.rect(this.oneX,this.oneY,this.oneL,this.twoL);
     ctx.fillStyle = cor;
     ctx.fill();
     ctx.closePath();
   }

   moveLeft(width,height,speed){
     this.oneX -= speed;
     if(this.oneX < 0){
        this.oneX = width;
        this.oneY = Math.random()*(height-this.oneL);
     }
   }

   moveRight(width,height,speed){
     this.oneY -= speed;
     if(this.oneY < 0){
        this.oneX = Math.random()*(width-this.twoL);
        this.oneY = height;
     }
   }

   moveDiag(width,height,speed){
     this.oneX -= speed;
     this.oneY -= speed;
     if(this.oneY < 0 && this.oneX < 0){
        this.oneX = Math.random()*(width-this.twoL);
        this.oneY = Math.random()*(height-this.oneL);
     }
   }



}
