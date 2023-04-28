
<?php
// FUNCTION TO VALIDATE LOGIN STARTS HERE
$conn = new mysqli('localhost','root','','pharmacy');

// FUNCTION TO VALIDATE AND LOGIN USER
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

<!-- FUNCTION TO ADD NEW USER TO THE SYSTEM -->

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
            $username = mysqli_real_escape_string($conn,$_POST['username']);     
            $joined = date("y-m-d");
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


<!-- // FUNCTION TO UPDATE USER -->
<?php 
    function update_user(){
    global $conn;
        $sql = mysqli_query($conn,"SELECT * FROM user WHERE username='{$_SESSION['username']}'");
        $dbData = mysqli_fetch_array($sql);
        if(isset($conn,$_POST['updatePassword'])){
            $old_password1 =mysqli_real_escape_string($conn,$_POST['old_password']);
            $password =mysqli_real_escape_string($conn,$_POST['password']);
            $cpassword =mysqli_real_escape_string($conn,$_POST['cpassword']);
            $old_password=md5($old_password1);

            if($dbData['password'] != $old_password){
        ?>
            
            <?php echo "<script>alert('sorry Enter Correct Old Password')</script>";?>
        <?php 
         }else{
            if($password!=$cpassword){
             ?>
        <?php echo "<script>alert('Sorry New Password And Confirm Password do not match please try again')</script>";?>
        <?php      
        }else{
        $password =md5($cpassword);  
        $sqliU ="UPDATE user SET password='$password' WHERE username='{$_SESSION['username']}'";
        $res = mysqli_query($conn,$sqliU);
        if($res==1){
        ?>
        <?php echo "<script>alert('You Have Updated your password successfully')</script>";?>
        <?php
                }
            }
        }
                  
    }

};

// UPDATE USER INFORMATION

    if(isset($conn,$_POST['update'])){
        $firstName = mysqli_real_escape_string($conn,$_POST['firstName']);
        $lastName = mysqli_real_escape_string($conn,$_POST['lastName']);
        $phoneNumber = mysqli_real_escape_string($conn,$_POST['phoneNumber']);
        $address = mysqli_real_escape_string($conn,$_POST['address']);
        $state = mysqli_real_escape_string($conn,$_POST['state']);
        $country = mysqli_real_escape_string($conn,$_POST['country']);
        $zipCode = mysqli_real_escape_string($conn,$_POST['zipCode']);
        $lang = mysqli_real_escape_string($conn,$_POST['lang']);

        $filename = $_FILES['image']['name'];
        $tempname = $_FILES['image']['tmp_name'];
        $folder = "photos/" . $filename;
        
        $update_user = "UPDATE users SET name ='$name', surname ='$surname', phone ='$phone', email ='$email' WHERE username= '{$_SESSION['username']}'";
        $result  = mysqli_query($conn, $update_user);
        if($result == 1){
            ?>
        <?php echo "<script>alert('You have updated your profile successfully')</script>";?>
        <?php
        }else{
        ?>
        <?php echo "<script>alert('You have updated your profile successfully')</script>";?>
        <?php
        }
        };
?>



