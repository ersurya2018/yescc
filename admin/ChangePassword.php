<?php
session_start();
session_destroy();
header("Location:../Login.php");
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    </head>
    <body>  
        <!-- header include-->
        <?php include 'header.php' ?>      
        <div class="content-wrapper">
            <section class="content">
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-info">
                        <div class="box-header with-border">
                            <h3 class="breadcrumb box-title">Add Patients</h3>
                            <!--<asp:Label ID="Msg" runat="server" CssClass="pull-center"></asp:Label> -->
                            <ol class="breadcrumb pull-right">
                                <li><a href="Dashboard.php"><i class="fa fa-dashboard"></i>&nbsp;Dashboard</a></li>
                                <li class="active">Add Patients</li>
                            </ol>
                        </div>
                        
                        <div class="box-body">
                            <div class="row">
                                <div class="col-lg-4"></div>
                                <form action="" method="post">
                                <div class="col-lg-4">
                                    <div class="form-group">

                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-id-card-o"></i>
                                            </div>
                                            <input type="password" name="oldpass" Class="form-control" placeholder="Old Password"/>
                                        </div>
                                    </div>
                                    <div class="form-group">

                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-id-card-o"></i>
                                            </div>
                                            <input type="password" name="newpass" Class="form-control" placeholder="New Password"/>
                                        </div>
                                    </div>
                                    <div class="form-group">

                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-id-card-o"></i>
                                            </div>
                                            <input type="password" name="conpass" Class="form-control" placeholder="Confirm Password"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="text-center mt-3">
                                           <input type="submit" value="change password" name="sum"/>
                                        </div>
                                    </div>
                                </div>
                                </form>
                                <div class="col-lg-4"></div>
                            </div>

                        </div>
                      </div>
                </div>
            </section>
        </div>
        <!-- footer include -->
        <?php include 'footer.php' ?>
    </body>
</html>