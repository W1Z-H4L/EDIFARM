<?php
 $db = mysqli_connect('localhost','root','','edifarm');
 $username = $_POST['username'];
 $password = md5($_POST['password']);
 $sql = "SELECT * From user inner join jadwal on user.id_user=jadwal.id_user inner join sesi_tanam on jadwal.id_sesi=sesi_tanam.id_sesi Where user.username = '".$username."' and user.id_level=2";
 $result = mysqli_query($db,$sql);


 if(mysqli_num_rows($result) > 0){
    $data = mysqli_fetch_assoc($result);
    $passwordVal = $data["password"];

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
                "user" => $data
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

