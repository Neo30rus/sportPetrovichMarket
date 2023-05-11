<?php
session_start();
require 'functions.php';
$productList = getProductList();
?>


<!doctype html>
<html lang="ru" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html"
      xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sport Petrovich</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="media.css">
</head>
<body>

<header class="brand">

    <div class="container-fluid">
        <nav class="navbar navbar-dark bg-dark fixed-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    </strong>Sport Petrovich</strong>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                     aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"></h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                                aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#"><strong>Sport Petrovich</strong></a>
                                <!--                                <img src="https://cdn-icons-png.flaticon.com/512/6957/6957439.png" alt="Logo" width="50" height="48" class="d-inline-block ">-->
                            </li>
                            <?php if (!empty($_SESSION['user'])): ?>

                                <li class="nav-item">
                                    <a class="nav-link" href="#">Добро пожаловать, <?= $_SESSION['user']['username'] ?>!</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="logout.php">Выйти</a>
                                </li>
                                <?php if (!empty($_SESSION['user']['is_admin'])): ?>
                                    <li class="nav-item">
                                        <a class="nav-link" href="create_product_type.php">Создание типа товара</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="create_product.php">Создание товара</a>
                                    </li>
                                <?php endif; ?>
                            <?php else: ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="register_form.php">Войти в профиль</a>
                                </li>
                            <?php endif; ?>
                            <li class="nav-item">
                                <a class="nav-link" href="#1">Информация</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#2">Наши товары</a>
                            </li>

                    </div>
                </div>
            </div>
        </nav>

        <div class="row align-items-center">
            <div class="text_logo">
                <h1>Магазин<strong> Спорт</strong> Товаров</h1>
            </div>
        </div>
    </div>
    <div class="menu">
        </p>
        <img class="kosmos d-none d-lg-xl-none d-xl-block"
             src="https://pngimg.com/uploads/basketball/basketball_PNG102505.png" alt="мяч" width="600" height="600">
    </div>

</header>


<section class="news">
    <a name="1"></a>
    <div class="container-xxl text-center">
        <div class="row">
            <div class="planet_n">
                <h1><strong>О нашем магазине</strong></h1>
            </div>
        </div>
    </div>
    <div class="container ">
        <div class="col">
            <div class="card mb-3" style="max-width: 640px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://cdn-icons-png.flaticon.com/512/125/125232.png"
                             class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">ИЗМЕНИТЬ</h5>
                            <p class="card-text"><small class="text-muted">#SPORT </small></p>
                            <p class="card-text">Успешная спортивная тренировка напрямую зависит от качества используемого снаряжения.
                                Выбор на рынке очень широк, представлены десятки брендов и марок, и иногда начинающим спортсменам непросто
                                контролировать это разнообразие: какой костюм вам нужен? Как выбрать боксерские перчатки? Какая компания лучшая?
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card mb-3" style="max-width: 640px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://cdn-icons-png.flaticon.com/512/5016/5016248.png"
                             class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">ИЗМЕНИТЬ</h5>
                            <p class="card-text"><small class="text-muted">#SPORT</small></p>
                            <p class="card-text">Интернет- магазин Petrovich Sport поможет вам решить все эти проблемы.
                                Чтобы купить спортивные товары, вам не нужно выходить из дома или офиса и часами ездить
                                по городу в поисках подходящего спортивного инвентаря обратитесь к нам и мы вам подберем товар.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <strong><a href="#" class="link-light">more</a></strong>

</section>

<section class="colons">
    <a name="2"></a>
    <div class="container-fluid">
        <div class="our_works">
            <div class="heading-content text-center">
                <h1><strong>Наши товары</strong></h1>
            </div>
            <!--            <div class="row">-->
            <!--                <div class="main_mix_content whitebackground text-center">-->
            <!--                    <div class="main_mix_menu">-->
            <!--                        <button type="button" class="btn btn-light"><h5> All <span>/</span></h5></button>-->
            <!--                        <button type="button" class="btn btn-light"><h5>architecture <span>/</span></h5></button>-->
            <!--                        <button type="button" class="btn btn-light"><h5>Interior & Furniture Design <span>/</span></h5>-->
            <!--                        </button>-->
            <!--                        <button type="button" class="btn btn-light"><h5>Research & Graphic Design</h5></button>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
        </div>
    </div>

</section>


<section class="back">
    <div class="container text-center">
        <div class="row align-items-start">
            <?php foreach ($productList as $product): ?>
                <div class="col gy-5">
                    <div class="card" style="width: 20rem;">
                        <!--                        <img src="https://cdn.sportmaster.ru/upload/resize_cache/iblock/7b2/800_800_1/73065240299.jpg"-->
                        <img src="<?= getFileById($product['file_id']) ?>"
                             class="card-img-top" style="width: 8rem;margin: auto" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?=$product['title']?></h5>
                            <p class="card-price"><?=$product['price']?> ₽</p>
                            <hr>
                            <a class="btn btn-primary" href="product.php?product_id=<?=$product['id']?>" role="button">Открыть</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>

            <div class="more">
                <a href="#" class="link-dark"><strong>more</strong></a>
            </div>
        </div>
</section>



<section class="contact_us">

    <div class="container-xxl">
        <div class="row">
            <div class="contact_u">
                <h1><strong>Контактная информация</strong></h1>
                <img src="separator.png" alt="">
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row">
            <div class="col">
                <p>Магазин спортивных товаров Sport Petrovich</p>

            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row">
            <div class="col align-self-start">
                <img src="send_FILL0_wght400_GRAD0_opsz48.png" alt="">
                <h5>https://t.me/sport_petrovich</h5>
            </div>
            <div class="col align-self-center">
                <img src="home_FILL0_wght400_GRAD0_opsz48.png" alt="">
                <h6>РОССИЯ, АСТРАХАНЬ</h6>
            </div>
            <div class="col align-self-end">
                <img src="phone_enabled_FILL0_wght400_GRAD0_opsz48.png" alt="">
                <h6>+7(880)555-35-35</h6>
            </div>
        </div>
    </div>
</section>

<footer>
    <h4>Sport Petrovich</h4>
    <h5>Россия</h5>
    <p>2023 г.Все права защищены.</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>
</html>