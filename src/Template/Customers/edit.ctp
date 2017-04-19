<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" >
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Xóa Khách Hàng Này'),
                ['action' => 'delete', $customer->ID],
                ['confirm' => __('Có Muốn Xóa # {0}?', $customer->customer_name)]
            )
        ?></li>
    </ul>
</nav>
<div class="customers form large-9 medium-8 columns content">
    <?= $this->Form->create($customer) ?>
    <fieldset>
        <legend><?= __('CHỈNH SỬA THÔNG TIN KHÁCH HÀNG') ?></legend>
        <?php
            echo $this->Form->control('customer_name',['label' => 'Tên Khách Hàng']);
            echo $this->Form->control('area_id', ['options' => $areas, 'label' => 'Khu vực']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Xác Nhận')) ?>
    <?= $this->Form->end() ?>
</div>
