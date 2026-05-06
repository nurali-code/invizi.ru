<?php
/**
 * Переиспользуемая карточка товара.
 *
 * Ожидаемые переменные (устанавливаются перед include):
 *   $card = [
 *       'kind'     => 'v1'|'v2',             // v1 — обычный ценник, v2 — «топ продаж»
 *       'title'    => string,
 *       'price'    => string,                // напр. '299 000'
 *       'oldPrice' => string|null,
 *       'img'      => string|null,           // путь к картинке (необязателен)
 *       'buy'      => string|null,           // надпись кнопки (по умолч. 'Купить')
 *       'showHit'  => bool,                  // показывать ли огонёк «Топ продаж» (только v2)
 *   ];
 */

$card = isset($card) && is_array($card) ? $card : [];
$kind      = $card['kind']     ?? 'v1';
$title     = $card['title']    ?? '';
$price     = $card['price']    ?? '';
$oldPrice  = $card['oldPrice'] ?? null;
$img       = $card['img']      ?? 'test.png';
$buy       = $card['buy']      ?? 'Купить';
$showHit   = !empty($card['showHit']);

$titleEsc = htmlspecialchars($title, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
$priceEsc = htmlspecialchars($price, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
$buyEsc   = htmlspecialchars($buy,   ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
$imgEsc   = htmlspecialchars($img,   ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
$topClass = $kind === 'v2' ? ' card--top' : '';
?>
<article class="card<?php echo $topClass; ?>">
    <div class="card__badge">
        <span class="card__flag" aria-hidden="true"></span>
        <span>Made in Italy</span>
    </div>
    <img class="card__img" src="<?php echo $imgEsc; ?>" alt="">
    <h3 class="card__title"><?php echo $titleEsc; ?></h3>

    <?php if ($kind === 'v1') : ?>
        <div class="card__price card__price--v1">
            <div class="search_price_plain search_price_plain--accent">
                <span class="search_price_plain__value">Цена <?php echo $priceEsc; ?> ₽</span>
            </div>
        </div>
    <?php else : ?>
        <div class="card__price card__price--v2">
            <div class="search_price_hit_block">
                <div class="search_price_hit_block__price">
                    <span class="search_price_hit_block__value">Цена <?php echo $priceEsc; ?> ₽</span>
                </div>
                <div class="search_price_hit_block__hit">
                    <?php if ($showHit) : ?>
                        <span class="search_hit__circle" aria-hidden="true">
                            <svg width="14" height="17" viewBox="0 0 14 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.63792 5.2036C2.55717 6.06492 2.50051 7.58923 3.00908 8.23805C3.00908 8.23805 2.76967 6.56358 4.91589 4.46269C5.78004 3.61696 5.97979 2.46664 5.67804 1.6039C5.50663 1.11516 5.19355 0.711418 4.92155 0.429506C4.76289 0.263758 4.88472 -0.00965407 5.11563 0.000262443C6.51245 0.0625948 8.77624 0.450755 9.73815 2.86472C10.1603 3.92437 10.1915 5.01943 9.99031 6.13292C9.86281 6.84407 9.40948 8.42505 10.4436 8.61913C11.1817 8.75796 11.5387 8.17147 11.6988 7.74931C11.7654 7.57365 11.9963 7.52973 12.1209 7.66998C13.3676 9.08804 13.4738 10.7583 13.216 12.1962C12.7174 14.9756 9.90248 16.9986 7.10602 16.9986C3.61257 16.9986 0.8317 14.9997 0.110628 11.3816C-0.179784 9.92103 -0.0324528 7.03107 2.22001 4.9911C2.38718 4.8381 2.66059 4.9741 2.63792 5.2036Z" fill="url(#sf2_g0_<?php echo uniqid(); ?>)"/>
                            </svg>
                        </span>
                        <span class="search_hit__text">Топ <br>продаж</span>
                    <?php endif; ?>
                </div>
            </div>
            <?php if ($oldPrice !== null) : ?>
                <div class="search_price_old">Старая цена <?php echo htmlspecialchars($oldPrice, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8'); ?> ₽</div>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <a class="card__quick" href="#">Быстрый заказ</a>

    <a class="btn btn--buy btn--icon" href="#">
        <?php echo $buyEsc; ?>
        <svg class="ic" aria-hidden="true">
            <use xlink:href="imgs/ic.svg#cart"></use>
        </svg>
    </a>
</article>
