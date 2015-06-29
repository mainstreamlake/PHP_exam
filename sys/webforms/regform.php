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
        </table>
    </fieldset>
    <fieldset>
        <legend>Управление</legend>
        <input class="b1" type="submit" name="submit" value="Отправить">
        <input class="b1" type="reset" name="reset" value="Очистить">
    </fieldset>
</form>
      
