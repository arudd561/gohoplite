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
            <div id="bannerContent" style="background: #ffffff url('images/team_collab_02.jpg') no-repeat center 20%; background-size: cover;">
            </div>
            <p>
                Great thinking deserves great tools. Intelligent thinking in action. A comprehensive tool set to help manage your business.
            </p>
        </div>
        <div id="contentDiv" class="layout-div">
            <div>
                <div class="section">
                    <div>
                        <div class="section-icon">
                            <img src="images/team_collab_04.jpg" width="100%" />
                        </div>
                        <div class="section-message">
                            <h2>Project Management</h2>
                            <div class="section-content">
                                <span style="font-weight: 600">Task Tracking</span>
                                <ul>
                                    <li>Task Logging</li>
                                    <li>Time Sheets and Estimation</li>
                                    <li>Release Planning</li>
                                    <li>Prioritization</li>
                                    <li>Assignment</li>
                                    <li>Custom List Views</li>
                                </ul>
                                <span style="font-weight: 600">Ticketing</span>
                                <ul>
                                    <li>Email Collection</li>
                                    <li>Compartmentalize Issues By Project</li>
                                    <li>*Private Issues, Compartment by client/user*</li>
                                </ul>
                                <span style="font-weight: 600">Project Tracking</span>
                                <ul>
                                    <li>Calendar</li>
                                    <li>GANTT</li>
                                    <li>Time Sheets</li>
                                    <li>Release Planning</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section">
                    <div>
                        <div class="section-icon">
                            <img src="images/computer_publish.png" width="100%" />
                        </div>
                        <div class="section-message">
                            <h2>Web Publishing</h2>
                            <div class="section-content">
                                <span style="font-weight: 600">Wiki</span>
                                <ul>
                                    <li>etc</li>
                                    <li>etc</li>
                                    <li>etc</li>
                                </ul>
                                <span style="font-weight: 600">Blog</span>
                                <ul>
                                    <li>etc</li>
                                    <li>etc</li>
                                    <li>etc</li>
                                </ul>
                                <span style="font-weight: 600">News</span>
                                <ul>
                                    <li>etc</li>
                                    <li>etc</li>
                                    <li>etc</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section">
                    <div>
                        <div class="section-icon">
                            <img src="images/customer_01.jpg" width="100%" />
                        </div>
                        <div class="section-message">
                            <h2>Customer Relationships</h2>
                            <div class="section-content">
                                <span style="font-weight: 600">Contacts</span>
                                <ul>
                                    <li>etc</li>
                                    <li>etc</li>
                                    <li>etc</li>
                                </ul>
                                <span style="font-weight: 600">Events</span>
                                <ul>
                                    <li>etc</li>
                                    <li>etc</li>
                                    <li>etc</li>
                                </ul>
                                <span style="font-weight: 600">History</span>
                                <ul>
                                    <li>etc</li>
                                    <li>etc</li>
                                    <li>etc</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section">
                    <div class="section-header">
                        <h2>
                            <span>Online Sales</span>
                            <div class="elegant banner-icon">&#xe0df;</div>
                        </h2>
                    </div>
                    <div class="section-content">
                        1234
                    </div>
                </div>
                <div class="section">
                    <div class="section-header">
                        <h2>
                            <span>Voice and Text Communication</span>
                            <div class="elegant banner-icon">&#xe0df;</div>
                        </h2>
                    </div>
                    <div class="section-content">
                        1234
                    </div>
                </div>
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
