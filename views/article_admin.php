<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Мой Перый Блог</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../js/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>Мой Первый Блог</h1>
    <div class="article-new">
        <form method="post" action="index.php?action=add">
            <label>
                Название
                <input type="text" name="title" value="" class="form-item" autofocus required>
            </label>
            <label>
                Дата
                <input type="date" name="date" value="" class="form-item" required>
            </label>
            <label>
                Содержимое
                <textarea class="form-item" name="content" required></textarea>
            </label>
            <input type="submit" value="Сохранить" class="btn">
        </form>
    </div>
    <footer>
        <p>Мой Первый Блог<br>Copyright &copy; 2015</p>
    </footer>
</div>
</body>
</html>
