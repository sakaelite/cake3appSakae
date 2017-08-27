<div>
    <h3>権限階層登録</h3>
    <?= $this->Form->create() ?>
    <fieldset>
    <?php  
        echo $this->FOrm->input('section_name');
        echo $this->FOrm->input('section_level');
    ?>    
    </fieldset>
    <?= $this->Form->button('Submit') ?>
    <?= $this->end() ?>
</div>