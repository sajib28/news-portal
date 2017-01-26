<!-- end header -->
<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <?php foreach ($category_blog as $c_blog) {
                    ?>   

                    <article>
                        <div class="post-image">
                            <div class="post-heading">
                                <h3><a href="#"><?php echo $c_blog->title;?></a></h3>
                            </div>
                            <img src="<?php echo base_url(); ?>img/dummies/blog/img1.jpg" alt=""/>
                        </div>
                       <?php echo $c_blog->long_description;?>
                        <div class="bottom-article">
                            <ul class="meta-post">
                                <li><i class="icon-calendar"></i><a href="#"> Mar 23, 2013</a></li>
                                <li><i class="icon-user"></i><a href="#"><?php echo $c_blog->author_name;?></a></li>
                                <li><i class="icon-folder-open"></i><a href="#">Blog</a></li>
                                <li><i class="icon-comments"></i><a href="#">4 Comments</a></li>
                            </ul>
                            <a href="<?php echo base_url();?>welcome/blog_details/<?php echo $c_blog->id;?>" class="pull-right">Continue reading <i class="icon-angle-right"></i></a>
                        </div>
                    </article>
                    <?php  }
                    ?>
                      
                    <div id="pagination">
                        <span class="all">Page 1 of 3</span>
                        <span class="current">1</span>
                        <a href="#" class="inactive">2</a>
                        <a href="#" class="inactive">3</a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <aside class="right-sidebar">
                        <div class="widget">
                            <form class="form-search">
                                <input class="form-control" type="text" placeholder="Search..">
                            </form>
                        </div>
                        <div class="widget">
                            <h5 class="widgetheading">Categories</h5>
                            <ul class="cat">

                                <?php foreach ($all_publish_category as $publish_category) {
                                    ?>

                                    <li><i class="icon-angle-right"></i><a href="<?php echo base_url();?>/welcome/category_blog/<?php echo $publish_category->id; ?>"><?php echo $publish_category->category_name; ?></a><span></span></li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </div>
                        <div class="widget">
                            <h5 class="widgetheading">Latest posts</h5>
                            <ul class="recent">
                                <li>
                                    <img src="<?php echo base_url(); ?>img/dummies/blog/65x65/thumb1.jpg" class="pull-left" alt="" />
                                    <h6><a href="#">Lorem ipsum dolor sit</a></h6>
                                    <p>
                                        Mazim alienum appellantur eu cu ullum officiis pro pri
                                    </p>
                                </li>
                                <li>
                                    <a href="#"><img src="<?php echo base_url(); ?>img/dummies/blog/65x65/thumb2.jpg" class="pull-left" alt="" /></a>
                                    <h6><a href="#">Maiorum ponderum eum</a></h6>
                                    <p>
                                        Mazim alienum appellantur eu cu ullum officiis pro pri
                                    </p>
                                </li>
                                <li>
                                    <a href="#"><img src="<?php echo base_url(); ?>img/dummies/blog/65x65/thumb3.jpg" class="pull-left" alt="" /></a>
                                <h6><a href="#">Et mei iusto dolorum</a></h6>
                                <p>
                                    Mazim alienum appellantur eu cu ullum officiis pro pri
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="widget">
                        <h5 class="widgetheading">Popular tags</h5>
                        <ul class="tags">
                            <li><a href="#">Web design</a></li>
                            <li><a href="#">Trends</a></li>
                            <li><a href="#">Technology</a></li>
                            <li><a href="#">Internet</a></li>
                            <li><a href="#">Tutorial</a></li>
                            <li><a href="#">Development</a></li>
                        </ul>
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section>