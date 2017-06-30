<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="dashboard-breadcrumb">
        <div class="pull-left">
            <ol class="breadcrumb">
            <li><a href="<?php echo base_url().'home/home/index'; ?>"><i class="fa fa-home" aria-hidden="true"></i> <?php echo lang('dashboard'); ?></a></li>
            <li class="active"><?php echo lang('settings'); ?></li>
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
      
      <!-- Main row -->
      <div class="row">
        <!-- left col -->
        <div class="col-md-12">
        <?php 
            if (isset($this->data['success'])) { ?>

                <div class="alert alert-success">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong><?php echo lang('success');?>!</strong> <?php echo $this->data['success'];?>
                </div>

        <?php } ?>
        <?php 
        if (isset($this->data['flash_warning'])) {
            echo '<div class="alert alert-warning">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong>'.lang('warning').'</strong> '.$this->data['flash_warning'].'
                    </div>';
        }
        ?>
        </div>
        <section class="col-lg-12">
          <!-- solid sales graph -->
          <div class="box box-solid bg-teal-gradient">
            <div class="box-header">
              <i class="fa fa-cog" aria-hidden="true"></i>
              <h3 class="box-title"> <?php echo lang('manage_send_mailer'); ?></h3>

            </div>
             <!-- Custom tabs (Charts with tabs)-->
              <div class="nav-tabs-custom">
                <div class="tab-content no-padding">

                  <br>
                  <div class="box-setting-info tab-pane active" id="revenue-chart" style="position: relative; min-height: 736px;">
                      <form action="" method="post">
                      <div class="col-md-12 col-sm-12 col-xs-12">
                      <div>
                          <div class="box-body">
                              <div class="form-group ">
                                  <label for="email_mailler" class="control-label required">Tài khoản:</label>
                                  <input class="form-control" id="email_mailler" placeholder="<?php echo lang('maximum_posts'); ?>" value="<?php if(isset($this->data['options']['email_mailler'])) echo stripslashes($this->data['options']['email_mailler']); ?>" name="email_mailler" type="text">
                                </div>
                                <div class="form-group ">
                                  <label for="email_pass" class="control-label required">Mật khẩu:</label>
                                  <input class="form-control" id="email_pass" placeholder="<?php echo lang('maximum_posts'); ?>" value="<?php if(isset($this->data['options']['email_pass'])) echo stripslashes($this->data['options']['email_pass']); ?>" name="email_pass" type="password">
                                </div>
                                <div class="form-group">
                                  <label for=""><?php echo lang('manage_send_mailer_active');?></label><br />
                                  <input id="switch-size" type="checkbox" checked data-size="mini" name="sendmail" data-check="<?php echo ($this->data['options']['email_check']==0) ? 'false' : 'true';?>"/>
                                </div>

                          </div>
                          <!-- /.box-body -->
                      </div>
                      <!-- /.box -->
                  </div>
                  <div class="clearfix"></div>
                    <!-- / SAVE -->
                    <div class="col-md-12 col-sm-12 col-xs-12 no-padding" style="text-align: center;margin-bottom: 20px;">
                      <button type="submit" name="ok" class="btn btn-info">
                      <i class="fa fa-save"></i>
                      <?php echo lang('save');?></button>
                    </div>
                    <!-- / END SAVE -->

                    </form>
                  <div style="clear: both;"></div>
                  </div>
                </div>
              </div>
              <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.box -->

        </section>
        <!-- END LEFT COL -->
      </div>
      <!-- /.row (main row) -->
    </section>
    <!-- /.content -->
</div>
<div class="loading"></div>
<div class="fade_loading"></div>