<!-- FUNCTION TO ADD A NEW PRODUCT TO THE STORE -->
<?php
    function add_Product(){
        global $conn;
        if(isset($conn,$_POST['submit'])){
            $productName = mysqli_real_escape_string($conn,$_POST['productName']);
            $productCategory = mysqli_real_escape_string($conn,$_POST['productCategory']);
            $productQuantity = mysqli_real_escape_string($conn,$_POST['productQuantity']);
            $price = mysqli_real_escape_string($conn,$_POST['price']);     
            // $price = "#" . $price;
            $manufactureDate = mysqli_real_escape_string($conn,$_POST['manufactureDate']);
            $expiryDate = mysqli_real_escape_string($conn,$_POST['expiryDate']); 
            $manufacturer = mysqli_real_escape_string($conn,$_POST['manufacturer']); 
            $productDesc = mysqli_real_escape_string($conn,$_POST['productDesc']);      
            $dateAdded = date("D M y");
            $randomNum = rand(999999,100000);    
            $productId = date("Y") . date("d")  . $randomNum;  
            $msg ="";
            

            $filename = $_FILES['image']['name'];
            $tempname = $_FILES['image']['tmp_name'];
            $folder = "products/" . $filename;
                  
            $sql = "INSERT INTO products (productName, productCategory, productQuantity, price, manufactureDate, expiryDate, manufacturer, productDesc, dateAdded, productId, image)VALUES('$productName','$productCategory','$productQuantity','$price','$manufactureDate','$expiryDate','$manufacturer','$productDesc','$dateAdded','$productId', '$folder')";
            $results = mysqli_query($conn,$sql);
                                        
            if(move_uploaded_file($tempname, $folder)){
                $msg = "<script>alert('Image Uploaded Successfully')</script>";
            }else{
                $msg ="<script>alert('Failed to upload Image')</script>";
            }

            if($results==1){
            ?>
            <?php echo "<script>alert('Product Added Successfully')</script>";
            ?>
            <?php

            }else{
            ?>
            <?php echo "<script>alert('OOPS! Something Went Wrong')</script>";?>
            <?php    
            }      
            }
        }
?>


<!-- FUNCTION TO EDIT PRODUCT -->
<?php 
function update_product(){
    global $conn;
    global $productId;
    if(isset($conn,$_POST['updateProduct'])){
       $productName = mysqli_real_escape_string($conn,$_POST['productName']);
       $productCategory = mysqli_real_escape_string($conn,$_POST['productCategory']);
       $productQuantity = mysqli_real_escape_string($conn,$_POST['productQuantity']);
       $price = mysqli_real_escape_string($conn,$_POST['price']);
       $manufactureDate = mysqli_real_escape_string($conn,$_POST['manufactureDate']);
       $expiryDate = mysqli_real_escape_string($conn,$_POST['expiryDate']);
       $manufacturer = mysqli_real_escape_string($conn,$_POST['manufacturer']);
       $productDesc = mysqli_real_escape_string($conn,$_POST['productDesc']);

       $filename = $_FILES['image']['name'];
       $tempname = $_FILES['image']['tmp_name'];
       $folder = "products/" . $filename;
       
       $updateProduct = "UPDATE products SET productName ='$productName', productCategory ='$productCategory', productQuantity ='$productQuantity', price ='$price',manufactureDate='$manufactureDate', expiryDate='$expiryDate', manufacturer='$manufacturer', productDesc='$productDesc', image='$folder' WHERE productId='$productId'";
       $result  = mysqli_query($conn, $updateProduct);
       if(move_uploaded_file($tempname, $folder)){
        $msg = "<script>alert('Image Uploaded Successfully')</script>";
    }else{
        $msg ="<script>alert('Failed to upload Image')</script>";
    }
       if($result == 1){
           ?>
       <?php echo "<script>alert('You have updated product successfully')</script>";?>
       <?php
       }else{
       ?>
       <?php echo "<script>alert('You have updated your profile successfully')</script>";?>
       <?php
       }
       };
}
?>


<!-- FUNCTION TO ADD A NEEW ORDER FOR RECEIPT -->
<?php 
function addOrder(){
    global $conn;
    global $productId;
    if(isset($conn,$_POST['submitPrint'])){
       $product1Name = mysqli_real_escape_string($conn,$_POST['product1Name']);
       $product1Quantity = mysqli_real_escape_string($conn,$_POST['product1Quantity']);
       $product2Name = mysqli_real_escape_string($conn,$_POST['product2Name']);
       $product2Quantity = mysqli_real_escape_string($conn,$_POST['product2Quantity']);
       $product3Name = mysqli_real_escape_string($conn,$_POST['product3Name']);
       $product3Quantity = mysqli_real_escape_string($conn,$_POST['product3Quantity']);
       $product4Name = mysqli_real_escape_string($conn,$_POST['product4Name']);
       $product4Quantity = mysqli_real_escape_string($conn,$_POST['product4Quantity']);
    }
}
?>