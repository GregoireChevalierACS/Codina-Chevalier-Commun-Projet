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
  quizz(); 
  