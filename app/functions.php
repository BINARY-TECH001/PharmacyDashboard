
<?php
// FUNCTION TO VALIDATE LOGIN STARTS HERE
$conn = new mysqli('localhost','root','','pharmacy');

function saveLoginDetails(){
    global $conn;
        $username = mysqli_real_escape_string($conn,$_POST['username']);
        $password = mysqli_real_escape_string($conn,$_POST['password']);
        $password = md5($password);
        $query = mysqli_query($conn,"SELECT firstname, lastname, email, username, role, number, address, password, image, joined, state, zipcode, country FROM user");
        while($row=mysqli_fetch_array($query))
        {
            $db_firstname=$row["firstname"];
            $db_lastname=$row["lastname"]; 
            $db_username=$row["username"];
            $db_password=$row["password"];
            $db_role=$row["role"];
            $db_number=$row["number"];
            $db_email = $row["email"];
            $db_image = $row["image"];
            
            if($username==$db_username && $password==$db_password){
                session_start();
                $_SESSION["firstname"]=$db_firstname;              
                $_SESSION["lastname"]=$db_lastname;
                $_SESSION["username"]=$db_username;
                $_SESSION["role"]=$db_role;
                $_SESSION["number"]=$db_number;
                $_SESSION["email"] = $db_email;
                $_SESSION["image"] = $db_image;
                
                if($_SESSION["role"]=='Admin'  or $_SESSION['role']=='Worker'){
                    echo '<script>window.location.href="./pages/dashboard.php"</script>';
                }
            }
        
        }
    };

?>

<?php
    function add_User(){
        global $conn;
        if(isset($conn,$_POST['submit'])){
            $firstName = mysqli_real_escape_string($conn,$_POST['firstName']);
            $lastName = mysqli_real_escape_string($conn,$_POST['lastName']);
            $password = mysqli_real_escape_string($conn,$_POST['password']);
            $cpassword = mysqli_real_escape_string($conn,$_POST['cpassword']);     
            $email = mysqli_real_escape_string($conn,$_POST['email']);
            $role = mysqli_real_escape_string($conn,$_POST['role']); 
            $number = mysqli_real_escape_string($conn,$_POST['number']); 
            $address = mysqli_real_escape_string($conn,$_POST['address']); 
            $state = mysqli_real_escape_string($conn,$_POST['state']); 
            $zipCode = mysqli_real_escape_string($conn,$_POST['zipCode']);     
            $country = mysqli_real_escape_string($conn,$_POST['country']);     
            $joined = date("y-m-d");
            $username = 'rafiu';
            $msg ="";
            

            $filename = $_FILES['image']['name'];
            $tempname = $_FILES['image']['tmp_name'];
            $folder = "photos/" . $filename;
        
                
           if($password != $cpassword){
               echo 'error';
           }
            
              else{ 
            $password=md5($cpassword);
            $sql_n = "SELECT * FROM user WHERE number ='$number'";
            $res_n = mysqli_query($conn, $sql_n);    
            $sql_e = "SELECT * FROM user WHERE email ='$email'";
            $res_e = mysqli_query($conn, $sql_e);
            if(mysqli_num_rows($res_e) > 0){
            ?>
            <?php echo "<script>alert('The Email is allocated to someone')</script>";?>
            <?php    
            }elseif(mysqli_num_rows($res_n) > 0){
            ?>
            <?php echo "<script>alert('Sorry! The phone number is allocated to someone')</script>";?>
            <?php    
            }
            else{      
                  
            $sql = "INSERT INTO user (firstname, lastname, password, username, email, role, number, address, state, zipcode, joined, image, country)VALUES('$firstName','$lastName','$password','$username','$email','$role','$number','$address','$state','$zipCode','$joined', '$folder', '$country')";
            $results = mysqli_query($conn,$sql);
                                        
            if(move_uploaded_file($tempname, $folder)){
                $msg = "<script>alert('Image Uploaded Successfully')</script>";
            }else{
                $msg ="<script>alert('Failed to upload Image')</script>";
            }

            if($results==1){
            ?>
            <?php echo "<script>alert('Account Created Successfully')</script>";
            $_SESSION["image"]=$filename;
            ?>
            <?php

            }else{
            ?>
            <?php echo "<script>alert('OOPS! Something Went Wrong')</script>";?>
            <?php    
            }      
            }
        }
    }
    };      
?>




