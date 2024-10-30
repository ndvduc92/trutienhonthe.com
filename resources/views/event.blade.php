@extends('layouts.app')
@section('content')
<section class="news_banner">
    <img class="img-fluid d-none d-lg-block" src="/assets/news_banner.jpg">
    <img class="img-fluid d-lg-none" src="/assets/news_banner_m.jpg">
</section>
<div class="eventx">
    @include('layouts.event')
    @include('layouts.info')
</div>
<style>
    body {
        background: url(/assets/bg.jpg) no-repeat bottom center;
    }
</style>
@endsection
