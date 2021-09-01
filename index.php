<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>Test</title>
    </head>

    <body>
        <div class="container">
            <div class="header">
                <a href="#" class="header__logo">
                    <img src="img/logo.png">
                </a>

                <div class="header__contacts">
                    <a href="tel:+78001005005" class="header__contacts-link">8-800-100-5005</a>

                    <a href="tel:+73452522000" class="header__contacts-link">+7 (3452) 522-000</a>
                </div>
            </div>

            <div class="navigation">
                <a class="navigation__item">Кредитные карты</a>

                <a class="navigation__item navigation__item--active">Вклады</a>

                <a class="navigation__item">Дебетовая карта</a>

                <a class="navigation__item">Страхование</a>
                
                <a class="navigation__item">Друзья</a>

                <a class="navigation__item">Интернет-банк</a>
            </div>

            <div class="breadcrump">
                <span class="breadcrump__link">
                    <a href="#">Главная</a>
                </span>

                <span class="breadcrump__link">
                    <a href="#">Вклады</a>
                </span>

                <span class="breadcrump__link">
                    <a href="#">Калькулятор</a>
                </span>
            </div>

            <div class="main">
                <div class="calculator">
                    <div class="calculator__form">
                        <h1>Калькулятор</h1>

                        <ul class="fields">
                            <li>
                                <label for="date">Дата оформления вклада</label>
                                <input type="date" id="date">
                            </li>

                            <li>
                                <label for="amount__deposit">Сумма вклада</label>
                                <input type="number" id="amount__deposit" min="1000" max="3000000" value="10000">
                            </li>

                            <li>
                                <label for="term">Срок вклада</label>
                                <select id="term">
                                    <option selected>1 год</option>

                                    <option>2 года</option>

                                    <option>3 года</option>

                                    <option>4 года</option>

                                    <option>5 лет</option>
                                </select>
                            </li>

                            <li>
                                <label for="topup">Пополнение вклада</label>
                                <input name="topup" class="topup" type="radio" id="topup" value="no" checked> Нет
                                <input name="topup" class="topup" type="radio" value="yes"> Да
                            </li>

                            <li>
                                <label for="replenishment__amount">Сумма пополнения вклада</label>
                                <input type="number" id="replenishment__amount" min="1000" max="3000000" value="10000">
                            </li>
                        </ul>

                        <ul class="result">
                            <li>
                                <button class="submit" type="submit">Рассчитать</button>
                            </li>

                            <li>
                                <span>Результат:</span>
                            </li>
                        </ul>
                    </div>

                    <div class="calculator__sliders">

                    </div>
                </div>
            </div>

            <div class="footer">
                <a href="#" class="footer__link">Кредитные карты</a>

                <a href="#" class="footer__link">Вклады</a>

                <a href="#" class="footer__link">Дебетовая карта</a>

                <a href="#" class="footer__link">Страхование</a>

                <a href="#" class="footer__link">Друзья</a>

                <a href="#" class="footer__link">Интернет-банк</a>
            </div>
        </div>
    </body>
</html>
