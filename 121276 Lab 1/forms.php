<!DOCTYPE html>
<html>
<head>
     <title></title>
     <link rel="stylesheet" href="forms.css">
</head>
<body>
    <div class = "login-page">
        <div class = "form">
            <form class = "register-form">
                <p>JOIN US!</p>
                <input type='text' placeholder='Full name' name = "fullname" ></input>
                <input type='email' placeholder='Email' name = "email"></input>
                <input type='text' placeholder='City of Residence' name = "city"></input>
                <input type='password' placeholder='Password' name = "password"></input>
                <input type='file' placeholder='Profile Picture' name = "picture"></input>
                <button type ="button">Create an Account</button>
                <p class = "message">Already Registered?<a href = "#" id= "register"> Login</a></p>
            </form>

            <form class = "login-form">
                <p>WELCOME!</p>
                <input type = "text" placeholder = "Email" name = "email">
                <input type = "text" placeholder = "Password" name = "password">
                <button type = "button">Login</button>
                <p class = "message">Not Registered?<a href = "#" id="login"> Create an Account</a></p>
                <p class = "mes"><a href = "password.php" id="password">Change Password</a></p>
            </form>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script>
        $('.message a').click(function(){

            $('form').animate({height:"toggle",opacity:"toggle"},"slow");
        });
    </script>
                
</body>
</html>