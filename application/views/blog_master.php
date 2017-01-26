<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title><?php echo $title; ?></title>
        <link rel="icon" href="<?php echo base_url(); ?>img/favicon.png" type="image/png">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="" />
        <meta name="author" content="http://bootstraptaste.com" />
        <!-- css -->
        <link href="<?php echo base_url(); ?>css/bootstrap.min.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>css/fancybox/jquery.fancybox.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>css/flexslider.css" rel="stylesheet" />
        <link href="<?php echo base_url(); ?>css/style.css" rel="stylesheet" />


        <!-- Theme skin -->
        <link href="<?php echo base_url(); ?>skins/default.css" rel="stylesheet" />

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
              <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
            <![endif]-->

    </head>
    <body>
        <div id="wrapper">
            <!-- start header -->
            <header>
                <div class="navbar navbar-default navbar-static-top">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="index.html"><span>M</span>oderna</a>
                        </div>
                        <div class="navbar-collapse collapse ">
                            <ul class="nav navbar-nav">
                                <li class="active"><a href="<?php echo base_url(); ?>welcome/index">Home</a></li>
                                <li><a href="<?php echo base_url(); ?>welcome/portfolio">Portfolio</a></li>
                                <li><a href="<?php echo base_url(); ?>welcome/blog">Blog</a></li>
                                <li><a href="<?php echo base_url(); ?>welcome/contact">Contact</a></li>

                                <?php
                                $user_id = $this->session->userdata('id');
                                if ($user_id == NULL) {
                                    ?>
                                    <li><a href="<?php echo base_url(); ?>welcome/login">Login</a></li>
                                    <li><a href="<?php echo base_url(); ?>welcome/sign_up">Sign Up</a></li>
                                    <?php
                                } else {
                                    ?>
                                    <li><a href="<?php echo base_url(); ?>welcome/logout">Log Out</a></li>
                                    <?php
                                }
                                ?>



                            </ul>
                        </div>
                    </div>
                </div>
            </header>
            <!-- end header -->
            <section id="inner-headline">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="breadcrumb">
                                <li><a href="#"><i class="fa fa-home"></i></a><i class="icon-angle-right"></i></li>
                                <li class="active">Blog</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
            <section id="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            <?php echo $main_content; ?>
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

                                            <li><i class="icon-angle-right"></i><a href="<?php echo base_url(); ?>/welcome/category_blog/<?php echo $publish_category->id; ?>"><?php echo $publish_category->category_name; ?></a><span></span></li>
                                            <?php
                                        }
                                        ?>
                                    </ul>
                                </div>
                                <div class="widget">
                                    <h5 class="widgetheading">Latest posts</h5>
                                    <ul class="recent">
                                        <?php
                                        foreach ($latest_posts as $l_post) {
                                         
                                        ?>
                                        <li>
                                            <img src="<?php echo base_url(); ?>img/dummies/blog/65x65/thumb3.jpg" class="pull-left" alt="image" />
                                            <h6><a href="<?php echo base_url(); ?>welcome/blog_details/<?php echo $l_post->id; ?>"><?php echo $l_post->title;?></a></h6>
                                            <p><?php echo $l_post->short_description;?></p>
                                        </li>
                                        <?php } ?>
                                    </ul>
                                </div>
                                <div class="widget">
                                    <h5 class="widgetheading">Popular tags</h5>
                                    <ul class="tags">
                                        <?php
                                        foreach ($popular_posts as $p_post) {
                                        ?>
                                        <li><a href="<?php echo base_url(); ?>welcome/blog_details/<?php echo $p_post->id; ?>"><?php echo $p_post->title;?></a></li>
                                         <?php } ?>
                                    </ul>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </section>
            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="widget">
                                <h5 class="widgetheading">Get in touch with us</h5>
                                <address>
                                    <strong>Moderna company Inc</strong><br>
                                    Modernbuilding suite V124, AB 01<br>
                                    Someplace 16425 Earth </address>
                                <p>
                                    <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891 <br>
                                    <i class="icon-envelope-alt"></i> email@domainname.com
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="widget">
                                <h5 class="widgetheading">Pages</h5>
                                <ul class="link-list">
                                    <li><a href="#">Press release</a></li>
                                    <li><a href="#">Terms and conditions</a></li>
                                    <li><a href="#">Privacy policy</a></li>
                                    <li><a href="#">Career center</a></li>
                                    <li><a href="#">Contact us</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="widget">
                                <h5 class="widgetheading">Latest posts</h5>
                                <ul class="link-list">
                                    <li><a href="#">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</a></li>
                                    <li><a href="#">Pellentesque et pulvinar enim. Quisque at tempor ligula</a></li>
                                    <li><a href="#">Natus error sit voluptatem accusantium doloremque</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="widget">
                                <h5 class="widgetheading">Flickr photostream</h5>
                                <div class="flickr_badge">
                                    <script type="text/javascript" src="http://www.flickr.com/badge_code_v2.gne?count=8&amp;display=random&amp;size=s&amp;layout=x&amp;source=user&amp;user=34178660@N03"></script>
                                </div>
                                <div class="clear">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="sub-footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="copyright">
                                    <p>
                                        <span>&copy; Moderna 2014 All right reserved. By </span><a href="http://bootstraptaste.com" target="_blank">Bootstraptaste</a>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <ul class="social-network">
                                    <li><a href="#" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        <a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>
        <!-- javascript
            ================================================== -->
        <!-- Placed at the end of the document so the pages load faster -->
        <script src="<?php echo base_url(); ?>js/jquery.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery.easing.1.3.js"></script>
        <script src="<?php echo base_url(); ?>js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery.fancybox.pack.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery.fancybox-media.js"></script>
        <script src="<?php echo base_url(); ?>js/google-code-prettify/prettify.js"></script>
        <script src="<?php echo base_url(); ?>js/portfolio/jquery.quicksand.js"></script>
        <script src="<?php echo base_url(); ?>js/portfolio/setting.js"></script>
        <script src="<?php echo base_url(); ?>js/jquery.flexslider.js"></script>
        <script src="<?php echo base_url(); ?>js/animate.js"></script>
        <script src="<?php echo base_url(); ?>js/custom.js"></script>
    </body>
</html>