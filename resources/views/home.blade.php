@extends('layouts.default')

@section('title', 'Резюме')

@section('content')
    <h3 class="text-center">Резюме на должность PHP разработчика</h3>
    <div class="photo"><img src="/images/myPhoto.jpg" style="margin: 0 auto;" width="150px" class="img-responsive"></div>
    <table class="table table-hover">
        <tr>
            <td>ФИО</td>
            <td style="vertical-align: middle;">Назаренко Александр Александрович</td>
        </tr>
        <tr>
            <td>Телефон</td>
            <td>380934771784</td>
        </tr>
        <tr>
            <td>email</td>
            <td>alex.naz.sw@gmail.com</td>
        </tr>

        <tr>
            <td>Желаемая должность</td>
            <td>PHP программист</td>
        </tr>
        <tr>
            <td>Навыки и достижения</td>
            <td>
                Около двух лет занимался версткой. Освоил HTML/CSS/JS/Wordpress/Bootstrap.<br>

                Имеется опыт работы с linux, apache, nginx. Немного знаком с python на уровне системного администрирования (писал скрипты для сбора бэкапов с удаленных серверов и т.д.).
                <br>


                Несколько проектов:<br>

                http://air-api.com<br>

                http://wt-engin.cz<br>

                http://d-a-c.com<br>

                http://aik-eko.com - сайт разработал на code igniter.<br>



                http://hoptrans-rus.ru - первый опыт с самописной mvc. Разработана система отслеживания груза (http://hoptrans-rus.ru/tracking). Присутствует система регистрации пользователей. Сделана админ часть для управления грузами(смена статусов, редактирование данных и т.д.). Получил много полезных навыков для работы с mvc и получил опыт в проектирование бд.<br>

                https://github.com/al3-n/tender - разработал с помощью slim2. Использовал composer.<br>

                Некоторые функции:<br>

                Запомнить меня.<br>

                CSRF protection.<br>

                Права доступа (гость, админ, пользователь)<br>

                Для работы с бд использовать Eloquent от Laravel. Так же использовал много полезных библиотек с гита с помощью composer. Система получилась простой и быстрой. Получил большой опыт работы с php и mvc.<br>

                Для просмотра проекта (пока не выкладывал в мир) в hosts -> 91.234.32.39    tender-testing.com. Аккаунт админа предоставлю по запросу.
            </td>
        </tr>
        <tr>
            <td>Опыт работы</td>
            <td>Администратор систем в компании AIK-EKO (февраль 2014 — декабрь 2016)</td>
        </tr>
        <tr>
            <td>Образование</td>
            <td>КПУ, Запорожье, Факультет управления, Программный инженер</td>
        </tr>
        <tr>
            <td>Владение языками</td>
            <td>Английский</td>
        </tr>
    </table>

@endsection