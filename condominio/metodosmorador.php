<?php
    
    include("conexao.php");

    $query = "select * from morador"; 
    $result_query = mysqli_query( $conn, $query );
    
    echo "<table>";
    # Exibe os registros na tela 
    while ($row = mysqli_fetch_array( $result_query ))
    { 
          echo "<tr>";
          print "<td>" . $row[1] . "<td>" . $row[2] . "<td>" . $row[3] . "<td>" . $row[4] . "<td>" . $row[5];
          echo "</tr>";
    }          
    echo "</table>";

    mysqli_close($conn);
  
 
?>