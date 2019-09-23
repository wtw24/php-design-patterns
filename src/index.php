<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Каталог паттернов проектирования</title>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

</head>
<body>

<div class="container">
    <h1>Каталог паттернов проектирования:</h1>

    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Порождающие паттерны проектирования
                    </a>
                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                    <ul>
                        <li>
                            <h4>Фабричный метод</h4>
                            <ul>
                                <li>
                                    <a href="/Creational/FactoryMethod/Conceptual/index.php">Концептуальный пример</a>
                                </li>
                                <li>
                                    <a href="/Creational/FactoryMethod/RealWorld/index.php">Пример из реальной жизни (интерфейс для создания коннекторов к социальным сетям)</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h4>Абстрактная фабрика</h4>
                            <ul>
                                <li>
                                    <a href="/Creational/AbstractFactory/Conceptual/index.php">Концептуальный пример</a>
                                </li>
                                <li>
                                    <a href="/Creational/AbstractFactory/RealWorld/index.php">Пример из реальной жизни (создание нескольких разновидностей шаблонов)</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h4>Строитель</h4>
                            <ul>
                                <li>
                                    <a href="/Creational/Builder/Conceptual/index.php">Концептуальный пример</a>
                                </li>
                                <li>
                                    <a href="/Creational/Builder/RealWorld/index.php">Пример из реальной жизни (конструктор запросов SQL)</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h4>Прототип</h4>
                            <ul>
                                <li>
                                    <a href="/Creational/Prototype/Conceptual/index.php">Концептуальный пример</a>
                                </li>
                                <li>
                                    <a href="/Creational/Prototype/RealWorld/index.php">Пример из реальной жизни (клонировать сложный объект Страницы)</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h4>Одиночка</h4>
                            <ul>
                                <li>
                                    <a href="/Creational/Singleton/Conceptual/index.php">Концептуальный пример</a>
                                </li>
                                <li>
                                    <a href="/Creational/Singleton/RealWorld/index.php">Пример из реальной жизни (глобальный объект логирования, хранилище настроек)</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Структурные паттерны проектирования
                    </a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">
                    <ul>
                        <li>
                            <h4>Адаптер</h4>
                            <ul>
                                <li>
                                    <a href="/Structural/Adapter/Conceptual/index.php">Концептуальный пример</a>
                                </li>
                                <li>
                                    <a href="/Structural/Adapter/RealWorld/index.php">Пример из реальной жизни (Email и Slack уведомления)</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h4>Мост</h4>
                            <ul>
                                <li>
                                    <a href="/Structural/Bridge/Conceptual/index.php">Концептуальный пример</a>
                                </li>
                                <li>
                                    <a href="/Structural/Bridge/RealWorld/index.php">Пример из реальной жизни (Страница и Рендер)</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <h4>Компоновщик</h4>
                            <ul>
                                <li>
                                    <a href="/Structural/Composite/Conceptual/index.php">Концептуальный пример</a>
                                </li>
                                <li>
                                    <a href="/Structural/Composite/RealWorld/index.php">Пример из реальной жизни (DOM-дерево HTML)</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Поведенческие паттерны проектирования
                    </a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>