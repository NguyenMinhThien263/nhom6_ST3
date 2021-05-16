@extends('index')
@section('content')
    <div id="content">
        <div class="block" id="movie-recommend">
            <div class="col">
                <div class="blocktitle">
                    <div class="tabs" data-target="#phim-bo-hay">
                        <div class="tab active" data-name="phim-bo-moi">Top Phim Lẻ</div>
                        <div class="tab" data-name="phim-bo-full">Top Phim Bộ</div>
                    </div>
                </div>
                <div class="blockbody" id="phim-bo-hay">
                    <ul class="list tab phim-bo-moi">
                        @foreach ($fsingles as $f)
                            <li><a href="?mod=detail&film_id={{ $f->id }}"
                                    title="{{ $f->name }}">{{ $f->name }}</a><span>{{ $f->status }}</span></li>
                        @endforeach

                    </ul>
                    <ul class="list tab phim-bo-full hide">
                        @foreach ($fseries as $f)
                            <li><a href="?mod=detail&film_id={{ $f->id }}"
                                    title="{{ $f->name }}">{{ $f->name }}</a><span>{{ $f->status }}</span></li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <script type="text/javascript">
                $('div[data-name="phim-bo-moi"]').click(function() {
                    $('div[data-name="phim-bo-moi"]').addClass('active');
                    $('div[data-name="phim-bo-full"]').removeClass('active');
                    $('ul.phim-bo-moi').removeClass('hide');
                    $('ul.phim-bo-full').addClass('hide');
                })
                $('div[data-name="phim-bo-full"]').click(function() {
                    $('div[data-name="phim-bo-full"]').addClass('active');
                    $('div[data-name="phim-bo-moi"]').removeClass('active');
                    $('ul.phim-bo-full').removeClass('hide');
                    $('ul.phim-bo-moi').addClass('hide');
                })

            </script>
        </div>
        <div class="block" id="movie-update">
            <div class="blocktitle">
                <div class="icon movie1"></div>
                <h3 class="title">Phim mới cập nhật</h3>
                <div class="types" data-target="#list-movie-update">
                    <div class="type"><a data-name="toan-bo" class="btn active">Toàn bộ</a></div>
                    <div class="type"><a data-name="phim-le" class="btn" href="javascript:void();" title="Phim lẻ">Phim
                            lẻ</a></div>
                    <div class="type"><a data-name="phim-bo" class="btn" href="javascript:void();" title="Phim bộ">Phim
                            bộ</a></div>
                </div>
            </div>
            <div class="blockbody" id="list-movie-update">
                <div class="tab toan-bo ">
                    <ul class="list-film">

                        @foreach ($contAll as $f)
                            <li data-liked="852" data-views="49,875">
                                <div class="inner"><a href="?mod=detail&film_id={{ $f->id }}"
                                        title="{{ $f->name }}"><img src="{{ $f->image }}"
                                            alt="Nhật Ký Trả Thù 2"></a>
                                    <div class="info">
                                        <div class="name"><a href="?mod=detail&film_id={{ $f->id }}"
                                                title="{{ $f->name }}">{{ $f->name }}</a></div>
                                        <div class="name2">{{ $f->name2 }}</div>
                                    </div>
                                    <div class="status">{{ $f->stautus }}</div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="tab phim-le hide">
                    <ul class="list-film tab phim-le">
                        @foreach ($contSingle as $f)
                            <li data-liked="852" data-views="49,875">
                                <div class="inner"><a href="?mod=detail&film_id={{ $f->id }}"
                                        title="{{ $f->name }}"><img src="{{ $f->image }}"
                                            alt="Nhật Ký Trả Thù 2"></a>
                                    <div class="info">
                                        <div class="name"><a href="?mod=detail&film_id={{ $f->id }}"
                                                title="{{ $f->name }}">{{ $f->name }}</a></div>
                                        <div class="name2">{{ $f->name2 }}</div>
                                    </div>
                                    <div class="status">{{ $f->stautus }}</div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="tab phim-bo hide">
                    <ul class="list-film">
                        @foreach ($contSeries as $f)
                            <li data-liked="852" data-views="49,875">
                                <div class="inner"><a href="?mod=detail&film_id={{ $f->id }}"
                                        title="{{ $f->name }}"><img src="{{ $f->image }}"
                                            alt="Nhật Ký Trả Thù 2"></a>
                                    <div class="info">
                                        <div class="name"><a href="?mod=detail&film_id={{ $f->id }}"
                                                title="{{ $f->name }}">{{ $f->name }}</a></div>
                                        <div class="name2">{{ $f->name2 }}</div>
                                    </div>
                                    <div class="status">{{ $f->stautus }}</div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <script type="text/javascript">
                $('a[data-name="toan-bo"]').click(function() {
                    $('a[data-name="toan-bo"]').addClass('active');
                    $('a[data-name="phim-le"]').removeClass('active');
                    $('a[data-name="phim-bo"]').removeClass('active');
                    $('div.toan-bo').removeClass('hide');
                    $('div.phim-le').addClass('hide');
                    $('div.phim-bo').addClass('hide');
                    $('div.toan-bo > ul.list-film').addClass('tab', 'toan-bo');
                    $('div.phim-le > ul.list-film').removeClass('tab', 'phim-le');
                    $('div.phim-bo > ul.list-film').removeClass('tab', 'phim-bo');
                });
                $('a[data-name="phim-le"]').click(function() {
                    $('a[data-name="phim-le"]').addClass('active');
                    $('a[data-name="toan-bo"]').removeClass('active');
                    $('a[data-name="phim-bo"]').removeClass('active');
                    $('div.phim-le').removeClass('hide');
                    $('div.toan-bo').addClass('hide');
                    $('div.phim-bo').addClass('hide');
                    $('div.phim-le > ul.list-film').addClass('tab', 'phim-le');
                    $('div.toan-bo > ul.list-film').removeClass('tab', 'toan-bo');
                    $('div.phim-bo > ul.list-film').removeClass('tab', 'phim-bo');
                });
                $('a[data-name="phim-bo"]').click(function() {
                    $('a[data-name="phim-bo"]').addClass('active');
                    $('a[data-name="phim-le"]').removeClass('active');
                    $('a[data-name="toan-bo"]').removeClass('active');
                    $('div.phim-bo').removeClass('hide');
                    $('div.toan-bo').addClass('hide');
                    $('div.phim-le').addClass('hide');
                    $('div.phim-bo > ul.list-film').addClass('tab', 'phim-bo');
                    $('div.toan-bo > ul.list-film').removeClass('tab', 'toan-bo');
                    $('div.phim-le > ul.list-film').removeClass('tab', 'phim-le');
                });

            </script>
        </div>
        <div class="block">
            <div class="blocktitle">
                <div class="icon movie1"></div>
                <h3 class="title"><a title="PHIM HÀNH ĐỘNG" href="javascript:void();">PHIM HÀNH ĐỘNG</a></h3>
                <div class="more"><a href="?mod=list&type=category&id=9">Xem thêm</a> »</div>
            </div>
            <div class="blockbody" id="list-movie-update">
                <div class="tab">
                    <ul class="list-film tab ">
                        @foreach ($cateTM as $f)
                            <li data-liked="852" data-views="49,875">
                                <div class="inner"><a href="?mod=detail&film_id={{ $f->id }}"
                                        title="{{ $f->name }}"><img src="{{ $f->image }}"
                                            alt="Nhật Ký Trả Thù 2"></a>
                                    <div class="info">
                                        <div class="name"><a href="?mod=detail&film_id={{ $f->id }}"
                                                title="{{ $f->name }}">{{ $f->name }}</a></div>
                                        <div class="name2">{{ $f->name2 }}</div>
                                    </div>
                                    <div class="status">{{ $f->stautus }}</div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
        <div class="block">
            <div class="blocktitle">
                <div class="icon movie1"></div>
                <h3 class="title"><a title="PHIM BỘ MỚI" href="javascript:void();">PHIM THUYẾT MINH</a></h3>
                <div class="more"><a href="?mod=list&type=category&id=1">Xem thêm</a> »</div>
            </div>
            <div class="blockbody" id="list-movie-update">
                <div class="tab">
                    <ul class="list-film tab">
                        @foreach ($cateAC as $f)
                            <li data-liked="852" data-views="49,875">
                                <div class="inner"><a href="?mod=detail&film_id={{ $f->id }}"
                                        title="{{ $f->name }}"><img src="{{ $f->image }}"
                                            alt="Nhật Ký Trả Thù 2"></a>
                                    <div class="info">
                                        <div class="name"><a href="?mod=detail&film_id={{ $f->id }}"
                                                title="{{ $f->name }}">{{ $f->name }}</a></div>
                                        <div class="name2">{{ $f->name2 }}</div>
                                    </div>
                                    <div class="status">{{ $f->stautus }}</div>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
