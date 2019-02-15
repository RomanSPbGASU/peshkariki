<?php

require_once 'Candidate.php';

?>


<html>
    <head>
        <meta http-equiv="Cache-Control" content="no-cache">
        <title>
            Тестовое задание
        </title>
        <link rel="stylesheet" type="text/css" href="css/client_form_styles.css">
        <link rel="stylesheet" href="css/reset.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="icon" href="http://vladmaxi.net/favicon.ico" type="image/x-icon">
        <link rel="shortcut icon" href="http://vladmaxi.net/favicon.ico" type="image/x-icon">
        <script type="text/javascript" src="js/client_form_scripts.js"></script>
    </head>

    <body>

    <div id="client_form">
        <form>
            <span id="fio_text">ФИО: </span>
            <input id="fio_form" placeholder="Владимир Ильич Ульянов">
            <span id="fio_error" class="error"></span>

            <span id="phone_text">Телефон: </span>
            <input id="phone_form" placeholder="(812) 576-74-61">
            <span id="phone_error" class="error"></span>

            <span id="address_text">Адрес: </span>
            <input id="address_form" placeholder="Смольный проезд, 1">
            <span id="address_error" class="error"></span>

            <input type="submit" value="Найти" onclick="processClientForm()" id="client_form_submit_button">
        </form>
        <span id="result"></span>
    </div>

    </body>
</html>


<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="http://vladmaxi.net/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="http://vladmaxi.net/favicon.ico" type="image/x-icon">
</head>
<body>

<div id="container">
    <form>
        <label for="name">ФИО:</label>
        <input type="name">
        <label for="username">Пароль:</label>
        <p><a href="#">Забыли пароль?</a></p>
        <input type="password">
        <div id="lower">
            <input type="checkbox"><label class="check" for="checkbox">Запомнить меня</label>
            <input type="submit" value="Войти">
        </div>
    </form>
</div>
</body>
</html>






