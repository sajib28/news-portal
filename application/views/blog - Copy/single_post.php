<!-- end header -->
<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">

                <article>
                    <div class="post-image">
                        <div class="post-heading">
                            <h3><a href="#"><?php echo $blog_info->title; ?></a></h3>
                        </div>
                        <img src="<?php echo base_url(); ?>img/dummies/blog/img1.jpg" alt=""/>
                    </div>
                    <?php echo $blog_info->long_description; ?>
                    <div class="bottom-article">
                        <ul class="meta-post">
                            <li><i class="icon-calendar"></i><a href="#"> Mar 23, 2013</a></li>
                            <li><i class="icon-user"></i><a href="#"><?php echo $blog_info->author_name; ?></a></li>
                            <li><i class="icon-folder-open"></i><a href="#">Blog</a></li>
                            <li><i class="icon-folder-open"></i><a href="#"><?php echo count($comments_by_blog_id); ?>&nbsp;Comments</a></li>

                        </ul>
                    </div>

                    <?php
                   
                    foreach ($comments_by_blog_id as $v_comments) {

                    ?>
                    <div class="comments">
                        <a href="#"><?php echo $v_comments->author_name; ?></a>
                        <span><?php echo $v_comments->date_time; ?></span>
                        <p><?php echo $v_comments->comments; ?></p>
                    </div>
                    <?php
                    }
                    ?>
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
                    <?php
                     $user_id = $this->session->userdata('id');
                    if ($user_id != NULL) {
                        ?>
                    <form action="<?php echo base_url(); ?>welcome/post_comments" method="post">
                        <input type="hidden" name="blog_id" value="<?php echo $blog_info->id; ?>"/>
                        <div class="form-group">
                            <label for="comments">Comment</label>
                            <textarea name="comments" class="form-control" rows="6" id="comments" placeholder="Comments"></textarea>

                        </div>
                        <button type="submit" class="btn btn-primary">Sign Up</button>
                    </form>
                    <?php } ?>
                </article>

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

                                <li><i class="icon-angle-right"></i><a href="<?php echo base_url(); ?>/welcome/category_blog/<?php echo $publish_category->id; ?>"><?php echo $publish_category->category_name; ?></a><span> (20)</span></li>
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