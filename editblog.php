<?php 
    ob_start();
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
        <h2>Silahkan Edit Blog Anda</h2>
    </div>
</section>
<section id="blog_content">
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-xs-12">
                <div class="grid-view">
                    <form action="" method="post">
                        <div class="form-group">
                            <label>Nama Anda</label>
                            <input type="text" class="form-control" name="author" value="<?php echo $blog['author'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Judul Blog</label>
                            <input type="text" class="form-control" name="title" value="<?php echo $blog['title'] ?>">
                        </div>
                        <div class="form-group">
                            <label>Content Blog</label>
                            <textarea name="content" id=" editor1" class="textarea" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $blog['content'] ?></textarea>
                        </div>
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="date" class="form-control" name="tanggal" value="<?php echo $blog['tanggal'] ?>">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="/">
                            <button type="button" class="btn btn-warning">Kembali</button>
                        </a>
                    </form>
                    <?php
                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            $blog = array_merge($blog, $_POST);
                            $blog = updateBlog($_POST, $blogId);
                            header("Location: index.php");
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!--.row-->
    </div>
    <!--.container-->
</section>
<?php include 'layouts/footer.php' ?>