<?php
include 'inc/header.php';
/* if(!isset($_GET['id']) || isset($_GET['id'])=="NULL"){
  //header("Location: 404.php");
  }
  else{
  $id = $_GET['id'];
  }
 */
if (!isset($_GET['search']) || $_GET['search'] == NULL) {
    header("Location: 404.php");
} else {
    $search = $_GET['search'];
}
?>
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
                <div class="row">
                    <div class="col-lg-12">
                        <?php
                        $query = "SELECT * FROM post WHERE title LIKE '%$search%' OR content LIKE '%$search%'";
                        $post = $db->select($query);
                        if ($post) {
                            while ($result = $post->fetch_assoc()) {
                                ?>
                                <article>
                                    <div class="post-image">
                                        <div class="post-heading">
                                            <h3><a href="single-post.php?id=<?php echo $result['id'];?>"><?php echo $result['title']; ?></a></h3>
                                        </div>
                                        <img src="dashboard/uploads/<?php echo $result['image']; ?>" alt="" />
                                    </div>
                                    <p><?php echo $result['content']; ?></p>
                                    <div class="bottom-article">
                                        <ul class="meta-post">
                                            <li><i class="icon-calendar"></i><a href="#"><?php echo $df->dateView($result['date']); ?></a></li>
                                            <li><i class="icon-user"></i><a href="#"><?php echo $result['author']; ?></a></li>
                                            <li><i class="icon-folder-open"></i><a href="#"> Blog</a></li>
                                            <li><i class="icon-comments"></i><a href="#">4 Comments</a></li>
                                        </ul>
                                        <a href="single-post.php?id=<?php echo $result['id'];?>" class="pull-right">Continue reading <i class="icon-angle-right"></i></a>
                                    </div>
                                </article>
                            <?php
                            }
                        } else { ?>
                        <?php 
                         echo "<p class='alert alert-warning'>Search not found..!</p>";
                        }
                        ?> 
                    </div> 
                </div>
            </div>
<?php include 'inc/right-sidebar.php'; ?>
        </div>

    </div>
</section>
<?php include 'inc/footer.php'; ?>