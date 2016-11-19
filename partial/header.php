<?php
    $config_attempts = 0;
    $config_path = "site.conf";
    while($config_attempts < 7 && !file_exists($config_path)) {
        $config_path = "../".$config_path;
    }
    $configuration = json_decode(
        file_exists($config_path)
            ? file_get_contents($config_path)
            : "{}");
            
?>
        <div id="headerDiv" class="layout-div">
            <div>
                <a href="<?php echo isset($configuration->baseurl) ? $configuration->baseurl : "/"; ?>"><div id="logoDiv">&nbsp;</div></a>
                <div style="float: right; text-align: right;">
                    <div>
                        <a href="#">Sign In</a> | <a href="#">Sign Up</a>
                    </div>
                    <div class="menu-div layout-div">
                        <ul>
                            <li>
                                <a href="softwaretools.php">S<span class="smaller-text">OFTWARE</span> T<span class="smaller-text">OOLS</span></a>
                            </li>
                            <li>
                                <a href="deployment.php">D<span class="smaller-text">EPLOYMENT</span> O<span class="smaller-text">PTIONS</span></a>
                            </li>
                            <li>
                                <a href="getstarted.php">G<span class="smaller-text">ET</span> S<span class="smaller-text">tarted</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
