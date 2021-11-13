<?php
    $username = $_GET['username'];
    echo $username;
?>
<html>
    <head>
        <script src="JQ.js" > </script>
        <script>
            $("#app").click(
                
            );
            $("#app").click();
        </script>
    <style>
            body{
                margin: 0px 0px;
                background-image: url('logBG.jpg');
                background-size: 1380px 760px;
                background-repeat: no-repeat;
            }
            #container{
                width: 350px;
                background-color:  #ffffff;
                box-shadow: 0px 0px 5px white;
                border: 1px solid white;
            }
            #logForm{
                width: 350px;
                background-color:  #ffffff;
                
            }
            .inp{
                margin: 15px 10px;
                width: 300px;
                height: 40px;
                border-bottom: 2px solid darkgray;
                border-left: none;
                border-right: none;
                border-top: none;
                font-weight: bold;
                font-size: 15px;
            }
            #bar{
                margin: 0px 0px;
                width:99%;
                height: 50px;
                border : 1px solid white;
                box-shadow: 0px 0px 5px white;
                background-color: white;
            }
            #app{
                margin : 0px 15px;
                width:47%;
                height:50px;
                background-color:darkkhaki;
                box-shadow: -5px 0px 5px black;
                border-radius: 5px;
                float:right;
            }
            #appView{
                width:47%;
                height:50px;
                background-color:darkkhaki;
                box-shadow: -5px 0px 5px black;
                border-radius: 5px;
                float:right;
            }
            h2{
                color: red;
            }
        </style>
    </head>
    <body>
        <div id="bar">
            <div id="app"><center><h2>Request Appointment</h2></center></div>
            <div id="appView"><center><h2>View Appointment</h2></center></div>
        </div>
    </body>
</html>