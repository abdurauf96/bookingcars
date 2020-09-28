@extends('layouts.index')

@section('content')

 <!-- map -->
    <div class="container-fluid map">
      <div class="container">
        <div class="map_wrapper">
          <div class="map_wrapper--text">
            <h3>@lang('lang.contact')</h3>
          </div>
        </div>
        <div class="map_wrapper">   
          <div class="map_wrapper--left"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2996.5917257860156!2d69.26982681492477!3d41.317744608273536!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38ae8b3ba8e6a91b%3A0x762c97a612227fc!2zMTYg0L_RgNC-0YHQv9C10LrRgiDQqNCw0YDQsNGE0LAg0KDQsNGI0LjQtNC-0LLQsCwg0KLQsNGI0LrQtdC90YIsINCj0LfQsdC10LrQuNGB0YLQsNC9!5e0!3m2!1sru!2s!4v1554526077891!5m2!1sru!2s" width="600" height="600" frameborder="0" style="border:0" allowfullscreen></iframe></div>
          <div class="map_wrapper--right">
            <div class="contact_office">
              <div class="contact_office--text">
                <p>@lang('lang.contact_ofis')</p>
              </div>
              <div class="contact_office--item">
                <div class="contact_office--item--img"><img src="img/phone-call.png" alt="kuting"/></div>
                <div class="contact_office--item--link"><a href="+998944905011">{{ setting('site.number') }}</a></div>
              </div>
              <div class="contact_office--item">
                <div class="contact_office--item--img"><img src="img/envelope.png" alt="kuting"/></div>
                <div class="contact_office--item--link"><a href="email">{{ setting('site.email') }}</a></div>
              </div>
              <div class="contact_office--item">
                <div class="contact_office--item--img"><img src="img/placeholder.png" alt="kuting"/></div>
                <div class="contact_office--item--link">
                    <a href="email">
                @if( \App::getLocale()=='en' )    {{ setting('site.addres') }}
                @else {{ setting('site.addres_ru') }}
                @endif
                    </a>
                </div>
              </div>
            </div>
            <div class="pishite_nam">
              <div class="pishite_nam--text">
                <p>@lang('lang.pishite'):</p>
              </div>
              <div class="pishite_nam--form">
                <form action="{{ route('contact') }}" method="post">
                  {{ csrf_field() }}
                  <input placeholder="*@lang('lang.imya'):" class="form-control" type="text" name="name" id="imya"/>
                  <input placeholder="*@lang('lang.nomer'):" class="form-control" type="text" name="number" id="imya"/>
                  <textarea  class="form-control" name="message" id="imya"> </textarea>
                  <div class="submit">
                    <input class="form-control" type="submit" value="@lang('lang.submit')"/>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- map the end -->
    
@endsection