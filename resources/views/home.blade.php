<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <title>Shop</title>
</head>

<body>
    <div class="top-line">
        <div class="container flex-center">
            <div class="top-line__main flex-center">
                <div class="select-city flex-center">
                    <span class="select-city__text">Mockva</span>
                    <div class="select-city__icon">
                        <img src="{{ asset('images/select.svg') }}" alt="">
                    </div>
                </div>
                <div class="pick-up-point flex-center">
                    <div class="pick-up-point__icon">
                        <img src="{{ asset('images/local.svg') }}" alt="">
                    </div>
                    <span class="pick-up-point__text">Пункт выдачи</span>
                </div>
                <div class="top-line-time flex-center"> <span class="top-line-time__text"> Пн-Пт: <span>C 9:00 -
                            17:00</span></span></div>
            </div>
            <div class="user-account flex-center">
                <div class="user-account__icon">
                    <img src="{{ asset('images/acount.svg') }}" alt="">
                </div>
                <span class="user-account__text">Личный кабинет</span>
            </div>
        </div>
    </div>
    <div class="midle-line">
        <div class="container flex-center">
            <a href="" class="ml-logo">
                <img src="{{ asset('images/logo.png') }}" alt="">
            </a>
            <form action="" class="fast-search">
                <div class="fast-search__input">
                    <input type="text" name="v" placeholder="Поиск" class="fast-search__input">
                    <div class="fast-search__icon">
                        <img src="{{ asset('images/search.svg') }}" alt="">
                    </div>
                </div>
                <span class="fast-search__example">
                    например: кроссовки, футболка
                </span>
            </form>
            <div class="ml-callback">
                <a class="ml-callback__phone" tel="88005553535" href="">8 (800) 555-35-35</a>
                <a href="#" class="ml-callback__call">Заказать звонок</a>
            </div>
            <div class="ml-action flex-center">
                <div class="ml-action__compare">
                    <div class="ml-action__compare__icon">
                        <img src="{{ asset('images/action/compare.svg') }}" alt="">
                    </div>
                </div>
                <div class="ml-action__like">
                    <div class="ml-action__like__icon">
                        <img src="{{ asset('images/action/like.svg') }}" alt="">
                    </div>
                </div>
                <div class="ml-action__cart">
                    <div class="ml-action__cart__icon">
                        <img src="{{ asset('images/action/cart.svg') }}" alt="">
                    </div>
                    <div class="ml-action__cart__text">Корзина</div>
                </div>
            </div>
        </div>
    </div>
    <nav class="main-menu">
        <div class="container">
            <div class="list-cat">
                <div class="list-cat__main flex-center">
                    <div class="list-cat__main_icon">
                        <img src="{{ asset('images/menu.svg') }}" alt="">
                    </div>
                    <span class="list-cat__main_text">Каталог</span>
                </div>
                <div class="list-cat__drop">
                    <ul class="list-cat__list">
                        <li class="list-cat__list-item"><a href="#" class="list-cat__list-link">Комоды и Тумбы</a>
                        </li>
                        <li class="list-cat__list-item"><a href="#" class="list-cat__list-link">Мебель для
                                детей</a></li>
                        <li class="list-cat__list-item"><a href="#" class="list-cat__list-link">Прихожие</a></li>
                        <li class="list-cat__list-item"><a href="#" class="list-cat__list-link">Стенки для
                                гостиней</a></li>
                        <li class="list-cat__list-item"><a href="#" class="list-cat__list-link">Столы</a></li>
                        <li class="list-cat__list-item"><a href="#" class="list-cat__list-link">Шкафы</a></li>
                        <li class="list-cat__list-item"><a href="#" class="list-cat__list-link">Диваны</a></li>
                        <li class="list-cat__list-item"><a href="#" class="list-cat__list-link">Кресла</a></li>
                        <li class="list-cat__list-item"><a href="#" class="list-cat__list-link">Пуфы</a></li>
                    </ul>
                </div>

            </div>
            <ul class="main-menu__list ">
                <li class="main-menu__item">
                    <a href="#" class="main-menu__link">Акции</a>
                </li>
                <li class="main-menu__item">
                    <a href="#" class="main-menu__link">О фабрике</a>
                </li>
                <li class="main-menu__item">
                    <a href="#" class="main-menu__link">Оплата</a>
                </li>
                <li class="main-menu__item">
                    <a href="#" class="main-menu__link">Произавдство</a>
                </li>
                <li class="main-menu__item">
                    <a href="#" class="main-menu__link">Сборки</a>
                </li>
                <li class="main-menu__item">
                    <a href="#" class="main-menu__link">Доставка</a>
                </li>
                <li class="main-menu__item">
                    <a href="#" class="main-menu__link">Оплата</a>
                </li>
            </ul>
        </div>
    </nav>
    <header class="header">
        <!-- Slider main container -->
        <div class="swiper swiper-carousel">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide header-carousel__slide"
                    style="background-image: url({{ asset('images/baner.jpg') }});">
                    <div class="container">
                        <h3 class="header-carousel__title">бери больше-<br>плати меньше</h3>
                        <div class="header-carousel__desc">
                            <p>При покупке <span class="bold">одного и более</span> товаров скидка <span
                                    class="bold">500p</span></p>
                        </div>
                        <a href="#" class="btn-border">Подробнее</a>
                    </div>
                </div>
                <div class="swiper-slide header-carousel__slide "
                    style="background-image: url({{ asset('images/baner1.jpg') }})">
                    <div class="container">
                        <h3 class="header-carousel__title">Кровать в -<br>скандинаском <br> стиле со скидкой 15%</h3>
                        <div class="header-carousel__desc">
                            <p>До 26 Мая</p>
                        </div>
                        <a href="#" class="btn-border">Подробнее</a>
                    </div>
                </div>
            </div>
            <!-- If we need pagination -->
            <div class="container header-carousel-pagination-wrap">
                <div class="container">
                    <div class="header-carousel-pagination"></div>
                </div>
            </div>
        </div>
    </header>

    <section class="categories">
        <div class="container">
            <h2 class="categories__title">Более 30 000 продуктов ждут тебя</h2>
            <span class="categories__desc">
                Интернет-магазин который предлагает только высококачественные продукты с доставкой по всей России и
                странам СНГ с гарантией качества и безопасности покупателя в течение 7 дней с момента заказа и
                возврата
                товара.
            </span>
            <div class="categories__items">
                <div class="categories__item">
                    <div class="categories__item_icon">
                        <img src="{{ asset('images/table.svg') }}" alt="">
                    </div>
                    <h4 class="categories__item_title">
                        Комоды и Тумбы
                    </h4>
                    <div class="categories__item_count">
                        60
                    </div>
                </div>

                <div class="categories__item">
                    <div class="categories__item_icon">
                        <img src="{{ asset('images/table.svg') }}" alt="">
                    </div>
                    <h4 class="categories__item_title">
                        Мебель для детей
                    </h4>
                    <div class="categories__item_count">
                        60
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="sale">
        <div class="container">
            
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swiper = new Swiper('.swiper', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,

            // If we need pagination
            pagination: {
                el: '.header-carousel-pagination',
                clickable: true,
            },
        });
    </script>
</body>

</html>
