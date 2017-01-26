
<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                  <?php
                     
                    foreach ($categories as $category) {
                        if (!empty($category->subs)) {
                        ?>
                
               
                        <div class="col-lg-6">
                            
                            <div class="news">
                                <h2><?php echo $category->category_name; ?></h2>
                                   

                                <?php
                                if (!empty($category->subs)) {

                                    foreach ($category->subs as $sub) {
                                        ?>
                                        <div class="news-content">
                                            <div class="news-pic">
                                                <a href="#">
                                                    <img src="<?php echo base_url(); ?>/uploads/avatar2.jpg" ></a>
                                                
                                            </div>
                                            <div class="news-details">
                                                <h3 class=""><a href="<?php echo $sub->news_link; ?>" target="_blank"><?php echo $sub->news_title; ?></a></h3>

                                                <p><?php 
                                                $link = $sub->news_description;
                                                echo substr($link, 0, 200);
                                                
                                                
                                                ?></p><span>View: <?php echo $sub->news_view_count.' | '; ?></span>
                                                <span><?php echo $sub->author_name.' | ';?><?php
                                                $originalDate = $sub->news_created_date;
                                                   $newDate = date("M d Y", strtotime($originalDate));
                                                echo $newDate; ?></span>
                                            </div>
                                        </div>

        <?php
        }
    }
                    
    ?>


                            </div>


                        </div>
                     

              
                <?php }} ?>
            </div>
            <!-- divider -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="solidline">
                    </div>
                </div>
            </div>

        </div>
</section>