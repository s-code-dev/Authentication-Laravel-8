@extends('layouts.app')
@section('title')

    @parent -Страница Новостей

@endsection
@section('content');
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Новости</div>

                <div class="card-body">
                    <h2>Cтраница новостей</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection




<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1 style="text-align: center">Новости</h1>

<?php include('menu.blade.php') ?>

<h2 style="text-align: center"">Laravel 5.3: Подготовка к разработке (для новичков)</h2>

<p style="width: 900px; margin: 0 auto"> Системные требования

    Фреймворк Laravel 5.3 требует:

    PHP >= 5.6.4
    OpenSSL PHP Extension
    PDO PHP Extension
    Mbstring PHP Extension
    Tokenizer PHP Extension


    Весь этот набор компонентов присутствует в OpenServer под Windows.

    Да, кто-то скажет что фреймворк имеет Homestead в качестве виртуальной машины. Отвечу лишь, кому как удобно. Лично мне удобен OpenServer под «виндой».

    Также необходим Composer и NodeJS.

    2. Установка

    2.1. Настройка OpenServer

    Основные

    На вкладке «Основные» включаем автозапуск сервера и требование учетной записи Администратора. Вторая нам нужна при работе с файлом хостов.

    Сервер

    На этой вкладке устанавливаем настройки виртуального диска в «Автоопределение потребности», далее настройку использования переменной Path в «Свой Path + Win Path».

    Ставим галку «Защитить сервер от внешнего доступа», чтобы из локалки к нам никто не цеплялся.

    И… все) Переходим к следующей вкладке.

    Модули

    Для своих целей использую следующую связку модулей:

    HTTP: Apache — PHP 7 x64 — NGINX 1.10
    PHP: PHP 7 x64
    PostgreSQL 9.5 x64
    Redis 3.0

    Остальные пункты указываю «не использовать».

    FTP-сервер

    На этой вкладке, за ненадобностью, сразу выключаю галку запуска FTP-сервера.

    Почта

    По-умолчанию, все сообщения сохраняются локально в папку, но мне удобнее проверять, так сказать, «в боевом режиме».

    Так что, устанавливаю способ отправки через SMTP, далее сервер, порт, email-отправителя, имя пользователя (логин), пароль от учетки, шифрование в «авто».

    И… идем дальше:

    Домены

    Дабы каждый раз руками не добавлять новый сайт, в списке «Управление доменами» выбираем «Ручное + Автопоиск», а в правой части указываем «public», ибо в ней у нас и находится исполняемый файл.

    Планировщик задания (Cron)

    В своей работе использую Cron, так что настроим и его. Скажу, что для каждого сайта нужно добавлять свои комманды.

    Итак, во все значения времени ставим символ «звездочки» (*), а в графу «выполнить»:

    php "D:\OpenServer\domains\mysite.com\artisan" schedule:run

    Где указываем полный путь к файлу «artisan» в Вашем проекте.

    Скриншоты с подробностями

    2.2. Установка Laravel 5.3

    Перед началом разворачивания фреймворка убедитесь, что на компьютере установлены утилиты Composer и NodeJS. У второго использую версию 6 ветки, хотя это не принципиально.

    Перед установкой фреймворка, рекомендую воспользоваться пакетом hirak/prestissimo, позволяющим загружать несколько пакетов при установке/обновлении фреймворка одновременно. Без него процесс установки/обновления линейный, то есть запрашивает один пакет, ждет ответ, после скачивает (если ответ от сервера успешный), далее переходит к следующему. Пакет `hirak/prestissimo` же позволяет одновременно скачивать все необходимые пакеты и уже после этого начинает их ставить.

    Для установки пакета выполните в консоли:</p>

</body>

</body>
</html>