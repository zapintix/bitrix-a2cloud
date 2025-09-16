<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
?>
<main class="page-container" data-barba="container" data-barba-namespace="blog-news">
    <div class="scroll-layout scroll-layout_bg_gray scroll-layout_lh-120 scroll-layout_pb-120" data-astro-cid-k3uedcv5>
        <div class="scroll-layout__bg" data-astro-cid-k3uedcv5>
            <div data-astro-cid-k3uedcv5>
                <div class="scroll-layout__grad" data-astro-cid-k3uedcv5></div>
                <div class="why-us__bg" data-astro-cid-k3uedcv5>
                    <canvas class="gradient-bg" data-gradient-id="why-us-bg" id="gradient-canvas-light" data-astro-cid-k3uedcv5="true" data-transition-in data-astro-cid-e27vrz6h>

                    </canvas>
                </div>
            </div>
        </div>

        <div class="scroll-layout__wrapper" data-astro-cid-k3uedcv5>
            <div class="scroll-layout__container" data-astro-cid-k3uedcv5>
                <?php $APPLICATION->IncludeComponent(
                    "bitrix:breadcrumb",
                    "blog_detail",
                    array(
                        "PATH" => "",
                        "SITE_ID" => "s1",
                        "START_FROM" => "0",
                    ),
                    false
                );?>
                <h1 style="line-height:120%" data-astro-cid-k3uedcv5="true" data-astro-cid-5a7m7riw="true" class="title title_variant_48 title_color_white title_weight_400 scroll-layout__title">
                    <?=$arResult["NAME"]?>
                </h1>

            </div>
            <div class="scroll-layout__animated-block js-scroll-animate" data-astro-cid-k3uedcv5>
                <div class="scroll-trigger-marker" data-astro-cid-k3uedcv5>
                </div>
            </div>
            <div class="scroll-layout__inner" data-astro-cid-k3uedcv5>

                <div class="container" data-astro-cid-zx6dcily>

                    <div class="news-head" data-astro-cid-w4tj2pn2>
                        <div class="header-article" data-astro-cid-w4tj2pn2="true" data-astro-cid-c7msqwed>
                            <div class="header-article__tags" data-astro-cid-c7msqwed>
                                <div class="header-article__tag" data-astro-cid-c7msqwed>
                                    <p data-astro-cid-c7msqwed="true" data-astro-cid-py3iw5hh="true" class="text text_variant_17 text_color_blue">
                                        Новости
                                    </p>
                                </div><div class="header-article__tag" data-astro-cid-c7msqwed>
                                    <p data-astro-cid-c7msqwed="true" data-astro-cid-py3iw5hh="true" class="text text_variant_17 text_color_blue">
                                        IT
                                    </p>
                                </div>
                            </div>

                            <div class="header-article__info" data-astro-cid-c7msqwed>
                                <p data-astro-cid-c7msqwed="true" data-astro-cid-py3iw5hh="true" class="text text_variant_17 text_color_gray">
                                    <?php
                                    echo FormatDate("d f Y", MakeTimeStamp($arResult["TIMESTAMP_X"]));
                                    ?>
                                </p>
                                <div class="header-article__time" data-astro-cid-c7msqwed>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" class="header-article__svg" data-astro-cid-c7msqwed="true">
                                        <g>
                                            <g>
                                                <path d="M22 12C22 17.52 17.52 22 12 22C6.48 22 2 17.52 2 12C2 6.48 6.48 2 12 2C17.52 2 22 6.48 22 12Z" stroke="#80828B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M15.7099 15.1798L12.6099 13.3298C12.0699 13.0098 11.6299 12.2398 11.6299 11.6098V7.50977" stroke="#80828B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </g>
                                        </g>
                                    </svg>
                                    <p data-astro-cid-c7msqwed="true" data-astro-cid-py3iw5hh="true" class="text text_variant_17 text_color_gray">
                                        <?= htmlspecialchars($arResult["PROPERTIES"]["11"]["VALUE"]) ?>
                                    </p>
                                </div>

                                <div class="header-article__time" data-astro-cid-c7msqwed>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" class="header-article__svg" data-astro-cid-c7msqwed="true">
                                        <g>
                                            <g>
                                                <path d="M15.5799 11.9999C15.5799 13.9799 13.9799 15.5799 11.9999 15.5799C10.0199 15.5799 8.41992 13.9799 8.41992 11.9999C8.41992 10.0199 10.0199 8.41992 11.9999 8.41992C13.9799 8.41992 15.5799 10.0199 15.5799 11.9999Z" stroke="#80828B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M11.9998 20.2702C15.5298 20.2702 18.8198 18.1902 21.1098 14.5902C22.0098 13.1802 22.0098 10.8102 21.1098 9.40021C18.8198 5.80021 15.5298 3.72021 11.9998 3.72021C8.46984 3.72021 5.17984 5.80021 2.88984 9.40021C1.98984 10.8102 1.98984 13.1802 2.88984 14.5902C5.17984 18.1902 8.46984 20.2702 11.9998 20.2702Z" stroke="#80828B" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                                            </g>
                                        </g>
                                    </svg>
                                    <p data-astro-cid-c7msqwed="true" data-astro-cid-py3iw5hh="true" class="text text_variant_17 text_color_gray">
                                        <?= htmlspecialchars($arResult["PROPERTIES"]["12"]["VALUE"]) ?>
                                    </p>
                                </div>
                            </div>



                            <div class="header-article__links" data-astro-cid-c7msqwed>

                                <div class="header-article__social" data-astro-cid-c7msqwed>
                                    <p data-astro-cid-c7msqwed="true" data-astro-cid-py3iw5hh="true" class="text text_variant_17 text_color_gray">
                                        Поделиться
                                    </p>
                                    <div class="flex gap-2" data-astro-cid-c7msqwed>
                                        <?php
                                        $currentUrl = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];
                                        ?>
                                        <a data-astro-cid-c7msqwed="true" href="https://t.me/share/url?url=<?= urlencode($currentUrl)?>"  data-astro-cid-m3hx3gxg="true" class="button button_color_gray button_variant_social header-article__button"><span class="button__icon button__icon_left" data-astro-cid-m3hx3gxg>
                                                <svg width="40" height="40" viewBox="0 0 40 40" fill="none" data-astro-cid-m3hx3gxg="true">
                                                    <path d="M28 12.6022L24.9946 28.2923C24.9946 28.2923 24.5741 29.3801 23.4189 28.8584L16.4846 23.3526L16.4524 23.3364C17.3891 22.4654 24.6524 15.7027 24.9698 15.3961C25.4613 14.9214 25.1562 14.6387 24.5856 14.9974L13.8568 22.053L9.71764 20.6108C9.71764 20.6108 9.06626 20.3708 9.00359 19.8491C8.9401 19.3265 9.73908 19.0439 9.73908 19.0439L26.6131 12.1889C26.6131 12.1889 28 11.5579 28 12.6022Z" fill="white" />
                                                </svg>
                                            </span>
                                        </a>
                                        <div class="relative" data-astro-cid-c7msqwed>
                                            <button data-make-copy="true" data-astro-cid-c7msqwed="true" data-astro-cid-m3hx3gxg="true" class="button button_color_gray button_variant_icon header-article__button header-article__button--link"><span class="button__icon button__icon_left" data-astro-cid-m3hx3gxg>
                                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" data-astro-cid-m3hx3gxg="true">
                                                        <path d="M10.6828 7.68276C10.3899 7.97566 10.3899 8.45053 10.6828 8.74342C10.9756 9.03632 11.4505 9.03632 11.7434 8.74342L10.6828 7.68276ZM13.4851 5.94109L14.0154 6.47142V6.47142L13.4851 5.94109ZM18.0291 5.94109L17.4988 6.47142L18.0291 5.94109ZM18.0291 10.4851L17.4988 9.95476L18.0291 10.4851ZM15.2268 12.2268C14.9339 12.5197 14.9339 12.9945 15.2268 13.2874C15.5196 13.5803 15.9945 13.5803 16.2874 13.2874L15.2268 12.2268ZM13.2583 16.3185C13.5513 16.0257 13.5514 15.5508 13.2585 15.2579C12.9657 14.9649 12.4908 14.9648 12.1979 15.2576L13.2583 16.3185ZM10.4561 18.0591L10.9797 18.5961L10.9863 18.5895L10.4561 18.0591ZM5.94132 18.0309L5.41104 18.5612H5.41104L5.94132 18.0309ZM5.91208 13.5161L5.38171 12.9857L5.37499 12.9926L5.91208 13.5161ZM8.71441 11.7744C9.00731 11.4815 9.00731 11.0067 8.71441 10.7138C8.42152 10.4209 7.94665 10.4209 7.65375 10.7138L8.71441 11.7744ZM14.7744 10.2574C15.0673 9.96453 15.0673 9.48966 14.7744 9.19676C14.4815 8.90387 14.0066 8.90387 13.7138 9.19676L14.7744 10.2574ZM9.16975 13.7408C8.87686 14.0337 8.87686 14.5085 9.16975 14.8014C9.46265 15.0943 9.93752 15.0943 10.2304 14.8014L9.16975 13.7408ZM11.7434 8.74342L14.0154 6.47142L12.9548 5.41076L10.6828 7.68276L11.7434 8.74342ZM14.0154 6.47142C14.9773 5.50953 16.5369 5.50953 17.4988 6.47142L18.5594 5.41076C17.0117 3.86308 14.5024 3.86308 12.9548 5.41076L14.0154 6.47142ZM17.4988 6.47142C18.4607 7.43332 18.4607 8.99287 17.4988 9.95476L18.5594 11.0154C20.1071 9.46774 20.1071 6.95845 18.5594 5.41076L17.4988 6.47142ZM17.4988 9.95476L15.2268 12.2268L16.2874 13.2874L18.5594 11.0154L17.4988 9.95476ZM12.1979 15.2576L9.92587 17.5286L10.9863 18.5895L13.2583 16.3185L12.1979 15.2576ZM9.93249 17.5221C8.96732 18.4632 7.42491 18.4536 6.47159 17.5005L5.41104 18.5612C6.94495 20.0948 9.42671 20.1103 10.9797 18.5961L9.93249 17.5221ZM6.47159 17.5005C5.51827 16.5474 5.50828 15.0049 6.44918 14.0396L5.37499 12.9926C3.86107 14.5459 3.87714 17.0277 5.41104 18.5612L6.47159 17.5005ZM6.44241 14.0464L8.71441 11.7744L7.65375 10.7138L5.38175 12.9858L6.44241 14.0464ZM13.7138 9.19676L9.16975 13.7408L10.2304 14.8014L14.7744 10.2574L13.7138 9.19676Z" fill="#3267D3" />
                                                    </svg>
                                                </span
                                            </button>
                                            <div data-copy-tooltip class="header-article__tooltip header-article__tooltip_hidden" data-astro-cid-c7msqwed>
                                                <p data-astro-cid-c7msqwed="true" data-astro-cid-py3iw5hh="true" class="text text_variant_14 text_color_white text-center">
                                                    Ссылка скопирована
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <script>
                            document.addEventListener('DOMContentLoaded', () => {
                                const makeCopyButtons = document.querySelectorAll('[data-make-copy]')
                                const copyTooltip = document.querySelectorAll('[data-copy-tooltip]')

                                if (!makeCopyButtons || !copyTooltip) return

                                makeCopyButtons.forEach(button => {
                                    button.addEventListener('click', () => {
                                        window.navigator.clipboard.writeText(window.location.href)
                                        copyTooltip.forEach(tooltip => {
                                            tooltip.classList.remove('header-article__tooltip_hidden')
                                            setTimeout(() => {
                                                tooltip.classList.add('header-article__tooltip_hidden')
                                            }, 2000)
                                        })
                                    })
                                })
                            })
                        </script>
                    </div>

                </div>

                <div class="container container_small" data-astro-cid-zx6dcily>

                    <div class="news-content" data-astro-cid-ho6nz27f>
                        <div class="text-card" data-astro-cid-ho6nz27f="true" data-astro-cid-y6qoxayo>
                            <h2 data-astro-cid-y6qoxayo="true" data-astro-cid-5a7m7riw="true" class="title title_variant_48 title_color_blue title_weight_400">
