<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>롯데 그로서런트 잔여시간 입력</title>
    <style>
     input[type=submit] {
         padding:5px 15px; background:#ccc; border:0 none;
        cursor:pointer;
        -webkit-border-radius: 5px;
        border-radius: 5px; 
        }
    </style>
  </head>
  <body>

    <h1>잔여시간 입력하기</h1>

    <div id='selNum'>
        <form action="finishTimeSave.php" method="post">
            호출 번호 선택:<br>
            <?php
                for($i = 1;$i<16;$i++){
                    $fileNameIn = 'timeData/callNumIn'.$i;
                    $fileNameFinish = 'timeData/callNumFinish'.$i;

                    if(!file_exists($fileNameIn) && !file_exists($fileNameFinish)){
                        echo '<input type="radio" name="callNum" value='.$i.'>'.$i.'<br>';
                    }
                }
            ?>
            잔여시간 입력:<input type="number" name="time" min="1" max="60">
            <input type="submit">
        </form>

    </div>

<hr>

<div id='finish'>
        <form action="renameIn2Finish.php" method="post">
            준비중에 뜨는 번호(조리 완료시 클릭):<br>
            <?php
                for($i = 1;$i<16;$i++){
                    $fileName = 'timeData/callNumIn'.$i;
                    if(file_exists($fileName)){
                        echo '<input type="radio" name="callNum" value='.$i.'>'.$i.'<br>';
                    }
                }
            ?>
            <input type="submit" value="조리완료">
        </form>

    </div>

<hr>
    

<div id='edNum'>
    <form action="deleteTimeData.php" method="post">
        완료창에 뜨는 번호(손님이 가져가면 삭제):<br>
        <?php
            for($i = 1;$i<16;$i++){
                $fileName = 'timeData/callNumFinish'.$i;
                if(file_exists($fileName)){
                    echo '<input type="radio" name="callNum" value='.$i.'>'.$i.'<br>';
                }
            }
        ?>
        <input type="submit" value="삭제">
    </form>
</div>





  </body>
</html>
