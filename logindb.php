 <?php

   
    include 'connection.php';

    session_start();
    if(isset($_SESSION["email"]) && $_SESSION["password"]){
        header('Location: welcome.php');
    }
    $email = $_POST["email"];
    $password = $_POST["password"];

    $emaildb = "";
    $passworddb = "";

    $select = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($con,$select);

    
    if(mysqli_num_rows($result) > 0)
    {
        while ($row = mysqli_fetch_assoc($result))
        {
            
            $_SESSION["email"] = $emaildb;
            $_SESSION["password"] = $passworddb;
			header("Location: welcome.php");
            
        }
    }
    else{
        
    }
        
    if($email == $emaildb && password_verify($password,$passworddb)){
        echo '<script>alert("Login Successful");</script>';
        header('refresh: 1; url = welcome.php');
        
    }else{
        echo '<script>alert("Incorrect Email or Password");</script>';
        header('refresh: 1, url = login.php');

    }


   

    
    mysqli_close($con);
    
?>