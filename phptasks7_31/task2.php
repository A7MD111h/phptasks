<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $dt = DateTime::createFromFormat('m-d-Y', '12-08-2004')->format('Y-m-d');
    echo $dt;
?>
</body>
</html>