<?php 
require('koneksi.php');
session_start();

if(isset($_POST['submit'])){
    $email = $_POST['username'];
    $pass = $_POST['password'];

    if(!empty(trim($email)) && !empty(trim($pass))){
        $query = "SELECT * FROM user_detail WHERE user_email='$email'";
        $result = mysqli_query($koneksi,$query);
        $num = mysqli_num_rows($result);

        while ($row = mysqli_fetch_array($result)){
            $id = $row['id'];
            $userVal = $row['user_email'];
            $passVal =$row['user_password'];
            $username = $row['user_fullname'];
            $level = $row['level'];
        }

        if($num != 0){
            if($userVal==$email && $passVal==$pass){
                header('Location: dashboard.php?user_fullname='.urlencode($username));
            }else{
                $error = 'user atau password salah!!';
                header('Location: login.php');
            }
        }else{
            $error = 'user tidak ditemukan!!';
            header('Location: login.php');
        }
    }else{
        $error = 'Data tidak boleh kosong!!';
        echo $error;
    }
}

?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Responsive Login and Signup Form </title>

        <!-- CSS -->
        <link rel="stylesheet" href="css/style.css">
                
        <!-- Boxicons CSS -->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
                        
    </head>
    <body>
        <section class="container forms">
            <div class="kiri">
            <img src="images/login.png" alt="" class="gradient">
        </div>
            <div class="form login">
                <img src="images/logo.png" alt="" class="logologin">
                <div class="form-content">
                    <header>Login your account</header>
                    <form action="login.php" method="POST">
                        <div class="field input-field">
                            <input type="username" placeholder="Username" class="input" name="username">
                        </div>

                        <div class="field input-field">
                            <input type="password" placeholder="Password" class="password" name="password">
                            <i class='bx bx-hide eye-icon'></i>
                        </div>

                        <div class="form-link">
                            <a href="dashboard.php" class="forgot-pass">Forgot password?</a>
                        </div>

                        <div class="field button-field">
                            <button type="submit" class="Login" name="submit">Log in</button>
                        </div>
                    </form> 
                </div>

            </div>

            <!-- Signup Form -->


        <!-- JavaScript -->
        <script src="js/script.js"></script>
    </body>
</html>