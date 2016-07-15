<!doctype html>
<html>
    <head>
        <title>Hoplite, On Premesis Options</title>
        <script type="text/javascript" src="../script/jquery.js"></script>
        <script type="text/javascript" src="../script/jquery-ui.min.js"></script>

        <link rel="stylesheet" type="text/css" href="../style/jquery-ui.min.css" />
        <link rel="stylesheet" type="text/css" href="../style/font-icon.css" />
        <link rel="stylesheet" type="text/css" href="../style/font-awesome.min.css" />
        <link rel="stylesheet" type="text/css" href="../style/base.css" />
        <link rel="stylesheet" type="text/css" href="../style/index.css" />
    </head>
    <body>
        <script type="text/javascript">
            jQuery(document).ready(function() {
                jQuery("#optionBannerDiv .option-banner").click(function() {
                    jQuery("#optionBannerDiv .option-banner").removeClass("selected");
                    jQuery(this).addClass("selected");
                });
            });
        </script>

        <style type="text/css">

        </style>

        <div id="headerDiv" class="layout-div">
            <div>
                <div id="logoDiv">&nbsp;</div>
                    <div id="searchDiv">
                        <input type="text" id="searchTextbox" name="searchTextbox" />
                        <label for="searchTextbox">&#x55;</label>
                    </div>
                </div>
            </div>

            <div id="menuDiv" class="layout-div">
            </div>

            <div id="bannerDiv">
                <div>
                    Choose your configuration
                </div>
            </div>
        </div>

        <div id="contentDiv" class="layout-div">
            <div>
            <div id="optionBannerDiv">
                <div id="productDevelopmentBanner" class="option-banner">
                    <div class="banner-header">
                        <h2>
                            <div class="elegant banner-icon">
                                <i class="fa fa-hdd-o" aria-hidden="true"></i>
                            </div>
                            Purchase Server
                        </h2>
                    </div>
                    <div class="banner-content">
                        <p>
                            <div>Improve performance and expandibility while reducing bandwidth requirement.</div>
                            <br />
                            <div>Give your employees the ability to use their Active Directory or LDAP accounts.</div>
                        </p>
                        <div class="note">A twelve month service agreement is required with a purchase of server.</div>
                    </div>
                </div>

                <div id="automationBanner" class="option-banner">
                    <div class="banner-header">
                        <h2>
                            <div class="elegant banner-icon">
                                <i class="fa fa-clone" aria-hidden="true"></i>
                            </div>
                            Purchase VM
                        </h2>
                    </div>
                    <div class="banner-content">
                        <p>
                            Already have your own virtual infrastructure?
                            We offer VM images to suite your needs.
                        </p>
                        <div class="bold">Supported Types</div>
                        <ul>
                            <li>VM Ware</li>
                            <li>Xen</li>
                            <li>KVM</li>
                        </ul>

                        <div class="note" style="position: relative; bottom: 0px;">A twelve month service agreement is required with a purchase of virtual machine image.</div>
                    </div>
                </div>
                    <div id="softwareBanner" class="option-banner">
                        <div class="banner-header">
                            <h2>
                                <div class="elegant banner-icon">&#x69;</div>
                                Lease Server
                            </h2>
                        </div>
                        <div class="banner-content">
                            <p>
                                Select a lease option that is right for you.
                            </p>
                            <ul>
                                <li>
                                    Annual hardware updates
                                </li>
                                <li>
                                    No long term commitment required
                                </li>
                            </ul>
                            <div class="note" style="position: relative; bottom: 0px;">A refundable security deposit will be required to lease a server.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="footerDiv" class="layout-div">
            <div>
                footer
            </div>
        </div>
    </body>
</html>