<?php
header("Acces-Control-Allow-Origin: *");
$db = mysqli_connect('localhost','root','','edifarm');
   

    $sql = "SELECT * From consul ";
    $data = mysqli_query($db, $sql);
    $rows = array();

    while ($r = mysqli_fetch_array($data)) {
        $rows[] = $r;
        // print_r($r);
    }
     print json_encode($rows, true);
   
// }
?>
