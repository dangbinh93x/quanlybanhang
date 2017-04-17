<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns">
    <br>
    <div class="col-sm-4"><?= $this->Html->link(__('Trở về'), ['action' => 'index'], ['class' => 'button']) ?></div>
</nav>

<div class="areas view large-9 medium-8 columns content">

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
                    <?= $this->Form->postLink(__('Xóa'), ['controller' => 'Customers', 'action' => 'delete', $customers->ID], ['confirm' => __('Có muốn xóa khác hàng # {0}?', $customers->customer_name)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
