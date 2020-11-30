<?php

require_once 'Candidate.php';

?>


<html lang="ru">
<head>
    <meta http-equiv="Cache-Control" content="no-cache">
    <title>
        Тестовое задание
    </title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/client_form_scripts.js"></script>
</head>

<body>

<div id="client_form">
    <form class="main-form">
        <div class="form-group">
            <label for="fio_form" id="fio_text">ФИО: </label>
            <input class="form-control" id="fio_form" placeholder="Владимир Ильич Ульянов" required>
            <span id="fio_error" class="error invalid-feedback"></span>
        </div>
        <div class="form-group">
            <label for="phone_form" id="phone_text">Телефон: </label>
            <input class="form-control" id="phone_form" type="tel" placeholder="(812) 576-74-61" required>
            <span id="phone_error" class="error invalid-feedback"></span>
        </div>
        <div class="form-group">
            <label for="address_form" id="address_text">Адрес: </label>
            <input class="form-control" id="address_form" placeholder="Смольный проезд, 1" required>
            <span id="address_error" class="error invalid-feedback"></span>
        </div>
        <input class="btn btn-lg btn-primary btn-block" type="submit" value="Найти" onclick="processClientForm()"
               id="client_form_submit_button" data-toggle="modal" data-target="#modal">
    </form>
</div>

<div id="modal" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Информация о пункте выдачи</h5>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <span id="result">sdfghjmgfdsgh</span>
            </div>
        </div>
    </div>
</div>


<br>
<div id="container">
    <form class="sign-in-form">
        <div class="form-group">
            <label for="name">ФИО:</label>
            <input class="form-control" id="name" type="text">
        </div>
        <div class="form-group">
            <label for="sign-in-password">Пароль:</label>
            <input id="sign-in-password" class="form-control" type="password">
            <p><a href="#">Забыли пароль?</a></p>
        </div>
        <div class="form-group" id="lower">
            <label for="remember-me">
                <input id="remember-me" class="check" type="checkbox" value="remember-me">
                Запомнить меня
            </label>
        </div>
        <input class="btn btn-lg btn-primary btn-block" type="submit" value="Войти">
    </form>
</div>
</body>
</html>






