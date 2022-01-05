
<html>
    <head>
        <style type = "text/css">
            div{
                
                padding-left: 30px;
                padding-top: 50px;
                margin-left: 400px;
                margin-top: 200px;
                box-shadow: -1px 0px 0px 6px rgba(0,0,0,0.52);
                border-radius: 10px 10px 10px 10px;
                position: relative;
                height: 300;
                width: 450;
                
            }
            h2{
                text-align: center;
            }
            #email{
                margin-left: 80px;
            }
            #pass{
                margin-left: 58px;
            }
            #email,#pass{
                width: 300;
                height: 30;
                border-radius: 30px;
            }
            #btnfp{
               
                margin-left: 100px;
                position: absolute;
                top: 80%;
                border-radius: 10px
                
            }
            #login{
                
                margin-left: 280px;
                position: absolute;
                top: 80%;
                border-radius: 10px

            }
            body{
                color: #2e2e2e;

            }
            input:hover {
                background-color: #cccccc;
            }

        </style>
    </head>
<?php
	session_start();
	if(isset($_SESSION["email"]) && isset($_SESSION["password"]))
	{
	header('Location: welcome.php');
	exit();
	}
?>
    <body>
            
        <div class = "loginDiv">
            <h2>Login</h2>
            <form method = "post" action = "logindb.php">
            Email:<input id = "email" type = "text" name = "email"></td><br><br>
            Password:<input id = "pass" type = "password" name = "password"></td><br><br>
            <input id = "btnfp" type = "button" name = "forgotpassword" value = "Forgot Password"></td><br><br>
            <input id = "login" type = "submit" name = "submit" value = "Log in"><br><br>
            <h4 style="margin: 30px auto; text-align:center; font-size: 20px; margin-bottom:10px;">Dont have account?<a href = "add.php"> Sign up </a></h4>
            </form>
        
        </div>
    
    </body>

</html>