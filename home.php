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

    <div id="home" class="d-flex justify-content-center align-items-center">
        <div class="text">
            <h1 class="text-center text-white", id = 'had'>Чайник отдыха</h1>
            <p class="text-center text-white", id = 'had2'>Магазин вкусных напитков.</p>
            
        </div>
    </div>
    <div class="container">
        <div class="row mt-3">
            <div class="col-12">
                <h1 class="text-center">Популярные товары</h1>
            </div>
        </div>
        <div class="row">
            <h3>Сортировать</h3>
            <div class="col-3">
                <ul class="list-group">
                    <a href="/?sort=name" class="list-group-item">По названию</a>
                    <a href="/?sort=price" class="list-group-item">По цене</a>
                    
                </ul>
            </div>
            <div class="col-9">
                <div class="row">
                    <?php foreach ($product as $p) : ?>
                        <div class="col-4 mb-2">
                            <div class="card" style="width: 19rem;">
                                <img src="/view/image/<?= $p['image'] ?>" class="card-img-top" height="350" style="object-fit: cover;" alt="...">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-6">
                                            <h5 class="card-title"><?= $p['name'] ?></h5>
                                            <p class="card-text mb-1"><strong>Цена: </strong><?= $p['price'] ?> руб.</p>
                                            
                                        </div>
                                        <div class="col-6 text">
                                            <p class="card-text mb-1"><strong>Описание: </strong><?= $p['country'] ?></p>
                                            <?php if (isset($_SESSION['is_admin'])) : ?>
                                                <a href="/?view=cart&addCart=<?= $p['id'] ?>" class="btn btn-warning">В корзину</a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
