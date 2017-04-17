<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="areas index large-9 medium-8 columns content">
    <h3><?= __('Khu Vực') ?></h3>
        <div class="col-sm-4"><?= $this->Html->link(__('Thêm Khu Vực'), ['action' => 'add'], ['class' => 'button']) ?></div>
    <table cellpadding="0" cellspacing="0">
        <thead>
        <tr>
            <th scope="col"><?= $this->Paginator->sort('ID', 'STT') ?></th>
            <th scope="col"><?= $this->Paginator->sort('area_name', 'Tên Khu Vực') ?></th>
            <th scope="col" class="actions"><?= __('Actions') ?></th>
            <th scope="col" class="actions"><?= __('Xóa') ?></th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($areas as $area): ?>
            <tr>
                <td><?= $this->Number->format($area->ID) ?></td>
                <td><?= $this->Html->link(__($area->area_name), ['action' => 'view', $area->ID]) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Sửa'), ['action' => 'edit', $area->ID]) ?>
                </td>
                <td class="actions">
                    <?= $this->Form->postLink(__('Xóa'), ['action' => 'delete', $area->ID], ['confirm' => __('Có Muốn Xóa {0}?', $area->area_name)]) ?>
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
