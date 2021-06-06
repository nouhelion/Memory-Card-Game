class  AudioControl {

    constructor(){
        this.bgMusic=new Audio('audio/spooky.mp3');
        this.flipSound = new Audio('audio/flip.mp3');
        this.matchSound = new Audio('audio/match.wav');
        this.victorySound = new Audio('audio/victory.wav');
        this.gameOverSound = new Audio('audio/gameOver.wav');
        this.bgMusic.volume = 0.3;
        this.flipSound.volume = 0.09;
        this.bgMusic.loop = true;
    }

    startMusic(){
        this.bgMusic.play();
    }

    stopMusic(){
        this.bgMusic.pause();
        this.bgMusic.currentTime =0;
    }

    flip(){
        this.flipSound.play();
    }

    match(){
        this.matchSound.play();
    }

    victory(){
        this.stopMusic();
        this.victorySound.play();
    }

    gameOver(){
        this.stopMusic();
        this.gameOverSound.play();
    }

}

class Death {

    constructor(totaltime,cards){
      this.cardsArray=cards;
      this.totaltime=totaltime;
      this.timeLeft=totaltime;
      this.timer=document.getElementById('time_remaining');
      this.ticker=document.getElementById('flips');
      this.audioControl=new  AudioControl ();
    }

    startGame(){
        this.cardToCheck=null;
        this.totalClicks=0;
        this.timeRemaining=this.totaltime;
        this.matchedCards=[];
        this.busy=true;

       setTimeout(()=>{
          this.audioControl.startMusic();
          this.shuffleCards();
          this.countDown=this.startCountDown();
          this.busy=false;
       },500);

       this.hideCards();
       this.timer.innerText=this.timeRemaining;
       this.ticker.innerText=this.totalClicks;
    }
    
    hideCards(){
      this.cardsArray.forEach(card=>{
          card.classList.remove('visible');
          card.classList.remove('matched');
      });
    }

    flipCard(card){
     if(this.canFlipCard(card)){
          this.audioControl.flip();
          this.totalClicks++;
          this.ticker.innerText=this.totalClicks;
          card.classList.add('visible');

          //matchshit
          if(this.cardToCheck)
            this.checkForCardMatch(card);
          else 
             this.cardToCheck=card;
     }
    }
  
    checkForCardMatch(card){
        if(this.getCardType(card)==this.getCardType(this.cardToCheck))
            this.cardMatch(card,this.cardToCheck);
        else
            this.cardMismatch(card,this.cardToCheck);
      
      this.cardToCheck=null;
    }
    
    cardMatch(card1,card2) {
       this.matchedCards.push(card1);
       this.matchedCards.push(card2);
       card1.classList.add('matched');
       card2.classList.add('matched');
       this.audioControl.match();
       if(this.matchedCards.length==this.cardsArray.length)
          this.victory();
    }

    cardMismatch(card1,card2){
      this.busy=true;
      setTimeout(()=>{
        card1.classList.remove('visible');
        card2.classList.remove('visible');
        this.busy=false;
      },1000);
    }

     getCardType(card){
       return card.getElementsByClassName('card_value')[0].src;
     }

    startCountDown(){
     return setInterval(() => {
       this.timeRemaining--;
       this.timer.innerText=this.timeRemaining;
       if(this.timeRemaining==0){
         this.gameOver();
       }
     },1000);
    }

     gameOver(){
       clearInterval(this.countDown);
       this.audioControl.gameOver();
       document.getElementById('game-over-text').classList.add('visible');
     }
     
     victory(){
       clearInterval(this.countDown);
       this.audioControl.victory();
       document.getElementById('victory-text').classList.add('visible');
        this.hideCards();     
        }

    //shuffle the cards 
    shuffleCards(){
      for(let i=this.cardsArray.length - 1;i>0;i--)
       {
         let index=Math.floor(Math.random()*(i+1));
         this.cardsArray[index].style.order=i;
         this.cardsArray[i].style.order=index;
       }
    }
    canFlipCard(card){
         return !this.busy && !this.matchedCards.includes(card) && card !== this.cardToCheck;
    }
}



function ready() {
    let overlays = Array.from(document.getElementsByClassName('overlay-text'));
    let cards = Array.from(document.getElementsByClassName('card'));
    let game=new Death(150,cards);
    overlays.forEach(overlay => {
      overlay.addEventListener('click', () => {
        //when u click on start its no longer visible
          overlay.classList.remove('visible');
           //starting the game
           game.startGame();
           //let audioControl = new AudioControl();
           //audioControl.startMusic();
      });
  });
 cards.forEach(card => {
   card.addEventListener('click', () => {
     //flipping the cards
     game.flipCard(card);
   });
 });
  
}

if(document.readyState=='loading'){
  document.addEventListener('DOMContentLoaded',ready());
}
else{
  ready();
}