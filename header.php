<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./style/style.css">
    <title>Document</title>
</head>
<body>
    <section class="header">
        <nav class="navbar navbar-expand-lg dasw">
            <span class="navbar-toggler-icon btn" id="btn-link" style="cursor: pointer;"></span>
            <a class="navbar-brand" href="#">Какой-то сайт</a>
            <div class="navbar-nav-21" >
                <a class="nav-link" href="index.php">Микроразметка это</a> 
                <a class="nav-link" href="page2.php">Задачи</a>
                <a class="nav-link" href="page3.php">Виды</a>
                <a class="nav-link" href="page4.php">Основные словари</a>
                <a class="nav-link" href="page5.php">Синтаксис</a>
                <a class="nav-link" href="page6.php">Добавление микроразметки</a>
                <a class="nav-link" href="page7.php">Проверка микроразметки</a>
            </div>
        </nav>
    </section>
    
    <?php
    require './side.php';
    ?>