<?php    
include_once 'db.php'; 
include_once 'user.php';   
   
if(isset($_POST["register"])){
    $fullName = $_POST['fullname'];        
    $email = $_POST['email'];        
    $city = $_POST['city'];    
    $password = $_POST['password']; 
    $image = $_FILES['image']; 
    

    $conn = new DBConnector();
    $pdo = $conn-> connectToDB();

    $original_file_name = $_FILES['image']['name'];
    //echo "$original_file_name";
    $file_tmp_location = $_FILES['image']['tmp_name'];
    //echo "$file_tmp_location";
    $file_path = "images/";
    $path = $file_path.$original_file_name;
    //echo "$path";

    move_uploaded_file($file_tmp_location, $file_path.$original_file_name);

    //echo "$fullName/$email/$city/$password/$path";
    
    $conn = new DBConnector();
    $pdo = $conn-> connectToDB();

    $user = new User();        
    $user->setFullName($fullName);  
    $user->setMail($email);
    $user->setCity($city);
    $user->setPassword($password);
    $user->setImage($path);

    $user->register($pdo); 
}
?>