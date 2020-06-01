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
    <div>
        <div class="article">
            <h3>
                <?=$article['title']?>
            </h3>
            <em>Опубликовано: <?=$article['date']?></em>
            <p><?=$article['content']?></p>
        </div>
    </div>
    <footer>
        <p>Мой первый блог <br/> Copyright &copy; 2016</p>
    </footer>
</div>
</body>
</html>
