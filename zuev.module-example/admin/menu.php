<?php
/*
 Создано в: PhpStorm
 Создатель: Oleg Zuev
 Телеграмм: #zuev174
 Дата: 15.03.2024
 Время: 15:08
 
 "Не волнуйтесь, если что-то не работает. Если бы всё работало, вас бы уволили."
*********************************************************************************/
defined('B_PROLOG_INCLUDED') and (B_PROLOG_INCLUDED === true) or die();

use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);

$aMenu = array(
    array(
        'parent_menu' => 'global_menu_content',
        'sort' => 400,
        'text' => "Тестовый модуль",
        'title' => "",
        'url' => 'perfmon_table.php?lang=ru&table_name=brainkit_test',
        'items_id' => 'menu_references'
    )
);
return $aMenu;