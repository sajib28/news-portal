<div class="page-content">
    <!-- BEGIN PAGE CONTENT-->

    <div class="row">
        <div class="col-md-12">
            <div class="portlet light bordered">

                <div class="portlet-title">
                    <div class="caption">
                        Add user
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
                    
                    <form name="edit-user-form" action="<?php echo base_url(); ?>super_admin/update_user" method="post" class="">
                        <div class="row">
                            <div class="col-md-8 form-group">
                                <label class="control-label">First Name</label>
                                <input type="text" name="first_name" class="form-control" value="<?php echo $update_user_info->first_name;?>">
                                <input type="hidden" name="id" class="form-control" value="<?php echo $update_user_info->id;?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 form-group">
                                <label class="control-label">Last name</label>
                               <input type="text" name="last_name" class="form-control" value="<?php echo $update_user_info->last_name;?>">
                               
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 form-group">
                                <label class="control-label">Email</label>
                                <input type="text" name="email" class="form-control" value="<?php echo $update_user_info->email;?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 form-group">
                                <label class="control-label">Password</label>
                                <input type="text" name="password" class="form-control" value="<?php echo $update_user_info->password;?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 form-group">
                                <label class="control-label">Created Date</label>
                                <input type="text" name="created_date" class="form-control" value="<?php echo $update_user_info->created_date;?>">
                            </div>
                        </div>
                       <div class="col-md-8 form-group">
                                <label class="control-label">Publish Status</label>
                                <select name="status" class="form-control">
                                    <option>Select status</option>
                                    <option value="1">1</option>
                                    <option value="0">0</option>
                                </select>
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
<script>
document.forms['edit-user-form'].elements['status'].value='<?php echo $update_user_info->status;?>';
</script>