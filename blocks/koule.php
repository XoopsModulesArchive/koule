<?php
function b_koule_show($options)
{
         global $xoopsDB;
         $block = array();
         $myts =& MyTextSanitizer::getInstance();                               // Aktivace SANITIZERU, cili fungovani XoopsKodu a podobne
         $result = $xoopsDB->query("SELECT text_blok FROM ".$xoopsDB->prefix("koule")." WHERE id=1");
         $myrow = $xoopsDB->fetchArray($result);
         $text = $myts->displayTarea($myrow['text_blok']);
         $block['content'] =  "<a href='".XOOPS_URL."/modules/koule/'> ".$text. "</a>";
         return $block;
}

?>