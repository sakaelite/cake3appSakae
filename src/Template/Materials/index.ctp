<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Material[]|\Cake\Collection\CollectionInterface $materials
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Material'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Material Suppliers'), ['controller' => 'MaterialSuppliers', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Material Supplier'), ['controller' => 'MaterialSuppliers', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="materials index large-9 medium-8 columns content">
    <h3><?= __('Materials') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('grade') ?></th>
                <th scope="col"><?= $this->Paginator->sort('color_num') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tourokubi') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lot_low') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lot_upper') ?></th>
                <th scope="col"><?= $this->Paginator->sort('material_supplier_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('delete_flag') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_emp_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated_emp_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated_at') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($materials as $material): ?>
            <tr>
                <td><?= h($material->id) ?></td>
                <td><?= h($material->grade) ?></td>
                <td><?= h($material->color_num) ?></td>
                <td><?= h($material->tourokubi) ?></td>
                <td><?= $this->Number->format($material->price) ?></td>
                <td><?= $this->Number->format($material->lot_low) ?></td>
                <td><?= $this->Number->format($material->lot_upper) ?></td>
                <td><?= $material->has('material_supplier') ? $this->Html->link($material->material_supplier->id, ['controller' => 'MaterialSuppliers', 'action' => 'view', $material->material_supplier->id]) : '' ?></td>
                <td><?= $this->Number->format($material->delete_flag) ?></td>
                <td><?= h($material->created_emp_code) ?></td>
                <td><?= h($material->created_at) ?></td>
                <td><?= h($material->updated_emp_code) ?></td>
                <td><?= h($material->updated_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $material->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $material->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $material->id], ['confirm' => __('Are you sure you want to delete # {0}?', $material->id)]) ?>
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
