<?php 
        if (isset($this->flash['flash_success'])) {
            echo '<div class="alert alert-success">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong>'.lang('success').'</strong> '.$this->flash['flash_success'].'
                    </div>';
        }
        ?>

          <div class="uk-container uk-container-center">
        <div class="uk-grid">
            <div class="uk-width-medium-1-1">
                <div class="title-news">
                    Contact
                </div>
            </div>
            <div class="uk-width-medium-1-2">
                <div class="contact_primary">
                    <p>Mời bạn điền vào mẫu thư liên lạc và gửi đi cho chúng tôi. Các chuyên viên tư vấn của chúng tôi sẽ trả lời bạn trong thời gian sớm nhất. Xin trân thành cảm ơn!</p>
                 <form action="" method="POST" role="form">
                    <div class="uk-grid">
                        <div class="uk-width-medium-1-1">
                            <input type="text" placeholder="Họ và tên" name="name" required="">
                        </div>
                        <div class="uk-width-medium-1-1">
                            <input type="text" placeholder="Email" name="email" required="">
                        </div>
                        <div class="uk-width-medium-1-1">
                            <input type="text" placeholder="Số điện thoại" name="phone" required="">
                        </div>
                        <div class="uk-width-medium-1-1">
                            <input type="text" placeholder="Địa chỉ" name="diachi" required="">
                        </div>
                        <div class="uk-width-medium-1-1">
                            <input type="text" placeholder="Nội dung" name="mess" required="">
                        </div>

                        <div class="uk-width-medium-1-2">
                        <button type="submit" class="btn btn-primary checkout-info-submit-button" name="send_mess">Gửi yêu cầu</button>
                        </div>
                    </div>
                   </form> 
                </div>
            </div>
            <div class="uk-width-medium-1-2">
                <div class="contact_primary">
                    <p><b>Cám ơn bạn đã ghé thăm <span><?php echo $_web['settings']['seo_title']; ?></span></b></p>
                    <p><b><span><?php echo $_web['settings']['seo_title']; ?></span></b></p>
                    <p><b>Địa chỉ:</b><?php echo $_web['settings']['address']; ?></p>
                    <p><b>Tel:</b> <?php echo $_web['settings']['phone']; ?> - Fax: <?php echo $_web['settings']['hotline']; ?></p>
                    <p><b>Email:</b> <?php echo $_web['settings']['email']; ?></p>
                    <div class="maps">
                        <iframe src="<?php echo $_web['settings']['link_google_map']; ?>" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
