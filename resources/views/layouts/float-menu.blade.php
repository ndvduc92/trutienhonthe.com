<div class="floating show-desktop">
    <a href="/tai-game" target="_blank">Tải Game</a>
    <a href="https://id.trutienhonthe.com/nap-tien" target="_blank">Nạp Tiền</a>
    <a href="https://id.trutienhonthe.com" target="_bank">Đăng Ký</a>
    <a href="/" target="_bank">Discord</a>
    <a href="" target="_bank">Fanpage</a>
    <a href="" target="_bank">Group</a>
    <a class="floating-top" href="#">
        <img src="/assets/floating-top.png" alt="">
    </a>
</div>

<style>
    .floating {
        width: 150px;
        height: 430px;
        position: fixed;
        top: 50%;
        right: 0;
        background: url(/assets/floating-bg.png) no-repeat;
        z-index: 10;
        -webkit-transform: translateY(-50%);
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
        padding: 102px 0 0 0
    }

    .floating a {
        font-family: robotoslab;
        color: #35353c;
        text-transform: uppercase;
        text-align: center;
        font-weight: 400;
        font-size: 13px;
        display: block;
        background: url(/assets/floating-line.png) no-repeat center bottom;
        padding: 0 0 0;
        margin: 0 0;
        line-height: 35px;
        height: 35px
    }

    .floating a:hover {
        color: #fffbee;
        background: url(/assets/floating-hover.png) no-repeat center center
    }

    .floating a.floating-top {
        margin-top: 10px;
        background: 0 0
    }

    .floating a.floating-top:hover {
        -webkit-transform: scale(1.2);
        -ms-transform: scale(1.2);
        transform: scale(1.2)
    }

    .floating .no-line {
        background-image: none
    }
</style>