<?php
require ($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");?>


                        <?php $APPLICATION->IncludeComponent(
                            "bitrix:news",
                            "blog",
                            array(
                                "PROPERTY_CODE" => array("reading_time", "number_of_views"),
                                "DETAIL_PROPERTY_CODE" => array("reading_time", "number_of_views"),
                                "IBLOCK_TYPE" => "blog",
                                "IBLOCK_ID" => "6",
                                "NEWS_COUNT" => "20",
                                "USE_SEARCH" => "N",
                                "USE_RSS" => "N",
                                "USE_RATING" => "N",
                                "USE_CATEGORIES" => "N",
                                "USE_REVIEW" => "N",
                                "USE_FILTER" => "N",
                                "SORT_BY1" => "ACTIVE_FROM",
                                "SORT_ORDER1" => "DESC",
                                "SORT_BY2" => "SORT",
                                "SORT_ORDER2" => "ASC",
                                "CHECK_DATES" => "Y",
                                "SEF_MODE" => "Y",
                                "SEF_FOLDER" => "/blog/",
                                "AJAX_MODE" => "N",
                                "AJAX_OPTION_JUMP" => "N",
                                "AJAX_OPTION_STYLE" => "Y",
                                "AJAX_OPTION_HISTORY" => "N",
                                "CACHE_TYPE" => "A",
                                "CACHE_TIME" => "36000000",
                                "CACHE_FILTER" => "N",
                                "CACHE_GROUPS" => "Y",
                                "SET_TITLE" => "Y",
                                "SET_STATUS_404" => "Y",
                                "INCLUDE_IBLOCK_INTO_CHAIN" => "N",
                                "ADD_SECTIONS_CHAIN" => "N",
                                "USE_PERMISSIONS" => "N",
                                "DISPLAY_DATE" => "Y",
                                "DISPLAY_NAME" => "Y",
                                "DISPLAY_PICTURE" => "Y",
                                "DISPLAY_PREVIEW_TEXT" => "Y",
                                "PAGER_TEMPLATE" => ".default",
                                "DISPLAY_TOP_PAGER" => "N",
                                "DISPLAY_BOTTOM_PAGER" => "Y",
                                "PAGER_TITLE" => "Новости",
                                "PAGER_SHOW_ALWAYS" => "N",
                                "PAGER_DESC_NUMBERING" => "N",
                                "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
                                "PAGER_SHOW_ALL" => "N",
                                "SEF_URL_TEMPLATES" => array(
                                    "news" => "",
                                    "detail" => "#ELEMENT_ID#/",
                                ),
                                "VARIABLE_ALIASES" => array(
                                    "news" => array(),
                                    "detail" => "#ELEMENT_ID#/",
                                )
                            ),
                            false
                        );?>




<?php require ($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>