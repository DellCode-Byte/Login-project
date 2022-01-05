<?php


    $servername='localhost';
	$username='root';
	$password='';
	$dbname = "bulsu_sims";

	$con = mysqli_connect($servername,$username,$password,$dbname);

	$sql = "CALL getAllCollege();";
	
	if($result=mysqli_query($con,$sql)){
		echo "SucessS";
		while($row=mysqli_fetch_assoc($result)){
			echo $row ['CollegeID'];
			echo $row['CollegeCode'];
			echo $row['Description'];
			echo $row['isMain'];
			echo $row['AddedBy'];
			echo $row['AddedOn'];
		}
		
	}


	if(!$con){
	   die('Could not Connect My Sql:' .mysql_error());
	}

	
    

?>