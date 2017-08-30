<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $materialSupplier->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $materialSupplier->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Material Suppliers'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Materials'), ['controller' => 'Materials', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Material'), ['controller' => 'Materials', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="materialSuppliers form large-9 medium-8 columns content">
    <?= $this->Form->create($materialSupplier) ?>
    <fieldset>
        <legend><?= __('Edit Material Supplier') ?></legend>
        <?php
            echo $this->Form->control('supplier_code');
            echo $this->Form->control('name');
            echo $this->Form->control('address');
            echo $this->Form->control('tel');
            echo $this->Form->control('fax');
            echo $this->Form->control('charge_p');
            echo $this->Form->control('delete_flag');
            echo $this->Form->control('created_emp_code');
            echo $this->Form->control('created_at', ['empty' => true]);
            echo $this->Form->control('updated_emp_code');
            echo $this->Form->control('updated_at', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
