<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="content-type" content="text/html" />
    <meta name="author" content="Daniil" />
    <link rel="stylesheet" href="css/style.css" />
    <link href="js/bootstrap.min.css" rel="stylesheet">
    <title>Мой первый блог</title>
</head>
<body>
<div class="container">
    <h1>Мой Первый Блог</h1>
    <a href="./admin-control-panel/">Панель администратора</a>
    <div>
        <?php foreach($articles as $a): ?>
            <div class="article">
                <h3>
                    <a href="articles.php?id=<?=$a['id']?>"><?=$a['title']?></a>
                </h3>
                <em>Опубликовано: <?=$a['date']?></em>
                <p><?=$a['content']?></p>
            </div>
        <?php endforeach ?>
    </div>
    <footer>
        <p>Мой первый блог <br/> Copyright &copy; 2016</p>
    </footer>
</div>
</body>
</html>
