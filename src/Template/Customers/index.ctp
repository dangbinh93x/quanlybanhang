<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns">
    <br>
    <div class="col-sm-4"><?= $this->Html->link(__('Thêm Khách hàng'), ['action' => 'add'], ['class' => 'button']) ?></div>
</nav>

<div class="customers index large-9 medium-8 columns content">
    <h3><?= __('Customers') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('customer_name','Tên Khách Hàng') ?></th>
                <th scope="col"><?= $this->Paginator->sort('area_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($customers as $customer): ?>
            <tr>
                <td><?= $this->Number->format($customer->ID) ?></td>
                <td><?= $this->Html->link(__($customer->customer_name), ['action' => 'view', $customer->ID]) ?></td>
                <td><?= $customer->has('area') ? $this->Html->link($customer->area->area_name, ['controller' => 'Areas', 'action' => 'view', $customer->area->ID]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Sửa'), ['action' => 'edit', $customer->ID]) ?>
                </td>

            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Trang {{page}} of {{pages}}, Hiển thị ra {{current}} Khách Hàng(s) của {{count}} tổng Khách Hàng')]) ?></p>
    </div>
</div>
