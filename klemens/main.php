<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        tr td{
            border: solid 1px black;
        }
        tr th{
            border: solid 1px black;
        }
    </style>
</head>
<body>
    <?php
    require "zajecia.php";
    if(isset($_POST['submit'])){
        $nazwa=$_POST['nazwa'];
        $cena=$_POST['cena'];
        $sztuki=$_POST['sztuki'];
        $sql2= "insert into towar(nazwa,cena,sztuki)
        Values ('$nazwa',$cena,$sztuki)";
        if (mysqli_query($conn, $sql2)) {
            echo "New record has been added successfully !";
         } else {
            echo "Error: " . $sql2 . ":-" . mysqli_error($conn);
         }
     }
    $sql="Select *from towar;";
    $wynik=mysqli_query($conn,$sql);
    if(!$wynik){
        echo "Blad zapytania select".mysqli_error();
    }
    else{
        echo"<br>";
        echo "ok";
    }
    
    echo "<table style = 'border: solid 1px black;'>";
    echo "<tr><th>Id</th><th>Nazwa</th><th>cena</th><th>sztuki</th><th>usuwanie</th></tr>";
    while($wiersz=mysqli_fetch_assoc($wynik)){
        $id=$wiersz["id"];
        echo "<tr><td>".$wiersz["id"]."</td><td>".$wiersz["nazwa"]."</td><td>".$wiersz["cena"]."</td><td>".$wiersz["sztuki"]."</td>";
        echo "<td><a href=\"usun.php?id=$id\">usuń</a></td></tr>";
    }
    echo "</table>";
    mysqli_close($conn);

    ?>

</body>
</html>