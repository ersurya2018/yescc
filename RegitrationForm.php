<!DOCTYPE html>
<html lang="en">
<head>
    
    <?php 
    include 'includes/style.php'; 
    ?>
    <style>
         .rounded_top {
            width: 1201px;
            height: 30px;
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
        .ibox
        {
        width:290px;
        border-radius: 10px;
        margin-top: 5px;
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

    <div class="mid_box">
        <div class="rounded">
            <div id="pnlApplicationForm">
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tbody>
                        <tr>
                            <td>
                                <div class="form_box_level">
                                    <img src="Images/StepImage.png" id="imgstep" style="border-width: 0px; width: 1100px" />
                                    
                                </div>

                            </td>
                        </tr>
                    </tbody>
                </table>
                <form action="" method="post">
                        <div id="pnlmaster">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tbody>
                                    <tr>
                                        <td>
                                            <table style="width: 100%;" cellspacing="0" cellpadding="0">
                                                    <tbody>
                                                        <tr>
                                                            <td align="left">
                                                                <div class="form_tab">
                                                                    <span id="Span1">Personal Details /  व्यक्तिगत विवरण</span>
                                                                </div>
                                                                <hr />
                                                                <table cellspacing="4" cellpadding="2" width="100%" class="tablerowpad">
                                                                    <tbody>
                                                                        <tr class="ttd">
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
                                                                        <tr class="tablerow">
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
                                                                            
                                                                            <select style="width:90px; border-radius:5px" >
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
                                                                                    <select style="width:90px; border-radius:5px" >
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
                                                                                    <select style="width:90px; border-radius:5px">
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
                                                                            <td align="left">
                                                                                <select class="ibox">
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
                                                                                <select class="ibox">
                                                                                    <option Value="0">--Select--</option>
                                                                                    <option Value="01">Male</option>
                                                                                    <option Value="02">Female</option>
                                                                                    <option Value="03">Transgender</option>
                                                                                </select>
                                                                                <span id="valname9" class="ValidatorError" style="color: Red; display: none;">Required ?</span>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td align="right">
                                                                                <span id="lblCaptypeofid">Identity Card Number :   पहचान पत्र संख्या</span>:
                                                                            </td>
                                                                            <td align="right" width="2%">
                                                                                <input type="text" name="prof" class="ibox" placeholder=" Identity Card Number"/>
                                                                            </td>
                                                                        </tr>
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
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tbody>
                                    <tr>
                                        <td>
                                            <table style="width: 100%;" cellspacing="0" cellpadding="0">
                                                    <tbody>
                                                        <tr>
                                                            <td align="left">
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
                                                                                <select class="ibox">
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
                                                                                <input type="number" name="country" class="ibox" placeholder=" Mobile Number"/>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                    </tr>
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
                                                                                <input type="Password" name="pass" class="ibox" placeholder="Password"/>
                                                                            </td>
                                                                        
                                                                            <td align="right" width="25%">
                                                                                <span id="lblConfirmPasswordCap">Confirm Password : पासवर्ड की पुष्टि कीजिये</span>:
                                                                            </td>
                                                                            <td align="left" width="2%">
                                                                                <input type="Password" name="pass" class="ibox" placeholder="Password"/>
                                                                            </td>
                                                                            
                                                                        </tr>
                                                                        <tr>
                                                                            <td align="right">
                                                                                <span id="lblSecurityQuestionCap">Security Question :  सुरक्षा प्रश्न</span>:
                                                                            </td>
                                                                            <td align="left">
                                                                            <!-- <asp:DropDownList ID="ddlSecurityQuestion" runat="server" Style="width: 200px;">-->
                                                                                <select class="ibox">
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
                                                                                <input type="text" name="securiity" class="ibox" placeholder="Security Answer"/>
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
                            <table>
                                <tr><td><input type="submit" style=" width:500px; margin-left: 350px;" class="btn btn-success">Success</button></td></tr>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>    
     <!-- footer -->
     <?php include 'includes/footer.php' ?>
    <?php
    include 'includes/script.php' ?>
</body>
</html>