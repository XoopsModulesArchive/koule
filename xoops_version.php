<?php
$modversion['name']                            = _KOU_NAZEV_MODULU;
$modversion['version']                         = 1.1;
$modversion['description']                     = _KOU_POPIS_MODULU;
$modversion['author']                          = "Sasa Svobodova";
$modversion['credits']                         = "www.zirafoviny.cz";
$modversion['help']                            = "no";
$modversion['license']                         = "GNU GPL";
$modversion['official']                        = "no";
$modversion['image']                           = "images/logo.png";
$modversion['dirname']                         = "koule";

// Menu - "Uzivatelska nabidka"
$modversion['hasMain']                         = 1;

// Administrace
$modversion['hasAdmin']                        = 1;
$modversion['adminindex']                      = "admin/index.php";
$modversion['adminmenu']                       = "admin/menu.php";

// Soubor SQL - nastaveni databaze
$modversion['sqlfile']['mysql']                = "sql/mysql.sql";
$modversion['tables'][0]                       = "koule";

// Templates - sablonky
$modversion['templates'][1]['file']            = 'koule_index.html';
$modversion['templates'][1]['description']     = 'Koule';

// Hledani XOOPS
$modversion['hasSearch'] = 0;

// Bloky
$modversion['blocks'][1]['file']               = "koule.php";
$modversion['blocks'][1]['name']               = "Køišálová koule";
$modversion['blocks'][1]['description']        = "Blok od køišálové koule.";
$modversion['blocks'][1]['show_func']          = "b_koule_show";
$modversion['blocks'][1]['template']           = 'koule_blok.html';

// Predvolby
$modversion['config'][1]['name']               = 'text_nadpis';
$modversion['config'][1]['title']              = '_KOU_PREDVOLBY_NADPIS';
$modversion['config'][1]['description']        = '_KOU_PREDVOLBY_NADPIS_P';
$modversion['config'][1]['formtype']           = 'textbox';
$modversion['config'][1]['valuetype']          = 'text';
$modversion['config'][1]['default']            = _KOU_PREDVOLBY_NADPIS_D;

$modversion['config'][2]['name']               = 'text_podnadpis';
$modversion['config'][2]['title']              = '_KOU_PREDVOLBY_PODNADPIS';
$modversion['config'][2]['description']        = '_KOU_PREDVOLBY_PODNADPIS_P';
$modversion['config'][2]['formtype']           = 'textbox';
$modversion['config'][2]['valuetype']          = 'text';
$modversion['config'][2]['default']            = _KOU_PREDVOLBY_PODNADPIS_D;

$modversion['config'][3]['name']               = 'paticka';
$modversion['config'][3]['title']              = '_KOU_PREDVOLBY_ZOB_PATICKA';
$modversion['config'][3]['description']        = '_KOU_PREDVOLBY_ZOB_PATICKA_P';
$modversion['config'][3]['formtype']           = 'yesno';
$modversion['config'][3]['valuetype']          = 'int';
$modversion['config'][3]['default']            = 1;
?>