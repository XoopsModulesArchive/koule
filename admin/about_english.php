<?php

include 'header.php';

xoops_cp_header();
kou_adminmenu(100000);

?>

<table border="0" cellspacing="1" style="width: 100%;" class="outer">
    <tr>
        <th><?php echo _KOU_ADMIN_ABOUTABOUT; ?></th>
    </tr>
    <tr>
        <td class="odd">This module is informing readers about what the site preparation.</td>
    </tr>
</table>

<br />
<table border="0" cellspacing="1" style="width: 100%" class="outer">
    <tr>
        <th colspan="2">Version Information</th>
    </tr>
    <tr>
        <td class="head" width="100">Version:</td>
        <td class="odd"> <?php echo round($xoopsModule->getVar('version')/100 , 2); ?></td>
    </tr>
    <tr>
        <td class="head" width="100">Licence:</td>
        <td class="odd">GNU / GPL full text can be found in the installation archive.</td>
    </tr>
</table>

<br />
<table border="0" cellspacing="1" style="width: 100%;" class="outer">
   <tr>
       <th colspan="2">Support, comments and suggestions for improvements</th>
   </tr>
   <tr>
       <td class="head" width="100">E-mail:</td>
       <td class="odd">If you want to send email, it is ideal <a href="http://www.zirafoviny.cz/modules/contact/" target="_blank">to use the contact form </a> on my site.</td>
  </tr>
  <tr>
      <td class="head" width="100">Note:</td>
	    <td class="odd">Before you contact me, please review my website, or forum, comments or articles. It may happen that someone on your problem has already asked so you can find a solution quickly.</td>
  </tr>
</table>

<br />
<table border="0" cellspacing="1" style="width: 100%;" class="outer">
   <tr>
       <th colspan="2">Credits</th>
   </tr>
   <tr>
       <td class="head" width="100">Author:</td>
       <td class="odd">Sasa Svobodova aka Zirafka</td>
  </tr>
  <tr>
      <td class="head" width="100">WWW:</td>
      <td class="odd"><a href="http://www.zirafoviny.cz/modules/contact/" target="_blank">www.zirafoviny.cz</a></td>
  </tr>
</table>

<br />
<table border="0" cellspacing="1" style="width: 100%;" class="outer">
   <tr>
       <th>Changelog</th>
   </tr>
   <tr>
       <td class="odd">
       <b>Verze 1.1</b>
       <ul><li>Fixed several minor bugs</li></ul>
       </td>
   </tr>
   <tr>
       <td class="odd">
       <b>Verze 1.0</b>
       <ul><li>First finished and published version</li></ul>
       </td>
   </tr>
</table>

<?php

xoops_cp_footer();

?>