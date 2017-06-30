<div class="row">
   <div class="col-md-8">
     <ul class="breadcrumb">

      <li><a href="<?php base_url(); ?>" class="pathway">Trang chủ</a><span class="divider">&nbsp;|&nbsp;</span>
      </li>
      <li class="active"><span><?php echo  $this->data['menu']['title'] ?></span>
      </li>
    </ul>
    <div class="	box-news">
      <?php 
      if (isset($this->data['data'])) {
        foreach ($this->data['data'] as $key => $value) {
         if ($key== 0) {
           ?>
           <div class="first-news-feature clearfix">
            <a
            href="<?php echo base_url().$value['alias'].'-n'.$value['id'].'.htm' ?>" class="image-first-news-feature" title="">
            <img src="<?php echo getImage($value['thumbnail'],'390','254','zc=1') ?>" alt="">
          </a>
          <div class="right-first-news-feature">
           <a href="<?php echo base_url().$value['alias'].'-n'.$value['id'].'.htm' ?>" class="title-first-news-feature" title="T">
             <?php echo stripslashes($value['title']); ?></a>
             <span class="date-time">
              <i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo date('h:i d-m-Y',$value['create_time']); ?></span>
              <div class="summary-first-news-feature"><?php echo cutString(stripslashes($value['description']),150); ?>

              </div>
            </div>
            <!--End right-first-news-feature-->
          </div>
          <!--End first-news-feature-->
          <?php } else{ ?>

          <div class="box-news-list clearfix">
           <div class="news">
            <div class="body-news">
              <a class="image-news" 
              href="<?php echo base_url().$value['alias'].'-n'.$value['id'].'.htm' ?>" title=""><img alt=""
              src="<?php echo getImage($value['thumbnail'],'216','140','zc=1') ?>">
            </a>
            <div class="right-news">
              <a class="title-news" href="<?php echo base_url().$value['alias'].'-n'.$value['id'].'.htm' ?>" title="">
                <?php echo stripslashes($value['title']); ?></a>
                <span class="date-time"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo date('h:i d-m-Y',$value['create_time']); ?></span>
                <div class="summary-news">
                  <?php echo stripslashes($value['description']); ?>
                </div>
              </div>
              <!-- right-news -->
            </div>
            <!-- End body-news -->
          </div>
          <!-- End .news -->


          <!-- End .news -->




        </div>
        <!--End box-news-list-->
        <?php }
      }
    }
    ?>
    
    
  </div>
  <div class="pagination">
    <ul class="pagination justify-content-center">
     <?php 
     if ($this->data['pagination']) {
      echo $this->data['pagination'];
    }
    ?>
  </ul>
</div>
</div>
<div class="col-md-4">
  <?php require_once DIR_TMP ."/themes/widget.php";?>
</div>
</div>
