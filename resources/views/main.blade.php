<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite(['resources/css/app.css', 'resources/css/styles.css', 'resources/js/app.js'])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <title>{{!! $title !!}}</title>
</head>
<body>
 {{ dd($counter)}}1
    <header>
        <div id="section-first">
            <div class="header">
                <div class="left-half">
                    <h1 class="left-half_title">ТЕСТ Консалтинг</h1>
                    <img class="left-half_image" src="{{ Vite::asset('resources/images/logo_image.png') }}" alt="logo" />
                </div>
                <div class="right-half">
                    <div class="right-half_wrapper">
                        <div class="right-half_nav">
                            <ul>
                                <li><a href="#">О нас</a></li>
                                <li><a href="#">Услуги</a></li>
                                <li><a href="#">Контакты</a></li>
                            </ul>
                        </div>
                        <div class="right-half_phone">
                            <a href="tel:+79271234567">+7 (927) 123-45-60</a>
                        </div>
                    </div>

                    <div>
                        <h2 class="right-half_title">
                            Бизнес доверяет <br />нам свою бухгалтерию
                        </h2>
                        <p class="right-half_consultation">
                            Что нужно учесть при <br />открытии ИП или ООО?
                        </p>
                        <div class="right-half_button">
                            <a href="#">Консультация</a>
                            <div class="right-half_button_line"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="main-logo-text">
                <h2 class="main-logo-text_up">Аутсорсинг бухгалтерских услуг</h2>
                <h2 class="main-logo-text_down">Аутсорсинг бухгалтерских услуг</h2>
            </div>
        </div>
    </header>
    <section>
        <div id="section-second">
            <div class="about-us">
                <div class="about-us_left-half">
                    <h2 class="about-us_title">О нас</h2>
                    <img class="about-us_img" src="{{ Vite::asset('resources/images/Anna.png') }}" alt="Анна Каренина" />
                    <h3 class="about-us_name">Анна Каренина</h3>
                    <p class="about-us_jobtitle">
                        Бухгалтер и основатель компании «ТЕСТ Консалтинг».
                    </p>
                </div>
            </div>
            <div class="about-us_right-half">
                <p class="about-us_article-first">
                    Вот уже 10 лет наша команда предоставляет услуги бухгалтерского,
                    налогового и кадрового сопровождения в разных сферах: IT,
                    строительство, производство, общественное питание, оптовая и
                    розничная торговля.
                </p>
                {{--//! компонент: resources/views/components/counter/counter.blade.php  --}}
               <x-counter.counter/>
                <p class="about-us_article-second">
                    За годы работы мы постоянно расширяли наши профессиональные
                    компетенции,<br />
                    но не перестаем учиться и развиваться в профессиональном плане.
                    <br />
                    <br />
                    Мы успешно работаем на всех участках бухгалтерского учёта и всегда в
                    курсе последних изменений в законодательстве.
                    <br />
                    <br />
                    Мы помогаем компаниям разного уровня и частным лица эффективно
                    выстроить и грамотно вести учёт, а также корректно взаимодействовать
                    с фискальными органами.
                </p>
            </div>
        </div>
    </section>
</body>
</html>
