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
        <td class="odd">Tento modul slouží informování ètenáøù o tom, co se na stránkách pøipravuje.</td>
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
        <td class="odd">GNU/GPL Celý text naleznete v instalaèním archivu jak v angliètinì, tak v èeštinì.</td>
    </tr>
</table>

<br />
<table border="0" cellspacing="1" style="width: 100%;" class="outer">
   <tr>
       <th colspan="2">Podpora, komentáøe a návrhy na vylepšení</th>
   </tr>
   <tr>
       <td class="head" width="100">E-mail:</td>
       <td class="odd">Pokud mi chcete poslat email, je ideální použít <a href="http://www.zirafoviny.cz/modules/contact/" target="_blank">kontaktní formuláø</a> pøímo na mém webu.</td>
  </tr>
  <tr>
      <td class="head" width="100">Poznámka:</td>
	    <td class="odd">Než mì budete kontaktovat, projdìte si, prosím, mùj web, pøípadnì diskusní fórum, komentáøe èi èlánky. Mùže se totiž stát, že se nìkdo na Váš problém již ptal a tak najdete øešení rychleji.	</td>
  </tr>
</table>

<br />
<table border="0" cellspacing="1" style="width: 100%;" class="outer">
   <tr>
       <th colspan="2">Titulky</th>
   </tr>
   <tr>
       <td class="head" width="100">Autorka:</td>
       <td class="odd">Saša Svobodová - Žirafka</td>
  </tr>
  <tr>
      <td class="head" width="100">WWW:</td>
      <td class="odd"><a href="http://www.zirafoviny.cz/modules/contact/" target="_blank">www.zirafoviny.cz</a></td>
  </tr>
</table>

<br />
<table border="0" cellspacing="1" style="width: 100%;" class="outer">
   <tr>
       <th>Zmìny ve verzích</th>
   </tr>
   <tr>
       <td class="odd">
       <b>Verze 1.1</b>
       <ul><li>opraveno nìkolik drobných chyb v administraci</li></ul>
       </td>
   </tr>
   <tr>
       <td class="odd">
       <b>Verze 1.0</b>
       <ul><li>první hotová a publikovaná verze</li></ul>
       </td>
   </tr>
</table>

<?php

xoops_cp_footer();

?>