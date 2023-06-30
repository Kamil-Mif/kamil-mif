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

    <div class="container-fluid">
        <div class="row">
            <div class="col-3 ps-0">
                <?php require('view/includes/headerAdmin.php'); ?>
            </div>
            <div class="col-9" style="margin-left: -100px;">
                <div class="row mt-4 d-flex justify-content-around">
                    <div class="col-4">
                        <h3>Все категории</h3>
                        <ul class="list-group">
                            <?php foreach ($categories as $c) : ?>
                                <li class="list-group-item d-flex pt-1 pb-2">
                                    <div><?= $c['name'] ?></div>
                                    <a href="/?view=categories&delCategory=<?= $c['id'] ?>" class="btn-close ms-auto" aria-label="Закрыть"></a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                    <div class="col-4">
                        <h3>Добавление категории</h3>
                        <form method="post">
                            <div class="btn-group" role="group" aria-label="Простой пример">
                                <input name="nameCategory" type="text" placeholder="Название категории" class="form-control rounded-0 rounded-start" required>
                                <button type="submit" class="btn btn-primary">Добавить</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
