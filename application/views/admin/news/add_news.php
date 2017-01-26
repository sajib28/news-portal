<div class="page-content">
    <!-- BEGIN PAGE CONTENT-->

    <div class="row">
        <div class="col-md-12">
            <div class="portlet light bordered">

                <div class="portlet-title">
                    <div class="caption">
                        Add News <a class="btn green" href="#" onClick="history.go(-1); return false;"><i class="fa fa-caret-left" aria-hidden="true"></i> Back</a>
                    
                    
                    </div>
                </div>

                <div class="portlet-body">
                    <!--start form-->
                    <?php
                    $msg = $this->session->userdata('message');
                    if ($msg) {
                        ?>
                        <div class="alert alert-success">
                            <button class="close" data-close="alert"></button>
                            <span>
                                <?php
                                echo $msg;
                                $this->session->unset_userdata('message');
                                ?>
                            </span>
                        </div>
                    <?php } ?>

                    <form action="<?php echo base_url(); ?>super_admin/save_news" method="post" class="" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-8 form-group">
                                <label class="control-label">News title</label>
                                <input type="text" name="news_title" class="form-control" placeholder="Enter Title">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 form-group">
                                <label class="control-label">News Description</label>
                                <textarea class="form-control" name="news_description" rows="6"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 form-group">
                                <label class="control-label">News Category</label>
                                <select name="category_id" class="form-control">
                                    <option>Select Category Name</option>

                                    <?php
                                    print_r($all_publish_category);
                                    foreach ($all_publish_category as $v_category){
                                       ?>
                                    <option value="<?php echo $v_category->id;?>">
                                        <?php echo $v_category->category_name;?>
                                    </option>
                                     <?php
                                    }

                                    ?>
                                    
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 form-group">
                                <label class="control-label">News Link</label>
                                <input class="form-control" name="news_link" placeholder="Enter Link">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 form-group">
                                <label class="control-label">Image</label>
                                <input type="file" name="news_image" class="form-control" placeholder="Enter Title">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 form-group">
                                <label class="control-label">Publish Status</label>
                                <select name="news_status" class="form-control">
                                    <option>Select status</option>
                                    <option value="1">Published</option>
                                    <option value="0">Unpublished</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">

                                <div class="form-group">
                                    <button type="submit" class="btn green">Add</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
                <!--End form-->
            </div>
        </div>
    </div>
    <!-- END PAGE CONTENT-->
</div>
