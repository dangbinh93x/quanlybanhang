<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns">
    <br>
    <div class="col-sm-4"><?= $this->Html->link(__('Sửa Khách hàng'), ['action' => 'edit',$customer->ID], ['class' => 'button']) ?></div>
</nav>
<div class="customers view large-9 medium-8 columns content">
    <h3><?= h($customer->customer_name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tên Khách Hàng') ?></th>
            <td><?= h($customer->customer_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Địa chỉ') ?></th>
            <td><?= $customer->has('area') ? $this->Html->link($customer->area->area_name, ['controller' => 'Areas', 'action' => 'view', $customer->area->ID]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($customer->ID) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Các Hóa Đơn Liên Quan') ?></h4>
        <?php if (!empty($customer->invoices)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('STT') ?></th>
                <th scope="col"><?= __('Tên Khách Hàng') ?></th>
                <th scope="col"><?= __('Sản Phẩm') ?></th>
                <th scope="col"><?= __('Số Lượng') ?></th>
                <th scope="col"><?= __('Chiết Khấu') ?></th>
                <th scope="col"><?= __('Thành Tiền') ?></th>
                <th scope="col"><?= __('Thời Gian giao hàng') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($customer->invoices as $invoices): ?>
            <tr>
                <td><?= $this->Html->link(__($invoices->ID), ['controller' => 'Invoices', 'action' => 'view', $invoices->ID])  ?></td>
                <td><?= h($customer->customer_name) ?></td>
                <td><?= h($invoices->product->product_name) ?></td>
                <td><?= h($invoices->amount) ?></td>
                <td><?= h($invoices->discount) ?></td>
                <td><?= h($invoices->total) ?></td>
                <td><?= h($invoices->order_time) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Sửa'), ['controller' => 'Invoices', 'action' => 'edit', $invoices->ID]) ?>
                    <?= $this->Form->postLink(__('Xóa'), ['controller' => 'Invoices', 'action' => 'delete', $invoices->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $invoices->ID)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
