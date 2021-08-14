<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/style.php' ?>
</head>

<body>
    <!-- header -->
    <?php include 'includes/header.php' ?>
    <!--start main Div -->
    <div class="row">
        <div id="showoffer" runat="server" visible="false" class="col-lg-12" style="color: red; height: 50px; line-height: 50px; font-weight: bold; font-size: 18px;">
            <marquee><img src="images/intro/new.gif" />

            </marquee>
        </div>
    </div>
    <!-- Carousel -->
    <div id="main-slide" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators visible-lg visible-md">
            <li data-target="#main-slide" data-slide-to="0" class="active"></li>
            <li data-target="#main-slide" data-slide-to="1"></li>
            <li data-target="#main-slide" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active">
                <img src="images/slider-main/banner0.jpg" alt="banner" />
                <div class="slider-content text-left">

               </div>
            </div>
            <!--/ Carousel item 1 end -->
            <div class="item">
                <img src="images/slider-main/banner1.png" alt="banner" />
                <div class="slider-content">
               <div class="col-md-12 text-center">
               </div>
               </div>
            </div>
            <!--/ Carousel item 2 end -->
            <div class="item">
                <img src="images/slider-main/banner2.jpg" alt="banner" />
                <div class="slider-content text-right">
               <div class="col-md-12">
               </div>
               </div>
            </div>
            <!--/ Carousel item 3 end -->
            <div class="item">
                <img src="images/slider-main/banner4.jpg" alt="banner" />
                <div class="slider-content text-right">
                    <div class="col-md-12">
                    </div>
                </div>
            </div>
            <!--/ Carousel item 3 end -->
        </div>
        <!-- Carousel inner end-->
        <!-- Controllers -->
        <a class="left carousel-control" href="#main-slide" data-slide="prev">
            <span><i class="fa fa-angle-left"></i></span>
        </a>
        <a class="right carousel-control" href="#main-slide" data-slide="next">
            <span><i class="fa fa-angle-right"></i></span>
        </a>
    </div>
    <!--/ Carousel end -->
    <!--   courses details  -->
    <section class="call-to-action">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-xs-12">
                    <h3 class="call-to-action-title">We Are Committed To Providing The Best Quality Training</h3>
                </div>
                <div class="col-md-2 col-xs-12">
                    <div class="call-to-action-btn-angle">
                        <a href="contact.aspx"><i class="fa fa-paper-plane"></i>Contact Us</a>
                    </div>
                </div>
            </div>
            <!-- Row end -->
        </div>
        <!-- Container end -->
    </section>
    <!-- Call to action end -->
    <!--   Courses Details  -->
    <!-- End main div -->
    <!-- footer -->
    <?php include 'includes/footer.php' ?>
    <?php
    include 'includes/script.php' ?>
</body>

</html>