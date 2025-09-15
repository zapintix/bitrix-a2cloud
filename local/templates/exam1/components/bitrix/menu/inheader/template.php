<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !==true)die();
?>

<ul class="grid grid-cols-8 gap-4" data-astro-cid-t7madfvw>
    <?php foreach ($arResult as $arItem):?>
    <li class="col-span-3" data-animate-delay=<?=$arItem["PARAMS"]["DELAY"]?> data-animate data-astro-cid-t7madfvw>
        <a href="<?=$arItem["LINK"]?>" data-astro-cid-t7madfvw><?=$arItem["TEXT"]?></a>
    </li>
    <?php endforeach;?>
</ul>