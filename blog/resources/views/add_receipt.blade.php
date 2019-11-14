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

    <title>Add receipt</title>
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
                    <div class="row m-4 text-center">
                        <h1>Добавить новый рецепт</h1>
                    </div>
                    <form>
                        <div class="form-group">
                            <label for="FormControlInputName">Название</label>
                            <input type="text" class="form-control" id="FormControlInputName" placeholder="Введите название">
                        </div>
                        <div class="form-group">
                            <label for="FormControlDescription">Описание</label>
                            <textarea class="form-control" id="FormControlDescription" rows="3" placeholder="Введите описание"></textarea>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <label>Ингредиент</label>
                            </div>
                            <div class="form-group col-md-4">
                                <label>Количество</label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <select id="inputIngredient1" class="form-control">
                                    <option selected>Мука</option>
                                    <option>Соль</option>
                                    <option>Сахар</option>
                                    <option>Масло</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control" id="inputQuantity1">
                            </div>
                            <div class="form-group col-md-1">
                                <label> <a href=""><i class="fas fa-times"></i></a></label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <select id="inputIngredient2" class="form-control">
                                    <option>Мука</option>
                                    <option selected>Соль</option>
                                    <option>Сахар</option>
                                    <option>Масло</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control" id="inputQuantity2">
                            </div>
                            <div class="form-group col-md-1">
                                <label> <a href=""><i class="fas fa-times"></i></a></label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-8">
                                <select id="inputIngredient3" class="form-control">
                                    <option>Мука</option>
                                    <option>Соль</option>
                                    <option>Сахар</option>
                                    <option selected>Масло</option>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <input type="text" class="form-control" id="inputQuantity3">
                            </div>
                            <div class="form-group col-md-1">
                                <label> <a href=""><i class="fas fa-times"></i></a></label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <button type="button" class="btn btn-outline-success">Добавить ингредиент</button>
                            </div>
                            <div class="form-group col-md-2">
                                <p>Нет в списке?</p>
                            </div>
                            <div class="form-group col-md-4">
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#addIngredientModal">Создать новый ингредиент</button>
                                <!-- Modal -->
                                <div class="modal fade" id="addIngredientModal" tabindex="-1" role="dialog" aria-labelledby="addIngredientModalTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-scrollable" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="addIngredientModalTitle">Создать ингредиент</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form>
                                                    <div class="form-group">
                                                        <label for="recipient-name" class="col-form-label">Введите название ингредиента:</label>
                                                        <input type="text" class="form-control" id="recipient-name">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-primary">Создать</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <button type="submit" class="btn col-4 btn-lg btn-success">Сохранить рецепт</button>
                    </form>
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
