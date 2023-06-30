<!doctype html>
<html lang="ru" data-bs-theme="dark">
<!-- ctrl+shift+f -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Главная</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="/view/css/style.css">
</head>

<body>

    <?php require('view/includes/header.php'); ?>

    <div class="container">
        <div class="row mt-2">
            <div class="col-12">
                <h1>Мои заказы</h1>
            </div>
        </div>
        <!-- <=print_r($order);?> -->
        <?php if (empty($order)) : ?>
            <div class="row" style="height: 650px;">
                <div class="col-12 h-100 d-flex align-items-center justify-content-center flex-column">
                    <h3>У вас нет оформленных заказов</h3>
                    <a href="/" class="btn btn-warning">Вернуться на гланую</a>
                </div>
            </div>
        <? else : ?>
            <div class="row mt-2">
                <?php foreach ($order as $o) : ?>
                    <div class="col-3 mb-2">
                        <div class="border p-3 rounded-3 shadow">
                            <div class="d-flex">
                                <h5><strong>ID заказа: <?= $o['o_id'] ?></strong></h5>
                                <?php if ($o['status'] == 'Новый') : ?>
                                    <a href="/?view=order&delOrder=<?= $o['o_id'] ?>" class="btn-close ms-auto d-block" aria-label="Закрыть"></a>
                                <? endif; ?>
                            </div>
                            <p>Имя: <?= $o['name'] ?></p>
                            <p>Количество: <?= $o['count'] ?></p>
                            <p class="mb-0">Статус: <?= $o['status'] ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
