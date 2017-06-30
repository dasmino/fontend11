<div id="body-main" class="col-md-12">

<?php  if (isset($this->data['body_theme']->session_bottom)) {
    $array = get_object_vars($this->data['body_theme']->session_bottom);
    $properties = array_keys($array);
    if($this->data['body_theme']->session_bottom->col == 3){
        $class_session_bottom = "col-md-4";
    }else if($this->data['body_theme']->session_bottom->col == 2){
        $class_session_bottom = "col-md-6";
    }else{
        $class_session_bottom = "col-md-12";
    }
?>
    <h3 style='text-align: center;'>Session Bottom</h3>
    <div class="<?php echo $class_session_bottom; ?>">
        <div class="widget">
            <div class="widget-title opened">
                <h4>
                    <i class="fa fa-bars font-dark"></i> <?php echo $properties[0] ?>
                </h4>
            </div>
            <div class="widget-body">
                <div class="nestable-menu" id="nestable">
              
                    <ul class="dd-list dd-list-widgets droptrue" id="sortable1">
                        <li style="margin-left:20px;" class="dd-item post-item opened" id="listId_<?php echo $value['id'];?>" data-id="<?php echo $value['id'];?>">
                            <div class="dd-handle"></div>
                            <div class="dd-content">
                                <span class="text pull-left"><?php echo $properties[0] ?></span>
                                <span class="text pull-right"></span>
                                <a href="#" title="" class="show-item-details"><i class="fa fa-angle-down"></i></a>
                                <div class="clearfix"></div>
                            </div>
                            <div class="item-details">
                                <div class="text-right button_update_widgets">
                                    <a href="#" class="btn btn-info btn-sm btn-update-widget">
                                        <i class="fa fa-retweet" aria-hidden="true"></i>&nbsp;
                                        <?php echo lang('update');?></a>

                                    <a href="#" class="btn btn-danger btn-sm btn-remove-widget">
                                            <i class="fa fa-times" aria-hidden="true"></i>&nbsp;
                                            <?php echo lang('remove_widget');?></a>

                                    <a href="#" class="btn btn-success btn-sm btn-cancel-widget"><?php echo lang('cancel');?></a>
                                </div>
                            </div>
                        </li>
                      
                    </ul>
                    <br style="clear:both">
                </div>
            </div>
        </div>
    </div>
        <div class="<?php echo $class_session_bottom; ?>">
        <div class="widget">
            <div class="widget-title opened">
                <h4>
                    <i class="fa fa-bars font-dark"></i> <?php echo $properties[1] ?>
                </h4>
            </div>
            <div class="widget-body">
                <div class="nestable-menu" id="nestable">
               
                    <ul class="dd-list dd-list-widgets droptrue" id="sortable3">
                  
                        <li style="margin-left:20px;" class="dd-item post-item opened" id="listId_<?php echo $value['id'];?>" data-id="<?php echo $value['id'];?>">
                            <div class="dd-handle"></div>
                            <div class="dd-content">
                                <span class="text pull-left"><?php echo $properties[1] ?></span>
                                <span class="text pull-right"></span>
                                <a href="#" title="" class="show-item-details"><i class="fa fa-angle-down"></i></a>
                                <div class="clearfix"></div>
                            </div>
                            <div class="item-details">
                                <div class="text-right button_update_widgets">
                                    <a href="#" class="btn btn-info btn-sm btn-update-widget">
                                        <i class="fa fa-retweet" aria-hidden="true"></i>&nbsp;
                                        <?php echo lang('update');?></a>

                                    <a href="#" class="btn btn-danger btn-sm btn-remove-widget">
                                            <i class="fa fa-times" aria-hidden="true"></i>&nbsp;
                                            <?php echo lang('remove_widget');?></a>

                                    <a href="#" class="btn btn-success btn-sm btn-cancel-widget"><?php echo lang('cancel');?></a>
                                </div>
                            </div>
                        </li>
                 
                    </ul>
                   <br style="clear:both">
                </div>
            </div>
        </div>
      
    </div>
 <div class="<?php echo $class_session_bottom; ?>">
       
        <div class="widget">
            <div class="widget-title opened">
                <h4>
                    <i class="fa fa-bars font-dark"></i> <?php echo $properties[2] ?>
                </h4>
            </div>
            <div class="widget-body">
                <div class="nestable-menu" id="nestable">
               
                    <ul class="dd-list dd-list-widgets droptrue" id="sortable3">
                  
                        <li style="margin-left:20px;" class="dd-item post-item opened" id="listId_<?php echo $value['id'];?>" data-id="<?php echo $value['id'];?>">
                            <div class="dd-handle"></div>
                            <div class="dd-content">
                                <span class="text pull-left"><?php echo $properties[2] ?></span>
                                <span class="text pull-right"></span>
                                <a href="#" title="" class="show-item-details"><i class="fa fa-angle-down"></i></a>
                                <div class="clearfix"></div>
                            </div>
                            <div class="item-details">
                                <div class="text-right button_update_widgets">
                                    <a href="#" class="btn btn-info btn-sm btn-update-widget">
                                        <i class="fa fa-retweet" aria-hidden="true"></i>&nbsp;
                                        <?php echo lang('update');?></a>

                                    <a href="#" class="btn btn-danger btn-sm btn-remove-widget">
                                            <i class="fa fa-times" aria-hidden="true"></i>&nbsp;
                                            <?php echo lang('remove_widget');?></a>

                                    <a href="#" class="btn btn-success btn-sm btn-cancel-widget"><?php echo lang('cancel');?></a>
                                </div>
                            </div>
                        </li>
                 
                    </ul>
                   <br style="clear:both">
                </div>
            </div>
        </div>
      
    </div>
<?php }else{
    echo 'khong co du lieu';
}?>
</div>