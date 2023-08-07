<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

ini_set('display_errors', 1);
error_reporting(E_ALL);
//$conn = mysqli_connect('web04.dev.tema', 'stat_user', 'q@Xc?d3ngYbG47nc', 'statdata');
$conn = mysqli_connect('web04.dev.tema', 'root', '5m8wRSq7YY7NfX', 'statdata');

//$sql = "SELECT * FROM action_configs ORDER BY ID DESC";
//$sql = "SELECT * FROM cron_tasks ORDER BY ID DESC LIMIT 10";
//$sql = "SELECT * FROM report_configs WHERE ID = 47";
//$sql = "SELECT * FROM reports ORDER BY ID DESC LIMIT 10";
//$sql = "SELECT * FROM results ORDER BY ID DESC LIMIT 10";
//$sql = "SELECT * FROM auth_item_child";
//$sql = "SELECT * FROM requests ORDER BY ID DESC LIMIT 10";
$sql= "SHOW DATABASES";
$sql= "SHOW TABLES";
$sql = "SELECT * FROM report_configs ORDER BY ID DESC LIMIT 10";

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

echo "OK";
die;