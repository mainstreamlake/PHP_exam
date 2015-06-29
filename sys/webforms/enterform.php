<form id="enterform" method="post" action="enter" style="width: 500px">
    <!--/////////////////////////////////////////////// -->
    <fieldset>
        <legend>Ввод регистрационных данных</legend>
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
      
