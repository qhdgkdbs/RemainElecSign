<?php
  date_default_timezone_set('Asia/Seoul');
  $finishTime = date('Y-m-d h:i:s', time()+60*$_POST['time']);

  if(!file_exists('timeData')){
    mkdir("timeData");
    file_put_contents('timeData/callNumIn'.$_POST['callNum'],$finishTime);
  }else{
    file_put_contents('timeData/callNumIn'.$_POST['callNum'],$finishTime);
  }
  header('Location: admin.php')
?>
