<div class="page-content">
    <!-- BEGIN PAGE CONTENT-->

    <div class="row">
        <div class="col-md-12">
            <div class="portlet light bordered">

                <div class="portlet-title">
                    <div class="caption">
                        Edit Category <a class="btn green" href="#" onClick="history.go(-1); return false;"><i class="fa fa-caret-left" aria-hidden="true"></i> Back</a>
                    </div>
                </div>

                <div class="portlet-body">
                    <!--start form-->
                   
                    <form name="edit-category-form" action="<?php echo base_url(); ?>super_admin/update_category" method="post" class="">
                        <div class="row">
                            <div class="col-md-8 form-group">
                                <label class="control-label">Category Name</label>
                                <input type="text" name="category_name" class="form-control" placeholder="Enter category" value="<?php echo $category_info->category_name;?>">
                                <input type="hidden" name="id" class="form-control" placeholder="Enter category" value="<?php echo $category_info->id;?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 form-group">
                                <label class="control-label">Category Description</label>
                                <textarea class="form-control" name="category_description" rows="6"><?php echo $category_info->category_description;?></textarea>
                                

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
                                    <button type="submit" class="btn green">Update Category</button>
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
document.forms['edit-category-form'].elements['status'].value='<?php echo $category_info->status;?>';
</script>

    