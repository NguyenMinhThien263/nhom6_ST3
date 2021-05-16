@extends('index')
@section('content')
    <div id="content">
        <div class="block" id="page-info">
            <div class="blocktitle breadcrumbs">
                <div class="item">
                    <a href="?mod=home" title="Xem Phim Nhanh, Xem Phim Online chất lượng cao miễn phí">
                        <span>Xem phim</span>
                    </a>
                </div>
                <div class="item">
                    <a
                        href="?mod=list&type={{ $detail->typeMovies->handle }}&year=2018"><span>{{ $detail->typeMovies->name }}</span></a>
                </div>
                <div class="item last-child">
                    <span itemprop="title">{{ $detail->name }}</span>
                </div>
            </div>
            <div class="info">
                <h2 class="title fr">{{ $detail->name }}</h2>
                <div class="poster"><a href="#" title="Xem phim {{ $detail->name }}"><img src="{{ URL($detail->image) }}"
                            alt="{{ $detail->name }}"></a></div>
                <div class="name2 fr">
                    <h3>{{ $detail->name2 }}</h3><span class="year" style="font-size:12px"></span>
                </div>
                <div class="dinfo mb-2">
                    <div class="col1 fr">
                        <ul>
                            <li>Status: <span class="status1">{{ $detail->status }}</span></li>
                            <li>Đạo diễn: {{ $detail->director }}</li>
                            <li>Diễn viên: {{ $detail->actor }}</li>
                            <li>Thể loại: <a href="the-loai/phim-hanh-dong/" title="Phim Hành Động"> Phim Hành Động</a></li>
                        </ul>
                    </div>
                    <div class="col2">
                        <ul>
                            <li>Quốc gia: <a href="?mod=list&type=nation&id={{ $detail_nation->id }}"
                                    title="Phim {{ $detail_nation->name }}">{{ $detail_nation->name }}</a></li>
                            <li>Thời lượng: {{ $detail->duration }} Phút</li>
                            <li>Lượt xem: {{ $detail->num_view }}</li>
                            <li>Đăng bởi: {{ $detail->author }}</li>
                        </ul>
                    </div>
                </div>
                <div class="groups-btn mt-3">
                    <a href="?mod=watch&film_id={{ $detail->id }}&episode=1">
                        <div class="btn-watch fr"></div>
                    </a>
                </div>
            </div>
            <div class="detail">
                <div class="blocktitle tab">Thông tin phim</div>
                <div class="content">
                    <h4>Nội dung phim {{ $detail->name }}:</h4>
                    <p>{{ $detail->description }}</p>
                </div>
            </div>
        </div>
    </div>
@endsection
