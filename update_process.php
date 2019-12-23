<?php
rename('db/'.$_POST['old_title'], 'db/'.$_POST['title']);
file_put_contents('db/'.$_POST['title'], $_POST['description']);
header('Location: /content.php?id='.$_POST['title']);
?>