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
        <div id="headerDiv" class="layout-div">
            <div>
                <a href="<?php echo $configuration->baseurl; ?>"><div id="logoDiv">&nbsp;</div></a>
                <div id="searchDiv">
                    <input type="text" id="searchTextbox" name="searchTextbox" />
                    <label for="searchTextbox">&#x55;</label>
                </div>
            </div>
        </div>
        <div id="menuDiv" class="layout-div">
            <ul>
                <li>
                    <a href="hosted.php">Hosted Services</a>
                </li>
                <li>
                    <a href="onpremises.php">On-premises Tools</a>
                </li>
                <li>
                    <a href="planning.php">Planning</a>
                </li>
            </ul>
        </div>
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
        <div id="footerDiv" class="layout-div">
            <div>
                <div>(NPA) NXX - XXXX</div>
                <div>support@gohoplite.com</div>
            </div>
        </div>
    </body>
</html>
