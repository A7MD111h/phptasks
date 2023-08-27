<?php
 
require ( "connect.php") ;
$UserData ="SELCET * FROM users";
$sq1=$conn->query($userData);
// echo "(prey" ;
// print_r ($sql ) ;
if($sql->num_rows > 0 ){
    echo "<table border=2>";
    echo "<tr>";
    echo "<th>>";
    echo "<>";
}


//    while( $row = mysqli_fetch_assoc($sql) ){

?>