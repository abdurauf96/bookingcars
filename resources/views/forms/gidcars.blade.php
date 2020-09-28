<!-- codes for gida cars-->
      <div class="container-fluid section3" id="open1">
         <div class="container" id="gid_cars">
          <div class="section_wrapper">
            <div class="section_wrapper__left">
              <div class="section_wrapper__left">
                  <div class="form1">
                    <select id="from"  class="form-control" name="otkuda" >
                      <option>@lang('lang.gorod')</option>
                     @foreach($regions as $region)
                      <option value="{{ $region->region }}">{{ $region->getTranslatedAttribute('region', \App::getLocale(), 'en') }}</option>
                      @endforeach
                    </select>
             
                     <select  name="gid_from" class="form-control" id="gid_from" >
                        <option value="">@lang('lang.gid_from') </option>
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
                   
                     <input type="text" name="den_arendi"  class="datepicker" placeholder="@lang('lang.data')">
                       
                     
                        <select  name="gid_to" class="form-control" id="gid_to" >
                        <option value="">@lang('lang.gid_to') </option>
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
                  <div class="add_label add_yazik">
                     
                   
                       <select id="yazik"  class="yazik_gida form-control" name="lang">
                        <option>@lang('lang.gid')</option>
                        <option value="@lang('lang.rus')">@lang('lang.rus')</option>
                        <option value="@lang('lang.eng')">@lang('lang.eng')</option>
                        <option value="@lang('lang.china')">@lang('lang.china')</option>
                        <option value="@lang('lang.arab')">@lang('lang.arab')</option>
                        <option value="@lang('lang.turk')">@lang('lang.turk')</option>
                        <option value="@lang('lang.korea')">@lang('lang.korea')</option>
                        <option value="@lang('lang.german')">@lang('lang.german')</option>
                        <option value="@lang('lang.turk')">@lang('lang.turk')</option>
                      </select>
                     
                    
                  </div>
              </div>
            </div>
            <div class="section_wrapper__right">
              <div class="section_wrapper__right--text">
                <p>@lang('lang.data'):  <span id="sanaPrint"> </span></p>
                <p>@lang('lang.gid_from'): <span id="gid_from_print"></span></p>
                <p>@lang('lang.gid_to'): <span id="gid_to_print" > </span> - <span id="toPrint"></span></p>
                <p>@lang('lang.tipavto'): <span>{{ $car->category->name }}</span></p>
                <p>@lang('lang.gid'): <span id="yazikPrint"> </span></p>
                <p class="itogo">@lang('lang.itogo'): <span id="price"> {{ $car->price_for_gidcar }} </span><i> USD</i></p>
              </div>
               <input type="hidden" id="hidden" name="hidden">
               <input type="hidden" id="num_chair" name="kresla">
               
              <div class="section_wrapper__right--link"><a href="#display_none2" class="bronlink2">@lang('lang.dalee') </a></div>
            </div>
          </div>
        </div>
      </div>