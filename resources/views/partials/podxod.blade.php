<section class="container-fluid Form">
      <div class="container">
        <h2 class="Form__head">@lang('lang.podxod_title')</h2>
        <p class="Form__text">@lang('lang.podxod_subtitle')</p>
        <form action="" method="post">
          {{ csrf_field() }}
          <div class="Form__input">
            <div class="Form__input--item">
              <label for="name">@lang('lang.imya'):</label>
              <input class="i1 form-control" type="text" required=""  id="name" placeholder="@lang('lang.imya')"/>
            </div>
            <div class="Form__input--item">
              <label for="call">@lang('lang.nomer'):</label>
              <input class=" i2 form-control" type="text"  required="" id="number" placeholder="@lang('lang.nomer')"/>
            </div>
            <div class="Form__input--item">
              <label for="call">Ваш E-mail:</label>
              <input class="i3 form-control" type="text" id="email" placeholder="e-mail"/>
            </div>
            <div class="Form__textarea">
              <textarea class="form-control" id="message" placeholder="@lang('lang.msg')"></textarea>
            </div>
            <div class="Form__input--item Form__input--item2">
              <input class="form-control apply3" type="submit" value="@lang('lang.submit')"/>
            </div>
          </div>
        </form>
      </div>
    </section>