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
        $image = $row['image'];
        $email = $row['email'];

        $response = array('status' => 'success', 'role' => $role, 'firstname' => $firstname, 'lastname' => $lastname, 'image' => $image, 'id' => $id, 'email'=>$email);

    }

    $stmt->close();
    $conn->close();
}

echo json_encode($response);
?>

