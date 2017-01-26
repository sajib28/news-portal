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