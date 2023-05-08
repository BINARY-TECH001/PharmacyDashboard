

<?php 
    $objectData = json_decode(file_get_contents('php://input'), true);
    
    $conn = new mysqli('localhost','root','','pharmacy');
    if ($conn -> connect_error){
        die("Connection Failed! " . $conn->connect_error);
    }

    $sql = "SELECT productName, price from products WHERE productName IN ('" .implode("','", array_values($objectData)) . "')";
    $result = $conn->query($sql);
    $prices = array();
    if ($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            $prices[$row["productName"]] = $row["price"];
        }
    }
    header('Content-Type: application/json');
    echo json_encode($prices);

    $conn->close();
    
?>