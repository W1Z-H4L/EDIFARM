<?php
header("Acces-Control-Allow-Origin: *");
$db = mysqli_connect('localhost','root','','edifarm');
if (isset($_POST['id_jenis'])) {
    $id_jenis = $_POST['id_jenis'];
   
   

    $sql = "SELECT * From jenis where id_jenis = $id_jenis";
    $data = mysqli_query($db, $sql);
    $rows = array();

    while ($r = mysqli_fetch_assoc($data)) {
        $rows[] = $r;
    }
     print json_encode($rows);
   
}
?>
