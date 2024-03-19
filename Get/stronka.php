<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
       if(isset($_GET["styl"])){
        if($_GET["styl"]==1){
            echo '<link rel="stylesheet" href="style.css">';
            
        }else{
            echo '<link rel="stylesheet" href="style2.css">';
        }
       }    
    ?>
</head>
<body>
    <h2>Tekst</h2>
</body>
</html>