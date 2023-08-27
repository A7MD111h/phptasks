<?php 
require("connect.php");
$userData="SELECT * FROM users";
$sql=$conn->query($userData);


if($sql->num_rows > 0){
    echo "<table border=2>";
    echo "<tr>";
    echo "<th>User Name</th>";
    echo "<th>User Email</th>";
    echo "<th>Edit</th>";
    echo "<th>Delete</th>";
    echo "</tr>";
    while($row=$sql->fetch_assoc()){

    echo "<tr>";
    echo "<td>".$row['username']."</td>"; 
    echo "<td>".$row['email']."</td>"; 
    echo "</tr>";
    
}
echo "</table>";

}else{

    echo "No Data Found";
}

?>
