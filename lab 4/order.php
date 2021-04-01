<!DOCTYPE html>
<html lang="en">
<head>
    <title>Order</title>
    <link rel="stylesheet" href="order.css">
    <style>
        body{
            background-color: lavender;
            background-size: cover;
            background-position: center;
            font-family: serif;
        }
        .form{
            m
            background: #000;
            position: relative;
            z-index: 1;
            max-width: 360px;
            margin: 0 auto 100px;
            padding: 45px;
            text-align: center;
        }
        .form input{
            background: #f2f2f2;
            padding: 15px;
            margin: 0 0 15px;
            border: 0;
            outline: none;
            width: 100%;
            box-sizing: border-box;
            font-size: 14px;
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
        button{
            text-transform: uppercase;
            outline: 0;
            background: lightpink;
            width: 50%;
            border: none;
            padding: 15px;
            color: #fff;
            font-size: 14px;
            cursor: pointer;
        }
        button:hover{
            background: gray;
            border: none;
        }
    </style>
</head>
<body>
<div class = "form">
    <div class="dets">
        <h1 class="mes">Order Food</h1>
        <form action="process_order.php" method="POST" class="ajax">
                <p><label for="food_item" class="message">Food Item</label></p>
                <p><input type="text" name="food item" id="food_item"></p>
            
                <p><label for="amount" class="message">Amount</label></p>
                <p><input type="amount" name="amount" id="amount"></p>
            
                <p><button type="order" id="order" name="order">Order</button></p>
        </form>
    </div>
</div>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src = "script.js"></script>
</body>
</html>