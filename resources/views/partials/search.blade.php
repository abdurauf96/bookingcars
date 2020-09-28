<!-- section3-->
    <section class="avtoPark" id="autopark">
      <div class="wrapper">
        <div class="avtoPark__inner">
          <div class="avtoPark__inner-head">
                <div class="logo">@lang('lang.avtopark')</div>
                <div class="text">@lang('lang.subavtopark')</div>
          </div>  
          @if(count($cars)>0)
          <div class="avtoPark__inner-body" id="avtopark">
            @foreach($cars as $car)
            <div class="car-menu">
              <div class="car-menu-img">
                @php $images=json_decode($car->image) @endphp
                <div class="img-wrapper">
                  @foreach($images as $image)
                    @if($loop->first)
                    <img src="{{ Voyager::image($image) }}" alt="car"/>
                    @endif
                  @endforeach
                </div>
              </div>
              <div class="car-menu-info">
                <div class="name">{{ $car->getTranslatedAttribute('name', \App::getLocale(), 'en') }}</div>
                <!-- <div class="price">
                  <div class="left">
                    <p class="sum">{{ $car->price }}<span>USD</span></p>
                    <p class="day">Цена за 1 сутки</p>
                  </div>
                  <div class="right js-car-right">
                    <a data-sum="{{ $car->price }}" class="car-link js-car-link-active dol" href="#">usd</a>
                    <a data-sum="{{ $car->price }}" class="car-link rub" href="#">rub</a>
                  </div>
                </div> -->
                <div class="info-car">
                  <div class="yers"> <span> <i class="far fa-clock"></i></span>
                    {{ $car->year }}</div>
                  <div class="item"><span class="car-seat"></span>{{ $car->chair }} места</div>
                  <div class="avtomant"><span class="car-settings"></span>
                    {{ $car->status }}</div>
                </div>
                <div class="link"><a href="{{ route('view', ['id'=>$car->id, 'service_id'=>$service->id]) }}">@lang('lang.batafsil')</a></div>
              </div>
            </div>
            @endforeach
          </div>
          @else
         <div class="alert alert-danger col-md-8 col-xs-12">  
           <p>не найдено</p>
         </div>
          @endif
          
        </div>
      </div>
    </section>
    <!-- end section3-->