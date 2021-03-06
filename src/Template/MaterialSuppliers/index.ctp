<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\MaterialSupplier[]|\Cake\Collection\CollectionInterface $materialSuppliers
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Material Supplier'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Materials'), ['controller' => 'Materials', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Material'), ['controller' => 'Materials', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="materialSuppliers index large-9 medium-8 columns content">
    <h3><?= __('Material Suppliers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('supplier_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tel') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fax') ?></th>
                <th scope="col"><?= $this->Paginator->sort('charge_p') ?></th>
                <th scope="col"><?= $this->Paginator->sort('delete_flag') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_emp_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated_emp_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('updated_at') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($materialSuppliers as $materialSupplier): ?>
            <tr>
                <td><?= h($materialSupplier->id) ?></td>
                <td><?= $this->Number->format($materialSupplier->supplier_code) ?></td>
                <td><?= h($materialSupplier->name) ?></td>
                <td><?= h($materialSupplier->address) ?></td>
                <td><?= h($materialSupplier->tel) ?></td>
                <td><?= h($materialSupplier->fax) ?></td>
                <td><?= h($materialSupplier->charge_p) ?></td>
                <td><?= $this->Number->format($materialSupplier->delete_flag) ?></td>
                <td><?= h($materialSupplier->created_emp_code) ?></td>
                <td><?= h($materialSupplier->created_at) ?></td>
                <td><?= h($materialSupplier->updated_emp_code) ?></td>
                <td><?= h($materialSupplier->updated_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $materialSupplier->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $materialSupplier->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $materialSupplier->id], ['confirm' => __('Are you sure you want to delete # {0}?', $materialSupplier->id)]) ?>
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
