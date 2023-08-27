<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="create.php" method="post">
        <label for="username">User Name:</label>
        <input type="text" name="username">
        <label for="useremail">User Email:</label>
        <input type="text" name="useremail">
        <input type="submit"> 
    </form>

<?php
echo "<hr>";

include("userData.php");

?>

</body>
</html>