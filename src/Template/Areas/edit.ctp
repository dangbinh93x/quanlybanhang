<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns">
    <br>
    <div class="col-sm-4"><?= $this->Html->link(__('Trở về'), ['action' => 'index'], ['class' => 'button']) ?></div>
</nav>

<div class="areas form large-9 medium-8 columns content">
    <?= $this->Form->create($area) ?>
    <fieldset>
        <legend><?= __('Chỉnh sửa Khu Vực') ?></legend>
        <?php
            echo $this->Form->control('area_name',['label'=>'Tên Khu Vực']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Xác Nhận')) ?>
    <?= $this->Form->end() ?>
</div>