<!--                                -->
                            </h2>
                            <div data-astro-cid-y6qoxayo>
                                <div class="text-content">
                                    <div class="text-content">
                                        <?= $arResult["DETAIL_TEXT"] ?>
                                    </div>


                                </div>
                            </div>
                        </div>
                        <section class="swiper slider" data-slider="slider-images" data-slider-params="{&#34;loop&#34;:true}" data-astro-cid-beekwih6>
                            <div class="swiper-wrapper slider__wrapper" data-astro-cid-beekwih6>
                                <div class="swiper-slide slider__item" data-astro-cid-beekwih6>
                                    <picture class="picture slider__image" data-astro-cid-beekwih6="true" data-astro-cid-s5f3uvtz>



                                        <source type="image/webp" srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/img-card-blog-2_Z2iwFgg.webp 2068w" sizes="100vw" data-astro-cid-s5f3uvtz>

                                        <source type="image/png" srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/img-card-blog-2.png 2068w" sizes="100vw" data-astro-cid-s5f3uvtz>


                                        <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/img-card-blog-2.png" srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/img-card-blog-2.png 2068w" alt width="2068" height="1160" loading="lazy" decoding="async" class="picture__img" sizes="100vw" data-astro-cid-s5f3uvtz>
                                    </picture>
                                </div><div class="swiper-slide slider__item" data-astro-cid-beekwih6>
                                    <picture class="picture slider__image" data-astro-cid-beekwih6="true" data-astro-cid-s5f3uvtz>



                                        <source type="image/webp" srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/img-card-blog-2_Z2iwFgg.webp 2068w" sizes="100vw" data-astro-cid-s5f3uvtz>

                                        <source type="image/png" srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/img-card-blog-2.png 2068w" sizes="100vw" data-astro-cid-s5f3uvtz>


                                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/img-card-blog-2.png" srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/img-card-blog-2.png 2068w" alt width="2068" height="1160" loading="lazy" decoding="async" class="picture__img" sizes="100vw" data-astro-cid-s5f3uvtz>
                                    </picture>
                                </div><div class="swiper-slide slider__item" data-astro-cid-beekwih6>
                                    <picture class="picture slider__image" data-astro-cid-beekwih6="true" data-astro-cid-s5f3uvtz>



                                        <source type="image/webp" srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/img-card-blog-2_Z2iwFgg.webp 2068w" sizes="100vw" data-astro-cid-s5f3uvtz>

                                        <source type="image/png" srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/img-card-blog-2.png 2068w" sizes="100vw" data-astro-cid-s5f3uvtz>


                                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/img-card-blog-2.png" srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/img-card-blog-2.png 2068w" alt width="2068" height="1160" loading="lazy" decoding="async" class="picture__img" sizes="100vw" data-astro-cid-s5f3uvtz>
                                    </picture>
                                </div><div class="swiper-slide slider__item" data-astro-cid-beekwih6>
                                    <picture class="picture slider__image" data-astro-cid-beekwih6="true" data-astro-cid-s5f3uvtz>



                                        <source type="image/webp" srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/img-card-blog-2_Z2iwFgg.webp 2068w" sizes="100vw" data-astro-cid-s5f3uvtz>

                                        <source type="image/png" srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/img-card-blog-2.png 2068w" sizes="100vw" data-astro-cid-s5f3uvtz>


                                        <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/img-card-blog-2.png" srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/img-card-blog-2.png 2068w" alt width="2068" height="1160" loading="lazy" decoding="async" class="picture__img" sizes="100vw" data-astro-cid-s5f3uvtz>
                                    </picture>
                                </div>
                            </div>

                            <div class="slider__controls" data-astro-cid-beekwih6>
                                <div class="slider__navigations desktop" data-astro-cid-beekwih6>
                                    <button data-slider-button-prev="slider-images" data-astro-cid-beekwih6="true" data-astro-cid-m3hx3gxg="true" class="button button_color_light button_variant_icon slider__navigation slider__navigation_prev"><span class="button__icon button__icon_left" data-astro-cid-m3hx3gxg>
        <svg width="13" height="8" viewBox="0 0 13 8" fill="none" data-astro-cid-m3hx3gxg="true">
  <path d="M11.5 1.5L6.5 6.5L1.5 1.5" stroke="#3267D3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
