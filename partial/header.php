<?php
        $configuration = json_decode(file_get_contents("../site.conf"));
?>
        <div id="headerDiv" class="layout-div">
            <div>
                <a href="<?php echo $configuration->baseurl; ?>"><div id="logoDiv">&nbsp;</div></a>
                <div style="float: right; text-align: right;">
                    <div>
                        <a href="#">Sign In</a> | <a href="#">Sign Up</a>
                    </div>
                    <div class="menu-div layout-div">
                        <ul style="display: none;">
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

                        <ul>
                            <li>
                                <a href="hosted.php">S<span class="smaller-text">OFTWARE</span> T<span class="smaller-text">OOLS</span></a>
                            </li>
                            <li>
                                <a href="onpremises.php">D<span class="smaller-text">EPLOYMENT</span> O<span class="smaller-text">PTIONS</span></a>
                            </li>
                            <li>
                                <a href="planning.php">G<span class="smaller-text">ET</span> S<span class="smaller-text">tarted</span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
