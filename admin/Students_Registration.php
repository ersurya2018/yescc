<?php
session_destroy();
header("Location:../Login.php");
?>
<!DOCTYPE html>
<html>
    <head>
    <style>
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
            width: 1065px;
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
            border-color: threedface;
            border-image: initial;
        }
        .ibox
        {
        width:290px;
        border-radius: 10px;
        margin-top: 5px;
        }
    </style>
    </head>
    <body>
        <!--header include-->
    <?php include 'header.php' ?>
    <!--main section-->
    <div class="content-wrapper">
        <div class="box">
            <div class="box-header">
                <h3 class="breadcrumb box-title">Registration</h3>
                    <ol class="breadcrumb pull-right">
                        <li><a href="Dashboard.php"><i class="fa fa-dashboard"></i>&nbsp;Dashboard</a></li>
                        <li class="active">Registration</li>
                    </ol>
            </div>
                <hr />
            <div class="box-body">
                            <div id="example1_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                <div class="row">
                                   
                                    <div class="mid_box" style="height:400px; overflow-y:auto;">

                                         
                                        <div id="pnlApplicationForm">

                                            <table class="table table-responsive table-hover">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <div class="form_box_level" id="Image" runat="server">
                                                                <img src="../Images/StepImage.png" id="imgstep" style="border-width: 0px; width: 1100px" />
                                                                
                                                            </div>

                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                          <form action="" method="post">  
                                            <div id="pnlmaster">
                                                <table class="table table-responsive table-hover">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div id="Div1">

                                                                    <table style="width: 100%;" cellspacing="0" cellpadding="0">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td align="left">
                                                                                    <div class="form_tab">
                                                                                        <span id="Span1">Personal Details /  व्यक्तिगत विवरण</span>
                                                                                    </div>
                                                                                    <div class="clearfix"></div>
                                                                                    <hr />
                                                                                    <table cellspacing="4" cellpadding="2" width="100%" class="tablerowpad">
                                                                                        <tbody>
                                                                                            <tr>
                                                                                                <td align="right" width="25%">
                                                                                                    <span id="lblCNameCap">Name :  नाम</span>
                                                                                                    :
                                                                                                    </td>
                                                                                                <td align="right" width="2%">
                                                                                                    <input type="text" class="ibox" name="name" placeholder=" Name Please" required/>
                                                                                                </td>
                                                                                                <td align="right" width="25%">
                                                                                                    <span id="lblFNameCap">Father's Name : पिता का नाम</span>
                                                                                                    :
                                                                                                </td>
                                                                                                <td align="left" width="2%">
                                                                                                    <input type="text" name="fname" class="ibox" placeholder=" Father's Name" required/>
                                                                                                </td>  
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td align="right" width="21%">
                                                                                                    <span>Mother's Name :  मां का नाम</span>
                                                                                                    :
                                                                                                </td>
                                                                                                <td align="right" width="2%">
                                                                                                    <input type="text" name="mname" class="ibox" placeholder=" Mother's Name" required/>
                                                                                                </td>
                                                                                            
                                                                                                <td align="right" width="25%">
                                                                                                    <span id="lblDOBCap">Date of Birth :  जन्म तिथि</span>:
                                                                                                </td>
                                                                                            <td align="left" width="15%">
                                                                                            
                                                                                                <select style="width:90px; border-radius:5px" name="dbirth" >
                                                                                                <?php
                                                                                                    $i="1"; ?>
                                                                                                    <option><?php echo ("Date") ;?></option>
                                                                                                    <?php
                                                                                                    while($i<=31)
                                                                                                    {?>
                                                                                                        <option><?php echo ("$i") ?></option>
                                                                                                        <?php
                                                                                                        $i=$i+1;
                                                                                                    }
                                                                                                    ?>
                                                                                                    </select>
                                                                                                    <select style="width:90px; border-radius:5px" name="mbirth" >
                                                                                                    <?php
                                                                                                    $j="1"; ?>
                                                                                                    <option><?php echo ("Month") ;?></option>
                                                                                                    <?php
                                                                                                    while($j<=12)
                                                                                                    {?>
                                                                                                        <option><?php echo ("$j") ?></option>
                                                                                                        <?php
                                                                                                        $j=$j+1;
                                                                                                    }
                                                                                                    ?>
                                                                                                    </select>
                                                                                                    <select style="width:90px; border-radius:5px"name="ybirth">
                                                                                                    <?php
                                                                                                    $k="1991"; ?>
                                                                                                    <option><?php echo ("year") ;?></option>
                                                                                                    <?php
                                                                                                    while($k<=2017)
                                                                                                    {?>
                                                                                                        <option><?php echo ("$k") ?></option>
                                                                                                        <?php
                                                                                                        $k=$k+1;
                                                                                                    }
                                                                                                    ?>
                                                                                                    </select>
                                                                                                </td>
                                                                                                    
                                                                                            </tr>

                                                                                            <tr>
                                                                                                <td align="right">
                                                                                                    <span id="lbltypeofidentification">Identity Type :   पहचान के प्रकार</span>
                                                                                                    :
                                                                                                </td>
                                                                                                <td align="left" >
                                                                                                    <select class="ibox" name="Identity">
                                                                                                        <option Value="0">--Select--</option>
                                                                                                        <option Value="1"> Voter ID</option>
                                                                                                        <option Value="2"> Aadhar ID</option>
                                                                                                        <option Value="3"> Driver License(DL)</option>
                                                                                                        <option Value="4">Any Other Valid Govt Identity with photograph</option>
                                                                                                    </select>
                                                                                                </td>
                                                                                                <td align="right">
                                                                                                    <span id="lblGenderCap">Gender :  लिंग</span>
                                                                                                    :
                                                                                                </td>
                                                                                                <td align="left">
                                                                                                    <input type="radio" name="gen" value="male"/>Male
                                                                                                    <input type="radio" name="gen" value="female"/>Female
                                                                                                    <input type="radio" name="gen" value="other"/>Transgender
                                                                                                </td>
                                                                                            </tr>
                                                                                            <tr>
                                                                                                <td align="right">
                                                                                                    <span id="lblCaptypeofid">Identity Card Number :   पहचान पत्र संख्या</span>:
                                                                                                </td>
                                                                                                <td align="right" width="2%">
                                                                                                    <input type="text" name="Identityno" class="ibox" placeholder=" Identity Card Number"/>
                                                                                                </td>
                                                                                            </tr>
                                                                                        </tbody>
                                                                                    </table>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                                    <tbody>
                                                        <tr>
                                                            <td>
                                                                <div class="form_tab">
                                                                    <span id="lblContactDetailsSectionHeader">Contact Details : संपर्क विवरण</span>
                                                                </div>
                                                                <hr/>
                                                                <table cellspacing="4" cellpadding="2" width="100%" class="tablerowpad">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td align="right" width="25%">
                                                                                <span id="lblAddressCap">Communication Address :  संचार पता</span>:
                                                                            </td>
                                                                            <td align="right" width="2%">
                                                                                <input type="text" name="address" class="ibox" placeholder=" Communication Address"/>
                                                                            </td>
                                                                        
                                                                            <td align="right" width="25%">
                                                                                <span id="lbllocalityCap">Locality :  इलाका</span>(Optional):
                                                                            </td>
                                                                            <td align="left" width="2%">
                                                                                <input type="text" name="local" class="ibox" placeholder=" Locality"/>
                                                                            </td>
                                                                            
                                                                        </tr>
                                                                        <tr>

                                                                            <td align="right">
                                                                                <span id="lblCityCap">City/Town/Village : शहर कस्बा और गाँव</span>:
                                                                            </td>
                                                                            <td align="right" width="2%">
                                                                                <input type="text" name="city" class="ibox" placeholder=" City/Town/Village"/>
                                                                            </td>
                                                                        
                                                                            <td align="right">
                                                                                <span id="lblCountryAddressCap">Country</span>:
                                                                            </td>
                                                                            <td align="left" width="2%">
                                                                                <input type="text" name="country" class="ibox" placeholder=" Country"/>
                                                                            </td>
                                                                        

                                                                        </tr>
                                                                        <tr id="trStateDist">
                                                                            <td align="right">
                                                                                <span id="lblStateAddressCap">State : राज्य</span>:
                                                                            </td>
                                                                            <td align="left">
                                                                                <select class="ibox" name="state">
                                                                                    <option Value="0">--Select--</option >
                                                                                    <option Value="01">ANDAMAN AND NICOBAR ISLANDS </option>
                                                                                    <option Value="02">ANDHRA PRADESH</option>
                                                                                    <option Value="03">ARUNACHAL PRADESH</option>
                                                                                    <option Value="04">ASSAM</option>
                                                                                    <option Value="05">BIHAR</option>
                                                                                    <option Value="06">CHANDIGARH </option>
                                                                                    <option Value="07">CHHATTISGARH</option>
                                                                                    <option Value="08">DADRA AND NAGAR HAVELI </option>
                                                                                    <option Value="09">DAMAN AND DIU </option>
                                                                                    <option Value="10">DELHI</option>
                                                                                    <option Value="11">GOA</option>
                                                                                    <option Value="12">GUJARAT</option>
                                                                                    <option Value="13">HARYANA</option>
                                                                                    <option Value="14">HIMACHAL PRADESH</option>
                                                                                    <option Value="15">JAMMU AND KASHMIR</option>
                                                                                    <option Value="16">JHARKHAND</option>
                                                                                    <option Value="17">KARNATAKA</option>
                                                                                    <option Value="18">KERALA</option>
                                                                                    <option Value="37">LADAKH</option>
                                                                                    <option Value="19">LAKSHADWEEP </option>
                                                                                    <option Value="20">MADHYA PRADESH</option>
                                                                                    <option Value="21">MAHARASTRA</option>
                                                                                    <option Value="22">MANIPUR</option>
                                                                                    <option Value="23">MEGHALAYA</option>
                                                                                    <option Value="24">MIZORAM</option>
                                                                                    <option Value="25">NAGALAND</option>
                                                                                    <option Value="26">ODISHA</option>
                                                                                    <option Value="99">Others</option>
                                                                                    <option Value="27">PUDUCHERRY </option>
                                                                                    <option Value="28">PUNJAB</option>
                                                                                    <option Value="29">RAJASTHAN</option>
                                                                                    <option Value="30">SIKKIM</option>
                                                                                    <option Value="31">TAMIL NADU</option>
                                                                                    <option Value="36">TELANGANA</option>
                                                                                    <option Value="32">TRIPURA</option>
                                                                                    <option Value="33">UTTAR PRADESH</option>
                                                                                    <option Value="34">UTTARAKHAND</option>
                                                                                    <option Value="35">WEST BENGAL</option>
                                                                                </select>
                                                                                <br>
                                                                            </td>
                                                                            <td align="right" width="25%">
                                                                                <span id="lblDistrictAddressCap">District : जिला</span>:
                                                                            </td>
                                                                            <td align="left" width="2%">
                                                                                <input type="text" name="dist" class="ibox" placeholder="District" required/>
                                                                            </td>
                                                                        
                                                                        </tr>


                                                                        <tr>
                                                                            <td align="right" width="25%">
                                                                                <span id="lblPincodeCap">Pin Code :  पिन कोड</span>:
                                                                            </td>
                                                                            <td align="left" width="2%">
                                                                                <input type="text" name="pincode" class="ibox" placeholder=" Code-Pin"/>
                                                                            </td>
                                                                            <td align="right" width="25%">
                                                                                <span id="lblLandLineNoCap">LandLineNo : </span>
                                                                            </td>
                                                                            <td align="left" width="2%">
                                                                                <input type="text" name="LLNo" class="ibox" placeholder="LandLineNo"/>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td align="right" width="25%">
                                                                                <span id="lbleidCap">Email Address :  ईमेल </span>:
                                                                            </td>
                                                                            <td align="left" width="2%">
                                                                                <input type="Email" name="email" class="ibox" placeholder=" Email Address"/>
                                                                            </td>
                                                                        
                                                                            <td align="right" width="25%">
                                                                                <span id="lblmobilenoCap">Mobile Number : मोबाइल नंबर </span>:
                                                                            </td>
                                                                            <td align="left" width="2%">
                                                                                <input type="number" name="mob" class="ibox" placeholder=" Mobile Number"/>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                                    <div id="pnlChoosePasswordDetails" runat="server">
                                                        <table style="width: 100%;" cellspacing="0" cellpadding="0">
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <table style="width: 100%;" cellspacing="0" cellpadding="0">
                                                                                    <tbody>
                                                                                        <tr>
                                                                                            <td align="left">
                                                                                                <div class="form_tab">
                                                                                                    Choose Password
                                                                                                </div>

                                                                                                <div class="clearfix"></div>
                                                                                                <hr />

                                                                                                <table cellspacing="4" cellpadding="2" width="100%" class="tablerowpad">
                                                                                                    <tbody>
                                                                                                        <tr>
                                                                                                            <td align="right" width="25%">
                                                                                                                <span id="lblPasswordCap">Password :  पासवर्ड</span>:
                                                                                                            </td>
                                                                                                            <td align="left" width="2%">
                                                                                                                <input type="Password" name="pass1" class="ibox" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/>
                                                                                                            </td>
                                                                                                        
                                                                                                            <td align="right" width="25%">
                                                                                                                <span id="lblConfirmPasswordCap">Confirm Password : पासवर्ड की पुष्टि कीजिये</span>:
                                                                                                            </td>
                                                                                                            <td align="left" width="2%">
                                                                                                                <input type="Password" name="pass2"  class="ibox" placeholder="Reenter Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required/><span id="mess"><mess>
                                                                                                            </td>
                                                                                                            
                                                                                                        </tr>
                                                                                                        <tr>
                                                                                                            <td align="right">
                                                                                                                <span id="lblSecurityQuestionCap">Security Question :  सुरक्षा प्रश्न</span>:
                                                                                                            </td>
                                                                                                            <td align="left">
                                                                                                            <!-- <asp:DropDownList ID="ddlSecurityQuestion" runat="server" Style="width: 200px;">-->
                                                                                                                <select class="ibox" name="secuque">
                                                                                                                    <option Value="0" >--Select--</option>
                                                                                                                    <option Value="01">Which is the website you rarely visit ?</option>
                                                                                                                    <option Value="02">What is the name of  your first school?</option>
                                                                                                                    <option Value="03">What is your neighbour's pet name ?</option>
                                                                                                                    <option Value="04">What is the registration number of your first vehicle ?</option>
                                                                                                                    <option Value="05">Which is your favourite book ?</option>

                                                                                                                </select>
                                                                                                            
                                                                                                            <td align="right">
                                                                                                                <span id="lblSecurityAnswerCap">Security Answer : सुरक्षा जवाब</span>:
                                                                                                            </td>
                                                                                                            <td align="left" width="2%">
                                                                                                                <input type="text" name="secuans" class="ibox" placeholder="Security Answer"/>
                                                                                                            </td>
                                                                                                    </tbody>
                                                                                                </table>
                                                                                            </td>
                                                                                        </tr>
                                                                                    </tbody>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                        </table>
                                                    </div>
                                                <table cellspacing="6" cellpadding="4" width="100%">
                                                <tr><td><input type="submit" name="submit" style=" width:50%; margin-left: 25%; margin-top: 1%;" class="btn btn-success"></td></tr>
                                                </table>
                                            </div>
                                          </form>
                                        </div>
                                    </div>    
                                </div>
                            </div>            
        </div>
    </div>
    <!--footer include-->
    <?php include 'footer.php' ?>
    </body>
