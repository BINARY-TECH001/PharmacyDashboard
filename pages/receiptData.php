<?php 
    if($_POST["action"] == "get_price"){
    $conn = new mysqli('localhost','root','','pharmacy');
    $query = "SELECT * FROM products";
    $result = mysqli_query($conn, $query);
    $data = array();
    while($row = mysqli_fetch_assoc($result)){
        $data[] = $row;
    }
    echo json_encode($data);
    }

?>