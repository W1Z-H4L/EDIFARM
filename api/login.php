<?php
 $db = mysqli_connect('localhost','root','','edifarm');
 $id_akun = $_POST['username'];
 $password = md5($_POST['password']);
 $sql = "SELECT * FROM user WHERE username = '$id_akun' ";
 $result = mysqli_query($db,$sql);

 if(mysqli_num_rows($result) == 1){
   $userRecord=array();
    while ($rowFound = mysqli_fetch_assoc($result)){
        $userRecord[]=$rowFound;
   }
   http_response_code(200);
   echo json_encode(
    array(
        "success" => true, 
        "message" => "Login berhasil",
        "user" => $userRecord[0]
    )
    );
 } 
 else{
    http_response_code(404);
 	echo json_encode([
        "success" => false,
        "message" => "Akun tidak ditemukan",
        "data" => null
    ]);
 }
?>

