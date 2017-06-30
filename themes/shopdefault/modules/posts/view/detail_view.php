<div class="row">
<!-- Blog Post Content Column -->
    <div class="col-lg-8">


        <!-- Blog Post -->

        <!-- Title -->
        <h1><?php echo stripslashes($this->data['data_posts']['title']);?></h1>

        <!-- Author -->
        <p class="lead">
            by <a href="#"><?php echo $this->data['data_posts']['username'];?></a>
        </p>

        <hr>

        <!-- Date/Time -->
        <p><span class="glyphicon glyphicon-time"></span> Posted on <?php echo date('H:i:s d-m-Y',$this->data['data_posts']['create_time']);?></p>

        <hr>

        <!-- Preview Image -->
        <img class="img-responsive" src="<?php echo getImage($this->data['data_posts']['thumbnail'],'720','242','zc=2'); ?>" alt="<?php echo stripslashes($this->data['data_posts']['title']);?>">

        <hr>

        <!-- Post Content -->
        <p class="lead"><?php echo html_entity_decode($this->data['data_posts']['content']);?></p>
        

        <hr>

        <?php 
        if ($_web['options']['comment']!=0) { ?>
            <!-- Blog Comments -->

            <!-- Comments Form -->
            <div class="well">
                <h4>Leave a Comment:</h4>
                <form method="post">
                    <div class="form-group">
                        <label>Username:</label>
                        <input class="form-control" type="text" name="username" />
                        <input type="hidden" name="_token" value="<?php echo $this->data['_token'];?>">
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input class="form-control" type="email" name="email" />
                    </div>
                    <div class="form-group">
                        <label>Bình luận:</label>
                        <textarea class="form-control" name="comment" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
            </div>

            <hr>

            <!-- Posted Comments -->
            <!-- Comment -->
            <?php 
            if (!empty($this->data['data_comment'])) { 
                foreach ($this->data['data_comment'] as $key => $value) { ?>
                    <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="http://placehold.it/64x64" alt="">
                    </a>
                    <div class="media-body">
                        <h4 class="media-heading"><?php echo $value['username'];?>
                            <small><?php echo date('H:i:s d/m/Y',$value['create_time']);?></small>
                        </h4>
                        <?php echo $value['content'];?>
                    </div>
                </div>
            <?php 
                }
            }

            ?>
            <!-- Comment -->

        <?php 
        }
         ?>

        

    </div>

    <!-- Blog Sidebar Widgets Column -->
    <div class="col-md-4">
        <?php require_once DIR_TMP ."/themes/widget.php";?>
    </div>
</div>