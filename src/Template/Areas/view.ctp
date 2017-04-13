<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Area'), ['action' => 'edit', $area->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Area'), ['action' => 'delete', $area->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $area->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Areas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Area'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customers'), ['controller' => 'Customers', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customers', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="areas view large-9 medium-8 columns content">
    <h3><?= h($area->area_name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Area Name') ?></th>
            <td><?= h($area->area_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($area->ID) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Khách Hàng trong '.$area->area_name) ?></h4>
        <?php if (!empty($area->customers)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('ID') ?></th>
                <th scope="col"><?= __('Tên Khách Hàng') ?></th>
                <th scope="col" class="actions"><?= __('Sửa Khách Hàng') ?></th>
                <th scope="col" class="actions"><?= __('Xóa Khách Hàng') ?></th>
            </tr>
            <?php foreach ($area->customers as $customers): ?>
            <tr>
                <td><?= h($customers->ID) ?></td>

                <td><?= $this->Html->link(__($customers->customer_name), ['controller' => 'Customers', 'action' => 'view', $customers->ID]) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Sửa '), ['controller' => 'Customers', 'action' => 'edit', $customers->ID]) ?>
                </td>
                <td>
                    <?= $this->Form->postLink(__('Xóa'), ['controller' => 'Customers', 'action' => 'delete', $customers->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $customers->ID)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
