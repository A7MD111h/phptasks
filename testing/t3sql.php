<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   
    <?php
       $servname = "localhost";
       $username = " root ";
       $password ="";
       $dbname = "test";
        conn = new mysqli ( $servname , $username , $password , $dbname );

        if ($conn->connect_error) {
        die("connection failed:".  $conn->connect_error );
        }
        // prepare and bind
        $stmt = $conn->("INSERT INTO MyGuests (firstname,lastname,email) VALUES)
        (?,?,?)");
        $stmt->bind_param("sss", $firstname, $lastname, $email);

        $firstname = "John";
        $lastname = "Doe" ;
        $email = "john@example. com" ;
        $stmt->execute();

        
    ?>
    
</body>
</html>