<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$url = 'https://www.w3schools.com/php/default.asp';

// Parse the URL
$parsedUrl = parse_url($url);

// Extract the components
$scheme = isset($parsedUrl['scheme']) ? $parsedUrl['scheme'] : '';
$host = isset($parsedUrl['host']) ? $parsedUrl['host'] : '';
$path = isset($parsedUrl['path']) ? $parsedUrl['path'] : '';

echo "Scheme: " . $scheme . "<br>";
echo "Host: " . $host . "<br>";
echo "Path: " . $path . "<br>";
?>

</body>
</html>