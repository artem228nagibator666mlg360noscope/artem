<h1>DELETE</h1>

<?php
$servername = "localhost";
$username = "root"; // Ваше имя пользователя для базы данных
$password = ""; // Ваш пароль для базы данных
$dbname = "my_db2";

// Создание соединения
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка соединения
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

// ID пользователя, которого необходимо удалить
$id = $_GET['id'];

// SQL-запрос на удаление
$sql = "DELETE FROM users WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Пользователь успешно удалён!";
} else {
    echo "Ошибка удаления записи: " . $conn->error;
}

$conn->close();
?>
