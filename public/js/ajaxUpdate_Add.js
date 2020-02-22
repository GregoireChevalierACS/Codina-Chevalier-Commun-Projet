let inputs = document.getElementsByClassName("champs");
let formAdd = document.getElementById("addEntries");
let formUpdate = document.getElementById("updateEntries");

function removeContentInput(inputs){

  for (input of inputs){
    input.value = ""; 
  }

} 

if (formAdd != null){
  formAdd.addEventListener('submit', function(e){
    e.preventDefault();
    console.log("coucou je suis un submit"); 

    let formData = new FormData(formAdd);

   
   var request = new XMLHttpRequest();
   request.onreadystatechange = alertContents;
   request.open("POST", formAdd.getAttribute('action'),true);
   request.setRequestHeader('X-Requested-With','xmlhttprequest'); 
   request.send(formData);
   
   function alertContents() {    
       if (request.readyState === XMLHttpRequest.DONE) {
         if (request.status === 200) {
          let response = request.responseText;
          let divNewAlert = document.getElementById("alert")
          let divAlert = document.createElement("P"); 

           divAlert.classList.add("alert-success");
           divAlert.classList.add("alert");
           divAlert.id="newAdd"; 
           let content =  document.createTextNode('Le sujet a été bien ajouté ! '); 
           divAlert.appendChild(content); 
           divNewAlert.appendChild(divAlert);
           document.location.href = "#haut"
           removeContentInput(inputs);

           
         } else {
           alert('Un problème est survenu avec la requête.');
         }
       }
     } 

 

}); 

} else {

  formUpdate.addEventListener('submit', function(e){
    e.preventDefault();
    console.log("coucou je suis un submit"); 

    let formData = new FormData(formUpdate);

   
   var request = new XMLHttpRequest();
   request.onreadystatechange = alertContents;
   request.open("POST", formUpdate.getAttribute('action'),true);
   request.setRequestHeader('X-Requested-With','xmlhttprequest'); 
   request.send(formData);
   
   function alertContents() {    
       if (request.readyState === XMLHttpRequest.DONE) {
         if (request.status === 200) {
          let response = request.responseText;
          let divNewAlert = document.getElementById("alert")
          let divAlert = document.createElement("P"); 

           divAlert.classList.add("alert-success");
           divAlert.classList.add("alert");
           divAlert.id="update"; 
           let content =  document.createTextNode('Le sujet a été bien modifié ! '); 
           divAlert.appendChild(content); 
           divNewAlert.appendChild(divAlert);
           document.location.href = "#haut"
           

           
         } else {
           alert('Un problème est survenu avec la requête.');
         }
       }
     }})


}


