<div class="page-content">
    <!-- BEGIN PAGE CONTENT-->

    <div class="row">
        <div class="col-md-12">
            <div class="portlet light bordered">

                <div class="portlet-title">
                    <div class="caption">
                        Add Country <a class="btn green" href="#" onClick="history.go(-1); return false;"><i class="fa fa-caret-left" aria-hidden="true"></i> Back</a>
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
                    
                    <form action="<?php echo base_url(); ?>super_admin/save_country" method="post" class="">
                        <div class="row">
                            <div class="col-md-8 form-group">
                                <label class="control-label">Country Name</label>
                                <input type="text" name="country_name" class="form-control" placeholder="Enter country">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 form-group">
                                <label class="control-label">Country Code</label>
                                <input type="text" name="country_code" class="form-control" placeholder="Enter country Code">

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
                                    <button type="submit" class="btn green">Add Country</button>
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
