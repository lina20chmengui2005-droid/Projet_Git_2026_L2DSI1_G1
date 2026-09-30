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
    ?>
    <ul>
        <?php
        foreach($article as $value) {
            ?>
         <li><?= $value ?> </li>
         <?php
         }
          ?>  
</body>
</html>