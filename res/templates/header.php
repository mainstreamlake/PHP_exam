<table>
    <tr>
        <td class="left1">
            <img src="res/images/Logo.png" width="50px" height="50px">
        </td>
        <td class="center1">
            <h2 id="caption">Сайт тестирования знаний</h2>
        </td>
        <td class="right1">
            tel: +38-033-333-33-33
        </td>
    </tr>
    <tr>
        <td class="left1" style="font-weight: bold">
            <?php echo date('d.m.Y'); ?>
        </td>
        <td class="center1">
            Приветствуем Вас,
            <span style="color: mediumvioletred; font-weight: bold"><?=$page->user?></span>
        </td>
        <td class="right1">
            <a href="index.php?id=main">Главная</a>
            |
            <?php
                if($page->user =='Гость') {
                    echo '<a href="index.php?id=enter">Вход</a>';
                    echo '&nbsp;|&nbsp;';
                    echo '<a href="reg">Регистрация</a>';
                } else {
                    echo '<a href="index.php?id=leave">Выход</a>';
                    echo '&nbsp;|&nbsp;';
                    echo '<a href="person">Личный кабинет</a>';
                }
            ?>
        </td>
    </tr>
</table>

    </body>
</html>
