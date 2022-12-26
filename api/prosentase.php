<?php
header("Acces-Control-Allow-Origin: *");
$db = mysqli_connect('localhost','root','','edifarm');
if (isset($_POST['id_user'])) {
    $id_user = $_POST['id_user'];
   
   

    $sql = "SELECT Round(COUNT(*) / (SELECT COUNT(*) FROM jadwal) * 100) AS prosentase
    FROM jadwal
    WHERE status = 'selesai' and id_user = '".$id_user."'
    ";
    $data = mysqli_query($db, $sql);
    $rows = array();

    while ($r = mysqli_fetch_assoc($data)) {
        $rows[] = $r;
    }
     print json_encode($rows);
   
}
?>
