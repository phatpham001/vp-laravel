<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LARAVEL</title>
</head>

<body>
    <header>
        <h1>Đây là header</h1>
    </header>
    <main>
        <h1>Đây là main</h1>
        <a href="<?php echo route('category.list') ?>">List category </a><br>
        <a href="<?php echo route('auth.admin.dashboard') ?>">main admin</a>

    </main>
    <footer>
        <h1>Đây là footer </h1>
    </footer>
</body>

</html>