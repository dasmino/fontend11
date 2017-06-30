<div class="content">
        <div class="uk-container uk-container-center">
            <div class="uk-grid">
                <div class="uk-width-medium-7-10">
                <?php 
                if (!empty($this->data['data_home'])) {
                    foreach ($this->data['data_home'] as $key => $value) {
                        if ($value['content']!="") {
                            $content = json_decode($value['content'], true);
                        }
                        if ($key==0) { ?>
                        <?php 
                        if (isset($content)) { 
                            foreach ($content as $k => $v) { 
                                ?>
                    <div class="content-left">
                         <?php echo stripslashes($v['short_info']);?>
                    </div>
                     <?php 
                            }
                        }
                        ?>
                         <?php 
                            }

                        }
                    }
                    ?>
                </div>
                <div class="uk-width-medium-3-10">
                    <div class="content-right">
                        <p class="txt1">HANOI GARDEN HOTEL<br><span>( Formerly: Viet Linh Hotel )</span></p>
                        <p><?php echo $_web['settings']['address']; ?></p>
                        <p>Tel: <?php echo $_web['settings']['phone']; ?>
                            <br>Fax: <?php echo $_web['settings']['hotline']; ?></p>
                        <p>Email: <?php echo $_web['settings']['email']; ?>
                            <br><?php echo $_web['settings']['email_support']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <div class="news">
        <div class="uk-container uk-container-center">
            <div class="uk-grid">
                <div class="uk-width-medium-1-1">
                    <div class="slide-news">
                        <div id="slide-news" class="owl-carousel owl-theme">
                        <?php
                           if (!empty($this->data['data_home'])) {
                            foreach ($this->data['data_home'] as $key => $value) {
                                if ($value['content']!="") {
                                    $content = json_decode($value['content'], true);
                                }
                                if ($key==1) { ?>

                                   <?php 
                                   //dd($content);
                        if (isset($content)) { 
                            foreach ($content as $k => $v) { 
                                // xu ly thoi gian khuyen mai
                                $sale = false;
                                if ($v['saleoff'] > 0) {
                                    if ($v['time_start'] < time() && $v['time_end'] > time()) {
                                        $sale = true;
                                    }
                                }
                                ?>
                            <div class="item">
                                <div class="box-news">
                                    <a href=""><img src="<?php echo getImage($v['image'],'347','266','zc=1') ?>" width="100%" alt=""></a>
                                    <h1><?php echo stripslashes($v['name']);?></h1>
                                    <p><?php echo stripslashes($v['short_info']);?></p>
                                    <div class="more-news">
                                        <a href="">more info >></a>
                                    </div>
                                </div>
                            </div>
                          
                          <?php 
                            }
                        }
                        ?>
                         <?php 
        }

    }
}
?>
                        </div>
                    </div>
                </div>
               <?php 
