console.log("coucou");
document.getElementById('form').addEventListener('submit', function(e){
    e.preventDefault();
 
   let form = document.getElementById("form"); 
   let input1 = document.getElementById("pass").value; 
   let input2 = document.getElementById("confPass").value;
   
   if( input1 != input2){

    
   let divForm = document.getElementById("changePass"); 
       let divAlert = document.createElement("P");
          divAlert.id="wrongPass"; 
           divAlert.classList.add("alert-danger");
           divAlert.classList.add("alert"); 
           let content =  document.createTextNode('Les mots de passe ne correspondent pas'); 
           divAlert.appendChild(content); 
           divForm.appendChild(divAlert); 
           document.getElementById("pass").value="";
           document.getElementById("confPass").value="";

   } else{
    console.log("test")
    let oldDiv = document.getElementById("wrongPass"); 
    let oldDivGood = document.getElementById("GoodPass"); 
    if(oldDiv != null){
     
      oldDiv.remove();

    }

    if(oldDivGood != null){
      oldDivGood.remove();
    }
    let formData = new FormData(form);

   
   var request = new XMLHttpRequest();
   request.onreadystatechange = alertContents;
   request.open("POST", form.getAttribute('action'),true);
   request.setRequestHeader('X-Requested-With','xmlhttprequest'); 
   request.send(formData);
   
   function alertContents() {    
   let divForm = document.getElementById("changePass"); 
       if (request.readyState === XMLHttpRequest.DONE) {
         if (request.status === 200) {
          let response = request.responseText;
          let divAlert = document.createElement("P"); 
           divAlert.classList.add("alert-success");
           divAlert.classList.add("alert");
           divAlert.id="GoodPass"; 
           let content =  document.createTextNode('Le mot de passe a bien été modifié'); 
           divAlert.appendChild(content); 
           divForm.appendChild(divAlert); 
           document.getElementById("pass").value="";
           document.getElementById("confPass").value="";
           
         } else {
           alert('Un problème est survenu avec la requête.');
         }
       }
     } 

   }

   
 
    
})
