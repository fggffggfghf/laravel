<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Категории - Книжный магазин</title>
    @vite(['resources/css/index.css', 'resources/js/app.js'])

</head>

<body>

    <x-header />

    <main>
        <h1>Категории книг</h1>

        <p>Выберите интересующую вас категорию:</p>

        <ul>
            <li>Фэнтези</li>
            <li>Детектив</li>
            <li>Фантастика</li>
            <li>Роман</li>
        </ul>

        <h2>Фэнтези</h2>

        <p>Книги о магии, приключениях и фантастических мирах.</p>

        <ul>
            <li>Хоббит - Дж. Р. Р. Толкин</li>
            <li>Гарри Поттер - Дж. К. Роулинг</li>
            <li>Хроники Нарнии - К. С. Льюис</li>
        </ul>
    </main>

    <x-footer />

</body>
</html>