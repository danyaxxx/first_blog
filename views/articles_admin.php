<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="content-type" content="text/html" />
    <meta name="author" content="Daniil" />
    <link rel="stylesheet" href="../css/style.css" />
    <link href="js/bootstrap.min.css" rel="stylesheet">
    <title>Мой первый блог</title>
</head>
<body>
<div class="container">
    <h1>Мой Первый Блог</h1>
    <a href="index.php?action=add">Добавить статью</a>
    <div>
        <table class="admin-table">
            <tr>
                <th>Дата</th>
                <th>Заголовок</th>
                <th></th>
                <th></th>
            </tr>
            <?php foreach($articles as $a): ?>
                <tr>
                    <td><?=$a['date']?></td>
                    <td><?=$a['title']?></td>
                    <td>
                        <a href="index.php?action=edit&id=<?=$a['id']?>">Редактировать</a>
                    </td>
                    <td>
                        <a onclick="return confirm('Вы уверены что хотите удалить статью?')" href="index.php?action=delete&id=<?=$a['id']?>">Удалить</a>
                    </td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
    <footer>
        <p>Мой первый блог <br/> Copyright &copy; 2016</p>
    </footer>
</div>
</body>
</html>
