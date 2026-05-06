<?php require __DIR__ . '/header.php'; ?>

<?php
/* v1 — обычный ценник; v2 — топ-блок; последний элемент старая цена или null */
$catalog_cards = [
    ['v1', 'Встроенный пылесос TUBO DYNAMICA TD23, 300 м²', '299 000', null],
    ['v2', 'Встроенный (центральный) пылесос TUBO Unica UX1, 120 м²', '89 000', '150 000'],
    ['v2', 'Робот-пылесос LASER Tubo Robo с комплектом инсталляции со станцией самоочистки', '124 000', null],
    ['v2', 'Встроенный пылесос TUBO DYNAMICA TD23, 300 м²', '299 000', null],
    ['v1', 'Встроенный пылесос TUBO DYNAMICA TD23, 300 м²', '299 000', null],
    ['v2', 'Встроенный пылесос AERTECNICA PRIME', '26 000', '150 000'],
    ['v1', 'Встроенный пылесос TUBO DYNAMICA TD23, 300 м²', '299 000', null],
    ['v2', 'Робот-пылесос LASER Tubo Robo с комплектом инсталляции со станцией самоочистки', '124 000', null],
    ['v2', 'Встроенный пылесос AERTECNICA PRIME', '26 000', '150 000'],
    ['v1', 'Встроенный пылесос TUBO DYNAMICA TD23, 300 м²', '299 000', null],
    ['v2', 'Робот-пылесос LASER Tubo Robo с комплектом инсталляции со станцией самоочистки', '124 000', null],
    ['v2', 'Встроенный пылесос AERTECNICA PRIME', '26 000', '150 000'],
];
?>

<div id="content">
    <div class="breadcrumbs">
        <a href="./" class="breadcrumbs__home">
            <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M17.5149 7.82912C17.5143 7.82873 17.5139 7.82817 17.5134 7.82775L10.1709 0.485508C9.85789 0.172336 9.44178 0 8.9992 0C8.55658 0 8.14048 0.172336 7.82737 0.485473L0.488612 7.82402C0.486151 7.82648 0.483549 7.82909 0.481229 7.83158C-0.161498 8.47796 -0.160373 9.52675 0.484393 10.1715C0.778932 10.4662 1.16783 10.6368 1.58383 10.6548C1.60085 10.6564 1.6179 10.6572 1.63506 10.6572H1.92756V16.0606C1.92756 17.13 2.79767 18 3.86706 18H6.73971C7.03098 18 7.26705 17.7638 7.26705 17.4726V13.2363C7.26705 12.7484 7.66407 12.3515 8.15201 12.3515H9.84636C10.3343 12.3515 10.7312 12.7484 10.7312 13.2363V17.4727C10.7312 17.7638 10.9672 18 11.2585 18H14.1312C15.2007 18 16.0707 17.13 16.0707 16.0606V10.6573H16.342C16.7845 10.6573 17.2006 10.4849 17.5139 10.1717C18.1593 9.52594 18.1596 8.47522 17.5148 7.82909L17.5149 7.82912ZM16.768 9.42599C16.7122 9.48213 16.6458 9.52664 16.5727 9.55696C16.4996 9.58728 16.4212 9.60279 16.342 9.60261H15.5433C15.252 9.60261 15.0159 9.83865 15.0159 10.13V16.0606C15.0159 16.5484 14.6191 16.9453 14.1311 16.9453H11.7859V13.2363C11.7859 12.1669 10.9158 11.2968 9.84633 11.2968H8.15204C7.08252 11.2968 6.2124 12.1669 6.2124 13.2363V16.9453H3.86713C3.3793 16.9453 2.98228 16.5484 2.98228 16.0606V10.1299C2.98228 9.83862 2.74621 9.60258 2.45494 9.60258H1.66993C1.6617 9.602 1.65346 9.60162 1.64522 9.60145C1.4881 9.59871 1.34076 9.53638 1.23037 9.42581C0.99553 9.19097 0.99553 8.80882 1.23037 8.57384C1.23048 8.57384 1.23048 8.5737 1.23062 8.57355L1.23104 8.57313L8.57332 1.23117C8.62909 1.17503 8.69545 1.13052 8.76856 1.10022C8.84167 1.06993 8.92006 1.05445 8.9992 1.05469C9.16001 1.05469 9.31121 1.1173 9.42505 1.23117L16.7657 8.57166L16.7691 8.57496C17.0027 8.81023 17.0023 9.1916 16.768 9.42599Z" fill="#425466"/>
            </svg> Главная
        </a>
        <span class="breadcrumbs__separator">-</span>
        <span class="breadcrumbs__current">Каталог</span>
    </div>

