@extends('layouts.app')
@section('content')
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
    </style>
    <section class="news_banner">
        <img class="img-fluid d-none d-lg-block" src="/assets/news_banner.jpg">
        <img class="img-fluid d-lg-none" src="/assets/news_banner_m.jpg">
    </section>
    <section class="newsdetails">
        <div class="container">

            <div class="title"><img class="img-fluid" src="/assets/tintuc-title.png">
            </div>

            <h3 class="newsdetails-title">
                <span
                    class="newsdetails-badge {{ \App\Models\Post::COLORES[$post->category] }}">{{ \App\Models\Post::CATEGORIES[$post->category] }}</span>
                <span class="newsdetails-titleurl" style="font-size: 36px">{{ $post->title }}</span>
            </h3>
            <span class="newstime">{{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y H:i:s') }}</span>
            <div class="newsdetails-contents">
                {!! $post->content !!}
            </div>
        </div>
    </section>
    @include('layouts.info')
@endsection
