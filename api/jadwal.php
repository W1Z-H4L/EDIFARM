<?php
header("Acces-Control-Allow-Origin: *");
$db = mysqli_connect('localhost','root','','edifarm');
if (isset($_POST['id_user'])&& isset($_POST['tanggal_mulai'])) {
    $id_user = $_POST['id_user'];
   $tanggal_mulai= $_POST['tanggal_mulai'];
   

    $sql = "SELECT * From jadwal inner join sesi_tanam on jadwal.id_sesi = sesi_tanam.id_sesi inner join jenis on sesi_tanam.id_jenis=jenis.id_jenis where id_user = $id_user  and tanggal_mulai ='$tanggal_mulai' ";
    $data = mysqli_query($db, $sql);
    $rows = array();

    while ($r = mysqli_fetch_assoc($data)) {
        $rows[] = $r;
    }
     print json_encode($rows);
   
}
?>
