<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();?>
    <div class="swiper-wrapper slider__wrapper" data-astro-cid-ag2u2y6o>
        <?php foreach($arResult["ITEMS"] as $arItem):?>
        <a href="<?=$arItem["DETAIL_PAGE_URL"]?>" class="article-card article-card--has-image swiper-slide slider-cards__item" data-astro-cid-vhoyfj4g="true" data-astro-cid-hzklegbo>
            <div class="article-card__img" data-astro-cid-hzklegbo>
                <picture class="picture" data-astro-cid-hzklegbo="true" data-astro-cid-s5f3uvtz>



                    <source type="image/webp" srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/img-card-blog-3_Z1jvUjP.webp 915w" sizes="100vw" data-astro-cid-s5f3uvtz>

                    <source type="image/png" srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/img-card-blog-3.png 915w" sizes="100vw" data-astro-cid-s5f3uvtz>


                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/img-card-blog-3.png" srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/img-card-blog-3.png 915w" alt="#" width="915" height="680" loading="lazy" decoding="async" class="picture__img" sizes="100vw" data-astro-cid-s5f3uvtz>
                </picture>
            </div>
            <div class="article-card__head" data-astro-cid-hzklegbo>
                <p data-astro-cid-hzklegbo="true" data-astro-cid-py3iw5hh="true" class="text text_variant_17 text_color_gray">
                    <?php
                    echo FormatDate("d f Y", MakeTimeStamp($arItem["TIMESTAMP_X"]));
                    ?>
                </p>
                <div class="article-card__block" data-astro-cid-hzklegbo>
                    <div class="article-card__time" data-astro-cid-hzklegbo>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" class="article-card__svg" data-astro-cid-hzklegbo="true">
                            <g>
                                <g>
                                    <path d="M22 12C22 17.52 17.52 22 12 22C6.48 22 2 17.52 2 12C2 6.48 6.48 2 12 2C17.52 2 22 6.48 22 12Z" stroke="#80828B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M15.7099 15.1798L12.6099 13.3298C12.0699 13.0098 11.6299 12.2398 11.6299 11.6098V7.50977" stroke="#80828B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                            </g>
                        </svg>
                        <p data-astro-cid-hzklegbo="true" data-astro-cid-py3iw5hh="true" class="text text_variant_17 text_color_gray">
                            <?= htmlspecialchars($arItem["PROPERTIES"]["11"]["VALUE"]) ?>
                        </p>
                    </div>
                    <div class="article-card__time" data-astro-cid-hzklegbo>
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" class="article-card__svg" data-astro-cid-hzklegbo="true">
                            <g>
                                <g>
                                    <path d="M15.5799 11.9999C15.5799 13.9799 13.9799 15.5799 11.9999 15.5799C10.0199 15.5799 8.41992 13.9799 8.41992 11.9999C8.41992 10.0199 10.0199 8.41992 11.9999 8.41992C13.9799 8.41992 15.5799 10.0199 15.5799 11.9999Z" stroke="#80828B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M11.9998 20.2702C15.5298 20.2702 18.8198 18.1902 21.1098 14.5902C22.0098 13.1802 22.0098 10.8102 21.1098 9.40021C18.8198 5.80021 15.5298 3.72021 11.9998 3.72021C8.46984 3.72021 5.17984 5.80021 2.88984 9.40021C1.98984 10.8102 1.98984 13.1802 2.88984 14.5902C5.17984 18.1902 8.46984 20.2702 11.9998 20.2702Z" stroke="#80828B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                </g>
                            </g>
                        </svg>
                        <p data-astro-cid-hzklegbo="true" data-astro-cid-py3iw5hh="true" class="text text_variant_17 text_color_gray">
                            <?= htmlspecialchars($arItem["PROPERTIES"]["12"]["VALUE"]) ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="article-card__wrapper" data-astro-cid-hzklegbo>
                <h4 data-astro-cid-hzklegbo="true" data-astro-cid-5a7m7riw="true" class="title title_variant_24 title_color_blue title_weight_300 article-card__text">

                    <?=$arItem["NAME"]?>

                </h4>
            </div>
            <div class="article-card__foot" data-astro-cid-hzklegbo>
                <p data-astro-cid-hzklegbo="true" data-astro-cid-py3iw5hh="true" class="text text_variant_17 text_color_blue article-card__tag">
                    IT
                </p><p data-astro-cid-hzklegbo="true" data-astro-cid-py3iw5hh="true" class="text text_variant_17 text_color_blue article-card__tag">
                    Разработка
                </p>
            </div>
        </a>
        <?php endforeach;?>
    </div>
