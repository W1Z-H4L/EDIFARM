<?php
$db = mysqli_connect('localhost','root','','edifarm');
if (isset($_POST['isi']) && isset ($_POST['tanggal_consul']) && isset ($_POST['id_user'])) {
    $isi = $_POST['isi'];
    $tanggal_consul = $_POST['tanggal_consul'];
    $id_user = $_POST['id_user'];
   

    $sql = 
    "INSERT INTO consul(isi, tanggal_consul, status,id_user) VALUES ('{$isi}','{$tanggal_consul}','belum','{$id_user}')";

    $result = mysqli_query($db,$sql);
    if ($result) {
        echo json_encode("Succes");
       
    } else {
        echo json_encode("Failed");
    }  
   
}

?>