<div class="uk-container uk-container-center">
        <div class="uk-grid">
            <div class="uk-width-medium-7-10">
                <div class="title-news">
                    Bài viết
                </div>
                    <div class="uk-grid">
               
                <?php if (isset($this->data['data'])) { 
                  foreach ($this->data['data'] as $key => $v) { 
                    ?>
                  
            <div class="uk-width-medium-1-3">
                <div class="box-news-trang-con">
                    <a href="<?php echo $v['alias'].'-n'.$v['id'].'.htm' ?>""><img src="<?php echo getImage($v['thumbnail'],'256','196','zc=1') ?>" width="100%" alt=""></a>
                    <h1><?php echo stripslashes($v['title']);?></h1>
                    <p><?php echo stripslashes($v['description']);?></p>
                    <div class="more-news">
                        <a href="<?php echo $v['alias'].'-n'.$v['id'].'.htm' ?>">more info &gt;&gt;</a>
                    </div>
                </div>
            </div>
                   
           <?php }} ?>
           <div class="uk-width-medium-1-1">
            <?php if ($this->data['pagination']) {
                        echo $this->data['pagination'];
                    } ?>
                         </div>
             </div>
            </div>
            <div class="uk-width-medium-3-10">
                <div class="news-right">
                    <div class="title-primary">
                        Bài viết nổi bật
                    </div>

                     <?php if (isset($this->data['post_noibat'])) { 
                  foreach ($this->data['post_noibat'] as $key => $v) { 
                    ?>
                    <div class="tin-con">
                        <div class="uk-grid">
                            <div class="uk-width-medium-1-3">
                                <a href="<?php echo $v['alias'].'-n'.$v['id'].'.htm' ?>""><img src="<?php echo getImage($v['thumbnail'],'81','62','zc=1') ?>" alt=""></a>
                            </div>
                            <div class="uk-width-medium-2-3">
                                <a href="<?php echo $v['alias'].'-n'.$v['id'].'.htm' ?>""><?php echo stripslashes($v['title']);?></a>
                                <p><?php echo stripslashes($v['description']);?></p>
                            </div>
                        </div>
                    </div>
                  <?php }} ?>
                   
                </div>
            </div>
      
        </div>
    </div>