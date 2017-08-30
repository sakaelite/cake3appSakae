<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Material $material
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Material'), ['action' => 'edit', $material->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Material'), ['action' => 'delete', $material->id], ['confirm' => __('Are you sure you want to delete # {0}?', $material->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Materials'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Material'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Material Suppliers'), ['controller' => 'MaterialSuppliers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Material Supplier'), ['controller' => 'MaterialSuppliers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="materials view large-9 medium-8 columns content">
    <h3><?= h($material->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($material->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Grade') ?></th>
            <td><?= h($material->grade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Color Num') ?></th>
            <td><?= h($material->color_num) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Material Supplier') ?></th>
            <td><?= $material->has('material_supplier') ? $this->Html->link($material->material_supplier->id, ['controller' => 'MaterialSuppliers', 'action' => 'view', $material->material_supplier->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created Emp Code') ?></th>
            <td><?= h($material->created_emp_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated Emp Code') ?></th>
            <td><?= h($material->updated_emp_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($material->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lot Low') ?></th>
            <td><?= $this->Number->format($material->lot_low) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lot Upper') ?></th>
            <td><?= $this->Number->format($material->lot_upper) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delete Flag') ?></th>
            <td><?= $this->Number->format($material->delete_flag) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tourokubi') ?></th>
            <td><?= h($material->tourokubi) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= h($material->created_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated At') ?></th>
            <td><?= h($material->updated_at) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Products') ?></h4>
        <?php if (!empty($material->products)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Product Code') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Basic Weight') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Customer Id') ?></th>
                <th scope="col"><?= __('Material Id') ?></th>
                <th scope="col"><?= __('Grade') ?></th>
                <th scope="col"><?= __('Color') ?></th>
                <th scope="col"><?= __('Torisu') ?></th>
                <th scope="col"><?= __('Cycle') ?></th>
                <th scope="col"><?= __('Primary P') ?></th>
                <th scope="col"><?= __('Gaityu') ?></th>
                <th scope="col"><?= __('Genjyou') ?></th>
                <th scope="col"><?= __('Delete Flag') ?></th>
                <th scope="col"><?= __('Created Emp Code') ?></th>
                <th scope="col"><?= __('Created At') ?></th>
                <th scope="col"><?= __('Updated Emp Code') ?></th>
                <th scope="col"><?= __('Updated At') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($material->products as $products): ?>
            <tr>
                <td><?= h($products->id) ?></td>
                <td><?= h($products->product_code) ?></td>
                <td><?= h($products->name) ?></td>
                <td><?= h($products->basic_weight) ?></td>
                <td><?= h($products->price) ?></td>
                <td><?= h($products->customer_id) ?></td>
                <td><?= h($products->material_id) ?></td>
                <td><?= h($products->grade) ?></td>
                <td><?= h($products->color) ?></td>
                <td><?= h($products->torisu) ?></td>
                <td><?= h($products->cycle) ?></td>
                <td><?= h($products->primary_p) ?></td>
                <td><?= h($products->gaityu) ?></td>
                <td><?= h($products->genjyou) ?></td>
                <td><?= h($products->delete_flag) ?></td>
                <td><?= h($products->created_emp_code) ?></td>
                <td><?= h($products->created_at) ?></td>
                <td><?= h($products->updated_emp_code) ?></td>
                <td><?= h($products->updated_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Products', 'action' => 'view', $products->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Products', 'action' => 'edit', $products->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Products', 'action' => 'delete', $products->id], ['confirm' => __('Are you sure you want to delete # {0}?', $products->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
