@extends('layouts.app')
@section('content')
    @include('layouts.menu')
    <style>
        body {
        background: url(/assets/bg.jpg) no-repeat bottom center;
    }
    </style>

    <!-- Header -->
    @include('layouts.video')
    <!-- Main -->
    <main class="main">
        <section class="rewards">
            <div class="container">
                <div class="title"><img class="img-fluid" src="/assets/title_rewards.png"></div>
                <div class="rewards_list">
                    <div class="rewards_icon r1">
                        <img class="img-fluid" src="/assets/rewards_icon01_hover.png">
                        <img class="img-fluid view" src="/assets/rewards_icon01.png">
                    </div>
                    <div class="rewards_icon r2">
                        <img class="img-fluid" src="/assets/rewards_icon02_hover.png">
                        <img class="img-fluid view" src="/assets/rewards_icon02.png">
                    </div>
                    <div class="rewards_icon r3">
                        <img class="img-fluid" src="/assets/rewards_icon03_hover.png">
                        <img class="img-fluid view" src="/assets/rewards_icon03.png">
                    </div>
                    <div class="rewards_icon r4">
                        <img class="img-fluid" src="/assets/rewards_icon04_hover.png">
                        <img class="img-fluid view" src="/assets/rewards_icon04.png">
                    </div>
                    <div class="rewards_icon r5">
                        <img class="img-fluid" src="/assets/rewards_icon05_hover.png">
                        <img class="img-fluid view" src="/assets/rewards_icon05.png">
                    </div>
                    <div class="rewards_icon r6">
                        <img class="img-fluid" src="/assets/rewards_icon06_hover.png">
                        <img class="img-fluid view" src="/assets/rewards_icon06.png">
                    </div>
                    <div class="rewards_icon r7">
                        <img class="img-fluid" src="/assets/rewards_icon07_hover.png">
                        <img class="img-fluid view" src="/assets/rewards_icon07.png">
                    </div>
                </div>
            </div>
        </section>
        <section class="news">
            <div class="container">
                <div class="title"><img class="img-fluid" src="/assets/title_news.png"></div>
                <div class="news_contnet">
                    <div class="row no-gutters h-100">
                        <div class="col-lg-6">
                            <div id="ubanner_A" class="carousel slide carousel-fade" data-ride="carousel">
                                <div class="swiper bannerSwiper swiper-initialized swiper-horizontal swiper-pointer-events">
                                    <div class="swiper-wrapper" id="swiper-wrapper-d74b1f2c6ceeb595" aria-live="polite"
                                        style="transform: translate3d(0px, 0px, 0px);">
                                        <div class="swiper-slide swiper-slide-active" role="group" aria-label="1 / 1"
                                            style="width: 555px;">
                                            <a href="javascript:void(0);"><img
                                                    src="/assets/bf492c38cc924bebab6e97ceda21f95d.jpg"></a>
                                        </div>
                                    </div>
                                    <div class="swiper-button-prev swiper-button-disabled swiper-button-lock" tabindex="-1"
                                        role="button" aria-label="Previous slide"
                                        aria-controls="swiper-wrapper-d74b1f2c6ceeb595" aria-disabled="true">
                                    </div>
                                    <div class="swiper-button-next swiper-button-disabled swiper-button-lock" tabindex="-1"
                                        role="button" aria-label="Next slide"
                                        aria-controls="swiper-wrapper-d74b1f2c6ceeb595" aria-disabled="true"></div>
                                    <div
                                        class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal swiper-pagination-lock">
                                        <span class="swiper-pagination-bullet swiper-pagination-bullet-active"
                                            tabindex="0" role="button" aria-label="Go to slide 1"></span>
                                    </div>
                                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="news_list">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="system-more">
                                            <img class="img-fluid" src="/assets/news_list_top.png">
                                            <span class="news_title"></span>
                                            <a class="more" href="/tin-tuc">Xem Thêm</a>
                                        </div>
                                        <div id="news_list">
                                            <ul class="list-group list-group-flush">
                                                @foreach ($posts as $post)
                                                    <li class="system-single">
                                                        <a class="systemurl" href="/tin-tuc/{{ $post->slug }}">
                                                            <div class="row system-details">
                                                                <div class="col-lg-9 col-8 align-self-center"><span
                                                                        class="system-title">{{ $post->title }}</span>
                                                                </div>
                                                                <div class="col-lg-3 col-4 align-self-center"><span
                                                                        class="systemtime">{{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y') }}</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                        <div class="news_btn">
                                            <div class="row no-gutters">
                                                <div class="col-6 pr-1"><a href="https://www.facebook.com/"
                                                        target="_blank"><img class="img-fluid"
                                                            src="/assets/btn_facebook.png"></a></div>
                                                <div class="col-6 pl-1"><a href="https://discord.com/channels/"
                                                        target="_blank"><img class="img-fluid"
                                                            src="/assets/btn_discord.png"></a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    
    @include('layouts.event')

    @include('layouts.class')

    <!-- Features -->
    <section class="features">
        <div class="container">
            <div class="title"><img class="title" src="/assets/title_features.png"></div>
            <div class="app_store">
                <div class="reel"><img class="img-fluid" src="/assets/reel.png"></div>
                <div id="app_store" class="carousel slide carousel-fade" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#app_store" data-slide-to="0" class=""></li>
                        <li data-target="#app_store" data-slide-to="1" class=""></li>
                        <li data-target="#app_store" data-slide-to="2" class="active"></li>
                        <li data-target="#app_store" data-slide-to="3" class=""></li>
                        <li data-target="#app_store" data-slide-to="4" class=""></li>
                        <li data-target="#app_store" data-slide-to="5"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/assets/store_img01.jpg">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/assets/store_img02.jpg">
                        </div>
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="/assets/store_img03.jpg">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/assets/store_img04.jpg">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/assets/store_img05.jpg">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="/assets/store_img06.jpg">
                        </div>
                    </div>
                </div>
                <div id="video" class="carousel slide" style="display: none;">
                    <a href="https://youtu.be/RZbKMc8TejY" data-lity="">
                        <div class="video_img"><img class="d-block w-100" src="/assets/store_video.jpg"></div>
                        <div class="btn_video">
                            <img class="rotate" src="/assets/btn_video_frame.png">
                            <img src="/assets/btn_video.png">
                        </div>
                    </a>
                </div>
            </div>
            <div class="game_btn">
                <div class="row no-gutters">
                    <div class="col-6">
                        <div class="btn screen"><img class="img-fluid" src="/assets/btn_screen.png"></div>
                    </div>
                    <div class="col-6">
                        <div class="btn game_video"><img class="img-fluid" src="/assets/btn_game_video.png"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="role"><img class="img-fluid" src="/assets/role.png"></div>
        <div class="flower"><img class="img-fluid" src="/assets/flower.png"></div>
    </section>

    <!-- GameInfo -->
    @include('layouts.info')
    <!-- Popup -->
    @include('layouts.reward')
@endsection

@section('script')
    <script>
        function activeBtn(x) {
            x.setAttribute("src", "/assets/taigame-btn-active.png");
        }

        function normalBtn(x) {
            x.setAttribute("src", "/assets/taigame-btn.png");
        }
    </script>
@endsection
