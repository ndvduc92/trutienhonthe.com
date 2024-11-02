@extends('layouts.app')
@section('content')
    <!-- News_Banner -->
    <section class="news_banner">
        <img class="img-fluid d-none d-lg-block" src="/assets/news_banner.jpg">
        <img class="img-fluid d-lg-none" src="/assets/news_banner_m.jpg">
    </section>
    <!-- News_list  -->
    <section class="latestnews">
        <div class="main-content">
            <div class="static">
                <span class="icon-static">
                    <img src="/assets/icon-static.png?ver=1.89" alt="">
                </span>
                <h2>Tin tức</h2>
                <div class="breadcrumb--main">
                    <a href="/" title="Trang chủ">
                        <i class="icons-home"></i>
                        Trang chủ</a>
                    - <span>Tin tức</span>
                </div>
                <div class="boxsearch">
                    <form method="get" action="/tin-tuc" autocomplete="off">
                        <fieldset>
                            <label for="search"></label>
                            <input class="bgsearch" id="search" type="text" name="q" placeholder="Tìm kiếm"
                                required="">
                            <input class="btsearch" type="submit" name="search">
                        </fieldset>
                    </form>
                </div>
            </div>
            <ul class="news-list">
                @foreach ($posts as $post)
                    <li class="highlight">
                        <a class="news__thumb"
                            href="/tin-tuc/{{$post->slug}}">
                            <img width="88px"
                                src="/assets/icon.png"
                                alt="MỪNG RA MẮT CHÍNH THỨC - KHAI MỞ S463"></a>
                        <a class="news-title" href="/tin-tuc/{{$post->slug}}"
                            title="MỪNG RA MẮT CHÍNH THỨC - KHAI MỞ S463"><span>{{ $post->title }}</span>
                            <time class="news-time" datetime="{{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y') }}">{{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y') }}</time></a>
                        <a class="news-des" href="/tin-tuc/{{$post->slug}}"
                            title="Cùng chiến server nào các Tiên Hữu ơi!!!">{!! mb_substr($post->content,0, 100) !!}</a>
                    </li>
                @endforeach
            </ul>
            {{ $posts->links()}}
            

        </div>
    </section>

    @include('layouts.info')
    <style>
        .new-tintuc {
            border: 1px solid #007ac8;
            background: #007ac8;
        }

        .new-huongdan {
            border: 1px solid #28a745;
            background: #28a745;
        }

        .new-sukien {
            border: 1px solid #dc3545;
            background: #dc3545;
        }

        /*- news list -*/
        ul.news-list {
            margin: 0;
            font-size: 14px;
        }

        ul.news-list li {
            width: 100%;
            overflow: hidden;
            padding: 0 0 5px 0;
            margin: 0 0 5px 0;
            position: relative;
        }

        ul.news-list li:not(:last-child) {
            border-bottom: 1px solid #374a5c;
        }

        ul.news-list li.highlight .news-title {
            float: left;
            width: calc(100% - 105px);
            display: block;
            color: #dab979;
            font-family: "SF-Bold";
            font-size: 16px;
        }

        ul.news-list li.highlight .news-title:hover {
            color: #ac1b03;
        }

        ul.news-list li.highlight .news-title:hover .news-time {
            color: #ac1b03;
        }

        ul.news-list li.highlight .news-title .news-time {
            font-size: 14px;
            color: #dab979;
            padding-top: 2px;
        }

        ul.news-list li .news__thumb {
            float: left;
            margin: 2px 10px 0 1px;
            height: auto;
        }

        ul.news-list li .news-des {
            width: calc(100% - 105px);
            color: #9eabba;
            float: left;
            overflow: hidden;
            position: relative;
            line-height: 20px;
            max-height: 60px;
        }

        ul.news-list li .news-des:after {
            content: '';
            position: absolute;
            right: 0;
            width: 1em;
            height: 1em;
            margin-top: 0.2em;
            background: #1a2f41;
        }

        ul.news-list li .news-title {
            color: #9fabba;
            width: 100%;
        }

        ul.news-list li .news-title:hover,
        ul.news-list li .news-title:hover .news-time {
            color: #a18c5c;
        }

        ul.news-list li .news-title span {
            width: calc(100% - 90px);
            -o-text-overflow: ellipsis;
            text-overflow: ellipsis;
            overflow: hidden;
            display: block;
            white-space: nowrap;
        }

        ul.news-list li .news-time {
            color: #9fabba;
            position: absolute;
            right: 0;
            top: 0px;
            text-align: right;
        }

        .news-more {
            display: inline-block;
            color: #e3edf1;
            font-size: 15px;
            float: right;
            margin: 0px 0 0px 0;
            background: #696969;
            padding: 0 30px 0 10px;
            position: relative;
            line-height: 25px;
        }

        .news-more:after {
            position: absolute;
            top: -2px;
            right: 5px;
            content: '+';
            font-size: 30px;
            line-height: .8;
        }

        .news-more:hover {
            color: #ffcd56;
            background: #8a520b;
        }

        .nicescroll-rails {
            z-index: 10 !important;
        }

        .nicescroll-cursors {
            border: 1px transparent solid !important;
        }

        .main-content {
            width: 1176px;
            padding: 90px 100px 50px 80px;
            margin: 0 auto 50px;
            background: url(/assets/maincontent-top.jpg) no-repeat 0 0, url(/assets/maincontent-bottom.png) no-repeat 0 100%, url(/assets/maincontent-loop.png) repeat-y 0 89px;
            position: relative;
            z-index: 1;
        }

        .main-content .news-list li {
            padding: 0 0 10px 0;
            margin: 0 0 10px 0;
            border-bottom: dotted 1px #566879 !important;
        }

        .main-content .news-list .highlight .news-des {
            color: #9eabba;
            font-size: 16px;
        }

        .main-content .news-list .highlight .news-des:hover {
            color: #1682dc;
        }

        .main-content .news-list .highlight .news-title {
            color: #dab979;
            margin-bottom: 5px;
        }

        .main-content .news-list .highlight .news-title .news-time {
            color: #dab979;
        }

        .main-content .news-list .highlight .news-title:hover {
            color: #1682dc;
        }

        .main-content .news-list .highlight .news-title:hover .news-time {
            color: #1682dc;
        }

        .static {
            overflow: hidden;
            padding: 0;
            position: relative;
            margin: 0px 0px 50px;
            padding: 7px 0 0 0;
        }

        .static .icon-static {
            float: left;
            margin-right: 5px;
        }

        .static h2 {
            font-size: 16px;
            font-weight: bold;
            color: #9eabba;
            margin: 10px 0 2px 5px;
            text-transform: uppercase;
        }

        .breadcrumb--main {
            font-size: 14px;
            color: #9eabba;
        }

        .breadcrumb--main a {
            color: #9eabba;
            text-decoration: none;
        }

        .breadcrumb--main a:hover {
            color: #ffe594;
        }

        .relative {
            padding-top: 9px;
            text-align: center;
        }

        .relative-title a {
            display: block;
            position: relative;
            margin: 0 0 10px;
            padding: 10px;
            color: #fff;
            text-transform: uppercase;
            text-align: left;
            font-weight: bold;
            font-size: 18px;
            background: #3b6b95;
            background: -webkit-linear-gradient(legacy-direction(90deg), #3b6b95, #3b6b95);
            background: -webkit-gradient(linear, left top, right top, from(#3b6b95), to(#3b6b95));
            background: -webkit-linear-gradient(left, #3b6b95, #3b6b95);
            background: -o-linear-gradient(left, #3b6b95, #3b6b95);
            background: linear-gradient(90deg, #3b6b95, #3b6b95);
        }



        .relative-title a:hover {
            color: #bcd7e3;
        }

        .relative ul.relative-list {
            list-style: none;
            text-align: left;
            padding: 5px 0px 0;
            margin: 0 0 0 20px;
        }

        .relative ul.relative-list li {
            list-style: none;
            border-bottom: 1px solid #9eabba;
            padding: 12px 0 10px 5px;
            margin-left: 0px;
            position: relative;
            list-style: none;
        }

        .relative ul.relative-list li:last-child {
            border-bottom: none;
        }

        .relative ul.relative-list li a {
            display: -webkit-box;
            display: -webkit-flex;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
            -ms-flex-pack: justify;
            justify-content: space-between;
            color: #9eabba;
        }

        .relative ul.relative-list li a:hover {
            color: #dab979;
            text-decoration: none;
        }

        .relative ul.relative-list li a span {
            display: block;
            overflow: hidden;
            position: relative;
            line-height: 1.4em;
            max-height: 2.8em;
            padding-right: 20px;
        }

        .relative ul.relative-list li .date {
            display: block;
            color: #9eabba;
            text-transform: inherit;
            text-align: inherit;
            font-weight: normal;
            font-size: 14px;
            text-align: center;
            padding-left: 40px;
            line-height: 21px;
        }

        .boxsearch {
            position: absolute;
            top: 50%;
            right: 0px;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
            z-index: 2;
            background: #131c28;
            border: 1px solid #242538;
            -webkit-border-radius: 20px;
            border-radius: 20px;
            width: 180px;
        }

        .boxsearch .bgsearch {
            background: transparent;
            border: none;
            width: 90px;
            font-size: 14px;
            padding: 3px 9px;
            color: #9da3c0;
        }

        .boxsearch .btsearch {
            background: url(/assets/icon-search.png) no-repeat 0 0;
            width: 13px;
            height: 13px;
            display: block;
            position: absolute;
            top: 7px;
            right: 11px;
            border: none;
            text-indent: -9999px;
        }

        /* Paging */
        .paging {
            text-align: center;
            padding-bottom: 25px;
        }

        ul.page__list {
            padding: 20px 0 0 !important;
            text-align: center;
        }

        ul.page__list li {
            display: inline-block !important;
            padding: 0 2px !important;
            margin: 0 !important;
        }

        ul.page__list li a {
            color: #9eabba !important;
            text-decoration: none !important;
            font-size: 15px;
            border: 1px solid #9eabba;
            display: block;
            padding: 0 10px;
            line-height: 24px;
        }

        ul.page__list li a:hover {
            color: #1b3042 !important;
            background-color: #9eabba;
            border: 1px solid #9eabba;
        }

        ul.page__list li a.disable,
        ul.page__list li a:hover .disable {
            opacity: 0.6;
            cursor: default;
            background: none;
            border: 1px solid #636363;
            color: #636363 !important;
        }

        ul.page__list li.active a {
            color: #1b3042 !important;
            background-color: #9eabba;
            border: 1px solid #9eabba;
        }

        ul.page__list li.prev a,
        ul.page__list li.next a {
            display: inline-block;
            padding: 0 10px;
            vertical-align: middle;
            width: 26px;
            height: 26px;
            margin: -2px 0 0 0;
        }
    </style>
@endsection
