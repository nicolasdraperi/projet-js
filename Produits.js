/* Partie Barre de recherche  */
lignes = document.getElementsByClassName("ligne")
document.getElementById("searchInput").addEventListener("keyup",(e) => {

let input = e.target.value.toLowerCase();

for(let i = 0; i < lignes.length; i++){
if(lignes[i].innerText.toLowerCase().includes(input)){
  lignes[i].style.display = "block"
}
else{
  lignes[i].style.display = "none"
}
}
})

// Partie Bouton dark/light mode 
const themeButton = document.getElementById("theme");
//bouton theme sombre
themeButton.addEventListener("click", () => {
document.body.classList.toggle("dark-mode");   
});

// Partie PopUp 

let popup = document.getElementById("popup");
let ouiBtn = document.getElementById("ouiBtn");
let nonBtn = document.getElementById("nonBtn");

ouiBtn.addEventListener("click", function() {
  popup.style.display = "none"
});

nonBtn.addEventListener("click", function() {
 alert("Il faut accepter sinon y'a pas de site mouahahahah !! ")
});

// J'ai commencé la partie localStorage mais comme on devait mettre les fichiers en commun 
// J'ai pas eu le temps mais je te mets le début en commentaire


/*if(localStorage.getItem("ouiBtn") == true){
  localStorage.setItem('MonPokedex', JSON.stringify([]))
}*/

