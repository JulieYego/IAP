<!DOCTYPE html>
<html>
<head>
    <title>Change Password</title>
    <link rel="stylesheet" href="forms.css">
    <style>
        .mes a:hover{
            color: gray;
        }
    </style>
    </style>
</head>
<body> 
    <div class = "login-page">
        <div class = "form">
            <form class = "change-password" action = "processpassword.php" method = "POST">
                <p>Kindly enter your current and new password.</p>
                <input type = "password" placeholder = "Current Password" name = "current">
                <input type = "password" placeholder = "New Password" name = "new">
                <input type = "password" placeholder = "Confirm Password" name = "confirm">
                <button type = "submit" name = "change">Change Password</button>
                <p class = "mes"><a href = "userDetails.php" id= "back"> Back</a></p>
            </form>
</body>
</html>