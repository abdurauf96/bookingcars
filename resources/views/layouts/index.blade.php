<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-137193451-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'UA-137193451-1', { 'optimize_id': 'GTM-T3X7XZC'});
    </script>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>{{ setting('site.title') }}</title>
    <meta name="description" content="{{ setting('site.description') }}">
    <meta name="keywords" content="{{ setting('site.title') }}">
    <meta property="og:title" content="{{ setting('site.title') }}" />
    <meta property="og:url" content="{{ setting('site.title') }}" />
    <meta property="og:image" content="{{ asset('images/logo.png') }}" />
    
    <!-- bootstrap-->
    <link rel="stylesheet" href="{{ asset('libs/bootstrap.min.css') }}"/>
    <!-- bootstrap-->
    
    <!-- owl.carusel-->
    <link rel="stylesheet" href="{{ asset('libs/owl.carousel.css') }}"/>
    <link rel="stylesheet" href="{{ asset('libs/owl.theme.css') }}"/>
    <!-- owl.carusel-->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/burger.css') }}">
    <!--font avesom-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"/>
    <!-- end font avesom-->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet"/>
    <!-- end fotn-->
    @yield('extra-css')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/add.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/slick-theme.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/helicopter.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/add_2.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/hosting_add.css') }}">
    <link rel="stylesheet" href="/css/esho__add.css"/>
  </head>
  <body>
    <!-- header-->
    <div class="test">
      <header class="header">
        <div class="header__inner">
          <div class="header__inner-head wrapper">
            <div class="left">
              <div class="logo"><a href="{{ route('home') }}"><img src="/img/logo.png" alt="logo"/></a>
              </div>
              
            </div>
            
            <div class="right" id="display__none">
            <div class="currency"> 
            <!-- kurs -->
                 <div class="usd" >
                    <span >
                      <strong>1   {{$json['0']['Ccy']}} =</strong>
                    </span>
                     <span class="amount" >{{$json['0']['Rate']}} UZS</span>
                </div>
             
            </div>
              <div class="langth">
                <a href="/lang/en">
                <img src="/img/english.png" alt="english"/>
              </a>
                <a href="/lang/ru">
                  <img src="/img/ru.png" alt="ru"/>
                </a>
              </div>
                
              <div class="soceal">
                <p>@lang('lang.sotset')</p>
                <div class="soceal-block">
                  <a href="https://www.facebook.com/bookingcarsuzb/?modal=admin_todo_tour"><i class="fab">&#xf39e;</i></a>
                  <a href="https://t.me/bookingcarsuzbekistan"><i class="fab">&#xf3fe;</i></a>
                  <a href="https://www.instagram.com/bookingcarsuzb/?hl=ru"><i class="fab">&#xf16d;</i></a>
                  <a href="https://vk.com/id545827061"><i class="fab fs-vk">&#xf189;</i></a>
                  <a href="#"><i class="fab">&#xf263;</i></a>
                  <a href="https://twitter.com/CarsBooking"><i class="fab">&#xf099;</i></a>
                  <a href="#"><i class="fab fa-whatsapp"></i></a>
                </div>
              </div>
              <div class="phone">
                <p><a href="">{{ setting('site.number') }}</a></p>
              </div>
            </div>
          </div>
          <div class="header__inner-nav" id="display__none">
            <div class="wrapper">
              <navbar class="navbar">
               {{ menu( 'main', 'layouts.menu') }}
              </navbar>
            </div>
          </div>
        </div>
      </header>
      <input type="checkbox" id="bur"/>
      <label for="bur"><img src="/img/burger.img.png" alt="kuting" class="label" /></label>
      <div id="modal">
        <header class="header">
          <div class="header__inner">
            <div class="header__inner-head wrapper">
              <div class="right">
                  <div class="currency"> 
            <!-- kurs -->
                   <div class="usd" >
                    <span >
                      <strong>1   {{$json['0']['Ccy']}} =</strong>
                    </span>
                     <span class="amount" >{{$json['0']['Rate']}} UZS</span>
                   </div>
              </div>
            </div>
                <div class="langth">
                  <a href="/lang/en">
                  <img src="/img/english.png" alt="english"/>
                </a>
                  <a href="/lang/ru">
                    <img src="/img/ru.png" alt="ru"/>
                  </a>
                </div>

                <div class="soceal">
                  <p>@lang('lang.sotset')</p>
                  <div class="soceal-block">
                     <a href="https://www.facebook.com/bookingcarsuzb/?modal=admin_todo_tour"><i class="fab">&#xf39e;</i></a>
                  <a href="https://t.me/bookingcarsuzbekistan"><i class="fab">&#xf3fe;</i></a>
                  <a href="https://www.instagram.com/bookingcarsuzb/?hl=ru"><i class="fab">&#xf16d;</i></a>
                  <a href="#"><i class="fab fs-vk">&#xf189;</i></a>
                  <a href="#"><i class="fab">&#xf263;</i></a>
                  <a href="#"><i class="fab">&#xf099;</i></a>
                  <a href="#"><i class="fab fa-whatsapp"></i></a>
                  </div>
                </div>
                <div class="phone">
                <p><a href="">{{ setting('site.number') }}</a></p>
                </div>
              </div>
            </div>
            <div class="header__inner-nav">
              <div class="wrapper">
                <navbar class="navbar">
                {{ menu( 'main', 'layouts.menu') }}
                </navbar>
              </div>
            </div>
          </div>
        </header>
      </div>
    </div>
    <!-- the end of header-->

    @if(count($errors))
    <div class=" error col-md-4 alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif

    @if(session('msg'))
    <div class="otprovlen_head2">
        <div class="otprovlen">
          <p class="exit2">&times;</p>
          <div class="otprovlen__img"><img src="/img/otprovlen.png" alt="kuting"/></div>
          <div class="otprovlen__head">  
            <h4>@lang('lang.succes')</h4>
          </div>
          <div class="otprovlen__content"> 
            <p>@lang('lang.subsucces')</p>
          </div>
        </div>
      </div>
    @endif
      <div class="otprovlen_head">
        <div class="otprovlen">
          <p class="exit2">&times;</p>
          <div class="otprovlen__img"><img src="/img/otprovlen.png" alt="kuting"/></div>
          <div class="otprovlen__head">  
            <h4>@lang('lang.succes')</h4>
          </div>
          <div class="otprovlen__content"> 
            <p>@lang('lang.subsucces')</p>
          </div>
        </div>
      </div>
  
       <div class="otprovlen_head_comment">
        <div class="otprovlen">
          <p class="exit2">&times;</p>
          <div class="otprovlen__img"><img src="/img/otprovlen.png" alt="kuting"/></div>
          <div class="otprovlen__head">  
            <h4>@lang('lang.komment1')!</h4>
          </div>
          <div class="otprovlen__content"> 
            <p>@lang('lang.komment2')</p>
          </div>
        </div>
      </div>

    @yield('content')
    

    <!-- footer-->
    <footer class="footer">
      <div class="footer__inner">
        <div class="footer__inner-card">
          <div class="wrapper">
            <div class="footer__inner-card-info">
              <a href="#" class="our_service"><img src="/img/visa.png" alt="card"/></a>
              <a href="#" class="our_service"><img src="/img/masterCard.png" alt="card"/></a>
              <a href="#" class="our_service"><img src="/img/payme.png" alt="card"/></a>
              <a href="#" class="our_service"><img src="/img/welcome.png" alt="card"/></a>
              <a href="#" class="our_service"><img src="/img/paynet.png" alt="card"/></a>
              <a href="#" class="our_service"><img src="/img/click.png" alt="card"/></a></div>
          </div>
        </div>
        <div class="footer__inner-head">
          <div class="wrapper">
            <div class="footer__inner-head-partnor">
              <div class="logo">@lang('lang.partner'):</div>
              @isset($partners)
              <div class="info">
                @foreach($partners as $partner)
                <div class="info-block">
                  <div class="img-wrapper">
                    <img src="{{ Voyager::image($partner->image) }}" alt="logotip"/>
                  </div>     
                </div>
                @endforeach           
              </div>
              @endisset
            </div>
            @isset($post)
            <div class="footer__inner-head-nuws">
              <div class="logo">@lang('lang.novinki')</div>
              <div class="nuws-block"> 
                <p>{{$post->getTranslatedAttribute('title', \App::getLocale(), 'en')}}</p>
              </div>
              <div class="img-wrapper"><img src="{{ Voyager::image($post->image) }}" alt=""/></div>
              <p>{{$post->getTranslatedAttribute('description', \App::getLocale(), 'en')}}</p>
            </div>
            @endisset
          </div>
        </div>
        <div class="footer__inner-bot">
          <div class="wrapper">
            <div class="footer__inner-bot-info">
              
              <p>Создание сайтов  <a href=""> WebMasters</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- the end of footer-->
    
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- <script src="{{ asset('js/app.js') }}"></script> -->
    
    <script src="{{ asset('js/slick.min.js') }}"></script>

    <script src="{{ asset('js/forma.js') }}"></script>
    <script src="{{ asset('js/cortage.js') }}"></script>
    <script src="{{ asset('js/transfer.js') }}"></script>
    <script src="{{ asset('js/direction.js') }}"></script>
    <script src="{{ asset('js/rent.js') }}"></script>
    <!-- <script src="{{ asset('js/doublebus.js') }}"></script> -->
    <script src="{{ asset('js/bus.js') }}"></script>
    
    <script src="{{ asset('js/popper.js') }}"></script>
    
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/main2.js') }}"></script>
    <script src="{{ asset('js/direction.js') }}"></script>
    <script src="{{ asset('js/my.js') }}" ></script>
    <script src="{{ asset('js/jquery-ui.js') }}" ></script>
   <script>
      $(function(){
          $(".helicopter").slick({
              slidesToShow: 1,
              slidesToScroll: 1,
              speed: 1000,
              autoplay: true,
              autoplaySpeed: 3000
          });
          $(window).on("scroll",function(e){
            if($(window).scrollTop() > 50){
              $(".test").addClass("fixed");
            }
            else{
              $(".test").removeClass("fixed");
            }
          });
      });
    </script>
    
    @if( \App::getLocale()=='en' )
    <!-- BEGIN JIVOSITE CODE {literal} -->
    <script type='text/javascript'>
    (function(){ var widget_id = 'X5re5HAIq9';var d=document;var w=window;function l(){
      var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
      s.src = '//code.jivosite.com/script/widget/'+widget_id
        ; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}
      if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}
      else{w.addEventListener('load',l,false);}}})();
    </script>
    <!-- {/literal} END JIVOSITE CODE -->
    @else
    
        <!-- BEGIN JIVOSITE CODE {literal} -->
    <script type='text/javascript'>
    (function(){ var widget_id = 'qHFPCQ82De';var d=document;var w=window;function l(){
      var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true;
      s.src = '//code.jivosite.com/script/widget/'+widget_id
        ; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}
      if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}
      else{w.addEventListener('load',l,false);}}})();
    </script>
    <!-- {/literal} END JIVOSITE CODE -->
    
    @endif
    
    @yield('extra-js')
    
    <link href="/jivosite/jivosite.css" rel="stylesheet">
<script src="/jivosite/jivosite.js" type="text/javascript"></script>
  </body>
</html>