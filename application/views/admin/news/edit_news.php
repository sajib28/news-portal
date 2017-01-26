<div class="page-content">
    <!-- BEGIN PAGE CONTENT-->

    <div class="row">
        <div class="col-md-12">
            <div class="portlet light bordered">

                <div class="portlet-title">
                    <div class="caption">
                        Edit News
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
                   
                    <form name="edit-news-form" action="<?php echo base_url(); ?>super_admin/update_news" method="post" class="">
                        <div class="row">
                            <div class="col-md-8 form-group">
                                <label class="control-label">News Title</label>
                                <input type="text" name="news_title" class="form-control" value="<?php echo $update_news_info->news_title;?>">
                                <input type="hidden" name="id" class="form-control" value="<?php echo $update_news_info->id;?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 form-group">
                                <label class="control-label">News Description</label>
                                <textarea class="form-control" name="news_description" rows="6"><?php echo $update_news_info->news_description;?></textarea>
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 form-group">
                                <label class="control-label">News Category</label>
                                <select name="category_id" class="form-control">
                                    <option>Select Category Name</option>
                                    <?php

                                    foreach ($all_publish_category as $v_category){
                                   
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
                              <label class="control-label">News Link</label>
                                <input class="form-control" name="news_link" value="<?php echo $update_news_info->news_link;?>">
                            </div>  
                        </div>

                        <div class="row">
                            <div class="col-md-8 form-group">
                                <label class="control-label">Image</label>
                                <input type="file" name="news_image" class="form-control">
                                <br>
                                <img src="<?php echo base_url();?><?php echo $update_news_info->news_image;?>" alt="News Image">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 form-group">
                                <label class="control-label">Publish Status</label>
                                <select name="news_status" class="form-control">
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
document.forms['edit-news-form'].elements['news_status'].value='<?php echo $update_news_info->news_status;?>';
document.forms['edit-news-form'].elements['category_id'].value='<?php echo $update_news_info->category_id;?>';
</script>

    