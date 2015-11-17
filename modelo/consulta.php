<?php 
include("conexion.php");

$sql="SELECT * FROM `informacion`";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    echo '<div align="center">';
    echo '<table border="1" width="70%">';
    echo '<tr><td>id</td><td>tema</td><td>contenido</td></tr>';
    while($row = mysqli_fetch_assoc($result)) {
    	echo '<tr>';
        echo "<td>" . $row["id"]. "</td><td>" . $row["tema"]. "</td><td>" . $row["contenido"]."</td>";
        echo '</tr>';
    }
    echo '</table>';
    echo '</div>';
} else {
    echo "0 results";
}

echo $sql;

 ?>