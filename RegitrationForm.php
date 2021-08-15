<!DOCTYPE html>
<html lang="en">
<head>
    <?php include 'includes/style.php' ?>
    <style>
        .err {
            color: red;
            font-size: 14px;
        }

        .hidden {
            visibility: hidden;
        }

        .succ {
            color: green;
            font-size: 14px;
        }
        rounded_top {
            /* width: 1502px !important; */
            width: 1322px !important;
        }

        .rounded_top {
            width: 1201px;
            height: 30px;
            /* background: url(../../Images/round-header.jpg) center top no-repeat; */
            position: relative;
            margin: 0 auto;
            background: #045EA0;
            border-radius: 6px 6px 0px 0px;
        }

        .mid_box {
            width: 1201px;
            margin: 0 auto;
            padding-bottom: 10px;
            border: solid 1px #045ea0;
            background: #fff;
            border-radius: 0 0 8px 8px;
        }

        .form_tab {
            margin: 0;
            position: relative;
            bottom: -15px;
            padding: 8px 30px 8px 15px !important;
            font-weight: bold;
            font-family: Arial !important;
            font-size: 9pt !important;
            width: 190px;
            color: white !important;
            background: #2d93f7;
            border-radius: 0px 15px 15px 0px;
            /* background: url(../../Images/link.jpg) no-repeat right center; */
        }

        .form_box_level {
            /* height: 30px; */
            margin: 0 auto 10px auto;
            text-align: center;
        }

        body {
            background: #fff;
            font-size: 12px;
            font-family: "verdana", "Lucida Grande", "Segoe UI", Arial, Helvetica, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            color: black;
        }

        fieldset {
            border: none;
            border-top: solid 1px #e8e8e8;
            margin: 0;
            padding: 15px 0 0 0;
        }

        fieldset {
            min-width: 0;
            padding: 0;
            margin: 0;
            border: 0;
        }

        fieldset {
            padding: .35em .625em .75em;
            margin: 0 2px;
            border: 1px solid #c0c0c0;
        }

        * {
            margin-left: 0;
            margin-right: 0;
        }

        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        user agent stylesheet fieldset {
            display: block;
            margin-inline-start: 2px;
            margin-inline-end: 2px;
            padding-block-start: 0.35em;
            padding-inline-start: 0.75em;
            padding-inline-end: 0.75em;
            padding-block-end: 0.625em;
            min-inline-size: min-content;
            border-width: 2px;
            border-style: groove;
           border-color: red;
            border-image: initial;
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
                            <h1 class="border-title border-left">Registration</h1>
                            <ol class="breadcrumb">
                                <li>Home</li>
                                <li><a href="NewRegistrationStudents.php">Registration</a></li>
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
     <!-- footer -->
     <?php include 'includes/footer.php' ?>
    <?php
    include 'includes/script.php' ?>
    </body>
</html>