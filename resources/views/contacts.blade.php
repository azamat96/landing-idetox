@extends('app')

@section('title', 'Контакты')

@section('content')

<div class="sec-too-llc sec-contacts-new">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-custom">
                <li class="breadcrumb-item breadcrumb-first-item"><a href="/">Главная</a></li>
                <li class="breadcrumb-item active" aria-current="page">Контакты</li>
            </ol>
        </nav>

        <h2 class="section-header">Наши контакты а также соц сети</h2>
        <div class="d-flex justify-content-center">
            <div class="c-big-div">
                <img src="/src/images/c-call.png">
                <p class="c-big-text">+7 707 180 63 86</p>
            </div>
            <div class="c-big-div">
                <img src="/src/images/c-msg.png">
                <p class="c-big-text">idetox-shop@gmail.com</p>
            </div>
        </div>
        <div class="d-flex justify-content-center c-social-icons">
            <div class="social-div">
                <a href="#"><img src="/src/images/yt.png" alt=""></a>
                <a href="#"><img src="/src/images/fb.png" alt=""></a>
                <a href="#"><img src="/src/images/vk.png" alt=""></a>
                <a href="#"><img src="/src/images/insta.png" alt=""></a>
            </div>
        </div>
    </div>
</div>

@endsection