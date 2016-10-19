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
        <script type="text/javascript" src="script/jquery.js"></script>
        <script type="text/javascript" src="script/jquery-ui.min.js"></script>
        <script type="text/javascript" src="script/esq.js"></script>

        <script type="text/javascript">
            jQuery(document).ready(function() {
                window.fm = new window.esq.FileManager("#test", {
                });
            });
        </script>

        <style type="text/css">
        </style>
        <?php include("partial/header.php"); ?>
        <div id="contentDiv" class="layout-div">
            <div id="test">
            </div>
        </div>
        <?php include("partial/footer.php"); ?>
    </body>
</html>
