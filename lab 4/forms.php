<!DOCTYPE html>
<html>
<head>
     <title></title>
     <link rel="stylesheet" href="forms.css">
</head>
<body>
    <div class = "login-page">
        <div class = "form">
            <form class = "register-form" action = "processRegister.php" method = "POST" enctype="multipart/form-data" class="ajax">
                <p>JOIN US!</p>
                <input type='text' placeholder='Full name' name = "fullname" id = "fullname" ></input>
                <input type='email' placeholder='Email' name = "email" id = "email"></input>
                <input type='text' placeholder='City of Residence' name = "city" id = "city"></input>
                <input type='password' placeholder='Password' name = "password" id = "password"></input>
                <input type='file' placeholder='Profile Picture' name = "image" id = "image"></input>
                <button type ="submit" name = "register">Create an Account</button>
                <p class = "message">Already Registered?<a href = "#" id= "register"> Login</a></p>
            </form>

            <form class = "login-form" action = "processLogin.php" method = "POST">>
                <p>WELCOME!</p>
                <input type = "text" placeholder = "Email" name = "email">
                <input type = "password" placeholder = "Password" name = "password">
                <button type = "submit" name = "login">Login</button>
                <p class = "message">Not Registered?<a href = "#" id="login"> Create an Account</a></p>
            </form>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
        $('.message a').click(function(){

            $('form').animate({height:"toggle",opacity:"toggle"},"slow");
        });
    </script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src = "script.js"></script> 
                
</body>
</html>