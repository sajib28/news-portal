<div class="page-content">
    <!-- BEGIN PAGE CONTENT-->

    <div class="row">
        <div class="col-md-12">
            <div class="portlet light bordered">

                <div class="portlet-title">
                    <div class="caption">
                        Add user <a class="btn green" href="#" onClick="history.go(-1); return false;"><i class="fa fa-caret-left" aria-hidden="true"></i> Back</a>
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
                    
                    <form action="<?php echo base_url(); ?>super_admin/save_user" method="post" class="">
                        <div class="row">
                            <div class="col-md-8 form-group">
                                <label class="control-label">First Name</label>
                                <input type="text" name="first_name" class="form-control" placeholder="Enter Firstname">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 form-group">
                                <label class="control-label">Last name</label>
                               <input type="text" name="last_name" class="form-control" placeholder="Enter Lastname">
                               
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 form-group">
                                <label class="control-label">Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Enter Email">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 form-group">
                                <label class="control-label">Password</label>
                                <input type="text" name="password" class="form-control" placeholder="Enter Password">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">

                                <div class="form-group">
                                    <button type="submit" class="btn green">Add User</button>
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
