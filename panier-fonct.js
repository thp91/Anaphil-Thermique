let imgPanier = document.querySelector(".img-panier");
let contentPanier = document.querySelector(".content-panier");
let texte = document.querySelector(".txt")
let ouverture = false;

imgPanier.addEventListener("click", () => {
    if (ouverture == false){
        contentPanier.style.opacity = '1';
        ouverture = true;
    }else{
        contentPanier.style.opacity = '0';
        ouverture = false;
    }
})