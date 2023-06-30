<div class="modal fade" id="auth" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Вход</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
            </div>
            <form method="post">
                <div class="modal-body">
                    <input type="text" class="form-control mb-2" placeholder="Логин" name="login" required>
                    <input type="password" class="form-control" placeholder="Пароль" name="pass" required>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                    <button type="submit" name="auth" class="btn btn-warning">Войти</button>
                </div>
            </form>
        </div>
    </div>
</div>

<div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="inform" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <img src="/view/image/cart1.jpeg" height="30" class="rounded me-2" alt="...">
            <strong class="me-auto">Чайник отдыха</strong>
            <small>Сейчас</small>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Закрыть"></button>
        </div>
        <div class="toast-body"></div>
    </div>
</div>

<div class="modal fade" id="register" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Регистрация</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
            </div>
            <form method="post">
                <div class="modal-body">
                    <input type="text" class="form-control mb-2" placeholder="Имя" name="name" required>
                    <input type="text" class="form-control mb-2" placeholder="Фамилия" name="surname">
                    <input type="text" class="form-control mb-2" placeholder="Логин" name="login" required>
                    <input type="email" class="form-control mb-2" placeholder="Почта" name="email" required>
                    <input type="password" class="form-control mb-2" placeholder="Пароль" name="pass1" required>
                    <input type="password" class="form-control" placeholder="Повтор пароля" name="pass2" required>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                    <button type="submit" name="register" class="btn btn-warning">Зарегистрироваться</button>
                </div>
            </form>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container">
        <a href="http://primer" ><img src="view/image/logo.png"></a>
        <a> </a>
        <a class="navbar-brand" href="/">Чайник отдыха</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Переключатель навигации">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/?view=contacts">Контакты</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="/">Главная</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Каталог</a>
                </li>
            </ul>

            <?php if (isset($_SESSION['is_admin'])) : ?>
                <?php if ($_SESSION['is_admin'] == 1) : ?>
                    <a href="/?view=admin" class="btn btn-warning me-2">Админ панель</a>
                <?php else : ?>
                    <a href="/?view=cart" class="btn btn-warning me-2">Корзина</a>
                    <a href="/?view=order" class="btn btn-warning me-2">Мои заказы</a>
                <?php endif; ?>
                <a href="/?logout" class="btn btn-warning">Выход</a>
            <?php else : ?>
                <button class="btn btn-warning me-2" data-bs-toggle="modal" data-bs-target="#auth">Вход</button>
                <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#register">Регистрация</button>
            <?php endif; ?>

        </div>
    </div>
</nav>