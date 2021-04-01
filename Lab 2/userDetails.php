<?php
session_start();
if(!isset($_SESSION['id'])){
    header('location: forms.php');
    //echo "log in";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>User Profile</title>
    <style>
        body{
            background-color: lavender;
            background-size: cover;
            background-position: center;
            font-family: serif;
        }
        .dets{
            background: #000;
            position: relative;
            z-index: 1;
            max-width: 360px;
            margin: 0 auto 100px;
            padding: 45px;
            text-align: center;
        }
        .message {
            color: lightpink;
        }

        .mes {
            font-size: 25px;
            color: white;
        }
        .mes a {
            font-size: 16px;
            color: white;
            text-decoration: none;
        }
        .mes a:hover{
            color: gray;
        }
    </style>
</head>
<body>
<?php
include_once("db.php");

$conn= new DBConnector();    
$pdo= $conn->connectToDB();

    $sql = "SELECT * FROM users WHERE userId = '{$_SESSION['id']}'";
    //$stmt= $pdo-> prepare($sql);
    $stmt= $pdo-> query($sql);

    if($stmt)
    {
        while($row = $stmt->fetch(PDO::FETCH_OBJ)){
            echo '
            <div class="dets">
                <h2 class="mes">PROFILE DETAILS</h2>
                    <p class="message"> <img src="'.$row->image.'" alt="image" style="width:300px"> </p>
                    <p class="message"> Full name : '.$row->fullName.' </p>
                    <p class="message"> Email : '.$row->email.' </p>
                    <p class="message"> City : '.$row->city.'</p>
                    <p class = "mes"><a href = "password.php" id="password">Change Password?</a></p>
                    <p class = "mes"><a href = "processlogout.php" id="logout">Logout</a></p>
            </div>
            ';
        }
    }else{
        echo 'Row does not exist';
    }
  
    ?>
</body>
</html>






  




