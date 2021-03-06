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
                ['action' => 'delete', $material->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $material->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Materials'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Material Suppliers'), ['controller' => 'MaterialSuppliers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Material Supplier'), ['controller' => 'MaterialSuppliers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="materials form large-9 medium-8 columns content">
    <?= $this->Form->create($material) ?>
    <fieldset>
        <legend><?= __('Edit Material') ?></legend>
        <?php
            echo $this->Form->control('grade');
            echo $this->Form->control('color_num');
            echo $this->Form->control('tourokubi');
            echo $this->Form->control('price');
            echo $this->Form->control('lot_low');
            echo $this->Form->control('lot_upper');
            echo $this->Form->control('material_supplier_id', ['options' => $materialSuppliers]);
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
