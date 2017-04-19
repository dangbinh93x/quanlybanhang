<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns">
    <br>
    <div class="col-sm-4"><?= $this->Html->link(__('Trở Về'), ['action' => 'index'], ['class' => 'button']) ?></div>
</nav>

<div class="products form large-9 medium-8 columns content">
    <?= $this->Form->create($product) ?>
    <fieldset>
        <legend><?= __('Thêm Sản Phẩm Mới') ?></legend>
        <?php
            echo $this->Form->control('product_name',['label' => 'Tên Sản Phẩm']);
            echo $this->Form->control('product_price',['label' => 'Đơn Giá']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
