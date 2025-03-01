<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Styles / Scripts -->
            @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <main>
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title">Заголовок карточки</h5>
                <p class="card-text">Описание карточки. Здесь можно разместить дополнительную информацию.</p>
                <a href="#" class="btn btn-primary">Подробнее</a>
            </div>
        </div>
    </main>
</html>
