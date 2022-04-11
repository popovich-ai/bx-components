<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

use Bitrix\Main\Localization\Loc as Loc;

Loc::loadMessages(__FILE__);

$arComponentDescription = array(
	"NAME" => Loc::getMessage('PAI_SIMPLENEWS_ELEMENTS_LIST_DESCRIPTION_NAME'),
	"DESCRIPTION" => Loc::getMessage('PAI_SIMPLENEWS_ELEMENTS_LIST_DESCRIPTION_DESCRIPTION'),
	"PATH" => array(
		"ID" => 'pai.simplenews',
		"NAME" => Loc::getMessage('PAI_SIMPLENEWS_ELEMENTS_LIST_DESCRIPTION_GROUP'),
	),
);
?>