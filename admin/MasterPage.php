<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Welcome To yescc | Dashboard</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

        <link rel="stylesheet" href="../dist/css/AdminLTE.min.css"/>
        <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css"/>
        <link rel="stylesheet" href="../bower_components/morris.js/morris.css"/>
        <link rel="stylesheet" href="../bower_components/jvectormap/jquery-jvectormap.css"/>
        <link rel="stylesheet" href="../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css"/>
        <link href="../bower_components/jquery-ui/jquery-ui.min.css" rel="stylesheet" />
        <link rel="stylesheet" href="../bower_components/bootstrap-daterangepicker/daterangepicker.css"/>
        <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic"/>
        <link href="../toastr/toastr.min.css" rel="stylesheet" />
        <style>
            .breadcrumb {
                padding: 5px 9px;
                margin-bottom: 0px;
                list-style: none;
                background-color: #f5f5f5;
                border-radius: 4px;
            }

            .form-control[disabled], fieldset[disabled] .form-control {
                cursor: not-allowed;
            }
        </style>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        
            <header class="main-header">
                <a href="Dashboard.aspx" class="logo">
                    <span class="logo-mini"><b>Ad</b>min</span>
                    <span class="logo-lg"><b>Admin</b>&nbsp;Panel</span>
                </a>
                <nav class="navbar navbar-static-top">
                    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                        <span class="sr-only">Toggle navigation</span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">

                            <li class="dropdown user user-menu">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="../dist/img/avatar5.png" class="user-image" alt="User Image">
                                    <span class="hidden-xs">Yes Computer Center</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- User image -->
                                    <li class="user-header">
                                        <img src="../dist/img/avatar5.png" class="img-circle" alt="User Image">
                                        <p>
                                            Yes Computer center 
                                        <small>ADCA, DFA, FCCP(USA), FICM, CCEBDM, FRT, FCGP</small>
                                        </p>
                                    </li>
                                    <li class="user-footer">
                                        <div class="pull-left">
                                            <a href="ChangePassword.aspx" class="btn btn-default btn-flat">Chang Password</a>
                                        </div>
                                        <div class="pull-right">
                                            <a href="LogoutPage.aspx" class="btn btn-default btn-flat">Log out</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </header>
            <!-- Left side column. contains the logo and sidebar -->
            <aside class="main-sidebar">
                <section class="sidebar">
                    <div class="user-panel">
                        <div class="image">
                            <img src="../Images/logo.png" class="img-responsive" alt="User Image" />
                        </div>

                    </div>
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu" data-widget="tree">
                        <li class="header">MAIN NAVIGATION</li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-user"></i><span>Student Managemant</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-right pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="Students_Registration.aspx"><i class="fa fa-circle-o"></i>Registration Form</a></li>
                                <li><a href="Regitration_List.aspx"><i class="fa fa-circle-o"></i>Registration List</a></li>
                                <li><a href="AdmissionForm.aspx"><i class="fa fa-circle-o"></i>Application Form</a></li>
                                <li><a href="ListOf_Students.aspx"><i class="fa fa-circle-o"></i>List Of Students</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-book"></i><span>Course Management</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-right pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="AddNewCoures.aspx"><i class="fa fa-circle-o"></i>Add Course Name</a></li>
                                <li><a href="AddCourseDetails.aspx"><i class="fa fa-circle-o"></i>Add Course Details</a></li>
                                <li><a href="AddCourse_Syllabus.aspx"><i class="fa fa-circle-o"></i>Add Course Syllabus </a></li>
                                <li><a href="AddExamDetails.aspx"><i class="fa fa-circle-o"></i>Add Exam Details </a></li>
                            </ul>
                        </li>

                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-picture-o"></i><span>Photo Gallery Management</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-right pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="Photo_Gallery.aspx"><i class="fa fa-circle-o"></i>Photo Gallery</a></li>
                                <li><a href="NewsAndMedia.aspx"><i class="fa fa-circle-o"></i>News And Media</a></li>
                                <li><a href="AwardAchiement.aspx"><i class="fa fa-circle-o"></i>Award And Achiement</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="NewsAndUpdates.aspx">
                                <i class="fa fa-eye"></i><span>Add News And Updates</span>
                            </a>
                        </li>
                        <li>
                            <a href="CourseEnquiry.aspx">
                                <i class="fa fa-edit"></i><span>Course Enquiry</span>
                            </a>
                        </li>
                        <li>
                            <a href="ContactEnquiry.aspx">
                                <i class="fa fa-phone"></i><span>Contact Enquiry</span>
                            </a>
                        </li>
                        <li>
                            <a href="Visitor.aspx">
                                <i class="fa fa-map"></i><span>Visitor Enquiry</span>
                            </a>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-book"></i><span>Vew Students Report</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-right pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href="Datewise_Report.aspx"><i class="fa fa-calendar"></i>Date Wise</a></li>
                                <li><a href="Coursewise_Report.aspx"><i class="fa fa-medkit"></i>Courses Wise</a></li>
                            </ul>
                        </li>
                    </ul>
                </section>
            </aside>

           

                    <footer class="main-footer">
                        <div class="pull-right hidden-xs">
                            <b>Powered by :</b> Parvez Ansari Developer
                        </div>
                        <strong>Copyright &copy; 2020-2021 <a href="yescc.in">Yes Computer Center</a>.</strong> All rights reserved. 
                    </footer>
                    <div class="control-sidebar-bg"></div>
                

        
        <script src="../bower_components/jquery/dist/jquery.min.js"></script>
        <script src="../bower_components/jquery-ui/jquery-ui.min.js"></script>
        <script>
            $.widget.bridge('uibutton', $.ui.button);
        </script>
        <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- DataTables -->
        <script src="../bower_components/datatables.net/js/jquery.dataTables.js"></script>
        <script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
        <script src="../bower_components/raphael/raphael.min.js"></script>
        <script src="../bower_components/morris.js/morris.min.js"></script>
        <script src="../bower_components/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
        <script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
        <script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
        <script src="../bower_components/jquery-knob/dist/jquery.knob.min.js"></script>

        <script src="../bower_components/moment/min/moment.min.js"></script>
        <script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
        <script src="../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
        <script src="../bower_components/fastclick/lib/fastclick.js"></script>
        <script src="../dist/js/adminlte.min.js"></script>
        <script src="../dist/js/pages/dashboard.js"></script>
        <script src="../dist/js/demo.js"></script>
        <script src="../toastr/toastr.min.js"></script>
        <script>
            $(function () {
                $('#example1').DataTable()
                $('#example2').DataTable({
                    'paging': true,
                    'lengthChange': false,
                    'searching': false,
                    'ordering': true,
                    'info': true,
                    'autoWidth': false
                })
            })
        </script>
        <script>
            $(function () {
                $(".datepiker").datepicker({
                    dateFormat: "DD, dd MM yy",
                    changeMonth: true,
                    changeYear: true,
                    yearRange: '2020:2030'
                });
                $("[class*=Datepikar]").datepicker({
                    dateFormat: "dd/mm/yy",
                    changeMonth: true,
                    changeYear: true,
                });
            })
        </script>
        <script type="text/javascript">
            /*code: 48-57 Numbers
            8  - Backspace,
            35 - home key, 36 - End key
            37-40: Arrow keys, 46 - Delete key*/
            function restrictAlphabets(e, msg) {
                var x = e.which || e.keycode;
                if ((x >= 48 && x <= 57)) {
                    return true;
                }
                else {
                    return false;
                }
            }

            function restrictnimonic(e) {

                var x = e.which || e.keycode;
                if ((x >= 65 && x <= 90) || (x >= 97 && x <= 122) || (x == 32) || (x == 46)) {
                    // document.getElementById(msg).innerHTML = "";
                    return true;
                }
                else {
                    //document.getElementById(msg).innerHTML = "Invalid Name format";

                    return false;
                }
            }
            function Address(e) {

                var x = e.which || e.keycode;
                if ((x >= 65 && x <= 90) || (x >= 44 && x <= 47) || (x >= 97 && x <= 122) || (x == 32) || (x >= 48 && x <= 57)) {
                    // document.getElementById(msg).innerHTML = "";
                    return true;
                }
                else {
                    //document.getElementById(msg).innerHTML = "Invalid Name format";

                    return false;
                }
            }
            //function Address(e) {

            //    var x = e.which || e.keycode;
            //    if ((x >= 65 && x <= 90) || (x >= 97 && x <= 122) || (x == 32)) {
            //   // if ((x >= 65 && x <= 90) || (x >= 44 && x <= 47) || (x >= 97 && x <= 122) || (x == 32) || (x >= 48 && x <= 57)) {
            //        document.getElementById(msg).innerHTML = "";
            //        return true;
            //    }
            //    else {

            //        document.getElementById(msg).innerHTML = "Invalid Name format";
            //        return false;
            //    }
            //}
        </script>
    </body>
</html>
