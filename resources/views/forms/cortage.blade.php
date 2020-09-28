 <!-- codes for kortedj-->
      <div class="container-fluid section3" id="open1">
       <div class="container" id="cortage">
          <div class="section_wrapper">
            <div class="section_wrapper__left">
              <div class="section_wrapper__left">
                  <div class="form1">
                   
                    <select id="gorodCortage" class="form-control" name="gorod_arendi">
                      <option>@lang('lang.gorod_arendi') ?</option>
                      @foreach($regions as $region)
                      <option value="{{ $region->id }}">{{ $region->getTranslatedAttribute('region', \App::getLocale(), 'en') }}</option>
                      @endforeach
                    </select>
                    <label for="time">@lang('lang.c')</label>
                <select  class="form-control" id="cortageTimetFrom" 
                name="from" >
                  
                  <option value="00:00">00:00</option>
                  <option value="01:00">01:00</option>
                  <option value="02:00">02:00</option>
                  <option value="03:00">03:00</option>
                  <option value="04:00">04:00</option>
                  <option value="05:00">05:00</option>
                  <option value="06:00">06:00</option>
                  <option value="07:00">07:00</option>
                  <option value="08:00">08:00</option>
                  <option value="09:00">09:00</option>
                  <option value="10:00">10:00</option>
                  <option value="11:00">11:00</option>
                  <option value="12:00">12:00</option>
                  <option value="13:00">13:00</option>
                  <option value="14:00">14:00</option>
                  <option value="15:00">15:00</option>
                  <option value="16:00">16:00</option>
                  <option value="17:00">17:00</option>
                  <option value="18:00">18:00</option>
                  <option value="19:00">19:00</option>
                  <option value="20:00">20:00</option>
                  <option value="21:00">21:00</option>
                  <option value="22:00">22:00</option>
                  <option value="23:00">23:00</option>
                </select>
                  
                  </div>
                  <div class="form1 date_double">
                     
                  <input name="den_arendi" class="form_control datepicker" placeholder="@lang('lang.den_arendi')" type="text" id="cortageDate" />
                      <label for="time">@lang('lang.po')</label>
                    <select  class="form-control" id="cortageTimetTo" name="to">
                    
                      <option value="00:00">00:00</option>
                      <option value="01:00">01:00</option>
                      <option value="02:00">02:00</option>
                      <option value="03:00">03:00</option>
                      <option value="04:00">04:00</option>
                      <option value="05:00">05:00</option>
                      <option value="06:00">06:00</option>
                      <option value="07:00">07:00</option>
                      <option value="08:00">08:00</option>
                      <option value="09:00">09:00</option>
                      <option value="10:00">10:00</option>
                      <option value="11:00">11:00</option>
                      <option value="12:00">12:00</option>
                      <option value="13:00">13:00</option>
                      <option value="14:00">14:00</option>
                      <option value="15:00">15:00</option>
                      <option value="16:00">16:00</option>
                      <option value="17:00">17:00</option>
                      <option value="18:00">18:00</option>
                      <option value="19:00">19:00</option>
                      <option value="20:00">20:00</option>
                      <option value="21:00">21:00</option>
                      <option value="22:00">22:00</option>
                      <option value="23:00">23:00</option>
                  </select>

                  </div>
              </div>
            </div>
            <div class="section_wrapper__right">
              <div class="section_wrapper__right--text">
                <p>@lang('lang.data'):  <span id="cortageDatePrint"></span></p>
                <p>@lang('lang.time'): <span id="cortageFrom"></span> - <span id="cortageTo"></span> </p>
                <p>@lang('lang.gorod'): <span id="printGorod"></span></p>
                <p>@lang('lang.tipavto'): <span> {{ $car->category->name }} </span></p>
                 <p>@lang('lang.cond'):<span>@if($car->conditsaner) есть @else нет @endif
                <p class="itogo">@lang('lang.itogo'): <span id="price">{{ $car->price_for_cortage }} </span><i> usd</i></p>
              </div>
              <input type="hidden" name="hidden" value="{{ $car->price_for_cortage }}"  id="hidden">
              <div class="section_wrapper__right--link"><a href="#display_none2" class="bronlink2">@lang('lang.dalee')  </a></div>
            
            </div>
          </div>
        </div>
      </div>