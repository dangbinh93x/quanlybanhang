<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns">
    <br>
    <div class="col-sm-4"><?= $this->Html->link(__('Thêm Sản Phẩm'), ['action' => 'add'], ['class' => 'button']) ?></div>
</nav>

<div class="products index large-9 medium-8 columns content">
    <h3><?= __('Sản Phẩm') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('ID') ?></th>
                <th scope="col"><?= $this->Paginator->sort('product_name','Tên Sản Phẩm') ?></th>
                <th scope="col"><?= $this->Paginator->sort('product_price','Đơn Giá') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($products as $product): ?>
            <tr>
                <td><?= $this->Number->format($product->ID) ?></td>
                <td><?= $this->Html->link(__($product->product_name), ['action' => 'view', $product->ID]) ?></td>
                <td><?= $this->Number->format($product->product_price) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Sửa'), ['action' => 'edit', $product->ID]) ?>
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
