 <!-- codes for helicopter header-->
    <div class="container-fluid heli" id="helicopter">
      <div class="container">
        <div class="avtoPark__inner-head">
                <div class="logo">@lang('lang.nashi_korteji')</div>
                <!-- <div class="text">@lang('lang.subavtopark')</div> -->
          </div>
        <div class="helicopter">
          @foreach($sliders as $slider)
          <div class="helicopter--item">
            <a href="{{ route('cortages') }}">
            <div class="img">
              <img src="{{ Voyager::image($slider->image)}}" alt="kuting"/>
            </div>
            </a>
            <div class="text">
              <h3>{{ $slider->getTranslatedAttribute('title', \App::getLocale(), 'ru')}}</h3>
              {!! $slider->getTranslatedAttribute('description', \App::getLocale(), 'ru') !!}
            </div>
            <div class="link"> <a href="{{ route('cortages') }}">@lang('lang.pokazat')&rarr;</a></div>
          </div>
          @endforeach     
        </div>
      </div>
    </div>
    <!-- helicopter the end-->