<?php

// -----------------[ Hlavicka souboru, vlozeni systemovych prostredku ]--------

include 'header.php';                                                           // Vlozeni hlavisky, v te jsou systemove prostredky

xoops_cp_header();
kou_adminmenu(100000);

?>

<table border="0" cellspacing="1" style="width: 100%;" class="outer">
   <tr>
       <th colspan="2">N�pov�da</th>
   </tr>
   <tr>
       <td class="head" width="200">Karta "P�ehled"</td>
       <td class="odd">Tato ��st zobrazuje stru�n� p�ehled nastaven� modulu.</td>
   </tr>
   <tr>
      <td class="head" width="200">Karta "Nastaven� text�"</td>
      <td class="odd">V t�to ��sti m�n� texty, kter� modul zobrazuje. Jednak text zobrazen� v bloku a pak text, kter� se zobraz� po kliknut� na text v bloku.</td>
   </tr>
   <tr>
      <td class="head" width="200">P�edvolby</td>
      <td class="odd">Tato ��st obsahuje takov� volby, kter� se m�n� jen ob�as, zpravidla jen po instalaci modulu.</td>
   </tr>
   <tr>
      <td class="head" width="200">N�pov�da</td>
      <td class="odd">Tento text.</td>
   </tr>
   <tr>
      <td class="head" width="200">O modulu</td>
      <td class="odd">Informace o modulu, jeho verzi, autorce a podobn�.</td>
   </tr></table>


<?php

xoops_cp_footer();

?>