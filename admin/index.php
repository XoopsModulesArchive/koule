<?php

// -----------------[ Hlavicka souboru, vlozeni systemovych prostredku ]--------

include 'header.php';                                                           // Vlozeni hlavisky, v te jsou systemove prostredky

// -[ Prichod na stranku bez parametru nebo se spatnym parametrem]--------------

if (!isset($_GET["co"]) || (isset($_GET["co"]) && ($_GET["co"]!="nastav" )))
{
   global $xoopsModule;
   xoops_cp_header();                                                           // Hlavicka stranky administrace. Opakuje se pro kazde zobrazeni
   kou_adminmenu(0);

   if (isset($_POST['form_co']))                                                // Prevzeti udaju z formulare
   {
      if ($_POST["form_co"]=="zmena")                                           // Pozadavek na zmenu databaze
      {
      if (isset($_POST['form_html'])) { $html = 1; }
      else { $html = 0;}
      if (isset($_POST['form_smiley'])) { $smiley = 1; }
      else { $smiley = 0;}
      if (isset($_POST['form_xcodes'])) { $xcodes = 1; }
      else { $xcodes = 0;}
      if (isset($_POST['form_breaks'])) { $breaks = 1; }
      else { $breaks = 0;}
      if (isset($_POST['form_images'])) { $images = 1; }
      else { $images = 0;}

      $sql = "UPDATE " . $xoopsDB -> prefix('koule') . " SET  text_blok=\"".$_POST['form_perex']."\", text_modul=\"".$_POST['form_text']."\", datum=\"".time()."\", html=\"".$html."\", smiley=\"".$smiley."\", xcodes=\"" . $xcodes . "\", breaks=\"" . $breaks . "\", images=\"" . $images . "\"  WHERE id=1 ";
      $result = $xoopsDB -> query($sql);                                        // Odeslani dotazu na databazi
      }
   }

   echo "<center><b>";                                                          // Vypsani hlasky o provedene aktualizaci tabulek
   if ( isset($result) && ($result==1)) echo _KOU_ADMIN_AKTUAL_OK;
   if ( isset($result) && ($result==0)) echo _KOU_ADMIN_AKTUAL_KO;
   echo "</b></center><br>";                                                    // Pokud nebyla aktualizace, tak se nezobrazuje

// -- Zobrazeni prehledove tabulky na prvni strance administrace
   $sql = "SELECT * FROM " . $xoopsDB -> prefix('koule') . " ";                 // Precteni parametru z databaze
   $result = $xoopsDB -> query($sql);
   $myrow = $xoopsDB->fetchArray($result);

   $html = $myrow['html'];
   $smiley = $myrow['smiley'];
   $xcodes = $myrow['xcodes'];
   $breaks = $myrow['breaks'];
   $images = $myrow['images'];

   if ($html == 1)                                                              // Jak je nastaveni zpracovani HTML?
   {
      $html=_KOU_ADMIN_POVOLENO;
      $barva1="green";
   } else

   {
    $html=_KOU_ADMIN_ZAKAZANO;
    $barva1="red";
   }

   if ($xcodes == 1)
   {
      $xcodes=_KOU_ADMIN_POVOLENO;
      $barva2="green";
   } else

   {
    $xcodes=_KOU_ADMIN_ZAKAZANO;
    $barva2="red";
   }

   if ($breaks == 1)
   {
      $breaks=_KOU_ADMIN_POVOLENO;
      $barva3="green";
   } else

   {
    $breaks=_KOU_ADMIN_ZAKAZANO;
    $barva3="red";
   }
   
   if ($smiley == 1)
   {
      $smiley=_KOU_ADMIN_POVOLENO;
      $barva4="green";
   } else

   {
    $smiley=_KOU_ADMIN_ZAKAZANO;
    $barva4="red";
   }
   
   if ($images == 1)
   {
      $images=_KOU_ADMIN_POVOLENO;
      $barva5="green";
   } else

   {
    $images=_KOU_ADMIN_ZAKAZANO;
    $barva5="red";
   }

   echo "<fieldset>";
   echo "<legend style=\"color: #990000; font-weight: bold;\">"._KOU_ADMIN_INFORMACE."</legend>";
   echo _KOU_ADMIN_DELKA_BLOK.": <b>". strlen($myrow['text_blok']) . "</b> znakù <br>";
   echo _KOU_ADMIN_DELKA_MOD.": <b>". strlen($myrow['text_modul']) . "</b> znakù<br>";
   echo _KOU_ADMIN_HTML.": <span style=\"color: ".$barva1.";\"><b>". $html . "</b></span><br>";
   echo _KOU_ADMIN_XCODE.": <span style=\"color: ".$barva2.";\"><b>". $xcodes . "</b></span><br>";
   echo _KOU_ADMIN_BREAK.": <span style=\"color: ".$barva3.";\"><b>". $breaks . "</b></span><br>";
   echo _KOU_ADMIN_SMILEY.": <span style=\"color: ".$barva4.";\"><b>". $smiley . "</b></span><br>";
   echo _KOU_ADMIN_IMAGE.": <span style=\"color: ".$barva5.";\"><b>". $images . "</b></span><br>";
   echo _KOU_ADMIN_POSLEDNI_ZMENA.": <b>". date( "d. n. Y" ,($myrow['datum'])) . "</b><br>";
   echo "</fieldset";

   kou_adminfooter();                                                           // Moje paticka stranek
   xoops_cp_footer();                                                           // Systemova paticka stranky administrace. Opakuje se pro kazde zobrazeni
}
// -----------------------------------------------------------------------------

