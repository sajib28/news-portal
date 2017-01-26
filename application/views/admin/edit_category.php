<div class="page-content">
    <!-- BEGIN PAGE CONTENT-->

    <div class="row">
        <div class="col-md-12">
            <div class="portlet light bordered">

                <div class="portlet-title">
                    <div class="caption">
                        Edit Category
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
                                <textarea class="ckeditor form-control" name="category_description" rows="6" data-error-container="#editor2_error"><?php echo $category_info->category_description;?></textarea>
                                <div id="editor2_error">
                                </div>

                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-8 form-group">
                                <label class="control-label">News Category</label>
                                <select name="category_id" class="form-control">
                                    <option>Select Category Name</option>
                                    <?php foreach ($all_publish_category as $v_category){
                                   
                                       ?> 
                                    <option value="<?php echo $v_category->id;?>"><?php echo $v_category->category_name;?></option>
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
                                    <button type="submit" class="btn green">Update</button>
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

    