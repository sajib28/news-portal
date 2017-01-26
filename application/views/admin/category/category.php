<div class="page-content">
    <!-- BEGIN PAGE CONTENT-->

    <div class="row">
        <div class="col-md-12">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-globe"></i>Category table&nbsp;<a class="btn green" href="<?php echo base_url();?>super_admin/add_category">Add Category</a>
                    </div>
                </div>

                <!--start table-->

                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Serial No</th>
                            <th>Name</th>
                            <th>Category description</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Serial No</th>
                            <th>Name</th>
                            <th>Category description</th>
                            <th>Status</th>
                            <th>Action</th>

                        </tr>
                    </tfoot>
                    <tbody>
                        <?php
                        $i = 0;
                        foreach ($all_category as $v_category){
                            
                            $i++;
                        ?>   
                        <tr>

                            <td><input type="checkbox" name="check"/>&nbsp;<?php echo $i?></td>
                            <td><?php echo $v_category->category_name;?></td>
                            <td><?php echo $v_category->category_description;?></td>
                          <?php  if($v_category->status == 1){ ?>
                            <td>Published</td>
                          <?php } 
                            else{
                                ?>
                               <td>Unpublished</td>
                            <?php 
                            }
                            ?>
                            <td>
                                <?php  if($v_category->status == 1){ ?>
                                <a class="btn btn-danger" href="<?php echo base_url();?>super_admin/unpublished_category/<?php echo $v_category->id;?>"><i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i></a>
                                <?php } 
                            else{
                                ?>
                               <a class="btn green" href="<?php echo base_url();?>super_admin/published_category/<?php echo $v_category->id;?>"><i class="fa fa-arrow-circle-o-up" aria-hidden="true"></i></a>
                            <?php 
                            }
                            ?>
                                
                                <a class="btn green" href="<?php echo base_url();?>super_admin/edit_category/<?php echo $v_category->id;?>">Edit</a>
                                <a onclick="return confirm('Are you sure');" class="btn btn-danger" href="<?php echo base_url();?>super_admin/delete_category/<?php echo $v_category->id;?>">Delete </a>
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
