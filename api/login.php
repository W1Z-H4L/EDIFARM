<?php
 $db = mysqli_connect('localhost','root','','edifarm');
 $username = $_POST['username'];
 $password = md5($_POST['password']);
 $sql = "SELECT * From user inner join jadwal on user.id_user=jadwal.id_user Where user.id_level = 2 and user.username = '".$username."' ";
 $result = mysqli_query($db,$sql);


 if(mysqli_num_rows($result) > 1){
    $row = mysqli_fetch_assoc($result);
    $passwordVal = $row["password"];
    $rows = array();

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
        
            while ($r = mysqli_fetch_assoc($result)) {
                $rows[] = $r;
            }
            print json_encode([
        "success" => true,
        "message" => "sukses",
        "data" => null,
            $rows]);
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

