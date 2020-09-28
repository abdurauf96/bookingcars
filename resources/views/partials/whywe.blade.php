 <!-- section5-->
    <section class="whayMy">
      <div class="whayMy__inner">
        @if(isset($questions))
        <div class="whayMy__inner-left">
          <div class="head">
                <div class="logo">@lang('lang.pochemu')</div>
                
          </div>
          <div class="body">
            @foreach($questions as $question)
            <div class="body-acordion"><a class="acordion-head js-acordion-head" href="#">
                <p>{{ $question->getTranslatedAttribute('question', \App::getLocale(), 'en') }}</p><span><i class="fas fa-angle-right"></i></span></a>
              <div class="acordion-info js-acordion-info">
                <p>{{ $question->getTranslatedAttribute('answer', \App::getLocale(), 'en') }}</p>
                <div class="line"></div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
        @endif
        <div class="whayMy__inner-right">
          @if(isset($problems))
          <div class="head">@lang('lang.problems')</div>
          <div class="body">
            @foreach($problems as $problem)
            <div class="info">
              <div class="logo">
                <p><span></span>{{ $problem->getTranslatedAttribute('problem', \App::getLocale(), 'en') }}</p>
              </div>
              <div class="text">
                <p>{{ $problem->getTranslatedAttribute('answer', \App::getLocale(), 'en') }}</p>
              </div>
            </div>
            @endforeach
            
          </div>
          @endif
        </div>
      </div>
    </section>
    <!-- end section5-->