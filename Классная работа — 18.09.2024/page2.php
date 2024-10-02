<?php
header('Content-Type: text/html; charset=utf-8');

// Массив слов, которые начинаются на соответствующие буквы
$words = [
    'a' => 'apple',
    'b' => 'banana',
    'c' => 'cat',
    'd' => 'dog',
    'e' => 'elf'
];

// Проверяем, передан ли параметр "letter"
if (isset($_GET['letter'])) {
    $letter = $_GET['letter'];

    // Если буква существует в массиве, выводим соответствующее слово
    if (array_key_exists($letter, $words)) {
        echo "Слово на букву '$letter': " . $words[$letter];
    } else {
        echo "Слово на эту букву не найдено.";
    }
} else {
    echo "Буква не передана.";
}
?>