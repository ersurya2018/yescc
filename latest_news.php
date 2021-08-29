<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'includes/style.php' ?>
</head>
    <body>
         <!-- header -->
    <?php include 'includes/header.php' ?>
    <!--start main Div -->
    <div id="banner-area" class="banner-area" style="background-image: url(images/banner/banner1.jpg)">
        <div class="banner-text">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="banner-heading">
                            <h1 class="border-title border-left">Contact Us</h1>
                            <ol class="breadcrumb">
                                <li>Home</li>
                                <li><a href="contact.aspx">Contact Us</a></li>
                            </ol>
                        </div>
                    </div>
                    <!-- Col end -->
                </div>
                <!-- Row end -->
            </div>
            <!-- Container end -->
        </div>
        <!-- Banner text end -->
    </div>
    <!-- Banner area end -->
    <section id="main-container" class="main-container">
        <div class="container">

            <div class="row">

                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
                    <div class="sidebar sidebar-left">
                        <div class="widget contact-info">
                            <h3 class="widget-title">NEWS</h3>

                            <!--<asp:Repeater ID="News" runat="server">
                                <ItemTemplate>-->
                                    <div class="col-lg-12">
                                        <img src="images/yescc.png" class="pull-left" alt="" height="50px;" width="150px" />
                                        <!--<h4 style="margin: 0px"><u><%#Eval("NewsTitle") %> </u></h4>
                                        <p><%#Eval("NewsDetails") %></p>
                                        <p class="fa fa-calendar">&nbsp;&nbsp;<%#Eval("Cdt") %></p>
                                        <br />
                                        <div class="clearfix"></div>
                                        <hr />-->
                                    </div>

                                </ItemTemplate>
                         <!--</asp:Repeater>-->

                              <!-- <div class="contact-info-box">
                                <i class="fa fa-map">&nbsp;</i>
                                <div class="contact-info-box-content">
                                    <h4>Visit Us</h4>
                                    <p>Ladiyari Road (near jaisawal petrol pump ) Koraon ,Prayagraj-212306</p>
                                </div>
                            </div>

                            <div class="contact-info-box">
                                <i class="fa fa-envelope">&nbsp;</i>
                                <div class="contact-info-box-content">
                                    <h4>Mail Us</h4>
                                    <p>info@yescc.in</p>
                                    <p>yescc@gmail.com</p>
                                </div>
                            </div>

                            <div class="contact-info-box">
                                <i class="fa fa-phone-square">&nbsp;</i>
                                <div class="contact-info-box-content">
                                    <h4>Call Us</h4>
                                    <p>+91 9936573728</p>
                                    <p>+91 8354021883</p>
                                </div>
                            </div>-->
                        </div>
                        <!-- Widget end -->
                    </div>
                    <!-- Sidebar left end -->
                </div>
                <!-- Sidebar col end -->
                <div class="col-lg-4">
                    <img src="Images/news.jpg" alt="News" width="100%" /></div>
            </div>
            <!-- Content row -->
        </div>
        <!-- Conatiner end -->
    </section>
    <!-- Main container end -->

     <!-- footer -->
     <?php include 'includes/footer.php' ?>
    <?php
    include 'includes/script.php' ?>
    </body>
</html>