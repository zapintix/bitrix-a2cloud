<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<nav class="header__nav" data-astro-cid-hcwr7iq5>
    <ul class="header__list" data-astro-cid-hcwr7iq5>
        <?php $previousLevel = 0; ?>
        <?php foreach ($arResult as $item): ?>
        <?php if ($previousLevel && $item["DEPTH_LEVEL"] < $previousLevel): ?>
            <?= str_repeat("</ul></li>", ($previousLevel - $item["DEPTH_LEVEL"])); ?>
        <?php endif; ?>

        <?php if ($item["IS_PARENT"]): ?>
        <li class="header__item" data-astro-cid-hcwr7iq5>
            <button data-astro-cid-hcwr7iq5>
                        <span data-astro-cid-hcwr7iq5="true" data-astro-cid-py3iw5hh="true" class="text text_variant_17 text_color_blue">
                            <?= (isset($item['TEXT']) ? $item['TEXT'] : '') ?>
                        </span>
                <span class="header__arrow" data-astro-cid-hcwr7iq5>
                            <svg width="40" height="40" viewBox="0 0 40 40" fill="none" data-astro-cid-hcwr7iq5="true">
                                <path d="M10 20L20 30M20 30L30 20M20 30V10" stroke="#3267D3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
            </button>
            <ul>
                <?php elseif ($item["DEPTH_LEVEL"] == 1): ?>
                    <li class="header__item" data-astro-cid-hcwr7iq5 <?= (isset($item['type']) && $item['type'] === 'button') ? 'data-menu-button="' . $item['identifier'] . '"' : ''; ?>>
                        <button data-astro-cid-hcwr7iq5>
                        <span data-astro-cid-hcwr7iq5="true" data-astro-cid-py3iw5hh="true" class="text text_variant_17 text_color_blue">
                            <?= (isset($item['TEXT']) ? $item['TEXT'] : '') ?>
                        </span>
                        </button>
                    </li>
<!--                --><?php //else: ?>
<!--                    <li>-->
<!--                        <a class="header-card" data-astro-cid-hcwr7iq5="true" href="#" data-astro-cid-dktb7hwi>-->
<!--                            <p data-astro-cid-dktb7hwi="true" data-astro-cid-py3iw5hh="true" class="text text_variant_17 text_color_blue header-card__title">-->
<!--                                --><?php //= (isset($item["TEXT"]) ? $item["TEXT"] : '') ?>
<!--                            </p>-->
<!--                            <div class="header-card__img" data-astro-cid-dktb7hwi>-->
<!--                                <picture class="picture" data-astro-cid-dktb7hwi="true" data-astro-cid-s5f3uvtz>-->
<!--                                    <source type="image/webp" srcset="/images/header-4_aqH2N.webp 556w" sizes="100vw" data-astro-cid-s5f3uvtz>-->
<!--                                    <source type="image/png" srcset="/images/header-4.png 556w" sizes="100vw" data-astro-cid-s5f3uvtz>-->
<!--                                    <img src="/images/header-4.png" srcset="/images/header-4.png 556w" alt width="556" height="370" loading="lazy" decoding="async" class="picture__img" sizes="100vw" data-astro-cid-s5f3uvtz>-->
<!--                                </picture>-->
<!--                            </div>-->
<!--                        </a>-->
<!--                    </li>-->
                <?php endif; ?>

                <?php $previousLevel = $item["DEPTH_LEVEL"]; ?>
                <?php endforeach; ?>

                <?php if ($previousLevel > 1): ?>
                    <?= str_repeat("</ul></li>", ($previousLevel - 1)); ?>
                <?php endif; ?>
            </ul>
</nav>