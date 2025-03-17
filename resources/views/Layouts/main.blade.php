<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" ref="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
</head>
<body>
<header>
    <div class="navbar">
        <div class="logo">
            <img src="{{ asset('image/logo.png') }}" alt="КОТЕЛЬНА">
        </div>
        <div class="nav">
            <ul>
                <li><a href="#section1">Почему мы?</a></li>
                <li><a href="/rooms">Номера</a></li>
                <li><a href="#section2">Отзывы</a></li>
                <li><a href="#section3">Как нас найти</a></li>
            </ul>
        </div>
    </div>
</header>
<main>
    @yield('content')
</main>
<section>
    <div class="reviews-section">
        <h2 id="section2"style="margin-left: 700px; font-size: 32px; margin-bottom: 120px; margin-top: 120px;">Отзывы</h2>
        <div style="overflow: visible" class="reviews-container">
            <div style="margin-left: 150px;" class="review">
                <p>“Первый раз пришлось оставить нашего котика в гостинице, очень переживали. Администратор Мария каждый день высылала нам фото нашего питомца, рассказывала, как он себя чувствует. И мы и котик остались очень довольны!”</p>
                <div class="review-info">
                    <span class="name">Валерия Гришаева</span>
                    <span class="date">15 ноября, 2019</span>
                </div>
            </div>
            <div class="review">
                <p>“Гостиницу для питомцев нам посоветовали друзья. Они всегда оставляют здесь своего кота, когда уезжают. В 'Котейке' очень хорошо заботятся о питомцах, в гостинице очень чисто. Всем рекомендую! Будем обращаться еще.”</p>
                <div class="review-info">
                    <span class="name">Екатерина Минаева</span>
                    <span class="date">10 октября, 2019</span>
                </div>
            </div>
            <div  class="review">
                <p>“Мой кот — настоящая привереда, и найти ему гостиницу было сложно. У меня был особый график ухода за ним, и 'Котейка' с этим справилась. Я часто наблюдал по видео со своего телефона, это очень удобно.”</p>
                <div class="review-info">
                    <span class="name">Павел Нечаев</span>
                </div>
            </div>
        </div>

    </div>
    <div style="margin-bottom: 90px;" class="group-btn">
        <div class="pagination">
            <span class="dot active" data-slide="0"></span>
            <span class="dot" data-slide="1"></span>
            <span class="dot" data-slide="2"></span>
        </div>

        <!-- Навигация түймелері -->
        <div class="group-btn_mini">
            <button class="btnslide" id="prev-button"><span><svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g filter="url(#filter0_d_10_75)">
                            <circle cx="30.0005" cy="28" r="18" fill="white"/>
                        </g>
                        <path d="M31.0005 24L27.0005 28L31.0005 32" stroke="#FF7236" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <defs>
                            <filter id="filter0_d_10_75" x="0.000488281" y="0" width="60" height="60" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                <feOffset dy="2"/>
                                <feGaussianBlur stdDeviation="6"/>
                                <feColorMatrix type="matrix" values="0 0 0 0 0.679167 0 0 0 0 0.59545 0 0 0 0 0.559826 0 0 0 0.25 0"/>
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_10_75"/>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_10_75" result="shape"/>
                            </filter>
                        </defs>
                    </svg></span></button>
            <button class="btnslide" id="next-button"><span><svg width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g filter="url(#filter0_d_10_76)">
                            <circle cx="30.0005" cy="28" r="18" fill="white"/>
                        </g>
                        <path d="M29.0005 32L33.0005 28L29.0005 24" stroke="#FF7236" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        <defs>
                            <filter id="filter0_d_10_76" x="0.000488281" y="0" width="60" height="60" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
                                <feOffset dy="2"/>
                                <feGaussianBlur stdDeviation="6"/>
                                <feColorMatrix type="matrix" values="0 0 0 0 0.679167 0 0 0 0 0.59545 0 0 0 0 0.559826 0 0 0 0.25 0"/>
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_10_76"/>
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_10_76" result="shape"/>
                            </filter>
                        </defs>
                    </svg></span></button>
        </div>
    </div>


</section>

<footer>
    <div class="search">
        <div class="info">
            <h2 id="section3">Как нас найти</h2>
            <p><strong>Адрес:</strong><br> Санкт-Петербург,<br> ул Большая Конюшенная, д 19</p>
            <p><strong>Режим работы:</strong><br> Ежедневно, с 9:00 до 20:00</p>
            <p><strong>Телефон:</strong><br> 8 705 356 12 18</p>
            <p><strong>Email:</strong><br> info@cat-hotel.ru</p>
            <div class="social-icons">
                <a href="#" style="background-color: #3b5998;">F</a>
                <a href="#" style="background-color: #00acee;">T</a>
                <a href="#" style="background-color: #e4405f;">I</a>
            </div>
        </div>
    </div>
    <img style="position: absolute; margin: 270px 970px;" src="{{ asset('image/Group 57.png') }}" alt="">

    <img style="max-width: 100%" src="{{ asset('image/Group 58.png') }}" alt="Gid">
</footer>
<footer2>
    <div class="navbar">
        <div class="logo">
            <img style="margin-left: 30px;" src="{{ asset('image/logo.png') }}" alt="КОТЕЛЬНА">
        </div>
        <div  class="nav-1">
            <ul>
                <li><a href="/why-us">Почему мы?</a></li>
                <li><a href="/rooms">Номера</a></li>
                <li><a href="/reviews">Отзывы</a></li>
                <li><a href="/contact">Как нас найти</a></li>
            </ul>
        </div>
    </div>
    <div class="last-page">
        <p> &copy;2019 Все права защищены</p><p>Политика конфиденциальности</p>
    </div></footer2>



<script src="{{ asset('js/script.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


</body>
</html>
