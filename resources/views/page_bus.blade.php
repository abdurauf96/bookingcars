@extends('layouts.index')

@section('content')

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
            <p><span>@lang('lang.usluga'):  </span> {{ $service->getTranslatedAttribute('title', \App::getLocale(), 'en') }}</p>
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
                <p>@lang('lang.mesta'):  <span>{{ $car->chair }} @lang('lang.no')</span></p>
              </div>
            </div>
            <div class="double__bus--right--table--content--item">
              <div class="img"><img src="/img/safety-seat.png" alt="kuting"/></div>
              <div class="text">
                <p>@lang('lang.invalid'):  <span> @if($car->invalid) {{$car->invalid}} @lang('lang.mesta') @else @lang('lang.no') @endif </span></p>
              </div>
            </div>
            <div class="double__bus--right--table--content--item">
              <div class="img"><img src="/img/thermometer.png" alt="kuting"/></div>
              <div class="text">
                <p>@lang('lang.cond'):  <span>@if($car->conditsaner) @lang('lang.yes') @else @lang('lang.no') @endif</span></p>
              </div>
            </div>
            <div class="double__bus--right--table--content--item">
              <div class="img"><img src="/img/safety-seat.png" alt="kuting"/></div>
              <div class="text">
                <p>@lang('lang.monday')</p>
              </div>
            </div>
          </div>
        </div>
        <div class="double__bus--right--cost">
         <p>@lang('lang.mojete')</p>
        </div>
       
        <div class="double__bus--right--bron"><a href="#open1" class="bronlink">@lang('lang.oformit')</a>
          <!-- -- double bus mersedes-->
        </div>
       
      </div>
    </section>
  </div>
</div>

 @include('partials.bus')

<form action="{{ route('booking') }}" method="post">  
  {{ csrf_field() }}
    <input type="hidden" value="{{ $service->keyy }}" name="service">
    <input type="hidden" value="{{ $car->id }}" name="car_id">
      
      @include('forms.doublebus')
     
      <!-- personal danni-->
      <div class="container-fluid section4" id="open2" >
        <div class="container">
          <div class="personal_danni">
            <div class="personal_danni--text">
              <p>@lang('lang.danni')</p>
            </div>
            <div class="personal_danni--form">
                <div class="personal_danni--form--top"> 
                  <input class="form-control" required="required" name="name" type="text" placeholder="@lang('lang.imya')"/>
                  <input class="form-control" required="required" name="number" type="text" placeholder="@lang('lang.nomer')"/>
                </div>
                <div class="personal_danni--form--top">
                  
                  <input class="form-control" required="required" name="email" type="email" placeholder="E-mail"/>
                  <input class="form-control" required="required" name="region" type="text" placeholder="@lang('lang.gorod')"/>
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

@endsection