if (!empty($this->data['data_home'])) {
    foreach ($this->data['data_home'] as $key => $value) {
        if ($value['content']!="") {
            $content = json_decode($value['content'], true);
        }
        if ($key==2) { ?>
         <?php 
                        if (isset($content)) { 
                            foreach ($content as $k => $v) { 
                                // xu ly thoi gian khuyen mai
                                $sale = false;
                                if ($v['saleoff'] > 0) {
                                    if ($v['time_start'] < time() && $v['time_end'] > time()) {
                                        $sale = true;
                                    }
                                }
                                ?>
                <div class="uk-width-medium-6-10">
                    <div class="anh-nd">
                        <img src="<?php echo base_url()."themes/default/public/";?>images/a.png" alt="">
                    </div>
                </div>
                <div class="uk-width-medium-4-10">
                    <div class="title-nd-anh">
                        <?php echo $value['title'];?>
                    </div>
                    <div class="nd-ben-trong">
                        <div class="khungnd">
                           <?php echo stripslashes($v['short_info']);?>
                            <img src="<?php echo base_url()."themes/default/public/";?>images/b.png" alt="">
                        </div>
                    </div>
                </div>
 <?php 
                            }
                        }
                        ?>

                         <?php 
        }

    }
}
?>


               <?php
                           if (!empty($this->data['data_home'])) {
                            foreach ($this->data['data_home'] as $key => $value) {
                                if ($value['content']!="") {
                                    $content = json_decode($value['content'], true);
                                }
                                if ($key==3) { ?>
                <div class="uk-width-medium-1-3">
                    <div class="title-tour">
                        <?php echo $value['title'];?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="tour">
        <div class="uk-container uk-container-center fix-container">
            <div class="uk-grid">
                <div class="uk-width-medium-1-1">
                    <div class="slide-tour">
                        <div id="slide-tour" class="owl-carousel owl-theme">
                           

                                   <?php 
                                   //dd($content);
                        if (isset($content)) { 
                            foreach ($content as $k => $v) { 
                                // xu ly thoi gian khuyen mai
                                $sale = false;
                                if ($v['saleoff'] > 0) {
                                    if ($v['time_start'] < time() && $v['time_end'] > time()) {
                                        $sale = true;
                                    }
                                }
                                ?>

                             <div class="item">
                                <div class="box-tour">
                                    <a href=""><img src="<?php echo getImage($v['image'],'300','230','zc=1') ?>" width="100%" alt=""></a>
                                    <p><?php echo stripslashes($v['name']);?></p>
                                    <p><span>USD $<?php echo $v['price'];?></span></p>
                                    <div class="more-tour">
                                        <a href="">more info >></a>
                                    </div>
                                </div>
                            </div>
                          
                          <?php 
                            }
                        }
                        ?>
                         <?php 
                            }

                        }
                    }
                    ?>



                        </div>
                    </div>
                </div>
                  <?php
                           if (!empty($this->data['data_home'])) {
                            foreach ($this->data['data_home'] as $key => $value) {
                                if ($value['content']!="") {
                                    $content = json_decode($value['content'], true);
                                }
                                if ($key==4) { ?>
                <div class="uk-width-medium-1-1">
                    <div class="title-news">
                        <?php echo $value['title'];?>
                    </div>
                </div>
             
                 

                                   <?php 
                                   //dd($content);
                        if (isset($content)) { 
                            foreach ($content as $k => $v) { 
                                // xu ly thoi gian khuyen mai
                                $sale = false;
                                if ($v['saleoff'] > 0) {
                                    if ($v['time_start'] < time() && $v['time_end'] > time()) {
                                        $sale = true;
                                    }
                                }
                                ?>

                             <div class="uk-width-medium-1-4">
                                <div class="box-event">
                                    <a href=""><img src="<?php echo getImage($v['image'],'231','177','zc=1') ?>" width="100%" alt=""></a>
                                    <p><a href=""><?php echo stripslashes($v['name']);?></a></p>
                                </div>
                            </div>
                          <?php 
                            }
                        }
                        ?>
                         <?php 
                            }

                        }
                    }
                    ?>

            </div>
        </div>
    </div>
    <div class="y-kien">
        <div class="uk-container uk-container-center">
            <div class="uk-grid">
                <div class="uk-width-medium-1-1">
                    <div class="title-y-kien">
                        <?php echo $value['title'];?>
                    </div>
                </div>
                <div class="uk-width-medium-1-1">
                    <div class="slide-y-kien">
                        <div id="slide-y-kien" class="owl-carousel owl-theme">

                          
                             <?php
                           if (!empty($this->data['data_home'])) {
                            foreach ($this->data['data_home'] as $key => $value) {
                                if ($value['content']!="") {
                                    $content = json_decode($value['content'], true);
                                }
                                if ($key==5) { ?>
                                   <?php 
                                   //dd($content);
                        if (isset($content)) { 
                            foreach ($content as $k => $v) { 
                                // xu ly thoi gian khuyen mai
                                $sale = false;
                                if ($v['saleoff'] > 0) {
                                    if ($v['time_start'] < time() && $v['time_end'] > time()) {
                                        $sale = true;
                                    }
                                }
                                ?>
                              <div class="item">
                                <div class="box-y-kien">
                                    <img src="<?php echo getImage($v['image'],'113','113','zc=1') ?>" alt="">
                                    <div class="name-kh">
                                         <?php echo stripslashes($v['name']);?>
                                    </div>
                                    <div class="nd-kh">
                                       <?php echo stripslashes($v['short_info']);?>
                                    </div>
                                </div>
                            </div>

                          <?php 
                            }
                        }
                        ?>
                         <?php 
                            }

                        }
                    }
                    ?>
                         
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>