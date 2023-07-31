<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$sampleString = "PHP Tutorial.";

function changeFirstCharacterColor($string) {
    $firstChar = substr($string, 0, 1);
    $restOfString = substr($string, 1);
    $coloredFirstChar = "<span style='color: red;'>$firstChar</span>";
    $result = $coloredFirstChar . $restOfString;
    return $result;
}
$coloredString = changeFirstCharacterColor($sampleString);
echo $coloredString;
?>

</body>
</html>