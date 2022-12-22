<?php
header("Acces-Control-Allow-Origin: *");
$db = mysqli_connect('localhost','root','','edifarm');
if (isset($_POST['id_jadwal'])); {
    $id_jadwal = $_POST['id_jadwal'];

   
   

    $sql = 
    "UPDATE jadwal set status = 'Selesai' where id_jadwal=$id_jadwal";

    $result = mysqli_query($db,$sql);
    if ($result) {
        echo json_encode("Succes");
       
    } else {
        echo json_encode("Failed");
    }  
   
}
?>
