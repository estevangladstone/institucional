@if(count($slides) > 0)
  <div id="carousel-container" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      @foreach($slides as $key => $slide)
        <li data-target="#carousel-container" data-slide-to="{{ $key }}"
            {{ $slides->first() === $slide ? 'class=active' : ''}}></li>
      @endforeach
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      @foreach($slides as $slide)
        <div class="item {{ $slides->first() === $slide ? 'active' : ''}}">
          <img src="{{asset('images/slideshow/'.$slide->file_name)}}">
          <div class="carousel-caption">
            {{$slide->description}}
          </div>
        </div>
      @endforeach
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-container" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-container" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
@endif