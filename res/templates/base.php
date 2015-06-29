<!DOCTYPE html>

<html>
    <head>
        <meta charset=utf-8">
        <title><?=$page->title?></title> <!--Шаблон для переопределения заголовка страницы-->
        <link rel="stylesheet" href="res/styles/base.css">
        <link rel="stylesheet" href="<?=$page->style?>">
        <script src="res/scripts/base.js"></script>
        <script src="<?=$page->script?>"></script>
    </head>
    <body>
        <div id="main_box">
            <header>
                <?php include 'res/templates/header.php' ?>
                <!--<a href="index.php?id=main">Главная</a>
                |
                <a href="index.php?id=enter">Вход</a>
                |
                <!--<a href="reg.php">Регистрация</a>До скрытия маршрута для имени страницы-->
                <!--<a href="index.php?id=reg">Регистрация</a>До скрытия маршрута для имени страницы-->
                <!--<a href="reg">Регистрация</a>-->
            </header>
            <nav>
                <?php include 'res/templates/nav.php' ?>
            </nav>
            <article>
                <div id="left_bar" style="color: blueviolet; font-weight: bold">
                    <?php include 'res/templates/left_bar.php' ?>
                </div>
                <div id="content_bar">
                    <hr>
                    <?php createContent(); ?> <!--Определение контента страницы-->
                    <hr>
                </div>
                <br style="clear: left">
            </article>
            <?php include 'res/templates/footer.php' ?>
            <!--<footer>Coryright &copy; ШАГ - 2015</footer>-->
        </div>
    </body>
</html>
