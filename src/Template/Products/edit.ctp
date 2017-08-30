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
                ['action' => 'delete', $product->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Materials'), ['controller' => 'Materials', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Material'), ['controller' => 'Materials', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Katakouzous'), ['controller' => 'Katakouzous', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Katakouzous'), ['controller' => 'Katakouzous', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Kensahyou Heads'), ['controller' => 'KensahyouHeads', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Kensahyou Head'), ['controller' => 'KensahyouHeads', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Konpous'), ['controller' => 'Konpous', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Konpous'), ['controller' => 'Konpous', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Label Insideouts'), ['controller' => 'LabelInsideouts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Label Insideout'), ['controller' => 'LabelInsideouts', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Label Type Products'), ['controller' => 'LabelTypeProducts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Label Type Product'), ['controller' => 'LabelTypeProducts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="products form large-9 medium-8 columns content">
    <?= $this->Form->create($product) ?>
    <fieldset>
        <legend><?= __('Edit Product') ?></legend>
        <?php
            echo $this->Form->control('product_code');
            echo $this->Form->control('name');
            echo $this->Form->control('basic_weight');
            echo $this->Form->control('price');
            echo $this->Form->control('customer_id', ['options' => $customers]);
            echo $this->Form->control('material_id', ['options' => $materials, 'empty' => true]);
            echo $this->Form->control('grade');
            echo $this->Form->control('color');
            echo $this->Form->control('torisu');
            echo $this->Form->control('cycle');
            echo $this->Form->control('primary_p');
            echo $this->Form->control('gaityu');
            echo $this->Form->control('genjyou');
            echo $this->Form->control('delete_flag');
            echo $this->Form->control('created_emp_code');
            echo $this->Form->control('created_at');
            echo $this->Form->control('updated_emp_code');
            echo $this->Form->control('updated_at', ['empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
