<?php
   $servername='localhost';
   $username='root';
   $password='';
   $dbname = "bulsu_sims";

   $con = mysqli_connect($servername,$username,$password,$dbname);

   $sql = "CALL getAccomplishmentFilePath(1);";
   $emparray = array();

   if($result=mysqli_query($con,$sql)){
        echo"success";
         while($row = mysqli_fetch_assoc($result)){

           echo"</br>"; $emparray[] = $row;
           
         }
        $fp = fopen('u_user.json', 'w');
        fwrite($fp, json_encode($emparray));
        fclose($fp);
   }


   if(!$con){
      die('Could not Connect My Sql:' .mysql_error());
   }

?>