<?php
    session_start();
    
    require 'sys/classes/pagesmanager.php';
    $page = new PagesManager(); //Страница создается на основе конструктора
    include $page->content;
    include $page->template;