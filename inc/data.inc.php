<?php
//echo phpinfo();
// Установка локали и выбор значений даты

setlocale(LC_ALL, "english");
//date_default_timezone_set("Europe/Helsinki");
$day = strftime('%d');
$mon = strftime('%m');
$year = strftime('%Y');
$hour = (int) strftime('%H');
$welcome = '';

if ($hour >= 0 && $hour < 6) {
    $welcome = "Good Night";
} elseif ($hour >= 6 && $hour < 12) {
    $welcome = "Good Morning";
} elseif ($hour >= 12 && $hour < 18) {
    $welcome = "Good Day";
} elseif ($hour >= 18 && $hour < 23) {
    $welcome = "Good Evening";
} else {
    $welcome = "Good Night";
}

// Инициализация массива
$leftMenu = [
        ['link' => "Домой", 'href' => 'index.php'],
        ['link' => "О нас", 'href' => 'about.php'],
        ['link' => "Контакты", 'href' => 'contact.php'],
        ['link' => "Таблица умножения", 'href' => 'table.php'],
        ['link' => "Калькулятор", 'href' => 'calc.php']
];
?>