</svg>
      </span></button>
                                    <button data-slider-button-next="slider-images" data-astro-cid-beekwih6="true" data-astro-cid-m3hx3gxg="true" class="button button_color_light button_variant_icon slider__navigation slider__navigation_next"><span class="button__icon button__icon_right" data-astro-cid-m3hx3gxg>
        <svg width="13" height="8" viewBox="0 0 13 8" fill="none" data-astro-cid-m3hx3gxg="true">
  <path d="M11.5 1.5L6.5 6.5L1.5 1.5" stroke="#3267D3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
</svg>
      </span></button>
                                </div>
                            </div>

                            <div class="slider__pagination" data-slider-pagination="slider-images" data-astro-cid-beekwih6>
                            </div>


                        </section>
                        <div class="flex flex-col gap-10 devices:gap-[18px]" data-astro-cid-ho6nz27f>
                            <h2 data-astro-cid-ho6nz27f="true" data-astro-cid-5a7m7riw="true" class="title title_variant_48 title_color_blue title_weight_400">
                                Инструменты и методы
                            </h2>
                            <div class="video-block" data-modal-btn="video-modal" data-modal-trigger="video-modal" data-frame-btn data-frame-src="https://rutube.ru/play/embed/9aff75c18693e291c38a793b61167aa4/" data-astro-cid-ho6nz27f="true" data-astro-cid-4jls7dlw>
                                <picture class="picture video-block__poster" data-astro-cid-4jls7dlw="true" data-astro-cid-s5f3uvtz>



                                    <source type="image/webp" srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/preview-poster_Z20tv1z.webp 2068w" sizes="100vw" data-astro-cid-s5f3uvtz>

                                    <source type="image/png" srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/preview-poster.png 2068w" sizes="100vw" data-astro-cid-s5f3uvtz>


                                    <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/preview-poster.png" srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/preview-poster.png 2068w" alt width="2068" height="1140" loading="lazy" decoding="async" class="picture__img" sizes="100vw" data-astro-cid-s5f3uvtz>
                                </picture>
                                <button class="video-block__play" id="button-play-video" aria-label="Play/Pause" data-astro-cid-4jls7dlw>
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" class="video-block__play-icon" data-astro-cid-4jls7dlw="true">
                                        <path d="M20.4462 9.34094L7.7977 1.43581C5.61693 0.228077 3 1.65539 3 4.18064V19.8811C3 22.2966 5.61693 23.8337 7.7977 22.5162L20.4462 14.611C22.5179 13.4033 22.5179 10.5487 20.4462 9.34094Z" fill="white" />
                                    </svg>
                                </button>
                            </div>

                            <div class="modal video-block__modal" data-modal="video-modal" aria-hidden="true" role="dialog" aria-modal="true" data-astro-cid-4jls7dlw="true" data-astro-cid-p6hcazob>
                                <div class="modal__backdrop" data-modal-backdrop data-astro-cid-p6hcazob>
                                </div>
                                <div class="modal__container" role="document" data-astro-cid-p6hcazob>
                                    <button data-modal-close="true" data-astro-cid-p6hcazob="true" data-astro-cid-m3hx3gxg="true" class="button button_color_light button_variant_icon modal__close modal__close--media"><span class="button__icon button__icon_right" data-astro-cid-m3hx3gxg>
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" data-astro-cid-m3hx3gxg="true">
  <path d="M13 1L1 13" stroke="#3267D3" stroke-width="1.5" stroke-linecap="round" />
  <path d="M1 1L13 13" stroke="#3267D3" stroke-width="1.5" stroke-linecap="round" />