<div class="">
    <h1 class="page_title">Каталог</h1>
</div>

<div class="page_content catalog">




    <div class="search_layout">
        <aside class="search_sidebar" aria-label="Фильтры">
		
		<div class="search_filter search_filter--cats">
                <div class="search_filter__head">
                    <div class="search_filter__title">Категории</div>
                    <span class="search_filter__head_icon" aria-hidden="true">
                        <svg width="24" height="8" viewBox="0 0 24 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 0.75L10.7628 5.94583C11.1592 6.3782 11.8408 6.3782 12.2372 5.94583L17 0.75" stroke="#84827E" stroke-width="1.5" stroke-linecap="round"/>
                        </svg>
                    </span>
                </div>

                <details class="search_filter__group" open>
                    <summary class="search_filter__summary">
                        <span>Встроенные пылесосы</span>
                        <span class="search_filter__chev" aria-hidden="true">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.81254 11.8125C4.75508 11.8125 4.69818 11.8013 4.6451 11.7793C4.59202 11.7573 4.5438 11.725 4.50323 11.6843C4.46258 11.6437 4.43033 11.5955 4.40833 11.5424C4.38632 11.4893 4.375 11.4324 4.375 11.375C4.375 11.3175 4.38632 11.2606 4.40833 11.2076C4.43033 11.1545 4.46258 11.1063 4.50323 11.0657L8.56892 6.99999L4.50323 2.9343C4.33228 2.76335 4.33228 2.48652 4.50323 2.31567C4.67418 2.14483 4.95101 2.14472 5.12185 2.31567L9.49686 6.69067C9.53751 6.73128 9.56975 6.77949 9.59176 6.83257C9.61376 6.88564 9.62508 6.94253 9.62508 6.99999C9.62508 7.05744 9.61376 7.11433 9.59176 7.16741C9.56975 7.22048 9.53751 7.2687 9.49686 7.3093L5.12185 11.6843C5.08128 11.725 5.03307 11.7573 4.97999 11.7793C4.92691 11.8013 4.87 11.8125 4.81254 11.8125Z" fill="#0A2540"/>
                            </svg>
                        </span>
                    </summary>
                    <div class="search_filter__body">
                        <ul class="search_filter__options">
                            <li><a class="search_filter__option is-active" href="#">TUBO DYNAMICA</a></li>
                            <li><a class="search_filter__option" href="#">TUBO Unica UB</a></li>
                            <li><a class="search_filter__option" href="#">STUDIO</a></li>
                            <li><a class="search_filter__option" href="#">TUBO QB</a></li>
                            <li><a class="search_filter__option" href="#">PRIME</a></li>
                            <li><a class="search_filter__option" href="#">TUBO PERFETTO INOX APF</a></li>
                            <li><a class="search_filter__option" href="#">TUBO PERFETTO APF</a></li>
                            <li><a class="search_filter__option" href="#">TUBO PERFETTO</a></li>
                            <li><a class="search_filter__option" href="#">TUBO CLASSIC</a></li>
                        </ul>
                    </div>
                </details>

                <details class="search_filter__group">
                    <summary class="search_filter__summary">
                        <span>Монтажные комплекты</span>
                        <span class="search_filter__chev" aria-hidden="true">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.81254 11.8125C4.75508 11.8125 4.69818 11.8013 4.6451 11.7793C4.59202 11.7573 4.5438 11.725 4.50323 11.6843C4.46258 11.6437 4.43033 11.5955 4.40833 11.5424C4.38632 11.4893 4.375 11.4324 4.375 11.375C4.375 11.3175 4.38632 11.2606 4.40833 11.2076C4.43033 11.1545 4.46258 11.1063 4.50323 11.0657L8.56892 6.99999L4.50323 2.9343C4.33228 2.76335 4.33228 2.48652 4.50323 2.31567C4.67418 2.14483 4.95101 2.14472 5.12185 2.31567L9.49686 6.69067C9.53751 6.73128 9.56975 6.77949 9.59176 6.83257C9.61376 6.88564 9.62508 6.94253 9.62508 6.99999C9.62508 7.05744 9.61376 7.11433 9.59176 7.16741C9.56975 7.22048 9.53751 7.2687 9.49686 7.3093L5.12185 11.6843C5.08128 11.725 5.03307 11.7573 4.97999 11.7793C4.92691 11.8013 4.87 11.8125 4.81254 11.8125Z" fill="#0A2540"/>
                            </svg>
                        </span>
                    </summary>
                    <div class="search_filter__body">
                        <ul class="search_filter__options">
                            <li><a class="search_filter__option" href="#">Для квартиры</a></li>
                            <li><a class="search_filter__option" href="#">Для дома</a></li>
                        </ul>
                    </div>
                </details>
            </div>
		
