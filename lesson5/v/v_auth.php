<?php
/**
 * Шаблон Авторизации
 * ================
 *
 */
?>

<form name="login" method="post" action="">
    <h3 class="form__order-heading">Вход</h3>
    <p class="form__order-text"><?=$text;?></p>
    <div>
        <label class="form-label">Логин <span>*</span></label>
        <input name="login" type="text" class="form-control" placeholder="">
    </div>
    <div class="mt-20">
        <label class="form-label">Пароль <span>*</span></label>
        <input name="password" type="password" class="form-control" placeholder="">
    </div>
    <p class="mt-20 form__order-text red">* Обязательные поля</p>
    <button class="btn btn-primary" type="submit">Вход</button> <a href="index.php?c=user&act=reg" class="">Регистрация</a>
</form>