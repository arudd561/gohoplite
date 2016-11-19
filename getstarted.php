<?php
    $configuration = json_decode(file_get_contents("../site.conf"));
?>
<!doctype html>
<html>
    <head>
        <title>Hoplite</title>

        <script type="text/javascript" src="script/jquery.js"></script>
        <script type="text/javascript" src="script/jquery-ui.min.js"></script>

        <link rel="icon" type="image/png" href="favicon.png?v1" />
        <link rel="stylesheet" type="text/css" href="style/font-icon.css" />
        <link rel="stylesheet" type="text/css" href="style/base.css" />
        <link rel="stylesheet" type="text/css" href="style/getstarted.css" />
        <link rel="stylesheet" type="text/css" href="style/jquery-ui.min.css" />
    </head>
    <body>
        <script type="text/javascript"></script>
        <style type="text/css">
        </style>
        <?php include("partial/header.php"); ?>
        <div id="bannerContent" style="width: 100%; min-height: 500px;">
            &nsbsp;
        </div>
        <div id="contentDiv" class="layout-div">
            <div class="index-content-div">
                <!--div style="color: #cccccc; padding: 1em 15% 2em 15%; margin: 2em 0px; border-top: 2px ridge #555555; border-bottom: 2px ridge #555555; background-color: #333333; opacity: .9;"></div-->
                <div style="text-align: center; margin: 1em 0px 2em;">
                    <!--p style="font-size: 2.3em; color: #cb9a34; display: inline; position: relative; top: 4.5em; left: 8em;" -->
                    <p style="font-size: 2.3em; color: #cb9a34; display: inline;">
                    Comprehensive tools to help manage your business.
                    </p>
                </div>
                <div style="white-space: nowrap; text-align: center;">
                    <div style="margin: 0px 1em; height: 300px; min-width: 200px; width: 30%; border: 1px solid #555555; border-radius: 3px; display: inline-block; vertical-align: top; opacity: 1; background-color: #222222;">
                        <h2>S<span class="smaller-text">OFTWARE</span></h2>
                        &nbsp;
                    </div>
                    <div style="margin: 0px 1em; height: 300px; min-width: 200px; width: 30%; border: 1px solid #555555; border-radius: 3px; display: inline-block; vertical-align: top; opacity: 1; background-color: #222222;">
                        <h2>D<span class="smaller-text">EPLOYMENT</span></h2>
                        &nbsp;
                    </div>
                    <div style="margin: 0px 1em; height: 300px; min-width: 200px; width: 30%; border: 1px solid #555555; border-radius: 3px; display: inline-block; vertical-align: top; opacity: 1; background-color: #222222;">
                        <h2>G<span class="smaller-text">ET</span> S<span class="smaller-text">TARTED</span></h2>
                        &nbsp;
                    </div>
                </div>
            </div>
            
            <?php include("partial/contact.php"); ?>

        </div>
        <?php /*include("partial/footer.php");*/ ?>
    </body>
</html>
