<?php
include "../koneksi.php";
// $db = mysqli_connect('localhost','root','','edifarm');
$id = $_GET['id'];
$sql = "SELECT * FROM jadwal where id_lahan = '$id'";
$result = mysqli_query($koneksi,$sql);
$dataArr = array();
while($data = mysqli_fetch_array($result)){
    $dataArr[] = array(
        'id' => $data['id_jadwal'],
        'title' => $data['kegiatan'],
        'start' => $data['tanggal_mulai'],
        'end' => $data['tanggal_selesai'],
    );
}
echo json_encode($dataArr);
?>