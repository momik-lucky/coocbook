<!doctype html>
<html lang="ru">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/style.css">

    <title>View receipt</title>
</head>
<body class="d-flex flex-column">
<div class="wrapper">
    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
            <div class="container">
                <div class="col">
                    <a class="navbar-brand" href="#">Книга рецептов</a>
                </div>
                <div class="col user-panel">
                    <div class="profile text-center">
                        <!-- Если пользователь авторизован выводить ссылку на страницу "Мои рецепты" и на ссылку для разлогина -->
                        <!--<a href="#" class="my-receipt-page"><span class="d-none d-md-inline text-success">Мои рецепты</span></a> &nbsp; | &nbsp;-->
                        <!--<a href="#" class="logout"><span class="d-none d-md-inline text-success">Выйти</span></a>-->
                        <!-- Если пользователь неавторизован выводить ссылки для логина и регистрации -->
                        <a href="#" class="login"><span class="d-none d-md-inline text-success">Авторизоваться</span></a> &nbsp; | &nbsp;
                        <a href="#" class="registration"><span class="d-none d-md-inline text-success">Регистрация</span></a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <!-- Страница со всеми рецептами -->
    <main role="main" class="flex-shrink-0">
        <div class="container mt-2 mb-2">
            <div class="row">

                <!-- Меню сбоку -->
                <div class="col-3 mt-3 side-menu">
                    <div class="">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><a href="#" class="list-group-item list-group-item-action"><b>Все рецепты</b></a></li>
                            <li class="list-group-item"><a href="#" class="list-group-item list-group-item-action"><b>Мои рецепты</b></a></li>
                            <li class="list-group-item"><a href="#" class="list-group-item list-group-item-action"><b>Ингредиенты</b></a></li>
                        </ul>
                    </div>
                </div>

                <!-- Основное меню -->
                <div class="col-9">
                    <div class="row m-4">
                        <h1>Название рецепта</h1>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque deleniti dicta expedita facere ipsam libero nostrum perferendis quam suscipit. Beatae culpa facilis laborum molestias reiciendis vero? Commodi hic non saepe. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores dolor ducimus earum possimus praesentium. Amet, dicta dolor et incidunt itaque laborum natus perferendis quas saepe similique tempora vel veniam, vero! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, asperiores, consequatur cumque doloribus earum fuga impedit modi nisi officiis possimus quo, quod totam vero. Consequatur consequuntur illo inventore necessitatibus quos? Lorem ipsum dolor sit amet. Alias dolores labore quod recusandae voluptate?</p>
                    <h5>Ингредиенты:</h5>
                    <table class="table">
                        <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Мука</td>
                            <td>1 кг</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Сметана</td>
                            <td>200гр</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Масло подсолнечное</td>
                            <td>15гр</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
    <div class="push"></div>
</div>
<!-- Footer -->
<footer class="footer mt-auto py-3">
    <div class="container">
        <div class="row">
            <div class="col-11 text-right">
                <a class="text-muted text-right" href="mailto: ivshina.olga.l@gmail.com">Email: ivshina.olga.l@gmail.com</a>
            </div>
            <div class="col-1 text-right"><span class="text-muted">2019</span></div>
        </div>
    </div>
</footer>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
