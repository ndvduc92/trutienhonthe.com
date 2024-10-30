@extends('layouts.app')
@section('content')
    <!-- News_Banner -->
    <section class="news_banner">
        <img class="img-fluid d-none d-lg-block" src="/assets/news_banner.jpg">
        <img class="img-fluid d-lg-none" src="/assets/news_banner_m.jpg">
    </section>
    <!-- News_list  -->
    <section class="latestnews">
        <div class="container">
            <div class="title">
                <img class="img-fluid" src="/assets/label-tintuc.png">
            </div>
            @foreach ($posts as $post)
                <div class="latestnews-single">
                    <a href="/tin-tuc/{{ $post->slug }}" class="latestnews-titleurl">
                        <div class="row">
                            <div class="col-10 col-lg-11 align-self-center">
                                <h3 class="latestnews-title">
                                    <span
                                        class="newsdetails-badge {{ \App\Models\Post::COLORES[$post->category] }}">{{ \App\Models\Post::CATEGORIES[$post->category] }}</span>
                                    <span class="tt">{{ $post->title }}</span>
                                </h3>
                                <div class="latestnews-details">
                                    <span
                                        class="newstime">{{ \Carbon\Carbon::parse($post->created_at)->format('d/m/Y H:i:s') }}</span>
                                </div>
                            </div>
                            <div class="col-2 col-lg-1 align-self-center">
                                <div class="morebtn"><i class="fa"></i></div>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
            <!-- pagination -->
            <div class="pagination justify-content-center">
            </div>

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
    </style>
@endsection
