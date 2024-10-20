<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shop</title>
</head>
<body>
<div class="top-line">
    <div class="container">
        <div class="top-line__main">
            <div class="select-city">
                <span class="select-city__text">Mockva</span>
                <div class="select-city__icon"></div>
            </div>
            <div class="pick-up-point">
                <span class="pick-up-point__text">Пункт выдачи</span>
                <div class="pick-up-point__icon"></div>
            </div>
            <span class="top-line-time">Пн-Пт: <strong>C 9:00 - 17:00</strong></span>
        </div>
        <div class="user-account">
            <div class="user-account__icon"></div>
            <span class="user-account__text">Личный кабинет</span>
        </div>
    </div>
</div>
<div class="midle-line">
    <div class="container">
        <a href="" class="logo">
            <img src="{{asset('images/logo.png')}}" alt="">
        </a>
    </div>


</div>
</body>
</html>
