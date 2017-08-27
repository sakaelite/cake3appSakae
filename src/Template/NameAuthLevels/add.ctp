<!-- src/Template/NameAuthLevels/add.ctp -->

<div class="name_auth_levels form">
<?= $this->Form->create($name_auth_levels) ?>
    <fieldset>
        <legend><?= __('Add NameAuthLevel') ?></legend>
        <?= $this->Form->control('name') ?>
        <?= $this->Form->control('level1') ?>
        <?= $this->Form->control('level2') ?>
   </fieldset>
<?= $this->Form->button(__('Submit')); ?>
<?= $this->Form->end() ?>
</div>