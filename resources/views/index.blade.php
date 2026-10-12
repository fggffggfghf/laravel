<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Уютный книжный магазин. Найдите лучшие художественные и популярные книги на любой вкус.">
    <title>Главная — Книжный магазин</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    @vite(['resources/css/index.css', 'resources/js/app.js'])

</head>
<body>
    <x-header />
    
    <main class="container">
        <section class="hero">
            <h1>Добро пожаловать в книжный магазин</h1>
            <p>Здесь вы можете найти книги на любой вкус — от бестселлеров до редких изданий.</p>
        </section>

        <section class="popular-books">
            <h2>Популярные книги</h2>
            <ul class="books-list">
                <li><a href="#">Хоббит</a> — Дж. Р. Р. Толкин</li>
                <li><a href="#">Гарри Поттер</a> — Дж. К. Роулинг</li>
                <li><a href="#">1984</a> — Джордж Оруэлл</li>
            </ul>
        </section>
    </main>

    <x-footer />
</body>
</html>
 <!-- vate  пропиши.  поэтому не работает (пути для css)  -->