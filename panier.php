<div class="content-panier">

<p class="vide"></p>

<a href="validate.php" class='validate-panier' onclick="validate()">Valider le panier</a>
</div>

<script>

if (localStorage.length >0){

        let articlePanier = document.querySelector('.content-panier');
        let totalArticle = 0;
        let counter = 0;
        let livraison = 1;
        let sommeTotal = 0;
        var validation = document.querySelector('.validate-panier');

        for (i = 0; i < localStorage.length; i++) {
            var req = (JSON.parse(localStorage.getItem(localStorage.key(i))));
            var htmlString = '';
            htmlString += '<div class="panier-content-articles">'
            htmlString += '<p class="titre-panier">' + req.name + ' ' + req.color + '</p>';
            htmlString += '<p class="prix-panier">' + req.price + '€</p>';
            htmlString += '<img src="' + req.img + '">';
            htmlString += '<button class="clear-btn" href="#" onclick="myFunction(this, ' + req.id + ')">Supprimer cet article</button>'
            htmlString += '</div>';
            articlePanier.insertAdjacentHTML('beforeend', htmlString);

                function myFunction(self, id){
                        localStorage.removeItem('article' + id);
                }
                
            };

            while(counter <= localStorage.length -1){
            var test = JSON.parse(localStorage.getItem(localStorage.key(counter)));
                totalArticle += test.price;
                sommeTotal += test.price + livraison;
                counter ++;
            }

                var htmlString = "";
                htmlString += '<div class="panier-content-articles">'
                htmlString += '<p class="total-order">' + 'Total article: ' + totalArticle + '€</p>';
                htmlString += '<p class="total-order">' + 'Total livraison : ' + (livraison*localStorage.length) + '€</p>';
                htmlString += '<p class="total-order">' + 'Total : ' + sommeTotal + '€</p>';
                htmlString += '</div>';
                articlePanier.insertAdjacentHTML('beforeend', htmlString);
        }else{
                var vide = document.querySelector('.vide');
                var validation = document.querySelector('.validate-panier');
                vide.innerHTML = 'Le panier est vide';
                validation.style.display = 'none';
        }




    </script>