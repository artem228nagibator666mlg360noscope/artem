<h1>UPDATE</h1>

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

// Данные для обновления пользователя с id = 1
$id = 1;
$new_email = 'updateduser@mail.ru';
$new_password = md5('newpassword123'); // Пример хэширования пароля
$new_role = 'admin';

// SQL-запрос на обновление
$sql = "UPDATE users SET email='$new_email', password='$new_password', role='$new_role' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    echo "Запись пользователя успешно обновлена!";
} else {
    echo "Ошибка обновления записи: " . $conn->error;
}

$conn->close();
?>
