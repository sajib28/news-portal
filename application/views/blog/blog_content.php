<?php foreach ($all_publish_news as $v_news) {
    ?>   

    <article>
        <div class="post-image">
            <div class="post-heading">
                <h3><a href="#"><?php echo $v_blog->title; ?></a></h3>
            </div>
            <?php if($v_blog->blog_image){ ?>
            
            <img src="<?php echo base_url().$v_blog->blog_image; ?>" alt=""/>
            <?php }?>
        </div>
        <?php echo $v_blog->short_description; ?>
        <div class="bottom-article">
            <ul class="meta-post">
                <li><i class="icon-calendar"></i><a href="#"> Mar 23, 2013</a></li>
                <li><i class="icon-user"></i><a href="#"><?php echo $v_blog->author_name; ?></a></li>
                <li><i class="icon-folder-open"></i><a href="#">Blog</a></li>
            </ul>
            <a href="<?php echo base_url(); ?>welcome/blog_details/<?php echo $v_blog->id; ?>" class="pull-right">Continue reading <i class="icon-angle-right"></i></a>
        </div>
    </article>
<?php }
?>
<div id="pagination">
    <span class="all">Page 1 of 3</span>
    <span class="current">1</span>
    <a href="#" class="inactive">2</a>
    <a href="#" class="inactive">3</a>
</div>




