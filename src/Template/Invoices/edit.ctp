<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" >
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Xóa Hóa Đơn Này'),
                ['action' => 'delete', $invoice->ID],
                ['confirm' => __('Có Muốn Xóa # {0}?', $invoice->ID)]
            )
        ?></li>
    </ul>
</nav>
<div class="invoices form large-9 medium-8 columns content">
    <?= $this->Form->create($invoice) ?>
    <fieldset>
        <legend><?= __('Chỉnh sửa Hóa Đơn') ?></legend>
        <?php
            echo $this->Form->control('customer_id', ['options' => $customers]);
            echo $this->Form->control('product_id', ['options' => $products]);
            echo $this->Form->control('amount');
            echo $this->Form->control('discount');
            echo $this->Form->control('total');
            echo $this->Form->control('order_time');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
