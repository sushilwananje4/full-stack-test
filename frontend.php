<!DOCTYPE html>
<html lang="en">
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <link rel="stylesheet" href="easy-responsive-tabs.css">
        <link rel="stylesheet" href="style.css">
        <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
        <style>
            .demo{margin:150px auto;width:980px;}
            .demo h1{margin:0 0 25px;}
            .demo h3{margin:10px 0;}
            pre{background-color:#FFF;}
            @media only screen and (max-width:780px){
                .demo{margin:5%;width:90%;}
                .how-use{display:none;float:left;width:300px;}
            }
            #tabInfo{display:none;}
            .extra-col{
                display:block;
                width:30%;                                     
                background-color: #fff;
                border: 1px solid #c1c1c1;
                float: left; 
                border-radius: 4px;
                clear: none;
                height:300px;
            }
            @media only screen and (min-width:768px){
                .resp-tabs-container{
                    width:30% !important;
                    height:300px;
                    /*min-height: unset !important;*/
                    position: relative;
                }
            }
            @media only screen and (max-width:768px){
                .resp-vtabs .resp-tabs-container{
                    width:100% !important;
                }
                .extra-col{
                    display:none;
                    height:unset;
                }
                .overlay{
                    display:none;                    
                }
            }
            img {
                width:100%;
            }
            #t_image{
                /*padding:0 15px;*/
            }
            .ash {
				/*border: 1px solid #c1c1c1;*/
					border-right-color: rgb(193, 193, 193);
					border-right-style: solid;
					border-right-width: 1px;
				border-right: none;
				background-color: #fff;
				position: relative;
				z-index: 1;
				margin-right: -1px !important;
				margin-top: 30px;
				padding: 15px 15px 15px 15px !important;
			}
        </style>
    </head>
    <body>

        <div class="demo">
            <div id="verticalTab">
                <ul class="resp-tabs-list" style="padding-right: 15px;">
                    <li class="ash"><img src="images/DL-learning.svg" style="height: 32px; width: 32px; margin-bottom: -15px;"></img>&nbsp;&nbsp;&nbsp;<span>Learning</span></li>
                    <li class="ash"><img src="images/DL-technology.svg" style="height: 32px; width: 32px; margin-bottom: -15px;"></img>&nbsp;&nbsp;&nbsp;<span>Technology</span></li>
                    <li class="ash"><img src="images/DL-communication.svg" style="height: 32px; width: 32px; margin-bottom: -15px;"></img>&nbsp;&nbsp;&nbsp;<span>Communication</span></li>				
                </ul>
                <div class="resp-tabs-container">
                    <div>
                    <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "crud-ajax";

                        // Create connection
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        } 

                        $sql = "SELECT username FROM userinfo WHERE id = '1'";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo $row["username"];
                            }
                        } else {
                            echo "0 results";
                        }
                        $conn->close();
                        
                        ?> 
                        <!-- <img src="images/Capture.png" style="height: 300px;"><i class="arrowmiddle"></i> -->
                    </div>
                    <div>
                    <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "crud-ajax";

                        // Create connection
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        } 

                        $sql = "SELECT username FROM userinfo WHERE id = '2'";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo $row["username"];
                            }
                        } else {
                            echo "0 results";
                        }
                        $conn->close();
                        
                        ?> 
                        <!-- <img src="images/Capture.png" style="height: 300px;"><i class="arrowmiddle"></i> -->
                    </div>
                    <div>
                    <?php
                        $servername = "localhost";
                        $username = "root";
                        $password = "";
                        $dbname = "crud-ajax";

                        // Create connection
                        $conn = new mysqli($servername, $username, $password, $dbname);
                        // Check connection
                        if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                        } 

                        $sql = "SELECT username FROM userinfo WHERE id = '3'";
                        $result = $conn->query($sql);

                        if ($result->num_rows > 0) {
                            // output data of each row
                            while($row = $result->fetch_assoc()) {
                                echo $row["username"];
                            }
                        } else {
                            echo "0 results";
                        }
                        $conn->close();
                        
                        ?> 
                        <!-- <img src="images/Capture.png" style="height: 300px;"><i class="arrowlast"></i> -->
                    </div>	
                    <span class="overlay">
                        <ul>
                            <li><input type="radio" id="radio_0" data-id="0" checked="checked" name="pointer"></li>
                            <li><input type="radio" id="radio_1" data-id="1" name="pointer"></li>
                            <li><input type="radio" id="radio_2" data-id="2" name="pointer"></li>
                        </ul>
                    </span>
                </div>
                <div class="extra-col">
                    <label class="switch">
                        <input type="checkbox" id="ctrl_radio" checked="checked">
                        <span class="slider round" style="top: -100px;bottom: 100px;right: -3px;left: 0px;"></span>
                    </label>
                    <div id="t_image" style="margin-top:-21px;">
                        <img src="images/DL-Learning-1.jpg" style="height: 300px;">
                    </div>
                </div>
            </div>
            <br />
            <div style="height: 30px; clear: both"></div>
        </div>
    </body>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="easy-responsive-tabs.js"></script>
    <script>
        var imageArray = ['images/DL-Learning-1.jpg','images/DL-Technology.jpg','images/DL-Communication.jpg'];
        $(document).ready(function () {
            $('#verticalTab').easyResponsiveTabs({
                type: 'vertical',
                width: '300px',
                fit: true
            });
            $('#ctrl_radio').click(function () {
                if ($(this).is(':checked')) {
                    var i = $('input[id^="radio_"]:checked').data('id');
                    $('#t_image').html('<img src="'+ imageArray[i] +'" style="height: 300px;">');
                } else {
                    $('#t_image').html('');
                }
            });
            $('li.resp-tab-item').click(function () {

                $('input[id^="radio_"]').prop('checked', false);
                $('#radio_' + $(this).index()).prop('checked', true);
            });
            $('input[id^="radio_"]').click(function () {
                var i = $(this).data('id');
                if ($('#ctrl_radio').is(':checked')) {
                    $('#t_image').html('<img src="'+ imageArray[i] +'" style="height: 300px;">');
                }
            });
        });
    </script>

</html>
