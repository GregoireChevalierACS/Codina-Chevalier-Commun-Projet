
let wrap = document.getElementById("wrap");
window.addEventListener("DOMContentLoaded", (event) => {
    let timer = 0 
   let mousePos = {}; 

   function getRandomInt(min, max) {
    return Math.round(Math.random() * (max - min + 1)) + min;
  }
  window.onmousemove = event => {
    mousePos.x = event.clientX;
    mousePos.y = event.clientY;
   
    
  }
let draw = setInterval(function(){
    if (mousePos.x >= 0 && mousePos.y >= 0){
        let range = 10; 
        let color = "background: rgb(" + 255 + "," + 255 + "," + 255 + ");"; 
        let sizeInt = getRandomInt(10, 30); 
        let size = "height: " + sizeInt + "px; width: " + sizeInt + "px;";
        let left = "left: " + getRandomInt(mousePos.x - range - sizeInt, mousePos.x + range) + "px;"; 
        let top =  "top: " + getRandomInt(mousePos.y - range - sizeInt, mousePos.y + range) + "px;"; 
        let style = left + top + color + size;
        let ball = document.createElement("div"); 
        ball.style = style; 
        ball.classList.add("ball");
        wrap.appendChild(ball); 
        
        balls = document.querySelectorAll(".ball") 
       
        if (timer == 100){
           wrap.firstChild.remove(); 
            for (i=10; i > 0; i--){
                wrap[i].remove();
            }
            timer = 0 
        } else{
            timer++
        }
    }
},1)




  });
