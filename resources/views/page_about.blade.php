@extends('layouts.index')

@section('content')
<!-- about1-->
    
    <section class="myCompany">
      <div class="wrapper">
        <div class="myCompany__inner">
          <div class="myCompany__inner-head">
                <div class="logo">{!! $page->getTranslatedAttribute('title', \App::getLocale(), 'en') !!}</div>
                <div class="text"></div>
            <div class="text">
              <p>{!! $page->getTranslatedAttribute('body', \App::getLocale(), 'en') !!}</p>
            </div>
          </div>
         
        </div>
      </div>
    </section>
    <!-- end about1-->

    @include('partials.whywe')
    @include('partials.zayavka')
    @include('partials.comment')

@endsection