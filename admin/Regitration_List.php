<?php
session_start();
session_destroy();
header("Location:../Login.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<style>
        .btn {
            display: inline-block;
            padding: 0px 6px;
            margin-bottom: 0;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.42857143;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -ms-touch-action: manipulation;
            touch-action: manipulation;
            cursor: pointer;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            background-image: none;
            border: 1px solid transparent;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <?php include 'header.php' ?>
    <div class="content-wrapper">
        <section class="content">
            <div class="row">
                <div class="col-xs-12">
                    <div class="box">
                        <div class="box-header">
                            <h3 class="breadcrumb box-title">List Of Students</h3>
                            <ol class="breadcrumb pull-right">
                                <li><a href="Dashboard.php"><i class="fa fa-dashboard"></i>&nbsp;Dashboard</a></li>
                                <li class="active">List Of Students</li>
                            </ol>
                        </div>
                        <hr />
                        <div class="box-body">
                            <div class="col-lg-12">
                                <!--<asp:Label ID="Msg" runat="server"></asp:Label> -->
                            </div>
                            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">

                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example1" class="table table-bordered table-striped dataTable table-responsive" role="grid" aria-describedby="example1_info">
                                            <thead>
                                                <tr role="row">
                                                    <th>Sr.No</th>
                                                    <th>Registration No.</th>
                                                    <th>Students Name</th>
                                                    <th>Gender</th>
                                                    <th>Mobile No</th>
                                                    <th>Email ID</th>
                                                    <th>Address</th>
                                                    <th>Tools</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               <!-- <asp:Repeater ID="grdStudent" runat="server"> -->
                                                    <ItemTemplate>
                                                        <tr role="row" class="odd">
                                                            <td class="sorting_1">ID</td>
                                                            <td>
                                                                <asp:LinkButton runat="server" ID="lnkAppId" PostBackUrl='<%# "AdmissionForm.aspx?AppId="+Eval("ResitationNo") %>' Text='<%#Eval("ResitationNo") %>'></asp:LinkButton>
                                                            </td>
                                                            <td>name</td>
                                                            <td>gender</td>
                                                            <td>mobile</td>
                                                            <td>email</td>
                                                            <td>demo</td>
                                                            <td>
                                                                <div class="tools">
                                                                    <a class="btn btn-success" title="View"><i class="fa fa-eye"></i></a>
                                                                    <a class="btn btn-primary" title="Edit"><i class="fa fa-edit"></i></a>
                                                                    <a class="btn btn-danger" title="Delete"><i class="fa fa-trash-o"></i></a>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </ItemTemplate>
                                                </asp:Repeater>


                                            </tbody>

                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </section>
    </div>
    <?php include 'footer.php' ?>
</body>
</html>
<?php 
include '../includes/connection.php'; 
$selectdata="select * from registration";
$query=mysqli_query($con,$selectdata);
$nums=mysqli_num_rows($query);
$res=mysqli_fetch_array($query);
echo $res[1];
echo $nums; 



?>