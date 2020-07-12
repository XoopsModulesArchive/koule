<?php
// -----------------[ Hlavicka souboru, vlozeni systemovych prostredku ]--------

require_once("../../mainfile.php");                                             // vlozeni systemovych promenych
global $xoopsTpl;
$xoopsOption['template_main'] = 'koule_index.html';                             // vlozeni hlavni sablony, toto MUSI byt vlozeno pred HEADERem!!!!
include(XOOPS_ROOT_PATH."/header.php");                                         // vlozeni systemove hlavicky

//include_once XOOPS_ROOT_PATH . "/class/module.textsanitizer.php";

$myts =& MyTextSanitizer::getInstance();                                        // Aktivace SANITIZERU, cili fungovani XoopsKodu a podobne

// -----------------[ Vlastni vykonny kod modulu ] -----------------------------

$xoopsTpl->assign('koule_nadpis', $xoopsModuleConfig['text_nadpis'] );
$xoopsTpl->assign('koule_podnadpis', $xoopsModuleConfig['text_podnadpis'] );

$sql = "SELECT * FROM " . $xoopsDB -> prefix('koule') . " WHERE id=1";
$result = $xoopsDB -> query($sql);
$myrow = $xoopsDB->fetchArray($result);

$html = $myrow['html'];
$smiley = $myrow['smiley'];
$xcodes = $myrow['xcodes'];
$breaks = $myrow['breaks'];
$images = $myrow['images'];

$text = $myts->displayTarea($myrow['text_modul'], $html, $smiley, $xcodes, $images, $breaks);
$xoopsTpl->assign('koule_text', $text);

if ( $xoopsModuleConfig['paticka'] == 1 )                                       // Zobrazeni paticky, pokud je povoleno
{

   if ( (date("H",$myrow['datum']) == 2) || (date("H",$myrow['datum']) == 3) ||  (date("H",$myrow['datum']) == 4) ||  (date("H",$myrow['datum']) == 12) || (date("H",$myrow['datum']) == 13) || (date("H",$myrow['datum']) == 14) ||  (date("H",$myrow['datum']) == 20) ||  (date("H",$myrow['datum']) == 21) || (date("H",$myrow['datum']) == 22) ||  (date("H",$myrow['datum']) == 23)  )
   {
      $xoopsTpl->assign('koule_paticka', "<hr>"._KOU_POSLEDNI_ZMENA." ". date("j.n.Y",$myrow['datum'])." "._KOU_VE." ".date("H:i",$myrow['datum'])."." );
   }
   else
   {
      $xoopsTpl->assign('koule_paticka', "<hr>"._KOU_POSLEDNI_ZMENA." ". date("j.n.Y",$myrow['datum'])." "._KOU_V." ".date("H:i",$myrow['datum'])."." );
   }
}

if ( is_object($xoopsUser) && $xoopsUser->isAdmin())                            // Pokud jsem ADMIN, tak zobrazim odkaz
{
   $iks = "<a href='./admin/index.php'>"._KOU_ADMINISTRACE."</a>";
   $xoopsTpl->assign('koule_admin',$iks);
}

// ----------------- [ Vlozeni paticky stranky ] ----------------------------------------------------------------------------
include(XOOPS_ROOT_PATH."/footer.php");             		
?>