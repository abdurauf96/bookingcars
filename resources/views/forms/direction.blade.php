<section class="container-fluid newform section_wrapper" id="open1">
  <div class="container" id="direction">
    <div class="section__wrapper--left">
      <div class="newform__wrapper">
        <h3 class="newform__wrapper--head">@lang('lang.dest')</h3>
        <h3 class="newform__wrapper--head">@lang('lang.pric')</h3>
       
        <h3 class="newform__wrapper--head">@lang('lang.select')</h3>
      </div>
        
         <div class="newform__item">
          <p class="yonalish">City Tour</p>
          <div class="form__cost"> 
            <div>
               <p class="price">{{ $car->city_tour }}  </p>
             </div>
            <div class="cost__wrapper"> 
                <span data-sum="{{ $car->city_tour }}" class="cost__usd cost__active dol2">usd</span>
                <span data-sum="{{ $car->city_tour }}" class="cost__uzb rub2">uzs</span>
            </div>  
          </div>
          <input class="form-control select" type="radio" name="select"/>
        </div>
        <div class="newform__item">
          <p class="yonalish">Tashkent-Samarkand</p>
          <div class="form__cost"> 
            <div>
               <p class="price">{{ $car->tash_sam }}  </p>
             </div>
            <div class="cost__wrapper"> 
                <span data-sum="{{ $car->tash_sam }}" class="cost__usd cost__active dol2">usd</span>
                <span data-sum="{{ $car->tash_sam }}" class="cost__uzb rub2">uzs</span>
            </div>  
          </div>
          <input class="form-control select" type="radio" name="select"/>
        </div>
        <div class="newform__item">
          <p class="yonalish">Tashkent-Samarkand-Tashkent</p>
          <div class="form__cost"> 
            <div>
               <p class="price">{{ $car->tash_sam_tash }}  </p>
             </div>
            <div class="cost__wrapper"> 
                <span data-sum="{{ $car->tash_sam_tash }}" class="cost__usd cost__active dol2">usd</span>
                <span data-sum="{{ $car->tash_sam_tash }}" class="cost__uzb rub2">uzs</span>
            </div>  
          </div>
          <input class="form-control select" type="radio" name="select"/>
        </div>
        <div class="newform__item">
          <p class="yonalish">Tashkent-Chimgan</p>
          <div class="form__cost"> 
            <div>
               <p class="price">{{ $car->tash_chim }}  </p>
             </div>
            <div class="cost__wrapper"> 
                <span data-sum="{{ $car->tash_chim }}" class="cost__usd cost__active dol2">usd</span>
                <span data-sum="{{ $car->tash_chim }}" class="cost__uzb rub2">uzs</span>
            </div>  
          </div>
          <input class="form-control select" type="radio" name="select"/>
        </div>
        <div class="newform__item">
          <p class="yonalish">Tashkent-Chimgan-Tashkent</p>
          <div class="form__cost"> 
            <div>
               <p class="price">{{ $car->tash_chim_tash }}  </p>
             </div>
            <div class="cost__wrapper"> 
                <span data-sum="{{ $car->tash_chim_tash }}" class="cost__usd cost__active dol2">usd</span>
                <span data-sum="{{ $car->tash_chim_tash }}" class="cost__uzb rub2">uzs</span>
            </div>  
          </div>
          <input class="form-control select" type="radio" name="select"/>
        </div>
        <div class="newform__item">
          <p class="yonalish">Tashkent-Bukhara</p>
          <div class="form__cost"> 
            <div>
               <p class="price">{{ $car->tash_bukh }}  </p>
             </div>
            <div class="cost__wrapper"> 
                <span data-sum="{{ $car->tash_bukh }}" class="cost__usd cost__active dol2">usd</span>
                <span data-sum="{{ $car->tash_bukh }}" class="cost__uzb rub2">uzs</span>
            </div>  
          </div>
          <input class="form-control select" type="radio" name="select"/>
        </div>
        <div class="newform__item">
          <p class="yonalish">Tashkent-Bukhara-Tashkent</p>
          <div class="form__cost"> 
            <div>
               <p class="price">{{ $car->tash_bukh_tash }}  </p>
             </div>
            <div class="cost__wrapper"> 
                <span data-sum="{{ $car->tash_bukh_tash }}" class="cost__usd cost__active dol2">usd</span>
                <span data-sum="{{ $car->tash_bukh_tash }}" class="cost__uzb rub2">uzs</span>
            </div>  
          </div>
          <input class="form-control select" type="radio" name="select"/>
        </div>
        <div class="newform__item">
          <p class="yonalish">Tashkent-Fergana</p>
          <div class="form__cost"> 
            <div>
               <p class="price">{{ $car->tash_fer }}  </p>
             </div>
            <div class="cost__wrapper"> 
                <span data-sum="{{ $car->tash_fer }}" class="cost__usd cost__active dol2">usd</span>
                <span data-sum="{{ $car->tash_fer }}" class="cost__uzb rub2">uzs</span>
            </div>  
          </div>
          <input class="form-control select" type="radio" name="select"/>
        </div>
        <div class="newform__item">
          <p class="yonalish">Tashkent-Fergana-Tashkent</p>
          <div class="form__cost"> 
            <div>
               <p class="price">{{ $car->tash_fer_tash }}  </p>
             </div>
            <div class="cost__wrapper"> 
                <span data-sum="{{ $car->tash_fer_tash }}" class="cost__usd cost__active dol2">usd</span>
                <span data-sum="{{ $car->tash_fer_tash }}" class="cost__uzb rub2">uzs</span>
            </div>  
          </div>
          <input  class="form-control select" type="radio" name="select"/>
        </div>
    
        <div class="section_wrapper__bot">
         <h3 class="newform__wrapper__bot--head newform__wrapper--head">@lang('lang.choose')</h3>
         <input name="date"  class="newform__wrapper--head--data datepicker form-control" type="text"  placeholder="Выберите дату"/>
         <input type="hidden"  class="marshrut" name="marshrut">
        </div>
    </div>
    <div class="section_wrapper__right">
      <div class="section_wrapper__right--text">
        <p >@lang('lang.data'):  <span id="dateDirectPrint"></span></p>
        <p>@lang('lang.gorod'): <span id="marshrutDirectPrint"> </span></p>
        <p>@lang('lang.tipavto'): <span >{{ $car->category->getTranslatedAttribute('name', \App::getLocale(), 'ru') }}</span></p>
        <p class="itogo">@lang('lang.pric'): <span class="price_direct">{{ $car->price_for_direction }}</span><i> </i></p>
        <input type="hidden" value="{{$car->price_for_direction }}" class="hidden" name="">
        <input type="hidden" value="" class="itogo" name="itogo">
      </div>
      <div class="section_wrapper__right--link"><a class="btn bronlink2 " href="#display_none2">@lang('lang.dalee') </a></div>
    </div>
  </div>
</section>

    
    