<h4>Mostrar tablas</h4>

<?php
$serverName = "LAPTOP-0K5NDJPK\SQLEXPRESS, 56592";
$connectionInfo = array( "Database"=>"northwind", "UID"=>"cris", "PWD"=>"sas");
$conn = sqlsrv_connect( $serverName, $connectionInfo );
if( $conn === false ) {
    die( print_r( sqlsrv_errors(), true));
}


// CONSULTA PARA TABLAS

$sql = "SELECT TABLE_CATALOG, TABLE_SCHEMA, TABLE_NAME, TABLE_TYPE FROM INFORMATION_SCHEMA.TABLES WHERE TABLE_TYPE = 'BASE TABLE'";
$stmt = sqlsrv_query( $conn, $sql );
if( $stmt === false) {
    die( print_r( sqlsrv_errors(), true) );
}

echo "<table border=1>";
        echo "<tr>";
        echo "<th>TABLE_CATALOG</th>";
        echo "<th>TABLE_SCHEMA</th>";
        echo "<th>TABLE_NAME</th>";
        echo "<th>TABLE_TYPE</th>";
        echo "</tr>";

while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {

            echo '<tr>';
            echo '<td>'.$row['TABLE_CATALOG'].'</td>';
            echo '<td>'.$row['TABLE_SCHEMA'].'</td>';
            echo '<td>'.$row['TABLE_NAME'].'</td>';
            echo '<td>'.$row['TABLE_TYPE'].'</td>';

            echo '</tr>';           
        }
        echo "</table>";

echo "</br>";
?>