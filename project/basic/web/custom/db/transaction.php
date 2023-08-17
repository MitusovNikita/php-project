<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//$conn = mysqli_connect('db01.tema', 'stat_user', 'M9Up5BHhUsmEL8yHkEnM', 'statsys');
$conn = mysqli_connect('web04.dev.tema', 'root', '5m8wRSq7YY7NfX', 'statdata');

//$a = 'a:10:{s:6:"entity";s:16:"AudioBookReaders";s:4:"name";s:78:"Отчёт по прочтениях аудио книг сервиса BBooks";s:6:"system";s:1:"1";s:6:"active";s:1:"1";s:13:"export_format";s:3:"csv";s:14:"export_charset";s:5:"utf-8";s:15:"export_filename";s:41:"Audio_BBooks_readers_report_[{{ begin }}]";s:8:"requests";a:1:{i:0;s:20:"getReadsCounterAudio";}s:5:"begin";s:3:"P1M";s:6:"finish";s:3:"P1D";}';
//$sql = "UPDATE report_configs SET params = '$a' WHERE ID = 29";
//$result = mysqli_query($conn, $sql);

//$sql = "DELETE FROM cron_tasks WHERE id = 129";;
//$result = mysqli_query($conn, $sql);
//a:10:{s:6:"entity";s:11:"BookReaders";s:4:"name";s:67:"Отчёт по прочтениях книг сервиса BBooks";s:6:"system";s:1:"1";s:6:"active";s:1:"1";s:13:"export_format";s:3:"csv";s:14:"export_charset";s:5:"utf-8";s:15:"export_filename";s:35:"BBooks_readers_report_[{{ begin }}]";s:8:"requests";a:1:{i:0;s:15:"getReadsCounter";}s:5:"begin";s:3:"P1M";s:6:"finish";s:3:"P1D";}
//a:10:{s:6:"entity";s:11:"BookReaders";s:4:"name";s:67:"Отчёт по прочтениях книг сервиса BBooks";s:6:"system";s:1:"1";s:6:"active";s:1:"1";s:13:"export_format";s:3:"csv";s:14:"export_charset";s:5:"utf-8";s:15:"export_filename";s:35:"BBooks_readers_report_[{{ begin }}]";s:8:"requests";a:1:{i:0;s:15:"getReadsCounter";}s:5:"begin";s:3:"P1M";s:6:"finish";s:3:"P1D";}

$sql = "SELECT * FROM action_configs ORDER BY ID DESC";
$sql = "SELECT * FROM cron_tasks ORDER BY ID DESC LIMIT 10";
$sql = "SELECT * FROM reports ORDER BY ID DESC LIMIT 10";
$sql = "SELECT * FROM results ORDER BY ID DESC LIMIT 10";
$sql = "SELECT * FROM auth_item_child";
$sql = "SELECT * FROM requests ORDER BY ID DESC LIMIT 10";
$sql = "SELECT * FROM user ORDER BY ID DESC LIMIT 10";
$sql = "SELECT * FROM user ORDER BY ID DESC LIMIT 10";


$sql = "
START TRANSACTION;
SELECT * FROM report_configs ORDER BY ID DESC LIMIT 10;
COMMIT;                     
";

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