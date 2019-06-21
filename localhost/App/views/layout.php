<html>
<head>
    <title><?=$this->e($title)?></title>
    <link
            href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700,700i%7cOswald:300,400,500,600,700%7cPlayfair+Display:400,400i,700,700i"
            rel="stylesheet">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/slick-theme.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/fileinput.min.css">
    <link rel="stylesheet" href="style.css">

    <!--   <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
       <script src="assets/js/bootstrap.min.js"></script>
       <script src="assets/js/bootstrap.file-input.js"></script>
 -->
       <script src="assets/js/main.js"></script>
    <script src="assets/js/slick.min.js"></script>
   </head>

   <body>

   <header class="kotha-menu marketing-menu">
       <nav class="navbar  navbar-default">
           <div class="container">
               <div class="menu-content">
                   <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#myNavbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="top-social-icons list-inline pull-right">
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li class="top-search">
                            <a href="#" class="sactive">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                    </ul>


                    <ul class="nav text-uppercase pull-left">

                        <li>
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <a href="/addpost">AddPost</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"  role="button"
                               aria-haspopup="true" aria-expanded="false">Категории</a>
                            <ul class="dropdown-menu">
                                <li class=""><a href="portfolio-2-columns.html">Portfolio 2 Columns</a></li>
                                <li class=""><a href="portfolio-3-columns.html">Portfolio 3 Columns</a></li>
                                <li class=""><a href="portfolio-4-columns.html">Portfolio 4 Columns</a></li>
                                <li class=""><a href="single-portfolio.html">Single Portfolio</a></li>
                            </ul>
                        </li>
                        <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"  role="button"
                               aria-haspopup="true" aria-expanded="false">Пользователь</a><ul class="dropdown-menu">
                                <li class=""><a href="/register">Регистрация</a></li>
                                <li class=""><a href="/login">Вход</a></li>

                            </ul></li>

                    </ul>
                </div>
                <div class="show-search">
                    <form role="search" method="get" id="searchform" action="#">
                        <input type="text" placeholder="Search and hit enter..." name="s" id="s">
                    </form>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div class="kotha-logo text-center">
        <h1><a href="index-2.html"><img src="assets/images/kotha-logo.png" alt="kothPro"></a></h1>
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col col-md-8">
            <?=$this->section('content')?>
        </div>
        <div class="col col-md-4">


         <?=$this->insert('welcome')?>


        </div>
    </div>

</div>


<footer>
    <div class="container">
        <div class="footer-widget-row">
            <div class="footer-widget contact-widget">
                <div class="widget-title">
                    <img src="assets/images/kotha-white-logo.png" alt="">
                </div>
                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                    ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eaccusam et justo duo
                    dolores eteem.</p>
                <div class="address">
                    <h4 class="text-uppercase">contact Info</h4>
                    <p> 239/2 NK Street, DC, USA</p>
                    <p> Phone: +123 456 78900</p>
                    <a href="mailto:theme@kotha.com">theme@kotha.com</a>
                </div>
            </div>
            <div class="footer-widget twitter-widget">
                <h2 class="widget-title text-uppercase">
                    Latest TWeeTs
                </h2>
                <div class="single-tweet">
                    <p>Check our new theme 'kotha - Personal WordPress Blog Theme' on #themeforest #Envato
                        #WordPress <br>
                        <a href="https://t.co/kN5OPEuPzx">https://t.co/kN5OPEuPzx</a></p>
                    <h4><i class="fa fa-twitter"></i>Tweeted on 17 hours ago</h4>
                </div>
                <div class="single-tweet">
                    <p>Check our new theme 'kotha - Personal WordPress Blog Theme' on #themeforest #Envato
                        #WordPress
                        <br>
                        <a href="https://t.co/kN5OPEuPzx">https://t.co/kN5OPEuPzx</a></p>
                    <h4><i class="fa fa-twitter"></i>Tweeted on 17 hours ago</h4>
                </div>
            </div>

            <div class="footer-widget testimonial-widget">
                <h2 class="widget-title text-uppercase">Testimonials</h2>
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!--Indicator-->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                        <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item">
                            <div class="single-review">
                                <div class="review-text">
                                    <p>Lorem ipsum dolor sit amet, conssadipscing elitr, sed diam nonumy eirmod
                                        tempvidunt ut labore et dolore magna aliquyam erat,sed diam voluptua. At
                                        vero eos et accusam justo duo dolores et ea rebum.gubergren no sea takimata
                                        magna aliquyam eratma</p>
                                </div>
                                <div class="author-id">
                                    <img src="assets/images/author.jpg" alt="">
                                    <div class="author-text">
                                        <h4>John Doe</h4>
                                        <h4>CEO, Apple Inc.</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item active">
                            <div class="single-review">
                                <div class="review-text">
                                    <p>Lorem ipsum dolor sit amet, conssadipscing elitr, sed diam nonumy eirmod
                                        tempvidunt ut labore et dolore magna aliquyam erat,sed diam voluptua. At
                                        vero eos et accusam justo duo dolores et ea rebum.gubergren no sea takimata
                                        magna aliquyam eratma</p>
                                </div>
                                <div class="author-id">
                                    <img src="assets/images/autho-1r.jpg" alt="">
                                    <div class="author-text">
                                        <h4>Robert Arri</h4>
                                        <h4>HRM, Microsoft Inc.</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="single-review">
                                <div class="review-text">
                                    <p>Lorem ipsum dolor sit amet, conssadipscing elitr, sed diam nonumy eirmod
                                        tempvidunt ut labore et dolore magna aliquyam erat,sed diam voluptua. At
                                        vero eos et accusam justo duo dolores et ea rebum.gubergren no sea takimata
                                        magna aliquyam eratma</p>
                                </div>
                                <div class="author-id">
                                    <img src="assets/images/author.png" alt="">

                                    <div class="author-text">
                                        <h4>Brown Fish</h4>
                                        <h4>CEO, Bangari Inc.</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid text-center ft-copyright">
        <p>&copy; 2017 <a href="#">Kotha PRO </a> - Designed with <i class="fa fa-heart"></i> by <a
                    href="http://shapedtheme.com/">ShapedTheme</a></p>
    </div>
</footer>
<div class="scroll-up">
    <a href="#"><i class="fa fa-angle-up"></i></a>
</div>

<!--//Script//-->
   <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>


   <script src="assets/js/slick.min.js"></script>
   <script src="assets/js/main.js"></script>
   <script src="assets/js/validator.js"></script>
<script src="assets/js/fileinput.min.js"></script>



<script>
    $(function(){
        $("input[type=file]").fileinput({
            showCaption: true,
            browseLabel: 'Выберите файл...',
            browseClass: 'btn btn-warning',
            showPreview: false
        });
    });
</script>

</body>

<!-- Mirrored from demo.shapedtheme.com/kotha-pro-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 28 Apr 2019 08:46:58 GMT -->
</html>