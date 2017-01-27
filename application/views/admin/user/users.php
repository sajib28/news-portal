<div class="page-content">
    <!-- BEGIN PAGE CONTENT-->

    <div class="row">
        <div class="col-md-12">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                       Users Table&nbsp;<a class="btn green" href="<?php echo base_url();?>super_admin/add_user">Add User</a>
                    </div>
                </div>

                <!--start table-->

                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Serial No</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Created date</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Serial No</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Created date</th>
                            <th>Status</th>
                            <th>Action</th>

                        </tr>
                    </tfoot>
                    <tbody>
                        <?php

                        $i = 0;
                        foreach ($all_users as $v_users){
                            
                            $i++;
                        ?>   
                        <tr>

                            <td><input type="checkbox" name="check"/>&nbsp;<?php echo $i?></td>
                            <td><?php echo $v_users->first_name;?></td>
                            <td><?php echo $v_users->last_name;?></td>
                            <td><?php echo $v_users->email;?></td>
                            <td><?php 
                            $password= substr($v_users->password, 0, 15);
                            echo $password;
                            ?>
                           </td>
                            <td><?php echo $v_users->created_date;?></td>
                             <td><?php echo $v_users->status;?></td>
                             <td>
                                <a class="btn green" href="<?php echo base_url();?>super_admin/edit_user/<?php echo $v_users->id;?>">Edit</a>
                                <a onclick="return confirm('Are you sure');" class="btn btn-danger" href="<?php echo base_url();?>super_admin/delete_user/<?php echo $v_users->id;?>">Delete </a>
                            </td>

                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>                        
                <!--End table-->
            </div>
        </div>
    </div>
    <!-- END PAGE CONTENT-->
</div>
