<div class="container-fluid section3" id="open1">
    <div class="container" id="rent">
          <div class="section_wrapper">
            <div class="section_wrapper__left">
              <div class="section_wrapper__left">
                  <div class="form1">
                    <select  class="form-control" required name="otkuda" id="rentFrom">
                      <option value=''>@lang('lang.gorod_arendi')</option>   
                      <option value="Ташкент">Ташкент</option>   
                    </select>
                    <input class="datepicker rentDateIn" type="text" placeholder="@lang('lang.ch_date')" name="den_arendi"  />

                    <select class="form-control" id="rentTimeIn" name="intime">
                      <option value="">@lang('lang.time')    </option>
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
                  <div class="form1">
                    <select required class="form-control" name="gde"  id="rentIn">
                      <option  value=''>@lang('lang.gorod_sdachi')</option>
                      @foreach($regions as $region)
                      <option value="{{ $region->id }}">{{$region->getTranslatedAttribute('region', \App::getLocale(), 'en') }}</option>
                      @endforeach
                    </select>
                    <input class="datepicker rentDateOut" type="text" placeholder="@lang('lang.den_sdachi')" name="den_sdachi" >
                    <select class="form-control" id="rentTimeOut" name="outtime">
                      <option >@lang('lang.time')     </option>
                     <option value="23:00">23:00</option>
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
                  <div class="add_label form-group">
                      <label for="kresla">@lang('lang.kresla'):<span id="priceKresla">{{ $car->price_chair }}</span><i>usd</i></label>
                      <a href="#" class="btn btn-danger minusRent">-</a>
                      <input type="text" name="kresla" value="0" class="form-control inputRent" disabled>
                      <button class="btn btn-danger plusRent">+</button>
                  </div>
              </div>
            </div>
            <div class="section_wrapper__right">
              <div class="section_wrapper__right--text">
                <p>@lang('lang.data'):  <span id="rentDateInPrint"> </span> - <span id="rentDateOutPrint"></span></p>
                <p>@lang('lang.gorod_arendi'): <span id="rentFromPrint"></span></p>
                <p>@lang('lang.gorod_sdachi'): <span id="rentInPrint"></span></p>
                <p>@lang('lang.kresla'): <span id="rentKreslaPrint"> </span></p>
                <p>@lang('lang.tipavto'): <span>{{$car->category->name}}</span></p>
                <p>@lang('lang.cond'):<span>@if($car->conditsaner) есть @else нет @endif</span></p>
                <p class="itogo" >@lang('lang.za_transfer'): <span  id="rentPrice"> {{ $car->price_for_rentcar }} </span><i> USD</i></p>
                <input type="hidden"  name="hidden" id="rentSumma">
                <input type="hidden" name="" value="{{ $car->price_for_rentcar }}" id="carPrice">
                <input type="hidden" value="" id="chair_num" name="chair_num">
              </div>
             
          <div class="section_wrapper__right--link"><a href="#display_none2" class="bronlink2">@lang('lang.dalee') </a></div>
        </div>
      </div>
    </div>
  </div>