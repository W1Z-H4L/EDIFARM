<?php
header("Acces-Control-Allow-Origin: *");
include('connect.php');
if (isset($_POST['id_lahan'])) {
    $id_lahan = $_POST['id_lahan'];
   
   

    $sql = "SELECT * From jadwal inner join sesi_tanam on jadwal.id_sesi=sesi_tanam.id_sesi where jadwal.id_lahan = $id_lahan AND jadwal.status = 'Selesai' AND jadwal.kegiatan = 'pemupukan' AND sesi_tanam.status='belum'";
    $data = mysqli_query($db, $sql);
    $rows = array();

    while ($r = mysqli_fetch_assoc($data)) {
        $rows[] = $r;
    }
     print json_encode($rows);
   
}
?>
