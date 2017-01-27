<div class="page-content">
    <!-- BEGIN PAGE CONTENT-->

    <div class="row">
        <div class="col-md-12">
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption">
                    News table&nbsp;<a class="btn green" href="<?php echo base_url();?>super_admin/add_news">Add News</a>
                    </div>
                </div>

                <!--start table-->

                <table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Serial No</th>
                            <th>Title</th>
                            <th>Link</th>
                            <th>Categoy</th>
                            <th>Location</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                   
                    <tbody>
                        <?php
                        $i = 0;
                        foreach ($all_news as $v_news){
                            
                            $i++;
                        ?>   
                        <tr>

                            <td><input type="checkbox" name="check"/>&nbsp;<?php echo $i?></td>
                            <td><?php echo $v_news->news_title;?></td>
                            <td><?php 
                            $link = $v_news->news_link;
                             echo substr($link, 0, 15).'...';
                             ?>

                        </td>
                            <td><?php echo $v_news->category_name.' (' .$v_news->id. ') ';?></td>
                            <td><?php echo $v_news->country_name;?></td>
                             <td><img src="<?php echo base_url();?><?php echo $v_news->news_image;?>" alt="news Image"></td>
                          <?php  if($v_news->news_status == 1){ ?>
                            <td>Published</td>
                          <?php } 
                            else{
                                ?>
                               <td>Unpublished</td>
                            <?php 
                            }
                            ?>
                            
                            
                            <td>
                                <?php  if($v_news->news_status == 1){ ?>
                                <a class="btn btn-danger" href="<?php echo base_url();?>super_admin/unpublished_news/<?php echo $v_news->id;?>"><i class="fa fa-arrow-circle-o-down" aria-hidden="true"></i></a>
                                <?php } 
                            else{
                                ?>
                               <a class="btn green" href="<?php echo base_url();?>super_admin/published_news/<?php echo $v_news->id;?>"><i class="fa fa-arrow-circle-o-up" aria-hidden="true"></i></a>
                            <?php 
                            }
                            ?>
                                
                                <a class="btn green" href="<?php echo base_url();?>super_admin/edit_news/<?php echo $v_news->id;?>">Edit</a>
                                <a onclick="return confirm('Are you sure');" class="btn btn-danger" href="<?php echo base_url();?>super_admin/delete_news/<?php echo $v_news->id;?>">Delete </a>
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
