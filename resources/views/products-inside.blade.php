@extends('app')

@section('title', 'Товары - Внутри')

@section('content')

<div class="sec-magazine-inside">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom breadcrumb-custom-green">
                <li class="breadcrumb-item breadcrumb-first-item"><a href="/">Главная</a></li>
                <li class="breadcrumb-item"><a href="/">Товары и услуги</a></li>
                <li class="breadcrumb-item active" aria-current="page">Для кишечника</li>
            </ol>
        </nav>
        <div class="magazin-block d-flex flex-column flex-lg-row">
            <div class="magazin-image">
                <img class="magazin-img" src="/src/images/p1.png">
                <p class="text-center magazin-image-zoom-text">Чтобы увеличить, нажмите на картинку</p>
                <div class="d-flex justify-content-center">
                    <div class="product-img">
                        <img class="active" src="/src/images/p1.png">
                    </div>
                    <div class="product-img">
                        <img src="/src/images/p1.png">
                    </div>
                </div>
            </div>
            <div class="magazin-desc d-flex flex-column justify-content-between">
                <div>
                    <h1 class="magazin-title">Giovanni, Детокс-система, средство для лица, 7 унций</h1>
                    <div class="price-block d-flex flex-column flex-md-row">
                        <div class="mr-md-5 pr-md-3">
                            <p class="price-label">Цена</p>
                            <p class="price">40 000 ₸</p>
                        </div>
                        <div>
                            <p class="price-label mt-4 pt-3 pt-md-0 mt-md-0">Количество</p>
                            <div class="plus-minus d-flex justify-content-between align-items-center">
                                <button class="plus-minus-btn">-</button>
                                <p class="tovar-sani">7</p>
                                <button class="plus-minus-btn plus-btn">+</button>
                            </div>
                        </div>
                    </div>
                    <p class="tover-pod-title"><b>Описание:</b> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>

                <div class="tovar-btn-block">
                    <button class="green-btn-outline vernut-nazad-btn">Вернуться назад</button>
                    <button class="green-btn-outline zakazat-btn">Заказать</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="sec-recommendation">
    <div class="container">
        <div class="tovari-block">
            <div class="tovari-header">
                <h4 class="tovari-header-title">Рекомендации</h4>
            </div>
            <div class="tovari-body">
                <div class="tovar">
                    <img src="/src/images/tovar1.png">
                    <p class="tovar-title">Giovanni, Детокс-система, средство для лица, 7 унций</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="tovar-price">8 700 KZT</p>
                        <button class="tovar-korzina"></button>
                    </div>
                </div>
                <div class="tovar">
                    <img src="/src/images/tovar2.png">
                    <p class="tovar-title">Giovanni, Детокс-система, средство для лица, 7 унций</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="tovar-price">8 700 KZT</p>
                        <button class="tovar-korzina"></button>
                    </div>
                </div>
                <div class="tovar">
                    <img src="/src/images/tovar3.png">
                    <p class="tovar-title">Giovanni, Детокс-система, средство для лица, 7 унций</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="tovar-price">8 700 KZT</p>
                        <button class="tovar-korzina"></button>
                    </div>
                </div>
                <div class="tovar">
                    <img src="/src/images/tovar4.png">
                    <p class="tovar-title">Giovanni, Детокс-система, средство для лица, 7 унций</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="tovar-price">8 700 KZT</p>
                        <button class="tovar-korzina"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection