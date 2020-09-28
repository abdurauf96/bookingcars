@extends('layouts.index')

@section('content')


<section class="container-fluid pred">
      <div class="container">
        <h3 class="pred__head">@lang('lang.shto')</h3>
      </div>
      <div class="container pred__wrapper">
        <div class="pred__wrapper--item">
          <h2 class="pred__wrapper--number">01.</h2>
          <p class="pred__wrapper--text">@lang('lang.adv1')</p>
        </div>
        <div class="pred__wrapper--item">
          <h2 class="pred__wrapper--number">02.</h2>
          <p class="pred__wrapper--text">@lang('lang.adv2')</p>
        </div>
        <div class="pred__wrapper--item">
          <h2 class="pred__wrapper--number">03.</h2>
          <p class="pred__wrapper--text">@lang('lang.adv3')</p>
        </div>
        <div class="pred__wrapper--item">
          <h2 class="pred__wrapper--number">04.</h2>
          <p class="pred__wrapper--text">@lang('lang.adv4')</p>
        </div>
        <div class="pred__wrapper--item">
          <h2 class="pred__wrapper--number">05.</h2>
          <p class="pred__wrapper--text">@lang('lang.adv5')</p>
        </div>
        <div class="pred__wrapper--item">
          <h2 class="pred__wrapper--number">06.</h2>
          <p class="pred__wrapper--text">@lang('lang.adv6')</p>
        </div>
        <div class="pred__wrapper--posled">
          <p class="posled--text">@lang('lang.shto2')</p>
        </div>
      </div>
    </section>
<section class="offers" id="services">
  <div class="wrapper">
    <div class="offers__inner">
      <div class="offers__inner-head">
        <div class="logo">
              <div class="logo">@lang('lang.taklif')</div>
              <div class="text"></div>
        </div>
        <div class="text">
          <p>@lang('lang.subtaklif')</p>
        </div>
      </div>
      @if(isset($services))
      <div class="offers__inner-body">
  <div class="info">
  @foreach($services as $service)
   
    <div class="info-link">
      <div class="img-wrapper"><img width="100%" src="{{ Voyager::image($service->image) }}" alt="images"/></div>
      <div class="info-link-block">
        <p>{{ $service->getTranslatedAttribute('title', \App::getLocale(), 'en') }}</p>
        <div class="hover-link">
        <div class="head">
          <p>{{ $service->getTranslatedAttribute('title', \App::getLocale(), 'en') }}</p>
          <div class="line"></div>
          <p>{{ $service->getTranslatedAttribute('description', \App::getLocale(), 'en') }}</p>
          <div class="line"></div>
        </div>
        <div class="body">
          @if($service->keyy=='doublebus')
            <a href="{{ route('bus', ['id'=>$service->id]) }}">@lang('lang.pokazat')<span></span>
            </a>
          @else
          <a href="{{ route('service', ['id'=>$service->id]) }}">@lang('lang.pokazat')<span></span>
          </a>
          @endif
        </div>
        </div>
      </div>
    </div>
    @endforeach
    <div class="info-link">
      <div class="img-wrapper"><img width="100%" src="/img/kortej1.jpg" alt="images"/></div>
      <div class="info-link-block">
        <p>@lang('lang.nashi_korteji')</p>
        <div class="hover-link">
        <div class="head">
          <p>@lang('lang.nashi_korteji')</p>
          <div class="line"></div>
        </div>
        <div class="body">     
          <a href="{{ route('cortages') }}">@lang('lang.pokazat')<span></span>
          </a>
        </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  @endif
    </div>
  </div>
</section>
   @include('partials.podxod')
   @include('partials.comment')
   <section class="container-fluid otmodal">
      <div class="container otmodal__wrapper">
        <form class="form" action="">
          <h3 class="form__head">@lang('lang.otziv')</h3>
          <input class="form-control name" required="" type="text"  placeholder="@lang('lang.imya')"/>
          <textarea class="form-control body" required="" placeholder="@lang('lang.msg')"></textarea>
          <input class="form-control send_comment" type="submit"  value="@lang('lang.submit')"/>
        </form>
      </div>
    </section>
@endsection