<section class="container">
    <h2 class="text-center">
        <img src="https://st1.cmn.vn/games/tien-chien/mainsite/images/bangxephang.png?ver=1.89" alt="">
    </h2>
    <div class="bxh">
        <a href="#">
            <img class="bxh-image" src="/assets/img-umbella-blue.png" style="animation: spin 10s linear infinite;"
                alt="">
        </a>
        <table class="bxh-table" style="background-color: transparent; font-size: 0.8125rem;">
            <thead>
                <tr>
                    <th>
                        <p><span style="font-size: 14px;">﻿</span><span style="font-size: 14px;">﻿</span><span
                                style="font-size: 14px;">﻿</span><span style="font-size: 14px;">﻿</span>Hạng</p>
                    </th>
                    <th>Tên Nhân Vật</th>
                    <th>Level</th>
                    <th>Môn Phái</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($chars as $item)
                <tr>
                    <td>
                        @if($loop->index < 3)
                        <img src="/assets/level-{{$loop->index+1}}.png?ver=1.86" alt="">
                        @else
                        {{$loop->index+1}}
                        @endif
                    </td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->level}}</td>
                    <td>{{$item->class_name}}<br></td>
                </tr>
                @endforeach

            </tbody>
        </table>
    </div>
</section>