function quizz(){


  
  document.getElementById('form').addEventListener('submit', function(e){
     e.preventDefault();
    let form = document.getElementById("form"); 
    let formData = new FormData(form);
    let divQuizz = document.getElementById("quizz");  
    
    var request = new XMLHttpRequest();
    request.onreadystatechange = alertContents;
    request.open("POST", form.getAttribute('action'),true);
    request.setRequestHeader('X-Requested-With','xmlhttprequest'); 
    request.send(formData);
    
    function alertContents() {
        if (request.readyState === XMLHttpRequest.DONE) {
          if (request.status === 200) {
            let response = request.responseText;
            deleteChild(divQuizz);       
            divQuizz.innerHTML = response;
            quizz(); 
          } else {
            alert('Un problème est survenu avec la requête.');
          }
        }
      } 
  
      function deleteChild(parentNode){
          let child = parentNode.lastElementChild;
          while(child){
            parentNode.removeChild(child); 
            child = parentNode.lastElementChild;
          } 
      }  
  })
  } 
  // Gestion parralaxe pour affichage de la planète
  window.addEventListener("scroll", function(event) {
    
    var topDistance = this.pageYOffset;
    
    var layers = document.querySelectorAll("[data-type='parallax']");
    for (var i = 0; i < layers.length; i++) {
      var layer = layers[i];
      var depth = layer.getAttribute("data-depth");
      var translate3d = 'translate3d(0, ' + -(topDistance * depth) + 'px, 0)';
      layer.style['-webkit-transform'] = translate3d;
      layer.style['-moz-transform'] = translate3d;
      layer.style['-ms-transform'] = translate3d;	
      layer.style['-o-transform'] = translate3d;
      layer.style.transform = translate3d;
    }
  });

 

  // Hover IMG pour vaisseau qui décolle
  let shipReturn = document.getElementById('shipReturn')
  shipReturn.addEventListener('mouseover', function(e){
    this.src = "Ressources/VisuelsOK/startscreenShipV4.gif";

  })
  
  shipReturn.addEventListener('mouseout', function(){
    this.src = "Ressources/VisuelsOK/startscreenShipV4.png";
  })







  quizz(); 
  