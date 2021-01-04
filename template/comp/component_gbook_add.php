<?php

## Компонентный подход. Компонент добавления записи.
if (!defined("GBook")) {
    define("GBook", "gbook.dat"); // имя файла с данными гостевой книги
}
require_once "../model.php";
$new = $_REQUEST['new'];
do {
    if (empty(trim($new['name']))) {
        $data['error']['no_user_name'] = true;
        //break;
    }
    if (empty(trim($new['text']))) {
        $data['error']['no_message_text'] = true;
        break;
    }
// А здесь выполняем добавление записи
    // подключаем Модель (ядро)
// Обработка формы, если Шаблон запущен при отправке формы.
// Если нажата кнопка Добавить...
    if (!empty($_REQUEST['doAdd'])) {
// Сначала - загрузка гостевой книги.
        $tmpBook = loadBook(GBook);
// Добавить в книгу запись пользователя - она у нас хранится
// в массиве $New, см. форму в шаблоне. Запись добавляется,
// как водится, в начало книги.
        $tmpBook = [time() => $_REQUEST['new']] + $tmpBook;
// Записать книгу на диск.
        saveBook(GBook, $tmpBook);
    }
// Данный компонент не генерирует никаких данных.
    $data = null;
} while (false);
?>
