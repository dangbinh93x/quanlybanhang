<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns">
    <br>
    <div class="col-sm-4"><?= $this->Html->link(__('Danh sách Khách hàng'), ['action' => 'index'], ['class' => 'button']) ?></div>
</nav>
<div class="customers form large-9 medium-8 columns content">
    <?= $this->Form->create($customer) ?>
    <fieldset>
        <legend><?= __('Add Customer') ?></legend>
        <?php
            echo $this->Form->control('customer_name',['label'=>'Tên Khách Hàng']);
            echo $this->Form->control('area_id', ['options' => $areas,'label'=>'Khu Vực']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Xác Nhận')) ?>
    <?= $this->Form->end() ?>
</div>
