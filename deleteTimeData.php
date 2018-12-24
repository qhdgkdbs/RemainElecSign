<?php
  unlink('timeData/callNumFinish'.$_POST['callNum']);
  header('Location: admin.php');
?>
