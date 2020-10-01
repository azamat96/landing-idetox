@extends('app')

@section('title', 'Товары и услуги')

@section('content')

<div class="sec-products">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom breadcrumb-custom-green">
                <li class="breadcrumb-item breadcrumb-first-item"><a href="/">Главная</a></li>
                <li class="breadcrumb-item"><a href="/products">Товары и услуги</a></li>
                <li class="breadcrumb-item active" aria-current="page">Для кишечника</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-start align-items-start flex-column flex-md-row">
            <div class="products-types">
                <div class="osobi-type">
                    <img src="/src/images/present.png" alt="">
                    <p>Новинки</p>
                </div>
                <div class="osobi-type">
                    <img src="/src/images/naukan.png" alt="">
                    <p>Акции</p>
                </div>
                <div class="products-types-list">
                    <ul>
                        <a href="#"><li class="active">Для кишечника</li></a>
                        <a href="#"><li>Для печени</li></a>
                        <a href="#"><li>Продукты без глютена</li></a>
                        <a href="#"><li>Аптечка для женщины</li></a>
                        <a href="#"><li>Аптечка для мужчины</li></a>
                        <a href="#"><li>Витамины и минералы</li></a>
                        <a href="#"><li>Аптечка для детей</li></a>
                        <a href="#"><li>Биологически-активные вещества</li></a>
                        <a href="#"><li>Ароматерапия-эфирные масла</li></a>
                        <a href="#"><li>Аптечка для детей</li></a>
                        <a href="#"><li>Биологически-активные вещества</li></a>
                        <a href="#"><li>Ароматерапия-эфирные масла</li></a>
                        <a href="#"><li>Уход за волосам</li></a>
                        <a href="#"><li>Уход за лицом</li></a>
                    </ul>
                </div>
            </div>
            <div class="products-self-block">
                <div class="all-products">
                    <div class="tovar">
                        <img src="/src/images/tovar1.png">
                        <p class="tovar-title">Giovanni, Детокс-система, средство для лица, 7 унций</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="tovar-price">8 700 KZT</p>
                            <button class="tovar-korzina"></button>
                        </div>
                    </div>
                    <div class="tovar">
                        <img src="/src/images/tovar1.png">
                        <p class="tovar-title">Giovanni, Детокс-система, средство для лица, 7 унций</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <p class="tovar-price">8 700 KZT</p>
                            <button class="tovar-korzina"></button>
                        </div>
                    </div>
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
                        <img src="/src/images/tovar2.png">
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
                        <img src="/src/images/tovar3.png">
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
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end mb-0">
                        <li class="page-item disabled">
                            <a class="page-link page-arrows" href="#" tabindex="-1">
                                <img src="/src/images/pagination-left.png" alt="">
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link active" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link page-arrows" href="#">
                                <img src="/src/images/pagination-next.png" alt="">
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

@endsection