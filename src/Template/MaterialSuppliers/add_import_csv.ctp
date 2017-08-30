<table style="margin-bottom:0px" width="800" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#E6FFFF">
<tr>
<?php $i = 0; ?>
<?php foreach ($imgSubObj as $key => $val): ?>
          <?php if($i == 6){echo "</tr>\n<tr>\n";} ?>
          <td align="center"><a href="<?= $val ?>"><img src="/img/<?= $key ?>" width="120" height="36" alt="<?= $val ?>"></a></td>
      <?php $i++; ?>
<?php endforeach; ?>
</tr>
</table>
<?= $this->Form->create($materialSupplier, array( 'type' => 'file')) ?>
<table style="margin-bottom:0px" width="500" border="0" align="center" cellpadding="0" cellspacing="0" bordercolor="#CCCCCC">
  <tr>
    <td width="250" align="center"  nowrap="nowrap" bgcolor="#FFFFCC">
      <BLOCKQUOTE><INPUT TYPE="file" NAME="file"></BLOCKQUOTE>
    </td>
    <td width="250" align="center" bgcolor="#FFFFCC">
        <label><input type="submit" name="button" id="button" value="CSV取込" /></label>
    </td>
  </tr>
</table>
<?= $this->Form->end() ?>
