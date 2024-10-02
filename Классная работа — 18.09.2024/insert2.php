<?php
$database_connnect = mysqli_connect("localhost", "root", "", "my_db2");
$msg_error = "";

// Функция для проверки пароля
function validate_password($password) {
    $errors = [];

    if (strlen($password) <= 6) {
        $errors[] = "Пароль должен быть длиннее 6 символов.";
    }
    if (!preg_match("/[A-Z]/", $password)) {
        $errors[] = "Пароль должен содержать хотя бы одну заглавную букву.";
    }
    if (!preg_match("/[\d]/", $password)) {
        $errors[] = "Пароль должен содержать хотя бы одну цифру.";
    }
    if (!preg_match("/[,\$\?\/\(\)]/", $password)) {
        $errors[] = "Пароль должен содержать хотя бы один специальный символ (, $ ? / ( )).";
    }

    return empty($errors) ? true : $errors;
}

if (isset($_POST["button"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $role = $_POST["role"];
    $count_symbols = strlen($email);
    $array = ['@', '.'];
    $key = true;


    $sql = "SELECT COUNT(*) AS cnt FROM users WHERE email = '$email'";
    $result = mysqli_query($database_connnect, $sql);

    $row = $result->fetch_assoc();

    

    if ($row["cnt"] == 0){

        // Проверка email
        if ($count_symbols > 4) {
            for ($i=0; $i < sizeof($array); $i++) { 
                $is_at_symbol = strpos($email, $array[$i]);
                
                if (!$is_at_symbol) {
                    $msg_error = "Введите символ " . $array[$i];
                    $key = false;
                }
            }

            // Проверка пароля
            if ($key) {
                $password_validation = validate_password($password);
                if ($password_validation === true) {
                    $password = md5($password);
                    $sql = "INSERT INTO users(email, password, role) VALUES ('$email', '$password', '$role')";
                    $result = mysqli_query($database_connnect, $sql);

                    if($result) {
                        echo "Пользователь добавлен!";
                    }
                } else {
                    // Если есть ошибки в пароле, вывести их
                    $msg_error = implode("<br>", $password_validation);
                }
            }
            
        } else {
            $msg_error = "Некорректно введен email";
        }
    }else{
        $msg_error = "Такое e-mail уже зарегистрирован!";
    }
}
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Регистрация</title>
</head>
<body>
    <form method="post">
        <p><input type="text" name="email" placeholder="email" value="<?php echo $email;?>"></p>
        <p><input type="text" name="password" placeholder="password" value="<?php echo $password;?>"></p>
        <p><input type="text" name="role" placeholder="role" value="<?php echo $role;?>"></p>
        <input type="submit" name="button" value="Добавить">
    </form>

    <?php echo $msg_error; ?>
</body>
</html>

