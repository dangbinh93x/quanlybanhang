<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" >
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Xóa Sản Phẩm Này'),
                ['action' => 'delete', $product->ID],
                ['confirm' => __('Có muốn xóa sản phẩm này # {0}?', $product->product_name)]
            )
        ?></li>
    </ul>
</nav>
<div class="products form large-9 medium-8 columns content">
    <?= $this->Form->create($product) ?>
    <fieldset>
        <legend><?= __('Chỉnh sửa sản phẩm') ?></legend>
        <?php
            echo $this->Form->control('product_name',['label'=>'Tên Sản Phẩm']);
            echo $this->Form->control('product_price',['label'=>'Đơn Giá']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Xác nhận')) ?>
    <?= $this->Form->end() ?>
</div>
