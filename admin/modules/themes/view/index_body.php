<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="dashboard-breadcrumb">
        <div class="pull-left">
            <ol class="breadcrumb">
                <li><a href=""><i class="fa fa-home" aria-hidden="true"></i> <?php echo lang('dashboard'); ?></a></li>
                <li class="active"><?php echo lang('menu'); ?></li>
            </ol>

        </div>
        <div class="pull-right">
            <a class="btn-main with-icon" data-toggle="modal" data-target="#widget_manager" href="#"></a>
        </div>
        <div class="clearfix"></div>
    </div>
</section>

<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->

          
<!-- Main -->


  <div class="row widget-menu">
    <div class="col-md-12">
        <?php 
        if (isset($this->data['flash_success'])) {
            echo '<div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>'.lang('success').'</strong> '.$this->data['flash_success'].'
        </div>';
    }
    ?>
    </div>
    <div class="col-md-12">
        <div class="row">
            <?php  include DIR_MODULES . 'themes/view/header.php'; ?>
            <?php  include DIR_MODULES . 'themes/view/session-top.php'; ?>
            <?php  include DIR_MODULES . 'themes/view/main.php'; ?>
            <?php  include DIR_MODULES . 'themes/view/session-bottom.php'; ?>
            <?php  include DIR_MODULES . 'themes/view/footer.php';?>
        </div>
    </div>
  </div>
<!-- /.row -->
<!-- Main row -->

</section>
<!-- /.content -->
</div>



<div class="loading"></div>
<div class="fade_loading"></div>