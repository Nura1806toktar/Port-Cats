<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
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
    <div class="heading">
        <h2>Наши номера</h2>

        <div class="sort-dropdown">
            <button class="sort-toggle">↑ По площади</button>
            <ul class="sort-menu">
                <li data-option="area-asc">↑ По площади</li>
                <li data-option="area-desc">↓ По площади</li>
                <li data-option="price-asc">↑ По цене</li>
                <li data-option="price-desc">↓ По цене</li>
            </ul>
        </div>
    </div>
<div class="big-container">
    <div class="filter-panel">
        <!-- Бөлім: Цена -->
        <label>Цена за сутки,₽</label>
        <input type="text" placeholder="от 100">
        <input type="text" placeholder="до 600">

        <!-- Бөлім: Площадь -->
        <label>Площадь</label>
        <div class="checkbox-group">
            <label><input type="checkbox" checked> 0,63 м2</label>
            <label><input type="checkbox" checked> 0,90 м2</label>
            <label><input type="checkbox" checked> 1,13 м2</label>
            <label><input type="checkbox" checked> 1,56 м2</label>
            <label><input type="checkbox" checked> 2,56 м2</label>
            <label><input type="checkbox" checked> 2,88 м2</label>
        </div>

        <!-- Бөлім: Оснащение -->
        <label>Оснащение номера</label>
        <div class="checkbox-group">
            <label><input type="checkbox" checked> Пустой номер</label>
            <label><input type="checkbox" checked> Лежак</label>
            <label><input type="checkbox" checked> Когтеточка</label>
            <label><input type="checkbox" checked> Игровой-комплекс</label>
            <label><input type="checkbox" checked> Домик</label>
        </div>

        <!-- Түймелер -->
        <button class="apply-button">Применить</button>
        <button class="reset-button">Сбросить фильтр</button>
    </div>
    <div class="room-container">
        <div class="room-item2">
            <div class="room-image2">
                <img src="{{ asset('image/Rectangle 46.png') }}" alt="Эконом" />
            </div>
            <h3>Эконом</h3>
            <ul>
                <li>Размер (ШxГxВ): 90x70x180 см</li>
                <li>Площадь: 0.63 м²</li>
                <li>Цена за сутки: 100₽</li>
            </ul>
            <button>Забронировать</button>
        </div>
        <div class="room-item2">
            <div class="room-image2">
                <img src="{{ asset('image/Rectangle 46.png') }}" alt="Эконом" />
            </div>
            <h3>Эконом плюс</h3>
            <ul>
                <li>Размер (ШxГxВ): 90x100x180 см</li>
                <li>Площадь: 0.90 м²</li>
                <li>Цена за сутки: 200₽</li>
            </ul>
            <button>Забронировать</button>
        </div>


        <div class="room-item2">
            <div class="room-image2">
                <img src="{{ asset('image/Rectangle 46.png') }}" alt="Эконом" />
            </div>
            <h3>Эконом</h3>
            <ul>
                <li>Размер (ШxГxВ): 90x70x180 см</li>
                <li>Площадь: 0.63 м²</li>
                <li>Цена за сутки: 100₽</li>
            </ul>
            <button>Забронировать</button>
        </div>
        <div class="room-item2">
            <div class="room-image2">
                <img src="{{ asset('image/Rectangle 46.png') }}" alt="Эконом" />
            </div>
            <h3>Эконом плюс</h3>
            <ul>
                <li>Размер (ШxГxВ): 90x100x180 см</li>
                <li>Площадь: 0.90 м²</li>
                <li>Цена за сутки: 200₽</li>
            </ul>
            <button>Забронировать</button>
        </div>
        <div class="room-item2">
            <div class="room-image2">
                <img src="{{ asset('image/Rectangle 46.png') }}" alt="Эконом" />
            </div>
            <h3>Эконом</h3>
            <ul>
                <li>Размер (ШxГxВ): 90x70x180 см</li>
                <li>Площадь: 0.63 м²</li>
                <li>Цена за сутки: 100₽</li>
            </ul>
            <button>Забронировать</button>
        </div>
        <div class="room-item2">
            <div class="room-image2">
                <img src="{{ asset('image/Rectangle 46.png') }}" alt="Эконом" />
            </div>
            <h3>Эконом плюс</h3>
            <ul>
                <li>Размер (ШxГxВ): 90x100x180 см</li>
                <li>Площадь: 0.90 м²</li>
                <li>Цена за сутки: 200₽</li>
            </ul>
            <button>Забронировать</button>
        </div>
    </div>
</div>




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
</body>
</html>
