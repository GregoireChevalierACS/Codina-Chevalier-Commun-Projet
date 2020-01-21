console.log("coucou");
document.getElementById('form').addEventListener('submit', function(e){
    e.preventDefault();
   let form = document.getElementById("form"); 
   let formData = new FormData(form);

   
   var request = new XMLHttpRequest();
   request.onreadystatechange = alertContents;
   request.open("POST", form.getAttribute('action'),true);
   request.setRequestHeader('X-Requested-With','xmlhttprequest'); 
   request.send(formData);
   
   function alertContents() {    
   let divForm = document.getElementById("changePass"); 
   console.log(divForm);
       if (request.readyState === XMLHttpRequest.DONE) {
         if (request.status === 200) {
           let response = request.responseText;
           let divAlert = document.createElement("DIV"); 
           divAlert.classList.add("alert-success");
           divAlert.classList.add("alert"); 
           let content =  document.createTextNode('Le mot de passe a bien été modifié'); 
           divAlert.appendChild(content); 
           divForm.appendChild(divAlert); 
           document.getElementById("pass").value="";
           
         } else {
           alert('Un problème est survenu avec la requête.');
         }
       }
     } 
 
    
})
