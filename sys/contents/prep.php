<?php
$page->title = 'Преподаватели';
function createContent() {
?>
<!--Внутренная часть страницы-->
<h3 style="color: green">Список преподавателей</h3>

<?php
    $send = filter_input(INPUT_POST, 'status');
    if ($send==='prep')
    {
        // include 'sys/webforms/prepform.php';
        require 'sys/classes/teachers.php'; //Подключаем внешний класс
        $prep = new Teachers();
        $teachers = $prep->ShowTeacher();
        echo '<select name=prep size=1>';
        foreach ($teachers as $t) {
        echo '<option value='.$t['id'].'>'.$t['name'].'</option>';
        }
        echo '</select>';  
    } elseif ($send==='stud') {
        include 'sys/webforms/studform.php';
    }
}

