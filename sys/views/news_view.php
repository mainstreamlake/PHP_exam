<?php
    $user = $_SESSION['user'];
    if($user !=NULL && $user != 'Гость') {
        echo '<a href="newseditor">Добавить новость</a>';
    } 
    
    //Вытягивание новостей из таблицы [news]
    require 'sys/classes/news.php';
    $news2 = new News();
    $records = $news2->Read();
    
    //определение индекса новости
    if(isset($_SESSION['pid'])) {
        $pid = $_SESSION['pid'];
        echo $records[$pid - 1]['fullnew']; //Лучше пойти через запрос к БД, потому что идентификаторы могут не идти подряд
        unset($_SESSION['pid']);
    } else {
    /*
    echo '<pre>';
    print_r($records);
    echo '</pre>';
    */
    //Поcтроение представления
    rsort($records); // Сортировка с конца новостей
    foreach ($records as $post) {
        echo '<div class="post_box">';
        echo '<h4>'.$post['caption'].'</h4>';
        echo '<hr>';
        echo '<img src="'.$post['image'].'" align="left">';
        echo '<br>';
        echo $post['annotation'];
        echo '<hr>';
        echo $post['author'];
        echo ' - ';
        echo $post['datetime'];
        echo '<br>';
        //echo '<a href="http://www.google.com" target="_blank">Читать далее...</a>';
        echo '<a href="sys/controllers/post_controller.php?pid='.$post['id'].'">';
        echo 'Читать далее...</a>';
        echo '</div>';
    }
}