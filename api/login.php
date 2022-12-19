<?php
 $db = mysqli_connect('localhost','root','','edifarm');
 $id_akun = $_POST['username'];
 $password = md5($_POST['password']);
 
 if(!$id_akun) {
    http_response_code(400);
    echo json_encode([
        "success" => false,
        "message" => "Masukan username anda",
        "data" => null,
    ]);

    exit;
 }
 
 $sql = "SELECT * FROM user WHERE username = '$id_akun' AND id_level = 1 ";
 $result = mysqli_query($db,$sql);

 if(mysqli_num_rows($result) == 1){
    $row = mysqli_fetch_assoc($result);
    $passwordVal = $row["password"];

    if(md5($passwordVal) != $password) {
        http_response_code(404);
        $response =  json_encode([
            "success" => false,
            "message" => "Password anda salah",
            "data" => null,
        ]);

        echo $response;
    } else {
        http_response_code(200);
        echo json_encode(
            array(
                "success" => true, 
                "message" => "Login berhasil",
                "user" => $row
            )
        );
    }
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

