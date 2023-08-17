<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$conn = mysqli_connect('web04.dev.tema', 'root', '5m8wRSq7YY7NfX', 'statdata');

mysqli_query($conn, "START TRANSACTION");

$sql = "UPDATE report_configs SET name = 'Отчёт по книгами, которые перешли из статуса show в статус hidden 2' WHERE ID = 114";
$result = mysqli_query($conn, $sql);
mysqli_query($conn, "ROLLBACK");
//mysqli_query($conn, "COMMIT");






$sql = "SELECT * FROM report_configs WHERE ID = 114";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<pre>";
        print_r($row);
        echo "</pre>";
    }
}
die();