</svg>
      </span></button>

                                    <div class="modal__header" data-astro-cid-p6hcazob>

                                    </div>
                                    <div class="modal__content" data-astro-cid-p6hcazob>
                                        <div class="video-block__modal-wrapper active" data-modal-video data-astro-cid-4jls7dlw>
                                        </div>
                                    </div>
                                    <div class="modal__footer" data-astro-cid-p6hcazob>

                                    </div>
                                </div>
                            </div>



                            <script type="module" src="<?= SITE_TEMPLATE_PATH ?>/assets/scripts/script2.js?1757931186511"></script>
                        </div>
                        <figure class="mobile:mt-[-1.375rem]" data-astro-cid-ho6nz27f>
                            <picture class="picture news-content__image" data-astro-cid-ho6nz27f="true" data-astro-cid-s5f3uvtz>



                                <source type="image/webp" srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/img-card-blog-2_Z2iwFgg.webp 2068w" sizes="100vw" data-astro-cid-s5f3uvtz>

                                <source type="image/png" srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/img-card-blog-2.png 2068w" sizes="100vw" data-astro-cid-s5f3uvtz>


                                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/img-card-blog-2.png" srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/img-card-blog-2.png 2068w" alt width="2068" height="1160" loading="lazy" decoding="async" class="picture__img" sizes="100vw" data-astro-cid-s5f3uvtz>
                            </picture>
                        </figure>
                    </div>

                </div>

                <div class="container" data-astro-cid-zx6dcily>

                    <div class="subscribe-banner mt-[11.25rem] devices:mt-[2.5rem]" data-astro-cid-fc3mo2fs>
                        <h4 data-astro-cid-fc3mo2fs="true" data-astro-cid-5a7m7riw="true" class="title title_variant_48 title_color_white title_weight_400 subscribe-banner__title">
                            Узнавайте первыми о выходе новостей и мероприятий
                        </h4>
                        <button data-modal-btn="subscribe-modal" data-modal-trigger="subscribe-modal" data-astro-cid-fc3mo2fs="true" data-astro-cid-m3hx3gxg="true" class="button button_color_light button_variant_contained subscribe-banner__button"><span class="button__text" data-astro-cid-m3hx3gxg>

    Подписаться
      </span><span class="button__icon button__icon_right" data-astro-cid-m3hx3gxg>
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" data-astro-cid-m3hx3gxg="true">
<path d="M17.9125 17.9123V6.08731M17.9125 6.08731H6.08753M17.9125 6.08731L6.08753 17.9123" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
</svg>
      </span></button>
                        <picture class="picture subscribe-banner__bg" data-astro-cid-fc3mo2fs="true" data-astro-cid-s5f3uvtz>

                            <source media="(max-width: 767px)" type="image/webp" srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/tg-banner-mobile_165fnw.webp 670w" sizes="100vw" data-astro-cid-s5f3uvtz>
                            <source media="(max-width: 767px)" type="image/png" srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/tg-banner-mobile.png 670w" sizes="100vw" data-astro-cid-s5f3uvtz>

                            <source media="(max-width: 1200px)" type="image/webp" srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/tg-banner-tablet_Z141zxu.webp 1456w" sizes="100vw" data-astro-cid-s5f3uvtz>
                            <source media="(max-width: 1200px)" type="image/png" srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/tg-banner-tablet.png 1456w" sizes="100vw" data-astro-cid-s5f3uvtz>



                            <source type="image/webp" srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/tg-banner-desktop_iTRMs.webp 3144w" sizes="100vw" data-astro-cid-s5f3uvtz>

                            <source type="image/png" srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/tg-banner-desktop.png 3144w" sizes="100vw" data-astro-cid-s5f3uvtz>


                            <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/tg-banner-desktop.png" srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/tg-banner-desktop.png 3144w" alt width="3144" height="672" loading="lazy" decoding="async" class="picture__img" sizes="100vw" data-astro-cid-s5f3uvtz>
                        </picture>

                    </div>

                    <div class="modal subscribe-banner__modal" data-modal="subscribe-modal" aria-hidden="true" role="dialog" aria-modal="true" data-astro-cid-fc3mo2fs="true" data-astro-cid-p6hcazob>
                        <div class="modal__backdrop" data-modal-backdrop data-astro-cid-p6hcazob>
                        </div>
                        <div class="modal__container" role="document" data-astro-cid-p6hcazob>
                            <button data-modal-close="true" data-astro-cid-p6hcazob="true" data-astro-cid-m3hx3gxg="true" class="button button_color_light button_variant_icon modal__close"><span class="button__icon button__icon_right" data-astro-cid-m3hx3gxg>
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" data-astro-cid-m3hx3gxg="true">
  <path d="M13 1L1 13" stroke="#3267D3" stroke-width="1.5" stroke-linecap="round" />
  <path d="M1 1L13 13" stroke="#3267D3" stroke-width="1.5" stroke-linecap="round" />
