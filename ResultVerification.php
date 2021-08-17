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
                            <h1 class="border-title border-left">Result Verification</h1>
                            <ol class="breadcrumb">
                                <li>Home</li>
                                <li><a href="CertificateVerification.aspx">Result Verification</a></li>
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
    <section id="Section2" class="main-container">
        <asp:UpdatePanel ID="up" runat="server">
            <ContentTemplate>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <asp:Label ID="Error" runat="server"></asp:Label>
                        </div>
                        <div class="col-lg-4" style="font-size: 23px; padding-top: 10px; font-weight: bold; text-transform: uppercase;">
                            <label>Enter Student Application No. :</label>
                        </div>
                        <div class="col-lg-3 col-xs-9">
                            <asp:TextBox ID="txtSearch" runat="server" CssClass="form-control" placeholder="Enter Students Application No" Style="text-transform: uppercase;"></asp:TextBox>
                        </div>
                        <div class="col-lg-5 col-xs-3">
                            <asp:Button ID="Search" runat="server" Text="SUBMIT" OnClick="Click_Search" CssClass="btn" />
                            <div class="text-right">
                                <button type="button" class="btn btn-info" onclick="printContent('printarea');" id="button" runat="server" visible="false">
                                    <span class="fa fa-print">&nbsp; PRINT</span>
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <hr />

                        </div>
                    </div>
                    <asp:Label ID="Data" runat="server"></asp:Label>                    

                </div>
            </ContentTemplate>
            <Triggers>
                <asp:AsyncPostBackTrigger ControlID="Search" />
            </Triggers>
        </asp:UpdatePanel>
    </section>
        <script>
            function printContent(el) {
                var restorepage = document.body.innerHTML;
                var printcontent = document.getElementById(el).innerHTML;
                var htmlToPrint = '' +
                    '<style type="text/css">' +
                    'table th, table td {' +
                    'border:1px solid #000;' +
                    'padding;0.5em;' +
                    '}' +
                    '</style>';
                htmlToPrint += printcontent.outerHTML;

                document.body.innerHTML = printcontent;

                window.print();
                document.body.innerHTML = restorepage;
            }
    </script>

     <!-- footer -->
     <?php include 'includes/footer.php' ?>
    <?php
    include 'includes/script.php' ?>
    </body>
</html>