<?php

// -----------------[ Hlavicka souboru, vlozeni systemovych prostredku ]--------

include 'header.php';                                                           // Vlozeni hlavisky, v te jsou systemove prostredky

xoops_cp_header();
kou_adminmenu(100000);

?>

<table border="0" cellspacing="1" style="width: 100%;" class="outer">
    <tr>
        <th><?php echo _KOU_ADMIN_ABOUTABOUT; ?></th>
    </tr>
    <tr>
        <td class="odd">Tento modul slou�� informov�n� �ten��� o tom, co se na str�nk�ch p�ipravuje.</td>
    </tr>
</table>

<br />
<table border="0" cellspacing="1" style="width: 100%" class="outer">
    <tr>
        <th colspan="2">Informace o verzi</th>
    </tr>
    <tr>
        <td class="head" width="100">Verze:</td>
        <td class="odd"> <?php echo round($xoopsModule->getVar('version')/100 , 2); ?></td>
    </tr>
    <tr>
        <td class="head" width="100">Licence:</td>
        <td class="odd">GNU/GPL Cel� text naleznete v instala�n�m archivu jak v angli�tin�, tak v �e�tin�.</td>
    </tr>
</table>

<br />
<table border="0" cellspacing="1" style="width: 100%;" class="outer">
   <tr>
       <th colspan="2">Podpora, koment��e a n�vrhy na vylep�en�</th>
   </tr>
   <tr>
       <td class="head" width="100">E-mail:</td>
       <td class="odd">Pokud mi chcete poslat email, je ide�ln� pou��t <a href="http://www.zirafoviny.cz/modules/contact/" target="_blank">kontaktn� formul��</a> p��mo na m�m webu.</td>
  </tr>
  <tr>
      <td class="head" width="100">Pozn�mka:</td>
	    <td class="odd">Ne� m� budete kontaktovat, projd�te si, pros�m, m�j web, p��padn� diskusn� f�rum, koment��e �i �l�nky. M��e se toti� st�t, �e se n�kdo na V� probl�m ji� ptal a tak najdete �e�en� rychleji.	</td>
  </tr>
</table>

<br />
<table border="0" cellspacing="1" style="width: 100%;" class="outer">
   <tr>
       <th colspan="2">Titulky</th>
   </tr>
   <tr>
       <td class="head" width="100">Autorka:</td>
       <td class="odd">Sa�a Svobodov� - �irafka</td>
  </tr>
  <tr>
      <td class="head" width="100">WWW:</td>
      <td class="odd"><a href="http://www.zirafoviny.cz/modules/contact/" target="_blank">www.zirafoviny.cz</a></td>
  </tr>
</table>

<br />
<table border="0" cellspacing="1" style="width: 100%;" class="outer">
   <tr>
       <th>Zm�ny ve verz�ch</th>
   </tr>
   <tr>
       <td class="odd">
       <b>Verze 1.1</b>
       <ul><li>opraveno n�kolik drobn�ch chyb v administraci</li></ul>
       </td>
   </tr>
   <tr>
       <td class="odd">
       <b>Verze 1.0</b>
       <ul><li>prvn� hotov� a publikovan� verze</li></ul>
       </td>
   </tr>
</table>

<?php

xoops_cp_footer();

?>