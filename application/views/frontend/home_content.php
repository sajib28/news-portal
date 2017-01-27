<section id="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">


                <?php



                foreach ($categories as $key => $category) {
                    if (!empty($category)) {
                        ?>


                            <div class="col-md-6">
                                <div class="news">
                                    <h2><?php echo $key; ?></h2>
                                    <?php
                                    foreach ($category as $news) {
                                        ?>

                                        <div class="news-content">
                                            <div class="news-pic">
                                                <a href="#">
                                                    <img src="<?php echo base_url() . $news->news_image ?>"></a>

                                            </div>
                                            <div class="news-details">
                                                <h3 class=""><a href="<?php echo $news->news_link; ?>"
                                                                target="_blank"><?php echo $news->news_title; ?></a>
                                                </h3>

                                                <p><?php
                                                    $link = $news->news_description;
                                                    echo substr($link, 0, 200);


                                                    ?></p>
                                                <span>View: <?php echo $news->news_view_count . ' | '; ?></span>
                                                <span><?php echo $news->author_name . ' | ';?><?php
                                                    $originalDate = $news->news_created_date;
                                                    $newDate = date("M d Y", strtotime($originalDate));
                                                    echo $newDate; ?></span>
                                            </div>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>
                            </div>

                    <?php
                    }
                } ?>
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