// -[ Zmena textu ]-------------------------------------------------------------
if (isset($_GET["co"]) && ($_GET["co"]=="nastav" ))
{
   global $xoopsModule;
   xoops_cp_header();
   kou_adminmenu(1);
   
   $sql = "SELECT * FROM " . $xoopsDB -> prefix('koule') . " ";
   $result = $xoopsDB -> query($sql);
   $myrow = $xoopsDB->fetchArray($result);

   $html = $myrow['html'];
   $smiley = $myrow['smiley'];
   $xcodes = $myrow['xcodes'];
   $breaks = $myrow['breaks'];
   $images = $myrow['images'];

   $formular = new XoopsThemeForm(_KOU_ADMIN_ZMENA_TEXTU, 'formular', 'index.php'); // Vytvoreni formulare. Nadpis, jmeno, Kam prejit po odelsani
   $formular->setExtra('enctype="multipart/form-data"');                        // Typ formulare
   $options['editor'] = 'dhtmltextarea';                                        // Typ pouziteho editoru a jeho predvolby
   $options['name'] = 'form_perex';                                             // jmeno promenne, kterou formular preda ke zpracovani
   $options['value'] =  $myrow['text_blok'];                                    // Vychozi text v editoru
   $options['rows'] = 15;                                                       // Pocet sloupcu editoru
   $options['cols'] = 60;                                                       // Pocet radek editoru
   $options['width'] = '100%';                                                  // Sirka formulare
   $options['height'] = '400px';                                                // Vyska formulare
   $formular->addElement(new XoopsFormEditor(_KOU_ADMIN_VBLOKU, $options['name'], $options, $nohtml = false, $onfailure = 'textarea'), true); // Vlozeni TEXTAREA s editorem

   $options['editor'] = 'dhtmltextarea';
   $options['name'] = 'form_text';
   $options['value'] =  $myrow['text_modul'];
   $options['rows'] = 25;
   $options['cols'] = 60;
   $options['width'] = '100%';
   $options['height'] = '400px';
   $formular->addElement(new XoopsFormEditor(_KOU_ADMIN_NASTRANCE, $options['name'], $options, $nohtml = false, $onfailure = 'textarea'), true);

   $options_tray = new XoopsFormElementTray(_KOU_ADMIN_DALSI_MOZNOSTI,'<br />');// Blok predvoleb vlastnosti textu

   $html_checkbox = new XoopsFormCheckBox( '', 'form_html', $html );            // Povolit zpracovani HTML?
   $html_checkbox -> addOption( 1, _KOU_ADMIN_DOHTML );
   $options_tray -> addElement( $html_checkbox );

   $smiley_checkbox = new XoopsFormCheckBox( '', 'form_smiley', $smiley );      // Povolit zpracovani smajliku? (zobrazi se obrazkove)
   $smiley_checkbox -> addOption( 1, _KOU_ADMIN_DOSMILEY );
   $options_tray -> addElement( $smiley_checkbox );

   $xcodes_checkbox = new XoopsFormCheckBox( '', 'form_xcodes', $xcodes );      // Povolit XoopsCode?
   $xcodes_checkbox -> addOption( 1, _KOU_ADMIN_DOXCODE );
   $options_tray -> addElement( $xcodes_checkbox );

   $breaks_checkbox = new XoopsFormCheckBox( '', 'form_breaks', $breaks );      // POvolit zalamovani radek (funkce nl2br)
   $breaks_checkbox -> addOption( 1, _KOU_ADMIN_BREAKS );
   $options_tray -> addElement( $breaks_checkbox );

   $images_checkbox = new XoopsFormCheckBox( '', 'form_images', $images );      // Povolit zobrazeni obrazku vlozenych pres formular?
   $images_checkbox -> addOption( 1, _KOU_ADMIN_IMAGES );
   $options_tray -> addElement( $images_checkbox );

   $formular -> addElement( $options_tray );                                    // Predani bloku systemu a jeho zobrazeni

   $formular->addElement(new XoopsFormHidden('form_co', 'zmena'), false);       // Vlozeni skryteho prvku
   $formular->addElement(new XoopsFormButton('', 'save', _KOU_ADMIN_ULOZIT, 'submit'));   // Vlozeni tlacitka (popis v øádku, jméno, popis tlaèítka, typ (stejné jako HTML))
   $formular->display();                                                        // Predani formulare systemu a jeho zobrazeni

   xoops_cp_footer();
}
// -----------------------------------------------------------------------------------------------------------------------

?>