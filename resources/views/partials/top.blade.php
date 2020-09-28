<!-- section1-->
    <section class="booking">
      <div class="wrapper">
        <div class="booking__inner">
          <div class="booking__inner-logo">
            <div class="booking__inner-logo-head">
              @if( \App::getLocale()=='ru' )
                {{ setting('site.title') }}
              @else
                {{ setting('site.title_eng') }}
              @endif
            </div>
            <div class="booking__inner-logo-body">@if( \App::getLocale()=='ru' )
                {{ setting('site.description') }}
              @else
                {{ setting('site.desc_eng') }}
              @endif
            </div>
          </div>
          <div class="booking__inner-info">
            <div class="booking__inner-info-logo">
                  <div class="logo">@lang('lang.search')</div>
                  <div class="text"></div>
            </div>
            <div class="booking__inner-info-form">
              <form action="{{ route('search') }}" method="GET">
                {{ csrf_field() }}
                <select name="region" id="region_id">

                    <option>@lang('lang.gorod')</option>
                 @foreach($regions as $region)
                    <option value="{{ $region->id }}">{{ $region->getTranslatedAttribute('region', \App::getLocale(), 'ru') }}</option>
                  @endforeach
                </select>
                <select name="service" id="service_id">
                  <option>@lang('lang.servic')</option>
                  @foreach($services as $service)
                    <option value="{{ $service->id }}">{{ $service->getTranslatedAttribute('title', \App::getLocale(), 'en') }}</option>
                  @endforeach
                </select>
                <select name="category" id="category_id">
                    <option>@lang('lang.klasses')</option>
                  @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->getTranslatedAttribute('name', \App::getLocale(), 'en') }}</option>
                  @endforeach
                </select>
                
              
                <!-- <label class="radio">
                  <input type="checkbox" name="cond" class="cond" value="yes" />@lang('lang.cond')
                </label> -->
                <a class="pokazat" href="#services">@lang('lang.pokazat')</a>

              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end section1-->