<div class="s_row">		
            <div class="search_filter">
                <div class="search_filter__head">
                    <div class="search_filter__title">Фильтр</div>
                    <span class="search_filter__head_icon" aria-hidden="true">
                        <svg width="24" height="8" viewBox="0 0 24 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6 0.75L10.7628 5.94583C11.1592 6.3782 11.8408 6.3782 12.2372 5.94583L17 0.75" stroke="#84827E" stroke-width="1.5" stroke-linecap="round"/>
                        </svg>
                    </span>
                </div>

                <details class="search_filter__group" open>
                    <summary class="search_filter__summary">
                        <span>Цена, рублей</span>
                        <span class="search_filter__chev" aria-hidden="true">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.81254 11.8125C4.75508 11.8125 4.69818 11.8013 4.6451 11.7793C4.59202 11.7573 4.5438 11.725 4.50323 11.6843C4.46258 11.6437 4.43033 11.5955 4.40833 11.5424C4.38632 11.4893 4.375 11.4324 4.375 11.375C4.375 11.3175 4.38632 11.2606 4.40833 11.2076C4.43033 11.1545 4.46258 11.1063 4.50323 11.0657L8.56892 6.99999L4.50323 2.9343C4.33228 2.76335 4.33228 2.48652 4.50323 2.31567C4.67418 2.14483 4.95101 2.14472 5.12185 2.31567L9.49686 6.69067C9.53751 6.73128 9.56975 6.77949 9.59176 6.83257C9.61376 6.88564 9.62508 6.94253 9.62508 6.99999C9.62508 7.05744 9.61376 7.11433 9.59176 7.16741C9.56975 7.22048 9.53751 7.2687 9.49686 7.3093L5.12185 11.6843C5.08128 11.725 5.03307 11.7573 4.97999 11.7793C4.92691 11.8013 4.87 11.8125 4.81254 11.8125Z" fill="#0A2540"/>
                            </svg>
                        </span>
                    </summary>
                    <div class="search_filter__body">
                        <div class="search_price_inputs">
                            <label class="search_price_input">
                                <span class="search_price_input__label">от</span>
                                <input type="text" name="price_from" value="0">
                            </label>
                            <label class="search_price_input">
                                <span class="search_price_input__label">до</span>
                                <input type="text" name="price_to" value="500 000">
                            </label>
                        </div>
                    </div>
                </details>

                <details class="search_filter__group">
                    <summary class="search_filter__summary">
                        <span>Тип фильтрации</span>
                        <span class="search_filter__chev" aria-hidden="true">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.81254 11.8125C4.75508 11.8125 4.69818 11.8013 4.6451 11.7793C4.59202 11.7573 4.5438 11.725 4.50323 11.6843C4.46258 11.6437 4.43033 11.5955 4.40833 11.5424C4.38632 11.4893 4.375 11.4324 4.375 11.375C4.375 11.3175 4.38632 11.2606 4.40833 11.2076C4.43033 11.1545 4.46258 11.1063 4.50323 11.0657L8.56892 6.99999L4.50323 2.9343C4.33228 2.76335 4.33228 2.48652 4.50323 2.31567C4.67418 2.14483 4.95101 2.14472 5.12185 2.31567L9.49686 6.69067C9.53751 6.73128 9.56975 6.77949 9.59176 6.83257C9.61376 6.88564 9.62508 6.94253 9.62508 6.99999C9.62508 7.05744 9.61376 7.11433 9.59176 7.16741C9.56975 7.22048 9.53751 7.2687 9.49686 7.3093L5.12185 11.6843C5.08128 11.725 5.03307 11.7573 4.97999 11.7793C4.92691 11.8013 4.87 11.8125 4.81254 11.8125Z" fill="#0A2540"/>
                            </svg>
                        </span>
                    </summary>
                    <div class="search_filter__body">
                        <ul class="search_filter__options">
                            <li><label class="search_filter__option"><input type="checkbox" name="f_type[]" value="hepa"> HEPA</label></li>
                            <li><label class="search_filter__option"><input type="checkbox" name="f_type[]" value="bag"> Мешковый</label></li>
                        </ul>
                    </div>
                </details>
                <details class="search_filter__group">
                    <summary class="search_filter__summary">
                        <span>Рекомендуемая площадь уборки, м²</span>
                        <span class="search_filter__chev" aria-hidden="true">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.81254 11.8125C4.75508 11.8125 4.69818 11.8013 4.6451 11.7793C4.59202 11.7573 4.5438 11.725 4.50323 11.6843C4.46258 11.6437 4.43033 11.5955 4.40833 11.5424C4.38632 11.4893 4.375 11.4324 4.375 11.375C4.375 11.3175 4.38632 11.2606 4.40833 11.2076C4.43033 11.1545 4.46258 11.1063 4.50323 11.0657L8.56892 6.99999L4.50323 2.9343C4.33228 2.76335 4.33228 2.48652 4.50323 2.31567C4.67418 2.14483 4.95101 2.14472 5.12185 2.31567L9.49686 6.69067C9.53751 6.73128 9.56975 6.77949 9.59176 6.83257C9.61376 6.88564 9.62508 6.94253 9.62508 6.99999C9.62508 7.05744 9.61376 7.11433 9.59176 7.16741C9.56975 7.22048 9.53751 7.2687 9.49686 7.3093L5.12185 11.6843C5.08128 11.725 5.03307 11.7573 4.97999 11.7793C4.92691 11.8013 4.87 11.8125 4.81254 11.8125Z" fill="#0A2540"/>
                            </svg>
                        </span>
                    </summary>
                    <div class="search_filter__body">
                        <ul class="search_filter__options">
                            <li><label class="search_filter__option"><input type="checkbox" name="f_area[]" value="120"> до 120</label></li>
                            <li><label class="search_filter__option"><input type="checkbox" name="f_area[]" value="300"> до 300</label></li>
                        </ul>
                    </div>
                </details>
                <details class="search_filter__group">
                    <summary class="search_filter__summary">
                        <span>Мощность, Вт</span>
                        <span class="search_filter__chev" aria-hidden="true">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.81254 11.8125C4.75508 11.8125 4.69818 11.8013 4.6451 11.7793C4.59202 11.7573 4.5438 11.725 4.50323 11.6843C4.46258 11.6437 4.43033 11.5955 4.40833 11.5424C4.38632 11.4893 4.375 11.4324 4.375 11.375C4.375 11.3175 4.38632 11.2606 4.40833 11.2076C4.43033 11.1545 4.46258 11.1063 4.50323 11.0657L8.56892 6.99999L4.50323 2.9343C4.33228 2.76335 4.33228 2.48652 4.50323 2.31567C4.67418 2.14483 4.95101 2.14472 5.12185 2.31567L9.49686 6.69067C9.53751 6.73128 9.56975 6.77949 9.59176 6.83257C9.61376 6.88564 9.62508 6.94253 9.62508 6.99999C9.62508 7.05744 9.61376 7.11433 9.59176 7.16741C9.56975 7.22048 9.53751 7.2687 9.49686 7.3093L5.12185 11.6843C5.08128 11.725 5.03307 11.7573 4.97999 11.7793C4.92691 11.8013 4.87 11.8125 4.81254 11.8125Z" fill="#0A2540"/>
                            </svg>
                        </span>
                    </summary>
                    <div class="search_filter__body">
                        <ul class="search_filter__options">
                            <li><label class="search_filter__option"><input type="checkbox" name="f_power[]" value="1200"> 1200 Вт</label></li>
                            <li><label class="search_filter__option"><input type="checkbox" name="f_power[]" value="1600"> 1600 Вт</label></li>
                        </ul>
                    </div>
                </details>
                <details class="search_filter__group">
                    <summary class="search_filter__summary">
                        <span>Уровень шума, Дб</span>
                        <span class="search_filter__chev" aria-hidden="true">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.81254 11.8125C4.75508 11.8125 4.69818 11.8013 4.6451 11.7793C4.59202 11.7573 4.5438 11.725 4.50323 11.6843C4.46258 11.6437 4.43033 11.5955 4.40833 11.5424C4.38632 11.4893 4.375 11.4324 4.375 11.375C4.375 11.3175 4.38632 11.2606 4.40833 11.2076C4.43033 11.1545 4.46258 11.1063 4.50323 11.0657L8.56892 6.99999L4.50323 2.9343C4.33228 2.76335 4.33228 2.48652 4.50323 2.31567C4.67418 2.14483 4.95101 2.14472 5.12185 2.31567L9.49686 6.69067C9.53751 6.73128 9.56975 6.77949 9.59176 6.83257C9.61376 6.88564 9.62508 6.94253 9.62508 6.99999C9.62508 7.05744 9.61376 7.11433 9.59176 7.16741C9.56975 7.22048 9.53751 7.2687 9.49686 7.3093L5.12185 11.6843C5.08128 11.725 5.03307 11.7573 4.97999 11.7793C4.92691 11.8013 4.87 11.8125 4.81254 11.8125Z" fill="#0A2540"/>
                            </svg>
                        </span>
                    </summary>
                    <div class="search_filter__body">
                        <ul class="search_filter__options">
                            <li><label class="search_filter__option"><input type="checkbox" name="f_noise[]" value="60"> до 60</label></li>
                            <li><label class="search_filter__option"><input type="checkbox" name="f_noise[]" value="70"> до 70</label></li>
                        </ul>
                    </div>
                </details>
                <details class="search_filter__group">
                    <summary class="search_filter__summary">
                        <span>Мощность всасывания, аэроватт</span>
                        <span class="search_filter__chev" aria-hidden="true">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.81254 11.8125C4.75508 11.8125 4.69818 11.8013 4.6451 11.7793C4.59202 11.7573 4.5438 11.725 4.50323 11.6843C4.46258 11.6437 4.43033 11.5955 4.40833 11.5424C4.38632 11.4893 4.375 11.4324 4.375 11.375C4.375 11.3175 4.38632 11.2606 4.40833 11.2076C4.43033 11.1545 4.46258 11.1063 4.50323 11.0657L8.56892 6.99999L4.50323 2.9343C4.33228 2.76335 4.33228 2.48652 4.50323 2.31567C4.67418 2.14483 4.95101 2.14472 5.12185 2.31567L9.49686 6.69067C9.53751 6.73128 9.56975 6.77949 9.59176 6.83257C9.61376 6.88564 9.62508 6.94253 9.62508 6.99999C9.62508 7.05744 9.61376 7.11433 9.59176 7.16741C9.56975 7.22048 9.53751 7.2687 9.49686 7.3093L5.12185 11.6843C5.08128 11.725 5.03307 11.7573 4.97999 11.7793C4.92691 11.8013 4.87 11.8125 4.81254 11.8125Z" fill="#0A2540"/>
                            </svg>
                        </span>
                    </summary>
                    <div class="search_filter__body">
                        <ul class="search_filter__options">
                            <li><label class="search_filter__option"><input type="checkbox" name="f_aw[]" value="500"> 500</label></li>
                            <li><label class="search_filter__option"><input type="checkbox" name="f_aw[]" value="700"> 700</label></li>
                        </ul>
                    </div>
                </details>
                <details class="search_filter__group">
                    <summary class="search_filter__summary">
                        <span>Воздушный поток, м³/ч</span>
                        <span class="search_filter__chev" aria-hidden="true">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.81254 11.8125C4.75508 11.8125 4.69818 11.8013 4.6451 11.7793C4.59202 11.7573 4.5438 11.725 4.50323 11.6843C4.46258 11.6437 4.43033 11.5955 4.40833 11.5424C4.38632 11.4893 4.375 11.4324 4.375 11.375C4.375 11.3175 4.38632 11.2606 4.40833 11.2076C4.43033 11.1545 4.46258 11.1063 4.50323 11.0657L8.56892 6.99999L4.50323 2.9343C4.33228 2.76335 4.33228 2.48652 4.50323 2.31567C4.67418 2.14483 4.95101 2.14472 5.12185 2.31567L9.49686 6.69067C9.53751 6.73128 9.56975 6.77949 9.59176 6.83257C9.61376 6.88564 9.62508 6.94253 9.62508 6.99999C9.62508 7.05744 9.61376 7.11433 9.59176 7.16741C9.56975 7.22048 9.53751 7.2687 9.49686 7.3093L5.12185 11.6843C5.08128 11.725 5.03307 11.7573 4.97999 11.7793C4.92691 11.8013 4.87 11.8125 4.81254 11.8125Z" fill="#0A2540"/>
                            </svg>
                        </span>
                    </summary>
                    <div class="search_filter__body">
                        <ul class="search_filter__options">
                            <li><label class="search_filter__option"><input type="checkbox" name="f_flow[]" value="200"> 200</label></li>
                            <li><label class="search_filter__option"><input type="checkbox" name="f_flow[]" value="350"> 350</label></li>
                        </ul>
                    </div>
                </details>
                <details class="search_filter__group">
                    <summary class="search_filter__summary">
                        <span>Максимальное разрежение, мбар</span>
                        <span class="search_filter__chev" aria-hidden="true">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.81254 11.8125C4.75508 11.8125 4.69818 11.8013 4.6451 11.7793C4.59202 11.7573 4.5438 11.725 4.50323 11.6843C4.46258 11.6437 4.43033 11.5955 4.40833 11.5424C4.38632 11.4893 4.375 11.4324 4.375 11.375C4.375 11.3175 4.38632 11.2606 4.40833 11.2076C4.43033 11.1545 4.46258 11.1063 4.50323 11.0657L8.56892 6.99999L4.50323 2.9343C4.33228 2.76335 4.33228 2.48652 4.50323 2.31567C4.67418 2.14483 4.95101 2.14472 5.12185 2.31567L9.49686 6.69067C9.53751 6.73128 9.56975 6.77949 9.59176 6.83257C9.61376 6.88564 9.62508 6.94253 9.62508 6.99999C9.62508 7.05744 9.61376 7.11433 9.59176 7.16741C9.56975 7.22048 9.53751 7.2687 9.49686 7.3093L5.12185 11.6843C5.08128 11.725 5.03307 11.7573 4.97999 11.7793C4.92691 11.8013 4.87 11.8125 4.81254 11.8125Z" fill="#0A2540"/>
                            </svg>
                        </span>
                    </summary>
                    <div class="search_filter__body">
                        <ul class="search_filter__options">
                            <li><label class="search_filter__option"><input type="checkbox" name="f_mbar[]" value="25"> 25</label></li>
                            <li><label class="search_filter__option"><input type="checkbox" name="f_mbar[]" value="30"> 30</label></li>
                        </ul>
                    </div>
                </details>
                <details class="search_filter__group">
                    <summary class="search_filter__summary">
                        <span>Материал фильтра</span>
                        <span class="search_filter__chev" aria-hidden="true">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.81254 11.8125C4.75508 11.8125 4.69818 11.8013 4.6451 11.7793C4.59202 11.7573 4.5438 11.725 4.50323 11.6843C4.46258 11.6437 4.43033 11.5955 4.40833 11.5424C4.38632 11.4893 4.375 11.4324 4.375 11.375C4.375 11.3175 4.38632 11.2606 4.40833 11.2076C4.43033 11.1545 4.46258 11.1063 4.50323 11.0657L8.56892 6.99999L4.50323 2.9343C4.33228 2.76335 4.33228 2.48652 4.50323 2.31567C4.67418 2.14483 4.95101 2.14472 5.12185 2.31567L9.49686 6.69067C9.53751 6.73128 9.56975 6.77949 9.59176 6.83257C9.61376 6.88564 9.62508 6.94253 9.62508 6.99999C9.62508 7.05744 9.61376 7.11433 9.59176 7.16741C9.56975 7.22048 9.53751 7.2687 9.49686 7.3093L5.12185 11.6843C5.08128 11.725 5.03307 11.7573 4.97999 11.7793C4.92691 11.8013 4.87 11.8125 4.81254 11.8125Z" fill="#0A2540"/>
                            </svg>
                        </span>
                    </summary>
                    <div class="search_filter__body">
                        <ul class="search_filter__options">
                            <li><label class="search_filter__option"><input type="checkbox" name="f_mat[]" value="wash"> Моющийся</label></li>
                            <li><label class="search_filter__option"><input type="checkbox" name="f_mat[]" value="carb"> Угольный</label></li>
                        </ul>
                    </div>
                </details>
                <details class="search_filter__group">
                    <summary class="search_filter__summary">
                        <span>Площадь фильтра, см</span>
                        <span class="search_filter__chev" aria-hidden="true">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.81254 11.8125C4.75508 11.8125 4.69818 11.8013 4.6451 11.7793C4.59202 11.7573 4.5438 11.725 4.50323 11.6843C4.46258 11.6437 4.43033 11.5955 4.40833 11.5424C4.38632 11.4893 4.375 11.4324 4.375 11.375C4.375 11.3175 4.38632 11.2606 4.40833 11.2076C4.43033 11.1545 4.46258 11.1063 4.50323 11.0657L8.56892 6.99999L4.50323 2.9343C4.33228 2.76335 4.33228 2.48652 4.50323 2.31567C4.67418 2.14483 4.95101 2.14472 5.12185 2.31567L9.49686 6.69067C9.53751 6.73128 9.56975 6.77949 9.59176 6.83257C9.61376 6.88564 9.62508 6.94253 9.62508 6.99999C9.62508 7.05744 9.61376 7.11433 9.59176 7.16741C9.56975 7.22048 9.53751 7.2687 9.49686 7.3093L5.12185 11.6843C5.08128 11.725 5.03307 11.7573 4.97999 11.7793C4.92691 11.8013 4.87 11.8125 4.81254 11.8125Z" fill="#0A2540"/>
                            </svg>
                        </span>
                    </summary>
                    <div class="search_filter__body">
                        <ul class="search_filter__options">
                            <li><label class="search_filter__option"><input type="checkbox" name="f_fs[]" value="200"> 200</label></li>
                            <li><label class="search_filter__option"><input type="checkbox" name="f_fs[]" value="400"> 400</label></li>
                        </ul>
                    </div>
                </details>
                <details class="search_filter__group">
                    <summary class="search_filter__summary">
                        <span>Ёмкость мусоросборника, литры</span>
                        <span class="search_filter__chev" aria-hidden="true">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.81254 11.8125C4.75508 11.8125 4.69818 11.8013 4.6451 11.7793C4.59202 11.7573 4.5438 11.725 4.50323 11.6843C4.46258 11.6437 4.43033 11.5955 4.40833 11.5424C4.38632 11.4893 4.375 11.4324 4.375 11.375C4.375 11.3175 4.38632 11.2606 4.40833 11.2076C4.43033 11.1545 4.46258 11.1063 4.50323 11.0657L8.56892 6.99999L4.50323 2.9343C4.33228 2.76335 4.33228 2.48652 4.50323 2.31567C4.67418 2.14483 4.95101 2.14472 5.12185 2.31567L9.49686 6.69067C9.53751 6.73128 9.56975 6.77949 9.59176 6.83257C9.61376 6.88564 9.62508 6.94253 9.62508 6.99999C9.62508 7.05744 9.61376 7.11433 9.59176 7.16741C9.56975 7.22048 9.53751 7.2687 9.49686 7.3093L5.12185 11.6843C5.08128 11.725 5.03307 11.7573 4.97999 11.7793C4.92691 11.8013 4.87 11.8125 4.81254 11.8125Z" fill="#0A2540"/>
                            </svg>
                        </span>
                    </summary>
                    <div class="search_filter__body">
                        <ul class="search_filter__options">
                            <li><label class="search_filter__option"><input type="checkbox" name="f_bin[]" value="15"> 15 л</label></li>
                            <li><label class="search_filter__option"><input type="checkbox" name="f_bin[]" value="25"> 25 л</label></li>
                        </ul>
                    </div>
                </details>
                <details class="search_filter__group">
                    <summary class="search_filter__summary">
                        <span>Высота, см</span>
                        <span class="search_filter__chev" aria-hidden="true">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.81254 11.8125C4.75508 11.8125 4.69818 11.8013 4.6451 11.7793C4.59202 11.7573 4.5438 11.725 4.50323 11.6843C4.46258 11.6437 4.43033 11.5955 4.40833 11.5424C4.38632 11.4893 4.375 11.4324 4.375 11.375C4.375 11.3175 4.38632 11.2606 4.40833 11.2076C4.43033 11.1545 4.46258 11.1063 4.50323 11.0657L8.56892 6.99999L4.50323 2.9343C4.33228 2.76335 4.33228 2.48652 4.50323 2.31567C4.67418 2.14483 4.95101 2.14472 5.12185 2.31567L9.49686 6.69067C9.53751 6.73128 9.56975 6.77949 9.59176 6.83257C9.61376 6.88564 9.62508 6.94253 9.62508 6.99999C9.62508 7.05744 9.61376 7.11433 9.59176 7.16741C9.56975 7.22048 9.53751 7.2687 9.49686 7.3093L5.12185 11.6843C5.08128 11.725 5.03307 11.7573 4.97999 11.7793C4.92691 11.8013 4.87 11.8125 4.81254 11.8125Z" fill="#0A2540"/>
                            </svg>
                        </span>
                    </summary>
                    <div class="search_filter__body">
                        <ul class="search_filter__options">
                            <li><label class="search_filter__option"><input type="checkbox" name="f_h[]" value="40"> до 40</label></li>
                            <li><label class="search_filter__option"><input type="checkbox" name="f_h[]" value="60"> до 60</label></li>
                        </ul>
                    </div>
                </details>
                <details class="search_filter__group">
                    <summary class="search_filter__summary">
                        <span>Диаметр, см</span>
                        <span class="search_filter__chev" aria-hidden="true">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.81254 11.8125C4.75508 11.8125 4.69818 11.8013 4.6451 11.7793C4.59202 11.7573 4.5438 11.725 4.50323 11.6843C4.46258 11.6437 4.43033 11.5955 4.40833 11.5424C4.38632 11.4893 4.375 11.4324 4.375 11.375C4.375 11.3175 4.38632 11.2606 4.40833 11.2076C4.43033 11.1545 4.46258 11.1063 4.50323 11.0657L8.56892 6.99999L4.50323 2.9343C4.33228 2.76335 4.33228 2.48652 4.50323 2.31567C4.67418 2.14483 4.95101 2.14472 5.12185 2.31567L9.49686 6.69067C9.53751 6.73128 9.56975 6.77949 9.59176 6.83257C9.61376 6.88564 9.62508 6.94253 9.62508 6.99999C9.62508 7.05744 9.61376 7.11433 9.59176 7.16741C9.56975 7.22048 9.53751 7.2687 9.49686 7.3093L5.12185 11.6843C5.08128 11.725 5.03307 11.7573 4.97999 11.7793C4.92691 11.8013 4.87 11.8125 4.81254 11.8125Z" fill="#0A2540"/>
                            </svg>
                        </span>
                    </summary>
                    <div class="search_filter__body">
                        <ul class="search_filter__options">
                            <li><label class="search_filter__option"><input type="checkbox" name="f_d[]" value="32"> 32</label></li>
                            <li><label class="search_filter__option"><input type="checkbox" name="f_d[]" value="40"> 40</label></li>
                        </ul>
                    </div>
                </details>
                <details class="search_filter__group">
                    <summary class="search_filter__summary">
                        <span>Дополнительно</span>
                        <span class="search_filter__chev" aria-hidden="true">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.81254 11.8125C4.75508 11.8125 4.69818 11.8013 4.6451 11.7793C4.59202 11.7573 4.5438 11.725 4.50323 11.6843C4.46258 11.6437 4.43033 11.5955 4.40833 11.5424C4.38632 11.4893 4.375 11.4324 4.375 11.375C4.375 11.3175 4.38632 11.2606 4.40833 11.2076C4.43033 11.1545 4.46258 11.1063 4.50323 11.0657L8.56892 6.99999L4.50323 2.9343C4.33228 2.76335 4.33228 2.48652 4.50323 2.31567C4.67418 2.14483 4.95101 2.14472 5.12185 2.31567L9.49686 6.69067C9.53751 6.73128 9.56975 6.77949 9.59176 6.83257C9.61376 6.88564 9.62508 6.94253 9.62508 6.99999C9.62508 7.05744 9.61376 7.11433 9.59176 7.16741C9.56975 7.22048 9.53751 7.2687 9.49686 7.3093L5.12185 11.6843C5.08128 11.725 5.03307 11.7573 4.97999 11.7793C4.92691 11.8013 4.87 11.8125 4.81254 11.8125Z" fill="#0A2540"/>
                            </svg>
                        </span>
                    </summary>
                    <div class="search_filter__body">
                        <ul class="search_filter__options">
                            <li><label class="search_filter__option"><input type="checkbox" name="f_extra[]" value="wifi"> Wi‑Fi</label></li>
                            <li><label class="search_filter__option"><input type="checkbox" name="f_extra[]" value="quiet"> Тихий режим</label></li>
                        </ul>
                    </div>
                </details>

                <div class="search_filter__actions">
                    <button class="search_filter__apply" type="button">Применить</button>
                    <button class="search_filter__reset" type="button">Сбросить</button>
                </div>
            </div>
			
			<div class="sort_prod_bl">
			    <select class="sort_prod_select">
        <option>Популярные</option>
        <option>Новинки</option>
        <option>Цена: по возрастанию</option>
        <option>Цена: по убыванию</option>
        <option>Рейтинг</option>
    </select>
                </div>
            </div>
        </aside>

        <section class="search_main" aria-label="Каталог товаров">
            <div class="search_grid">
                <?php
                foreach ($catalog_cards as $i => $row) {
                    [$kind, $title, $price, $oldPrice] = $row;
                    $card = [
                        'kind'     => $kind,
                        'title'    => $title,
                        'price'    => $price,
                        'oldPrice' => $oldPrice,
                        'img'      => 'test.png',
                        'buy'      => 'Купить',
                        'showHit'  => $i === 1,
                    ];
                    include __DIR__ . '/parts/product-card.php';
                }
                ?>
            </div>

            <a href="#" class="show-more-link">Показать ещё</a>

            <nav class="search_pagination" aria-label="Пагинация">
                <a class="search_page_btn search_page_btn--prev" href="#" aria-label="Назад">&larr;</a>
                <a class="search_page_num search_page_num--active" href="#">1</a>
                <a class="search_page_num" href="#">2</a>
                <span class="search_page_dots" aria-hidden="true">…</span>
                <a class="search_page_num" href="#">9</a>
                <a class="search_page_num" href="#">10</a>
                <a class="search_page_btn search_page_btn--next" href="#" aria-label="Вперёд">&rarr;</a>
            </nav>
        </section>
    </div>










</div>



</div>
<?php require __DIR__ . '/footer.php'; ?>
