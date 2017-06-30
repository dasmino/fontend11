<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="dashboard-breadcrumb">
        <div class="pull-left">
            <ol class="breadcrumb">
                <li><a href=""><i class="fa fa-home" aria-hidden="true"></i> <?php echo lang('dashboard'); ?></a></li>
                <li><?php echo lang('administrator'); ?></li>
                <li class="active"><?php echo lang('user_manager'); ?></li>
            </ol>

        </div>
        <div class="pull-right">
            <a class="btn-main with-icon" data-toggle="modal" data-target="#widget_manager" href="#"></a>
        </div>
        <div class="clearfix"></div>
    </div>
</section>
<section>
    <div class="row">
        <div class="col-md-12">
            <?php 
            if (isset($this->data['flash_success'])) {
                echo '<div class="alert alert-success">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>'.lang('success').'</strong> '.$this->data['flash_success'].'
            </div>';
            }else if(isset($this->data['flash_warning'])){
                echo '<div class="alert alert-warning">
                <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                <strong>'.lang('warning').'</strong> '.$this->data['flash_warning'].'
            </div>';
            }
            ?>
        </div>
    </div>
</section>
<!-- Main content -->
<form action="<?php echo base_url().'users/grouppermission/update'?>" method="post" id="form-uploads-ajax">
<input type="hidden" name="id_posts" value="<?php if(isset($this->data['data']['id'])) echo $this->data['data']['id'];?>">
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-md-9" style="min-height:750px;">
        <div class="nav-tabs-custom">
            <!-- Tabs within a box -->
            <ul class="nav nav-tabs">
                <li class="active" style="width: 100%;"><a href="#revenue-chart" data-toggle="tab" aria-expanded="true"></a></li>
            </ul>
            <div class="tab-content no-padding">
                <!-- Morris chart - Sales -->
                <div class="chart tab-pane active" id="revenue-chart" style="position: relative;">
                    <div class="col-xs-12">
                        <!-- tabs left -->
                          <div class="col-xs-3">
                            <ul class="nav nav-tabs tabs-left sideways" style="margin-bottom: 20px;">
                            <?php foreach ($this->data['getListPermission'] as $key => $value) { 
                                if($value['parent_id'] == 0){?>
                                <li <?php if($key == 0){echo 'class="active"';} ?>>
                                    <a href="#tab_<?php echo $key;?>" data-toggle="tab"><?php echo $value['name'];?></a>
                                </li>
                            <?php }} ?>
                            </ul>
                        </div>
                        <div class="col-xs-9">
                            <div class="tab-content">
                            <?php $data = $this->data['getListPermission'];
                            foreach ($this->data['getListPermission'] as $key => $value) { 
                                if($value['parent_id'] == 0){?>
                                <div class="tab-pane <?php if($key == 0){echo 'active';} ?>" id="tab_<?php echo $key; ?>">
                                    <?php foreach ($data as $k => $v) { 
                                        if($value['id'] == $v['parent_id']){ ?>
                                        <div class="col-md-6">
                                            <span><?php echo $v['name']; ?>:</span>
                                        </div>
                                        <div class="col-md-6">
                                            <?php if($this->data['data']['id']){ ?>
                                            <input type="radio" name="permission_id[<?php echo $v['id']; ?>]" value="co" <?php if(preg_match("/," . $v['id']. ",/", $this->data['data']['permission_id'], $matches)){ echo 'checked';} ?>> Có &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="radio" name="permission_id[<?php echo $v['id']; ?>]" value="khong" <?php if(preg_match("/," . $v['id']. ",/", $this->data['data']['permission_id'], $matches) == FALSE){echo 'checked';} ?>> Không
                                            <?php }else{ ?>
                                            <input type="radio" name="permission_id[<?php echo $v['id']; ?>]" value="co"> Có &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            <input type="radio" name="permission_id[<?php echo $v['id']; ?>]" value="khong" checked> Không
                                            <?php } ?>
                                        </div>
                                    <?php }} ?>
                                </div>
                            <?php }} ?>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <!-- /tabs -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-file-image-o" aria-hidden="true"></i> Phân quyền
            </div>
            <div class="panel-body">
                <div class="form-group ">
                    <label for="name" class="control-label required"><?php echo lang('title');?></label>
                    <input class="form-control" id="name" placeholder="<?php echo lang('maximum_pages'); ?>" value="<?php if(isset($this->data['data']['name'])) echo $this->data['data']['name']; ?>" name="name" type="text" required>
                </div>
                <div class="form-group ">
                    <label for="name" class="control-label required"><?php echo lang('description');?></label>
                    <textarea class="form-control" rows="4" id="description" placeholder="<?php echo lang('description_required');?>" data-counter="300" name="description" cols="50"><?php if(isset($this->data['data']['description'])) echo stripslashes($this->data['data']['description']); ?></textarea>
                </div>
            </div>
        </div>
        <div class="sidebar-box">
            <div class="form-group">
                <div class="form-actions">
                    <div class="btn-set">
                        <button type="submit" name="submit" value="save" class="btn btn-info"><i class="fa fa-save"></i> <?php echo lang('save_one');?></button>
                        <button type="submit" name="submit" value="apply" class="btn btn-success"><i class="fa fa-check-circle"></i> <?php echo lang('save_one');?> &amp; <?php echo lang('add_one');?></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.row -->
<!-- Main row -->

</section>
<!-- /.content -->
</form>
</div>