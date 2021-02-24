<!DOCTYPE html>
<html lang="zxx">
<!--Change the lang to "your language" here-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="shortcut icon" href="images/icon/blogging.png" type="image/x-icon">
    <link rel="icon" href="images/icon/blogging.png" type="image/x-icon">

    <title>BlogKu | Dimas Pratama P.</title>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400italic,800italic,400,300,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="plugins/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="plugins/font-awesome/css/font-awesome.min.css">

    <!--Animate.css-->
    <link rel="stylesheet" href="plugins/animate/animate.min.css">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
</head>

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
                <a class="navbar-brand" href="/"><img src="images/icon/blogging.png" width="30" height="30" alt=""></a>
                <!--.navbar-brand-->
            </div>
            <!--.navbar-header-->
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="/">Home</a></li>
                    <li><a href="/create">Buat Blog</a></li>
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
                            <h3 class="blog-title mar-bot-20">{{$show['title']}}</h3>
                            <div class="lower-content clearfix">
                                <ul class="posted pull-left">
                                    <li><i class="fa fa-calendar"></i>{{$show['tanggal']}}</li>
                                    <li><i class="fa fa-user-o"></i>{{$show['author']}}</li>
                                </ul>
                                <!--.posted-->
                            </div>
                            <!--.lower-content-->
                            <div class="text">
                                <textarea name="body" id="editor1" class="textarea" readonly placeholder="Place some text here" style="width: 100%; height: 500px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{$show['content']}}</textarea>
                            </div>
                            <!--.text-->
                            <a href="/">
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

<!-- Footer Section -->
<div id="footer" class="padd-one text-center">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 mar-bot-20">
                <div class="social-link">
                    <ul class="list-inline">
                        <ul class="list-inline">
                            <li class="os-animation" data-os-animation="fadeInUp" data-os-animation-duration="1s"><a href="https://www.facebook.com/dimas.purw.96/"><i class="fa fa-facebook"></i></a></li>
                            <li class="os-animation" data-os-animation="fadeInUp" data-os-animation-duration="2s"><a href="https://github.com/dimpurw"><i class="fa fa-github"></i></a></li>
                            <li class="os-animation" data-os-animation="fadeInUp" data-os-animation-duration="3s"><a href="https://www.instagram.com/dimpurw/"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </ul>
                    <!--.list-inline-->
                </div>
                <!--.social-link-->
            </div>
            <!--.col-sm-12-->
        </div>
        <!--.row-->

        <div class="row text-center white">
            <div class="col-sm-12">
                <p>Copyright &copy; Project Name
                    <a href="">BlogKu</a> by <a>Dimas Pratama Purwadinata | 182410101127</a></p>
            </div>
            <!--.col-sm-12-->
        </div>
        <!--.row-->
    </div>
    <!--.container-->
</div>
<!--Footer Section-->

<a href="#" class="back-to-top"><i class="fa fa-angle-up"></i></a>

<!-- Bootstrap core JavaScript
		================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{asset('plugins/jquery/jquery-3.2.1.min.js')}}"></script>
<!--Bootstraps JS require Jquery-->
<script src="{{asset('plugins/bootstrap/3.3.7/js/bootstrap.min.js')}}"></script>

<!-- Waypoints -->
<script src="{{asset('plugins/waypoints/jquery.waypoints.min.js')}}"></script>

<script src="{{asset('js/custom.js')}}"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="{{asset('js/ie10-viewport-bug-workaround.js')}}"></script>
</body>

</html>