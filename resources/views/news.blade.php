@extends('app')

@section('title', 'Товары - Внутри')

@section('content')

<div class="sec-news">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom breadcrumb-custom-green">
                <li class="breadcrumb-item breadcrumb-first-item"><a href="/">Главная</a></li>
                <li class="breadcrumb-item active" aria-current="page">Новости</li>
            </ol>
        </nav>
        <div class="row">
            <div class="col-lg-4">
                <div class="news-block">
                    <img src="/src/images/news-img.png" alt="">
                    <div class="news-content d-flex flex-column justify-content-between">
                        <p class="new-title">Ученые рассказали о способном сжигать жир и снижать давление продукте</p>
                        <a href="#">
                            <button class="new-read-btn">Читать новость</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="news-block">
                    <img src="/src/images/news-img.png" alt="">
                    <div class="news-content d-flex flex-column justify-content-between">
                        <p class="new-title">Ученые  давление продукте</p>
                        <a href="#">
                            <button class="new-read-btn">Читать новость</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="news-block">
                    <img src="/src/images/news-img.png" alt="">
                    <div class="news-content d-flex flex-column justify-content-between">
                        <p class="new-title">Ученые  давление продукте</p>
                        <a href="#">
                            <button class="new-read-btn">Читать новость</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="news-block">
                    <img src="/src/images/news-img.png" alt="">
                    <div class="news-content d-flex flex-column justify-content-between">
                        <p class="new-title">Назван лучший природный детокс</p>
                        <a href="#">
                            <button class="new-read-btn">Читать новость</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="news-block">
                    <img src="/src/images/news-img.png" alt="">
                    <div class="news-content d-flex flex-column justify-content-between">
                        <p class="new-title">Ученые  давление продукте</p>
                        <a href="#">
                            <button class="new-read-btn">Читать новость</button>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="news-block">
                    <img src="/src/images/news-img.png" alt="">
                    <div class="news-content d-flex flex-column justify-content-between">
                        <p class="new-title">Эмоциональный детокс: как избавиться от негативных чувств</p>
                        <a href="#">
                            <button class="new-read-btn">Читать новость</button>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection