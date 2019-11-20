<?php
require 'functions/seed.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>ECSGP</title>
        <style>
            body{
                margin: 0;
                padding: 0;
                background-color: lightgrey;
            }
            .login-form{
                width: 50%;
                margin: 0 auto;
                border: none;
                border-radius: 5px;
                box-shadow: 5px 3px 7px black;
                text-align: center;
                font-weight: bold;
                background-color: crimson;
                color:aliceblue;
            }
            h1{
                padding: 20px;
            }
            input{
                width: 50%;
                padding: 10px;
                border: none;
                border-radius: 2px;
                margin-bottom: 20px;
            }
            button{
                border: none;
                border-radius: 2px;
                font-size: 1.2em;
                padding: 5px;
                background-color: green;
                color: whitesmoke;
                margin-bottom: 20px;
            }
            button:hover{
                cursor: pointer;
                box-shadow: 5px 3px 7px black;
            }
        </style>
    </head>
    <body>
        <div class="login-form">
        <h1>LOGIN FORM</h1>
            <form action="" method="post">
                <label for="username">username : 
                    <input type="text" name="username" id="">
                </label>
                <br>
                <label for="password">password : 
                    <input type="password" name="" id="">
                </label>
                <br>
                <button type="submit">Login</button>
            </form>
        </div>
    </body>
</html>