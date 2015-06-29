<?php
$page->title = 'Регистрация';
function createContent() {
?>
<!--Внутренная часть страницы-->
<h3 style="color: navy">Регистрация</h3>
<?php
    $send = filter_input(INPUT_POST, 'submit');
    if (!$send)
    {
        include 'sys/webforms/regform.php';
    } else {
        include 'sys/handlers/reghandler.php';
    }
}