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
            <section id="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <?php echo $main_content;?>
                        </div>
                    </div>
                </div>
            </section>
            
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