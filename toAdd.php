<?php
 include 'connection.php';
  // post data
  if(isset($_POST['submit']) && $_POST ['g-recaptcha-response'] != " "){
        $secret = "6LegtY4bAAAAACGD7VLwCGC1KvsrcWg4A3eEN2iL";
        $verifyresponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret. '&response=' . $_POST['g-recaptcha-response']);
        $responsedata = json_decode($verifyresponse);
        
            if($responsedata->success){
              if(!empty($_POST)) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $contact = $_POST['contact'];
                $address = $_POST['address'];
                $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
             
                // insert data into database
                $sql = "INSERT INTO users (name, email, contact, address, password) VALUES ('$name', '$email', '$contact', '$address', '$password')";
                $insertData = mysqli_query($con,$sql);
            
                if($insertData){
                  //do somthing
                  
                } else {
                  echo "Something went wrong! rawr rawr rawr";
                }
              }
              echo '<script>alert("Succesfully You will be redirected in 3 secs");</script>';
              header('refresh: 2; url = Login.php');
            }
            else{
              echo '<script>alert("please check the recaptcha You will be redirected in 3 secs");</script>';
              header('refresh: 2; url = add.php');
            }
  }

?>