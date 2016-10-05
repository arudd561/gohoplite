<?php
    $configuration = json_decode(file_get_contents("../site.conf"));
?>
<!doctype html>
<html>
    <head>
        <title>Hoplite</title>
        <link rel="icon" type="image/png" href="favicon.png?v1" />
        <link rel="stylesheet" type="text/css" href="style/font-icon.css" />
        <link rel="stylesheet" type="text/css" href="style/base.css" />
        <link rel="stylesheet" type="text/css" href="style/index.css" />
    </head>
    <body>
        <script type="text/javascript"></script>
        <style type="text/css">
        </style>
        <?php include("partial/header.php"); ?>
        <div id="bannerDiv">
            <div id="bannerContent" style="background: #ffffff url('images/cityscape_02.jpg') no-repeat center 25%; background-size: cover;">
            </div>
            <p>
                Great thinking deserves great tools. Intelligent thinking in action. A comprehensive tool set to help manage your business.
            </p>
        </div>
        <div id="contentDiv" class="layout-div">
            <div>
                &nbsp;
            </div>
        </div>
        <?php include("partial/footer.php"); ?>
    </body>
</html>
