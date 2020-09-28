@extends('layouts.index')

@section('content')

<!-- section1 slider-->
<div class="container-fluid section1">
  <div class="container">
    <section class="double__bus">
      <!-- codes for slider-->
      <div class="double__bus--left">
        <div class="slider">
          @php $images=json_decode($car->image) @endphp
          @foreach($images as $image)
          <div class="slider__item"><img src="{{ Voyager::image($image) }}" alt="kuting"/></div>
          @endforeach
        </div>
      </div>

      <!-- --slider-->
      <!-- codes for chevrolet Impala-->
      <div class="double__bus--right">
        <div class="double__bus--right--logo"> 
          <div class="double__bus--right--logo_top">
            <p><span> @lang('lang.category'):  </span>{{ $car->category->getTranslatedAttribute('name', \App::getLocale(), 'en') }}</p>
            <br>
            <p ><span>@lang('lang.usluga'):  </span>@isset($service)
            {{ $service->getTranslatedAttribute('title', \App::getLocale(), 'en') }}
            @endisset</p>
          </div>
          <div class="double__bus--right--logo_bottom">
            <h3>{{ $car->getTranslatedAttribute('name', \App::getLocale(), 'en') }}</h3>
          </div>
        </div>
        <div class="double__bus--right--table">
          <div class="double__bus--right--table--top">
            
            
          </div>
          <div class="double__bus--right--table--content">
            <div class="double__bus--right--table--content--item">
              <div class="img"><img src="/img/wall-clock.png" alt="kuting"/></div>
              <div class="text">
                <p>@lang('lang.god'): <span>{{ $car->year }}</span></p>
              </div>
            </div>
            <div class="double__bus--right--table--content--item">
              <div class="img"><img src="/img/safety-seat.png" alt="kuting"/></div>
              <div class="text">
                <p>@lang('lang.mesta'):  <span>{{ $car->chair }}</span></p>
              </div>
            </div>
           
            <div class="double__bus--right--table--content--item">
              <div class="img"><img src="/img/thermometer.png" alt="kuting"/></div>
              <div class="text">
                <p>@lang('lang.cond'):  <span>@if($car->conditsaner) @lang('lang.yes') @else @lang('lang.no') @endif</span></p>
              </div>
            </div>
          </div>
        </div>
        <div class="double__bus--right--cost">
        
          @if($service->keyy=='cortage')
          <div class="double__bus--right--cost--text">
            <h3 class="sum">{{ $car->price_for_cortage }} <span>usd</span></h3>
            <p>@lang('lang.za_den')</p>
          </div>
          <div class="double__bus--right--cost--link">
            <a data-sum="{{ $car->price_for_cortage }}" class="double link-active dol " href="#">USD</a>
            <a data-sum="{{ $car->price_for_cortage }}" class="double rub" href="#">UZS</a>
          </div>
          @elseif($service->keyy=='transfer')
          <div class="double__bus--right--cost--text">
            <h3 class="sum">{{ $car->price_for_transfer }} <span>usd</span></h3>
            <p>@lang('lang.za_transfer')</p>
          </div>
          <div class="double__bus--right--cost--link">
            <a data-sum="{{ $car->price_for_transfer }}" class="double link-active dol " href="#">USD</a>
            <a data-sum="{{ $car->price_for_transfer }}" class="double rub" href="#">UZS</a>
          </div>
         
          @elseif($service->keyy=='rent')
           <div class="double__bus--right--cost--text">
            <h3 class="sum">{{ $car->price_for_rentcar }} <span>usd</span></h3>
            <p>@lang('lang.za_sutki')</p>
          </div>
          <div class="double__bus--right--cost--link">
            <a data-sum="{{ $car->price_for_rentcar }}" class="double link-active dol " href="#">USD</a>
            <a data-sum="{{ $car->price_for_rentcar }}" class="double rub" href="#">UZS</a>
          </div>
          @elseif($service->keyy=='gidcars')
           <div class="double__bus--right--cost--text">
            <h3 class="sum">{{ $car->price_for_gidcar }} <span>usd</span></h3>
            <p>@lang('lang.za_sutki')</p>
          </div>
          <div class="double__bus--right--cost--link">
            <a data-sum="{{ $car->price_for_gidcar }}" class="double link-active dol " href="#">USD</a>
            <a data-sum="{{ $car->price_for_gidcar }}" class="double rub" href="#">UZS</a>
          </div>
           @elseif($service->keyy=='direction')
            <p>@lang('lang.book_direction')</p>
          @else
          <p>@lang('lang.book')</p>
          @endif
        
        </div>
        @isset($service)
        <div class="double__bus--right--bron">
            <a href="" class="bronlink">
                @if($service->keyy=='direction') @lang('lang.pricelist') @else
            @lang('lang.oformit') @endif
            </a>
          @if($service->keyy=='rent')
          <a href="#" class="slidefull">@lang('lang.usloviya')</a>
          @endif
          <!-- -- double bus mersedes-->
        </div>
        @endisset
      </div>
    </section>
  </div>
</div>
<!-- the end section1 slider-->
<!-- section2 select-->
@isset($service)
<form id="form" action="{{ route('booking') }}" method="post">  
  {{ csrf_field() }}
    <input type="hidden" value="{{ $service->keyy }}" name="service">
    <input type="hidden" value="{{ $car->id }}" name="car_id">
      @if($service->keyy=="direction")
      @include('forms.direction')

      @elseif($service->keyy=="cortage")
      @include('forms.cortage')

      @elseif($service->keyy=="rent")
      @include('forms.rent')

      @elseif($service->keyy=="transfer")
      @include('forms.transfer')

      @elseif($service->keyy=="gidcars")
      @include('forms.gidcars')
      @endif

      <!-- personal danni-->
      <div class="container-fluid section4" id="open2" >
        <div class="container">
          <div class="personal_danni">
            <div class="personal_danni--text">
              <p>@lang('lang.danni')</p>
            </div>
            <div class="personal_danni--form">
                <div class="personal_danni--form--top"> 
                  <input class="form-control" required="required" name="name" type="text" placeholder="@lang('lang.imya') "/>
                  <input class="form-control" required="required" name="number" type="text" placeholder="@lang('lang.nomer')"/>
                </div>
                <div class="personal_danni--form--top">
                  
                  <input class="form-control" required="required" name="email" type="email" placeholder="E-mail "/>
                  <input class="form-control" required="required"  name="region" type="text" placeholder="@lang('lang.gorod') "/>
                </div>
               
            </div>

            <div class="personal_danni--link">
              <input type="submit" value="@lang('lang.finish')">
            </div>
          </div>
        </div>
      </div>
      <!-- ---personal danni
      -->
    </form>
    <!-- footer-->
     @include('partials.podxod')


    <!-- full read-->
    <div class="container-fluid full__read">
      <div class="container">
        <div class="exit__read"><a href="#">&times;</a></div>
        <div class="full__read--text"> 
          <p>@lang('lang.rent_text')</p>
        </div>
      </div>
    </div>
    <!-- full read the end-->
  @endisset  
<!-- the end section3-->

@endsection