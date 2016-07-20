<!doctype html>
<html>
    <head>
        <title>Hoplite, Cloud Options</title>
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

        <style type="text/css"></style>
        <div id="headerDiv" class="layout-div">
            <div>
                <div id="logoDiv">&nbsp;</div>
                <div id="searchDiv">
                    <input type="text" id="searchTextbox" name="searchTextbox" />
                    <label for="searchTextbox">&#x55;</label>
                </div>
            </div>
        </div>
        <div id="menuDiv" class="layout-div"></div>
        <div id="bannerDiv">
            <div>
                Choose your configuration
            </div>
        </div>
        <div id="contentDiv" class="layout-div">
            <div>
                <div id="optionBannerDiv">
                    <div id="productDevelopmentBanner" class="option-banner">
                        <div class="banner-header">
                            <h2>
                                <div class="elegant banner-icon">&#xe031;</div>
                                Premium
                            </h2>
                        </div>
                        <div class="banner-content">
                            <p>
                                <ul>
                                    <li>60GB storage</li>
                                    <li>API Support</li>
                                    <li>Independently Managed</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                    <div id="automationBanner" class="option-banner">
                        <div class="banner-header">
                            <h2>
                                <div class="elegant banner-icon">
                                    <i class="fa fa-certificate" aria-hidden="true"></i>
                                </div>
                                Standard
                            </h2>
                        </div>
                        <div class="banner-content">
                            <p>
                                <ul>
                                    <li>30GB storage</li>
                                    <li>Independently Managed</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                    <div id="softwareBanner" class="option-banner">
                        <div class="banner-header">
                            <h2>
                                <div class="elegant banner-icon">
                                    <i class="fa fa-asterisk" aria-hidden="true"></i>
                                </div>
                                Basic
                            </h2>
                        </div>
                        <div class="banner-content">
                            <p>
                                <ul>
                                    <li>20GB storage</li>
                                    <li>Independently Managed</li>
                                </ul>
                            </p>
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