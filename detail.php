<?php     
    include 'layouts/header.php'; 
    require 'data.php'; 

    if (!isset($_GET['id'])) {
        include "layouts/404.html";
        exit;
    }
    $blogId = $_GET['id'];                        
    $blog = getBlogById($blogId);  
    if (!$blog) {
        include "layouts/404.html";
        exit;
    }      
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
        <h2>Blog Detail</h2>
    </div>
</section>
<section id="blog_content">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-xs-12">
                <div class="single-view">
                    <!--Blog Container-->
                    <div class="blog-container">
                        <div class="inner-box mar-bot-30 os-animation" data-os-animation="fadeInUp" data-os-animation-duration="4s">
                            <h3 class="blog-title mar-bot-20"><?php echo $blog['title'] ?></h3>
                            <div class="lower-content clearfix">
                                <ul class="posted pull-left">
                                    <li><i class="fa fa-calendar"></i><?php echo $blog['tanggal'] ?></li>
                                    <li><i class="fa fa-user-o"></i><?php echo $blog['author'] ?></li>
                                </ul>
                                <!--.posted-->
                            </div>
                            <!--.lower-content-->
                            <div class="text">
                                <textarea name="body" id="editor1" class="textarea" readonly placeholder="Place some text here" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $blog['content'] ?></textarea>
                            </div>
                            <!--.text-->
                            <a href="index.php">
                                <button type="button" class="btn btn-warning">Kembali</button>
                            </a>
                        </div>
                        <!--.inner-box-->
                    </div>
                    <!--.blog-container-->
                    <!--End Blog Container-->
                </div>
                <!--.single-view-->
            </div>
            <!--.col-md-8-->
        </div>
        <!--.row-->
    </div>
    <!--.container-->
</section>
<?php include 'layouts/footer.php' ?>