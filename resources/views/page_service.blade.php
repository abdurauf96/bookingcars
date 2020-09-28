@extends('layouts.index')

@section('content')

 <!--  uslugi1-->
    <section class="transfer">
      <div class="wrapper">
        <div class="transfer__inner">
          <div class="transfer__inner-text">
            <div class="logo"> 
              <h1>{{ $service->getTranslatedAttribute('title', \App::getLocale(), 'en') }}</h1>
            </div>
            <div class="info">
              <p>{!! $service->getTranslatedAttribute('body', \App::getLocale(), 'en') !!} </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end  uslugi1-->

     <!-- section3-->
    <section class="avtoPark">
      <div class="wrapper">
        <div class="avtoPark__inner">
          <div class="avtoPark__inner-head">
                <div class="logo">@lang('lang.avtopark')</div>
                <div class="text">@lang('lang.subavtopark')</div>
          </div>
          <div class="avtoPark__inner-nav">
            <nav>
              <ul>
              	@foreach($service->categories as $category)
                  @if(count($category->cars)>0)
                  <li data-service_id="{{ $service->id }}" data-id="{{ $category->id }}" class="sortCatService"><a href="#">{{ $category->name }}</a>
                  </li>
                  @endif
                @endforeach
              </ul>
            </nav>
          </div>
          @if(isset($cars))
          <div class="avtoPark__inner-body" id="avtopark">
          	@foreach($cars as $car)
            <div class="car-menu">
              <div class="car-menu-img">
                <div class="img-wrapper">
                @isset($car->image)
                  @php $images=json_decode($car->image) @endphp
                  @foreach ($images as $image)
                  @if($loop->first)
                  <img src="{{ Voyager::image($image) }}" alt="car"/>
                  @endif
                  @endforeach
                @endisset
                </div>
              </div>
              <div class="car-menu-info">
                <div class="name">{{ $car->getTranslatedAttribute('name', \App::getLocale(), 'en') }}</div>
                <div class="price">
                @if( ($service->keyy=='cortage') ||($service->keyy=='gidcars') || ($service->keyy=='transfer') || ($service->keyy=='rent') )
                  @if($service->keyy=='cortage')
                  <div class="left"> 
                    <p class="sum">{{ $car->price_for_cortage }}<span>USD</span></p>
                    <p class="day">@lang('lang.za_den')</p>
                  </div>
                  <div class="right js-car-right">
                    <a data-sum="{{ $car->price_for_cortage }}" class="car-link js-car-link-active dol" href="#">USD</a>
                    <a data-sum="{{ $car->price_for_cortage }}" class="car-link rub" href="#">UZS</a>
                  </div>
                  @elseif($service->keyy=='transfer')
                  <div class="left"> 
                    <p class="sum">{{ $car->price_for_transfer }}<span>USD</span></p>
                    <p class="day"> @lang('lang.za_transfer')</p>
                  </div>
                  <div class="right js-car-right">
                    <a data-sum="{{ $car->price_for_transfer }}" class="car-link js-car-link-active dol" href="#">USD</a>
                    <a data-sum="{{ $car->price_for_transfer }}" class="car-link rub" href="#">UZS</a>
                  </div>
                  @elseif($service->keyy=='gidcars')
                  <div class="left"> 
                    <p class="sum">{{ $car->price_for_gidcar }}<span>USD</span></p>
                    <p class="day"> @lang('lang.za_sutki')</p>
                  </div>
                  <div class="right js-car-right">
                    <a data-sum="{{ $car->price_for_gidcar }}" class="car-link js-car-link-active dol" href="#">USD</a>
                    <a data-sum="{{ $car->price_for_gidcar }}" class="car-link rub" href="#">UZS</a>
                  </div>

                  @elseif($service->keyy=='rent')
                  <div class="left"> 
                    <p class="sum">{{ $car->price_for_rentcar }}<span>USD</span></p>
                    <p class="day">@lang('lang.za_sutki')</p>
                  </div>
                  <div class="right js-car-right">
                    <a data-sum="{{ $car->price_for_rentcar }}" class="car-link js-car-link-active dol" href="#">USD</a>
                    <a data-sum="{{ $car->price_for_rentcar }}" class="car-link rub" href="#">UZS</a>
                  </div>
                  @endif          
                  @else
                  <div class="left">
                    <h5>@lang('lang.mojete')</h5>
                  </div>
                  @endif
                </div>
                <div class="info-car">
                  <div class="yers"> <span> <i class="far fa-clock"></i></span>{{ $car->year }}</div>
                  <div class="item"><span class="car-seat"></span>{{ $car->chair }} @lang('lang.mesta')</div>
                  <div class="avtomant"><span class="car-settings"></span>@if($car->status==1) @lang('lang.automat') @else @lang('lang.mexanik') @endif </div>
                </div>
                <div class="link"><a href="{{ route('view', ['id'=>$car->id, 'service_id'=>$service->id]) }}">@lang('lang.batafsil')</a></div>
              </div>

            </div>
             @endforeach
            @endif
          
          </div> 
        </div>
      </div>
    </section>
    <!-- end section3-->

@endsection