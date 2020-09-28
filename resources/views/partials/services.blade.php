
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
				@if($loop->first)
			  <div class="info-link">
				<div class="img-wrapper">
				     @php $image=str_replace('.png', '-small.png',  $service->image ) @endphp
				    <img width="100%" src="{{ Voyager::image($image) }}" alt="images"/>
				    </div>
				<div class="info-link-block">
				  <p>@lang('lang.car_with')</p>
				  <div class="hover-link">
					<div class="head">
					 
					  <a href="{{ route('service', ['id'=>$service->id]) }}">{{ $service->getTranslatedAttribute('title', \App::getLocale(), 'en') }}</a>
					  <div class="line"></div>
					   <a href="{{ route('service', ['id'=>7]) }}">@lang('lang.transfer')</a>
					  <div class="line"></div>
					</div>
				  </div>
				</div>
			  </div>
			  @else
			  	@if($service->id==7)
			  		@continue
			  	@endif
			  <div class="info-link">
				<div class="img-wrapper">
				     @php $image=str_replace('.png', '-small.png',  $service->image ) @endphp
				    <img width="100%" src="{{ Voyager::image($image) }}" alt="images"/>
				    </div>
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
			  @endif
			  
			  @endforeach
				@foreach($sliders as $slider)
					@if($loop->first)
					<div class="info-link heli_service">
				<div class="img-wrapper">
				     @php $image=str_replace('.png', '-small.png',  $slider->image ) @endphp
				    <img width="100%" src="{{ Voyager::image($image) }}" alt="images"/>
				    </div>
				<div class="info-link-block">
				  <p>{{ $slider->getTranslatedAttribute('title', \App::getLocale(), 'en') }}</p>
				  <div class="hover-link">
					<div class="head">
					  <p>{{ $slider->getTranslatedAttribute('title', \App::getLocale(), 'en') }}</p>
					  <div class="line"></div>
					  
					  <div class="line"></div>
					</div>
					<div class="body">
						<a href="{{ route('cortages') }}">@lang('lang.pokazat')<span></span>
						</a>
						@endif
					</div>
				  </div>
				</div>
			  </div>
				
				@endforeach

			</div>
		  </div>
		  @endif
        </div>
      </div>
    </section>
    <!-- end section2