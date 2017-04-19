<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns">
    <br>
    <div class="col-sm-4"><?= $this->Html->link(__('Thêm Hóa Đơn'), ['action' => 'add'], ['class' => 'button']) ?></div>
</nav>

<div class="invoices index large-9 medium-8 columns content">
    <h3><?= __('Hóa đơn') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('customer_id','Khách Hàng') ?></th>
                <th scope="col"><?= $this->Paginator->sort('product_id','Sản Phẩm') ?></th>
                <th scope="col"><?= $this->Paginator->sort('amount','Số Lượng') ?></th>
                <th scope="col"><?= $this->Paginator->sort('discount','Chiết Khấu') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total', 'Thành Tiền') ?></th>
                <th scope="col"><?= $this->Paginator->sort('order_time','Thời gian giao hàng') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($invoices as $invoice): ?>
            <tr>
                <td><?= $this->Number->format($invoice->ID) ?></td>
                <td><?= $invoice->has('customer') ? $this->Html->link($invoice->customer->customer_name, ['controller' => 'Customers', 'action' => 'view', $invoice->customer->ID]) : '' ?></td>
                <td><?= $invoice->has('product') ? $this->Html->link($invoice->product->product_name, ['controller' => 'Products', 'action' => 'view', $invoice->product->ID]) : '' ?></td>
                <td><?= $this->Number->format($invoice->amount) ?></td>
                <td><?= $this->Number->format($invoice->discount) ?></td>
                <td><?= $this->Number->format($invoice->total) ?></td>
                <td><?= h($invoice->order_time) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Chi Tiết'), ['action' => 'view', $invoice->ID]) ?>
                    <?= $this->Html->link(__('Sửa'), ['action' => 'edit', $invoice->ID]) ?>
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
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
