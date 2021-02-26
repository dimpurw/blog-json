<?php 
    ob_start();
    include 'layouts/header.php'; 
    require 'data.php';
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
        <h2>Ayoo Buat Blog Disini</h2>
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
                            <input type="text" class="form-control" name="author">
                        </div>
                        <div class="form-group">
                            <label>Judul Blog</label>
                            <input type="text" class="form-control" name="title">
                        </div>
                        <div class="form-group">
                            <label>Content Blog</label>
                            <textarea name="content" id="editor1" class="textarea" placeholder="Silahkan Ketik Content Blog Anda" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" value="<?php echo $user['content'] ?>"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Tanggal</label>
                            <input type="date" class="form-control" name="tanggal" value="{{date('Y-m-d')}}" value="<?php echo $user['tanggal'] ?>">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="/">
                            <button type="button" class="btn btn-warning">Kembali</button>
                        </a>
                    </form>
                    <?php 
                        $user = [
                            'id' => '',
                            'author' => '',
                            'title' => '',
                            'content' => '',
                            'tanggal' => '',
                        ];

                        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                            $blog = array_merge($blog, $_POST);
                            $blog = createBlog($_POST);
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
<?php include 'layouts/footer.php'; ?>