<div class="page-content">
    <!-- BEGIN PAGE CONTENT-->

    <div class="row">
        <div class="col-md-12">
            <div class="portlet light bordered">

                <div class="portlet-title">
                    <div class="caption">
                        Add Category
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
                    
                    <form action="<?php echo base_url(); ?>super_admin/save_category" method="post" class="">
                        <div class="row">
                            <div class="col-md-8 form-group">
                                <label class="control-label">Category Name</label>
                                <input type="text" name="category_name" class="form-control" placeholder="Enter category">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 form-group">
                                <label class="control-label">Category Description</label>
                                <textarea class="form-control" name="category_description" rows="6" placeholder="Type Description"></textarea>
                                

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
                                    <button type="submit" class="btn green">Add Category</button>
                                </div>
                            </div></div>
                    </form>

                </div>
                <!--End form-->
            </div>
        </div>
    </div>
    <!-- END PAGE CONTENT-->
</div>
