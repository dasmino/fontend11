  <header>
        <div class="uk-container uk-container-center">
            <div class="uk-grid">
                <div class="uk-width-medium-2-3">
                    <div class="if-header-left">
                        <i class="fa fa-phone" aria-hidden="true"></i> Hotline: <?php echo $_web['settings']['hotline'] ?>
                        <i class="fa fa-envelope-o" aria-hidden="true"></i> Email: <?php echo $_web['settings']['email'] ?>
                    </div>
                </div>
                <div class="uk-width-medium-1-3">
                    <div class="if-header-right">
                        Kết nối với chúng tôi:
                        <a href="<?php echo $_web['settings']['link_facebook'] ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="<?php echo $_web['settings']['link_tt'] ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="<?php echo $_web['settings']['link_youtube'] ?>"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="header">
        <div class="banner" id="header-fix">
            <div class="uk-container uk-container-center">
                <div class="uk-grid">
                    <div class="uk-width-medium-1-4">
                        <div class="logo">
                            <a href="<?php echo base_url(); ?>"><img src="<?php echo getImage($_web['settings']['logo'],'256','127','zc=1') ?>" alt=""></a>
                        </div>
                    </div>
                    <div class="uk-width-medium-3-4">
                        <div class="menu">
                           <?php
        $newArrayMenu = array();
        foreach ($_web['menu'] as $value) {
            $parent = $value['parent_id'];
            $newArrayMenu[$parent][] = $value;
        }
        recursiveMenu($newArrayMenu);
        ?>
                        </div>
                    </div>
                    <div class="uk-width-medium-1-4">
                        <div class="online-reservation">
                            <div class="title">
                                <img src="<?php echo base_url()."themes/default/public/";?>images/lich.png" alt=""> Đăng ký tư vấn
                            </div>
                          
                    <form action="" method="POST" role="form">
                            <div class="form-online-reservation">
                                <div class="uk-grid fix-grid-form">
                                    <div class="uk-width-medium-1-1 fix-width-form">
                                        Name
                                        <input type="text" name="name" required="">
                                    </div>
                                    <div class="uk-width-medium-1-1 fix-width-form">
                                        Phone
                                        <input type="text" name="phone" required="">
                                    </div>
                                    <div class="uk-width-medium-1-1 fix-width-form">
                                        Email
                                        <input type="text" name="email" required="">
                                    </div>
                                    <div class="uk-width-medium-1-1 fix-width-form">
                                     <button type="submit" class="btn btn-primary checkout-info-submit-button" name="send_mess">BOOK NOW</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                            <div class="txt">
                                CHECK AVAILABILITY | MODIFY / CANCE
                            </div>
                            <p><i class="fa fa-check" aria-hidden="true"></i> Secured online payment</p>
                            <p><i class="fa fa-check" aria-hidden="true"></i> Instant confirmation</p>
                            <p><i class="fa fa-check" aria-hidden="true"></i> Best rates guaranteed</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide">
            <div id="slide-chinh" class="owl-carousel owl-theme">
            <?php foreach (($_web['banner']) as $key => $v) { ?>
                <div class="item"><img src="<?php echo getImage($v['images'],'1280','525','zc=1') ?>" width="100%" alt=""></div>
               <?php } ?>

            </div>
        </div>
    </div>