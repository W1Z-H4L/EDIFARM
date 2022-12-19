<?php
$db = mysqli_connect('localhost','root','','edifarm');
if (isset($_POST['id_user']) && isset($_POST['nama']) && isset($_POST['password']) && isset($_POST['no_hp']) && isset($_POST['username'])&& isset($_POST['alamat'])) {
    $id_user = $_POST['id_akun'];
    $nama = $_POST['nama_lengkap'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $no_hp = $_POST['no_hp'];
    $alamat = $_POST['alamat'];
    $username = $_POST['username'];

    $sql = "UPDATE akun SET nama = '$nama' , password = '$password' , no_hp = '$no_hp', alamat '$alamat', username '$username' WHERE id_user = '$id_user'";

    $result = mysqli_query($db,$sql);
    if ($result) {
        $data = [
            'success' => true,
            'message' => 'Edit account succesful'
        ];
    } else {
        $data = [
            'success' => false,
            'message' => 'Edit account failed'
        ];
    }
    echo json_encode($data);
} else {
    $data = [
        'succes' => false,
        'message' => 'Please fill all the fields'
    ];

    echo json_encode($data);
}

?>