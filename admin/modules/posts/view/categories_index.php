<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="dashboard-breadcrumb">
        <div class="pull-left">
            <ol class="breadcrumb">
						<li><a href=""><i class="fa fa-home" aria-hidden="true"></i> <?php echo lang('dashboard'); ?></a></li>
						<li class="active"><?php echo lang('categories_manager'); ?></li>
			</ol>

        </div>
        <div class="pull-right">
            <a class="btn-main with-icon" data-toggle="modal" data-target="#widget_manager" href="#"></a>
        </div>
        <div class="clearfix"></div>
    </div>
    </section>
    <section class="content-header">
        <?php 
        if (isset($this->data['flash_success'])) {
            echo '<div class="alert alert-success">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong>'.lang('success').'</strong> '.$this->data['flash_success'].'
                    </div>';
        }
        ?>
        <?php 
        if (isset($this->data['flash_warning'])) {
            echo '<div class="alert alert-warning">
                      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                      <strong>'.lang('warning').'</strong> '.$this->data['flash_warning'].'
                    </div>';
        }
        ?>
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-md-12">
            <div class="nav-tabs-custom">
                <!-- Tabs within a box -->
                <ul class="nav nav-tabs">
                    <li class="active" style="width: 100%;"><a href="#revenue-chart" data-toggle="tab" aria-expanded="true"></a></li>
                </ul>
                <div class="tab-content no-padding">
                    <!-- Morris chart - Sales -->
                    <div class="chart tab-pane active" id="revenue-chart" style="position: relative;min-height: 700px;">
                               <div class="col-xs-12">
                                    <div id="datatables_filter" class="dataTables_filter">
                                        <div class="row">
                                          <div class="col-lg-4">
                                            <!-- <div class="input-group">
                                              <input type="text" class="form-control search_categories" placeholder="Search for..." value="<?php if(isset($this->data['s'])) echo $this->data['s'];?>">
                                              <span class="input-group-btn">
                                                <button class="btn btn-primary search_button_categories" type="button"><i class="fa fa-search" aria-hidden="true"></i></button>
                                              </span>
                                            </div> --><!-- /input-group -->
                                          </div><!-- /.col-lg-6 -->
                                          <div class="col-lg-4"></div>
                                          <div class="col-lg-4" style="text-align: right;">
                                            <a class="btn btn-success" href="<?php echo base_url().'posts/categories/add';?>"><i class="fa fa-plus-circle"></i> <?php echo lang('add_category');?></a>

                                            <!-- Single button -->
                                            <div class="btn-group">
                                              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <?php echo lang('action');?> <span class="caret"></span>
                                              </button>
                                              <ul class="dropdown-menu">
                                                <?php if(preg_match("/,94,/",$_SESSION['permission_id'], $matches) || $_SESSION['group_id'] == '20'){ ?>
                                                <li><a href="javascript:void(0)" id="del_list_categories"><i class="fa fa-trash-o" aria-hidden="true"></i> &nbsp;<?php echo lang('delete');?></a></li>
                                                <?php } ?>
                                                <?php if(preg_match("/,93,/",$_SESSION['permission_id'], $matches) || $_SESSION['group_id'] == '20'){ ?>
                                                <li><a href="javascript:void(0)" id="unlock_categories"><i class="fa fa-lock" aria-hidden="true"></i>&nbsp;<?php echo lang('private');?></a></li>
                                                <li><a href="javascript:void(0)" id="lock_categories"><i class="fa fa-unlock" aria-hidden="true"></i>&nbsp;<?php echo lang('public');?></a></li>
                                                <?php } ?>
                                              </ul>
                                            </div>


                                          </div><!-- /.col-lg-6 -->


                                        </div><!-- /.row -->                                        
                                    </div>


                                    </br>
                                    <table id="datatable" class="table table-striped table-bordered">
                                            <thead>
                                                <tr role="row">
                                                    <th class="table-checkbox no-sort no-search sorting_disabled" rowspan="1" colspan="1" aria-label="
                                                                    
                                                                " style="width: 44px;">
                                                        <div class="checker"><span class="">
                                                            <input type="checkbox" id="checkboxAll">
                                                        </span></div>
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" aria-label="ID: orderby asc" style="width: 50px;">
                                                        <a href=""><?php echo lang('id');?></a>
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" aria-label="
                                                                     Username
                                                                : orderby asc" style="width: 77px;">
                                                        <a href=""><?php echo lang('thumbnail');?></a>
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" aria-label="
                                                                    Email
                                                                : orderby asc" style="width: 181px;" aria-sort="ascending">
                                                        <a href=""><?php echo lang('title');?></a>
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" aria-label="Role: orderby asc" style="width: 188px;"><?php echo lang('author');?></th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" aria-label="
                                                                     Status
                                                                : orderby asc" style="width: 52px;">
                                                        <?php echo lang('status');?>
                                                    </th>
                                                    <th class="sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" aria-label="
                                                                     Created At
                                                                : orderby asc" style="width: 81px;">
                                                        <?php echo lang('created_time');?>
                                                    </th>
                                                    <th class="no-sort no-search sorting_disabled" rowspan="1" colspan="1" aria-label="
                                                                    Operations
                                                                " style="width: 92px;">
                                                        <?php echo lang('operations');?>
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                                <?php 
                                                if (!empty($this->data['data'])) {
                                                    foreach ($this->data['data'] as $key => $value) { ?>
                                                        <tr role="row" class="odd">
                                                            <td>
                                                                <div class="checker"><span>
                                                                <input type="checkbox" name="name_id[]" class="checkboxes" value="<?php echo $value['id'];?>">
                                                                </span></div>
                                                            </td>
                                                            <td><?php echo $value['id'];?></td>
                                                            <td>
                                                                <img src="<?php echo (isset($value['thumbnail']) && $value['thumbnail']!='') ? base_url_cloud().'timthumb.php?src='.base_url_cloud().'cdn/'.$value['thumbnail'].'&h=80&w=80&zc=2' : base_url().'tmp/public/plugins/image_tools/timthumb.php?src='.base_url().'tmp/public/images/img.png&h=80&w=80&zc=2'; ?>" width="80" height="80" class="img-thumbnail"/>
                                                            </td>
                                                            <td class="sorting_1"><?php echo $value['title'];?></td>
                                                            <td><?php echo $value['username']; ?></td>
                                                            <td>

                                                                <?php 
                                                                if ($value['status']!=0) { 
                                                                    echo '<i class="fa fa-check text-success"></i>';
                                                                }else{
                                                                    echo '<i class="fa fa-times-circle-o" style="color: #dd4b39;"></i>';
                                                                }
                                                                ?>
                                                            </td>
                                                            <td><?php echo date('d-m-Y',$value['create_time']);?></td>
                                                            <td>
                                                            <?php if(preg_match("/,93,/",$_SESSION['permission_id'], $matches) || $_SESSION['group_id'] == '20' || $_SESSION['id'] == $value['author_create']){ ?>
                                                              <a href="<?php echo base_url().'posts/categories/edit/'.$value['id'];?>" class="btn btn-icon btn-primary tip" data-original-title="Edit"><i class="fa fa-pencil" aria-hidden="true"></i><!--<i class="fa fa-eye"></i>--></a>&nbsp;
                                                            <?php } ?>
                                                            <?php if(preg_match("/,94,/",$_SESSION['permission_id'], $matches) || $_SESSION['group_id'] == '20' || $_SESSION['id'] == $value['author_create']){ ?>
                                                              <a data-toggle="modal" data-target="#modelDelete" data-href="<?php echo base_url().'posts/categories/del/'.$value['id'];?>" class="btn btn-icon btn-danger deleteDialog tip"><i class="fa fa-trash-o"></i></a>
                                                              <?php } ?>
                                                            </td>
                                                        </tr>
                                                <?php 
                                                    }
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                            <!-- Modal -->
                            <div id="modelDelete" class="modal fade" role="dialog">
                              <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title"><?php echo lang('notification'); ?></h4>
                                  </div>
                                  <div class="modal-body">
                                    <p><?php echo lang('delete_messager');?></p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo lang('cancel');?></button>
                                    <a href="" id="agree_del" class="btn btn-success"><?php echo lang('agree');?></a>
                                  </div>
                                </div>

                              </div>
                            </div>



                            <!-- Modal -->
                            <div id="modelDeleteAll" class="modal fade" role="dialog">
                              <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title"><?php echo lang('notification'); ?></h4>
                                  </div>
                                  <div class="modal-body">
                                    <p><?php echo lang('delete_messager');?></p>
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal"><?php echo lang('cancel');?></button>
                                    <a href="" id="agree_del_all_categories" class="btn btn-success"><?php echo lang('agree');?></a>
                                  </div>
                                </div>

                              </div>
                            </div>








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
  </div>