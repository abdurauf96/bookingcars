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
        <div class="price">
          
        </div>
        <div class="info-car">
          <div class="yers"> <span> <i class="far fa-clock"></i></span>
            {{ $car->year }}</div>
          <div class="item"><span class="car-seat"></span>{{ $car->chair }} места</div>
          <div class="avtomant"><span class="car-settings"></span>
            {{ $car->status }}</div>
        </div>
         <div class="link"><a href="{{ route('view', ['id'=>$car->id, 'service_id'=>$service->id]) }}">Подробнее</a></div>
              </div>
      </div>
    </div>
    @endforeach