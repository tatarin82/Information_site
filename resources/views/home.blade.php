@extends('layouts.header')
@section('content')
    <main class="main">
        <div class="first_section_wrapper">
            <section class="first_section">
                <h2 class="heading">Главная страница</h2>
                <div class="first_section_container">
                    <div class="card">
                        <a href="{{route('indexpage.index')}}"><img src="../images/easy.jpg" alt="" class="card_img">
                        <span class="card_text">Для начинающих радиолюбителей</span></a>
                    </div>
                    <div class="card">
                        <a href="{{route('indexpage.index')}}"><img src="../images/service.jpg" alt="" class="card_img">
                        <span class="card_text">Ремонт радиоэлектроники</span></a>
                    </div>
                    <div class="card">
                        <a href="{{route('indexpage.index')}}"><img src="../images/workPC.jpg" alt="" class="card_img">
                        <span class="card_text">Работа с компьютером</span></a>
                    </div>
                    <div class="card">
                        <a href="{{route('indexpage.index')}}"><img src="../images/techno.jpeg" alt="" class="card_img">
                        <span class="card_text">Технологии радиоэлектроники</span></a>
                    </div>
                    <div class="card">
                        <a href="{{route('indexpage.index')}}"><img src="../images/radiolamp.jpg" alt="" class="card_img">
                        <span class="card_text">Радиолампы</span></a>
                    </div>
                    <div class="card">
                        <a href="{{route('indexpage.index')}}"><img src="../images/microcontrollers.jpg" alt="" class="card_img">
                        <span class="card_text">Микроконтроллеры</span></a>
                    </div>
                    <div class="card">
                        <a href="{{route('indexpage.index')}}"><img src="../images/frequency.jpg" alt="" class="card_img">
                        <span class="card_text">Частотные преобразователи</span></a>
                    </div>
                    <div class="card">
                        <a href="{{route('indexpage.index')}}"><img src="../images/frequencyh.jpg" alt="" class="card_img">
                        <span class="card_text">ВЧ</span></a>
                    </div>
                </div>
            </section>
            <!-- <section class="second_section">
                <div class="second_section_bg"></div>
                <h2 class="heading_desk">Хотели бы загородный дом?</h2>
                <h2 class="heading_mobile">Для скачивания нужно зарегистрироваться</h2>
                <p class="text text_desk">Заполните все поля</p>
                <p class="text_mob">Оставьте ваш отзыв в форме ниже и мы его опубликуем на нашем сайте</p>
                <form action="#" method="post">
                    <label for="first_name">
                        <input type="text" id="first_name" placeholder="Ваше имя">
                    </label>
                    <label for="password">
                        <input type="password" id="password" placeholder="Введите пароль">
                    </label>
                    <label for="password">
                        <input type="password" id="password" placeholder="Повторите пароль">
                    </label>
                    <label for="email">
                        <input type="email" id="email" placeholder="Email">
                    </label>
                    <label for="submit">
                        <input type="submit" id="submit" value="Отправить">
                    </label>
                </form>
            </section> -->
        </div>
    </main>
@endsection