<?php
function print_list(){

    $list = scandir('./db');
    $i = 0;
    $mm = date("Y-m-d H:i:s");
    while($i < count($list)){
        if($list[$i] != '.') {
            if($list[$i] != '..') {
                echo("<li><a href=\"content.php?id=$list[$i]\">$list[$i]</a> $mm </li>");
                
            }
        }
        $i=$i+1;
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<section id="container">
    <header class="header">
        <h1 class="logo">
            <a href="index.php">Ikmo's Diary</a>
        </h1> 
    </header>
    <section id="main_container">
        <form action="write_process.php" method="post">
            <p>
                <input type="text" name="title" placeholder="Title">
            </p>
            <p>
                <textarea name="description" placeholder="Description" id="" cols="30" rows="10"></textarea>
            </p>
            <input type="submit">
        
        </form>
    </section>
</section>
</body>
</html>