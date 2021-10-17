<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Auth</title>
    </head>
    <body>
        @include('partials.nav')
        <h1>Login</h1>
        <pre>{{ Auth::user() }}</pre>
        <form action="" method="POST">
            @csrf
            <label for="email">
                <input name="email" type="email" placeholder="Email...">
            </label><br>
            <label for="password">
                <input name="password" type="password" placeholder="Password...">
            </label><br>
            <button type="submit">Login</button>
        </form>
    </body>
</html>
