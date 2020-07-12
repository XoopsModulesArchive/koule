<?php

include 'header.php';

xoops_cp_header();
kou_adminmenu(100000);

?>

<table border="0" cellspacing="1" style="width: 100%;" class="outer">
   <tr>
       <th colspan="2">Nápovìda</th>
   </tr>
   <tr>
       <td class="head" width="200">"Index"</td>
       <td class="odd">This section displays a brief overview of the settings module.</td>
   </tr>
   <tr>
      <td class="head" width="200">"Set texts"</td>
      <td class="odd"> In this part of the amended text, which shows a module. First, the text displayed in the block and then the text that appears when you click on the text block.</td>
   </tr>
   <tr>
      <td class="head" width="200">Preferences</td>
      <td class="odd">This section contains such options, which change only occasionally, usually just after installing the module.</td>
   </tr>
   <tr>
      <td class="head" width="200">Help</td>
      <td class="odd">This help text.</td>
   </tr>
   <tr>
      <td class="head" width="200">About</td>
      <td class="odd">The information about the module, its version, author, and so on.</td>
   </tr></table>


<?php

xoops_cp_footer();

?>