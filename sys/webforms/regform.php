<form id="regform1" method="post" action="reg" style="width: 500px">
    <!--/////////////////////////////////////////////// -->
    <fieldset>
        <legend>Регистрационные данные</legend>
        <table>
            <tr>
                <td class="t1">Логин:</td>
                <td class="t2">
                    <input type="text" id="edit1" name="login" 
                           placeholder="Длина логина - от 4 до 12 символов [a-z0-9_]"required>
                </td>
            </tr>
            <tr>
                <td class="t1">Пароль:</td>
                <td class="t2">
                    <input type="password" id="edit2" name="pass1" 
                           placeholder="Длина пароля - от 4 до 12 символов [a-z0-9_]" required>
                </td>
            </tr>
            <tr>
                <td class="t1">Повтор:</td>
                <td class="t2">
                    <input type="password" id="edit3" name="pass2" 
                           placeholder="Длина пароля - от 4 до 12 символов [a-z0-9_]" required>
                </td>
            </tr>
            <tr>
                <td class="t1">E-mail:</td>
                <td class="t2">
                    <input type="email" id="edit4" name="email" 
                        placeholder="Образец: myemail@server.com" required>
                </td>
            </tr>
            <tr>
                <td class="t1">Статус:</td>
                <td class="t2">
                    <input type="radio" id="r1" name="status" value="prep">Преподаватель
                    <input type="radio" id="r2" name="status" value="stud">Студент
                <td/>
            </tr>
        </table>
    </fieldset>
    <fieldset>
        <table>
            <tr>
                <td class="t1">Привязка реального человека:</td>
                <td class="t2">
                    <?php
                    /*
                        $fstatus = filter_input(INPUT_POST, 'status');
                        if (isset($fstatus)) {
                            if ($fstatus==='prep') {
                                include 'sys/webforms/prepform.php';
                            } elseif ($fstatus==='stud') {
                                include 'sys/webforms/studform.php';
                            }
                        }
                     */

                    ?>
                <td/>  
            </tr>
        </table>
    </fieldset>
    <fieldset>
        <legend>Управление</legend>
        <input class="b1" type="submit" name="submit" value="Отправить">
        <input class="b1" type="reset" name="reset" value="Очистить">
    </fieldset>
</form>
      
