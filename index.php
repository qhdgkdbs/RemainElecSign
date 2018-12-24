<html>
    <head>
        <meta charset = 'utf-8'>
        <meta http-equiv="refresh" content="5; URL=index.php">
        <style>
            body{
                padding:0px;
                margin:0px;
                background-color:black;
                color:white;
            }
    
            div{
                border:1px white solid;
            }
            #ing,#ed{
                display:inline-block;
                position:fixed;
                top:0px;
                width:50%;
                height:100%;
                text-align:center;
            }
            #ing h1,#ed h1{
                font-size:80px;
            }
            .subNote{
                font-size:40px;
            }
            #ed{
                left:50%;
                border-left: 5px white solid;
            }
            .callNum{
                border: 1px solid white;
                font-size:50px;
                height:120px;
                text-align:center;
            }
            #ed .callNum{
                line-height:120px;
            }
            .note{
                
            }

        </style>

    </head>
    <body>
        <div id='ing'>
            <h1 class='note'>준비 중</h1>
            <div class='subNote'>예상완료시각</div>
            <?php  
            for($i = 1;$i < 16;$i++){
                 $filename = 'timeData/callNumIn'.$i;
                     if(file_exists($filename)){?>
                        <div class = 'callNum'><?= $i ?>번<br>
                         <?php 
                         date_default_timezone_set('Asia/Seoul');
                         $finishTime = file_get_contents($filename);
                         echo $finishTime;
                         ?>
                        </div>
                 <?php } ?>
            <?php } ?>
        </div>  <!--id = ing  -->

        <div id='ed'>
            <h1 class='note'>완료</h1>
            <div class='subNote'>영수증 확인 후 가져가시길 바랍니다</div>
            <?php  
            for($i = 1;$i < 16;$i++){
                $filename = 'timeData/callNumFinish'.$i;
                if(file_exists($filename)){?>
                    <div class = 'callNum'><?= $i ?>번<br>
                    </div>
                 <?php } ?>
            <?php } ?>

            <div ></div>
        </div>
    </body>
    <script>
        setTimeout(function(){
          window.location.reload(1);
        }, 5000);
    </script>

</html>