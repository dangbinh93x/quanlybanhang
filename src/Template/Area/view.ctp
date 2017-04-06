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
        <li><?= $this->Html->link(__('List Area'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Area'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Customer'), ['controller' => 'Customer', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Customer'), ['controller' => 'Customer', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="area view large-9 medium-8 columns content">
    <h3><?= h($area->ID) ?></h3>
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
        <h4><?= __('Related Customer') ?></h4>
        <?php if (!empty($area->customer)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('ID') ?></th>
                <th scope="col"><?= __('Customer Name') ?></th>
                <th scope="col"><?= __('Area Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($area->customer as $customer): ?>
            <tr>
                <td><?= h($customer->ID) ?></td>
                <td><?= h($customer->customer_name) ?></td>
                <td><?= h($customer->area_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Customer', 'action' => 'view', $customer->ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Customer', 'action' => 'edit', $customer->ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Customer', 'action' => 'delete', $customer->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $customer->ID)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
