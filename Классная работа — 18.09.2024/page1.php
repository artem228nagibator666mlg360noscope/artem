<?php
header('Content-Type: text/html; charset=utf-8');

$arr = ['a', 'b', 'c', 'd', 'e'];

foreach ($arr as $letter) {
    echo '<a href="page2.php?letter=' . $letter . '">' . $letter . '</a><br>';
}
?>
