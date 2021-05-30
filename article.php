<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Articles</title>
</head>
<body>

    <?php include 'header.php' ?>

    <main>

    <div class="container-page-articles">
        <div class="page-article">
            <div class="desc-article">
                <a href='shop.php' class='send-local'>Ajouter au panier</a>
            </div>
        </div>
    </div>


    <?php include 'pastille.php' ?>
    </main>

    <?php include 'footer.php' ?>

    <script src='panier-fonct.js'></script>

    <script>

        let afficheImage = document.querySelector('.page-article');
        let afficheDesc = document.querySelector('.desc-article');
        let buttonSend = document.querySelector('.send-local');
        let str = document.location.href;
        let url = new URL(str);
        let id = url.searchParams.get("id");


        var ourRequest = new XMLHttpRequest();
        ourRequest.open('GET', 'articles.json');
        ourRequest.onload = function(){
        var ourData = JSON.parse(ourRequest.responseText);
        renderImageHTML(ourData);
        renderDescHTML(ourData);
        renderArticleHtml(ourData);
        };
        ourRequest.send();

            function renderImageHTML(image){
            let htmlStringImage = "";
                htmlStringImage += '<img src="' + image[id].img + '"></img>'
                afficheImage.insertAdjacentHTML('beforeend', htmlStringImage);
            }

            function renderDescHTML(desc){
            let htmlStringDesc = "";
                htmlStringDesc += '<p class="titre-article">' + desc[id].name + ' ' + desc[id].color + '</p>'
                htmlStringDesc += '<p class="desc-detail-article">' + desc[id].desc + '</p>';
                htmlStringDesc += '<p class="price-article">' + desc[id].price + '€</p>'
                afficheDesc.insertAdjacentHTML('beforeend', htmlStringDesc);
            }

            function renderArticleHtml(art){
                buttonSend.addEventListener("click", () => {
                localStorage.setItem('article' + art[id].id, JSON.stringify(art[id]));
        })
    }

    </script>

</body>
</html>