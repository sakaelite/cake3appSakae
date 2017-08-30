<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\Product $product
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Product'), ['action' => 'edit', $product->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Product'), ['action' => 'delete', $product->id], ['confirm' => __('Are you sure you want to delete # {0}?', $product->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Materials'), ['controller' => 'Materials', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Material'), ['controller' => 'Materials', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Katakouzous'), ['controller' => 'Katakouzous', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Katakouzous'), ['controller' => 'Katakouzous', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Kensahyou Heads'), ['controller' => 'KensahyouHeads', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Kensahyou Head'), ['controller' => 'KensahyouHeads', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Konpous'), ['controller' => 'Konpous', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Konpous'), ['controller' => 'Konpous', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Label Insideouts'), ['controller' => 'LabelInsideouts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Label Insideout'), ['controller' => 'LabelInsideouts', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Label Type Products'), ['controller' => 'LabelTypeProducts', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Label Type Product'), ['controller' => 'LabelTypeProducts', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="products view large-9 medium-8 columns content">
    <h3><?= h($product->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($product->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Product Code') ?></th>
            <td><?= h($product->product_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($product->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Customer') ?></th>
            <td><?= $product->has('customer') ? $this->Html->link($product->customer->name, ['controller' => 'Customers', 'action' => 'view', $product->customer->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Material') ?></th>
            <td><?= $product->has('material') ? $this->Html->link($product->material->id, ['controller' => 'Materials', 'action' => 'view', $product->material->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Grade') ?></th>
            <td><?= h($product->grade) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Color') ?></th>
            <td><?= h($product->color) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created Emp Code') ?></th>
            <td><?= h($product->created_emp_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated Emp Code') ?></th>
            <td><?= h($product->updated_emp_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Basic Weight') ?></th>
            <td><?= $this->Number->format($product->basic_weight) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($product->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Torisu') ?></th>
            <td><?= $this->Number->format($product->torisu) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Cycle') ?></th>
            <td><?= $this->Number->format($product->cycle) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Primary P') ?></th>
            <td><?= $this->Number->format($product->primary_p) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gaityu') ?></th>
            <td><?= $this->Number->format($product->gaityu) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Genjyou') ?></th>
            <td><?= $this->Number->format($product->genjyou) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delete Flag') ?></th>
            <td><?= $this->Number->format($product->delete_flag) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= h($product->created_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated At') ?></th>
            <td><?= h($product->updated_at) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Katakouzous') ?></h4>
        <?php if (!empty($product->katakouzous)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Product Id') ?></th>
                <th scope="col"><?= __('Kataban') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Katakanbi') ?></th>
                <th scope="col"><?= __('Torisu') ?></th>
                <th scope="col"><?= __('Set Tori') ?></th>
                <th scope="col"><?= __('Mizukairo Num') ?></th>
                <th scope="col"><?= __('Anakei') ?></th>
                <th scope="col"><?= __('Anaichi') ?></th>
                <th scope="col"><?= __('Analength') ?></th>
                <th scope="col"><?= __('Mizuhoushiki') ?></th>
                <th scope="col"><?= __('Corepin Kei') ?></th>
                <th scope="col"><?= __('Kouzou Bik') ?></th>
                <th scope="col"><?= __('Delete Flag') ?></th>
                <th scope="col"><?= __('Created Emp Code') ?></th>
                <th scope="col"><?= __('Created At') ?></th>
                <th scope="col"><?= __('Updated Emp Code') ?></th>
                <th scope="col"><?= __('Updated At') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($product->katakouzous as $katakouzous): ?>
            <tr>
                <td><?= h($katakouzous->id) ?></td>
                <td><?= h($katakouzous->product_id) ?></td>
                <td><?= h($katakouzous->kataban) ?></td>
                <td><?= h($katakouzous->status) ?></td>
                <td><?= h($katakouzous->katakanbi) ?></td>
                <td><?= h($katakouzous->torisu) ?></td>
                <td><?= h($katakouzous->set_tori) ?></td>
                <td><?= h($katakouzous->mizukairo_num) ?></td>
                <td><?= h($katakouzous->anakei) ?></td>
                <td><?= h($katakouzous->anaichi) ?></td>
                <td><?= h($katakouzous->analength) ?></td>
                <td><?= h($katakouzous->mizuhoushiki) ?></td>
                <td><?= h($katakouzous->corepin_kei) ?></td>
                <td><?= h($katakouzous->kouzou_bik) ?></td>
                <td><?= h($katakouzous->delete_flag) ?></td>
                <td><?= h($katakouzous->created_emp_code) ?></td>
                <td><?= h($katakouzous->created_at) ?></td>
                <td><?= h($katakouzous->updated_emp_code) ?></td>
                <td><?= h($katakouzous->updated_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Katakouzous', 'action' => 'view', $katakouzous->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Katakouzous', 'action' => 'edit', $katakouzous->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Katakouzous', 'action' => 'delete', $katakouzous->id], ['confirm' => __('Are you sure you want to delete # {0}?', $katakouzous->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Kensahyou Heads') ?></h4>
        <?php if (!empty($product->kensahyou_heads)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Product Id') ?></th>
                <th scope="col"><?= __('Size 1') ?></th>
                <th scope="col"><?= __('Upper 1') ?></th>
                <th scope="col"><?= __('Lower 1') ?></th>
                <th scope="col"><?= __('Size 2') ?></th>
                <th scope="col"><?= __('Upper 2') ?></th>
                <th scope="col"><?= __('Lower 2') ?></th>
                <th scope="col"><?= __('Size 3') ?></th>
                <th scope="col"><?= __('Upper 3') ?></th>
                <th scope="col"><?= __('Lower 3') ?></th>
                <th scope="col"><?= __('Size 4') ?></th>
                <th scope="col"><?= __('Upper 4') ?></th>
                <th scope="col"><?= __('Lower 4') ?></th>
                <th scope="col"><?= __('Size 5') ?></th>
                <th scope="col"><?= __('Upper 5') ?></th>
                <th scope="col"><?= __('Lower 5') ?></th>
                <th scope="col"><?= __('Size 6') ?></th>
                <th scope="col"><?= __('Upper 6') ?></th>
                <th scope="col"><?= __('Lower 6') ?></th>
                <th scope="col"><?= __('Size 7') ?></th>
                <th scope="col"><?= __('Upper 7') ?></th>
                <th scope="col"><?= __('Lower 7') ?></th>
                <th scope="col"><?= __('Size 8') ?></th>
                <th scope="col"><?= __('Upper 8') ?></th>
                <th scope="col"><?= __('Lower 8') ?></th>
                <th scope="col"><?= __('Size 9') ?></th>
                <th scope="col"><?= __('Text 10') ?></th>
                <th scope="col"><?= __('Text 11') ?></th>
                <th scope="col"><?= __('Bik') ?></th>
                <th scope="col"><?= __('Delete Flag') ?></th>
                <th scope="col"><?= __('Created Emp Id') ?></th>
                <th scope="col"><?= __('Created At') ?></th>
                <th scope="col"><?= __('Updated Emp Id') ?></th>
                <th scope="col"><?= __('Updated At') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($product->kensahyou_heads as $kensahyouHeads): ?>
            <tr>
                <td><?= h($kensahyouHeads->id) ?></td>
                <td><?= h($kensahyouHeads->product_id) ?></td>
                <td><?= h($kensahyouHeads->size_1) ?></td>
                <td><?= h($kensahyouHeads->upper_1) ?></td>
                <td><?= h($kensahyouHeads->lower_1) ?></td>
                <td><?= h($kensahyouHeads->size_2) ?></td>
                <td><?= h($kensahyouHeads->upper_2) ?></td>
                <td><?= h($kensahyouHeads->lower_2) ?></td>
                <td><?= h($kensahyouHeads->size_3) ?></td>
                <td><?= h($kensahyouHeads->upper_3) ?></td>
                <td><?= h($kensahyouHeads->lower_3) ?></td>
                <td><?= h($kensahyouHeads->size_4) ?></td>
                <td><?= h($kensahyouHeads->upper_4) ?></td>
                <td><?= h($kensahyouHeads->lower_4) ?></td>
                <td><?= h($kensahyouHeads->size_5) ?></td>
                <td><?= h($kensahyouHeads->upper_5) ?></td>
                <td><?= h($kensahyouHeads->lower_5) ?></td>
                <td><?= h($kensahyouHeads->size_6) ?></td>
                <td><?= h($kensahyouHeads->upper_6) ?></td>
                <td><?= h($kensahyouHeads->lower_6) ?></td>
                <td><?= h($kensahyouHeads->size_7) ?></td>
                <td><?= h($kensahyouHeads->upper_7) ?></td>
                <td><?= h($kensahyouHeads->lower_7) ?></td>
                <td><?= h($kensahyouHeads->size_8) ?></td>
                <td><?= h($kensahyouHeads->upper_8) ?></td>
                <td><?= h($kensahyouHeads->lower_8) ?></td>
                <td><?= h($kensahyouHeads->size_9) ?></td>
                <td><?= h($kensahyouHeads->text_10) ?></td>
                <td><?= h($kensahyouHeads->text_11) ?></td>
                <td><?= h($kensahyouHeads->bik) ?></td>
                <td><?= h($kensahyouHeads->delete_flag) ?></td>
                <td><?= h($kensahyouHeads->created_emp_id) ?></td>
                <td><?= h($kensahyouHeads->created_at) ?></td>
                <td><?= h($kensahyouHeads->updated_emp_id) ?></td>
                <td><?= h($kensahyouHeads->updated_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'KensahyouHeads', 'action' => 'view', $kensahyouHeads->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'KensahyouHeads', 'action' => 'edit', $kensahyouHeads->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'KensahyouHeads', 'action' => 'delete', $kensahyouHeads->id], ['confirm' => __('Are you sure you want to delete # {0}?', $kensahyouHeads->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Konpous') ?></h4>
        <?php if (!empty($product->konpous)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Product Id') ?></th>
                <th scope="col"><?= __('Irisu') ?></th>
                <th scope="col"><?= __('Id Box') ?></th>
                <th scope="col"><?= __('Delete Flag') ?></th>
                <th scope="col"><?= __('Created Emp Id') ?></th>
                <th scope="col"><?= __('Created At') ?></th>
                <th scope="col"><?= __('Updated Emp Id') ?></th>
                <th scope="col"><?= __('Updated At') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($product->konpous as $konpous): ?>
            <tr>
                <td><?= h($konpous->id) ?></td>
                <td><?= h($konpous->product_id) ?></td>
                <td><?= h($konpous->irisu) ?></td>
                <td><?= h($konpous->id_box) ?></td>
                <td><?= h($konpous->delete_flag) ?></td>
                <td><?= h($konpous->created_emp_id) ?></td>
                <td><?= h($konpous->created_at) ?></td>
                <td><?= h($konpous->updated_emp_id) ?></td>
                <td><?= h($konpous->updated_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Konpous', 'action' => 'view', $konpous->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Konpous', 'action' => 'edit', $konpous->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Konpous', 'action' => 'delete', $konpous->id], ['confirm' => __('Are you sure you want to delete # {0}?', $konpous->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Label Insideouts') ?></h4>
        <?php if (!empty($product->label_insideouts)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Product Id') ?></th>
                <th scope="col"><?= __('Num Inside') ?></th>
                <th scope="col"><?= __('Created Emp Id') ?></th>
                <th scope="col"><?= __('Created At') ?></th>
                <th scope="col"><?= __('Updated Emp Id') ?></th>
                <th scope="col"><?= __('Updated At') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($product->label_insideouts as $labelInsideouts): ?>
            <tr>
                <td><?= h($labelInsideouts->id) ?></td>
                <td><?= h($labelInsideouts->product_id) ?></td>
                <td><?= h($labelInsideouts->num_inside) ?></td>
                <td><?= h($labelInsideouts->created_emp_id) ?></td>
                <td><?= h($labelInsideouts->created_at) ?></td>
                <td><?= h($labelInsideouts->updated_emp_id) ?></td>
                <td><?= h($labelInsideouts->updated_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'LabelInsideouts', 'action' => 'view', $labelInsideouts->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'LabelInsideouts', 'action' => 'edit', $labelInsideouts->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'LabelInsideouts', 'action' => 'delete', $labelInsideouts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $labelInsideouts->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Label Type Products') ?></h4>
        <?php if (!empty($product->label_type_products)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Product Id') ?></th>
                <th scope="col"><?= __('Label Type Id') ?></th>
                <th scope="col"><?= __('Label Element Place Id') ?></th>
                <th scope="col"><?= __('Label Element Unit Id') ?></th>
                <th scope="col"><?= __('Delete Flag') ?></th>
                <th scope="col"><?= __('Created Emp Code') ?></th>
                <th scope="col"><?= __('Created At') ?></th>
                <th scope="col"><?= __('Updated Emp Code') ?></th>
                <th scope="col"><?= __('Updated At') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($product->label_type_products as $labelTypeProducts): ?>
            <tr>
                <td><?= h($labelTypeProducts->id) ?></td>
                <td><?= h($labelTypeProducts->product_id) ?></td>
                <td><?= h($labelTypeProducts->label_type_id) ?></td>
                <td><?= h($labelTypeProducts->label_element_place_id) ?></td>
                <td><?= h($labelTypeProducts->label_element_unit_id) ?></td>
                <td><?= h($labelTypeProducts->delete_flag) ?></td>
                <td><?= h($labelTypeProducts->created_emp_code) ?></td>
                <td><?= h($labelTypeProducts->created_at) ?></td>
                <td><?= h($labelTypeProducts->updated_emp_code) ?></td>
                <td><?= h($labelTypeProducts->updated_at) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'LabelTypeProducts', 'action' => 'view', $labelTypeProducts->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'LabelTypeProducts', 'action' => 'edit', $labelTypeProducts->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'LabelTypeProducts', 'action' => 'delete', $labelTypeProducts->id], ['confirm' => __('Are you sure you want to delete # {0}?', $labelTypeProducts->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
