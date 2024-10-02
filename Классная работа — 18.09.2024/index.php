<?php
session_start();



$servername = "localhost";
$username = "root"; // Ваше имя пользователя для базы данных
$password = ""; // Ваш пароль для базы данных
$dbname = "my_db2";


if (isset($_SESSION['user'])){
    // Создание соединения
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Проверка соединения
    if ($conn->connect_error) {
        die("Ошибка подключения: " . $conn->connect_error);
    }

    // Пример запроса на выбор всех пользователей
    $sql = "SELECT id, email, role FROM users";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Вывод данных каждой строки
        while($row = $result->fetch_assoc()) {
            echo " Email: " . $row["email"]. " - Роль: " . $row["role"] . "<a href='delete.php?id=$row[id]'>Удалить сотрудника</a>" . "<br>";
        }
    } else {
        echo "0 результатов";
    }

    $conn->close();
}else{
    header('Location: login.php');
}
?>

<a href="insert2.php">Добавить сотрудника</a>
