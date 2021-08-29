<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'includes/style.php' ?>
    <style>
        .x_text {
            border-radius: 100em;
            resize: none;
            border: 1px solid #99bb3f;
            color: black;
            margin-top: 30px;
        }
        
    </style>
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
                                <li><a href="contact.php">Contact Us</a></li>
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
    <section id="main-container" class="main-container">
        <div class="container">
            <div class="row">
            
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="sidebar sidebar-left">
                        <div class="widget contact-info">
                            <h3 class="widget-title">Contact Us</h3>
                            <div class="content-info-outer">
                            <div class="contact-info-box">
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
                                    <p>+91 6394132819</p>
                                </div>
                            </div>
                            </div>

                        </div>
                        <!-- Widget end -->
                    </div>
                    <!-- Sidebar left end -->
                </div>
                <!-- Sidebar col end -->

                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" >
                    <h3 class="border-title border-left">Contact Form</h3>
                    <form action="" method="post">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                               <input type="text" name="name" Class="form-control" placeholder="Name*" Style="border-radius: 1em; resize: none; margin: 30px; border: 1px solid #99bb3f; color: black;" MaxLength="500" required/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="number" name="mobile" Class="form-control"  placeholder="Mobile*" Style="border-radius: 1em; resize: none; margin: 30px; border: 1px solid #99bb3f; color: black;" MaxLength="10" required/>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <input type="email" name="email" Class="form-control" Style="border-radius: 1em; resize: none; margin: 30px; border: 1px solid #99bb3f; color: black;" placeholder="Email*" required/>
                            </div>
                        </div>
                        <div class="col-lg-11 col-xs-11 col-sm-11 col-md-11 col-11">
                            <div class="form-group">
                                <textarea Class="form-control" name="message" Style="border-radius: 1em; resize: none; margin: 30px; border: 1px solid #99bb3f; color: black;"
                                    placeholder="Message*" TextMode="MultiLine" Rows="5" required></textarea>
                            </div>
                        </div>

                        <div class="text-right" style="margin-right: 15px;">
                            <br>
                            <input type="submit" class="x-btn view_btn" name="submit" value="Get a Call Back"/>
                        </div>
                    </div>
                    </form>
                </div>

            </div>
            <!-- Content row -->
        </div>
        <!-- Conatiner end -->
    </section>
    <div class="container">
        <section id="map-wrapper">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3616.314756679534!2d82.06429441431857!3d24.989418483993184!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398567ac8730236f%3A0x822a72d0db924e04!2sYes%20Computer%20Center!5e0!3m2!1sen!2sin!4v1583755290715!5m2!1sen!2sin" width="1150" height="450" frameborder="0" style="border: 0;" allowfullscreen=""></iframe>
        </section>
        <!-- Map end -->
    </div>
    <!-- footer -->
    <?php include 'includes/footer.php' ?>
    <?php include 'includes/script.php' ?>
</body>
</html>
<?php
include 'includes/connection.php';
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $mob=$_POST['mobile'];
    $email=$_POST['email'];
    $mess=$_POST['message'];
    echo $name.$mob.$email.$mess;
    $insertquery= "INSERT INTO contactus(Name, email, Phone, Msg) VALUES('$name','$email','$mob','$mess')";
    $res=mysqli_query($con,$insertquery);
    if($res){
        ?>
        <script>
            alert("data save properly");
            location.replace("index.php");
        </script>
        <?php
    }else
    {
        ?>
        <script>
            alert("data not save properly");
        </script>
        <?php
    }
}
?>