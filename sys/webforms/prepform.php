<form id="prepform" method="post" action="prep.php" style="width: 300px">
    
    <fieldset>
        <legend>Список преподавателей</legend>
        <table>
            <tr>
                <td class="t1">Список преподавателей:</td>
                <td class="t2">
                    <?php
                        
                        require 'sys/classes/teachers.php'; //Подключаем внешний класс
                        $prep = new Teachers();
                        $teachers = $prep->ShowTeacher();
                        echo '<select name=prep size=1>';
                        foreach ($teachers as $t) {
                            echo '<option value='.$t['id'].'>'.$t['name'].'</option>';
                        }
                        echo '</select>';  
                        
                    ?>
                </td>
            </tr>
        </table>
    </fieldset>
    <fieldset>
        <legend>Управление</legend>
        <p>
            <input type="checkbox" name="remember" value="yes" style="width: 10px">Оставаться в системе
        </p>
        <br>
        <input class="b1" type="submit" name="submit" value="Отправить">
        <input class="b1" type="reset" name="reset" value="Очистить">
    </fieldset>
</form>