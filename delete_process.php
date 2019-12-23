<?php
unlink('db/'.$_POST['id']);
header('Location: /index.php');
?>
