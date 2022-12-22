<?php
header("Acces-Control-Allow-Origin: *");
$db = mysqli_connect('localhost','root','','edifarm');
if (isset($_POST['id_lahan'])) {
    $id_lahan = $_POST['id_lahan'];
   
   

    $sql = "SELECT * From jadwal where id_lahan = $id_lahan AND status = 'Selesai' AND kegiatan = 'pemupukan'";
    $data = mysqli_query($db, $sql);
    $rows = array();

    while ($r = mysqli_fetch_assoc($data)) {
        $rows[] = $r;
    }
     print json_encode($rows);
   
}
?>
