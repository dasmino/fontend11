<div class="uk-container uk-container-center">
        <div class="uk-grid">
            <div class="uk-width-medium-1-1">
                <div class="title-news">
                    ROOM &amp; RATE
                </div>
            </div>

            <?php if(isset($this->data['data'])){
            	foreach ($this->data['data'] as $key => $v) { ?>
            <div class="uk-width-medium-1-4">
                <div class="box-tour">
                    <a href="<?php echo base_url().'product/'.$v['alias'].'-'.$v['id'].'.htm' ?>"><img src="<?php echo getImage($v['image'],'244','187','zc=1') ?>" width="100%" alt=""></a>
                    <p><?php echo $v['name']; ?></p>
                    <p><span>USD $<?php echo $v['price']; ?></span></p>
                    <div class="more-tour">
                        <a href="<?php echo base_url().'product/'.$v['alias'].'-'.$v['id'].'.htm' ?>">more info &gt;&gt;</a>
                    </div>
                </div>
            </div>
           <?php }} ?>

            <div class="uk-width-medium-1-1">
                <div class="paging">
                    <a href="">1</a>
                    <a href="">2</a>
                    <a href="">3</a>
                    <a href="">Trang sau</a>
                </div>
            </div>
        </div>
    </div>