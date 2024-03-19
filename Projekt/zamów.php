<?php
session_start();
if(isset($_POST["submit"])){
          include "connect.php";

          $cartItems = $_SESSION['cart'];

    // Iteracja przez elementy koszyka
    foreach ($cartItems as $product) {
        $productId = $product['id'];
        $productName = $product['name'];
        $productPrice = $product['price'];

        // Zapisanie produktu do bazy danych
        $sql = "INSERT INTO products (id,name,price) VALUES ('$productId', '$productName', '$productPrice')";
        mysqli_query($conn, $sql);
    }

    // Zakończenie sesji
    unset($_SESSION['cart']);
    session_destroy();
    header('Location: koszyk.php');
    exit();
}else{
          header('Location: koszyk.php');
          exit();
         }
?>