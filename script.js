const themeButton = document.getElementById("theme");
//bouton theme sombre
themeButton.addEventListener("click", () => {
    document.body.classList.toggle("dark-mode");   
});