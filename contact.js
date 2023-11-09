
//Création d'un  tableau de magasin
//et récupération des données 
let Magasin=["nice","monaco","paris","toulouse","New_York","Belgique"];
let retour=document.getElementById("resulat");
let recherhe=document.getElementById("recherche");
let magasinfinal; 


//événement 
recherhe.addEventListener('keyup',(e)=>{
    retour.innerHTML="";
    let magasinfinal=e.target.value.toLowerCase();
    
for(let i = 0; i < Magasin.length; i++){
    
    const magasin = Magasin[i]  
    
    //si une lettre coresspond à un mot du tableau on affiche les mots correspondant;
    if(magasin.toLowerCase().includes(magasinfinal)){
     retour.innerHTML+=`<h1>${Magasin[i]}</h1><br>`
     retour.style.visibility=('visible');
     
    }
   
}
});

const themeButton = document.getElementById("theme");
//bouton theme sombre
themeButton.addEventListener("click", () => {
    document.body.classList.toggle("dark-mode");  
    retour.style.color=('blue'); 
});




