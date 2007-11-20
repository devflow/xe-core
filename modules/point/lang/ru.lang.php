<?php
  /**
     * @file   ru.lang.php
     * @author zero <zero@nzeo.com> | translation by Maslennikov Evgeny aka X-[Vr]bL1s5 | e-mail: x-bliss[a]tut.by; ICQ: 225035467;
     * @brief  Russian basic language pack for Zeroboard XE
     **/

    $lang->point = "Поинты"; 
    $lang->level = "Уровень"; 

    $lang->about_point_module = "Вы можете распределять поинты за написание/добавление комментариев, закачку/скачку файлов.<br />Модуль поинтов только конфигурирует настройки, а набор поинтов будет осуществлять, если только аддон поинтов будет активирован";
    $lang->about_act_config = "Каждый модуль, такой как форум/блог, имеет имеет свои действия, такие как\"написание/удаление/добавление комментариев/удаление комментариев\".<br />Вы можете просто добавить значения действий, чтобы связать ситему поинтов, за исключением форума/блога.<br />Запятая(,) используется как разделитель значений."; 

    $lang->max_level = 'Макс. Уровень';
    $lang->about_max_level = 'Вы можете установить максимальный уровень. Иконки уровней должны быть присвоены. (макс. значение равно 1000)'; 

    $lang->level_icon = 'Иконка Уровня';
    $lang->about_level_icon = 'Путь иконок уровней "./module/point/icons/[level].gif" и максимальный уровень может меняться с набором иконок. Поэтому будте осторожны'; 

    $lang->point_name = 'Имя Поинта';
    $lang->about_point_name = 'Вы можете дать имя или единицу измерения для поинта'; 

    $lang->level_point = 'Уровень Поинтов';
    $lang->about_level_point = 'Уровень будет изменен, когда поинты достигают каждого уровня поинтов или падают ниже его'; 

    $lang->disable_download = 'Запретить Скачивание';
    $lang->about_disable_download = "Это запретит скачивание файлов, когда не хватает достаточного кол-ва поинтов. (За исключением файлов изображений)"; 

    $lang->about_module_point = "Вы можете установть поинты для каждого модуля, а модули, не имеющие значения будут использовать значение по умолчанию для поинтов.<br />Все поинты будут восстановлены при обратном действии.";

    $lang->point_signup = 'Присвоить';
    $lang->point_insert_document = 'При Написании';
    $lang->point_delete_document = 'При Удалении';
    $lang->point_insert_comment = 'При Добавлении Комментариев';
    $lang->point_delete_comment = 'При Удалении Комментариев';
    $lang->point_upload_file = 'При Закачке Файлов';
    $lang->point_delete_file = 'При Скачке Файлов';
    $lang->point_download_file = 'При Скачке Файлов (кроме изображений)';


    $lang->cmd_point_config = 'Настройки По Умолчанию';
    $lang->cmd_point_module_config = 'Настройки Модуля';
    $lang->cmd_point_act_config = 'Настройки Действий';
    $lang->cmd_point_member_list = 'Список Поинтов Пользователей';

    $lang->msg_cannot_download = "У Вас нет достаточного количества поитов, чтобы иметь разрешение скачивать файлы.";
?>
