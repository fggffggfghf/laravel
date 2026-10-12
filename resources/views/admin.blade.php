<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админ - Книжный магазин</title>
    @vite(['resources/css/index.css', 'resources/js/app.js'])

</head>

<body>

    <x-header />

    <main class=''>
        <h1>Панель администратора</h1>

        <p>Управление книгами в магазине.</p>

        <h2>Список книг</h2>

        <ul>
            <li>Хоббит - Изменить | Удалить</li>
            <li>Гарри Поттер - Изменить | Удалить</li>
            <li>1984 - Изменить | Удалить</li>
        </ul>
    </main>

    <x-footer />

</body>
</html>