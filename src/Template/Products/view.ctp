<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns">
    <br>
    <div class="col-sm-4"><?= $this->Html->link(__('Trở Về'), ['action' => 'index'], ['class' => 'button']) ?></div>
</nav>

<div class="products view large-9 medium-8 columns content">
    <h3><?= h($product->product_name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Tên Sản Phẩm') ?></th>
            <td><?= h($product->product_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('ID') ?></th>
            <td><?= $this->Number->format($product->ID) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Đơn Giá') ?></th>
            <td><?= $this->Number->format($product->product_price) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Invoices') ?></h4>
        <?php if (!empty($product->invoices)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('ID') ?></th>
                <th scope="col"><?= __('Khách Hàng') ?></th>
                <th scope="col"><?= __('Sản Phẩm') ?></th>
                <th scope="col"><?= __('Số Lượng') ?></th>
                <th scope="col"><?= __('Chiết Khấu') ?></th>
                <th scope="col"><?= __('Thành Tiền') ?></th>
                <th scope="col"><?= __('Thời gian giao hàng') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($product->invoices as $invoices): ?>
            <tr>
                <td><?= h($invoices->ID) ?></td>
                <td><?= h($invoices->customer->customer_name) ?></td>
                <td><?= h($product->product_name) ?></td>
                <td><?= h($invoices->amount) ?></td>
                <td><?= h($invoices->discount) ?></td>
                <td><?= h($invoices->total) ?></td>
                <td><?= h($invoices->order_time) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Xem'), ['controller' => 'Invoices', 'action' => 'view', $invoices->ID]) ?>
                    <?= $this->Html->link(__('Sửa'), ['controller' => 'Invoices', 'action' => 'edit', $invoices->ID]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
