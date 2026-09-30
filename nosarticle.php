<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $article = ["imprimante" , "style" , "Enceintes" , "Tablette"] ; 
    echo isset($article)?"<h1>liste des articles":"aucun article a afficher">
    ?>
    <ul>
        <?php
        foreach($article as $value) {
            ?>
         <li><?= $value ?> </li>
         <?php
         }
          ?>  
    </ul>
</body>
</html>