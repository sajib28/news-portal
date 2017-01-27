<div class="page-content">
    <!-- BEGIN PAGE CONTENT-->

    <div class="row">
        <div class="col-md-12">
            <div class="portlet light bordered">

                <div class="portlet-title">
                    <div class="caption">
                        Edit Country <a class="btn green" href="#" onClick="history.go(-1); return false;"><i class="fa fa-caret-left" aria-hidden="true"></i> Back</a>
                    </div>
                </div>

                <div class="portlet-body">
                    <!--start form-->
                   
                    <form name="edit-country-form" action="<?php echo base_url(); ?>super_admin/update_country" method="post" class="">
                        <div class="row">
                            <div class="col-md-8 form-group">
                                <label class="control-label">Category Name</label>
                                <input type="text" name="country_name" class="form-control" placeholder="Enter country" value="<?php echo $country_info->country_name;?>">
                                <input type="hidden" name="id" class="form-control" placeholder="Enter country" value="<?php echo $country_info->id;?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 form-group">
                                <label class="control-label">Category Code</label>
                                <textarea class="form-control" name="country_code" rows="6"><?php echo $country_info->country_code;?></textarea>
                                

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
                                    <button type="submit" class="btn green">Update Country</button>
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
document.forms['edit-country-form'].elements['status'].value='<?php echo $country_info->status;?>';
</script>

    