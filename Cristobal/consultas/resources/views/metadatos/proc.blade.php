<h4>Mostrar procedimientos almacenados</h4>
<?php
$serverName = "LAPTOP-0K5NDJPK\SQLEXPRESS, 56592";
$connectionInfo = array( "Database"=>"northwind", "UID"=>"cris", "PWD"=>"sas");
$conn = sqlsrv_connect( $serverName, $connectionInfo );
if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));
}


// CONSULTA PARA Procedimientos almacenados

$sql = "SELECT ROUTINE_TYPE, ROUTINE_NAME FROM INFORMATION_SCHEMA.ROUTINES WHERE ROUTINE_TYPE = 'PROCEDURE'";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

echo "<table border=1>";
        echo "<tr>";
        echo "<th>ROUTINE_NAME</th>";
        echo "<th>ROUTINE_TYPE</th>";
        echo "</tr>";

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {

            echo '<tr>';
            echo '<td>'.$row['ROUTINE_NAME'].'</td>';
            echo '<td>'.$row['ROUTINE_TYPE'].'</td>';

            echo '</tr>';           
        }
        echo "</table>";

echo "</br>";
?>

