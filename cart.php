<!doctype html>
<html lang="ru" data-bs-theme="dark">
<!-- ctrl+shift+f -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Главная</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="/view/css/style.css">
</head>

<body>
    <?php require 'view/includes/header.php'; ?>
    <div class="container">
        <div class="row mt-3">
            <div class="col-12">
                <h1>Корзина товаров <span class="badge bg-secondary" id="count_all"><?= $sum[0]['count'] ?></span></h1>
            </div>
        </div>
        <?php if (empty($cart)) : ?>
        <div class="row" style="height: 650px;">
            <div class="col-12 h-100 d-flex align-items-center justify-content-center flex-column">
                <h3>В корзине пока нет товаров</h3>
                <a href="/" class="btn btn-warning">Вернуться на гланую</a>
            </div>
        </div>            
        <? else : ?>
            <div class="row mt-2 text-center">
                <div class="col-1">
                    <strong>ID</strong>
                </div>
                <div class="col-2">
                    <strong>Фото</strong>
                </div>
                <div class="col-2">
                    <strong>Название</strong>
                </div>
                <div class="col-2">
                    <strong>Цена</strong>
                </div>
                <div class="col-2">
                    <strong>Количество</strong>
                </div>
                <div class="col-2">
                    <strong>Сумма</strong>
                </div>
                <div class="col-1">
                    <strong>Удалить</strong>
                </div>
            </div>
            <!-- <php print_r($sum); ?> -->
            <?php foreach ($cart as $c) : ?>
                <div class="row mt-3 text-center border rounded-3 py-2 d-flex align-items-center">
                    <div class="col-1">
                        <?= $c['id'] ?>
                    </div>
                    <div class="col-2">
                        <img height="120" class="rounded-2" src="view/image/<?= $c['image'] ?>" alt="">
                    </div>
                    <div class="col-2">
                        <?= $c['name'] ?>
                    </div>
                    <div class="col-2">
                        <?= $c['price'] ?> руб.
                    </div>
                    <div class="col-2">
                        <button onclick="changeCount(<?= $c['id'] ?>, 'remove')" class="btn btn-outline-secondary btn-sm">-</button>
                        <span id="count<?= $c['id'] ?>"><?= $c['count'] ?></span>
                        <button onclick="changeCount(<?= $c['id'] ?>, 'add')" class="btn btn-outline-secondary btn-sm">+</button>
                    </div>
                    <div class="col-2">
                        <span id="sum<?= $c['id'] ?>"><?= $c['count'] * $c['price'] ?></span> руб.
                    </div>
                    <div class="col-1">
                        <div class="position-relative d-flex align-items-center">
                            <a href="/?view=cart&deleteCart=<?= $c['id'] ?>" class="ms-4 btn-close position-absolute" aria-label="Закрыть"></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
            <div class="row mt-3 d-flex justify-content-end">
                <div class="col-4 text-end">
                    <h4>Общая сумма: <span id="sum_all"><?= $sum[0]['sum'] ?></span> руб.</h4>
                    <a href="/?view=order&ordering" class="btn btn-warning btn-lg">Сформировать заказ</a>
                </div>
            </div>
        <?php endif; ?>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <script src="/view/js/main.js"></script>
</body>

</html>