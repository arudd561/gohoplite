<?php
        $configuration = json_decode(file_get_contents("../site.conf"));
?>
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
