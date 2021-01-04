<!-- Компонентный подход. Шаблон гостевой книги. -->
<html><head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Гостевая книга</title>
    </head>
    <body>

        <!-- Блок ввода нового сообщения. -->
        <?php require_once 'component_gbook_add.php' ?>

        <h1>Добавьте свое сообщение:</h1>
        <form method="post">
            Ваше имя: <input type="text" name="new[name]"><br>
            <?php if (@$data['error']['no_user_name']) { ?>
                <span style="error">Не указано имя пользователя!</span>
            <?php } ?>
           <br /> Комментарий:<br />
            <textarea name="new[text]" cols="60" rows="5"></textarea><br>
            <?php if (@$data['error']['no_message_text']) { ?>
                <span style="error">Не указан текст сообщения!</span>
            <?php } ?>
            <input type="submit" name="doAdd" value="Добавить!">
        </form>

        <!-- Блок сообщений гостевой книги. -->
        <?php require_once "component_gbook_show.php" ?>
        <h1>Сообщения гостевой книги:</h1>
        <?php foreach ($data as $id => $e) { ?>
            Имя человека: <?= $e['name'] ?><br />
            Его комментарий:<br /> <?= $e['text'] ?><hr />
        <?php } ?>
        <!-- Блок новостей. -->
        <h2>Последние новости:</h2>
        <?php require_once "component_news_show.php" ?>
        <ul>
            <?php foreach ($data as $i => $n) { ?>
                <li><?= $i + 1 ?>-я новость: <?= $n ?></li>
            <?php } ?>
        </ul>
    </body>
</html>
