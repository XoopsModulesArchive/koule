<?php

// -----------------[ Hlavicka souboru, vlozeni systemovych prostredku ]--------

include 'header.php';                                                           // Vlozeni hlavisky, v te jsou systemove prostredky

xoops_cp_header();
kou_adminmenu(100000);

?>

<table border="0" cellspacing="1" style="width: 100%;" class="outer">
   <tr>
       <th colspan="2">Nápovìda</th>
   </tr>
   <tr>
       <td class="head" width="200">Karta "Pøehled"</td>
       <td class="odd">Tato èást zobrazuje struèný pøehled nastavení modulu.</td>
   </tr>
   <tr>
      <td class="head" width="200">Karta "Nastavení textù"</td>
      <td class="odd">V této èásti mìní texty, které modul zobrazuje. Jednak text zobrazený v bloku a pak text, který se zobrazí po kliknutí na text v bloku.</td>
   </tr>
   <tr>
      <td class="head" width="200">Pøedvolby</td>
      <td class="odd">Tato èást obsahuje takové volby, které se mìní jen obèas, zpravidla jen po instalaci modulu.</td>
   </tr>
   <tr>
      <td class="head" width="200">Nápovìda</td>
      <td class="odd">Tento text.</td>
   </tr>
   <tr>
      <td class="head" width="200">O modulu</td>
      <td class="odd">Informace o modulu, jeho verzi, autorce a podobnì.</td>
   </tr></table>


<?php

xoops_cp_footer();

?>