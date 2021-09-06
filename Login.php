<?php
// Start the session
session_start();
?>
<!DOCTYPE html>

<html lang="en" class="loading">
<head runat="server">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Apex admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Apex admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
     <title>Yescc</title>

    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900|Montserrat:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/feather/style.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/simple-line-icons/style.css">
    <link rel="stylesheet" type="text/css" href="app-assets/fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/perfect-scrollbar.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/prism.min.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/app.css">
    <link href="css/style.css" rel="stylesheet" />
    <style>
        .form-control
        {
            border-radius: 10px;
        }
    </style>


        <?php
        include 'includes/connection.php';
        if(isset($_POST['logsubmit']))
        {
            $user_id=$_POST['userid'];
            $user_pass=$_POST['userpass'];
            #echo $user_id.$user_pass;
            $uid_search="select * from useraccount where UserId='$user_id' ";
            $query = mysqli_query($con,$uid_search);

            $uid_count=mysqli_num_rows($query);

            if($uid_count){
                $uid_pass= mysqli_fetch_assoc($query);

                $user_pass1=$uid_pass['Password'];

               #$pass_decode = password_verify($user_pass, $user_pass1);
               $pass_decode =($user_pass == $user_pass1);
                if($pass_decode)
                {
                    $selectdata="select * from useraccount";
                    $query=mysqli_query($con,$selectdata);
                    $res=mysqli_fetch_array($query);
                    $email=$res[1];
                    $res[2];
                    $_SESSION['log']=$res[1];

                    ?>
                    <script>
                        alert("Login successfuly...");
                        location.replace("admin/Dashboard.php");
                        //location.replace("contact.php");
                    </script>

                    <?php
                    
                }
                else{
                    ?>
                    <script>
                        alert("Password incorrect....");
                    </script>
                    <?php
                                   
                }
            }
            else{
                ?>
                    <script>
                        alert("Invalid UserId....");
                    </script>
                <?php
                }
        }
        ?>

</head>
<body>
    <form id="form1" runat="server" method="POST">
        <div class="container">
            <div class="row" style="margin-top:50px;">
                <div class="col-lg-4"></div>
                <div class="col-lg-4 tallyslider">
                    <br />
                    <a href="index.php">
                        <img src="images/yescc.png" alt="Webful Vision Eye Care" height="50px" width="350px" /></a>
                    <br />
                    <br />
                    <br />

                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="text" name="userid" class="form-control" placeholder="User ID"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <input type="password" name="userpass" Class="form-control" placeholder="Password"/>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="custom-control custom-checkbox mb-2 mr-sm-2 mb-sm-0 ml-3">
                                    <input type="checkbox" class="custom-control-input" checked id="rememberme">
                                    <label class="custom-control-label float-left" for="rememberme">Remember Me</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <button type="submit" name="logsubmit" ID="BtnLogin" class="x-btn btn-pink btn-block btn-raised" value="Login" OnClick="BtnLogin_Click()">Login</button>
                            <button type="submit" ID="Btnback" Class="x-btn btn-secondary btn-block btn-raised" value="Cancel" OnClick="Btnback_Click">Cancel</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4"></div>
            </div>
        </div>
       <script src="app-assets/vendors/js/core/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="app-assets/vendors/js/core/popper.min.js" type="text/javascript"></script>
        <script src="app-assets/vendors/js/core/bootstrap.min.js" type="text/javascript"></script>
        <script src="app-assets/vendors/js/perfect-scrollbar.jquery.min.js" type="text/javascript"></script>
        <script src="app-assets/vendors/js/prism.min.js" type="text/javascript"></script>
        <script src="app-assets/vendors/js/jquery.matchHeight-min.js" type="text/javascript"></script>
        <script src="app-assets/vendors/js/screenfull.min.js" type="text/javascript"></script>
        <script src="app-assets/vendors/js/pace/pace.min.js" type="text/javascript"></script>
        <script src="app-assets/js/app-sidebar.js" type="text/javascript"></script>
        <script src="app-assets/js/notification-sidebar.js" type="text/javascript"></script>
        <script src="app-assets/js/customizer.js" type="text/javascript"></script>
    </form>
</body>
</html>