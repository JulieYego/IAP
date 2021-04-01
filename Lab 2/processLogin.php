<?php 
session_start();   
include_once 'user.php';    
include_once 'db.php';    
  
if(isset($_POST["login"])){
    $email = $_POST['email'];        
    $password = $_POST['password']; 

    $conn = new DBConnector();    
    $pdo = $conn->connectToDB();

    $user = new User();  
    $user -> setMail($email);
    $user -> setPassword($password);      

    $user -> login($pdo); 

    $sql = "SELECT * FROM users WHERE email='$email'";
    $stmt = $pdo-> prepare($sql);
    $stmt-> execute();
    $row = $stmt-> fetch(PDO::FETCH_ASSOC);
    if($row == null){
        echo 'Row does not exist';
    }else{
        $id = $row['userId'];
        $_SESSION['id'] = $id;
        //echo $_SESSION['id'];
        //header('location: userDetails.php');
    } 
} 
?>