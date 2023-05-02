<?php 

$id = $_POST['id'];
$conn = new mysqli('localhost','root','','pharmacy');

if ($conn -> connect_errno){
    $response = array('status' => 'error', 'message' => 'Failed to connect to mysql: ' . $conn->connect_error);
} else {
    $stmt = $conn-> prepare("SELECT * FROM user WHERE id = $id");
    $stmt->execute();

    if ($stmt->errno){
        $response = array('status' => 'error', 'message' => 'Failed to fetch data from db: ' . $stmt->error);
    }else{
        $result = $stmt->get_result();
        $row = $result->fetch_assoc();

        $role = $row['role'];
        $firstname = $row['firstname'];
        $lastname = $row['lastname'];
        $username = $row['username'];
        $image = $row['image'];
        $number = $row['number'];
        $address = $row['address'];
        $email = $row['email'];
        $country = $row['country'];
        $state = $row['state'];

        $response = array('status' => 'success', 'address' => $address, 'country' => $country, 'state'=>$state, 'number'=>$number, 'username' => $username, 'role' => $role, 'firstname' => $firstname, 'lastname' => $lastname, 'image' => $image, 'id' => $id, 'email'=>$email);

    }

    $stmt->close();
    $conn->close();
}

echo json_encode($response);
?>

