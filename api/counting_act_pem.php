<?php
header("Acces-Control-Allow-Origin: *");
include('connect.php');
if (isset($_POST['id_user'])) {
    $id_user = $_POST['id_user'];
    $tanggal_mulai = $_POST['tanggal_mulai'];
   
   

    $sql = "SELECT COUNT(kegiatan) FROM jadwal WHERE tanggal_mulai = '$tanggal_mulai' and kegiatan = 'pemupukan' and id_user = '".$id_user."' ";
    $data = mysqli_query($db, $sql);
    $rows = array();

    while ($r = mysqli_fetch_assoc($data)) {
        $rows[] = $r;
    }
     print json_encode($rows);
   
}
?>
