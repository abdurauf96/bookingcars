  <!-- section3 form double bus-->
      <div class="container-fluid section3" id="open1" >
        <div class="container" id="doublebus">
          <div class="section_wrapper">
            <div class="section_wrapper__left">
              <div class="section_wrapper__left">
                  <div class="form1">
                    <input  type="text" placeholder="@lang('lang.ch_date')" name="date" class="datepicker busDate">
                    
                    
                    <select class="form-control" id="busTime" name="time">                 
                      
                      <option>@lang('lang.ch_time')</option>
                      <option value="16:00">16:00</option>
                      <option value="15:00">15:00</option>
                      <option value="14:00">14:00</option>
                      <option value="13:00">13:00</option>
                      <option value="12:00">12:00</option>
                      <option value="11:00">11:00</option>
                      <option value="10:00">10:00</option>
                      
                    </select>
                  </div>
                  <div class="form2">   
                    <div class="form2__item">   
                      <label for="vzros">@lang('lang.yoshlar')<span>(13-59 @lang('lang.yosh'))</span></label>
                      <div class="form-group">
                        <a href="#" class="btn btn-danger bus_minus_youngs">-</a>
                        <input  type="text" name="yoshlar" class="form-control bus_input"value="0">
                        <button class="btn btn-danger bus_plus_youngs">+</button>
                      </div>
                      
                    </div>
                    <div class="form2__item">
                      <label for="deti">@lang('lang.bolalar')<span>(6-12 @lang('lang.yosh'))</span></label>
                      <div class="form-group">
                        <button class="btn btn-danger bus_minus_children">-</button>
                        <input  type="text" name="bolalar" class="form-control bus_input" value="0">
                        <button class="btn btn-danger bus_plus_children">+</button>
                      </div>
                    </div>
                   
                  </div>
              </div>
            </div>
            <div class="section_wrapper__right">
              <div class="section_wrapper__right--text">
                <p>@lang('lang.data'):  <span id="busDatePrint"> </p>
                <p>@lang('lang.time'): <span id="busTimePrint"></span></p>
                <p>@lang('lang.yonalish'): <span id="marshrutPrint">@lang('lang.klass')</span></p>
                <p>@lang('lang.tipavto'): <span>{{ $car->category->name }}</span></p>
                <p>@lang('lang.band'):<span id="peoples"> 0  </span></p>
                <input type="hidden" id="num_peoples" name="peoples">
                <p class="itogo">@lang('lang.itogo'): <span id="busPrice"> </span><i> usd</i></p>
                <input type="hidden" name="hidden"  id="sum_peoples">
                <input type="hidden" id="children" value="{{ $bus->children }}"  name="">
                <input type="hidden" id="pensioner" value="{{ $bus->pensioners }}"  name="">
                <input type="hidden" id="youngs" value="{{ $bus->youngs }}"  name="">
              </div>
              <div class="section_wrapper__right--link"><a href="#display_none2" class="bronlink2">@lang('lang.oformit') </a></div>
            </div>
          </div>
        </div>
      </div>
      <!-- -- section3 -->