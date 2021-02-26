<?php 
   include 'layouts/header.php'; 
   require 'data.php';
   $users = getBlogs();
?>
<body data-spy="scroll" data-target=".navbar" data-offset="200">
    <nav class="navbar navbar-default navbar-static-top" data-spy="affix" data-offset-top="100">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!--button-->
                <a class="navbar-brand" href="index.php"><img src="images/icon/blogging.png" width="30" height="30" alt=""></a>
                <!--.navbar-brand-->
            </div>
            <!--.navbar-header-->
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.php">Home</a></li>
                    <li><a href="createblog.php">Buat Blog</a></li>
                </ul>
            </div>
        </div>
        <!--.container-->
    </nav>
    <!--nav-->
    <section id="page_title">
    <div class="overlay-bg"></div>
    <div class="container">
        <h2>Ayoo Buat Blog Yang Menarik</h2>
    </div>
</section>
<section id="blog_content">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-xs-12">
                <div class="grid-view">
                    <div class=" row clearfix">
                        <!--Blog Container-->
                        <?php foreach ($users as $user): ?>
                        <div class="blog-container col-sm-6 col-xs-12 os-animation cardku" data-os-animation="fadeInUp" data-os-animation-duration="4s">
                            <div class="inner-box">
                                <div class="lower-content">
                                    <h3><a href="detail.php?id=<?php echo $user['id'] ?>"><?php echo $user['title'] ?></a></h3>
                                    <ul class="posted">
                                        <li><i class="fa fa-calendar"></i><?php echo $user['tanggal'] ?></li>
                                        <li><i class="fa fa-user-o"></i><?php echo $user['author'] ?></li>
                                    </ul>
                                    <!--.posted-->
                                    <div class="text">
                                        <span><?php echo $user['content'] ?></span><a href="detail.php?id=<?php echo $user['id'] ?>"><span>Lihat Selengkapnya</span></a>
                                    </div>
                                    <a href="editblog.php?id=<?php echo $user['id'] ?>">
                                        <button type="button" class="btn btn-primary">Edit</button>
                                    </a>
                                    <form method="POST" action="delete.php">
                                        <input type="hidden" name="id" value="<?php echo $user['id'] ?>">
                                        <button class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                                <!--.lower-content-->
                            </div>
                            <!--.inner-box-->
                        </div>
                        <?php endforeach ?>
                        <!--.blog-container-->
                        <!--End Blog Container-->
                    </div>
                </div>
            </div>
        </div>
        <!--.row-->
    </div>
    <!--.container-->
</section>
<?php include 'layouts/footer.php' ?>