</svg>
      </span></button>

                            <div class="modal__header" data-astro-cid-p6hcazob>

                            </div>
                            <div class="modal__content" data-astro-cid-p6hcazob>
                                <div class="subscribe-banner__modal-wrapper" data-astro-cid-fc3mo2fs>
                                    <h2 data-astro-cid-fc3mo2fs="true" data-astro-cid-5a7m7riw="true" class="title title_variant_48 title_color_blue title_weight_400 text-center !leading-[120%]">
                                        Подписка
                                    </h2>
                                    <p data-astro-cid-fc3mo2fs="true" data-astro-cid-py3iw5hh="true" class="text text_variant_20 text_color_gray max-w-[80%] text-center">
                                        Узнавайте первыми о выходе новостей и мероприятий
                                    </p>
                                    <form data-form-id="subscribe-from-banner" novalidate data-astro-cid-fc3mo2fs="true" class="form subscribe-banner__modal-form w-full" novalidate data-astro-cid-puwe3cxz>

                                        <label class="input input--light" data-input-parent data-astro-cid-vzfstetq>
                                            <input class="input__field" data-input placeholder="Email*" type="email" required data-validate="email" data-astro-cid-fc3mo2fs="true" data-astro-cid-vzfstetq>

                                            <span class="input__error" data-error-container data-astro-cid-vzfstetq></span>
                                        </label>
                                        <label class="checkbox checkbox_variant-default" data-input-parent data-astro-cid-elhflciz>
  <span class="checkbox__line" data-astro-cid-elhflciz>
    <input type="checkbox" data-input required data-validate="checkbox" data-astro-cid-fc3mo2fs="true" class="astro-elhflciz" data-astro-cid-elhflciz>
    <span class="checkbox__box" data-astro-cid-elhflciz>
      <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" data-astro-cid-elhflciz="true"><!-- <rect width="24" height="24" rx="8" fill="#3267D3"/> -->
