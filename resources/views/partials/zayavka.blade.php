<!-- section6-->
    <section class="zayavka" id="zayafka">
      <div class="wrapper">
        <div class="zayavka__inner">
          <div class="zayavka__inner-head">
                <div class="logo"><span>@lang('lang.zayafka')</span></div>
                <div class="text"></div>
            <div class="line"></div>
            <div class="text">
              <p>@lang('lang.subzayafka')</p>
            </div>
          </div>
          <div class="zayavka__inner-body">
            <form id="form" action="{{ route('apply') }}" method="POST">
              {{ csrf_field() }}
              <div class="lable"><span> <i class="fas fa-user"></i></span>
                <input id="name" name="body" type="text" placeholder="@lang('lang.name')"/>
              </div>
              <div class="lable"><span><i class="fas fa-phone"></i></span>
                <input id="number" name="number" type="text" placeholder="@lang('lang.number')"/>
              </div>
              <input class="apply" type="submit" value="@lang('lang.submit')" />
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- end section6-->