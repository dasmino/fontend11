
<div class="uk-container uk-container-center">
        <div class="uk-grid">
            <div class="uk-width-medium-1-1">
                <div class="title-news">
                    <?php echo stripslashes($this->data['data_product']['name']);?>
                </div>
            </div>
            <div class="uk-width-medium-7-10">
                <div class="article">
                    <?php echo html_entity_decode(stripslashes($this->data['data_product']['full_info']));?>
                </div>
            </div>
            <div class="uk-width-medium-3-10">
                <div class="price-detail">
                    Giá  <?php echo stripslashes($this->data['data_product']['price']);?>$
                </div>
                <div class="order">
                    <a href="#signup-box" class="signup-window">Order</a>
                    <div id="signup-box" class="signup">
                        <p class="signup_title">Điền thông tin</p>
                        <a href="#" class="close"><img src="images/close.png" class="img-close" title="Close Window" alt="Close" /></a>
                        <form method="post" class="signup-content" action="#">
                            <label class="username">

                                <input id="username" name="username" value="" type="text" autocomplete="on" placeholder="Họ và tên">
                            </label>
                            <label class="password">

                                <input id="password" name="password" value="" type="text" placeholder="Số điện thoại">
                            </label>
                            <label class="password">

                                <input id="password" name="password" value="" type="text" placeholder="Địa chỉ">
                            </label>
                            <label class="password">

                                <input id="password" name="password" value="" type="text" placeholder="Email">
                            </label>
                            <button class="button submit-button" type="button">Gửi thông tin</button>

                        </form>
                    </div>
                </div>
                <div class="price-detail">
                    Hotline: <?php echo $_web['settings']['hotline']; ?>
                </div>
            </div>

            <?php 
               $stt=1;
               $sst = 1;
               $other_info = json_decode($this->data['data_product']['other_info'], true); 
               // dd($other_info);
              ?>
            <div class="uk-width-medium-1-1">
                <div class="tabs-detail">
                 <?php 
             $other_info = json_decode($this->data['data_product']['other_info'], true);
              ?>
                    <ul class="tabs">
                     <?php 
                     foreach ($other_info as $key => $v) {
                      if(!empty($v['title'])){
                        ?>
                        <li class="tab-link <?php if($key==0){echo 'current';}?>" data-tab="tab-<?php echo $stt++; ?>"><?php echo $v['title']; ?></li>
                        <?php }} ?>
                        
                    </ul>
                    <?php 
                     foreach ($other_info as $key => $k) {
                      if(!empty($k['content'])){
                        ?>
                    <div id="tab-<?php echo $sst++; ?>" class="tab-content <?php if($key==0){echo 'current';}?>">
                       <?php echo $k['content']; ?>
                    </div>
                        <?php }} ?>
                </div>
            </div>
        </div>
    </div>