<path d="M7 12.5552L9.46004 15.2243C9.84855 15.6459 10.5112 15.6552 10.9114 15.2447L17 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
</svg>
    </span>
    <span class="checkbox__text" data-astro-cid-elhflciz>
      <span data-astro-cid-fc3mo2fs="true" data-astro-cid-py3iw5hh="true" class="text text_variant_14 text_color_gray">

          Я даю своё согласие на обработку <a class="inline text-[#3267D3]" href="#" data-astro-cid-fc3mo2fs>персональных данных</a>

</span>
    </span>
  </span>
                                            <span class="checkbox__error" data-error-container data-astro-cid-elhflciz></span>
                                        </label>
                                        <label class="checkbox checkbox_variant-default" data-input-parent data-astro-cid-elhflciz>
  <span class="checkbox__line" data-astro-cid-elhflciz>
    <input type="checkbox" data-input data-astro-cid-fc3mo2fs="true" class="astro-elhflciz" data-astro-cid-elhflciz>
    <span class="checkbox__box" data-astro-cid-elhflciz>
      <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" data-astro-cid-elhflciz="true"><!-- <rect width="24" height="24" rx="8" fill="#3267D3"/> -->
<path d="M7 12.5552L9.46004 15.2243C9.84855 15.6459 10.5112 15.6552 10.9114 15.2447L17 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
</svg>
    </span>
    <span class="checkbox__text" data-astro-cid-elhflciz>

        <span data-astro-cid-fc3mo2fs="true" data-astro-cid-py3iw5hh="true" class="text text_variant_14 text_color_gray">
  Я согласен получать рекламные и информационные материалы
