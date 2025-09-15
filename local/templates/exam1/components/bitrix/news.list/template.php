<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php
$arSections = [];
if (!empty($arResult["ITEMS"])) {
    foreach ($arResult["ITEMS"] as $item) {
        $arSections[$item["IBLOCK_SECTION_ID"]][] = $item;
    }
}

$arSectionNames = [];
if (!empty($arSections)) {
    $sectionFilter = array("IBLOCK_ID" => $arParams["IBLOCK_ID"], "ID" => array_keys($arSections));
    $rsSections = CIBlockSection::GetList(array("SORT" => "ASC"), $sectionFilter);
    while ($section = $rsSections->Fetch()) {
        $arSectionNames[$section["ID"]] = $section["NAME"];
    }
}

$arSectionKeys = array_keys($arSections);
$halfCount = ceil(count($arSectionKeys) / 2);
$part1Keys = array_slice($arSectionKeys, 0, $halfCount);
$part2Keys = array_slice($arSectionKeys, $halfCount);



?>

<div class="footer__col" data-astro-cid-bmuzzlfk>
    <?php foreach ($part1Keys as $sectionId):
        if (!isset($arSections[$sectionId])) continue;?>
    <nav class="footer__nav" data-astro-cid-bmuzzlfk>

        <div class="footer__link-wrapper" data-astro-cid-bmuzzlfk>
            <a href="#" class="footer__Title" data-astro-cid-bmuzzlfk>
                <p data-astro-cid-bmuzzlfk="true" data-astro-cid-py3iw5hh="true" class="text text_variant_17 text_color_white">
                    <?=$arSectionNames[$sectionId]?>
                </p>
            </a>
        </div>
        <ul class="footer__list" data-astro-cid-bmuzzlfk>
            <?php foreach ($arSections[$sectionId] as $item):?>
            <li class="footer__link-wrapper" data-astro-cid-bmuzzlfk>
                <a href="#" class="footer__link" data-astro-cid-bmuzzlfk>
                    <p data-astro-cid-bmuzzlfk="true" data-astro-cid-py3iw5hh="true" class="text text_variant_17 text_color_white">
                        <?=$item["NAME"]?>
                    </p>
                </a>
            </li>
            <?php endforeach;?>
        </ul>
    </nav>
    <?php endforeach;?>
</div>


<div class="footer__col" data-astro-cid-bmuzzlfk>
    <?php foreach ($part2Keys as $sectionId):
        if (!isset($arSections[$sectionId])) continue;?>
        <nav class="footer__nav" data-astro-cid-bmuzzlfk>

            <div class="footer__link-wrapper" data-astro-cid-bmuzzlfk>
                <a href="#" class="footer__Title" data-astro-cid-bmuzzlfk>
                    <p data-astro-cid-bmuzzlfk="true" data-astro-cid-py3iw5hh="true" class="text text_variant_17 text_color_white">
                        <?=$arSectionNames[$sectionId]?>
                    </p>
                </a>
            </div>
            <ul class="footer__list" data-astro-cid-bmuzzlfk>
                <?php foreach ($arSections[$sectionId] as $item):?>
                    <li class="footer__link-wrapper" data-astro-cid-bmuzzlfk>
                        <a href="#" class="footer__link" data-astro-cid-bmuzzlfk>
                            <p data-astro-cid-bmuzzlfk="true" data-astro-cid-py3iw5hh="true" class="text text_variant_17 text_color_white">
                                <?=$item["NAME"]?>
                            </p>
                        </a>
                    </li>
                <?php endforeach;?>
            </ul>
        </nav>
    <?php endforeach;?>
</div>