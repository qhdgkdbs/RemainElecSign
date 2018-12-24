<?php
rename("timeData/callNumIn".$_POST['callNum'],"timeData/callNumFinish".$_POST['callNum']);

header('Location: admin.php');
?>
