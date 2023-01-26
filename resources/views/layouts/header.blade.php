<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Справочник по радиоэлектронике</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script defer src="../../js/app.js"></script>
    <!-- @vite(['resources/css/app.css', 'resources/js/app.js']) -->
</head>
<body>
    <header class="header open">
        <div class="header_wrapper">
            <div class="logo_wrapper">
                <img src="../images/logo2.png" alt="logo" class="logo_img">
            </div>
            <nav class="header_nav">
                <ul class="header_list mobile">
                    <li class="header_list_item"><a href="{{route('home.index')}}" class="header_list_link selected">Главная</a></li>
                    <li class="header_list_item"><a href="{{route('schemes.index')}}" class="header_list_link">Схемы</a></li>
                    <li class="header_list_item"><a href="{{route('lab.index')}}" class="header_list_link">Лаборатория</a></li>
                    <li class="header_list_item"><a href="{{route('contacts.index')}}" class="header_list_link">Контакты</a></li>
                </ul>
            </nav>
            <div class="header_list">
                @guest
                <li class="header_list_item"><a href="{{ route('login') }}" class="header_list_link">Войти</a></li>
                @else
                <li class="header_list_item"><a href="{{ route('logout') }}" class="header_list_link"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">Выйти</a></li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                @endguest
            </div>
            <button class="header_menu"></button>
        </div>
    </header>
        @yield('content')

    <footer class="footer">
        <div class="footer_wrapper">
            <div class="footer_container">
                <div class="logo_wrapper">
                    <img src="../images/logo2.png" alt="logo" class="logo_img">
                </div>
                <div class="contacts">
                    <span class="contacts_text">Контакты</span>
                    <div class="phone">
                        <img src="../images/phone.svg" alt="" class="contacts_img">
                        <a href="#" class="contact_text">+ 7 (777) 777-77-77</a>
                    </div>
                    <div class="email">
                        <img src="../images/email.svg" alt="" class="contacts_img">
                        <a href="#" class="contact_text">qwerty@gmail.com</a>
                    </div>
                </div>
            </div>
            <div class="socials">
                <span class="socials_text">Соц. сети</span>
                <div class="icons_container">
                    <a href="#" class="icon_block">
                        <img src="../images/face.svg" alt="" class="icon_img">
                        <!-- <svg class="icon_img1" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <rect width="24" height="24" fill="url(#pattern0)"/>
                            <defs>
                            <pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
                            <use xlink:href="#image0_1_90" transform="scale(0.0104167)"/>
                            </pattern>
                            <image id="image0_1_90" width="96" height="96" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGAAAABgCAYAAADimHc4AAABN2lDQ1BBZG9iZSBSR0IgKDE5OTgpAAAokZWPv0rDUBSHvxtFxaFWCOLgcCdRUGzVwYxJW4ogWKtDkq1JQ5ViEm6uf/oQjm4dXNx9AidHwUHxCXwDxamDQ4QMBYvf9J3fORzOAaNi152GUYbzWKt205Gu58vZF2aYAoBOmKV2q3UAECdxxBjf7wiA10277jTG+38yH6ZKAyNguxtlIYgK0L/SqQYxBMygn2oQD4CpTto1EE9AqZf7G1AKcv8ASsr1fBBfgNlzPR+MOcAMcl8BTB1da4Bakg7UWe9Uy6plWdLuJkEkjweZjs4zuR+HiUoT1dFRF8jvA2AxH2w3HblWtay99X/+PRHX82Vun0cIQCw9F1lBeKEuf1UYO5PrYsdwGQ7vYXpUZLs3cLcBC7dFtlqF8hY8Dn8AwMZP/fNTP8gAAAAJcEhZcwAALEsAACxLAaU9lqkAAAUVaVRYdFhNTDpjb20uYWRvYmUueG1wAAAAAAA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA2LjAtYzAwMiA3OS4xNjQzNTIsIDIwMjAvMDEvMzAtMTU6NTA6MzggICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLyIgeG1sbnM6ZGM9Imh0dHA6Ly9wdXJsLm9yZy9kYy9lbGVtZW50cy8xLjEvIiB4bWxuczpwaG90b3Nob3A9Imh0dHA6Ly9ucy5hZG9iZS5jb20vcGhvdG9zaG9wLzEuMC8iIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdEV2dD0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlRXZlbnQjIiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCAyMS4xIChXaW5kb3dzKSIgeG1wOkNyZWF0ZURhdGU9IjIwMjEtMTItMTZUMTM6NDI6MzYrMDM6MDAiIHhtcDpNb2RpZnlEYXRlPSIyMDIxLTEyLTE2VDEzOjQ0OjAxKzAzOjAwIiB4bXA6TWV0YWRhdGFEYXRlPSIyMDIxLTEyLTE2VDEzOjQ0OjAxKzAzOjAwIiBkYzpmb3JtYXQ9ImltYWdlL3BuZyIgcGhvdG9zaG9wOkNvbG9yTW9kZT0iMyIgcGhvdG9zaG9wOklDQ1Byb2ZpbGU9IkFkb2JlIFJHQiAoMTk5OCkiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6Y2Y5NTc3NzEtZjQ5YS1lZTQyLTllMzctY2NhNzA0N2RmYjJkIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOmNmOTU3NzcxLWY0OWEtZWU0Mi05ZTM3LWNjYTcwNDdkZmIyZCIgeG1wTU06T3JpZ2luYWxEb2N1bWVudElEPSJ4bXAuZGlkOmNmOTU3NzcxLWY0OWEtZWU0Mi05ZTM3LWNjYTcwNDdkZmIyZCI+IDx4bXBNTTpIaXN0b3J5PiA8cmRmOlNlcT4gPHJkZjpsaSBzdEV2dDphY3Rpb249ImNyZWF0ZWQiIHN0RXZ0Omluc3RhbmNlSUQ9InhtcC5paWQ6Y2Y5NTc3NzEtZjQ5YS1lZTQyLTllMzctY2NhNzA0N2RmYjJkIiBzdEV2dDp3aGVuPSIyMDIxLTEyLTE2VDEzOjQyOjM2KzAzOjAwIiBzdEV2dDpzb2Z0d2FyZUFnZW50PSJBZG9iZSBQaG90b3Nob3AgMjEuMSAoV2luZG93cykiLz4gPC9yZGY6U2VxPiA8L3htcE1NOkhpc3Rvcnk+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+/t4qQQAAAttJREFUeJzt3T9rFEEAhvHnjIZcYaEg0fMfop0WggaxEGxtRPEbiLZ+AIMgaKmNtd9BbCxV7DSggvoFRFAQUYKi3Jk7i41YCLp3MzvvzOT9QUhzuzPck9vbHfYuvclkgulsUk9go3MAMQcQcwAxBxBzADEHEHMAsc3qCXRgARgAe4D9wDZgS4vt1oC3wD0g2dVpLQG2A+eBc8AxYJHZX903gWtxpvV/pQcYAFeBy8B8pH0ejbSfVkoN0AeuAMvA1sj7nou8v38qMcAAuAucUU8khtIC7AUeAQfVE4mlpNPQReAhFT35UFaAG8Ah9SRiKyXABZozneqUEGAOuK2eRFdKCHCR5oq2SiUEuKSeQJdyD3AcWFJPoku5BzgN9BKPmfQ2kdwDnBSM+TLlYLlfCZ+IsI9vwAtgBVgFRsBPYEyzBA3NX/0EeAc8iDBma72Mb8yaB74T9ir9QLNE/TTGhLqQ8yFoF+HzWybjJx/yDrAjwj6eRdhHp3IOsBC4/RD4FGMiXco5QOjp5xp/3mSzlXOAUOP1n6zVHOD3qWXWag+QvZoDFKHmAKnXkGZScwAoIELNAbJ/8iH9Ytxh4A7trnJD73Tr09xF0dYPmoW464HjTiX1Ytx94GzKAWdwBHiTarDUh6DdicebxSDlYKkDFHFcTqnmN+EiOICYA4g5gJgDiDmAmAOIOYCYA4g5wN+qvjf0Y+LxZrGacrDUy9G3gH3AzhaP7RN+b9DnKR47Ah4DzwPHnErO94aeAp4EbP8FOLD+O1t+DxBzADEHEHMAMQcQcwAxBxBzADEHEHMAMQcQcwAxBxBzADEHEHMAMQcQcwAxBxBzADEHEHMAMQcQcwAxBxBzADEHEHMAMQcQcwCxnAMMA7cf03xHdNZyDvAKeB+w/Wvga6S5dCbnD2hA8w85l2g+LTONIc13E42izyiy3ANUL+dD0IbgAGIOIOYAYg4g5gBiDiDmAGK/AHygVm6OobmyAAAAAElFTkSuQmCC"/>
                            </defs>
                        </svg> -->
                    </a>
                    <a href="#" class="icon_block">
                        <img src="./Images/youtube.svg" alt="" class="icon_img">
                    </a>
                    <a href="#" class="icon_block">
                        <img src="./Images/teleg.svg" alt="" class="icon_img">
                    </a>
                    <a href="#" class="icon_block">
                        <img src="./Images/inst.svg" alt="" class="icon_img">
                    </a>
                </div>
            </div>
            <div class="info">
                <!-- <span class="heading_info">Информация</span> -->
                <a href="#" class="info_link">Главная</a>
                <a href="#" class="info_link">Схемы</a>
                <a href="#" class="info_link">Лаборатория</a>
                <a href="#" class="info_link">Контакты</a>
                <!-- <a href="#" class="info_link">О компании</a> -->
            </div>
            <div class="line"></div>
            <div class="last_container">
                <!-- <a href="#" class="confidance">Политика конфиденциальности</a> -->
                <span class="design_by">designed by Rinat K.</span>
            </div>
        </div>
    </footer>
</body>
</html>