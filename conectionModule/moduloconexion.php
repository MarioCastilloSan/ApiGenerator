<?php
$serverName = "serverName\sqlexpress, 1542"; //serverName\instanceName, portNumber
$connectionInfo = array( "Database"=>"dbName", "UID"=>"userName", "PWD"=>"password");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
     echo true;
}else{
     echo false;
     die( print_r( sqlsrv_errors(), true));
}
?>
