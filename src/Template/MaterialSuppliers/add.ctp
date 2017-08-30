<?php
/**
  * @var \App\View\AppView $this
  */
?>
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
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Material Suppliers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Materials'), ['controller' => 'Materials', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Material'), ['controller' => 'Materials', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="materialSuppliers form large-9 medium-8 columns content">
    <?= $this->Form->create($materialSupplier) ?>
    <fieldset>
        <legend><?= __('Add Material Supplier') ?></legend>
        <?php
            echo $this->Form->control('supplier_code');
            echo $this->Form->control('name');
            echo $this->Form->control('address');
            echo $this->Form->control('tel');
            echo $this->Form->control('fax');
            echo $this->Form->control('charge_p');

        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
