<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/article.css" />
    <title>Listes des articles</title>
  </head>

  <body>
    <div class="header"><h1>Listes des articles</h1></div>
    <button><a href="article.php?panier">Voir panier</a></button>
    <div class="container">
      <div class="card">
        <div class="card-header">
          <h2 class="nom" id="nom1">Casque</h2>
        </div>
        <img
          src="https://joueclub-joueclub-fr-storage.omn.proximis.com/Imagestorage/imagesSynchro/0/0/359ee1919982d3eecc018c3edcbeb0f5a259e474_37000001.jpeg"
          alt=""
        />
        <div class="card-body">
          <p class="description">CAsque audio</p>
          <span class="prix" id="prix1">56€</span>
          Quantité<input
            type="number"
            class="quantite"
            id="quantite1"
            value="1"
          />
          <button onclick="ajouterProduit(1)">Ajouter au Panier</button>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <h2 class="nom" id="nom2">Télé samsung 4k</h2>
        </div>
        <img
          src="https://images.samsung.com/is/image/samsung/p6pim/fr/ue70au7105kxxc/gallery/fr-uhd-4k-tv-ue70au7105kxxc-front-gray-431664179?$720_576_PNG$"
          alt=""
        />
        <div class="card-body">
          <p class="description">Téléviseur HD 4k</p>
          <span class="prix" id="prix2">1200€</span>
          Quantité<input
            type="number"
            class="quantite"
            id="quantite2"
            value="1"
          />
          <button onclick="ajouterProduit(2)">Ajouter au Panier</button>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <h2 class="nom" id="nom3">PS5</h2>
        </div>
        <img
          src="data:image/jpeg;base64,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"
          alt=""
        />
        <div class="card-body">
          <p class="description">Console de jeux</p>
          <span class="prix" id="prix3">450€</span>
          Quantité<input
            type="number"
            class="quantite"
            id="quantite3"
            value="1"
          />
          <button onclick="ajouterProduit(3)">Ajouter au Panier</button>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <h2 class="nom" id="nom4">Livre Cherub tome 1</h2>
        </div>
        <img
          src="https://www.babelio.com/couv/CVT_Cherub-Mission-1--100-jours-en-enfer_9873.jpeg"
          alt=""
        />
        <div class="card-body">
          <p class="description">Livre d'espionnage</p>
          <span class="prix" id="prix4">15€</span>
          Quantité<input
            type="number"
            class="quantite"
            id="quantite4"
            value="1"
          />
          <button onclick="ajouterProduit(4)">Ajouter au Panier</button>
        </div>
      </div>
      <div class="card">
        <div class="card-header">
          <h2 class="nom" id="nom5">Souris Logitech</h2>
        </div>
        <img
          src="https://m.media-amazon.com/images/I/718b9wK3eaL._AC_SX425_.jpg"
          alt=""
        />
        <div class="card-body">
          <p class="description">Souris gamer</p>
          <span class="prix" id="prix5">50€</span>
          Quantité<input
            type="number"
            class="quantite"
            id="quantite5"
            value="1"
          />
          <button onclick="ajouterProduit(5)">Ajouter au Panier</button>
        </div>
      </div>
    </div>

    <script src="JS/script.js"></script>
  </body>
</html>
