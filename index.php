<!-- GOAL:
Stampare a schermo una decina di dischi musicali
(vedi screenshot) in due modi diversi:
- Solo con l'utilizzo di PHP, che stampa
direttamente i dischi in pagina: al caricamento
della pagina ci saranno tutti i dischi.
- Attraverso l'utilizzo di AJAX: al caricamento
della pagina ajax chiederà attraverso una
chiamata i dischi a php e li stamperà
attraverso handlebars.
Utilizzare: Html, JS, jQuery, handlebars, Php
OPZIONALE:
- Attraverso un'altra chiamata ajax, filtrare gli
album per artista



 -->

 <?php 
    require 'data.php';
?>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="container">
            <img ID="img" src="1.png" alt="spotify">
        </div>
    </header>
    <main>
        <div class="container blocco">

            <?php 
        
        foreach ($data['response'] as $value) {
            ?>

            <div class="foreach">

            <div><img src="<?php echo $value['poster'];?>" alt=""></div>
            <div class="title"> <?php echo $value['title']?>;</div>
            <div class="author"><?php echo $value['author']?>;</div>
            <div class="genre"><?php echo $value['genre']?>;</div>
            <div class="year"><?php echo $value['year']?>;</div>

            </div>
           <?php
        };
        ?>

        </div>
        
        
    </main>
    <footer>

    </footer>
    </body>
</html>