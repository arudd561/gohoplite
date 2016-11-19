<?php
    $configuration = json_decode(file_get_contents("../../site.conf"));
?>
<!doctype html>
<html>
    <head>
        <title>Hoplite</title>

        <script type="text/javascript" src="../script/jquery.js"></script>
        <script type="text/javascript" src="../script/jquery-ui.min.js"></script>

        <link rel="icon" type="image/png" href="../favicon.png?v1" />
        <link rel="stylesheet" type="text/css" href="../style/font-icon.css" />
        <link rel="stylesheet" type="text/css" href="../style/base.css" />
        <link rel="stylesheet" type="text/css" href="../style/index.css" />
        <link rel="stylesheet" type="text/css" href="../style/jquery-ui.min.css" />
    </head>
    <body>
        <script type="text/javascript"></script>
        <style type="text/css">
        </style>
        <?php include("../partial/header.php"); ?>
        <div id="bannerContent" style="width: 100%; min-height: 500px;">
            &nsbsp;
        </div>
        <div id="contentDiv" class="layout-div">
            <div class="index-content-div">
                <!--div style="color: #cccccc; padding: 1em 15% 2em 15%; margin: 2em 0px; border-top: 2px ridge #555555; border-bottom: 2px ridge #555555; background-color: #333333; opacity: .9;"></div-->
                <div style="text-align: left; margin: 1em 0px;">
                    <!--p style="font-size: 2.3em; color: #cb9a34; display: inline; position: relative; top: 4.5em; left: 8em;" -->
                    <p style="font-size: 2.3em; color: #cb9a34; display: inline;">
                    Task Tracking
                    </p>
                </div>
                <div style="margin-left: 2em;">
                    <ul style="text-align: left; font-size: .8em;">
                        <li>
                            <span>
                                <h3>Ex 1</h3>
                            </span>
                        </li>
                        <li>
                            <span>
                                <h3>Ex 2</h3>
                            </span>
                        </li>
                        <li>
                            <span>
                                <h3>Ex 3</h3>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <?php include("../partial/footer.php"); ?>
    </body>
</html>
