<div class="container-fuild1">
         <div class="row row1">
            
               <div class="tab" role="tabpanel">
                  <!-- Nav tabs -->
                  <ul class="nav nav-tabs tabdichvu" role="tablist">
                     <!-- <li role="presentation" class="active"><a href="#Section1" aria-controls="home" role="tab" data-toggle="tab" aria-expanded="true">1</a></li>
                     <li role="presentation" class=""><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false">2</a></li>
                     <li role="presentation" class=""><a href="#Section3" aria-controls="messages" role="tab" data-toggle="tab" aria-expanded="false">3</a></li>
                     <li role="presentation" class=""><a href="#Section4" aria-controls="messages" role="tab" data-toggle="tab" aria-expanded="false">4</a></li>
                     <li role="presentation" class=""><a href="#Section5" aria-controls="messages" role="tab" data-toggle="tab" aria-expanded="false">5</a></li>
                     <li role="presentation" class=""><a href="#Section6" aria-controls="messages" role="tab" data-toggle="tab" aria-expanded="false">6</a></li> -->
                    <?php foreach ($this->data['dichvu'] as $key => $value) { ?>
                      <?php $stt++; ?>
                     <li role="presentation" class="<?php if($key==0){ echo "active"; }?>"><a href="#Section<?php echo $value['id']; ?>" aria-controls="messages" role="tab" data-toggle="tab" aria-expanded="false"><?php echo $stt; ?></a></li>
                    <?php } ?>

                  </ul>
                  <!-- Tab panes -->
                  <div class="tab-content tabs">
                  <?php foreach ($this->data['dichvu'] as $key => $value) { ?>
                     <div role="tabpanel" class="tab-pane fade in <?php if($key==0){ echo "active"; }?>" id="Section<?php echo $value['id']; ?>">
                        <div class="container">
                            <img src="<?php echo base_url().'tmp/public/plugins/image_tools/timthumb.php?src='.$_web['base_url_cdn'].$value['images'].'&h=110&w=80&zc=2';?>" alt="">
                           <h3><?php echo $value['title']; ?></h3>
                           <p class="important_text"><?php echo $value['description']; ?></p>
                        </div>
                     </div>
                     
                    <?php } ?>
 
                  </div>
               </div>
         </div>
      </div>
<style>
   <?php foreach ($this->data['dichvu'] as $key => $value) { ?>
      div#Section<?php echo $value['id']; ?> {
    background: url(<?php echo base_url().'tmp/public/plugins/image_tools/timthumb.php?src='.$_web['base_url_cdn'].$value['background'].'&h=410&w=1170&zc=1';?>);
    background-repeat: no-repeat;
    background-size: 100%;
    width: 100%;
    height: 100%;
}
  <?php } ?>

</style>