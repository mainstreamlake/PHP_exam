<?php
$page->title = 'Вход';
function createContent() {
?>
<!--Внутренная часть страницы-->
<h3 style="color: green">Вход</h3>

<?php
    $send = filter_input(INPUT_POST, 'submit');
    if (!$send)
    {
        include 'sys/webforms/enterform.php';
    } else {
        include 'sys/handlers/enterhandler.php';
    }
}