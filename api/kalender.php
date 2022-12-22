<?php
header("Acces-Control-Allow-Origin: *");
$db = mysqli_connect('localhost','root','','edifarm');
if (isset($_POST['id_lahan'])&& isset($_POST['tanggal_mulai'])&& isset($_POST['tanggal_selesai'])) {
    $id_lahan = $_POST['id_lahan'];
    $tanggal_mulai = $_POST['tanggal_mulai'];
    $tanggal_selesai = $_POST['tanggal_selesai'];
    
   
   

    $sql = "SELECT * From jadwal where tanggal_mulai BETWEEN '$tanggal_mulai' AND '$tanggal_selesai' AND id_lahan = $id_lahan";
    $data = mysqli_query($db, $sql);
    $rows = array();

    while ($r = mysqli_fetch_assoc($data)) {
        $rows[] = $r;
    }
     print json_encode($rows);
   
}
?>
