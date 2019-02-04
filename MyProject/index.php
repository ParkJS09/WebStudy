<?php
    $conn = mysqli_connect("localhost", "root", asdf);
    mysqli_select_db($conn, "opentutorials");
    $result = mysqli_query($conn, "SELECT * FROM topic");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- 위 3개의 메타 태그는 *반드시* head 태그의 처음에 와야합니다; 어떤 다른 콘텐츠들은 반드시 이 태그들 *다음에* 와야 합니다 -->
        <link rel="stylesheet" type="text/css" href="http://118.91.118.27/MyProject/style.css">
        <!-- 부트스트랩 -->
        <link href="http://118.91.118.27/MyProject/bootStrap/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    
    <body id="target">
        <header>
            <h1><a href="http://118.91.118.27/MyProject/index.php">TestMyPage</a></h1>
        </header>
        
        <nav>
            <ol>
                <?php
                    while( $row = mysqli_fetch_assoc($result))
                    {
                        echo '<li><a href="http://118.91.118.27/MyProject/index.php?id='.$row['id'].'">'.$row['title'].'</a></li>'."\n";
                    }
                ?>
            </ol>
        </nav>
        <div id="control">
            <input type="button" value="white" onclick="document.getElementById('target').className='white'"/>
            <input type="button" value="black" onclick="document.getElementById('target').className='black'" />
            <a href="http://118.91.118.27/MyProject/write.php">쓰기</a>
        </div>
        <article>
            <?php
                if(empty($_GET['id']) === false ) 
                {
                    $sql = 'SELECT * FROM topic WHERE id='.$_GET['id'];
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_assoc($result);
                    echo '<h2>'.$row['title'].'</h2>';
                    echo $row['description'];
                }
            ?>
        </article>
        <!-- jQuery (부트스트랩의 자바스크립트 플러그인을 위해 필요합니다) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <!-- 모든 컴파일된 플러그인을 포함합니다 (아래), 원하지 않는다면 필요한 각각의 파일을 포함하세요 -->
        <script src="<link href="http://118.91.118.27/MyProject/bootStrap/bower_components/bootstrap/dist/js/bootstrap.min.js"></script> 
    </body>
</html>

