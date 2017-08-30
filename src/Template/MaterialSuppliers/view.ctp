<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\MaterialSupplier $materialSupplier
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Material Supplier'), ['action' => 'edit', $materialSupplier->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Material Supplier'), ['action' => 'delete', $materialSupplier->id], ['confirm' => __('Are you sure you want to delete # {0}?', $materialSupplier->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Material Suppliers'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Material Supplier'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Materials'), ['controller' => 'Materials', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Material'), ['controller' => 'Materials', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="materialSuppliers view large-9 medium-8 columns content">
    <h3><?= h($materialSupplier->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($materialSupplier->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($materialSupplier->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($materialSupplier->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tel') ?></th>
            <td><?= h($materialSupplier->tel) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fax') ?></th>
            <td><?= h($materialSupplier->fax) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Charge P') ?></th>
            <td><?= h($materialSupplier->charge_p) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created Emp Code') ?></th>
            <td><?= h($materialSupplier->created_emp_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated Emp Code') ?></th>
            <td><?= h($materialSupplier->updated_emp_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Supplier Code') ?></th>
            <td><?= $this->Number->format($materialSupplier->supplier_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delete Flag') ?></th>
            <td><?= $this->Number->format($materialSupplier->delete_flag) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= h($materialSupplier->created_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated At') ?></th>
            <td><?= h($materialSupplier->updated_at) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Materials') ?></h4>
        <?php if (!empty($materialSupplier->materials)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Grade') ?></th>
                <th scope="col"><?= __('Color Num') ?></th>
                <th scope="col"><?= __('Tourokubi') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Lot Low') ?></th>
                <th scope="col"><?= __('Lot Upper') ?></th>
                <th scope="col"><?= __('Material Supplier Id') ?></th>
                <th scope="col"><?= __('Delete Flag') ?></th>
                <th scope="col"><?= __('Created Emp Code') ?></th>
                <th scope="col"><?= __('Created At') ?></th>
                <th scope="col"><?= __('Updated Emp Code') ?></th>
                <th scope="col"><?= __('Updated At') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($materialSupplier->materials as $materials): ?>
            <tr>
                <td><?= h($materials->id) ?></td>
                <td><?= h($materials->grade) ?></td>
                <td><?= h($materials->color_num) ?></td>
                <td><?= h($materials->tourokubi) ?></td>
                <td><?= h($materials->price) ?></td>
                <td><?= h($materials->lot_low) ?></td>
                <td><?= h($materials->lot_upper) ?></td>
                <td><?= h($materials->material_supplier_id) ?></td>
                <td><?= h($materials->delete_flag) ?></td>
                <td><?= h($materials->created_emp_code) ?></td>
                <td><?= h($materials->created_at) ?></td>
                <td><?= h($materials->updated_emp_code) ?></td>
                <td><?= h($materials->updated_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Materials', 'action' => 'view', $materials->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Materials', 'action' => 'edit', $materials->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Materials', 'action' => 'delete', $materials->id], ['confirm' => __('Are you sure you want to delete # {0}?', $materials->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
