<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Product[]|\Cake\Collection\CollectionInterface $products
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?></li>
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
<div class="products index large-9 medium-8 columns content">
    <h3><?= __('Products') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('product_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('basic_weight') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('customer_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('material_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('grade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('color') ?></th>
                <th scope="col"><?= $this->Paginator->sort('torisu') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cycle') ?></th>
                <th scope="col"><?= $this->Paginator->sort('primary_p') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gaityu') ?></th>
                <th scope="col"><?= $this->Paginator->sort('genjyou') ?></th>
                <th scope="col"><?= $this->Paginator->sort('delete_flag') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_emp_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated_emp_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated_at') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
            <tr>
                <td><?= h($product->id) ?></td>
                <td><?= h($product->product_code) ?></td>
                <td><?= h($product->name) ?></td>
                <td><?= $this->Number->format($product->basic_weight) ?></td>
                <td><?= $this->Number->format($product->price) ?></td>
                <td><?= $product->has('customer') ? $this->Html->link($product->customer->name, ['controller' => 'Customers', 'action' => 'view', $product->customer->id]) : '' ?></td>
                <td><?= $product->has('material') ? $this->Html->link($product->material->id, ['controller' => 'Materials', 'action' => 'view', $product->material->id]) : '' ?></td>
                <td><?= h($product->grade) ?></td>
                <td><?= h($product->color) ?></td>
                <td><?= $this->Number->format($product->torisu) ?></td>
                <td><?= $this->Number->format($product->cycle) ?></td>
                <td><?= $this->Number->format($product->primary_p) ?></td>
                <td><?= $this->Number->format($product->gaityu) ?></td>
                <td><?= $this->Number->format($product->genjyou) ?></td>
                <td><?= $this->Number->format($product->delete_flag) ?></td>
                <td><?= h($product->created_emp_code) ?></td>
                <td><?= h($product->created_at) ?></td>
                <td><?= h($product->updated_emp_code) ?></td>
                <td><?= h($product->updated_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $product->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $product->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