</span>

    </span>
  </span>
                                            <span class="checkbox__error" data-error-container data-astro-cid-elhflciz></span>
                                        </label>
                                        <button type="submit" data-astro-cid-fc3mo2fs="true" data-astro-cid-m3hx3gxg="true" class="button button_color_primary button_variant_contained"><span class="button__text" data-astro-cid-m3hx3gxg>
        Подписаться
      </span><span class="button__icon button__icon_right" data-astro-cid-m3hx3gxg>
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" data-astro-cid-m3hx3gxg="true">
<path d="M17.9125 17.9122V6.08729M17.9125 6.08729H6.08753M17.9125 6.08729L6.08753 17.9122" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
</svg>
      </span></button>

                                        <div class="form__error" data-form-error="" data-astro-cid-puwe3cxz>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="modal__footer" data-astro-cid-p6hcazob>

                            </div>
                        </div>
                    </div>
                    <section class="news-slider" data-astro-cid-vhoyfj4g>
                        <section class="swiper slider mt-[11.25rem] devices:mt-[2.5rem]" data-slider="slider" data-slider-params="{&#34;slidesPerView&#34;:1.1,&#34;spaceBetween&#34;:8,&#34;breakpoints&#34;:{&#34;768&#34;:{&#34;spaceBetween&#34;:8,&#34;slidesPerView&#34;:2.65},&#34;1200&#34;:{&#34;spaceBetween&#34;:40,&#34;slidesPerView&#34;:3}}}" data-swiper-init="true" data-astro-cid-ag2u2y6o>
                            <div class="slider__head" data-astro-cid-ag2u2y6o>
                                <div class="slider__pagination slider__pagination desktop" data-slider-pagination="slider" data-astro-cid-ag2u2y6o></div>
                                <div class="slider__title" data-astro-cid-ag2u2y6o>
                                    <h2 slot="title" data-astro-cid-vhoyfj4g="true" data-astro-cid-5a7m7riw="true" class="title title_variant_80 title_color_blue title_weight_400 news-slider__title">
                                        Советуем почитать
                                    </h2>
                                </div>
                                <div class="slider__navigations slider__navigations desktop" data-astro-cid-ag2u2y6o>
                                    <button data-slider-button-prev="slider" data-astro-cid-ag2u2y6o="true" data-astro-cid-m3hx3gxg="true" class="button button_color_light button_variant_icon slider__navigation slider__navigation_prev"><span class="button__icon button__icon_left" data-astro-cid-m3hx3gxg>
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" data-astro-cid-m3hx3gxg="true">
<path d="M14 17L9 12L14 7" stroke="#3267D3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
</svg>
      </span></button>
                                    <button data-slider-button-next="slider" data-astro-cid-ag2u2y6o="true" data-astro-cid-m3hx3gxg="true" class="button button_color_light button_variant_icon slider__navigation slider__navigation_next"><span class="button__icon button__icon_right" data-astro-cid-m3hx3gxg>
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" data-astro-cid-m3hx3gxg="true">
<path d="M14 17L9 12L14 7" stroke="#3267D3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
</svg>
      </span></button>
                                </div>
                            </div>

                            <?php
                            global $arOtherNewsFilter;
                            $arOtherNewsFilter = array("!ID" => $arResult["ID"]);
                            ?>

                            <?php $APPLICATION->IncludeComponent(
                                "bitrix:news.list",
                                "other_articles_slider",
                                array(
                                    "IBLOCK_TYPE" => "blog",
                                    "PROPERTY_CODE" => array("reading_time", "number_of_views"),
                                    "IBLOCK_ID" => "6",
                                    "NEWS_COUNT" => "10",
                                    "SORT_BY1" => "ACTIVE_FROM",
                                    "SORT_ORDER1" => "DESC",
                                    "FILTER_NAME" => "arOtherNewsFilter",
                                    "DETAIL_URL" => "/blog/#ELEMENT_ID#/",
                                    "CACHE_TYPE" => "A",
                                    "CACHE_TIME" => "36000000",
                                    "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                ),
                                false
                            );?>

                        </section>
                    </section>
                </div>
            </div>
        </div>
    </div>
    <a href="/blog/" class="cta-banner" data-section-color="black" data-astro-cid-g4w47g5s>
        <div class="cta-banner__bg" data-astro-cid-g4w47g5s>
            <picture class="picture" data-astro-cid-g4w47g5s="true" data-astro-cid-s5f3uvtz>

                <source media="(max-width: 767px)" type="image/webp" srcset="/assets/images/cta-banner-bg-m_1YN2dH.webp 750w" sizes="100vw" data-astro-cid-s5f3uvtz>
                <source media="(max-width: 767px)" type="image/jpg" srcset="/assets/images/cta-banner-bg-m.jpg 750w" sizes="100vw" data-astro-cid-s5f3uvtz>

                <source media="(max-width: 1200px)" type="image/webp" srcset="/assets/images/cta-banner-bg-d_ZNATk1.webp 1536w" sizes="100vw" data-astro-cid-s5f3uvtz>
                <source media="(max-width: 1200px)" type="image/jpg" srcset="/assets/images/cta-banner-bg-d.jpg 1536w" sizes="100vw" data-astro-cid-s5f3uvtz>



                <source type="image/webp" srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/cta-banner-bg_2oWCnr.webp 3840w" sizes="100vw" data-astro-cid-s5f3uvtz>

                <source type="image/jpg" srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/cta-banner-bg.jpg 3840w" sizes="100vw" data-astro-cid-s5f3uvtz>


                <img src="<?= SITE_TEMPLATE_PATH ?>/assets/images/cta-banner-bg.jpg" srcset="<?= SITE_TEMPLATE_PATH ?>/assets/images/cta-banner-bg.jpg 3840w" alt width="3840" height="1000" loading="lazy" decoding="async" class="picture__img" sizes="100vw" data-astro-cid-s5f3uvtz>
            </picture>
        </div>
        <div class="cta-banner__grad" data-astro-cid-g4w47g5s></div>
        <div class="cta-banner__content" data-astro-cid-g4w47g5s>
            <div class="cta-banner__next" data-astro-cid-g4w47g5s>
                <div data-astro-cid-g4w47g5s="true" data-astro-cid-m3hx3gxg="true" class="button button_color_primary button_variant_icon cta-banner__button devices"><span class="button__icon button__icon_left" data-astro-cid-m3hx3gxg>
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" data-astro-cid-m3hx3gxg="true">
<path d="M17.9125 17.9122V6.08729M17.9125 6.08729H6.08753M17.9125 6.08729L6.08753 17.9122" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
</svg>
      </span>
                </div>
                <h4 data-astro-cid-g4w47g5s="true" data-astro-cid-5a7m7riw="true" class="title title_variant_24 title_color_white title_weight_400 cta-banner__title">
                    Далее
                </h4>
            </div>
            <div class="cta-banner__main" data-astro-cid-g4w47g5s>
                <div data-astro-cid-g4w47g5s="true" data-astro-cid-m3hx3gxg="true" class="button button_color_primary button_variant_icon cta-banner__button desktop"><span class="button__icon button__icon_left" data-astro-cid-m3hx3gxg>
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" data-astro-cid-m3hx3gxg="true">
<path d="M17.9125 17.9122V6.08729M17.9125 6.08729H6.08753M17.9125 6.08729L6.08753 17.9122" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
</svg>
      </span></div>
                <h2 data-astro-cid-g4w47g5s="true" data-astro-cid-5a7m7riw="true" class="title title_variant_48 title_color_white title_weight_400 cta-banner__title devices:text-center">
                    Безопасность веб-приложений: от потребности до запуска в проде PT Cloud Application Firewall
                </h2>
            </div>
        </div>
    </a>

</main>