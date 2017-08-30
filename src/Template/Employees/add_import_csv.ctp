<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Employees'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<?= $this->Form->create($employee, array( 'type' => 'file')) ?>
<table width=500 border="0" align="center" bordercolor="#333333" bgcolor="#666666">
  <tr>
    <td width="131" align="center" nowrap="nowrap" bgcolor="#FFFFCC"><font color="#0000FF"><strong>読込ファイル</strong></font></td>
    <td width="128" align="center" valign="middle" nowrap="nowrap" bgcolor="#FFFFCC">
      <BLOCKQUOTE>
        <INPUT TYPE="file" NAME="file"></BLOCKQUOTE>    </td>
    <td width="129" align="center" bgcolor="#FFFFCC">
        <label><input type="submit" name="button" id="button" value="CSV取込" /></label>
    </td>
  </tr>
</table>
<br>
<?= $this->Form->end() ?>
