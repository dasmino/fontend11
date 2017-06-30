<section>
    <div class="container">
        <div class="row">
        <!-- san pham -->
        <?php  if (!empty($this->data['view_home'])) {
                                  // dd($this->data['view_home']);
                                  foreach ($this->data['view_home'] as $key => $value) { 
                                    ?>

                                <?php  foreach ($value['content'] as $k => $v) { ?>
              <div class="col-md-4 col-xs-12 col-sm-4 gioithieucty">
                <div class="img_content">
                    <h1 class="center_images">
                       <img src="<?php echo base_url_cloud().'timthumb.php?src='.base_url_cloud().'cdn/'.$v['thumbnail'].'&h=100&w=100&zc=2';?>" alt="<?php echo $v['title'];?>" class="animated animated" data-wow-delay="0.2s" alt="">
                    </h1>
                </div>
                  <h1 class="cty_tv"><?php echo stripslashes($v['title']); ?></h1>
                  <div class="boder_product_one"></div>
                  <span><?php echo stripslashes($v['description']); ?></span>
                   <div class="continue">
                
                   <a href="<?php echo base_url().$v['alias'].'-n'.$v['id'].'.htm' ?>" class="continue_view">Xem chi tiết</a>
            
                   </div>
              </div>
          <!-- end san pham -->
          <?php   }}} ?>
        </div>
    </div>
  </section>