<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Админ - Книжный магазин</title>
    @vite(['resources/css/app.css'])
</head>

<body>

    <x-header />

    <main>
        <h1>Панель администратора</h1>

        <p>Управление книгами в магазине.</p>

        <h2>Список книг</h2>

        <ul>
            @forelse ($texts as $text)
                <li>
                    <strong>{{ $text->title }}</strong>
                    — Автор: {{ $text->name }}
                    — Год: {{ $text->year }}

                    <p>{{ $text->description }}</p>

                    Изменить | Удалить
                </li>
            @empty
                <li>Книг пока нет.</li>
            @endforelse
        </ul>
    </main>

    <x-footer />

</body>
</html>