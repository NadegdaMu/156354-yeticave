<form class="form container <?php if ($error):?>form--invalid<?php endif; ?>" action="/registration.php" method="post" enctype="multipart/form-data"> <!-- form--invalid -->
    <h2>Регистрация нового аккаунта</h2>
    <div class="form__item <?php htmlspecialchars(printInvalidItemClass($error, 'email')); ?>"> <!-- form__item--invalid -->
        <label for="email">E-mail*</label>
        <input id="email" type="text" name="email" placeholder="Введите e-mail" value="<?php htmlspecialchars(printInputItemValue($form_item, 'email'));?>">
        <span class="form__error"><?php if (isset($error["email"])) {print(htmlspecialchars($error["email"])); } ?></span>
    </div>
    <div class="form__item <?php htmlspecialchars(printInvalidItemClass($error, 'password')); ?>">
        <label for="password">Пароль*</label>
        <input id="password" type="text" name="password" placeholder="Введите пароль">
        <span class="form__error"><?php if (isset($error["password"])) {print(htmlspecialchars($error["password"])); } ?></span>
    </div>
    <div class="form__item <?php htmlspecialchars(printInvalidItemClass($error, 'name')); ?>">
        <label for="name">Имя*</label>
        <input id="name" type="text" name="name" placeholder="Введите имя" value="<?php htmlspecialchars(printInputItemValue($form_item, 'name'));?>">
        <span class="form__error"><?php if (isset($error["name"])) {print(htmlspecialchars($error["name"])); } ?></span>
    </div>
    <div class="form__item <?php htmlspecialchars(printInvalidItemClass($error, 'contacts')); ?>">
        <label for="contacts">Контактные данные*</label>
        <textarea id="contacts" name="contacts" placeholder="Напишите как с вами связаться"><?php htmlspecialchars(printInputItemValue($form_item, 'contacts'));?></textarea>
        <span class="form__error"><?php if (isset($error["contacts"])) {print(htmlspecialchars($error["contacts"])); } ?></span>
    </div>
    <div class="form__item form__item--file form__item--last">
        <label>Изображение</label>
        <div class="preview">
            <button class="preview__remove" type="button">x</button>
            <div class="preview__img">
                <img src="../img/avatar.jpg" width="113" height="113" alt="Изображение лота">
            </div>
        </div>
        <div class="form__input-file">
            <input class="visually-hidden" type="file" id="photo2" name="avatar_img" value=" ">
            <label for="photo2">
                <span>+ Добавить</span>
            </label>
        </div>
    </div>
    <span class="form__error form__error--bottom">Пожалуйста, исправьте ошибки в форме.</span>
    <button type="submit" class="button" name="send">Зарегистрироваться</button>
    <a class="text-link" href="/login.php">Уже есть аккаунт</a>
</form>
