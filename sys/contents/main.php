<?php

    $page->title = 'Главная';
    function createContent() {
?>
    <!--Внутренная часть страницы-->
    <h3 style="color: navy">Лента новостей</h3>
    <section id="news_box">
    <?php include 'sys/views/news_view.php'; ?>
    </section>
        
<?php        
}



?>