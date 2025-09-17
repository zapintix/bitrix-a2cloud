<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$sort = $_GET["sort"]?? "new";
if ($sort === "old"){
    $sortedType = "ASC";
}else{
    $sortedType = "DESC";
}
?>

<tbody>
<?$APPLICATION->IncludeComponent(
    "bitrix:news.list",
    "blog",
    Array(
        "IBLOCK_TYPE" => $arParams["IBLOCK_TYPE"],
        "IBLOCK_ID" => $arParams["IBLOCK_ID"],
        "NEWS_COUNT" => $arParams["NEWS_COUNT"],
        "SORT_BY1" => "TIMESTAMP_X",
        "SORT_ORDER1" => $sortedType,
        "FIELD_CODE" => $arParams["LIST_FIELD_CODE"],
        "PROPERTY_CODE" => $arParams["PROPERTY_CODE"],
        "DETAIL_URL" => "/blog/#ELEMENT_ID#/",
        "CACHE_TYPE" => $arParams["CACHE_TYPE"],
        "CACHE_TIME" => $arParams["CACHE_TIME"],
    ),
    $component
);?>
</tbody>