</html>

<?php
include '../includes/connection.php';
if(isset($_POST['submit']))
{
    $name=$_POST['name'];
    $fname=$_POST['fname'];
    $mname=$_POST['mname'];
    $dbirth=$_POST['dbirth'];
    $mbirth=$_POST['mbirth'];
    $ybirth=$_POST['ybirth'];
    $Identity=$_POST['Identity'];
    $gen=$_POST['gen'];
    $Identityno=$_POST['Identityno'];
    $commuaddress=$_POST['address'];
    $locality=$_POST['local'];
    $city=$_POST['city'];
    $country=$_POST['country'];
    $state=$_POST['state'];
    $dist=$_POST['dist'];
    $pin=$_POST['pincode'];
    $LLNo=$_POST['LLNo'];
    $email=$_POST['email'];
    $mob=$_POST['mob'];
    $pass1=$_POST['pass1'];
    #$pass2=$_POST['pass2'];
    $secuque=$_POST['secuque'];
    $secuans=$_POST['secuans'];
    $birth=$dbirth."/".$mbirth."/".$ybirth;
    $insertquery="INSERT INTO registration (Name, FName, MName, Dob, IdentityType, IdentityNo, Gender, ComAddress, Locality, City, Country, State, District, PinCode, LandLineNo, MobileNo, Email, Password, SecurityQue, SecurityAns) VALUES('$name','$fname','$mname','$birth','$Identity','$Identityno','$gen','$commuaddress','$locality','$city','$country','$state','$dist','$pin','$LLNo','$mob','$email','$pass1','$secuque','$secuans')";
    $res=mysqli_query($con,$insertquery);
    if($res){
        ?>
        <script>
            location.replace("Dashboard.php");
            alert("data save properly");
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