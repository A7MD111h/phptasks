<?php
    $username =$_POST["username"];
    $useremail =$_POST["useremail"];
    $query = "INSERT INTO users (username,email) VALUES ('$username', '$useremail')";
    $sql = $conn->query($query);
    // print_r($_POST)
    // if($username == "" ||  $useremail==""){
        //     echo "Please fill all the fields";
        // }
        // else{
            //     echo "$username, $useremail ";
            // }
    
    
    
    
    // mysqli_query(mysqli,$query);






?>