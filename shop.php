<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Shop</title>
</head>
<body>

    <?php include 'header.php' ?>

    <main>

    <div class="container-articles">
        <div class="articles-shop">
        </div>
    </div>

        

    <?php include 'pastille.php' ?>
</main>

    <?php include 'footer.php' ?>

    <script src='panier-fonct.js'></script>

    <script>
        let contentArticle = document.querySelector('.articles-shop');

        var ourRequest = new XMLHttpRequest();
        ourRequest.open('GET', 'articles.json');
        ourRequest.onload = function(){
            var ourData = JSON.parse(ourRequest.responseText);
            renderHTML(ourData);
        };
        ourRequest.send();

        function renderHTML(data){
            let htmlString = "";
            for (i = 0; i < data.length; i++){
                htmlString += '<a class="article" href="article.php?id=' + data[i].id + '">';
                htmlString += '<p>' + data[i].name + ' ' + data[i].color + '</p>'
                htmlString += '<img src="' + data[i].img + '"></img><br>'
                htmlString += '<p class="price-shop">' + data[i].price + '€</p>'
                htmlString += '</a>';
            }
            contentArticle.insertAdjacentHTML('beforeend', htmlString);
        };

    </script>

    
</body>
</html>