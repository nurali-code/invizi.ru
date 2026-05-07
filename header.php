<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aertecnica</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="site-header" id="site-header">
        <div class="container">
            <!-- Десктоп: faq.png -->
            <div class="header-desktop">
                <div class="header-top">
                    <a class="brand" href="/">
                        <img src="imgs/logo.svg" alt="logo">
                    </a>
                    <div class="header-contacts">
                        <a class="header-contact-link" href="mailto:info@aertecnica-tubo.ru">
                            <svg class="ic" aria-hidden="true">
                                <use xlink:href="imgs/ic.svg#email"></use>
                            </svg> info@aertecnica-tubo.ru
                        </a>
                        <a class="header-contact-link" href="tel:+78007750176">
                            <svg class="ic" aria-hidden="true">
                                <use xlink:href="imgs/ic.svg#phone"></use>
                            </svg> 8 800-775-01-76
                        </a>
                        <div class="header-contact-pill">
                            <a class="header-pill-phone" type="button" aria-haspopup="true">
                                <svg class="ic" aria-hidden="true">
                                    <use xlink:href="imgs/ic.svg#phone"></use>
                                </svg> +7 930-977-89-29
                                <span class="header-pill-caret none"></span>
                            </a>
                            <a href="https://t.me/" class="header-messenger" aria-label="Telegram" target="_blank">
                                <svg class="ic" aria-hidden="true">
                                    <use xlink:href="imgs/ic.svg#tg"></use>
                                </svg>
                            </a>
                            <a href="#" class="header-messenger" aria-label="Чат">
                                <img class="ic" src="imgs/sprite/max.svg" alt="Чат">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-bottom">
                    <button class="catalog-btn catalog-btn--desktop" type="button" id="catalog-mega-toggle">
                        <svg class="ic" aria-hidden="true">
                            <use xlink:href="imgs/ic.svg#burger"></use>
                        </svg>
                        <span class="catalog-btn-text">Каталог</span>
                    </button>
                    <nav class="main-nav">
                        <a href="#">Проект</a>
                        <a href="#">Монтаж</a>
                        <a href="#">Наши работы</a>
                        <a href="#" class="top-dop-menu-a" style="font-weight: 700;"><span class="main-nav-arrow">›
                            </span> Меню</a>
                        <ul class="top-dop-menu">
                            <li><a href="#">О компании</a></li>
                            <li><a href="#">Акции</a></li>
                            <li><a href="#">Технологии</a></li>
                            <li><a href="#">Новости</a></li>
                            <li><a href="#">FAQ</a></li>
                            <li><a href="#">Доставка</a></li>
                            <li><a href="#">Контакты</a></li>
                        </ul>
                    </nav>
                    <div class="header-location" title="Адрес">
                        <svg class="ic" aria-hidden="true">
                            <use xlink:href="imgs/ic.svg#location"></use>
                        </svg>
                        <span class="header-location-text">Московская область, <br>Новорижское шоссе.</span>
                    </div>
                    <div class="header-toolbar">
                        <div class="header-region-group">
                            <span class="region-label">Ваш регион:</span>

                            <details class="header-region-dropdown">
                                <summary class="header-region-toggle" tabindex="0">Москва</summary>
                                <ul class="header-region-menu">
                                    <li><a class="header-region-menu__link" href="index.php?region=msk">Москва</a></li>
                                    <li><a class="header-region-menu__link"
                                            href="index.php?region=spb">Санкт-Петербург</a></li>
                                </ul>
                            </details>


                        </div>
                        <div class="header-actions">
                            <div class="header-action ser_b ser_wrap">
                                <button class="ser_toggle" type="button" aria-label="Поиск">
                                    <svg class="ic" aria-hidden="true">
                                        <use xlink:href="imgs/ic.svg#search"></use>
                                    </svg>
                                </button>

                                <div class="serF" role="dialog" aria-label="Поиск по сайту">
                                    <form class="serB" action="#" method="get">
                                        <svg class="ic ser_input_icon" aria-hidden="true">
                                            <use xlink:href="imgs/ic.svg#search"></use>
                                        </svg>
                                        <input class="ser_input" type="text" name="q" placeholder="Поиск"
                                            autocomplete="off">
                                    </form>

                                    <div class="ser_head">
                                        <div class="ser_head_title">Результаты поиска по запросу “Tubo Dynamica”</div>
                                        <div class="ser_head_meta">12 результатов по запросу “Tubo Dynamica”</div>
                                    </div>

                                    <div class="ser_list">
                                        <a class="ser_item ser_item--active" href="#">
                                            <img class="ser_item_img" src="test.png" alt="i">
                                            <span class="ser_item_info">
                                                <span class="ser_item_badge">
                                                    <span class="card__flag" aria-hidden="true"></span>
                                                    <span>Made in Italy</span>
                                                </span>
                                                <span class="ser_item_title">Встроенный пылесос TUBO DYNAMICA</span>
                                                <span class="ser_item_meta">TD23, 300 м²</span>
                                                <span class="ser_item_prices">

                                                    <span class="ser_item_price_row">
                                                        <span class="ser_item_price_label">Цена</span>
                                                        <span class="ser_item_price_new"><span
                                                                class="ser_item_price_value">299 000</span><span
                                                                class="ser_item_price_currency">₽</span></span>
                                                        <span class="ser_item_price_old"><span
                                                                class="ser_item_price_value">150 000</span><span
                                                                class="ser_item_price_currency">₽</span></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                        <a class="ser_item" href="#">
                                            <img class="ser_item_img" src="test.png" alt="i">
                                            <span class="ser_item_info">
                                                <span class="ser_item_badge">
                                                    <span class="card__flag" aria-hidden="true"></span>
                                                    <span>Made in Italy</span>
                                                </span>
                                                <span class="ser_item_title">Встроенный пылесос TUBO DYNAMICA</span>
                                                <span class="ser_item_meta">TD23, 300 м²</span>
                                                <span class="ser_item_prices">
                                                    <span class="ser_item_price_label">Цена</span>
                                                    <span class="ser_item_price_row">
                                                        <span class="ser_item_price_new"><span
                                                                class="ser_item_price_value">299 000</span><span
                                                                class="ser_item_price_currency">₽</span></span>
                                                        <span class="ser_item_price_old"><span
                                                                class="ser_item_price_value">150 000</span><span
                                                                class="ser_item_price_currency">₽</span></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                        <a class="ser_item" href="#">
                                            <img class="ser_item_img" src="test.png" alt="i">
                                            <span class="ser_item_info">
                                                <span class="ser_item_badge">
                                                    <span class="card__flag" aria-hidden="true"></span>
                                                    <span>Made in Italy</span>
                                                </span>
                                                <span class="ser_item_title">Встроенный пылесос TUBO DYNAMICA</span>
                                                <span class="ser_item_meta">TD23, 300 м²</span>
                                                <span class="ser_item_prices">
                                                    <span class="ser_item_price_label">Цена</span>
                                                    <span class="ser_item_price_row">
                                                        <span class="ser_item_price_new"><span
                                                                class="ser_item_price_value">299 000</span><span
                                                                class="ser_item_price_currency">₽</span></span>
                                                        <span class="ser_item_price_old"><span
                                                                class="ser_item_price_value">150 000</span><span
                                                                class="ser_item_price_currency">₽</span></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                        <a class="ser_item" href="#">
                                            <img class="ser_item_img" src="test.png" alt="i">
                                            <span class="ser_item_info">
                                                <span class="ser_item_badge">
                                                    <span class="card__flag" aria-hidden="true"></span>
                                                    <span>Made in Italy</span>
                                                </span>
                                                <span class="ser_item_title">Встроенный пылесос TUBO DYNAMICA</span>
                                                <span class="ser_item_meta">TD23, 300 м²</span>
                                                <span class="ser_item_prices">
                                                    <span class="ser_item_price_label">Цена</span>
                                                    <span class="ser_item_price_row">
                                                        <span class="ser_item_price_new"><span
                                                                class="ser_item_price_value">299 000</span><span
                                                                class="ser_item_price_currency">₽</span></span>
                                                        <span class="ser_item_price_old"><span
                                                                class="ser_item_price_value">150 000</span><span
                                                                class="ser_item_price_currency">₽</span></span>
                                                    </span>
                                                </span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <a class="header-action --stack" href="#">
                                <svg class="ic" aria-hidden="true">
                                    <use xlink:href="imgs/ic.svg#buscet"></use>
                                </svg>
                                <span class="header-action-caption">Корзина</span>
                            </a>
                            <a class="header-action --stack" href="#">
                                <svg class="ic" aria-hidden="true">
                                    <use xlink:href="imgs/ic.svg#heart"></use>
                                </svg>
                                <span class="header-action-caption">Избранное</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Мобильный: faq-mob.png -->
            <div class="header-mobile">
                <div class="header-mobile-bar header-mobile-bar--contacts">
                    <a class="header-mobile-phone" href="tel:+79309778929">
                        <svg class="ic" aria-hidden="true">
                            <use xlink:href="imgs/ic.svg#phone"></use>
                        </svg> +7 930-977-89-29
                    </a>
                    <div class="header-mobile-messengers">
                        <a href="https://t.me/" class="header-messenger" aria-label="Telegram" target="_blank">
                            <svg class="ic" aria-hidden="true">
                                <use xlink:href="imgs/ic.svg#tg"></use>
                            </svg>
                        </a>
                        <a href="#" class="header-messenger" aria-label="max">
                            <img src="imgs/sprite/max.svg" alt="max" class="ic">
                        </a>
                    </div>
                    <a class="header-mobile-phone" href="tel:+78007750176">
                        <svg class="ic" aria-hidden="true">
                            <use xlink:href="imgs/ic.svg#phone"></use>
                        </svg> 8 800-775-01-76
                    </a>
                </div>
                <div class="header-mobile-bar header-mobile-bar--nav">
                    <div class="header-mobile-side header-mobile-side--left">
                        <button type="button" class="header-icon-btn" id="mobile-nav-toggle">
                            <svg class="ic" aria-hidden="true">
                                <use xlink:href="imgs/ic.svg#burger"></use>
                            </svg>
                        </button>
                        <a href="#" class="header-icon-btn" aria-label="Поиск">
                            <svg class="ic" aria-hidden="true">
                                <use xlink:href="imgs/ic.svg#search"></use>
                            </svg>
                        </a>
                    </div>
                    <a class="header-mobile-brand" href="/">
                        <img src="imgs/logo.svg" alt="i">
                    </a>
                    <div class="header-mobile-side header-mobile-side--right">
                        <a href="#" class="header-icon-btn" aria-label="Избранное">
                            <svg class="ic" aria-hidden="true">
                                <use xlink:href="imgs/ic.svg#heart"></use>
                            </svg>
                        </a>
                        <a href="#" class="header-icon-btn" aria-label="Корзина">
                            <svg class="ic" aria-hidden="true">
                                <use xlink:href="imgs/ic.svg#buscet"></use>
                            </svg>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <!-- Десктоп: menu-catalog.png -->
        <div class="catalog-mega" id="catalog-mega">
            <div class="container catalog-mega__inner">
                <div class="catF">
                    <div class="catalog-mega__col catalog-mega__col--cats">
                        <ul class="catalog-mega__cat-list" role="tablist">
                            <li><a href="#" class="catalog-mega__cat has-submenu" data-mega-panel="mega-p1">Встроенные
                                    пылесосы</a></li>
                            <li><a href="#" class="catalog-mega__cat has-submenu" data-mega-panel="mega-p2">Монтажные
                                    комплекты</a></li>
                            <li><a href="#" class="catalog-mega__cat">Монтажные материалы</a></li>
                            <li><a href="#" class="catalog-mega__cat">Пневмозетки</a></li>
                            <li><a href="#" class="catalog-mega__cat">Шланги и насадки</a></li>
                            <li><a href="#" class="catalog-mega__cat">Фильтры и мешки</a></li>
                        </ul>
                    </div>
                    <div class="catalog-mega__col catalog-mega__col--subs">
                        <div id="mega-p1" class="catalog-mega__panel">
                            <p class="catalog-mega__subs-head">Встроенные пылесосы</p>
                            <ul class="catalog-mega__subs-list">
                                <li><a href="#">TUBO DYNAMICA</a></li>
                                <li><a href="#">TUBO Unica UB</a></li>
                                <li><a href="#">STUDIO</a></li>
                                <li><a href="#">TUBO QB</a></li>
                                <li><a href="#">PRIME</a></li>
                                <li><a href="#">TUBO PERFETTO INOX APF</a></li>
                                <li><a href="#">TUBO PERFETTO APF</a></li>
                                <li><a href="#">TUBO PERFETTO</a></li>
                                <li><a href="#">TUBO CLASSIC</a></li>
                            </ul>
                        </div>
                        <div id="mega-p2" class="catalog-mega__panel" role="tabpanel" hidden>
                            <p class="catalog-mega__subs-head">Монтажные комплекты</p>
                            <ul class="catalog-mega__subs-list">
                                <li><a href="#">Комплект для квартиры</a></li>
                                <li><a href="#">Комплект для дома</a></li>
                                <li><a href="#">Расширения и опции</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Мобилка: menu-mob.png -->
        <div class="mobile-drawer mobile-drawer--nav" id="mobile-nav-drawer">
            <div class="header-mobile-catalog-wrap megaCat">
                <button class="catalog-btn catalog-btn--mobile" type="button" id="mobile-catalog-toggle">
                    <span class="catalog-btn-burger"></span>
                    <span class="catalog-btn-text">Каталог</span>
                    <span class="catalog-btn-arrow">›</span>
                </button>
            </div>

            <div class="mobile-catalog-panel catBody">
                <div class="mobile-catalog-panel__body">
                    <details class="mobile-catalog-acc">
                        <summary class="mobile-catalog-acc__summary">
                            › Встроенные пылесосы
                        </summary>
                        <ul class="mobile-catalog-acc__list">
                            <li><a href="#">TUBO DYNAMICA</a></li>
                            <li><a href="#">TUBO Unica UB</a></li>
                            <li><a href="#">STUDIO</a></li>
                            <li><a href="#">TUBO QB</a></li>
                            <li><a href="#">PRIME</a></li>
                            <li><a href="#">TUBO PERFETTO INOX APF</a></li>
                            <li><a href="#">TUBO PERFETTO APF</a></li>
                            <li><a href="#">TUBO PERFETTO</a></li>
                            <li><a href="#">TUBO CLASSIC</a></li>
                            <li><a href="#">TUBO PERFETTO INOX APF</a></li>
                            <li><a href="#">TUBO PERFETTO APF</a></li>
                            <li><a href="#">TUBO PERFETTO</a></li>
                            <li><a href="#">TUBO CLASSIC</a></li>
                        </ul>
                    </details>
                    <details class="mobile-catalog-acc">
                        <summary class="mobile-catalog-acc__summary">
                            › Монтажные комплекты
                        </summary>
                        <ul class="mobile-catalog-acc__list">
                            <li><a href="#">Для квартиры</a></li>
                            <li><a href="#">Для дома</a></li>
                        </ul>
                    </details>
                </div>
            </div>
            <div class="mobile-drawer__scroll">
                <p class="mobile-drawer__section-title"><span>›</span> Меню</p>
                <nav class="mobile-nav-list">
                    <a class="mobile-nav-list__link" href="#">О компании</a>
                    <a class="mobile-nav-list__link" href="#">Акции</a>
                    <a class="mobile-nav-list__link" href="#">Технологии</a>
                    <a class="mobile-nav-list__link" href="#">Новости</a>
                    <a class="mobile-nav-list__link" href="faq.php">FAQ</a>
                    <a class="mobile-nav-list__link" href="#">Доставка</a>
                    <a class="mobile-nav-list__link" href="#">Контакты</a>
                </nav>
            </div>
        </div>
    </header>