<!DOCTYPE html>
<html lang="ru">
  <head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
    <link href="#" rel="icon" type="image/svg+xml">
    <meta name="generator" content="Astro v5.7.3">

    
      <meta name="description" content="Описание страницы">
    

    
      <meta property="og:title" content="Название страницы">
      <meta property="og:description" content="Описание страницы">
      <meta property="og:image" content="/opengraph.png">
      <meta property="og:url" content="https://example.com">
      <meta property="og:type" content="website">
    

    <link rel="icon" type="image/png" href="/favicon.ico" sizes="128x128">

      <title><?php $APPLICATION->ShowTitle();?></title>
  <link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/assets/css/style.css">
<style>.ac{--color-white:#fff;--color-light-grey:#eee;--color-grey:#8a8a8a;--color-black:#111;margin-bottom:8px;border:1px solid var(--color-light-grey);background-color:var(--color-white);box-sizing:border-box}.ac .ac-header{margin:0;padding:0}.ac .ac-trigger{font:700 16px Arial,sans-serif;color:var(--color-black);text-align:left;width:100%;padding:8px 32px 8px 8px;display:block;cursor:pointer;background-color:transparent;transition:color .25s ease;position:relative;text-decoration:none;margin:0;border:0}.ac .ac-trigger:after{content:"+";text-align:center;width:15px;transform:translateY(-50%);position:absolute;right:10px;top:50%}.ac .ac-trigger:focus{color:var(--color-grey)}.ac .ac-panel{overflow:hidden;transition-property:height,visibility;transition-timing-function:ease}.ac .ac-panel .ac-text{font:15px/24px Arial,sans-serif;color:var(--color-black);padding:8px;margin:0}.ac.js-enabled .ac-panel{visibility:hidden}.ac.is-active .ac-panel{visibility:visible}.ac.is-active>.ac-header .ac-trigger:after{content:"–"}.tippy-box[data-animation=fade][data-state=hidden]{opacity:0}[data-tippy-root]{max-width:calc(100vw - 10px)}.tippy-box{position:relative;background-color:#333;color:#fff;border-radius:4px;font-size:14px;line-height:1.4;white-space:normal;outline:0;transition-property:transform,visibility,opacity}.tippy-box[data-placement^=top]>.tippy-arrow{bottom:0}.tippy-box[data-placement^=top]>.tippy-arrow:before{bottom:-7px;left:0;border-width:8px 8px 0;border-top-color:initial;transform-origin:center top}.tippy-box[data-placement^=bottom]>.tippy-arrow{top:0}.tippy-box[data-placement^=bottom]>.tippy-arrow:before{top:-7px;left:0;border-width:0 8px 8px;border-bottom-color:initial;transform-origin:center bottom}.tippy-box[data-placement^=left]>.tippy-arrow{right:0}.tippy-box[data-placement^=left]>.tippy-arrow:before{border-width:8px 0 8px 8px;border-left-color:initial;right:-7px;transform-origin:center left}.tippy-box[data-placement^=right]>.tippy-arrow{left:0}.tippy-box[data-placement^=right]>.tippy-arrow:before{left:-7px;border-width:8px 8px 8px 0;border-right-color:initial;transform-origin:center right}.tippy-box[data-inertia][data-state=visible]{transition-timing-function:cubic-bezier(.54,1.5,.38,1.11)}.tippy-arrow{width:16px;height:16px;color:#333}.tippy-arrow:before{content:"";position:absolute;border-color:transparent;border-style:solid}.tippy-content{position:relative;padding:5px 9px;z-index:1}
</style>
      <?php $APPLICATION->ShowHead(); ?>
  </head>
  <body>
  <?php $APPLICATION->ShowPanel();?>

    <div class="wrapper">
      <header class="header relative" data-header data-astro-cid-hcwr7iq5>
  <div class="header__inner relative" data-astro-cid-hcwr7iq5>
    <div class="header__left" data-astro-cid-hcwr7iq5>
      <a href="#" class="header__logo" data-astro-cid-hcwr7iq5>
        <svg width="111" height="32" viewBox="0 0 111 32" fill="none" class="initial" data-astro-cid-hcwr7iq5="true">
<path d="M27.9512 16.8963C27.6761 22.2673 16.3613 27.7662 16.3613 27.7662H23.5664C23.9623 27.7662 24.3162 28.0167 24.4476 28.3898L25.7141 31.9985H30.2583C31.5861 31.9985 32.5251 30.6987 32.1064 29.4391L27.9494 16.8963H27.9512Z" fill="#3267D3" />
<path d="M21.4415 16.2321C21.4415 14.2018 18.5878 14.0949 18.3285 16.1901C18.269 16.6683 17.8818 17.0379 17.4001 17.0379H12.5038C11.917 17.0379 11.4685 16.5019 11.5876 15.9256C12.0641 13.6114 13.9438 9.16538 19.7755 9.16538C22.0213 9.16538 24.3249 9.78026 25.9996 11.0398L22.7851 1.34363C22.5223 0.546559 21.776 0.00700717 20.9352 0.00700717L11.1742 0C10.3544 0.0210215 9.63088 0.551815 9.37336 1.33487L0.099391 29.4424C-0.315783 30.7019 0.621424 32 1.94928 32H6.79298C6.79298 23.6107 21.4432 21.6732 21.4432 16.2304L21.4415 16.2321Z" fill="#3267D3" />
<path d="M53.0082 27.213C52.9312 27.0746 52.7945 26.9782 52.6386 26.9519C52.4827 26.9257 52.3215 26.9695 52.2024 27.0746C51.3826 27.7946 50.4874 28.3183 49.5397 28.6302C48.578 28.9472 47.5444 29.1084 46.4653 29.1084C44.7275 29.1084 43.2 28.7703 41.9282 28.1011C40.6721 27.4424 39.6876 26.472 39.0009 25.2212C38.3072 23.9564 37.9551 22.3903 37.9551 20.5684C37.9551 19.2441 38.1548 18.0423 38.5507 16.9948C38.9414 15.9577 39.5037 15.0625 40.2237 14.3338C40.9437 13.605 41.8213 13.0392 42.8321 12.6486C43.8534 12.2544 45.0078 12.0547 46.2621 12.0547C47.3044 12.0547 48.2696 12.1931 49.1298 12.4681C49.9759 12.7379 50.7362 13.1566 51.3913 13.7136C51.5035 13.8082 51.6489 13.852 51.7943 13.8345C51.9397 13.817 52.071 13.7399 52.1569 13.6208L53.1519 12.2456C53.3131 12.0214 53.2745 11.7113 53.0625 11.5344C52.2427 10.8495 51.2302 10.3152 50.053 9.94379C48.8898 9.57942 47.5654 9.39373 46.1149 9.39373C44.5313 9.39373 43.0546 9.67226 41.725 10.2241C40.3918 10.7759 39.2181 11.566 38.2371 12.5732C37.2561 13.5788 36.4889 14.7735 35.9528 16.1241C35.4185 17.4712 35.1487 18.9673 35.1487 20.5667C35.1487 22.7792 35.6024 24.7517 36.4976 26.4299C37.398 28.1204 38.6908 29.4518 40.3358 30.3907C41.9737 31.3244 43.9182 31.7974 46.1167 31.7974C47.5567 31.7974 48.9196 31.603 50.1686 31.2176C51.4299 30.8304 52.6158 30.1998 53.6967 29.3431C53.8982 29.182 53.9542 28.8999 53.8281 28.674L53.01 27.2112L53.0082 27.213Z" fill="#161063" />
<path d="M58.1354 9.24833H56.4975C56.2072 9.24833 55.972 9.48362 55.972 9.77387V30.8322C55.972 31.1224 56.2072 31.3577 56.4975 31.3577H58.1354C58.4257 31.3577 58.661 31.1224 58.661 30.8322V9.77387C58.661 9.48362 58.4257 9.24833 58.1354 9.24833Z" fill="#161063" />
<path d="M73.0666 16.9235C71.8718 16.1983 70.5037 15.8304 68.9989 15.8304C67.869 15.8304 66.8092 16.0424 65.8492 16.4593C64.8927 16.8745 64.0466 17.4578 63.3354 18.1901C62.6241 18.9223 62.0636 19.7807 61.6677 20.7407C61.2735 21.7024 61.0721 22.736 61.0721 23.8133C61.0721 25.2551 61.4207 26.5969 62.1056 27.8022C62.7906 29.0074 63.7418 29.9831 64.9295 30.7049C66.1242 31.4301 67.4924 31.798 68.9972 31.798C70.1271 31.798 71.1887 31.586 72.1521 31.1691C73.1139 30.7539 73.96 30.1706 74.6694 29.4348C75.3754 28.7026 75.9325 27.8442 76.3267 26.886C76.7208 25.9242 76.9223 24.8907 76.9223 23.8116C76.9223 22.3699 76.5737 21.028 75.8887 19.8227C75.2038 18.6193 74.2543 17.6418 73.0648 16.92L73.0666 16.9235ZM74.1177 23.8151C74.1177 24.9187 73.8952 25.8822 73.459 26.6775C73.0263 27.4641 72.4219 28.0824 71.6634 28.5134C70.8996 28.9478 70.0027 29.1686 68.9989 29.1686C67.9951 29.1686 67.0982 28.9478 66.3344 28.5134C65.5759 28.0824 64.9715 27.4641 64.5388 26.6775C64.1009 25.8822 63.8802 24.9205 63.8802 23.8151C63.8802 22.7097 64.1026 21.7445 64.5388 20.9456C64.9715 20.1556 65.5742 19.5372 66.3327 19.1115C67.0982 18.6806 67.9951 18.4616 68.9989 18.4616C70.0027 18.4616 70.9014 18.6806 71.6651 19.1115C72.4219 19.539 73.0263 20.1556 73.459 20.9456C73.8969 21.7462 74.1194 22.7114 74.1194 23.8151H74.1177Z" fill="#161063" />
<path d="M91.528 16.2667H89.89C89.5992 16.2667 89.3645 16.5014 89.3645 16.7922V25.1272C89.3645 25.9348 89.1841 26.6495 88.8302 27.2522C88.4711 27.8635 88.0034 28.3243 87.4025 28.6623C86.8069 28.9969 86.1395 29.1651 85.4142 29.1651C84.2808 29.1651 83.4154 28.8568 82.7708 28.2191C82.1279 27.585 81.816 26.7739 81.816 25.7421V16.7922C81.816 16.5014 81.5813 16.2667 81.2905 16.2667H79.6526C79.3618 16.2667 79.127 16.5014 79.127 16.7922V26.2396C79.127 27.112 79.3495 27.9809 79.7857 28.8218C80.2272 29.6714 80.8998 30.3879 81.7845 30.9467C82.6744 31.5108 83.7973 31.7963 85.1217 31.7963C86.0659 31.7963 86.9943 31.6054 87.879 31.227C88.4045 31.0027 88.9003 30.6909 89.3628 30.2933V30.8311C89.3628 31.1219 89.5975 31.3566 89.8883 31.3566H91.5262C91.817 31.3566 92.0517 31.1219 92.0517 30.8311V16.7922C92.0517 16.5014 91.817 16.2667 91.5262 16.2667H91.528Z" fill="#161063" />
<path d="M109.658 9.24833H108.02C107.729 9.24833 107.494 9.48307 107.494 9.77387V17.8601C107.079 17.4695 106.617 17.1209 106.112 16.8178C105.019 16.1609 103.663 15.8281 102.083 15.8281C100.951 15.8281 99.9038 16.04 98.9718 16.4587C98.0434 16.8756 97.2288 17.4625 96.5544 18.2C95.8834 18.934 95.3579 19.7924 94.9953 20.7524C94.6326 21.7088 94.4487 22.7389 94.4487 23.8127C94.4487 25.2475 94.7693 26.5841 95.4017 27.7858C96.0358 28.9945 96.938 29.9738 98.0784 30.6973C99.2258 31.426 100.573 31.7957 102.081 31.7957C103.773 31.7957 105.157 31.4611 106.196 30.7989C106.664 30.5011 107.098 30.1665 107.494 29.8021V30.8304C107.494 31.1212 107.729 31.356 108.02 31.356H109.658C109.949 31.356 110.183 31.1212 110.183 30.8304V9.77387C110.183 9.48307 109.949 9.24833 109.658 9.24833ZM105.04 28.511C104.276 28.9455 103.379 29.1662 102.376 29.1662C101.372 29.1662 100.475 28.9455 99.7111 28.511C98.9526 28.0801 98.3482 27.4617 97.9155 26.6752C97.4776 25.8799 97.2568 24.9181 97.2568 23.8127C97.2568 22.7074 97.4793 21.7421 97.9155 20.9433C98.3482 20.1532 98.9508 19.5349 99.7093 19.1092C100.475 18.6782 101.372 18.4593 102.376 18.4593C103.379 18.4593 104.278 18.6782 105.042 19.1092C105.799 19.5366 106.403 20.1532 106.836 20.9433C107.274 21.7439 107.496 22.7091 107.496 23.8127C107.496 24.9164 107.274 25.8799 106.837 26.6752C106.405 27.4617 105.8 28.0801 105.042 28.511H105.04Z" fill="#161063" />
</svg>
      </a>
      <div class="header__block" data-astro-cid-hcwr7iq5>
        <div class="header__search devices" data-astro-cid-hcwr7iq5>
          <button data-nested-button="search" data-nested-toggle="search" data-menu-mobile-button="search" data-astro-cid-hcwr7iq5="true" data-astro-cid-m3hx3gxg="true" class="button button_color_light-blue button_variant_icon"><span class="button__icon button__icon_left" data-astro-cid-m3hx3gxg>
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" data-astro-cid-m3hx3gxg="true">
<path fill-rule="evenodd" clip-rule="evenodd" d="M1 7.14554C0.999557 4.21437 3.06975 1.69108 5.94452 1.11883C8.81929 0.546586 11.698 2.08477 12.82 4.79267C13.9421 7.50057 12.995 10.624 10.558 12.2528C8.12104 13.8815 4.87287 13.562 2.8 11.4895C1.64763 10.3376 1.00014 8.77495 1 7.14554Z" stroke="#3267D3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
<path d="M11.489 11.4907L15 15.0017" stroke="#3267D3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
</svg>
      </span></button>
        </div>
        <button class="header__menu desktop" data-menu-button="menu" data-astro-cid-hcwr7iq5>
          <span data-astro-cid-hcwr7iq5></span>
          <span data-astro-cid-hcwr7iq5></span>
        </button>
        <button class="header__menu devices" data-menu-mobile="button" data-astro-cid-hcwr7iq5>
          <span data-astro-cid-hcwr7iq5></span>
          <span data-astro-cid-hcwr7iq5></span>
        </button>
      </div>
    </div>

      <?php $APPLICATION->IncludeComponent(
          "bitrix:menu",
          "header",
          Array(
              "ALLOW_MULTI_SELECT" => "N",
              "CHILD_MENU_TYPE" => "left",
              "DELAY" => "N",
              "MAX_LEVEL" => "2",
              "MENU_CACHE_GET_VARS" => array(""),
              "MENU_CACHE_TIME" => "3600",
              "MENU_CACHE_TYPE" => "N",
              "MENU_CACHE_USE_GROUPS" => "Y",
              "ROOT_MENU_TYPE" => "top_second",
              "USE_EXT" => "Y"
          )
      );?>
    <div class="header__right desktop" data-astro-cid-hcwr7iq5>
      <div class="header__search" data-astro-cid-hcwr7iq5>
        <button data-menu-button="search" data-astro-cid-hcwr7iq5="true" data-astro-cid-m3hx3gxg="true" class="button button_color_light-blue button_variant_icon"><span class="button__icon button__icon_left" data-astro-cid-m3hx3gxg>
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" data-astro-cid-m3hx3gxg="true">
<path fill-rule="evenodd" clip-rule="evenodd" d="M1 7.14554C0.999557 4.21437 3.06975 1.69108 5.94452 1.11883C8.81929 0.546586 11.698 2.08477 12.82 4.79267C13.9421 7.50057 12.995 10.624 10.558 12.2528C8.12104 13.8815 4.87287 13.562 2.8 11.4895C1.64763 10.3376 1.00014 8.77495 1 7.14554Z" stroke="#3267D3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
<path d="M11.489 11.4907L15 15.0017" stroke="#3267D3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
</svg>
      </span></button>
      </div>
      <div class="header__button" data-astro-cid-hcwr7iq5>
        <button data-astro-cid-hcwr7iq5="true" data-astro-cid-m3hx3gxg="true" class="button button_color_light button_variant_small"><span class="button__text" data-astro-cid-m3hx3gxg>
        
          Личный кабинет
      </span><span class="button__icon button__icon_right" data-astro-cid-m3hx3gxg>
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" data-astro-cid-m3hx3gxg="true">
<path d="M17.9125 17.9123V6.08731M17.9125 6.08731H6.08753M17.9125 6.08731L6.08753 17.9123" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
</svg>
      </span></button>
      </div>
    </div>

    
  </div>

  <div class="menu-mobile devices" data-menu-mobile="general" data-astro-cid-6crvny3a>
  <div data-menu-mobile-panel="menu" data-astro-cid-6crvny3a="true" class="menu-mobile-general" data-astro-cid-dgvofhgn>
  <nav data-astro-cid-dgvofhgn>
    <ul data-astro-cid-dgvofhgn>
      <li data-animate-delay="0.4s" data-animate data-astro-cid-dgvofhgn>
            <button data-menu-mobile-button="1" data-astro-cid-dgvofhgn>
              Услуги

              <svg width="20" height="20" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg" data-astro-cid-dgvofhgn>
                <path d="M10 15.5L15 10.5M15 10.5L10 5.5M15 10.5H5" stroke="#3267D3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" data-astro-cid-dgvofhgn></path>
              </svg>
            </button>
          </li><li data-animate-delay="0.44s" data-animate data-astro-cid-dgvofhgn>
            <button data-menu-mobile-button="2" data-astro-cid-dgvofhgn>
              Решения

              <svg width="20" height="20" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg" data-astro-cid-dgvofhgn>
                <path d="M10 15.5L15 10.5M15 10.5L10 5.5M15 10.5H5" stroke="#3267D3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" data-astro-cid-dgvofhgn></path>
              </svg>
            </button>
          </li><li data-animate-delay="0.48000000000000004s" data-animate data-astro-cid-dgvofhgn>
            <button data-menu-mobile-button="3" data-astro-cid-dgvofhgn>
              Компания

              <svg width="20" height="20" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg" data-astro-cid-dgvofhgn>
                <path d="M10 15.5L15 10.5M15 10.5L10 5.5M15 10.5H5" stroke="#3267D3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" data-astro-cid-dgvofhgn></path>
              </svg>
            </button>
          </li><li data-animate-delay="0.52s" data-animate data-astro-cid-dgvofhgn>
            <button data-menu-mobile-button="4" data-astro-cid-dgvofhgn>
              Поддержка

              <svg width="20" height="20" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg" data-astro-cid-dgvofhgn>
                <path d="M10 15.5L15 10.5M15 10.5L10 5.5M15 10.5H5" stroke="#3267D3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" data-astro-cid-dgvofhgn></path>
              </svg>
            </button>
          </li>
    </ul>
  </nav>

  <a data-animate-delay="0.6000000000000001s" data-animate="true" href="#" data-astro-cid-dgvofhgn="true" data-astro-cid-m3hx3gxg="true" class="button button_color_light button_variant_small button-link mb-[1.5rem] mobile:mb-0"><span class="button__text" data-astro-cid-m3hx3gxg>
        
    Личный кабинет
  
      </span><span class="button__icon button__icon_right" data-astro-cid-m3hx3gxg>
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" data-astro-cid-m3hx3gxg="true">
<path d="M17.9125 17.9123V6.08731M17.9125 6.08731H6.08753M17.9125 6.08731L6.08753 17.9123" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
</svg>
      </span></a>

  <h5 data-animate="true" data-animate-delay="0.68s" data-astro-cid-dgvofhgn="true" data-astro-cid-5a7m7riw="true" class="title title_variant_20 title_color_primary title_weight_400 mt-auto !text-blue mobile:mt-[1.5rem]">
  
    info@a2-cloud.ru
  
</h5>
  <div class="mt-3" data-animate data-animate-delay="0.72s" data-astro-cid-dgvofhgn>
    <div class="soc" data-astro-cid-7afh2dz6>
  <a href="https://link" target="_blank" data-astro-cid-7afh2dz6>
    <svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39" fill="none" data-astro-cid-7afh2dz6>
      <path d="M27 12.5646L24.1824 27.274C24.1824 27.274 23.7882 28.2939 22.7052 27.8047L16.2043 22.643L16.1741 22.6278C17.0523 21.8113 23.8616 15.4712 24.1592 15.1839C24.6199 14.7388 24.3339 14.4738 23.799 14.81L13.7407 21.4247L9.86029 20.0726C9.86029 20.0726 9.24962 19.8477 9.19087 19.3585C9.13135 18.8686 9.88038 18.6037 9.88038 18.6037L25.6998 12.1771C25.6998 12.1771 27 11.5856 27 12.5646Z" fill="#3267D3" data-astro-cid-7afh2dz6></path>
    </svg>
  </a>
  <a href="https://link" target="_blank" class="flex size-10 items-center justify-center rounded-full" data-astro-cid-7afh2dz6>
    <svg xmlns="http://www.w3.org/2000/svg" width="39" height="39" viewBox="0 0 39 39" fill="none" data-astro-cid-7afh2dz6>
      <path d="M20.4211 26.0625C13.3743 26.0625 9.35497 21.1357 9.1875 12.9375H12.7173C12.8333 18.9548 15.4355 21.5036 17.4968 22.0291V12.9375H20.8205V18.1271C22.8559 17.9037 24.9944 15.5389 25.7158 12.9375H29.0395C28.7677 14.2866 28.2258 15.564 27.4478 16.6898C26.6697 17.8156 25.6722 18.7656 24.5178 19.4803C25.8064 20.1333 26.9447 21.0577 27.8574 22.1923C28.77 23.3269 29.4364 24.646 29.8125 26.0625H26.1539C25.8162 24.8321 25.1301 23.7308 24.1813 22.8964C23.2325 22.062 22.0634 21.5318 20.8205 21.3722V26.0625H20.4211Z" fill="#3267D3" data-astro-cid-7afh2dz6></path>
    </svg>
  </a>
  <a href="https://link" target="_blank" class="flex size-10 items-center justify-center rounded-full" data-astro-cid-7afh2dz6>
    <svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg" data-astro-cid-7afh2dz6>
      <mask id="fdsfdsbvcw" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="10" y="10" width="19" height="19" data-astro-cid-7afh2dz6>
        <path d="M28.9263 10.125H10.1763V28.875H28.9263V10.125Z" fill="white" data-astro-cid-7afh2dz6></path>
      </mask>
      <g data-astro-cid-7afh2dz6>
        <path fill-rule="evenodd" clip-rule="evenodd" d="M19.5864 28.8717H19.5117C15.79 28.8717 13.6135 28.4969 12.0973 27.0108C10.5366 25.4189 10.1763 23.2579 10.1763 19.5508V19.4459C10.1763 15.7387 10.5366 13.5622 12.0973 11.9858C13.628 10.4998 15.79 10.125 19.5128 10.125H19.5875C23.2947 10.125 25.4712 10.4998 27.0008 11.9858C28.5614 13.5778 28.9218 15.7387 28.9218 19.4459V19.5508C28.9218 23.259 28.5614 25.4345 27.0008 27.0108C25.4701 28.4969 23.3092 28.8717 19.5864 28.8717ZM26.5612 19.2227C26.6327 19.226 26.6907 19.2852 26.6907 19.3566H26.6896V19.6555C26.6896 19.728 26.6315 19.7871 26.5601 19.7893C23.9979 19.8864 22.4397 20.2121 21.3476 21.3041C20.2567 22.3951 19.931 23.9512 19.8328 26.5088C19.8295 26.5802 19.7703 26.6383 19.6989 26.6383H19.3989C19.3264 26.6383 19.2673 26.5802 19.265 26.5088C19.1669 23.9512 18.8412 22.3951 17.7502 21.3041C16.6593 20.2132 15.0999 19.8864 12.5377 19.7893C12.4663 19.786 12.4083 19.7269 12.4083 19.6555V19.3566C12.4083 19.284 12.4663 19.2249 12.5377 19.2227C15.0999 19.1256 16.6582 18.7999 17.7502 17.7079C18.8434 16.6148 19.1691 15.0531 19.2662 12.4864C19.2695 12.4151 19.3286 12.3571 19.4 12.3571H19.6989C19.7715 12.3571 19.8306 12.4151 19.8328 12.4864C19.9298 15.0542 20.2556 16.6148 21.3488 17.7079C22.4397 18.7988 23.999 19.1256 26.5612 19.2227Z" fill="#3267D3" data-astro-cid-7afh2dz6></path>
      </g>
    </svg>
  </a>
  <a href="https://link" target="_blank" class="flex size-10 items-center justify-center rounded-full" data-astro-cid-7afh2dz6>
    <svg width="39" height="39" viewBox="0 0 39 39" fill="none" xmlns="http://www.w3.org/2000/svg" data-astro-cid-7afh2dz6>
      <g clip-path="url(#clip0_972_63482)" data-astro-cid-7afh2dz6>
        <path d="M20.8138 20.2385H13.0448V17.02H20.8138C21.2676 17.02 21.5832 17.1028 21.7415 17.2474C21.8999 17.392 21.998 17.6602 21.998 18.052V19.2077C21.998 19.6205 21.8999 19.8887 21.7415 20.0334C21.5832 20.178 21.2676 20.2398 20.8138 20.2398V20.2385ZM21.3468 13.9856H9.75V27.7497H13.0448V23.2717H19.1168L21.998 27.7497H25.6875L22.5109 23.2507C23.682 23.069 24.2079 22.6932 24.6416 22.074C25.0753 21.4547 25.2928 20.4647 25.2928 19.1434V18.1114C25.2928 17.3278 25.2136 16.7085 25.0753 16.2339C24.9371 15.7593 24.7007 15.3464 24.3651 14.9757C24.0106 14.6246 23.6158 14.3774 23.1419 14.2118C22.6681 14.0672 22.076 13.9844 21.3468 13.9844V13.9856Z" fill="#3267D3" data-astro-cid-7afh2dz6></path>
        <path d="M28.2185 13.9848C29.6165 13.9848 30.7498 12.813 30.7498 11.3675C30.7498 9.92198 29.6165 8.75015 28.2185 8.75015C26.8205 8.75015 25.6873 9.92198 25.6873 11.3675C25.6873 12.813 26.8205 13.9848 28.2185 13.9848Z" fill="#3267D3" data-astro-cid-7afh2dz6></path>
      </g>
      <defs data-astro-cid-7afh2dz6>
        <clipPath id="fdsfdsbvc" data-astro-cid-7afh2dz6>
          <rect width="21" height="19" fill="white" transform="translate(9.75 8.75)" data-astro-cid-7afh2dz6></rect>
        </clipPath>
      </defs>
    </svg>
  </a>
</div>
  </div>

  <div class="mt-6" data-animate data-animate-delay="0.76s" data-astro-cid-dgvofhgn>
    <button data-modal-trigger="consultation-side-modal" data-astro-cid-dgvofhgn="true" data-astro-cid-m3hx3gxg="true" class="button button_color_primary button_variant_contained"><span class="button__text" data-astro-cid-m3hx3gxg>

      Получить консультацию

      </span><span class="button__icon button__icon_right" data-astro-cid-m3hx3gxg>
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" data-astro-cid-m3hx3gxg="true">
<path d="M17.9125 17.9123V6.08731M17.9125 6.08731H6.08753M17.9125 6.08731L6.08753 17.9123" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
</svg>
      </span></button>
  </div>

  <div class="mb-[0.6rem] mt-6 flex flex-col gap-3" data-animate data-animate-direction="right-to-left" data-animate-delay="0.64s" data-astro-cid-dgvofhgn>
    <a href="#" class="link" data-astro-cid-dgvofhgn>Политика конфиденциальности</a>
    <p class="link opacity-60" data-astro-cid-dgvofhgn>© A2Cloud, 2025. Все права защищены</p>
    <div class="copyright" data-astro-cid-dgvofhgn>
      <div class="copyright" data-astro-cid-dgvofhgn="true" data-astro-cid-7x2sp47s>
  <div class="copyright__text  !text-blue" data-astro-cid-7x2sp47s>Сделано в</div>
  <a href="#" class="copyright__link" data-astro-cid-7x2sp47s>
    <svg xmlns="http://www.w3.org/2000/svg" width="83" height="10" viewBox="0 0 83 10" fill="none" data-astro-cid-7x2sp47s>
      <path d="M11.2641 1.5358C11.2641 3.91373 10.7734 5.60633 9.80249 6.56944C9.06263 7.30411 8.2605 7.3794 7.95158 7.37421L7.43498 7.39497L6.0331 5.71017C6.50557 5.37009 6.78852 4.80936 7.0611 4.2642C7.15196 4.08507 7.24025 3.90855 7.34149 3.72942L9.00037 0.502599H6.39917L5.41528 2.43401L5.22838 2.80525C4.99733 3.26734 4.64684 3.96825 4.4158 3.96825H2.4688V0.502599H0V9.49513H2.4688V6.02947H3.33069L6.25638 9.49513H9.11458H9.23918C9.40792 9.49513 13.3512 9.41466 13.7095 2.56122H16.4664V9.49513H18.9352V0.5H11.2667V1.5358H11.2641Z" fill="#3267D3" data-astro-cid-7x2sp47s></path>
      <path d="M74.8915 1.53549C74.8915 7.26227 72.6901 7.4388 72.6668 7.4388L72.6668 7.45438L72.6667 9.50001H72.864C73.0327 9.50001 76.9761 9.41954 77.3343 2.56611H80.0939V9.50001H82.5627V0.504883H74.8941V1.53549H74.8915Z" fill="#3267D3" data-astro-cid-7x2sp47s></path>
      <path d="M47.5512 0.504883H39.6022V1.53549C39.6022 7.24929 37.1775 7.4388 37.1516 7.4388L36.8452 7.45437L37.297 9.50001H48.5169V7.4388H47.5537V0.504883H47.5512ZM45.0824 7.4388H40.6769C41.4323 6.24983 41.8659 4.61435 41.9749 2.56611H45.0824V7.4388Z" fill="#3267D3" data-astro-cid-7x2sp47s></path>
      <path d="M55.5255 5.53333L53.6382 0.504883H49.8818V9.49742H52.3506V3.67979L54.5312 9.49742H56.5172L58.7004 3.67979V9.49742H61.1692V0.504883H57.4128L55.5255 5.53333Z" fill="#3267D3" data-astro-cid-7x2sp47s></path>
      <path d="M65.2325 5.57228V0.504883H62.7637V9.49742H64.2227L69.29 4.43003V9.49742H71.7588V0.504883H70.3025L65.2325 5.57228Z" fill="#3267D3" data-astro-cid-7x2sp47s></path>
      <path d="M38.3148 0.504883H35.6824L33.4499 6.60029L31.181 0.504883H28.5227L30.9266 6.80018H33.3772L32.5231 9.13399L32.3414 9.49742H34.9841L35.0464 9.32609C35.7603 7.38428 37.9306 1.47319 38.1746 0.857943L38.3148 0.504883Z" fill="#3267D3" data-astro-cid-7x2sp47s></path>
      <path d="M26.6038 0.751506L26.5078 0.504883H22.6917L19.5323 9.13399L19.3506 9.49742H21.9933L22.5099 8.09299H26.6947L27.2113 9.49742H29.4335H29.854L29.6723 9.13399L26.6038 0.751506ZM24.5997 2.41294C24.8723 3.14761 25.2149 4.07438 25.581 5.07124H25.5784L25.9315 6.03176H23.268L23.621 5.07124H23.6184C23.987 4.07438 24.3297 3.14501 24.5997 2.41294Z" fill="#3267D3" data-astro-cid-7x2sp47s></path>
    </svg>
  </a>
</div>
    </div>
  </div>
</div>
  <div data-menu-mobile-panel="1" data-astro-cid-6crvny3a="true" class="nested">
  
    <h3 class="nested__title" data-astro-cid-6crvny3a>Услуги</h3>
    <button data-menu-mobile-back="" class="nested__button" data-astro-cid-6crvny3a>
      <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg" data-astro-cid-6crvny3a>
        <path d="M10 5.5L5 10.5M5 10.5L10 15.5M5 10.5H15" stroke="#3267D3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" data-astro-cid-6crvny3a></path>
      </svg>
      <span data-astro-cid-6crvny3a> Назад </span>
    </button>

    <ul class="nested__list" data-astro-cid-6crvny3a>
      <li data-astro-cid-6crvny3a>
            <a href="#" data-astro-cid-6crvny3a>
              <span data-astro-cid-6crvny3a>Размещение СКЗИ в ЦОДе</span>
              
              <picture class="picture" data-astro-cid-6crvny3a="true" data-astro-cid-s5f3uvtz>
  

  
  <source type="image/webp" srcset="/images/uslugi-11_Z1Du51N.webp 216w" sizes="100vw" data-astro-cid-s5f3uvtz>
  
  <source type="image/png" srcset="/images/uslugi-11.png 216w" sizes="100vw" data-astro-cid-s5f3uvtz>

  
  <img src="/images/uslugi-11.png" srcset="/images/uslugi-11.png 216w" alt width="216" height="148" loading="lazy" decoding="async" class="picture__img" sizes="100vw" data-astro-cid-s5f3uvtz>
</picture>
            </a>
          </li><li data-astro-cid-6crvny3a>
            <a href="#" data-astro-cid-6crvny3a>
              <span data-astro-cid-6crvny3a>Размещение СКЗИ в ЦОДе</span>
              
              <picture class="picture" data-astro-cid-6crvny3a="true" data-astro-cid-s5f3uvtz>
  

  
  <source type="image/webp" srcset="/images/uslugi-11_Z1Du51N.webp 216w" sizes="100vw" data-astro-cid-s5f3uvtz>
  
  <source type="image/png" srcset="/images/uslugi-11.png 216w" sizes="100vw" data-astro-cid-s5f3uvtz>

  
  <img src="/images/uslugi-11.png" srcset="/images/uslugi-11.png 216w" alt width="216" height="148" loading="lazy" decoding="async" class="picture__img" sizes="100vw" data-astro-cid-s5f3uvtz>
</picture>
            </a>
          </li><li data-astro-cid-6crvny3a>
            <a href="#" data-astro-cid-6crvny3a>
              <span data-astro-cid-6crvny3a>Размещение СКЗИ в ЦОДе</span>
              
              <picture class="picture" data-astro-cid-6crvny3a="true" data-astro-cid-s5f3uvtz>
  

  
  <source type="image/webp" srcset="/images/uslugi-11_Z1Du51N.webp 216w" sizes="100vw" data-astro-cid-s5f3uvtz>
  
  <source type="image/png" srcset="/images/uslugi-11.png 216w" sizes="100vw" data-astro-cid-s5f3uvtz>

  
  <img src="/images/uslugi-11.png" srcset="/images/uslugi-11.png 216w" alt width="216" height="148" loading="lazy" decoding="async" class="picture__img" sizes="100vw" data-astro-cid-s5f3uvtz>
</picture>
            </a>
          </li><li data-astro-cid-6crvny3a>
            <a href="#" data-astro-cid-6crvny3a>
              <span data-astro-cid-6crvny3a>Размещение СКЗИ в ЦОДе</span>
              
              <picture class="picture" data-astro-cid-6crvny3a="true" data-astro-cid-s5f3uvtz>
  

  
  <source type="image/webp" srcset="/images/uslugi-11_Z1Du51N.webp 216w" sizes="100vw" data-astro-cid-s5f3uvtz>
  
  <source type="image/png" srcset="/images/uslugi-11.png 216w" sizes="100vw" data-astro-cid-s5f3uvtz>

  
  <img src="/images/uslugi-11.png" srcset="/images/uslugi-11.png 216w" alt width="216" height="148" loading="lazy" decoding="async" class="picture__img" sizes="100vw" data-astro-cid-s5f3uvtz>
</picture>
            </a>
          </li><li data-astro-cid-6crvny3a>
            <a href="#" data-astro-cid-6crvny3a>
              <span data-astro-cid-6crvny3a>Размещение СКЗИ в ЦОДе</span>
              
              <picture class="picture" data-astro-cid-6crvny3a="true" data-astro-cid-s5f3uvtz>
  

  
  <source type="image/webp" srcset="/images/uslugi-11_Z1Du51N.webp 216w" sizes="100vw" data-astro-cid-s5f3uvtz>
  
  <source type="image/png" srcset="/images/uslugi-11.png 216w" sizes="100vw" data-astro-cid-s5f3uvtz>

  
  <img src="/images/uslugi-11.png" srcset="/images/uslugi-11.png 216w" alt width="216" height="148" loading="lazy" decoding="async" class="picture__img" sizes="100vw" data-astro-cid-s5f3uvtz>
</picture>
            </a>
          </li><li data-astro-cid-6crvny3a>
            <a href="#" data-astro-cid-6crvny3a>
              <span data-astro-cid-6crvny3a>Размещение СКЗИ в ЦОДе</span>
              
              <picture class="picture" data-astro-cid-6crvny3a="true" data-astro-cid-s5f3uvtz>
  

  
  <source type="image/webp" srcset="/images/uslugi-11_Z1Du51N.webp 216w" sizes="100vw" data-astro-cid-s5f3uvtz>
  
  <source type="image/png" srcset="/images/uslugi-11.png 216w" sizes="100vw" data-astro-cid-s5f3uvtz>

  
  <img src="/images/uslugi-11.png" srcset="/images/uslugi-11.png 216w" alt width="216" height="148" loading="lazy" decoding="async" class="picture__img" sizes="100vw" data-astro-cid-s5f3uvtz>
</picture>
            </a>
          </li>
    </ul>
  
</div>
  <div data-menu-mobile-panel="2" data-astro-cid-6crvny3a="true" class="nested">
  
    <h3 class="nested__title" data-astro-cid-6crvny3a>Решения</h3>

    <button data-menu-mobile-back="" class="nested__button" data-astro-cid-6crvny3a>
      <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg" data-astro-cid-6crvny3a>
        <path d="M10 5.5L5 10.5M5 10.5L10 15.5M5 10.5H15" stroke="#3267D3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" data-astro-cid-6crvny3a></path>
      </svg>
      <span data-astro-cid-6crvny3a> Назад </span>
    </button>

    <ul class="nested__list" data-astro-cid-6crvny3a>
      <li data-astro-cid-6crvny3a>
            <a href="#" data-astro-cid-6crvny3a>
              <span data-astro-cid-6crvny3a>Размещение СКЗИ в ЦОДе</span>
              
              <picture class="picture" data-astro-cid-6crvny3a="true" data-astro-cid-s5f3uvtz>
  

  
  <source type="image/webp" srcset="/images/uslugi-11_22oq1m.webp 216w" sizes="100vw" data-astro-cid-s5f3uvtz>
  
  <source type="image/png" srcset="/images/uslugi-11.png 216w" sizes="100vw" data-astro-cid-s5f3uvtz>

  
  <img src="/images/uslugi-11.png" srcset="/images/uslugi-11.png 216w" alt width="216" height="148" loading="lazy" decoding="async" class="picture__img" sizes="100vw" data-astro-cid-s5f3uvtz>
</picture>
            </a>
          </li><li data-astro-cid-6crvny3a>
            <a href="#" data-astro-cid-6crvny3a>
              <span data-astro-cid-6crvny3a>Размещение СКЗИ в ЦОДе</span>
              
              <picture class="picture" data-astro-cid-6crvny3a="true" data-astro-cid-s5f3uvtz>
  

  
  <source type="image/webp" srcset="/images/uslugi-11_22oq1m.webp 216w" sizes="100vw" data-astro-cid-s5f3uvtz>
  
  <source type="image/png" srcset="/images/uslugi-11.png 216w" sizes="100vw" data-astro-cid-s5f3uvtz>

  
  <img src="/images/uslugi-11.png" srcset="/images/uslugi-11.png 216w" alt width="216" height="148" loading="lazy" decoding="async" class="picture__img" sizes="100vw" data-astro-cid-s5f3uvtz>
</picture>
            </a>
          </li><li data-astro-cid-6crvny3a>
            <a href="#" data-astro-cid-6crvny3a>
              <span data-astro-cid-6crvny3a>Размещение СКЗИ в ЦОДе</span>
              
              <picture class="picture" data-astro-cid-6crvny3a="true" data-astro-cid-s5f3uvtz>
  

  
  <source type="image/webp" srcset="/images/uslugi-11_22oq1m.webp 216w" sizes="100vw" data-astro-cid-s5f3uvtz>
  
  <source type="image/png" srcset="/images/uslugi-11.png 216w" sizes="100vw" data-astro-cid-s5f3uvtz>

  
  <img src="/images/uslugi-11.png" srcset="/images/uslugi-11.png 216w" alt width="216" height="148" loading="lazy" decoding="async" class="picture__img" sizes="100vw" data-astro-cid-s5f3uvtz>
</picture>
            </a>
          </li><li data-astro-cid-6crvny3a>
            <a href="#" data-astro-cid-6crvny3a>
              <span data-astro-cid-6crvny3a>Размещение СКЗИ в ЦОДе</span>
              
              <picture class="picture" data-astro-cid-6crvny3a="true" data-astro-cid-s5f3uvtz>
  

  
  <source type="image/webp" srcset="/images/uslugi-11_22oq1m.webp 216w" sizes="100vw" data-astro-cid-s5f3uvtz>
  
  <source type="image/png" srcset="/images/uslugi-11.png 216w" sizes="100vw" data-astro-cid-s5f3uvtz>

  
  <img src="/images/uslugi-11.png" srcset="/images/uslugi-11.png 216w" alt width="216" height="148" loading="lazy" decoding="async" class="picture__img" sizes="100vw" data-astro-cid-s5f3uvtz>
</picture>
            </a>
          </li><li data-astro-cid-6crvny3a>
            <a href="#" data-astro-cid-6crvny3a>
              <span data-astro-cid-6crvny3a>Размещение СКЗИ в ЦОДе</span>
              
              <picture class="picture" data-astro-cid-6crvny3a="true" data-astro-cid-s5f3uvtz>
  

  
  <source type="image/webp" srcset="/images/uslugi-11_22oq1m.webp 216w" sizes="100vw" data-astro-cid-s5f3uvtz>
  
  <source type="image/png" srcset="/images/uslugi-11.png 216w" sizes="100vw" data-astro-cid-s5f3uvtz>

  
  <img src="/images/uslugi-11.png" srcset="/images/uslugi-11.png 216w" alt width="216" height="148" loading="lazy" decoding="async" class="picture__img" sizes="100vw" data-astro-cid-s5f3uvtz>
</picture>
            </a>
          </li><li data-astro-cid-6crvny3a>
            <a href="#" data-astro-cid-6crvny3a>
              <span data-astro-cid-6crvny3a>Размещение СКЗИ в ЦОДе</span>
              
              <picture class="picture" data-astro-cid-6crvny3a="true" data-astro-cid-s5f3uvtz>
  

  
  <source type="image/webp" srcset="/images/uslugi-11_22oq1m.webp 216w" sizes="100vw" data-astro-cid-s5f3uvtz>
  
  <source type="image/png" srcset="/images/uslugi-11.png 216w" sizes="100vw" data-astro-cid-s5f3uvtz>

  
  <img src="/images/uslugi-11.png" srcset="/images/uslugi-11.png 216w" alt width="216" height="148" loading="lazy" decoding="async" class="picture__img" sizes="100vw" data-astro-cid-s5f3uvtz>
</picture>
            </a>
          </li><li data-astro-cid-6crvny3a>
            <a href="#" data-astro-cid-6crvny3a>
              <span data-astro-cid-6crvny3a>Размещение СКЗИ в ЦОДе</span>
              
              <picture class="picture" data-astro-cid-6crvny3a="true" data-astro-cid-s5f3uvtz>
  

  
  <source type="image/webp" srcset="/images/uslugi-11_22oq1m.webp 216w" sizes="100vw" data-astro-cid-s5f3uvtz>
  
  <source type="image/png" srcset="/images/uslugi-11.png 216w" sizes="100vw" data-astro-cid-s5f3uvtz>

  
  <img src="/images/uslugi-11.png" srcset="/images/uslugi-11.png 216w" alt width="216" height="148" loading="lazy" decoding="async" class="picture__img" sizes="100vw" data-astro-cid-s5f3uvtz>
</picture>
            </a>
          </li>
    </ul>
  
</div>
  <div data-menu-mobile-panel="3" data-astro-cid-6crvny3a="true" class="nested">
  
    <h3 class="nested__title" data-astro-cid-6crvny3a>Компания</h3>
    <button data-menu-mobile-back="" class="nested__button" data-astro-cid-6crvny3a>
      <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg" data-astro-cid-6crvny3a>
        <path d="M10 5.5L5 10.5M5 10.5L10 15.5M5 10.5H15" stroke="#3267D3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" data-astro-cid-6crvny3a></path>
      </svg>
      <span data-astro-cid-6crvny3a> Назад </span>
    </button>

    <ul class="nested__links" data-astro-cid-6crvny3a>
      <li data-astro-cid-6crvny3a>
            <a href="#" class="nested__title nested__title_link" data-astro-cid-6crvny3a>
              О нас
            </a>
          </li><li data-astro-cid-6crvny3a>
            <a href="#" class="nested__title nested__title_link" data-astro-cid-6crvny3a>
              Команда
            </a>
          </li><li data-astro-cid-6crvny3a>
            <a href="#" class="nested__title nested__title_link" data-astro-cid-6crvny3a>
              Кейсы
            </a>
          </li><li data-astro-cid-6crvny3a>
            <a href="#" class="nested__title nested__title_link" data-astro-cid-6crvny3a>
              Партнеры
            </a>
          </li><li data-astro-cid-6crvny3a>
            <a href="#" class="nested__title nested__title_link" data-astro-cid-6crvny3a>
              Карьера
            </a>
          </li><li data-astro-cid-6crvny3a>
            <a href="#" class="nested__title nested__title_link" data-astro-cid-6crvny3a>
              Новости
            </a>
          </li><li data-astro-cid-6crvny3a>
            <a href="#" class="nested__title nested__title_link" data-astro-cid-6crvny3a>
              Блог
            </a>
          </li><li data-astro-cid-6crvny3a>
            <a href="#" class="nested__title nested__title_link" data-astro-cid-6crvny3a>
              Мероприятия
            </a>
          </li><li data-astro-cid-6crvny3a>
            <a href="#" class="nested__title nested__title_link" data-astro-cid-6crvny3a>
              Документация
            </a>
          </li><li data-astro-cid-6crvny3a>
            <a href="#" class="nested__title nested__title_link" data-astro-cid-6crvny3a>
              Контакты
            </a>
          </li>
    </ul>
  
</div>
  <div data-menu-mobile-panel="4" data-astro-cid-6crvny3a="true" class="nested">
  
    <h3 class="nested__title" data-astro-cid-6crvny3a>Поддержка</h3>
    <button data-menu-mobile-back="" class="nested__button" data-astro-cid-6crvny3a>
      <svg width="20" height="21" viewBox="0 0 20 21" fill="none" xmlns="http://www.w3.org/2000/svg" data-astro-cid-6crvny3a>
        <path d="M10 5.5L5 10.5M5 10.5L10 15.5M5 10.5H15" stroke="#3267D3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" data-astro-cid-6crvny3a></path>
      </svg>
      <span data-astro-cid-6crvny3a> Назад </span>
    </button>

    <ul class="nested__links" data-astro-cid-6crvny3a>
      <li data-astro-cid-6crvny3a>
            <a href="#" class="nested__title nested__title_link" data-astro-cid-6crvny3a>
              FAQ
            </a>
          </li><li data-astro-cid-6crvny3a>
            <a href="#" class="nested__title nested__title_link" data-astro-cid-6crvny3a>
              Поддержка и забота
            </a>
          </li>
    </ul>
  
</div>
  <div data-menu-mobile-panel="search" class="nested nested_search" data-astro-cid-6crvny3a="true" class="nested nested nested_search">
  
    <form id="form-search-input" data-form-id="search-input" data-astro-cid-muvuyazj="true" class="form input-search__form" novalidate data-astro-cid-puwe3cxz>
  
  <div class="input-search input_dark input-search_header" data-astro-cid-muvuyazj>
    <label class="input input-search__field input_text-black desktop input--light" data-input-parent data-astro-cid-vzfstetq>
  <input class="input__field" data-input placeholder="Поиск по сайту" required data-validate="true" data-astro-cid-muvuyazj="true" data-astro-cid-vzfstetq>

  <span class="input__error" data-error-container data-astro-cid-vzfstetq></span>
</label>
    <label class="input input-search__field input_text-black devices input--light" data-input-parent data-astro-cid-vzfstetq>
  <input class="input__field" data-input placeholder="Поиск по сайту" required data-validate="true" data-astro-cid-muvuyazj="true" data-astro-cid-vzfstetq>

  <span class="input__error" data-error-container data-astro-cid-vzfstetq></span>
</label>
    <div class="input-search__controls" data-astro-cid-muvuyazj>
      
      <button type="submit" data-astro-cid-muvuyazj="true" data-astro-cid-m3hx3gxg="true" class="button button_color_primary button_variant_contained input-search__btn button_p-unset"><span class="button__icon button__icon_left" data-astro-cid-m3hx3gxg>
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" data-astro-cid-m3hx3gxg="true">
<path d="M17.9125 17.9123V6.08731M17.9125 6.08731H6.08753M17.9125 6.08731L6.08753 17.9123" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
</svg>
      </span></button>
    </div>
    <button data-search-reset type="button" data-astro-cid-muvuyazj="true" data-astro-cid-m3hx3gxg="true" class="button button_color_light button_variant_contained input-search__reset static"><span class="button__icon button__icon_left" data-astro-cid-m3hx3gxg>
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" data-astro-cid-m3hx3gxg="true">
<path d="M6 6L18 18" stroke="#80828B" stroke-width="1.5" stroke-linecap="round" />
<path d="M18 6L6 18" stroke="#80828B" stroke-width="1.5" stroke-linecap="round" />
</svg>
      </span></button>
  </div>

  <div class="form__error" data-form-error="" data-astro-cid-puwe3cxz>
  </div>
</form>
  
</div>

  
</div>

  <div class="pointer-events-none fixed bottom-0 left-2 right-2 top-14 overflow-hidden" data-astro-cid-hcwr7iq5>
    <div class="menu menu_nested bg-white menu_variant_small header__smalla desktop:block devices:hidden" data-menu-panel="support" data-variant="small" data-astro-cid-q4nsqqgu>
  <div class="menu__inner animate" data-astro-cid-q4nsqqgu>
    
      <ul data-astro-cid-hcwr7iq5>
        <li data-astro-cid-hcwr7iq5><a href="#" class="header-link" data-astro-cid-hcwr7iq5="true" data-astro-cid-5dm2es6u>
  FAQ
</a></li>
        <li data-astro-cid-hcwr7iq5><a href="#" class="header-link" data-astro-cid-hcwr7iq5="true" data-astro-cid-5dm2es6u>
  Поддержка и забота
</a></li>
      </ul>
    
  </div>
  
</div>

    <div class="menu menu_nested bg-white menu_variant_big block" data-menu-panel="search" data-variant="big" data-astro-cid-q4nsqqgu>
  <div class="menu__inner animate" data-astro-cid-q4nsqqgu>
    
      <form id="form-search-input" data-form-id="search-input" data-astro-cid-muvuyazj="true" class="form input-search__form" novalidate data-astro-cid-puwe3cxz>
  
  <div class="input-search input_dark input-search_header" data-astro-cid-muvuyazj>
    <label class="input input-search__field input_text-black desktop input--light" data-input-parent data-astro-cid-vzfstetq>
  <input class="input__field" data-input placeholder="Поиск по сайту" required data-validate="true" data-astro-cid-muvuyazj="true" data-astro-cid-vzfstetq>

  <span class="input__error" data-error-container data-astro-cid-vzfstetq></span>
</label>
    <label class="input input-search__field input_text-black devices input--light" data-input-parent data-astro-cid-vzfstetq>
  <input class="input__field" data-input placeholder="Поиск по сайту" required data-validate="true" data-astro-cid-muvuyazj="true" data-astro-cid-vzfstetq>

  <span class="input__error" data-error-container data-astro-cid-vzfstetq></span>
</label>
    <div class="input-search__controls" data-astro-cid-muvuyazj>
      
      <button type="submit" data-astro-cid-muvuyazj="true" data-astro-cid-m3hx3gxg="true" class="button button_color_primary button_variant_contained input-search__btn button_p-unset"><span class="button__icon button__icon_left" data-astro-cid-m3hx3gxg>
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" data-astro-cid-m3hx3gxg="true">
<path d="M17.9125 17.9123V6.08731M17.9125 6.08731H6.08753M17.9125 6.08731L6.08753 17.9123" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
</svg>
      </span></button>
    </div>
    <button data-search-reset type="button" data-astro-cid-muvuyazj="true" data-astro-cid-m3hx3gxg="true" class="button button_color_light button_variant_contained input-search__reset static"><span class="button__icon button__icon_left" data-astro-cid-m3hx3gxg>
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" data-astro-cid-m3hx3gxg="true">
<path d="M6 6L18 18" stroke="#80828B" stroke-width="1.5" stroke-linecap="round" />
<path d="M18 6L6 18" stroke="#80828B" stroke-width="1.5" stroke-linecap="round" />
</svg>
      </span></button>
  </div>

  <div class="form__error" data-form-error="" data-astro-cid-puwe3cxz>
  </div>
</form>
    
  </div>
  
</div>

    <div class="menu menu_nested bg-white menu_variant_big desktop:block devices:hidden" data-menu-panel="solutions" data-variant="big" data-astro-cid-q4nsqqgu>
  <div class="menu__inner animate" data-astro-cid-q4nsqqgu>
    
      <div class="header__row" data-astro-cid-hcwr7iq5>
        <a class="header-card" data-astro-cid-hcwr7iq5="true" href="#" data-astro-cid-dktb7hwi>
  <p data-astro-cid-dktb7hwi="true" data-astro-cid-py3iw5hh="true" class="text text_variant_17 text_color_blue header-card__title">
  Облако для микросервисной архитектуры
</p>

  <div class="header-card__img" data-astro-cid-dktb7hwi>
    <picture class="picture" data-astro-cid-dktb7hwi="true" data-astro-cid-s5f3uvtz>
  

  
  <source type="image/webp" srcset="/images/header-4_aqH2N.webp 556w" sizes="100vw" data-astro-cid-s5f3uvtz>
  
  <source type="image/png" srcset="/images/header-4.png 556w" sizes="100vw" data-astro-cid-s5f3uvtz>

  
  <img src="/images/header-4.png" srcset="/images/header-4.png 556w" alt width="556" height="370" loading="lazy" decoding="async" class="picture__img" sizes="100vw" data-astro-cid-s5f3uvtz>
</picture>
  </div>
</a>
        <a class="header-card" data-astro-cid-hcwr7iq5="true" href="#" data-astro-cid-dktb7hwi>
  <p data-astro-cid-dktb7hwi="true" data-astro-cid-py3iw5hh="true" class="text text_variant_17 text_color_blue header-card__title">
  Миграция в облако
</p>

  <div class="header-card__img" data-astro-cid-dktb7hwi>
    <picture class="picture" data-astro-cid-dktb7hwi="true" data-astro-cid-s5f3uvtz>
  

  
  <source type="image/webp" srcset="/images/header-2_1iJrWR.webp 500w" sizes="100vw" data-astro-cid-s5f3uvtz>
  
  <source type="image/png" srcset="/images/header-2.png 500w" sizes="100vw" data-astro-cid-s5f3uvtz>

  
  <img src="/images/header-2.png" srcset="/images/header-2.png 500w" alt width="500" height="340" loading="lazy" decoding="async" class="picture__img" sizes="100vw" data-astro-cid-s5f3uvtz>
</picture>
  </div>
</a>
        <a class="header-card" data-astro-cid-hcwr7iq5="true" href="#" data-astro-cid-dktb7hwi>
  <p data-astro-cid-dktb7hwi="true" data-astro-cid-py3iw5hh="true" class="text text_variant_17 text_color_blue header-card__title">
  Резервное копирование
</p>

  <div class="header-card__img" data-astro-cid-dktb7hwi>
    <picture class="picture" data-astro-cid-dktb7hwi="true" data-astro-cid-s5f3uvtz>
  

  
  <source type="image/webp" srcset="/images/header-10_ZfGcuM.webp 598w" sizes="100vw" data-astro-cid-s5f3uvtz>
  
  <source type="image/png" srcset="/images/header-10.png 598w" sizes="100vw" data-astro-cid-s5f3uvtz>

  
  <img src="/images/header-10.png" srcset="/images/header-10.png 598w" alt width="598" height="352" loading="lazy" decoding="async" class="picture__img" sizes="100vw" data-astro-cid-s5f3uvtz>
</picture>
  </div>
</a>
        <a class="header-card" data-astro-cid-hcwr7iq5="true" href="#" data-astro-cid-dktb7hwi>
  <p data-astro-cid-dktb7hwi="true" data-astro-cid-py3iw5hh="true" class="text text_variant_17 text_color_blue header-card__title">
  Публичное облако
</p>

  <div class="header-card__img" data-astro-cid-dktb7hwi>
    <picture class="picture" data-astro-cid-dktb7hwi="true" data-astro-cid-s5f3uvtz>
  

  
  <source type="image/webp" srcset="/images/header-6_Z1Jldp5.webp 548w" sizes="100vw" data-astro-cid-s5f3uvtz>
  
  <source type="image/png" srcset="/images/header-6.png 548w" sizes="100vw" data-astro-cid-s5f3uvtz>

  
  <img src="/images/header-6.png" srcset="/images/header-6.png 548w" alt width="548" height="340" loading="lazy" decoding="async" class="picture__img" sizes="100vw" data-astro-cid-s5f3uvtz>
</picture>
  </div>
</a>
        <a class="header-card" data-astro-cid-hcwr7iq5="true" href="#" data-astro-cid-dktb7hwi>
  <p data-astro-cid-dktb7hwi="true" data-astro-cid-py3iw5hh="true" class="text text_variant_17 text_color_blue header-card__title">
  Размещение платформенных сервисов
</p>

  <div class="header-card__img" data-astro-cid-dktb7hwi>
    <picture class="picture" data-astro-cid-dktb7hwi="true" data-astro-cid-s5f3uvtz>
  

  
  <source type="image/webp" srcset="/images/header-7_Z1yFub0.webp 501w" sizes="100vw" data-astro-cid-s5f3uvtz>
  
  <source type="image/png" srcset="/images/header-7.png 501w" sizes="100vw" data-astro-cid-s5f3uvtz>

  
  <img src="/images/header-7.png" srcset="/images/header-7.png 501w" alt width="501" height="340" loading="lazy" decoding="async" class="picture__img" sizes="100vw" data-astro-cid-s5f3uvtz>
</picture>
  </div>
</a>
      </div>
      <div class="header__row" data-astro-cid-hcwr7iq5>
        <a class="header-card" data-astro-cid-hcwr7iq5="true" href="#" data-astro-cid-dktb7hwi>
  <p data-astro-cid-dktb7hwi="true" data-astro-cid-py3iw5hh="true" class="text text_variant_17 text_color_blue header-card__title">
  Доступ в виртуальную лабораторию
</p>

  <div class="header-card__img" data-astro-cid-dktb7hwi>
    <picture class="picture" data-astro-cid-dktb7hwi="true" data-astro-cid-s5f3uvtz>
  

  
  <source type="image/webp" srcset="/images/header-8_rOFnx.webp 598w" sizes="100vw" data-astro-cid-s5f3uvtz>
  
  <source type="image/png" srcset="/images/header-8.png 598w" sizes="100vw" data-astro-cid-s5f3uvtz>

  
  <img src="/images/header-8.png" srcset="/images/header-8.png 598w" alt width="598" height="424" loading="lazy" decoding="async" class="picture__img" sizes="100vw" data-astro-cid-s5f3uvtz>
</picture>
  </div>
</a>
        <a class="header-card" data-astro-cid-hcwr7iq5="true" href="#" data-astro-cid-dktb7hwi>
  <p data-astro-cid-dktb7hwi="true" data-astro-cid-py3iw5hh="true" class="text text_variant_17 text_color_blue header-card__title">
  Портал самообслуживания
</p>

  <div class="header-card__img" data-astro-cid-dktb7hwi>
    <picture class="picture" data-astro-cid-dktb7hwi="true" data-astro-cid-s5f3uvtz>
  

  
  <source type="image/webp" srcset="/images/header-9_2ksOns.webp 500w" sizes="100vw" data-astro-cid-s5f3uvtz>
  
  <source type="image/png" srcset="/images/header-9.png 500w" sizes="100vw" data-astro-cid-s5f3uvtz>

  
  <img src="/images/header-9.png" srcset="/images/header-9.png 500w" alt width="500" height="340" loading="lazy" decoding="async" class="picture__img" sizes="100vw" data-astro-cid-s5f3uvtz>
</picture>
  </div>
</a>
      </div>
    
  </div>
  
</div>

    <div class="menu menu_nested bg-white menu_variant_big desktop:block devices:hidden" data-menu-panel="services" data-variant="big" data-astro-cid-q4nsqqgu>
        <div class="menu__inner animate" data-astro-cid-q4nsqqgu>
            <div class="header__row" data-astro-cid-hcwr7iq5>
                <a class="header-card" data-astro-cid-hcwr7iq5="true" href="#" data-astro-cid-dktb7hwi>
                    <p data-astro-cid-dktb7hwi="true" data-astro-cid-py3iw5hh="true" class="text text_variant_17 text_color_blue header-card__title">
                        Размещение СКЗИ в ЦОДе
                    </p>
                    <div class="header-card__img" data-astro-cid-dktb7hwi>
                        <picture class="picture" data-astro-cid-dktb7hwi="true" data-astro-cid-s5f3uvtz>
                            <source type="image/webp" srcset="/images/header-1_19LOTd.webp 500w" sizes="100vw" data-astro-cid-s5f3uvtz>
                            <source type="image/png" srcset="/images/header-1.png 500w" sizes="100vw" data-astro-cid-s5f3uvtz>
                            <img src="/images/header-1.png" srcset="/images/header-1.png 500w" alt width="500" height="340" loading="lazy" decoding="async" class="picture__img" sizes="100vw" data-astro-cid-s5f3uvtz>
                        </picture>
                    </div>
                </a>
                <a class="header-card" data-astro-cid-hcwr7iq5="true" href="#" data-astro-cid-dktb7hwi>
                    <p data-astro-cid-dktb7hwi="true" data-astro-cid-py3iw5hh="true" class="text text_variant_17 text_color_blue header-card__title">
                        Миграция инфраструктуры
                    </p>
                    <div class="header-card__img" data-astro-cid-dktb7hwi>
                        <picture class="picture" data-astro-cid-dktb7hwi="true" data-astro-cid-s5f3uvtz>
                            <source type="image/webp" srcset="/images/header-2_1iJrWR.webp 500w" sizes="100vw" data-astro-cid-s5f3uvtz>
                            <source type="image/png" srcset="/images/header-2.png 500w" sizes="100vw" data-astro-cid-s5f3uvtz>
                            <img src="/images/header-2.png" srcset="/images/header-2.png 500w" alt width="500" height="340" loading="lazy" decoding="async" class="picture__img" sizes="100vw" data-astro-cid-s5f3uvtz>
                        </picture>
                    </div>
                </a>
        <a class="header-card" data-astro-cid-hcwr7iq5="true" href="#" data-astro-cid-dktb7hwi>
  <p data-astro-cid-dktb7hwi="true" data-astro-cid-py3iw5hh="true" class="text text_variant_17 text_color_blue header-card__title">
  Аренда облачных сервисов SaaS
</p>

  <div class="header-card__img" data-astro-cid-dktb7hwi>
    <picture class="picture" data-astro-cid-dktb7hwi="true" data-astro-cid-s5f3uvtz>
  

  
  <source type="image/webp" srcset="/images/header-3_Z29vYpC.webp 501w" sizes="100vw" data-astro-cid-s5f3uvtz>
  
  <source type="image/png" srcset="/images/header-3.png 501w" sizes="100vw" data-astro-cid-s5f3uvtz>

  
  <img src="/images/header-3.png" srcset="/images/header-3.png 501w" alt width="501" height="340" loading="lazy" decoding="async" class="picture__img" sizes="100vw" data-astro-cid-s5f3uvtz>
</picture>
  </div>
</a>
        <a class="header-card" data-astro-cid-hcwr7iq5="true" href="#" data-astro-cid-dktb7hwi>
  <p data-astro-cid-dktb7hwi="true" data-astro-cid-py3iw5hh="true" class="text text_variant_17 text_color_blue header-card__title">
  Аренда облачных сервисов SaaS
</p>

  <div class="header-card__img" data-astro-cid-dktb7hwi>
    <picture class="picture" data-astro-cid-dktb7hwi="true" data-astro-cid-s5f3uvtz>
  

  
  <source type="image/webp" srcset="/images/header-3_Z29vYpC.webp 501w" sizes="100vw" data-astro-cid-s5f3uvtz>
  
  <source type="image/png" srcset="/images/header-3.png 501w" sizes="100vw" data-astro-cid-s5f3uvtz>

  
  <img src="/images/header-3.png" srcset="/images/header-3.png 501w" alt width="501" height="340" loading="lazy" decoding="async" class="picture__img" sizes="100vw" data-astro-cid-s5f3uvtz>
</picture>
  </div>
</a>
        <a class="header-card" data-astro-cid-hcwr7iq5="true" href="#" data-astro-cid-dktb7hwi>
  <p data-astro-cid-dktb7hwi="true" data-astro-cid-py3iw5hh="true" class="text text_variant_17 text_color_blue header-card__title">
  Аренда облачных сервисов SaaS
</p>

  <div class="header-card__img" data-astro-cid-dktb7hwi>
    <picture class="picture" data-astro-cid-dktb7hwi="true" data-astro-cid-s5f3uvtz>
  

  
  <source type="image/webp" srcset="/images/header-3_Z29vYpC.webp 501w" sizes="100vw" data-astro-cid-s5f3uvtz>
  
  <source type="image/png" srcset="/images/header-3.png 501w" sizes="100vw" data-astro-cid-s5f3uvtz>

  
  <img src="/images/header-3.png" srcset="/images/header-3.png 501w" alt width="501" height="340" loading="lazy" decoding="async" class="picture__img" sizes="100vw" data-astro-cid-s5f3uvtz>
</picture>
  </div>
</a>
      </div>
    
  </div>
  
</div>

    <div class="menu menu_nested bg-white menu_variant_big desktop:block devices:hidden" data-menu-panel="menu" data-variant="big" data-astro-cid-q4nsqqgu>
  <div class="menu__inner animate" data-astro-cid-q4nsqqgu>
    
      <!-- <div
  class="menu hidden bg-white desktop:block devices:hidden"
  data-menu-panel={'menu'}
> --><!-- <div
  data-menu-panel={'menu'}
  class="p-10"
> -->
      <div class="menu__top grid grid-cols-12 gap-4" data-astro-cid-t7madfvw>
  <nav class="nav col-span-8" data-astro-cid-t7madfvw>
    <?php $APPLICATION->IncludeComponent(
            "bitrix:menu",
        "inheader",
        Array(
            "ALLOW_MULTI_SELECT" => "N",
            "CHILD_MENU_TYPE" => "left",
            "DELAY" => "N",
            "MAX_LEVEL" => "1",
            "MENU_CACHE_GET_VARS" => array(""),
            "MENU_CACHE_TIME" => "3600",
            "MENU_CACHE_TYPE" => "N",
            "MENU_CACHE_USE_GROUPS" => "Y",
            "ROOT_MENU_TYPE" => "top",
            "USE_EXT" => "Y"
        )
    )?>
  </nav>

  <div class="col-span-4" data-astro-cid-t7madfvw>
      <?php $APPLICATION->IncludeComponent(
          "bitrix:main.include",
          "",
          Array(
              "AREA_FILE_SHOW" => "file",
              "AREA_FILE_SUFFIX" => "inc",
              "EDIT_TEMPLATE" => "",
              "PATH" => "local/include/header/consultation_button.php"
          )
      );?>

      <?php $APPLICATION->IncludeComponent(
          "bitrix:main.include",
          "",
          Array(
              "AREA_FILE_SHOW" => "file",
              "AREA_FILE_SUFFIX" => "inc",
              "EDIT_TEMPLATE" => "",
              "PATH" => "local/include/header/mail.php"
          )
      );?>

    <div class="mt-5" data-animate data-animate-delay="0.6100000000000001s" data-astro-cid-t7madfvw>
      <div class="soc" data-astro-cid-7afh2dz6>

          <?php $APPLICATION->IncludeComponent(
              "bitrix:main.include",
              "",
              Array(
                  "AREA_FILE_SHOW" => "file",
                  "AREA_FILE_SUFFIX" => "inc",
                  "EDIT_TEMPLATE" => "",
                  "PATH" => "local/include/header/telegram.php"
              )
          );?>

          <?php $APPLICATION->IncludeComponent(
              "bitrix:main.include",
              "",
              Array(
                  "AREA_FILE_SHOW" => "file",
                  "AREA_FILE_SUFFIX" => "inc",
                  "EDIT_TEMPLATE" => "",
                  "PATH" => "local/include/header/vk.php"
              )
          );?>

          <?php $APPLICATION->IncludeComponent(
              "bitrix:main.include",
              "",
              Array(
                  "AREA_FILE_SHOW" => "file",
                  "AREA_FILE_SUFFIX" => "inc",
                  "EDIT_TEMPLATE" => "",
                  "PATH" => "local/include/header/dzen.php"
              )
          );?>

          <?php $APPLICATION->IncludeComponent(
              "bitrix:main.include",
              "",
              Array(
                  "AREA_FILE_SHOW" => "file",
                  "AREA_FILE_SUFFIX" => "inc",
                  "EDIT_TEMPLATE" => "",
                  "PATH" => "local/include/header/rutube.php"
              )
          );?>

</div>
    </div>
  </div>
</div>
<div class="mt-60px grid grid-cols-12 gap-4" data-astro-cid-t7madfvw>
  <div data-animate data-animate-direction="right-to-left" data-animate-delay="0.47000000000000003s" class="col-span-3" data-astro-cid-t7madfvw>
      <?php $APPLICATION->IncludeComponent(
          "bitrix:main.include",
          "",
          Array(
              "AREA_FILE_SHOW" => "file",
              "AREA_FILE_SUFFIX" => "inc",
              "EDIT_TEMPLATE" => "",
              "PATH" => "local/include/header/header_politica.php"
          )
      );?>
  </div>
  <p class="col-span-5" data-animate data-animate-direction="right-to-left" data-animate-delay="0.47000000000000003s" data-astro-cid-t7madfvw>
    <span class="text-blue opacity-60" data-astro-cid-t7madfvw>
        <?php $currentYear = date("Y"); ?>
      © A2Cloud, <?=$currentYear?>. Все права защищены
    </span>
  </p>

  <div class="copyright col-span-4" data-animate="true" data-animate-direction="right-to-left" data-animate-delay="0.47000000000000003s" data-astro-cid-t7madfvw="true" data-astro-cid-7x2sp47s>
  <div class="copyright__text !text-blue opacity-60" data-astro-cid-7x2sp47s>Сделано в</div>
  <a href="#" class="copyright__link" data-astro-cid-7x2sp47s>
    <svg class="!text-blue " xmlns="http://www.w3.org/2000/svg" width="83" height="10" viewBox="0 0 83 10" fill="none" data-astro-cid-7x2sp47s>
      <path d="M11.2641 1.5358C11.2641 3.91373 10.7734 5.60633 9.80249 6.56944C9.06263 7.30411 8.2605 7.3794 7.95158 7.37421L7.43498 7.39497L6.0331 5.71017C6.50557 5.37009 6.78852 4.80936 7.0611 4.2642C7.15196 4.08507 7.24025 3.90855 7.34149 3.72942L9.00037 0.502599H6.39917L5.41528 2.43401L5.22838 2.80525C4.99733 3.26734 4.64684 3.96825 4.4158 3.96825H2.4688V0.502599H0V9.49513H2.4688V6.02947H3.33069L6.25638 9.49513H9.11458H9.23918C9.40792 9.49513 13.3512 9.41466 13.7095 2.56122H16.4664V9.49513H18.9352V0.5H11.2667V1.5358H11.2641Z" fill="#3267D3" data-astro-cid-7x2sp47s></path>
      <path d="M74.8915 1.53549C74.8915 7.26227 72.6901 7.4388 72.6668 7.4388L72.6668 7.45438L72.6667 9.50001H72.864C73.0327 9.50001 76.9761 9.41954 77.3343 2.56611H80.0939V9.50001H82.5627V0.504883H74.8941V1.53549H74.8915Z" fill="#3267D3" data-astro-cid-7x2sp47s></path>
      <path d="M47.5512 0.504883H39.6022V1.53549C39.6022 7.24929 37.1775 7.4388 37.1516 7.4388L36.8452 7.45437L37.297 9.50001H48.5169V7.4388H47.5537V0.504883H47.5512ZM45.0824 7.4388H40.6769C41.4323 6.24983 41.8659 4.61435 41.9749 2.56611H45.0824V7.4388Z" fill="#3267D3" data-astro-cid-7x2sp47s></path>
      <path d="M55.5255 5.53333L53.6382 0.504883H49.8818V9.49742H52.3506V3.67979L54.5312 9.49742H56.5172L58.7004 3.67979V9.49742H61.1692V0.504883H57.4128L55.5255 5.53333Z" fill="#3267D3" data-astro-cid-7x2sp47s></path>
      <path d="M65.2325 5.57228V0.504883H62.7637V9.49742H64.2227L69.29 4.43003V9.49742H71.7588V0.504883H70.3025L65.2325 5.57228Z" fill="#3267D3" data-astro-cid-7x2sp47s></path>
      <path d="M38.3148 0.504883H35.6824L33.4499 6.60029L31.181 0.504883H28.5227L30.9266 6.80018H33.3772L32.5231 9.13399L32.3414 9.49742H34.9841L35.0464 9.32609C35.7603 7.38428 37.9306 1.47319 38.1746 0.857943L38.3148 0.504883Z" fill="#3267D3" data-astro-cid-7x2sp47s></path>
      <path d="M26.6038 0.751506L26.5078 0.504883H22.6917L19.5323 9.13399L19.3506 9.49742H21.9933L22.5099 8.09299H26.6947L27.2113 9.49742H29.4335H29.854L29.6723 9.13399L26.6038 0.751506ZM24.5997 2.41294C24.8723 3.14761 25.2149 4.07438 25.581 5.07124H25.5784L25.9315 6.03176H23.268L23.621 5.07124H23.6184C23.987 4.07438 24.3297 3.14501 24.5997 2.41294Z" fill="#3267D3" data-astro-cid-7x2sp47s></path>
    </svg>
  </a>
</div>
  <!-- </div>
</div> -->
  <!-- </div> -->

  
</div>
    
  </div>
  
</div>

    <div class="modal" data-modal="consultation-side-modal" aria-hidden="true" role="dialog" aria-modal="true" data-astro-cid-23xz3koz>
  <div class="modal__backdrop" data-modal-backdrop data-astro-cid-23xz3koz>
  </div>
  <div class="!pr-1 !pb-0 modal__container side-modal" data-astro-cid-23xz3koz>
    <button data-modal-close="true" data-astro-cid-23xz3koz="true" data-astro-cid-m3hx3gxg="true" class="button button_color_light button_variant_icon modal__close"><span class="button__icon button__icon_right" data-astro-cid-m3hx3gxg>
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" data-astro-cid-m3hx3gxg="true">
  <path d="M13 1L1 13" stroke="#3267D3" stroke-width="1.5" stroke-linecap="round" />
  <path d="M1 1L13 13" stroke="#3267D3" stroke-width="1.5" stroke-linecap="round" />
</svg>
      </span></button>

    <h2 slot="title" data-astro-cid-iztck7sz="true" data-astro-cid-5a7m7riw="true" class="title title_variant_48 title_color_blue title_weight_400 !leading-[120%]">
  Получить<br class="tablet:hidden" data-astro-cid-iztck7sz> консультацию
</h2>

    <div class="devices:!pr-4 !pr-9 !pb-10 devices:!pb-4 side-modal__wrapper" data-lenis-prevent="true" data-astro-cid-23xz3koz>
      
  
  <form id="consultation-form" data-form-id="consultation-form" data-astro-cid-iztck7sz="true" class="form mt-10 flex flex-col gap-2" novalidate data-astro-cid-puwe3cxz>
  
    <label class="input input--light" data-input-parent data-astro-cid-vzfstetq>
  <input class="input__field" data-input id="consultation-form-name" placeholder="Имя*" required data-validate="text" data-astro-cid-iztck7sz="true" data-astro-cid-vzfstetq>

  <span class="input__error" data-error-container data-astro-cid-vzfstetq></span>
</label>
    <label class="input input--light" data-input-parent data-astro-cid-vzfstetq>
  <input class="input__field" data-input id="consultation-form-phone" placeholder="Телефон*" type="tel" required data-validate="tel" data-mask-phone="true" data-astro-cid-iztck7sz="true" data-astro-cid-vzfstetq>

  <span class="input__error" data-error-container data-astro-cid-vzfstetq></span>
</label>
    <label class="input input--light" data-input-parent data-astro-cid-vzfstetq>
  <input class="input__field" data-input id="consultation-form-email" placeholder="Email*" type="email" required data-validate="email" data-astro-cid-iztck7sz="true" data-astro-cid-vzfstetq>

  <span class="input__error" data-error-container data-astro-cid-vzfstetq></span>
</label>
    <label class="input input--light" data-input-parent data-astro-cid-vzfstetq>
  <input class="input__field" data-input id="consultation-form-company" placeholder="Компания" type="text" data-validate="text" data-astro-cid-iztck7sz="true" data-astro-cid-vzfstetq>

  <span class="input__error" data-error-container data-astro-cid-vzfstetq></span>
</label>
    <div data-input-parent class="textarea" data-astro-cid-tf3dukr4>
  <textarea class="textarea__field" data-input placeholder="Комментарий" data-astro-cid-iztck7sz="true" data-astro-cid-tf3dukr4></textarea>
  <span class="textarea__error text-red" data-error-container data-astro-cid-tf3dukr4></span>
</div>
    <div class="mt-5 flex flex-col gap-3" data-astro-cid-iztck7sz>
      <label class="checkbox checkbox_variant-default" data-input-parent data-astro-cid-elhflciz>
  <span class="checkbox__line" data-astro-cid-elhflciz>
    <input type="checkbox" data-input required data-validate="checkbox" data-astro-cid-iztck7sz="true" class="astro-elhflciz" data-astro-cid-elhflciz>
    <span class="checkbox__box" data-astro-cid-elhflciz>
      <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" data-astro-cid-elhflciz="true"><!-- <rect width="24" height="24" rx="8" fill="#3267D3"/> -->
<path d="M7 12.5552L9.46004 15.2243C9.84855 15.6459 10.5112 15.6552 10.9114 15.2447L17 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
</svg>
    </span>
    <span class="checkbox__text" data-astro-cid-elhflciz>
      
        Я даю своё согласие на обработку <a href="#" data-astro-cid-iztck7sz>персональных данных</a>
      
    </span>
  </span>
  <span class="checkbox__error" data-error-container data-astro-cid-elhflciz></span>
</label>
      <label class="checkbox checkbox_variant-default" data-input-parent data-astro-cid-elhflciz>
  <span class="checkbox__line" data-astro-cid-elhflciz>
    <input type="checkbox" data-input data-validate="checkbox" data-astro-cid-iztck7sz="true" class="astro-elhflciz" data-astro-cid-elhflciz>
    <span class="checkbox__box" data-astro-cid-elhflciz>
      <svg width="100%" height="100%" viewBox="0 0 24 24" fill="none" data-astro-cid-elhflciz="true"><!-- <rect width="24" height="24" rx="8" fill="#3267D3"/> -->
<path d="M7 12.5552L9.46004 15.2243C9.84855 15.6459 10.5112 15.6552 10.9114 15.2447L17 9" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
</svg>
    </span>
    <span class="checkbox__text" data-astro-cid-elhflciz>
      Я согласен получать рекламные и информационные материалы
    </span>
  </span>
  <span class="checkbox__error" data-error-container data-astro-cid-elhflciz></span>
</label>
    </div>
  
  <div class="form__error" data-form-error="" data-astro-cid-puwe3cxz>
  </div>
</form>
  
  <button form="consultation-form" type="submit" data-astro-cid-iztck7sz="true" data-astro-cid-m3hx3gxg="true" class="button button_color_primary button_variant_contained mt-5"><span class="button__text" data-astro-cid-m3hx3gxg>
        Отправить
      </span><span class="button__icon button__icon_right" data-astro-cid-m3hx3gxg>
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" data-astro-cid-m3hx3gxg="true">
<path d="M17.9125 17.9123V6.08731M17.9125 6.08731H6.08753M17.9125 6.08731L6.08753 17.9123" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
</svg>
      </span></button>

    </div>
  </div>
</div>

<div class="modal" data-modal="consultation-side-modal-success" aria-hidden="true" role="dialog" aria-modal="true" data-astro-cid-23xz3koz>
  <div class="modal__backdrop" data-modal-backdrop data-astro-cid-23xz3koz>
  </div>
  <div class="modal__container side-modal" data-astro-cid-23xz3koz>
    <button data-modal-close="true" data-astro-cid-23xz3koz="true" data-astro-cid-m3hx3gxg="true" class="button button_color_light button_variant_icon modal__close"><span class="button__icon button__icon_right" data-astro-cid-m3hx3gxg>
        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" data-astro-cid-m3hx3gxg="true">
  <path d="M13 1L1 13" stroke="#3267D3" stroke-width="1.5" stroke-linecap="round" />
  <path d="M1 1L13 13" stroke="#3267D3" stroke-width="1.5" stroke-linecap="round" />
</svg>
      </span></button>

    

    <div class="side-modal__wrapper" data-lenis-prevent="true" data-astro-cid-23xz3koz>
      
  <div class="consultation-success" data-astro-cid-iztck7sz>
    <svg width="120" height="120" viewBox="0 0 120 120" fill="none" class="consultation-success__icon" data-astro-cid-iztck7sz="true">
  <path fill-rule="evenodd" clip-rule="evenodd" d="M96.0089 66C93.1472 83.3037 78.1145 96.5 59.9997 96.5C41.8849 96.5 26.8522 83.3037 23.9905 66H22.4707C25.3474 84.1359 41.0545 98 59.9997 98C78.9449 98 94.652 84.1359 97.5287 66H96.0089ZM23.9905 54C26.8522 36.6963 41.8849 23.5 59.9997 23.5C78.1145 23.5 93.1472 36.6963 96.0089 54H97.5287C94.652 35.8641 78.9449 22 59.9997 22C41.0545 22 25.3474 35.8641 22.4707 54H23.9905Z" fill="#3267D3" />
  <path d="M46 61L55 70L75 50" stroke="#3267D3" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
</svg>

    <h2 data-astro-cid-iztck7sz="true" data-astro-cid-5a7m7riw="true" class="title title_variant_48 title_color_blue title_weight_400 max-w-[99%] text-center">
  Отправлено
</h2>
    <p data-astro-cid-iztck7sz="true" data-astro-cid-py3iw5hh="true" class="text text_variant_20 text_color_gray max-w-[95%] text-center">
  Спасибо. Мы свяжемся с вами в ближайшее время. 
</p>
  </div>

    </div>
  </div>
</div>
  </div>
</header>
