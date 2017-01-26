<div class="page-content">
    <!-- BEGIN PAGE CONTENT-->

    <div class="row">
        <div class="col-md-12">
            <div class="portlet light bordered">

                <div class="portlet-title">
                    <div class="caption">
                        Add Project
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

                    <form action="<?php echo base_url(); ?>super_admin/save_project" method="post" class="" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-8 form-group">
                                <label class="control-label">project Name</label>
                                <input type="text" name="project_name" class="form-control" placeholder="Enter Title">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 form-group">
                                <label class="control-label">Image</label>
                                <input type="file" name="project_image" class="form-control" placeholder="Enter Title">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 form-group">
                                <label class="control-label">project Url</label>
                                <input type="text" name="project_url" class="form-control" placeholder="Enter Title">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 form-group">
                                <label class="control-label">Project Category</label>
                                <select name="project_category_id" class="form-control">
                                    <option>Select Project Category</option>
                                    <?php foreach ($all_publish_project_category as $v_project_category){
                                   
                                       ?> 
                                    <option value="<?php echo $v_project_category->id;?>"><?php echo $v_project_category->category_name;?></option>
                                     <?php
                                    }

                                    ?>
                                    
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 form-group">
                                <label class="control-label">Publish Status</label>
                                <select name="status" class="form-control">
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
