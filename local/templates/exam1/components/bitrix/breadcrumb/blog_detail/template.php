<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<?php ob_start();
?>

    <nav class="breadcrumbs" data-astro-cid-k3uedcv5="true" data-astro-cid-slbptjtv>
        <ul class="breadcrumbs__list text-title-20 devices:text-title-16" data-astro-cid-slbptjtv>
            <?php foreach ($arResult as $key => $item):?>
                <?php if ($key+1 != count($arResult)): ?>
                    <li data-astro-cid-slbptjtv>
                        <a class="breadcrumbs__item" href="<?=$item["LINK"]?>" data-astro-cid-slbptjtv>
                            <?=$item["TITLE"]?>
                        </a>
                    </li>
                <?php else: ?>
                    <li class="breadcrumbs__item active" data-astro-cid-slbptjtv>
                        <span data-astro-cid-slbptjtv><?=$item["TITLE"]?></span>
                    </li>
                <?php endif ?>
            <?php endforeach; ?>
        </ul>
    </nav>
<?php
$strReturn = ob_get_clean();
return $strReturn;
?>