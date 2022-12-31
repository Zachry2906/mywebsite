<?php 

$dbms = mysqli_connect("localhost", "root","", "kebutuhan");
session_start();

if((isset($_COOKIE['id'])) & isset($_COOKIE['key'])){
    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    $result = mysqli_query($dbms, "SELECT username FROM user WHERE id=$id");
    $row = mysqli_fetch_assoc($result);

    if($key === hash('sha256', $row['username'])){
        $_SESSION['login'] == true;
    }
    }

if(isset($_COOKIE['login'])){
    header("Location: admin.php");
    exit;
}
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $cek = mysqli_query($dbms, "SELECT * FROM user WHERE username = '$username' ");

    if(mysqli_num_rows($cek) === 1){
        $row = mysqli_fetch_assoc($cek);
        if(password_verify($password, $row["password"])){
            $_SESSION['login'] = true;
            if(isset($_POST["remember"])){
                setcookie('id', $row['id'], time()+3600);
                setcookie('key',hash('sha256', /* enkripsi untuk variabel */  $row['username']), time()+3600);
            }

            header("Location: admin.php");
            exit;
        }
    } else {
        echo "gaadaa";
    }
    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="logn.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HPH</title>
</head>
<body>
    <div class="img">
    <?php if(isset($error)) : ?>
        <p style="color : red"> ERORRRRR </p>
    <?php endif; ?>
    <section class="bg"></section>
    <div class="login">
    <div class="back"> <a href="mywebsite.php">Kembali ke Halaman user </a></div>
        <h1>Please Login</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="username">username : </label><br>
                <input type="text" name="username" id="username">
                <div class="line"></div>
            </li>
            <br>
            <li>
                <label for="password"> password : </label><br>
                <input type="password" name="password" id="password">
                <div class="line"></div>
            </li>
            <li>
                <input class="xxx" type="checkbox" name="remember" id="remember">
                <label for="remember"> Remember Me</label>
            </li>
            <li>
                <button type="submit" name="login">
                    Login
                </button>
            </li>
            <li>
            <a href="regis.php"><button>Regis</button></a>
            </li>
            </div>
        </ul>
    </form>
    </div>
    
</body>
</html>