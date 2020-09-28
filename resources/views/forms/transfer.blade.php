<div class="container-fluid section3" id="open1">
    <div class="container" >
          <div class="section_wrapper">
            <div class="section_wrapper__left">
              <div class="section_wrapper__left">
                  <div class="form1">
                    <label for="time">@lang('lang.vileta')</label>
                    <input type="text" class="form-control" placeholder=""  name="otkuda" id="transferFrom">

                    <input type="text" placeholder="@lang('lang.data')" name="date" id="transferDate" class="datepicker" />
           
                  </div>
                  <div class="form1">

                    <label for="time"> @lang('lang.prileta')</label>
                    <select class="form-control" name="kuda" id="transferTo">
                     
                      @foreach($regions as $region)
                      <option value="{{ $region->region }}">{{ $region->getTranslatedAttribute('region', \App::getLocale(), 'en') }}</option>
                      @endforeach
                    </select>
                      
                    <select class="form-control" id="transferTime" name="time" >
                      <option>@lang('lang.time')</option>
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
                      <label for="kresla">@lang('lang.chislo'):<span id="priceKresla"></span></label>
                      <a href="#" class="btn btn-danger minusTransfer">-</a>
                      <input type="text" name="passajir" value="0" class="form-control inputTransfer" disabled>
                      <button class="btn btn-danger plusTransfer">+</button>
                  </div>
              </div>
            </div>
            <div class="section_wrapper__right">
              <div class="section_wrapper__right--text">
                <p>@lang('lang.data'):  <span id="transferDatePrint"></span></p>
                <p>@lang('lang.time'): <span id="transferTimePrint"></span></p>
                <p>@lang('lang.gorod'): <span id="transferFromPrint"> </span>- <span id="transferToPrint"></span></p>
                <p>@lang('lang.tipavto'): <span>{{ $car->category->name }}</span></p>
                <p>@lang('lang.chislo'):<span id="transferPassajirPrint">  </span></p>
                <p class="itogo">@lang('lang.itogo'): <span id="price"> {{$car->price_for_transfer}} $</span></p>
                <input type="hidden" value="{{ $car->price_for_transfer }}" name="summa">
                <input type="hidden" id="num_passajir" value="" name="passajiri">
              </div>
              
             
          <div class="section_wrapper__right--link"><a href="#display_none2" class="bronlink2">@lang('lang.dalee')</a></div>
        </div>
      </div>
    </div>
  </div>
