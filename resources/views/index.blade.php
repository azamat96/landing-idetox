@extends('app')

@section('title', 'Главная')

@section('content')

<div class="sec-index-slider">
    <div class="container">
        <div class="index-slider-block">
            <!-- Slider main container -->
            <div class="swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <div class="naukan-img">
                            <img src="/src/images/slide1.png" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="naukan-img">
                            <img src="/src/images/slide1.png" alt="">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="naukan-img">
                            <img src="/src/images/slide1.png" alt="">
                        </div>
                    </div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="tovari-block mb-40">
        <div class="tovari-header">
            <h4 class="tovari-header-title">Новинки</h4>
            <a href="/products" class="d-flex"><button class="tovari-header-link"></button></a>
        </div>
        <div class="tovari-body">
{{--            <div class="row">--}}
{{--                <div class="col-lg-3">--}}
                    <div class="tovar">
                        <img src="/src/images/tovar1.png">
                        <p class="tovar-title">Giovanni, Детокс-система, средство для лица, 7 унций</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="tovar-price">8 700 KZT</p>
                            <button class="tovar-korzina"></button>
                        </div>
                    </div>
{{--                </div>--}}
{{--                <div class="col-lg-3">--}}
                    <div class="tovar">
                        <img src="/src/images/tovar2.png">
                        <p class="tovar-title">Giovanni, Детокс-система, средство для лица, 7 унций</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="tovar-price">8 700 KZT</p>
                            <button class="tovar-korzina"></button>
                        </div>
                    </div>
{{--                </div>--}}
{{--                <div class="col-lg-3">--}}
                    <div class="tovar">
                        <img src="/src/images/tovar3.png">
                        <p class="tovar-title">Giovanni, Детокс-система, средство для лица, 7 унций</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="tovar-price">8 700 KZT</p>
                            <button class="tovar-korzina"></button>
                        </div>
                    </div>
{{--                </div>--}}
{{--                <div class="col-lg-3">--}}
                    <div class="tovar">
                        <img src="/src/images/tovar4.png">
                        <p class="tovar-title">Giovanni, Детокс-система, средство для лица, 7 унций</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="tovar-price">8 700 KZT</p>
                            <button class="tovar-korzina"></button>
                        </div>
                    </div>
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
    <div class="tovari-block">
        <div class="tovari-header">
            <h4 class="tovari-header-title">Акции</h4>
            <a href="/products" class="d-flex"><button class="tovari-header-link"></button></a>
        </div>
        <div class="tovari-body">
            {{--            <div class="row">--}}
            {{--                <div class="col-lg-3">--}}
            <div class="tovar">
                <img src="/src/images/tovar1.png">
                <p class="tovar-title">Giovanni, Детокс-система, средство для лица, 7 унций</p>
                <div class="d-flex justify-content-between align-items-center">
                    <p class="tovar-price">8 700 KZT</p>
                    <button class="tovar-korzina"></button>
                </div>
            </div>
            {{--                </div>--}}
            {{--                <div class="col-lg-3">--}}
            <div class="tovar">
                <img src="/src/images/tovar2.png">
                <p class="tovar-title">Giovanni, Детокс-система, средство для лица, 7 унций</p>
                <div class="d-flex justify-content-between align-items-center">
                    <p class="tovar-price">8 700 KZT</p>
                    <button class="tovar-korzina"></button>
                </div>
            </div>
            {{--                </div>--}}
            {{--                <div class="col-lg-3">--}}
            <div class="tovar">
                <img src="/src/images/tovar3.png">
                <p class="tovar-title">Giovanni, Детокс-система, средство для лица, 7 унций</p>
                <div class="d-flex justify-content-between align-items-center">
                    <p class="tovar-price">8 700 KZT</p>
                    <button class="tovar-korzina"></button>
                </div>
            </div>
            {{--                </div>--}}
            {{--                <div class="col-lg-3">--}}
            <div class="tovar">
                <img src="/src/images/tovar4.png">
                <p class="tovar-title">Giovanni, Детокс-система, средство для лица, 7 унций</p>
                <div class="d-flex justify-content-between align-items-center">
                    <p class="tovar-price">8 700 KZT</p>
                    <button class="tovar-korzina"></button>
                </div>
            </div>
            {{--                </div>--}}
            {{--            </div>--}}
        </div>
    </div>
</div>

<div class="sec-priviliges">
    <div class="container">
        <div class="priviliges-block d-flex">
            <div class="privilige text-center">
                <img src="/src/images/p-frame.png">
                <p>Огромный оссартимент товаров и услуг</p>
            </div>
            <div class="privilige text-center">
                <img src="/src/images/p-car.png">
                <p>Удобная доставка</p>
            </div>
            <div class="privilige text-center">
                <img src="/src/images/p-shield.png">
                <p>Качественное гарантийное обслуживание</p>
            </div>
            <div class="privilige text-center">
                <img src="/src/images/p-coin.png">
                <p>Оплата любыми способами</p>
            </div>
        </div>
    </div>
</div>

<script>
    var mySwiperInfo = new Swiper ('.index-slider-block .swiper-container', {
        loop: false,
        // slidesPerView: 1,
        // initialSlide: 1,
        // centeredSlides: true,
        spaceBetween: 0,
        keyboard: {
            enabled: false,
            onlyInViewport: false,
        },
        // grabCursor: true,

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        pagination: {
            el: '.swiper-pagination',
        },
        breakpoints: {
            // 575: {
            // slidesPerView: 3
            // },
            // 320: {
            // slidesPerView: 2
            // },
        }
    })
</script>

@endsection