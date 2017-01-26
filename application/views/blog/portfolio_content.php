<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="portfolio-categ filter">
                    <li class="all active"><a href="#">All</a></li>
                    <?php 
                    foreach ($all_publish_project_category as $publish_project_category){
                     ?>
                    <li class="<?php echo $publish_project_category->category_slug;?>"><a href="#" title=""><?php echo $publish_project_category->category_name;?></a></li>
                    
                   <?php
                    }
                    ?>
                </ul>
                <div class="clearfix">
                </div>
                <div class="row">
                    <section id="projects">
                        <ul id="thumbs" class="portfolio">
                            <!-- Item Project and Filter Name -->
                            <li class="item-thumbs col-lg-3 design" data-id="id-0" data-type="web">
                                <!-- Fancybox - Gallery Enabled - Title - Full Image -->
                                <a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Portfolio name" href="<?php echo base_url();?>img/works/1.jpg">
                                    <span class="overlay-img"></span>
                                    <div class="overlay-img-thumb font-icon-plus">
									
									</div>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="<?php echo base_url();?>img/works/1.jpg" alt="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus quis elementum odio. Curabitur pellentesque, dolor vel pharetra mollis.">
                            </li>
                           
                            <!-- End Item Project -->
                        </ul>
                    </section>
                </div>
            </div>
        </div>
    </div>
</section>