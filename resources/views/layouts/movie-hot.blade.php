<div id="movie-hot" class="viewport">
    <div class="prev"></div>
    <ul class="listfilm overview owl-carousel owl-theme">
    @foreach ($hots as $hot)
        <li class="item"><a href="{{ URL('phim/'.$hot->id) }}" title="{{ $hot->name }}" class="movie-hot-link" style="background-image: url({{ URL($hot->image) }});">Thời Đại Cam Hồng</a>
          <div class="overlay">
            <div class="name"><a href="{{ URL('phim/'.$hot->id) }}" title="{{ $hot->name }}">{{ $hot->name }}</a></div>
            <div class="name2">{{ $hot->name2 }}</div>
          </div>
          <div class="status">{{ $hot->status }}</div>
        </li>
    @endforeach
    </ul>
    <div class="next"></div>
  </div>
  <script type="text/javascript">
    $('.overview').owlCarousel({
        items:4,
        loop:true,
        autoPlay: true,
        nav: true,
        dots: false,
        slideSpeed : 3000,
        navContainer:  $(this).prev('.owl-nav-wrap').find('.owl-nav-container'),
      });
      $( ".owl-prev").html('<div class="prev"></div>');
      $( ".owl-next").html('<div class="next"></div>');
  </script>
