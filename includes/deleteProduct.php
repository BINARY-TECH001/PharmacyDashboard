<?php
     $conn = mysqli_connect("localhost", "root", "", "pharmacy") or die("Error : " . mysqli_error($conn));
     $productId = $_GET['productId'];
     $query = "DELETE FROM products WHERE productId='$productId'";
     $result = mysqli_query($conn, $query) or die (mysqli_error($conn));
     header("Location: ../pages/allproductts.php");
?>