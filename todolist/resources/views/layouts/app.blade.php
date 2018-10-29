<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Todolist</title>
        <link rel="stylesheet" href="/traversy_tutorials/todolist/public/css/app.css">
    </head>
    <body>
        @include('inc.navbar')

        <div class="container">
            @include('inc.messages')
            @yield('content')
        </div>

        <footer id="footer" class="text-center">
            Copyright &copy; 2018 Matt Fewer
        </footer>

    </body>
</html>
