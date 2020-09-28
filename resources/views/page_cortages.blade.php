@extends('layouts.index')

@section('content')

<div class="container-fluid section1">
  <div class="container">
    <section class="double__bus">
      <!-- codes for slider-->
      <div class="double__bus--left">
        <div class="slider">
          @foreach($cortages as $cortage)
          <div class="slider__item">
            <img src="{{ Voyager::image($cortage->image) }}" alt="kuting"/>
          </div>
          @endforeach
        </div>
      </div>

      <!-- --slider-->
      <!-- codes for chevrolet Impala-->
      <div class="double__bus--right">
        <div class="double__bus--right--logo"> 
          
          <div class="double__bus--right--logo_bottom">
            <h3>@lang('lang.cortage_title')</h3>
          </div>
        </div>
        <div class="double__bus--right--table">
          <div class="double__bus--right--table--top">
            
          
          
          </div>
          <div class="double__bus--right--table--content">

            <div class="double__bus--right--table--content--item">
              
              <div class="text">
                <p> @lang('lang.paketi') </p>
              </div>
            </div>
            
            <div >
              <!-- /**/ -->
              <h4>@lang('lang.bron')</h4>
            </div>
            
          </div>
        </div>
        <div class="double__bus--right--cost">
            
          <p>@lang('lang.text_cortej') </p>
        </div> 
        <div class="double__bus--right--bron">
          <a href="" class="bronlink">
              @lang('lang.pricelist')
          </a>
        </div>   
      </div>
    </section>
  </div>
</div>
 <form method="post" action="/booking-cortage">
  {{ csrf_field() }}
<section class="container-fluid newform section_wrapper" id="open1">
  <div class="container" id="direction">
    <div class="section__wrapper--left">
      <div class="newform__wrapper fourfr">
        <h3 class="newform__wrapper--head">@lang('lang.type_cortages') </h3>
        <h3 class="newform__wrapper--head">@lang('lang.cars')</h3>
        <h3 class="newform__wrapper--head">@lang('lang.pric')</h3>
        <h3 class="newform__wrapper--head">@lang('lang.select')</h3>
      </div>
        @foreach($cortages as $cortage)
        <div class="newform__item fourfr">
          <p  class="col yonalish">{{ $cortage->getTranslatedAttribute('cortage_type', \App::getLocale(), 'en') }}</p>
          <p class="yonalish">{{ $cortage->getTranslatedAttribute('cars', \App::getLocale(), 'en') }}</p>
          <div class="form__cost"> 
            <div>
               <p class="price">{{ $cortage->price }}  </p>
            </div>
            <div class="cost__wrapper"> 
                <span data-sum="{{ $cortage->price }}" class="cost__usd cost__active dol2">usd</span>
                <span data-sum="{{ $cortage->price }}" class="cost__uzb rub2">uzs</span>
            </div>  
          </div>
          <input class="form-control select" type="radio" name="select"/>
        </div>
        @endforeach  
        <div class="section_wrapper__bot">
         <h3 class="newform__wrapper__bot--head newform__wrapper--head">@lang('lang.choose')</h3>
         <input name="date"  class="newform__wrapper--head--data datepicker form-control" type="text"  placeholder="Выберите дату"/>
         <input type="hidden"  class="marshrut" name="package">
        </div>
    </div>
    <div class="section_wrapper__right">
      <div class="section_wrapper__right--text">
        <p >@lang('lang.data'):  <span id="dateDirectPrint"></span></p>
        <p>@lang('lang.tip_cortage'): <span id="marshrutDirectPrint"> </span></p>
        <p class="itogo">@lang('lang.pric'): <span class="price_direct"><!-- price --></span><i> </i></p>
        <input type="hidden" value="" class="hidden" name="">
        <input type="hidden" value="" class="itogo" name="itogo">
      </div>
      <div class="section_wrapper__right--link"><a class="btn bronlink2 " href="#display_none2">@lang('lang.dalee') </a></div>
    </div>
  </div>
</section>

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
        </div>

        <div class="personal_danni--link">
          <input type="submit" value="@lang('lang.finish')">
        </div>
      </div>
    </div>
  </div>
</form>

@endsection

