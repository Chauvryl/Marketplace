let article = [];

function ajouterProduit(x) {
  nom = document.getElementById(`nom${x}`).innerHTML;
  prix = document.getElementById(`prix${x}`).innerHTML;
  quantite = document.getElementById(`quantite${x}`).value;

  let articleAjouter = {nom,prix,quantite}
  article.push(articleAjouter)
  console.log(article)
}
