<!doctype html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>Titre de la page</title>
  <link rel="stylesheet" href="New_Produits.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>



<header>
    <div class="px-3 py-2 text-bg-dark border-bottom">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
          </a>

          <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
            <li>
              <a href="accueil.html" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#home"></use></svg>
                Accueil
              </a>
            </li>
            <li>
              <a href="Produits.php" class="nav-link text-secondary">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#speedometer2"></use></svg>
                Produit
              </a>
            </li>
            <li>
              <a href="Contacternous.html" class="nav-link text-white">
                <svg class="bi d-block mx-auto mb-1" width="24" height="24"><use xlink:href="#table"></use></svg>
                Contact
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="px-3 py-2 border-bottom mb-3">
      <div class="container d-flex flex-wrap justify-content-center">
        <form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto" role="search">
          
        </form>

        <div class="text-end">
        <a href="login.html">
          <button  type="button" class="btn btn-light text-dark me-2">Login</button>
        </a> 
        </div>
      </div>
    </div>
</header>
<!-- Partie PopUp -->
<body>
<div id="popup" class="popup">
    <p>Acceptez-vous les faux paramètres de confidentialité ?</p>
    <button id="ouiBtn">Oui</button>
    <button id="nonBtn">Non</button>
</div>

<!-- Partie Fond d'écran -->
<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column" style="background-image: url('https://www.ascii-info.com/img/slideshows/35.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;color :white;">
    <div style="background-color: rgba(0, 0, 0, 0.5); width: 100%; height: 100%;">

<!-- Partie Header Bootstrap -->


<!-- Partie Produits qui est lié au fichier afficher_produits.php avec la barre de recherche -->
    <div class="container">
      <h1>Produits Informatiques</h1>
      <input type="searchbar" name="search" id="searchInput">
      <br>
      <br>
      <?php include('afficher_produits.php'); ?>
        </tbody>
      </table>
    </div>

<!-- Partie Footer Bootstrap -->

<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <p class="col-md-4 mb-0">© 2023 Company, Inc</p>

    <a class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
      <svg class="bi me-2" width="40" height="32"><use xlink:href="#bootstrap"></use></svg>
    </a>

    <ul class="nav col-md-4 justify-content-end">
      <button id="theme"type="button" class="btn btn-secondary">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon-fill" viewBox="0 0 16 16">
          <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z"></path>
        </svg>
      </button>
      <li class="nav-item"><a href="accueil.html" class="nav-link px-2 ">Accueil</a></li>
      <li class="nav-item"><a href="Produits.php" class="nav-link px-2 ">Produit</a></li>
      <li class="nav-item"><a href="Contacternous.html" class="nav-link px-2 ">Contact</a></li>
    </ul>
</footer>
</div>
</div>
<!-- Partie  Fichier javascript -->

<script defer src="Produits.js"></script>
  </body>
</html>