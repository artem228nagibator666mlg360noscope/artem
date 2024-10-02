<?php
session_start();
$database_connnect = mysqli_connect("localhost", "root", "", "my_db2");
$msg = "";


if (isset($_POST["button"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $role = $_POST["role"];
    $count_symbols = strlen($email);
    $array = ['@', '.'];
    $key = true;


    $password = md5($password);
    $sql = "SELECT COUNT(*) AS cnt FROM users WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($database_connnect, $sql);

    $row = $result->fetch_assoc();

    if ($row["cnt"] == 1){
        $msg = "Вы вошли";
        $_SESSION['user'] = $email;
    }else{
        $msg = "Пароль или email неверны!";
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Авторизация</title>
</head>
<body>
    <form method="post">
        <p><input type="text" name="email" placeholder="email" value="<?php echo $email;?>"></p>
        <p><input type="text" name="password" placeholder="password" value="<?php echo $password;?>"></p>
        <input type="submit" name="button" value="Войти">
    </form>

    <?php echo $msg; ?>
</body>
</html>

