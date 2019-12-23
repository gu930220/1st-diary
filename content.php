<?php
function print_list(){

    $list = scandir('./db');
    $i = 0;
    while($i < count($list)){
        if($list[$i] != '.') {
            if($list[$i] != '..') {
                echo("<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>");
                
            }
        }
        $i=$i+1;
    }
}

function print_title(){
    if(isset($_GET['id'])) {
        echo $_GET['id'];
    }
}
function print_description(){
    if(isset($_GET['id'])) {
        echo file_get_contents("db/".$_GET['id']);
    }
    else {
        echo "ㅠㅠ";
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
        
    <h2>
        <?php
        print_title();
        ?>
    </h2>
    <?php
    print_description();
    ?>
    <form action="delete_process.php" method="post">
        <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
        <input type="submit" value="삭제">
    </form>
    <button onclick="location.href='update.php?id=<?php echo $_GET['id'] ?>' " style="float:right" >수정</button>

    </section>
</section>
</body>
</html>