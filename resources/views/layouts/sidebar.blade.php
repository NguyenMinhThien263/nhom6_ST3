<div id="sidebar">
    <div class="block" id="chart">
        <div class="blocktitle"><i class="icon top"></i>
            <div class="title">Phim xem nhiều</div>
        </div>
        <div class="tabs" data-target="#topview">
            <div id="topviewday" class="tab active">Phim lẻ</div>
            <div id="topviewweek" class="tab">Phim bộ</div>
            <div id="topviewmonth" class="tab">Phim chiếu rạp</div>
        </div>
        <div class="blockbody" id="topview">
            <ul class="tab topviewday">
                @foreach ($singleSidebar as $f)
                    <li><span class="st top">1</span>
                        <div class="detail">
                            <div class="name"><a
                                    href="?mod=detail&film_id={{$f->id}}"
                                    title="{{$f->name}}">{{$f->name}}</a></div>
                            <div class="views">Lượt xem {{$f->num_view}}
                            </div>
                        </div>
                    </li>
                @endforeach
            </ul>
            <ul class="tab topviewweek hide">
                @foreach ($seriesSidebar as $f)
                <li><span class="st top">1</span>
                    <div class="detail">
                        <div class="name"><a
                                href="?mod=detail&film_id={{$f->id}}"
                                title="{{$f->name}}">{{$f->name}}</a></div>
                        <div class="views">Lượt xem {{$f->num_view}}
                        </div>
                    </div>
                </li>
            @endforeach
            </ul>
            <ul class="tab topviewmonth hide">
                @foreach ($theaterSidebar as $f)
                <li><span class="st top">1</span>
                    <div class="detail">
                        <div class="name"><a
                                href="?mod=detail&film_id={{$f->id}}"
                                title="{{$f->name}}">{{$f->name}}</a></div>
                        <div class="views">Lượt xem {{$f->num_view}}
                        </div>
                    </div>
                </li>
            @endforeach
            </ul>
        </div>
        <script type="text/javascript">
            $('#topviewday').click(function() {
                $(this).addClass('active');
                $('#topviewweek').removeClass('active');
                $('#topviewmonth').removeClass('active');
                $('ul.topviewday').removeClass('hide');
                $('ul.topviewweek').addClass('hide');
                $('ul.topviewmonth').addClass('hide');
            })
            $('#topviewweek').click(function() {
                $(this).addClass('active');
                $('#topviewday').removeClass('active');
                $('#topviewmonth').removeClass('active');
                $('ul.topviewweek').removeClass('hide');
                $('ul.topviewday').addClass('hide');
                $('ul.topviewmonth').addClass('hide');
            })
            $('#topviewmonth').click(function() {
                $(this).addClass('active');
                $('#topviewweek').removeClass('active');
                $('#topviewday').removeClass('active');
                $('ul.topviewmonth').removeClass('hide');
                $('ul.topviewweek').addClass('hide');
                $('ul.topviewday').addClass('hide');
            })

        </script>
    </div>
    <div class="block ad_location">
        <div class="ad-img" style="width:300; height:250; display:block; margin-top:13px;">
            <img src="{{ URL('images/ad-img.png') }}" alt="">
        </div>
        <div class="ad-img" style="width:300; height:250; display:block; margin-top:13px;">
            <img src="{{ URL('images/ad-img.png') }}" alt="">
        </div>
    </div>
</div>
