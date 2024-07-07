<?php
// Подключение к базе данных
$servername = "localhost";
$username = "пользователь";
$password = "пароль";
$dbname = "db_id";

$conn = new mysqli($servername, $username, $password, $dbname);

// Проверка подключения
if ($conn->connect_error) {
    die("Ошибка подключения: " . $conn->connect_error);
}

// Получение данных из формы
$email = $_POST['email'];
$password = $_POST['password'];

// Запись данных в базу данных
$sql = "INSERT INTO users (name, email, password) VALUES ('$name', '$email', '$password')";
if ($conn->query($sql) === TRUE) {
    echo "Регистрация прошла успешно!";
} else {
    echo "Ошибка: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>