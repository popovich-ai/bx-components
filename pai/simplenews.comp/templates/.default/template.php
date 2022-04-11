<?php
/**
 * @var array $arResult
 */
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); ?>
<?
use Bitrix\Main\Localization\Loc as Loc;
Loc::loadMessages(__FILE__);
$this->setFrameMode(true);

$uniqueStr = uniqid('simplenews');
?>

<? if (count($arResult['ITEMS'])):?>
	<h2><?=Loc::getMessage('PAI_SIMPLENEWS_ELEMENTS_LIST_TEMPLATE_TITLE');?></h2>
    <div class="tabs-container">
        <div class="tabs__links">
			<?foreach ($arResult['YEARS'] as $arYear):?>
				<?if($arYear['SELECTED']):?>
                    <span class="lnk btn"><?=$arYear['YEAR'];?></span>
				<?else:?>
                    <a class="lnk btn btn-info" href="<?=$arYear['LINK'];?>"><?=$arYear['YEAR'];?></a>
				<?endif;?>
			<?endforeach?>
        </div>
        <div class="tabs">
            <div id="tab-<?=$uniqueStr;?>" class="row">
				<? foreach ($arResult['ITEMS'] as $item):?>
                    <div class="col">
                        <picture>
                            <?if(!empty($item['PREVIEW_PICTURE'])):?>
                                <img src="<?=$item['PREVIEW_PICTURE']['SRC']?>" alt="<?=$item['NAME']?>" title="<?=$item['NAME']?>" >
                            <?else:?>
                                <img src="/images/empty.png" alt="<?=$item['NAME']?>" title="<?=$item['NAME']?>" >
                            <?endif;?>
                        </picture>
                        <div class="txt">
                            <div><strong><?=$item['DATE_CREATE'];?></strong> <a href="<?=$item['DETAIL_PAGE_URL'];?>"><?=$item['NAME'];?></a></div>
                            <div><?=$item['PREVIEW_TEXT'];?></div>
                        </div>
                    </div>
				<? endforeach;?>
            </div>
        </div>
    </div>

	<?=$arResult['NAV_STRING'];?>
<? endif;?>
