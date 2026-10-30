<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Автор - Книжный магазин</title>
    @vite(['resources/css/app.css'])


</head>

<body>

    <x-header />

    <main>
        <h1>Автор</h1>

        <form action="/author" method="POST">
            @csrf
            <label for="name">Имя автора</label>
            <input type="text" placeholder="Введите имя автора"  name="name" id="name">
            
            <label for="year ">год</label>
            <input type="number" placeholder="Введите год создания"  name="year" id="year">

            <label for="Title ">название книги</label>
            <input type="text" placeholder="Введите название книги"  name="Title " id="Title ">

            <label for="description">Описание</label>
            <textarea name="description" id="description" placeholder="введите опимание"></textarea>

            <button type="submit">отправить</button>
        </form>
    </main>

    <x-footer />

</body>
</html>