<!-- PHONE CALL STRUCTURE -->
    <a href="tel:0912619138" class="visible-xs phone-ring">
      <div class="laziweb-alo-phone">
        <div class="animated infinite zoomIn laziweb-alo-ph-circle"></div>
        <div class="animated infinite pulse laziweb-alo-ph-circle-fill"></div>
        <div class="animated infinite tada laziweb-alo-ph-img-circle"></div>
      </div>
    </a>
<div class="hidden-xs quickcontact phone-ring">
  <a data-toggle="modal" href="#call_popup">
    <div class="laziweb-alo-phone">
      <div class="animated infinite zoomIn laziweb-alo-ph-circle"></div>
      <div class="animated infinite pulse laziweb-alo-ph-circle-fill"></div>
      <div class="animated infinite tada laziweb-alo-ph-img-circle"></div>
    </div>
  </a>
</div>
<div class="modal fade callback-popup" id="call_popup" style="display: none;">
      <div class="modal-dialog modal-lg text-center">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><img src="https://cdn0.iconfinder.com/data/icons/slim-square-icons-basics/100/basics-22-128.png"></button>
          </div>
          <div class="modal-body">
            <form method="post" id="callback_form" autocomplete="off" action-submit="contact/actionCallback">
              <input type="hidden" name="form" value="callback">
              <input type="hidden" name="title" value="Yêu cầu liên hệ lại trong 5 phút">
              <h3>Chúng tôi sẽ liên hệ lại với bạn sau 5 phút.</h3>
              <div id="callback_success" class="alert alert-success hidden"></div>
              <div id="callback_fail" class="alert alert-danger hidden"></div>
              <div class="lazi-alo-input-wrapper">
                <div class="input">
                  <input style="border: 2px solid #8ac442;" type="text" class="lazi-alo-number" placeholder="" name="phone" maxlength="13">
                </div>
                <div class="lazi-alo-message">
                  <input type="hidden" name="content" value="Yêu cầu liên hệ lại trong 5 phút">
                </div>
              </div>
              <div><button style="background-color: #8ac442;" class="lazi-alo-submit" type="submit">Click để được gọi lại!</button></div>
              <!-- <div class="lazi-alo-popup-timer">00:26,00</div> -->
            </form>
          </div>
        </div>
      </div>
    </div>